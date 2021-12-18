<x-app-layout
    ogTitle="{{$thread->title}} - Cuber (Curhat Bareng)"
    ogDescription="{{Str::previewThread($thread->content, 100)}}"
>
    <nav class="flex" aria-label="Breadcrumb">
        <ol role="list" class="w-full bg-white rounded-md shadow px-6 flex space-x-4">
            <li class="flex">
                <div class="flex items-center">
                    <a href="{{route('homepage')}}" class="text-gray-400 hover:text-gray-500">
                        <x-heroicon-s-home class="flex-shrink-0 h-5 w-5"/>
                        <span class="sr-only">Beranda</span>
                    </a>
                </div>
            </li>

            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none"
                         fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z"/>
                    </svg>
                    <a href="{{route('homepage')}}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Diskusi</a>
                </div>
            </li>

            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none"
                         fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z"/>
                    </svg>
                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"
                       aria-current="page">{{Str::limit($thread->title, 20, '...')}}</a>
                </div>
            </li>
        </ol>
    </nav>

    <livewire:fragments.thread.show :thread="$thread"/>

    <livewire:fragments.thread.reply :thread="$thread"/>

    @if($sharePopup)
        <script>
            window.onload = function () {
                Livewire.emit('openModal', 'modals.share-thread', @json(['threadId' => $thread->id, 'shareMessage' => 'Yay, diskusi mu sudah jadi 🥳 Bagikan supaya banyak yang ikut diskusi!']))
            }
        </script>
    @endif

</x-app-layout>
