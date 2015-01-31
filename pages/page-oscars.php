<?php/*
Template Name: Oscars 2013
*/ ?>
<?php wp_enqueue_script( 
     'googlecharts'
    ,"https://www.google.com/jsapi"
);
?>
<?php get_header(); ?>
<script type="text/javascript">
google.load('visualization', '1.0', {'packages':['corechart']});
function drawChart() {
    var viz1 = google.visualization.arrayToDataTable([
        ['Best picture', 'Votes'],
        ['Armour', 0],
        ['Argo', 19],
        ['Beasts of the Southern Wild', 1],
        ['Django Unchained', 4],
        ['Les Miserables', 3],
        ['Life of Pi', 1],
        ['Lincoln', 6],
        ['Silver Linings Playbook', 5],
        ['Zero Dark Thirty', 3]
    ]);
    var viz2 = google.visualization.arrayToDataTable([
        ['Best director', 'Votes'],
        ['Michael Haneke, "Amour"', 1],
        ['Benh Zeitlin, "Beasts of the Southern Wild"', 4],
        ['Ang Lee, "Life of Pi"', 10],
        ['Steven Spielberg, "Lincoln"', 21],
        ['David O. Russell, "Silver Linings Playbook"', 6]
    ]);
    var viz3 = google.visualization.arrayToDataTable([
        ['Best actor', 'Votes'],
        ['Bradley Cooper, "Silver Linings Playbook"', 4],
        ['Daniel Day-Lewis, "Lincoln"', 28],
        ['Hugh Jackman, "Les Misérables"', 6],
        ['Joaquin Phoenix, "The Master"', 4],
        ['Denzel Washington, "Flight"', 0]
    ]);
    var viz4 = google.visualization.arrayToDataTable([
        ['Best actress', 'Votes'],
        ['Jessica Chastain, "Zero Dark Thirty"', 11],
        ['Jennifer Lawrence, "Silver Linings Playbook"', 19],
        ['Emmanuelle Riva, "Amour"', 4],
        ['Quvenzhané Wallis, "Beasts of the Southern Wild"', 5],
        ['Naomi Watts, "The Impossible"', 3]
    ]);
    var viz5 = google.visualization.arrayToDataTable([
        ['Best supporting actor', 'Votes'],
        ['Alan Arkin, "Argo"', 5],
        ['Robert De Niro, "Silver Linings Playbook"', 8],
        ['Philip Seymour Hoffman, "The Master"', 4],
        ['Tommy Lee Jones, "Lincoln"', 4],
        ['Christoph Waltz, "Django Unchained"', 18]
    ]);
    var viz6 = google.visualization.arrayToDataTable([
        ['Best supporting actor', 'Votes'],
        ['Amy Adams, "The Master"', 2],
        ['Sally Field, "Lincoln"', 1],
        ['Anne Hathaway, "Les Misérables"', 35],
        ['Helen Hunt, "The Sessions"', 2],
        ['Jacki Weaver, "Silver Linings Playbook"', 2]
    ]);
    
    // Create and draw the visualization.
    new google.visualization.BarChart(document.getElementById('viz1')).
    draw(viz1, {colors:['#cb9a01'], legend: {position:'right'}});
    
    new google.visualization.BarChart(document.getElementById('viz2')).
    draw(viz2, {colors:['#cb9a01'], legend: {position:'none'}});
    
    new google.visualization.BarChart(document.getElementById('viz3')).
    draw(viz3, {colors:['#cb9a01'], legend: {position:'none'}});
    
    new google.visualization.BarChart(document.getElementById('viz4')).
    draw(viz4, {colors:['#cb9a01'], legend: {position:'none'}});
    
    new google.visualization.BarChart(document.getElementById('viz5')).
    draw(viz5, {colors:['#cb9a01'], legend: {position:'none'}});
    
    new google.visualization.BarChart(document.getElementById('viz6')).
    draw(viz6, {colors:['#cb9a01'], legend: {position:'none'}});
}
$(document).ready(function(){
    unresponsivize();
    google.setOnLoadCallback(drawChart);
});
</script>
<style type="text/css">
    .oscars-title {
        width: 100%;
        border: 1px solid #cb9a01;
        position: relative;
        margin-bottom: 14px;
        margin-top: 14px;
    }
    .oscars-title span {
        font-weight: lighter;
        text-transform: uppercase;
        color: #cb9a01;
        font-size: 0.89em;
        letter-spacing: 1px;
        display: block;
        background-color: white;
        padding-left: 10px;
        padding-right: 10px;
        position: absolute;
        top: -10px;
        left: 45%;
    }
    .oscars-title h3 {
        text-align: center;
        color: #cb9a01;
        padding-top: 12px;
        padding-bottom: 12px;
        font-weight: lighter;
        font-size: 2.2em;
    }
    #oscar-results h3 { 
        display: block;
        width: 100%;
        text-align: center;
        margin: 0;
        padding: 0;
        border-bottom: 1px solid #aaa;
        position: relative;
        top: -10px;
        margin-top: 21px;
    }
    #oscar-results h3 > span {     
        background-color: white;
        padding: 0 10px;
        position: relative;
        top: 10px;
        margin-left: auto;
        margin-right: auto;
        font-size: 18px;
        font-family: "Georgia",serif;
        font-weight: normal;
        text-transform: none;
        font-style: italic;
        color: #000;
    }
    #oscar-results h4 {
        text-align: center;
        font-size: 28px;
        margin-bottom: 18px;
        margin-top: 3px;
        line-height: 47px;
        font-weight: bold;
        z-index: 11;
        position: relative;
    }
    #oscar-results .viz {
        position: relative;
        margin-top: -33px;
    }
</style>
<div class="row" id="single-post">
	<div class="large-8 columns" id="post">
	    <div class="oscars-title">
	        <span>The 2013</span>
    	    <h3>Academy Awards</h3>
    	</div><!-- end div.oscars-title -->
    	
    	<div id="oscar-results">
    	    <p><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile;endif;?></p>
    	    
    	    <h3><span>Best picture</span></h3>
    	    <h4>Argo</h4>
    	    <div id="viz1" class="viz">
    	    </div>
    	    
    	    <h3><span>Best director</span></h3>
    	    <h4>Steven Spielberg, &ldquo;Lincoln&rdquo;</h4>
    	    <div id="viz2" class="viz">
    	    </div>
    	    
    	    <h3><span>Best actor</span></h3>
    	    <h4>Daniel Day-Lewis, &ldquo;Lincoln&rdquo;</h4>
    	    <div id="viz3" class="viz">
    	    </div>
    	    
    	    <h3><span>Best actress</span></h3>
    	    <h4>Jennifer Lawrence, &ldquo;Silver Linings Playbook&rdquo;</h4>
    	    <div id="viz4" class="viz">
    	    </div>
    	    
    	    <h3><span>Best supporting actor</span></h3>
    	    <h4>Christoph Waltz, &ldquo;Django Unchained&rdquo;</h4>
    	    <div id="viz5" class="viz">
    	    </div>
    	    
    	    <h3><span>Best supporting actress</span></h3>
    	    <h4>Anne Hathaway, &ldquo;Les Misérables&rdquo;</h4>
    	    <div id="viz6" class="viz">
    	    </div>
    	    
    	</div><!-- end div#oscar-results -->
    	
	</div><!-- end div#post -->
	
	<?php get_sidebar(); ?>
	
</div><!-- end div#single-post -->      
<?php get_footer(); ?>