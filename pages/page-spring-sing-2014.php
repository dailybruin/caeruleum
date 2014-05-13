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
	background: url(http://dailybruin.com/images/2014/05/shb-yf.jpg) no-repeat;
	background-color: black;
	margin: 0px auto 50px auto;
	background-size: cover;
	
}

#banner-background {
	max-width: 940px;
	background-color: black;
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



</style>

<div id="banner-background">
	<div id="banner">
		<h1>Spring<br>Sing<br>2014</h1>
	</div>
</div>


<div id="content">


	<div id="cards">

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
		
	</div>

	<div id="tweets">
		<h3> Tweets </h3>
		<a class="twitter-timeline" width="520" height="400" href="https://twitter.com/search?q=%23SpringSing2014" data-widget-id="464609389723140096">Tweets about "#SpringSing2014"</a>
	</div>

	<div id="videos">
		<h3> Meet the Performers </h3>
		<div class="video-container">
        	<iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PLFqlb7Y9QntpdfqSU7wt9GtfQbdcL2FrZ" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

</div>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>





<?php get_footer(); ?>
