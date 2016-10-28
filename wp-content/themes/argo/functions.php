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

  if ( ! function_exists( 'argo_menu' ) ) {
  function argo_menu( $slug ) {
    $menu = array(
      'theme_location' => $slug,
      'container' => 'nav',
      'container_class' => $slug,
    );
    wp_nav_menu( $menu );
  }
}