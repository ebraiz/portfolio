<?php
/**
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <title>
        <?php
        global $page, $paged;
        wp_title('|', true, 'right');
        bloginfo('name');
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page()))
            echo " | $site_description";
        if ($paged >= 2 || $page >= 2)
            echo ' | ' . sprintf(__('Page %s', 'twentyten'), max($paged, $page));
        ?>
    </title>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>

    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php
    /* We add some JavaScript to pages with the comment form
    * to support sites with threaded comments (when in use).
    */
    if (is_singular() && get_option('thread_comments'))
        wp_enqueue_script('comment-reply');
    global $options;
    global $logo;
    global $copyrite;
    $options = get_option('cOptn');
    $logo = $options['logo'];
    $favicon = $options['favicon'];
    $copyright = $options['copyright'];
    $twitter_link = $options['twitter_link'];
    $facebook_link = $options['facebook_link'];
    $googleplus_link = $options['googleplus_link'];
    $rss_link = $options['rss_link'];
    $email_link = $options['email_link'];
    $phone_num = $options['phone_num'];
    $fax_num = $options['fax_num'];
    $email = $options['email'];
    $flicker_link = $options['flicker_link'];
    $header_caption = $options['header_caption'];
    $linkedin = $options['linkedin'];
    $youtube = $options['youtube'];
    $navbartitle = $options['navbartitle'];
    $size = 334;
    $options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
    $att_img = wp_get_attachment_image($logo, array($size, $size), false);
    $logoSrc = wp_get_attachment_url($logo);
    $att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
    $sizefavicon = 32;
    $options['favicon'] = wp_get_attachment_image($favicon, array($sizefavicon, $sizefavicon), false);
    $att_img = wp_get_attachment_image($favicon, array($sizefavicon, $sizefavicon), false);
    $faviconSrc = wp_get_attachment_url($favicon);
    $att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);

    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */

    wp_head();
    ?>


</head>

<!-- <div class="clear" style="clear:both"></div> -->

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="loading-bg">
    <div class="loading-wrap">
        <!-- <?php //echo $options['logo']; ?>
        <br /> -->
        <div class="main-loader"></div>
    </div>
</div>

    <!--  ======================= Start Header Area ============================== -->

<header class="header_area" id="home">
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg custom-navbar">
            <div class="container">

                <a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                    <?php echo $options['logo']; ?> 
                    <?php echo $navbartitle; ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>

                    <?php
                        if (is_home() || is_front_page()) { 

                            wp_nav_menu( array(
                                'theme_location' => 'primary', // Defined when registering the menu
                                'menu_class'     => 'navbar-nav primary-menu',
                            ) );

                        } else { 

                            wp_nav_menu( array(
                                'theme_location' => 'blog-menu', // Defined when registering the menu
                                'menu_class'     => 'navbar-nav blog-menu',
                            ) );

                        } 
                    ?>
                    
                </div>
            </div>
        </nav>
    </div>
</header>

    <!--  ======================= End Header Area ============================== -->

<headerinner>

    <?php
    if (is_home() || is_front_page()) { ?>
    <?php } else { ?>
        <div class="inner-banner" style="background-image:url(
        <?php
        if (has_post_thumbnail()) { ?>
            <?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>
        <?php } else { ?>
            <?php bloginfo('stylesheet_directory'); ?>/images/default.jpg
        <?php } ?>)">
            <h2>
                <?php if( empty($post->post_title)){ echo "Blog"; }else{ the_title(); }  ?>
            </h2>
            <div class="blue_overlay"></div>
        </div>
    <?php } ?>

</headerinner>
            <!-- -----------------------Breadcrumb   ---------------------- -->
          <!--  <breadcrumb><?php //custom_breadcrumbs(); ?></breadcrumb> -->