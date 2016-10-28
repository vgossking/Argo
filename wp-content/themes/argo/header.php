<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]> <html <?php language_attributes(); ?>> <![endif]-->
 
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmgp.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" href="<?php  echo get_stylesheet_directory_uri()."/style.css"; ?>" />
 
        <?php wp_head();?>
</head>

<body <?php body_class(); ?> > <!--Thêm class tượng trưng cho mỗi trang lên <body> để tùy biến-->
      
              <header id="header">

              </header>
              	<div id="navbar" class="navbar navbar-fixed-top">
                  <div class="navbar-inner">
                    <div class="container">
                       <?php argo_logo(); ?>
                      <div class ="nav-collapse collapse" style="height: 0">
                     
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
                <div class="container">
               