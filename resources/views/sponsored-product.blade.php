<x-app-layout>
    <div class="space-y-4">
        <header class="mx-auto md:flex md:items-center md:justify-between md:space-x-5">
            <div class="flex items-center space-x-5">
                <div class="flex-shrink-0">
                    <div class="relative">
                        <img class="h-16 w-16 rounded-full"
                             src="https://cf.shopee.co.id/file/fcb6d143e6573aa13620224d34833806_tn"
                             alt="logo muud things">
                        <span class="absolute inset-0 shadow-inner rounded-full" aria-hidden="true"></span>
                    </div>
                </div>
                <div>
                    <h1 class="text-2xl text-gray-900 inline-flex">✨
                        <div class="font-bold">Wish in bottle</div>
                    </h1>
                    <p class="text-sm font-medium text-gray-500">Disponsori oleh <a href="https://goeco.mobi/24qons8"
                                                                                    class="text-gray-900">muud.things</a>
                    </p>
                </div>
            </div>
            <div
                class="mt-6 flex flex-col-reverse justify-stretch space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-x-reverse sm:space-y-0 sm:space-x-3 md:mt-0 md:flex-row md:space-x-3">
                <button type="button"
                        onclick="Livewire.emit('openModal', 'modals.muud-promo-info');"
                        class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                    Dapatkan promo!
                </button>
            </div>
        </header>
        <section class="rounded-md bg-blue-50 p-4">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-lg">📢</span>
                </div>
                <div class="ml-3 flex-1 md:flex md:justify-between">
                    <p class="text-sm text-blue-700">
                        Penawaran khusus untuk pengguna cuber
                    </p>
                    <p class="mt-3 text-sm md:mt-0 md:ml-6">
                        <button onclick="Livewire.emit('openModal', 'modals.muud-promo-info');"
                                class="whitespace-nowrap font-medium text-blue-700 hover:text-blue-600">Detail <span
                                aria-hidden="true">&rarr;</span></button>
                    </p>
                </div>
            </div>
        </section>
        <section aria-labelledby="applicant-information-title">
            <div class="bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h2 id="applicant-information-title" class="text-lg leading-6 font-medium text-gray-900">
                        Detail produk
                    </h2>
                </div>
                <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500 inline-flex space-x-2">
                                <span class="font-regular">🚚</span> <span>Pengiriman</span>
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                KAB. KUDUS - KUDUS KOTA, JAWA TENGAH, ID
                            </dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500 inline-flex space-x-2">
                                <span class="font-regular">📸</span> <span>Foto (Klik foto untuk memperbesar)</span>
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                <ul role="list"
                                    class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                                    <li class="relative">
                                        <div
                                            class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                            <img src="https://cdn.curhat.website/static-web-assets/img/muud/1.png"
                                                 alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                                            <button
                                                onclick="Livewire.emit('openModal', 'modals.image-lightbox', {{json_encode(['image_url' => 'https://cdn.curhat.website/static-web-assets/img/muud/1.png'])}})"
                                                type="button" class="absolute inset-0 focus:outline-none">
                                                <span class="sr-only">Lihat foto pertama</span>
                                            </button>
                                        </div>
                                    </li>

                                    <li class="relative">
                                        <div
                                            class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                                            <img src="https://cdn.curhat.website/static-web-assets/img/muud/2.png"
                                                 alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                                            <button
                                                onclick="Livewire.emit('openModal', 'modals.image-lightbox', {{json_encode(['image_url' => 'https://cdn.curhat.website/static-web-assets/img/muud/2.png'])}})"
                                                type="button" class="absolute inset-0 focus:outline-none">
                                                <span class="sr-only">Lihat foto kedua</span>
                                            </button>
                                        </div>
                                    </li>

                                </ul>

                            </dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500 inline-flex space-x-2">
                                <span class="font-regular">ℹ</span> <span>Tentang</span>
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 prose">
                                <h2 id="harap-di-baca-sebelum-order">⚠ HARAP DI BACA SEBELUM ORDER</h2>
                                <p>Muud, botol yang membawa kebahagiaan dan dapat membuat kamu kembali bersemangat
                                    dikala tak seorang pun yang dapat mengerti hati ini 😉😚 </p>
                                <h2 id="keterangan-produk-include-">✨ Produk Include:</h2>
                                <ul>
                                    <li>botol kaca 100 ml</li>
                                    <li>50 kapsul wish dan 3 candy (kapsul gelatin)</li>
                                    <li>terdiri dari 3 pilihan warna, bisa mix atau pilih (pink,biru, kuning)</li>
                                    <li>tag dan hiasan tali</li>
                                    <li>stikers</li>
                                    <li>thank you card</li>
                                </ul>
                                <p>✨Happy Shopping ✨serve with love ❤️ ✨Happinness is in your hand 💗</p>
                            </dd>
                        </div>
                    </dl>
                </div>
                <div>
                    <button onclick="Livewire.emit('openModal', 'modals.muud-promo-info');"
                            class="w-full block bg-gray-50 text-sm font-medium text-gray-500 text-center px-4 py-4 hover:text-gray-700 sm:rounded-b-lg">
                        Dapatkan produk ini!
                    </button>
                </div>
            </div>
        </section>
    </div>

</x-app-layout>
