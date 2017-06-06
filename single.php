<?php get_header(); ?>
  <section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php if (!isset($_GET['display'])) { ?>
        <!-- page title-->
        <header>
          <div class="small-12 large-9 columns text-center">
            <h1><?php the_title();?></h1>
          </div>
        </header>
        <!-- end page title-->

        <!-- main content -->
        <article class="small-12 large-8 columns post-content">
          <div class="post">
            <?php the_content(); ?>
          </div>
          <hr>
          <a href="?display=comments<?php the_ID ?>" class="button expanded round">Comments <span class="badge secondary"><?php comments_number('0','1','%'); ?></span></a>
        </article>
      <?php }

      if (isset($_GET['display']) && $_GET['display'] == "comments") { ?>
        <div class="small-12 large-8 columns comments">
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
    <?php } ?>
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
