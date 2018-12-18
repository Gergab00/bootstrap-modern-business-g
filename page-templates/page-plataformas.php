<?php
/* Template Name: Plataformas */
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<header class="container-fluid d-flex justify-content-center align-items-center business-header" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>'); background-size: cover;">

</header>
<section class="container-fluid d-flex justify-content-center align-items-center m-1">
<?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
</section>
<section class="container p-2">
<div class="row m-1">
<?php the_content(); ?>	
</div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
</body>
</html>