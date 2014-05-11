<?php/*
Template Name: Spring Spring 2014 
*/ ?>
<?php get_header(); ?>

<style type="text/css">

@media (min-width: 480px) {
	#tweets {
		max-width: 47%;
		float:left;
		background-color: purple;
		
		
	}

	#videos {
		max-width: 47%;
		float: right;
		background-color: yellow;

		
		
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
		max-width: 22%;
		float: right;
		top: 70px;
	}

	#videos {
		max-width: 22%;
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

#solo {
	width:100%;
	max-width: 950px;
	height: 150px;
	margin: 50px auto 0px;
	text-align: center;
}

#content {
	width: 100%;
	max-width: 940px;
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
	height: 250px;
	display: inline-block;
	background-color: lightblue;
}

#videos {
	
	width: 100%;
	margin: 0;
	height: auto;
	display: inline-block;
	background-color: darkred;
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
		<h1>Solo Artists</h1>
		<ul class="profiles">
			<li><a href="#">Item 1</a></li>
			<li><a href="#">Item 2</a></li>
			<li><a href="#">Item 3</a></li>		
		</ul>
	</div>

	<div id="tweets">
		<a class="twitter-timeline" width="520" href="https://twitter.com/search?q=%23springsing2014" data-widget-id="464609389723140096">Tweets about "#springsing2014"</a>
	</div>

	<div id="videos">
		<div class="video-container">
        	<iframe src="http://www.youtube.com/embed/dFVxGRekRSg" frameborder="0" width="560" height="200"></iframe>
		</div>
		<div class="video-container">
        	<iframe src="http://www.youtube.com/embed/dFVxGRekRSg" frameborder="0" width="560" height="200"></iframe>
		</div>
		<div class="video-container">
        	<iframe src="http://www.youtube.com/embed/dFVxGRekRSg" frameborder="0" width="560" height="200"></iframe>
		</div>
	</div>
</div>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>





<?php get_footer(); ?>