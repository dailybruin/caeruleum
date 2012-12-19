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

<nav class="container" id="nav-nameplate">
	<div class="row">
		<div class="span12" id="nameplate">
			<a href="<?php echo home_url('/'); ?>"><img src="/img/nameplate.png" /></a>
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
	<div class="row">
		<div class="span7" id="inthenews">
			<span>In the news:</span>
			<?php wp_nav_menu(array('theme_location' => 'in_the_news', 
						'container' => '',
						)); ?>
		</div><!-- end div#inthenewscont -->
		<div class="span5" id="followus">
			<a href="https://twitter.com/dailybruin" class="twitter-follow-button" data-show-count="false">Follow @dailybruin</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<div class="fb-follow" data-href="https://www.facebook.com/dailybruin" data-show-faces="false" data-font="arial" data-width="225"></div>
		</div>
	</div><!-- end div.row -->
</div><!-- end div.container -->
