<?php/*
Template Name: USAC Evaluations 2017
*/ ?>

<?php get_header(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<style>
    .councilmember img{
        width: 100%;
        max-height: 400px;
    }
    .councilmember {
        padding: 0.5rem;
        min-height: 400px;
    }
    .councilmember:hover img,
    .council:hover img {
        opacity: 0.25;
    }
    .councilmember:hover span.hover-details,
    .council:hover h2.hover-council {
        display:block;
    }
    .councilmember img:hover + span.hover-details {
        display: block;
    }
    div.usac-eval-2015 {
        max-width: 940px;
        margin: auto;
        margin-bottom: 2rem;
        overflow: auto;
    }
    .usac-eval-2015 h2.title {
        text-align: center;
        font-size: 3rem;
        margin: 2rem 0;
    }
    h2.hover-name {
        position: absolute;
        bottom: 10px;
        left: 15px;
        font-size: 1.3rem;
        margin-right: 0.5rem;
        font-weight: bold;  
    }
    h3.hover-position {
        position: absolute;
        top: 10px;
        right: 15px;
        text-align: right;
        font-size: 1.5rem;
        padding-left: 1rem;
        font-weight: bold;  
    }
    span.hover-details {
        display: none;
    }
    h2.name {
        font-size: 3rem;
        font-family: 'Roboto Slab';
        margin-bottom: 1.5rem;
    }
    h3.position {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }
    div.platforms {
        padding: 0;
    }
    ul.scores, ul.platforms {
        list-style-type: none;
        font-size: 1.2rem;
        margin-bottom: 1rem;
        margin-left: 0;
        overflow: hidden;
        font-weight: bold;
    }
    ul.scores li p, ul.platforms p {
        margin-bottom: 0.5rem;
        padding-left: 0;
        font-size: 1rem;
    }
    img.mug {
        margin: 1rem;
        margin-right: 1.5rem;
        max-height: 300px;
    }
    .usac-eval-2015 h3.click {
        text-align: center;
        font-size: 1.5rem;
        margin: 2rem 0;
    }
    span.evaluation p{
        font-size: 0.9rem;
        line-height: 1.5;
        margin-top: 0.5rem;
    }
    .council {
        overflow: auto;
    }
    h2.hover-council {
        display: none;
        position: absolute;
        top: 35%;
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
        text-align: center;
        font-size: 2.8rem;
        margin-right: 0.5rem;
    }
</style>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="usac-eval-2015" >
            <h2 class="title">2016-2017 USAC Officer Evaluations</h2>
            <p><?php the_content(); ?></p>
            <h3 class="click">Click on the photos below to see each officer's evaluation.</h3>
            <!-- <div class="small-12 columns council">
                <a href="/">
                    <img src="http://dailybruin.com/images/2015/04/council2015.jpg"/>
                    <h2 class="hover-council">Council wide evaluation</h2>
                </a>
            </div> -->
            <div class="councilmembers">
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
        

<script type="text/javascript"> 
$(document).ready(function() {  

$(function showstones() {
$.getJSON( "https://spreadsheets.google.com/feeds/list/1KKgDhFNtOf5s9eEjYFKf3LoSITuw8qX2tMa9XMc4TCo/od6/public/values?alt=json",

    function (data) {   
        $.each(data.feed.entry, function(i,entry) { 
        if (true)
        {
            var append;
            append = '<div class="large-3 medium-4 small-6 columns councilmember" >';
                append += '<a href="#" data-reveal-id="modal'+i+'">';
                append += '<img src="'+entry.gsx$mugurl.$t+'"/>';
                append += '<span class="hover-details">';
                append += '<h2 class="hover-name">'+entry.gsx$name.$t+'</h2>';
                append += '<h3 class="hover-position">'+entry.gsx$position.$t+'</h3>';
                append += '</span>';
                append += '</a>';
            append += '</div>';
                append += '<div id="modal'+i+'" class="reveal-modal" data-reveal aria-hidden="true">';
                append += '<div class="large-3 columns">';
                    append += '<img class="mug" src="'+entry.gsx$mugurl.$t+'"/>';
                append += '</div>';
                append += '<div class="large-9 columns">';
                    append += '<h2 class="name">'+entry.gsx$name.$t+'</h2>';
                    append += '<h3 class="position">'+entry.gsx$position.$t+'</h3>';
                    append += '<div class="large-8 columns platforms" >'
                        append += '<ul class="platforms">Platforms';
                            append += entry.gsx$platforms.$t;
                        append += '</ul>';
                    append += '</div>';
                    append += '<div class="large-4 columns platforms" >';
                        append += '<ul class="scores">Scores';
                            append += '<li><p>Platform Quality: '+entry.gsx$platformquality.$t+'</p></li>';
                            append += '<li><p>Platform Completion: '+entry.gsx$platformcompletion.$t+'</p></li>';
                            append += '<li><p>Fulfillment of Duties: '+entry.gsx$fulfillment.$t+'</p></li>';
                            append += '<li><p>Transparency: '+entry.gsx$transparency.$t+'</p></li>';
                        append += '</ul>';
                    append += '</div>';
                    append += '<hr>';
                    append += '<span class="evaluation">'+entry.gsx$evaluationtext.$t+'</span>';
                append += '</div>';
                
            append += '</div>';
            $('div.councilmembers').append(append);
        }
            });
        });
  
    });
    

});
</script>

<?php get_footer(); ?>
