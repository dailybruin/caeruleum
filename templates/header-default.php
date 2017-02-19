			<div class="row hide-for-small">
				<div class="db-ad-leaderboard text-center">
					<?php get_template_part('ad','banner'); ?>
				</div>
			</div>

			<div class="row show-for-small-only">
				<div class="db-ad-leaderboard text-center">
					<?php get_template_part('ad','smallbanner'); ?>
				</div>
			</div>

			<hr class="hide-for-small">
			<div class="hide-for-small" id="stickyheader">
				<nav class="tab-bar">
					<section class="left-small">
						<a class="menu-icon" href="#" data-reveal-id="menu">
							<span></span>
						</a>
					</section>
					<section class="middle tab-bar-section">
						<div class="db-logo" style="display: none;">
							<a href="<?php echo home_url('/'); ?>">
								<img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_logo.svg">
							</a>
						</div>
						<div class="db-logo-spectrum" style="display: none;">
							<a href="<?php echo home_url('/'); ?>">
								<img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_logo_white.svg">
							</a>
						</div>
					</section>
					<section class="text-right">
						<a class="search-icon" href="#" data-reveal-id="search">
							<span class="hide-for-medium hide-for-small"></span> <i class="fa fa-search"></i>
						</a>
					</section>
				</br>
			</nav>
		</div>
		<div class="show-for-small" id="stickyheader-small">
			<nav class="tab-bar">
				<section class="left-small">
					<a class="menu-icon" href="#" data-reveal-id="menu">
						<span></span>
					</a>
				</section>
				<section class="middle tab-bar-section">
					<div class="db-logo">
						<a href="<?php echo home_url('/'); ?>">
							<img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_logo.svg">
						</a>
					</div>
					<div class="db-logo-spectrum">
						<a href="<?php echo home_url('/'); ?>">
							<img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_logo_white.svg">
						</a>
					</div>
				</section>
				<section class="text-right">
					<a class="search-icon" href="#" data-reveal-id="search">
						<span class="hide-for-medium hide-for-small"></span> <i class="fa fa-search"></i>
					</a>
				</section>
			</nav>
		</div>
		<div id="stickyalias">
			<nav class="tab-bar">
				<section class="left-small">
					<a class="menu-icon" href="#" data-reveal-id="menu">
						<span></span>
					</a>
				</section>
				<section class="middle tab-bar-section">
					<div class="db-logo">
						<a href="<?php echo home_url('/'); ?>">
							<img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_logo.svg">
						</a>
					</div>
					<div class="db-logo-spectrum">
						<a href="<?php echo home_url('/'); ?>">
							<img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_logo_white.svg">
						</a>
					</div>
				</section>
				<section class="text-right">
					<a class="search-icon" href="#" data-reveal-id="search">
						<span class="hide-for-medium hide-for-small"></span> <i class="fa fa-search"></i>
					</a>
				</section>
			</nav>
		</div>
		<div id="search" class="reveal-modal" data-reveal>
			<a href="#" class="close-reveal-modal text-right">&#10005;</a>
			<label>Powered by Google Custom Search:</label>
			<gcse:search></gcse:search>
		</div>
		<div id="menu" class="reveal-modal" data-reveal>

			<div class="db-nav-links">
				<a href="#" class="close-reveal-modal text-right"><i class="fa fa-angle-left"></i></a>
				<?php wp_nav_menu(array('theme_location' => 'primary_navigation',
					'menu_class' => '',
					'container' => '',
					'menu_id' => 'topMenu',
					'link_before' => '<span></span>'
					)); ?>
				<?php wp_nav_menu(array('theme_location' => 'top_navigation',
					'menu_class' => '',
					'container' => '',
					'menu_id' => 'topMenu',
					)); ?>
				<?php wp_nav_menu(array('theme_location' => 'share_footer',
					'menu_class' => '',
					'container' => '',
					'menu_id' => 'topMenu',
					'link_before' => '<span></span>'
					)); ?>
				</div>
			</div>

			<div class="db-wrapper db-content">
				<style>
				.db-next {
					text-align: center;
					/*border-top: 1px solid #EEE;*/
					/*border-bottom: 1px solid #EEE;*/
					margin-top: 0.5rem;
					margin-bottom: 1rem;
					padding-top: 0.5rem;
					/*padding-bottom: 0.5rem;*/
				}
				.db-next .fadeInLeft {
					-webkit-animation-delay: 0.6s;
					-moz-animation-delay: 0.6s;
					-ms-animation-delay: 0.6s;
				}
				.db-next .fadeInUp {
					-webkit-animation-delay: 2s;
					-moz-animation-delay: 2s;
					-ms-animation-delay: 2s;
				}
				.db-next h2 {
					display: inline-block;
					font-size: 1.5rem;
				}
					.db-next button {
						margin-right: 0rem;
						margin-left: 2.5rem;
						font-size: 1.2rem;
						padding: 1rem 1rem 1.0625rem 1rem;
						background-color: #0080c6;
						font-family: 'Roboto Slab', serif;
						}
						.db-next button:hover {
							background-color: rgba(0, 128, 198, 0.7);
						}
						/*
						#play-store-logo {

							display: inline-block;
							margin: 0;
							margin-left: 1rem;
						}
						#app-store-logo {
							display: inline-block;
							margin: 0;
							margin-left: 1rem;
						}
						#play-store-logo img {
							width: 136px;
						}
						#app-store-logo img {
							width: 140px;
						}
		        #war-twitter-badge {
		          display: inline-block;
		        }
		        #war-inst-badge {
		          display: inline-block;
		          margin: 0;
		          bottom: 5px;
		        }

		        #war-inst-badge span div {
		        	margin: 0 5px 0 0;
		        	position: relative;
		        	bottom: 3px;
		        }

		        #war-fb-badge {
		          display: inline-block;
		          margin: 0;
		          bottom: 5px;
		        }
		        #war-sometext {
					    margin: 0 0 0.7rem 0;
		        }*/
						</style>


						<!-- social media war
						<div class="row db-story below-header db-next">
							<div id="war-sometext">
								<h2 class="animated fadeInLeft">Help us beat the Daily Trojan in our <a href="https://twitter.com/search?q=%23BeatSC">#BeatSC</a> Social Media Showdown!</h2>
							</div>
							<div id="war-fb-badge" class="fb-like" data-href="https://www.facebook.com/dailybruin" data-width="400px" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
							<div id="war-twitter-badge">
							<a href="https://twitter.com/dailybruin" class="twitter-follow-button" data-show-count="true" data-size="small">
								Follow @dailybruin
		     				</a>
							</div>
							<div id="war-inst-badge">
								<span class="ig-follow" data-id="eb43700450" data-handle="dailybruin" data-count="true" data-size="small" data-username="true"></span>
							</div>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
								<script>(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src="//x.instagramfollowbutton.com/follow.js";s.parentNode.insertBefore(g,s);}(document,"script"));</script>

						</div>
						-->

					<!--
						<div class="row db-story below-header db-next hide-for-small">
							<a href="http://campaign.dailybruin.com/">
							<div class="small-12 columns">
								<h2 class="animated fadeInLeft">Daily Bruin and Bruinwalk.com need your help.&nbsp;</h2>
								<button class="animated fadeInUp">&nbsp;Learn more&raquo;</button>
							</div>
							</a>
						</div>
					 -->

						<div class="row db-story below-header">
							<div class="db-top-date text-center hide-for-small">
								<?php date_default_timezone_set('America/Los_Angeles'); ?>
								<p><span><?php echo date('l'); ?>, <?php echo date('F'); ?> <?php echo date('j'); ?></span></p>
							</div>
							<div class="small-12 columns hide-for-small" style="margin-top: 0px;">
								<?php wp_nav_menu(array('theme_location' => 'top_bar',
									'menu_class' => '',
									'container' => '',
									'menu_id' => 'topBar',
									)); ?>
							</div>
							<hr/>

							<div class="small-6 columns hide-for-small" style="margin:0;">
								<?php ob_start();
								wp_nav_menu(array('theme_location' => 'in_the_news',
									'container' => '',
									'menu_class' => 'in-the-news',
									));
								$navmenu = ob_get_contents();
								ob_end_clean();
								if($navmenu !== ''):
									?>
								<h3 class="in-the-news">In the news: </h3>
								<?php echo $navmenu; ?>
							<?php endif; ?>
						</div>
						<div class="small-6 columns hide-for-small text-right social-right" style="margin:0;">
							<a href="http://www.facebook.com/dailybruin" title="Facebook"><i class="fa fa-facebook"></i></a>
							<a href="http://www.twitter.com/dailybruin" title="Twitter"><i class="fa fa-twitter"></i></a>
							<a href="http://youtube.com/ucladailybruin" title="Youtube"><i class="fa fa-youtube-play"></i></a>
							<a href="http://www.github.com/daily-bruin" title="GitHub"><i class="fa fa-github"></i></a>
							<a href="http://dailybruin.com/feed" title="RSS"><i class="fa fa-rss"></i></a>
						</div>
					</div>
