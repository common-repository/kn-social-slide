<?php
function install_kn_social_slide() {
	$kn_plugin="kn_socialslide";
	add_option( $kn_plugin.'_version', '1.1.5', '', 'yes' );
	add_option( $kn_plugin.'_facebook', 'on', '', 'yes' );
	add_option( $kn_plugin.'_twitter', 'on', '', 'yes' );
	add_option( $kn_plugin.'_googleplus', 'on', '', 'yes' );
	add_option( $kn_plugin.'_feedburner', 'on', '', 'yes' );
	add_option( $kn_plugin.'_kakinetwork', 'on', '', 'yes' );
	add_option( $kn_plugin.'_facebook_position', 'right', '', 'yes' );
	add_option( $kn_plugin.'_twitter_position', 'right', '', 'yes' );
	add_option( $kn_plugin.'_googleplus_position', 'right', '', 'yes' );
	add_option( $kn_plugin.'_feedburner_position', 'left', '', 'yes' );
	add_option( $kn_plugin.'_kakinetwork_position', 'right', '', 'yes' );
	add_option( $kn_plugin.'_facebook_top', '18', '', 'yes' );
	add_option( $kn_plugin.'_twitter_top', '35', '', 'yes' );
	add_option( $kn_plugin.'_googleplus_top', '52', '', 'yes' );
	add_option( $kn_plugin.'_feedburner_top', '69', '', 'yes' );
	add_option( $kn_plugin.'_kakinetwork_top', '69', '', 'yes' );
	add_option( $kn_plugin.'_facebook_id', '208042365884483', '', 'yes' );
	add_option( $kn_plugin.'_twitter_id', 'KakiNetwork', '', 'yes' );
	add_option( $kn_plugin.'_googleplus_id', '103158195753606486338', '', 'yes' );
	add_option( $kn_plugin.'_feedburner_id', 'webKH', '', 'yes' );
	add_option( $kn_plugin.'_kakinetwork_auto_open', '303', '', 'yes' );
	add_option( $kn_plugin.'_twitter_show', '3', '', 'yes' );
	add_option( $kn_plugin.'_noConflict', 'off', '', 'yes' );
}
function uninstall_kn_social_slide() {
	$kn_plugin="kn_socialslide";
	delete_option( $kn_plugin.'_version' );
}
function kn_social_slide(){
	include "var.php";
	include "social_slide.php";
}
if ( is_admin() ){
	add_action('admin_menu', 'kn_socialslide_menu');
		function kn_socialslide_menu() {
			add_menu_page('KN Social Slide', 'KN Social Slide', 'administrator', 'kn_socialslide_settings', 'kn_socialslide_page', WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__)).'images/kaki.png');
			add_action( 'admin_init', 'register_kn_socialslide_settings' );
		}
}
function register_kn_socialslide_settings() {
	register_setting( 'kn_socialslide_group', 'kn_socialslide_version' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_facebook' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_twitter' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_googleplus' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_feedburner' );	
	register_setting( 'kn_socialslide_group', 'kn_socialslide_kakinetwork' );	
	register_setting( 'kn_socialslide_group', 'kn_socialslide_facebook_position' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_twitter_position' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_googleplus_position' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_feedburner_position' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_kakinetwork_position' );	
	register_setting( 'kn_socialslide_group', 'kn_socialslide_facebook_top' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_twitter_top' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_googleplus_top' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_feedburner_top' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_kakinetwork_top' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_facebook_id' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_twitter_id' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_googleplus_id' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_feedburner_id' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_kakinetwork_auto_open' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_twitter_show' );
	register_setting( 'kn_socialslide_group', 'kn_socialslide_noConflict' );
}
function kn_socialslide_page() {
	include "var.php";
	include "settings.php";
}
?>