<?php
/**
 * Template Name: Media
 *
 * @package Bracy
 * @subpackage Blog Theme
 * @since Blog Theme 1.0
 */
get_header(); ?>
    <!-- main content -->
    <section class="small-10 small-offset-1 columns">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- page title-->
        <header class="text-center">
          <h1><?php the_title();?></h1>
        </header>
      <!-- end page title-->

      <div class="row">
          <div class="post post-content">
            <?php the_content(); ?>
          </div>
      </div>
    <?php endwhile; else : ?>
      <div class="row">
          <div class="post post-content">
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          </div>
      </div>
    <?php endif; ?>
    </section>
    <!-- end main content -->
<? get_footer(); ?>
