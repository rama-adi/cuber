<?php

namespace App\View\Components;

use App\Models\Thread;
use Illuminate\View\Component;

class ThreadCard extends Component
{
    public Thread $thread;
    public bool $pinned;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Thread $thread, bool $pinned = false)
    {
        $this->thread = $thread;
        $this->pinned = $pinned;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.thread-card');
    }
}
