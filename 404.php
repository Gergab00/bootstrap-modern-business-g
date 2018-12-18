<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'shop' );
?>

<header class="container-fluid d-flex justify-content-center align-items-center business-header" style="background:#000000;">
	<h1 class="display-1 text-white text-center">¡ERROR 404!</h1>
  <h3 class="text-white">Lo sentimos no pudimos encontrar la pagina solicitada.</h3>
  
</header>

<div class="container">
	<div class="row d-flex justify-content-center m-2">
    <h5 class="display-4">Te recomedamos lo siguiente.</h5>
                <h3 class="display-3">
                    <a href="<?php echo get_option('siteurl'); ?>/?page_id=<?php echo get_option('page_for_posts'); ?>">
                        Visita los articulos de nuestro Blog
                    </a>
                </h3>
            </div>
  <?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
	<div class="row">
		<?php get_template_part( 'sections/section', 'blog' ); ?>
	</div>
	<?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
	<div class="row">
		<?php get_template_part( 'sections/section', 'shop' ); ?>
	</div>
</div><!-- /.Container -->
<?php
get_footer('shop');