<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <title><?php echo bloginfo( 'description' ); ?></title>
        <?php wp_head(); ?>
        <?php
        $googleAnalitycs = get_theme_mod('google_analytics'); 
        if (!empty($googleAnalitycs)) {
            echo $googleAnalitycs;
        }
        ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- Navigation -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo bloginfo( 'url' ); ?>">
                    <img alt="<?php echo bloginfo( 'description' ); ?>" class="d-inline-block align-top img-fluid rounded" height="40" src="<?php echo esc_url(get_site_icon_url()); ?>" width="40">
                        <?php echo get_option('blogname'); ?>
                </a>
                <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right order-md-2" data-target="#navbarResponsive" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php
                    wp_nav_menu( array(
                      'theme_location'    =>'primary',
                      'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                      'container'       => 'false',
                      'menu_class'      => 'navbar-nav mr-auto text-center',
                      'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                      'walker'          => new WP_Bootstrap_Navwalker(),
                    ) );
                  ?>
                </div>
                <div class="d-flex navbar-text m-auto order-md-1">
                    <?php 
                    $facebook = get_theme_mod('facebook');
                    if (!empty($facebook)) {
                    ?>
                    <a class="nav-item nav-link text-secondary flex-fill" data-toggle="tooltip" data-placement="bottom" title="Siguenos en Facebook" href="<?php echo $facebook ?>"><i class="fab fa-facebook-square fa-2x"></i></a>
                    <?php 
                    }
                    ?>
                    <?php 
                    $twitter = get_theme_mod('twitter');
                    if (!empty($twitter)) {
                    ?>
                    <a class="nav-item nav-link text-secondary flex-fill" data-toggle="tooltip" data-placement="bottom" title="Siguenos en Twitter" href="<?php echo $twitter ?>"><i class="fab fa-twitter-square fa-2x"></i></a>
                    <?php 
                    }
                    ?>
                    <?php 
                    $instagram = get_theme_mod('instagram');
                    if (!empty($instagram)) {
                    ?>
                    <a class="nav-item nav-link text-secondary flex-fill" data-toggle="tooltip" data-placement="bottom" title="Siguenos en Instagram" href="<?php echo $instagram ?>"><i class="fab fa-instagram fa-2x"></i></a>
                    <?php 
                    }
                    ?>
                    <?php 
                    $youtube = get_theme_mod('youtube');
                    if (!empty($youtube)) {
                    ?>
                    <a class="nav-item nav-link text-secondary flex-fill" data-toggle="tooltip" data-placement="bottom" title="Siguenos en Youtube" href="<?php echo $youtube ?>"><i class="fab fa-youtube fa-2x"></i></a>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </nav>