<?php
function call_to_action(){
	ob_start();
	get_template_part( 'sections/section', 'call_to_action' );
	return ob_get_clean();
}
add_shortcode('callToAction', 'call_to_action');
function google_adsense(){
	ob_start();
	get_template_part( 'sections/section', 'adsense' );
	return ob_get_clean();
}
add_shortcode( 'googleAdsense', 'google_adsense');
?>