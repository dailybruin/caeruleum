<?php/*
Template Name: USC Football Rivalry 2013
*/ ?>
<?php get_header(); ?>
<div id="main-page-wrapper">

	<div class="row-fluid">
		<div class="span12">
			<img src="http://host.trivialbeing.org/up/tdk-apr30-hong-kong-banner.jpg">
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span8">
			<div class="row-fluid">
				<h2>Headline 1</h2>
				<a href="http://www.youtube.com/watch?v=N8G4YgQyEMk"><img src="http://sitmeanssit.com/dog-training-mu/houston-dog-training/files/2013/03/puppy.jpeg"></a>
			</div>
			<div class="row-fluid">
				<h2>Stories</h2>
			</div>
		</div>
		<div class="span4">
			<div class="row-fluid">
				<h2>Headline A</h2>
				<a href="http://en.wikipedia.org/wiki/Welsh_Corgi"><img src="http://dailybruin.com/images/2013/11/hundley_edited.jpg"></a>
			</div>
			<div class="row-fluid">
				<h2>Headline B</h2>
				<a href="http://www.youtube.com/watch?v=RCNdSc8_qF4"><img src="http://dailybruin.com/images/2013/11/geof-640x640.jpg"></a>
			</div>
		</div>
	</div>
	
	<div class="row-fluid">
		<div class="span8">
			<h2>Headline 2</h2>
			<img src="http://www.hdwallpapers.in/walls/cutest_puppy-wide.jpg">
		</div>
		<div class="span4">
			<h2>Twitter Feed</h2>
			<a class="twitter-timeline" href="https://twitter.com/search?q=%23corgi" data-widget-id="402979422954737665">Tweets about "#corgi"</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</div>

	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span7">
				<h2>YouTube</h2>
				<div id="ytplayer"></div>
			</div>
			<div class="span5">
				<div class="row-fluid">
					<h3>Companion row</h3>
					<p>Corn napa cabbage cress lettuce fennel chickpea. Beetroot grape kohlrabi gram quandong water chestnut peanut rock melon jícama tigernut gourd eggplant horseradish prairie turnip avocado. Burdock celtuce rock melon sweet pepper watercress zucchini bitterleaf dulse soko parsley chicory scallion tomato coriander.</p>
				</div>
				<div class="row-fluid"></div>
					<h3>Sub Headline</h3>
					<p>Veggies sunt bona vobis, proinde vos postulo esse magis shallot watercress bell pepper winter purslane tatsoi cauliflower bush tomato dandelion komatsuna prairie turnip gumbo asparagus leek spinach bunya nuts.</p>
			</div>
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
