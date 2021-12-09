<div>
    <div class="rounded-md bg-yellow-50 p-4 mb-6">
        <div class="flex">
            <div class="flex-shrink-0">
                <!-- Heroicon name: solid/exclamation -->
                <x-heroicon-s-exclamation class="h-5 w-5 text-yellow-400"/>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-yellow-800">
                    Perhatian!
                </h3>
                <div class="mt-2 text-sm text-yellow-700">
                    <p>
                        Anda wajib mengikuti <a href="{{route('rules')}}"
                                                class="font-medium underline text-yellow-700 hover:text-yellow-600">
                            peraturan cuber
                        </a> apabila memposting diskusi
                    </p>
                </div>
            </div>
        </div>
    </div>

    <form wire:submit.prevent="create">
        <div x-data="{ widgetID: '' }"
             x-init="widgetID = hcaptcha.render('captcha-newthread', {sitekey: 'd8032f87-dbc1-4003-aeb4-5b645040e7a3', callback: (e) => @this.set('captchaKey', e)})">
            {{$this->form}}
            <div class="my-6">
                <x-captcha fieldName="captchaKey"/>
            </div>
            <div class="w-full flex flex-row-reverse mt-4">
                <button type="submit"
                        class="h-captcha inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Buat diskusi
                    <!-- Heroicon name: solid/mail -->
                    <x-heroicon-o-paper-airplane class="ml-2 -mr-1 h-5 w-5 transform rotate-90"/>
                </button>
            </div>
        </div>
    </form>
</div>
