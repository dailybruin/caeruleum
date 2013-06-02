<?php 
    // Load jPlayer
    wp_enqueue_script( 
        'jplayer', 
        get_template_directory_uri() . '/js/vendor/jPlayer/jquery.jplayer.min.js', 
        array('jquery'), null, false 
    ); 
?>

<?php get_header(); ?>

<script type="text/javascript">
    $(document).ready(function(){
      $("#jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            mp3: "http://dailybruin.com/images/2013/05/5.20.lss_.mp3"
          });
        },
        ended: function() {
            $("#play_1 .jplayer_play").click();
        },
        swfPath: "/js/vendor/jPlayer",
        supplied: "mp3"
      });
    });

    $(document).ready(function(){
        $('#play_1 .jplayer_play').click(function(e) {
            $('#play_1 .jplayer_play').css('display','none');
            $('#play_1 .jplayer_pause').css('display','block');
            $.jPlayer.pause();
            $("#jplayer_1").jPlayer("play");
            e.preventDefault();
        });
        $('#play_1 .jplayer_pause').click(function(e) {
            $('#play_1 .jplayer_pause').css('display','none');
            $('#play_1 .jplayer_play').css('display','block');
            $.jPlayer.pause();
            e.preventDefault();
        });

    });
</script>

<style type="text/css">
    .studio-recording-page #feature-head {
        margin-bottom: 30px;
    }
    .studio-recording-page .video-explainer {
        margin-top:6px;
    }
    .studio-recording-page .js_player {
        float: right;
        width: 50%;
        margin-left: 8px;
        margin-bottom: 8px;
        background-color: #eee;
        padding: 5px;
        margin-top: 7px;
    }
    .studio-recording-page .js_player h4 {
        font-size: 1em;
        margin-top: 0;
        margin-bottom: 10px;
        line-height: 1.1em;
    }
    .studio-recording-page .js_player a {
        width: 100%;
        display: block;
        text-align: center;
        color: black;
        font-size: 1em;
        position: relative;
    }
    .studio-recording-page .js_player a:hover {
        text-decoration:none;
        background-color:#dfdfdf;
        cursor:pointer;
    }
    .studio-recording-page .js_player .jplayer_pause {
        display:none;
    }
</style>
<div class="row">
	<div class="span8 studio-recording-page" id="post">
    	<div id="feature-head">
            <img src="/images/features/studio-recording/secret-kind-of-art.svg" />
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
                <div id="jplayer_1" class="jp-jplayer"></div>
                <div id="play_1" class="js_player">
                    <h4>Listen to a sample of his work</h4>
                    <a class="jplayer_play" href="#"><i class="icon-play"></i> Play</a>
                    <a class="jplayer_pause" href="#"><i class="icon-pause"></i> Pause</a>
                </div><!-- end div#play_1 -->




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