@props(['fieldName' => '', 'isLivewire' => true])
@if($isLivewire)
    <div
        x-data="{}"
        x-init="hcaptcha.render('h-captcha-{{$fieldName}}', {sitekey: '{{env('HCAPTCHA_SITE_KEY')}}', callback: (e) => @this.set('{{$fieldName}}', e)})"
        class="space-y-2">
        <span class="text-sm font-medium leading-4 text-gray-700">
            CAPTCHA (anti-bot)
            <sup class="font-medium text-danger-700">*</sup>
        </span>
        <div wire:ignore id="h-captcha-{{$fieldName}}"></div>
        <x-input-error :for="$fieldName"/>
        <x-form-help>Untuk menjaga keamanan diskusi CUBER, selesaikan CAPTCHA diatas
            untuk membuktikan bahwa anda bukan robot
        </x-form-help>
    </div>
    <script>
        window.addEventListener('newReply', function () {
            hcaptcha.reset();
        });
    </script>
@else
    <div class="h-captcha" data-sitekey="{{env('HCAPTCHA_SITE_KEY')}}"></div>
@endif
