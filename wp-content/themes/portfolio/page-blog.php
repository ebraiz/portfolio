<?php
    /**
     Template Name: Blog
     */
    
    get_header(); ?>

<section>
  <div class="blog-area">
    <div class="container">

      <div class="row">

        <?php

         global $post;
         $args = array( 'posts_per_page' => -1, 'post_type'=> 'post');
         $myposts = get_posts( $args );
         foreach( $myposts as $post ) : setup_postdata($post); ?>
          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="blog-box wow fadeInUp" data-wow-duration="2s" >
              <?php //the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
              <img src="<?php the_field('small_banner_image'); ?>" class="img-fluid" />
              <div class="blog-box-content">
                <p><?php the_time('m d, Y'); ?></p>
                <p><?php the_title(); ?></p>
                <?php the_excerpt(); ?> 
                <a href="<?php the_permalink(); ?>" class="custom-btn2">Details </a>
              </div>
            </div>
          </div>

        <?php endforeach; wp_reset_query();?>
        
      </div>
      
    </div>
  </div>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>