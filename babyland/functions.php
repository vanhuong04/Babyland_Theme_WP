<?php
/**
 * BabyLand functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BabyLand
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function babyland_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on BabyLand, use a find and replace
	 * to change 'babyland' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('babyland', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'babyland'),
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
			'babyland_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'babyland_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function babyland_content_width()
{
	$GLOBALS['content_width'] = apply_filters('babyland_content_width', 640);
}
add_action('after_setup_theme', 'babyland_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function babyland_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'babyland'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'babyland'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Sidebar2', 'babyland'),
			'id' => 'sidebar-2',
			'description' => esc_html__('Add widgets here.', 'babyland'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="menu-footer">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'babyland_widgets_init');


// thame option

add_action('customize_register', 'thame_option_customize');
function thame_option_customize($wp_customize)
{
	// ADD TEXT FOR TOP-HEADER
// add section
	$wp_customize->add_section('sec-text-header', array(
		'title' => 'Header',
	)
	);
	// add setting
	$wp_customize->add_setting("set-location-header", array(
		"type" => "theme_mod",
		"default" => "",
		"sanitize_callback" => "sanitize_text_field"
	)
	);

	// add control
	$wp_customize->add_control("set-location-header", array(
		"type" => "text",
		"label" => "Location",
		"description" => "enter your location",
		"section" => 'sec-text-header',
		"setting" => 'set-location-header'
	)
	);

	$wp_customize->add_setting("set-phone-header", array(
		"type" => "theme_mod",
		"default" => "",
	)
	);

	// add control
	$wp_customize->add_control("set-phone-header", array(
		"type" => "text",
		"label" => "Phone",
		"description" => "enter your phone",
		"section" => 'sec-text-header',
		"setting" => 'set-phone-header'
	)
	);

	$wp_customize->add_setting("set-facebook-header", array(
		"type" => "theme_mod",
		"default" => "",
	)
	);

	// add control
	$wp_customize->add_control("set-facebook-header", array(
		"type" => "text",
		"label" => "Facebook",
		"description" => "enter link facebook",
		"section" => 'sec-text-header',
		"setting" => 'set-facebook-header'
	)
	);

	$wp_customize->add_setting("set-intagram-header", array(
		"type" => "theme_mod",
		"default" => "",
	)
	);

	// add control
	$wp_customize->add_control("set-intagram-header", array(
		"type" => "text",
		"label" => "Intagram",
		"description" => "enter link intagram",
		"section" => 'sec-text-header',
		"setting" => 'set-intagram-header'
	)
	);

	$wp_customize->add_setting("set-x-header", array(
		"type" => "theme_mod",
		"default" => "",
	)
	);

	// add control
	$wp_customize->add_control("set-x-header", array(
		"type" => "text",
		"label" => "X",
		"description" => "enter link x",
		"section" => 'sec-text-header',
		"setting" => 'set-x-header'
	)
	);

	$wp_customize->add_setting("set-youtube-header", array(
		"type" => "theme_mod",
		"default" => "",
	)
	);

	// add control
	$wp_customize->add_control("set-youtube-header", array(
		"type" => "text",
		"label" => "Youtube",
		"description" => "enter link youtube",
		"section" => 'sec-text-header',
		"setting" => 'set-youtube-header'
	)
	);

	// slider
	// add setting
	$wp_customize->add_setting('my_slider_image', array(
		'default' => '', // Thiết lập URL ảnh mặc định nếu muốn
		'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
	)
	);

	// add control
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'my_slider_image_ctrl', array(
		'label' => __('Ảnh cho Slider'), // Nhãn được dịch
		'description' => __('Tải lên ảnh sẽ hiển thị trong slider của bạn.'), // Mô tả được dịch (tùy chọn)
		'section' => 'sec-text-header',
		'settings' => 'my_slider_image', // Kết nối control với cài đặt
		'mime_type' => 'image', // Hạn chế tải lên hình ảnh
	)
	));

	//text slider
	$wp_customize->add_section("data-home", array(
		'title' => "Home"
	)
	);

	$wp_customize->add_setting("text-slider", array(
		'type' => "theme_mod",
		'default' => ""
	)
	);

	$wp_customize->add_control("text-slider", array(
		'label' => "text for text slider",
		'section' => 'data-home',
		'settings' => 'text-slider',
		"description" => 'enter text for texr slider'
	)
	);

	// BANNER
	$wp_customize->add_setting("text-banner-title", array(
		'type' => "theme_mod",
		'default' => ""
	)
	);

	$wp_customize->add_control("text-banner-title", array(
		'label' => "text for banner title",
		'section' => 'data-home',
		'settings' => 'text-banner-title',
		"description" => 'enter text for banner title'
	)
	);

	$wp_customize->add_setting("content-banner", array(
		'type' => "theme_mod",
		'default' => ""
	)
	);

	$wp_customize->add_control("content-banner", array(
		'label' => "content for banner title",
		'section' => 'data-home',
		'settings' => 'content-banner-title',
		"description" => 'enter content for banner title'
	)
	);

	$wp_customize->add_setting("link-banner", array(
		'type' => "theme_mod",
		'default' => ""
	)
	);

	$wp_customize->add_control("link-banner", array(
		'label' => "link for button banner ",
		'section' => 'data-home',
		'settings' => 'link-banner',
		"description" => 'enter content for banner title'
	)
	);

	$wp_customize->add_setting('img-banner', array(
		'default' => '', // Thiết lập URL ảnh mặc định nếu muốn
		'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
	)
	);

	// add control
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'my_slider_image_ctrl', array(
		'label' => __('Ảnh cho banner 1'), // Nhãn được dịch
		'description' => __('Tải lên ảnh sẽ hiển thị trong slider của bạn.'), // Mô tả được dịch (tùy chọn)
		'section' => 'data-home',
		'settings' => 'img-banner', // Kết nối control với cài đặt
		'mime_type' => 'image', // Hạn chế tải lên hình ảnh
	)
	));

	// banner 2
	$wp_customize->add_setting("text-banner-2", array(
		'type' => "theme_mod",
		'default' => ""
	)
	);

	$wp_customize->add_control("text-banner-2", array(
		'label' => "text for banner 2",
		'section' => 'data-home',
		'settings' => 'text-banner-2',
		"description" => 'enter text for banner 2 '
	)
	);

	$wp_customize->add_setting('img-banner-2', array(
		'default' => '', // Thiết lập URL ảnh mặc định nếu muốn
		'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
	)
	);

	// add control
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'img-banner-2', array(
		'label' => __('Ảnh cho banner 2'), // Nhãn được dịch
		'description' => __('Tải lên ảnh sẽ hiển thị trong slider của bạn.'), // Mô tả được dịch (tùy chọn)
		'section' => 'data-home',
		'settings' => 'img-banner-2', // Kết nối control với cài đặt
		'mime_type' => 'image', // Hạn chế tải lên hình ảnh
	)
	));

	// four
	$wp_customize->add_section('four-shop', array(
		'title' => "Four shop"
	)
	);

	$wp_customize->add_setting('four-title1-shop', array(
		'type' => "theme_mod",
		'default' => ""
	));

	$wp_customize->add_control('four-title1-shop', array(
		'label'=>"Title column 1",
		'section' => 'four-shop',
		'settings' => 'four-title1-shop',
		"description" => 'enter text for Title 1 '
	));

	$wp_customize->add_setting('four-title2-shop', array(
		'type' => "theme_mod",
		'default' => ""
	));

	$wp_customize->add_control('four-title2-shop', array(
		'label'=>"Title column 2",
		'section' => 'four-shop',
		'settings' => 'four-title2-shop',
		"description" => 'enter text for Title 2 '
	));

	$wp_customize->add_setting('four-title3-shop', array(
		'type' => "theme_mod",
		'default' => ""
	));

	$wp_customize->add_control('four-title3-shop', array(
		'label'=>"Title column 3",
		'section' => 'four-shop',
		'settings' => 'four-title3-shop',
		"description" => 'enter text for Title 3 '
	));

	$wp_customize->add_setting('four-title4-shop', array(
		'type' => "theme_mod",
		'default' => ""
	));

	$wp_customize->add_control('four-title4-shop', array(
		'label'=>"Title column 4",
		'section' => 'four-shop',
		'settings' => 'four-title1-shop',
		"description" => 'enter text for Title 4 '
	));

	// content for founr
	$wp_customize->add_setting('four-content1-shop', array(
		'type' => "theme_mod",
		'default' => ""
	));

	$wp_customize->add_control('four-content1-shop', array(
		'label'=>"Title content 1",
		'section' => 'four-shop',
		'settings' => 'four-content1-shop',
		"description" => 'enter text for Title 1 '
	));

	$wp_customize->add_setting('four-content2-shop', array(
		'type' => "theme_mod",
		'default' => ""
	));

	$wp_customize->add_control('four-content2-shop', array(
		'label'=>"Title content 2",
		'section' => 'four-shop',
		'settings' => 'four-content2-shop',
		"description" => 'enter text for Title 2 '
	));

	$wp_customize->add_setting('four-content3-shop', array(
		'type' => "theme_mod",
		'default' => ""
	));

	$wp_customize->add_control('four-content3-shop', array(
		'label'=>"Title content 3",
		'section' => 'four-shop',
		'settings' => 'four-content3-shop',
		"description" => 'enter text for Title 3 '
	));

	$wp_customize->add_setting('four-content4-shop', array(
		'type' => "theme_mod",
		'default' => ""
	));

	$wp_customize->add_control('four-content4-shop', array(
		'label'=>"Title content 4",
		'section' => 'four-shop',
		'settings' => 'four-content4-shop',
		"description" => 'enter text for Title 4 '
	));

	// contact
	$wp_customize->add_section('contact',array(
		'title' => "Contact"
	));

	$wp_customize->add_setting('contact-img', array(
		'default' => '', // Thiết lập URL ảnh mặc định nếu muốn
		'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
	)
	);

	// add control
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'contact-img', array(
		'label' => __('Ảnh cho contact'), // Nhãn được dịch
		'description' => __('Tải lên ảnh sẽ hiển thị trong slider của bạn.'), // Mô tả được dịch (tùy chọn)
		'section' => 'contact',
		'settings' => 'contact-img', // Kết nối control với cài đặt
		'mime_type' => 'image', // Hạn chế tải lên hình ảnh
	)
	));

	$wp_customize->add_setting('concact-last-week', array(
		'type' => "theme_mod",
		'default' => ""
	));

	$wp_customize->add_control('concact-last-week', array(
		'label'=>"Time for last week",
		'section' => 'contact',
		'settings' => 'concact-last-week',
		"description" => 'enter time for last week '
	));

	$wp_customize->add_setting('concact-firt-week', array(
		'type' => "theme_mod",
		'default' => ""
	));

	$wp_customize->add_control('concact-last-week', array(
		'label'=>"Time for firt week",
		'section' => 'contact',
		'settings' => 'concact-last-week',
		"description" => 'enter time for firt week '
	));

	$wp_customize->add_setting('concact-phone', array(
		'type' => "theme_mod",
		'default' => ""
	));

	$wp_customize->add_control('concact-phone', array(
		'label'=>"Your phone",
		'section' => 'contact',
		'settings' => 'concact-phone',
		"description" => 'enter your phone '
	));

	$wp_customize->add_setting('concact-email', array(
		'type' => "theme_mod",
		'default' => ""
	));

	$wp_customize->add_control('concact-email', array(
		'label'=>"Your email",
		'section' => 'contact',
		'settings' => 'concact-email',
		"description" => 'enter your email '
	));

	$wp_customize->add_setting('concact-location', array(
		'type' => "theme_mod",
		'default' => ""
	));

	$wp_customize->add_control('concact-location', array(
		'label'=>"Your location",
		'section' => 'contact',
		'settings' => 'concact-location',
		"description" => 'enter your location '
	));

	// img slide
	$wp_customize->add_section('slide-footer',array(
		'title' => "Slide footer"
	));

	$wp_customize->add_setting('slide-footer-1', array(
		'default' => '', // Thiết lập URL ảnh mặc định nếu muốn
		'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
	)
	);

	// add control
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'slide-footer-1', array(
		'label' => __('Ảnh cho slide footer 1'), // Nhãn được dịch
		'description' => __('Tải lên ảnh sẽ hiển thị trong slider của bạn.'), // Mô tả được dịch (tùy chọn)
		'section' => 'slide-footer',
		'settings' => 'slide-footer-1', // Kết nối control với cài đặt
		'mime_type' => 'image', // Hạn chế tải lên hình ảnh
	)
	));

	$wp_customize->add_setting('slide-footer-2', array(
		'default' => '', // Thiết lập URL ảnh mặc định nếu muốn
		'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
	)
	);

	// add control
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'slide-footer-2', array(
		'label' => __('Ảnh cho slide footer 2'), // Nhãn được dịch
		'description' => __('Tải lên ảnh sẽ hiển thị trong slider của bạn.'), // Mô tả được dịch (tùy chọn)
		'section' => 'slide-footer',
		'settings' => 'slide-footer-2', // Kết nối control với cài đặt
		'mime_type' => 'image', // Hạn chế tải lên hình ảnh
	)
	));

	$wp_customize->add_setting('slide-footer-3', array(
		'default' => '', // Thiết lập URL ảnh mặc định nếu muốn
		'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
	)
	);

	// add control
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'slide-footer-3', array(
		'label' => __('Ảnh cho slide footer 3'), // Nhãn được dịch
		'description' => __('Tải lên ảnh sẽ hiển thị trong slider của bạn.'), // Mô tả được dịch (tùy chọn)
		'section' => 'slide-footer',
		'settings' => 'slide-footer-3', // Kết nối control với cài đặt
		'mime_type' => 'image', // Hạn chế tải lên hình ảnh
	)
	));

	$wp_customize->add_setting('slide-footer-4', array(
		'default' => '', // Thiết lập URL ảnh mặc định nếu muốn
		'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
	)
	);

	// add control
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'slide-footer-4', array(
		'label' => __('Ảnh cho slide footer 4'), // Nhãn được dịch
		'description' => __('Tải lên ảnh sẽ hiển thị trong slider của bạn.'), // Mô tả được dịch (tùy chọn)
		'section' => 'slide-footer',
		'settings' => 'slide-footer-4', // Kết nối control với cài đặt
		'mime_type' => 'image', // Hạn chế tải lên hình ảnh
	)
	));

	$wp_customize->add_setting('slide-footer-5', array(
		'default' => '', // Thiết lập URL ảnh mặc định nếu muốn
		'transport' => 'refresh', // Cách cập nhật tùy chỉnh (làm mới trang)
	)
	);

	// add control
	$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'slide-footer-5', array(
		'label' => __('Ảnh cho slide footer 5'), // Nhãn được dịch
		'description' => __('Tải lên ảnh sẽ hiển thị trong slider của bạn.'), // Mô tả được dịch (tùy chọn)
		'section' => 'slide-footer',
		'settings' => 'slide-footer-5', // Kết nối control với cài đặt
		'mime_type' => 'image', // Hạn chế tải lên hình ảnh
	)
	));


}

/**
 * Enqueue scripts and styles.
 */
function babyland_scripts()
{
	wp_enqueue_style('babyland-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('babyland-style', 'rtl', 'replace');

	wp_enqueue_script('babyland-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_style('main-scss', get_template_directory_uri() . '/scss/index.css', [], '1.0.0', 'all');
	wp_enqueue_style('Montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', [], '1.0.0', 'all');
	wp_enqueue_style('Inter-font', 'https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Inter:wght@100..900&display=swap', [], '1.0.0', 'all');
	wp_enqueue_style('Cherry Bomb-font', 'https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap', [], '1.0.0', 'all');
	wp_enqueue_style('bootrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css', [], '5.0.1', 'all');
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'babyland_scripts');

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

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// remove button add to cart
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

