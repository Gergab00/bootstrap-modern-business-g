<?php if ('posts' == get_option('show_on_front')) {
include(get_home_template());
}else{?>
<?php get_header(); ?>
<!-- carousel -->
<?php get_template_part( 'sections/section', 'carousel' ); ?>
<!-- /.carousel -->
<!-- Page Content -->
<div class="container">
<h1 class="my-4">Bienvenido a <?php echo get_option('blogname'); ?> <small><?php echo get_option('blogdescription'); ?></small></h1>
<!-- Services Section -->
<div class="row">
<?php get_template_part( 'sections/section', 'services' ); ?>  
</div>
<!-- /.Services Section -->
<!-- /.row -->
<div class="d-flex border border-muted my-3"></div><!-- /hr -->
<div class="row">
<?php get_template_part( 'sections/section', 'call_to_action' ); ?>  <!-- Call to Action Section -->
</div>
<?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
<div class="row d-flex justify-content-center">
<div class="col-7"><?php get_search_form(); ?></div>
<?php $tag_cloud = get_theme_mod('tag_cloud'); ?>
<div class="col-5">Temas del momento: <?php etiquetasBootStrap(intval($tag_cloud));?></div>
</div>
<div class="d-flex border border-muted my-3"></div><!-- /hr -->
<!-- Portfolio Section -->
<?php get_template_part( 'sections/section', 'blog' ); ?><!--section-blog-->
<?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
<?php get_template_part( 'sections/section', 'shop' ); ?><!-- Shop Section -->
<?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
<!-- Features Section -->
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
<h2><?php echo $our_us_title; ?></h2>
<h3><?php echo $our_us_subtitle_1; ?></h3>
<?php echo $our_us_content_1; ?>
<h3><?php echo $our_us_subtitle_2; ?></h3>
<?php echo $our_us_content_2; ?>
</div>
<div class="col-lg-6">
<img class="img-fluid rounded" src="<?php echo wp_get_attachment_url($our_us_image); ?>">
</img>
</div>
</div>
<div class="row">
<?php get_template_part( 'sections/section', 'our_us' ); ?>
</div>
<!-- /.row -->
<?php if (check_plugin_state('mailchimp-for-wp')) { ?>
<div class="d-flex border border-muted my-3"></div><!-- /hr -->
<?php echo do_shortcode( get_theme_mod('mailchimp_shortcode')); ?>
<div class="d-flex border border-muted my-3"></div><!-- /hr -->
<?php }?>
<!-- /.container -->
<?php get_footer(); ?>
</body>
</html>
<?php } ?>