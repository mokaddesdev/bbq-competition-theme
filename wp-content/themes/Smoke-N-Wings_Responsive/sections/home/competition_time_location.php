<?php
$set_time_title = get_theme_mod('set_time_title', 'When:');
$competition_time = get_theme_mod('competition_time', 'June 28-29, 2025');
$competition_location_title = get_theme_mod('competition_location_title', 'Where:');
$competition_location = get_theme_mod('competition_location', "Blackfoot, Idaho Blackfoot Airport (McCarly Field)");

$location_words = explode(' ', $competition_location);
$first_two_words = implode(' ', array_slice($location_words, 0, 2));
$remaining_words = implode(' ', array_slice($location_words, 2));

$competition_description = get_theme_mod('competition_description', 'Lorem ipsum dolor sit amet consectetur. Pellentesque lectus pulvinar cras cursus parturient in. Vitae risus nisi scelerisque iaculis feugiat vel ornare nec. Hendrerit nullam eu nisl arcu. Phasellus a tincidunt diam interdum.');
?>

<section class="w-full mx-auto px-4 sm:px-6 lg:px-10 xl:px-[125px] py-10 md:py-14 lg:py-16">
  <div class="flex flex-col lg:flex-row justify-between items-center gap-8 lg:gap-0">

    <!-- Left Section -->
    <div class="relative w-full lg:w-[60%] flex justify-center lg:justify-start">
      <svg xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 697 161"
        class="w-full max-w-[697px] h-auto">
        <path d="M-35.5 0H697L665 161H-35.5V0Z" fill="#591419" />
      </svg>

      <!-- Text Over SVG -->
      <div class="absolute top-6 sm:top-8 lg:top-10 right-[8%] sm:right-[12%] flex flex-col items-center">
        <div class="flex flex-col sm:flex-row items-center gap-6 sm:gap-[70px] text-center">

          <!-- Time -->
          <div class="time flex flex-col items-center">
            <h1 class="heading-text text-[#FFE4D5] text-[18px] sm:text-[20px] font-bebas tracking-[0.5px] uppercase">
              <?php echo esc_html($set_time_title); ?>
            </h1>
            <p class="text-[#FFE4D5] font-bebas-pro text-[22px] sm:text-[26px] font-bold leading-normal tracking-[0.52px] uppercase">
              <?php echo esc_html($competition_time); ?>
            </p>
          </div>

          <!-- Location -->
          <div class="location flex flex-col items-center mt-2 sm:mt-0">
            <h1 class="heading-text text-[#FFE4D5] text-[18px] sm:text-[20px] font-bebas tracking-[0.5px] uppercase">
              <?php echo esc_html($competition_location_title); ?>
            </h1>
            <p class="text-[#FFE4D5] font-bebas-pro text-[22px] sm:text-[26px] font-bold leading-normal tracking-[0.52px] uppercase text-center w-[200px] sm:w-60">
              <?php echo esc_html($first_two_words); ?>
            </p>
            <h6 class="text-center text-[#FFE4D5] font-bebas-pro text-[16px] sm:text-[19px] font-bold leading-normal tracking-[0.52px] uppercase -mt-1 sm:-mt-2">
              <?php echo esc_html($remaining_words); ?>
            </h6>
          </div>

        </div>
      </div>
    </div>

    <!-- Right Section -->
    <div class="w-full lg:w-[40%] max-w-[534px]">
      <p class="text-black text-center lg:text-right font-jost text-[16px] sm:text-[17px] md:text-[18px] lg:text-[19px] font-normal leading-relaxed tracking-[0.38px]">
        <?php echo esc_html($competition_description); ?>
      </p>
    </div>

  </div>
</section>
