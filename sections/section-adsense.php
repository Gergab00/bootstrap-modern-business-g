<?php
/*
*Adsense Section
*/
?>
<div class="d-flex border border-muted my-3"></div><!-- /hr -->
<div id="google_adsense" class="row d-flex justify-content-center">
<div class="d-none d-md-block d-lg-block d-xl-block bg-secondary" style="height: 95px; width: 733px;">
<?php  
$google_adsense_728_90 = get_theme_mod('google_adsense_728_90');
if (!empty($google_adsense_728_90)) {
echo $google_adsense_728_90;
}
?>
</div>
<div class="d-none d-sm-block d-md-none bg-secondary" style="height: 283px; width: 339px;">
<?php  
$google_adsense_336_280 = get_theme_mod('google_adsense_336_280');
if (!empty($google_adsense_336_280)) {
echo $google_adsense_336_280;
}
?>
</div>
<div class="d-block d-sm-none bg-secondary" style="height: 253px; width: 303px;">
<?php  
$google_adsense_300_250 = get_theme_mod('google_adsense_300_250');
if (!empty($google_adsense_300_250)) {
echo $google_adsense_300_250;
}
?>
</div>
</div>
<div class="d-flex border border-muted my-3"></div><!-- /hr -->