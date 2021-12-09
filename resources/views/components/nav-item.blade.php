@props(['mobile' => false, 'active' => false, 'href' => '', 'icon' => null, 'title' => ''])
@if(! $mobile)
    <a href="{{$href}}"
       class="{{$active ? 'bg-gray-200 text-gray-900 group flex items-center px-3 py-2 text-sm font-medium rounded-md' : 'text-gray-600 hover:bg-gray-50 group flex items-center px-3 py-2 text-sm font-medium rounded-md'}}"
       aria-current="page">
        @if($active) <span class="text-gray-500">{{$icon ?? ''}}</span> @else <span
            class="text-gray-400"> {{$icon ?? '' }}</span> @endif
        <span class="truncate">
            {{$title}}
        </span>
    </a>
@else
@endif
