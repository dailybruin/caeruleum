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
							<img src="http://dailybruin.com/images/2015/04/bucko.jpg"/>
							<h3>Hannah Bucko - Alto</h3>
							<p>Fourth-year microbiology, immunology and molecular genetics student</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://dailybruin.com/images/2015/04/summers.jpg"/>
							<h3>Sarah Summers - Alto</h3>
							<p>Third-year dance student</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://dailybruin.com/images/2015/04/london.jpg"/>
							<h3>Olivia London - Bass</h3>
							<p>Second-year musical theater student</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns">
							<img src="http://dailybruin.com/images/2015/04/rose.jpg"/>
							<h3>Morgan Rose - Soprano</h3>
							<p>Second-year international development studies student</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://dailybruin.com/images/2015/04/walcott.jpg"/>
							<h3>Rianna Walcott - Bass</h3>
							<p>Third-year English exchange student from London</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://dailybruin.com/images/2015/04/ramos.jpg"/>
							<h3>Julia Ramos - Vocal Percussion</h3>
							<p>Fourth-year Design | Media Arts student</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns">
							<img src="http://dailybruin.com/images/2015/04/horton.jpg"/>
							<h3>Hannah Horton - Alto</h3>
							<p>Third-year economics student</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://dailybruin.com/images/2015/04/gunter.jpg"/>
							<h3>Tricia Gunter - Soprano/Alto</h3>
							<p>Third-year psychobiology student</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://dailybruin.com/images/2015/04/rudnicki.jpg"/>
							<h3>Amelia Rudnicki - Soprano</h3>
							<p>Fourth-year psychobiology student</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns">
							<img src="http://dailybruin.com/images/2015/04/gaumond.jpg"/>
							<h3>Megan Gaumond - Soprano</h3>
							<p>Third-year psychology student</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
							<img src="http://dailybruin.com/images/2015/04/zetterberg.jpg"/>
							<h3>Emily Zetterberg - Soprano</h3>
							<p>Third-year musical theater student</p>
							<audio src="http://dailybruin.com/images/2015/04/TriciaGunter.wav" controls></audio>
						</div>
						<div class="large-4 columns">
						</div>
					</div>
					<div class="row">
						<h3>Members not included in radio pieces:</h3>
						<div class="large-6 columns">
							<h3>Annie Chin - Soprano</h3>
							<p>Fourth-year communication studies student</p>
						</div>
						<div class="large-6 columns">
							<h3>Rebecca Birstock - Alto</h3>
							<p>Third-year theater student</p>
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