<?php get_header(); ?>
<!-- Page Content -->
<main class="container">
<?php if ( have_posts() ) {?>
<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Articulos de la <?php wp_title(''); ?>
</h1>
<?php the_breadcrumb(); ?>
<div class="row">
<section class="col-md-8">
<?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
<div class="row">
<?php while ( have_posts() ) {
the_post(); ?>
<!-- Blog Post -->
<div class="col-lg-4 col-sm-6 portfolio-item">
<div class="card h-100">
<?php if ( has_post_thumbnail()) : ?>
<a href="<?php the_permalink(); ?>">
<img alt="<?php the_title_attribute(); ?>" class="card-img-top" src="<?php the_post_thumbnail_url( 'post-thumbnail' ); ?>" title="<?php the_title_attribute(); ?>"/>
</a>
<?php endif; ?>
<div class="card-body">
<h4 class="card-title">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h4>
<p class="card-text"><?php the_excerpt_embed(); ?></p>
</div>
</div>
</div><!-- /.Blog Post -->
<?php } ?>        
</div>
<?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
<!-- Pagination -->
<?php  
$array = paginate_links( array(
'prev_text'   =>  'Anterior',
'next_text'   =>  'Siguiente',
'prev_next'   => true
) );
if (!empty($array)) {
?>
<div class="row p-3 d-flex justify-content-center">
<div class="pagination-wrapper">
<div class="pagination d-flex justify-content-around">
<?php echo $array;?>
</div>
</div>
</div>
<?php } ?><!-- /.Pagination -->
</section>
<aside class="col-md-4">
<?php get_sidebar('blog'); ?>
</aside>
</div><!--/.row -->
<?php } ?>
</main><!-- /.container -->
<?php get_footer(); ?>
</body>
</html>