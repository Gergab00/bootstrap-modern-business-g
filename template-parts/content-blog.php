<?php get_header(); ?>
<!-- Page Content -->
<main class="container">
<?php if ( have_posts() ) {?>
<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3"><?php wp_title(''); ?><small> de <?php echo get_option('blogname'); ?></small>
</h1>
<?php the_breadcrumb(); ?>
<div class="row">
<!-- Blog Entries Column -->
<section class="col-md-8">
<?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
<?php while ( have_posts() ) {
the_post(); ?>
<!-- Blog Post -->
<div class="card mb-4">
<?php if ( has_post_thumbnail()) : ?>
<a href="<?php the_permalink(); ?>">
<img alt="<?php the_title_attribute(); ?>" class="card-img-top" src="<?php the_post_thumbnail_url( 'post-thumbnail' ); ?>" title="<?php the_title_attribute(); ?>"/>
</a>
<?php endif; ?>
<div class="card-body">
<h2 class="card-title">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h2>
<p class="card-text"><?php the_excerpt_embed(); ?></p>
<a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer Mas <i class="fas fa-plus-square"></i></a>
</div>
<div class="card-footer text-muted">
<small class="text-muted">
Escrito por
<?php the_author();?>
en
<?php the_category(', '); ?>
el
<?php the_date(); ?>
</small>
</div>
</div>
<?php } ?>
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
<?php } ?>
<?php } ?>
</section>
<!-- Sidebar Widgets Column -->
<aside class="col-md-4">
<?php get_sidebar('blog'); ?>
</aside>
</div><!-- /.row -->
</main><!-- /.container -->
<?php get_footer(); ?>
</body>
</html>