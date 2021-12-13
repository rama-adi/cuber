<div class="relative">
    <button
        wire:click="$emit('closeModal')"
        type="button"
        class="absolute top-3 right-3 inline-flex items-center p-2 border border-transparent rounded-full shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
        <!-- Heroicon name: outline/plus-sm -->
        <x-heroicon-s-x class="h-6 w-6"/>
    </button>
    <img src="{{$imageUrl}}" alt="image" class="h-full w-full">
</div>
