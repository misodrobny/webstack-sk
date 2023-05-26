<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Webstack | Landing Page</title>

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <meta property="og:title" content="webstack.sk">
        <meta property="og:description" content="_web developers conference not only for laravel artisans_">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ asset('assets/logo.png') }}"/>

        <link rel="shortcut icon" href="{{ asset('assets/svgs/app-logo.svg') }}" type="image/x-icon">

        @vite('resources/css/app.css')

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
        <script defer data-domain="webstack.sk" src="https://plausible.io/js/script.js"></script>

        @stack('css')

        {!! RecaptchaV3::initJs() !!}
    </head>

    <body class="overflow-x-hidden">
        @include('frontend.component.Navbar')

        @yield('content')

        @include('frontend.component.ProposeTalkModal')

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
