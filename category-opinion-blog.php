<?php/*
Template Name: Opinion Blog
*/ ?>
<?php get_header(); ?>
<style>
    .span8 {border: 1px solid black; height: 100px; background-color: #ccc;}
    .widget-title {
    	font-family: Decima,"Helvetica Neue",Helvetica,Arial,sans-serif;
		letter-spacing: 1px;
		background-color: #222;
		color: #fefefe;
		text-transform: uppercase;
		padding: 7px 0 5px 10px;
		font-weight: 700;
		font-size: .9em;
		line-height: 20px;
	}

	blockquote p {
		display: inline-block;
		margin-bottom: 1em;
		line-height: 1.16667em;
		margin-left: 1em;
		margin-right: 1em;
	}

	#quotation-mark {
		float: left;
		font-size: 5em;
		margin-bottom: .1em;
		position: relative;
		top: .3em;
		font-family: "Harriet Display", Georgia, Times, "Times New Roman", serif;
	}

	blockquote.reaction {
		border-left: 0;
	}

	#right-column {
		border-left: 1px solid #eeeeee;
		padding-left: 10px;
		border-right: 1px solid #eee;
		padding-right: 10px;
	}

	p.attribution {
		float: right;
		color: gray;
	}
</style>

<body>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span5">Left Column
            </div>
            <div class="span3" id="right-column">
            	<div id="widget-reaction-quote">
            		<h2 class="widget-title">Recent Reactions</h2>
            		<blockquote class="reaction">
            		<span id="quotation-mark">“</span>
            		<p>True wisdom comes to each of us when we realize how little we understand about life, ourselves, and the world around us.</p>
            		<p class="attribution">-Socrates</p>
            		</blockquote>
            	</div>
            	<div id="columnists">
            	</div>
            </div>                                  
	    <?php get_sidebar(); ?>
        </div>
    </div>
</body>

<?php get_footer(); ?>
