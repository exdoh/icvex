<?php get_header(); ?>

<div class="container">
<div id="content" role="main">

<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('page-single'); ?>>
	<header>
		<h1 class="title"><a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header>
	<div class="entry">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">Pages:', 'after' => '</div>' ) ); ?>
	</div><!--page-content-->
	<?php edit_post_link( 'Edit', '<p class="edit-link">', '</p>' ); ?>
</article>
<?php endwhile; ?>

</div><!--content-->
</div><!--container-->

<?php get_footer(); ?>