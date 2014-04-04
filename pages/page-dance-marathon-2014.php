<?php/*
Template Name: Dance Marathon 2014
*/ ?>
<?php get_header(); ?>

<style type="text/css">

#dm-banner {
    height: 300px;
    background: url('http://i.imgur.com/wk1rnn7.jpg');
    background-size: cover;
    padding: 2em;
    color: white;
    text-shadow: 0.2em 0.2em black;
    margin-bottom: 2em;
}

    #dm-banner h1 {
        font-size: 5em;
        text-transform: uppercase;
    }

#dm-blog {
    clear: both;
}

</style>

<div id="dm-banner">
    <h1>Dance Marathon 2014</h1>
</div>

<div class="span3" id="dm-twitter">
    <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=%23KnowTheCause+OR+%23UCLADM2014+OR+%23FortheKidsFortheCure" data-widget-id="452216958230872064">Tweets about "#KnowTheCause OR #UCLADM2014 OR #FortheKidsFortheCure"</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<div class="span6" id="dm-lead">
    Lorem ipsum dolor sit amet
</div>

<div class="span3" id=dm-instagram">
</div>

<div id="dm-blog">
    <!-- live blog content -->
    <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                the_content();
                //
                // Post Content here
                //
            } // end while
        } // end if
    ?>
    <!-- end live blog content -->
</div>

<?php get_footer(); ?>
