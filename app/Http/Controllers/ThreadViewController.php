<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadViewController extends Controller
{
    public function __invoke(Request $request, Thread $id, string $slug)
    {
        return view('view-thread')->with([
            'thread' => $id,
            'sharePopup' => (bool)$request->get('sharePopup') ?? false
        ]);
    }
}
