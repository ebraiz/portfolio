<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<section>
	<div class="blogSection">
		<div class="container">
		  <div class="wrap">
		  	<div class="row">
		  		<div class="col-sm-8 col-12">
		  			<div class="blog-left">
						<?php
							/* Run the loop to output the post.
							 * If you want to overload this in a child theme then include a file
							 * called loop-single.php and that will be used instead.
							 */
							get_template_part( 'loop', 'single' );
						?>
		  			</div>
		  		</div>
		  		<div class="col-sm-4 col-12">
		  			<div class="blog-sidebar">
		  				<?php get_sidebar(); ?>
		  			</div>
		  		</div>
		  	</div>
		  </div>
		  <!-- #content --> 
		</div>
	<!-- #container -->
	</div>
</section>
<?php get_footer(); ?>
