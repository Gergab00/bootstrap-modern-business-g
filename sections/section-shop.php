<?php
/*
Blog Section
*/
?>
<?php if (check_plugin_state('woocommerce')) { ?>
<section class="col-lg m-2 woocommerce">
<div class="row">
<div class="col-lg-12">
<?php
$idPage = wc_get_page_id( 'shop' );
$enlace = get_permalink( $idPage);
?>
<h2 class="my-4"><a href="<?php echo $enlace; ?>">
	<?php if (is_checkout()) {
		echo "Conoce otros articulos de nuestra Tienda";
	} else {
		echo "Tienda";
	}
	 ?>
</a></h2>
</div>
</div>
<div class="row">
<?php

$shoopLoop = new WP_Query( 
array(  'posts_per_page' => 6,
'post_type' => 'product',
));
if ($shoopLoop->have_posts()) {
while ( $shoopLoop->have_posts() ) {
$shoopLoop->the_post();
woocommerce_product_loop_start();
/**
* Hook: woocommerce_shop_loop.
*
* @hooked WC_Structured_Data::generate_product_data() - 10
*/
do_action( 'woocommerce_shop_loop' );

wc_get_template_part( 'content', 'product' );
woocommerce_product_loop_end();
}
}
?>
</div>
</section>
<?php } else { ?>
<div class="d-flex border border-muted my-3"></div><!-- /hr -->
<?php }