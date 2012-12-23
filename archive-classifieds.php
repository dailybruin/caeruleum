<?php get_header(); ?>

<div class="row" id="single-post">
	<div class="span8" id="post">
		<?php get_template_part('loop', 'classified'); ?>
	</div><!-- end div#post -->
	
	<aside class="span4" id="sidebar" role="complementary">
		<div id="sidebar-inside">
		
			<div id="place-ad">
				<div class="side-head">
					<h4>Place a Classified Ad</h4>
				</div><!-- end div.side-head -->
				<div class="side-info">
					<p>Daily Bruin classifieds are the best way to find qualified applicants for your job openings or rental vacancies. Your classified ad appears every day in the Daily Bruin and online and weekly in the Corsair, the campus newspaper at nearby Santa Monica City College.</p>
					<p>Deadline for placing an ad is 12 noon, one business day before publication. Payment must be received before deadline. In order to receive the flat rate, the ad must be 20 words or fewer. Anything with a space before and after is counted as one word. We reserve the right to edit ads.</p>
					<p>You can also order over the phone by calling <a href="tel:3108252221">310-825-2221</a>.</p>
					<p><a href="http://adpro.media.ucla.edu/online">Place a classified ad</a></p>


				</div><!-- end div.side-info -->
			</div><!-- end div#place-ad -->

		

			
			<div class="row">		
				<?php get_template_part('sidebar'); ?>      
			</row>

			
			

		</div><!-- end div#sidebar-inside -->
	</aside><!-- end aside#sidebar -->


</div><!-- end div#single-post -->      


<?php get_footer(); ?>