<?php
/*
Services Section
*/
$tarjetas_servicios_1 = get_theme_mod('tarjetas_servicios_1');
$tarjetas_servicios_2 = get_theme_mod('tarjetas_servicios_2');
$tarjetas_servicios_3 = get_theme_mod('tarjetas_servicios_3');
?>
<?php $servicePage1 = new WP_Query( 
array(  'posts_per_page' => 3,
'post_type' => 'page',
'post__in' => array(
    $tarjetas_servicios_1,
    $tarjetas_servicios_2,
    $tarjetas_servicios_3))
);  
if ($servicePage1->have_posts()) {
while ($servicePage1->have_posts()) {
$servicePage1->the_post();
?>
<div class="col-lg-4 mb-4">
<div class="card h-100">
<h4 class="card-header">
<a href="<?php the_permalink(); ?>">
<?php the_title(); ?>
</a>
</h4>
<div class="card-body">
<p class="card-text">
<?php 
the_excerpt_embed(); 
?>
</p>
</div>
<div class="card-footer">
<a class="btn btn-outline-primary" href="<?php the_permalink(); ?>">
Conoce mas <i class="fas fa-plus-square"></i>
</a>
</div>
</div>
</div>  
<?php
}
}
?>