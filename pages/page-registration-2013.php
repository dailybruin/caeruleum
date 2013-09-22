<?php/*
Template Name: Registration Issue 2013
*/ ?>
<?php get_header(); ?>
<script type="text/javascript">
    $(document).ready(function(){
        unresponsivize();
        $('.reg-articles').slideUp('fast');
        $('.reg-section').hover(
            function(){
                $(this).find('.reg-articles').slideDown();
            },
            function(){
                $(this).find('.reg-articles').slideUp();
            }
        );
    });
</script>

<style type="text/css">
    body {
        overflow-x: hidden;
    }

    .reg-banner {
        display: block;
        margin: 0;
        margin-bottom: 20px;
    }
    .reg-img-cover {
        display: block;
        margin: 0;
    }
    .reg-section {
        width: 256px;
        height: 500px;
        float: left;
        position: relative;
    }
    .reg-section-wrap {
        float: right;
	   width: 512px;
        margin: 0;
        clear: both;
    }
    .reg-articles {
        position: absolute;
        bottom: 0;
        background-color: rgba(0,0,0, 0.6);
        padding: 1em;
    }
    .reg-articles a {
        font-family: Georgia, sans-serif;
        color: white;
        font-size: 1.3em;
        font-style: italic;
        display: block;
        margin-bottom: 10px;
        text-shadow: 1px 1px 1px black;
    }
    #reg-ns{
        background-image: url('http://dailybruin.com/images/2013/09/title+news_cover_resize.jpg');
    }
    #reg-sp{
        background-image: url('http://dailybruin.com/images/2013/09/title+sports_cover_resize.jpg');
    }
    #reg-ae{
        background-image: url('http://dailybruin.com/images/2013/09/title+ae_cover_resize.jpg');
    }
    #reg-op{
        background-image: url('http://dailybruin.com/images/2013/09/title+opinion_cover_resize.jpg');
    }

    #reg-instagram {
        margin-top: -60px;
    }

    #reg-instagram h1 {
        text-align: right;
        margin-right: 8px;
    }

    .reg-credit {
        font-size: 0.8em;
        color: gray;
        font-style: italic;
        text-align: center;
        margin: 1em 0;
        line-height: 1.4em;
    }

    /* REFERS */
    .reg-refer {
        width: 410px;
        height: 273px;
        background-color: white;
        display: inline-block;
        margin-bottom: 1em;
        box-shadow: 0 0 30px rgba(0,0,0, 0.3) inset;
        color: white;
        text-shadow: 1px 1px 2px black;
        text-align: right;

    }

        .reg-refer:hover {
            box-shadow: 0 0 30px rgba(0,0,0, 0.5) inset, 0 0 0 1px rgba(0,0,0, 0.2) inset;
        }

        .reg-refer .reg-title {
            font-size: 3em;
            padding: 20px;
        }

        .reg-refer .reg-teaser {
            text-align: center;
            margin-top: 150px;
            font-style: italic;
            font-size: 1.2em;
            background-color: rgba(0,0,0, 0.6);
        }

        .reg-refer:hover .reg-title {
            text-decoration: underline;
        }

        .reg-refer:hover .reg-teaser {
            background-color: rgba(0,0,0, 0.8);
        }
        

    #reg-refer-ns {
        background-image: url('http://dailybruin.com/images/2013/09/ns_feature.jpg');
    }

    #reg-refer-ae {
        background-image: url('http://dailybruin.com/images/2013/09/ae_feature.jpg');
    }

    #reg-refer-sp {
        background-image: url('http://dailybruin.com/images/2013/09/sp_feature.jpg');
    }

    #reg-refer-vd {
        background-image: url('http://dailybruin.com/images/2013/09/vd_feature.png');
    }

</style>

<img class="reg-banner" src="http://dailybruin.com/images/2013/09/regissue-2013_cover.png"/>
<div class="reg-section-wrap">
    <div class="reg-section" id="reg-ns">
        <div class="reg-articles">
            <a href="http://dailybruin.com/2013/09/22/veteran-graduates-28-years-after-first-enrolling/">Veteran graduates 28 years after first enrolling</a>
            <a href="http://dailybruin.com/2013/09/22/new-bruin-placed-third-in-the-braille-challenge/">New Bruin placed third in The Braille Challenge</a>
            <a href="http://dailybruin.com/2013/09/22/yudofs-legacy-gets-mixed-reactions-from-uc-community/">Yudof’s legacy gets mixed reactions from UC community</a>
        </div>
    </div>
    <div class="reg-section" id="reg-sp">
        <div class="reg-articles">
            <a href="http://dailybruin.com/2013/09/22/team-usa-contributor-joins-ucla-mens-water-polo-team/">Team USA contributor joins UCLA men’s water polo team</a>
            <a href="http://dailybruin.com/2013/09/22/vanderdoes-pushes-for-football-success-at-ucla/">Vanderdoes pushes for football success at UCLA</a>
            <a href="http://dailybruin.com/2013/09/22/ucla-professor-creates-polymer-liner-to-reduce-injuries/">UCLA professor creates polymer liner to reduce injuries</a>
        </div>
    </div>
</div>
<div class="reg-section-wrap">
    <div class="reg-section" id="reg-ae">
        <div class="reg-articles">
            <a href="http://dailybruin.com/2013/09/22/qa-student-djs-open-up-about-inspiration-methods/">Q&amp;A: Student DJs open up about inspiration, methods</a>
            <a href="http://dailybruin.com/2013/09/22/flavors-of-westwood-ucla-adjacent-restaurants-show-connection-to-students-alumni/">Flavors of Westwood: UCLA-adjacent restaurants show connection to students, alumni</a>
            <a href="http://dailybruin.com/2013/09/22/fall-music-preview-2/">Fall music preview</a>
        </div>
    </div>
    <div class="reg-section" id="reg-op">
        <div class="reg-articles">
            <a href="http://dailybruin.com/2013/09/22/alexandra-tashman-activism-should-refocus-on-public-speech-tangible-goals/">Alexandra Tashman: Activism should refocus on public speech, tangible goals</a>
            <a href="http://dailybruin.com/2013/09/22/maia-ferdman-israeli-palestinian-conflict-needs-respect-on-both-sides/">Maia Ferdman: Israeli-Palestinian conflict needs respect on both sides</a>
            <a href="http://dailybruin.com/2013/09/22/editorial-bruin-bash-allocation-should-be-impetus-to-secure-sponsors/">Editorial: Bruin Bash allocation should be impetus to secure sponsors</a>
        </div>
    </div>
</div>

<a href="http://graphics.dailybruin.com/reg2013/moving-up/"><div id="reg-refer-ns" class="reg-refer">
    <div class="reg-title">Moving up</div>
    <div class="reg-teaser">The Hill: reimagined. With an interactive map.</div>
</div></a>

<a href="http://graphics.dailybruin.com/reg2013/best-of-ucla/"><div id="reg-refer-ae" class="reg-refer">
    <div class="reg-title">Best of UCLA</div>
    <div class="reg-teaser">We asked. You answered.</div>
</div></a>

<a href="http://graphics.dailybruin.com/reg2013/bruin-built/"><div id="reg-refer-sp" class="reg-refer">
    <div class="reg-title">Bruin Built</div>
    <div class="reg-teaser">The making of an athlete.</div>
</div></a>

<a href="http://graphics.dailybruin.com/reg2013/places/"><div id="reg-refer-vd" class="reg-refer">
    <div class="reg-title">pLAces: videos</div>
    <div class="reg-teaser">Explore your city in videos.</div>
</div></a>

<div id="reg-instagram">
    <h1>#movein2013</h1>
    <iframe src="http://snapwidget.com/in/?h=bW92ZWluMjAxM3xpbnwxMTJ8OHwxfHxub3w1fG5vbmV8b25TdGFydHx5ZXM=&v=21913" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:936px; height: 117px"></iframe>
</div>

<div class="reg-credit">
    Leading illustration by Madeline Isaacs. News and A&amp;E section photos by Brandon Choe, Bruin senior staff. Sports section photo by Neil Bedi, Bruin senior staff. Opinion section photo Daily Bruin file photo. Registration Issue online pages by Harrison Liddiard.
</div>

<?php get_footer(); ?>