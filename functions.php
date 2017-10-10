<?php // custom functions.php template @ digwp.com

function iniciarTema(){
    // ACTIVA IMAGENES DESTACADAS  
    add_theme_support( 'post-thumbnails' );
    add_image_size('preview_programacion', 400, 289, true);
    add_image_size('preview_galerias', 650, 650, true);
/*     add_image_size('galeria', 200); */

    // Activar Titulo 
    add_theme_support( 'title-tag' );
    register_nav_menu( 'primary', __( 'Menú Principal', 'menu_principal' ) );
  }
  // Cuando ocurra 'after_setup_theme, invocar "iniciarTema"
  add_action( 'after_setup_theme', 'iniciarTema' );


add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

add_filter( 'wp_calculate_image_srcset', '__return_false' );
	
// carga css 
function theme_styles() {
	wp_enqueue_style('style-boot', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1', 'screen' );
	wp_enqueue_style('style-fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), '1', 'screen' );
	wp_enqueue_style('style-fawe', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1', 'screen' );
	wp_enqueue_style('style-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1', 'screen' );
	wp_enqueue_style('style-hover', get_template_directory_uri() . '/assets/css/hover-min.css', array(), '1', 'screen' );
	wp_enqueue_style('style-owl', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1', 'screen' );
	wp_enqueue_style('style-owltheme', get_template_directory_uri() . '/assets/css/owl.theme.default.css', array(), '1', 'screen' );
	wp_enqueue_style('style-bootsel', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css', array(), '1', 'screen' );
	wp_enqueue_style('style-jqui', 'https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css', array(), '1', 'screen' );
	wp_enqueue_style('style-jasny', 'https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css', array(), '1', 'screen' );
	wp_enqueue_style('style-valio', get_template_directory_uri() . '/assets/css/formValidation.min.css', array(), '1', 'screen' );
	wp_enqueue_style('style-dp', get_template_directory_uri() . '/assets/css/datepicker.min.css', array(), '1.2', 'screen' );
	wp_enqueue_style('style-aco', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.2.9', 'screen' );

}


// carga js
function jquery_cdn() {
   if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', true, '2.2.4'); 
        wp_enqueue_script('jquery');
   }
}


function theme_js(){

	wp_enqueue_script('jquerymin-js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array('jquery'),'1', true);
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'),'1', true);
	wp_enqueue_script('owlcarous-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'),'1', true);
	wp_enqueue_script('bootselec-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js', array('jquery'),'1', true);
	wp_enqueue_script('youtube-js', 'https://www.youtube.com/player_api', array('jquery'),'1', true);
	wp_enqueue_script('scrollto-js', 'https://cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js', array('jquery'),'1', true);
	wp_enqueue_script('autocompl-js', get_template_directory_uri() . '/assets/js/jquery.autocomplete.min.js', array('jquery'),'1', true);
	wp_enqueue_script('formvalio-js', get_template_directory_uri() . '/assets/js/formValidation.min.js', array('jquery'),'1', true);
	wp_enqueue_script('valiolang-js', get_template_directory_uri() . '/assets/js/language/es_ES.js', array('jquery'),'1', true);
	wp_enqueue_script('valioboot-js', get_template_directory_uri() . '/assets/js/framework/bootstrap.min.js', array('jquery'),'1', true);
	wp_enqueue_script('jasny-js', 'https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js', array('jquery'),'1', true);
	wp_enqueue_script('datepicker-js', get_template_directory_uri() . '/assets/js/datepicker.min.js', array('jquery'),'1', true);
	wp_enqueue_script('datepicker-es', get_template_directory_uri() . '/assets/js/datepicker.es-ES.js', array('jquery'),'1', true);
	wp_enqueue_script('bigtext-js', get_template_directory_uri() . '/assets/js/bigtext.js', array('jquery'),'1.7', true);
	wp_enqueue_script('cookie-js', get_template_directory_uri() . '/assets/js/js.cookie.js', array('jquery'),'1.8.7', true);
	wp_enqueue_script('pak-js', get_template_directory_uri() . '/assets/js/pak.js', array('jquery'),'1.8.7', true);

}	
  add_action('wp_enqueue_scripts', 'theme_styles');
  add_action('init', 'jquery_cdn');
  add_action('wp_enqueue_scripts', 'theme_js');


remove_action('welcome_panel', 'wp_welcome_panel');

// add feed links to header
if (function_exists('automatic_feed_links')) {
	automatic_feed_links();
} else {
	return;
}


// enable threaded comments
function enable_threaded_comments(){
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
			wp_enqueue_script('comment-reply');
		}
}
add_action('get_header', 'enable_threaded_comments');


// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


// add google analytics to footer
function add_google_analytics() {
	echo '<script type="text/javascript">';
	echo 'var _gaq = _gaq || [];';
	echo '_gaq.push( ["_setAccount", "UA-98657-9"], ["_trackPageview"], ["b._setAccount", "UA-17441117-37"], ["b._trackPageview"] );';
	echo '(function() {';
	echo 'var ga = document.createElement("script");';
	echo 'ga.type = "text/javascript"; ';
	echo 'ga.async = true; ';
	echo 'ga.src = ("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";';
	echo 'var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ga, s);';
	echo '})();';
	echo '</script>';	
}
add_action('wp_footer', 'add_google_analytics');


// custom excerpt length
function custom_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');


// custom excerpt ellipses for 2.9+
function custom_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

/* custom excerpt ellipses for 2.8-
function custom_excerpt_more($excerpt) {
	return str_replace('[...]', '...', $excerpt);
}
add_filter('wp_trim_excerpt', 'custom_excerpt_more'); 
*/


// no more jumping for read more link
function no_more_jumping($post) {
	return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading'.'</a>';
}
add_filter('excerpt_more', 'no_more_jumping');


// add a favicon to your 
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');


// add a favicon for your admin
function admin_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.png" />';
}
add_action('admin_head', 'admin_favicon');


// custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/custom-login-logo.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');


// disable all widget areas
function disable_all_widgets($sidebars_widgets) {
	//if (is_home())
		$sidebars_widgets = array(false);
	return $sidebars_widgets;
}
add_filter('sidebars_widgets', 'disable_all_widgets');


// kill the admin nag
if (!current_user_can('edit_users')) {
	add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
	add_filter('pre_option_update_core', create_function('$a', "return null;"));
}


// category id in body and post class
function category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
		$classes [] = 'cat-' . $category->cat_ID . '-id';
		return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');


// get the first category id
function get_first_category_ID() {
	$category = get_the_category();
	return $category[0]->cat_ID;
}

// disable all feeds
function fb_disable_feed() {
	wp_die(__('<h1>Feed not available, please visit our <a href="'.get_bloginfo('url').'">Home Page</a>!</h1>'));
}
add_action('do_feed',      'fb_disable_feed', 1);
add_action('do_feed_rdf',  'fb_disable_feed', 1);
add_action('do_feed_rss',  'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1);

// remove version info from head and feeds
function complete_version_removal() {
	return '';
}
add_filter('the_generator', 'complete_version_removal');

// customize admin footer text
function custom_admin_footer() {
	echo '<a href="http://example.com/">Website Design by Awesome Example</a>';
} 
add_filter('admin_footer_text', 'custom_admin_footer');

// admin link for all settings
function all_settings_link() {
	add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
}
add_action('admin_menu', 'all_settings_link');

function oddeven_post_class ( $classes ) {
   global $current_class;
   $classes[] = $current_class;
   $current_class = ($current_class == 'odd') ? 'even' : 'odd';
   return $classes;
}
add_filter ( 'post_class' , 'oddeven_post_class' );
global $current_class;
$current_class = 'odd';

function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);


function muestra_galeria($post_id = false, $exclude = true, $cantidad = -1) {
		global $post;
		if (!$post_id){
			$post_id = $post->ID;
		}
		$args = array( 'post_type' => 'attachment', 'numberposts' => $cantidad, 'post_status' => null, 'post_parent' => $post_id, 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC'); 
		if ($exclude){
			$args = array_merge( $args, array( 'post__not_in' => array( get_post_thumbnail_id(), $imagen_chica ) ) );
		}
		$attachments = get_posts($args);
		return $attachments;
	}
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function icl_post_languages(){
  $languages = icl_get_languages('skip_missing=1');
    
  if(1 < count($languages)){
    foreach($languages as $l){
      if(!$l['active']) $langs[] = '<li><a href="'.$l['url'].'" class="hvr-float"><img src="'.get_template_directory_uri().'/assets/img/'.$l['language_code'].'.png" style="width: 30px;"></a></li>';
    }
    echo join('', $langs);
    }
}

function icl_post_languages_mobile(){
  $languages = icl_get_languages('skip_missing=1');
    
  if(1 < count($languages)){
    foreach($languages as $l){
	    if($l['language_code']=='es'){
		    $idioma = 'ESP';
	    }elseif($l['language_code']=='en'){
		    $idioma = 'ENG';
		}else{
		    $idioma = 'POR';
	    }
      if($l['active']) $langs[] = '<option selected value="'.$l['url'].'">'.$idioma.'</option>';
      if(!$l['active']) $langs[] = '<option value="'.$l['url'].'">'.$idioma.'</option>';
    }
    echo join('', $langs);
    }
}


/**
* add external link to Tools area
*/
add_action('admin_menu', 'example_admin_menu');
function example_admin_menu() {
    global $submenu;
    $url = get_site_url().'/admin';
    $submenu['index.php'][] = array('Formularios', 'manage_options', $url);
}

function quitatodo($string){
	$colA = str_replace(' ', '', $string);
	$colA = str_replace('_', '', $colA);
	$colA = str_replace('-', '', $colA);
	$colA = str_replace('/', '', $colA);
	$colA = str_replace(')', '', $colA);
	$colA = str_replace('(', '', $colA);
	$colA = str_replace('&ntilde;', 'n', $colA);
	$colA = str_replace('&ouml;', 'o', $colA);
	$colA = str_replace('ö', 'o', $colA);
	$colA = str_replace('ñ', 'n', $colA);
	$colA = str_replace('Í', 'i', $colA);
	$colA = str_replace('Ü', 'u', $colA);
	$colA = str_replace('%', 'porc', $colA);
	$colA = str_replace('&', 'porc', $colA);
	$colA = str_replace("'", '', $colA);
	$colA = strtolower($colA);
	return $colA;
}

function is_url_exist($url){
    $ch = curl_init($url);    
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if($code == 200){
       $status = true;
    }else{
      $status = false;
    }
    curl_close($ch);
   return $status;
}


?>