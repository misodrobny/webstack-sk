@php
    $buttonType = $buttonType ?? 'light';
@endphp

<div class="absolute translate-y-10 bottom-24 left-4 lg:bottom-36 xl:left-[160px]">
    <div class="flex items-end gap-[35px]">
        @if ($buttonType == 'light')
            @component('frontend.component.ws-button-icon')
                @slot('href', $nextSection)
                @slot('icon', asset('assets/svgs/ic-arrow-downright-light.svg'))
                @slot('layer', 'light' )
                {{--  Line stick light --}}
                <span
                    class="h-[140px] w-[3px] lg:w-[6px] bg-turquoise-500 absolute top-full left-1/2 -translate-x-1/2 z-0"></span>
            @endcomponent
            <p class="text-lg text-white select-none coolvetica-book">
                /{{ $nextSection }}
            </p>
        @elseif ($buttonType == 'dark')
            @component('frontend.component.ws-button-icon')
                @slot('href', $nextSection)
                @slot('icon', asset('assets/svgs/ic-arrow-downright-dark.svg'))
                @slot('layer', 'dark')
                {{--  Line stick dark --}}
                <span
                    class="h-[140px] w-[3px] lg:w-[6px] bg-dark-teal absolute top-full left-1/2 -translate-x-1/2 z-0"></span>
            @endcomponent
            <p class="text-lg select-none text-dark-teal coolvetica-book">
                /{{ $nextSection }}
            </p>
        @endif
    </div>
</div>
