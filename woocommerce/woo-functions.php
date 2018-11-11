<?php
require_once get_template_directory().'/woocommerce/woo-customizer.php';
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'widgets_init', 'registroWooSidebar' );
function registroWooSidebar(){
	register_sidebar(array(
		'name'          =>      'SideBar Shop',
		'id'            =>      'sidebar-3',
        'description'   =>      'Área de widgets que aparece en el Blog',
        'before_widget' =>      '<div id="sidebar-blog" class="card my-4">',
        'after_widget'  =>      '</div></div>',
        'before_title'  =>      '<h5 class="card-header">',
        'after_title'   =>      '</h5><div class="card-body">'
    ));
}
function porcentajeDescuento($product){
	$precioDescuento = floatval($product->get_sale_price());
	$precioRegular = floatval($product->get_regular_price());
	$descuento = (($precioDescuento/$precioRegular)*-100)+100;

	return $descuento;
}
function wc_get_rating_zero_html( $rating, $count = 0 ) {
	$html  = '<div class="star-rating">';
	$html .= wc_get_star_rating_html( $rating, $count );
	$html .= '</div>';
return apply_filters( 'woocommerce_product_get_rating_html', $html, $rating, $count );
}
function woocommerce_widget_shopping_cart_button_view_cart_boostrap(){
	echo '<a href="' . esc_url( wc_get_cart_url() ) . '" class="btn btn-outline-primary wc-forward"> <i class="fas fa-shopping-cart"></i> ' . esc_html__( 'View cart', 'woocommerce' ) . '</a>';
}
function woocommerce_widget_shopping_cart_proceed_to_checkout_bootstrap(){
		echo '<a href="' . esc_url( wc_get_checkout_url() ) . '" class="btn btn-outline-success checkout wc-forward"><i class="fas fa-money-check-alt"></i> ' . esc_html__( 'Checkout', 'woocommerce' ) . '</a>';
}
/**
 * FUNCION QUE RETORNA LA URL PARA AMAZON AFFILATES.
 *
 * @param string $associateTag ID de AmazonAffilates
 * @return string String con la URL Completa para el carrito de Amazon
 */
function wc_get_checkout_url_amazon($associateTag='tecnologias36-20'){
$itemNum = 0;
$urlAmazon = 'https://www.amazon.com.mx/gp/aws/cart/add.html?AssociateTag='.$associateTag;
foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
	$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
	if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
		$itemNum++;
		$urlAmazon .= '&ASIN.'.$itemNum.'='.$_product->get_sku();
		$urlAmazon .= '&Quantity.'.$itemNum.'='.$cart_item['quantity'];
	}
}
	return $urlAmazon;
}
/**
 * FUNCION QUE QUITA LAS ETIQUETAS HTML DE CART MESSAGES Y DEVUELVE UNICAMENTE LOS STRING.
 *
 * @param string $message String con etiquetas HTML
 * @return string Regresa el String sin etiquetas HTML
 */
function messageBootStrap($message=''){
	$content .= $message;
	$chars = preg_split('/<[^>]*[^\/]>/i', $content, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
	return $chars[1];
}
function output_all_notices(){
	$javascrip = 'onclick='.'"$('."'.close').alert('close');".'"';
	echo '<div class="woocommerce-notices-wrapper"'.$javascrip.'>';
	wc_print_notices();
	echo '</div>';
}
//remove actions to hooks
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
?>