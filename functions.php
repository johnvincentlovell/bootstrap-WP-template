<?php

// Link CSS files
function theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/animate.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Link JS files
function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'bootstrap_js'), '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );

// ScrollReveal.js plugin
function themeprefix_scroll_reveal() {
	wp_enqueue_script ('scrollreveal', get_stylesheet_directory_uri() . '/js/scrollReveal.js', array( 'jquery' ), '',true);
}
	add_action( 'wp_enqueue_scripts', 'themeprefix_scroll_reveal' );

//Scroll Reveal JS Fire Script
function themeprefix_scroll_reveal_fire() {
	?>
    <script>
      window.sr = new scrollReveal();
    </script>
	<?
}
add_action( 'wp_footer','themeprefix_scroll_reveal_fire', 100 );

//Scroll Reveal - Initially hide data-sr elements whilst page loads
function themeprefix_scroll_reveal_inlinecss() {
?>
	<style> 
	  [data-sr] { visibility: hidden; } 
	</style>
<?
 
}
add_action( 'wp_head','themeprefix_scroll_reveal_inlinecss' );

// ************ COMMENT THIS OUT TO DISPLAY THE WORDPRESS ADMIN BAR *************
add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

// Register Custom Navigation Walker for Bootstrap
require_once('js/wp_bootstrap_navwalker.php');

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			'products-menu' => __( 'Products Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );

// Create widgets
function create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}

// create_widget( 'Home Banner', 'home-banner', 'Displays on the home page over the full width image' );
// create_widget( 'Slogan/Video', 'slogan-video', 'Slogan / Video overlaid on the main top image' );
create_widget( 'Mission Statement', 'mission-statement', 'Mission statement text below the main image on front page' );
create_widget( 'Connected Text', 'connected-text', 'We Are Connected text under Products on front page' );
create_widget( 'About Us Text', 'aboutus-text', 'About Us text on front page' );
create_widget( 'Partners', 'partners', 'Partners section on front page' );
// create_widget( 'Pricing', 'pricing', 'Pricing section on front page' );
create_widget( 'Page Sidebar - Board Presentation', 'page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Page Sidebar - Careers', 'page-2', 'Displays on the side of pages with a sidebar' );
create_widget( 'Values', 'values', 'Values section on careers page' );
create_widget( 'Reasons', 'reasons', 'Reasons section on careers page' );
create_widget( 'Contact Sidebar - Support', 'contact', 'Displays on the contact page' );
create_widget( 'Contact Sidebar - Product Info', 'contact-2', 'Displays on the contact page' );


// ALLOW SVG UPLOAD IN WP MEDIA LIBRARY

function svg_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'svg_mime_types' ); 

// REMOVE COMMENTS FROM WP-DASH

function remove_menus(){
  
  remove_menu_page( 'edit-comments.php' );    //Comments
 
}
add_action( 'admin_menu', 'remove_menus' );

// REMOVE COMMENTS PAGE FIELDS

function remove_page_fields() {
 remove_meta_box( 'commentsdiv' , 'page' , 'normal' ); //removes comments
}
add_action( 'admin_menu' , 'remove_page_fields' );

// CUSTOM LOGIN LOGO

function custom_loginlogo() {
echo '<style type="text/css">
h1 a {
	background-image: url('.get_bloginfo('template_directory').'/img/bonzi-login-logo.png) !important;
	background-size: 250px !important;
	width: 250px !important;
}
</style>';
}
add_action('login_head', 'custom_loginlogo');

// LIMIT EXCERPT LENGTH

function custom_read_more() {
    return '... <a class="read-more" href="'.get_permalink(get_the_ID()).'">more&nbsp;&raquo;</a>';
}

function excerpt($limit) {
    return wp_trim_words(get_the_excerpt(), $limit, custom_read_more());
}

// CUSTOM BLOG PAGINATION

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span>";
      echo $paginate_links;
    echo "</nav>";
  }

}


?>