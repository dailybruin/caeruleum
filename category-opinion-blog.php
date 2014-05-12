<?php/*
Template Name: Opinion Blog
*/ ?>
<?php get_header(); ?>
<style>
	
	/*Daria's Style*/
	.featured-img {margin: 10px 0 10px 0;}
	.category {margin: 10px 0 5px 0; height: 24px; display: inline-block; padding: 2px 20px 0 20px; font-family: Open Sans; font-size: 10pt; font-weight: bold;}
	.c1 {background-color: #15134b; color: #fff;}
	.c2 {background-color: #881e2f; color: #fff;}
	.c3 {background-color: #19562a; color: #fff;}
	.c4 {background-color: #c7ba26; color: #fff;}
	.feature-date {margin-top: 15px; text-align: right; float: right; color: #545454; font-size: 8pt;}
	.date {color: #545454; font-size: 8pt;}
	a.heading {color: #000; font-family: Georgia; font-size: 18.2pt; font-weight: bold; line-height: 1.1em;}
	.author {font-family: Arial; margin: 10px 0 5px 0;}
	.sub-img {margin: 10px 0 10px 0;}
	.recent-cols {padding: 20px 0 10px 10px;}
	a.sec-head {font-size: 14pt; font-family: Georgia; font-weight: bold; line-height: 1.1em;}
	a.sub-head {font-family: Georgia; font-weight: bold; line-height: 1.1em;}
	a.title {color: #000;}
	.illo {margin: 10px 0 10px 0;}

	/*Simon's Style*/
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

	.columnist-row {
        margin-bottom: 10px;
    }
    .columnist-info {
        display: inline-block;
        text-align: left;
    }
    .columnist-name {
        font-weight: bold;
        word-wrap: break-word;
    }
    .columnist-line {
        margin: 5px 10px 10px 10px;
    }
    .columnist-line-content {
        display: inline-block;
    }
    .columnist-text {
        vertical-align: middle;
    }
    .columnist-cat {
        display: inline-block;
        vertical-align: middle;
        height: 14px;
        width: 14px;
        background-color: yellow;
    }
    @media (min-width: 768px) and (max-width: 979px) {
        .columnist-column {
            text-align: center;
        }
        #columnist-mugshot {
            width: 100%;
        }
        #columnist-info {
            width: 100%;
            margin: auto 15px;
        }
    }
    @media (max-width: 767px) {
        .columnist-column {
            text-align: left;
        }
        #columnist-mugshot {
            display: inline-block;
            width: auto;
        }
        #columnist-info {
            display: inline-block;
            width: auto;
        }
    }

</style>

<body>

<h1>Opinion Blog</h1>
        
    <div class="container-fluid">
        <div class="row-fluid">

            <div class="span5">
		<img class="featured-img" src="http://pets4u.info/wp-content/uploads/2013/12/baby-cats-and-dogs-7.jpg"/>
		<div class="category c1">CATS & DOGS</div>
		<div class="feature-date">MAY 11, 2014</div>

		<div class="content">
			<a class="heading" href="#">Why can't we be friends: The never-ending struggle</a><br/>
			<div class="author">BY JOE BRUIN</div>
			<div class="description">
				<p>It's a widely known that dogs and cats don't mix. But where did this notion of cat-people and dog-people come from? Why do we even care about this? Joe Bruin gives his two cents on the eternal feud of cat-loves and dog-lovers. <a href="#">More >></a></p>
			</div>
		</div>

		<hr style="height:2px;border:none;color:#333;background-color:#333;" />

		<div class="category c2">BIRDS & OTHER WINGED ANIMALS</div>

		<div class="row-fluid">
			<div class="span5">
				<img class="sub-img" src="http://www.news-world.us/wp-content/uploads/2013/07/Beautiful-Birds-1.jpg"/><br/>
				<a class="sec-head title" href="#">Birds of a feather flock together</a>
				<div class="date">MAY 11, 2014</div><br/><br/>
			</div>

			<div class="span7 recent-cols">
				<a class="sub-head title" href="#">10 Things You Need to Know About Birds</a><br/><span class="date">MAY 11, 2014</span><hr/>
				<a class="sub-head title" href="#">Seagulls and other fearless animals</a><br/><span class="date">MAY 11, 2014</span><hr/>
				<a class="sub-head title" href="#">10 Things You Don't Need to Know About Birds</a><br/><div class="date">MAY 11, 2014</div><br/>			</div>
		</div>

		<hr style="height:2px;border:none;color:#333;background-color:#333;" />

		<div class="category c3">THE WONDERFUL LIVES OF TURTLES</div>

		<div class="row-fluid">
			<div class="span5">
				<img class="sub-img" src="http://martywolff.cdn3.mirahost.com/public/uploads/content/10/turtle-facial.jpg"/><br/>
				<a class="sec-head title" href="#">The secrets of longevity</a>
				<div class="date">MAY 11, 2014</div><br/><br/>
			</div>

			<div class="span7 recent-cols">
				<a class="sub-head title" href="#">Why are turtles so slow?</a><br/><span class="date">MAY 11, 2014</span><hr/>
				<a class="sub-head title" href="#">Surf's up dude!</a><br/><span class="date">MAY 11, 2014</span><hr/>
				<a class="sub-head title" href="#">The struggle for survival</a><br/><span class="date">MAY 11, 2014</span><br/>			</div>
		</div>

		<hr style="height:2px;border:none;color:#333;background-color:#333;" />

		<div class="category c4">FLOWER POWER</div>

		<div class="row-fluid">
			<div class="span5">
				<img class="illo" src="http://bigwol.com/wp-content/uploads/2014/04/abstract-flower-illustration_1600x1200_15393.jpg"/><br/>
				<a class="sec-head title" href="#">A garden of hope</a>
				<div class="date">MAY 11, 2014</div><br/><br/>
			</div>

			<div class="span7 recent-cols">
				<a class="sub-head title" href="#">101 Flowers</a><br/><span class="date">MAY 11, 2014</span><br/><hr/>
				<a class="sub-head title" href="#">Venus Flytrap and other Carnivorous Plants</a><br/><span class="date">MAY 11, 2014</span><br/><hr/>
				<a class="sub-head title" href="#">Look at these beautiful flowers</a><br/><span class="date">MAY 11, 2014</span><br/>
			</div>
		</div>


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

                <div class="columnist-column">
                    <h4>Columnists</h4>
                    <div class="row-fluid columnist-row">
                        <div id="columnist-mugshot" class="span6">
                            <img src="http://i.imgur.com/SAHUYJU.jpg" alt="Harrison Liddiard">
                        </div>
                        <div id="columnist-info" class="span6 columnist-info">
                            <div class="columnist-name">Harrison Liddiard</div>
                            <div class="columnist-line">
                                <div class="columnist-line-content">
                                    <span class="columnist-cat"></span><span class="columnist-text"> Online</span>
                                </div>
                            </div>
                            <div class="columnist-line">
                                <div class="columnist-line-content">
                                    <span class="columnist-cat"></span><span class="columnist-text"> Daily Bruin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid columnist-row">
                        <div id="columnist-mugshot" class="span6">
                            <img src="http://i.imgur.com/SAHUYJU.jpg" alt="Harrison Liddiard">
                        </div>
                        <div id="columnist-info" class="span6 columnist-info">
                            <div class="columnist-name">Not Harrison Liddiard ablahblahblah</div>
                            <div class="columnist-line">
                                <div class="columnist-line-content">
                                    <span class="columnist-cat"></span><span class="columnist-text"> Online</span>
                                </div>
                            </div>
                            <div class="columnist-line">
                                <div class="columnist-line-content">
                                    <span class="columnist-cat"></span><span class="columnist-text"> Daily Bruin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-fluid columnist-row">
                        <div id="columnist-mugshot" class="span6">
                            <img src="http://i.imgur.com/SAHUYJU.jpg" alt="Harrison Liddiard">
                        </div>
                        <div id="columnist-info" class="span6 columnist-info">
                            <div class="columnist-name">Woah</div>
                            <div class="columnist-line">
                                <div class="columnist-line-content">
                                    <span class="columnist-cat"></span><span class="columnist-text"> Online</span>
                                </div>
                            </div>
                            <div class="columnist-line">
                                <div class="columnist-line-content">
                                    <span class="columnist-cat"></span><span class="columnist-text"> Daily Bruin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   

	     <?php get_sidebar(); ?>

	</div>
    </div>
</body>

<?php get_footer(); ?>
