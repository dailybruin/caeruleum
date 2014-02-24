			<div class="span4 sidebar" id="sidebar-main">
				<?php get_template_part('ad','side'); ?>				
				<ul id="sidebar-list">
					<?php dynamic_sidebar('sidebar-primary'); ?>
				</ul><!-- end div#sidebar-list -->
				
				<?php if(!is_home()): 
					get_template_part('ad','side1');
					get_template_part('ad','side2');
				endif; ?>
                <ul class="misc">
                    <li><a href="http://dailybruin.com/submit/">Send a submission</a></li>
                    <li><a href="http://dailybruin.com/records-requests/">Records requests</a></li>
                </ul>
			</div><!-- end div#sidebar-main -->
			
