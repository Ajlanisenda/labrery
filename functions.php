<?php
// WordPress Titles
add_theme_support( 'title-tag' );


// Add scripts and stylesheets
function startwordpress_scripts() {
 wp_enqueue_style( 'bootstrap', get_template_directory_uri() .
'/css/bootstrap.min.css', array(), '3.3.6' );
 wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css'
);
 wp_enqueue_script( 'bootstrap', get_template_directory_uri() .
'/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );
// Removes from post and pages
function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
add_action( 'init', 'remove_comment_support', 100 );

//read more links
function custom_read_more_link() {
    return '<a href="' . get_permalink() . '">Read More</a>';
}
add_filter( 'the_content_more_link', 'custom_read_more_link' );

// Add Google Fonts
function startwordpress_google_fonts() {
wp_register_style('OpenSans',
'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
wp_enqueue_style( 'OpenSans');
}
add_action('wp_print_styles', 'startwordpress_google_fonts');
// Custom settings

  
  function register_my_menus() {
    register_nav_menus(
        array(
            'new-menu' => __( 'New Menu' ),
            'another-menu' => __( 'Another Menu' ),
            'an-extra-menu' => __( 'An Extra Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );
function custom_settings_add_menu() {
 add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options',
'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );
// Create Custom Global Settings
function custom_settings_page() { ?>
<div class="wrap">
<h1>Custom Settings</h1>
<form method="post" action="options.php">
<?php settings_fields( 'section' );
do_settings_sections( 'theme-options' );
submit_button(); ?>
</form>
</div>
<?php }
function custom_settings_page_setup() {
add_settings_section( 'section', 'All Settings', null, 'theme-options' ); 
add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'themeoptions', 'section' );
register_setting('section', 'twitter');
add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'themeoptions', 'section' );
add_settings_field( 'github', 'GitHub URL', 'setting_github', 'themeoptions', 'section' );
register_setting( 'section', 'twitter' );
register_setting( 'section', 'github' );
}
add_action( 'admin_init', 'custom_settings_page_setup' );
function setting_github() { ?>
<input type="text" name="github" id="github" value="<?php echo
get_option('github'); ?>" />
<?php }
function create_post_Livre(){
 register_post_type('Livre',
 array(
 'labels'=>array(
 'name'=>__('Livre'),
 ),
 'public'=>true,
 'hierarchical'=>true,
 'has_archive'=>true,
 'supports'=>array(
 'title',
'editor',
'excerpt',
'thumbnail',
 ),
 'taxonomies'=>array(
 'post_tag',
'category',
 )
 )
);
 register_taxonomy_for_object_type('category','Livre');
 register_taxonomy_for_object_type('post_tag','Livre');
}
add_action('init','create_post_Livre'); 
?>