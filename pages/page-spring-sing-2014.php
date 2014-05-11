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
	}

	#videos {
		max-width: 25%;
		float: right;
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
	text-align: center;
	border-radius: 10px;
}
#cards {
	font-family: consolas;
    	font-size: 0.7em;
    	color: #454545;
	box-shadow: 2px 2px 8px #888888

    	overflow: hidden;
	width: 300px;
	height: 550px;
	display: inline-block;
}
#cards i, em { 
color: #93CDEE; 
}
#cards img {
	max-width: 100%;
    	max-height: 100%;
}

#cards h2, h3 {
	font-weight: bold;
	padding-left: 10px;
}
#cards blockquote p {
  	font-size: 1.2em;    
  	float: left;
  	background: url(http://dailybruin.com/images/2014/05/quote-mark.png) 
  	top left no-repeat;
}

#cards cite {
  font-size: 1.2em;
  float: right; 
  padding-right: 20px;   
}

#cards cite a { 
	padding-left: 40px;
	color: #6B80A9; 
}
#cards cite a:hover { 
	color: #6DB4DE;
	text-decoration: normal; 
	font-weight: bold;
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
	padding: 20px;
	display: -webkit-flex;
	-webkit-flex-direction: row;
	-webkit-flex-wrap: wrap;
	-webkit-justify-content: center;
}

ul {
	margin: 0;
}

.profiles li {
	height: 400px;
	width: 300px;
	margin: 10px;
	border-radius: 10px;
	background: #70968C;
	color: #FFF;
}

.profiles a {
	display: block;
	padding: 15px;
	color: inherit;
	text-decoration: none;
}

</style>


<div id="banner"></div>


<div id="content">

	<div id="cards">
		<img src='https://24.media.tumblr.com/fa0cbe4c49c39f2eab9826dddb6a8414/tumblr_mu4cotMVol1rsozsco1_500.jpg' />
		<h2>Band Name</h2>
		<h3>Genre: Rock</h3>
		<ul type = "circle">
			<li>blah blah blah I'm a fact</li>
			<li>I'm another fact</li>
			<li>Man facts are so cool</li>
		</ul>
		<blockquote>
			<p>Every monarch in history has succeeded someone who is dead. Or just about to be. My predecessor's not only alive, but very much so. Bloody mess. Can't even give them a Christmas speech.</p>
			<cite>-- Not Socrates<br /> <br />
			<a href="http://www.google.com">Read More...</a></cite>
		</blockquote>
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