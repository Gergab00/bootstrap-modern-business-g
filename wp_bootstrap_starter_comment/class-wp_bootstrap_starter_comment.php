<?php if ( ! function_exists( 'wp_bootstrap_starter_comment' ) ) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function wp_bootstrap_starter_comment( $comment, $args, $depth ) {
       // $GLOBALS['comment'] = $comment;

        if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class( 'media' ); ?>>
            <div class="comment-body">
                <?php _e( 'Pingback:', 'wp-bootstrap-starter' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'wp-bootstrap-starter' ), '<span class="edit-link">', '</span>' ); ?>
            </div>

        <?php else : ?>

        <div id="comment-<?php comment_ID(); ?>" <?php comment_class( array(empty( $args['has_children'] ) ? '' : 'parent', 'row') ); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4 m-2">
                <img class="d-flex mr-3 rounded-circle" src="<?php if ( 0 != $args['avatar_size'] ) echo get_avatar_url( $comment, $args['avatar_size'] );?>">
                    <div class="media-body">                   
                        <h5 class="mt-0">
                            <?php printf( __( '%s <span class="says">says:</span>', 'wp-bootstrap-starter' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
                        </h5>
                        <small class="font-weight-light font-italic"><a class="text-muted" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                            <time datetime="<?php comment_time( 'c' ); ?>">
                                <?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'wp-bootstrap-starter' ), get_comment_date(), get_comment_time() ); ?>
                            </time>
                        </a></small>
                            <?php edit_comment_link( '<i class="fas fa-edit"></i> Editar', '<button type="button" class="btn btn-primary edit-link">', '</button>' ); ?>
                                        

                        <?php if ( '0' == $comment->comment_approved ) : ?>
                            <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'wp-bootstrap-starter' ); ?></p>
                        <?php endif; ?>

                        <p>
                            <?php comment_text(); ?>
                        </p><!-- .comment-content -->

                        <?php comment_reply_link(
                            array_merge(
                                $args, array(
                                    'add_below' => 'div-comment',
                                    'reply_text'=> '<button type="button" class="btn btn-primary">Responder <i class="fas fa-reply"></i></button>',
                                    'depth'     => $depth,
                                    'max_depth' => $args['max_depth'],
                                    'before'    => '<footer class="reply comment-reply justify-content-end">',
                                    'after'     => '</footer><!-- .reply -->'
                                )
                            )
                        ); 
                        ?>
                </div>
            </article><!-- .comment-body -->
        </div>

            <?php
        endif;
    }
endif; // ends check for wp_bootstrap_starter_comment() ?>