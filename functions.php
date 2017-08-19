<?php

// Register Theme Features
function gps_bb_features()  {

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'gallery', 'image', 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	add_theme_support('title-tag');

	// Add theme support for Custom Background
	$background_args = array(
		'default-color'          => 'ffffff',
		'default-image'          => '',
		'default-repeat'         => '',
		'default-position-x'     => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-background', $background_args );

	// Add theme support for Custom Header
	$header_args = array(
		'default-image'          => get_template_directory_uri() . '/assets/img/clem-onojeghuo-unsplash-beach.jpg',
		'width'                  => 1440,
		'height'                 => 400,
		'flex-width'             => true,
		'flex-height'            => true,
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => false,
		'default-text-color'     => '',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $header_args );

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
    'height'      => 50,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
) );

  // Add theme support for sidebars
  function gps_bb_widgets_init() {
  	register_sidebar( array(
  		'name'          => __( 'Sidebar', 'gps_bb' ),
  		'id'            => 'sidebar-1',
  		'description'   => __( 'Add widgets here to appear in your sidebar.', 'gps_bb' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h4 class="widget-title">',
  		'after_title'   => '</h4>',
  	) );
  	register_sidebar( array(
  		'name'          => __( 'Home Sidebar Left', 'gps_bb' ),
  		'id'            => 'home-1',
  		'description'   => __( 'Add widgets here to appear on your homepage.', 'gps_bb' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h4 class="widget-title">',
  		'after_title'   => '</h4>',
  	) );
  	register_sidebar( array(
  		'name'          => __( 'Home Sidebar Middle', 'gps_bb' ),
  		'id'            => 'home-2',
  		'description'   => __( 'Add widgets here to appear on your homepage.', 'gps_bb' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h4 class="widget-title">',
  		'after_title'   => '</h4>',
  	) );
  	register_sidebar( array(
  		'name'          => __( 'Home Sidebar Right', 'gps_bb' ),
  		'id'            => 'home-3',
  		'description'   => __( 'Add widgets here to appear on your homepage.', 'gps_bb' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h4 class="widget-title">',
  		'after_title'   => '</h4>',
  	) );
  	register_sidebar( array(
  		'name'          => __( 'Footer Left', 'gps_bb' ),
  		'id'            => 'footer-1',
  		'description'   => __( 'Add widgets here to appear in your footer.', 'gps_bb' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h4 class="widget-title">',
  		'after_title'   => '</h4>',
  	) );
  	register_sidebar( array(
  		'name'          => __( 'Footer Middle', 'gps_bb' ),
  		'id'            => 'footer-2',
  		'description'   => __( 'Add widgets here to appear in your footer.', 'gps_bb' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h4 class="widget-title">',
  		'after_title'   => '</h4>',
  	) );
  	register_sidebar( array(
  		'name'          => __( 'Footer Right', 'gps_bb' ),
  		'id'            => 'footer-3',
  		'description'   => __( 'Add widgets here to appear in your footer.', 'gps_bb' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h4 class="widget-title">',
  		'after_title'   => '</h4>',
  	) );
  }

  add_action( 'widgets_init', 'gps_bb_widgets_init' );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style();

  // Register the main_menu
  function register_gps_bb_menu() {
    register_nav_menu('primary',__( 'Main Menu' ));
  }
  add_action( 'init', 'register_gps_bb_menu' );

  function gps_bb_excerpt_length( $length ) {
      return 50;
  }
  add_filter( 'excerpt_length', 'gps_bb_excerpt_length', 999 );

  function gps_bb_excerpt_more( $more ) {
      return '...';
  }
  add_filter( 'excerpt_more', 'gps_bb_excerpt_more' );

  function gps_bb_scripts() {
    wp_enqueue_style( 'foundation', get_template_directory_uri() . '/assets/css/foundation.min.css');
    wp_enqueue_style( 'foundation-icons', get_template_directory_uri() . '/assets/css/foundation-icons/foundation-icons.css');
		wp_enqueue_style( 'main', get_stylesheet_uri(), array(), '1.3.1');
		wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/js/vendor/foundation.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), null, true);
	}

  add_action( 'wp_enqueue_scripts', 'gps_bb_scripts' );

	function gps_bb_google_analytics() {
		if ( ! empty(get_theme_mod('jebbb_theme_google_analytics')) )
		{
		?>
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', '<?php echo get_theme_mod('jebbb_theme_google_analytics', ''); ?>', 'auto');
			  ga('send', 'pageview');
			</script>
<?php
		}
	}

	add_action( 'wp_footer', 'gps_bb_google_analytics');

	function facebook_js() {
		?>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<?
	}
	add_action( 'wp_footer', 'facebook_js');

  function gps_bb_format_comments($comment, $args, $depth) {
    ?>
    <li <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php echo comment_ID(); ?>">
        <div class="comment-meta">
          <h6>
            <strong><?php comment_author(); ?>:</strong>
						<br /><small><?php comment_date(); ?></small>
          </h6>
				</div>
        <div class='comment-content'>
          <?php comment_text(); ?>
        </div>
				<div class="comment-reply">
					<?php echo preg_replace( '/comment-reply-link/', 'comment-reply-link button round expanded', get_comment_reply_link(array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) )), 1 ); ?>
				</div>
    </li>
    <?php
  }

  function comment_validation_init() {
  if(is_singular() && comments_open() ) { ?>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function($) {
  $('#commentform').validate({

  onfocusout: function(element) {
    this.element(element);
  },

  rules: {
    author: {
      required: true,
      minlength: 2
    },

    email: {
      required: true,
      email: true
    },

    comment: {
      required: true,
      minlength: 20
    }
  },

  messages: {
    author: "Please enter your name.",
    email: "Please enter a valid email address.",
    comment: "Message box can't be empty!"
  },

  errorElement: "div",
  errorClass: "alert label",
  errorPlacement: function(error, element) {
    element.before(error);
  }

  });
  });
  </script>
  <?php
  }
  }
  add_action('wp_footer', 'comment_validation_init');

	/*Add our customizer*/
	require get_template_directory() . '/inc/customizer.php';

	/*Apply theme mods */
	function gps_bb_customize_css()
	{
	    ?>
	         <style type="text/css">
					 		nav #main-menu.top-bar, nav #main-menu.top-bar ul.menu, nav #main-menu.top-bar ul.menu .submenu, nav #main-menu.top-bar ul.menu ul.sub-menu { background-color: <?php echo get_theme_mod('nav_color', 'cccccc'); ?>; }
							nav #main-menu .top-bar-right ul.menu li:hover, nav #main-menu .top-bar-right ul.menu li ul li:hover { background-color: <?php echo get_theme_mod('nav_hover_color', 'ffffff'); ?>; }
							nav #main-menu.top-bar-right ul.menu a, nav #main-menu.top-bar ul.menu .submenu a, nav #main-menu.top-bar ul.menu ul.sub-menu a { color: <?php echo get_theme_mod('nav_text_color', 'cccccc'); ?>; }
							nav #main-menu .top-bar-right ul.menu li:hover a, nav #main-menu .top-bar-right ul.menu li ul li:hover a { color: <?php echo get_theme_mod('nav_text_hover_color', 'ffffff'); ?>; }
							#content { background-color: <?php echo get_theme_mod('content_color', 'ffffff'); ?>; }
							footer section.footer { background-color: <?php echo get_theme_mod('footer_color', 'ffffff'); ?>; }
							footer section.sub-footer { background-color: <?php echo get_theme_mod('sub_footer_color', 'cccccc'); ?>; }
	         </style>
	    <?php
	}
	add_action( 'wp_head', 'gps_bb_customize_css');
}
add_action( 'after_setup_theme', 'gps_bb_features' );
if ( ! isset( $content_width ) ) {
    $content_width = 1440;
}

?>
