			<div class="large-4 columns">
				<!-- ADD SWITCH STATEMENT FOR CATEGORY STUFF -->
				<div class="hide-for-medium">
				<?php get_template_part('ads/ad','side'); ?>		
				</div>
				<ul id="sidebar-list">
					<li>
						<!-- Begin MailChimp Signup Form -->
						<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
						<style type="text/css">
							#mc_embed_signup{background:#fff; clear:left; font:12px 'Roboto Slab', serif;}
							#mc_embed_signup form {padding: 3px;}
							#mc_embed_signup_scroll {margin-top: 0px;}
							#mc_embed_signup_scroll h2 {margin-top: 0.625rem;}
						/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
							 We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
						</style>
						<div id="mc_embed_signup">
						<form action="//dailybruin.us15.list-manage.com/subscribe/post?u=15fa3629ea46e975a3174fe51&amp;id=ee621e262a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
						<h2>Subscribe to our daily newsletter</h2>
						<div class="mc-field-group">
						</label>
						<input type="email" value="" name="EMAIL" class="required email" placeholder="Enter your e-mail" id="mce-EMAIL">
						</div>
						<div id="mce-responses">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px; margin-top: 0px;" aria-hidden="true"><input type="text" name="b_15fa3629ea46e975a3174fe51_ee621e262a" tabindex="-1" value=""></div>
							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
						</div>
						</form>
						</div>
						<!--End mc_embed_signup-->
					</li>
					<?php dynamic_sidebar('sidebar-primary'); ?>
				</ul><!-- end div#sidebar-list -->

			</div><!-- end div#sidebar-main -->
