<?php/*
 -Template Name: Online Features
 -*/ ?>
<?php get_header();?>

<script src="../js/vendor/masonry.pkgd.min.js"></script>
<script src="../js/vendor/imagesloaded.pkgd.min.js"></script>
<script src="../js/vendor/jquery.dotdotdot.js" type="text/javascript"></script>

<link rel="stylesheet" href="../css/page-online-features.css" type="text/css">
<link rel="stylesheet" href="../css/page-online-features-narrow.css" media='(max-width: 480px)' type="text/css">

<script>

 var features;
    $.getJSON('../js/page-online-features.json', function (data) { 
    features = data.articles; 
    });

</script>

<script>

//Erase all items from container
function erase() {

        //identify container
        var $container = $('#container');

        //remove all items
        $container.masonry('remove', $container.find('.item'));
}

//Filter by years
function filterByYr(feature_year) {

    clearAll();

    $('div.js-masonry').empty();

    var fhtml = "";

        features.sort(function(a, b) {
                if(a.fname < b.fname) return -1;
            
                if(a.fname > b.fname) return 1;
        
                return 0;
            }
        )

        for(var i = 0; i < features.length; i++) {
            if(jQuery.inArray(feature_year,features[i].category,0) >= 0) {
                var obj = features[i];

                fhtml = fhtml + '<div class="item">'
                + '<a href="' + obj.web + '"><h5>' + obj.fname + '</h5><img src="' + obj.picture + '" style="width: 300px; padding: 5px; background-color: #fff;"/></a></div>';
            }
        }


    var $container = $('#container');

    erase();

    var $items = $(fhtml);

    $container.append($items);
    $container.masonry('appended', $items);
    $container.imagesLoaded( function() {
    	$container.masonry();
	$(".ellipsis").dotdotdot({
	/* The HTML to add as ellipsis. */
	ellipsis : '... ',
 
	/* How to cut off the text/html: 'word'/'letter'/'children' */
	wrap : 'word'
       });
    });

}

//Filter by category
function filterByCat() {

    $('div.js-masonry').empty();

    var $container = $('#container');

    var cati = 0;

    var categories = new Array();

    if(document.getElementById("news").checked) {
        categories[cati] = "news";
        cati++;
    }
    if(document.getElementById("sports").checked) {
        categories[cati] = "sports";
        cati++;
    }
    if(document.getElementById("a&e").checked) {
        categories[cati] = "a&e";
        cati++;
    }
    if(document.getElementById("opinion").checked) {
        categories[cati] = "opinion";
        cati++;
    }
    if(document.getElementById("prime").checked) {
        categories[cati] = "prime";
        cati++;
    }
    if(document.getElementById("video").checked) {
        categories[cati] = "video";
        cati++;
    }

        features.sort(function(a, b) {
                if(a.fname < b.fname) return -1;
            
                if(a.fname > b.fname) return 1;
        
                return 0;
            }
        )

    var fhtml = "";

    if(cati > 0) {
    for(var i = 0; i < features.length; i++) {

            var include = 1;

            for(var j = 0; j < cati; j++) {
                if(jQuery.inArray(categories[j],features[i].category,0) >= 0) {
                    include = 1;
                    break;
                }
                include = 0;
            }

            if(include) {
                var obj = features[i];

                fhtml = fhtml + '<div class="item">'
                + '<a href="' + obj.web + '"><h5>' + obj.fname + '</h5><img src="' + obj.picture + '" style="width: 300px; padding: 5px; background-color: #fff;"/></a></div>';
            }

        }

            if(fhtml == "") {
                erase();
                
                $container.masonry();
                $( "div.js-masonry" ).html("Sorry, no results were found.");
            }
            else {
                    erase();

                    $container.masonry({
                      columnWidth: 335,
                      itemSelector: '.item',
                      gutter: 0,
                      transitionDuration: '0.4s'
                    });

                    var $items = $(fhtml);

                    $container.append($items);

                    $container.masonry('appended', $items);
		       $container.imagesLoaded( function() {
        			$container.masonry();
	 			$(".ellipsis").dotdotdot({
				/* The HTML to add as ellipsis. */
				ellipsis : '... ',
 
				/* How to cut off the text/html: 'word'/'letter'/'children' */
				wrap : 'word'
        			});
    			});
            }
    }
}
</script>

<script>
//Render all features
function renderAll() {

    clearAll();

    $('div.js-masonry').empty();

        features.sort(function(a, b) {
                if(a.fname < b.fname) return -1;
            
                if(a.fname > b.fname) return 1;
        
                return 0;
            }
        )

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
                + '<a href="' + obj.web + '"><h5>' + obj.fname + '</h5><img src="' + obj.picture + '" style="width: 300px; padding: 5px; background-color: #fff;"/></div>';
    }

    var $items = $(fhtml);

    $("#container").hide();

    $container.append($items);

    $container.imagesLoaded( function() {
	 $("#container").show();
	 $container.masonry( 'appended', $items);
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
//First page load rendering (renders all features)
$(window).load(function () {
    renderAll();
});

</script>

<script>
//reset check boxes
function clearAll() {
    $("input:checkbox").attr('checked', false);
}

//select all check boxes
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

<h1 class="feature_title">ONLINE FEATURES</h1>

<p>Special online features by the Daily Bruin</p>

<div style="display: inline-block; margin: 10px; padding: 5px;">
  <h2>Year</h2>
  <ul class="button-group">
    <button type="button" href="#" class="button small" onclick="filterByYr('2010')">2010</button>
    <button type="button" href="#" class="button small" onclick="filterByYr('2011')">2011</button>
    <button type="button" href="#" class="button small" onclick="filterByYr('2012')">2012</button>
    <button type="button" href="#" class="button small" onclick="filterByYr('2013')">2013</button>
    <button type="button" href="#" class="button small" onclick="renderAll()">ALL</button>
  </ul>
</div>

<br/>

<div style="display: inline-block; margin: 10px 10px 0 10px; padding: 5px;">
<h2>Category</h2>
<form name="categories" method="post" style="padding: 5px;">
<input id="news" class="css-checkbox" type="checkbox" />
<label for="news" name="news" class="css-label">News</label>&nbsp;&nbsp;
<input id="sports" class="css-checkbox" type="checkbox" />
<label for="sports" name="sports" class="css-label">Sports</label>&nbsp;&nbsp;
<input id="a&e" class="css-checkbox" type="checkbox" />
<label for="a&e" name="a&e" class="css-label">A&E</label>&nbsp;&nbsp;
<input id="opinion" class="css-checkbox" type="checkbox" />
<label for="opinion" name="opinion" class="css-label">Opinion</label>&nbsp;&nbsp;
<input id="prime" class="css-checkbox" type="checkbox" />
<label for="prime" name="prime" class="css-label">Prime</label>&nbsp;&nbsp;
<input id="video" class="css-checkbox" type="checkbox" />
<label for="video" name="video" class="css-label">Video</label>&nbsp;&nbsp;
</form>
</div>

<div style="display: inline-block; margin: 0 10px 20px 10px; padding: 5px;">
<input type="button" value="Check All" class="button tiny" onclick="checkAll('categories','true')"/>
<input type="button" value="Reset" class="button tiny" onclick="clearAll()"/>
<input type="button" value="Submit" class="button tiny" onclick="filterByCat()"/>
</form>
</div>

<div class="feature_objects">

    <div id="container" class="js-masonry">

    </div>

</div>

<?php get_footer();?>
