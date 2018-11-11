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
  <div class="card mb-4">
    <h5 class="card-header">Clic para conocer mas</h5>
    <div class="card-body">
      <div class="bg-secondary d-flex justify-content-center align-items-center">
        <div id="google_adsense" class="row d-flex justify-content-center">
          <div class="bg-secondary" style="height: 253px; width: 303px;">
<?php  
$google_adsense_300_250 = get_theme_mod('google_adsense_300_250');
if (!empty($google_adsense_300_250)) {
echo $google_adsense_300_250;
}
?>
</div>
        </div>
      </div>
    </div>
  </div>
<?php
	} else {	
?>
	<!-- Ads Widget -->
	  <div class="card mb-4">
    <h5 class="card-header">Clic para conocer mas</h5>
    <div class="card-body">
      <div class="bg-secondary d-flex justify-content-center align-items-center">
        <div id="google_adsense" class="row d-flex justify-content-center">
          <div class="bg-secondary" style="height: 253px; width: 303px;">
<?php  
$google_adsense_300_250 = get_theme_mod('google_adsense_300_250');
if (!empty($google_adsense_300_250)) {
echo $google_adsense_300_250;
}
?>
</div>
        </div>
      </div>
    </div>
  </div>
<?php
	}
	dynamic_sidebar('sidebar-1'); 
}else{return;}
?>