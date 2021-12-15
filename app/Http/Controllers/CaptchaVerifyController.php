<?php

namespace App\Http\Controllers;

use App\Rules\HcaptchaSuccess;
use Illuminate\Http\Request;

class CaptchaVerifyController extends Controller
{
    public function show(Request $request)
    {
        return view('captcha-page')->with([
            'returnUrl' => !filled(urldecode($request->get('returnurl'))) ? route('dashboard') : urldecode($request->get('returnurl'))
        ]);
    }

    public function validateCaptcha(Request $request)
    {
        $request->validate([
            'h-captcha-response' => ['required', 'min:1', new HcaptchaSuccess()],
            'returnUrl' => 'required'
        ]);

        session()->put('c-time', now()->addHour(1));

        return redirect($request->get('returnUrl'));
    }
}
