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
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                    <!-- Heroicon name: solid/search -->
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <input id="search" name="search"
                                       class="block w-full bg-white border border-gray-300 rounded-md py-2 pl-10 pr-3 text-sm placeholder-gray-500 focus:outline-none focus:text-gray-900 focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                       placeholder="Search" type="search">
                            </div>
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
                        Go Premium
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
                            <svg class="text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            <span class="truncate">
                                Home
                            </span>
                        </a>

                        <a href="#"
                           class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/fire -->
                            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"/>
                            </svg>
                            <span class="truncate">
                Popular
              </span>
                        </a>

                        <a href="#"
                           class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/user-group -->
                            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span class="truncate">
                Communities
              </span>
                        </a>

                        <a href="#"
                           class="text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md">
                            <!-- Heroicon name: outline/trending-up -->
                            <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                            </svg>
                            <span class="truncate">
                Trending
              </span>
                        </a>
                    </div>

                </nav>
            </div>
            <main class="lg:col-span-9 xl:col-span-7">
                <div class="px-4 sm:px-0">
                    <div class="sm:hidden">
                        <label for="question-tabs" class="sr-only">Select a tab</label>
                        <select id="question-tabs"
                                class="block w-full rounded-md border-gray-300 text-base font-medium text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option selected>Recent</option>

                            <option>Most Liked</option>

                            <option>Most Answers</option>
                        </select>
                    </div>
                    <div class="hidden sm:block">
                        <nav class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200" aria-label="Tabs">
                            <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
                            <a href="#" aria-current="page"
                               class="text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                                <span>Recent</span>
                                <span aria-hidden="true" class="bg-blue-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                            </a>

                            <a href="#"
                               class="text-gray-500 hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                                <span>Most Liked</span>
                                <span aria-hidden="true"
                                      class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                            </a>

                            <a href="#"
                               class="text-gray-500 hover:text-gray-700 rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                                <span>Most Answers</span>
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
                            <li class="bg-white px-4 py-6 shadow sm:p-6 sm:rounded-lg">
                                <x-thread-card :thread="$thread" />
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
                                <h2 id="who-to-follow-heading" class="text-base font-medium text-gray-900">
                                    Who to follow
                                </h2>
                                <div class="mt-6 flow-root">
                                    <ul role="list" class="-my-4 divide-y divide-gray-200">
                                        <li class="flex items-center py-4 space-x-3">
                                            <div class="flex-shrink-0">
                                                <img class="h-8 w-8 rounded-full"
                                                     src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                     alt="">
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <p class="text-sm font-medium text-gray-900">
                                                    <a href="#">Leonard Krasner</a>
                                                </p>
                                                <p class="text-sm text-gray-500">
                                                    <a href="#">@leonardkrasner</a>
                                                </p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <button type="button"
                                                        class="inline-flex items-center px-3 py-0.5 rounded-full bg-blue-50 text-sm font-medium text-blue-700 hover:bg-blue-100">
                                                    <!-- Heroicon name: solid/plus-sm -->
                                                    <svg class="-ml-1 mr-0.5 h-5 w-5 text-blue-400"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                         fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                              d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                              clip-rule="evenodd"/>
                                                    </svg>
                                                    <span>
                            Follow
                          </span>
                                                </button>
                                            </div>
                                        </li>

                                        <!-- More people... -->
                                    </ul>
                                </div>
                                <div class="mt-6">
                                    <a href="#"
                                       class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                        View all
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section aria-labelledby="trending-heading">
                        <div class="bg-white rounded-lg shadow">
                            <div class="p-6">
                                <h2 id="trending-heading" class="text-base font-medium text-gray-900">
                                    Trending
                                </h2>
                                <div class="mt-6 flow-root">
                                    <ul role="list" class="-my-4 divide-y divide-gray-200">
                                        <li class="flex py-4 space-x-3">
                                            <div class="flex-shrink-0">
                                                <img class="h-8 w-8 rounded-full"
                                                     src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                     alt="Floyd Miles">
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <p class="text-sm text-gray-800">What books do you have on your
                                                    bookshelf just to look smarter than you actually are?</p>
                                                <div class="mt-2 flex">
                          <span class="inline-flex items-center text-sm">
                            <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                              <!-- Heroicon name: solid/chat-alt -->
                              <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                   fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                      clip-rule="evenodd"/>
                              </svg>
                              <span class="font-medium text-gray-900">291</span>
                            </button>
                          </span>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- More posts... -->
                                    </ul>
                                </div>
                                <div class="mt-6">
                                    <a href="#"
                                       class="w-full block text-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                        View all
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
