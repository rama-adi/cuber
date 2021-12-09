<?php

namespace App\Http\Livewire\Modals;

use App\Models\Thread;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ReportThread extends ModalComponent
{
    public Thread $thread;

    public function __mount(int $threadId)
    {
        $this->thread = Thread::find($threadId);
    }

    public function render()
    {
        return view('livewire.modals.report-thread');
    }
}
