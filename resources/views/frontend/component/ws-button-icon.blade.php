{{-- ws-button ~ WebStack Button --}}
@php
    $href = $href ?? 'javascript:void(0);';
    $layer = $layer == 'light' ? asset('assets/svgs/layer-light.svg') : asset('assets/svgs/layer-dark.svg');
@endphp
<a href="{{ $href }}" class="relative group">
    <img src="{{ $icon }}" class="w-16 h-16 lg:h-auto lg:w-auto relative z-20 group-hover:translate-y-1 group-active:translate-y-[10px] transition-all" alt="">
    <img src="{{ $layer }}"
        class="w-16 h-16 lg:h-auto lg:w-auto absolute z-10 transition-all top-2"
        alt="">
    {{ $slot }}
</a>
