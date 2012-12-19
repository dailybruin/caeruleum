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
		

	<div class="container ad hidden-phone" style="margin-bottom:10px;">
		<iframe id='ae976b13' name='ae976b13' src='http://www.oncampusweb.com/delivery/afr.php?zoneid=129&amp;cb=18971928374158792837213' framespacing='0' frameborder='no' scrolling='no' width='728' height='90'><a href='http://www.oncampusweb.com/delivery/ck.php?n=afcf8f4b&amp;cb=18971928374158792837213' target='_blank'><img src='http://www.oncampusweb.com/delivery/avw.php?zoneid=129&amp;cb=18971928374158792837213&amp;n=afcf8f4b' border='0' alt='' /></a></iframe>
<!-- 				<img src="http://placehold.it/728x90&text=ADVERTISEMENT" /> -->
	</div>
