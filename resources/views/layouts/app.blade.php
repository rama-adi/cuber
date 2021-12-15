<!DOCTYPE html>
<html lang="{{ \Illuminate\Support\Str::of(app()->getLocale())->lower()->kebab() }}" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Cuber - Curhat bareng online!">
    <meta property="og:site_name" content="Cuber">
    <meta property="og:url" content="https://curhat.website">
    <meta property="og:description" content="Yuk, curhat bareng dan dapatkan konseling secara anonim di cuber. Gratis!">
    <meta property="og:type" content="website">
    <meta property="og:image"
          content="https://storage.googleapis.com/cdn.curhat.website/static-web-assets/img/clio-2.png">

    <title>{{config('app.name')}}</title>


    <!-- Styles -->
    <style>[x-cloak] {
            display: none !important;
        }</style>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://js.hcaptcha.com/1/api.js?hl=id" async defer></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased h-full" x-data="{showMobileMenu: false}" :class=" showMobileMenu ? 'overflow-hidden' : ''">
<div class="min-h-full">
    <!--
      When the mobile menu is open, add `overflow-hidden` to the `body` element to prevent double scrollbars

      Menu open: "fixed inset-0 z-40 overflow-y-auto", Menu closed: ""
    -->
    <header class="bg-white shadow-sm lg:static lg:overflow-y-visible"
            :class="showMobileMenu ? 'fixed inset-0 z-40 overflow-y-auto' : ''">
        <div class="max-w-9xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative flex justify-between xl:grid xl:grid-cols-12 lg:gap-8">
                <div class="flex md:absolute md:left-0 md:inset-y-0 lg:static xl:col-span-2">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="#">
                            <span class="sr-only">CUBER logo</span>
                            <span aria-hidden="true" class="text-2xl font-bold">CUBER</span>
                        </a>
                    </div>
                </div>
                <div class="min-w-0 flex-1 md:px-8 lg:px-0 xl:col-span-6">
                    <div class="flex items-center px-6 py-4 md:max-w-3xl md:mx-auto lg:max-w-none lg:mx-0 xl:px-0">
                        <div class="w-full">
                            <!-- Placeholder -->
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="flex items-center md:absolute md:right-0 md:inset-y-0 lg:hidden">
                    <!-- Mobile menu button -->
                    <button type="button"
                            @click="showMobileMenu = !showMobileMenu"
                            class="-mx-2 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                            aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!--
                          Icon when menu is closed.

                          Heroicon name: outline/menu

                          Menu open: "hidden", Menu closed: "block"
                        -->
                        <svg :class="showMobileMenu ? 'hidden' : ''" class="block h-6 w-6"
                             xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <!--
                          Icon when menu is open.

                          Heroicon name: outline/x

                          Menu open: "block", Menu closed: "hidden"
                        -->
                        <svg :class="showMobileMenu ? '' : 'hidden'" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-4">
                    @guest
                        <div class="inline-flex space-x-4 justify-center items-center">
                            <a href="{{route('login')}}"
                               class="text-sm font-medium text-gray-600 hover:text-gray-800 hover:underline">
                                Masuk
                            </a>
                            <a href="{{route('register')}}"
                               class="ml-6 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Daftar sekarang!
                            </a>
                        </div>
                    @endguest
                    @auth
                        <a href="{{route('dashboard')}}" class="text-sm font-medium text-gray-900 hover:underline">
                            Profilmu
                        </a>
                        <button
                            onclick="Livewire.emit('openModal', 'modals.notification')"
                            class="ml-5 flex-shrink-0 bg-white rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <span class="sr-only">Lihat notifikasi</span>
                            <!-- Heroicon name: outline/bell -->
                            <x-heroicon-o-bell class="h-6 w-6"/>
                        </button>


                        <button onclick="Livewire.emit('openModal', 'modals.create-thread')"
                                class="ml-6 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Diskusi baru
                        </button>
                    @endauth
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <nav x-show="showMobileMenu" class="lg:hidden" aria-label="Global">
            <div class="max-w-3xl mx-auto px-2 pt-2 pb-3 space-y-1 sm:px-4">
                <!-- Current: "bg-gray-100 text-gray-900", Default: "hover:bg-gray-50" -->
                <a href="#" aria-current="page"
                   class="bg-gray-100 text-gray-900 block rounded-md py-2 px-3 text-base font-medium">Beranda</a>

                <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Kategori</a>

                <a href="{{route('rules')}}?fromDropdownMenu"
                   class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Peraturan</a>

                <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Jasa Konseling</a>

                <a href="{{route('sponsored-product')}}"
                   class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Produk</a>
            </div>
            <div class="border-t border-gray-200 pt-4">
                @guest
                    <div class="mt-3 max-w-3xl mx-auto px-2 space-y-1 sm:px-4">
                        <a href="{{route('login')}}"
                           class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Masuk</a>
                        <a href="{{route('register')}}"
                           class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Daftar</a>
                    </div>
                @endguest
                @auth
                    <div class="max-w-3xl mx-auto px-4 flex items-center sm:px-6">
                        <div>
                            <div class="text-base font-medium text-gray-800">{{auth()->user()->name}}</div>
                        </div>
                        <button type="button"
                                onclick="Livewire.emit('openModal', 'modals.notification')"
                                class="ml-auto flex-shrink-0 bg-white rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            <span class="sr-only">Lihat notifikasi</span>
                            <x-heroicon-o-bell class="h-6 w-6"/>
                        </button>
                    </div>
                    <div class="mt-3 max-w-3xl mx-auto px-2 space-y-1 sm:px-4">
                        <a href="{{route('dashboard')}}"
                           class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Profilmu</a>

                        <form method="POST" action="{{route('logout')}}" class="w-full">
                            @csrf
                            <button
                                type="submit"
                                class="w-full block rounded-md text-left py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">
                                Keluar
                            </button>
                        </form>
                    </div>
                    <div class="mt-6 max-w-3xl mx-auto px-4 sm:px-6">
                        <a href="#"
                           class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700">
                            Buat diskusi baru
                        </a>

                    </div>
                @endauth
            </div>
        </nav>
    </header>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="hidden lg:block lg:col-span-3 xl:col-span-2">
                <nav aria-label="Sidebar" class="sticky top-4 divide-y divide-gray-300">
                    <div class="pb-8 space-y-1">

                        <x-nav-item :mobile="false" :href="route('homepage')" :active="Route::is('homepage')"
                                    title="Beranda">
                            <x-slot name="icon">
                                <x-heroicon-s-home class="flex-shrink-0 -ml-1 mr-3 h-6 w-6"/>
                            </x-slot>
                        </x-nav-item>

                        <x-nav-item :mobile="false" :href="route('rules')"
                                    :active="Route::is('rules')" title="Peraturan">
                            <x-slot name="icon">
                                <x-heroicon-s-shield-exclamation
                                    class="flex-shrink-0 -ml-1 mr-3 h-6 w-6"/>
                            </x-slot>
                        </x-nav-item>

                        <x-nav-item :mobile="false" :href="route('counseling.index')"
                                    :active="Route::is('counseling.*')" title="Jasa Konseling">
                            <x-slot name="icon">
                                <x-heroicon-s-chat
                                    class="flex-shrink-0 -ml-1 mr-3 h-6 w-6"/>
                            </x-slot>
                        </x-nav-item>

                        <x-nav-item :mobile="false" :href="route('sponsored-product')"
                                    :active="Route::is('sponsored-product')" title="Belanja Produk">
                            <x-slot name="icon">
                                <x-heroicon-s-shopping-cart
                                    class="flex-shrink-0 -ml-1 mr-3 h-6 w-6"/>
                            </x-slot>
                        </x-nav-item>


                        @auth
                            <form action="{{route('logout')}}" method="POST" class="w-full">
                                @csrf
                                <button type="submit"
                                        class="w-full text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                    <x-heroicon-s-logout
                                        class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"/>
                                    <span class="truncate">Keluar</span>
                                </button>
                            </form>
                        @endauth
                    </div>

                    <div class="pt-10">
                        <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider"
                           id="communities-headline">
                            Jelajahi Kategori
                        </p>
                        <div class="mt-3 space-y-2" aria-labelledby="communities-headline">
                            @foreach(\App\Models\ThreadCategory::all() as $category)
                                <a href="{{route('category.show', ['id' => $category->id, 'name' => \Illuminate\Support\Str::slug( $category->name)])}}"
                                   class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md"
                                   aria-current="page">
                                    <!-- Heroicon name: outline/home -->
                                    <x-heroicon-s-hashtag
                                        class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-1 h-4 w-4"/>
                                    <span class="truncate">
                                        {{$category->name}}
                                    </span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </nav>
            </div>
            <main class="lg:col-span-9 xl:col-span-7 space-y-4">
                {{$slot}}
            </main>
            <aside class="hidden xl:block xl:col-span-3">
                <div class="sticky top-4 space-y-4">
                    <section aria-labelledby="who-to-follow-heading">
                        <div class="bg-white rounded-lg shadow">
                            <div class="p-6">
                                <h2 id="who-to-follow-heading"
                                    class="text-base inline-flex space-x-2 font-medium text-gray-900">
                                    <x-heroicon-o-shopping-bag class="h-5 w-5"/>
                                    <span>MUUD</span>
                                    <span
                                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                      Promosi
                                    </span>
                                </h2>
                                <div class="mt-6 flow-root space-y-4">
                                    <div
                                        class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden">
                                        <img
                                            src="https://cdn.curhat.website/static-web-assets/img/muud/{{rand(1,2)}}.png"
                                            alt="gambar promo muud"
                                            class="object-cover">
                                    </div>
                                    <div>
                                        <p class="text-md font-medium text-gray-900">
                                            Wish in bottle by muud.things
                                        </p>
                                        <p class="text-sm text-gray-600">
                                            Muud, botol yang membawa kebahagiaan dan dapat membuat kamu kembali
                                            bersemangat
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <a href="{{route('sponsored-product')}}"
                                       class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                        Detail Produk
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section aria-labelledby="trending-heading">
                        <div class="bg-white rounded-lg shadow">
                            <div class="p-6">
                                <h2 id="trending-heading" class="text-base font-medium text-gray-900">
                                    Jasa Konseling
                                </h2>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-800">Dapatkan jasa konseling dari tim CUBER, apabila
                                        permasalahanmu belum terjawab!</p>
                                </div>
                                <div class="mt-6">
                                    <a href="#"
                                       class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                        Lihat selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </aside>
        </div>
    </div>
</div>
@livewire('livewire-ui-modal')
@livewireScripts
@stack('scripts')
</body>
</html>
