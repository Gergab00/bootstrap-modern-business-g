<?php

function configuracionTema() {
	add_theme_page(
        'Configuraciones del Tema',
        'Configuraciones del Tema',
        'edit_theme_options',
        'theme-config',
        'displayPages'
        );
	add_submenu_page(
		'theme-config-menu',
		'Opciones de Google',
		'Opciones de Google',
		'edit_theme_options',
		'opciones-google',
		'displayPages'
	);
	register_setting ('google_analytics_code', 'analytics_on');
    register_setting ('google_analytics_code', 'analytics_code');
    register_setting( 'google_adsense_code', 'adsense_script');
    register_setting( 'google_adsense_code', 'adsense_728_90_on');
    register_setting( 'google_adsense_code', 'adsense_728_90');
    register_setting( 'google_adsense_code', 'adsense_336_280_on');
    register_setting( 'google_adsense_code', 'adsense_336_280');
    register_setting( 'google_adsense_code', 'adsense_300_250_on');
    register_setting( 'google_adsense_code', 'adsense_300_250');

	add_submenu_page(
		'theme-config',
		'Opciones de Sociales',
		'Opciones de Sociales',
		'edit_theme_options',
		'opciones-sociales',
		create_function( null, 'displayPages( "opciones-sociales" );' )
	);
	register_setting('social_settings','facebook_on');
	register_setting('social_settings','facebook_URL');
	register_setting('social_settings','twitter_on');
	register_setting('social_settings','twitter_URL');
	register_setting('social_settings','instagram_on');
	register_setting('social_settings','instagram_URL');
	register_setting('social_settings','youtube_on');
	register_setting('social_settings','youtube_URL');
	
	add_submenu_page(
		'theme-config',
		'Opciones de Generales',
		'Opciones de Generales',
		'edit_theme_options',
		'opciones-generales',
		create_function( null, 'displayPages( "opciones-generales" );' )
	);
	register_setting('general_settings','servSecc1');
	register_setting('general_settings','servSecc2');
	register_setting('general_settings','servSecc3');
}
function displayPages($activeTab=null){
	get_template_part( 'inc/views/html', 'settings-view' );
}
add_action( 'admin_menu', 'configuracionTema' );
?>