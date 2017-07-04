</main>
<!-- end main-content area -->

<!-- footer -->
<footer>
  <section class="row expanded main-footer">
    <!-- footer widgets -->
    <div class="small-12 medium-4 columns footer-widget">
      <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <?php dynamic_sidebar( 'footer-1' ); ?>
      <?php endif; ?>
    </div>
    <div class="small-12 medium-4 columns footer-widget">
      <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
        <?php dynamic_sidebar( 'footer-2' ); ?>
      <?php endif; ?>
    </div>
    <div class="small-12 medium-4 columns footer-widget">
      <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
        <?php dynamic_sidebar( 'footer-3' ); ?>
      <?php endif; ?>
    </div>
    <!-- end footer widgets -->
  </section>
  <section class="row expanded sub-footer">
    <div class="small-12 columns text-center">
      <p>© <? bloginfo('name'); ?> <? echo date('Y'); ?></p>
    </div>
    <div class="small-12 columns text-center">
      <? the_custom_logo();?>
    </div>
    <div class="small-12 columns text-center">
      <p>Theme by Jordan</p>
    </div>
  </section>
</footer>
<!-- end footer -->
<div class="title-bar text-center show-for-small-only" onclick="">
    <div class="title-bar-title" data-toggle="offCanvasBottom">Menu</div>
</div>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
