<?php
  // Hero image & button texts with default values
  $faq_image = get_theme_mod('faq_image', get_template_directory_uri() . '/assets/images/faqs.png');
  $faq_title = get_theme_mod('faqs_heading_title', 'Frequently <span class="text-[#F65600]"> Asked </span> Questions');
?>

<section class="w-full pt-6 px-4 sm:px-6 md:px-[3.5%] lg:px-[7.5%] 2xl:px-[8.68%]">
 <!-- container width -->
<div class="max-w-[1300px] flex flex-col md:flex-row gap-6 sm:gap-8 md:gap-10 lg:gap-12 xl:gap-14 2xl:gap-16">
  
  <!-- left image -->
  <div class="w-full md:w-1/2 relative flex justify-center items-center">
    <div class="relative absolute top-0 right-0 z-0">
      <!-- responsive shape -->
      <div class="shape w-[543.5px] h-[450px] bg-[#591419]"
      style="clip-path: polygon(0% 100%, 0% 0%, 100% 0%, 82.5% 100%);">
      </div>

      <div class="absolute -top-3 left-0">
        <!-- image -->
    <div class="relative z-20 w-[543.5px] h-[495px]">
      <img src="<?php echo esc_url($faq_image); ?>"
        alt="<?php esc_attr(the_title()) ?>"
        class="w-full h-full object-contain">
    </div>

      </div>
    </div>

  </div>

  <!-- right faqs -->
  <div class="bg-white w-full md:w-1/2">
    <!-- Responsive Heading -->
    <h2 class="text-[#16396F] text-right font-bebas-pro 
    text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-[78px]
    font-bold leading-tight tracking-wide uppercase py-4 sm:py-6 md:py-8">
      <?php echo wp_kses_post(nl2br($faq_title)); ?>
    </h2>

    <?php
    $faqs = new WP_Query(array(
      'post_type'      => 'faqs',
      'posts_per_page' => 4,
      'post_status'    => 'publish',
      'orderby'        => 'date',
      'order'          => 'DESC',
    ));

    if ($faqs->have_posts()):
      $count = 0;
      while ($faqs->have_posts()): $faqs->the_post();
        $count++;
        $is_open = ($count === 2);
        $extra_border = ($count === 1) ? 'border-t' : '';
    ?>
        <div class="faq-item border-b <?php echo $extra_border; ?> border-[#F8B895] pl-4 sm:pl-6 md:pl-8 pr-4 sm:pr-6 md:pr-8">
          <button class="faq-btn w-full flex justify-between items-center py-2 text-left 
          text-black font-jost text-base sm:text-lg md:text-xl font-normal leading-normal focus:outline-none">

            <span><?php the_title(); ?></span>
            <span class="icon text-xl sm:text-2xl text-gray-600">
              <?php if ($is_open): ?>
                <!-- minus icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="3" viewBox="0 0 13 3" fill="none">
                  <path d="M6 2.91155H5.03468H0V0.0144043H5.03468H5.5L7 0.014286L7.96532 0.0144043H13V2.91155H7.96532H7H6Z" fill="#591419" />
                </svg>
              <?php else: ?>
                <!-- plus icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                  <path d="M5.03468 13V7.91143H0V5.01429H5.03468V0H7.96532V5.01429H13V7.91143H7.96532V13H5.03468Z" fill="#591419" />
                </svg>
              <?php endif; ?>
            </span>
          </button>

          <div class="faq-content <?php echo $is_open ? '' : 'hidden'; ?> 
          text-black font-jost text-sm sm:text-base md:text-lg leading-relaxed pb-4">
            <?php the_content(); ?>
          </div>
        </div>
    <?php
      endwhile;
      wp_reset_postdata();
    else:
      echo '<p class="text-center text-gray-500">No FAQs found.</p>';
    endif;
    ?>
  </div>
  </div>
</section>
