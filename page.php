<?php get_header(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- main content -->
    <section class="small-12 large-9 columns main-content">
      <!-- page title-->
        <div id="page-header" class="text-center">
          <h1><?php the_title();?></h1>
        </div>
      <!-- end page title-->
      <div class="post post-content">
        <?php
          if ( has_post_thumbnail() ) {
          	the_post_thumbnail();
          }
          the_content();
          ?>
      </div>
    </section>
    <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    <!-- end main content -->
    <!-- sidebar -->
    <?php get_sidebar(); ?>
    <!-- end sidebar -->
<? get_footer(); ?>
