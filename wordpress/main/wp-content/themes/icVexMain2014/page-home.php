<?php 
/*
Template Name: Home
*/
get_header(); ?>
<div class="container">
<div id="content" role="main">

<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">Pages:', 'after' => '</div>' ) ); ?>
	</div><!--entry-->
	<?php edit_post_link( 'Edit', '<p class="edit-link">', '</p>' ); ?>
	</article>
<?php endwhile; ?>

</div><!--content-->
</div><!--container-->


<section id="section-a">
<div class="container">

<?php 
	$args = array(
		'posts_per_page' => 3,
		'category_name' => 'news'
	);
	$the_query = new WP_Query( $args );
	while ( $the_query->have_posts() ) : $the_query->the_post(); 
		locate_template( 'content.php' , true); 
	endwhile; 
	wp_reset_postdata(); 
?>

</div><!--container-->
</section>

<?php get_footer(); ?>