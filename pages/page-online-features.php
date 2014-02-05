<?php/*
Template Name: Online Features
*/ ?>
<?php get_header(); ?>

<script src="../js/vendor/masonry.pkgd.min.js"></script>
<script src="../js/vendor/imagesloaded.pkgd.min.js"></script>
<script src="../js/vendor/jquery.dotdotdot.js" type="text/javascript"></script>

<style>
input[type=checkbox].css-checkbox {
							  position: absolute; 
							overflow: hidden; 
							clip: rect(0 0 0 0); 
							height:1px; 
							width:1px; 
							margin:-1px; 
							padding:0;
							border:0;
						}

						input[type=checkbox].css-checkbox + label.css-label {
							padding-left:20px;
							height:15px; 
							display:inline-block;
							line-height:15px;
							background-repeat:no-repeat;
							background-position: 0 0;
							font-size:15px;
							vertical-align:middle;
							cursor:pointer;
						}

						input[type=checkbox].css-checkbox:checked + label.css-label {
							background-position: 0 -15px;
						}
						
						.css-label{
							background-image:url(http://csscheckbox.com/checkboxes/dark-check-green.png);
						}

#container {
    padding: 15px 5px 15px 5px;
    font: 10pt normal Arial, sans-serif;  
}

#container a:visited {
    color: rgb(35, 111, 174);
}

#container .item {
    cursor: pointer;
    overflow: hidden;
    width: 312px;
    border: 5px solid #fff;
    margin: 5px 0 5px 0;
    -webkit-box-shadow: 1px 1px 1px 1px #ccc;  
    -moz-box-shadow: 1px 1px 1px 1px #ccc;  
    box-shadow: 1px 1px 1px 1px #ccc;  
}

#container .item h5 {
    margin-bottom: 0;
    text-align: center;
}

#container .item img {  
    left: 0;  
    -webkit-transition: all 300ms ease-out;  
    -moz-transition: all 300ms ease-out;  
    -o-transition: all 300ms ease-out;  
    -ms-transition: all 300ms ease-out;  
    transition: all 300ms ease-out;  
} 

    #container .item .caption {
        background-color: rgba(0,0,0,0.8);  
        position: absolute;  
        color: #fff;  
        z-index: 100;  
        -webkit-transition: all 300ms ease-out;  
        -moz-transition: all 300ms ease-out;  
        -o-transition: all 300ms ease-out;  
        -ms-transition: all 300ms ease-out;  
        transition: all 300ms ease-out;  
        left: 0;  
    }

    #container .item .slide-caption {
	 bottom: 0;  
        width: 280px;
        max-height: 50%;
        text-align: left;  
        padding: 5px 20px 15px 20px;  
        left: 320px;  
    }  

    #container .item:hover .slide-caption {  
      background-color: rgba(0,0,0,1) !important;  
      -moz-transform: translateX(-100%);  
      -o-transform: translateX(-100%);  
      -webkit-transform: translateX(-100%);  
      opacity: 1;  
      transform: translateX(-100%);  
    }  

.ellipsis {
    max-height: 50px;
}

.ellipsis2 {
    white-space: nowrap;
    font-family: Arial, sans-serif;
    overflow: hidden;
    text-overflow: ellipsis;
    -o-text-overflow: ellipsis;
    -moz-binding: url(<q>ellipsis.xml#ellipsis</q>);
}

.authors {
    font-style: italic;
    font-family: Arial, sans-serif;
    font-size: 8pt;
    text-align: right;
    margin-top: 15px;
    margin-bottom: 3px;
}

</style>

<script>
var features =
[
    {
        "fname"     : "Chilean Winter",
        "description" : "Protests offer lessons for UC student organizers",
        "picture"   : "../wp-content/uploads/2013/12/Chilean-Winter.png",
        "web"       : "http://chileanwinter.dailybruin.com/",
        "author"        : "Calvin Chan and Jimmy Yang",
        "category"  : ["news", "BoB", "2013"]
    },
    {
        "fname"     : "Dance Marathon 2013",
        "description"     : "UCLA students spent 26 hours on their feet for Dance Marathon from Feb. 16-17. The event, in its 12th year, raised $475,422.57 to combat pediatric AIDS.",
        "picture"           : "../wp-content/uploads/2013/12/Dance-Marathon-2013.png",
        "web"       : "http://dailybruin.com/dance-marathon/",
        "author"        : "Byron Lutz",
        "category"      : ["news", "Campus", "2013"]
    },
    {
        "fname"     : "Gender behavior therapy and gay conversion:  UCLA's past, California's future",
        "description"     : "The Daily Bruin spoke with UCLA Gender Identity Research Clinic members and participants - as well as current UCLA students who went through gay conversion therapy - to tell the story of the university's past with gender behavior therapy and gay conversion, and how it connects to the state's future gender therapy practices.",
        "picture"           : "../wp-content/uploads/2013/12/Gender-Behavior-Therapy.png",
        "web"       : "http://dailybruin.com/features/conversion-therapy/",
        "author"        : "The Daily Bruin",
        "category"      : ["acl", "2012"]
    },
    {
        "fname"     : "Welcoming Back Pauley",
        "description"     : "Reopening of Pauley Pavilion begins new chapter for UCLA",
        "picture"           : "../wp-content/uploads/2013/12/Welcoming-Back-Pauley.png",
        "web"       : "http://dailybruin.com/features/welcoming-back-pauley/",
        "author"        : "The Daily Bruin",
        "category"      : ["2012"]
    },
    {
        "fname"     : "Prime by the Daily Bruin: Fall 2012",
        "description"     : "",
        "picture"           : "../wp-content/uploads/2013/12/Prime-fall-2012.png",
        "web"       : "http://dailybruin.com/features/prime-by-the-daily-bruin-fall-2012/",
        "author"        : "The Daily Bruin",
        "category"      : ["2012", "prime"]
    },
    {
        "fname"     : "Inside the Doll Factory",
        "description"     : "Hip checks, jammers and whips — this is the sport of roller derby, brought to Angelenos by the L.A. Derby Dolls. Explore what a derby looks and sounds like, from the track to the ticket table, in video, photos and text.",
        "picture"           : "../wp-content/uploads/2013/12/Inside-the-doll-factory.png",
        "web"       : "http://dailybruin.com/features/inside-the-doll-factory/",
        "author"        : "The Daily Bruin",
        "category"      : ["2012", "a&e"]
    },
    {
        "fname"     : "UCLA v. USC Basketball Preview",
        "description"     : "",
        "picture"           : "../wp-content/uploads/2013/12/UCLA-v.-USC-Basketball-Preview.png",
        "web"       : "http://dailybruin.com/features/ucla-v-usc-basketball-preview/",
        "author"        : "The Daily Bruin",
        "category"      : ["2012", "sports"]
    },
    {
        "fname"     : "Prime by the Daily Bruin: The Extreme Issue",
        "description"     : "",
        "picture"           : "../wp-content/uploads/2013/12/Prime-extreme-issue.png",
        "web"       : "http://dailybruin.com/features/prime-by-the-daily-bruin-the-extreme-issue/",
        "author"        : "The Daily Bruin",
        "category"      : ["2011", "prime"]
    },
    {
        "fname"     : "Ten years since 9/11",
        "description"     : "The attacks on the World Trade Center and Pentagon on Sept. 11, 2001 shaped the world a generation of Americans have grown up in. Here, we tell some of their stories, in the hopes of embodying both the remembrance of the day and the paths we have taken since.",
        "picture"           : "../wp-content/uploads/2013/12/Ten-years-since-9-11.png",
        "web"       : "http://dailybruin.com/features/ten-years-since-911/",
        "author"        : "The Daily Bruin",
        "category"      : ["2011"]
    },
    {
        "fname"     : "Registration Issue 2011",
        "description"     : "Our back-to-school issue is designed to provide you with a snapshot of the beginning of the year and introduce you to the service the Daily Bruin provides to the UCLA community as a premier news source.",
        "picture"           : "../wp-content/uploads/2013/12/Registration-Issue-2011.png",
        "web"       : "http://dailybruin.com/features/registration-issue-2011/",
        "author"        : "The Daily Bruin",
        "category"      : ["2011"]
    },
    {
        "fname"     : "Orientation 2011",
        "description"     : "This issue is designed to help you gain a sense of what it means to be a Bruin as droves of new students make their way home to the hills of Westwood.",
        "picture"           : "../wp-content/uploads/2013/12/Orientation-2011.png",
        "web"       : "http://dailybruin.com/features/orientation-2011/",
        "author"        : "The Daily Bruin",
        "category"      : ["2011"]
    },
    {
        "fname"     : "My First Time",
        "description"     : "Whether alone or with a group, spontaneous or planned, no one can forget their UCLA firsts: the first time biting into a delicious Diddy Riese, or the first time dying in the heat at the Rose Bowl, or the first time being wowed at Spring Sing. Watch these Bruins as they retell their defining first times at UCLA.",
        "picture"           : "../wp-content/uploads/2013/12/My-first-time.png",
        "web"       : "http://dailybruin.com/features/my-first-time/",
        "author"        : "The Daily Bruin",
        "category"      : ["2011"]
    },
    {
        "fname"     : "Barriers Across the Border",
        "description"     : "For the past four years, a group of UCLA students has crossed the border, breaking the barriers that prevent residents of a rural town from leading healthy lives.They cannot solve all the problems that plague the impoverished community, but residents still say the clinic is an invaluable service.",
        "picture"           : "../wp-content/uploads/2013/12/Barriers-across-the-border.png",
        "web"       : "http://dailybruin.com/features/barriers-across-the-border/",
        "author"        : "The Daily Bruin",
        "category"      : ["2011"]
    },
    {
        "fname"     : "Bruin Day 2011",
        "description"     : "On April 9, 2011, UCLA held its first Bruin Day, inviting more than 10,000 prospective freshmen to the campus to see the school. We asked these future Bruins one question: why do you belong at UCLA?",
        "picture"           : "../wp-content/uploads/2013/12/Bruin-Day-2011.png",
        "web"       : "http://dailybruin.com/features/bruin-day-2011/",
        "author"        : "The Daily Bruin",
        "category"      : ["2011"]
    },
    {
        "fname"     : "Commencement 2011",
        "description"     : "On June 10, 2011, UCLA held its commencement ceremonies for the graduating class of 2011. Here you can find an interview with Aaron S. Williams, a tag cloud of his commencement speech, a photo gallery and video highlighting the ceremony, and four other videos asking new graduates about their final thoughts on UCLA.",
        "picture"           : "../wp-content/uploads/2013/12/Commencement-2011.png",
        "web"       : "http://dailybruin.com/features/commencement-2011/",
        "author"        : "The Daily Bruin",
        "category"      : ["2011"]
    },
    {
        "fname"     : "Graduation Issue 2011",
        "description"     : "Graduating Bruins shared with us their favorite memories and wrote a few words answering the question: What has UCLA meant to you?",
        "picture"           : "../wp-content/uploads/2013/12/Graduation-2011.png",
        "web"       : "http://dailybruin.com/features/graduation-issue-2011/",
        "author"        : "The Daily Bruin",
        "category"      : ["2011"]
    },
    {
        "fname"     : "UCLA: after dark",
        "description"     : "Take a look at what takes place when most members of the UCLA community have already returned home.",
        "picture"           : "../wp-content/uploads/2013/12/UCLA-after-dark.png",
        "web"       : "http://dailybruin.com/features/ucla-after-dark/",
        "author"        : "The Daily Bruin",
        "category"      : ["2011"]
    },
    {
        "fname"     : "Dodgers Storified",
        "description"     : "The 23-year-old shortstop entered spring training with his spot on the Dodgers' opening day roster already locked up, though that didn't prevent him from tasting some laces during practice.",
        "picture"           : "../wp-content/uploads/2013/12/Dodgers-Storified.png",
        "web"       : "http://dailybruin.com/features/dodgers-storified/",
        "author"        : "The Daily Bruin",
        "category"      : ["2012", "sports"]
    },
    {
        "fname"     : "Prime by the Daily Bruin: The World Issue",
        "description"     : "",
        "picture"           : "../wp-content/uploads/2013/12/prime-the-world-issue.png",
        "web"       : "http://dailybruin.com/features/prime-by-the-daily-bruin-the-world-issue/",
        "author"        : "The Daily Bruin",
        "category"      : ["2010", "prime"]
    },
    {
        "fname"     : "Places: Exploring Los Angeles one place at a time",
        "description"     : "Known for its large collection of cultures and styles, Los Angeles is home to an array of diverse and interesting places to visit. Journey with us as we take a closer look at some of these pLAces.",
        "picture"           : "../wp-content/uploads/2013/12/exploring-la.png",
        "web"       : "http://dailybruin.com/features/places-exploring-los-angeles-one-place-at-a-time/",
        "author"        : "The Daily Bruin",
        "category"      : ["2011"]
    },
    {
        "fname"     : "A cut above the rest",
        "description"     : "What makes an athlete stand out? Is it pure skill? Is it overcoming adversity? Is it balancing skills on and off the field? A Cut Above the Rest explores the lives of four UCLA athletes.",
        "picture"           : "../wp-content/uploads/2013/12/A-cut-above-the-rest.png",
        "web"       : "http://dailybruin.com/features/a-cut-above-the-rest/",
        "author"        : "The Daily Bruin",
        "category"      : ["2011"]
    },
    {
        "fname"     : "How-to's: The Bare Basics",
        "description"     : "UCLA didn't get to 106 championships just by luck. These athletes have spent countless hours perfecting their skills in the game. Join these NCAA athletes as they break down the basics and share their secrets to success.",
        "picture"           : "../wp-content/uploads/2013/12/The-bare-basics.png",
        "web"       : "http://dailybruin.com/features/how-tos-the-bare-basics/",
        "author"        : "The Daily Bruin",
        "category"      : ["2011"]
    },
    {
        "fname"     : "Rivalry Resumed",
        "description"     : "With the big game looming ahead, Akeem Ayers and Ricky Marvray reflect on the pain of last year's loss to their cross-town rivals and the mental preparation required for their next meeting.",
        "picture"           : "../wp-content/uploads/2013/12/Rivalry-Resumed.png",
        "web"       : "http://dailybruin.com/features/rivalry-resumed/",
        "author"        : "The Daily Bruin",
        "category"      : ["2010", "blah", "sports"]
    },
    {
        "fname"     : "Injured Athletes",
        "description"     : "Whether playing volleyball or doing martial arts, injuries are a painful, though inevitable, part of the sport. Nevertheless, the best defense against such injuries is a bit of sports medicine.",
        "picture"           : "../wp-content/uploads/2013/12/Injured-Athletes.png",
        "web"       : "http://dailybruin.com/features/injured-athletes/",
        "author"        : "The Daily Bruin",
        "category"      : ["2010", "sports"]
    },
    {
        "fname"     : "It Takes 2",
        "description"     : "‘It Takes Two’ breaks down the stereotypical image of the archetypal mentor to reveal that mentors can come in all different shapes and forms.",
        "picture"           : "../wp-content/uploads/2013/12/It-takes-2.png",
        "web"       : "http://dailybruin.com/features/it-takes-2/",
        "author"        : "The Daily Bruin",
        "category"      : ["2010"]
    },
    {
        "fname"     : "Volunteerism Abroad",
        "description"     : "The term 'volunteerism' has become something of a commodity in a society that sees service as a requirement rather than an option. This project looks back to students, exploring what motivated them to go abroad to serve others and the type of impact they left behind.",
        "picture"           : "../wp-content/uploads/2013/12/Volunteerism-Abroad.png",
        "web"       : "http://dailybruin.com/features/volunteerism-abroad/",
        "author"        : "The Daily Bruin",
        "category"      : ["2010"]
    },
    {
        "fname"     : "Exploring the William Andrews Clark Memorial Library",
        "description"     : "",
        "picture"         : "../wp-content/uploads/2013/12/Exploring-library.png",
        "web"       : "http://dailybruin.com/features/clark-library/",
        "author"        : "The Daily Bruin",
        "category"      : ["2010"]
    },
    {
        "fname"     : "The New Season",
        "description"     : "September apparently brings 113-degree temperatures this year, but also the usual bounty of new TV shows. Daily Bruin A&E reviewed some of the pilot episodes and gave them a letter grade. Read on to see which ones we think are worth watching, and which ones are probably going to be canceled before the season’s over.",
        "picture"           : "../wp-content/uploads/2013/12/The-new-season.png",
        "web"       : "http://dailybruin.com/features/the-new-season/",
        "author"        : "The Daily Bruin",
        "category"      : ["2010", "a&e"]
    },
    {
        "fname"     : "A Closer Look: UCLA Dining",
        "description"     : "",
        "picture"           : "../wp-content/uploads/2013/12/ucla-dining.png",
        "web"       : "http://dailybruin.com/features/a-closer-look-ucla-dining/",
        "author"        : "The Daily Bruin",
        "category"      : ["2010", "acl"]
    },
    {
        "fname"     : "Timeline of Budget Changes",
        "description"     : "",
        "picture"           : "../wp-content/uploads/2013/12/Timeline-of-budget-changes.png",
        "web"       : "http://dailybruin.com/features/timeline-of-budget-changes/",
        "author"        : "The Daily Bruin",
        "category"      : ["2010"]
    },
    {
        "fname"     : "Cultivating flowers and community: the Empowerment Community Garden",
        "description"     : "",
        "picture"           : "../wp-content/uploads/2013/12/Empowerment-Community-Garden.png",
        "web"       : "http://dailybruin.com/features/cultivating-flowers-and-community-the-empowerment-community-garden/",
        "author"        : "The Daily Bruin",
        "category"      : ["2010"]
    }
];
</script>

<script>
function erase() {

        //identify container
        var $container = $('#container');

        //remove all items
        $container.masonry('remove', $container.find('.item'));
}

function filter() {

    var $container = $('#container');

    var ycati = 0;
    var ocati = 0;

    var ycategories = new Array();
    var ocategories = new Array();

    //Years
    if(document.getElementById("2010").checked) {
        ycategories[ycati] = "2010";
        ycati++;
    }
    if(document.getElementById("2011").checked) {
        ycategories[ycati] = "2011";
        ycati++;
    }
    if(document.getElementById("2012").checked) {
        ycategories[ycati] = "2012";
        ycati++;
    }
    if(document.getElementById("2013").checked) {
        ycategories[ycati] = "2013";
        ycati++;
    }

    //Other
    if(document.getElementById("news").checked) {
        ocategories[ocati] = "news";
        ocati++;
    }
    if(document.getElementById("a&e").checked) {
        ocategories[ocati] = "a&e";
        ocati++;
    }
    if(document.getElementById("sports").checked) {
        ocategories[ocati] = "sports";
        ocati++;
    }
    if(document.getElementById("prime").checked) {
        ocategories[ocati] = "prime";
        ocati++;
    }
    if(document.getElementById("BoB").checked) {
        ocategories[ocati] = "BoB";
        ocati++;
    }
    if(document.getElementById("acl").checked) {
        ocategories[ocati] = "acl";
        ocati++;
    }

    var fhtml = "";

    if(ycati > 0 || ocati > 0) {
    for(var i = 0; i < features.length; i++) {

            var yinclude = 1;
            var oinclude = 1;

            for(var j = 0; j < ycati; j++) {
                if(jQuery.inArray(ycategories[j],features[i].category,0) >= 0) {
                    yinclude = 1;
                    break;
                }
                yinclude = 0;
            }

            for(var l = 0; l < ocati; l++) {
                if(jQuery.inArray(ocategories[l],features[i].category,0) >= 0) {
                    oinclude = 1;
                    break;
                }
                oinclude = 0;
            }

            if(yinclude && oinclude) {
                var obj = features[i];

                fhtml = fhtml + '<div class="item">'
                + '<a href="' + obj.web + '"><h5>' + obj.fname + '</h5><img src="' + obj.picture + '" style="width: 300px; padding: 5px; background-color: #fff;"/><span class="caption slide-caption"><p class="authors">' + obj.author
                + '</p><p class="ellipsis">' + obj.description
                + '</p></span></a></div>';
            }

        }

            if(fhtml == "") {
                erase();
                //$("div.feature_objects").empty();
                $container.masonry();
                $( "div.js-masonry" ).html("Sorry, no results were found.");
            }
            else {
                    erase();

                    //$("div.feature_objects").empty();

                    $container.masonry({
                      columnWidth: 335,
                      itemSelector: '.item',
                      gutter: 0,
                      transitionDuration: '0.4s'
                    });

                    var $items = $(fhtml);

                    $container.append($items);
	
			$(".ellipsis").dotdotdot({
			/* The HTML to add as ellipsis. */
			ellipsis : '... ',
 
			/* How to cut off the text/html: 'word'/'letter'/'children' */
			wrap : 'word'
        });

                    $container.masonry('appended', $items);
            }
    }
}
</script>

<script>
function renderAll() {

    erase();

    $("input:checkbox").attr('checked', false);

    var $container = $('#container');

    $container.masonry('remove', $container.find('.item'));

    // initialize
    $container.masonry({
      columnWidth: 335,
      itemSelector: '.item',
      gutter: 0,
      transitionDuration: '0.4s'
    });

    var fhtml = "";
    for(var i = 0; i < features.length; i++) {
        var obj = features[i];

        /*fhtml = fhtml + '<a class="darken" href="' + obj.web + '"><div class="item"><h4>' + obj.fname + '</h4>'
                + '<img id="image-3" src="' + obj.picture + '" style="width: 300px; padding: 5px; background-color: #fff;"/><span class="caption fade-caption" style="width: 300px;">' + obj.description
                + '<br/><i style="font-size: 8pt; float: right; margin-right: 10px;">' + obj.author
                + '</i></span></div></a>';*/

        fhtml = fhtml + '<div class="item">'
                + '<a href="' + obj.web + '"><h5>' + obj.fname + '</h5><img src="' + obj.picture + '" style="width: 300px; padding: 5px; background-color: #fff;"/><span class="caption slide-caption"><p class="authors">' + obj.author
                + '</p><p class="ellipsis">' + obj.description
                + '</p></span></a></div>';
    }

    var $items = $(fhtml);

    $container.append($items);

    $container.masonry( 'appended', $items);

    $container.imagesLoaded( function() {
        $container.masonry();
	 $(".ellipsis").dotdotdot({
		/* The HTML to add as ellipsis. */
		ellipsis : '... ',
 
		/* How to cut off the text/html: 'word'/'letter'/'children' */
		wrap : 'word'
        });
    });
};
</script>

<script>
$(window).load(function () {
    renderAll();
});

</script>

<script>
function clearAll() {
    $("input:checkbox").attr('checked', false);
}

function checkAll(formname, checktoggle)
{
  var checkboxes = new Array();
  checkboxes = document[formname].getElementsByTagName('input');
 
  for (var i=0; i<checkboxes.length; i++)  {
    if (checkboxes[i].type == 'checkbox')   {
      checkboxes[i].checked = checktoggle;
    }
  }
}
</script>

</head>

<body>

<h4>FEATURES</h4>

<div>

<div style="display: inline-block; margin: 10px; padding: 5px;">
<h5>Year</h5>
<form name="yrs" method="post" style="padding: 5px;">
<input id="2010" class="css-checkbox" type="checkbox" />
<label for="2010" name="2010" class="css-label">2010</label>&nbsp;&nbsp;
<input id="2011" class="css-checkbox" type="checkbox" />
<label for="2011" name="2011" class="css-label">2011</label>&nbsp;&nbsp;
<input id="2012" class="css-checkbox" type="checkbox" />
<label for="2012" name="2012" class="css-label">2012</label>&nbsp;&nbsp;
<input id="2013" class="css-checkbox" type="checkbox" />
<label for="2013" name="2013" class="css-label">2013</label>&nbsp;&nbsp;
<input type="button" value="All" onclick="javascript:checkAll('yrs', true);"/>
</form>
</div>

<div style="display: inline-block; margin: 10px; padding: 5px;">
<h5>Category</h5>
<form name="other" method="post" style="padding: 5px;">
<input id="news" class="css-checkbox" type="checkbox" />
<label for="news" name="news" class="css-label">News</label>&nbsp;&nbsp;
<input id="a&e" class="css-checkbox" type="checkbox" />
<label for="a&e" name="a&e" class="css-label">A&E</label>&nbsp;&nbsp;
<input id="sports" class="css-checkbox" type="checkbox" />
<label for="sports" name="sports" class="css-label">Sports</label>&nbsp;&nbsp;

<input id="prime" class="css-checkbox" type="checkbox" />
<label for="prime" name="prime" class="css-label">Prime</label>&nbsp;&nbsp;
<input id="BoB" class="css-checkbox" type="checkbox" />
<label for="BoB" name="BoB" class="css-label">Bridget O'Brien</label>&nbsp;&nbsp;
<input id="acl" class="css-checkbox" type="checkbox" />
<label for="acl" name="acl" class="css-label">A Closer Look</label>&nbsp;&nbsp;
<input type="button" value="All" onclick="javascript:checkAll('other', true);"/><br/>
</form>
</div>

<div style="display: inline-block; margin: 10px; padding: 5px;">
<input type="button" value="Submit" onclick="filter()"/>
<input type="button" value="All Features" onclick="renderAll()"/>
<input type="button" value="Reset" onclick="clearAll()"/>
</form>
</div>

<div class="feature_objects">

    <div id="container" class="js-masonry">

    </div>

</div>

<?php get_footer(); ?>
