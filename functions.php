<?php
//REQUIERES
require_once get_template_directory().'/wp-bootstrap-navwalker-master/class-wp-bootstrap-navwalker.php';// Register Custom Navigation Walker
require_once get_template_directory().'/wp_bootstrap_starter_comment/class-wp_bootstrap_starter_comment.php';
if (check_plugin_state('woocommerce')) {
    require_once get_template_directory().'/woocommerce/woo-functions.php';
}
require_once get_template_directory().'/inc/customizer.php';
require_once get_template_directory().'/inc/shortcodes.php';
//FUNCIONES 
function agregado_cssjs() {//AGREGADO JS Y CSS
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3', 'all' );
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css', array(), '5.3.1', 'all' );
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.1.1', true );
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'bootstrapbundlejs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js', array(), '4.1.3', true );
    wp_enqueue_script( 'bootstrapbundlejs');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
};
function removerccs_js() {//REMOVER JS Y CSS INNECESARIOS DE WP
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'start_post_rel_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    remove_action( 'wp_head', 'adjacent_posts_rel_link' );
    remove_action( 'wp_head', 'parent_post_rel_link' );
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
};
//-------------------------------------------------------
function etiquetasBootStrap($postID = 0){//FUNCION QUE REGRESA LAS ETIQUETAS CON ESTILO DE BOOTSTRAP
    $terms=get_the_terms( $postID, 'post_tag');
    if (!empty($terms)) {
        foreach( $terms as $term ){
        $link = get_term_link( $term, 'post_tag');
        if ( is_wp_error( $link ) ) {
            return $link;
        }
        echo ' <a class="badge badge-secondary" href="' . esc_url( $link ) . '" rel="tag">' . $term->name . '</a> ';
        }
    }else{
        echo '<h4>Este articulo no tiene etiquetas</h4>' ;
    }
};
//-------------------------------------------------------
function the_breadcrumb() {//FUNCION QUE CREAR LOS BREADCRUM 
    echo '<nav aria-label="breadcrumb">';
    echo '<ol class="breadcrumb">';
    if (!is_home()||!is_front_page()) {
        echo '<li class="breadcrumb-item">';
        echo '<a href="';
        bloginfo('url');
        echo '">';
        echo 'Home</a> </li>';
        if (is_category() || is_single()) {
            echo '<li class="breadcrumb-item">';
            the_category(',', 'single');
            echo '</li>';
            if (is_single()) {
                echo '<li class="breadcrumb-item">';
                the_author_link();
                echo '</li>';
                echo '<li class="breadcrumb-item active">';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            echo '<li class="breadcrumb-item">';
            the_title();
            echo '</li>';
        } elseif (is_search()) {
            echo wp_title(' /');
        } else {
            echo wp_title(' /');
        }
    }
    echo '</ol>';
    echo '</nav>';
};
//-------------------------------------------------------
function the_related_content($idPost){ 

    $terms = get_the_terms( $idPost, 'category');
    $categ = array();
    $relatedContent = '';
    
    if ( $terms ){
        foreach ($terms as $term){
            $categ[] = $term->term_id;
        }
    }else{
        echo "VACIO TERMS";
    }

    $loop   = new WP_QUERY(array(
                    'category__in'      => $categ,
                    'posts_per_page'    => 3,
                    'post__not_in'      =>array(get_the_ID()),
                    'orderby'           =>'rand'
                    ));

    if ( $loop->have_posts() ){
        $relatedContent .= '<div class="row">';
        $google_adsense_300_250 = get_theme_mod('google_adsense_300_250');
            if (!empty($google_adsense_300_250)) {
            $relatedContent .= '<div class="col-md-6"><div class="card">';
            $relatedContent .= '<div class="card-body">';
            $relatedContent .= '<div id="google_adsense" class="row d-flex justify-content-center">';
            $relatedContent .= '<div class="bg-secondary" style="height: 253px; width: 303px;">';
            $relatedContent .= $google_adsense_300_250;
            $relatedContent .= '</div></div>';
            $relatedContent .= '</div>';
            $relatedContent .= '</div></div>';
            }
        while ( $loop->have_posts() ){
            $loop->the_post();
            $relatedContent .= '<div class="col-md-6"><div class="card">';
            $relatedContent .= '<a href="'.get_permalink().'">';
            $relatedContent .= '<div class="card-body">';
            $relatedContent .= '<img class="img-fluid" src="'.get_the_post_thumbnail_url().'">';
            $relatedContent .= '<h5 class="card-title">';
            $relatedContent .= get_the_title();
            $relatedContent .= '</h5>';
            $relatedContent .= '</div></a>';
            $relatedContent .= '</div></div>';
        }
        $relatedContent .= '</div>';
    }else{
        $loop2   = new WP_QUERY(array(
                'posts_per_page'    => 3,
                'post__not_in'      =>array(get_the_ID()),
                'orderby'           =>'rand'
                ));

        if ( $loop2->have_posts() ){
            $relatedContent .= '<div class="row">';
            $google_adsense_300_250 = get_theme_mod('google_adsense_300_250');
            if (!empty($google_adsense_300_250)) {
            $relatedContent .= '<div class="col-md-6"><div class="card">';
            $relatedContent .= '<div class="card-body">';
            $relatedContent .= '<div id="google_adsense" class="row d-flex justify-content-center">';
            $relatedContent .= '<div class="bg-secondary" style="height: 253px; width: 303px;">';
            $relatedContent .= $google_adsense_300_250;
            $relatedContent .= '</div></div>';
            $relatedContent .= '</div>';
            $relatedContent .= '</div></div>';
            }
            while ( $loop2->have_posts() ){
                $loop2->the_post();
                $relatedContent .= '<div class="col-md-6"><div class="card">';
                $relatedContent .= '<a href="'.get_permalink().'">';
                $relatedContent .= '<div class="card-body">';
                $relatedContent .= '<img class="img-fluid" src="'.get_the_post_thumbnail_url().'">';
                $relatedContent .= '<h5 class="card-title">';
                $relatedContent .= get_the_title();
                $relatedContent .= '</h5>';
                $relatedContent .= '</div></a>';
                $relatedContent .= '</div></div>';
            }
        }
        $relatedContent .= '</div>';
    }
    echo $relatedContent;
    wp_reset_query();
};
//----------------------------------------
function extractoPersonalizado($text = '', $tamaño = -1){
    $str = str_split($text);
    $max = count($str);
    $var = true;
    for($i=0; $i < $max; $i++){ 
        if($str[$i]=='<'){$var = false;}
        if($str[$i]=='>'){
            $var = true;
            $i++;
            if($str[$i]=='<'){$var = false;}
        }
        if($var){$extracto .= $str[$i];}
    }
    $extractoPersonalizado = substr($extracto, 0, $tamaño);
    $extractoPersonalizado .= '...';
    return $extractoPersonalizado;
}

//THEME SUPPORT
function registroThemeSupports(){//REGISTRO DE IMAGENES DESTACADAS
    add_theme_support( 'post-thumbnails' );
    add_theme_support('html5', array('comment-list', 'comment-form','gallery','caption','search-form'));
    add_theme_support( 'post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'));
 }
function check_plugin_state($type=''){
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    $state = false;
    switch ($type) {
        case 'woocommerce':
            $state = is_plugin_active('woocommerce/woocommerce.php');
            break;
        case 'mailchimp-for-wp':
            $state = is_plugin_active('mailchimp-for-wp/mailchimp-for-wp.php');
            break;
        default:
            break;
    }
    return $state;
}
 /**
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length($length) {//CAMBIAR CANTIDAD DE CARACTERES EN EXTRACTO
    return 30;
};
if (function_exists('register_nav_menus')) {//REGISTRO DE MENUS
    register_nav_menus(array(
        'primary'   =>  'Menu Cabecera',
        'secondary' =>  'Menu Pie'));
};

function registroSidebar(){
    register_sidebar(array(
        'name'          =>      'SideBar Blog',
        'id'            =>      'sidebar-1',
        'description'   =>      'Área de widgets que aparece en el Blog',
        'before_widget' =>      '<div id="sidebar-blog" class="card my-4">',
        'after_widget'  =>      '</div></div>',
        'before_title'  =>      '<h5 class="card-header">',
        'after_title'   =>      '</h5><div class="card-body">'
    ));
    register_sidebar(array(
        'name'          =>      'SideBar Footer',
        'id'            =>      'sidebar-2',
        'description'   =>      'Área de widgets que aparece en el Footer',
        'before_widget' =>      '<div class="card"><div class="card-body">',
        'after_widget'  =>      '</p></div></div>',
        'before_title'  =>      '<h5 class="card-title">',
        'after_title'   =>      '</h5><p class="card-text">'
    ));
};
//ACTIONS
add_action( 'init', 'removerccs_js' );
add_action( 'wp_enqueue_scripts', 'agregado_cssjs' );
add_action( 'widgets_init', 'registroSidebar' );
add_action( 'after_setup_theme', 'registroThemeSupports');
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 9);
?>