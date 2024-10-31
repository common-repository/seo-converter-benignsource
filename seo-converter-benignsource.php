<?php
/**
* Plugin Name: SEO Converter BenignSource
* Plugin URI: http://www.benignsource.com/
* Version: 1.0
* Author: BenignSource
* Author URI: http://www.benignsource.com/
* Description: Convert your WordPress from PHP to Real HTML SEO optimization!
* License: GPL2
*/

class SEOConverterBenignSourceOne {
	/**
	* Constructor
	*/
	public function __construct() {

		// Plugin Details
        $this->plugin               = new stdClass;
        $this->plugin->name         = 'seo-converter-benignsource'; // Plugin Folder
        $this->plugin->displayName  = 'SEO Converter BenignSource'; // Plugin Name
        $this->plugin->version      = '1.0';
        $this->plugin->folder       = plugin_dir_path( __FILE__ );
        $this->plugin->url          = plugin_dir_url( __FILE__ );

		// Hooks
		add_action('admin_init', array(&$this, 'registerSettings'));
        add_action('admin_menu', array(&$this, 'adminPanelsAndSEOConverter'));
        
	}
	
	/**
	* Register Settings
	*/
	function registerSettings() {
	    
		register_setting($this->plugin->name, 'scbs_include_posts', 'trim');
		register_setting($this->plugin->name, 'scbs_include_compression', 'trim');
		register_setting($this->plugin->name, 'scbs_include_sitemap', 'trim');
	}
	
	/**
    * Register the plugin settings panel
    */
    function adminPanelsAndSEOConverter() {
    	add_submenu_page('options-general.php', $this->plugin->displayName, $this->plugin->displayName, 'manage_options', $this->plugin->name, array(&$this, 'adminPanelSeoBs'));
	}
    
    /**
    * Output the Administration Panel
    * Save POSTed data from the Administration Panel into a WordPress option
    */
	
   function adminPanelSeoBs() {
   if( current_user_can('administrator') ) {  
		// Save Settings
        if (isset( $_POST['submit'] ) && wp_verify_nonce( $_POST['submit'], 'benignsource-nonce' )) {
             	
	        	// Save
				update_option('scbs_include_posts', sanitize_text_field($_POST['scbs_include_posts']));
				update_option('scbs_include_compression', sanitize_text_field($_POST['scbs_include_compression']));
				update_option('scbs_include_sitemap', sanitize_text_field($_POST['scbs_include_sitemap']));
				$this->message = __('Settings Saved.', $this->plugin->name);
			
        }
       
        // Get latest settings
        $this->settings = array(
		   
			'scbs_include_posts' => stripslashes(get_option('scbs_include_posts')),
			'scbs_include_compression' => stripslashes(get_option('scbs_include_compression')),
			'scbs_include_sitemap' => stripslashes(get_option('scbs_include_sitemap')),
        );
        
    	// Load Settings Form
        include_once(WP_PLUGIN_DIR.'/'.$this->plugin->name.'/settings.php');  
    }
 }
}
// Load Function From File.php
if ( !function_exists( 'get_home_path' ) )
	require_once( dirname(__FILE__) . '/../../../wp-admin/includes/file.php' );
	

	
?>
<?php

    /*
	* WordPress starts create html and folders
	*/

add_action('wp_head', 'benign_seoconverter_load_head');
function benign_seoconverter_load_head() {
?><!-- SEO Converter BenignSource Create HTML -->
<?php
$current_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
// Get the page slug
$post_slug = $current_page->post_name;
$path = get_home_path();
$upload_dir = $path;
// Include Only Posts
$scbsposts = get_option('scbs_include_posts');
if ($scbsposts < 1 ){
}else{
$real_dirname = $upload_dir.'/'.$post_slug;
}
if ( ! file_exists( $real_dirname ) ) {
wp_mkdir_p( $real_dirname );
}
?>
<?php 
// Include HTML Compression
$scbscompression = get_option('scbs_include_compression');
if ($scbscompression < 1 ){
}else{
?>
<!-- HTML Compression by Real Performance BenignSource -->
<?php
function scbsremoveWhitespace($bufferspace)
{
return preg_replace('~>\s*\n\s*<~', '><', $bufferspace);
}
ob_start('scbsremoveWhitespace');?>
<?php }?>
<?php }?>
<?php $benign_seoconverter = new SEOConverterBenignSourceOne(); ?>