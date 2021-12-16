<?php

namespace App\Http\Livewire\Fragments\Thread;

use App\Events\ThreadReplyPosted;
use App\Models\Thread;
use App\Models\ThreadReply;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class Reply extends Component
{
    use WithPagination;

    public Thread $thread;
    public array $replies = [];
    public string $commentText = "";
    public string $replyCaptchaResponse = "";


    protected function getListeners()
    {
        return [
            "echo:ThreadReply.{$this->thread->id},ThreadReplyPosted" => 'showReplyData',
        ];
    }

    public function showReplyData(array $reply)
    {
        $replyData = $reply['reply'];

        $this->replies = collect($this->replies)
            ->concat([[
                'reply_id' => $replyData['reply_id'],
                'username' => $replyData['username'],
                'user_type' => $replyData['user_type'],
                'created_at' => $replyData['created_at'],
                'content' => $replyData['content'],
            ]])
            ->unique('reply_id')
            ->toArray();
    }

    public function mount(Thread $thread)
    {
        $this->thread = $thread;
        $this->replies = $this->getReplies();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.fragments.thread.reply');
    }


    public function getReplies(): array
    {
        return $this
            ->thread
            ->threadReplies()
            ->with('user')
            ->orderBy('created_at', 'asc')
            ->get()
            ->map(function ($iteration) {
                return [
                    'reply_id' => $iteration->id,
                    'username' => $iteration->user->name,
                    'user_type' => $iteration->user->user_type,
                    'created_at' => $iteration->created_at->diffForHumans(),
                    'content' => $iteration->content
                ];
            })
            ->toArray();
    }

    public function sendReply()
    {
        Gate::authorize('create', ThreadReply::class);

        $this->validate([
            'commentText' => ['required', 'min:1', 'max:500'],
        ]);

        if ($this->thread->enable_comments || auth()->user()->user_type === "ADMIN") {
            $reply = ThreadReply::create([
                'thread_id' => $this->thread->id,
                'user_id' => auth()->user()->id,
                'content' => $this->commentText
            ]);

            broadcast(
                new ThreadReplyPosted([
                    'reply_id' => $reply->id,
                    'thread_id' => $reply->thread_id,
                    'username' => $reply->user->name,
                    'user_type' => $reply->user->user_type,
                    'created_at' => $reply->created_at->diffForHumans(),
                    'content' => $reply->content
                ])
            );
        }


        $this->commentText = "";
    }
}
