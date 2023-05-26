<nav id="navigationBar" class="top-0 z-20 w-full transition-all lg:py-8 sticky">
    <div class="container flex flex-col items-center w-full lg:justify-between lg:flex-row">
        {{-- <!-- App Logo & Mobile nav toggler --> --}}
        <div class="relative inline-flex items-center justify-between w-full py-4 lg:w-auto lg:py-0">
            {{-- <!-- Logo --> --}}
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/svgs/app-logo.svg') }}" class="w-[65px] h-[75px] lg:w-auto lg:h-full transition ease-in-out duration-300 scale-100"
                    id="__appLogo" alt="">
            </a>

            {{-- Mobile Toggler --}}
            <a href="javascript:void(0);" id="mobileToggler" data-target="#__navMenus">
                <div class="child"></div>
                <div class="child"></div>
            </a>
        </div>

        {{-- <!-- Nav Menu - Hidden on mobile --> --}}
        <div class="hidden lg:block absolute top-0 z-30 pt-[22px] lg:pt-0 pl-8 lg:pl-0 lg:static border-l-[16px] border-l-turquoise-500 lg:border-none bg-dark-teal lg:bg-transparent overflow-y-auto w-full h-full lg:w-auto lg:h-auto left-full lg:left-0 transition-all duration-300"
            id="__navMenus">
            <div class="flex flex-col gap-8 lg:items-center lg:flex-row h-full">
                <div class="inline-flex items-center lg:hidden">
                    <p class="text-white coolvetica-bold text-[48px] leading-[44px] tracking-[-0.02em]">
                        _nav
                    </p>
                </div>
                <a href="#start" class="nav-link">
                    /#start
                </a>
                <a href="#speakers" class="nav-link">
                    /#speakers
                </a>
                <a href="#event-schedule" class="nav-link">
                    /#event-schedule
                </a>
                <a href="#" class="nav-link" data-propose-talk>
                    /?propose-a-talk
                </a>
                <a href="#book-tickets" class="btn-primary w-max" id="bookTicketBtn">
                    /book-tickets
                </a>

                <div class="flex flex-col gap-5 lg:hidden mt-auto pb-[35px] lg:pb-0">
                    {{-- <!-- Mail To --> --}}
                    <div class="inline-flex gap-[31px] items-center md:mr-20 lg:mr-[136px] w-full md:w-max">
                        <img src="../assets/svgs/ic-arrow-upright.svg" class="w-[23px] h-8" alt="">
                        <div class="flex flex-col w-full group md:w-max">
                            <div class="flex flex-row md:flex-col gap-x-[13px] items-center md:items-start">
                                <label for=""
                                    class="text-turquoise-500 coolvetica-regular text-lg md:text-[20px] md:leading-[30px]">mailto:</label>
                                <a href="mailto:hello@webstack.sk"
                                    class="text-white md:text-turquoise-500 text-xl md:text-[48px] md:leading-[44px] tracking-[-0.02em] coolvetica-regular">
                                    hello@webstack.sk
                                </a>
                            </div>
                        </div>
                    </div>

                    @include('frontend.component.SocialMedia')
                </div>
            </div>
        </div>
    </div>
</nav>

@push('scripts')
    <script>
        // NavigationBar config
        let navigationBar = $('#navigationBar')
        function navCss(topValue) {
            navigationBar.css({
                top: topValue,
                transition: "top 300ms linear",
                width: "100%"
            });
        }
        $(document).ready(function () {
            let isOpen = false //mobile nav state
            $("#mobileToggler").each(function (_, navToggler) {
                let target = $(navToggler).data("target");
                $(navToggler).on("click", function (e) {
                    isOpen = !isOpen // update nav state

                    if (!isOpen) {
                        setTimeout(() => {
                            $(target).toggleClass('hidden')
                        }, 400);
                    } else {
                        $(target).toggleClass('hidden')
                    }
                    // Animate left to right (element must have properties "left: 100%"")
                    setTimeout(() => {
                        $(target).toggleClass('!left-0')
                    }, 100);

                    // Animate the nav toggler to "X"
                    $('#' + e.currentTarget.id).toggleClass('toggled')
                    $('body').toggleClass('overflow-y-hidden')
                })
            })

            // Trigger close mobile navigation
            $('.nav-link, #bookTicketBtn').on('click', () => {
                isOpen = !isOpen
                $('body').removeClass('overflow-y-hidden')
                $('#mobileToggler').removeClass('toggled')
                $('#__navMenus').removeClass('!left-0')
                setTimeout(() => {
                    $('#__navMenus').addClass('hidden')
                }, 100);
            })

            // navigation bar onScroll Effect
            $(window).on('scroll', (w) => {
                if ($(window).width() > 991) {
                    if ($(window).scrollTop() > navigationBar.height() + 64) {
                        $('#__appLogo').css({
                            transform: 'scale(0.6)',
                        })
                        navigationBar.css({
                            paddingTop: 0,
                            paddingBottom: 0
                        })
                    } else {
                        $('#__appLogo').removeAttr("style")
                        navigationBar.removeAttr("style")
                    }
                } else {
                    navigationBar.removeClass('sticky')
                }
            })
        })
    </script>
@endpush
