<?php if (is_front_page() && is_home()) { ?>
<?php get_header(); ?>
<!-- carousel -->
<?php get_template_part( 'sections/section', 'carousel' ); ?>
<!-- /.carousel -->
<!-- Page Content -->
<div class="container">
    <h1 class="my-4">
        Bienvenido a <?php echo get_option('blogname'); ?> <small><?php echo get_option('blogdescription'); ?></small>
    </h1>
    <!-- Services Section -->
    <div class="row">
        <?php get_template_part( 'sections/section', 'services' ); ?>
    </div>
    <!-- /.Services Section -->
    <!-- /.row -->
    <div class="d-flex border border-muted my-3"></div><!-- /hr -->
        <div class="row d-flex justify-content-center">
          <div class="col-7"><?php get_search_form(); ?></div>
          <div class="col-5">Temas del momento: <?php etiquetasBootStrap();?></div>
        </div>
    <div class="d-flex border border-muted my-3"></div><!-- /hr -->
            <!-- Portfolio Section -->
            <h2>
                Blog
            </h2>
            <div class="row">
                <?php get_template_part( 'sections/section', 'blog' ); ?>
            </div>
            <!-- /.row -->
            <div class="d-flex border border-muted my-3"></div><!-- /hr -->
            <!-- Features Section -->
            <div class="row">
                <div class="col-lg-6">
                    <h2>
                        Modern Business Features
                    </h2>
                    <p>
                        The Modern Business template by Start Bootstrap includes:
                    </p>
                    <ul>
                        <li>
                            <strong>
                                Bootstrap v4
                            </strong>
                        </li>
                        <li>
                            jQuery
                        </li>
                        <li>
                            Font Awesome
                        </li>
                        <li>
                            Working contact form with validation
                        </li>
                        <li>
                            Unstyled page elements for easy customization
                        </li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.
                    </p>
                </div>
                <div class="col-lg-6">
                    <img alt="" class="img-fluid rounded" src="http://placehold.it/700x450">
                    </img>
                </div>
            </div>
            <!-- /.row -->
            <div class="d-flex border border-muted my-3"></div><!-- /hr -->
                <!-- Call to Action Section -->
                <div class="row mb-4">
                    <div class="col-md-8">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-lg btn-secondary btn-block" href="#">
                            Call to Action
                        </a>
                    </div>
                </div>
              <div class="d-flex border border-muted my-3"></div><!-- /hr -->
            </div>
<!-- /.container -->
<?php get_footer(); ?>
</body>
</html>
<?php }else{ 
get_template_part( 'template-parts/content', 'blog' );
} ?>