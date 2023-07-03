<?php

function internship2_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Roboto&family=Open+Sans&family=Montserrat&display=swap', null, null);

  wp_enqueue_style('bootstrap-style', '//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
  wp_enqueue_script('bootstrap-script', '//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', NULL, '5.3.0', true);
  wp_enqueue_style('bootstrap-icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css');

  wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', NULL, '1.8.1', "all");
  wp_enqueue_style('slick-theme', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', NULL, '1.8.1', "all");
  wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), "1.8.1", true);

  wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', NULL, '5.0', "all");
  wp_enqueue_script('fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array('jquery'), "5.0", true);
  
  wp_enqueue_style('main-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . "/style.css"), "all");
  
  wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', NULL, filemtime(get_template_directory() . "/assets/js/main.js"), true);
}

add_action('wp_enqueue_scripts', 'internship2_files');

function internship2_features() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support( 'custom-logo' );
}

add_action('after_setup_theme', 'internship2_features');

// Menus
if ( ! function_exists( 'internship2_register_nav_menu' ) ) {

	function internship2_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => esc_html(__( 'Primary Menu', 'internship2' )),
	    	'footer_menu_1'  => esc_html(__( 'Footer Menu One', 'internship2' )),
        'footer_menu_2'  => esc_html(__( 'Footer Menu Two', 'internship2' )),
        'footer_social_icons'  => esc_html(__( 'Footer Social Icons', 'internship2' ))
		) );
	}
	add_action( 'after_setup_theme', 'internship2_register_nav_menu', 0 );
}

// Sidebar(s)
add_action( 'widgets_init', 'internship2_register_sidebars' );

function internship2_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => esc_html(__( 'Primary Sidebar', 'internship2' )),
			'description'   => esc_html(__( 'The sidebar can appear on the left or on the right side when appropriate template is choosen.', 'internship2' )),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}