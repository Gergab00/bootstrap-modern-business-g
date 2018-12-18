<?php 
function perzonalizarWooCommerce(){
	add_submenu_page(
		'theme-config',
		'Opciones de Amazon',
		'Opciones de Amazon',
		'edit_theme_options',
		'opciones-amazon',
		create_function( null, 'displayPages( "opciones-amazon" );' )
	);
	register_setting( 'amazonSettings','amazon_on');
	register_setting( 'amazonSettings','amazon_id');
}
add_action('admin_menu','perzonalizarWooCommerce');
?>