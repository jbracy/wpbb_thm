<?php
/*  jeb_beach_basic customizer
* @ since 1.0
*/

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
?>
