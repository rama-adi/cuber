<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Notification extends ModalComponent
{
    public function render()
    {
        return view('livewire.modals.notification');
    }
}
