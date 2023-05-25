{{-- <!-- Modal Propose Talk --> --}}
<section id="__modal-container">
    <div class="modal-background">
        <div class="h-full overflow-y-auto modal-content">
            <div class="modal-header">
                <h3
                class="text-turquoise-500 coolvetica-bold text-[48px] leading-[44px] md:text-[84px] md:leading-[90px] tracking-[-0.02em]">
                    _propose-a-talk
                </h3>
                <a href="javascript:void(0);" id="close-propose-talk" class="relative group">
                    <img src="../assets/svgs/ic-close.svg" class="w-16 h-16 lg:h-auto lg:w-auto relative z-20 group-hover:translate-y-1 group-active:translate-y-[10px] transition-all" alt="">
                    <img src="../assets/svgs/layer-light.svg"
                        class="w-16 h-16 lg:h-auto lg:w-auto absolute z-10 transition-all top-2"
                        alt="">
                </a>
            </div>
            <div class="modal-body" style="clip-path: polygon(100% 0%, 100% 90%, 90% 100%, 0% 100%, 0% 0%);">
                <p class="coolvetica-book text-lg md:text-xl md:leading-[30px] mb-10 text-dark-teal">
                    Calling Laravel experts and software developers! Share your insights and experiences with us. <span class="coolvetica-bold">Submit your talk proposal today for a chance to speak at our conference!</span>
                </p>
                <form action="" class="flex flex-col gap-10">
                    <input type="text" name="name" id="name" placeholder="First and last name" class="outline-none py-[17px] coolvetica-regular text-xl text-dark-teal bg-transparent border-b-[3px] border-b-dark-teal placeholder-dark-teal">
                    <div class="grid gap-10 md:grid-cols-2">
                        <input type="email" name="email" id="email" placeholder="E-mail" class="outline-none py-[17px] coolvetica-regular text-xl text-dark-teal bg-transparent border-b-[3px] border-b-dark-teal placeholder-dark-teal">
                        <input type="text" name="twitter" id="twitter" placeholder="Twitter" class="outline-none py-[17px] coolvetica-regular text-xl text-dark-teal bg-transparent border-b-[3px] border-b-dark-teal placeholder-dark-teal">
                    </div>
                    <input type="text" name="topic" id="topic" placeholder="Topic" class="outline-none py-[17px] coolvetica-regular text-xl text-dark-teal bg-transparent border-b-[3px] border-b-dark-teal placeholder-dark-teal">
                    <textarea name="abstract" id="" rows="3" class="outline-none py-[17px] coolvetica-regular text-xl text-dark-teal bg-transparent border-b-[3px] border-b-dark-teal placeholder-dark-teal" placeholder="Abstract"></textarea>
                    <button type="submit" class="px-6 py-3 bg-white coolvetica-bold text-dark-teal w-max">
                        type='submit'
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>


@push('scripts')
    <script type="text/javascript">
        // Modal JS
        $('[data-propose-talk]').click(function(){
            $('#__modal-container').removeAttr('class').addClass('animation-unfolding');
            $('body').addClass('overflow-hidden');
        })

        $('#close-propose-talk').click(function(){
            $('#__modal-container').addClass('out');
            $('body').removeClass('overflow-hidden');
        });
    </script>
@endpush
