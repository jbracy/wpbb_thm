<?php
/**
 * Template Name: Home Page
 *
 * @package Bracy
 * @subpackage Blog Theme
 * @since Blog Theme 1.0
 */
get_header(); ?>

  <section class="small-12 columns">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- page title-->

    <header class="text-center">
      <h1><?php the_title();?></h1>
    </header>

    <!-- end page title-->

    <!-- main content -->
    <div class="post">
      <?php the_content(); ?>
    </div>
    <?php endwhile; else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    <!-- end main content -->
  </section>
  <!-- sidebar -->
  <aside>
    <div class="small-12 large-3 columns sidebar">
      <?php get_sidebar('home-1');?>
    </div>
    <div class="small-12 large-3 columns sidebar">
      <?php get_sidebar('home-2');?>
    </div>
    <div class="small-12 large-3 columns sidebar">
      <?php get_sidebar('home-3');?>
    </div>
  </aside>
  <!-- end sidebar -->
<?
  get_footer();
?>
