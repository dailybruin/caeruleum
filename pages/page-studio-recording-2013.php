<?php/*
Template Name: A Secret Kind of Art
*/ ?>

<?php get_header(); ?>

<style type="text/css">
    .studio-recording-page #feature-head {
        margin-bottom: 30px;
    }
    .studio-recording-page .video-explainer {
        margin-top:6px;
    }
</style>
<div class="row">
	<div class="span8 studio-recording-page" id="post">
    	<div id="feature-head">
            <img src="/images/features/studio-recording/secret-kind-of-art.svg" alt="A Secret Kind of Art" />
        </div><!-- end div#feature-head -->

        <div class="row">
            <div class="span8" id="video-primary">
                <h3>Title of the video</h3>
                <iframe width="100%" height="400px" src="http://www.youtube.com/embed/kfVsfOSbJY0" frameborder="0" allowfullscreen></iframe>
                <p class="video-explainer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue, dolor et tempus pulvinar, nisi dolor dapibus velit, at pulvinar orci turpis eu nisl. Curabitur tincidunt leo vel risus elementum mollis. Nulla commodo, augue vel venenatis sollicitudin, tellus velit porta metus, quis bibendum lacus sem eu nisl.</p>
            </div><!-- end div.span8 -->
            <div class="span4">
                <h3>Title of the video</h3>
                <iframe width="100%" height="240px" src="http://www.youtube.com/embed/kfVsfOSbJY0" frameborder="0" allowfullscreen></iframe>
                <p class="video-explainer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue, dolor et tempus pulvinar, nisi dolor dapibus velit, at pulvinar orci turpis eu nisl. Curabitur tincidunt leo vel risus elementum mollis. Nulla commodo, augue vel venenatis sollicitudin, tellus velit porta metus, quis bibendum lacus sem eu nisl.</p>
            </div><!-- end div.span4 -->
            <div class="span4">
                <h3>Title of the video</h3>
                <iframe width="100%" height="240px" src="http://www.youtube.com/embed/kfVsfOSbJY0" frameborder="0" allowfullscreen></iframe>
                <p class="video-explainer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce congue, dolor et tempus pulvinar, nisi dolor dapibus velit, at pulvinar orci turpis eu nisl. Curabitur tincidunt leo vel risus elementum mollis. Nulla commodo, augue vel venenatis sollicitudin, tellus velit porta metus, quis bibendum lacus sem eu nisl.</p>
            </div><!-- end div.span4 -->
        </div><!-- end div.row -->

	</div><!-- end div#post -->
	
	<?php get_sidebar(); ?>
	
</div><!-- end div#single-post -->      
<?php get_footer(); ?>