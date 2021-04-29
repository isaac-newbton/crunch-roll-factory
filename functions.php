<?php
define('ACA_INCLUDE_PATH', get_template_directory() . '/inc/');
define('ACA_FONTAWESOME_VERSION', '5.15.1');

include_once ACA_INCLUDE_PATH . 'acf-setup.php';

function aca_theme_setup(){
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('customize-selective-refresh-widgets');
	add_theme_support('align-wide');
	add_theme_support('post-thumbnails', [
		'post',
		'page',
        'product'
	]);
	add_theme_support('html5', [
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption',
		'style',
		'script'
	]);
	add_theme_support('custom-logo', [
		'height'=>174,
		'width'=>268,
		'flex-width'=>true,
		'flex-height'=>true
	]);

	register_nav_menus([
		'main-nav'=>'Main Navigation',
        'footer-nav'=>'Footer Navigation'
	]);
}
add_action('after_setup_theme', 'aca_theme_setup');

function aca_register_styles() {
	$theme_version = wp_get_theme()->get('Version');
	$slick_slider_version = '1.8.1';

	wp_register_style('aca-style', get_stylesheet_uri(), [], $theme_version);
	wp_register_style('aca-style-min', get_stylesheet_directory_uri() . '/assets/css/style.min.css', [], $theme_version);
	wp_register_style('slick-slider-style', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', [], $slick_slider_version);
	wp_register_style('fontawesome-style', get_stylesheet_directory_uri() . '/inc/fontawesome/css/all.min.css', [], ACA_FONTAWESOME_VERSION);
	wp_register_style('aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css', [], '2.3.1', 'all');

	wp_enqueue_style('aca-style');
	wp_enqueue_style('aca-style-min');
	wp_enqueue_style('fontawesome-style');
	wp_enqueue_style('slick-slider-style');
	wp_enqueue_style('aos-style');
}
add_action('wp_enqueue_scripts', 'aca_register_styles');

function aca_register_scripts(){
	$theme_version = wp_get_theme()->get('Version');
	$slick_slider_version = '1.8.1';

	wp_register_script('aca-script-min', get_stylesheet_directory_uri() . '/assets/js/main-min.js', [], $theme_version, true);
	wp_register_script('aca-script-nav-min', get_stylesheet_directory_uri() . '/assets/js/nav-min.js', [], $theme_version, true);
	wp_register_script('fontawesome-script', get_stylesheet_directory_uri() . '/inc/fontawesome/js/all.min.js', [], ACA_FONTAWESOME_VERSION);
	wp_register_script('slick-slider-ext', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], $slick_slider_version, true);
	wp_register_script('slick-slider-script', get_stylesheet_directory_uri() . '/assets/js/slider-min.js', ['slick-slider-ext'], $slick_slider_version, true);

	wp_register_script( 'aos-script-ext', 'https://unpkg.com/aos@2.3.1/dist/aos.js', [], '2.3.1');
	wp_register_script( 'aos-script', get_template_directory_uri() . '/assets/js/aos-min.js', ['aos-script-ext'], $theme_version, true);

	wp_enqueue_script('aca-script-min');
	wp_enqueue_script('aca-script-nav-min');
	wp_enqueue_script('fontawesome-script');
	wp_enqueue_script('slick-slider-ext');
	wp_enqueue_script('slick-slider-script');
	wp_enqueue_script('aos-script-ext');
	wp_enqueue_script('aos-script');
}
add_action('wp_enqueue_scripts', 'aca_register_scripts');

require_once get_template_directory() . '/inc/custom-post-types.php';
require_once get_template_directory() . '/inc/admin.php';
