<?php
/*---------------------------------------------- Custom Post type Home Section------------------------------------*/
add_action('init', 'home_section');
function home_section()
{
    $labels = array(
        'name' => _x('Home Section', 'post type general name'),
        'singular_name' => _x('home_section', 'post type singular name'),
        'add_new' => _x('Add New', 'Home Section'),
        'add_new_item' => __('Add New Home Section'),
        'edit_item' => __('Edit Home Section'),
        'new_item' => __('New Home Section'),
        'view_item' => __('View Home Section'),
        'search_items' => __('Search home_section'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/services.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail', 'editor')
    );
    register_post_type('home_section', $args);
}

/*---------------------------------------------- Custom Post type About Section------------------------------------*/
add_action('init', 'about_section');
function about_section()
{
    $labels = array(
        'name' => _x('About Section', 'post type general name'),
        'singular_name' => _x('about_section', 'post type singular name'),
        'add_new' => _x('Add New', 'About Section'),
        'add_new_item' => __('Add New About Section'),
        'edit_item' => __('Edit About Section'),
        'new_item' => __('New About Section'),
        'view_item' => __('View About Section'),
        'search_items' => __('Search about_section'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/services.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail', 'editor')
    );
    register_post_type('about_section', $args);
}

/*---------------------------------------------- Custom Post type Skills Section------------------------------------*/
add_action('init', 'skills_section');
function skills_section()
{
    $labels = array(
        'name' => _x('Skills Section', 'post type general name'),
        'singular_name' => _x('skills_section', 'post type singular name'),
        'add_new' => _x('Add New', 'Skills Section'),
        'add_new_item' => __('Add New Skills Section'),
        'edit_item' => __('Edit Skills Section'),
        'new_item' => __('New Skills Section'),
        'view_item' => __('View Skills Section'),
        'search_items' => __('Search skills_section'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/services.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail', 'editor')
    );
    register_post_type('skills_section', $args);
}

/*---------------------------------------------- Custom Post type Experience Section------------------------------------*/
add_action('init', 'experience_section');
function experience_section()
{
    $labels = array(
        'name' => _x('Experience Section', 'post type general name'),
        'singular_name' => _x('experience_section', 'post type singular name'),
        'add_new' => _x('Add New', 'Experience Section'),
        'add_new_item' => __('Add New Experience Section'),
        'edit_item' => __('Edit Experience Section'),
        'new_item' => __('New Experience Section'),
        'view_item' => __('View Experience Section'),
        'search_items' => __('Search experience_section'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/services.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail', 'editor')
    );
    register_post_type('experience_section', $args);
}

/*---------------------------------------------- Custom Post type Project Section------------------------------------*/
add_action('init', 'project_section');
function project_section()
{
    $labels = array(
        'name' => _x('Project Section', 'post type general name'),
        'singular_name' => _x('project_section', 'post type singular name'),
        'add_new' => _x('Add New', 'Project Section'),
        'add_new_item' => __('Add New Project Section'),
        'edit_item' => __('Edit Project Section'),
        'new_item' => __('New Project Section'),
        'view_item' => __('View Project Section'),
        'search_items' => __('Search project_section'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/services.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail', 'editor')
    );
    register_post_type('project_section', $args);
}

/*---------------------------------------------- Custom Post type Education Section------------------------------------*/
add_action('init', 'education_section');
function education_section()
{
    $labels = array(
        'name' => _x('Education Section', 'post type general name'),
        'singular_name' => _x('education_section', 'post type singular name'),
        'add_new' => _x('Add New', 'Education Section'),
        'add_new_item' => __('Add New Education Section'),
        'edit_item' => __('Edit Education Section'),
        'new_item' => __('New Education Section'),
        'view_item' => __('View Education Section'),
        'search_items' => __('Search education_section'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/services.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail', 'editor')
    );
    register_post_type('education_section', $args);
}


/*---------------------------------------------- Custom Post type Seminar Section------------------------------------*/
add_action('init', 'seminar_section');
function seminar_section()
{
    $labels = array(
        'name' => _x('Seminar Section', 'post type general name'),
        'singular_name' => _x('seminar_section', 'post type singular name'),
        'add_new' => _x('Add New', 'Seminar Section'),
        'add_new_item' => __('Add New Seminar Section'),
        'edit_item' => __('Edit Seminar Section'),
        'new_item' => __('New Seminar Section'),
        'view_item' => __('View Seminar Section'),
        'search_items' => __('Search seminar_section'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/services.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail', 'editor')
    );
    register_post_type('seminar_section', $args);
}

/*---------------------------------------------- Custom Post type Contact Section------------------------------------*/
add_action('init', 'contact_section');
function contact_section()
{
    $labels = array(
        'name' => _x('Contact Section', 'post type general name'),
        'singular_name' => _x('contact_section', 'post type singular name'),
        'add_new' => _x('Add New', 'Contact Section'),
        'add_new_item' => __('Add New Contact Section'),
        'edit_item' => __('Edit Contact Section'),
        'new_item' => __('New Contact Section'),
        'view_item' => __('View Contact Section'),
        'search_items' => __('Search contact_section'),
        'not_found' => __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/services.png',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail', 'editor')
    );
    register_post_type('contact_section', $args);
}