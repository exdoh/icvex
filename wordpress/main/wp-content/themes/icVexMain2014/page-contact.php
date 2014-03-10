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

		          

		   
		      </div>

		      <?php 
		        
				$args = array(
					'posts_per_page' => 3,
					'category_name' => 'Contact Us'
				);
				$the_query = new WP_Query( $args );
				print_r($the_query);
				while ( $the_query->have_posts() ) : $the_query->the_post(); 
					locate_template( 'content.php' , true , false); 
				endwhile;
				
				wp_reset_postdata(); 
			?>

		      <div id="push-footer"></div>
		    </div>
			<?php edit_post_link( 'Edit', '<p class="edit-link">', '</p>' ); ?>
		</article>
	<?php endwhile; ?>

	</div><!--content-->
</div><!--container-->




<?php get_footer(); ?>