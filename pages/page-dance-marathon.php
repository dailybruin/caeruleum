<?php/*
Template Name: Dance Marathon 2013
*/ ?>
<?php get_header(); ?>
<script type="text/javascript">
jQuery(document).ready(function() {
    unresponsivize();
});
</script>
<style type="text/css">
    .dm-2013-page {
        position: relative;
    }
    .dm-2013-page .dmwhite {
        padding:16px;
        color:white;
        display:block;
    }
    .dm-2013-page .biglink {
        font-size: 1.3em;
        font-weight: bold;
        text-transform: uppercase;
    }
    .dm-2013-page #dm-liveblog {
        width:100%;
        display:block;
        background-color:#f50a1b;
    }
    .dm-2013-page #dm-liveblog:hover {
        text-decoration:none;
        box-shadow: 0 0 55px rgba(0,0,0,0.2) inset;
    }
    .dm-2013-page #dm-top {
        margin-top:20px;
    }
    .dm-2013-page #dm-explain {
        font-family: "Georgia",serif;
        font-size: 1.1em;
        line-height: 22px;
        font-style: italic;
        text-align: center;
        margin-top: 27px;
        margin-bottom: 46px;
    }
    .dm-2013-page [id^="dm-c-"]
    {
        display:block;
        height:10px;
        width:10px;
        background-color:gray;
    }
    .dm-2013-page #dm-collage {
        position:relative;
    }
    .dm-2013-page #dm-c-1 {
        width: 100%;
        height: 210px;
        margin-bottom: 10px;
        background-image:url("/images/features/dm-2013/CHAR3583.JPG");
        background-position: center center;
        background-size: 100%;
    }
    .dm-2013-page #dm-c-2 {
        height: 150px;
        margin-bottom: 10px;
        width: 106px;
        float: left;
        background-image:url("/images/features/dm-2013/CHAR3599.JPG");
    }
    .dm-2013-page #dm-c-3 {
        float: left;
        margin-left: 10px;
        width: 195px;
        height: 77px;
        background-image:url("/images/features/dm-2013/Wide-Shot.jpg");
    }
    .dm-2013-page #dm-c-4 {
        float: left;
        margin-left: 10px;
        height: 150px;
        width: 200px;
        background-image: url("/images/features/dm-2013/CHAR3064.JPG");
        background-position: center center;
        background-size: 100%;
    }
    .dm-2013-page #dm-c-5 {
        float: left;
        margin-left: 10px;
        width: 89px;
        height: 74px;
        background-image: url("/images/features/dm-2013/CHAR3476.JPG");
        background-position: center center;
        background-size: 100%;
    }
    .dm-2013-page #dm-c-6 {
        float: left;
        margin-left: 10px;
        margin-top: 10px;
        height: 66px;
        width: 89px;
        background-image: url("/images/features/dm-2013/CHAR3335.JPG");
        background-position: center center;
        background-size: 100%;
    }
    .dm-2013-page #dm-c-7 {
        position: absolute;
        bottom: 10px;
        left: 216px;
        height: 64px;
        width: 94px;
        background-image: url("/images/features/dm-2013/CHAR2975.JPG");
        background-position: center center;
        background-size: 100%;
    }
    .dm-2013-page #dm-c-8 {
        position: absolute;
        bottom: 10px;
        left: 117px;
        height: 64px;
        width: 89px;
        background-image: url("/images/features/dm-2013/CHAR3208.JPG");
        background-position: center center;
        background-size: 100%;
    }
    .dm-2013-page #dm-collage-title {
        position: absolute;
        right: 14px;
        top: 31px;
        color: white;
        font-size: 3em;
        font-weight: bold;
        text-transform: uppercase;
        text-shadow: 1px 1px 1px black;
    }
    .dm-2013-page #dm-collage-title2 {
        position: absolute;
        color: white;
        right: 14px;
        top: 72px;
        font-weight: bold;
        top: 71px;
        font-weight: bold;
        font-size: 2.2em;
        text-shadow: 1px 1px 1px black;
    }
    .dm-2013-page .dm-timeline-day {
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        background-color: #060342;
        text-align: center;
        font-weight: bold;
        font-size: 1.3em;
        border-radius: 2px;
    }
    .dm-2013-page .dm-timeline-event {
        width: 100%;
        background-color: #2c7c1d;
        border-radius: 2px;
    }
    .dm-2013-page hr.vertical {
        margin: 0;
        height: 30px;
        border-left: none;
        border-top: none;
        border-bottom: none;
        border-right: 1px solid #aaa;
        width: 50%;
    }
    .dm-2013-page .timeline-time {
        display: block;
        float: right;
        color: #2c7c1d;
        text-transform: uppercase;
        font-size: 0.8em;
        margin-top: -3px;
        text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
    }
    .dm-2013-page .dm-timeline-link a {
        font-family: "Georgia",serif;
        font-size: 1.2em;
        font-style: italic;
        font-weight: bold;
        text-shadow: 1px 1px 0px rgba(0,0,0,0.1);
    }
    .dm-2013-page .dm-link {
        opacity: 0.2;
        position: relative;
        top: -3px;
        display: block;
        float: left;
        margin-right: 7px;
    }
    .dm-2013-page .dm-timeline-event .dmwhite {
        padding:8px;
        text-shadow: 1px 1px 0px rgba(0,0,0,0.5);
        text-align: center;
    }
    .dm-2013-page .dm-timeline-day {
        text-shadow: 1px 1px 0 black;
    }
    .dm-2013-page .unbold {
        font-weight:normal;
        font-size: 0.6em;
        text-transform: uppercase;
        display: block;
        opacity: 0.7;
    }
    .dm-2013-page .link-oneline {
        display: block;
        padding-top: 7px;
    }
    .dm-2013-page .link-mb1 {
        margin-bottom:10px;
    }
    .dm-2013-page .link-mb2 {
        margin-bottom:25px;
    }
    .dm-2013-page .dm-story {
        font-family: "Georgia",serif;
        font-size: 1.3em;
        color: #333;
        text-shadow: 1px 1px 0 rgba(0,0,0,0.1);
        display:block;
        padding-top:4px;
        padding-bottom:4px;
    }
    .dm-2013-page .dm-story:hover {
        background-color:#e6e6e6;
        text-decoration:none;
    }
    .dm-2013-page .dm-pubdate {
        display: block;
        font-family: "Helvetica Neue","Helvetica","Arial",sans-serif;
        text-transform: uppercase;
        font-size: 0.6em;
        font-weight: bold;
    }
    .dm-2013-page #dm-sm {
        margin-top: 10px;
        position:relative;
    }
    .dm-2013-page #dm-sm iframe {
        float:right;
        position:absolute;
        top:0;
        right:0;
    }
</style>
<div class="row dm-2013-page">
	<div class="span8" id="post">
	    <div id="dm-collage">
	        <span id="dm-collage-title">Dance Marathon</span>
	        <span id="dm-collage-title2">2013</span>
    	    <div id="dm-c-1"> </div>
    	    <div id="dm-c-2"> </div>
    	    <div id="dm-c-3"> </div>
    	    <div id="dm-c-4"> </div>
    	    <div id="dm-c-5"> </div>
    	    <div id="dm-c-6"> </div>
    	    <div id="dm-c-7"> </div>
    	    <div id="dm-c-8"> </div>
    	    <div style="display:block;clear:both;width:100%;"></div>	    
	    </div>
	    
        <a id="dm-liveblog" href="/2013/02/16/live-blog-dance-marathon-2013/">
            <span class="dmwhite biglink">Read the latest on our liveblog &raquo;</span>
        </a><!-- end #dm-liveblog -->
        
        <div id="dm-sm">    	
            <div class="fb-like" data-send="true" data-width="225" data-show-faces="true" data-action="recommend"></div>
            <a href="https://twitter.com/share" class="twitter-share-button" data-via="dailybruin" data-hashtags="ucladm13">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div><!-- end div#dm-sm -->
        
        
        <div class="row" id="dm-top">
            <div class="span3">
                <p id="dm-explain">UCLA students spent 26 hours on their feet for Dance Marathon from Feb. 16-17. The event, in its 12th year, raises money to combat pediatric AIDS.</p>
                <!-- SnapWidget -->
                <h3>Instagram #ucladm13</h3>
                <iframe src="http://snapwidget.com/in/?h=dWNsYWRtMTN8aW58MTAwfDJ8M3x8eWVzfDV8bm9uZQ==" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:230px; height: 345px" ></iframe>
                
            </div><!-- end div.span3 -->
            <div class="span5">
                <a class="twitter-timeline" href="https://twitter.com/search?q=%23ucladm13" data-widget-id="303120684165496834">Tweets about "#ucladm13"</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
        </div><!-- end div.row -->
        <div class="row">
            <div class="span8">
                <h3>More stories:</h3>
            </div>
            <div class="span2">
                <a href="http://dailybruin.com/2013/02/17/student-shows-off-her-props-costumes/" class="dm-story">
                    <span class="dm-pubdate">Feb 17</span>
                    Student shows off props, costumes</a>
            </div><!-- end div.span2 -->
            <div class="span2">
                <a href="http://dailybruin.com/2013/02/16/cause-room-aims-to-eliminate-stigma/" class="dm-story">
                    <span class="dm-pubdate">Feb 16</span>
                    &ldquo;Cause Room&rdquo; aims to eliminate stigma</a>
            </div><!-- end div.span2 -->
            <div class="span2">
                <a href="http://dailybruin.com/2013/02/16/ucla-alumna-sells-dance-marathon-merchandise/" class="dm-story">
                    <span class="dm-pubdate">Feb 16</span>
                    UCLA alumna sells Dance Marathon merchandise</a>
            </div><!-- end div.span2 -->
            <div class="span2">
                <a href="http://dailybruin.com/2013/02/15/dance-marathon-changes-name-to-include-generous-donor/" class="dm-story">
                    <span class="dm-pubdate">Feb 15</span>
                    Dance Marathon changes name to include generous donor</a>
            </div><!-- end div.span2 -->
        </div><!-- end div.row -->
	</div><!-- end div#post -->
	
	<div class="span4 dm-2013-page">
	    <?php get_template_part('ad','side'); ?>
	    <div style="display:block;width:100%;height:15px;"></div>
	    <div class="dm-timeline-link">
	        <img src="/images/features/dm-2013/icon-link.png" class="dm-link" /> <a href="http://mojo.dailybruin.com/how-to-prepare-for-dance-marathon/">How to prepare for Dance Marathon</a>
	    </div><!-- end div.dm-timeline-link-->
	    <hr class="vertical" />
	    <div class="dm-timeline-day">
	        <span class="dmwhite">Saturday<br /><span class="unbold">February 16</span></span>
	    </div><!-- end .div-timeline-day -->
	    <hr class="vertical" />
	    <div class="dm-timeline-link">
	        <img src="/images/features/dm-2013/icon-link.png" class="dm-link" /> <a href="http://dailybruin.com/images/2013/02/dm3.jpg" class="link-oneline">Photo: Dancers check in</a>
	        <span style="display:block;width:100%;clear:both"></span>
	    </div><!-- end div.dm-timeline-link-->
	    <hr class="vertical" />
	    <div class="dm-timeline-event">
	        <span class="dmwhite">Introduction &amp; countdown</span>
	        <span class="timeline-time">10:45 a.m.</span>
	    </div><!-- end div.dm-timline-event -->
	    <hr class="vertical" />
	    <div class="dm-timeline-event">
	        <span class="dmwhite">Dancing begins</span>
	        <span class="timeline-time">11:00 a.m.</span>
	    </div><!-- end div.dm-timline-event -->
	    <hr class="vertical" />
	    <div class="dm-timeline-link">
	        <img src="/images/features/dm-2013/icon-link.png" class="dm-link" /> <a href="http://www.youtube.com/watch?feature=player_embedded&v=zJbWUasdW9A">Video: Beginning moments of Dance Marathon 2013</a>
	    </div><!-- end div.dm-timeline-link-->
	    <hr class="vertical" />
	    <div class="dm-timeline-link">
	        <img src="/images/features/dm-2013/icon-link.png" class="dm-link link-mb2" /> <a href="http://www.youtube.com/watch?feature=player_embedded&v=zJbWUasdW9A">Video: Pediatric AIDS Coalition committee members demo morale dance</a>
	    </div><!-- end div.dm-timeline-link-->
	    <hr class="vertical" />
	    <div class="dm-timeline-link">
	        <img src="/images/features/dm-2013/icon-link.png" class="dm-link link-mb1" /> <a href="http://www.youtube.com/watch?feature=player_embedded&v=2x5SsFZYzes">Video: Participants and committee members do the Harlem Shake</a>
	    </div><!-- end div.dm-timeline-link-->
	    <hr class="vertical" />
	    <div class="dm-timeline-link">
	        <img src="/images/features/dm-2013/icon-link.png" class="dm-link link-mb1" /> <a href="http://www.youtube.com/watch?feature=player_embedded&v=4yk25ikTvYE">Video: Jamar Rogers performs &ldquo;Ours for the Taking&rdquo;</a>
	    </div><!-- end div.dm-timeline-link-->
	    <hr class="vertical" />
	    <div class="dm-timeline-link">
	        <img src="/images/features/dm-2013/icon-link.png" class="dm-link" /> <a href="http://dailybruin.com/2013/02/16/participants-take-break-from-dancing-to-eat/">Participants take break from dancing to eat</a>
	    </div><!-- end div.dm-timeline-link-->
	    <hr class="vertical" />
	    <div class="dm-timeline-day">
	        <span class="dmwhite">Sunday<br /><span class="unbold">February 17</span></span>
	    </div><!-- end .div-timeline-day -->
	    <hr class="vertical" />
	    <div class="dm-timeline-event">
	        <span class="dmwhite">Half-way point</span>
	        <span class="timeline-time">12:00 a.m.</span>
	    </div><!-- end div.dm-timline-event -->
	    <hr class="vertical" />
	    <div class="dm-timeline-event">
	        <span class="dmwhite">Curtains open</span>
	        <span class="timeline-time">9:00 a.m.</span>
	    </div><!-- end div.dm-timline-event -->
	    <hr class="vertical" />
	    <div class="dm-timeline-event">
	        <span class="dmwhite">Power hour</span>
	        <span class="timeline-time">Noon</span>
	    </div><!-- end div.dm-timline-event -->
	    <hr class="vertical" />
	    <div class="dm-timeline-event">
	        <span class="dmwhite">Dancing ends</span>
	        <span class="timeline-time">1:00 p.m.</span>
	    </div><!-- end div.dm-timline-event -->
	    <hr class="vertical" />
	    <div class="dm-timeline-event">
	        <span class="dmwhite">Fundraising amount announced</span>
	        <span class="timeline-time">1:30 p.m.</span>
	    </div><!-- end div.dm-timline-event -->	    
	</div>
	<?php //get_sidebar(); ?>
	
</div><!-- end div#single-post -->      


<?php get_footer(); ?>
