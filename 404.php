<?php get_header(); ?>
  <section class="small-12 large-9 columns">
    <!-- page title-->
      <header class="small-12 columns text-center">
        <h1>4Village0Dump4</h1>
      </header>
    <!-- end page title-->

    <!-- main content -->
    <section class="small-12 columns">
      <div class="row">
          <div class="post post-content">
            <p>Whoa, looks like you stumbled on the village dump. Why don't you ask the village grandpa to help you out:</p>
            <?php get_search_form(); ?>
          </div>
      </div>
    </section>
    <!-- end main content -->
  </section>
  <?php 
    get_sidebar();
    get_footer();
  ?>
