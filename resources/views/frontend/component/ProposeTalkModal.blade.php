{{-- Modal Propose Talk --}}
<section id="__modal-container">
    <div class="modal-background">
        <div class="h-full overflow-y-auto modal-content">
            <div class="modal-header">
                <h3
                        class="text-turquoise-500 coolvetica-bold text-[48px] leading-[44px] md:text-[84px] md:leading-[90px] tracking-[-0.02em]">
                    _propose-a-talk
                </h3>
                <div id="close-propose-talk">
                    @component('frontend.component.ws-button-icon')
                        @slot('icon', asset('assets/svgs/ic-close.svg'))
                        @slot('layer', 'light')
                    @endcomponent
                </div>
            </div>
            <div class="modal-body" style="clip-path: polygon(100% 0%, 100% 90%, 90% 100%, 0% 100%, 0% 0%);">
                <p id="propose-talk-success"
                   class="coolvetica-book text-lg md:text-xl md:leading-[30px] mb-10 text-dark-teal hidden">

                </p>

                <p id="propose-talk-header"
                   class="coolvetica-book text-lg md:text-xl md:leading-[30px] mb-10 text-dark-teal">
                    Calling Laravel experts and software developers! Share your insights and experiences with us. <span
                            class="coolvetica-bold">Submit your talk proposal today for a chance to speak at our conference!</span>
                </p>
                <form id="proposeTalkForm" action="{{ route('propose-talk') }}" method="POST"
                      enctype="application/x-www-form-urlencoded" class="flex flex-col gap-10">
                    @csrf
                    {!! RecaptchaV3::field('send_email') !!}
                    <div>
                        <input type="text" name="name" id="name" placeholder="First and last name"
                               class="outline-none py-[17px] coolvetica-regular text-xl text-dark-teal bg-transparent border-b-[3px] border-b-dark-teal placeholder-dark-teal w-full">
                    </div>
                    <div class="grid gap-10 md:grid-cols-2">
                        <div>
                            <input type="email" name="email" id="email" placeholder="E-mail"
                                   class="outline-none py-[17px] coolvetica-regular text-xl text-dark-teal bg-transparent border-b-[3px] border-b-dark-teal placeholder-dark-teal w-full">
                        </div>
                        <div>
                            <input type="text" name="twitter" id="twitter" placeholder="Twitter"
                                   class="outline-none py-[17px] coolvetica-regular text-xl text-dark-teal bg-transparent border-b-[3px] border-b-dark-teal placeholder-dark-teal w-full">
                        </div>
                    </div>
                    <div>
                        <input type="text" name="topic" id="topic" placeholder="Topic"
                               class="outline-none py-[17px] coolvetica-regular text-xl text-dark-teal bg-transparent border-b-[3px] border-b-dark-teal placeholder-dark-teal w-full">
                    </div>
                    <div>
                        <textarea id="abstract" name="abstract" rows="3"
                                  class="outline-none py-[17px] coolvetica-regular text-xl text-dark-teal bg-transparent border-b-[3px] border-b-dark-teal placeholder-dark-teal w-full"
                                  placeholder="Abstract"></textarea>
                    </div>
                    <button id="submitButton" type="submit"
                            class="px-6 py-3 bg-white coolvetica-bold text-dark-teal w-100">
                        type='submit'
                    </button>
                </form>
                @push('scripts')
                    <script>
                        $(function () {
                            $('#submitButton').click(function (e) {
                                e.preventDefault();

                                $.ajax({
                                    method: "POST",
                                    url: "{{ route('propose-talk') }}",
                                    data: $('#proposeTalkForm').serialize(),
                                    dataType: "json",
                                    encode: true,
                                    beforeSend: function () {
                                        $('#proposeTalkForm').find('input, textarea').removeClass('border-b-red');
                                        $('#proposeTalkForm').find('input, textarea').addClass('border-b-dark-teal');
                                        $('#submitButton').attr("disabled", true);
                                        $('.has-error').remove();
                                    },
                                    success: function (data, textStatus, xhr) {
                                        $("#proposeTalkForm").trigger("reset").hide();
                                        $("#propose-talk-header").hide();
                                        $("#propose-talk-success").html(data.message).show();
                                    },
                                    error: function (data) {
                                        if (data.status === 422) {
                                            for (const [key, value] of Object.entries(data.responseJSON.errors)) {
                                                $('#proposeTalkForm').find('[name="' + key + '"]')
                                                    .removeClass('border-b-dark-teal')
                                                    .addClass('border-b-red')
                                                    .after('<p class="has-error text-red text-sm italic">' + value + '</p>');
                                            }
                                        }
                                    },
                                    complete: function (xhr, textStatus) {
                                        $('#submitButton').attr("disabled", false);
                                        grecaptcha.execute('{{ config('recaptchav3.sitekey') }}', {action: 'send_email'})
                                            .then(function (token) {
                                                    $('#proposeTalkForm').find("[name='g-recaptcha-response']").val(token);
                                                }
                                            );
                                    }
                                })
                            });
                        });
                    </script>
                @endpush
            </div>
        </div>
    </div>
</section>


@push('scripts')
    <script type="text/javascript">
        // Modal JS
        $('[data-propose-talk]').click(function () {
            $('#__modal-container').removeAttr('class').addClass('animation-unfolding');
            $('body').addClass('overflow-hidden');
        })

        $('#close-propose-talk').click(function () {
            $("#proposeTalkForm").trigger("reset").show();
            $("#propose-talk-header").show();
            $("#propose-talk-success").html('').hide();

            $('#proposeTalkForm').find('input, textarea').removeClass('border-b-red');
            $('#proposeTalkForm').find('input, textarea').addClass('border-b-dark-teal');
            $('#submitButton').attr("disabled", false);
            $('.has-error').remove();

            $('#__modal-container').addClass('out');
            $('body').removeClass('overflow-hidden');
        });
    </script>
@endpush
