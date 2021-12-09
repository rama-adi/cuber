<?php

namespace App\Http\Livewire\Fragments\Thread;

use App\Models\Thread;
use Livewire\Component;

class Show extends Component
{
    public Thread $thread;
    protected $listeners = ['newCommentOnThread' => '$refresh'];

    public function mount(Thread $thread)
    {
        $this->thread = $thread;
    }

    public function render()
    {
        return view('livewire.fragments.thread.show');
    }
}
