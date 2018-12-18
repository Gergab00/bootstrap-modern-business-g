<?php
if (is_active_sidebar( 'sidebar-1' )) {
if (!is_search()) {
?>
<!-- Search Widget -->
<div class="card mb-4">
<h5 class="card-header">Search</h5>
<div class="card-body">
<div class="d-flex justify-content-center">
<?php get_search_form(); ?>
</div>
</div>
</div>
<!-- Ads Widget -->
<?php  
$google_adsense_300_250 = get_option('adsense_300_250');
if (get_option('analytics_on')=="on" && !empty($googleAnalitycsCode)){ ?>
<div class="card mb-4">
<h5 class="card-header">Clic para conocer mas</h5>
<div class="card-body">
<div id="google_adsense" class="row d-flex justify-content-center">
<div class="d-block d-sm-none bg-secondary" style="height: 253px; width: 303px;">
<?php echo $google_adsense_300_250; ?>
</div>
</div>
</div>
</div>
<?php
}
?>
<?php
} else {	
?>
<!-- Ads Widget -->
<?php  
$google_adsense_300_250 = get_option('adsense_300_250');
if (get_option('analytics_on')=="on" && !empty($googleAnalitycsCode)){ ?>
<div class="card mb-4">
<h5 class="card-header">Clic para conocer mas</h5>
<div class="card-body">
<div id="google_adsense" class="row d-flex justify-content-center">
<div class="d-block d-sm-none bg-secondary" style="height: 253px; width: 303px;">
<?php echo $google_adsense_300_250; ?>
</div>
</div>
</div>
</div>
<?php
}
?>
<?php
}
dynamic_sidebar('sidebar-1'); 
}else{return;}
?>