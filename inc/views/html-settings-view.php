<div class="wrap">
<div id="icon-themes" class="icon32"></div>
<h2>Opciones de Tema</h2>
<?php settings_errors(); ?>
<?php
if( isset( $_GET[ 'tab' ] ) ) {
$active_tab = $_GET[ 'tab' ];
} else if( $active_tab == 'opciones-sociales' ) {
$active_tab = 'opciones-sociales';
} else {
$active_tab = 'opciones-google';
}// end if
?>
<h5 class="nav-tab-wrapper">
<a href="?page=theme-config&tab=opciones-google" class="nav-tab <?php echo $active_tab == 'opciones-google' ? 'nav-tab-active' : ''; ?>">Opciones de Google</a>
<a href="?page=theme-config&tab=opciones-sociales" class="nav-tab <?php echo $active_tab == 'opciones-sociales' ? 'nav-tab-active' : ''; ?>">Opciones de Sociales</a>
<?php if(check_plugin_state('woocommerce')){ ?>
<a href="?page=theme-config&tab=opciones-amazon" class="nav-tab <?php echo $active_tab == 'opciones-amazon' ? 'nav-tab-active' : ''; ?>">Opciones de Amazon</a>
<a href="?page=theme-config&tab=opciones-generales" class="nav-tab <?php echo $active_tab == 'opciones-generales' ? 'nav-tab-active' : ''; ?>">Opciones de Generales</a>
<?php
}
?>
</h5>
<?php
switch ($active_tab) {
	case 'opciones-google':
		get_template_part( 'inc/views/html', 'google-view' );
		break;
	case 'opciones-sociales':
		get_template_part( 'inc/views/html', 'social-view' );
		break;
	case 'opciones-amazon':
		get_template_part( 'inc/views/html', 'amazon-view' );
		break;
	case 'opciones-generales':
		get_template_part( 'inc/views/html', 'general-view' );
		break;
}
?>
</div>