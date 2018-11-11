<?php
if (is_cart()) {wc_get_template_part( 'woocommerce/cart/cart');}
elseif (is_checkout()) {wc_get_template_part( 'woocommerce/checkout/form-checkout');}
else { 
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
<header class="container-fluid d-flex justify-content-center align-items-center business-header" style="background: url('<?php echo get_the_post_thumbnail_url( null,'large'); ?>');">
    <div class="row m-2"><h1 class="display-1"><?php the_title(); ?></h1></div>
</header>

<section class="container-fluid d-flex justify-content-center align-items-center m-1">
<?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
</section>
<?php $our_us_page = get_theme_mod('our_us_page'); ?>
<section class="container p-2">
	<?php if (is_page($our_us_page)) { ?>
		<?php
        $our_us_title = get_theme_mod('our_us_title');
        $our_us_subtitle_1 = get_theme_mod('our_us_subtitle_1');
        $our_us_content_1 = get_theme_mod('our_us_content_1');
        $our_us_subtitle_2 = get_theme_mod('our_us_subtitle_2');
        $our_us_content_2 = get_theme_mod('our_us_content_2');
        $our_us_image = get_theme_mod('our_us_image');
        ?>
        <div class="row">
            <div class="col-lg-6">
                <h2>
                    <?php echo $our_us_title; ?>
                </h2>
                <h3>
                    <?php echo $our_us_subtitle_1; ?>
                </h3>
                <?php echo $our_us_content_1; ?>
                <h3>
                    <?php echo $our_us_subtitle_2; ?>
                </h3>
                <?php echo $our_us_content_2; ?>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="<?php echo wp_get_attachment_url($our_us_image); ?>">
                </img>
            </div>
        </div>
	<?php } ?>
	<div class="row m-1">
	<?php the_content(); ?>	
	</div>
</section>

    <?php endwhile; ?>
    <?php endif; ?>
   	<?php } ?>
<?php get_footer(); ?>
</body>

</html>