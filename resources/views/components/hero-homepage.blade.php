<div x-data="{ showBanner: $persist(true).as('CUBER:banner:mainBannerShow') }">
    <section x-show="showBanner"
             class="relative z-20 rounded-lg shadow-xl overflow-hidden lg:grid lg:grid-cols-2 lg:gap-4"
             style="background-color: #1B80DC">
        <div class="absolute top-0 bottom-0 left-0 transform rounded-xl"
             style="background-color: rgba(22,111,191,0.6); transform: rotate(-70deg); right: -40rem">
        </div>
        <div class="pt-10 pb-12 px-6 sm:pt-16 sm:px-8 lg:py-16 lg:pr-0 xl:px-10 z-20 relative">
            <div class="lg:self-center">
                <button type="button"
                        @click="showBanner = false"
                        class="inline-flex items-center px-2 py-1 border border-transparent text-xs font-medium rounded-full shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sembunyikan pesan ini
                </button>
                <h2 class="text-2xl leading-9 font-extrabold text-white sm:text-3xl sm:leading-10">
                <span class="block">
                    Selamat datang di CUBER!
                </span>
                </h2>
                <p class="mt-4 text-base leading-6 text-white">
                    Platform untuk menceritakan segala permasalahanmu dan mendapatkan solusi secara anonim!
                </p>
            </div>
        </div>
        <div class="relative pb-3/5 -mt-6 md:pb-1/2">
            <img src="{{asset('img/clio-mascot.png')}}" alt="Mascot Clio"
                 class="absolute inset-0 w-full h-full transform translate-x-6 translate-y-6 rounded-md object-cover object-left-top sm:translate-x-10 lg:translate-y-20">
            {{--        <video playsinline="" autoplay="" muted="" loop=""--}}
            {{--               class="absolute inset-0 w-full h-full transform translate-x-6 translate-y-6 rounded-md object-cover object-left-top sm:translate-x-10 lg:translate-y-20"--}}
            {{--               __idm_id__="1546584065">--}}
            {{--            <source src="https://tinkerwell.app/videos/tip-top-tinker-tool.mp4" type="video/mp4">--}}
            {{--        </video>--}}
        </div>
    </section>
</div>
