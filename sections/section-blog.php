<?php
/*
* Blog Section
*/
$blog_catgegory = get_theme_mod('blog_catgegory');
$blog_number = get_theme_mod('blog_number');
?>
<?php if ('posts' == get_option('show_on_front')) {  ?>

    <?php
    $blogLoop = new WP_Query(array(  'posts_per_page' => $blog_number,'cat' => $blog_catgegory,));

    if ( $blogLoop->have_posts() ) : ?>
                <?php while ( $blogLoop->have_posts() ) : $blogLoop->the_post(); ?>
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
                            <p class="card-text">
                                <?php the_excerpt_embed(); ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <blockquote class="blockquote mb-0">
                                <small class="text-muted">
                                    Escrito por
                                    <?php the_author();?>
                                    en
                                    <?php the_category(', '); ?>
                                    el
                                    <?php the_date(); ?>
                                </small>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
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
                <?php endif; ?>
<?php }else{ ?>
<?php $latest_blog_posts = new WP_Query( array( 'posts_per_page' => $blog_number,'cat' => $blog_catgegory, )); ?>
                <?php if ( $latest_blog_posts->have_posts() ) : ?>
                <?php while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>
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
                            <p class="card-text">
                                <?php the_excerpt_embed(); ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <blockquote class="blockquote mb-0">
                                <small class="text-muted">
                                    Escrito por
                                    <?php the_author();?>
                                    en
                                    <?php the_category(', '); ?>
                                    el
                                    <?php the_date(); ?>
                                </small>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
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
                <?php endif; ?>
<?php } ?>