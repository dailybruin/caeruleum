<?php get_header(); ?>
<div class="classifieds-page">
<div class="row" id="single-post">
	<div class="small-8 columns" id="post">
		<?php get_template_part('loop', 'classified'); ?>
	</div><!-- end div#post -->
	
	<aside class="small-4 columns" id="sidebar" role="complementary">
		<div id="sidebar-inside">
		
			<div id="place-ad">
				<div class="side-head">
					<a href="http://adpro.media.ucla.edu/online" class="btn btn-inverse classifieds-button text-center" target="_blank"><button class="success expand">Place a Classified Ad</button></a>
				</div><!-- end div.side-head -->
				<div class="side-info">
					<div class="btn-group classifieds-button-group text-center">
						<a href="http://dailybruin.com/images/ads/classifieds_rates.pdf" class="btn classifieds-button-small"><button><i class="icon-tasks"></i>Get Rates</button></a>
						<a href="http://dailybruin.com/images/ads/classifieds_calendar.pdf" class="btn classifieds-button-small"><button><i class="icon-calendar"></i> Publication Calendar</button></a>
					</div><!-- end div.btn-group -->
					
					<p>Daily Bruin classifieds are the best way to find qualified applicants for your job openings or rental vacancies. Your classified ad appears every day in the Daily Bruin and online and weekly in the Corsair, the campus newspaper at nearby Santa Monica City College.</p>
					<p>Deadline for placing an ad is 12 noon, one business day before publication. Payment must be received before deadline. In order to receive the flat rate, the ad must be 20 words or fewer. Anything with a space before and after is counted as one word. We reserve the right to edit ads.</p>
					<p>You can also order over the phone by calling <a href="tel:3108252221">310-825-2221</a>.</p>
					<p><a href="http://adpro.media.ucla.edu/online" target="_blank">Click here to place a classified ad &raquo;</a></p>


				</div><!-- end div.side-info -->
				              <div class="db-ad-rectangle hide-for-medium hide-for-small">
                <?php get_template_part('ad','side'); ?>
              </div>
			</div><!-- end div#place-ad -->

		

			


			
			

		</div><!-- end div#sidebar-inside -->
	</aside><!-- end aside#sidebar -->
</div><!-- end div#single-post -->      
</div>

<?php get_footer(); ?>