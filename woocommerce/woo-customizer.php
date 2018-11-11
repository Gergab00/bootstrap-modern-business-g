<?php 
function perzonalizarWooCommerce($wp_customize){
	//Section Amazon
	$wp_customize->add_section( 'amazon_section' , array(
		'title' 		=> 'Afilaidos de Amazon',
		'description' 	=> 'Agrega tu ID de tienda',
		'panel'	=> 'woocommerce',
		'priority' 		=> 21,
		'capability' 	=> 'edit_theme_options',
	));
	$wp_customize->add_setting( 'amazon_id', array(
		'type' 			=> 'theme_mod',
		'capability' 	=> 'edit_theme_options',
	));
	$wp_customize->add_control('amazon_id', array(
		'label' 		=> 'Amazon ID:',
		'section' 		=> 'amazon_section',
		'priority' 		=> 1,
		'type'			=> 'text',
	));
}
add_action('customize_register','perzonalizarWooCommerce');
?>