<section class="relative w-[1440px] mt-10 mb-14 pl-[45px] mx-auto">

    <!-- Background huge text layer -->
    <div class="absolute right-0 top-0 z-10 opacity-100">
         <?php get_template_part("svg/berbecue_svg");?>
  
    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20 flex gap-3 pl-[80px] pr-16 pt-[45px] w-full">
        <!-- left side text -->
        <div class="about-left w-1/2 flex flex-col pt-5 items-start gap-5">
            <h2 class="text-[#16396F] max-w-[550px] font-bebas-pro text-[78px] font-bold leading-[81px] tracking-[1.56px] uppercase">
                Smokin’ Highlights: The <span class="text-[#F65600]">best bbq</span> in action
              
            </h2>

            <p class="text-black max-w-[533px] font-jost text-[19px] font-normal leading-normal tracking-[0.38px]">
                Teams from all around the area will compete in this KCBS sanctioned, Idaho State Competition.
                Teams will cook chicken, ribs, pork and brisket. <br>
                The winning team will be crowned the SMOKE-N-WINGS winner and the Idaho State Champions and be eligible for the American Royal and the Jack Daniels World Championship.
            </p>
        </div>

        <!-- right side image with SVG overlay -->
        <div class="relative flex-shrink-0 w-[594px]">
            <div class="relative w-[594px] h-[495px]">

                <!-- ✅ এখানে সরাসরি width fix -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutgroup.png"
                     alt="hero image"
                     class="w-[594px] h-[495px] object-cover z-0">

                <!-- SVG শেপ এবং টেক্সট -->
                <div class="absolute -bottom-9 left-0 w-[594px] z-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="594" height="89" viewBox="0 0 594 89" fill="none">
                        <path d="M593.5 89H0L17.6895 0H593.5V89Z" fill="#16396F"/>
                    </svg>

                    <p class="absolute inset-0 flex items-center justify-center text-white font-bebas-pro text-[55px] font-bold tracking-[1.1px] uppercase z-20">
                        Enter the competition
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
