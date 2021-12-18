<?php

namespace App\Http\Livewire\Fragments;

use App\Models\Thread;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class Timeline extends Component
{
    use WithPagination;

    public bool $isRandomized = false;
    public ?int $categoryId = null;

    protected function getThreads(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        if ($this->categoryId)
            return Thread::with(['user', 'threadCategory', 'likes'])
                ->where('is_pinned', false)
                ->where('thread_category_id', $this->categoryId)
                ->inRandomOrder()
                ->paginate(6);

        if ($this->isRandomized) {
            return Thread::with(['user', 'threadCategory', 'likes'])->where('is_pinned', false)->inRandomOrder()->paginate(6);
        } else {
            return Thread::with(['user', 'threadCategory', 'likes'])->where('is_pinned', false)->orderBy('created_at', 'desc')->paginate(6);
        }
    }

    protected function getPinnedThreads(): Collection
    {
        if ($this->categoryId)
            return Thread::with(['user', 'threadCategory', 'likes'])
                ->where('is_pinned', true)
                ->where('thread_category_id', $this->categoryId)
                ->orderBy('created_at')
                ->get();

        return Thread::with(['user', 'threadCategory', 'likes'])
            ->where('is_pinned', true)
            ->orderBy('created_at')
            ->get();
    }

    public function render()
    {
        return view('livewire.fragments.timeline')->with([
            'threads' => $this->getThreads(),
            'pinned_threads' => $this->getPinnedThreads()
        ]);
    }
}
