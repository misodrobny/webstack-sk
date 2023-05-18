<section id="speakers" class="bg-turquoise-500 border-b-[16px] lg:border-b-[35px] border-dark-teal">
    <div class="relative container pb-[160px] xl:pt-[128px] xl:pb-[368px] pt-12 min-h-screen">
        <div class="xl:px-[160px] lg:mb-[52px] mb-12">
            @include('frontend.component.HeaderSection', ['titleHeader' => '_speakers'])
        </div>

        <div class="xl:ml-[160px] relative">
            <div id="speakerCards">
                {{-- <!-- Card - Speaker 1 --> --}}
                @component('frontend.component.SpeakerCard')
                    @slot('routeLink', '#redirectLink')
                    @slot('photo', asset('assets/images/speaker-1.png'))
                    @slot('name', 'Nuno Maduro')
                    @slot('role', 'Laravel Core Team Member')
                    @slot('twitterAccount', 'eunomaduro')
                @endcomponent

                {{-- <!-- Card - Speaker 2 --> --}}
                @component('frontend.component.SpeakerCard')
                    @slot('routeLink', '#redirectLink')
                    @slot('photo', asset('assets/images/speaker-2.png'))
                    @slot('name', 'Mateus Guimarães')
                    @slot('role', 'Sr. Full-Stack Developer')
                    @slot('twitterAccount', 'mateusjatenee')
                @endcomponent

                {{-- <!-- Card - Speaker 3 --> --}}
                @component('frontend.component.SpeakerCard')
                    @slot('routeLink', '#redirectLink')
                    @slot('photo', asset('assets/images/speaker-3.png'))
                    @slot('name', 'Francisco Madeira')
                    @slot('role', 'Co-author of Termwind')
                    @slot('twitterAccount', 'xiCO2k')
                @endcomponent

                {{-- <!-- Card - Proposal --> --}}
                @include('frontend.component.ProposeTalkCard')
            </div>

            {{-- <!-- Trigger Next --> --}}
            <div class="absolute -translate-y-1/2 top-1/2 lg:right-[200px]" id="pseudoNextSlide">
                <a href="javascript:void(0);" class="relative group">
                    <img src="{{ asset('assets/svgs/ic-arrow-right.svg') }}" class="relative z-20" alt="">
                    <img src="{{ asset('assets/svgs/layer-light.svg') }}"
                        class="absolute z-10 transition-all top-2 group-hover:top-0 group-hover:opacity-0"
                        alt="">
                </a>
            </div>
            {{-- <!-- Trigger Prev --> --}}
            <div class="absolute hidden -translate-y-1/2 top-1/2 lg:left-32" id="pseudoPrevSlide">
                <a href="javascript:void(0);" class="relative group">
                    <img src="{{ asset('assets/svgs/ic-arrow-left.svg') }}" class="relative z-20" alt="">
                    <img src="{{ asset('assets/svgs/layer-light.svg') }}"
                        class="absolute z-10 transition-all top-2 group-hover:top-0 group-hover:opacity-0"
                        alt="">
                </a>
            </div>
        </div>

        {{-- <!-- Next section button (Dark) --> --}}
        @include('frontend.component.ButtonNextSection', [
            'buttonType' => 'dark',
            'nextSection' => 'event-schedule',
        ])
    </div>
</section>
