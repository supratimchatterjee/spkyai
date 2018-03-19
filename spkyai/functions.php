<?php
/**
 * Spkyai functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Spkyai
 */

if ( ! function_exists( 'spkyai_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function spkyai_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Spkyai, use a find and replace
		 * to change 'spkyai' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'spkyai', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'spkyai' ),
			'menu-2' => esc_html__( 'Footer Menu', 'spkyai' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );



		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'spkyai_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function spkyai_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'spkyai_content_width', 640 );
}
add_action( 'after_setup_theme', 'spkyai_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function spkyai_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'About Speakeasy Widget', 'spkyai' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'spkyai' ),
		'before_widget' => '<div id="%1$s" class="uk-width-medium-3-10 widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Popular Posts Widget', 'spkyai' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'spkyai' ),
		'before_widget' => '<div id="%1$s" class="uk-width-medium-3-10 widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );
}
add_action( 'widgets_init', 'spkyai_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function spkyai_scripts() {
	wp_enqueue_style( 'spkyai-style', get_template_directory_uri() .'/assets/css/app.css' );
	wp_enqueue_style( 'spkyai-custom-style', get_template_directory_uri() .'/assets/css/custom.css' );
	//wp_enqueue_style( 'particle-style', get_template_directory_uri() .'/assets/vendor/particles.js-master/demo/css/style.css' );

	wp_enqueue_script( 'uikit', get_template_directory_uri() .'/assets/vendor/uikit/js/uikit.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'uikit-accordion', get_template_directory_uri() .'/assets/vendor/uikit/js/components/accordion.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'uikit-toggle', get_template_directory_uri() .'/assets/vendor/uikit/js/core/toggle.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'uikit-grid', get_template_directory_uri() .'/assets/vendor/uikit/js/components/grid.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'uikit-slide-show', get_template_directory_uri() .'/assets/vendor/uikit/js/components/slideshow.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'uikit-sticky-nav', get_template_directory_uri() .'/assets/vendor/uikit/js/components/sticky.min.js', array('jquery'), '', true );

	wp_enqueue_script( 'particles-js', get_template_directory_uri() .'/assets/vendor/particles.js-master/particles.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'app-js', get_template_directory_uri() .'/assets/js/app.js', array('jquery'), '', true );

	wp_enqueue_script( 'custom-js', get_template_directory_uri() .'/assets/js/custom.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'spkyai_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';




if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));
}

//ABOUT SPEAKEASY

//Add Custom Widget
class About_Speakeasy_Widget extends WP_Widget {

   function __construct() {
	   parent::__construct(
	   'about_speakeasy', // Base ID
	   __('About Speakeasy Footer', 'spkyai'), // Name
	   array( 'description' => __( 'About Speakeasy Widget', 'spkyai' ), ) // Args
	   );
   }

   public function widget( $args, $instance ) {

   echo $args['before_widget'];

   if ( ! empty( $instance['title'] ) ) {
	   echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
   }

   //$title = get_field('_widget_title', 'widget_' . $this->id);
  $address_title = get_field('title', 'widget_' . $this->id);
  $address = get_field('content_footer', 'widget_' . $this->id);
  $phone = get_field('phone_no', 'widget_' . $this->id);
  $email = get_field('email', 'widget_' . $this->id);

   ?>

	   <div class="uk-width-medium-8-10">
		   <h6><?php echo  $address_title; ?></h6>
		   <p>
			   <?php echo $address; ?>
		   </p>
		   <?php if($phone): ?>
		   <p>
			   Phone: <a href="tel:<?php echo  $phone; ?>"><?php echo  $phone; ?></a>
		   </p>
		<?php endif; ?>
		   <?php if($email): ?>
		   <p>
			   Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
		   </p>
		   <?php endif; ?>
	   </div>

   <?php
   echo $args['after_widget'];
   }

   public function form( $instance ) {

   }

}

// function register_security_logos_widget should copy in add_action section
// Copy  class name from top and pest it on  register_widget section below

function register_our_about_speakeasy() {
register_widget( 'About_Speakeasy_Widget' );
}
add_action( 'widgets_init', 'register_our_about_speakeasy' );


function allow_svgimg_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'allow_svgimg_types');

function scrapeImage($text) {
    $pattern = '/src=[\'"]?([^\'" >]+)[\'" >]/';
    preg_match($pattern, $text, $link);
    $link = $link[1];
    $link = urldecode($link);
    return $link;

}