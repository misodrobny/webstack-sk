<section id="speakers" class="bg-turquoise-500 border-b-[16px] lg:border-b-[35px] border-dark-teal">
    <div class="relative container pb-[160px] xl:pt-[128px] xl:pb-[368px] pt-12 min-h-screen">
        <div class="xl:px-[160px] lg:mb-[52px] mb-12">
            @include('frontend.component.HeaderSection', ['titleHeader' => '_speakers'])
        </div>

        <div class="xl:ml-[160px] relative">
            <div id="speakerCards">
                {{-- Card - Speaker 1 --}}
                @component('frontend.component.SpeakerCard')
                    @slot('routeLink', '#redirectLink')
                    @slot('photo', asset('assets/images/michi-profile.svg'))
                    @slot('name', 'Michi Hoffmann')
                    @slot('role', 'Software Engineer at Sentry')
                    @slot('twitterAccount', 'cleptric')
                @endcomponent

                {{-- Card - Proposal --}}
                @include('frontend.component.ProposeTalkCard')
            </div>

{{--            --}}{{-- Trigger Next --}}
{{--            <div class="absolute -translate-y-1/2 top-1/2 lg:right-[200px]" id="pseudoNextSlide">--}}
{{--                @component('frontend.component.ws-button-icon')--}}
{{--                    @slot('icon', asset('assets/svgs/ic-arrow-right.svg'))--}}
{{--                    @slot('layer', 'light')--}}
{{--                @endcomponent--}}
{{--            </div>--}}
{{--            --}}{{-- Trigger Prev --}}
{{--            <div class="absolute hidden -translate-y-1/2 top-1/2 lg:left-32" id="pseudoPrevSlide">--}}
{{--                @component('frontend.component.ws-button-icon')--}}
{{--                    @slot('icon', asset('assets/svgs/ic-arrow-left.svg'))--}}
{{--                    @slot('layer', 'light')--}}
{{--                @endcomponent--}}
{{--            </div>--}}
        </div>

        {{-- Next section button (Dark) --}}
        @include('frontend.component.ButtonNextSection', [
            'buttonType' => 'dark',
            'nextSection' => '#event-schedule',
        ])
    </div>
</section>

@push('scripts')
    <script type="text/javascript">
        const prevNextButtons = $(window).width() > 991 ? true : false
        // const isDraggable = $(window).width() < 991 ? true : false

        $('#speakerCards').flickity({
            cellAlign: 'center',
            contain: true,
            pageDots: false,
            imagesLoaded: true,
            groupCells: true,
            prevNextButtons: prevNextButtons
        })

        // $('#speakerCards .flickity-viewport').css({
        //     overflow: 'visible'
        // })

        // $('#speakerCards .flickity-slider').css({
        //     marginLeft: '16px'
        // })

        $('#speakerCards .flickity-prev-next-button').addClass('!opacity-0')

        let prevEl = $('#speakerCards .flickity-prev-next-button.previous')
        let nextEl = $('#speakerCards .flickity-prev-next-button.next')
        let pseudoNextEl = $('#pseudoNextSlide')
        let pseudoPrevEl = $('#pseudoPrevSlide').addClass('hidden')

        if (prevNextButtons === false) {
            pseudoNextEl.addClass('hidden')
            pseudoPrevEl.addClass('hidden')
        }

        pseudoNextEl.on('click', (e) => {
            nextEl.trigger('click')
            if (prevEl[0].getAttribute('disabled') == null) {
                pseudoPrevEl.removeClass('hidden')
            }

            if (nextEl[0].getAttribute('disabled') != null) {
                $('#' + e.currentTarget.id).addClass('hidden')
            }
        })

        pseudoPrevEl.on('click', (e) => {
            prevEl.trigger('click')
            if (prevEl[0].getAttribute('disabled') != null) {
                $('#' + e.currentTarget.id).addClass('hidden')
            }

            if (nextEl[0].getAttribute('disabled') == null) {
                pseudoNextEl.removeClass('hidden')
            }
        })
    </script>
@endpush
