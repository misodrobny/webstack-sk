{{-- Modal Propose Talk --}}
<section id="__speaker-detail-modal-container">
    <div class="modal-background">
        <div class="h-full overflow-y-auto modal-content">
            <div class="modal-header">
                <h3
                class="text-turquoise-500 coolvetica-bold text-[48px] leading-[44px] md:text-[84px] md:leading-[90px] tracking-[-0.02em]">
                    _about-speaker
                </h3>
                <div id="close-speaker-detail">
                    @component('frontend.component.ws-button-icon')
                        @slot('icon', asset('assets/svgs/ic-close.svg'))
                        @slot('layer', 'light')
                    @endcomponent
                </div>
            </div>
            <div class="modal-body" style="clip-path: polygon(100% 0%, 100% 90%, 90% 100%, 0% 100%, 0% 0%);">
                <div class="grid gap-10 md:grid-cols-[30%_70%] border-b-[3px] pb-[35px] border-b-dark-teal">
                    <div>
                        <img src="{{ asset('assets/images/michi-profile.svg') }}" class="w-[171px] h-[171px] md:h-[171px] object-cover top-left-triangle" alt="">
                        <div class="flex items-center gap-3 mt-6">
                            <img src="{{ asset('assets/svgs/logo-twitter-dark.svg') }}" alt="">
                            <a href="{{ 'https://twitter.com/cleptric' }}" target="_blank">
                                <p class="text-base md:text-lg text-dark-teal coolvetica-book">
                                    /cleptric
                                </p>
                            </a>
                        </div>
                    </div>
                    <div>
                        <h5 class="coolvetica-regular text-2xl md:text-[48px] md:leading-[44px] md:tracking-[-0.02em] mb-10">Michi Hoffmann</h5>
                        <span class="coolvetica-book text-[20px] leading-[30px] font-bold">[BIO] </span><span class="coolvetica-book text-[20px] leading-[30px] font-normal">Born and raised in Munich, Michi currently resides in Vienna, working as a software engineer at Sentry.
                            While not pocking around in PHP & Go, he sometimes endeavours into the frontend world as well, still missing the good old jQuery days.</span>
                    </div>
                </div>
                <p class="coolvetica-bold text-2xl md:text-[48px] md:leading-[44px] md:tracking-[-0.02em] mt-10 mb-6">14:15 CET</p>
                <span class="coolvetica-regular text-2xl md:text-[48px] md:leading-[44px] md:tracking-[-0.02em] bg-dark-teal text-turquoise-500">Eating your own dog food</span>
                <p class="coolvetica-book text-[20px] leading-[30px] font-normal mt-6">
                    Building SDKs to be used by other developers is all great fun, but at one point you also need to test out your work in a real application. Does the thing you build actually work in the wild? Is it easy to use, or did you just build something utterly bad? We’ll take a look at building Sentry’s appreciation Slack app called GibPotato, an over-engineered, micro-service-orientated behemoth of CakePHP, Go, and Vue.js. that was built for the sole purpose of trying out our SDKs that use a programming language that is not part of Sentry’s tech stack.
                </p>
            </div>
        </div>
    </div>
</section>


@push('scripts')
    <script type="text/javascript">
        // Modal JS
        $('[data-speaker-detail]').click(function(){
            $('#__speaker-detail-modal-container').removeAttr('class').addClass('animation-unfolding');
            $('body').addClass('overflow-hidden');
        })

        $('#close-speaker-detail').click(function(){
            $('#__speaker-detail-modal-container').addClass('out');
            $('body').removeClass('overflow-hidden');
        });
    </script>
@endpush
