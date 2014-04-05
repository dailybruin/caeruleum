<?php/*
Template Name: Dance Marathon 2014
*/ ?>
<?php get_header(); ?>

<style type="text/css">

body {
    margin-top: 30px !important;
}

#dm-timeline {
    top: 0;
    right: 0;
    position: fixed;
    width: 100%;
    height: 30px;
    background-color: black;
}

    #dm-timeline li {
        display: inline-block;
        opacity: 0.5;
        width: 3.07%;
        height: inherit;
        box-shadow: 1px 0 0 0 white inset;
        text-align: center;
        font-weight: bold;
        font-size: 1.2em;
        line-height: 1.7;
    }

    #dm-timeline li:hover, #dm-timeline .current {
        opacity: 0.75;
        background-color: rgba(255,255,255, 0.3);
    }

        #dm-timeline li a {
            color: white;
        }

    #dm-timeline .descriptor {
        width: 20%;
        float: left;
    }

    #dm-timeline h1 {
        font-size: 0.8em;
        text-transform: uppercase;
        color: #666;
        display: inline-block;
        line-height: 1;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }

    #dm-timeline .instructions {
        font-size: 0.8em;
        color: #999;
        background-color: rgba(0,0,0, 0.6);
    }

    

#dm-banner {
    height: 300px;
    background: url('http://dailybruin.com/images/2014/04/banner1.jpg');
    background-size: cover;
    padding: 2em;
    color: white;
    text-shadow: 0.2em 0.2em black;
    margin-bottom: 2em;
}

    #dm-banner h1 {
        text-align: right;
        font-size: 5em;
        text-transform: uppercase;
    }

    #dm-banner h2 {
        text-align: right;
        font-size: 3.5em;
        margin: 0.5em 0;
        font-family: Helvetica, Arial, sans-serif;
    }

#dm-blog {
}

</style>

<script src="/js/vendor/jquery.nav.js"></script>

<script>
    $(document).ready(function(){
        for (var i = 1; i <=26; i++) {
            var $li = $('<li/>').appendTo('#dm-timeline');
            $('<a/>').appendTo($li).addClass('dm-hour').attr('href', '#hour-'+i).text(i);
        }

        $('#dm-timeline').onePageNav({
            scrollOffset: 30,
            scrollThreshold: 0.1,
            scrollSpeed: 400,
        });
    });
</script>

<ul id="dm-timeline">
    <div class="descriptor">
        <h1>Dance Marathon</h1>
        <span class="instructions">Click an hour to navigate:</span>
    </div>
</ul>

<div id="dm-banner">
    <h1>Dance Marathon</h1>
    <h2>2014</h2>
</div>

<div class="row">
    <div class="span3" id="dm-twitter">
        <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=%23KnowTheCause+OR+%23UCLADM2014+OR+%23FortheKidsFortheCure" data-widget-id="452216958230872064">Tweets about "#KnowTheCause OR #UCLADM2014 OR #FortheKidsFortheCure"</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>

    <div class="span6" id="dm-blog">
        <p class="lead">Nearly 900 people are participating in this year’s 13th annual Dance Marathon – a 26-hour-long fundraising event where students pledge stay on their feet the entire time to take a stand against pediatric AIDS. For the first time this year, the UCLA Pediatric AIDS Coalition is holding Dance Marathon is in Pauley Pavilion. Stay with us for live updates, including videos, dancer profiles and photos.</p>
        
        <hr/>

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
