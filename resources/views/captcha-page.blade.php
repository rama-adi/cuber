<x-guest-layout>
    <div class="h-screen w-screen flex items-center justify-center">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6 max-w-xl space-y-2">
                <h1 class="text-2xl font-semibold">Untuk mengamankan dari bot, silakan selesaikan captcha dibawah</h1>
                <form action="{{route('captchablock.validate')}}" class="space-y-2" method="POST">
                    @csrf
                    <x-captcha :isLivewire="false"></x-captcha>
                    <input type="hidden" name="returnUrl" value="{{$returnUrl}}">
                    <x-button>Verifikasi saya</x-button>
                </form>
                <small class="text-xs text-gray-500">&copy; Cuber</small>
            </div>
        </div>

    </div>
</x-guest-layout>
