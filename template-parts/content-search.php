<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Resultados de la busqueda: 
<small><?php echo get_search_query(); ?></small>
</h1>
<?php the_breadcrumb(); ?>
<?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
<div class="d-flex border border-muted my-3"></div><!-- /hr -->
<div class="row d-flex justify-content-center">
<div class="col-12"><?php get_search_form(); ?></div>
</div>
<div class="row d-flex justify-content-center"><p class="h4">Se han encontrado <?php echo sizeof($posts); ?> resultados.</p></div>
<div class="d-flex border border-muted my-3"></div><!-- /hr -->
<div class="row">
<section class="col-md-8">
<!-- ADS Post -->
<div class="card mb-4">
<div class="card-body">
<div id="google_adsense" class="row d-flex justify-content-center">
<div class="d-none d-sm-block d-md-none bg-secondary" style="height: 283px; width: 339px;">
<?php  
$google_adsense_336_280 = get_theme_mod('google_adsense_336_280');
if (!empty($google_adsense_336_280)) {
    echo $google_adsense_336_280;
}
?>
</div>
</div>
</div>
</div>
<!-- ./ADS Post -->
<?php while ( have_posts() ) : the_post(); ?>
<!-- Blog Post -->
<div class="card mb-4">
<div class="card-body">
<div class="row">
<?php if ( has_post_thumbnail()) : ?>
<div class="col-lg-6">
<a href="<?php the_permalink(); ?>">
  <img alt="<?php the_title_attribute(); ?>" class="card-img-top" src="<?php the_post_thumbnail_url( 'post-thumbnail' ); ?>" title="<?php the_title_attribute(); ?>"/>
</a>
</div>
<?php endif; ?>
<div class="col-lg-6">
<h2 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="card-text"><?php the_excerpt_embed(); ?></p>
<a href="<?php the_permalink(); ?>" class="btn btn-primary">Ir al Articulo <i class="fas fa-plus-square"></i></a>
</div>
</div>
</div>
<div class="card-footer text-muted">
Publicado el <?php the_date(); ?> por
<a href="<?php the_author_link(); ?>"><?php the_author();?></a> en <?php the_category(' ,') ?>
</div>
</div>
<!-- ./Blog Post -->
<?php endwhile; ?>
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