<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ImageLightbox extends ModalComponent
{
    public string $imageUrl;

    public function mount(string $image_url)
    {
        $this->imageUrl = $image_url;

    }

    public function render()
    {
        return view('livewire.modals.image-lightbox');
    }
}
