<section id="prev-event"
    class="relative bg-turquoise-500 border-b-[16px] lg:border-b-[35px] border-dark-teal overflow-hidden">
    <div class="relative pb-[160px] lg:py-[128px] pt-12 container min-h-screen">
        <div class="xl:px-[160px] lg:mb-[140px] mb-12">
            @include('frontend.component.HeaderSection', ['titleHeader' => '_prev-event'])
        </div>

        <div class="relative mx-auto lg:w-[960px] lg:mb-[170px]">
            <div class="relative lg:h-[540px] w-full">
                <div id="placeholderVideoPrevEvent"
                    style="clip-path: polygon(100% 0%, 100% 90%, 92% 100%, 0% 100%, 0% 0%);">
                    <img src="../assets/images/prev-event.png" class="object-cover w-full h-full" alt="">
                    {{-- Button play --}}
                    <div class="absolute w-16 h-16 translate-x-1/2 -translate-y-1/2 top-1/2 right-1/2 lg:w-auto lg:h-auto"
                        id="btnPlayPrevEvent">
                        @component('frontend.component.ws-button-icon')
                            @slot('icon', asset('assets/svgs/ic-play.svg'))
                            @slot('layer', 'light')
                        @endcomponent
                    </div>
                </div>

                {{-- Video Player -- READ THE JAVASCRIPT AT THE BOTTOM --}}
                <div class="hidden w-full h-full bg-dark-teal">
                    <iframe src="" allowfullscreen allowtransparency allow="autoplay" frameborder="0"
                        id="__prevEventFootage" class="w-full h-full"></iframe>
                </div>
            </div>

            {{-- Ornaments --}}
            @include('frontend.component.PrevEventOrnaments')

            <div class="mt-8 md:mt-12" id="prevEventGallery">
                {{-- Event name, Date, Speakers Small Thumbnail --}}
                <div class="mr-6 lg:mr-16">
                    <h5
                        class="text-turquoise-500 pt-1 bg-dark-teal coolvetica-regular text-2xl md:text-[36px] md:leading-[44px] tracking-[-0.02em] mb-[6px] md:mb-1 w-max">
                        Laravel Meetup
                    </h5>
                    <div class="text-lg md:text-xl md:leading-[30px] text-dark-teal coolvetica-book">
                        12_10_2022_ / <span class="coolvetica-bold">hubhub bratislava_</span>
                    </div>

                    {{-- Small user profile pic --}}
                    <div class="flex mt-3 space-x-[-14px]">
                        <img src="../assets/images/tiny-user1.png"
                            class="w-11 h-11 object-cover rounded-full border-[3px] border-dark-teal" alt="">
                        <img src="../assets/images/tiny-user2.png"
                            class="w-11 h-11 object-cover rounded-full border-[3px] border-dark-teal" alt="">
                        <img src="../assets/images/tiny-user3.png"
                            class="w-11 h-11 object-cover rounded-full border-[3px] border-dark-teal" alt="">
                        <img src="../assets/images/tiny-user4.png"
                            class="w-11 h-11 object-cover rounded-full border-[3px] border-dark-teal" alt="">
                        <img src="../assets/images/tiny-user5.png"
                            class="w-11 h-11 object-cover rounded-full border-[3px] border-dark-teal" alt="">
                        <img src="../assets/images/tiny-user6.png"
                            class="w-11 h-11 object-cover rounded-full border-[3px] border-dark-teal" alt="">
                    </div>
                </div>

                {{-- Gallery image --}}
                <a data-fancybox="prevEventGallery" href="../assets/images/gallery-1.png"
                    class="w-[134px] h-[134px] relative bg-dark-teal overflow-hidden mr-6"
                    style="clip-path: polygon(20% 0%, 100% 0.8%, 100% 100%, 0% 100%, 0% 20%);">
                    <img src="../assets/images/gallery-1.png" class="object-cover w-full h-full" alt="">
                    <img src="../assets/svgs/ic-arrow-upright-small.svg" class="absolute bottom-0 left-0 z-10"
                        alt="">
                </a>
                <a data-fancybox="prevEventGallery" href="../assets/images/gallery-2.png"
                    class="w-[134px] h-[134px] relative bg-dark-teal overflow-hidden mr-6"
                    style="clip-path: polygon(20% 0%, 100% 0.8%, 100% 100%, 0% 100%, 0% 20%);">
                    <img src="../assets/images/gallery-2.png" class="object-cover w-full h-full" alt="">
                    <img src="../assets/svgs/ic-arrow-upright-small.svg" class="absolute bottom-0 left-0 z-10"
                        alt="">
                </a>
                <a data-fancybox="prevEventGallery" href="../assets/images/gallery-3.png"
                    class="w-[134px] h-[134px] relative bg-dark-teal overflow-hidden mr-6"
                    style="clip-path: polygon(20% 0%, 100% 0.8%, 100% 100%, 0% 100%, 0% 20%);">
                    <img src="../assets/images/gallery-3.png" class="object-cover w-full h-full" alt="">
                    <img src="../assets/svgs/ic-arrow-upright-small.svg" class="absolute bottom-0 left-0 z-10"
                        alt="">
                </a>
                <a data-fancybox="prevEventGallery" href="../assets/images/gallery-4.jpg"
                   class="w-[134px] h-[134px] relative bg-dark-teal overflow-hidden mr-6"
                   style="clip-path: polygon(20% 0%, 100% 0.8%, 100% 100%, 0% 100%, 0% 20%);">
                    <img src="../assets/images/gallery-4.jpg" class="object-cover w-full h-full" alt="">
                    <img src="../assets/svgs/ic-arrow-upright-small.svg" class="absolute bottom-0 left-0 z-10"
                         alt="">
                </a>
                <a data-fancybox="prevEventGallery" href="../assets/images/gallery-5.jpg"
                   class="w-[134px] h-[134px] relative bg-dark-teal overflow-hidden mr-6"
                   style="clip-path: polygon(20% 0%, 100% 0.8%, 100% 100%, 0% 100%, 0% 20%);">
                    <img src="../assets/images/gallery-5.jpg" class="object-cover w-full h-full" alt="">
                    <img src="../assets/svgs/ic-arrow-upright-small.svg" class="absolute bottom-0 left-0 z-10"
                         alt="">
                </a>
                <a data-fancybox="prevEventGallery" href="../assets/images/gallery-6.jpg"
                                       class="w-[134px] h-[134px] relative bg-dark-teal overflow-hidden mr-6"
                                       style="clip-path: polygon(20% 0%, 100% 0.8%, 100% 100%, 0% 100%, 0% 20%);">
                    <img src="../assets/images/gallery-6.jpg" class="object-cover w-full h-full" alt="">
                    <img src="../assets/svgs/ic-arrow-upright-small.svg" class="absolute bottom-0 left-0 z-10"
                         alt="">
                </a>
                <a data-fancybox="prevEventGallery" href="../assets/images/gallery-7.jpg"
                   class="w-[134px] h-[134px] relative bg-dark-teal overflow-hidden mr-6"
                   style="clip-path: polygon(20% 0%, 100% 0.8%, 100% 100%, 0% 100%, 0% 20%);">
                    <img src="../assets/images/gallery-7.jpg" class="object-cover w-full h-full" alt="">
                    <img src="../assets/svgs/ic-arrow-upright-small.svg" class="absolute bottom-0 left-0 z-10"
                         alt="">
                </a>
                <a data-fancybox="prevEventGallery" href="../assets/images/gallery-8.jpg"
                   class="w-[134px] h-[134px] relative bg-dark-teal overflow-hidden mr-6"
                   style="clip-path: polygon(20% 0%, 100% 0.8%, 100% 100%, 0% 100%, 0% 20%);">
                    <img src="../assets/images/gallery-8.jpg" class="object-cover w-full h-full" alt="">
                    <img src="../assets/svgs/ic-arrow-upright-small.svg" class="absolute bottom-0 left-0 z-10"
                         alt="">
                </a>

                {{-- Plus thumbs --}}
{{--                <a href="#" class="w-[134px] h-[134px] relative bg-dark-teal overflow-hidden mr-6"--}}
{{--                    style="clip-path: polygon(100% 0%, 100% 80%, 80% 100%, 0% 100%, 0% 0%);">--}}
{{--                    <img src="../assets/svgs/ic-plus.svg"--}}
{{--                        class="absolute z-10 translate-x-1/2 translate-y-1/2 bottom-1/2 right-1/2" alt="">--}}
{{--                </a>--}}
            </div>
        </div>

        {{-- Next section button (Dark) --}}
        @include('frontend.component.ButtonNextSection', [
            'buttonType' => 'dark',
            'nextSection' => '#book-tickets',
        ])
    </div>
</section>


@push('scripts')
    <script type="text/javascript">
        // gallery slider
        $('#prevEventGallery').flickity({
            cellAlign: 'left',
            contain: true,
            pageDots: false,
            imagesLoaded: true,
            prevNextButtons: false,
        })

        // FancyBox Config
        Fancybox.bind('[data-fancybox="prevEventGallery"]', {
            Thumbs: {
                type: "modern"
            },
            on: {
                loaded: () => {
                    $('.fancybox__backdrop').addClass('!bg-dark-teal')
                },
            },
        });

        // Prev event video
        $('#btnPlayPrevEvent').on('click', () => {
            $embedId = 'T6_Cd6ppc3g'
            $iframeSrc =
                `https://www.youtube.com/embed/${$embedId}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1&amp;autoplay=1`

            $('#placeholderVideoPrevEvent').addClass('hidden')
            $('#__prevEventFootage').parent().removeClass('hidden')
            $('#__prevEventFootage').attr('src', $iframeSrc)

            // Move up ornaments block
            $('[data-ornaments]').css({
                // transform: 'translateY(-130px)'
                opacity: 0
            })
        })
    </script>
@endpush
