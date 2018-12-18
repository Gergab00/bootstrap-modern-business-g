<!-- Footer -->
<footer class="py-5 bg-dark">
<div class="container">
<?php if (!is_single()) {  ?>
<?php get_template_part( 'sections/section', 'adsense' ); ?><!-- ADSENSE SECTION -->
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
<div class="row d-flex justify-content-center m-1">
  <p class="font-weight-bold text-white">Tema realizado por Gerardo González | Visita el repostorio en <a href="https://github.com/Gergab00/bootstrap-modern-business-g" target="_blank">Github</a></p>
</div>
</div>
<!-- /.container -->
</footer>
<?php wp_footer(); ?>