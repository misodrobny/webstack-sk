<section id="start"
    class="container relative min-h-screen pb-[128px] xl:px-[160px] overflow-hidden lg:overflow-visible">
    {{-- Big W --}}
    <div class="absolute top-10 -right-[104px] lg:-top-[330px] lg:right-20 -z-10" id="innerW" data-aos="zoom-in-up"
        data-aos-delay="300" data-aos-duration="600">
        <svg width="909" height="850" class="w-[356px] h-[333px] md:w-full md:h-full " viewBox="0 0 909 850"
            fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M393.041 334.838L481.719 256.214L786.725 431.416L649.285 107.633L737.954 29L908.922 487.633L828.626 558.829L393.041 334.838Z"
                fill="#002B2E" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M373.934 269.818L288.772 345.325V345.335L289.794 345.859L289.337 346.264L372.338 544.295L526.922 632.602L438.005 421.75L374.376 270.866L373.934 269.818ZM532.303 338.622L592.246 500.729L778.871 596.291L869.537 515.901L678.239 0L578.109 88.7773L732.029 452.935L532.303 338.622ZM571.655 774.717L486.749 850L0 602.811L85.9775 526.582L571.655 774.717Z"
                fill="#2EFFD9" />
        </svg>
    </div>

    <h1
        class="text-white coolvetica-bold md:leading-[128px] md:text-[118px] leading-[44px] text-[48px] tracking-[-0.02em] md:tracking-[-0.02em] max-w-[287px] md:max-w-[770px] ml-0 lg:mt-5 mt-[60px] min-h-[200px] md:min-h-[300px] lg:min-h-[550px]" id="heroHeadline">
    </h1>

    <div class="flex flex-col items-end justify-between md:flex-row">
        {{-- Next section button (Light) --}}
        @include('frontend.component.ButtonNextSection', [
            'buttonType' => 'light',
            'nextSection' => '#speakers',
        ])

        {{-- Date --}}
        <div
            class="text-turquoise-500 mt-[70px] md:mt-[50px] px-0 flex flex-col items-start w-max justify-end ml-auto mb-[134px] lg:mb-0">
            <p class="mb-2 text-xl md:text-2xl coolvetica-bold">_when/where</p>
            <p class="text-[30px] leading-[38px] md:text-[48px] md:leading-[44px] coolvetica-bold">
                28_09_2023_ <br>
                hubhub bratislava_
            </p>
        </div>
    </div>
</section>

@push('css')
    <style>
        :root {
            --ti-cursor-transform: translate(100%, 23%) rotate(90deg);
            --ti-cursor-color: #FFB500;
            --ti-cursor-font-size: 0.5em;
        }
    </style>

@endpush

@push('scripts')
    <script src="https://unpkg.com/typeit@8.7.1/dist/index.umd.js"></script>
    <script>
        const typeHeadline = new TypeIt("#heroHeadline", {
            speed: 100,
            startDelay: 900,
        })
            .type('_web <br class="hidden lg:block">', {delay: 100})
            .type('dveloopers', {delay: 100})
            .move(-4, {delay: 1000})
            .delete(1, {delay: 700})
            .move(-4, {delay: 1000})
            .type('e', {delay: 700})
            .move(null, { to: "END" })
            .type('<br class="hidden lg:block"> conference <br class="hidden lg:block">', {delay: 200})
            .type('not only for', {delay: 200})
            .delete(12, {delay: 300})
            .type('<span class="text-gold coolvetica-bold">not only for <br class="hidden lg:block"> laravel artisans</span>', {delay: 300})
        typeHeadline.go()
    </script>
@endpush
