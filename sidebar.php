			<div class="large-4 columns">
				<?php get_template_part('ad','side'); ?>				
				<ul id="sidebar-list">
					<?php dynamic_sidebar('sidebar-primary'); ?>
				</ul><!-- end div#sidebar-list -->
				
				<?php if(!is_home()): 
					get_template_part('ad','side1');
					get_template_part('ad','side2');
				endif; ?>
			</div><!-- end div#sidebar-main -->
			
