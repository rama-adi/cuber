<x-app-layout
    ogTitle="{{$category->name}} - Cuber (Curhat Bareng)"
    ogDescription="{{$category->description}}"
>
    <header class="mx-auto md:flex md:items-center md:justify-between md:space-x-5">
        <div class="flex items-center space-x-5">
            <div class="flex-shrink-0">
                <div class="h-16 w-16 rounded-full bg-white border flex items-center justify-center">
                    <x-heroicon-o-hashtag class="h-8 w-8 text-gray-600"/>
                </div>
            </div>
            <div>
                <h1 class="text-2xl text-gray-900 inline-flex">{{$category->name}}</h1>
                <p class="text-sm font-medium text-gray-500">{{$category->description}}</p>
            </div>
        </div>
    </header>

    <div class="px-4 sm:px-0">
        <div class="mb-4 space-y-2">
            <div data-edgeinject="categoryShow"></div>
        </div>
        <livewire:fragments.timeline :is-randomized="false" :category-id="$category->id"/>
    </div>
</x-app-layout>
