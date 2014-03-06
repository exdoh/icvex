<?php get_header(); ?>
<div class="container">
<div id="content" role="main">

<?php if ( have_posts() ) : ?>

<?php if ( is_tag() || is_category() || is_day() || is_month() || is_year() || is_search() ) : ?> 
	<header><h1 class="title">
	<?php if (is_tag()) 			{ ?>Tag: <?php single_tag_title(); ?>
	<?php } elseif (is_category()) 	{ ?><?php single_cat_title(); ?>
	<?php } elseif (is_day()) 		{ ?>Day: <?php the_time(get_option( 'date_format' )); ?>
	<?php } elseif (is_month())		{ ?>Month: <?php the_time('F Y'); ?>
	<?php } elseif (is_year()) 		{ ?>Year: <?php the_time('Y'); ?>
	<?php } elseif (is_search())	{ ?>Searched for: <?php the_search_query(); ?>
	<?php } ?>
	</h1></header>
<?php endif; ?>

<?php 
while ( have_posts() ) : the_post(); 
	get_template_part( 'content'); 
endwhile;
// seed_pagination();
?>

<?php 
else :
get_template_part( 'content', 'none' );
endif;
?>

</div><!--content-->
</div><!--container-->
<?php get_footer(); ?>