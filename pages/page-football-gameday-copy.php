<?php/*
Template Name: Football Gameday Copy
*/ ?>
<?php get_header(); ?>
<?php 
$posts_per_page = get_field('posts_per_page');
$banner_image = get_field('banner_image');
$stories_tag = get_field('gameday_story');
$feature_tag = get_field('featured_story_tag'); 
$gallery = get_field('gallery');
$graphic_of_the_week = get_field('graphic_of_the_week');
$comparing_stats_graphic = get_field('comparing_stats_graphic');
global $nggdb;
$gallery1 = $nggdb->get_gallery($gallery, 'sortorder', 'ASC', true, 0, 0);

?>
<!--Links for data charts-->
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<!-- 1. Link to jQuery (1.8 or later), -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<!-- fotorama.css & fotorama.js. -->
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
<!-- 2. Add images to <div class="fotorama"></div>. -->
<script type="text/javascript">
/* dataprocessor.js */
// Processes input data so that it can be used with google charts
function processData(data){
    data = data.categories;

    var processedData = [];

    for (var i = 0; i < data.length; i++) {
        var temp = {};

        var currObj = {};
        processedData[i] = currObj;

        currObj["title"] = data[i].name;

        var currArray = [];
        currObj["percentData"] = currArray;

        temp["offense"] = sepOffenseDefenseObjs(data[i].offense);
        temp["defense"] = sepOffenseDefenseObjs(data[i].defense);

        currArray[0] = ['', 'Offense', 'Defense'];
        var labelCount = temp["offense"]["percentLabels"].length;
        for(var j = 0; j < labelCount; j++)
        {
            currArray[j+1] = [temp["offense"]["percentLabels"][j], temp["offense"]["percent"][j],  temp["defense"]["percent"][j]];
        }
    }

    return processedData;
}

// Seperates percent and non-percent values
function sepOffenseDefenseObjs(data){
    var percentValues = [];
    var valuesValues = [];
    var percentLabels = [];
    var valueLabels = [];

    var objKeys = Object.keys(data);
    var percentIndex = 0, valueIndex = 0;
    for (var i = 0; i < objKeys.length; i++) {
        if(objKeys[i].indexOf("%") >= 0){
            percentValues[percentIndex] = parseFloat(data[objKeys[i]]);
            percentLabels[percentIndex++] = objKeys[i];
        } else {
            valuesValues[valueIndex] = parseFloat(data[objKeys[i]]);
            valueLabels[valueIndex++] = objKeys[i];
        }
    }

    var processedData = {};
    processedData["percent"] = percentValues;
    processedData["percentLabels"] = percentLabels;
    processedData["values"] = valuesValues;
    processedData["valueLabels"] = valueLabels;

    return processedData;
}


/* chartgenerator.js */
// Convert the input json string into an object
var dataString = '{"categories": [{"offense": {"3D Conversion %": "41.38%", "4D Conversion %": "50.00%", "Points/Game": "35.5", "RZ Scoring %": "89.19%", "Yards/Game": "468.6", "Points/Play": "0.469", "Yards/Play": "6.2"}, "defense": {"Opp Yards/Game": "416.5", "Opp Points/Play": "0.325", "Opp Points/Game": "27.6", "Opp RZ Scoring %": "81.25%", "Opp Yards/Play": "4.9", "Opp 4D Conv %": "50.00%", "Opp 3D Conv %": "37.41%"}, "name": "Overall Statistics"}, {"offense": {"Rushes/Game": "36.6", "Yards/Rush": "5.1", "Rush Play %": "48.43%", "Rush Yards/Game": "186.1"}, "defense": {"Opp Rush Yards/Game": "208.5", "Opp Yards/Rush": "4.6", "Opp Rush Play %": "53.31%", "Opp Rushes/Game": "45.2"}, "name": "Rushing Statistics"}, {"offense": {"Passes/Game": "37.8", "Pass Yards/Game": "282.5", "Completion %": "59.27%", "QB Sacked %": "3.21%", "Int Thrown %": "2.98%", "Yards/Pass": "7.5", "Pass Play %": "51.57%"}, "defense": {"Opp Yards/Pass": "5.5", "Opp Completion %": "56.25%", "Opp Passes/Game": "38.0", "Opp Pass Play %": "46.69%", "Opp Int Thrown %": "2.63%", "Sack %": "4.10%", "Opp Pass Yards/Game": "208.0"}, "name": "Passing Statistics"}, {"offense": {"FG Conversion %": "92.86%"}, "defense": {"Opp FG Conv %": "82.35%"}, "name": "Kicking Statistics"}, {"offense": {"Takeaways/Game": "1.4", "TO Margin/Game": "-0.1", "Int Thrown %": "2.98%", "Giveaways/Game": "1.5"}, "defense": {"Takeaways/Game": "1.4", "Opp Int Thrown %": "2.63%", "Giveaways/Game": "1.5", "Opp TO Margin/Game": "+0.1"}, "name": "Turnovers Statistics"}, {"offense": {"TOP % (net OT)": "42.86%"}, "defense": {"Opp TOP % (net OT)": "57.14%"}, "name": "Other Statistics"}]}';
var data = processData(JSON.parse(dataString));

// Load google charts API
google.load("visualization", "1.1", {packages:["corechart", "bar"]});
google.setOnLoadCallback(function() {
    // Once the API is loaded start creating the charts
    generateChartDivs();
    generateCharts(0);
});

// Disable respnsiveness for now
// causing weird bugs
/*$(window).resize(function(){
  generateCharts(0);
});*/

// Generates all the sections for the charts to go
function generateChartDivs() {
    for(var i = 0; i < data.length; i++)
    {
        var key = data[i].title.replace(/\W/g, '');
        var currSection = '<div class="section" id="' + key + 'Section">'
        var currCanvas = '<div id="' + key + 'Chart" class="sectionChart"></div>';

        $("#gamedaychart").append(currSection);
        $("#" + key + "Section").append(currCanvas);
    }
}

// Generates all the charts
function generateCharts(i){
    // Options for each chart
    var options = {
        chart : {
            title : data[i].title,
        },
        bars: 'horizontal', // Required for Material Bar Charts.
        colors: ['#3284BF', '#FFE800'],
        height: data[i].percentData.length * 70 + 15,
        legend: {position: 'none'}
    };

    // Draw the chart to specific div
    var key = data[i].title.replace(/\W/g, '');
    var chart = new google.charts.Bar(document.getElementById(key + 'Chart'));

    // Temporary. Since we don't have non-percent values added yet, we do not want
    //  the header for the section to be visible either
    if(data[i].percentData.length > 1){
        chart.draw(google.visualization.arrayToDataTable(data[i].percentData), options);
    }else{
        generateCharts(i+1);
        return;
    }

    // If we have more charts to draw, draw them
    if(i+1 != data.length){
        // Wait for the previous chart to be loaded
        // This weird implementation was done because calling draw
        //      for all the charts at once was not working.
        //      There was an issue with some callback being overridden
        //      and so only the first chart was showing up.
        $('#' + key + 'Section svg').bind("DOMNodeInserted", function(e) {
            // If the previous chart had no data, remove add non-label nodes
            if(data[i].percentData.length < 2){
                $('#' + key + 'Section g:not(:first)').remove();
            }
            // If loading is complete, load the next chart
            if($(e.target).prop("tagName") == "defs"){
                generateCharts(i+1);
            }
        });
    }
}


</script>

<style>
	#feature-story {
		margin-top: 10px;
		position: relative;
	}

	.feature-content {
		position: absolute;
		bottom: 20px;
		background-color: rgba(255,255,255,0.6);
		display: inline;
		padding: 5px 10px;

	}

	.feature-content a {
		color: black;
	}
	.feature-author {
		float: left;
		text-align: left;
	}

	.feature-title a {
		float: left;
		text-align: left;

	}

	#nonfeature-stories {
		margin: 10px;
		position: relative;
		margin-left: 0px;
	}

	.nonfeature-stories-author {
		margin: 5px 0px;
		font-weight: bold;
	}
	.nonfeature-stories-content {
	}
	.nonfeature-stories-title {
		color: black;
		font-size: 1.5em;
	}

	.thumbnail {
		float: left;
		margin-right: 10px;
		margin-bottom: 10px;
	}

	.card{
		width:374px;
		height: 390px;
		margin-top: inherit;
		margin-bottom: auto;
		display: inline-block;
		float: left;
		margin-left: 5px;
	}

	.ctop{
		background-color: rgb(50, 132, 191);
	}

	.cbot{
		background-color: #384E77;
	}

	.titlecard{
		height:60px;
		background-color: #40BCD8;
	}
	.title{
		font-family: 'Roboto Slab', serif;
		font-size: 1.2em;
		color: white; 
		margin-left: 10px;
		padding-top: 10px;
		margin-right: 10px;
		font-weight: bolder;
	}

	#cardimg{
		/*background: url("http://dailybruin.com/images/galleries/ucla-reks-cal/AYEO0740.jpg") no-repeat fixed;*/
		height: 240px;
		width: auto;
		overflow: hidden;
		border-left: solid 5px #2E86AB;
		border-right: solid 5px #2E86AB;
	}

	.aft_game{
		display:;
	}

	.cont{
		margin-right: 10px; 
		margin-left: 10px;
		margin-top: 10px;
		margin-bottom: 10px;
		font-family: 'Roboto Slab';
		font-size: 1em;
		color: white;
		text-align: justify;
		font-weight: 400;
		
	}
	.link{
		color: white !important;
		border-bottom: none;
	}

	.link:hover{

	}

	#gamedaystats{
		float: right;
		max-width: 380px;
		min-width: 380px;
		max-height: 600px;
	}

	#gamedaychart{
		background-color: white;
		border: #A3A3A3 1px solid;
		padding: 3px;
		max-height: 500px;
		overflow: scroll;
		overflow-x: hidden;
		padding:20px;
		margin-bottom: 20px;
	}

	#statsTitle {
		font-size: 22px;
		color: white;
		background-color: #3284BF;
		padding: 10px;
		margin: -2px;
		text-transform: uppercase;
		font-family: 'Palatino Linotype', serif;
	}

	h1{
		text-align: center;
		font-family: 'Roboto Slab', serif;
		font-size: 22px;
	}	

	.sectionChart{
		width: 70%;
		max-width: 90%;
		margin-left: 20px;
		display: block;
	}

	.main{
		display: inline-block;
	}
	.overlay{
		float:left;
		position: relative;
	}

</style>

<div class="container">
	<div class="row">
		<img src="<?php echo $banner_image; ?>" >
		<!--<img src="http://dailybruin.com/images/2014/10/colorado-banner.jpg">-->
<!-- 		<div class="large-12 columns">
			<img src=<?php echo $banner_image_url; ?> > 
		</div> -->
	</div>

	<div class="row">
		<div class="large-8 columns main">
			<br>
			<div class="fotorama">
				<?php 
				foreach($gallery1 as $image) {
					echo "<img src='".$image->imageURL."' data-caption='".$image->description."'>";
					
				}
				?>
			</div>
			

			<div class="large-12 columns" id="feature-story">
				<?php 
				$args = array(
					'posts_per_page' => $posts_per_page, 
					'tag' => $stories_tag);

				$posts = get_posts($args);
				foreach ($posts as $post) :
					setup_postdata($post);
				$categories = get_the_category($post->ID);
				?>
				<a href="<?php the_permalink(); ?>" class = "link">
				<div class="card ctop">
					<div class="titlecard">
						<div class="title"><?php the_title(); ?></div>
					</div>
					<div id="cardimg">
						<?php echo the_post_thumbnail('large'); ?>
					</div>
					<p class="cont" >
						<?php $t = get_the_excerpt(); 
						echo  $t = substr($t, 0, strpos($t, '.'));?>...
						<a href="<?php the_permalink(); ?>" class = "link">More &#187;</a>
					</p>
				</div>
				</a>
				<?php 
				endforeach; 
				?>
			</div>
		</div>
		<br/>
		<div class="large-4 columns">
			<div id="gamedaystats">
				<div id="statsTitleBox">
					<h1 id="statsTitle"> Season Stats </h1>
				</div>
				<div id="gamedaychart">
				</div>
			</div>
		</div>
		<br/>
		<div class = "large-4 columns">
			<a class="twitter-timeline" href="https://twitter.com/DBSports" data-widget-id="669315758501949440">Tweets by @DBSports</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
			</script>
		</div>

	</div>









