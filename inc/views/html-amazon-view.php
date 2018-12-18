<h3>Ingresa el ID de tienda de Amazon</h3>
<form method="POST" action="options.php">
<?php
settings_fields('amazonSettings');
do_settings_sections('amazonSettings');
?>
<hr>
<h4>México</h4>
<?php
$check = "";
if (get_option('amazon_on')=="on") {
		$check = "checked";
	}
?>
ID: <input type="text" name="amazon_id" id="amazon_id" style="width: 300px" value="<?php echo get_option('amazon_id'); ?>"> <input type="checkbox" name="amazon_on" id="amazon_on" value="on" <?php echo $check; ?>> <i>Activar</i>
<hr>

<?php submit_button(); ?>
</form>