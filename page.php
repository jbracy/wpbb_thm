<?php
get_header(); ?>
  <section class="small-12 columns">
    <div class="row">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- main content -->
    <section class="small-12 large-8 columns">
      <!-- page title-->
        <header class="text-center">
          <h1><?php the_title();?></h1>
        </header>
      <!-- end page title-->

      <div class="row">
          <div class="post post-content">
            <?php
              if ( has_post_thumbnail() ) {
              	the_post_thumbnail();
              }
              the_content();
              ?>
          </div>
      </div>
    </section>
    <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    <!-- end main content -->
    <!-- sidebar -->
    <?php get_sidebar(); ?>
    <!-- end sidebar -->
  </div>
  </section>
<?
  get_footer();
?>
