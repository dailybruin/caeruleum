<div class="off-canvas-wrap db-off-canvas-wrap" data-offcanvas>
    

<header id="topinfo">
	<div class="inner-wrap">
	    <div class="fixed">
	      <nav class="tab-bar">
	        <section class="left-small">
	          <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
	        </section>
	        <section class="middle tab-bar-section">
	          <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_logo.svg"></a>
	        </section>
	      </nav>
	    </div>

        <aside class="left-off-canvas-menu">
          <ul class="off-canvas-list">
            <li class="text-center">
            	<a href="<?php echo home_url('/'); ?>"><img class="db-mobile-nav-logo" src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_icon.svg" /></a>
            	</li>
            <li><div class="row collapse postfix-round ">
              <div class="small-10 columns">
                <input type="text" placeholder="Search">
              </div>
              <div class="small-2 columns">
                <span class="button postfix"><i class="fa fa-search"></i></span>
              </div>
            </div></li>
          </ul>
          <div class="db-nav-links">
            <ul class="off-canvas-list">
              <li><label>Sections</label></li>
              <li><a href="#"><i class="fa fa-newspaper-o fa-fw fa-lg"></i>News</a></li>
              <li><a href="#"><i class="fa fa-soccer-ball-o fa-fw fa-lg"></i>Sports</a></li>
              <li><a href="#"><i class="fa fa-film fa-fw fa-lg"></i>A&amp;E</a></li>
              <li><a href="#"><i class="fa fa-lightbulb-o fa-fw fa-lg"></i>Opinion</a></li>
              <li><a href="#"><i class="fa fa-video-camera fa-fw fa-lg"></i>Video</a></li>
              <li><a href="#"><i class="fa fa-camera fa-fw fa-lg"></i>Photo</a></li>
              <li><a href="#"><i class="fa fa-bullhorn fa-fw fa-lg"></i>Radio</a></li>
              <li><a href="#"><i class="fa fa-wifi fa-fw fa-lg"></i>Mojo</a></li>
              <li><a href="#"><i class="fa fa-book fa-fw fa-lg"></i>Prime</a></li>
              <li><a href="#"><i class="fa fa-globe fa-fw fa-lg"></i>Online</a></li>
              <li><a href="#"><i class="fa fa-comments-o fa-fw fa-lg"></i>Classifieds</a></li>
            </ul>
            <ul class="off-canvas-list">
              <li><label>Follow Us</label></li>
              <li><a href="#"><i class="fa fa-facebook fa-fw fa-lg"></i>Facebook</a></li>
              <li><a href="#"><i class="fa fa-instagram fa-fw fa-lg"></i>Instagram</a></li>
              <li><a href="#"><i class="fa fa-twitter fa-fw fa-lg"></i>Twitter</a></li>
            </ul>
          </div>
        </aside>
<div class="db-wrapper db-content">
	    <div class="row">
	        <div class="db-ad-leaderboard">
	          <img src="http://placehold.it/728x90">
	        </div>
	    </div>

	<div class="container">
	
		<div class="row visible-tablet">
			<div class="span12" id="ad-banner-large-tablet">
					<?php // Empty div used for correct ad placement ?>
			</div>
		</div><!-- end #ad-banner-large-tablet -->
	
		<div class="row">
			<?php wp_nav_menu(array('theme_location' => 'top_navigation', 
						'menu_class' => 'spannav navlist hidden-phone',
						'menu_id' => 'toplinks-info',
						'container' => '',
						)); ?>
			<div class="spanbanner visible-desktop">
				<?php get_template_part('ad','banner'); ?>
			</div><!-- end ad div (span8) -->
			<div class="spandate hidden-phone">
				<?php date_default_timezone_set('America/Los_Angeles'); ?>
				<span id="date-month"><?php echo date('F'); ?></span><br />
				<span id="date-day"><?php echo date('j'); ?></span>
			</div>
		</div><!-- end div.row (header row) -->
		<div class="row visible-phone mobile-nav">
			<img id="nameplate-mobile" src="/img/nameplate-mobile.png" />
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<nav id="nav-collapse" class="accordion-body collapse">
				<form action="/" method="GET" id="search-mobile">
					<input type="search" placeholder="Search..." name="s"></input>
				</form>
				<?php wp_nav_menu(array('theme_location' => 'mobile_navigation')); ?>
			</nav>
		</div>
	</div><!-- end div.container -->
</header>

<nav class="container" id="nav-nameplate">
	<div class="row">
		<div class="span12" id="nameplate">
			<a id="nameplate-app-refer" href="https://itunes.apple.com/lb/app/bruin-football-by-ucla-daily/id548832108?mt=8&ign-mpt=uo%3D2" class="visible-tablet">
				<span>Download the Bruin Football iPhone app</span>
				<img src="http://dailybruin.com/images/ads/house/football-icon.png" />
			</a>
		<?php if(is_category("spectrum") || 
				 is_category("sports-spectrum") ||
				 is_category("campus-spectrum") ||
				 is_category("humans-of-westwood") ||
				 is_category("archives") ||
				 is_category("westwoodla") ||
				 (is_single() && in_category("Spectrum")) ||
				 is_category("howewo") ||
				 is_page( 'about-spectrum' ) ) : ?>
			<a href="<?php echo home_url('/'); ?>"><img src="/img/nameplate-spectrum.png" class="hidden-phone nameplate-image" /></a>
		<?php else: ?>
			<a href="<?php echo home_url('/'); ?>"><img src="/img/nameplate.png" class="hidden-phone nameplate-image" /></a>
		<?php endif ?>

		

		</div>
	</div><!-- end div.row -->
</nav>

	
<div id="firstnav-container-back" class="hidden-phone">
	<div class="container" id="firstnav-container">
		<nav class="row" id="firstnav">
			<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 
									'menu_class' => 'navlist span12',
									'container' => '',
									'menu_id' => 'topMenu',
									)); ?>
			<form id="topsearch" action="/" method="get">
				<input type="text" name="s" placeholder="Search..." />
				<button type="submit"><i class="icon-search"></i></button>
			</form><!-- end form#topsearch -->
		</nav><!-- end nav#firstnav -->
	</div><!-- end div#firstnav-container -->
</div><!-- end div#firstnav-container-back -->
		
<div class="container">
	<div class="row" id="ad-sm-row">
		<div class="span7" id="inthenews">
            <?php ob_start();
                wp_nav_menu(array('theme_location' => 'in_the_news',
                   'container' => '',
                ));
                $navmenu = ob_get_contents();
                ob_end_clean();
                if($navmenu !== ''):
            ?>
			<span>In the news:</span>
                <?php echo $navmenu; ?>
            <?php endif; ?>
		</div><!-- end div#inthenewscont -->
		<div class="span5 hidden-phone" id="followus">
			<a href="https://twitter.com/dailybruin" class="twitter-follow-button" data-show-count="false">Follow @dailybruin</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<div class="fb-follow" data-href="https://www.facebook.com/dailybruin" data-show-faces="false" data-font="arial" data-width="225"></div>
		</div>
	</div><!-- end div#ad-sm-row -->
	<div class="row visible-desktop" id="adrow">
		<div class="span6" id="adrow-house">
			<?php get_template_part('ad','housebanner'); ?>
		</div><!-- end div.span6 -->
		<div class="span6" id="adrow-out">
			<?php get_template_part('ad','smallbanner'); ?>
		</div><!-- end div.span6 -->
	</div><!-- end div.row -->
</div><!-- end div.container -->
