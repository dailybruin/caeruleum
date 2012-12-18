<header id="topinfo">
	<div class="container visible-desktop">
		<div class="row">
			<?php wp_nav_menu(array('theme_location' => 'top_navigation', 
						'menu_class' => 'spannav navlist',
						'menu_id' => 'toplinks-info',
						'container' => '',
						)); ?>
			<div class="spanbanner">
				<?php get_template_part('ad','banner'); ?>
			</div><!-- end ad div (span8) -->
			<div class="spandate">
				<span id="date-month"><?php echo date('F'); ?></span><br />
				<span id="date-day"><?php echo date('j'); ?></span>
			</div>
		</div><!-- end div.row (header row) -->
	</div><!-- end div.container -->
</header>






	<header>
		<div class="container">			
			<div id="nameplate" class="row">
				<div class="span3 hidden-phone" id="nameplate-todayspaper">
					<span style="color: white;">Today's Paper</span>
				</div>
				<div class="span6" id="nameplate-image">
					<a href="<?php echo home_url('/'); ?>"><img src="/img/nameplate.png" /></a>
					<button type="button" class="btn btn-navbar visible-phone" data-toggle="collapse" data-target="#mobile-nav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="span2 offset1 hidden-phone" id="nameplate-date">
					<span class="nameplate-date-weather"><a href="#"><i class="wicon-sun"></i><span>92&deg;</span></a></span>
					<span class="nameplate-date-week">Summer</span>
					<span class="nameplate-date-today"><?php echo date('F j, Y'); ?></span>
				</div>

			<nav id="mobile-nav" class="visible-phone nav-collapse collapse">
				<?php wp_nav_menu(array('theme_location' => 'mobile_navigation','menu_class'=>'phone-nav')); ?>
			</nav>

			</div><!-- end div#nameplate -->
		</div><!-- end container -->
	</header>
	
	<div id="firstnav-container-back" class="hidden-phone">
	<div class="container" id="firstnav-container">
		<nav class="row" id="firstnav">
			<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 
									'menu_class' => 'navlist span12',
									'container' => '',
									'menu_id' => 'topMenu',
									)
					); ?>
			<form class="firstnav-search input-append" role="search" method="get" action="<?php home_url('/'); ?>">
					<input name="s" id="search-input" type="text" placeholder="Search..." /><button class="btn" type="button"><i class="icon-search"></i></button>
			</form>
		</nav><!-- end nav#firstnav -->
	</div><!-- end div#firstnav-container -->
	</div><!-- end div#firstnav-container-back -->
		
	<div id="secondnav-container-back" class="hidden-phone">
	<div class="container" id="secondnav-container">
		<nav class="row" id="secondnav">
			<span class="more_text">More:</span>
			<?php wp_nav_menu(array('theme_location'=>'second_navigation', 'menu_class'=>'navlist span7')); ?>
<!--
			<ul class="navlist span7">
				<li><a href="#">Prime Magazine</a></li>
				<li><a href="#">Radio</a></li>
				<li><a href="#">Graphics</a></li>
				<li><a href="#">Classifieds</a></li>
			</ul>
-->
			<div class="span4" id="secondnav-socialmedia"> 
				<!-- put social media code here -->
			</div>
		</nav><!-- end nav#secondnav -->
	</div><!-- end div#secondnav-container -->
	</div><!-- end div#secondnav-container-back -->

	<div class="container ad hidden-phone" style="margin-bottom:10px;">
		<iframe id='ae976b13' name='ae976b13' src='http://www.oncampusweb.com/delivery/afr.php?zoneid=129&amp;cb=18971928374158792837213' framespacing='0' frameborder='no' scrolling='no' width='728' height='90'><a href='http://www.oncampusweb.com/delivery/ck.php?n=afcf8f4b&amp;cb=18971928374158792837213' target='_blank'><img src='http://www.oncampusweb.com/delivery/avw.php?zoneid=129&amp;cb=18971928374158792837213&amp;n=afcf8f4b' border='0' alt='' /></a></iframe>
<!-- 				<img src="http://placehold.it/728x90&text=ADVERTISEMENT" /> -->
	</div>
