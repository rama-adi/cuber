@props(['thread'])
<article aria-labelledby="question-title-81614">
    <div>
        <div class="flex space-x-3">
            <div class="min-w-0 flex-1">
                <p class="text-sm font-medium text-gray-900">
                    <a href="#" class="hover:underline">{{$thread->user->name}}</a>
                </p>
                <p class="text-sm text-gray-500">
                    <time datetime="{{$thread->created_at}}">{{$thread->created_at}}</time>
                </p>
            </div>
        </div>
        <h2 id="question-title-81614" class="mt-4 text-base font-medium text-gray-900">
            <a href="{{route('thread.show', ['id'=>$thread->id, 'slug' => $thread->slug])}}"
               class="text-blue-600 hover:text-blue-800">{{$thread->title}}</a>
        </h2>
    </div>
    <div class="mt-2 text-sm text-gray-700 space-y-4">
        <p>{{\Illuminate\Support\Str::limit($thread->content, 400, "...")}}</p>
    </div>
    <div class="mt-6 flex justify-between space-x-8">
        <div class="flex space-x-3">
             <span class="inline-flex items-center text-sm">
                <button type="button"
                        class="inline-flex items-center space-x-2 px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-gray-700 bg-gray-100 hover:bg-gray-200 focus:outline-none">
                   <x-heroicon-s-thumb-up class="h-5 w-5"/>
                   <span class="font-medium text-gray-600">29</span>
                   <span class="sr-only">suka</span>
                </button>
             </span>
            <span class="inline-flex items-center text-sm">
                <a href="{{route('category.show', ['id' => $thread->threadCategory->id, 'name' => \Illuminate\Support\Str::slug($thread->threadCategory->name)])}}"
                        class="inline-flex items-center space-x-2 px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-gray-700 bg-gray-100 hover:bg-gray-200 focus:outline-none">
                   <x-heroicon-s-hashtag class="h-5 w-5"/>
                   <span class="font-medium text-gray-600">Kategori: {{$thread->threadCategory->name}}</span>
                </a>
            </span>

            <span class="inline-flex items-center text-sm">
                <button type="button"
                        class="inline-flex items-center space-x-2 px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-red-700 bg-red-100 hover:bg-red-200 focus:outline-none">
                   <x-heroicon-s-flag class="h-5 w-5"/>
                   <span class="font-medium text-red-600">Laporkan</span>
                </button>
            </span>
        </div>
        <div class="flex text-sm">
             <span class="inline-flex items-center text-sm">
                <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                   <!-- Heroicon name: solid/share -->
                   <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                      <path
                          d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"/>
                   </svg>
                   <span class="font-medium text-gray-900">Bagikan</span>
                </button>
             </span>
        </div>
    </div>
</article>
