<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once $understrap_inc_dir . $file;
}

function wpb_custom_new_menu() {
	register_nav_menu('topmenu',__( 'Top Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

function add_menuclass($ulclass) {
return preg_replace('/<a/', '<a class="nav-link"', $ulclass, -1);
}
add_filter('wp_nav_menu','add_menuclass');


// Woocommerce rating stars always
    add_filter('woocommerce_product_get_rating_html', 'your_get_rating_html', 10, 2);

    function your_get_rating_html($rating_html, $rating) {
    if ( $rating > 0 ) {
        $title = sprintf( __( 'Rated %s out of 5', 'woocommerce' ), $rating );
    } else {
        $title = 'Not yet rated';
        $rating = 0;
    }

    $rating_html  = '<div class="star-rating" title="' . $title . '">';
    $rating_html .= '<span style="width:' . ( ( $rating / 5 ) * 100 ) . '%"><strong class="rating">' . $rating . '</strong> ' . __( 'out of 5', 'woocommerce' ) . '</span>';
    $rating_html .= '</div>';
    return $rating_html;
    }


 // add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

  add_action( 'woocommerce_after_single_product_summary', 'related_products', 9 );
function related_products(){
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
    //add_action('um_post_registration_approved_hook', 'um_post_registration_approved_hook_new', 10, 2);

}

add_shortcode( 'show-breadcrumb' , 'ss_show_breadcrumb');
function ss_show_breadcrumb() {
    if(function_exists('bcn_display'))
    {
        return bcn_display(true);
    }
}

add_post_type_support( 'page', 'excerpt' );
remove_filter('get_the_excerpt', 'wp_trim_excerpt');


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 8 );


function alcof_shop_display_post_meta() {

	global $product;
	
	$brand = get_field('brand');

    if ( $brand ) {
		echo '<div class="product-brand">' . $brand . '</div>';
	}

    $limit = 15;

    $description = $product->get_short_description(); // Product short description

    // Limit the words length
    if (str_word_count($description, 0) > $limit) {
        $words = str_word_count($description, 2);
        $pos = array_keys($words);
        $excerpt = substr($description, 0, $pos[$limit]) . '...';
    } else {
        $excerpt = $description;
    }

	
    if ( $description ) {
		echo '<div class="product-desc">' . $excerpt . '</div>';
	}

}
add_action( 'woocommerce_after_shop_loop_item_title', 'alcof_shop_display_post_meta', 3 );


add_action('acf/input/admin_enqueue_scripts', 'my_acf_admin_enqueue_scripts');
function my_acf_admin_enqueue_scripts($hook_suffix) {
    if($hook_suffix != 'toplevel_page_alcof-options') {
        return;
    }

    // Load your css.
    wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/admin-style.min.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );
}



function theme_gsap_script() {
    wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-scrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-scrollTo', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollToPlugin.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-custom', get_template_directory_uri() . '/js/gsap.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );



  add_action( 'um_post_registration_approved_hook', 'remove_my_action', 9 );
function remove_my_action(){
    remove_action('um_post_registration_approved_hook', 'um_post_registration_approved_hook', 10, 2);
    add_action('um_post_registration_approved_hook', 'um_post_registration_approved_hook_new', 10, 2);

}




add_filter('get_comment_author', 'my_comment_author', 10, 1);
function my_comment_author( $author = '' ) {
// Get the comment ID from WP_Query
$comment = get_comment( $comment_ID );
if (!empty($comment->comment_author) ) {
if($comment->user_id > 0){
$user=get_userdata($comment->user_id);
$author=$user->first_name.' '.substr($user->last_name,0,1).'.'; // this is the actual line you want to change
} else {
$author = __('Anonymous');
}
} else {
$author = $comment->comment_author;
}
return $author;
}

/**
 * ACF Options Page 
 *
 */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Options Alcof',
		'menu_title'	=> 'Options Alcof',
		'menu_slug' 	=> 'alcof-options',
		'capability'	=> 'edit_posts',
        'icon_url'      => 'dashicons-store',
        'update_button' => 'Mettre à jour',
        'updated_message' => 'Options enregistrées',
        'position'      => 61.1,
        
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Page d\'accueil',
		'menu_title'	=> 'Page d\'accueil',
		'parent_slug'	=> 'alcof-options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Page des services',
		'menu_title'	=> 'Page des services',
		'parent_slug'	=> 'alcof-options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Page de groupe',
		'menu_title'	=> 'Page de groupe',
		'parent_slug'	=> 'alcof-options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Réalisations',
		'menu_title'	=> 'Réalisations',
		'parent_slug'	=> 'alcof-options',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Accueil Modal',
		'menu_title'	=> 'Accueil Modal',
		'parent_slug'	=> 'alcof-options',
	));
	
	
}

