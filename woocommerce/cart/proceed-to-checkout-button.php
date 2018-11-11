<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes. 
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php
$amazon_id = get_theme_mod('amazon_id');
if (!empty($amazon_id)){
?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
<button type="submit" onclick="window.open('<?php echo esc_url( wc_get_checkout_url_amazon($amazon_id));?>');" class="btn btn-outline-success checkout-button alt wc-forward">
	<i class="fas fa-money-check-alt"></i> 
	<?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>
</button>
</form>
<?php
} else {
?>
<a href="<?php echo esc_url( wc_get_checkout_url() );?>" class="btn btn-outline-success checkout-button alt wc-forward">
	<i class="fas fa-money-check-alt"></i> 
	<?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>
</a>
<?php
}
?>