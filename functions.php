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
'thumbnail'=>true,
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

 
function modify_footer() {
    echo 'Created by <a href="mailto:ajlanisenda53@gmail.com">Senda</a>.';
}
add_filter( 'admin_footer_text', 'modify_footer' );



function create_post_Home(){
 register_post_type('Home',
 array(
 'labels'=>array(
 'name'=>__('Home'),
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
 register_taxonomy_for_object_type('category','Home');
 register_taxonomy_for_object_type('post_tag','Home');
}
add_action('init','create_post_Home'); 





















// creat Livre meta box
function add_your_fields_meta_box(){
add_meta_box(
'your_fields_meta_box',// $id
'Auteur',// $title
'show_your_fields_meta_box',// $callback
'Livre',// $screen
'normal',// $context
'high'// $priority
);
}
add_action('add_meta_boxes','add_your_fields_meta_box');


/*
show_your_fields_meta_box 
*/
function show_your_fields_meta_box(){
    global $post;
    $meta=get_post_meta($post->ID , 'fields' , true); ?>
    <input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce(basename(_FILE_) ); ?>">

    <p>
        <label for="fields[text]">Auteur</label>
        <br>
        <input type="text" name="fields[text]" id="fields[text]" class="regular-text"
        value="<?php if (is_array($meta) && isset($meta['text'])) { echo $meta['text']; } ?>">
    </p>


<?php
    /*
  
    */
    $meta=get_post_meta($post->ID , 'Maison d’édition' , true); ?>
    <input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce(basename(_FILE_) ); ?>">
    
    <p>
        <label for="Maison d’édition[text]">Maison d’édition</label>
        <br>
        <input type="text" name="Maison d’édition[text]" id="Maison d’édition[text]" class="regular-text"
        value="<?php if (is_array($meta) && isset($meta['text'])) { echo $meta['text']; } ?>">
    </p>

    <?php
    /*
    
    */
    $meta=get_post_meta($post->ID , 'Date d’édition' , true); ?>
    <input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce(basename(_FILE_) ); ?>">
    
    <p>
        <label for="Date d’édition[text]">Date d’édition</label>
        <br>
        <input type="text" name="Date d’édition[text]" id="Date d’édition[text]" class="regular-text"
        value="<?php if (is_array($meta) && isset($meta['text'])) { echo $meta['text']; } ?>">
    </p>
    <?php
}



?>
