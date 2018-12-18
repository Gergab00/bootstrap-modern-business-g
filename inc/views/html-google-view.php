<h2>Codigo Google Analytics</h2>
<p>Escribe aqui el código proporcionado por <b><i>Google Analytics</i></b>. Tambien puedes activar o desactirvar el codigo de seguimiento.</p>
<form method="POST" action="options.php">
	<?php
	settings_fields('google_analytics_code');
	do_settings_sections('google_analytics_code');
	$check = "";
	if (get_option('analytics_on')=="on") {
		$check = "checked";
	}
	?>
<input type="checkbox" name="analytics_on" id="analytics_on" value="on" <?php echo $check; ?>> Activa código de Analytics.<br>
<br><br>
<textarea type="text" name="analytics_code" id="analytics_code" placeholder="Pon aqui el código de Analytics" rows="6" cols="50"><?php echo get_option('analytics_code'); ?></textarea>
<?php submit_button(); ?>
</form>
<hr>
<h2>Codigos Google Adsense</h2>
<p>Sección para agregar codigos de los anuncios de AdSense. Para agregar anuncios en cualquier post o pagina usa el shortcode [googleAdsense]</p>
<form method="POST" action="options.php">
	<?php
	settings_fields('google_adsense_code');
	do_settings_sections('google_adsense_code');
	?>
<h3>Script de Anuncios</h3>

<textarea name="adsense_script" id="adsense_script" placeholder="Pon aqui el script de AdSense" rows="6" cols="50"><?php echo get_option('adsense_script'); ?></textarea>
<?php
$check = "";
if (get_option('adsense_728_90_on')=="on") {
		$check = "checked";
	}
?>
<h3>Código de Anuncios 728x90 <small>Shortcode <b>[googleAdsense size="728_90"]</b></small></h3>
<input type="checkbox" name="adsense_728_90_on" id="adsense_728_90_on" value="on" <?php echo $check; ?>> Activa código de Adesense.
<br><br>
<textarea name="adsense_728_90" id="adsense_728_90" placeholder="Pon aqui el código de AdSense" rows="6" cols="50"><?php echo get_option('adsense_728_90'); ?></textarea>
<h3>Código de Anuncios 336x380 <small>Shortcode <b>[googleAdsense size="336_280"]</b></small></h3>
<?php
$check = "";
if (get_option('adsense_336_280_on')=="on") {
		$check = "checked";
	}
?>
<input type="checkbox" name="adsense_336_280_on" id="adsense_336_280_on" value="on" <?php echo $check; ?>> Activa código de Adesense.
<br><br>
<textarea name="adsense_336_280" id="adsense_336_280" placeholder="Pon aqui el código de AdSense" rows="6" cols="50"><?php echo get_option('adsense_336_280'); ?></textarea>
<h3>Código de Anuncios 300x250 <small>Shortcode <b>[googleAdsense size="300_250"]</b></small></h3>
<?php
$check = "";
if (get_option('adsense_300_250_on')=="on") {
		$check = "checked";
	}
?>
<input type="checkbox" name="adsense_300_250_on" id="adsense_300_250_on" value="on" <?php echo $check; ?>> Activa código de Adesense.
<br><br>
<textarea name="adsense_300_250" id="adsense_300_250" placeholder="Pon aqui el código de AdSense" rows="6" cols="50"><?php echo get_option('adsense_300_250'); ?></textarea>

<?php submit_button(); ?>
</form>