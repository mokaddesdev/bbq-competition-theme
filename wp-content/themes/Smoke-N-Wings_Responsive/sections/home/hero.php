<?php 
// Hero image & button texts with default values
$hero_image = get_theme_mod('hero_image', get_template_directory_uri() . '/assets/images/hero.png');
$hero_button_text_left = get_theme_mod('hero_button_text_left', 'Enter competition');
$hero_button_text_right = get_theme_mod('hero_button_text_right', 'Check Out The Rules');
?>

<section class="relative w-full 
  h-[260px] sm:h-[310px] md:h-[370px] lg:h-[480px] xl:h-[560px] 2xl:max-h-[601px] 
  overflow-hidden">

  <!-- Background color layer -->
  <div class="absolute inset-0 bg-[#F8B895] opacity-[0.75] z-0"></div>

  <!-- Background huge text layer -->
  <div class="absolute inset-0 flex flex-col gap-0 justify-between items-center z-10 
      text-[64px] sm:text-[120px] md:text-[160px] lg:text-[200px] xl:text-[247px]
      font-bebas-pro font-extrabold uppercase 
      leading-[0.85] text-[rgba(248,184,149,0.45)] text-center w-full max-w-[1269px] mx-auto">
      <h1>Smoke-N-Wings</h1>
      <h1>Idaho State BBQ</h1>
      <h1>Competition</h1>
  </div>

  <!-- Foreground content layer -->
  <div class="relative z-20 flex justify-center items-center w-full h-full text-[28px] md:text-[40px] lg:text-[48px] font-bebas-pro font-extrabold uppercase tracking-[0.96px] text-white leading-[1]">

      <!-- Left button -->
      <a href="<?php
          $enter_page = get_page_by_path('enter');
          $enter_link = $enter_page ? get_permalink($enter_page) : '#';
          echo esc_url($enter_link);
      ?>" class="absolute left-0 top-[45%] md:top-[43%] w-[80%] md:w-[35.7%] text-center z-10">

          <div class="relative w-full h-[70px] md:h-[88px]">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 514 88" fill="none" class="w-full h-full">
                  <path d="M0 0H514L490.703 88H0V0Z" fill="#F65600"/>
              </svg>
              <p class="absolute inset-0 flex items-center justify-center pt-2.5">
                  <?php echo esc_html($hero_button_text_left); ?>
              </p>
          </div>
      </a>

      <!-- Right button -->
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('rules'))); ?>" 
         class="absolute right-0 top-[65%] md:top-[43%] w-[80%] md:w-[35.7%] text-center z-10">

          <div class="relative w-full h-[70px] md:h-[88px] ml-auto">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 514 88" fill="none" class="w-full h-full">
                  <path d="M514 88H0L23.2974 0H514V88Z" fill="#591419"/>
              </svg>
              <p class="absolute inset-0 flex items-center justify-center pt-2.5 pl-7">
                  <?php echo esc_html($hero_button_text_right); ?>
              </p>
          </div>
      </a>

      <!-- Hero Image -->
      <div class="absolute bottom-0 md:bottom-0 left-1/2 -translate-x-1/2 w-[220px] sm:w-[500px] md:w-[650px] lg:w-[750px] xl:w-[500px] 
          h-auto z-10">
          <img src="<?php echo esc_url($hero_image); ?>" alt="hero image" 
               class="w-full h-full object-contain">
      </div>

  </div>
</section>

