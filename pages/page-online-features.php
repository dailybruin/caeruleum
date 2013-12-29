<?php/*
Template Name: Online Features
*/ ?>
<?php get_header(); ?>

<style type="text/css">
.classname {
  -moz-box-shadow:inset 0px 1px 19px 0px #e8e8eb;
  -webkit-box-shadow:inset 0px 1px 19px 0px #e8e8eb;
  box-shadow:inset 0px 1px 19px 0px #e8e8eb;
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f2f2f2), color-stop(1, #dbd7db) );
  background:-moz-linear-gradient( center top, #f2f2f2 5%, #dbd7db 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f2f2f2', endColorstr='#dbd7db');
  background-color:#f2f2f2;
  -webkit-border-top-left-radius:7px;
  -moz-border-radius-topleft:7px;
  border-top-left-radius:7px;
  -webkit-border-top-right-radius:7px;
  -moz-border-radius-topright:7px;
  border-top-right-radius:7px;
  -webkit-border-bottom-right-radius:7px;
  -moz-border-radius-bottomright:7px;
  border-bottom-right-radius:7px;
  -webkit-border-bottom-left-radius:7px;
  -moz-border-radius-bottomleft:7px;
  border-bottom-left-radius:7px;
  text-indent:0;
  border:1px solid #f7f4f7;
  display:inline-block;
  color:#1f1d1f;
  font-family:arial;
  font-size:15px;
  font-weight:bold;
  font-style:normal;
  height:40px;
  line-height:40px;
  width:55px;
  text-decoration:none;
  text-align:center;
  text-shadow:1px 1px 0px #e3e0e3;
}
.classname:hover {
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dbd7db), color-stop(1, #f2f2f2) );
  background:-moz-linear-gradient( center top, #dbd7db 5%, #f2f2f2 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dbd7db', endColorstr='#f2f2f2');
  background-color:#dbd7db;
}.classname:active {
  position:relative;
  top:1px;
}</style>
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
    width: 320px;
    vertical-align: top;
}

</style>

<script>
var features =
[
    {
        "fname"     : "A Closer Look: UCLA Dining",
        "description"     : "",
        "picture"           : "/wp-content/uploads/2013/12/ucla-dining.png",
        "web"       : "http://dailybruin.com/features/a-closer-look-ucla-dining/",
        "author"        : "The Daily Bruin",
        "year"        : "2010"
    },
    {
        "fname"     : "A cut above the rest",
        "description"     : "What makes an athlete stand out? Is it pure skill? Is it overcoming adversity? Is it balancing skills on and off the field? A Cut Above the Rest explores the lives of four UCLA athletes.",
        "picture"           : "/wp-content/uploads/2013/12/A-cut-above-the-rest.png",
        "web"       : "http://dailybruin.com/features/a-cut-above-the-rest/",
        "author"        : "The Daily Bruin",
        "year"      : "2011"
    },
    {
        "fname"     : "Barriers Across the Border",
        "description"     : "For the past four years, a group of UCLA students has crossed the border, breaking the barriers that prevent residents of a rural town from leading healthy lives.They cannot solve all the problems that plague the impoverished community, but residents still say the clinic is an invaluable service.",
        "picture"           : "/wp-content/uploads/2013/12/Barriers-across-the-border.png",
        "web"       : "http://dailybruin.com/features/barriers-across-the-border/",
        "author"        : "The Daily Bruin",
        "year"      :"2011"
    },
    {
        "fname"     : "Bruin Day 2011",
        "description"     : "On April 9, 2011, UCLA held its first Bruin Day, inviting more than 10,000 prospective freshmen to the campus to see the school. We asked these future Bruins one question: why do you belong at UCLA?",
        "picture"           : "/wp-content/uploads/2013/12/Bruin-Day-2011.png",
        "web"       : "http://dailybruin.com/features/bruin-day-2011/",
        "author"        : "The Daily Bruin",
        "year"      : "2011"
    },
    {
        "fname"     : "Chilean Winter",
        "description" : "Protests offer lessons for UC student organizers",
        "picture"   : "/wp-content/uploads/2013/12/Chilean-Winter.png",
        "web"       : "http://chileanwinter.dailybruin.com/",
        "author"        : "Calvin Chan and Jimmy Yang",
        "year"      : "2013"
    },
    {
        "fname"     : "Commencement 2011",
        "description"     : "On June 10, 2011, UCLA held its commencement ceremonies for the graduating class of 2011. Here you can find an interview with Aaron S. Williams, a tag cloud of his commencement speech, a photo gallery and video highlighting the ceremony, and four other videos asking new graduates about their final thoughts on UCLA.",
        "picture"           : "/wp-content/uploads/2013/12/Commencement-2011.png",
        "web"       : "http://dailybruin.com/features/commencement-2011/",
        "author"        : "The Daily Bruin",
        "year"      : "2011"
    },
     {
        "fname"     : "Cultivating flowers and community: the Empowerment Community Garden",
        "description"     : "",
        "picture"           : "/wp-content/uploads/2013/12/Empowerment-Community-Garden.png",
        "web"       : "http://dailybruin.com/features/cultivating-flowers-and-community-the-empowerment-community-garden/",
        "author"        : "The Daily Bruin",
        "year"      : "2010"
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
        "fname"     : "Dodgers Storified",
        "description"     : "The 23-year-old shortstop entered spring training with his spot on the Dodgers' opening day roster already locked up, though that didn't prevent him from tasting some laces during practice.",
        "picture"           : "/wp-content/uploads/2013/12/Dodgers-Storified.png",
        "web"       : "http://dailybruin.com/features/dodgers-storified/",
        "author"        : "The Daily Bruin",
        "year"      : "2011"
    },
    {
        "fname"     : "Exploring the William Andrews Clark Memorial Library",
        "description"     : "",
        "picture"         : "/wp-content/uploads/2013/12/Exploring-library.png",
        "web"       : "http://dailybruin.com/features/clark-library/",
        "author"        : "The Daily Bruin",
        "year"      : "2010"
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
        "fname"     : "Graduation Issue 2011",
        "description"     : "Graduating Bruins shared with us their favorite memories and wrote a few words answering the question: What has UCLA meant to you?",
        "picture"           : "/wp-content/uploads/2013/12/Graduation-2011.png",
        "web"       : "http://dailybruin.com/features/graduation-issue-2011/",
        "author"        : "The Daily Bruin",
        "year"      : "2011"
    },
    {
        "fname"     : "How-to's: The Bare Basics",
        "description"     : "UCLA didn't get to 106 championships just by luck. These athletes have spent countless hours perfecting their skills in the game. Join these NCAA athletes as they break down the basics and share their secrets to success.",
        "picture"           : "/wp-content/uploads/2013/12/The-bare-basics.png",
        "web"       : "http://dailybruin.com/features/how-tos-the-bare-basics/",
        "author"        : "The Daily Bruin",
        "year"      : "2011"
    },
    {
        "fname"     : "Injured Athletes",
        "description"     : "Whether playing volleyball or doing martial arts, injuries are a painful, though inevitable, part of the sport. Nevertheless, the best defense against such injuries is a bit of sports medicine.",
        "picture"           : "/wp-content/uploads/2013/12/Injured-Athletes.png",
        "web"       : "http://dailybruin.com/features/injured-athletes/",
        "author"        : "The Daily Bruin",
        "year"      : "2010"
    },
    {
        "fname"     : "Inside the Doll Factory",
        "description"     : "Hip checks, jammers and whips — this is the sport of roller derby, brought to Angelenos by the L.A. Derby Dolls. Explore what a derby looks and sounds like, from the track to the ticket table, in video, photos and text.",
        "picture"           : "/wp-content/uploads/2013/12/Inside-the-doll-factory.png",
        "web"       : "http://dailybruin.com/features/inside-the-doll-factory/",
        "author"        : "The Daily Bruin",
        "year"      : "2012"
    },
     {
        "fname"     : "It Takes 2",
        "description"     : "‘It Takes Two’ breaks down the stereotypical image of the archetypal mentor to reveal that mentors can come in all different shapes and forms.",
        "picture"           : "/wp-content/uploads/2013/12/It-takes-2.png",
        "web"       : "http://dailybruin.com/features/it-takes-2/",
        "author"        : "The Daily Bruin",
        "year"      : "2010"
    },
    {
        "fname"     : "My First Time",
        "description"     : "Whether alone or with a group, spontaneous or planned, no one can forget their UCLA firsts: the first time biting into a delicious Diddy Riese, or the first time dying in the heat at the Rose Bowl, or the first time being wowed at Spring Sing. Watch these Bruins as they retell their defining first times at UCLA.",
        "picture"           : "/wp-content/uploads/2013/12/My-first-time.png",
        "web"       : "http://dailybruin.com/features/my-first-time/",
        "author"        : "The Daily Bruin",
        "year"      : "2011"
    },
    {
        "fname"     : "Orientation 2011",
        "description"     : "This issue is designed to help you gain a sense of what it means to be a Bruin as droves of new students make their way home to the hills of Westwood.",
        "picture"           : "/wp-content/uploads/2013/12/Orientation-2011.png",
        "web"       : "http://dailybruin.com/features/orientation-2011/",
        "author"        : "The Daily Bruin",
        "year"      : "2011"
    },
    {
        "fname"     : "Places: Exploring Los Angeles one place at a time",
        "description"     : "Known for its large collection of cultures and styles, Los Angeles is home to an array of diverse and interesting places to visit. Journey with us as we take a closer look at some of these pLAces.",
        "picture"           : "/wp-content/uploads/2013/12/exploring-la.png",
        "web"       : "http://dailybruin.com/features/places-exploring-los-angeles-one-place-at-a-time/",
        "author"        : "The Daily Bruin",
        "year"      : "2011"
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
        "fname"     : "Prime by the Daily Bruin: The Extreme Issue",
        "description"     : "",
        "picture"           : "/wp-content/uploads/2013/12/Prime-extreme-issue.png",
        "web"       : "http://dailybruin.com/features/prime-by-the-daily-bruin-the-extreme-issue/",
        "author"        : "The Daily Bruin",
        "year"      : "2011"
    },
    {
        "fname"     : "Prime by the Daily Bruin: The World Issue",
        "description"     : "",
        "picture"           : "/wp-content/uploads/2013/12/prime-the-world-issue.png",
        "web"       : "http://dailybruin.com/features/prime-by-the-daily-bruin-the-world-issue/",
        "author"        : "The Daily Bruin",
        "year"      : "2011"
    },
    {
        "fname"     : "Registration Issue 2011",
        "description"     : "Our back-to-school issue is designed to provide you with a snapshot of the beginning of the year and introduce you to the service the Daily Bruin provides to the UCLA community as a premier news source.",
        "picture"           : "/wp-content/uploads/2013/12/Registration-Issue-2011.png",
        "web"       : "http://dailybruin.com/features/registration-issue-2011/",
        "author"        : "The Daily Bruin",
        "year"       : "2011"
    },
     {
        "fname"     : "Rivalry Resumed",
        "description"     : "With the big game looming ahead, Akeem Ayers and Ricky Marvray reflect on the pain of last year's loss to their cross-town rivals and the mental preparation required for their next meeting.",
        "picture"           : "/wp-content/uploads/2013/12/Rivalry-Resumed.png",
        "web"       : "http://dailybruin.com/features/rivalry-resumed/",
        "author"        : "The Daily Bruin",
        "year"       : "2010"
    },
    {
        "fname"     : "Timeline of Budget Changes",
        "description"     : "",
        "picture"           : "/wp-content/uploads/2013/12/Timeline-of-budget-changes.png",
        "web"       : "http://dailybruin.com/features/timeline-of-budget-changes/",
        "author"        : "The Daily Bruin",
        "year"      : "2010"
    },
    {
        "fname"     : "Ten years since 9/11",
        "description"     : "The attacks on the World Trade Center and Pentagon on Sept. 11, 2001 shaped the world a generation of Americans have grown up in. Here, we tell some of their stories, in the hopes of embodying both the remembrance of the day and the paths we have taken since.",
        "picture"           : "/wp-content/uploads/2013/12/Ten-years-since-9-11.png",
        "web"       : "http://dailybruin.com/features/ten-years-since-911/",
        "author"        : "The Daily Bruin",
        "year"      : "2011"
    },
     {
        "fname"     : "The New Season",
        "description"     : "September apparently brings 113-degree temperatures this year, but also the usual bounty of new TV shows. Daily Bruin A&E reviewed some of the pilot episodes and gave them a letter grade. Read on to see which ones we think are worth watching, and which ones are probably going to be canceled before the season’s over.",
        "picture"           : "/wp-content/uploads/2013/12/The-new-season.png",
        "web"       : "http://dailybruin.com/features/the-new-season/",
        "author"        : "The Daily Bruin",
        "year"      : "2010"
    },
    {
        "fname"     : "UCLA: after dark",
        "description"     : "Take a look at what takes place when most members of the UCLA community have already returned home.",
        "picture"           : "/wp-content/uploads/2013/12/UCLA-after-dark.png",
        "web"       : "http://dailybruin.com/features/ucla-after-dark/",
        "author"        : "The Daily Bruin",
        "year"      : "2011"
    },
    {
        "fname"     : "UCLA v. USC Basketball Preview",
        "description"     : "",
        "picture"           : "/wp-content/uploads/2013/12/UCLA-v.-USC-Basketball-Preview.png",
        "web"       : "http://dailybruin.com/features/ucla-v-usc-basketball-preview/",
        "author"        : "The Daily Bruin",
        "year"      : "2012"
    },
    {
        "fname"     : "Volunteerism Abroad",
        "description"     : "The term 'volunteerism' has become something of a commodity in a society that sees service as a requirement rather than an option. This project looks back to students, exploring what motivated them to go abroad to serve others and the type of impact they left behind.",
        "picture"           : "/wp-content/uploads/2013/12/Volunteerism-Abroad.png",
        "web"       : "http://dailybruin.com/features/volunteerism-abroad/",
        "author"        : "The Daily Bruin",
        "year"      : "2010"
    },
    {
        "fname"     : "Welcoming Back Pauley",
        "description"     : "Reopening of Pauley Pavilion begins new chapter for UCLA",
        "picture"           : "/wp-content/uploads/2013/12/Welcoming-Back-Pauley.png",
        "web"       : "http://dailybruin.com/features/welcoming-back-pauley/",
        "author"        : "The Daily Bruin",
        "year"      : "2012"
    },
];
</script>

<script>
function rerender(feature_year) {
    $('div.feature_objects').empty();
    var fhtml = "";
    if(feature_year != 0) {
      features.sort(function(a, b){
    if(a.fname < b.fname) return -1;
    if(a.fname > b.fname) return 1;
    return 0;
      }
    )
    for(var i = 0; i < features.length; i++) {
        if(features[i].year == feature_year) {
            var obj = features[i];

            fhtml = fhtml + '<div class="box"><h4>' + obj.fname + '</h4><a class="thumbnail darken" href="' + obj.web + '">'
            + '<img src="' + obj.picture + '" style="width: 300px; padding: 5px; background-color: #fff;"/><span style="width: 300px;">' + obj.description
            + '<br/><i style="font-size: 8pt; float: right; margin-right: 10px;">' + obj.author
            + '</i></span></a></div>';
        }
    }
    }
    else {
	 for(var i = 0; i < features.length; i++) {
        var obj = features[i];

        fhtml = fhtml + '<div class="box"><h4>' + obj.fname + '</h4><a class="thumbnail darken" href="' + obj.web + '">'
        + '<img src="' + obj.picture + '" style="width: 300px; padding: 5px; background-color: #fff;"/><span style="width: 300px;">' + obj.description
        + '<br/><i style="font-size: 8pt; float: right; margin-right: 10px;">' + obj.author
        + '</i></span></a></div>';
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

        fhtml = fhtml + '<div class="box"><h4>' + obj.fname + '</h4><a class="thumbnail darken" href="' + obj.web + '">'
        + '<img src="' + obj.picture + '" style="width: 300px; padding: 5px; background-color: #fff;"/><span style="width: 300px;">' + obj.description
        + '<br/><i style="font-size: 8pt; float: right; margin-right: 10px;">' + obj.author
        + '</i></span></a></div>';
    }

    $('div.feature_objects').html(fhtml);
});

</script>

<div class="page-header">
<h1>FEATURES</h1>
</div>

<button type="button" href="#" class="classname" onclick="rerender('0')">ALL</button>
<button type="button" href="#" class="classname" onclick="rerender('2013')">2013</button>
<button type="button" href="#" class="classname" onclick="rerender('2012')">2012</button>
<button type="button" href="#" class="classname" onclick="rerender('2011')">2011</button>
<button type="button" href="#" class="classname" onclick="rerender('2010')">2010</button>

<div class="feature_objects">

<!--Features are rendered in here-->

</div>


<?php get_footer(); ?>
