<?php/*
Template Name: Oscars 2013
*/ ?>
<?php get_header(); ?>
<script type="text/javascript">
$(document).ready(function(){
    unresponsivize();
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
</style>
<div class="row" id="single-post">
	<div class="span8" id="post">
	    <div class="oscars-title">
	        <span>The 2013</span>
    	    <h3>Academy Awards</h3>
    	</div><!-- end div.oscars-title -->
        <iframe src="https://docs.google.com/a/media.ucla.edu/spreadsheet/embeddedform?formkey=dG40R1FYc0h0aDg0UURrX1dCMlRZUHc6MQ" width="620" height="1377" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
	</div><!-- end div#post -->
	
	<?php get_sidebar(); ?>
	
</div><!-- end div#single-post -->      


<?php get_footer(); ?>