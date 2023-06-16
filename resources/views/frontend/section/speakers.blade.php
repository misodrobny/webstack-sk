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
                    @slot('bio', 'Born and raised in Munich, Michi currently resides in Vienna, working as a software engineer at Sentry. While not pocking around in PHP & Go, he sometimes endeavours into the frontend world as well, still missing the good old jQuery days.')
                    @slot('talkTime','14:15 CET')
                    @slot('talkTitle','Eating your own dog food')
                    @slot('talk', 'Building SDKs to be used by other developers is all great fun, but at one point you also need to test out your work in a real application. Does the thing you build actually work in the wild? Is it easy to use, or did you just build something utterly bad? We’ll take a look at building Sentry’s appreciation Slack app called GibPotato, an over-engineered, micro-service-orientated behemoth of CakePHP, Go, and Vue.js. that was built for the sole purpose of trying out our SDKs that use a programming language that is not part of Sentry’s tech stack.')
                    @slot('twitterAccount', 'cleptric')
                @endcomponent

                {{-- Card - Speaker 2 --}}
                @component('frontend.component.SpeakerCard')
                    @slot('routeLink', '#redirectLink')
                    @slot('photo', asset('assets/images/default-avatar.png'))
                    @slot('name', 'Matus Poruben')
                    @slot('role', 'Frontend Tech & Team lead at Websupport')
                    @slot('bio', '24-year-old Front-End Team Lead at WebSupport, specializing in Vue.js development. With a passion for coding that began at the age of 15. Matus accumulated years of experience in the field. His expertise extends beyond web development, and also have a history of writing mobile apps using Ionic. Additionally, I had the opportunity to share my knowledge as a coding teacher for a brief period of time, helping to inspire and guide students in their coding journey. With a strong commitment to continuous learning and staying up-to-date with the industry, I am dedicated to delivering high-quality solutions and leading successful front-end projects.')
                    @slot('talkTime','15:00 CET')
                    @slot('talkTitle','Building Scalable FE')
                    @slot('talk', 'Building SDKs to be used by other developers is all great fun, but at one point you also need to test out your work in a real application. Does the thing you build actually work in the wild? Is it easy to use, or did you just build something utterly bad? We’ll take a look at building Sentry’s appreciation Slack app called GibPotato, an over-engineered, micro-service-orientated behemoth of CakePHP, Go, and Vue.js. that was built for the sole purpose of trying out our SDKs that use a programming language that is not part of Sentry’s tech stack.')
                    @slot('twitterAccount', null)
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
