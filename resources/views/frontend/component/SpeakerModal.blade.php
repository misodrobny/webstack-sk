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
                        <img data-add-speaker-image src="" class="w-[171px] h-[171px] md:h-[171px] object-cover top-left-triangle" alt="">
                        <div class="flex items-center gap-3 mt-6" data-add-speaker-twitter>
                            <img src="{{ asset('assets/svgs/logo-twitter-dark.svg') }}" alt="">
                            <a data-add-speaker-twitter-url href="" target="_blank">
                                <p data-add-speaker-twitter-name class="text-base md:text-lg text-dark-teal coolvetica-book">

                                </p>
                            </a>
                        </div>
                        <div class="flex items-center gap-3 mt-6" data-add-speaker-linkedin>
                            <img src="{{ asset('assets/svgs/logo-linkedin-dark.svg') }}" alt="">
                            <a data-add-speaker-linkedin-url href="" target="_blank">
                                <p data-add-speaker-linkedin-name class="text-base md:text-lg text-dark-teal coolvetica-book">

                                </p>
                            </a>
                        </div>
                    </div>
                    <div>
                        <h5 data-add-speaker-name class="coolvetica-regular text-2xl md:text-[48px] md:leading-[44px] md:tracking-[-0.02em] mb-10"></h5>
                        <span class="coolvetica-book text-[20px] leading-[30px] font-bold">[BIO] </span><span data-add-speaker-bio class="coolvetica-book text-[20px] leading-[30px] font-normal">

                        </span>
                    </div>
                </div>
                <p data-add-talk-time class="coolvetica-bold text-2xl md:text-[48px] md:leading-[44px] md:tracking-[-0.02em] mt-10 mb-6">14:15 CET</p>
                <span data-add-talk-title class="coolvetica-regular text-2xl md:text-[48px] md:leading-[44px] md:tracking-[-0.02em] bg-dark-teal text-turquoise-500"></span>
                <p data-add-talk-content class="coolvetica-book text-[20px] leading-[30px] font-normal mt-6">
                    
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
            let speakerElement = $(this).data("id");

            let dataSpeakerImage = $('#' + speakerElement).find('[data-speaker-image]').attr('src');
            let dataSpeakerName = $('#' + speakerElement).find('[data-speaker-name]').html();
            let dataSpeakerRole = $('#' + speakerElement).find('[data-speaker-role]').html();
            let dataSpeakerBio = $('#' + speakerElement).find('[data-speaker-bio]').html();
            let dataTalkTitle = $('#' + speakerElement).find('[data-talk-title]').html();
            let dataTalkTime = $('#' + speakerElement).find('[data-talk-time]').html();
            let dataTalkContent = $('#' + speakerElement).find('[data-talk-content]').html();
            let dataSpeakerTwitter = $('#' + speakerElement).find('[data-speaker-twitter]').html();
            let dataSpeakerLinkedin = $('#' + speakerElement).find('[data-speaker-linkedin]').html();

            $('[data-add-speaker-image]').attr('src', dataSpeakerImage);
            $('[data-add-speaker-name]').html(dataSpeakerName);
            $('[data-add-speaker-role]').html(dataSpeakerRole);
            $('[data-add-speaker-bio]').html(dataSpeakerBio);
            $('[data-add-talk-title]').html(dataTalkTitle);
            $('[data-add-talk-time]').html(dataTalkTime);
            $('[data-add-talk-content]').html(dataTalkContent);
            if (dataSpeakerTwitter == "") {
                $('[data-add-speaker-twitter]').addClass('hidden');
            } else {
                $('[data-add-speaker-twitter]').removeClass('hidden');
                $('[data-add-speaker-twitter-url]').attr('href', "https://twitter.com/" + dataSpeakerTwitter);
                $('[data-add-speaker-twitter-name]').html("/" + dataSpeakerTwitter);
            }

            if (dataSpeakerLinkedin == "") {
                $('[data-add-speaker-linkedin]').addClass('hidden');
            } else {
                $('[data-add-speaker-linkedin]').removeClass('hidden');
                $('[data-add-speaker-linkedin-url]').attr('href', "https://www.linkedin.com/in/" + dataSpeakerLinkedin);
                $('[data-add-speaker-linkedin-name]').html("/" + dataSpeakerLinkedin);
            }
        })

        $('#close-speaker-detail').click(function(){
            $('#__speaker-detail-modal-container').addClass('out');
            $('body').removeClass('overflow-hidden');
        });
    </script>
@endpush
