<h2>Seccion de configuraciones generales.</h2>
<form method="POST" action="options.php">
<?php
settings_fields('general_settings');
do_settings_sections('general_settings');
?>
<hr>
<h3>Tarejtas de Servicios</h3>
<p>Sección 1</p>
<?php
$checkPage = "";
$checkPost = "";
switch (get_option('servSecc1')) {
	case 'page':
		$checkPage = "checked";
		break;
	case 'post':
		$checkPost =  "checked";
		break;
}
?>
<input type="radio" name="servSecc1" id="servSecc1" value="page" <?php echo $checkPage; ?>>Paginas<br>
<input type="radio" name="servSecc1" id="servSecc1" value="post" <?php echo $checkPost; ?>>Entradas<br>

<p>Sección 2</p>
<?php
$checkPage = "";
$checkPost = "";
switch (get_option('servSecc2')) {
	case 'page':
		$checkPage = "checked";
		break;
	case 'post':
		$checkPost =  "checked";
		break;
}
?>
<input type="radio" name="servSecc2" id="servSecc2" value="page" <?php echo $checkPage; ?>>Paginas<br>
<input type="radio" name="servSecc2" id="servSecc2" value="post" <?php echo $checkPost; ?>>Entradas<br>
<p>Sección 3</p>
<?php
$checkPage = "";
$checkPost = "";
switch (get_option('servSecc3')) {
	case 'page':
		$checkPage = "checked";
		break;
	case 'post':
		$checkPost =  "checked";
		break;
}
?>
<input type="radio" name="servSecc3" id="servSecc3" value="page" <?php echo $checkPage; ?>>Paginas<br>
<input type="radio" name="servSecc3" id="servSecc3" value="post" <?php echo $checkPost; ?>>Entradas<br>
<?php submit_button(); ?>
</form>