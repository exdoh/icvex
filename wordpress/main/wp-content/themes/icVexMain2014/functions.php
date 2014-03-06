<?php
register_nav_menus( array(
		'main' => __( 'Main Navigation' )
		)
	);
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );
set_post_thumbnail_size( 240, 200, true );
?>