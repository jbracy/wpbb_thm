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
            <div class="hero-wrapper">
              <div class="hero-section" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url(<?php header_image(); ?>) 50% no-repeat;">
                <div class="hero-section-text">
                  <h1 class="headline"><a href="<? echo get_home_url(); ?>"><? bloginfo('name'); ?></a></h1>
                  <h4><small><? bloginfo('description')?></small></h4>
                </div>
              </div>
            </div>

              <!-- main nav bar -->
              <nav class="small-12 columns hide-for-small-only">
                <div class="top-bar row">
                  <div class="top-bar-left">
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
                  <div class="top-bar-right">
                  <ul class="menu">
                    <li><?get_search_form( $echo = true )?></li>
                  </ul>
                  </div>
                </div>
              </nav>

          </header>
          <main id="content" class="row">
