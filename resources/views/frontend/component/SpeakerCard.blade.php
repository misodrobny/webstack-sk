@php
    $routeLink = $routeLink ?? '#';
@endphp

<div class="flex flex-col mr-4 lg:mr-12 w-full max-w-[274px] lg:max-w-[374px] group lg:even:mt-11">
    <a href="#" data-speaker-detail class="w-full">
        <img data-speaker-image src="{{ $photo }}" class="w-full h-[290px] md:h-[363px] object-cover top-left-triangle" alt="">
        <span class="hidden" data-speaker-name>{{ $name }}</span>
        <span class="hidden" data-speaker-role>{{ $role }}</span>
        <span class="hidden" data-speaker-bio>{{ $bio }}</span>
        <span class="hidden" data-speaker-twitter>{{ $twitterAccount ?? '' }}</span>
        <span class="hidden" data-talk-title>{{ $talkTitle }}</span>
        <span class="hidden" data-talk-time>{{ $talkTime }}</span>
        <span class="hidden" data-talk-content>{{ $talk }}</span>
    </a>
    <div class="pt-[22px] pb-6 lg:pt-10 lg:px-11 lg:pb-11 px-6 bg-dark-teal group bottom-right-triangle-sm">
        <a href="#" data-speaker-detail class="w-max">
            <h5
                class="md:max-w-[280px] w-max md:w-full relative coolvetica-regular text-2xl md:text-[48px] md:leading-[44px] md:tracking-[-0.02em] text-turquoise-500">
                {{ $name }}
                {{-- <!-- bottom line --> --}}
                <div class="relative bg-[#17a68c] lg:w-full h-[3px] my-3">
                    <div class="absolute left-0 w-0 h-full transition-all bg-turquoise-500 group-hover:w-full">
                    </div>
                </div>
            </h5>
        </a>

        {{-- <!-- Role --> --}}
        <p class="coolvetica-book text-turquoise-500 text-lg md:text-[20px] md:leading-[30px]">
            {{ $role }}
        </p>

        {{-- <!-- Twitter Acc --> --}}
            <div class="flex items-center gap-3 mt-6">
                @if($twitterAccount)
                <img src="{{ asset('assets/svgs/logo-twitter.svg') }}" alt="">
                <a href="{{ 'https://twitter.com/' . $twitterAccount }}" target="_blank">
                    <p class="text-base md:text-lg text-turquoise-500 coolvetica-book">
                        /{{ $twitterAccount }}
                    </p>
                </a>
                @endif
            </div>
    </div>
</div>
