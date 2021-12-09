<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadShortlinkRedirectController extends Controller
{
    public function __invoke($id)
    {
        $thread = Thread::findOrFail($id);

        return redirect(
            route('thread.show', ['id' => $thread->id, 'slug' => $thread->slug]),
            301
        );
    }
}
