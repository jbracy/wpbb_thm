<?php
/**
 * Template Name: Full Width
 *
 * @package Bracy
 * @subpackage Blog Theme
 * @since Blog Theme 1.0
 */
get_header(); ?>

  <section class="small-12 columns">
    <div class="row">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- page title-->

    <header class="small-12 columns text-center">
      <h1><?php the_title();?></h1>
    </header>

  <!-- end page title-->

  <!-- main row -->
  <section class="small-12 columns">
    <!-- main content -->
          <div class="post">
            <?php the_content(); ?>
          </div>
    <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    <!-- end main content -->
  </section>
  <!-- end main row (main content & sidebar) -->
</div>
</section>
<?
  get_footer();
?>
