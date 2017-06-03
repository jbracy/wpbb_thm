<?php get_header(); ?>
<section>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- page title-->
  <header>
    <div class="small-12 columns text-center">
      <h1>Comments for <?php the_title();?></h1>
    </div>
  </header>
  <!-- end page title-->

  <!-- main content -->
  <div class="small-12 large-9 columns end comments">
    <?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
    ?>
    <hr>
    <div id="respond" class="comment-respond">
	     <?php get_template_part('comment_form'); ?>
		</div>

  </div>

  <!-- sidebar -->
  <?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
    <aside class="small-12 large-3 columns">
      <div class="callout">
    		<?php dynamic_sidebar( 'sidebar-1' ); ?>
      </div>
    </aside>
  <?php endif; ?>
  <!-- end sidebar -->

  <?php endwhile; else : ?>
  	<p><?php _e( 'Sorry, there are no comments for this post.' ); ?></p>
  <?php endif; ?>
  <!-- end main content -->
</section>
<?
  get_footer();
?>
