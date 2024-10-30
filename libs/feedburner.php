<?php
require('../../../../wp-blog-header.php');
$plugin_url=WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
include "../var.php";
?>
<style>
#title {
	font-weight: bold;
}
#email {
	width: 190px;
	padding: 0 10px;
	background: white;
	color: #666;
	height: 40px;
	float: left;
	margin-bottom: 10px;
	border: solid 1px #E8E8E8;
	font-family: "Droid Serif",Georgia, "Times New Roman", Times, serif;
	-webkit-box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.05);
	box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.05);
	-webkit-border-radius: 4px;
	border-radius: 4px;
	border-image: initial;
	background: url(<?php echo $plugin_url;?>images/icons/icon-require.png) no-repeat 100% 50%;
}
#subscribe {
	float: left;
	height: 40px;
	display: block;
	padding: 0 10px;
	line-height: 29px;
	font-weight: bold;
	margin-bottom: 20px;
	margin-right: 5px;
	color: white;
	border: solid 1px #578FAA;
	text-shadow: 0 -1px 0 #427D99;
	background-color: #71AAC5;
	background-image: -webkit-linear-gradient(top, #71aac5, #5d97b3);
	background-image: linear-gradient(top, #71aac5, #5d97b3);
	-webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
	box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
	border-radius: 5px;
	border-image: initial;
}
</style>
<h6 id="title">Update Notification via Email</h6>
<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $feedburner_id; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
	<p>
		<input type="text" name="email" value="your@email.com" onblur="this.value=(this.value=='') ? 'your@email.com' : this.value;" onfocus="this.value=(this.value=='your@email.com') ? '' : this.value;" id="email" name="email" />		
		<input type="hidden" value="<?php echo $feedburner_id; ?>" name="uri"/>
		<input type="hidden" name="loc" value="en_US"/>
		<input type="submit" value="Subscribe" id="subscribe" name="subscribe" />
	</p>
</form>