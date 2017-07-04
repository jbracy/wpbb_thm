<?php get_header(); ?>
  <section>
    <!-- main content -->
    <section class="medium-12 large-9 columns main-content">
      <div class="posts-row row small-up-1 medium-up-2">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

        ?>
        <div class="column">
          <h3 class="text-center"><a href="<?php the_permalink(); ?>" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
          <p class="subheader post-date"><?php the_date(); ?></p>
          <?php
          if ( has_post_thumbnail() ) {
          	the_post_thumbnail('thumbnail');
          }
          ?>
          <div class="excerpt">
            <?php the_excerpt(); ?>
          </div>
          <a href="<?php the_permalink(); ?>" class="expanded button round">Read More</a>
        </div>
        <?php endwhile; else : ?>
        	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
      </div>
      <div class="pagination row">
          <?php
          $args = array(
          	'prev_next'          => true,
          	'prev_text'          => __('« Newer'),
          	'next_text'          => __('Older »'),
          	'type'               => 'list'
          );
          $return = paginate_links( $args );
          echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination text-center" role="navigation" aria-label="Pagination">', $return );
          ?>
      </div>
    </section>
    <!-- end main content -->
  <!-- sidebar -->
  <?php get_sidebar(); ?>
  <!-- end sidebar -->
  </section>
<?
  get_footer();
?>
