<h1 class="mt-4 mb-3">Lo sentimos no hay resultados
      </h1>
    <div class="d-flex border border-muted my-3"></div><!-- /hr -->
        <div class="row d-flex justify-content-center">
          <div class="col-12"><?php get_search_form(); ?></div>
        </div>
        <div id="google_adsense" class="row d-flex justify-content-center">
                <div class="d-none d-md-block d-lg-block d-xl-block bg-secondary" style="height: 95px; width: 733px;">
                  <?php  
                  $google_adsense_728_90 = get_theme_mod('google_adsense_728_90');
                  if (!empty($google_adsense_728_90)) {
                      echo $google_adsense_728_90;
                  }
                  ?>
                </div>
                <div class="d-none d-sm-block d-md-none bg-secondary" style="height: 283px; width: 339px;">
                  <?php  
                  $google_adsense_336_280 = get_theme_mod('google_adsense_336_280');
                  if (!empty($google_adsense_336_280)) {
                      echo $google_adsense_336_280;
                  }
                  ?>
                </div>
                <div class="d-block d-sm-none bg-secondary" style="height: 253px; width: 303px;">
                   <?php  
                  $google_adsense_300_250 = get_theme_mod('google_adsense_300_250');
                  if (!empty($google_adsense_300_250)) {
                      echo $google_adsense_300_250;
                  }
                  ?>
                </div>
            </div>
    <div class="d-flex border border-muted my-3"></div><!-- /hr -->
    <div class="row">
     <section class="col-md-8">
     	<?php 
     	$loopSearch   = new WP_QUERY(array(
                'post_status' => 'publish',
                'posts_per_page'    => 4,
                'orderby'           =>'rand'
                ));
     	if ( $loopSearch->have_posts()){ ?>
      <div class="row d-flex justify-content-center border border-secondary rounded m-1">
          <h3 class="m-1">Conoce otros artículos interesantes.</h3>
      </div>
      <?php 
     		while ( $loopSearch->have_posts()){
                $loopSearch->the_post();
     	?>
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
     	<?php 
          } 
        }
     	wp_reset_query();
     	?>
     </section>