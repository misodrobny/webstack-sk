<section id="book-tickets" class="border-b-[16px] lg:border-b-[35px] border-turquoise-500 mt-4 lg:pt-[35px]">
    @include('frontend.component.CarouselBookYourTickets')

    <div class="container relative pt-6 md:pt-[128px] pb-8 md:pb-[114px] lg:px-[100px] flex flex-col">
        <div class="flex-col flex-items-center md:flex-row">
            {{-- <!-- Mail To --> --}}
            <div class="inline-flex gap-[31px] items-end md:mr-20 lg:mr-[40px] w-full md:w-max">
                <div class="w-fit md:h-[60px] py-[15px]">
                    <img src="../assets/svgs/ic-arrow-upright.svg" alt="">
                </div>
                <div class="flex flex-col w-full group md:w-max">
                    <div class="flex flex-row md:flex-col gap-x-[13px] items-center md:items-start pb-[13px]">
                        <label for=""
                            class="text-turquoise-500 coolvetica-regular text-lg md:text-[20px] md:leading-[30px]">mailto:</label>
                        <a href="mailto:hello@webstack.sk"
                            class="text-white md:text-turquoise-500 text-xl md:text-[48px] md:leading-[44px] tracking-[-0.02em] coolvetica-regular">
                            hello@webstack.sk
                        </a>
                    </div>
                    {{-- <!-- bottom line --> --}}
                    <div class="relative bg-[#17a68c] w-full h-[3px]">
                        <div class="absolute left-0 w-0 h-full transition-all bg-turquoise-500 group-hover:w-full">
                        </div>
                    </div>
                </div>
            </div>

            {{-- <!-- partner 1 --> --}}
            <a rel="partner" target="_blank" href="https://meetbrackets.com/"
                class="inline-flex gap-[31px] items-end md:mr-20 lg:mr-[40px] w-full md:w-max">
                <div class="w-fit md:h-[60px] py-[15px]">
                    <img src="../assets/svgs/ic-arrow-upright-upload.svg" alt="">
                </div>
                <div class="flex flex-col w-full group md:w-max">
                    <div class="flex flex-row md:flex-col gap-x-[13px] items-center md:items-start pb-[13px]">
                        <label for=""
                            class="text-turquoise-500 coolvetica-regular text-lg md:text-[20px] md:leading-[30px]">rel='partner'</label>
                        {{-- <!-- Desktop icon --> --}}
                        <img src="../assets/svgs/partner-brackets-turquoise.svg" class="brackets-image mt-[14px] hidden md:block"
                            alt="">
                        {{-- <!-- Mobile icon --> --}}
                        <img src="../assets/svgs/partner-brackets-turquoise.svg" class="brackets-image block md:hidden" alt="">
                    </div>
                    {{-- <!-- bottom line --> --}}
                    <div class="relative bg-[#17a68c] w-full h-[3px]">
                        <div class="absolute left-0 w-0 h-full transition-all bg-turquoise-500 group-hover:w-full">
                        </div>
                    </div>
                </div>
            </a>

            @push('scripts')
                <script type="text/javascript">
                </script>
            @endpush

            {{-- <!-- partner 2 --> --}}
            <a rel="partner" target="_blank" href="https://www.theshop.dev/"
                class="inline-flex gap-[31px] items-end md:mr-20 lg:mr-[82px] w-full md:w-max">
                <div class="w-fit md:h-[60px] py-[15px]">
                    <img src="../assets/svgs/ic-arrow-upright-upload.svg" alt="">
                </div>
                <div class="flex flex-col w-full group md:w-max">
                    <div class="flex flex-row md:flex-col gap-x-[13px] items-center md:items-start pb-[13px]">
                        <label for=""
                            class="text-turquoise-500 coolvetica-regular text-lg md:text-[20px] md:leading-[30px]">rel='partner'</label>
                        {{-- <!-- Desktop icon --> --}}
                        <img src="../assets/svgs/partner-theshop-turquoise.svg" class="the-shop-image mt-[14px] hidden md:block"
                            alt="">
                        {{-- <!-- Mobile icon --> --}}
                        <img src="../assets/svgs/partner-theshop-turquoise.svg" class="the-shop-image block md:hidden" alt="">
                    </div>
                    {{-- <!-- bottom line --> --}}
                    <div class="relative bg-[#17a68c] w-full h-[3px]">
                        <div class="absolute left-0 w-0 h-full transition-all bg-turquoise-500 group-hover:w-full">
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <footer class="flex items-center justify-between mt-12 md:mt-[83px] gap-6 flex-col-reverse md:flex-row">
            <div class="inline-flex justify-between w-full gap-12 md:w-max">
                <p class="text-base md:text-lg text-turquoise-500 coolvetica-book">
                    © Webstack 2023. <span class="hidden md:inline">All rights reserved.</span>

                </p>
                <a target="_blank" href="{{ route('privacy-policy') }}" class="text-base text-white md:text-lg coolvetica-book">
                    /privacy-policy
                </a>
            </div>

            {{-- <!-- Social Media --> --}}
            @include('frontend.component.SocialMedia')
        </footer>
    </div>
</section>
