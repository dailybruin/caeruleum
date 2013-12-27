<?php/*
Template Name: Online Features
*/ ?>
<?php get_header(); ?>

<style>

a.darken {
    display: inline-block;
    background: black;
    padding: 0;
    position:relative
}

a.darken img {
    display: block;
    
    -webkit-transition: all 0.5s linear;
       -moz-transition: all 0.5s linear;
        -ms-transition: all 0.5s linear;
         -o-transition: all 0.5s linear;
            transition: all 0.5s linear;
}

a.darken:hover img {
    opacity: 0.4;           
}
a.darken span{
	position:absolute;
	top:5px;
	color:#000;
	left:10px;
	visibility: hidden;
	font-family: Verdana;
	font-size: 10pt;
}

a.darken:hover span{color:#fff;
    -webkit-transition: all 0.5s linear;
       -moz-transition: all 0.5s linear;
        -ms-transition: all 0.5s linear;
         -o-transition: all 0.5s linear;
            transition: all 0.5s linear;
            visibility: visible;
}

.box {
    display: inline-block;
    margin: 1em;
    vertical-align: top;
}

</style>

<script>
var features =
[
    {
        "fname"     : "Chilean Winter",
        "description" : "Protests offer lessons for UC student organizers",
        "picture"   : "/wp-content/uploads/2013/12/Chilean-Winter.png",
        "web"       : "http://chileanwinter.dailybruin.com/",
        "author"        : "Calvin Chan and Jimmy Yang",
        "year"      : "2013"
    },
    {
        "fname"     : "Dance Marathon 2013",
        "description"     : "UCLA students spent 26 hours on their feet for Dance Marathon from Feb. 16-17. The event, in its 12th year, raised $475,422.57 to combat pediatric AIDS.",
        "picture"           : "/wp-content/uploads/2013/12/Dance-Marathon-2013.png",
        "web"       : "http://dailybruin.com/dance-marathon/",
        "author"        : "Byron Lutz",
        "year"      : "2013"
    },
    {
        "fname"     : "Gender behavior therapy and gay conversion:  UCLA's past, California's future",
        "description"     : "The Daily Bruin spoke with UCLA Gender Identity Research Clinic members and participants.",
        "picture"           : "/wp-content/uploads/2013/12/Gender-Behavior-Therapy.png",
        "web"       : "http://dailybruin.com/features/conversion-therapy/",
        "author"        : "The Daily Bruin",
        "year"      : "2012"
    },
    {
        "fname"     : "Welcoming Back Pauley",
        "description"     : "Reopening of Pauley Pavilion begins new chapter for UCLA",
        "picture"           : "/wp-content/uploads/2013/12/Welcoming-Back-Pauley.png",
        "web"       : "http://dailybruin.com/features/welcoming-back-pauley/",
        "author"        : "The Daily Bruin",
        "year"      : "2012"
    },
    {
        "fname"     : "Prime by the Daily Bruin: Fall 2012",
        "description"     : "",
        "picture"           : "/wp-content/uploads/2013/12/Prime-fall-2012.png",
        "web"       : "http://dailybruin.com/features/prime-by-the-daily-bruin-fall-2012/",
        "author"        : "The Daily Bruin",
        "year"      : "2012"
    },
    {
        "fname"     : "Inside the Doll Factory",
        "description"     : "Hip checks, jammers and whips — this is the sport of roller derby, brought to Angelenos by the L.A. Derby Dolls. Explore what a derby looks and sounds like, from the track to the ticket table, in video, photos and text.",
        "picture"           : "/wp-content/uploads/2013/12/Inside-the-doll-factory.png",
        "web"       : "http://dailybruin.com/features/inside-the-doll-factory/",
        "author"        : "The Daily Bruin",
        "year"      : "2012"
    }
];
</script>

<script>
function rerender(feature_year) {
    $('div.feature_objects').empty();

    var fhtml = "";
    if(feature_year != 0) {
    for(var i = 0; i < features.length; i++) {
        if(features[i].year == feature_year) {
            var obj = features[i];

            fhtml = fhtml + '<div class="box"><a class="thumbnail darken" href="' + obj.web + '">'
            + '<img src="' + obj.picture + '" style="width: 300px; padding: 5px; background-color: #fff;"/><span style="width: 300px;"><b>'
            + obj.fname + '</b><br/>' + obj.description
            + '<br/><i style="font-size: 8pt; float: right; margin-right: 10px;">' + obj.author
            + '</i></span></div>';
        }
    }
    }
    else {
	 for(var i = 0; i < features.length; i++) {
        var obj = features[i];

        fhtml = fhtml + '<div class="box"><a class="thumbnail darken" href="' + obj.web + '">'
        + '<img src="' + obj.picture + '" style="width: 300px; padding: 5px; background-color: #fff;"/><span style="width: 300px;"><b>'
        + obj.fname + '</b><br/>' + obj.description
        + '<br/><i style="font-size: 8pt; float: right; margin-right: 10px;">' + obj.author
        + '</i></span></div>';
    }
    }

    $('div.feature_objects').hide().html(fhtml).fadeIn('slow');
}
</script>

<script>
$(document).ready(function() {
    var fhtml = "";
    for(var i = 0; i < features.length; i++) {
        var obj = features[i];

        fhtml = fhtml + '<div class="box"><a class="thumbnail darken" href="' + obj.web + '">'
        + '<img src="' + obj.picture + '" style="width: 300px; padding: 5px; background-color: #fff;"/><span style="width: 300px;"><b>'
        + obj.fname + '</b><br/>' + obj.description
        + '<br/><i style="font-size: 8pt; float: right; margin-right: 10px;">' + obj.author
        + '</i></span></div>';
    }

    $('div.feature_objects').html(fhtml);
});

</script>

<button type="button" onclick="rerender('0')">ALL</button>
<button type="button" onclick="rerender('2013')">2013</button>
<button type="button" onclick="rerender('2012')">2012</button>

<div class="feature_objects">

</div>


<?php get_footer(); ?>
