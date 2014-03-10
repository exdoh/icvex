<?php 
/*
Template Name: Home
*/
get_header(); ?>
<div class="container">
	<div id="content" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div id="wrap">
		      
		      <div id="main-container" class="row">
		        <div class="small-12 medium-12 large-12 columns"> 
		          <!-- end-header -->

		          <!-- content -->
		          <div class="row">
		            <div class="small-12 medium-12 large-12 about-logo">
		              <?php echo get_the_post_thumbnail(); ?> 
		            </div>
		          </div>
		          <div class="row">
		            <div class="small-12 medium-11 large-10 small-centered columns">
		              <div class="about-detail">
		                <?php the_content();?>
		              </div>
		            </div>
		          </div>
		            
		        </div>
		        <?php wp_link_pages( array( 'before' => '<div class="page-links">Pages:', 'after' => '</div>' ) ); ?>
		        <!-- end-content -->
		      </div>

		      <div id="push-footer"></div>
		    </div>
			<?php edit_post_link( 'Edit', '<p class="edit-link">', '</p>' ); ?>
		</article>
	<?php endwhile; ?>

	</div><!--content-->
</div><!--container-->




<?php get_footer(); ?>