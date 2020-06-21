<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<section>
	<div class="blogSearchSection">
		<div class="container">
			<div class="wrap">

				<div class="row">
					<div class="col-sm-8 col-12">
						<?php if ( have_posts() ) : ?>
						<h1 class="page-title">
							<?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?>
						</h1>
						
						<div class="blogSearch-left">
							<?php
								/* Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called loop-search.php and that will be used instead.
								 */
								get_template_part( 'loop', 'search' );
							?>
							<?php else : ?>
								<h2 class="page-title"><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
								<div class="blogSearch-left blogSearchNotFound">
									<div id="post-0" class="post no-results not-found">
										
										<div class="entry-content">
											<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
											<?php //get_search_form(); ?>
										</div><!-- .entry-content -->
									</div><!-- #post-0 -->
							<?php endif; ?>
						</div>
					</div>
					<div class="col-sm-4 col-12">
						<div class="blog-sidebar">
			  				<?php get_sidebar(); ?>
			  			</div>
					</div>
				</div>

			</div><!-- #content -->
		</div><!-- #container -->
	</div>
</section>

<?php get_footer(); ?>
