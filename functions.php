<?php 
// resgister default navigation
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main_menu' => __( 'Main Menu', 'forty-nine-menu' ),
		  'footer_menu_left' => __( 'Footer Menu Left', 'forty-nine-menu' ),
		  'footer_menu_right' => __( 'Footer Menu Right', 'forty-nine-menu' ),
		)
	);
}
// register default sidebars
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name' => 'Tools Sidebar',
		'id' => 'tools-sidebar',
		'description'   => '',
        'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget full-width %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="list-banner brand-grey-bg brand-white"> <strong>',
		'after_title'   => '</strong> </div>'
	));
}
// add more link to excerpts
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 25);
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
// add TinyMCE editor support
add_editor_style();
// post feauted image support
add_theme_support( 'post-thumbnails' );
// Adds RSS feed links to for posts and comments.
add_theme_support( 'automatic-feed-links' );
add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup(){
    load_theme_textdomain('my_theme', get_template_directory() . '/languages');
}
// default pagination
function cake_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>" class="content_nav clearfix">
			<ul>
				<li class="nextPost"><?php previous_posts_link( __( '← newer ', 'cake' ) ); ?></li>
				<li class="prevPost"><?php next_posts_link( __( 'older →', 'cake' ) ); ?></li>
			</ul>					
		</nav>
	<?php endif;
}
// google analytics
add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() {
// Paste your Google Analytics code from Step 6 here
}
// custom favicon
function blog_favicon() {
echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('template_directory').'img/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');
if ( ! isset( $content_width ) )
	$content_width = 600;
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
// google fonts
function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900');
            wp_enqueue_style( 'googleFonts');
        }
 
    add_action('wp_print_styles', 'load_fonts');
// use google for jquery
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}
// register scripts
function forty_nine__scripts() {
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.css' );
	wp_enqueue_style( 'flexstyle', get_template_directory_uri() . '/css/flexslider.css');
	wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	wp_enqueue_style( 'fancybox-buttons', get_template_directory_uri() . '/css/jquery.fancybox-buttons.css?v=1.0.5' );
	wp_enqueue_style( 'easyzoom', get_template_directory_uri() . '/css/easyzoom.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/js/modernizr.js', array(), '1.0.0', true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'foundation-min', get_template_directory_uri() . '/js/foundation.min.js', array(), '', true );
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '', true );
	wp_enqueue_script( 'fancybox-btn', get_template_directory_uri() . '/js/jquery.fancybox-buttons.js?v=1.0.5', array(), '', true );
	wp_enqueue_script( 'fancybox-media', get_template_directory_uri() . '/js/jquery.fancybox-media.js?v=1.0.6', array(), '', true );
	wp_enqueue_script('myUi','https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js');
	wp_enqueue_script( 'easyzoom', get_template_directory_uri() . '/js/jquery.easyzoom-modified.js', array(), '', true);
	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'forty_nine__scripts' );
// Creating the widget 
class zgn_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'zgn_widget', 
// Widget name will appear in UI
__('ZGN Featured Posts', 'zgn_widget_domain'), 
// Widget description
array( 'description' => __( 'Custom Featured Posts Widget', 'zgn_widget_domain' ), ) 
);
}
// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
include('widgets/featured-posts.php');
echo $args['after_widget'];
}		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'Featured Posts', 'zgn_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class zgn_widget ends here
// Register and load the widget
function wpb_load_widget() {
	register_widget( 'zgn_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
?>