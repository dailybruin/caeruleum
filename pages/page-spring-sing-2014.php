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
		<h1>Talent: Duets</h1>
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
		<h1>Talent: Bands</h1>
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
			<li>
				<img src="http://alumni.ucla.edu/events/spring-sing/2014/_images/sienna-moffitt.jpg"></img>
				<h3> Sienna Moffitt </h3>
				<p> Second year, Sienna Moffitt, began writing songs in September after meandering into Haight music shop and spontaneously picking up her Taylor last spring. With only a few original songs under her belt, she can’t quite believe she’s been considered worthy of a spot in Spring Sing 2014. Lyrics are real important to Sienna so keep an ear out and feel free to ask about them (or anything for that matter) if you see her wandering around. Sienna is so grateful for the unbelievable amount of support, love and kindness she receives from the people in her life, friends and family alike. However, there truly is no way she would be here if it weren’t for her parents and sisters - she loves them to the moon and back (a googolplex-plus-one times). </p>
			</li>

		</ul>
		<h1>Talent: A Capella</h1>
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
	</div>

	<div id="tweets">
		<h3> Tweets </h3>
		<a class="twitter-timeline" width="520" href="https://twitter.com/search?q=%23springsing2014" data-widget-id="464609389723140096">Tweets about "#springsing2014"</a>
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