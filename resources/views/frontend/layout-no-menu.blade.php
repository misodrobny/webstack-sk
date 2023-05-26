<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Webstack | Privacy Policy</title>

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
        @yield('content')

        <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="{{ asset('assets/scripts/3dEffect.js') }}" type="text/javascript"></script>

        @stack('scripts')
    </body>

</html>
