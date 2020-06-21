<?php
/**
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

    global $options;
    global $copyrite;

?>
<!-- </div> -->

<?php $index_query = new WP_Query(array( 'post_type' => 'contact_section', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
<?php while ($index_query->have_posts()) : $index_query->the_post(); ?>

<footer>
    <div id="contact" class="footer-area" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/footer-bg.png);">

        <div class="container">

            <div class="row text-center">
                <div class="col">
                    <div class="about-title">
                        <h2 class="title-text"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 offset-sm-3 col-12">
                    <div class="footer-logo site-logo">
                        <?php echo $options['logo']; ?>
                        <h4><?php bloginfo('name'); ?></h4>
                        <div class="text-center">
                            <button type="button" class="custom-btn" data-toggle="modal" data-target=".hireMeModal">hire me</button>
                        </div>
                    </div>
                    <div class="social text-center">
                        <a href="<?php echo $options['linkedin']; ?>"><i class="fab fa-linkedin"></i></a>
                        <a href="<?php echo $options['facebook']; ?>"><i class="fab fa-facebook"></i></a>
                        <a href="<?php echo $options['twitter']; ?>"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo $options['quora']; ?>"><i class="fab fa-quora"></i></a>  
                        <a href="<?php echo $options['youtube']; ?>"><i class="fab fa-youtube"></i></a>
                        <a href="<?php echo $options['github']; ?>"><i class="fab fa-github"></i></a>
                    </div>
                    <div class="copyrights">
                        <p>
                           &copy; Copyright 2016-<?php the_time('Y'); ?> | All Right Reserved | By <?php bloginfo('name'); ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- Hire Me Modal -->
<div class="hireMeModal modal fade" id="hireMeModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php the_title(); ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <?php the_field('contact_shortcode'); ?>
        </div>
        
      </div>
    </div>
</div>

 <?php endwhile; wp_reset_postdata(); ?>
<!-- </div> -->

</main>

<!------------------------ CSS Library ------------------------------------>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/all.min.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/slick/slick.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/slick/slick-theme.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.fancybox.min.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css" />

<!------------------------ Javascript ------------------------------------>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.3.4.1.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/preLoader.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/slick/slick.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/isotope.pkgd.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
