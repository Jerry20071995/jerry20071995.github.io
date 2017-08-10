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

	function register_my_menu() {
		   register_nav_menu('header-menu',__( 'Menu' ));
		}
		add_action( 'init', 'register_my_menu' );

	add_theme_support( 'background' );
	add_theme_support( 'menus' );
 	register_sidebar( $args ); 
 ?>