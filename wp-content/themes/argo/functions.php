<?php 
	
  define( 'THEME_URL', get_stylesheet_directory() );
  define( 'CORE', THEME_URL . '/core' );
 
/**
  @ Load file /core/init.php
  @ Đây là file cấu hình ban đầu của theme mà sẽ không nên được thay đổi sau này.
  **/
 
  require_once( CORE . '/init.php' );
 
 /**
  @ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
  **/
  if ( ! isset( $content_width ) ) {
      
        $content_width = 620;
   }
 
/**
  @ Thiết lập các chức năng sẽ được theme hỗ trợ
  **/
  if ( ! function_exists( 'argo_theme_setup' ) ) {
        /*
         * Nếu chưa có hàm argo_theme_setup() thì sẽ tạo mới hàm đó
         */
        function argo_theme_setup() {
                /*
                 * Thiết lập theme có thể dịch được
                 */
                $language_folder = THEME_URL . '/languages';
                load_theme_textdomain( 'argo', $language_folder );
 
                /*
                 * Tự chèn RSS Feed links trong <head>
                 */
                add_theme_support( 'automatic-feed-links' );
 
                /*
                 * Thêm chức năng post thumbnail
                 */
                add_theme_support( 'post-thumbnails' );
 
                /*
                 * Thêm chức năng title-tag để tự thêm <title>
                 */
                add_theme_support( 'title-tag' );
 
                /*
                 * Thêm chức năng post format
                 */
                add_theme_support( 'post-formats',
                        array(
                                'video',
                                'image',
                                'audio',
                                'gallery'
                        )
                 );
                // create excerpt for page
                add_post_type_support('page', 'excerpt');
                          /*
                 * Thêm chức năng custom background
                 */
                $default_background = array(
                        'default-color' => '#e8e8e8',
                );
                add_theme_support( 'custom-background', $default_background );
 
                /*
                 * Tạo menu cho theme
                 */
                 register_nav_menu ( 'primary-menu', __('Primary Menu', 'argo') );
 
                /*
                 * Tạo sidebar cho theme
                 */
                 $sidebar = array(
                    'name' => __('Main Sidebar', 'argo'),
                    'id' => 'main-sidebar',
                    'description' => 'Main sidebar for argo theme',
                    'class' => 'main-sidebar',
                    'before_title' => '<h3 class="widgettitle">',
                    'after_sidebar' => '</h3>'
                 );
                 register_sidebar( $sidebar );
        }
        add_action ( 'init', 'argo_theme_setup' );
 
  }

  if ( ! function_exists( 'argo_logo' ) ) {
	  function argo_logo() {?>

	        <?php if ( is_home() ) {
	          printf(
	            '<a class="brand" href="%1$s" title="%2$s">%3$s</a>',
	            get_bloginfo( 'url' ),
	            get_bloginfo( 'description' ),
	            get_bloginfo( 'sitename' )
	          );
	        } else {
	          printf(
	            '<p><a href="%1$s" title="%2$s">%3$s</a></p>',
	            get_bloginfo( 'url' ),
	            get_bloginfo( 'description' ),
	            get_bloginfo( 'sitename' )
	          );
	        } // endif ?>


	  <?php }
  }

function customizer_service( $wp_customize ) {
 
        // Tạo section
    $wp_customize->add_section (
        'section_service',
        array(
            'title' => 'Section: Service',
            'description' => 'Option for Service',
            'priority' => 25
        )
    );
    //display the section or not
    $wp_customize->add_setting(
      'service_display',
      array(
        'default' => 'Yes'
        )
      );
    $wp_customize->add_control(
      'control_service_display',
      array(
        'label' => 'Do you want to hide this section? ',
        'type' => 'radio',
        'section' => 'section_service',
        'settings' => 'service_display',
        'choices'=> array(
          true => 'Yes',
          false => 'No'
          )
        )
      );
    //section id attribute
    $wp_customize->add_setting (
            'section_service_id',
            array(
                'default' => 'service'
            )
        );
         $wp_customize->add_control (
            'control_section_service_id',
            array(
                'label' => 'Section ID',
                'section' => 'section_service',
                'type' => 'text',
                'description' => ' use for anchor link',
                'settings' => 'section_service_id'
            )
          );
    //section title attribute
    $wp_customize->add_setting (
            'service_title',
            array(
                'default' => 'Gentle WordPress Theme'
            )
        );
 

        $wp_customize->add_control (
            'control_service_title',
            array(
                'label' => 'Title',
                'section' => 'section_service',
                'type' => 'text',
                'settings' => 'service_title'
            )
        );
        //section subtitle attribute
     
        $wp_customize->add_setting (
        'service_subtitle',
        array(
            'default' => "WordPress theme in it's most beautiful form ever"
          )
        );
         $wp_customize->add_control (
            'control_service_subtitle',
            array(
                'label' => 'Subtitle',
                'section' => 'section_service',
                'type' => 'text',
                'settings' => 'service_subtitle'
            )
        );
         //service one
         $wp_customize->add_setting(
            'service_one'
        );
 
        $wp_customize->add_control(
          'service_one',
          array(
              'type' => 'dropdown-pages',
              'label' => 'Choose Page Service One:',
              'section' => 'section_service',
          )
        );
        //icon 1
         $wp_customize->add_setting(
            'icon_service_one'
        );
 
        $wp_customize->add_control(
          'icon_service_one',
          array(
              'type' => 'text',
              'label' => 'Choose Icon Service One:',
              'section' => 'section_service',
              'description' => 'Choose a li icon from <a href="http://bootstrapmaster.com/live/one/linecons.html">here</a>'
          )
        );
        //service 2
        $wp_customize->add_setting(
            'service_two'
        );
 
        $wp_customize->add_control(
          'service_two',
          array(
              'type' => 'dropdown-pages',
              'label' => 'Choose Page Service Two:',
              'section' => 'section_service',
          )
        );
        //icon 2
         $wp_customize->add_setting(
            'icon_service_two'
        );
 
        $wp_customize->add_control(
          'icon_service_two',
          array(
              'type' => 'text',
              'label' => 'Choose Icon Service Two:',
              'section' => 'section_service',
              'description' => 'Choose a li icon from <a href="http://bootstrapmaster.com/live/one/linecons.html">here</a>'
          )
        );
        //service 3
        $wp_customize->add_setting(
            'service_three'
        );
 
        $wp_customize->add_control(
          'service_three',
          array(
              'type' => 'dropdown-pages',
              'label' => 'Choose Page Service Three:',
              'section' => 'section_service',
          )
        );
        //icon 3
         $wp_customize->add_setting(
            'icon_service_three'
        );
 
        $wp_customize->add_control(
          'icon_service_three',
          array(
              'type' => 'text',
              'label' => 'Choose Icon Service Three:',
              'section' => 'section_service',
              'description' => 'Choose a li icon from <a href="http://bootstrapmaster.com/live/one/linecons.html">here</a>'
          )
        );
 
}
add_action( 'customize_register', 'customizer_service' );

function customizer_portofolio($wp_customize){
  $wp_customize ->add_section( 
       'section_portfolio',
        array(
            'title' => 'Section: Portfolio',
            'description' => 'Option for Portfolio',
            'priority' => 26
        )
  );
  //display section?
  $wp_customize->add_setting(
      'portfolio_display',
      array(
        'default' => 'Yes'
        )
      );
    $wp_customize->add_control(
      'control_portfolio_display',
      array(
        'label' => 'Do you want to hide this section? ',
        'type' => 'radio',
        'section' => 'section_portfolio',
        'settings' => 'portfolio_display',
        'choices'=> array(
          true => 'Yes',
          false => 'No'
          )
        )
      );
    //section id
   $wp_customize->add_setting (
            'section_portfolio_id',
            array(
                'default' => 'portfolios'
            )
        );
         $wp_customize->add_control (
            'control_section_portfolio_id',
            array(
                'label' => 'Posrfolio ID',
                'section' => 'section_portfolio',
                'type' => 'text',
                'description' => ' use for anchor link',
                'settings' => 'section_portfolio_id'
            )
          );
}
add_action( 'customize_register', 'customizer_portofolio' );
