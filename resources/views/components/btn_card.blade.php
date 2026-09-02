@props(['link', 'img', 'alt' => '', 'btntitle', 'btninformation', 'delay' => 200])

<a href="{{ $link }}">
    <div 
        x-data="{ show: false }" 
        x-init="setTimeout(() => show = true, {{ $delay }})" 
        x-show="show" 
        x-cloak
        x-transition:enter="transition ease-out duration-700"
        x-transition:enter-start="opacity-0 translate-y-6"
        x-transition:enter-end="opacity-100 translate-y-0"
        class="flex flex-col justify-center items-center bg-red-800 shadow-md rounded-lg p-4 h-70
               transition transform hover:scale-105 hover:shadow-2xl hover:bg-red-700">
        
        <!-- Icon -->
        <img src="{{ $img }}" alt="{{ $alt }}" class="h-25 w-25 mb-8">
        <!-- Title -->
        <span class="text-2xl font-bold text-orange-400">{{ $btntitle }}</span>
        <!-- Information -->
        <span class="text-sm font-semibold text-orange-400">{{ $btninformation }}</span>
    </div>
</a>
