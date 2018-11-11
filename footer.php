<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <?php if (!is_single()) {  ?>
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
        <?php } ?>
      
      <!-- Side Widget -->
      <?php get_sidebar('footer');?>
      
        <div class="row d-flex justify-content-center m-1">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <?php
        wp_nav_menu( array(
          'theme_location'  => 'secondary',
          'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'menu_class'      => 'navbar-nav mr-auto text-center',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
      ?>
</nav>
	</div>
      </div>
      <!-- /.container -->
    </footer>
    <?php wp_footer(); ?>