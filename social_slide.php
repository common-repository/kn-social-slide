<!-- KN Social Network <?php echo $version; ?> By KakiNetwork Begin -->
<link rel="stylesheet" href="<?php echo $plugin_url ?>style.css" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
<?php if ($noConflict=='on'){echo "jQuery.noConflict();";} ?>
jQuery(document).ready(function(){
	<?php if ($facebook=="on"){ ?>jQuery("#facebook_<?php echo $facebook_position; ?>").hover(function(){ jQuery(this).stop(true,false).animate({<?php echo $facebook_position; ?>:  0}, 500); },function(){ jQuery("#facebook_<?php echo $facebook_position; ?>").stop(true,false).animate({<?php echo $facebook_position; ?>: -200}, 500); });<?php } ?>
	<?php if ($twitter=="on"){ ?>jQuery("#twitter_<?php echo $twitter_position; ?>").hover(function(){ jQuery(this).stop(true,false).animate({<?php echo $twitter_position; ?>:  0}, 500); },function(){ jQuery("#twitter_<?php echo $twitter_position; ?>").stop(true,false).animate({<?php echo $twitter_position; ?>: -250}, 500); }); <?php } ?>
	<?php if ($googleplus=="on"){ ?>jQuery("#google_plus_<?php echo $googleplus_position; ?>").hover(function(){ jQuery(this).stop(true,false).animate({<?php echo $googleplus_position; ?>:  0}, 500); },function(){ jQuery("#google_plus_<?php echo $googleplus_position; ?>").stop(true,false).animate({<?php echo $googleplus_position; ?>: -303}, 500); });<?php } ?>
	<?php if ($feedburner=="on"){ ?>jQuery("#feedburner_<?php echo $feedburner_position; ?>").hover(function(){ jQuery(this).stop(true,false).animate({<?php echo $feedburner_position; ?>:  0}, 500); },function(){ jQuery("#feedburner_<?php echo $feedburner_position; ?>").stop(true,false).animate({<?php echo $feedburner_position; ?>: -303}, 500); });<?php } ?>
	<?php if ($kakinetwork=="on"){ ?>jQuery("#kakinetwork_<?php echo $kakinetwork_position; ?>").hover(function(){ jQuery(this).stop(true,false).animate({<?php echo $kakinetwork_position; ?>:  0}, 500); },function(){ jQuery("#kakinetwork_<?php echo $kakinetwork_position; ?>").stop(true,false).animate({<?php echo $kakinetwork_position; ?>: -303}, 500); });<?php } ?>
});
</script>
<?php if ($facebook=="on"){ ?>
	<div id="facebook_<?php echo $facebook_position; ?>" style="top: <?php echo $facebook_top; ?>%;">
		<div id="facebook_div">
			<img src="<?php echo $plugin_url ?>images/facebook_<?php echo $facebook_position; ?>.png" alt="" />
			<iframe src="http://www.facebook.com/plugins/likebox.php?id=<?php echo $facebook_id; ?>&amp;locale=en_GB&amp;width=200&amp;connections=9&amp;stream=&amp;header=false&amp;show_faces=0&amp;height=356"   scrolling="no"></iframe>
		</div>
	</div>
<?php } ?>
<?php if ($twitter=="on"){ ?>
	<div id="twitter_<?php echo $twitter_position; ?>" style="top: <?php echo $twitter_top; ?>%;">
		<div id="twitter_div">
			<img id="twitter_<?php echo $twitter_position; ?>_img" src="<?php echo $plugin_url ?>images/twitter_<?php echo $twitter_position; ?>.png">
			<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
				new TWTR.Widget({
				version: 2,
				type: 'profile',
				rpp: <?php echo $twitter_show; ?>,
				interval: 1000,
				width: 246,
				height: 265,
				theme: {
				shell: {
				background: '#63BEFD',
				color: '#FFFFFF'
				},
				tweets: {
				background: '#FFFFFF',
				color: '#000000',
				links: '#47a61e'}
				},
				features: {
				loop: false,live: true,
				scrollbar: false,hashtags: false,timestamp: true,avatars: true,behavior: 'all'				  }
				}).render().setUser('<?php echo $twitter_id; ?>').start();
			</script>
		</div>
	</div>
<?php } ?>
<?php if ($googleplus=="on"){ ?>
	<div id="google_plus_<?php echo $googleplus_position; ?>" style="top: <?php echo $googleplus_top; ?>%;">
		<div id="google_plus_div">
			<img id="google_plus_<?php echo $googleplus_position; ?>_img" src="<?php echo $plugin_url ?>images/google_plus_<?php echo $googleplus_position; ?>.png">
			<div>
				<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
				<g:plus href="https://plus.google.com/<?php echo $googleplus_id; ?>" size="badge"></g:plus>
			</div>
		</div>
	</div>
<?php } ?>
<?php if ($feedburner=="on"){ ?>
	<div id="feedburner_<?php echo $feedburner_position; ?>" style=" top: <?php echo $feedburner_top; ?>%;">
		<div id="knfeedburner_div">
			<iframe id="fr" src="<?php echo $plugin_url; ?>libs/index.php?type=feedburner" style="overflow: hidden; height: 105px; width:  300px; border: 0;" scrolling="no"></iframe>
			<img id="feedburner_<?php echo $feedburner_position; ?>_img" src="<?php echo $plugin_url ?>images/feedburner_<?php echo $feedburner_position; ?>.png">
		</div>
	</div>
<?php } ?>
<?php if ($kakinetwork=="on"){ ?>
	<div id="kakinetwork_<?php echo $kakinetwork_position; ?>" style=" top: <?php echo $kakinetwork_top; ?>%;<?php echo $kakinetwork_position; ?>: -<?php echo $kakinetwork_auto_open; ?>px;">
		<div id="kakinetwork_div">
			<iframe id="fr" src="<?php echo $plugin_url; ?>libs/index.php?type=random" style="overflow: hidden; height: 105px; width:  300px; border: 0;" scrolling="no"></iframe>
			<img src="<? echo $plugin_url ?>images/kakinetwork_<?php echo $kakinetwork_position; ?>.png" alt="" />
		</div>
	</div>
<?php } ?>
<!-- KN Social Network <?php echo $version; ?> By KakiNetwork End -->