    

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
	          <a class="left-off-canvas-toggle menu-icon" href="#"><span></span><h1>MENU</h1></a>
	        </section>
	        <section class="middle tab-bar-section">
	          <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_logo.svg"></a>
	          <div class="db-top-date text-center hide-for-small">
				<?php date_default_timezone_set('America/Los_Angeles'); ?>
				<p><span><?php echo date('l'); ?>, <?php echo date('F'); ?> <?php echo date('j'); ?></span></p>
			</div> 
	        </section>
<!--         	<form action="/" method="GET" id="search-mobile">
				<input type="search" placeholder="Search..." name="s"></input>
			</form> -->
	      </nav>

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
    <div id="stickyalias">
	      <nav class="tab-bar">
	        <section class="left-small">
	          <a class="left-off-canvas-toggle menu-icon" href="#"><span></span><h1>MENU</h1></a>
	        </section>
	        <section class="middle tab-bar-section">
	          <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/db_logo.svg"></a>
	        </section>
<!--         	<form action="/" method="GET" id="search-mobile">
				<input type="search" placeholder="Search..." name="s"></input>
			</form> -->

	      </nav>

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
        
	<div class="db-wrapper db-content">


<!-- TODO in the news! -->
