<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<!--meta name="viewport" content="width=device-width, initial-scale=1.0"-->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/seed.css" type="text/css" />
<!-- responsive css -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/app.css" type="text/css" />
<!-- specific css -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/vandor/jquery.bxslider.css" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<!-- main js -->
<script src="js/modernizr.js"></script>
<?php // wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page">

		<header id="head">

			<div id="main-nav"> 
			  <div class="row">
			    <nav class="top-bar sticky" data-topbar>
			      <ul class="title-area">
			        <li class="name">

			          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php lm_display_logo(); ?>
					  </a>
			        
			        </li>
			        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			      </ul>

			      <section class="top-bar-section">
			        <!-- Right Nav Section -->
			        	<?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'right' ) ); ?>
			      </section>
			    </nav>
			  </div>
			</div>

		</header><!--head-->

		<main id="main">