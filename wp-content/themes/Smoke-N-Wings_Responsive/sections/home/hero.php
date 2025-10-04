<?php 
// Hero image & button texts with default values
$hero_image = get_theme_mod('hero_image', get_template_directory_uri() . '/assets/images/hero.png');
$hero_button_text_left = get_theme_mod('hero_button_text_left', 'Enter competition');
$hero_button_text_right = get_theme_mod('hero_button_text_right', 'Check Out The Rules');
?>

<section class="relative w-full h-[601px] overflow-hidden">
    <!-- Background color layer -->
    <div class="absolute inset-0 bg-[#F8B895] opacity-[0.75] z-0"></div>

    <!-- Background huge text layer -->
    <div class="absolute inset-0 flex flex-col gap-0 justify-between items-center z-10 opacity-100 animate-pulse text-[247px] font-bebas-pro font-extrabold uppercase leading-[0.85] text-[rgba(248,184,149,0.45)] text-center max-w-[1269px]">
        <h1 class="">
            Smoke-N-Wings
        </h1>
        <h1 class="">
            Idaho State bbq
        </h1>
        <h1 class="">
            Competition
        </h1>
    </div>

    <!-- Foreground content layer -->
    <div class="relative z-20 flex h-[600px] md:h-[700px] lg:h-[800px] text-[48px] font-bebas-pro font-extrabold uppercase tracking-[0.96px] text-white leading-[1]">
        <!-- Left button -->
          <a href="<?php
            $enter_page = get_page_by_path('enter');
                if ($enter_page) {
                    $enter_link = get_permalink($enter_page);
                } else {
                    $enter_link = '#';
                }
                echo $enter_link;
                ?>">
           <div class="absolute md:w-[35.7%] w-[80%] top-[43%] left-0 text-center z-10">
                            <!-- clip-path approach -->

                <div class="w-[100%] h-[88px]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" viewBox="0 0 514 88" fill="none" class="mx-auto">
                        <path d="M0 0H514L490.703 88H0V0Z" fill="#F65600"/>
                        </svg>
                    
                </div>

                <p class="absolute inset-0 flex pt-2.5 items-center justify-center ">
                    <?php echo esc_html($hero_button_text_left); ?>
                </p>
            </div>
        </a>

        <!-- Right button -->
        <a href="<?php echo get_permalink(get_page_by_path('rules')); ?>">
            <div class="absolute top-[60%] w-[100%] h-[88px] md:top-[43%] right-0 transform text-center z-10">

            <!-- shap -->
             <div class="shap w-[80%] md:w-[35.7%] ml-auto md:mr-0">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-auto" viewBox="0 0 514 88" fill="none">
                    <path d="M514 88H0L23.2974 0H514V88Z" fill="#591419"/>
                </svg>
             </div>
                <p class="absolute inset-0 flex pt-2.5 pl-7 items-center justify-center">
                    <?php echo esc_html($hero_button_text_right); ?>
                </p>
            </div>
        </a>

        <!-- Hero Image -->
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 text-center z-10">
            <img src="<?php echo esc_url($hero_image); ?>" alt="hero image" class="object-contain">
        </div>
    </div>
</section>
