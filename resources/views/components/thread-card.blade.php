<article aria-labelledby="thread-{{$thread->id}}">
    <div>
        <div class="flex space-x-3">
            <div class="min-w-0 flex-1">
                <p class="text-sm font-medium text-gray-900 inline-flex space-x-2">
                    <a href="#" class="hover:underline">{{$thread->user->name}}</a>
                    <x-user-type :type="$thread->user->user_type"/>
                </p>
                <p class="text-sm text-gray-500">
                    Dibuat
                    <time datetime="{{$thread->created_at}}">{{$thread->created_at->format('D, d F Y H:m')}} WIB</time>
                    <span
                        class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                      # {{$thread->threadCategory->name}}
                    </span>
                </p>
            </div>
            <div class="flex-shrink-0 self-center flex">
                @if($pinned)
                    <span
                        class="inline-flex items-center px-2.5 py-0.5 rounded-md text-sm font-medium bg-gray-100 text-gray-800">
                      📌 Pin
                    </span>
                @endif
            </div>
        </div>
        <h2 id="thread-{{$thread->id}}" class="inline-flex mt-4 text-base font-medium text-gray-900">
            <a href="{{route('thread.show', ['id'=>$thread->id, 'slug' => $thread->slug])}}"
               class="text-blue-600 hover:text-blue-800">{{$thread->title}}</a>
        </h2>
    </div>
    <div class="mt-2 text-sm text-gray-700 space-y-4">
        <p>{{\Illuminate\Support\Str::previewThread($thread->content)}}</p>
    </div>
    <div class="mt-6 flex justify-between space-x-8">
        <div class="flex space-x-6">
            <span class="inline-flex items-center text-sm">
                <div type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                    <!-- Heroicon name: solid/thumb-up -->
                    <x-heroicon-s-thumb-up class="h-5 w-5"/>
                    <span class="font-medium text-gray-900">{{$thread->likes()->count('user_id')}}</span>
                    <span class="sr-only">likes</span>
                </div>
            </span>
            <span class="inline-flex items-center text-sm">
                <button
                    onclick="window.location.href = '{{route('thread.show', ['id'=>$thread->id, 'slug' => $thread->slug])}}'"
                    type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                    <!-- Heroicon name: solid/thumb-up -->
                    <x-heroicon-s-chat class="h-5 w-5"/>
                    <span class="font-medium text-gray-900">{{$thread->threadReplies()->count('user_id')}}</span>
                    <span class="sr-only">likes</span>
                </button>
            </span>

            @auth
                <span class="hidden sm:block inline-flex items-center text-sm">
                    <button
                        onclick="Livewire.emit('openModal', 'modals.report-thread', {{json_encode(['threadId' => $thread->id])}})"
                        type="button"
                        class="inline-flex space-x-2 text-red-400 hover:text-red-500">
                        <x-heroicon-s-flag class="h-5 w-5"/>
                        <span class="font-medium text-gray-900">Laporkan</span>
                    </button>
                </span>
            @endauth

            <span class="block sm:hidden inline-flex items-center text-sm">
                <div class="relative inline-block text-left" x-data="{ show: false }">
                  <div>
                        <button type="button"
                                @click="show = !show"
                                class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500"
                                id="more-opt-thread{{$thread->id}}" aria-expanded="true" aria-haspopup="true">
                            Share / Laporkan
                            <!-- Heroicon name: solid/chevron-down -->
                            <x-heroicon-s-chevron-down class="-mr-1 ml-2 h-5 w-5" x-show="!show"/>
                            <x-heroicon-s-chevron-up class="-mr-1 ml-2 h-5 w-5" x-show="show"/>
                        </button>
                  </div>
                  <div
                      x-show="show"
                      @click.away="show = false"
                      x-transition:enter="transition ease-out duration-100"
                      x-transition:enter-start="opacity-0 transform scale-95"
                      x-transition:enter-end="opacity-100 transform scale-100"
                      x-transition:leave="transition ease-in duration-75"
                      x-transition:leave-start="opacity-100 transform scale-100"
                      x-transition:leave-end="opacity-0 transform scale-95"
                      class="z-40 origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none"
                      role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div class="py-1" role="none">
                          <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <button
                                @click="show = false;Livewire.emit('openModal', 'modals.share-thread', {{json_encode(['threadId' => $thread->id])}})"
                                class="text-gray-700 group flex w-full items-center px-4 py-2 text-sm" role="menuitem"
                                tabindex="-1"
                                id="menu-item-0">
                                  <x-heroicon-s-share class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500"/>
                                  Bagikan
                            </button>
                            <button
                                @click="show = false;Livewire.emit('openModal', 'modals.report-thread', {{json_encode(['threadId' => $thread->id])}})"
                                class="text-red-700 group w-full flex items-center px-4 py-2 text-sm" role="menuitem"
                                tabindex="-1"
                                id="menu-item-0">
                              <x-heroicon-s-flag class="mr-3 h-5 w-5 text-red-400 group-hover:text-red-500"/>
                              Laporkan ke admin
                          </button>
                        </div>
                  </div>
                </div>
            </span>
        </div>
        <div class="flex text-sm hidden sm:block">
            <span class="inline-flex items-center text-sm">
                <button
                    @click="Livewire.emit('openModal', 'modals.share-thread', {{json_encode(['threadId' => $thread->id])}})"
                    type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                    <x-heroicon-s-share class="h-5 w-5"/>
                    <span class="font-medium text-gray-900">Bagikan</span>
                </button>
            </span>
        </div>
    </div>
</article>
