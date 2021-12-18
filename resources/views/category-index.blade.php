<x-app-layout
    ogTitle="Semua kategori - Cuber (Curhat Bareng)"
    ogDescription="Semua kategori di Cuber (Curhat Bareng)"
>
    <div class="px-4 sm:px-0">
        <div>
            <nav class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200" aria-label="Tabs">
                <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
                <a href="{{route('homepage')}}" aria-current="page"
                   class="text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                    <span>Terbaru</span>
                    <span aria-hidden="true"
                          class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                </a>

                <a href="{{route('category.index')}}"
                   class="text-gray-500 hover:text-gray-700 rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                    <span>Semua kategori</span>
                    <span aria-hidden="true" class="bg-blue-500 absolute inset-x-0 bottom-0 h-0.5"></span>
                </a>
            </nav>
        </div>
    </div>

    <div class="px-4 sm:px-0">
        <div class="mb-4 space-y-2">
            <div data-edgeinject="categoryList"></div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-2">
            @foreach(\App\Models\ThreadCategory::all() as $category)
                <div
                    class="overflow-hidden bg-white rounded-lg shadow">
                    <div
                        class="relative group p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                        <div class="mt-8">
                            <h3 class="text-lg font-medium">
                                <a href="{{route('category.show', ['id' => $category->id, 'name' => \Illuminate\Support\Str::slug( $category->name)])}}"
                                   class="focus:outline-none">
                                    <!-- Extend touch target to entire panel -->
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    {{$category->name}}
                                </a>
                            </h3>
                            <p class="mt-2 text-sm text-gray-500">
                                {{$category->description}}
                            </p>
                        </div>
                        <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400"
                              aria-hidden="true">
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z"/>
                  </svg>
                </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
