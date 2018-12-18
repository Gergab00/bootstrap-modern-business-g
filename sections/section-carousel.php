<?php
/*
Carousel
*/
$catCarousel = get_theme_mod('carrousel_header');
?>
<header>
<?php $loopCarousel = new WP_Query( array( 'cat' => $catCarousel, 'posts_per_page' => 3, ) ); ?>
<?php if ($loopCarousel->have_posts()) { ?>
<div class="carousel slide carousel-fade" data-ride="carousel" id="carouselHeader">
<ol class="carousel-indicators">
<?php 
$activeTag = 'class="active"';
$dataSlide = 0;
do {
$loopCarousel->the_post();  
?>
<li <?php echo $activeTag; ?> data-slide-to="<?php echo $dataSlide; ?>" data-target="#carouselHeader"></li>
<?php
$dataSlide++;
} while ($loopCarousel->have_posts());
?>
</ol>
<div class="carousel-inner" role="listbox">
<!-- Slide One - Set the background image for this slide in the line below -->
<?php 
$activeTag = 'active';
do {
$loopCarousel->the_post();
?>
<div class="carousel-item <?php echo $activeTag; ?>" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>')">
<div class="carousel-caption d-none d-md-block">
<h3 class="bg-dark font-weight-bold"><?php the_title(); ?></h3>
<div class="bg-dark font-weight-bold">
<?php the_excerpt(); ?>
</div>
<a class="btn btn-outline-secondary" href="<?php the_permalink(); ?>" role="button">Ver mas <i class="fas fa-plus-square"></i></a>
</div>
</div>
<?php
$activeTag = '';
} while ($loopCarousel->have_posts()); 
?>
</div>
<a class="carousel-control-prev" data-slide="prev" href="#carouselHeader" role="button">
<span aria-hidden="true" class="carousel-control-prev-icon">
</span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" data-slide="next" href="#carouselHeader" role="button">
<span aria-hidden="true" class="carousel-control-next-icon">
</span>
<span class="sr-only">Next</span>
</a>
</div>
<?php } ?>
</header>