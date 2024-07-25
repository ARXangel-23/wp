<?php
/*
 Theme Name: myTheme
 Theme URI:
 Author: Илья Обухов
 Author URI: 
 Description: Тестовая тема
 Version: 1.0
 License: GNU General Public License v2 or later
 License URI: http://www.gnu.org/licenses/gpl-2.0.html
 Tags: 
Text Domain:

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/

add_action('wp_enqueue_scripts', 'style_myTheme');
	   
function style_myTheme() {
	
	wp_enqueue_style('reset', get_template_directory_uri() . '/assets/reset.css' );
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/animate.min.css' );
	wp_enqueue_style('grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.css' );
	wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/fancybox/fancybox.css' );
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', true );
	//wp_enqueue_style('icons', get_template_directory_uri() . 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' );
	wp_enqueue_style('mainStyle', get_template_directory_uri() . '/assets/style.css' );
	wp_enqueue_style('style', get_stylesheet_uri());
	
	// отменяем зарегистрированный jQuery
	wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');
	// регистрируем
	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
	wp_register_script( 'jquery', false, array('jquery-core'), null, true );
	// подключаем
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/fancybox/fancybox.umd.js');
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/wow.js');
	wp_enqueue_script( 'bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), 'v5.1.3', true);
	//wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true);
	//wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '1.0.0', true );
	//wp_enqueue_script( 'jquery.cookie', get_template_directory_uri() . '/assets/js/jquery.cookie.js');
}

remove_filter( 'the_excerpt', 'wpautop' ); // Отключаем автоформатирование в кратком(анонсе) посте

add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){

	register_sidebar( array(
		'name'          => 'General_Sidebar',
		'id'            => "General_Sidebar",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<section class="widget %2$s">',
		'after_widget'  => "</section>\n",
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => "</h4>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	));
	register_sidebar( array(
		'name'          => 'Banners_Sidebar',
		'id'            => "banners",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<section class="widget %2$s">',
		'after_widget'  => "</section>\n",
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => "</h4>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	));
}

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'chat', 'audio') );
add_theme_support('automatic-feed-links');
add_theme_support('align-wide');
add_theme_support('responsive-embeds');

add_action( 'after_setup_theme', function(){
	add_theme_support('menus');
});

add_theme_support( 'custom-logo', [
	'height'      => 190,
	'width'       => 800,
	'class' =>'custom-logo11111',
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
	'unlink-homepage-logo' => false, // WP 5.5
] );



function image_add_figure($html, $id, $caption, $title, $align, $url, $size, $alt, $rel) {
	$url = wp_get_attachment_url($id);
	$html5 = "<figure id='postIDimg$id' class='postFigure'>";
 	$html5 .= "<a href='$url' alt='$alt' title='$alt' data-fancybox='gallery' data-caption='$caption' class='linkImg' />";
	$html5 .= "<img src='$url' alt='$alt' title='$alt' class='img-thumbnail img-fluid imgSize-$size' />";
	$html5 .= "</a>";
	$html5 .= "<figcaption class='posFigcaption'>$caption</figcaption>";	
	$html5 .= "</figure>";
  return $html5;
}
add_filter( 'image_send_to_editor', 'image_add_figure', 10, 9 );

// yandexRSS
add_action('init', 'mainRSS');
function mainRSS(){add_feed('rssya', 'mainRSSFunc');}
function mainRSSFunc(){get_template_part('/myFeed/ya');}

// myRSS
add_action('init', 'myRSS');
function myRSS(){add_feed('rssmy', 'myRSSf');}
function myRSSf(){get_template_part('/myFeed/my');}

// ramblerRSS
add_action('init', 'ramblerRSS');
function ramblerRSS(){add_feed('rssrambler', 'myRSSrambler');}
function myRSSrambler(){get_template_part('/myFeed/rambler');}


?>