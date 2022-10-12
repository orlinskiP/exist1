<?php

if (!function_exists('exist_setup')) :

	function exist_setup()
	{
		
		load_theme_textdomain('exist', get_template_directory() . '/languages');
	
		add_theme_support('automatic-feed-links');

		require get_template_directory() . '/functions/allowed-blocks.php';

		foreach (glob(get_template_directory() . "/blocks/*") as $file) {
			require $file . "/register.php";
		}

		require get_template_directory() . '/functions/acf-callback.php';
	
		add_theme_support('title-tag');
		
		add_theme_support('post-thumbnails');

		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'exist'),
			
		));

		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));
		
		add_theme_support('custom-background', apply_filters('exist_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));
		
		add_theme_support('customize-selective-refresh-widgets');
	
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'exist_setup');

function exist_content_width()
{
	$GLOBALS['content_width'] = apply_filters('exist_content_width', 640);
}
add_action('after_setup_theme', 'exist_content_width', 0);

function exist_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'exist'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'exist'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'exist_widgets_init');

add_action('wp_enqueue_scripts', 'jj_enqueue_ajax_scripts');
function jj_enqueue_ajax_scripts()
{

	wp_enqueue_script('ajax-main-blocks', get_template_directory_uri() . '/js/blocks_scripts.js');
	wp_enqueue_script('ajax-main', get_template_directory_uri() . '/js/theme.js');

	if (isset($_SERVER['HTTPS']))
		$protocol = 'https://';
	else
		$protocol = 'http://';

	$admin_ajax_url 		= 	admin_url('admin-ajax.php', $protocol);
	$cookies_enabled 	= 	get_field("cookies_active", "options");

	wp_localize_script(
		'ajax-main',
		'ajax_options',
		array('admin_ajax_url' => $admin_ajax_url, "cookies_enabled" => $cookies_enabled)
	);
}

require("functions/cookies.php");
require("functions/menu-walker.php");
require("functions/footer-blocks.php");

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Ustawienia szablonu',
		'menu_title'	=> 'Szablon',
		'menu_slug' 	=> 'theme-general-settings'
	));
}

function exist_scripts()
{
	wp_enqueue_style('exist-style', get_stylesheet_uri());

	wp_enqueue_script('exist-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('exist-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'exist_scripts');

require get_template_directory() . '/inc/custom-header.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/customizer.php';

if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}