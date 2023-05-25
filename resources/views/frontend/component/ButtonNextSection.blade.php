@php
    $buttonType = $buttonType ?? 'light';
@endphp

@if ($buttonType == 'light')
    <div class="absolute translate-y-10 bottom-24 left-4 lg:bottom-36 xl:left-[160px]">
        <div class="flex items-end gap-[35px]">
            <a href="#{{ $nextSection }}" class="relative group">
                <img src="{{ asset('assets/svgs/ic-arrow-downright-light.svg') }}"
                    class="w-16 h-16 lg:h-auto lg:w-auto relative z-20 group-hover:translate-y-1 group-active:translate-y-[10px] transition-all" alt="">
                <img src="{{ asset('assets/svgs/layer-light.svg') }}"
                    class="w-16 h-16 lg:h-auto lg:w-auto absolute z-10 transition-all top-2"
                    alt="">
                {{-- <!-- Line stick --> --}}
                <span
                    class="h-[140px] w-[3px] lg:w-[6px] bg-turquoise-500 absolute top-full left-1/2 -translate-x-1/2 z-0"></span>
            </a>
            <p class="text-lg text-white select-none coolvetica-book">
                /#{{ $nextSection }}
            </p>
        </div>
    </div>
@elseif ($buttonType == 'dark')
    <div class="absolute translate-y-10 bottom-24 left-4 lg:bottom-36 xl:left-[160px]">
        <div class="flex items-end gap-[35px]">
            <a href="#{{ $nextSection }}" class="relative group">
                <img src="{{ asset('assets/svgs/ic-arrow-downright-dark.svg') }}"
                    class="w-16 h-16 lg:h-auto lg:w-auto relative z-20 group-hover:translate-y-1 group-active:translate-y-[10px] transition-all" alt="">
                <img src="{{ asset('assets/svgs/layer-dark.svg') }}"
                    class="w-16 h-16 lg:h-auto lg:w-auto absolute z-10 transition-all top-2"
                    alt="">
                <!-- Line stick -->
                <span
                    class="h-[140px] w-[3px] lg:w-[6px] bg-dark-teal absolute top-full left-1/2 -translate-x-1/2 z-0"></span>
            </a>
            <p class="text-lg select-none text-dark-teal coolvetica-book">
                /#{{ $nextSection }}
            </p>
        </div>
    </div>
@endif
