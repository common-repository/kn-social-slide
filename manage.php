<div id="status">
	<h1>Status</h1>
	<table class="form-table">
		<tbody>
			<tr valign="top"><th scope="row"><label for="facebook"><strong>Facebook : </strong></label></th>
				<td>
					<span class="description"><?php if ($facebook=='on'){echo "Facebook is <code>on</code> and located at <code>" . $facebook_position . "</code>";}else {echo "Facebook is off.";} ?></span>
						<ul>
							<?php if ($facebook=="on"){if ($twitter=="on"){if ($facebook_position==$twitter_position){if ($facebook_top==$twitter_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>twitter</strong>.</li>";}}}}?>
							<?php if ($facebook=="on"){if ($googleplus=="on"){if ($facebook_position==$googleplus_position){if ($facebook_top==$googleplus_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>google plus</strong>.</li>";}}}}?>
							<?php if ($facebook=="on"){if ($feedburner=="on"){if ($facebook_position==$feedburner_position){if ($facebook_top==$feedburner_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>feedburner</strong>.</li>";}}}}?>
							<?php if ($facebook=="on"){if ($kakinetwork=="on"){if ($facebook_position==$kakinetwork_position){if ($facebook_top==$kakinetwork_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>random post</strong>.</li>";}}}}?>
						</ul>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="twitter"><strong>Twitter : </strong></label></th>
				<td>
					<span class="description"><?php if ($twitter=='on'){echo "Twitter is <code>on</code> and located at <code>" . $twitter_position . "</code>";}else {echo "Twitter is off.";} ?></span>
						<ul>
							<?php if ($twitter=="on"){if ($facebook=="on"){if ($twitter_position==$facebook_position){if ($twitter_top==$facebook_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>facebook</strong>.</li>";}}}}?>
							<?php if ($twitter=="on"){if ($googleplus=="on"){if ($twitter_position==$googleplus_position){if ($twitter_top==$googleplus_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>google plus</strong>.</li>";}}}}?>
							<?php if ($twitter=="on"){if ($feedburner=="on"){if ($twitter_position==$feedburner_position){if ($twitter_top==$feedburner_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>feedburner</strong>.</li>";}}}}?>
							<?php if ($twitter=="on"){if ($kakinetwork=="on"){if ($twitter_position==$kakinetwork_position){if ($twitter_top==$kakinetwork_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>random post</strong>.</li>";}}}}?>
						</ul>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="googleplus"><strong>Google Plus : </strong></label></th>
				<td>
					<span class="description"><?php if ($googleplus=='on'){echo "Google Plus is <code>on</code> and located at <code>" . $googleplus_position . "</code>";}else {echo "Google Plus is off.";} ?></span>
						<ul>
							<?php if ($googleplus=="on"){if ($facebook=="on"){if ($googleplus_position==$facebook_position){if ($googleplus_top==$facebook_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>facebook</strong>.</li>";}}}}?>
							<?php if ($googleplus=="on"){if ($twitter=="on"){if ($googleplus_position==$twitter_position){if ($googleplus_top==$twitter_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>twitter</strong>.</li>";}}}}?>
							<?php if ($googleplus=="on"){if ($feedburner=="on"){if ($googleplus_position==$feedburner_position){if ($googleplus_top==$feedburner_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>feedburner</strong>.</li>";}}}}?>
							<?php if ($googleplus=="on"){if ($kakinetwork=="on"){if ($googleplus_position==$kakinetwork_position){if ($googleplus_top==$kakinetwork_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>random post</strong>.</li>";}}}}?>
						</ul>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="feedburner"><strong>Feedburner : </strong></label></th>
				<td>
					<span class="description"><?php if ($feedburner=='on'){echo "Feedburner is <code>on</code> and located at <code>" . $feedburner_position . "</code>";}else {echo "Feedburner is off.";} ?></span>
						<ul>
							<?php if ($feedburner=="on"){if ($facebook=="on"){if ($feedburner_position==$facebook_position){if ($feedburner_top==$facebook_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>facebook</strong>.</li>";}}}}?>
							<?php if ($feedburner=="on"){if ($twitter=="on"){if ($feedburner_position==$twitter_position){if ($feedburner_top==$twitter_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>twitter</strong>.</li>";}}}}?>
							<?php if ($feedburner=="on"){if ($googleplus=="on"){if ($feedburner_position==$googleplus_position){if ($feedburner_top==$googleplus_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>google plus</strong>.</li>";}}}}?>
							<?php if ($feedburner=="on"){if ($kakinetwork=="on"){if ($feedburner_position==$kakinetwork_position){if ($feedburner_top==$kakinetwork_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>random post</strong>.</li>";}}}}?>
						</ul>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="kakinetwork"><strong>Random Post : </strong></label></th>
				<td>
					<span class="description"><?php if ($kakinetwork=='on'){echo "Random Post is <code>on</code> and located at <code>" . $kakinetwork_position . "</code>";}else {echo "Random Post is off.";} ?></span>
						<ul>
							<?php if ($kakinetwork=="on"){if ($facebook=="on"){if ($kakinetwork_position==$facebook_position){if ($kakinetwork_top==$facebook_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>facebook</strong>.</li>";}}}}?>
							<?php if ($kakinetwork=="on"){if ($twitter=="on"){if ($kakinetwork_position==$twitter_position){if ($kakinetwork_top==$twitter_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>twitter</strong>.</li>";}}}}?>
							<?php if ($kakinetwork=="on"){if ($googleplus=="on"){if ($kakinetwork_position==$googleplus_position){if ($kakinetwork_top==$googleplus_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>google plus</strong>.</li>";}}}}?>
							<?php if ($kakinetwork=="on"){if ($feedburner=="on"){if ($kakinetwork_position==$feedburner_position){if ($kakinetwork_top==$feedburner_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>feedburner</strong>.</li>";}}}}?>
						</ul>
				</td>
			</tr>
		</tbody>
	</table>	
</div>
<div id="facebook">
	<h1>Facebook</h1>
	<table class="form-table">
		<tbody>
			<tr valign="top"><tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_facebook">Status</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_facebook" id="<?php echo $kn_plugin; ?>_facebook">		
						<option <?php if ($facebook=='on'){echo "selected='selected'";} ?> value="on">On</option>
						<option <?php if ($facebook=='off'){echo "selected='selected'";} ?> value="off">Off</option>
					</select>
					<span class="description">Turn <?php if ($facebook=='on'){echo "off to hide this slide.";}else {echo "on to show this slide.";} ?></span>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_facebook_position">Position</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_facebook_position" id="<?php echo $kn_plugin; ?>_facebook_position">		
						<option <?php if ($facebook_position=='left'){echo "selected='selected'";} ?> value="left">Left</option>
						<option <?php if ($facebook_position=='right'){echo "selected='selected'";} ?> value="right">Right</option>
					</select>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_facebook_top">Order</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_facebook_top" id="<?php echo $kn_plugin; ?>_facebook_top">
						<option <?php if ($facebook_top=='1'){echo "selected='selected'";} ?> value="1">1'st</option>					
						<option <?php if ($facebook_top=='18'){echo "selected='selected'";} ?> value="18">2'nd</option>
						<option <?php if ($facebook_top=='35'){echo "selected='selected'";} ?> value="35">3'rd</option>
						<option <?php if ($facebook_top=='52'){echo "selected='selected'";} ?> value="52">4'th</option>
						<option <?php if ($facebook_top=='69'){echo "selected='selected'";} ?> value="69">5'th</option>
						<option <?php if ($facebook_top=='86'){echo "selected='selected'";} ?> value="86">6'th</option>
					</select>					
					<span class="description">Your current order is <code><?php if ($facebook_top=='1'){echo "1'st";}if ($facebook_top=='18'){echo "2'nd";}if ($facebook_top=='35'){echo "3'rd";}if ($facebook_top=='52'){echo "4'th";}if ($facebook_top=='69'){echo "5'th";}if ($facebook_top=='86'){echo "6'th";} ?></code> place.</span>					
						<ul>
							<?php if ($facebook=="on"){if ($twitter=="on"){if ($facebook_position==$twitter_position){if ($facebook_top==$twitter_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>twitter</strong>.</li>";}}}}?>
							<?php if ($facebook=="on"){if ($googleplus=="on"){if ($facebook_position==$googleplus_position){if ($facebook_top==$googleplus_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>google plus</strong>.</li>";}}}}?>
							<?php if ($facebook=="on"){if ($feedburner=="on"){if ($facebook_position==$feedburner_position){if ($facebook_top==$feedburner_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>feedburner</strong>.</li>";}}}}?>
							<?php if ($facebook=="on"){if ($kakinetwork=="on"){if ($facebook_position==$kakinetwork_position){if ($facebook_top==$kakinetwork_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>random post</strong>.</li>";}}}}?>
						</ul>
				</td>
			</tr>	
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_facebook_id">Facebook Fanpage ID</label></th>
				<td>
					<input name="<?php echo $kn_plugin; ?>_facebook_id" type="number" id="<?php echo $kn_plugin; ?>_facebook_id" value="<?php echo $facebook_id; ?>" class="regular-text">
					<span class="description"><a href="http://www.google.com.my/search?sourceid=chrome&ie=UTF-8&q=How+to+find+your+Facebook+Fanpage+ID" target="_blank">Facebook Fanpage ID?</a></span>
				</td>
			</tr>
		</tbody>
	</table>
	<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
</div>
<div id="twitter">
	<h1>Twitter</h1>
	<table class="form-table">
		<tbody>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_twitter">Status</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_twitter" id="<?php echo $kn_plugin; ?>_twitter">			
						<option <?php if ($twitter=='on'){echo "selected='selected'";} ?> value="on">On</option>
						<option <?php if ($twitter=='off'){echo "selected='selected'";} ?> value="off">Off</option>
					</select>
					<span class="description">Turn <?php if ($twitter=='on'){echo "off to hide this slide.";}else {echo "on to show this slide.";} ?></span>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_twitter_show">Show Tweet</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_twitter_show" id="<?php echo $kn_plugin; ?>_twitter_show">		
						<option <?php if ($twitter_show=='1'){echo "selected='selected'";} ?> value="1">1 Tweet</option>
						<option <?php if ($twitter_show=='2'){echo "selected='selected'";} ?> value="2">2 Tweets</option>
						<option <?php if ($twitter_show=='3'){echo "selected='selected'";} ?> value="3">3 Tweets</option>
						<option <?php if ($twitter_show=='4'){echo "selected='selected'";} ?> value="4">4 Tweets</option>
					</select>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_twitter_position">Position</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_twitter_position" id="<?php echo $kn_plugin; ?>_twitter_position">		
						<option <?php if ($twitter_position=='left'){echo "selected='selected'";} ?> value="left">Left</option>
						<option <?php if ($twitter_position=='right'){echo "selected='selected'";} ?> value="right">Right</option>
					</select>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_twitter_top">Order</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_twitter_top" id="<?php echo $kn_plugin; ?>_twitter_top">
						<option <?php if ($twitter_top=='1'){echo "selected='selected'";} ?> value="1">1'st</option>					
						<option <?php if ($twitter_top=='18'){echo "selected='selected'";} ?> value="18">2'nd</option>
						<option <?php if ($twitter_top=='35'){echo "selected='selected'";} ?> value="35">3'rd</option>
						<option <?php if ($twitter_top=='52'){echo "selected='selected'";} ?> value="52">4'th</option>
						<option <?php if ($twitter_top=='69'){echo "selected='selected'";} ?> value="69">5'th</option>
						<option <?php if ($twitter_top=='86'){echo "selected='selected'";} ?> value="86">6'th</option>
					</select>					
					<span class="description">Your current order is <code><?php if ($twitter_top=='1'){echo "1'st";}if ($twitter_top=='18'){echo "2'nd";}if ($twitter_top=='35'){echo "3'rd";}if ($twitter_top=='52'){echo "4'th";}if ($twitter_top=='69'){echo "5'th";}if ($twitter_top=='86'){echo "6'th";} ?></code> place.</span>
						<ul>
							<?php if ($twitter=="on"){if ($facebook=="on"){if ($twitter_position==$facebook_position){if ($twitter_top==$facebook_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>facebook</strong>.</li>";}}}}?>
							<?php if ($twitter=="on"){if ($googleplus=="on"){if ($twitter_position==$googleplus_position){if ($twitter_top==$googleplus_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>google plus</strong>.</li>";}}}}?>
							<?php if ($twitter=="on"){if ($feedburner=="on"){if ($twitter_position==$feedburner_position){if ($twitter_top==$feedburner_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>feedburner</strong>.</li>";}}}}?>
							<?php if ($twitter=="on"){if ($kakinetwork=="on"){if ($twitter_position==$kakinetwork_position){if ($twitter_top==$kakinetwork_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>random post</strong>.</li>";}}}}?>
						</ul>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_twitter_id">Twitter Username</label></th>
				<td>
					<input name="<?php echo $kn_plugin; ?>_twitter_id" type="text" id="<?php echo $kn_plugin; ?>_twitter_id" value="<?php echo $twitter_id; ?>" class="regular-text">
					<span class="description">Without <code>@</code></span>
				</td>
			</tr>
		</tbody>
	</table>
	<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
</div>
<div id="googleplus">
	<h1>Google Plus</h1>
	<table class="form-table">
		<tbody>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_googleplus">Status</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_googleplus" id="<?php echo $kn_plugin; ?>_googleplus">			
						<option <?php if ($googleplus=='on'){echo "selected='selected'";} ?> value="on">On</option>
						<option <?php if ($googleplus=='off'){echo "selected='selected'";} ?> value="off">Off</option>
					</select>
					<span class="description">Turn <?php if ($googleplus=='on'){echo "off to hide this slide.";}else {echo "on to show this slide.";} ?></span>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_googleplus_position">Position</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_googleplus_position" id="<?php echo $kn_plugin; ?>_googleplus_position">		
						<option <?php if ($googleplus_position=='left'){echo "selected='selected'";} ?> value="left">Left</option>
						<option <?php if ($googleplus_position=='right'){echo "selected='selected'";} ?> value="right">Right</option>
					</select>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_googleplus_top">Google+ Order</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_googleplus_top" id="<?php echo $kn_plugin; ?>_googleplus_top">
						<option <?php if ($googleplus_top=='1'){echo "selected='selected'";} ?> value="1">1'st</option>					
						<option <?php if ($googleplus_top=='18'){echo "selected='selected'";} ?> value="18">2'nd</option>
						<option <?php if ($googleplus_top=='35'){echo "selected='selected'";} ?> value="35">3'rd</option>
						<option <?php if ($googleplus_top=='52'){echo "selected='selected'";} ?> value="52">4'th</option>
						<option <?php if ($googleplus_top=='69'){echo "selected='selected'";} ?> value="69">5'th</option>
						<option <?php if ($googleplus_top=='86'){echo "selected='selected'";} ?> value="86">6'th</option>
					</select>					
					<span class="description">Your current order is <code><?php if ($googleplus_top=='1'){echo "1'st";}if ($googleplus_top=='18'){echo "2'nd";}if ($googleplus_top=='35'){echo "3'rd";}if ($googleplus_top=='52'){echo "4'th";}if ($googleplus_top=='69'){echo "5'th";}if ($googleplus_top=='86'){echo "6'th";} ?></code> place.</span>
						<ul>
							<?php if ($googleplus=="on"){if ($facebook=="on"){if ($googleplus_position==$facebook_position){if ($googleplus_top==$facebook_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>facebook</strong>.</li>";}}}}?>
							<?php if ($googleplus=="on"){if ($twitter=="on"){if ($googleplus_position==$twitter_position){if ($googleplus_top==$twitter_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>twitter</strong>.</li>";}}}}?>
							<?php if ($googleplus=="on"){if ($feedburner=="on"){if ($googleplus_position==$feedburner_position){if ($googleplus_top==$feedburner_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>feedburner</strong>.</li>";}}}}?>
							<?php if ($googleplus=="on"){if ($kakinetwork=="on"){if ($googleplus_position==$kakinetwork_position){if ($googleplus_top==$kakinetwork_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>random post</strong>.</li>";}}}}?>
						</ul>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_googleplus_id">Google+ ID</label></th>
				<td>
					<input name="<?php echo $kn_plugin; ?>_googleplus_id" type="txt" id="<?php echo $kn_plugin; ?>_googleplus_id" value="<?php echo $googleplus_id; ?>" class="regular-text">
					<span class="description"><a href="http://www.google.com.my/search?sourceid=chrome&ie=UTF-8&q=How+to+find+your+Google+Plus+page+ID" target="_blank">Google+ Page ID?</a></span>
				</td>
			</tr>
		</tbody>
	</table>
	<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
	<h1>How to get Google + Page?</h1>
	<p>
		<ul>
			<li>Start your Google Plus page by click <code><a href="https://plus.google.com/pages/create" target="_blank">https://plus.google.com/pages/create</a></code></li>
		</ul>
	</p>
</div>
<div id="feedburner">
	<h1>Feedburner</h1>
	<table class="form-table">
		<tbody>
			<tr valign="top"><tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_feedburner">Status</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_feedburner" id="<?php echo $kn_plugin; ?>_feedburner">		
						<option <?php if ($feedburner=='on'){echo "selected='selected'";} ?> value="on">On</option>
						<option <?php if ($feedburner=='off'){echo "selected='selected'";} ?> value="off">Off</option>
					</select>
					<span class="description">Turn <?php if ($feedburner=='on'){echo "off to hide this slide.";}else {echo "on to show this slide.";} ?></span>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_feedburner_position">Position</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_feedburner_position" id="<?php echo $kn_plugin; ?>_feedburner_position">		
						<option <?php if ($feedburner_position=='left'){echo "selected='selected'";} ?> value="left">Left</option>
						<option <?php if ($feedburner_position=='right'){echo "selected='selected'";} ?> value="right">Right</option>
					</select>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_feedburner_top">Order</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_feedburner_top" id="<?php echo $kn_plugin; ?>_feedburner_top">
						<option <?php if ($feedburner_top=='1'){echo "selected='selected'";} ?> value="1">1'st</option>					
						<option <?php if ($feedburner_top=='18'){echo "selected='selected'";} ?> value="18">2'nd</option>
						<option <?php if ($feedburner_top=='35'){echo "selected='selected'";} ?> value="35">3'rd</option>
						<option <?php if ($feedburner_top=='52'){echo "selected='selected'";} ?> value="52">4'th</option>
						<option <?php if ($feedburner_top=='69'){echo "selected='selected'";} ?> value="69">5'th</option>
						<option <?php if ($feedburner_top=='86'){echo "selected='selected'";} ?> value="86">6'th</option>
					</select>					
					<span class="description">Your current order is <code><?php if ($feedburner_top=='1'){echo "1'st";}if ($feedburner_top=='18'){echo "2'nd";}if ($feedburner_top=='35'){echo "3'rd";}if ($feedburner_top=='52'){echo "4'th";}if ($feedburner_top=='69'){echo "5'th";}if ($feedburner_top=='86'){echo "6'th";} ?></code> place.</span>					
						<ul>
							<?php if ($feedburner=="on"){if ($facebook=="on"){if ($feedburner_position==$facebook_position){if ($feedburner_top==$facebook_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>facebook</strong>.</li>";}}}}?>
							<?php if ($feedburner=="on"){if ($twitter=="on"){if ($feedburner_position==$twitter_position){if ($feedburner_top==$twitter_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>twitter</strong>.</li>";}}}}?>
							<?php if ($feedburner=="on"){if ($googleplus=="on"){if ($feedburner_position==$googleplus_position){if ($feedburner_top==$googleplus_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>google plus</strong>.</li>";}}}}?>
							<?php if ($feedburner=="on"){if ($kakinetwork=="on"){if ($feedburner_position==$kakinetwork_position){if ($feedburner_top==$kakinetwork_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>random post</strong>.</li>";}}}}?>
						</ul>
				</td>
			</tr>	
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_feedburner_id">Feedburner ID</label></th>
				<td>
					<input name="<?php echo $kn_plugin; ?>_feedburner_id" type="txt" id="<?php echo $kn_plugin; ?>_feedburner_id" value="<?php echo $feedburner_id; ?>" class="regular-text">
					<span class="description">http://feedburner.com/<code>your_username</code></span>
				</td>
			</tr>
		</tbody>
	</table>
	<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
	<h1>Warning</h1>
	<p>
		<ul>
			<li>Please make sure you have enable <code>Email Subscriptions</code> service for your feedburner account.</li>
			<li>To enable Email Subscriptions, you can click at <code>Publicize</code> menu at feedburner site.</li>
		</ul>
	</p>
</div>
<div id="kakinetwork">
	<h1>Random Post</h1>
	<table class="form-table">
		<tbody>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_kakinetwork">Status</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_kakinetwork" id="<?php echo $kn_plugin; ?>_kakinetwork">			
						<option <?php if ($kakinetwork=='on'){echo "selected='selected'";} ?> value="on">On</option>
						<option <?php if ($kakinetwork=='off'){echo "selected='selected'";} ?> value="off">Off</option>
					</select>
					<span class="description">Turn <?php if ($kakinetwork=='on'){echo "off to hide this slide.";}else {echo "on to show this slide.";} ?></span>		
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_kakinetwork_position">Position</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_kakinetwork_position" id="<?php echo $kn_plugin; ?>_kakinetwork_position">		
						<option <?php if ($kakinetwork_position=='left'){echo "selected='selected'";} ?> value="left">Left</option>
						<option <?php if ($kakinetwork_position=='right'){echo "selected='selected'";} ?> value="right">Right</option>
					</select>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_kakinetwork_top">Order</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_kakinetwork_top" id="<? echo $kn_plugin; ?>_kakinetwork_top">
						<option <?php if ($kakinetwork_top=='1'){echo "selected='selected'";} ?> value="1">1'st</option>					
						<option <?php if ($kakinetwork_top=='18'){echo "selected='selected'";} ?> value="18">2'nd</option>
						<option <?php if ($kakinetwork_top=='35'){echo "selected='selected'";} ?> value="35">3'rd</option>
						<option <?php if ($kakinetwork_top=='52'){echo "selected='selected'";} ?> value="52">4'th</option>
						<option <?php if ($kakinetwork_top=='69'){echo "selected='selected'";} ?> value="69">5'th</option>
						<option <?php if ($kakinetwork_top=='86'){echo "selected='selected'";} ?> value="86">6'th</option>
					</select>					
					<span class="description">Your current order is <code><?php if ($kakinetwork_top=='1'){echo "1'st";}if ($kakinetwork_top=='18'){echo "2'nd";}if ($kakinetwork_top=='35'){echo "3'rd";}if ($kakinetwork_top=='52'){echo "4'th";}if ($kakinetwork_top=='69'){echo "5'th";}if ($kakinetwork_top=='86'){echo "6'th";} ?></code> place.</span>
						<ul>
							<?php if ($kakinetwork=="on"){if ($facebook=="on"){if ($kakinetwork_position==$facebook_position){if ($kakinetwork_top==$facebook_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>facebook</strong>.</li>";}}}}?>
							<?php if ($kakinetwork=="on"){if ($twitter=="on"){if ($kakinetwork_position==$twitter_position){if ($kakinetwork_top==$twitter_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>twitter</strong>.</li>";}}}}?>
							<?php if ($kakinetwork=="on"){if ($googleplus=="on"){if ($kakinetwork_position==$googleplus_position){if ($kakinetwork_top==$googleplus_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>google plus</strong>.</li>";}}}}?>
							<?php if ($kakinetwork=="on"){if ($feedburner=="on"){if ($kakinetwork_position==$feedburner_position){if ($kakinetwork_top==$feedburner_top){echo "<li><strong><font color='red'>Warning :</font></strong> Your order has conflict with <strong>feedburner</strong>.</li>";}}}}?>
						</ul>
				</td>
			</tr>
			<tr valign="top"><th scope="row"><label for="<?php echo $kn_plugin; ?>_kakinetwork_auto_open">Auto Open?</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_kakinetwork_auto_open" id="<?php echo $kn_plugin; ?>_kakinetwork_auto_open">			
						<option <?php if ($kakinetwork_auto_open=='0'){echo "selected='selected'";} ?> value="0">On</option>
						<option <?php if ($kakinetwork_auto_open=='303'){echo "selected='selected'";} ?> value="303">Off</option>
					</select>
					<span class="description">Turn <?php if ($kakinetwork_auto_open=='0'){echo "off to disable auto open.";}else {echo "on to enable auto open.";} ?></span>		
				</td>
			</tr>
		</tbody>
	</table>
	<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
</div>
<div id="tools">
	<h1>Problem?</h1>
	<table class="form-table">
		<tbody>
			<tr valign="top">
				<th scope="row"><label for="jQueryConflict">jQuery Conflict</label></th>
				<td>
					<select name="<?php echo $kn_plugin; ?>_noConflict" id="<?php echo $kn_plugin; ?>_noConflict">		
						<option <?php if ($noConflict=='on'){echo "selected='selected'";} ?> value="on">jQuery.noConflict On</option>
						<option <?php if ($noConflict=='off'){echo "selected='selected'";} ?> value="off">jQuery.noConflict Off</option>
					</select>
					<span class="description">The slide not working or other unwanted effect to your site? Try to turn <?php if ($noConflict=='on'){echo "off";} ?><?php if ($noConflict=='off'){echo "on";} ?>.</span>
				</td>
			</tr>
		</tbody>
	</table>
	<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
</div>
<div id="info">
	<h1>Information</h1>
	<table class="form-table">
		<tbody>
			<tr valign="top">
				<th scope="row"><label for="info"></label></th>
				<td>Hello people, I hope you love this plugin. If you have any question and suggestion for this plugin, please email me at <code>hai@kakinetwork.com</code></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="fbtwgplus"></label></th>
				<td><table><tr><td><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script><g:plusone size="standard" annotation="bubble" href="https://plus.google.com/103158195753606486338" callback="googleCB"></g:plusone></td><td><iframe src='http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Ffacebook.com%2FKakiNetwork&layout=button_count&show_faces=false&width=200&action=like&font&colorscheme=light&height=21' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:90px; float: left; padding-top: 5px; height:21px; padding-left: 10px;' allowTransparency='true'></iframe></td><td><a href='https://twitter.com/KakiNetwork' class='twitter-follow-button'>Follow @KakiNetwork</a><script src='//platform.twitter.com/widgets.js' type='text/javascript'></script></td><td><a href='https://twitter.com/FreddieAziz' class='twitter-follow-button'>Follow @FreddieAziz</a><script src='//platform.twitter.com/widgets.js' type='text/javascript'></script></td></tr></table></td>
			</tr>
			<tr valign="top">
				<th scope="row"><label for="donate"></label></th>
				<td>Why I release this plugin for free? It's because I received too many email asking to give them discount for Pro version. I understand that they can't effort to buy Pro version.. Well, I've been in their places before so I understand how they need the premium plugin. Then, I decided to release this plugin for free! I hope all of you enjoy and keep supporting me in order to make this plugin better and perhaps other more new plugin soon. So if anyone want to motivate me, you can donate by clicking the donate button below :) it's kool!</td>
			</tr>
		</tbody>
	</table>
</div>