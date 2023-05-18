<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Webstack | Landing Page</title>

        <link rel="shortcut icon" href="{{ asset('assets/svgs/app-logo.svg') }}" type="image/x-icon">

        <link rel="stylesheet" href="{{ asset('style/main.css') }}">
        <link rel="stylesheet" href="{{ asset('style/autoSlideAnimation.css') }}">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    </head>

    <body class="overflow-x-hidden">
        @include('frontend.component.Navbar')

        @yield('content')

        @include('frontend.component.ProposeATalk')

        <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('assets/scripts/3dEffect.js') }}" type="text/javascript"></script>

        @stack('scripts')
        <script>
            // Init AOS animate
            AOS.init();

            const prevNextButtons = $(window).width() > 991 ? true : false
            // const isDraggable = $(window).width() < 991 ? true : false

            $('#prevEventGallery').flickity({
                cellAlign: 'left',
                contain: true,
                pageDots: false,
                imagesLoaded: true,
                prevNextButtons: false,
                // draggable: isDraggable
            })

            $('#speakerCards').flickity({
                cellAlign: 'center',
                contain: true,
                pageDots: false,
                imagesLoaded: true,
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

            // FancyBox Config
            Fancybox.bind('[data-fancybox]', {});
            // Custom the FancyBox style
            $('[data-fancybox]').on('click', () => {
                setTimeout(() => {
                    $('.fancybox__backdrop').addClass('!bg-dark-teal')
                }, 100);
            })

            // Prev event video
            $('#btnPlayPrevEvent').on('click', () => {
                $embedId = 'daj9TVwlWb0'
                $iframeSrc = `https://www.youtube.com/embed/${$embedId}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1&amp;autoplay=1`

                $('#placeholderVideoPrevEvent').addClass('hidden')
                $('#__prevEventFootage').parent().removeClass('hidden')
                $('#__prevEventFootage').attr('src', $iframeSrc)

                // Move up ornaments block
                $('[data-ornaments]').css({
                    // transform: 'translateY(-130px)'
                    opacity: 0
                })
            })

            // scroll helper
            document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
                anchor.addEventListener("click", function (e) {
                    e.preventDefault();
                    if (this.getAttribute("href") != "#" && this.getAttribute("href") != "#!") {
                        document.querySelector(this.getAttribute("href")).scrollIntoView({
                            behavior: "smooth",
                        });
                    }
                });
            });
        </script>
    </body>

</html>
