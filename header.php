<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
  </head>

<body <? body_class(); ?>>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <div class="off-canvas position-bottom" id="offCanvasBottom" data-off-canvas data-transition="overlap">
          <ul class="menu">
            <li>
              <button class="close-button" aria-label="Close menu" type="button" data-close>
                <span>&times;</span>
              </button>
            </li>
          </ul>
          <?php
          //load up our main_nav and make sure sub-menus have menu class for foundation compatability
          echo str_replace('sub-menu', 'sub-menu menu', wp_nav_menu( array(
              'echo' => false,
              'menu_class' => 'vertical medium-horizontal menu',
              'container' => false,
              'fallback_cb' => false,
              'depth' => 2,
              'theme_location' => 'primary',
              'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown medium-dropdown">%3$s</ul>'
            ) )
          );
          ?>
        </div>
        <div class="off-canvas-content" data-off-canvas-content>
          <!-- header -->
          <header class="row expanded">
            <section class="header small-12 columns">
              <h1 class="headline"><a href="<? echo get_home_url(); ?>"><? bloginfo('name'); ?></a></h1>
              <h5 class="hide-for-small-only"><small><? bloginfo('description')?></small></h5>

              <!-- main nav bar -->
              <nav class="row hide-for-small-only">
                <div class="small-12 columns">
                  <div class="menu-centered expanded">
                    <?php
                    //load up our main_nav and make sure sub-menus have menu class for foundation compatability
                    echo str_replace('sub-menu', 'sub-menu menu', wp_nav_menu( array(
                        'echo' => false,
                	    	'menu_class' => 'vertical medium-horizontal menu',
                        'container' => false,
                        'fallback_cb' => false,
                        'depth' => 2,
                	    	'theme_location' => 'primary',
                	    	'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown medium-dropdown">%3$s</ul>'
                      ) )
                    );
                    ?>
                  </div>
                </div>
              </nav>
            </section>
            <!-- hero -->
            <section class="hero text-center">
                <img src="<?php header_image(); ?>">
            </section>
          </header>
          <main id="content" class="row expanded">
