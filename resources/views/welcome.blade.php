<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased h-full">
<div class="min-h-full">
    <!--
      When the mobile menu is open, add `overflow-hidden` to the `body` element to prevent double scrollbars

      Menu open: "fixed inset-0 z-40 overflow-y-auto", Menu closed: ""
    -->
    <header class="bg-white shadow-sm lg:static lg:overflow-y-visible">
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
                            class="-mx-2 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                            aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!--
                          Icon when menu is closed.

                          Heroicon name: outline/menu

                          Menu open: "hidden", Menu closed: "block"
                        -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                        <!--
                          Icon when menu is open.

                          Heroicon name: outline/x

                          Menu open: "block", Menu closed: "hidden"
                        -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-4">
                    <a href="#" class="text-sm font-medium text-gray-900 hover:underline">
                        Profilmu
                    </a>
                    <a href="#"
                       class="ml-5 flex-shrink-0 bg-white rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </a>


                    <a href="#"
                       class="ml-6 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        New Post
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <nav class="lg:hidden" aria-label="Global">
            <div class="max-w-3xl mx-auto px-2 pt-2 pb-3 space-y-1 sm:px-4">
                <!-- Current: "bg-gray-100 text-gray-900", Default: "hover:bg-gray-50" -->
                <a href="#" aria-current="page"
                   class="bg-gray-100 text-gray-900 block rounded-md py-2 px-3 text-base font-medium">Home</a>

                <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Popular</a>

                <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Communities</a>

                <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium">Trending</a>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <div class="max-w-3xl mx-auto px-4 flex items-center sm:px-6">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full"
                             src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                             alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-gray-800">Chelsea Hagon</div>
                        <div class="text-sm font-medium text-gray-500">chelseahagon@example.com</div>
                    </div>
                    <button type="button"
                            class="ml-auto flex-shrink-0 bg-white rounded-full p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </button>
                </div>
                <div class="mt-3 max-w-3xl mx-auto px-2 space-y-1 sm:px-4">
                    <a href="#"
                       class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Your
                        Profile</a>

                    <a href="#"
                       class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Settings</a>

                    <a href="#"
                       class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Sign
                        out</a>
                </div>
            </div>

            <div class="mt-6 max-w-3xl mx-auto px-4 sm:px-6">
                <a href="#"
                   class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700">
                    New Post
                </a>

                <div class="mt-6 flex justify-center">
                    <a href="#" class="text-base font-medium text-gray-900 hover:underline">
                        Go Premium
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 lg:grid lg:grid-cols-12 lg:gap-8">
            <div class="hidden lg:block lg:col-span-3 xl:col-span-2">
                <nav aria-label="Sidebar" class="sticky top-4 divide-y divide-gray-300">
                    <div class="pb-8 space-y-1">
                        <!-- Current: "bg-gray-200 text-gray-900", Default: "text-gray-600 hover:bg-gray-50" -->
                        <a href="#"
                           class="bg-gray-200 text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md"
                           aria-current="page">
                            <!-- Heroicon name: outline/home -->
                            <x-heroicon-s-home class="text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"/>
                            <span class="truncate">
                                Beranda
                            </span>
                        </a>

                        <a href="#"
                           class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md"
                           aria-current="page">
                            <!-- Heroicon name: outline/home -->
                            <x-heroicon-s-shield-exclamation
                                class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"/>
                            <span class="truncate">
                                Peraturan
                            </span>
                        </a>

                        <a href="#"
                           class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md"
                           aria-current="page">
                            <!-- Heroicon name: outline/home -->
                            <x-heroicon-s-chat
                                class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"/>
                            <span class="truncate">
                                Jasa Konseling
                            </span>
                        </a>

                        <a href="#"
                           class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md"
                           aria-current="page">
                            <!-- Heroicon name: outline/home -->
                            <x-heroicon-s-shopping-cart
                                class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"/>
                            <span class="truncate">
                                Produk
                            </span>
                        </a>
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
            <main class="lg:col-span-9 xl:col-span-7">
                <div class="px-4 sm:px-0">
                    <div>
                        <nav class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200" aria-label="Tabs">
                            <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
                            <a href="#" aria-current="page"
                               class="text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                                <span>Acak</span>
                                <span aria-hidden="true" class="bg-blue-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                            </a>

                            <a href="#"
                               class="text-gray-500 hover:text-gray-700 rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                                <span>Terbaru</span>
                                <span aria-hidden="true"
                                      class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="mb-4">
                        <x-hero-homepage/>
                    </div>
                    <h1 class="sr-only">Recent questions</h1>
                    <ul role="list" class="space-y-4">
                        @foreach(\App\Models\Thread::with('user')->get() as $thread)
                            @if($loop->index > 0 && $loop->index % 5 == 0)
                                <x-promo-muud />
                            @endif
                            <li class="bg-white px-4 py-6 shadow sm:p-6 sm:rounded-lg">
                                <x-thread-card :thread="$thread"/>
                            </li>
                    @endforeach

                    <!-- More questions... -->
                    </ul>
                </div>
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
                                        <img src="https://via.placeholder.com/1080x1080" alt="" class="object-cover">
                                    </div>
                                    <div>
                                        <p class="text-md font-medium text-gray-900">
                                            Nama Produk
                                        </p>
                                        <p class="text-sm text-gray-600">
                                            Deskripsi singkat dari MUUD
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <a href="#"
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
</body>
</html>
