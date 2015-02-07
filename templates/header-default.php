<div class="off-canvas-wrap db-off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
  </br>
	<div class="row">
    	<div class="db-ad-leaderboard text-center">
			<?php get_template_part('ad','banner'); ?>
		</div>
	</div>
	<hr>
  	<div id="stickyheader">
	      <nav class="tab-bar">
	        <section class="left-small">
	          <a class="left-off-canvas-toggle menu-icon" href="#"><span></span>
	          	<h1 class="hide-for-medium hide-for-small">&nbsp;MENU</h1>
	          </a>
	        </section>
	        <section class="middle tab-bar-section">
	          <a href="<?php echo home_url('/'); ?>">
		          <div class="db-logo">
		          	<img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_logo.svg">
		          </div>
		          <div class="db-logo-spectrum">
		          	<img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_logo_white.svg">
		          </div>
	          </a>

	        </section>
	       	<section class="text-right">
	          <a class="search-icon" href="#" data-reveal-id="search">
	          	<span class="hide-for-medium hide-for-small">SEARCH&nbsp;</span> <i class="fa fa-search"></i>
	          </a>
	        </section>
	        <div class="db-top-date text-center hide-for-small">
				<?php date_default_timezone_set('America/Los_Angeles'); ?>
				<p><span><?php echo date('l'); ?>, <?php echo date('F'); ?> <?php echo date('j'); ?></span></p>
			</div> 
		</br>
	      </nav>

        <aside class="left-off-canvas-menu">
          <ul class="off-canvas-list">
            <li class="text-center">
            	<a href="<?php echo home_url('/'); ?>"><img class="db-mobile-nav-logo" src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_icon.svg" /></a>
            	</li>
          </ul>
          <div class="db-nav-links">
          	<ul class="off-canvas-list"><li><label>Sections</label></li></ul>
  				<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 
							'menu_class' => 'off-canvas-list',
							'container' => '',
							'menu_id' => 'topMenu',
							'link_before' => '<span></span>'
							)); ?>
			<ul class="off-canvas-list"><li><label>Pages</label></li></ul>
  				<?php wp_nav_menu(array('theme_location' => 'top_navigation', 
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

	</div>
    <div id="search" class="reveal-modal" data-reveal>
    	<label>Powered by Google Custom Search:</label>
	  <gcse:search></gcse:search>
	</div>
    <div id="stickyalias">
	      <nav class="tab-bar">
	      <div class="alias-bar">
	       	<div class="small-10 columns">
	       	  <div class="db-nav-links">
	  				<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 
								'menu_class' => 'alias-list',
								'container' => '',
								'menu_id' => 'topMenu',
								)); ?>
	          </div>
	        </div>
	        <div class="search-alias small-2 columns text-right">
		      	<a class="search-icon" href="#" data-reveal-id="search">
		          	<span class="hide-for-medium hide-for-small"></span> <i class="fa fa-search"></i>
		        </a>
	        </div>
	       </div>
	      </nav>

    </div>
        
	<div class="db-wrapper db-content">


<!-- TODO in the news! -->
