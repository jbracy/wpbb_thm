<?php

// Register Theme Features
function jeb_beach_basic_features()  {

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'gallery', 'image', 'video', 'audio' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

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
		'default-image'          => 'http://placehold.it/1440x400',
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
  function jeb_beach_basic_widgets_init() {
  	register_sidebar( array(
  		'name'          => __( 'Sidebar', 'jeb_beach_basic' ),
  		'id'            => 'sidebar-1',
  		'description'   => __( 'Add widgets here to appear in your sidebar.', 'jeb_beach_basic' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h3 class="widget-title">',
  		'after_title'   => '</h3>',
  	) );
  	register_sidebar( array(
  		'name'          => __( 'Home Sidebar Left', 'jeb_beach_basic' ),
  		'id'            => 'home-1',
  		'description'   => __( 'Add widgets here to appear on your homepage.', 'jeb_beach_basic' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h3 class="widget-title">',
  		'after_title'   => '</h3>',
  	) );
  	register_sidebar( array(
  		'name'          => __( 'Home Sidebar Middle', 'jeb_beach_basic' ),
  		'id'            => 'home-2',
  		'description'   => __( 'Add widgets here to appear on your homepage.', 'jeb_beach_basic' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h3 class="widget-title">',
  		'after_title'   => '</h3>',
  	) );
  	register_sidebar( array(
  		'name'          => __( 'Home Sidebar Right', 'jeb_beach_basic' ),
  		'id'            => 'home-3',
  		'description'   => __( 'Add widgets here to appear on your homepage.', 'jeb_beach_basic' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h3 class="widget-title">',
  		'after_title'   => '</h3>',
  	) );
  	register_sidebar( array(
  		'name'          => __( 'Footer Left', 'jeb_beach_basic' ),
  		'id'            => 'footer-1',
  		'description'   => __( 'Add widgets here to appear in your footer.', 'jeb_beach_basic' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h3 class="widget-title">',
  		'after_title'   => '</h3>',
  	) );
  	register_sidebar( array(
  		'name'          => __( 'Footer Middle', 'jeb_beach_basic' ),
  		'id'            => 'footer-2',
  		'description'   => __( 'Add widgets here to appear in your footer.', 'jeb_beach_basic' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h3 class="widget-title">',
  		'after_title'   => '</h3>',
  	) );
  	register_sidebar( array(
  		'name'          => __( 'Footer Right', 'jeb_beach_basic' ),
  		'id'            => 'footer-3',
  		'description'   => __( 'Add widgets here to appear in your footer.', 'jeb_beach_basic' ),
  		'before_widget' => '<section id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</section>',
  		'before_title'  => '<h3 class="widget-title">',
  		'after_title'   => '</h3>',
  	) );
  }

  add_action( 'widgets_init', 'jeb_beach_basic_widgets_init' );

	// Add theme support for custom CSS in the TinyMCE visual editor
	add_editor_style();

  // Register the main_menu
  function register_jeb_beach_basic_menu() {
    register_nav_menu('primary',__( 'Main Menu' ));
  }
  add_action( 'init', 'register_jeb_beach_basic_menu' );

  function jeb_beach_basic_excerpt_length( $length ) {
      return 50;
  }
  add_filter( 'excerpt_length', 'jeb_beach_basic_excerpt_length', 999 );

  function jeb_beach_basic_excerpt_more( $more ) {
      return '...';
  }
  add_filter( 'excerpt_more', 'jeb_beach_basic_excerpt_more' );

  function jeb_beach_basic_styles_scripts() {
    wp_enqueue_style( 'foundation',get_template_directory_uri() . '/assets/css/foundation.min.css');
    wp_enqueue_style( 'foundation-icons',get_template_directory_uri() . '/assets/css/foundation-icons/foundation-icons.css');
		wp_enqueue_style( 'main', get_stylesheet_uri());

		wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/js/vendor/foundation.min.js', array('jquery'), null, true);
    //wp_enqueue_script( 'zcom', 'https://intercom.zurb.com/scripts/zcom.js', '', null, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), null, true);

  	wp_enqueue_script( 'comment-reply' );
	}

  add_action( 'wp_enqueue_scripts', 'jeb_beach_basic_styles_scripts' );

  function jeb_beach_basic_format_comments($comment, $args, $depth) {
    ?>
    <div <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php echo comment_ID(); ?>">
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
						<?php echo preg_replace( '/comment-reply-link/', 'comment-reply-link button round', get_comment_reply_link(array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) )), 1 ); ?>
			</div>
    </div>
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
    author: "Please enter in your name.",
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

	function jeb_beach_basic_customize_register($wp_customize) {

		#add nav color option to color settings
		$wp_customize->add_setting(
			'nav_color',
			array('capability' => 'edit_theme_options',
			'type'       => 'theme_mod',
			'default'       => '#ffffff',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'nav_color', array(
					'label' => 'Main navigation background color.',
					'section' => 'colors',
					'settings' => 'nav_color'
				)
			)
		);

		#add nav hover color option to color settings
		$wp_customize->add_setting(
			'nav_hover_color',
			array('capability' => 'edit_theme_options',
			'type'       => 'theme_mod',
			'default'       => '#ffffff',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'nav_hover_color', array(
					'label' => 'Main navigation background color on hover.',
					'section' => 'colors',
					'settings' => 'nav_hover_color'
				)
			)
		);

		#add nav text color option to color settings
		$wp_customize->add_setting(
			'nav_text_color',
			array('capability' => 'edit_theme_options',
			'type'       => 'theme_mod',
			'default'       => '#000000',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'nav_text_color', array(
					'label' => 'Main navigation text color.',
					'section' => 'colors',
					'settings' => 'nav_text_color'
				)
			)
		);

		#add nav text hover color option to color settings
		$wp_customize->add_setting(
			'nav_text_hover_color',
			array('capability' => 'edit_theme_options',
			'type'       => 'theme_mod',
			'default'       => '#000000',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'nav_text_hover_color', array(
					'label' => 'Main navigation text color on hover.',
					'section' => 'colors',
					'settings' => 'nav_text_hover_color'
				)
			)
		);

		#add main-content color option to color settings
		$wp_customize->add_setting(
			'content_color',
			array('capability' => 'edit_theme_options',
			'type'       => 'theme_mod',
			'default'       => '#ffffff',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'content_color', array(
  				'label' => 'Main Content background color',
  				'section' => 'colors',
					'settings' => 'content_color'
				)
			)
		);

		#add footer color option to color settings
		$wp_customize->add_setting(
			'footer_color',
			array('capability' => 'edit_theme_options',
			'type'       => 'theme_mod',
			'default'       => '#cacaca',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'footer_color', array(
  				'label' => 'Top footer background color',
  				'section' => 'colors',
					'settings' => 'footer_color'
				)
			)
		);

		#add sub_footer color option to color settings
		$wp_customize->add_setting(
			'sub_footer_color',
			array('capability' => 'edit_theme_options',
			'type'       => 'theme_mod',
			'default'       => '#cacaca',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'sub_footer_color', array(
  				'label' => 'Bottom footer background color',
  				'section' => 'colors',
					'settings' => 'sub_footer_color'
				)
			)
		);

		#theme_options section
		$wp_customize->add_section(
			'jeb_beach_basic_theme_options', #section id to use in option table
			array( #arguments array
				'title' => 'Theme Options',
				'capability' => 'edit_theme_options',
				'description' => 'Allows you to edit your theme\'s layout'
			)
		);

		# Add checkbox section to enable Custom Text
		$wp_customize->add_setting('subtitle_text', array(
		    'capability' => 'edit_theme_options',
		    'type'       => 'theme_mod',
		    'default'       => '1', # Default checked
				'transport'	=> 'refresh',
		));

		$wp_customize->add_control('subtitle_text', array(
		    'settings' => 'subtitle_text',
		    'label'    => 'Display custom subtitle text',
		    'section'  => 'jeb_beach_basic_theme_options', # Layout Section
		    'type'     => 'checkbox', # Type of control: checkbox
		));

		# Add text input form to change custom text
		$wp_customize->add_setting('subtitle_text[custom_text]', array(
		    'capability' => 'edit_theme_options',
		    'type'       => 'theme_mod',
		    'default'       => 'Custom text', # Default custom text
		));

		$wp_customize->add_control('subtitle_text[custom_text]', array(
		        'label' => 'Custom text', # Label of text form
		        'section' => 'jeb_beach_basic_theme_options', # Layout Section
		        'type' => 'text', # Type of control: text input
		));
	}
	add_action('customize_register', 'jeb_beach_basic_customize_register');

	function jeb_beach_basic_customize_css()
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
	add_action( 'wp_head', 'jeb_beach_basic_customize_css');
	/*function jeb_beach_basic_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'jeb_beach_basic_content_width', 840 );
	}
	add_action( 'after_setup_theme', 'jeb_beach_basic_content_width', 0 );*/
}
add_action( 'after_setup_theme', 'jeb_beach_basic_features' );
if ( ! isset( $content_width ) ) {
    $content_width = 1440;
}

?>
