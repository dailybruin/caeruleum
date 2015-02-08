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
	          <a class="menu-icon" href="#" data-reveal-id="menu">
	          	<span></span><h1 class="hide-for-medium hide-for-small">MENU</h1>
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
	          	<span class="hide-for-medium hide-for-small">SEARCH&nbsp;</span> <i class="fa fa-search"></i>
	          </a>
	        </section>
	        <div class="db-top-date text-center hide-for-small">
				<?php date_default_timezone_set('America/Los_Angeles'); ?>
				<p><span><?php echo date('l'); ?>, <?php echo date('F'); ?> <?php echo date('j'); ?></span></p>
			</div> 
		</br>
	      </nav>
	</div>
    <div id="stickyalias">
	      <nav class="tab-bar">
	        <section class="left-small">
	          <a class="menu-icon" href="#" data-reveal-id="menu">
	          	<span></span><h1 class="hide-for-medium  hide-for-small">MENU</h1>
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
							)); ?>
          </div>
	</div>
        
	<div class="db-wrapper db-content">


<!-- TODO in the news! -->
