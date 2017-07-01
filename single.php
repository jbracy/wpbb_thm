<?php get_header(); ?>
  <section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- main content -->
        <article class="small-12 large-8 columns post-content">
          <!-- page title-->
          <header class="text-center">
              <h1><?php the_title();?></h1>
              <p class="subheader post-date"><?php the_date(); ?></p>
              <?php
              if ( has_post_thumbnail() ) {
              	the_post_thumbnail();
              }
              ?>
          </header>
          <!-- end page title-->

          <div class="post">
            <?php the_content(); ?>
          </div>
          <hr>
          <?php if ( !comments_open() ) {
            ?>
            <p class="button disabled expanded round" aria-disabled>Comments are disabled. <span class="badge secondary"><?php comments_number('0','1','%'); ?></span></p>
          <?php
          }
          else {
            ?>
            <p id="comments-button" class="button expanded round">Comments <span class="badge secondary"><?php comments_number('0','1','%'); ?></span></p>
          <?php }
          ?>
          <div id="comments" class="comments" style="display: none;">
            <?php
        		// If comments are open or we have at least one comment, load up the comment template.
        		if ( comments_open() || get_comments_number() ) {
        			comments_template();
        		}
            ?>
            <div id="respond" class="comment-respond">
             <?php get_template_part('comment_form'); ?>
        		</div>
          </div>
        </article>

  <?php endwhile; endif; ?>
    <!-- sidebar -->
    <?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
      <aside class="small-12 large-3 columns sidebar">
      		<?php dynamic_sidebar( 'sidebar-1' ); ?>
      </aside>
    <?php endif;?>
    <!-- end sidebar -->
    </div>
    <!-- end main content -->
  </section>
<?
  get_footer();
?>
