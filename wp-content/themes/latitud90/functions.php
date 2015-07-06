<?php if ( function_exists('add_theme_support') ) {
add_theme_support('post-thumbnails');
add_image_size('head', 1920, 800, true );
add_image_size('col-6', 960, 920, true );
//add_image_size('col-6-half', 960, (920/3)*2, true );
add_image_size('col-6-half', 960, ((653+18)/3)*2, true );
add_image_size('col-6-third', 960, ((653+18)/3)*1, true );
add_image_size('col-7', (1920/12)*7, (920/4)*3, true );
//add_image_size('col-4', 640, 612, true );
add_image_size('col-4', 640, 445, true );
add_image_size('col-4-large', 640, 1080, true );
add_image_size('col-3-large', (1920/12)*3 , 1080, true );
add_image_size('mini', (1920/12)*1, (920/8)*1, true );
add_image_size('mini-b', (1920/12)*2, (920/8)*2, true );
add_image_size('persona', 450, 450, true );
}
/* 
add_filter('image_size_names_choose', 'my_image_sizes');
	function my_image_sizes($sizes) {
	$addsizes = array(
		"col-6" => 'Media columna'
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}
*/
add_post_type_support('page', 'excerpt');
;?>
<?php 
/* Add support for wp_nav_menu() */
function register_my_menu() {
	register_nav_menu( 'primary', 'Menú principal');
	register_nav_menu( 'secondary', 'Menú footer');
}
add_action( 'init', 'register_my_menu' );
?>
<?php 
function call_scripts() {
	wp_deregister_script('jquery');
	//wp_register_script('jquery', 'http://code.jquery.com/jquery-1.10.0.min.js');
    //wp_register_script('core', get_template_directory_uri() . '/js/core.js');

    wp_enqueue_script('jquery' , 'http://code.jquery.com/jquery-1.10.0.min.js' , array() , '1.10' , true);
    wp_enqueue_script('core' , get_template_directory_uri() . '/js/core.js' , array() , '1.0' , true);
}    
 
add_action('wp_enqueue_scripts', 'call_scripts');
?>
<?php
//Post type register

add_action('init', 'viajes_de_estudio_register');
function viajes_de_estudio_register() {
    $args = array(
        'label' => 'Viajes de estudio',
        'singular_label' => 'Viaje',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'viajes-de-estudio'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('viajes-de-estudio', $args);
    flush_rewrite_rules();
}


register_taxonomy("destino", array('viajes-de-estudio'), array("hierarchical" => true, "label" => "Destinos", "singular_label" => "Destino", "rewrite" => true));

add_action('init', 'clientes_register');
function clientes_register() {
    $args = array(
        'label' => 'Clientes',
        'singular_label' => 'Cliente',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'clientes'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('clientes', $args);
    flush_rewrite_rules();
}

/* add_action('init', 'testimonios_register');
function testimonios_register() {
    $args = array(
        'label' => 'Testimonios',
        'singular_label' => 'Testimonio',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'testimonios'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('testimonios', $args);
    flush_rewrite_rules();
} */

//register_taxonomy("areas", array('testimonios'), array("hierarchical" => true, "label" => "Areas", "singular_label" => "Area", "rewrite" => true));

add_action('init', 'personas_register');
function personas_register() {
    $args = array(
        'label' => 'Personas',
        'singular_label' => 'Persona',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'somos/personas'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('personas', $args);
    flush_rewrite_rules();
}

//register_taxonomy("area", array('personas'), array("hierarchical" => true, "label" => "Áreas", "singular_label" => "Área", "rewrite" => true));
register_taxonomy("equipo", array('personas'), array("hierarchical" => true, "label" => "Equipos", "singular_label" => "Equipo", "rewrite" => true));

?>

<?php //register sidebars

/* register_sidebar(array(
  'name' => __( 'Home' ),
  'id' => 'home',
  'description' => __( 'Widgets en esta área se mostrarán en el home, utlice esta área para agregar la mini encuesta' ),
  'before_title' => '<h3>',
  'after_title' => '</h3>'
)); */


//add_filter('widget_text', 'do_shortcode');

?>
<?php 
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/logo.png) !important; }
    </style>';
}
add_action('login_head', 'my_custom_login_logo');?>
<?php 
function SuperAdmin() {
	echo '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">';
	//echo '<link href="'.get_bloginfo('template_directory').'/admin/bootstrap.css" rel="stylesheet">';
	echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,800,400' rel='stylesheet' type='text/css'>";
	echo '<style type="text/css">
	body{ font-family: Open sans, helvetica neue, helvetica, arial , sans-serif}
	.wp-admin #adminmenu, .wp-admin #adminmenuback, .wp-admin #adminmenuwrap{ background-color:#436891 !important}
	#adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu{background-color:#355272 !important}
	.wp-core-ui .button-primary{background-color:#355272 !important}
	</style>';
}
add_action('admin_head', 'SuperAdmin');
?>
<?php 

function get_type_for_attachment($post_id) {
  $type = get_post_mime_type($post_id);
  switch ($type) {
    case 'image/jpeg':
    case 'image/png':
    case 'image/gif':
      return 'img'; break;
    case 'video/mpeg':
    case 'video/mp4': 
    case 'video/quicktime':
      return 'Vid'; break;
    case 'text/csv':
    case 'text/plain': 
    case 'text/xml':
      return 'Doc'; break;
	case 'application/pdf':
		return 'PDF'; break;
	case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
	case 'application/msword':
		return '.Doc'; break;
	case 'application/vnd.ms-excel':
	case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
		return '.Xls'; break;
	case 'application/vnd.ms-powerpoint' :
	case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
		return 'Ppt'; break;
    default:
      return 'file';
  }
}
// call it like this:
//echo '<img src="'.get_icon_for_attachment($my_attachment->ID).'" />';

function get_icon_for_attachment($post_id) {
  $type = get_post_mime_type($post_id);
  switch ($type) {
    case 'image/jpeg':
    case 'image/png':
    case 'image/gif':
      return 'fa-file-image-o'; break;
    case 'video/mpeg':
    case 'video/mp4': 
    case 'video/quicktime':
      return 'fa-file-video-o'; break;
    case 'text/csv':
    case 'text/plain': 
    case 'text/xml':
      return 'fa-file-text-o'; break;
	case 'application/pdf':
		return 'fa-file-pdf-o'; break;
	case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
	case 'application/msword':
		return 'fa-file-word-o'; break;
	case 'application/vnd.ms-excel':
	case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
		return 'fa-file-excel-o'; break;
	case 'application/vnd.ms-powerpoint' :
	case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
		return 'fa-file-powerpoint-o'; break;
    default:
      return 'fa-file-o';
  }
}
// call it like this:
//echo '<img src="'.get_icon_for_attachment($my_attachment->ID).'" />';



?>
<?php //include_once( rtrim( dirname( __FILE__ ), '/' ) . '/acf-taxonomy-field/taxonomy-field.php' );?>
<?php 
/* add_action( 'pre_get_posts', 'rc_modify_query_limit_posts' );
function rc_modify_query_limit_posts( $query ) {
	if(! is_admin() && $query->is_post_type_archive()){
		$query->set('posts_per_page', '7');
	}
	elseif(! is_admin() && $query->is_main_query() && $query->is_post_type_archive() ){
		$query->set('posts_per_page', '2');
	}
	elseif( ! is_admin() && $query->is_main_query() ) {
		$query->set('posts_per_page', '10');
	}
} */

add_filter('pre_get_posts', 'Per_category_basis');
function Per_category_basis($query){
    if (! is_admin() && $query->is_archive) {
        // category named 'books' show 12 posts
        if (is_archive('personas')){
            $query->set('posts_per_page', -1);
        }
        
    }
    return $query;
}

?>
<?php 
/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
?>
<?php 
add_filter( 'jpeg_quality', create_function( '', 'return 75;' ) );
?>