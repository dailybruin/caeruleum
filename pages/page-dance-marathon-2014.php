<?php/*
Template Name: Dance Marathon 2014
*/ ?>
<?php get_header(); ?>

<style type="text/css">

#dm-timeline {
    top: 0;
    right: 0;
    position: fixed;
    width: 100%;
    height: 34px;
    background-color: #205;
    z-index: 100;
    box-shadow: 0 0 10px black;
    display: none;
}

    #dm-timeline li {
        display: inline-block;
        opacity: 0.5;
        width: 2.84%;
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
            font-size: 1.2em;
        }

    #dm-timeline .descriptor {
        width: 26%;
        float: left;
    }

    #dm-timeline h1 {
        text-transform: uppercase;
        color: rgba(255,255,255, 0.6);
        display: inline-block;
        line-height: 1;
        margin-left: 0.5em;
        margin-right: 0.5em;
        font-size: 1em;
    }

    #dm-timeline .instructions {
        color: rgba(255,255,255, 0.8);
    }

    

#dm-banner {
    position: relative;
    height: 300px;
    background: url('http://dailybruin.com/images/2014/04/banner2.jpg');
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

    #dm-banner .dm-time-remaining {
        display: none;
        position: absolute;
        bottom: 0;
        left: 0;
        font-size: 2em;
        padding: 0.5em;
    }

        #dm-banner .dm-time-remaining h3 {
            font-size: 0.5em;
            text-transform: uppercase;
            font-weight: normal;
            color: white;
            background-color: rgba(0,0,0, 0.6);
            padding: 0.4em 0.5em;
            margin: 0;
            display: inline-block;
        }

        #dm-banner .dm-timer {
            background-color: rgba(0,0,0, 0.6);
            padding: 0.2em;
        }

            #dm-banner .dm-timer .countdown-section {
                display: inline-block;
                margin-right: 0.5em;
            }

            #dm-banner .dm-timer .countdown-amount {
                display: inline-block;
                margin-right: 0.25em;
            }

#dm-blog-title {
    font-weight: bold;
    text-transform: uppercase;
    color: #0a0;
}

#dm-instagram h2 {
    font-family: Helvetica, Arial, sans-serif;
}

div[id*='hour-'] {
    box-shadow: 0 6px 12px -3px rgba(0,0,0, 0.2);
    padding: 1em;
    margin: 2em 0;
    border: 1px solid rgba(0,0,0, 0.1);
    overflow: hidden; /* clearfix */
}

</style>

<script src="/js/vendor/jquery.nav.js"></script>
<script src="/js/vendor/jquery.plugin.min.js"></script>
<script src="/js/vendor/jquery.countdown.min.js"></script>

<script>
    $(document).ready(function(){
        for (var i = 1; i <=26; i++) {
            var $li = $('<li/>').appendTo('#dm-timeline');
            $('<a/>').appendTo($li).addClass('dm-hour').attr('href', '#hour-'+i).text(i);
        }

        $('#dm-timeline').onePageNav({
            scrollOffset: 40,
            scrollThreshold: 0.1,
            scrollSpeed: 400,
        });

        $(window).scroll(function(){
            if ($(this).scrollTop() > 160) {
                $('#dm-timeline').slideDown();
            }
        });

        $('.dm-timer').countdown({ 
            until: new Date(Date.UTC(2014, 3, 6, 20, 0, 0))
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
    <div class="dm-time-remaining">
        <h3>Time remaining</h3>
        <div class="dm-timer"></div>
    </div>
</div>

<div class="row">
    <div class="span3" id="dm-twitter">
        <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=%23KnowTheCause+OR+%23UCLADM2014+OR+%23FortheKidsFortheCure" data-widget-id="452216958230872064">Tweets about "#KnowTheCause OR #UCLADM2014 OR #FortheKidsFortheCure"</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>

    <div class="span6" id="dm-blog">
        <p class="lead">Nearly 900 people are participating in this year’s 13th annual Dance Marathon – a 26-hour-long fundraising event where students pledge to stay on their feet the entire time to take a stand against pediatric AIDS. For the first time this year, the UCLA Pediatric AIDS Coalition is holding Dance Marathon is in Pauley Pavilion. Stay with us for live updates, including videos, dancer profiles and photos.</p>
        
        <div id="dm-blog-title">Live Blog</div>
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
