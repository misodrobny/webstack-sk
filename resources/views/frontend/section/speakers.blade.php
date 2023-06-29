<section id="speakers" class="bg-turquoise-500 border-b-[16px] lg:border-b-[35px] border-dark-teal">
    <div class="relative container pb-[160px] xl:pt-[128px] xl:pb-[368px] pt-12 min-h-screen">
        <div class="xl:px-[160px] lg:mb-[52px] mb-12">
            @include('frontend.component.HeaderSection', ['titleHeader' => '_speakers'])
        </div>

        <div class="xl:ml-[160px] relative">
            <div id="speakerCards">
                {{-- Card - Speaker 1 --}}
                @component('frontend.component.SpeakerCard')
                    @slot('id', 'michi')
                    @slot('routeLink', '#redirectLink')
                    @slot('photo', asset('assets/images/michi-profile.svg'))
                    @slot('name', 'Michi Hoffmann')
                    @slot('role', 'Software Engineer @ Sentry')
                    @slot('bio', 'Born and raised in Munich, Michi currently resides in Vienna, working as a software engineer at Sentry. While not pocking around in PHP & Go, he sometimes endeavours into the frontend world as well, still missing the good old jQuery days.')
                    @slot('talkTime','14:15 CET')
                    @slot('talkTitle','Eating your own dog food')
                    @slot('talk', 'Building SDKs to be used by other developers is all great fun, but at one point you also need to test out your work in a real application. Does the thing you build actually work in the wild? Is it easy to use, or did you just build something utterly bad? We’ll take a look at building Sentry’s appreciation Slack app called GibPotato, an over-engineered, micro-service-orientated behemoth of CakePHP, Go, and Vue.js. that was built for the sole purpose of trying out our SDKs that use a programming language that is not part of Sentry’s tech stack.')
                    @slot('twitterAccount', 'cleptric')
                @endcomponent

                {{-- Card - Speaker 2 --}}
                @component('frontend.component.SpeakerCard')
                    @slot('id', 'matus')
                    @slot('routeLink', '#redirectLink')
                    @slot('photo', asset('assets/images/matus.png'))
                    @slot('name', 'Matus Poruben')
                    @slot('role', 'Frontend Tech & Team lead @ Websupport')
                    @slot('bio', '24-year-old Front-End Team Lead at WebSupport, specializing in Vue.js development. With a passion for coding that began at the age of 15. Matus accumulated years of experience in the field. His expertise extends beyond web development, and also have a history of writing mobile apps using Ionic. Additionally, he had the opportunity to share his knowledge as a coding teacher for a brief period of time, helping to inspire and guide students in their coding journey. With a strong commitment to continuous learning and staying up-to-date with the industry.')
                    @slot('talkTime','15:00 CET')
                    @slot('talkTitle','Building Scalable FE')
                    @slot('talk', 'Discover the power of NPM packages and Web Components in constructing a scalable front-end architecture. This presentation explores how leveraging NPM packages enhances code modularity and streamlines development, while Web Components enable the creation of reusable UI elements. Learn best practices for project structuring and maintainability. Join us as we explore practical implementation strategies to build a scalable front-end architecture that meets the evolving demands of modern web development.')
                    @slot('twitterAccount', 'matthewporuben')
                @endcomponent

                @component('frontend.component.SpeakerCard')
                    @slot('id', 'simon')
                    @slot('routeLink', '#redirectLink')
                    @slot('photo', asset('assets/images/simon.png'))
                    @slot('name', 'Simon Zamecnik')
                    @slot('role', 'Technical Architect @ UI42')
                    @slot('bio', 'With an experience of 25+ years in codig, he remembers even the prehistoric times of PHP. Creator of the booom.sk portal and many other websites. Currently works as the technical architect at ui42 and is responsible for the developement of the BUXUS CMS, code reuse, code quality and knowledge sharing. Specializes in website performance and parallel processing. But his biggest passion is, and always will be, coding.')
                    @slot('talkTime','16:15 CET')
                    @slot('talkTitle','Taming a zoo of packages')
                    @slot('talk', 'At our company we try to push code reuse to its best and do so by using 200+ own composer packages on 100+ projects. I will show you how we manage and process code changes, keep their quality and spread the word about them to our team. Doesn\'t matter, if you only have a single project and want to improve its quality, or if you manage a large number of projects and do not want to repeat yourself, this talk will give you practical tips for embracing code reuse and hopefully give you ideas how to taim your own zoo of packages.')
                    @slot('twitterAccount', null)
                @endcomponent

                {{-- Card - Proposal --}}
            </div>

{{--             Trigger Next--}}
            <div class="absolute -translate-y-1/2 top-1/2 lg:right-[200px]" id="pseudoNextSlide">
                @component('frontend.component.ws-button-icon')
                    @slot('icon', asset('assets/svgs/ic-arrow-right.svg'))
                    @slot('layer', 'light')
                @endcomponent
            </div>
{{--             Trigger Prev--}}
            <div class="absolute hidden -translate-y-1/2 top-1/2 lg:left-32" id="pseudoPrevSlide">
                @component('frontend.component.ws-button-icon')
                    @slot('icon', asset('assets/svgs/ic-arrow-left.svg'))
                    @slot('layer', 'light')
                @endcomponent
            </div>
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
