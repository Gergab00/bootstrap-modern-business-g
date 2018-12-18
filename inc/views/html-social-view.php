<h2>Seccion para agregar link de tus redes sociales</h2>
<form method="POST" action="options.php">
<?php
settings_fields('social_settings');
do_settings_sections('social_settings');
?>
<hr>
<h3>Facebook</h3>
<?php
$check = "";
if (get_option('facebook_on')=="on") {
		$check = "checked";
	}
?>
URL: <input type="URL" name="facebook_URL" id="facebook_URL" style="width: 300px" value="<?php echo get_option('facebook_URL'); ?>"> <input type="checkbox" name="facebook_on" id="facebook_on" value="on" <?php echo $check; ?>> <i>Activar</i>
<hr>
<h3>Twitter</h3>
<?php
$check = "";
if (get_option('twitter_on')=="on") {
		$check = "checked";
	}
?>
URL: <input type="URL" name="twitter_URL" id="twitter_URL" style="width: 300px" value="<?php echo get_option('twitter_URL'); ?>"> <input type="checkbox" name="twitter_on" id="twitter_on" value="on" <?php echo $check; ?>> <i>Activar</i>
<hr>
<h3>Instagram</h3>
<?php
$check = "";
if (get_option('instagram_on')=="on") {
		$check = "checked";
	}
?>
URL: <input type="URL" name="instagram_URL" id="instagram_URL" style="width: 300px" value="<?php echo get_option('instagram_URL'); ?>"> <input type="checkbox" name="instagram_on" id="instagram_on" value="on" <?php echo $check; ?>> <i>Activar</i>
<hr>
<h3>Youtube</h3>
<?php
$check = "";
if (get_option('youtube_on')=="on") {
		$check = "checked";
	}
?>
URL: <input type="URL" name="youtube_URL" id="youtube_URL" style="width: 300px" value="<?php echo get_option('youtube_URL'); ?>"> <input type="checkbox" name="youtube_on" id="youtube_on" value="on" <?php echo $check; ?>> <i>Activar</i>

<?php submit_button(); ?>
</form>