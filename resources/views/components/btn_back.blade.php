@props(['href' => url()->previous(), 'icon' => 'images/icon/arrow-left.svg', 'alt' => 'btn back', 'text' => 'Kembali'])

<div class="flex items-center mb-4">
    <a href="{{ $href }}" 
       class="inline-flex font-semibold items-center px-3 py-2 bg-red-800 hover:bg-red-700 text-orange-400 rounded-md shadow-sm">
        <img src="{{ asset($icon) }}" class="h-5" alt="{{ $alt }}"> 
        {{ $text }}
    </a>
</div>
