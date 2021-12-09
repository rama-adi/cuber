<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-3xl mt-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <div class="md:grid md:grid-cols-5 md:gap-2 w-full">
            <div class="md:col-span-3 px-6 py-4">
                {{ $slot }}
            </div>
            <div class="hidden md:block col-span-2 w-full h-full relative" style="background-color: #1B80DC">
                {{ $sidebar ?? null }}
                <div class="absolute top-0 bottom-0 left-0 transform rounded-xl"
                     style="background-color: rgba(22,111,191,0.6); transform: rotate(-70deg); right: -50rem"></div>
                <img src="https://via.placeholder.com/800x800" alt="CLIO Login page"
                     class="absolute bottom-10 right-10 h-32 w-32">
            </div>
        </div>
    </div>
</div>
