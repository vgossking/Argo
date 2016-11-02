<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->
 
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmgp.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <script src="wp-content/themes/argo/assets/js/jquery.js"></script>
        <script src="wp-content/themes/argo/assets/js/bootstrap-transition.js"></script>
        <script src="wp-content/themes/argo/assets/js/bootstrap-modal.js"></script>
        <script src="wp-content/themes/argo/assets/js/bootstrap-dropdown.js"></script>
        <script src="wp-content/themes/argo/assets/js/bootstrap-carousel.js"></script>
        <script src="wp-content/themes/argo/assets/js/bootstrap-collapse.js"></script>
        <script src="wp-content/themes/argo/assets/js/bootstrap-scrollspy.js"></script>
  
        <script src="wp-content/themes/argo/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="wp-content/themes/argo/assets/js/jquery.mousewheel.min.js"></script>
        <script src="wp-content/themes/argo/assets/js/jquery.hoverdir.js"></script>
        <script src="wp-content/themes/argo/assets/js/jquery.isotope.min.js"></script>
        <script src="wp-content/themes/argo/assets/js/main.js"></script>
        <link rel="stylesheet" href="<?php  echo get_stylesheet_directory_uri()."/assets/css/style.css"; ?>" />
        <link rel="stylesheet" href="<?php  echo get_stylesheet_directory_uri()."/assets/css/responsive.css"; ?>" />
        <?php wp_head();?>
</head>

<body <?php body_class(); ?> > <!--Thêm class tượng trưng cho mỗi trang lên <body> để tùy biến-->

              	<div id="navbar" class="navbar">
                  <div class="navbar-inner">
                    <div class="container">
                    <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                       <?php argo_logo(); ?>
                      <div class ="nav-collapse collapse" >
                     
                      <?php
                          $args = array(
                             'container' => false,
                              'menu_class' => 'nav',
                              'theme_location' => 'primary-menu',
                              
                          );
                      wp_nav_menu($args);
                      ?>
                      </div>
                    </div>
                     
                  </div>
                </div>
                <?php /*if(is_home()): ?>
                    <div id="slider">
                      <div class="">
                        
                      </div>
                    </div>
                <?php endif; ?>*/
              
               