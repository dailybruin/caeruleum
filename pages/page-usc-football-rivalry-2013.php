<?php/*
Template Name: USC Football Rivalry 2013
*/ ?>
<?php get_header(); ?>
<style>
#banner {
	margin-bottom: 15px;
}

.headline-a, .headline-b, .side {
	margin-bottom: 15px;
}


</style>
<div id="main-page-wrapper">

	<div class="row-fluid">
		<div class="span12" id="banner">
			<img src="http://host.trivialbeing.org/up/tdk-apr30-hong-kong-banner.jpg">
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span8">
			<div class="row-fluid">
				<a href="http://www.youtube.com/watch?v=N8G4YgQyEMk"><h2 class="headline-a">UCLA, USC compete for Victory Bell during annual game</h2>
				<img src="http://dailybruin.com/images/2013/11/80851f22-b618-4a8c-affc-2944b29dfd53.jpg"></a>
			</div>
			<div class="row-fluid">
				<h2>Stories</h2>
			</div>
		</div>
		<div class="span4">
			<div class="row-fluid side">
				<a href="http://en.wikipedia.org/wiki/Welsh_Corgi"><h2 class="headline-b">Headline A</h2>
				<img src="http://dailybruin.com/images/2013/11/hundley_edited.jpg"></a>
			</div>
			<div class="row-fluid side">
				<a href="http://www.youtube.com/watch?v=RCNdSc8_qF4"><h2 class="headline-b">Headline B</h2>
				<img src="http://dailybruin.com/images/2013/11/geof-640x640.jpg"></a>
			</div>
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span8">
			<h2>YouTube</h2>
				<div id="ytplayer"></div>
		</div>
		<div class="span4">
			<h2>Twitter Feed</h2>
			<a class="twitter-timeline" href="https://twitter.com/search?q=%23victorybell" data-widget-id="404848229688160256">Tweets about "#victorybell"</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
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
