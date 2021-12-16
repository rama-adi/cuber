@props(['type' => 'USER'])
@switch($type)
    @case('USER')
    &nbsp;
    @break

    @case('COUNSELOR')
    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
         <x-heroicon-s-chat class="h-4 w-4 mr-1"/>
        <span>Konselor</span>
    </span>
    @break

    @case('ADMIN')
    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800">
        <x-heroicon-s-badge-check class="h-4 w-4 mr-1"/>
        <span>Admin</span>
    </span>
    @break

    @case('SYSTEM')
    <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-red-100 text-red-800">
        <x-heroicon-s-shield-check class="h-4 w-4 mr-1"/>
        <span>System</span>
    </span>
    @break

    @default
    &nbsp;
@endswitch

