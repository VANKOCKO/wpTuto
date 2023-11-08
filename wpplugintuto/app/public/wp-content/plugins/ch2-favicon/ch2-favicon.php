<?php 
/*
  Plugin Name: Chapter 2 - Favicon
  Plugin URI:
  Description: Companion to recipe 'Using WordPress path utility functions'
  Author: ylefebvre
  Version: 1.0
  Author URI: http://ylefebvre.ca/
 */
add_action( 'wp_head', 'ch2fi_page_header_output' );

function ch2fi_page_header_output() {
	$site_icon_url = get_site_icon_url();
    
     //  get_theme_root() : theme directory ;
     // get_template_directory() : url of theme of template ; 
    //    echo admin_url().'<br>';  
    //    echo content_url().'<br>';
    //    echo site_url().'<br>';
    //    echo includes_url().'<br>';
    //    echo site_url().'<br>';
    //    echo wp_upload_dir().'<br>';

	if ( !empty( $site_icon_url ) ) {
	   	wp_site_icon();
	} else {
		$icon = plugins_url( 'favicon.ico', __FILE__ );
?>
    <link rel="shortcut icon" href="<?php echo esc_url( $icon ); ?>" />
 <?php  
	}
}