<?php/*
Template Name: Next 2015
*/ ?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="db-off-canvas-wrap db-content">
		<div class="row">
			<div class="main-video">
				<img src="http://dailybruin.com/images/2015/03/Web-Cover.jpg"/>
<!-- 				<div class="flex-video widescreen">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/pZ12_E5R3qc?autoplay=0&controls=0&showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe>
				</div> -->
			</div>
			<div class="body">
				<?php the_content(); ?>
				<div class="where">
					<h3 class="title">Where we&rsquo;re going</h3>
					<div class="row">
						<div class="large-7 columns">
							<h3>Developing on the Stack</h3>
							<p>We want to have a space where our developers are free to create and experiment with online journalism. Daily Bruin Online is creating the Stack, a blog to do just that. The Stack will be a constant feed from our Online department with creations – small and large – and a behind-the-scenes view of how we are making digital content. We are focusing on providing a restriction-free environment so that developers can build what they want, when they want, and pursue projects that push the boundaries of modern journalism.</p></div>
						<div class="large-5 columns"><img src="http://dailybruin.com/images/2015/03/stackss.png"/></div>
					</div>
					<div class="row">
						<div class="large-5 columns"><img src="http://dailybruin.com/images/2015/03/Old-New.jpg"/></div>
						<div class="large-7 columns">
							<h3>Modern design for a modern audience</h3>
							<p>The Daily Bruin is working on revamping its design. The new website design is just one piece of that effort. We are focusing on maintaining a consistent modern look across all of our platforms. That is why you may notice similarities between our print design and web design.</p>
							<p>Stories are also getting a new look and feel. Larger projects are now coupled with individualized webpages to improve the online display for stories. The intention is to enhance our written stories with a visual interactive display that captures the reader. </p> 
						</div>
					</div>
					<div class="row">
						<div class="large-7 columns">
							<h3>Engaging readers online</h3>
							<p>Our readership is clearly moving online. We know how important it is to have a strong, stable social media presence since most of our views come from links on <a href="http://facebook.com/dailybruin">Facebook</a> and <a href="http://twitter.com/dailybruin">Twitter</a>.</p>
							<p>To maintain that presence, we are simulataneously working on improving the content of our posts to be as reader-friendly as possible while also <a href="https://github.com/daily-bruin/meow">working on digital tools to help us produce those posts seamlessly</a>.</p>
						</div>
						<div class="large-5 columns"><img src="http://dailybruin.com/images/2015/03/Social-Media.jpg"/></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; ?>

<style>
a {
	color: #0080c6;
}
.main-video {
	max-width: 60rem;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 2rem;
	margin-top: 2rem;
}
.body {
	margin-top: 2rem;
	margin-bottom: 2rem;
	max-width: 65rem;
	margin-left: auto;
	margin-right: auto;
}
.body .where {
	border-top: thin lightgrey dashed;
	margin-top: 2rem;
	padding-top: 1rem;
	max-width: 60rem;
	margin-left: auto;
	margin-right: auto;
}
.body h2 {
	font-size: 2rem;
	margin-bottom: 1.5rem;
}
.body h3 {
	font-size: 1.8rem;
	line-height: 1.5;
}
.body .title {
	font-size: 2rem;
	text-align: center;
	margin-bottom:2rem;
}
.body p {
	margin-bottom: 1.2rem;
	line-height: 1.7;
	font-size: 0.9rem;
}
.db-ad-leaderboard {
	display: none;
}
.below-header {
	display: none !important;
}
.where .row {
	margin-top: 3rem;
}
</style>

<?php get_footer(); ?>
