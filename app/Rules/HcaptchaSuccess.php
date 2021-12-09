<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;

class HcaptchaSuccess implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $captchaResp = Http::asForm()->post('https://hcaptcha.com/siteverify', [
            'response' => $value,
            'secret' => env('HCAPTCHA_SECRET')
        ])->object();

        return $captchaResp->success;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Gagal memverifikasi respon Captcha Anda. Silakan refresh browser dan ulang lagi.';
    }
}
