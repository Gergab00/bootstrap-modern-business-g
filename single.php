<?php get_header(); ?>
<!-- Page Content -->
<main class="container">
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<!-- Page  Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3"><?php the_title(); ?><small> escrito por 
<?php the_author_link(); ?>
</small>
</h1>
<blockquote><small>En categoria <?php the_category(', '); ?></small></blockquote>
<?php the_breadcrumb(); ?>
<div class="row">
<!-- Post Content Column -->
<section id="post-area" class="col-lg-8">
<?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
<hr>
<!-- Preview Image -->
<img class="img-fluid rounded" src="<?php the_post_thumbnail_url( 'post-thumbnail' ); ?>" alt="<?php the_title_attribute(); ?>" title="<?php the_title_attribute(); ?>">
<hr>
<!-- Date/Time -->
<p>Publicado el <?php the_date(); ?></p>
<hr>
<div class="d-flex align-items-center">
<h5>Etiquetas <i class="fas fa-tags"></i> | </h5> <h6> 
<?php etiquetasBootStrap(get_the_ID());?>
</h6>
</div>
<!-- Post Content -->
<article class="container-fluid align-self-center">
<?php the_content(); ?>
</article>
<?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
<hr>
<div class="row">
<div class="col-md-6 d-flex flex-row"><?php previous_post_link('%link','<button type="submit" class="btn btn-outline-dark btn-sm"><i class="fas fa-arrow-circle-left"></i> %title</button>'); ?></div>
<div class="col-md-6 d-flex flex-row-reverse"><?php next_post_link('%link','<button type="submit" class="btn btn-outline-dark btn-sm">%title <i class="fas fa-arrow-circle-right"></i></button>'); ?></div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<hr>
<h3>Te puede interesar</h3>
<?php the_related_content(get_the_ID());?>
<hr>
<?php if ( comments_open() || get_comments_number() ) :
comments_template();
endif; ?>
</section>
<!-- Sidebar Widgets Column -->
<aside id="widget-area" class="col-md-4 widget-area">
<!-- Side Widget -->
<?php get_sidebar('blog');?>
</aside>
</div>
<!-- /.row -->
</main>
<!-- /.container -->
<!-- Footer -->
<?php get_footer(); ?>
</body>
</html>