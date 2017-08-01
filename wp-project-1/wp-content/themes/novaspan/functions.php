<?php

function master_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
add_action( 'after_setup_theme', 'master_setup' );

register_nav_menus( array(
	'main_menu' => 'Main Menu',
) );
	
/**
 * Enqueue scripts and styles.
 */
function master_scripts() {

	$themeUrl = rtrim( get_template_directory_uri(), '/' );

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_enqueue_style( 'bootstrap-style', $themeUrl . '/assets/css/bootstrap.min.css', array(), null );
	wp_enqueue_style( 'font-awesome-style', $themeUrl . '/assets/fonts/font-awesome.min.css', array(), null );
	wp_enqueue_style( 'simple-line-style', $themeUrl . '/assets/fonts/simple-line-icons.css', array(), null );
	wp_enqueue_style( 'setting-style', $themeUrl . '/assets/css/settings.css', array(), null );
	wp_enqueue_style( 'slicknav-style', $themeUrl . '/assets/css/slicknav.css', array(), null );
	wp_enqueue_style( 'main-style', $themeUrl . '/assets/css/main.css', array(), null );
	wp_enqueue_style( 'responsive-style', $themeUrl . '/assets/css/responsive.css', array(), null );
	wp_enqueue_style( 'animate-style', $themeUrl . '/assets/css/animate.css', array(), null );
	wp_enqueue_style( 'pink-style', $themeUrl . '/assets/css/colors/pink.css', array(), null );
	wp_enqueue_style( 'red-style', $themeUrl . '/assets/css/colors/red.css', array(), null );
	wp_enqueue_style( 'jade-style', $themeUrl . '/assets/css/colors/jade.css', array(), null );
	wp_enqueue_style( 'green-style', $themeUrl . '/assets/css/colors/green.css', array(), null );
	wp_enqueue_style( 'blue-style', $themeUrl . '/assets/css/colors/blue.css', array(), null );
	wp_enqueue_style( 'beige-style', $themeUrl . '/assets/css/colors/beige.css', array(), null );
	wp_enqueue_style( 'cyan-style', $themeUrl . '/assets/css/colors/cyan.css', array(), null );
	wp_enqueue_style( 'orange-style', $themeUrl . '/assets/css/colors/orange.css', array(), null );
	wp_enqueue_style( 'peach-style', $themeUrl . '/assets/css/colors/peach.css', array(), null );
	wp_enqueue_style( 'purple-style', $themeUrl . '/assets/css/colors/purple.css', array(), null );
	wp_enqueue_style( 'sky-blu-style', $themeUrl . '/assets/css/colors/sky-blue.css', array(), null );
	wp_enqueue_style( 'yellow-style', $themeUrl . '/assets/css/colors/yellow.css', array(), null );
	

	wp_enqueue_script( 'modernizrr-script',$themeUrl . '/assets/js/modernizrr.js' , array('jquery'), null, true );
	wp_enqueue_script( 'bootstrap-script',$themeUrl . '/assets/js/bootstrap.min.js' , array('jquery'), null, true );
	wp_enqueue_script( 'carousel-script',$themeUrl . '/assets/js/owl.carousel.min.js' , array('jquery'), null, true );
	wp_enqueue_script( 'nivo-lightbox-script',$themeUrl . '/assets/js/nivo-lightbox.min.js' , array('jquery'), null, true );
	wp_enqueue_script( 'mixitup-script',$themeUrl . '/assets/js/jquery.mixitup.min.js' , array('jquery'), null, true );
	wp_enqueue_script( 'jquery-appear-script',$themeUrl . '/assets/js/jquery.appear.js' , array('jquery'), null, true );
	wp_enqueue_script( 'count-to-script',$themeUrl . '/assets/js/count-to.js' , array('jquery'), null, true );
	wp_enqueue_script( 'jquery.appear-script',$themeUrl . '/assets/js/jquery.appear.js' , array('jquery'), null, true );
	wp_enqueue_script( 'parallax-script',$themeUrl . '/assets/js/jquery.parallax.js' , array('jquery'), null, true );
	wp_enqueue_script( 'smooth-scroll-script',$themeUrl . '/assets/js/smooth-scroll.js' , array('jquery'), null, true );
	wp_enqueue_script( 'jquery.slicknav-script',$themeUrl . '/assets/js/jquery.slicknav.js' , array('jquery'), null, true );
	wp_enqueue_script( 'main-script',$themeUrl . '/assets/js/main.js' , array('jquery'), null, true );
	wp_enqueue_script( 'themepunch-script',$themeUrl . '/assets/js/jquery.themepunch.revolution.min.js' , array('jquery'), null, true );
	wp_enqueue_script( 'themepunch-tool-script',$themeUrl . '/assets/js/jquery.themepunch.tools.min.js' , array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'master_scripts' );