<?php
/*
Plugin Name: KN Social Slide
Plugin URI: http://www.KakiNetwork.Com
Description: KN Social Slide is a free WordPress Plugin that lets your visitors know about your facebook, twitter, google+, feedburner email subscriptions and random entry of your wordpress! We make setting up a simple slide to your wordpress and lets your visitors know about your facebook, twitter, feedburner email subscriptions and google+ and random post from your own wordpress. Don't worry, you can turn on and off, re-position and re-order any slide you don't want to anytime.
Author: Freddie Aziz Jasbindar
Author URI: http://twitter.com/FreddieAziz
Version: 1.1.5
*/
include "functions.php";
register_activation_hook(__FILE__,'install_kn_social_slide');
register_deactivation_hook(__FILE__,'uninstall_kn_social_slide');
add_action('wp_head', 'kn_social_slide');
?>