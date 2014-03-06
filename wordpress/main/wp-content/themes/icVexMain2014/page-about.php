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
		<div class="row">
			<div id="about-image">
				<?php echo get_the_post_thumbnail(); ?> 
			</div>
		</div>
		<div class="row">
			<div id="about-detail">
				<?php the_content(); ?>
			</div>
		</div>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">Pages:', 'after' => '</div>' ) ); ?>
	</div><!--entry-->
	<?php edit_post_link( 'Edit', '<p class="edit-link">', '</p>' ); ?>
	</article>
<?php endwhile; ?>

</div><!--content-->
</div><!--container-->




<?php get_footer(); ?>