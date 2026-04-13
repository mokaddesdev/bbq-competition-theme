<?php
/**
 * Template Name: Breadcrumb Section
 * 
 * @package smokewings
 */

$title = get_the_title();
$desc  = get_the_excerpt();
?>

<section class="relative max-w-[1440px] mx-auto w-full min-h-[140px] md:min-h-[200px] flex items-center justify-center bg-amber-200 py-4 md:py-6 lg:py-8">

    <img 
        src="<?php echo esc_url( THEME_DIR_URI . '/assets/images/breadcrumb-bg.png' ); ?>" 
        class="absolute top-0 left-0 z-0 w-full h-full object-cover"
        alt=""
    >

    <div class="relative z-10 text-center text-white flex flex-col items-center">

        <div data-aos="fade-down" class="font-bebas text-[18px] sm:text-[20px] md:text-[24px] flex items-center gap-3 leading-[34px]">

            <a href="<?php echo esc_url( home_url() ); ?>" class="text-white hover:underline">
                <?php esc_html_e( 'Home', 'smokewings' ); ?>
            </a>

            <div class="w-[1px] h-[17.076px] bg-white"></div>

            <?php if ( ! empty( $title ) ) : ?>
                <p><?php echo esc_html( $title ); ?></p>
            <?php endif; ?>

        </div>

        <?php if ( ! empty( $desc ) ) : ?>
            <p data-aos="zoom-in" class="pt-0 md:pt-1.5 lg:pt-3 font-bebas text-[26px] sm:text-[34px] md:text-[48px] uppercase md:tracking-[0.96px]">
                <?php echo esc_html( $desc ); ?>
            </p>
        <?php endif; ?>

    </div>

</section>