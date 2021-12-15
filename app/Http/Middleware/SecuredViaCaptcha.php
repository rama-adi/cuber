<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class SecuredViaCaptcha
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->guest() && $this->captchaIsStale()) {
            return redirect(route('captchablock.show') . "?returnurl=" . urlencode($request->fullUrl()));
        }
        return $next($request);
    }

    public function captchaIsStale(): bool
    {
        if (!session()->exists('c-time')) return true;
        return now()->gt(
            Carbon::parse(session()->get('c-time'))
        );
    }
}
