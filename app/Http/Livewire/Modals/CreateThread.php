<?php

namespace App\Http\Livewire\Modals;

use App\Models\Thread;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateThread extends ModalComponent
{
    use AuthorizesRequests;


    public function render()
    {
        $this->authorize('create', Thread::class);
        return view('livewire.modals.create-thread');
    }
}
