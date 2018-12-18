<?php
//Shortcode para los botones de accion-------------------
function call_to_action(){
	ob_start();
	get_template_part( 'sections/section', 'call_to_action' );
	return ob_get_clean();
}
add_shortcode('callToAction', 'call_to_action');
//Shortcode para agregar anuncios--------------
function google_adsense(){
	ob_start();
	get_template_part( 'sections/section', 'adsense' );
	return ob_get_clean();
}
add_shortcode( 'googleAdsense', 'google_adsense');
//Shortcode para el iFrame de Bootstrap
function iframeBootStrap($atts = []){
$retiframe = '';
$urliFrame = shortcode_atts( array (
  'url' => '#'
  ), $atts );
$retiframe .='<div class="embed-responsive embed-responsive-1by1"><iframe class="embed-responsive-item" src="';
$retiframe .= $urliFrame['url'];
$retiframe .= '"></iframe></div>';

return $retiframe;
}
add_shortcode( 'framebootstrap', 'iframeBootStrap');
//Modificar Shortcode caption de wordpress----------------
function prefix_img_caption_shortcode_filter($val, $attr, $content = null){
        extract(shortcode_atts(array(
                'id'      => '',
                'align'   => 'aligncenter',
                'width'   => '',
                'caption' => ''
        ), $attr));
 
        // No caption, no dice... But why width? 
        if ( 1 > (int) $width || empty($caption) )
                return $val;
 
        if ( $id )
                $id = esc_attr( $id );
 
        // Add itemprop="contentURL" to image - Ugly hack
        $content = str_replace('<img', '<img itemprop="contentURL"', $content);
 
        return '<figure id="' . $id . '" aria-describedby="figcaption_' . $id . '" class="figure wp-caption ' . esc_attr($align) . '" itemscope itemtype="http://schema.org/ImageObject">' . do_shortcode( $content ) . '<figcaption id="figcaption_'. $id . '" class="figure-caption wp-caption-text" itemprop="description">' . $caption . '</figcaption></figure>';
}
add_filter( 'img_caption_shortcode', 'prefix_img_caption_shortcode_filter', 10, 3 );
?>