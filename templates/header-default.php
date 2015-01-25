    
<header id="topinfo">
<div class="off-canvas-wrap db-off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	    <div class="fixed">
	      <nav class="tab-bar">
	        <section class="left-small">
	          <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
	        </section>
	        <section class="middle tab-bar-section">
	          <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_logo.svg"></a>
<!-- 	         <div class="spandate hidden-phone">
				<?php date_default_timezone_set('America/Los_Angeles'); ?>
				<span id="date-month"><?php echo date('F'); ?></span><br />
				<span id="date-day"><?php echo date('j'); ?></span>
			</div> -->
	        </section>
<!--         	<form action="/" method="GET" id="search-mobile">
				<input type="search" placeholder="Search..." name="s"></input>
			</form> -->
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
          	<ul class="off-canvas-list"><li><label>Sections</label></li></ul>
  				<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 
							'menu_class' => 'off-canvas-list',
							'container' => '',
							'menu_id' => 'topMenu',
							)); ?>
			<ul class="off-canvas-list"><li><label>Follow Us</label></li></ul>
  				<?php wp_nav_menu(array('theme_location' => 'share_footer', 
							'menu_class' => 'off-canvas-list',
							'container' => '',
							'menu_id' => 'topMenu',
							)); ?>
          </div>
        </aside>

	<div class="db-wrapper db-content">
	
	    <div class="row">
	    	<div class="db-ad-leaderboard">
				<?php get_template_part('ad','banner'); ?>
			</div>
	    </div>
	</div>

	<div class="container">

		<div class="row">

<!-- end ad div (span8) -->

		</div><!-- end div.row (header row) -->
		<div class="row visible-phone mobile-nav">
			<img id="nameplate-mobile" src="/img/nameplate-mobile.png" />
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<nav id="nav-collapse" class="accordion-body collapse">

				<?php wp_nav_menu(array('theme_location' => 'mobile_navigation')); ?>
			</nav>
		</div>
	</div><!-- end div.container -->
</div>
</header>
<div class="off-canvas-wrap db-off-canvas-wrap" data-offcanvas>

	
<div id="firstnav-container-back" class="hidden-phone">
	<div class="container" id="firstnav-container">
		<nav class="row" id="firstnav">
			<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 
									'menu_class' => 'navlist span12',
									'container' => '',
									'menu_id' => 'topMenu',
									)); ?>
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
