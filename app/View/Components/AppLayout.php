<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{


    /**
     * @param string $ogTitle
     * @param string $ogDescription
     */
    public function __construct(
        public string $ogTitle = "Cuber - Curhat bareng online!",
        public string $ogDescription = "Yuk, curhat bareng dan dapatkan konseling secara anonim di cuber. Gratis!")
    {
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
