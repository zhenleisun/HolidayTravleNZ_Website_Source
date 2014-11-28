<?php
/*-----------------------------------------------------------------------------------*/
/* Include Theme Functions */
/*-----------------------------------------------------------------------------------*/
load_theme_textdomain('virtue', get_template_directory() . '/languages');
require_once locate_template('/themeoptions/options/virtue_extension.php'); // Options framework extension
require_once locate_template('/themeoptions/framework.php');        // Options framework
require_once locate_template('/themeoptions/options.php');     		// Options framework
require_once locate_template('/lib/utils.php');           			// Utility functions
require_once locate_template('/lib/init.php');            			// Initial theme setup and constants
require_once locate_template('/lib/sidebar.php');         			// Sidebar class
require_once locate_template('/lib/config.php');          			// Configuration
require_once locate_template('/lib/cleanup.php');        			// Cleanup
require_once locate_template('/lib/nav.php');            			// Custom nav modifications
require_once locate_template('/lib/metaboxes.php');     			// Custom metaboxes
require_once locate_template('/lib/gallery_metabox.php');     		// Custom metaboxes
require_once locate_template('/lib/comments.php');        			// Custom comments modifications
require_once locate_template('/lib/shortcodes.php');      			// Shortcodes
require_once locate_template('/lib/widgets.php');         			// Sidebars and widgets
require_once locate_template('/lib/aq_resizer.php');      			// Resize on the fly
require_once locate_template('/lib/scripts.php');        			// Scripts and stylesheets
require_once locate_template('/lib/custom.php');          			// Custom functions
require_once locate_template('/lib/admin_scripts.php');          	// Icon functions
require_once locate_template('/lib/authorbox.php');         		// Author box
require_once locate_template('/lib/custom-woocommerce.php'); 		// Woocommerce functions
require_once locate_template('/lib/virtuetoolkit-activate.php'); 	// Plugin Activation
require_once locate_template('/lib/custom-css.php'); 			    // Fontend Custom CSS
?>
<?php
//随机缩略图
if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');
function catch_first_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];
if(empty($first_img)){
$random = mt_rand(1, 10);
echo get_bloginfo ( 'stylesheet_directory' );
echo '/img/random/pic'.$random.'.jpg';
}
return $first_img;
}
?>