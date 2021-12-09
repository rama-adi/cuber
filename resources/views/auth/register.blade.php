<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
            </a>
        </x-slot>

        <x-slot name="sidebar">
            <div class="p-4 pt-8 space-y-4">
                <h1 class="text-2xl inline-flex space-x-2 text-white">
                    <span>👋</span>
                    <span class="font-semibold">Selamat datang di CUBER!</span>
                </h1>
                <p class="text-white text-sm">CUBER adalah komunitas support-group dimana kalian dapat menceritakan
                    permasalahan kalian secara gratis dan anonim. Yuk bergabung bersama kita!</p>
            </div>
        </x-slot>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <!-- Name -->
            <div class="space-y-1">
                <x-label for="name" value="Username"/>

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                         autofocus/>

                <x-form-help>Sangat disarankan untuk menggunakan username yang belum pernah anda gunakan untuk menjaga
                    anonimitas
                </x-form-help>
            </div>

            <!-- Email Address -->
            <div class="space-y-1">
                <x-label for="email" :value="__('Email')"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required/>
            </div>

            <div class="md:grid grid-cols-2 md:space-x-2 space-y-4 md:space-y-0">
                <div class="space-y-1">
                    <x-label for="password" value="Kata Sandi"/>

                    <x-input id="password" class="block mt-1 w-full"
                             type="password"
                             name="password"
                             required autocomplete="new-password"/>
                </div>

                <!-- Confirm Password -->
                <div class="space-y-1">
                    <x-label for="password_confirmation" value="Konfirmasi sandi"/>

                    <x-input id="password_confirmation" class="block mt-1 w-full"
                             type="password"
                             name="password_confirmation" required/>
                </div>
            </div>
            <!-- Password -->

            <!-- CAPTCHA -->
            <div class="space-y-1">
                <x-label for="password_confirmation" :value="__('Selesaikan CAPTCHA')"/>
                <x-captcha :isLivewire="false"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    Sudah punya akun?
                </a>

                <x-button class="ml-4">
                    Daftar sekarang!
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
