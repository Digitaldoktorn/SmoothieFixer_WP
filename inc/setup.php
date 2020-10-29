<?php
/**
 * Theme basic setup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

add_action( 'after_setup_theme', 'understrap_setup' );

if ( ! function_exists ( 'understrap_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function understrap_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on understrap, use a find and replace
		 * to change 'understrap' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'understrap', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'understrap' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'gallery',
			'caption',
		) );

		/*
		 * Adding Thumbnail basic support
		 */
		add_theme_support( 'post-thumbnails' );

		/*
		 * Adding support for Widget edit icons in customizer
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'understrap_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Set up the WordPress Theme logo feature.
		add_theme_support( 'custom-logo' );
		
		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Check and setup theme default settings.
		understrap_setup_theme_default_settings();

	}
}


add_filter( 'excerpt_more', 'understrap_custom_excerpt_more' );

if ( ! function_exists( 'understrap_custom_excerpt_more' ) ) {
	/**
	 * Removes the ... from the excerpt read more link
	 *
	 * @param string $more The excerpt.
	 *
	 * @return string
	 */
	function understrap_custom_excerpt_more( $more ) {
		if ( ! is_admin() ) {
			$more = '';
		}
		return $more;
	}
}

add_filter( 'wp_trim_excerpt', 'understrap_all_excerpts_get_more_link' );

if ( ! function_exists( 'understrap_all_excerpts_get_more_link' ) ) {
	/**
	 * Adds a custom read more link to all excerpts, manually or automatically generated
	 *
	 * @param string $post_excerpt Posts's excerpt.
	 *
	 * @return string
	 */
	function understrap_all_excerpts_get_more_link( $post_excerpt ) {
		if ( ! is_admin() ) {
			$post_excerpt = $post_excerpt . ' [...] <a class="btn btn-sm btn-info float-right understrap-read-more-link" href="' . esc_url( get_permalink( get_the_ID() ) ) . '">' . __( 'Read More...',
			'understrap' ) . '</a>';
		}
		return $post_excerpt;
	}
}


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Redirect subscriber accounts out of admin and onto homepage
add_action( 'admin_init', 'redirectSubsToFrontend');

function redirectSubsToFrontend() {
	$ourCurrentUser = wp_get_current_user();
	if(count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber')   {
		wp_redirect( site_url('/'));
		exit;
	}
}


add_action( 'wp_loaded', 'noSubsAdminBar');

function noSubsAdminBar() {
	$ourCurrentUser = wp_get_current_user();
	if(count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber')   {
		show_admin_bar(false);
	}
}

// Customize Login Screen
add_filter('login_headerurl', 'ourHeaderUrl');

function ourHeaderUrl() {
	return esc_url(site_url('/'));
}

add_action('login_enqueue_scripts', 'ourLoginCSS');

function ourLoginCSS() {
	wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array() );
}

add_filter('login_headertext', 'ourLoginTitle');

function ourLoginTitle() {
	return get_bloginfo('name');
}

// Remove tags support from posts
// function smoothietheme_unregister_tags() {
//     unregister_taxonomy_for_object_type('post_tag', 'post');
// }
// add_action('init', 'smoothietheme_unregister_tags');

// se Alecadd tutorial: https://www.youtube.com/watch?v=KPy8a5bHGuo
function smoothie_custom_taxonomies() {

	// hierarchical taxonomy
	$labels = [
		'name' => 'Smoothie-kategorier',
		'singular_name' => 'Smoothie-kategori',
		'search_items' => 'Sök Smoothie-kategorier',
		'all_items' => 'Alla Smoothie-kategorier',
		'edit_item' => 'Redigera Smoothie-kategori',
		'update_item' => 'Uppdatera Smoothie-kategori',
		'add_new_item' => 'Lägg till Smoothie-kategori',
		'new_item_name' => 'Nytt Smoothie-kategori-namn',
		'menu_name' => 'Smoothie-kategorier'
	];

	$args = [
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => ['slug' => 'smoothie-kategori']
	];

	register_taxonomy('smoothie-kategori', ['recept'], $args);

	// non hierarchical taxonomy
	register_taxonomy('smoothie-etikett', ['recept'], [
		'label' => 'Smoothie-etiketter',
		'rewrite' => ['slug' => 'smoothie-etikett'],
		'hierarchical' => false
	]);


}

add_action('init', 'smoothie_custom_taxonomies');

// Custom term function
function smoothie_get_terms( $postID, $term ) {
	$terms_list = wp_get_post_terms( $postID, $term );
	$output = '';
		$i = 0;
		foreach( $terms_list as $term ){
			$i++;
			if( $i > 1) {
				$output .= ', ';
			}
			$output .= '<a href="' . get_term_link( $term ) . '">' . $term->name . '</a>';
		}

		return $output;
}

/* Add CPTs to author archives */
function custom_post_author_archive($query) {
    if ($query->is_author)
        $query->set( 'post_type', array('custom_type', 'recept') );
    remove_action( 'pre_get_posts', 'custom_post_author_archive' );
}
add_action('pre_get_posts', 'custom_post_author_archive'); 



