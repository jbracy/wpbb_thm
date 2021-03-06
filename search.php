  <?php get_header(); ?>
      <!-- main content -->
      <section class="small-12 large-9 columns">
        <h1 class="text-center"><?php printf( 'Search Results For:<br/>'. get_search_query() ); ?></h1>
        <div class="posts-row">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          ?>
          <ul>
            <li>
                <div class="media-object">
                  <? if ( has_post_thumbnail() ) {
                    ?>
                  <div class="media-object-section middle">
                    <div class="">
                      <? the_post_thumbnail('thumbnail'); ?>
                    </div>
                  </div>
                  <? } ?>
                  <div class="media-object-section main-section">
                    <h4><a href="<?php the_permalink(); ?>" title="Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                    <p class="subheader"><?php the_date(); ?></p>
                    <p><?php the_excerpt(); ?></p>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="expanded button round">Read More</a>
                </div>
            </li>
          </ul>
          <?php endwhile; else : ?>
          	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        </div>
        <div class="pagination">
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
  <? get_footer(); ?>
