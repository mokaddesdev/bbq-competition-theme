<?php
/**
 * Footer Template
 * 
 * @package  smokewings
 */
$footer_logo_title = get_theme_mod(
    'footer_title',
    'Smoke-N-Wings <span class="text-[#F65600]"> BBQ </span> Competition'
);

$footer_button_text = get_theme_mod(
    'footer_button_title',
    'Enter Competition'
);

$enter_page = get_page_by_path( 'enter-competition' );
$enter_link = $enter_page ? get_permalink( $enter_page ) : home_url( '/' );
?>

 <!-- 🌙 DARK MODE BUTTON -->
<div class="fixed right-4 top-32 z-50 w-full flex justify-end">
    <button id="theme-toggle" class="dark-btn px-3 py-3 rounded-full bg-gray-800 text-white dark:bg-[#e65314] transition-all duration-300">
    </button>
</div>

<!-- live chart -->
 <a href="https://wa.me/8801402967304?text=Hello%20I%20need%20help" target="_blank" rel="noopener noreferrer" class=" fixed bottom-[80px] right-4 z-50 w-12 h-12 md:w-[56px] md:h-[56px] rounded-full bg-gradient-to-br from-green-400 to-green-700 shadow-lg flex items-center justify-center group">

    <!-- chat bubble -->
    <div class="relative animate-pulse w-[18px] h-[18px] md:w-5 md:h-4 border-2 border-white rounded-sm">

        <div class="absolute -bottom-1 left-1 w-2 h-2 bg-white rotate-45"></div>

    </div>

</a>

<!-- Scroll Top -->
<button class="scroll-top-btn" aria-label="Scroll to top">
    <p class="animate-bounce">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
  <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
</svg>
    </p>
</button>

<footer class="w-full max-w-[1440px] mx-auto pt-6 md:pt-8 lg:pt-10 2xl:pt-14 pb-3 sm:pt-5 sm:pb-4 lg:pb-6 2xl:pb-8 px-[2.5%] md:px-[3.5%] lg:px-[7.5%] xl:px-[8.68%] mt-3 sm:mt-5 md:mt-7 lg:mt-10 2xl:mt-[92px] bg-[#16396F]">

    <!-- footer-content -->
    <div class="footer-content mx-auto max-w-[1300px] flex flex-col md:flex-row items-center justify-start md:justify-between">

        <!-- footer left -->
        <div data-aos="zoom-in" class="footer-text text-center md:text-start w-full md:w-6/12">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <h3 class="text-[#FFE4D5] font-bebas-pro text-[50px] sm:text-[56px] md:text-[80px] lg:text-[90px] 2xl:text-[115px] font-bold leading-[58px] sm:leading-[62px] md:leading-[85px] xl:leading-[95px] 2xl:leading-[102px] tracking-[2.3px] uppercase">
                    <?php echo wp_kses_post( $footer_logo_title ); ?>
                </h3>
            </a>
        </div>

        <!-- footer right -->
        <div class="footer-right flex flex-col items-center pt-3.5 md:pt-0 md:items-end w-full md:w-5/12 lg:w-4/12">

            <!-- footer button -->
            <div class="button">
                <a href="<?php echo esc_url( $enter_link ); ?>" class="w-[250px] sm:w-[300px] md:w-[367px] header-footer-btn">
                    <span>
                        <?php echo esc_html( $footer_button_text ); ?>
                    </span>
                </a>
            </div>

            <!-- footer menu -->
            <div class="foote-menu w-full px-[12%] sm:px-[18%] md:px-0 flex items-center justify-between pt-5 md:pt-9">

                <nav>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'smokewings_footer_menu1',
                            'container'      => false,
                            'menu_class'     => 'menu-text text-[#FFE4D5] flex flex-col gap-3',
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </nav>

                <nav class="-mt-8">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'smokewings_footer_menu2',
                            'container'      => false,
                            'menu_class'     => 'flex flex-col gap-3 menu-text text-[#FFE4D5]',
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                </nav>

            </div>
        </div>
    </div>

    <!-- footer bottom -->
    <div class="divider-text mx-auto lg:-mx-10 flex flex-col gap-5 pt-5">

        <div class="mx-auto w-full scroll-px-5 max-w-[1400px] h-[2px] bg-[#FFFFFF]"></div>

        <p class="text-[#FFE4D5] font-jost text-sm md:text-[15px] font-normal leading-normal tracking-[0.3px] uppercase text-center">
            &copy; <?php echo esc_html__( 'Copyright', 'smokewings' ); ?>
            <?php echo esc_html( date( 'Y' ) ); ?>
            <?php bloginfo( 'name' ); ?>
            <?php echo esc_html__( 'All rights reserved', 'smokewings' ); ?>
        </p>

    </div>
</footer>
<?php wp_footer(); ?>
</main>
</body>
</html>