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

@media (min-width: 720px) {
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
	max-width: 950px;
	height: 150px;
	background: url(https://www.westmont.edu/_student_life/images/Spring-Sing-logo.jpg) no-repeat center center;
	margin: 25px auto 50px auto;
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

.profiles {
	list-style-type: none;
	padding: 10px;
	display: -webkit-flex;
	-webkit-flex-direction: row;
	-webkit-flex-wrap: wrap;
	-webkit-justify-content: left;
}

ul {
	margin: 0;
}

.profiles li {
	height: auto;
	width: 240px;
	margin: 10px;
	border-radius: 10px;
	background: lightblue;
	padding: 10px;
}

.profiles li img {
	border-radius: 10px;

}

.hidden {
	display: none;
}

</style>


<div id="banner"></div>


<div id="content">

	<div id="cards">
		<h1>Talent: Solos</h1>
		<ul class="profiles">
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/nessa-rica.jpg"></img>
				<h3> Nessa Rica </h3>
				<p> Nessa Rica is an Australian-born Filipina singer/songwriter. From her humble beginnings in 2007 of posting YouTube videos and small coffee shop performances, she has since been travelling and sharing her music across the world. In 2011, Nessa Rica released her EP “Journey”, which is out on iTunes, as well as stores worldwide. </p>
			</li>
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/mia-joy-2014.jpg"></img>
				<h3> Mia Piciucco </h3>
				<p> Mia is an artist of many outlets. Her passion for storytelling and creating is explored through music, theater, writing and more. She is a musical theater major, and is currently working on the department's production of Guys and Dolls. Over the past four years, she was involved in a variety of plays, musicals, workshops, concerts, cabarets and classes. Songwriting has been a part of Mia's artistic journey from a very young age, but she has recently pressed into it towards deeper exploration. She feels blessed to be able to tell stories in so many different ways, and knows that wherever she ends up, the joy of creating will always be what's important. </p>
			</li>
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/sienna-moffitt.jpg"></img>
				<h3> Sienna Moffitt </h3>
				<p> Second year, Sienna Moffitt, began writing songs in September after meandering into Haight music shop and spontaneously picking up her Taylor last spring. With only a few original songs under her belt, she can’t quite believe she’s been considered worthy of a spot in Spring Sing 2014. Lyrics are real important to Sienna so keep an ear out and feel free to ask about them (or anything for that matter) if you see her wandering around. Sienna is so grateful for the unbelievable amount of support, love and kindness she receives from the people in her life, friends and family alike. However, there truly is no way she would be here if it weren’t for her parents and sisters - she loves them to the moon and back (a googolplex-plus-one times). </p>
			</li>

		</ul>
		<h1 class ="hidden">Talent: Duets</h1>
		<ul class="profiles, hidden">
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/courtney-beat-rhino.jpg"></img>
				<h3> Courtney Randall &amp; Beat Rhino </h3>
				<p> When Courtney Randall (San Ramon, CA) and Beat Rhino (Irvine, CA) first collaborated on a cool autumn night in October of 2013, they both knew it was the beginning of something unique. From teaching herself guitar at age 15 to winning the overall honor at Spring Sing 2011 and the solo award in 2012, Courtney has been writing, recording, and performing her original music, while continuing to build her successful online presence via YouTube. For Beat Rhino, a self-taught beatboxer, performing is just as natural. From representing USA as the wildcard winner at the Grand Beatbox Battle 2013 to winning the American Beatbox Championship 2013, Beat Rhino has taken his artform even further and performed in Samsung and Toyota commercials. Both artists thrive off of the exhilaration and adrenaline they feel when sharing their art with others, and they are excited to showcase this new acoustic/beatbox combination to the world. Currently, Courtney is releasing her debut EP, while you can find Beat Rhino amazing crowds at shows throughout Los Angeles. </p>
			</li>
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/eric-alex.jpg"></img>
				<h3> Eric Jung &amp; Alex Liu </h3>
				<p> A guitar and a voice and the byproduct of boredom, passion and college stress. The two met through Omega Sigma Tau fraternity and have been working together ever since. Alex Liu has been singing and dancing his entire life. Both with Bruin Harmony and NSU Modern. Guitarist Eric Jung loved to play in jazz bands during high school. The combination of Alex’s R&amp;B influences and Eric’s inclination towards jazz and John Mayer often lead to the production of unique sounds. Upon graduating this year, Alex will be working at Ernst and Young and Eric will attend medical school. However, the duo will continue to play music beyond their undergraduate years. </p>
			</li>
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/brandon-yasmeen.jpg"></img>
				<h3> Brandon + Yasmeen </h3>
				<p> Brandon Bakhshi and Yasmeen Al-Mazeedi have admired each other's musical talent for years, but Spring Sing 2014 is the first time they have ever collaborated on a song. Through their song, the duo portrays the consequences that result from personal growth -- as we change, so do our interactions with the people around us. In "Young Wedding," they explore the idea that despite our best intentions, sometimes our needs and passions are no longer compatible with those of the people we love.</p>
			</li>

		</ul>
		<h1 class="hidden">Talent: Bands</h1>
		<ul class="profiles, hidden">
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/the-am.jpg"></img>
				<h3> The AM </h3>
				<p> The AM is an alternative rock band that met at UCLA and formed in the fall of their freshman year. The band' s lineup consists of Bryan Welch (vocals), Milan Rothfeld (guitar and background vocals), Greg Petersen (bass) and Josh Caine (drums). Influenced by bands such as The Red Hot Chili Peppers, The Arctic Monkeys, The Cold War Kids, and Portugal. The Man, The AM's music is full of the raw characteristics of alternative and classic rock. Combining Josh Caine's incredibly dynamic and powerful beats, Milan Rothfeld's mix of melodic and crunchy guitar work, Greg Petersen's rocking bass lines, and Bryan Welch's angelic vocals, The AM is an up and coming band worth following. </p>
			</li>
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/the-primaries.jpg"></img>
				<h3> The Primaries </h3>
				<p> If you took a guitar, a few horns, some old records and one serving of your favorite fruit and threw it all in a blender, the result might taste something like how The Primaries sound. With each member bringing in elements of their musical style and background, this nine-piece outfit (plus one artist) makes a dynamic smoothie of R&amp;B, soul and jazz music with just a touch of awkwardness. Band members include Chili Corder, J Johnson, Joe Kwon, Michael Liao, Masai Marcelin, Alan McDonnell, Zach Ramacier, Nicholas Velez and Ryan Yoo. </p>
			</li>
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/we-are-the-folk.jpg"></img>
				<h3> We the Folk </h3>
				<p> Originating from UCLA, We the Folk began as a trio performing impromptu shows in public spaces around campus. Student demand rapidly transformed these “pop up” performances into dance parties and official campus events. Their energetic Euro-gypsy-Latin style, infused with virtuosity, offers an intoxicating blend of world folk, from South and Central America to Spain, France, Ireland and Eastern Europe. </p>
			</li>
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/street-hearts.jpg"></img>
				<h3> The Street Hearts </h3>
				<p> The Street Hearts, formed in fall of 2012, is the collaborative folk n’ soul project of guitarist Andrew Giurgius, double bassist Nicholai Hansen, pianist Nick Valentini, and banjoist Sarah Summers. Recognized for their poetics and vocal diversity, The Street Hearts have performed at L.A. venues The Roxy, The Witzend, Voodoo Lounge, and The Mint in addition to UCLA’s Spring Sing and JazzReggae Fest 2013. They are joined by violinist Yasmeen Al-Mazeedi for the Spring Sing 2014 performance of their original ballad “Darling, Don’t Go,” a story of lovers lost between seasons. </p>
			</li>

		</ul>
		<h1 class="hidden">Talent: A Capella</h1>
		<ul class="profiles, hidden">
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/resonance.jpg"></img>
				<h3> Resonance </h3>
				<p> Resonance A Cappella is a co-ed A Cappella group founded in October 2012 at UCLA. The 12 talented and outgoing members of Resonance are brought together by a passion for music and the capability that it has to be art. Being the newest A Cappella group on campus, Resonance is very excited in building a strong and positive relationship with the UCLA community. The group is comprised of the following members: Mary Manuel, Anna Ticker, Nicole Dovolis, Natalie Brainin, Darryn Wong, Matt Groy, Marco Aquinde, Austin Velez, Adam Kessler, Kyle Le, Christian Tejeda and Robert Brusch. </p>
			</li>
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/bruin-harmony-2014.jpg"></img>
				<h3> Bruin Harmony </h3>
				<p> Bruin Harmony is UCLA's only all-male a cappella group. Dedicated to entertaining Bruins and non-Bruins alike, they've endeavored to excel in all types of settings, from private performances to films and awesome stages like Spring Sing, where they won Best A Cappella and Best Overall Entry in 2013. The individuals who make up Bruin Harmony are Alex Vergel, Jon Zhao, Jackson McNeill, Adam Cropper, Coleton Schmitto, Jackson Hinden, Lucas Cabantac, Ron Arbel, Matthew Diamse, Keith Yoder, Prescott Rynewicz, Jack Shulruff, Chris Hunter and Guilermhe Apollonio. </p>
			</li>
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/random-voices.jpg"></img>
				<h3> Random Voices </h3>
				<p> Random Voices is UCLA's premiere all-female a cappella group. Founded in 1999 by Molly Jones, the group currently boasts 15 talented ladies and is celebrating its 14th year in existence. In addition to putting on its own concerts, RV performs at UCLA events and outside gigs including charity events, weddings and parties. Random Voices organizes the California Acapella Festival, bringing in collegiate a cappella groups from up and down the west coast, and is currently in the process of recording and releasing their sixth CD. Their members’ names are Amelia Rudnicki, Hannah Bucko, Megan Gaumond, Emily Zetterberg, Rebecca Birstock, Hannah Horton, Olivia London, Morgan Rose, Sarah Summers, Chiko Shimizu, Julia Ramos, Catherine Jacobs, Marilyn McGowan and Tricia Gunter. </p>
			</li>
		</ul>
	</div>

	<div id="tweets">
		<h3> Tweets </h3>
		<a class="twitter-timeline" width="520" height="400" href="https://twitter.com/search?q=%23springsing2014" data-widget-id="464609389723140096">Tweets about "#springsing2014"</a>
	</div>

	<div id="videos">
		<h3> Video Interviews </h3>
		<div class="video-container">
        	<iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PL0MivrT2vAvA2_eyYvE27mnR2pf9WXi4E" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

</div>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>





<?php get_footer(); ?>