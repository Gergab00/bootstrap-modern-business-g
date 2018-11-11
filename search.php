<?php get_header(); ?>
<!-- Page Content -->
    <div class="container">
    <?php if ( have_posts() ) {
    	get_template_part( 'template-parts/content', 'search' );
    } else {
    	wp_reset_query();
    	get_template_part( 'template-parts/content', 'none_results' );
    }
    ?> 
    <aside id="widget-area" class="col-md-4 widget-area">
        <!-- Side Widget -->
        <?php get_sidebar('blog');?>
    </aside>
    	</div>
    </div>

  </div>
  <!-- /.container -->
<?php get_footer(); ?>
</body>
</html>