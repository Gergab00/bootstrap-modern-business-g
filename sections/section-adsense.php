<?php
/*
*Adsense Section
*/
?>
<div class="d-flex border border-muted my-3"></div><!-- /hr -->
<div id="google_adsense" class="row d-flex justify-content-center">
<?php  
$google_adsense_728_90 = get_option('adsense_728_90');
if (get_option('adsense_728_90_on')=="on" && !empty($google_adsense_728_90)){ ?>
<div class="d-none d-md-block d-lg-block d-xl-block bg-secondary" style="height: 95px; width: 733px;">
<?php echo $google_adsense_728_90; ?>
</div>
<?php
}
?>
<?php  
$google_adsense_336_280 = get_option('adsense_336_280');
if (get_option('adsense_336_280_on')=="on" && !empty($google_adsense_336_280)){ ?>
<div class="d-none d-sm-block d-md-none bg-secondary" style="height: 283px; width: 339px;">
<?php echo $google_adsense_336_280; ?>
</div>
<?php
}
?>
<?php  
$google_adsense_300_250 = get_option('adsense_300_250');
if (get_option('analytics_on')=="on" && !empty($google_adsense_300_250)){ ?>
<div class="d-block d-sm-none bg-secondary" style="height: 253px; width: 303px;">
<?php echo $google_adsense_300_250; ?>
</div>
<?php
}
?>
</div>
<div class="d-flex border border-muted my-3"></div><!-- /hr -->