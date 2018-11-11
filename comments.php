<?php if (post_password_required()) {
	return;
} ?>

<div id="comments" class="comments-area m-2">
<!-- AREA PARA AGREGAR COMENTARIOS -->
<div class="form-row">
	<div class="col">
		<?php if ( 'open' == $post->comment_status ) : ?>
		
			<!-- Comments Form -->
          <div class="card my-4" id="respond">
          	<h3 class="card-header"><?php comment_form_title(); ?> <a href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a></h3>
            <div class="card-body">
            <?php if ( get_option( 'comment_registration' ) && !$user_ID ) : ?>
		
		<p>Debes de estar <a class="btn btn-light btn-sm text-dark" href="<?php echo wp_login_url( get_permalink() ); ?>"> registrado <i class="fas fa-sign-in-alt"></i></a> para postear.</p>
		
		<?php else : ?>
              <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                <div class="row">
  			<div class="col-sm-3">
				<div class="card text-center">
				  <img class="card-img-top rounded-circle" src="<?php echo get_avatar_url($user_ID); ?>">
				  <div class="card-body">
				    <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Log out of this account" class="btn btn-outline-danger btn-sm">Log out <i class="fas fa-sign-out-alt"></i></a>
				  </div>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="form-group"><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="1" class="form-control" placeholder="Escribe aqui tu comentario..."></textarea></div>
				
				<div class="form-group"><button name="submit" type="submit" id="submit" class="btn btn-primary">Enviar <i class="far fa-paper-plane"></i></button>
				<?php do_action( 'comment_form', $post->ID ); comment_id_fields(); ?>
				<?php cancel_comment_reply_link( '<button type="button" class="btn btn-danger">Cancelar</button>' ); ?>
				</div>
			</div>
		</div>
              </form>
              <?php endif; // If registration required and not logged in ?>
            </div>
          </div>
		
		<?php endif; // If comments are open: delete this and the sky will fall on your head ?>
	</div>
</div>
<!-- FIN AREA PARA AGREGAR COMENTARIOS -->
<!-- AREA COMENTARIOS -->
    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                /* translators: %s: post title */
                printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'wp-bootstrap-starter' ), get_the_title() );
            } else {
                printf(
                /* translators: 1: number of comments, 2: post title */
                    _nx(
                        '%1$s thought on &ldquo;%2$s&rdquo;',
                        '%1$s thoughts on &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'wp-bootstrap-starter'
                    ),
                    number_format_i18n( $comments_number ),
                    get_the_title()
                );
            }
            ?>
        </h2><!-- .comments-title -->

        <div class="comment-list">
            <?php
            wp_list_comments( array( 'callback' => 'wp_bootstrap_starter_comment', 'avatar_size' => 35 ));
            ?>
        </div><!-- .comment-list -->

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
            <div class="row p-0 d-flex justify-content-center">
            	<div class="pagination-wrapper">
  					<div class="pagination d-flex justify-content-around">
				<?php  
            		paginate_comments_links( array(
	            			'prev_text'		=>	'Anterior',
	            			'next_text'		=> 	'Siguiente',
							'prev_next'		=> true
							) );
            	?>
					</div>
				</div>
            </div>               
           
            <?php
        endif; // Check for comment navigation.
    
    else: echo '<div class="alert alert-info m-2" role="alert">No hay comentarios disponibles. Se el primero en comentar.</div>';

    endif; // Check for have_comments().


    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'wp-bootstrap-starter' ); ?></p>
        <?php
    endif; ?>
<!-- FIN AREA DE COMENTARIOS -->
</div>