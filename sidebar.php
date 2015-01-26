			<div class="span4 sidebar" id="sidebar-main">
				<?php get_template_part('ad','side'); ?>				
				<ul id="sidebar-list">
                    <?php if(is_category( 'radio-shows' )) { ?>
                       <!-- <h1><a href="http://dailybruin.com/radio-about-the-hosts" target="_blank\">Meet the hosts</a></h1>-->
                        <!--<img src=\"http://dailybruin.com/images/2014/05/meral.jpg\"/>-->
                        
                        <li><h4>Radio: About the hosts</h4>
                            <div class="textwidget"><div class="longstoryshort">
                            <!--<img src="/img/radio.jpeg">-->
                            <p>Our live show, Long Story Short, streams live online Mondays at 6 p.m. on <a href="http://uclaradio.com">UCLARadio.com</a>.</p>
                            <a href="http://dailybruin.com/radio-about-the-hosts/" class="btn">Meet the hosts</a>
                            </div></div>
                         </li>

                    <?php } ?>

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
			
