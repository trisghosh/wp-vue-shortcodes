<?php
/**
 * Plugin Name:     Wp Vue
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     WordPress with Vue Js
 * Author: 			Tristup Ghosh
 * Author URI: 		http://www.tristupghosh.com
 * Text Domain:     wp-vue
 * Domain Path:     
 * Version:         1.0
 *
 * @package         Wp_Vue
 */
if ( ! defined( 'ABSPATH' ) ) 
{
	exit;
}
if ( ! defined( 'WPVUE_VERSION' ) ) 
{
	define( 'WPVUE_VERSION', '1.0.1' );
}
if ( ! defined( 'WPVUE_PLUGIN_JS_URI' ) ) {
		define( 'WPVUE_PLUGIN_JS_URI', plugins_url( 'assets/js/',__FILE__ ) );
}
if ( ! defined( 'WPVUE_PLUGIN_CSS_URI' ) ) {
		define( 'WPVUE_PLUGIN_CSS_URI', plugins_url( 'assets/css/',__FILE__ ) );
}
if ( ! defined( 'WPVUE_PLUGIN_IMG_URI' ) ) {
		define( 'WPVUE_PLUGIN_IMG_URI', plugins_url( 'assets/images/',__FILE__ ) );
}
class wp_vue
{
	function __construct()
	{
		add_shortcode('wp-vue-posts', array($this,'wp_vue_shortcode'));
	}//end of function
	function wp_vue_shortcode($atts) 
	{
		if(!is_admin())
		{
			extract( shortcode_atts( array(
			  'posts_per_page'=>'',
			  'offset'=>'',
			  'order'=>'',
			  'orderby'=>'',
			), $atts,'wp-vue' ) );

			$posts_per_page=empty($posts_per_page)? get_option( 'posts_per_page' ):$posts_per_page;

			wp_enqueue_style( 'wp-vue-css', WPVUE_PLUGIN_CSS_URI. 'main.css' );
			wp_enqueue_script('vue',WPVUE_PLUGIN_JS_URI.'vue.js',[], WPVUE_VERSION);
		    wp_enqueue_script('wp-vue-script',WPVUE_PLUGIN_JS_URI.'main.js',array('vue'));
		    wp_localize_script( 'wp-vue-script', 'vuesettings', array('ajaxurl' => admin_url( 'admin-ajax.php' ),'base_url'=>home_url('/'),'posts_per_page'=> $posts_per_page,'offset'=>$offset,'order'=>$order,'orderby'=>$orderby) );
		    include 'templates/wp-vue.php';
		}	   
	}//end of function	

}//end of class
new wp_vue();
