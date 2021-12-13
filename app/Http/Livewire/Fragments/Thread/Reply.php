<?php

namespace App\Http\Livewire\Fragments\Thread;

use App\Events\ThreadReplyPosted;
use App\Models\Thread;
use App\Models\ThreadReply;
use App\Rules\HcaptchaSuccess;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class Reply extends Component
{
    use WithPagination;

    public Thread $thread;
    public string $commentText = "";
    public string $replyCaptchaResponse = "";

    //protected $listeners = ['newCommentOnThread' => '$refresh'];

    protected function getListeners()
    {
        return [
            "echo-private:ThreadReply.{$this->thread->id},ThreadReplyPosted" => '$refresh',
        ];
    }

    public function mount(Thread $thread)
    {
        $this->thread = $thread;
    }

    public function outputThread($t)
    {
        dd($t);
    }

    public function render()
    {
        return view('livewire.fragments.thread.reply')->with([
            'replies' => $this->getReplies()
        ]);
    }

    public function getReplies()
    {
        return $this->thread->threadReplies()->with('user')->orderBy('created_at', 'desc')->simplePaginate(10);
    }

    public function sendReply()
    {
        Gate::authorize('create', ThreadReply::class);

        $this->validate([
            'commentText' => ['required', 'min:1', 'max:500'],
            'replyCaptchaResponse' => ['required', new HcaptchaSuccess()]
        ]);

        $reply = ThreadReply::create([
            'thread_id' => $this->thread->id,
            'user_id' => auth()->user()->id,
            'content' => $this->commentText
        ]);

        ThreadReplyPosted::dispatch($reply);
        $this->dispatchBrowserEvent("newReply");

        $this->commentText = "";
    }
}
