<section aria-labelledby="comments-title">
    <div class="bg-white shadow sm:rounded-lg sm:overflow-hidden">
        <div class="divide-y divide-gray-200">
            <div class="px-4 py-5 sm:px-6">
                <h2 id="comments-title" class="text-lg font-medium text-gray-900">💬 Ikuti diskusinya, yuk!</h2>
            </div>
            <div class="px-4 py-6 sm:px-6">
                <ul role="list" class="space-y-8">
                    @foreach($replies as $reply)
                        <li>
                            <div class="flex space-x-3">
                                <div class="w-full">
                                    <div class="flex justify-between items-center space-x-2 w-full">
                                        <div class="flex-grow inline-flex space-x-2">
                                            <a href="#"
                                               class="text-sm font-medium text-gray-900">{{$reply->user->name}}</a>
                                            <x-user-type :type="$reply->user->user_type"/>
                                        </div>
                                        <span
                                            class="text-sm text-gray-500 font-medium">{{$reply->created_at->diffForHumans()}}</span>
                                    </div>
                                    <div class="mt-1 text-sm text-gray-700 prose">
                                        {{$reply->content}}
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="p-4">
                {{$replies->links()}}
            </div>
        </div>
        <div class="bg-gray-50 px-4 py-6 sm:px-6">
            @auth
                <div class="flex space-x-3">
                    <div class="min-w-0 flex-1">
                        <form wire:submit.prevent="sendReply" class="space-y-2">
                            <div>
                                <div>
                                    <label for="comment" class="sr-only">Kirim pesan anda</label>
                                    <textarea id="comment" name="comment" rows="3"
                                              wire:model.lazy="commentText"
                                              class="shadow-sm block w-full focus:ring-blue-500 focus:border-blue-500 sm:text-sm border border-gray-300 rounded-md"
                                              placeholder="Ketik pesan anda"></textarea>
                                </div>
                                <x-input-error for="commentText"/>
                            </div>
                            {{--                            <div>--}}
                            {{--                                <x-captcha fieldName="replyCaptchaResponse"/>--}}
                            {{--                            </div>--}}
                            <div class="mt-3 flex items-center justify-between">
                                <button type="submit"
                                        class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    Kirim pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</section>
