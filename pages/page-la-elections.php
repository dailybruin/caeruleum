<?php/*
Template Name: LA Elections 2013
*/ ?>
<?php 
    wp_enqueue_script('jquery');
    wp_enqueue_script(
    	'audiojs',
    	get_template_directory_uri() . '/js/vendor/audio.min.js',
    	array('jquery')
    );
?>
<?php get_header(); ?>

								<script>
									audiojs.events.ready(function() {
									  var as = audiojs.createAll();
									});
									
									$(document).ready(function () {
										$('.m .candidate').click(function() {
											$(this).children('span').fadeIn('slow');
											$(this).children('span').css('display', 'block');
											$('.faces.m').addClass('noarr');
											$('.m a.close').fadeIn('slow');
										});
										$('.m a.close').click(function(event) {
											event.preventDefault();
											$('.m .candidate').children('span').fadeOut('slow');	
											$('.m a.close').fadeOut('slow');
											$('.faces.m').removeClass('noarr');
										});
										$('.cc .candidate').click(function() {
											$(this).children('span').fadeIn('slow');
											$(this).children('span').css('display', 'block');
											$('.faces.cc').addClass('noarr');
											$('.cc a.close').fadeIn('slow');
										});
										$('.cc a.close').click(function(event) {
											event.preventDefault();
											$('.cc .candidate').children('span').fadeOut('slow');	
											$('.cc a.close').fadeOut('slow');
											$('.faces.cc').removeClass('noarr');
										});
									});
								</script>
								<style>
								@import url(http://fonts.googleapis.com/css?family=Oswald:400,700);
								a.close {
								display: none;
								width: 15px;
								height: 15px;
								font-size: 50px;
								text-align: center;
								float: right;
								position: absolute;
								right: 25px;
								top: 0px;
								z-index: 15;
								}
								h1, h2, h3 {
								font-family: 'Oswald', sans-serif;
								font-weight: 700;
								text-transform: uppercase;
								font-size: 35px;
								color: #540000;
								}
								h1 {
								font-size: 100px;
								margin-top: 20px;
								line-height: 1;
								height: auto;
								text-align: center;
								}
								#social {
								position: relative;
								z-index: 10;
								height: 20px;
								margin-top: 5px;
								}
								#social .twitter-share-button {
								position: relative;
								bottom: 25px;
								}
								#byline {
								text-align: right;
								position: absolute;
								z-index: 10;
								right: 0px;
								top: 0px;
								}
								.row1 {
								color: rgb(51, 51, 51);
								display: block;
								font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
								font-size: 14px;
								line-height: 20px;
								margin-left: -30px;
								width: 1200px;
								}
								#election-header {
								background-image: url('http://dailybruin.com/images/features/la-election/banner.jpg');
								height: 466px;
								color: #fff;
								font-family: 'Oswald', sans-serif;
								position: relative;
								text-align: center;
								}
								#election-header p {
								position: absolute;
								top: 195px;
								color: #fff;
								left: 410px;
								font-size: 25px;
								}
								#election-header h1 {
								text-align: center;
								color: #fff;
								position: absolute;
								bottom: 0px;
								font-size: 116px;
								margin-left: 5px;
								}
								#election-header h6 {
								text-align: center;
								text-transform: uppercase;
								position: absolute;
								bottom: 165px;
								font-size: 107px;
								margin-left: 275px;
								}
								#intro-blurb {
								width: 800px;
								float: left;
								}
								#intro-blurb, #faq {
								padding: 20px 0px;
								}
								#intro {
								padding-bottom: 40px;
								}
								.separator {
								border-bottom: 3px solid #540000;
								clear: both;
								}
								#la-elections-2013 p {
								line-height: 1.5;
								text-indent: 25px;
								}
								.faces {
								width: 750px;
								height: 500px;
								float: left;
								position: relative;
								}
								.faces::after {
								content: "";
								position: absolute;
								top: 95px;
								right: -20px;
								z-index: 40;
								width: 0; 
								height: 0; 
								border-top: 30px solid transparent;
								border-bottom: 30px solid transparent;
								border-left: 30px solid #182650;
								}
								.faces.noarr .candidate:hover {
								box-shadow: none;
								-moz-box-shadow: none;
								-webkit-box-shadow: none;
								cursor: default;
								}
								.faces.noarr .candidate:hover p {
								text-decoration: none;
								cursor: inherit;
								}
								.faces.noarr::after {
								display: none;
								}
								.cc {
								height: 250px;
								}
								.faces:hover .candidate {
								cursor: pointer;
								}
								.candidate:hover, span .candidate, .candidate#c1 {
								cursor: default;
								}
								.candidate p {
								text-indent: 0px;
								}
								.candidate:hover p {
								text-decoration: underline;
								}
								.candidate p:hover {
								cursor: pointer;
								}
								#la-elections-2013 span {
								cursor: auto;
								margin-bottom: 20px;
								}
								span #pop-right p {
								width: 470px;
								float: right;
								text-indent: 25px;
								}
								span #pop-left p {
								margin-top: 20px;
								margin-bottom: 0px;
								}
								span #pop-left .audiojs p {
								margin-top: 0px;
								}
								span .audiojs {
								width: 240px;
								}
								span .audiojs .scrubber {
								width: 180px;
								}
								span h3 {
								margin-bottom: 10px;
								}
								#pop-left {
								clear: both;
								width: 240px;
								}
								.chosen #pop-left {
								position: absolute;
								right: 10px;
								}
								#pop-right {
								width: 470px;
								position: absolute;
								right: 20px;
								top: 0px;
								}
								#pop-right h3 {
								width: 450px;
								}
								.candidate {
								float: left;
								width: 200px;
								height: 200px;
								padding: 20px;
								position: relative;
								margin-right: 10px;
								margin-bottom: 10px;
								}
								.candidate::before {
								content: attr(data-name);
								display: block;
								font-family: 'Oswald', sans-serif;
								line-height: 1.2;
								font-weight: 700;
								text-transform: uppercase;
								font-size: 26px;
								color: #540000;
								color: #fff;
								padding: 20px 20px;
								width: 200px;
								height: 30px;
								position: absolute;
								bottom: 0px;
								left: 0px;
								text-shadow: 0px 0px 10px rgba(0,0,0,0.7);
								background: -moz-linear-gradient(top,  rgba(24,38,80,0) 0%, rgba(24,38,80,1) 100%); 
								background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(24,38,80,0)), color-stop(100%,rgba(24,38,80,1)));
								background: -webkit-linear-gradient(top,  rgba(24,38,80,0) 0%,rgba(24,38,80,1) 100%); 
								background: -o-linear-gradient(top,  rgba(24,38,80,0) 0%,rgba(24,38,80,1) 100%); 
								background: -ms-linear-gradient(top,  rgba(24,38,80,0) 0%,rgba(24,38,80,1) 100%); 
								background: linear-gradient(to bottom,  rgba(24,38,80,0) 0%,rgba(24,38,80,1) 100%); 
								filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00182650', endColorstr='#182650',GradientType=0 ); 
								}
								.candidate:hover {
								box-shadow: 0px 0px 20px #888;
								-moz-box-shadow: 0px 0px 20px #888;
								-webkit-box-shadow: 0px 0px 20px #888;
								}
								.candidate#c1 {
								background-color: #182650;
								color: #fff;
								}
								.candidate#c1 h3 {
								color: white;
								margin-top: 0px;
								-webkit-text-fill-color: #fff;
								position: relative;
								}
								.candidate#c1::before {
								background: none;
								}
								.candidate#c1 span {
								position: absolute;
								width: 640px;
								height: 390px;
								padding: 50px;
								text-align: center;
								color: #182650;
								top: 0px;
								left: 0px;
								background-color: rgba(255,255,255,0.9);
								}
								.candidate#c1 span h2 {
								color: #182650;
								}
								.candidate#c2 {
								background-image: url("http://dailybruin.com/images/features/la-election/emanuelpleitez.jpg");
								}
								.candidate#c3 {
								background-image: url("http://dailybruin.com/images/features/la-election/ericgarcetti.jpg");
								}
								.candidate#c4 {
								background-image: url("http://dailybruin.com/images/features/la-election/janperry.jpg");
								}
								.candidate#c5 {
								background-image: url("http://dailybruin.com/images/features/la-election/kevinjames.jpg");
								}
								.candidate#c6 {
								background-image: url("http://dailybruin.com/images/features/la-election/wendygruell.jpg");
								}
								.candidate#c7 {
								background-image: url("http://dailybruin.com/images/features/la-election/markherd.jpg");
								}
								.candidate#c8 {
								background-image: url("http://dailybruin.com/images/features/la-election/paulkoretz.jpg");
								}
								.candidate span {
								display: none;
								position: relative;
								width: 730px;
								height: 500px;
								background-color: #fff;
								z-index: 10;
								padding-right: 20px;
								}
								.candidate span h3 {
								margin-top: 0px;
								}
								.candidate.inset {
								margin-right: 20px;
								}
								.candidate.inset::before {
								background: none;
								}
								span.top {
								bottom: 20px;
								}
								span.bottom {
								bottom: 270px;
								}
								span.middle {
								right: 270px;
								}
								span.left {
								right: 20px;
								}
								span.right {
								right: 520px;
								}
								.endorsement {
								position: relative;
								z-index: 12;
								margin-bottom: 20px;
								}
								#faq {
								width: 360px;
								float: right;
								}
								#faq h3 {
								text-align: center;
								margin-top: 0px;
								}
								#faq .question {
								text-align: center;
								width: 330px;
								border: 3px solid #540000;
								margin: 10px auto;
								padding: 10px 5px;
								position: relative;
								}
								#faq .question:hover {
								background-color: #540000;
								color: #fff;
								cursor: pointer;
								}
								#faq .answer {
									display: none;
								}
								#faq .question:hover .answer {
									display: block;
									float: left;
									background-color: #fff;
									color: #540000;
									padding: 10px;
									border: 3px solid #540000;
									z-index: 50;
									position: absolute;
									width: 320px;
									left: -347px;
									top: -3px;
									height: auto;
									text-align: left;
								}
								.endorsement, #mc-pic {
								width: 400px;
								float: right;
								padding-left: 30px;
								}
								.endorsement h3, #mayor-care h3 {
								font-family: 'Georgia', serif;
								text-transform: none;
								font-style: italic;
								line-height: 1;
								margin-top: -3px;
								}
								#mayor-care {
								width: 700px;
								padding-right: 50px;
								margin-bottom: 20px;
								float: left;	
								}
								#pop-right h3 {
								font-family: 'Georgia', serif;
								text-transform: none;
								font-style: italic;
								line-height: 1;
								}
								#mayor-care, #mc-pic {
								margin-top: 40px;
								}
								#mc-pic {
								background-image: url('http://dailybruin.com/images/features/la-election/debate.jpg');
								position: relative;
								padding-left: 0px;
								height: 273px;
								margin-bottom: 40px;
								}
								#mc-pic p {
								position: absolute;
								bottom: -40px;
								left: 0px;
								color: rgba(0,0,0,0.5);
								text-align: left;
								font-style: italic;
								}
								#mc-pic::before {
								content: "";
								position: absolute;
								top: 107px;
								left: -30px;
								z-index: 40;
								width: 0; 
								height: 0; 
								border-top: 30px solid transparent;
								border-bottom: 30px solid transparent;
								border-right: 30px solid #182650;
								}
								#mc-pic::after {
								content: "Daily Bruin file photo";
								position: absolute;
								text-shadow: 0px 0px 10px rgba(0,0,0,0.7);
								color: #fff;
								bottom: 5px;
								right: 5px;
								}
								.row1.last {
								margin-top: 40px;
								}
								</style>
<div id="la-elections-2013">
								<div class="row1"><div id="election-header"><p><i>The Daily Bruin&rsquo;s</i></p><h6>Los Angeles</h6><h1>Election Endorsements</h1></div></div>
								
								<div class="row1" id="social">
                                <a href="https://twitter.com/share" class="twitter-share-button" data-related="dailybruin">Tweet</a>
								<div class="fb-like" data-send="true" data-width="450" data-show-faces="true"></div>
								<span id="byline">Page design by <a href="mailto:jwu@media.ucla.edu">James Wu</a>, Bruin contributor</span>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								</div>
								<div class="row1">
								<div id="intro">
								<div id="intro-blurb"><p>On March 5, Los Angeles voters will cast ballots in two important electoral races: mayor and city council. There are eight candidates running for mayor, and if no candidate receives a majority of the vote in the March 5 primary, the top two finishers will advance to a runoff on May 21. There are two candidates running for the Los Angeles City Council seat for the Fifth district, which includes Westwood.</p>
								<p>The Daily Bruin editorial board, which represents the voice of the entire newspaper, has endorsed a candidate for each race - the candidate we think has UCLA and Los Angeles&rsquo; best interests at heart, a strong vision for the city, and the capability to effect real change.</p>
								<p>The editorial board conducted interviews with the five leading mayoral candidates and the two city council candidates for the Fifth district. After all these interviews had been conducted, the board voted on which candidates to endorse. The unsigned endorsements reflect the majority opinion of the board. We encourage students to use our endorsements as a starting point for conducting their own research, forming their own educated opinions and casting an informed vote.</p>
								<i>Unsigned editorials represent the majority opinion of the editorial board.</i>
								</div>
								<div id="faq"><h3>FAQ</h3>
								<div class="question">Can I vote in the March 5 election?<span class="answer">To vote in the election, you must have registered to vote in Los Angeles County by Feb. 19.</span></div>
								<div class="question">Where can I vote?<span class="answer">To find your polling place, visit <a href="http://lavote.net/Locator/">lavote.net/Locator</a>. Polls open at 7 a.m. and close at 8 p.m.</span></div>
								<div class="question">What is on the ballot?<span class="answer"><ul>
									<li>mayor</li>
									<li>city attorney</li>
									<li>controller</li>
									<li>city councilmembers</li>
									<li>Los Angeles Unified School District member of the board of education</li>
									<li>Los Angeles Community College District member of the board of trustees</li>
									<li>Proposition A: Raises the city’s sales tax by half a percent to fund public safety services and other services</li>
									<li>Charter Amendment B: Fire and police pension plan</li>
								</ul></span></div>
								</div>
								<div class="separator"></div>
								</div>
								</div>
								<div class="row1">
								<div class="faces m">
								<a class="close" href="#">&times;</a>
								<div class="candidate" id="c1"><h3>Mayoral candidates</h3><p>Click here for more information about the editorial board&rsquo;s interview process &gt;</p><span class="top left"><h2>The interview process</h2><p>The board conducted interviews that lasted around 20 minutes with the five leading mayoral candidates: City Councilman Eric Garcetti, City Controller Wendy Greuel, attorney and radio talk show host Kevin James, City Councilwoman Jan Perry and technology executive Emmanuel Pleitez. Candidates were asked how they would partner with UCLA in its capacity as a major public institution in the city if elected. Candidates also answered questions on their policies on transportation, job creation, community revitalization and K-12 education. Because of candidate availability, the board interviewed Perry and Pleitez in person, and conducted the other interviews over the phone.</p></span></div>
								<div class="candidate" id="c2" data-name="Emanuel Pleitez"><span class="top middle">
								<div id="pop-left"><div class="candidate inset" id="c2"></div>
								<h3>Emanuel Pleitez</h3><i>Technology Executive</i> 
								<p><i>Listen: Pleitez discusses how UCLA fits into his vision for Los Angeles</i></p>
								<audio src="http://dailybruin.com/images/features/la-election/pleitez.mp3" preload="auto" />
								</div>
								<div id="pop-right">
								<h3>Emanuel Pleitez provides worthy ideas for future development</h3>
								<p>Although Emanuel Pleitez is running a grassroots campaign and is currently not favored to win, he has developed interesting ideas that are worth considering regardless of who ultimately wins office.</p>
								<p>Pleitez is familiar with the Office of the Mayor, having worked twice for current Los Angeles mayor Antonio Villaraigosa, but the ideas that he is campaigning on are fresh and innovative.</p>
								<p>This board was particularly interested in his ideas on mayoral involvement with higher education institutions and improving public transportation.</p>
								<p>Pleitez has a clear idea of how the mayor&rsquo;s office should partner with higher education institutions such as UCLA. He focuses on developing research partnerships between the universities in Los Angeles and also on developing classes for the public to learn more workplace skills such as technology use.</p>
								<p>These classes would be run throughout the city and involve a variety of different topics that are necessary in today’s workplace – Pleitez mentioned data analysis and technology specifically.</p>
								<p><a href="http://dailybruin.com/?p=127337">Read more...</a></p>
								</div>
								</span></div>
								<div class="candidate chosen" id="c3" data-name="Eric Garcetti"><span class="top right">
								<div id="pop-left"><div class="candidate inset" id="c3"></div>
								<h3>Eric Garcetti</h3><i>City Councilman</i> 
								<p><i>Listen: Garcetti discusses how UCLA fits into his vision for Los Angeles</i></p>
								<audio src="http://dailybruin.com/images/features/la-election/garcetti.mp3" preload="auto" />
								</div>
								</span></div>
								<div class="candidate" id="c4" data-name="Jan Perry"><span class="bottom left">
								<div id="pop-left"><div class="candidate inset" id="c4"></div>
								<h3>Jan Perry</h3><i>City Councilwoman</i> 
								<p><i>Listen: Perry discusses how UCLA fits into her vision for Los Angeles</i></p>
								<audio src="http://dailybruin.com/images/features/la-election/perry.mp3" preload="auto" />
								</div>
								<div id="pop-right">
								<h3>Jan Perry strong on education plan, but lacks blueprint for jobs</h3>
								<p>Jan Perry&rsquo;s understanding of the Los Angeles Unified School District and her thoughtfulness in other policy areas make her a candidate we would trust as mayor. But, with factors like the revitalization of Westwood and job creation, she fell short of Eric Garcetti.</p>
								<p>Perry knows the strengths and weaknesses of the city&rsquo;s education system. As a city councilwoman, she brought more schools to areas near transportation corridors, making them more accessible to families without cars. Her focus on the elementary to middle school transition, where grades and standardized test levels start to fall off, could help remedy the drop-off in the current education system.</p>
								<p>Perry is also very knowledgeable about the city’s transportation system and has served as chair of the Metropolitan Transportation Authority&rsquo;s Exposition Light Rail Construction Authority. If elected mayor, she plans to expand the Green Line of the city&rsquo;s light rail system to extend all the way to Los Angeles International Airport. During her time as city councilwoman, Perry has also pushed for the expansion of the city&rsquo;s current subway system.</p>
								<p><a href="http://dailybruin.com/?p=127332">Read more...</a></p>
								</div>
								</span></div>
								<div class="candidate" id="c5" data-name="Kevin James"><span class="bottom middle">
								<div id="pop-left"><div class="candidate inset" id="c5"></div>
								<h3>Kevin James</h3><i>Attorney and Radio Talk Show Host</i> 
								<p><i>Listen: James discusses how UCLA fits into his vision for Los Angeles</i></p>
								<audio src="http://dailybruin.com/images/features/la-election/james.mp3" preload="auto" />
								</div>
								<div id="pop-right">
								<h3>Kevin James missing experience in city planning, politics</h3>
								<p>Kevin James, a former assistant U.S. attorney, has a wealth of experience in the legal field, but lacks the city planning and political experience that is necessary to be the mayor of a large metropolitan city like Los Angeles.</p>
								<p>Though James has several interesting ideas for what he would do as mayor, they are not as well thought-out or specific as some of his opponents&rsquo; plans.</p>
								<p>For example, James supports a proposal for the Jobs Education Medical Services Line, which would create an underground rail tunnel to connect the San Fernando Valley to Westwood.</p>
								<p>There are already plans for money from Measure R – a tax measure for public transportation passed in 2008 – to go toward a San Fernando Valley North-South Transit Corridor. The details of these plans are still in the works. One option being looked at is increased transportation networks between the Valley and UCLA for the many commuters who travel between these two areas.</p>
								<p>We appreciate James&rsquo; backing of what could be a beneficial public transportation line for UCLA students, but the idea needs to be further developed and gain more traction with the public.</p>
								<p><a href="http://dailybruin.com/?p=127351">Read more...</a></p>
								</div>
								</span></div>
								<div class="candidate" id="c6" data-name="Wendy Greuel"><span class="bottom right">
								<div id="pop-left"><div class="candidate inset" id="c6"></div>
								<h3>Wendy Greuel</h3><i>City Controller</i> 
								<p><i>Listen: Greuel discusses how UCLA fits into her vision for Los Angeles</i></p>
								<audio src="http://dailybruin.com/images/features/la-election/greuel.mp3" preload="auto" />
								</div>
								<div id="pop-right">
								<h3>Wendy Greuel presents few concrete ideas on job growth</h3>
								<p>Wendy Greuel, who serves as the city’s accountant in her role as controller, may have received her degree from UCLA, but she still seems ill-equipped to address issues facing Westwood and students on campus.</p>
								<p>In discussing her platform with this board, Greuel presented some ideas but little research to prove any could actually work at UCLA. </p>
								<p>When it came to job growth, Greuel spoke in generalities about linking students with their future careers and getting students to remain in Los Angeles after graduation. She floated the idea of installing an incubator program, designed to foster small business growth in its area, on campus, citing research that said similar programs had succeeded at USC.</p>
								<p>But Greuel offered no comments on how one would work at UCLA.</p>
								<p>Although she went to school during a time when Westwood had a higher profile, Greuel could not specify how to return the village to that level of vitality, saying she would need to meet with the neighborhood council, homeowners and students. This is a first step that some among her competition have already taken.</p>
								<p><a href="http://dailybruin.com/?p=127345">Read more...</a></p>
								</div>
								</span></div>
								</div>
								<div class="endorsement">
								<h3>Eric Garcetti displays preparedness in solutions</h3>
								<p>This board endorses Eric Garcetti for mayor because he understands the specific problems that different parts of Los Angeles face and has tailored solutions for each, along with economically feasible ways of funding their implementation.</p>
								<p>In an interview with the editorial board, Garcetti provided more thorough solutions than his opponents to problems in education, community and transportation, to name just a few areas.</p>
								<p>Garcetti wants to work with the major colleges of Los Angeles in order to help students get employed after graduation, and this board sees him as the best candidate for UCLA students, as well as for Los Angeles as a whole.</p>
								<p>One such plan is to work with UCLA, the University of Southern California and California Technological Institute to keep engineering students in Los Angeles after they graduate. Not only would this help college graduates and employment within the city, but it would make Los Angeles more startup-friendly, and contribute to the growth of the technology and engineering sectors, where employees are in demand.</p>
								<p><a href="http://dailybruin.com/?p=127312">Read more...</a></p>
								</div>
								<div class="separator"></div>
								<div id="mayor-care">
								<h3>University relations should be priority</h3>
								<p>It is in the best interest of both UCLA and the city government – and most importantly, of the Angelenos voting on Tuesday – for the relationship between the city&rsquo;s higher education institutions and City Hall to grow.</p>
								<p>Los Angeles plays host to several high-profile universities, notably the California Institute of Technology and the University of Southern California. The next mayor should make it a priority to strengthen collaboration with and between the city&rsquo;s schools.</p>
								<p>These universities act as much more than a set of classrooms and laboratories – they hold the capability of producing the city’s next generation of leaders and innovators in both public and private sectors. They have the greatest potential for ensuring an economically and socially successful future for our city.</p>
								<p>In recent years, UCLA&rsquo;s partnership with the city has been strengthened under alumnus and current mayor Antonio Villaraigosa, said Felicia Brannon, executive director of local government and community relations at UCLA. The ties to the city extend to numerous areas of campus, both administrative and academic, Brannon added.</p>
								<p><a href="http://dailybruin.com/2013/03/04/editorial-university-relations-should-be-priority-for-city-hall/">Read more...</a></p>
								</div>
								<div id="mc-pic"><p>Five mayoral candidates debated in Royce Hall on Jan. 28.</p></div><div class="separator"></div>
								</div>
								<div class="row1 last">
								<div class="faces cc">
								<a class="close" href="#">&times;</a>
								<div class="candidate" id="c1"><h3>City Council candidates</h3><p>Click here for more information about the editorial board&rsquo;s interview process &gt;</p><span class="top left"><h2>The interview process</h2><p>The board conducted interviews that lasted around 20 minutes with Paul Koretz and Mark Herd, the two candidates running to represent the Fifth district. Candidates were asked how they would partner with UCLA, and to discuss their plans for business retention, Westwood revitalization, and policies on dancing permits and alcohol licensing. Because of candidate availability, the board interviewed Herd in person, and interviewed Koretz over the phone.</p></span></div>
								<div class="candidate" id="c7" data-name="Mark Herd">
								<span class="top middle">
								<div id="pop-left"><div class="candidate inset" id="c7"></div>
								<h3>Mark Herd</h3><i>Westwood Neighborhood Council member</i> 
								<p><i>Listen: Herd discusses the role of UCLA in Los Angeles and how the university fits into his vision</i></p>
								<audio src="http://dailybruin.com/images/features/la-election/herd.mp3" preload="auto" />
								</div>
								<div id="pop-right">
								<h3>Mark Herd lacks complete grasp of a councilmember&rsquo;s role</h3>
								<p>We do not think Mark Herd is qualified to take over for current councilmember Paul Koretz, because Herd offered unrealistic or shallow solutions to problems, both in Westwood and at the city level.</p>
								<p>Herd – a Westwood resident who grew up in the Village – is familiar with some local problems, like high business turnover rate and the tension between UCLA students and longtime Westwood residents, but does not have a firm grasp on how to address them effectively.</p>
								<p>Herd also brought up topics that reflect a disconnect between his priorities and those of the university&rsquo;s community. He took issue with UCLA&rsquo;s construction of new buildings, for example, and is concerned about projects simply because they might bring traffic to Westwood – even if they would also bring more jobs.</p>
								<p>To be fair, Herd was part of the effort to keep free two-hour parking on Broxton Avenue. He also understands the struggle for small business owners who face high turnover rates in the Village, and wants to reform the gross receipts tax to make it easier for businesses to stay afloat. Koretz also wants to alter this tax on business revenue, but has a more nuanced way of achieving it.</p>
								<p><a href="http://dailybruin.com/?p=127316">Read more...</a></p>
								</div>
								</span>
								</div>
								<div class="candidate chosen" id="c8" data-name="Paul Koretz">
								<span class="top right">
								<div id="pop-left"><div class="candidate inset" id="c8"></div>
								<h3>Paul Koretz</h3><i>City Councilman</i> 
								<p><i>Listen: Koretz discusses the role of UCLA in Los Angeles and how the university fits into his vision</i></p>
								<audio src="http://dailybruin.com/images/features/la-election/koretz.mp3" preload="auto" />
								</div>
								</span>
								</div>
								</div>
								<div class="endorsement">
								<h3>Paul Koretz has effected change for students</h3>
								<p>Incumbent Paul Koretz has our vote for representing the 5th District – partly because of his know-how, partly because of his feasible ideas, but mostly because he is a far better candidate than his opponent.</p>
								<p>Mark Herd, who is running against Koretz, is certainly familiar with the Westwood area. But during his interview with the Daily Bruin&rsquo;s Editorial Board, Herd showed he had little understanding of what it would mean to be an effective, sensible representative at the city level.</p>
								<p>Koretz, on the other hand, displayed a firm grasp of the issues that have played a part in Westwood’s declining vitality over the past few decades. Acknowledging that a problem exists, however, is not enough. Though Koretz offered some solutions, his lack of an expansive vision disappoints us.</p>
								<p>During his interview with the editorial board, Koretz said adequate parking in Westwood was &ldquo;key&rdquo; to the neighborhood&rsquo;s revival. He suggested converting parallel parking spots into angled parking spots, which might create 20 to 50 new spaces, he said.</p>
								<p><a href="http://dailybruin.com/?p=127331">Read more...</a>
								</div>
    							</div>
</div><!-- end div#la-elections-2013 -->
<?php get_footer(); ?>
