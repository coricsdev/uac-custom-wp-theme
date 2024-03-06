<?
/**
 * University Animal Clinic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package University_Animal_Clinic
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';
require_once get_template_directory() . '/demo-data/ocdi.php';

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function university_animal_clinic_setup() {
	require_once('class-wp-bootstrap-navwalker.php');
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on University Animal Clinic, use a find and replace
		* to change 'university-animal-clinic' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'university-animal-clinic', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'university-animal-clinic' ),
			'menu-2' => esc_html__( 'Footer', 'university-animal-clinic' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'university_animal_clinic_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'university_animal_clinic_setup' );

function university_animal_clinic_add_theme_scripts(){
	
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), NULL, true);
	wp_enqueue_script( 'custom-min', get_template_directory_uri() . '/js/custom.min.js', array('jquery'), NULL, true);
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), 'NULL', 'all');
	wp_enqueue_style( 'owlcarouseltheme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'iconmoon', get_template_directory_uri() . '/css/icomoon.css', array(), '1.1', 'all');
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.1', 'all');
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300', false ); 
	wp_enqueue_style( 'university-animal-clinic-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'university-animal-clinic-style', 'rtl', 'replace' );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	
}
add_action( 'wp_enqueue_scripts', 'university_animal_clinic_add_theme_scripts' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function university_animal_clinic_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'university_animal_clinic_content_width', 640 );
}
add_action( 'after_setup_theme', 'university_animal_clinic_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function university_animal_clinic_widgets_init() {
	register_sidebar( array(
	'name' => 'Footer Column One',
	'id' => 'footer-sidebar-1',
	'description' => 'Appears in the footer area',
	'before_widget' => false,
	'after_widget' => false,
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Column Two',
	'id' => 'footer-sidebar-2',
	'description' => 'Appears in the footer area',
	'before_widget' => false,
	'after_widget' => false,
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Column Three',
	'id' => 'footer-sidebar-3',
	'description' => 'Appears in the footer area',
	'before_widget' => false,
	'after_widget' => false,
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Column Four',
	'id' => 'footer-sidebar-4',
	'description' => 'Appears in the footer area',
	'before_widget' => false,
	'after_widget' => false,
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'university_animal_clinic_widgets_init' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/***
 * 
 * Add ACF Directory
 */
require_once get_stylesheet_directory() . '/inc/acf-blocks/init-acf-blocks.php';

/**
 * Add Header Contact Info in Customizer
 */
add_action( 'customize_register', 'webfx_register_theme_customizer' );
/*
 * Register Our Customizer Stuff Here
 */
function webfx_register_theme_customizer( $wp_customize ) {
	// Create custom panel for Copyright in Footer
	$wp_customize->add_panel( 'copyright_panel', array(
		'priority'       => 650,
		'theme_supports' => '',
		'title'          => __( 'Copyright Footer', 'copyright-footer' ),
		'description'    => __( 'Set Copyright Info.', 'copyright-footer' ),
	) );
	// Add section.
	$wp_customize->add_section( 'copyright_section' , array(
		'title'    => __('Footer Copyright','copyright-footer'),
		'panel'    => 'copyright_panel',
		'priority' => 10
	) );
	// Add setting
	$wp_customize->add_setting( 'copyright_setting', array(
		'default'           => __( ' ', 'copyright-footer' ),
		'sanitize_callback' => 'sanitize_text'
	) );
	// Add control
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'copyright_section',
		    array(
		        'label'    => __( 'Copyright Text', 'copyright-footer' ),
		        'section'  => 'copyright_section',
		        'settings' => 'copyright_setting',
		        'type'     => 'text'
		    )
	    )
	);
	// Create custom panel for Header Contact Info
	$wp_customize->add_panel( 'text_blocks', array(
		'priority'       => 500,
		'theme_supports' => '',
		'title'          => __( 'Header Contact Info', 'header-contact-info' ),
		'description'    => __( 'Set Header Info.', 'header-contact-info' ),
	) );
	// Add Phone Number
	// Add section.
	$wp_customize->add_section( 'phone_section' , array(
		'title'    => __('Phone Number','header-contact-info'),
		'panel'    => 'text_blocks',
		'priority' => 10
	) );
	// Add setting
	$wp_customize->add_setting( 'phone_setting', array(
		'default'           => __( ' ', 'header-contact-info' ),
		'sanitize_callback' => 'sanitize_text'
	) );
	// Add control
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'phone_section',
		    array(
		        'label'    => __( 'Phone Number', 'header-contact-info' ),
		        'section'  => 'phone_section',
		        'settings' => 'phone_setting',
		        'type'     => 'text'
		    )
	    )
	);
	//HEADER FIRST BUTTON
	$header_first_buttons = array();
	$header_first_buttons[] = array(
	'slug'=>'first_button_text',
	'default' => 'Online Pharmacy',
	'label' => __('Button Text', 'header-contact-info')
	);
	$header_first_buttons[] = array(
	'slug'=>'first_button_link',
	'default' => '',
	'label' => __('Button Link', 'header-contact-info')
	);
	//SECTION
	$wp_customize->add_section( 'header_first_button_section' , array(
		'title'    => __('Header Button One','header-contact-info'),
		'panel'    => 'text_blocks',
		'priority' => 20
	) );
	foreach( $header_first_buttons  as $header_first_button  ) {
	//SETTINGS
	$wp_customize->add_setting(
		$header_first_button['slug'], array(
		'default' => $header_first_button['default'],
		'type' => 'option',
		'capability' =>
		'edit_theme_options'
		)
	);
	//CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Control(
		$wp_customize,
		$header_first_button['slug'],
		array('label' => $header_first_button['label'],
		'section' => 'header_first_button_section',
		'settings' => $header_first_button['slug'])
		)
	);
	}
	//HEADER SECOND BUTTON
	$header_second_buttons = array();
	$header_second_buttons[] = array(
	'slug'=>'second_button_text',
	'default' => 'Request An Appointment',
	'label' => __('Button Text', 'header-contact-info')
	);
	$header_second_buttons[] = array(
	'slug'=>'second_button_link',
	'default' => '',
	'label' => __('Button Link', 'header-contact-info')
	);
	//SECTION
	$wp_customize->add_section( 'header_second_button_section' , array(
		'title'    => __('Header Button Two','header-contact-info'),
		'panel'    => 'text_blocks',
		'priority' => 25
	) );
	foreach( $header_second_buttons as $header_second_button  ) {
	// SETTINGS
	$wp_customize->add_setting(
		$header_second_button['slug'], array(
		'default' => $header_second_button['default'],
		'type' => 'option',
		'capability' =>
		'edit_theme_options'
		)
	);
	// CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Control(
		$wp_customize,
		$header_second_button['slug'],
		array('label' => $header_second_button['label'],
		'section' => 'header_second_button_section',
		'settings' => $header_second_button['slug'])
		)
	);
	}
	// Create custom panel for Header Top Banner Info
	$wp_customize->add_panel( 'top_banner', array(
		'priority'       => 600,
		'theme_supports' => '',
		'title'          => __( 'Header Top Banner Info', 'header-top-banner-info' ),
		'description'    => __( 'Set Header Top Banner Info.', 'header-top-banner-info' ),
	) );
	//TOP BANNER SETTINGS
	$top_banner_infos = array();
	$top_banner_infos[] = array(
		'slug'=>'top_banner_text',
		'default' => '',
		'label' => __('Top Banner Text', 'header-top-banner-info')
		);
	$top_banner_infos[] = array(
		'slug'=>'top_banner_button_text',
		'default' => '',
		'label' => __('Top Banner Button Text', 'header-top-banner-info')
	);
	$top_banner_infos[] = array(
		'slug'=>'top_banner_button_link',
		'default' => '',
		'label' => __('Top Banner Button Link', 'header-top-banner-info')
	);
	//SECTION
	$wp_customize->add_section( 'header_top_banner_section' , array(
		'title'    => __('Header Top Banner Info','header-top-banner-info'),
		'panel'    => 'top_banner',
		'priority' => 20
	) );
	foreach( $top_banner_infos as $top_banner_info  ) {
	//SETTINGS
	$wp_customize->add_setting(
		$top_banner_info['slug'], array(
		'default' => $top_banner_info['default'],
		'type' => 'option',
		'capability' =>
		'edit_theme_options'
		)
	);
	//CONTROLS
	$wp_customize->add_control(
		new WP_Customize_Control(
		$wp_customize,
		$top_banner_info['slug'],
		array('label' => $top_banner_info['label'],
		'section' => 'header_top_banner_section',
		'settings' => $top_banner_info['slug'])
		)
	);
	}

	
 	// Sanitize text
	function sanitize_text( $text ) {
	    return sanitize_text_field( $text );
	}
	
}

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * 
 * Remove default Gutenberg Blocks
 */

add_filter( 'allowed_block_types', 'webfx_allowed_block_types' );
 
function webfx_allowed_block_types( $allowed_blocks ) {
 
	return array(
		'acf/webfx-home-banner',
		'acf/webfx-welcome-start',
		'acf/webfx-home-services',
		'acf/webfx-home-team',
		'acf/webfx-exotic-care',
		'acf/webfx-fun-fact',
		'acf/webfx-testimonials-blog',
		'acf/webfx-footer-col-one',
		'acf/webfx-footer-col-two',
		'acf/webfx-footer-col-three',
		'acf/webfx-footer-col-four',
	);
 
}
//Fun Fact Get Video API
function get_video_thumbnail_uri( $video_uri ) {
	$thumbnail_uri = '';
	// determine the type of video and the video id
	$video = parse_video_uri( $video_uri );
	// get youtube thumbnail
	if ( $video['type'] == 'youtube' )
		$thumbnail_uri = 'http://img.youtube.com/vi/' . $video['id'] . '/hqdefault.jpg';
	
	// get vimeo thumbnail
	if( $video['type'] == 'vimeo' )
		$thumbnail_uri = get_vimeo_thumbnail_uri( $video['id'] );
	// get wistia thumbnail
	if( $video['type'] == 'wistia' )
		$thumbnail_uri = get_wistia_thumbnail_uri( $video_uri );
	// get default/placeholder thumbnail
	if( empty( $thumbnail_uri ) || is_wp_error( $thumbnail_uri ) )
		$thumbnail_uri = ''; 
	
	//return thumbnail uri
	return $thumbnail_uri;
	
}
/**
 * Parse the video uri/url to determine the video type/source and the video id
 */
function parse_video_uri( $url ) {
	
	// Parse the url 
	$parse = parse_url( $url );
	
	// Set blank variables
	$video_type = '';
	$video_id = '';
	
	// Url is http://youtu.be/xxxx
	if ( $parse['host'] == 'youtu.be' ) {
	
		$video_type = 'youtube';
		
		$video_id = ltrim( $parse['path'],'/' );	
		
	}
	
	// Url is http://www.youtube.com/watch?v=xxxx 
	// or http://www.youtube.com/watch?feature=player_embedded&v=xxx
	// or http://www.youtube.com/embed/xxxx
	if ( ( $parse['host'] == 'youtube.com' ) || ( $parse['host'] == 'www.youtube.com' ) ) {
	
		$video_type = 'youtube';
		
		parse_str( $parse['query'] );
		
		$video_id = $v;	
		
		if ( !empty( $feature ) )
			$video_id = end( explode( 'v=', $parse['query'] ) );
			
		if ( strpos( $parse['path'], 'embed' ) == 1 )
			$video_id = end( explode( '/', $parse['path'] ) );
		
	}
	
	// Url is http://www.vimeo.com
	if ( ( $parse['host'] == 'vimeo.com' ) || ( $parse['host'] == 'www.vimeo.com' ) ) {
	
		$video_type = 'vimeo';
		
		$video_id = ltrim( $parse['path'],'/' );	
					
	}
	$host_names = explode(".", $parse['host'] );
	$rebuild = ( ! empty( $host_names[1] ) ? $host_names[1] : '') . '.' . ( ! empty($host_names[2] ) ? $host_names[2] : '');
	// Url is an oembed url wistia.com
	if ( ( $rebuild == 'wistia.com' ) || ( $rebuild == 'wi.st.com' ) ) {
	
		$video_type = 'wistia';
			
		if ( strpos( $parse['path'], 'medias' ) == 1 )
				$video_id = end( explode( '/', $parse['path'] ) );
	
	}
	
	// If recognised type return video array
	if ( !empty( $video_type ) ) {
	
		$video_array = array(
			'type' => $video_type,
			'id' => $video_id
		);
	
		return $video_array;
		
	} else {
	
		return false;
		
	}
	
}
 /* Takes a Vimeo video/clip ID and calls the Vimeo API v2 to get the large thumbnail URL.
 */
function get_vimeo_thumbnail_uri( $clip_id ) {
	$vimeo_api_uri = 'http://vimeo.com/api/v2/video/' . $clip_id . '.php';
	$vimeo_response = wp_remote_get( $vimeo_api_uri );
	if( is_wp_error( $vimeo_response ) ) {
		return $vimeo_response;
	} else {
		$vimeo_response = unserialize( $vimeo_response['body'] );
		return $vimeo_response[0]['thumbnail_large'];
	}
	
}
/**
 * Takes a wistia oembed url and gets the video thumbnail url.
 */
function get_wistia_thumbnail_uri( $video_uri ) {
	if ( empty($video_uri) )
		return false;
	$wistia_api_uri = 'http://fast.wistia.com/oembed?url=' . $video_uri;
	$wistia_response = wp_remote_get( $wistia_api_uri );
	if( is_wp_error( $wistia_response ) ) {
		return $wistia_response;
	} else {
		$wistia_response = json_decode( $wistia_response['body'], true );
		return $wistia_response['thumbnail_url'];
	}
	
}
