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
    //section Title
         $wp_customize->add_setting (
            'portfolio_title',
            array(
                'default' => 'Portfolio'
            )
        );
 

        $wp_customize->add_control (
            'control_portfolio_title',
            array(
                'label' => 'Title',
                'section' => 'section_portfolio',
                'type' => 'text',
                'settings' => 'portfolio_title'
            )
        );
        //section subtitle attribute
     
        $wp_customize->add_setting (
        'portfolio_subtitle',
        array(
            'default' => "Check out our portfolio and click to see them."
          )
        );
         $wp_customize->add_control (
            'control_portfolio_subtitle',
            array(
                'label' => 'Subtitle',
                'section' => 'section_portfolio',
                'type' => 'text',
                'settings' => 'portfolio_subtitle'
            )
        );
}
add_action( 'customize_register', 'customizer_portofolio' );
//get param parent category(shold be 0)
function ShowCategories($parent_category) {
  $categories = get_categories(array('parent' => $parent_category, 'hide_empty' => 0));  
                  
                foreach ($categories as $category) {
                  if($category->cat_name != "Uncategorized"){
                    ?>
                        <li>
                          <a href="" data-filter=".<?php echo $category->slug ?>" >
                          <?php echo $category->cat_name;
                          ShowCategories($category->cat_ID);//get the children category
                          ?>
                          </a>
                        </li>
                    <?php
                  }
                }
             
}

function GetPostByCategory($category){
    $category_id = get_cat_ID($category);
    $args = array(
      'category' => $category_id
      );
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php echo $post->post_title; ?></a>
        </li>
    <?php endforeach; 
    wp_reset_postdata();
}

//param typeDisplay =1 for gallery, 0 for modal box
function GetPostArgo($typeDisplay){
   $args = array(
  'posts_per_page'   => 18,
  'offset'           => 0
);
  $myposts = get_posts($args);
   if (have_posts()) : foreach ( $myposts as $post ) :
    $category_id = wp_get_post_categories($post->ID)[0];//get the first category 
    $category_name = get_cat_name($category_id); 
    $args = array(
                'post_parent' => $post->ID,
                'post_status' => 'inherit',
                'post_type'=> 'attachment',
                'post_mime_type' => 'image/jpeg,image/gif,image/jpg,image/png'                  
            );
    $attachments = new WP_Query($args);
    $imagePost = $attachments->posts;
    $imagePostNumber = count($imagePost);
    if($imagePostNumber > 0){
      $imageAttachLink = $imagePost[0]->guid;
    }
    else $imageAttachLink = null;
    //var_dump($imagePost);
    if($typeDisplay == 0):
    ?>   
      <li class="item brick1 <?php echo strtolower($category_name);?> active">
        <a href="#modalbox" data-toggle="modal">
          <img src="<?php echo get_the_post_thumbnail($post->ID) ?>" alt="Portfolio1">

          <div class="hover">
            <img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
            <h4><?php echo $post->post_title; ?></h4>
            <p><?php echo $category_name; ?></p>
            </div>
        </a>
      </li>
    <?php else: ?>
      <?php if ($post->ID == $myposts[0]->ID && $imageAttachLink != null): ?>
       <div class="item active">
      
        <img src="<?php echo $imageAttachLink ?>" alt="">
        
       </div>
     <?php else: ?>
      <div class="item">
        
          <img src="<?php echo $imageAttachLink ?>" alt="">
       
       </div>
      <?php endif;endif; ?>
 
  <?php endforeach; else : ?>


  <!-- The very first "if" tested to see if there were any Posts to -->
  <!-- display.  This "else" part tells what do if there weren't any. -->
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


  <!-- REALLY stop The Loop. -->
 <?php endif;
}

function argo_theme_style(){
  wp_enqueue_script('jquery',get_stylesheet_directory_uri()."/assets/js/jquery.js",array(), null, true);
  wp_enqueue_style( 'style', get_stylesheet_directory_uri()."/assets/css/style.css" );
  wp_enqueue_style( 'responsive', get_stylesheet_directory_uri()."/assets/css/responsive.css" );
  wp_enqueue_script('bs-modal',get_stylesheet_directory_uri()."/assets/js/bootstrap-modal.js"  , array(), null, true);
  wp_enqueue_script('bs-transition',get_stylesheet_directory_uri()."/assets/js/bootstrap-transition.js"  , array(), null, true);
  wp_enqueue_script('bs-carousel',get_stylesheet_directory_uri()."/assets/js/bootstrap-carousel.js"  , array(), null, true);
  wp_enqueue_script('bs-collapse',get_stylesheet_directory_uri()."/assets/js/bootstrap-collapse.js"  , array(), null, true);
  wp_enqueue_script('bs-scrollspy',get_stylesheet_directory_uri()."/assets/js/bootstrap-scrollspy.js"  , array(), null, true);
  wp_enqueue_script('CustomScrollbar',get_stylesheet_directory_uri()."/assets/js/jquery.mCustomScrollbar.concat.min.js"  , array(), null, true);
  wp_enqueue_script('mousewheel',get_stylesheet_directory_uri()."/assets/js/jquery.mousewheel.min.js"  , array(), null, true);
  wp_enqueue_script('hoverdir',get_stylesheet_directory_uri()."/assets/js/jquery.hoverdir.js"  , array(), null, true);
  
  wp_enqueue_script('isotope',get_stylesheet_directory_uri()."/assets/js/jquery.isotope.min.js"  , array(), null, true);
  wp_enqueue_script('main',get_stylesheet_directory_uri()."/assets/js/main.js"  , array(), null, true);
}
add_action('wp_enqueue_scripts','argo_theme_style');

//Purchase section                
function customizer_purchase( $wp_customize ) {

  // Tạo section
  $wp_customize->add_section (
    'section_purchase',
    array(
        'title' => 'Section: Purchase',
        'description' => 'Option for Service',
        'priority' => 33
    )
  );
  //display the section or not
  $wp_customize->add_setting(
  'purchase_display',
  array(
    'default' => 'Yes'
    )
  );
  $wp_customize->add_control(
  'control_purchase_display',
  array(
    'label' => 'Do you want to hide this section? ',
    'type' => 'radio',
    'section' => 'section_purchase',
    'settings' => 'purchase_display',
    'choices'=> array(
      true => 'Yes',
      false => 'No'
      )
    )
  );
  $wp_customize->add_setting (
            'purchase_title',
            array(
                'default' => 'great one page theme'
            )
        );
 

        $wp_customize->add_control (
            'control_portfolio_title',
            array(
                'label' => 'Title',
                'section' => 'section_purchase',
                'type' => 'text',
                'settings' => 'purchase_title'
            )
        );
  $wp_customize->add_setting( 'purchase_background' );
 
  $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'bg-purchase',
          array(
              'label' => 'Background image',
              'section' => 'section_purchase',
              'settings' => 'purchase_background'
          )
      )
  );
  $wp_customize->add_setting( 'purchase_button_one' );
  $wp_customize->add_control (
            'control_portfolio_title_one',
            array(
                'label' => 'Title button one',
                'section' => 'section_purchase',
                'type' => 'text',
                'settings' => 'purchase_button_one'
            )
        );
   $wp_customize->add_setting( 'purchase_button_two' );
  $wp_customize->add_control (
            'control_portfolio_title_two',
            array(
                'label' => 'Title button two',
                'section' => 'section_purchase',
                'type' => 'text',
                'settings' => 'purchase_button_two'
            )
        );

}
add_action( 'customize_register', 'customizer_purchase' );