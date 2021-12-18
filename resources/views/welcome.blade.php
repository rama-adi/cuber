<x-app-layout ogTitle="Beranda - Cuber (Curhat Bareng)">
    <div class="px-4 sm:px-0">
        <div>
            <nav class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200" aria-label="Tabs">
                <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
                <a href="{{route('homepage')}}" aria-current="page"
                   class="text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                    <span>Terbaru</span>
                    <span aria-hidden="true" class="bg-blue-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                </a>

                <a href="{{route('category.index')}}"
                   class="text-gray-500 hover:text-gray-700 rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                    <span>Semua kategori</span>
                    <span aria-hidden="true"
                          class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                </a>
            </nav>
        </div>
    </div>
    <div class="px-4 sm:px-0">
        <div class="mb-4 space-y-2">
            <div data-edgeinject="homepage"></div>
            <x-hero-homepage/>
        </div>
        <livewire:fragments.timeline :is-randomized="false"/>
    </div>
</x-app-layout>
