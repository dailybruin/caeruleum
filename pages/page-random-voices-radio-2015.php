<?php/*
Template Name: Random Voices Radio 2015
*/ ?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="db-off-canvas-wrap db-content">
		<div class="row">
			<div class="main-video">
				<img src="http://dailybruin.com/images/2015/04/randomvoicesv2.png"/>
				<div class="header-text"><?php the_content(); ?></div>
			</div>
			<div class="body">
				<div class="where">
					<h3 class="title">Musical Journeys</h3>
					<div class="row">
						<div class="large-4 columns">
							<img src="http://placehold.it/250x250"/>
							<h3>Hannah Bucko - Alto</h3>
							<p>Fourth-year microbiology, immunology and molecular genetics student.</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://placehold.it/250x250"/>
							<h3>Developing on the Stack</h3>
							<p>We want to have a space where our developers.</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://placehold.it/250x250"/>
							<h3>Developing on the Stack</h3>
							<p>We want to have a space where our developers.</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns">
							<img src="http://placehold.it/250x250"/>
							<h3>Hannah Bucko - Alto</h3>
							<p>Fourth-year microbiology, immunology and molecular genetics student.</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://placehold.it/250x250"/>
							<h3>Developing on the Stack</h3>
							<p>We want to have a space where our developers.</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://placehold.it/250x250"/>
							<h3>Developing on the Stack</h3>
							<p>We want to have a space where our developers.</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns">
							<img src="http://placehold.it/250x250"/>
							<h3>Hannah Bucko - Alto</h3>
							<p>Fourth-year microbiology, immunology and molecular genetics student.</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://placehold.it/250x250"/>
							<h3>Developing on the Stack</h3>
							<p>We want to have a space where our developers.</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://placehold.it/250x250"/>
							<h3>Developing on the Stack</h3>
							<p>We want to have a space where our developers.</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns">
							<img src="http://placehold.it/250x250"/>
							<h3>Hannah Bucko - Alto</h3>
							<p>Fourth-year microbiology, immunology and molecular genetics student.</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://placehold.it/250x250"/>
							<h3>Developing on the Stack</h3>
							<p>We want to have a space where our developers.</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://placehold.it/250x250"/>
							<h3>Developing on the Stack</h3>
							<p>We want to have a space where our developers.</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
					</div>
					<div class="row">
						<h3>Members not included in radio pieces:</h3>
						<div class="large-6 columns">
							<div class="large-4 columns">
								<img src="http://placehold.it/350x350"/>
							</div>
							<div class="large-8 columns">
								<p>We want to have a space</p>
								<p>We want to</p>
							</div>
						</div>
						<div class="large-6 columns">
							<div class="large-4 columns">
								<img src="http://placehold.it/350x350"/>
							</div>
							<div class="large-8 columns">
								<p>We want to have a space</p>
								<p>We want to</p>
							</div>
						</div>
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
.header-text h2{
	font-size: 1.2rem;
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
	font-size: 1.4rem;
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
.body img {
	max-width: 150px;
	display: block;
	margin-left: auto;
	margin-right: auto;
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