<div class="space-y-6">
    <div>
        @if(count($pinned_threads) > 0)
            <h1 id="pinned-by-admin" class="text-lg font-semibold text-gray-900 mb-2"><span aria-hidden="true">📌</span>
                Disematkan oleh admin</h1>
            <ul role="list" aria-describedby="pinned-by-admin" class="space-y-4 ">
                @foreach($pinned_threads as $thread)
                    <li class="bg-white px-4 py-6 shadow sm:p-6 rounded-lg">
                        <x-thread-card :thread="$thread" :pinned="true"/>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <div>
        <h1 id="discussion-list" class="text-lg font-semibold text-gray-900 mb-2"><span aria-hidden="true">💬</span>
            Ikuti diskusinya, yuk!</h1>
        <ul role="list" aria-describedby="discussion-list" class="space-y-2">
            @foreach($threads as $thread)
                @if($loop->index > 0 && $loop->index % 5 == 0)
                    <div data-edgeinject="betweenTLContent"></div>
                    <x-promo-muud/>
                @endif
                <li class="bg-white px-4 py-6 shadow sm:p-6 rounded-lg">
                    <x-thread-card :thread="$thread" :pinned="false"/>
                </li>
            @endforeach
            {{$threads->links()}}
        </ul>
    </div>
</div>
