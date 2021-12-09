<?php

namespace App\Http\Livewire\Modals;

use LivewireUI\Modal\ModalComponent;

class ShareThread extends ModalComponent
{
    public int $threadId;
    public string $shareMessage;

    public function mount($threadId, $shareMessage = "Suka dengan diskusi ini? Bagikan yuk!")
    {
        $this->threadId = $threadId;
        $this->shareMessage = $shareMessage;
    }

    public function render()
    {
        return view('livewire.modals.share-thread');
    }

    public function getShareURL()
    {
        return route('shareThread', ['id' => $this->threadId]);
    }

    public function urlencodeSharer($link)
    {
        return $link . urlencode($this->getShareURL());
    }
}
