<?php/*
Template Name: Opinion Blog
*/ ?>
<?php get_header(); ?>

<style>
    .span8 {border: 1px solid black; height: 100px; background-color: #ccc;}
    .span4 {border: 1px solid black; color: #fff;}

    .widget-title {
    	font-family: Decima,"Helvetica Neue",Helvetica,Arial,sans-serif;
		letter-spacing: 1px;
		background-color: #222;
		color: #fefefe;
		text-transform: uppercase;
		padding: 7px 0 5px 10px;
		font-weight: 700;
		font-size: .9em;
	}
	blockquote {
		margin-bottom: 1em;
		font-family: "Harriet Text", Georgia, Times, "Times New Roman", serif;
		font-size: 1.125em;
		line-height: 1.16667em;
		margin-left: .1em;	
		color: black;
	}

	blockquote p:before, blockquote p a p:before {
		content: "“";
		display: block;
		float: left;
		font-size: 5.90909em;
		margin-right: .1em;
		line-height: .3em;
		position: relative;
		top: .3em;
		font-family: "Harriet Display", Georgia, Times, "Times New Roman", serif;
		left: -.04em;
	}
</style>

<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span8">Left Column
            </div>
            <div class="span4">
            	<div id="widget-reaction-quote">
            		<h2 class="widget-title">Recent Reactions</h2>
            		<blockquote>
            		<p>True wisdom comes to each of us when we realize how little we understand about life, ourselves, and the world around us.</p>
            		</blockquote>
            	</div>
            	<div id="columnists">
            	</div>
            </div>                                  
        </div>
    </div>
</body>

<?php get_footer(); ?>
