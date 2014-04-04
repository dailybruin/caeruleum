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
}

</style>

<div id="dm-banner">
    <h1>Dance Marathon 2014</h1>
</div>

<div class="row">
    <div class="span3" id="dm-twitter">
        <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=%23KnowTheCause+OR+%23UCLADM2014+OR+%23FortheKidsFortheCure" data-widget-id="452216958230872064">Tweets about "#KnowTheCause OR #UCLADM2014 OR #FortheKidsFortheCure"</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>

    <div class="span6" id="dm-blog">
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum posuere magna ac eleifend. Pellentesque vel odio quam. Donec at aliquam diam, eu semper arcu. Quisque massa metus, pharetra vitae sem ac, mattis mattis sapien. Nam in ipsum at nisi ultricies ultrices. Praesent egestas justo eget massa semper, vitae feugiat nunc pharetra. Aliquam tempor sapien a venenatis faucibus.</p>

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

    <div class="span3" id="dm-instagram">
        <h2>#UCLADM2014</h2>
        <!-- SnapWidget -->
        <iframe src="http://snapwidget.com/bd/?h=dWNsYWRtMjAxNHxpbnwyMDB8MXw0fHx5ZXN8MjB8bm9uZXxvblN0YXJ0fHllcw==&v=4414" title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:222px; height:1388px"></iframe>
    </div>
</div>

<?php get_footer(); ?>
