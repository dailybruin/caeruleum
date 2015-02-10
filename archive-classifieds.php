<?php get_header(); ?>
<div class="classifieds-page">
<div class="row" id="single-post">
	<div class="large-8 columns" id="post">
		<?php get_template_part('loop', 'classified'); ?>
	</div><!-- end div#post -->
	
	<aside class="large-4 columns" id="sidebar" role="complementary">
		<div id="sidebar-inside">
		
			<div id="place-ad">
				<div class="side-info">
					<div class="btn-group classifieds-button-group text-center">
						<a href="http://dailybruin.com/images/ads/classifieds_rates.pdf" class="text-center">
							<button><i class="fa fa-bars"></i> Rates</button>
						</a>
						<a href="http://dailybruin.com/images/ads/classifieds_calendar.pdf" class="text-center">
							<button><i class="fa fa-calendar"></i> Publication Calendar</button>
						</a>
					</div><!-- end div.btn-group -->
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