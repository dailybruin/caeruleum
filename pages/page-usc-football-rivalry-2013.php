<?php/*
Template Name: USC Football Rivalry 2013
*/ ?>
<?php get_header(); ?>
<style>
#banner, .headline-a, .headline-b, .side {
	margin-bottom: 15px;
}

.story {
	clear: both;
}

.story-thumbnail{
	height: 150px;
	width: 150px;
	float: left;
	margin-bottom: 15px;
	margin-right: 15px;
}


</style>
<div id="main-page-wrapper">

	<div class="row-fluid">
		<div class="span12" id="banner">
			<img src="http://dailybruin.com/images/2013/11/onlinebanner.jpg">
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span8">
			<div class="row-fluid">
				<a href="http://www.youtube.com/watch?v=N8G4YgQyEMk"><h2 class="headline-a">UCLA, USC compete for Victory Bell during annual game</h2>
				<img src="http://dailybruin.com/images/2013/11/80851f22-b618-4a8c-affc-2944b29dfd53.jpg"></a>
			</div>
			<div class="row-fluid">
				<div class="story">
					<a href="http://dailybruin.com/2013/11/23/ucla-loses-pac-12-title-to-asu-38-33/">
					<img class="story-thumbnail" src="http://dailybruin.com/images/2013/11/IMG_9977.jpg">
					<h3>UCLA football loses chance at Pac-12 title to ASU 38-33</h3>
					</a>
					<p>
						When redshirt senior wide receiver Shaquelle Evans tore open for 15 yards on a fourth-and-5 to bring the Bruins five yards across midfield, completion of a furious rally appeared to be within UCLA’s grasp.
					</p>
				</div>
				<div class="story">
					<a href="http://dailybruin.com/2013/11/23/bruins-miss-opportunities-to-score-fall-to-sun-devils/">
					<img class="story-thumbnail" src="http://dailybruin.com/images/2013/11/running.jpg">
					<h3>Bruins miss opportunities to score, fall to Sun Devils</h3>
					</a>
					<p>
						UCLA’s football coaching staff had been deciding whether to use the sophomore cornerback or Myles Jack, the freshman linebacker/running back hybrid, for a kickoff and punt returner role vacated by the absence of sophomore wide receiver Devin Fuller.
					</p>
				</div>
				<div class="story">
					<img class="story-thumbnail" src="http://dailybruin.com/images/2013/11/39fe789a-1c4c-41f8-bee1-ebc6f6777f52.jpg">
					<h3>column</h3>
					<p>
						The fact that this upcoming game against USC doesn’t matter at all could make it actually mean something.
					</p>
				</div>
				<div class="story">
					<img class="story-thumbnail" src="http://dailybruin.com/images/2013/11/usc.jpg">
					<h3>UCLA still fired up for USC game despite elimination from Pac-12 race</h3>
					<p>
						At the L.A. Memorial Coliseum two years ago, in their last game officially under the lockdown of a two-year bowl ban, the Trojans treated their final home against the Bruins as an all-in-one national championship and Pac-12 title game.
					</p>
				</div>				
				<div class="story">
					<img class="story-thumbnail" src="http://dailybruin.com/images/2013/11/6ab6d89e-7cb2-4331-9837-b67f9c42cadd.jpg">
					<h3>Taxing season for Bruins to culminate with rivalry game</h3>
					<p>
						Members of UCLA’s football team trudged to the locker room moments after falling short in a final, desperate push to extend a shot at a BCS bowl game. Some Bruins began the walk with their faces in plain sight during a walk to the exit tunnel.
					</p>
				</div>
			</div>
		</div>
		<div class="span4">
			<div class="row-fluid side">
				<a href="http://en.wikipedia.org/wiki/Welsh_Corgi"><h2 class="headline-b">Special bond with sister keeps Brett Hundley grounded</h2>
				<img src="http://dailybruin.com/images/2013/11/hundley_edited.jpg"></a>
			</div>
			<div class="row-fluid side">
				<a href="http://www.youtube.com/watch?v=RCNdSc8_qF4"><h2 class="headline-b">End of an era: UCLA alumni cheerleader Geof Strand retires</h2>
				<img src="http://dailybruin.com/images/2013/11/geof-640x640.jpg"></a>

			</div>
			<div class="row-fluid side">
				<h2>Twitter Feed</h2>
				<a class="twitter-timeline" href="https://twitter.com/search?q=%23victorybell" data-widget-id="404848229688160256">Tweets about "#victorybell"</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>	
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span8">
				<h2>YouTube</h2>
				<div id="ytplayer"></div>
		</div>
	</div>
</div>

<script>
  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "http://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // Replace the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
      //height: '390',
      width: '100%',
      videoId: 'SEBLt6Kd9EY'
    });
  }
</script>
<?php get_footer(); ?>
