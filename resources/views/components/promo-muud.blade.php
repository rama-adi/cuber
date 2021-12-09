<a href="#">
    <section
        class="relative rounded-lg shadow-xl overflow-hidden lg:grid lg:grid-cols-2 lg:gap-4 mt-2"
        style="background-color: #1B80DC">
        <div class="absolute top-0 bottom-0 left-0 transform rounded-xl"
             style="background-color: rgba(22,111,191,0.6); transform: rotate(-70deg); right: -40rem">
        </div>
        <div class="pt-5 pb-12 px-6 sm:pt-16 sm:px-8 lg:py-16 lg:pr-0 xl:px-10 relative">
            <div class="lg:self-center">
                <p class="text-sm text-white">Promosi dengan MUUD</p>
                <div class="mt-2">
                    <h2 class="text-2xl leading-9 font-extrabold text-white sm:text-3xl sm:leading-10">
                <span class="block">
                    MUUD
                </span>
                    </h2>
                    <p class="text-base leading-6 text-white">
                        Deskripsi singkat. Klik untuk info lebih lanjut!
                    </p>
                </div>
            </div>
        </div>
        <div class="relative pb-3/5 -mt-6 md:pb-1/2">
            <img src="{{asset('img/muud-promo-img/' . rand(1, 2) . '.png')}}" alt="MUUD"
                 class="absolute inset-0 w-full h-full transform translate-x-6 translate-y-2 rounded-md object-cover object-left-top sm:translate-x-10 lg:translate-y-10">
        </div>
    </section>
</a>
