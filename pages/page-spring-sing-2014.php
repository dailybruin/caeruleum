<?php/*
Template Name: Spring Spring 2014 
*/ ?>
<?php get_header(); ?>

<style type="text/css">

@media (min-width: 479px) {
	#tweets {
		max-width: 47%;
		float:left;
	}

	#videos {
		max-width: 47%;
		float: right;	
	}
}

@media (max-width: 545px) {
	#banner h1{
		float: left;
		text-align: left;
		padding-left: 10px;
		padding-top: 120px;
	}	
}

@media (min-width:546px) {
	#banner h1{
		text-align: right;
		padding-right: 10px;
		padding-top: 5px;
	}
}

@media (max-width: 980px) {
	#banner{
		border-radius: 10px;
	}	
}

@media (min-width: 980px) {


	#cards {
		max-width: 75%;
		min-height: 100%;
	}

	#tweets {
		max-width: 25%;
		float: right;	
		position: static;
	}

	#videos {
		max-width: 25%;
		float: right;
		position: static;
	}
}




#banner {
	width: 100%;
	max-width: 750px;
	height: 350px;
	background: url(http://dailybruin.com/images/galleries/2014-spring-sing/JU4.jpg) no-repeat center center;
    background-sizing: cover;
	margin: 0px auto 50px auto;
	background-size: cover;
	
}

#banner-background {
	max-width: 940px;
	border-radius:10px;
	margin: 0 auto;
}

#banner h1 {
	font-size: 75px;
	line-height: 70px;
	color: white;
	text-shadow: 1px 1px 1px #888;
}

#content {
	width: 100%;
	margin: 0 auto;
	display: block;
	height: auto;	
}

#cards {
	float: left;
	width: 100%;
	min-height: auto;
	display: inline-block;
	text-align: center;
	border-radius: 10px;
}


#profiles {
	margin: 0;
	list-style-type: none;
	padding: 10px;
	display: -webkit-flex;
	-webkit-flex-direction: row;
	-webkit-flex-wrap: wrap;
	-webkit-justify-content: space-around;
}

#profiles > li {
	height: 100%;
	width: 240px;
	margin: 10px;
	border-radius: 10px;
	background-color:#DBF0FF;
	padding: 10px;
	
}

.contestant {
	position: relative;
}

.contestant > h3 {
	text-transform: none;
	font-size: 22px;
}
 
.facts {
	list-style-type: none;
	font: #FFFFFF;
	text-align: left;
	margin: 10px 0px 0px;
}

.facts li {
	border-radius: 10px;
	background-color: white;
	margin: 10px auto;
	padding: 10px;
}

.bottomright {
	position: absolute;
	bottom: 0px;
}

.artist_quote {
	margin: 25px auto;
	font-size: 18px;
	display: inline-block;
	text-align: center;
	font-style: italic;
}

.link_to_article {
	float: right;
	border-radius: 10px;
	background-color: white;
	margin: 10px auto;
	padding: 5px 15px;
}



#tweets {
	width: 100%;
	margin: 15px 0;
	height: auto;
	display: inline-block;
}

#videos {
	width: 100%;
	margin: 0;
	height: auto;
	display: inline-block;
}

.video-container {
    position: relative;
    margin: 15px 0;
    padding-bottom: 56.25%;
    padding-top: 30px; height: 0; overflow: hidden;
}
 
.video-container iframe,
.video-container object,
.video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

#tweets > h3, #videos > h3 {
	text-transform: none;
}

.hidden {
	display: none;
}

.storify {
    height: 600px;
    overflow-y: scroll;
    margin: 0 20px 40px 0;
}

</style>

<div id="banner-background">
	<div id="banner">
		<h1>Spring<br>Sing<br>2014</h1>
	</div>
</div>


<div id="content">

	<div id="cards">

        <div class="storify"><iframe src="//storify.com/dailybruin/ucla-spring-sing-2014/embed?border=false" width="100%" height=750 frameborder=no allowtransparency=true></iframe><script src="//storify.com/dailybruin/ucla-spring-sing-2014.js?border=false"></script><noscript>[<a href="//storify.com/dailybruin/ucla-spring-sing-2014" target="_blank">View the story "UCLA Spring Sing 2014" on Storify</a>]</noscript></div>

		<h1>Talent: Solos</h1>
		<ul id="profiles">

			<li>
				<div class="contestant">
					<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/nessa-rica.jpg"></img>
					<h3> Nessa Rica </h3>
					<h5>Genre: Acoustic, Pop, R&B</h5>
					<ul class="facts">
						<li>Fourth-year geography student</li>
						<li>Will perform an unannounced original song</li>
						<li>Over 11,000 subscribers on her YouTube channel, "52ness."</li>
					</ul>
					
					<p class="artist_quote">"I'm hoping to get out the experience of being <br/> a part of something bigger than myself."</p>
					<a class="link_to_article" href="http://dailybruin.com/2014/05/12/spring-sing-profile-nessa-rica/">Read More...</a>
				</div>
			</li>

			<li>
				<div class="contestant">
					<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/mia-joy-2014.jpg"></img>
					<h3> Mia Joy </h3>
					<h5>Genre: Singer-songwriter</h5>
					<ul class="facts">
						<li>Fourth-year musical theater student</li>
						<li>Spring Sing song: "Break for You," an original song</li>
						<li>Involved in musical theater and dance for most of her life.</li>
					</ul>
					
					<p class="artist_quote">"This song is about recognizing I can't change myself for love, and it <br/>felt like a release when I was writing it."</p>

					<a class="link_to_article" href="http://dailybruin.com/2014/05/12/spring-sing-profile-mia-joy/">Read More...</a>
				</div>
			</li>

			<li>
				<div class="contestant">
					<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/sienna-moffitt.jpg"></img>
					<h3> Sienna Moffitt </h3>
					<h5>Genre: Nu-folk, British folk</h5>
					<ul class="facts">
						<li>Second-year Design | Media Arts student</li>
						<li>Spring Sing song: "I Shan't Be There (When You Go)," an original song</li>
					</ul>
					
					
					<p class="artist_quote"> "My music is intentional ... every line I say means something from <br/>a part of my life."</p>

					<a class="link_to_article" href="http://dailybruin.com/2014/05/12/spring-sing-profile-sienna-moffitt/">Read More...</a>
				</div>
			</li>
		</ul>

		
			<h1 style="margin-top:50px">Talent: Duets</h1>
			<ul id="profiles">

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/3b641b1c-ee99-481c-a071-f32f0be8a86a.jpg"></img>
						<h3> Courtney Randall & Beat Rhino </h3>
						<h5>Genre: Acoustic, Beatbox, Pop</h5>
						<ul class="facts">
							<li>Spring Sing song: "Heaven," an original song</li>
							<li>Met through Kerckhoff Coffee House performances in fall 2013.</li>
						</ul>
						
						<p class="artist_quote">"We're both the lead in our performance, and we're excited to put the beatboxing in focus right next to my singing" – Courtney Randall</p>
						<a class="link_to_article" href="http://dailybruin.com/2014/05/13/spring-sing-profile-courtney-randall-and-beat-rhino/">Read More...</a>
					</div>
				</li>

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/90726604-279f-4d80-b83e-c00518f83ba4.jpg"></img>
						<h3> Brandon + Yasmeen </h3>
						<h5>Genre: Folk and R&B</h5>
						<ul class="facts">
							<li>Spring Sing song: "Young Wedding," an original song</li>
							<li>Both musicians separately performed in Spring Sing 2013.</li>
						</ul>
						
						<p class="artist_quote">"Spring Sing is kind of like our baby" – Brandon Bakhshi</p>

						<a class="link_to_article" href="http://dailybruin.com/2014/05/13/spring-sing-profile-brandon-bakhshi-and-yasmeen-al-mazeedi/">Read More...</a>
					</div>
				</li>

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/a1427a94-8ef0-4999-a19a-4249d3a89382.jpg"></img>
						<h3> Eric Jung & Alex Liu </h3>
						<h5>Genre: R&B and Jazz</h5>
						<ul class="facts">
							<li>Spring Sing song: "Notice You," an original song</li>
							<li>Met in 2011 through Omega Sigma Tau fraternity.</li>
						</ul>
						
						
						<p class="artist_quote">"It's just one of those songs that makes me feel good, and I want the audience to feel the same way" – Alex Liu</p>

						<a class="link_to_article" href="http://dailybruin.com/2014/05/13/spring-sing-profile-alex-liu-and-eric-jung/">Read More...</a>
					</div>
				</li>
			</ul>


			<h1 style="margin-top:50px">Talent: Bands</h1>
			<ul id="profiles">

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/streethearts.jpg"></img>
						<h3>The Street Hearts</h3>
						<h5>Genre: Folk and Soul</h5>
						<ul class="facts">
							<li>Spring Sing song: "Darlin', Don't Go," an original song</li>
							<li>Performing with a new band lineup</li>
							<li>Won the Las Donas Award for best band at Spring Sing 2013</li>
						</ul>
						
						<p class="artist_quote">""People should look forward to our harmonies ... I always do"<br/> – keyboardist Nick Valentini</p>
						<a class="link_to_article" href="http://dailybruin.com/2014/05/14/spring-sing-profile-the-street-hearts/">Read More...</a>
					</div>
				</li>

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/theprimaries.jpg"></img>
						<h3>The Primaries</h3>
						<h5>Genre: R&B and Soul</h5>
						<ul class="facts">
							<li>10-piece musician collective</li>
							<li>Spring Sing song: "Two Steps," an original song</li>
						</ul>
						
						<p class="artist_quote">"I'm excited to get on stage and play in front of so many people and, if we start doing an 8-clap, the audience will start doing an 8-clap too"<br/> – guitarist Chili Corder</p>

						<a class="link_to_article" href="http://dailybruin.com/2014/05/14/spring-sing-the-primaries/">Read More...</a>
					</div>
				</li>

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/wethefolk.jpg"></img>
						<h3>We the Folk</h3>
						<h5>Genre: Eclectic folk</h5>
						<ul class="facts">
							<li>Performing with fourth-year ethnomusicology and music education student Elena Loper</li>
							<li>Spring Sing song: "Won't You Come Back?" an original song</li>
							<li>The band plans to release an EP by the summer</li>
						</ul>
						
						
						<p class="artist_quote">"(It'll be) our moment and the audience's moment to connect. I hope they'll accept the invitation"<br/> – frontman David Villafaña</p>

						<a class="link_to_article" href="http://dailybruin.com/2014/05/14/spring-sing-profile-we-the-folk/">Read More...</a>
					</div>
				</li>

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/theam.jpg"></img>
						<h3>The AM</h3>
						<h5>Genre: Alternative rock</h5>
						<ul class="facts">
							<li>Band members met in their fall 2012 Sigma Nu fraternity class</li>
							<li>Spring Sing song: "Wake Up," an original song</li>
							<li>Emulating the style of '90s rock with funk and jazz melodies</li>
						</ul>
						
						
						<p class="artist_quote">"Most of our songs are pretty upbeat, but ... they're all pretty catchy"<br/> – drummer Josh Caine</p>

						<a class="link_to_article" href="http://dailybruin.com/2014/05/14/spring-sing-profile-the-am/">Read More...</a>
					</div>
				</li>
			</ul>

			<h1 style="margin-top:50px">Talent: A Cappella Groups</h1>
			<ul id="profiles">

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/fcb923e2-1165-4ea7-8c36-ae0bfac2d108.jpg"></img>
						<h3> Resonance A Cappella </h3>
						<h5>Co-ed a cappella group</h5>
						<ul class="facts">
							<li>Youngest a cappella group performing at Spring Sing</li>
							<li>Founded in October 2012</li>
							<li>Spring Sing song: A unannounced R&B medley</li>
						</ul>
						
						<p class="artist_quote">"Queen B might be making an appearance" – Darryn Wong, president of the group</p>
						<a class="link_to_article" href="http://dailybruin.com/?p=186738">Read More...</a>
					</div>
				</li>

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/793bab00-1930-44b5-8e39-14bab78da1f8-640x429.jpg"></img>
						<h3> Bruin Harmony </h3>
						<h5>All-male a cappella group</h5>
						<ul class="facts">
							<li>Winners of Spring Sing 2013 awards for best a cappella and best overall entry </li>
							<li>Founded in 2006</li>
							<li>Spring Sing song: An unannounced cover</li>
						</ul>
						
						<p class="artist_quote"> "Our goal is to meet the energy of the crowd ... with our sense of height and energy" – Adam Cropper, choreographer and group's next president</p>

						<a class="link_to_article" href="http://dailybruin.com/?p=186750">Read More...</a>
					</div>
				</li>

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/2220426f-4cc8-4505-8101-b079fa6883ec.jpg"></img>
						<h3> Random Voices A Cappella </h3>
						<h5>All-female a cappella group</h5>
						<ul class="facts">
							<li>Founded in 1999</li>
							<li>Spring Sing song: A unannounced Madonna song</li>
						</ul>
						
						
						<p class="artist_quote">"I just want everyone to see how much work we've put into it and how passionate we really are" – Morgan Rose, member of Random Voices</p>

						<a class="link_to_article" href="http://dailybruin.com/?p=186734">Read More...</a>
					</div>
				</li>
			</ul>
			<h1 style="margin-top:50px">Talent: Production</h1>
			<ul id="profiles">

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/9ac84dcb-6ccf-4e0c-9ac3-8d516fe5b4c9.jpg"></img>
						<h3> Company </h3>
						<h5>Sketch comedy troupe</h5>
						<ul class="facts">
							<li>Founded in 1986 as a non-competitive act serving as the comedic glue of the show</li>
							<li> Incorporating dance along with its traditional musical and theatrical elements</li>
						</ul>
						
						<p class="artist_quote">"This is really corny, but we all just make each other laugh a lot" – Nathan Galovan, member of Company</p>
						<a class="link_to_article" href="http://dailybruin.com/2014/05/16/spring-sing-profile-company/">Read More...</a>
					</div>
				</li>

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/2c2839bd-bb73-43eb-8ec2-78b3928912a1.jpg"></img>
						<h3> ACA Hip Hop </h3>
						<h5>Hip hop dance team</h5>
						<ul class="facts">
							<li>Chosen as the only dance team to perform at Spring Sing 2014 </li>
							<li>Performance will consist of four originally choreographed pieces. </li>
						</ul>
						
						<p class="artist_quote"> "We learned and casted it in the same day ... We were making a set on steroids"<br/> – Christina Kim, Creative Assistant of ACA Hip Hop</p>

						<a class="link_to_article" href="http://dailybruin.com/2014/05/16/spring-sing-profile-aca-hip-hop/">Read More...</a>
					</div>
				</li>

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/0043e02a-9692-46ac-8437-e520e3cd1baf.jpg"></img>
						<h3> Delta Gamma & Lambda Chi Alpha </h3>
						<h5>Musical theater performance</h5>
						<ul class="facts">
							<li>Group comprised of Delta Gamma and Lambda Chi Alpha members</li>
							<li>Performance revolves around an unannounced overall theme</li>
						</ul>
						
						
						<p class="artist_quote">"I wanted to create a production so that everybody in the audience ... would feel hyped and excited about all of Spring Sing" – Nikki Friedman, director of productions for Delta Gamma & Lambda Chi Alpha</p>

						<a class="link_to_article" href="http://dailybruin.com/2014/05/16/spring-sing-profile-delta-gamma-and-lambda-chi/">Read More...</a>
					</div>
				</li>

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/947341cf-c8e9-49a7-812d-6a289095e191.jpg"></img>
						<h3> Zeta Beta Theta </h3>
						<h5>Musical theater performance</h5>
						<ul class="facts">
							<li>Group comprised of Zeta Beta Tau and Kappa Alpha Theta members </li>
							<li>Performance will be a five-minute musical on the life of UCLA coach John Wooden </li>
						</ul>
						
						<p class="artist_quote"> "We really wanted to load it up with Bruin greatness and fun cameos. Just really bring it home" – Ben Kurzrock, creator of the Zeta Beta Theta production</p>

						<a class="link_to_article" href="http://dailybruin.com/2014/05/16/spring-sing-profile-zeta-beta-theta/">Read More...</a>
					</div>
				</li>

				<li>
					<div class="contestant">
						<img src="http://dailybruin.com/images/2014/05/d7709537-d463-4319-8abe-36535f6c9c8f.jpg"></img>
						<h3> Hooligan Theater Company </h3>
						<h5>Musical theater performance</h5>
						<ul class="facts">
							<li> Second Spring Sing performance for the theater company</li>
							<li> Four-minute musical romp centralized around an unannounced theme</li>
						</ul>
						
						
						<p class="artist_quote">"Something we try to do is give everyone a purpose; this is why we're all on stage"<br/> – Sara Ashley Beil, co-writer of HOOLIGAN's production </p>

						<a class="link_to_article" href="http://dailybruin.com/2014/05/16/spring-sing-profile-hooligan-theatre-company/">Read More...</a>
					</div>
				</li>
			</ul>
		
	</div>

	<div id="videos">
		<h3> Meet the Performers </h3>
		<div class="video-container">
        	<iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PLFqlb7Y9QntpdfqSU7wt9GtfQbdcL2FrZ" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<div id="tweets">
		<h3> Tweets </h3>
		<a class="twitter-timeline" width="520" height="400" href="https://twitter.com/search?q=%23SpringSing2014" data-widget-id="464609389723140096">Tweets about "#SpringSing2014"</a>
	</div>

</div>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>





<?php get_footer(); ?>
