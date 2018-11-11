<?php
/*
* Our Us Section
* <?php the_excerpt_embed(); ?>
* <a class="btn btn-outline-primary" href="<?php the_permalink(); ?>">Conoce mas <i class="fas fa-plus-square"></i></a>
*/
$our_us_page = get_theme_mod('our_us_page');
$our_us_page_extract = get_theme_mod('our_us_page_extract');
?>
<?php $our_us_query = new WP_Query( 
array(  'posts_per_page' => 1,
'post_type' => 'page',
'post__in' => array(
    $our_us_page))
);  
if ($our_us_query->have_posts()) {
while ($our_us_query->have_posts()) {
$our_us_query->the_post();
?>
<h4>
<?php the_title(); ?>
</h4>
<?php if ($our_us_page_extract) { ?>
<div class="row m-1">
<?php the_content(); ?>	
</div>
<?php } else { ?>
 <div class="row m-1">
<?php
echo extractoPersonalizado(get_the_content(),300);
?>	
</div>
<a class="btn btn-outline-primary" href="<?php the_permalink(); ?>">
Conoce mas <i class="fas fa-plus-square"></i>
</a>
<?php } ?>
<?php
}
}
?>
