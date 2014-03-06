<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<!--meta name="viewport" content="width=device-width, initial-scale=1.0"-->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/seed.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<?php // wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page">

<header id="head">
<div class="container">

<div id="brand">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
<h1 id="brand-title"><?php bloginfo( 'name' ); ?></h1>
<h2 id="brand-desc"><?php bloginfo( 'description' ); ?></h2>
</a>
</div><!--brand-->

<div id="navgroup">
<a class="screen-reader-text skip-link" href="#content" title="Skip to content">Skip to content</a>
<nav id="nav" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'mainnav' ) ); ?>
</nav><!--nav-->
</div><!--navgroup-->

</div><!--container-->
</header><!--head-->

<main id="main">