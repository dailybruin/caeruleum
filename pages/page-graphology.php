<?php/*
Template Name: Graphology
*/ ?>
<?php get_header(); ?>
<script type="text/javascript">
$(document).ready(function() {
  /* turn off responsive layout */
  unresponsivize();

  /* feature story */
  $(".story-page").hide();
  $("#story-page-1").show();
  var currPage = 1;
  
  $(".pagination li a").click(function(event){
	$(".story-page").hide();
	$(".pagination li").removeClass('disabled');
	$(".pagination li a").css('pointer-events', '');
    	var id = $(this).parent().attr('id')
	
	if( id.localeCompare( "prev" ) == 0 ) {
		currPage--;
		$("#story-page-" + currPage.toString()).fadeIn(200);
		$("#" + currPage.toString() ).addClass('disabled');
		$("#" + currPage.toString() + " a").css('pointer-events', 'none');
		if( currPage == 1 ) {
	  		$("#prev").addClass('disabled');
			$("#prev a").css('pointer-events', 'none');
		}
       }
	else if( id.localeCompare( "next" ) == 0 ) {
		currPage++;
	  	$("#" + currPage.toString()).addClass('disabled');
		$("#" + currPage.toString() + " a").css('pointer-events', 'none');
		$("#story-page-" + currPage.toString()).fadeIn(200);
		if( currPage == 3 ) {
			$("#next").addClass('disabled');
			$("#next a").css('pointer-events', 'none');
		}
	}
       else {
		currPage = parseInt(id);
		$("#" + id).addClass('disabled');
		$("#" + id + " a").css('pointer-events', 'none');
		$("#story-page-" + id).fadeIn(200);

		if( parseInt( id ) == 3 ) {
			$("#next").addClass('disabled');
			$("#next a").css('pointer-events', 'none');
              }
		else if( parseInt( id ) == 1 ) {
			$("#prev").addClass('disabled');
			$("#prev a").css('pointer-events', 'none');
              }
       }
  });

  /* writing samples */
  $(".sample-previews").hover( function() {
	var id = $(this).data("id");
	if(id!==undefined) 
         $("#arrow-container ." + id).css('opacity', 1);
    }, function() {
	var id = $(this).data("id");
	if(id!==undefined) 
 	$("#arrow-container ." + id).css('opacity', 0.85);
   });

  $(".writing-samples").hide();
  $(".sample-previews").click(function(event){
   	event.preventDefault();
	$(".hl-region").css('opacity','0');
    	var id = $(this).data("id");
    	
	if( !$("." + id).is(':hidden')) {
		$("." + id).hide();
		$("#space").show();
    	} else {
      		$(".writing-samples").hide();
      		
		if(id!==undefined) {
			$("#arrow-container ." + id ).show();
       		$("." + id).fadeIn(500);
			$("#space").hide();
      		}
      		$("#writing-samples-container").fadeIn(500);
    	}
  });

  /* pop-overs */
  $(".hl-region").hover(
  	function(){
       	$(this).popover('show');

	$(this).css('opacity','1');
       },function(){
		$(this).popover('destroy');
	$(this).css('opacity','0');
  });        

  $('.hl-btn').hover( function() {
  	$('.hl-region').css('opacity','1');
	$('.hl-region').popover('show'); },
	function() {
	$('.hl-region').css('opacity','0');
	$('.hl-region').popover('destroy');
    });

  /* graphology 101 */
  $(".slider").diyslider({
    width: "775px", // width of the slider
    height: "280px", // height of the slider
    display: 1, // num of slides displaying
    loop:false// disable looping on slides
  }); 

  var currSlide = 1;

  $(".prev").click( function(){
    $(".next").css('opacity', 0.8 );
    if( currSlide == 2 ) {
        $(this).css('opacity', 0.4 );
	 $(this).css('font-weight', 'normal' );
        currSlide--;
    }
    else if( currSlide > 1 ){
         currSlide--;
    } 
    $(".slider").diyslider("move", "back");
  });

  $(".prev").hover( function() {
    if( currSlide > 1 ) $(this).css('font-weight', 'bold' );     
    }, function() { $(this).css('font-weight', 'normal' );  
  });

  $(".next").hover( function() {
    if( currSlide < 4 ) $(this).css('font-weight', 'bold' ); 
    }, function() { $(this).css('font-weight', 'normal' );  
  });

  $(".next").click( function() {
    $(".prev").css('opacity', 0.8 );
    if( currSlide == 3 ) {
        $(this).css('opacity', 0.4 );
	 $(this).css('font-weight', 'normal' );
        currSlide++;
    }
    else if( currSlide < 4 ) {
        currSlide++;
    }
    $(".slider").diyslider("move", "forth");
  });
});
</script>

<style type="text/css">
/* basic styling */
#prime-graphology {
	box-shadow: 0 0 15px #aaa; /* all latest browser */
	-moz-box-shadow: 0 0 15px #aaa; /* Firefox older version*/
	-webkit-box-shadow: 0 0 10px #aaa;
}
#prime-graphology img {
	max-width: 100%;
	height: auto;
}
#prime-graphology .border {
	border: 1px solid #CDCDCD;
}
#prime-graphology .normal {
	font-weight: normal;
}
#prime-graphology hr {
	border: 1px dashed #ccc;
}
#prime-graphology div.center {
	text-align: center; 
}
#prime-graphology .color-bg {
	background-color: #F7F7F7;
}

/* feature story */
#prime-graphology #feature-story {
	padding: 20px 20px 0px 20px;
}
#prime-graphology #feature-title {
	width: 500px;
	margin-top: 10px;
}
#prime-graphology #feature-prime {
	width: 130px;
	float: left; 
	margin-right: 10px;
	margin-bottom: -5px;
}
#prime-graphology #feature-side {
	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
	padding: 20px;
	margin: 15px 0px;
	border-radius: 5px;
}
#prime-graphology figcaption {
	margin-left: 100px;
}
#prime-graphology #feature-story .story-page img {
	float: left; 
	width: 300px; 
	margin: 0px 20px 20px 20px;
} 

/* writing samples preview */
#prime-graphology #writing-sample-intro {
	margin-bottom: 20px;
}
#prime-graphology #writing-sample-intro a {
	float:right;
	padding: 5px;
	border-radius: 5px;
	margin: 0px 0px 5px 5px;
}
#prime-graphology #writing-sample-intro h4 {
	font-weight: normal;
	font-size: medium;
	margin-left: 5px;
}
#prime-graphology .preview-div {
	height: 180px;
    	width: 190px;
	display: block;
       float:left;
    	margin: 3px 3px 0px 3px;
    	background-position: center;
    	opacity: 0.85;
}
#prime-graphology .preview-div:hover {
       opacity: 1;

}
#prime-graphology #jw-preview {
       background-image: url('/images/features/prime-graphology/jw-writing-sample.jpg');
	background-position: -150px -120px;
	background-size: 400px 400px;
	border: 13px #FABEBF solid;
}
#prime-graphology #jm-preview {
       background-image: url('/images/features/prime-graphology/jm-writing-sample.jpg');
	    	border: 13px #f1cd96 solid;
}
#prime-graphology #ad-preview {
	background-image: url('/images/features/prime-graphology/ad-writing-sample.jpg');
	border: 13px #bec9fa solid;
}
#prime-graphology #cb-preview {
      background-image: url('/images/features/prime-graphology/cb-writing-sample.jpg');
      background-size: 500px 300px;
      background-position: -30px 5px;
	border: 13px #b7f0cb solid;
}
#prime-graphology #writing-samples-div {
      padding: 10px 0px 20px 0px;
	margin: 0 auto;
	max-width: 900px;
}
#prime-graphology .sample-previews {
      font-size: 22px;
      display: inline-block;    
}
#prime-graphology #arrow-container {
	margin-top: -5px;

}
#prime-graphology #arrow-container div {
	position: relative;
	opacity: 0.85;
	width:0px;
	height: 0px;
	border-left: 20px solid transparent;
	border-right: 20px solid transparent;
}
#prime-graphology #jw-preview-arrow {
	border-top: 20px solid #FABEBF;
       margin-left: 10%;
}
#prime-graphology #jm-preview-arrow {
	border-top: 20px solid #f1cd96;
       margin-left: 35%;
}
#prime-graphology #ad-preview-arrow {
	border-top: 20px solid #bec9fa;
       margin-left: 60%;
}
#prime-graphology #cb-preview-arrow {
	border-top: 20px solid #b7f0cb;
       margin-left: 85%;
}

/* writing samples */
#prime-graphology .ws-container {
	margin-top: 15px;
}
#prime-graphology .left-div {
	float: left;
}
#prime-graphology .right-div {
   	float:right;
	position: relative;
}
#prime-graphology #left-div-jw {
	width: 445px;
}
#prime-graphology #left-div-ad {
	width: 350px;
	height: 570px;
}
#prime-graphology #jw-title {
	width: 400px; 
	margin-right:-30px;
	margin-top: -20px;
	margin-left: -20px;
}
#prime-graphology #jm-title {
	width: 340px;
	margin-top: -20px;
}
#prime-graphology #ad-title {
	width: 300px; 
	margin-top:-20px;
	margin-bottom: -10px;
}
#prime-graphology #cb-title {
	width: 300px;
	margin-top:-20px;
}

/* highlight regions */
#prime-graphology .hl-region {
       position:absolute;
	opacity: 0;
}
#prime-graphology .hl-region:hover {
       opacity:1;
}
#prime-graphology .hl-btn {
	float: right;
	margin-top: 10px;
}
#prime-graphology .bg-image {
	background-repeat: no-repeat;
}
#prime-graphology .main-bg-image {
	opacity: 0.5;   
}
#prime-graphology #jw-container {
       height:470px;
       width:435px;
}
#prime-graphology #jw-container .bg-image {      
	background-image:url('/images/features/prime-graphology/jw-writing-sample.jpg');
	background-size: 435px 430px;
       height:430px;
       width:435px;
}
#prime-graphology #jw-container div.hl-region {
       height:50px;
       width:50px;
       border-radius: 30px;
}
#prime-graphology #jw-container div.hl-region-large {
	height:90px;
	width:78px;
}
#prime-graphology #jw-t {
        top:139px;
        left:151px;
        background-position: -151px -139px;
}
#prime-graphology #jw-oo {
        top:251px;
        left:257px;
        background-position: -257px -251px;
}
#prime-graphology #jw-capital {
       top:27px;
       left:180px;
       background-position: -180px -27px;
}
#prime-graphology #jm-container {
       height: 392px;
       width: 610px;
	margin: 0px 15px 15px 15px;
}
#prime-graphology #jm-container .bg-image {
       background-image:url('/images/features/prime-graphology/jm-writing-sample-small.jpg');
       background-size: 610px 360px;
       height: 360px;
       width: 610px;
}
#prime-graphology #jm-container div.hl-region {
       height:39px;
       width:39px;
       border-radius: 45px;
}
#prime-graphology #jm-container div.hl-region-name {
       height:60px;
       width:165px;
       border-radius: 67px;
}
#prime-graphology #jm-s {
	top:67px;
	left:480px;
	background-position: -480px -67px;
}
#prime-graphology #jm-sig {
	top:5px;
	left:196px;
	background-position: -196px -5px;
}
#prime-graphology #jm-t-slash {
	top:157px;
	left:382px;
	background-position: -382px -157px;
}
#prime-graphology #jm-t {
	top:295px;
	left:126px;
	background-position: -126px -295px;
}
#prime-graphology #jm-ibe{
	top:130px;
	left:166px;
	background-position: -166px -130px;
}
#prime-graphology #ad-container {
       height:530px;
       width:520px;
}
#prime-graphology #ad-container .bg-image {
       background-image: url('/images/features/prime-graphology/ad-writing-sample.jpg');
       background-size: 520px 530px;
	height:530px;
       width:520px;
}
#prime-graphology #ad-container div.hl-region {
	height:20px;
	width:85px;
	border-radius: 25px;
}
#prime-graphology #ad-container div.hl-region-short {
	width:39px;
}
#prime-graphology #ad-adventure {
	top:148px;
      	left:205px;
       background-position: -205px -148px;
}
#prime-graphology #ad-your {
	top:443px;
	left:272px;
	background-position: -272px -443px;
}
#prime-graphology #ad-space {
	top:130px;
	left:92px;
	background-position: -92px -130px;
}
#prime-graphology #ad-neck {
	top:235px;
	left:115px;
	background-position: -115px -235px;
}
#prime-graphology #cb-container {
       height: 283px;
       width:540px;
	margin: 15px;
}
#prime-graphology #cb-container .bg-image {
       background-image:url('/images/features/prime-graphology/cb-writing-sample.jpg');
       background-size:540px 249px;
	height:249px;
       width:540px;
}
#prime-graphology #cb-container div.hl-region {
       height:45px;
       width:45px;
       border-radius: 45px;
}
#prime-graphology #cb-container div.hl-region-large {
       height: 87px;
       width: 78px;
       border-radius: 20px;
}
#prime-graphology #cb-b{
	top:145px;
	left:205px;
	background-position: -205px -145px;
}
#prime-graphology #cb-simp {
	top:30px;
	left:367px;
	background-position: -367px -30px;
}

#prime-graphology #cb-dw {
	top:75px;
	left:96px;
	background-position: -96px -75px;
}
#prime-graphology #cb-m {
	top:20px;
	left:414px;
 	background-position: -414px -20px;
}

#prime-graphology #cb-arcade{
	top:158px;
	left:315px;
	background-position: -315px -158px;
}

/* pop overs */
#prime-graphology .popover-title {
	display: none;
}
#prime-graphology #jw-container .popover {
	border: 1px solid #FABEBF;
}
#prime-graphology #jw-container .popover.top .arrow {
	border-top-color: #FABEBF;
}
#prime-graphology #jw-container .popover.right .arrow {
	border-right-color: #FABEBF;
}
#prime-graphology #jw-container .popover.left .arrow {
	border-left-color: #FABEBF;
}
#prime-graphology #jw-container .popover.bottom .arrow {
	border-bottom-color: #FABEBF;
}
#prime-graphology #jm-container .popover {
	border: 1px solid #f1cd96;
}
#prime-graphology #jm-container .popover.top .arrow {
	border-top-color: #f1cd96;
}
#prime-graphology #jm-container .popover.right .arrow {
	border-right-color: #f1cd96;
}
#prime-graphology #jm-container .popover.left .arrow {
	border-left-color: #f1cd96;
}
#prime-graphology #jm-container .popover.bottom .arrow {
	border-bottom-color: #f1cd96;
}
#prime-graphology #cb-container .popover {
	border: 1px solid #b7f0cb;
}
#prime-graphology #cb-container .popover.top .arrow {
	border-top-color: #b7f0cb;
}
#prime-graphology #cb-container .popover.right .arrow {
	border-right-color: #b7f0cb;
}
#prime-graphology #cb-container .popover.left .arrow {
	border-left-color: #b7f0cb;
}
#prime-graphology #cb-container .popover.bottom .arrow {
	border-bottom-color: #b7f0cb;
}
#prime-graphology #ad-container .popover {
	border: 1px solid #bec9fa;
}
#prime-graphology #cb-container .popover.top .arrow {
	border-top-color: #bec9fa;
}
#prime-graphology #cb-container .popover.right .arrow {
	border-right-color: #bec9fa;
}
#prime-graphology #cb-container .popover.left .arrow {
	border-left-color: #bec9fa;
}
#prime-graphology #cb-container .popover.bottom .arrow {
	border-bottom-color: #bec9fa;
}

/* graphology 101 */	
#prime-graphology #g-101 {
	max-width: 930px;
	margin: 0 auto;
}
#prime-graphology .slider {
   margin: 20px 0px;
}
#prime-graphology .g-101-item {
    border: 3px solid #E6E6E6;
    border-radius: 5px;
    margin: 3px;
    padding: 5px 10px;
    float: left; 
    height: 250px;  
}
#prime-graphology #g-101-title {
       color: #748AF5;
	opacity: 0.8;
	font-size: 480%;
	margin: 15px 0px;	
}
#prime-graphology #g-101-intro {
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: medium;
}
#prime-graphology .prev, .next {
	float: left;
	padding: 0px;
	width: 50px;
	cursor: pointer;
	font-size: 5em;
	color: #748AF5;
	opacity: 0.8;
}
#prime-graphology .prev {
	opacity: 0.4;
	margin: 130px 5px 0px 25px;
}
#prime-graphology .next {
	float: right;
	margin: -190px 25px 5px 0px;

}
#prime-graphology .g-101-item div {
	font-family: "Georgia",serif;
	font-size: 1.4em;
	border-bottom: 2px solid #f5cf99;
	display:inline-block;
	margin:10px 10px 15px 10px;
	padding: 0px;
}

#prime-graphology #g-101-sb {
	width: 180px;
}
#prime-graphology #g-101-rw {
	width: 285px;
}
#prime-graphology #g-101-us {
	width: 205px;
}
#prime-graphology #g-101-aw {
	width: 300px;
}
#prime-graphology #g-101-lsl {
	width: 135px;
}
#prime-graphology #g-101-tlw {
	width: 240px;
}
#prime-graphology #g-101-lt {
	width: 340px;
}
#prime-graphology #g-101-ss {
	width: 155px;
}
#prime-graphology #g-101-ps {
	width: 175px;
}
#prime-graphology #g-101-ls {
	width: 210px;
}
#prime-graphology #g-101-s {
	width: 260px;
}
#prime-graphology #g-101-c {
	width: 200px;
}

#prime-graphology div#footer {
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	margin: 2px;
	font-size: small;
}

/* ad */
#prime-graphology .paid-ad-warning {
	float: left;
	transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-webkit-transform: rotate(-90deg);
	position: relative;
	text-transform: uppercase;
	margin: 0;
	padding: 0;
	color: #999;
	font-size: 0.7rem;
	top: 70px;
	left: 260px;
}

</style>
<div class="row-fluid">
<div class="span12 border center" id="prime-graphology">

<!-- feature story -->
<div id="feature-story">
	<div class="row-fluid">
	<div class="span7 center">
		<img id="feature-title" src="/images/features/prime-graphology/title.png" />
	</div>
	<div class="span5">
		<div class="paid-ad-warning visible-desktop">Paid Advertisement</div>
		<?php get_template_part('ad','side'); ?>
		<div class="border color-bg" id="feature-side">
		<img id="feature-prime" src="/images/features/prime-graphology/prime.png" />This is a feature story from prime magazine. Pick up a copy of prime's spring 2013 issue or visit <a href="http://dailybruin.com/category/prime">prime online</a> for more.
		</div>
	</div>
	</div>
	<a name="story"></a>
	<div class="story-page" id="story-page-1">
		<p>Someone once told me Abraham Lincoln massaged his hands before signing the Emancipation Proclamation so historians in the future could not claim his signature manifested hesitancy. Whether it's true or not, I never forgot that anecdote. </p>
		<p>And when I walked through the National Archives on my eighth grade field trip and saw John Hancock's signature, still bold despite the passing of time, I didn't forget that either. </p>
		<p>The giant "John Hancock," along with the 55 other signatures of the Founding Fathers, were the closest I could get to meeting the men who bravely defied the British crown to establish our nation and who, up until that point, had only been as real as characters in a novel to me - well known, sure, but out of reach. </p>
		<p>Then I curiously glanced at my sloppy signature, which changes every time I sign it, and it didn't seem to tell me much about myself. And though I'll never sign onto anything as important as the Declaration of Independence, I wonder what people will think about me when they see my signature on a document. Years from now, will a kid scrutinize the shape of the "a" and "l" in Alessandra? Or will she draw some conclusion from the prominent "dask" and near absence of "alakis" in Daskalakis? </p>
		<p>Overanalyzing everything is a tendency of mine, and I can't help but think about these things. An example: not a medical student in scrubs goes by without me internally cringing at my grade in electricity and magnetism. </p>
		<p>I can't help but apply this same overanalysis to my signature, so I decided to talk to a graphologist. </p>
		<p>Graphology, for those who don't know, is the study of handwriting and what it says about a person. Some employers hire graphologists to analyze potential employees and screen them for a position. Other graphologists testify in court for handwriting verification. </p>
		<p>"Every envelope I get gives me an impression," said Lena Rivkin, a graphologist based in Los Angeles. </p>
		<p>Rivkin, who practices graphology professionally in addition to being an artist, said signatures are interesting because they are like a public persona or a cover of a book. </p><p>
		<figure><img src="/images/features/prime-graphology/story-img.jpg" />
			<figcaption><i>illustration by Bijun Liang / Daily Bruin</i></figcaption>
		</figure>
		<p>"(Graphology) is a very honest form of communication," Rivkin said. </p>
		<p>"Handwriting is body language on paper." </p>
		<p>Recently I was introduced to Annette Poizner, a graphologist who uses her work in conjunction with therapy to help clients open up and learn about themselves and how they can move forward from conflicts or concerns in their lives. For instance, if somebody wants to quit his or her job and see what they should consider pursuing next, they might talk to Poizner. </p>
		<p>She reached out to me with a story idea, and I told her I was interested in writing a first-hand account. </p>
		<p>Her philosophy is one of projective psychology, which is the discipline that believes a person's innermost thoughts manifest themselves in everything they do, even his or her writing. </p>
		<p>But is it true? I plunged myself into the depths of Poizner's process to find out. </p>
	</div> <!-- end page one -->

	<div class="story-page" id="story-page-2">
		<i>Page 2 of 3</i><br /><br />
		<p>To start she had me sign and print my name and date of birth. She then asked me to describe my 10 earliest memories and describe the most vivid moments and feelings of each one. </p>
		<p>Thinking of them wasn't very hard, but I didn't like to imagine what tripping on the sprinkler-head in pre-school would say about my coordination in life, and what consistently losing to the sumo wrestler in Street Fighter II in a fit of rage the night my sister was born would say about my priorities as a child (to be fair, I didn't really understand that my parents went to the hospital so my mom could give birth to my sister). </p>
		<p>Another part of the process was to write a quick bedtime story on white, unlined paper. Unsure of what to do, I borrowed from my favorite stories, threw in a little bit of autobiography and ended up with a story about a little girl in a periwinkle dress who hops over the fence and follows the creek by the elementary school until she ends up meeting some of her favorite fictional characters. </p>
		<p>That seemed like a lot, and part of me couldn't help but feel like I was giving her all the answers, but I was willing to go along with the ride. When the time came for the interview, she wove together her interpretation of my personality. </p>
		<p>Poizner said she firmly believes that graphology cannot stand alone. For her, it is a complement to psychology because, in her interpretation, the two are so closely linked. Together the two studies form a complete understanding of a person. </p>
		<p>After talking to me about my life, Poizner took a look at my handwriting and started to tell me what she saw. </p>
		<p>We first took a look at the way I formed my words and letters. She described what I consider my sloppy scrawl as organized and "print-script": slanted and deliberately formed. My words are evenly spaced and, if one was to imagine the paper was lined, my writing is fairly straight. All together this told Poizner that I feel and approach my writing as a personal strength. </p>
		<p>My writing is also categorized as a standard "gifted child" type. I did not want to be wooed by flattery. But then, without talking about my memories she told me I was torn between two things. That's where I started to listen a little closer. As the comparative literature and biology pre-med who can't seem to let go of the newspaper, it was the first time I really agreed during the process.  </p>
		<p>She elaborated that the way I connected my words was somewhat unconventional, but showed my desire and affinity to communicate with people in order to work around obstacles. That too, seemed pretty accurate.</p>
		<p>Later we discussed my memories and the way in which my writing did not fully extend across the white page. She assessed that this, in conjunction with my memories, might mean I am at times unsure of myself and eager to "return home," or to the left side of the page.</p>
		<p>Poizner, who uses her background in traditional Chinese medicine and Jewish influences in her work, said she thought I had too much yin and should embrace more yang through expression of anger. She added that I should embrace my "go-getter" attitude and believe more in my ability to accomplish my goals and be less maternal. </p>
		<p>Here I disagreed. I have always felt I get too angry, too easily. But then again, those who know me also know how much I hate yelling. So was she on to something? I mentioned some of this and we talked about how perhaps I feared becoming angry and should allow myself to release my frustration more often in more productive ways. She suggested kickboxing, which I will no doubt have too little time to pursue. But still, interesting. </p>
		<p>As far as her statement about me being too maternal, that also has multiple interpretations. I find myself at a point in my life where I have many things I want to accomplish, and I consider myself a proactive, independent person. However, if my family called me right now and told me they needed me to come home, I know that I would. </p>
	</div> <!-- end page two -->

	<div class="story-page" id="story-page-3">
	<i>Page 3 of 3</i><br /><br />
		<p>All in all my experience with graphology was interesting and enjoyable. I learned more about myself, and I appreciated how we used my handwriting as a jumping point to start a dialogue. I think some things were a little bit of a stretch, but certain points were surprisingly accurate. Ultimately, I walked away with respect for Poizner and her ability to take handwriting and confidently work with someone she doesn't even know to help them better understand themselves. I can see, though, how people unfamiliar with Poizner's ideology might be skeptical. Going into this, I thought the handwriting would speak entirely for itself. </p>
		<p>Jennifer Mnookin is skeptical about the effectiveness of graphology. Mnookin is vice dean and professor of law at the UCLA School of Law, and has written extensively on handwriting analysis and verification in the courtroom. </p>
		<p>Mnookin said handwriting verification has been used routinely in the United States since the middle to late 19th century. But she added that she had never come across a case where handwriting experts testified on behalf of character based on handwriting analysis. </p>
		<p>In her experience, those graphologists and document examiners identify themselves differently. Document examiners, she said, pay close attention to the similarity in such details as letter formation, instead of assessing potential character traits based on writing styles. </p>
		<p>Some graphologists use their skills in court to recognize differences in handwriting as well. </p>
		<p>Mnookin added that in recent years handwriting verification has become controversial in courtrooms because of the uncertainty of valid empirical evidence. </p>
		<p>Nonetheless, graphology is apparently quite popular in France, despite skepticism in the United States, showing an interesting cultural difference, Mnookin added. </p>
		<p>After talking to graphologists like Poizner and Rivkin, I understand that graphologists, too, understand the limitations of their trade. "I know what I can see and what I cannot see," Rivkin said. "People have layers; (they) are more complicated." </p>
		<p>Like learning a language, graphology is not easy, she said. </p>
		<p>"Let's say I was wrong about something. It's usually my fault," she said. "I just didn't put the puzzle together correctly." </p>
		<p>For this reason she said she exerts caution, mindful that she is dealing with real people and their feelings. She said she always tries to learn as much as she can about a person. </p>
		<p>So what's my verdict? If I had a friend who was struggling with something and had a bad experience with therapists, I would tell them to give graphology a try. It's different, and if approached correctly it seems as though it could be helpful in identifying traits or starting discussions instead of aggressively fighting problems with questioning. </p>
		<p>From my handwriting, Poizner correctly identified my work ethic, my occasional hesitancy to trust and what I would want from a career. Our interview was over the phone, so her accuracy cannot be attributed to judgments based on my appearance. At this point, though, I would feel uncomfortable making decisions, like employment, based on handwriting. </p>
		<p>So graphology, to me, and to people like Poizner, is a supplement to other information. </p>
		<p>As of yet we do not have time machines, so I'll never really get to know the historical figures I've read about or imagined I'd like to meet. But I'd like to think that we leave something more than ink behind when we commit to something or sign our name. </p>
		<p>As a journalist, I guess part of me likes the idea that our writing might tell our own story as much as it tells the story we are trying to share. And if it might be that we leave a piece of ourselves behind in the slope of our letters, I'll buy it. </p>	
		<i>Email Daskalakis at <a href="mailto:adaskalakis@media.ucla.edu">adaskalakis@media.ucla.edu.</a></i>
	</div> <!-- end page three -->
	
	<div class="pagination center">
  		<ul>
  	  	<li id="prev" class="disabled"><a style="pointer-events: none;" href="#story" ><<</a></li>
  	 	<li id="1" class="disabled"><a style="pointer-events: none;" href="#feature-story" >1</a></li>
   		<li id="2"><a href="#story" >2</a></li>
   	 	<li id="3"><a href="#story">3</a></li>
 	  	<li id="next"><a href="#story" >>></a></li>
 	 	</ul>
	</div>
	<div style="clear:both;" /></div>
</div><!-- end feature story -->

<hr />


<div class=row-fluid"><div class="span12"><div class="center" id="g-101">
	<h2 class="normal" id="g-101-title">Graphology 101</h2><br />
	<span id="g-101-intro">What does your handwriting say about you?<br />Here are graphological interpretation principles that readers can use to think about their own handwriting: </span>
	<br />
	<div class="prev"><</div>
	<div class="slider center"><!-- slider -->
		<div><!-- mandatory div used by the slider -->
		<div>
			<div class="g-101-item" id="g-101-sb"><div>Strong baseline</div><p>When the baseline--the line of the text as it moves 
        			across the page--is firm and straight, the person writing tends to have a strong work ethic. 
        			A wavy baseline indicates moodiness, potential difficulties with discipline, and possible 
        			medical issues.</p></div>	
			<div class="g-101-item" id="g-101-rw"><div>Rounded writing</div><p>The more loops you see in the handwriting, the more 
        			emotionality in the personality. Also, rounded writing shows more visual interest in beauty or 
        			beautifying the environment. These people tend to shape letters by being very true to the 
        			letter form. They honor how something should look; they want their writing to look nice. These 
        			people often have a sensitivity for dressing well, interior design, art appreciation, etc.</p></div>
        		<div class="g-101-item" id="g-101-us"><div>Upright slant</div><p>Some writers write a script that has an upright 
       	 		(vertical) slant. This writer is objective, formal, and poised. The upright slant writer 
       	 		is reserved.he or she looks at a situation from a detached perspective, then decides what 
        			degree of emotional involvement will be appropriate.</p></div>
		</div> <!-- end row 1 -->
      		<div>
			<div class="g-101-item" id="g-101-aw"><div>Angular writing</div><p>Angular writing shows someone who is rational above all 
        			else; emotionally detached, analytical, and objective. It's usually the writing of engineers, 
       			scientists, and people who are tough-minded and think about issues without troubling over 
        			emotions. These writers strip down their handwriting and don't care about the form of the
        			letters that much. They abbreviate the letters. They tend to be black-or-white thinkers 
        			- an "all or nothing" approach.</p></div>	
			<div class="g-101-item" id="g-101-lsl"><div>Left slant</div><p>Writing that leans to the left reveals a writer even 
       			more strongly reserved than one whose writing shows an upright slant. This person is usually 
        			introverted, reserved and highly private.</p></div>
			<div class="g-101-item" id="g-101-tlw"><div>Tiny little writing</div><p>Very small writing expresses introversion. It is the 
       			writing of somebody with strong concentration skills, increased intelligence (concentration 
        			always improves intelligence) and humility. If the writing is extremely narrow or tight-looking,
        			it might indicate some type of repression or inhibition. Some librarians write like this.</p></div>		
		</div> <!-- end row 2 -->
       	<div>
			<div class="g-101-item" id="g-101-ps"><div>Printscript</div><p>Printscript occurs when the writer sometimes prints
        			and sometimes writes in cursive. This writing style indicates the writer who is both 
        			intuitive and logical, and also indicates writing ability. When I assess journalists, most 
        			use print script.</p></div>	
			<div class="g-101-item" id="g-101-lt"><div>Looks typewritten/perfectly printed</div><p>Sometimes we see a handwriting that is fairly rigid 
        			and perfectionist, that looks like it came right out of the typewriter. These people are 
       			 demonstrating through their handwriting a repressive nature, which has them potentially 
        			suffering from compulsive symptoms and otherwise over-focused on 'how it will look to others'. 
        			These are the perfectionists. They love to do things right, and tend to be very control-oriented
        			and have difficulty being spontaneous. They tend to suffer from muscular tension.</p></div>		
		<div class="g-101-item" id="g-101-ss"><div>Small spaces</div><p>Words that are spaced too close together, separated by 
        			spaces of less than one character width, may reveal an individual who is needy. This is the 
        			writing of a person who craves extra close contact with others.</p></div>
		
		</div> <!-- end row 3 -->
       	<div>
			<div class="g-101-item" id="g-101-ls"><div>Large spaces</div><p>Normally there should be only one character width
        			between one word and the next; more than this implies somebody who has difficulty bridging the
       			gap between themselves and others, socially and emotionally. This person is emotionally 
        			detached from their own feelings and those of others.</p></div>
  			<div class="g-101-item" id="g-101-s"><div>Speed</div><p>How fast is the handwriting written? Carefully formed 
        			letters, and strong attention to diacritics and other details indicate a writer who prefers 
        			to be slow and thorough. Messy writing which races across the page indicates the individual 
        			who works at a fast tempo. Less interested in detail, they prefer to be busy, dynamic, 
        			multitasking.they like lots going on.</p></div>
			<div class="g-101-item" id="g-101-c"><div>Crashing</div><p>For some writers, the lower zone of one line 
        			intermingles with the upper zone of the line below.the bottom loop of a cursive .f. would hit 
        			the top of a cursive .h. in the line below it. This is called crashing, and is indicative of 
        			an individual who daydreams, often watching an internal TV.</p></div>
		</div> <!-- end row 4 -->
    		</div> <!-- end mandatory div -->
	</div> <!-- end slider -->
	<div class="next">></div>
</div></div></div><!-- end graphology 101 -->

<hr />

<div id="writing-samples-div">
<div id="writing-sample-intro">
	<a class="border color-bg" href="http://dailybruin.com/images/features/prime-graphology/handwriting-analysis.pdf"><i class="icon-file"></i> Print PDF with complete analysis</a>
     	<h4>Annette Poizner is a Toronto-based graphologist with 20 years of experience, first sparked by her studies with a therapist who studied handwriting in Israel. Poizner now uses graphology in conjunction with therapy to help her clients. The Daily Bruin asked Poizner to analyze handwriting samples for Alessandra Daskalakis, the author of this article, and three famous UCLA alumni: John Wooden, Jim Morrison and Carol Burnett.</h4><h4>  Select a sample to see what each person's handwriting reveals about them.</h4>
</div>

<div>
    <a class="sample-previews" data-id="writing-jw" href="#">
        <div id="jw-preview" class="preview-div"></div>
    </a> 
    <a class="sample-previews" data-id="writing-jm" href="#">
        <div id="jm-preview" class="preview-div"></div>
    </a>
    <a class="sample-previews" data-id="writing-ad" href="#">
        <div id ="ad-preview" class="preview-div"></div>
    </a>
    <a class="sample-previews" data-id="writing-cb" href="#">
        <div id ="cb-preview" class="preview-div"></div>
    </a>
</div>

<div id="arrow-container">
	<div id="jw-preview-arrow" class="writing-samples writing-jw"></div>
	<div id="jm-preview-arrow" class="writing-samples writing-jm"></div>
	<div id="ad-preview-arrow" class="writing-samples writing-ad"></div>
	<div id="cb-preview-arrow" class="writing-samples writing-cb"></div>
</div>

<!-- john wooden -->
<div class="writing-samples writing-jw ws-container">
	<h2><img id="jw-title" src="/images/features/prime-graphology/John_wooden.png"/> <span class="normal" >| traditional values</span></h2>
	<div class="left-div" id="left-div-jw">
		<p>This writer uses something called "copybook script." In elementary school, children are taught a classic copybook style script. Many kids will ultimately deviate from that copybook script and create an idiosyncratic type of handwriting. Some writers, though, are traditionalists. They stay true and loyal to the copybook script they learned in school, making very few adjustments. </p>
		<p>This writing style reveals the individual who is conservative, disciplined, community-minded; somebody who heralds the importance of classic values. The copybook writer takes very seriously the societal message that has come to him about what is good and right. He re-creates the "good and right" handwriting he learned in elementary school. He will similarly align with wholesome values that come from earlier generations. He possesses the quality of loyalty to causes and people. His priority is to be responsible.</p>
		<p>Copybook writers often become teachers and we see many teachers with this style of writing. It's as if this individual happily internalized the traditional teachings of their society and having done so successfully, wanted nothing other than to be a mouthpiece for the same traditional values.</p>
		<i>John Wooden is a former UCLA basketball coach. Mouse over the image to see what Poizner has to say.</i>
	</div> <!-- end left div -->

       <div id="jw-container" class="right-div">
            <div class="bg-image main-bg-image border"></div>
            <div class="hl-region bg-image border hl-region-large" id="jw-capital" rel="popover" data-placement="top" data-content="His capitals are fairly elaborate and sometimes even decorative and formal. This is an expression of dignity. Capital letters represent first impressions. If a person believes it's important to make a good first impression they do so by putting a bit of a bow tie on their capital letter. Something a little dressier versus something plain."></div>
            <div class="hl-region bg-image border" id="jw-t" rel="popover" data-placement="left" data-content="Retracing is interpreted as a sign of privacy or discretion around personal matters. And that is consistent with the copybook script writer, somebody who has a sense of grace, privacy, discretion, dignity, a sense of what is appropriate for public consumption versus what is personal."></div>
            <div class="hl-region bg-image border" id="jw-oo" rel="popover" data-content="This writer often does not seal the letter o. When these little middle zone letters are left open at the top graphologists often interpret somebody who likes to communicate. So if he was a very private man, he was also engaged with others and enjoyed sharing ideas." data-original-title="Unsealed letter o"></div>	
	     <button class="hl-btn btn"><i class="icon-eye-open"></i> View all highlights</button>
</div> <!-- end right div -->

	<div style="clear:both;" /></div>
</div> <!-- end john wooden div -->

<!-- jim morrison -->
<div class="writing-samples writing-jm ws-container">
	<h2><img src="/images/features/prime-graphology/Jim_morrison.png" id="jm-title" /><span class="normal">| immaturity</span></h2>
	<div id="jm-container" class="right-div">
            <div class="main-bg-image bg-image border"></div>
            <div class="hl-region bg-image border" id="jm-s" rel="popover" data-placement="top" data-content="He does not seal the bottom of the cursive letter 's': a sign of somebody who lets himself off the hook so he doesn't have to finish what he starts." data-original-title="Unsealed cursive s"></div>
            <div class="hl-region hl-region-name bg-image border" id="jm-sig" rel="popover" data-placement="left" data-content="The greater handwriting sample shows that on a day-to-day level he was experiencing moodiness, confusion, rigidity, and an overall lack of discipline. But that signature shows his motivation to pull it together so he could come off as sophisticated and polished in the public arena."></div>
            <div class="hl-region bg-image border" id="jm-t" rel="popover" data-content="Normally, a person moves the pen upward, to reach the height of the t and then brings the stroke down. Sometimes this is done creating a bit of a loop. After all, why does it have to be done perfectly so that the upstroke and the downstroke are perfectly retraced one on top the other? The writer who does retraces these two strokes so that they cover each other perfectly shows a need to be highly private."></div>
            <div class="hl-region bg-image border" id="jm-t-slash" rel="popover" data-content="He slashes sharp strokes to cross his t's. Quite sharp. Little daggers. He would have a well of anger that would be expressed through irritation, resentment but also anger that could find expression in self-loathing."></div>
            <div class="hl-region bg-image border" id="jm-ibe" rel="popover" data-placement="left" data-content="The last three letters of that word are so nicely joined to each other showing a trait that we call 'simplification.'"></div>
            <button class="hl-btn btn"><i class="icon-eye-open"></i> View all highlights</button>
        </div>
	
	<p >In this handwriting, the overall impression is that it was written by a child. Childish-looking handwriting, unless it is specifically the result of a physical problem like visual, cognitive or muscular difficulties, would suggest immaturity. This writing looks like it was written by a child given irregularities like spacing that varies tremendously, poorly formed letters or an overall messiness that implies inner chaos. We anticipate a writer who is impulsive, needy and moody.</p>
	<p>Note the difference between the writing style of the sample and the writing style of the signature. The signature looks rather sophisticated. It doesn't look like it was written by a child. In other words, when it comes to expressing his image (represented by his signature) he was able to radiate an image that didn't necessarily imply the level of neediness he was experiencing.</p>
	<p>Notice that in his signature he truncates his first name, his private name representing his private/personal self, by just writing the first initial of his first name. In doing so, the focus is on his last name, his professional self/identity. So his preference would be to maintain some degree of privacy, trying to be discreet about the degree to which he suffered from moodiness, confusion, rigidity and an overall lack of discipline.</p>
	<i>Jim Morrison is an American singer, poet and UCLA alumnus. Mouse over the image to see what Poizner has to say.</i>
</div> <!-- end jim morrison -->

<!-- alessandra -->
<div class="writing-samples writing-ad ws-container">
	<h2><img src="/images/features/prime-graphology/alessandra.png" id="ad-title"><span class="normal">| author</span></h2>
	<div class ="left-div" id="left-div-ad">
		<p>Regarding the first line of text of the story: this writer pens her script with a relatively straight baseline even though she is writing on a piece of paper with out lines. A straight baseline implies somebody with discipline and a good work ethic. Somebody with good follow-through.</p>
		<p>We discussed that there are three zones to the handwriting, upper, middle and lower. All of these are represented in her writing so that overall she is a balanced person with skills in the zone of thinking, social relating and doing. Still, there is a nice developed middle zone which shows a primary interest in that which is human, an interest in connecting with others. The middle zone makes a person a people-oriented person. The kind of person who opens up the newspaper and reads the life section first.</p>
		<p>Mostly this writer uses a slant that we call the upright slant. The right slant writer is more engaged emotionally with others whereas the upright slant writer is more objective, poised, "head over heart" type. Not gushy. Not huggy. A little more formal, a little more distant. (More formal, like the girl in the story who sets out with the cartouche necklace around her neck... So graceful!)</p>
		<i>Daskalakis is a third-year comparative literature and biology student. Mouse over the image to see what Poizner has to say about her bedtime story.</i>

	</div> <!-- end left div -->

       <div id="ad-container" class="right-div">
            <div class="main-bg-image bg-image border"></div>
                <div class="hl-region bg-image border" id="ad-adventure" rel="popover" data-content="Notice that some letters are connected and others are disconnected or printed. Writers who do this are using the writing style called printscript and demonstrate good logical thinking and good intuition"></div>
                <div class="hl-region hl-region-short border bg-image" id="ad-your" rel="popover" data-placement="left" data-content="This writer brings the lower zone stroke of her y to an abrupt stop instead of trailing off into a loop and bringing it back to the baseline. She often does these abrupt strokes to finish off a y . It's more comfortable to loop around and allow that stroke to gradually shift directions. Somebody who stops on a dime like that is somebody with a lot of willpower."></div>
                <div class="hl-region hl-region-short border bg-image" id="ad-space" data-placement="top" rel="popover" data-content="Normally, there should be one character width between words. This writer has a wider space between her words… Almost 2 character widths. This is somebody who has a difficult time bridging the gap between self and other, representing trust issues. Still, as mentioned above, her primary zone of interest is the social and emotional zone. So as she grows and matures, she will get past this distrust and find more ways to connect intimately, on an emotional level."></div>
                 <div class="hl-region hl-region-short border bg-image" id="ad-neck" rel="popover" data-placement="left" data-content="Notice the angles in the first letter of each of these words. Angles represent analytical thinking skills." data-original-title="Angles"></div>
                <button class="hl-btn btn"><i class="icon-eye-open"></i> View all highlights</button>
       </div> <!-- end right div -->
	<div style="clear:both;" /></div>
</div> <!-- end alessandra div -->

<!-- carol burnett -->
<div class="writing-samples writing-cb ws-container">
	<h2><img src="/images/features/prime-graphology/Carol_Burnett.png" id="cb-title" /><span class="normal">| multi-talented</span></h2>       
	<div id="cb-container" class="right-div">
       	<div class="main-bg-image bg-image border"></div>
               <div class="hl-region bg-image border" id="cb-dw" rel="popover" data-placement="left" data-content="The writing is also print script which means she sometimes connects letters and sometimes leaves them disconnected. Print script is a sign of somebody with literary ability. Somebody who loves to write and who is a good writer."></div>
               <div class="hl-region bg-image border" id="cb-m" rel="popover" data-placement="top" data-content="Sharpness is a function of analytical thinking and also enough access to aggressive energy to push projects through."></div>
               <div class="hl-region bg-image border" id="cb-simp" data-placement="left" data-content="A simplified handwriting is one where simplified strokes are used to connect letters to each other and in so doing legibility is maintained but speed of writing is also facilitated."></div>
               <div class="hl-region bg-image border hl-region-large" id="cb-b" rel="popover" data-placement="bottom" data-content="She encapsulates her professional name and encloses it in the first letter. That draws extra attention to that name, the part of her identity that speaks to her professional life. So there's an intensity around that name that comes through because of that special treatment of that name."></div>
      	        <div class="hl-region bg-image border" id="cb-arcade" rel="popover" data-content="Arch type of structure associates with people who have a strong grace and dignity and even formality about them. There's a commitment to privacy and discretion."></div>
		<button class="hl-btn btn"><i class="icon-eye-open"></i> View all highlights</button>
	</div>
	<p>Great sensitivity is indicated by the light pressure of her written line (as compared to a darker imprint penned by somebody who really digs into the page with the pen) and also indicated by a written line that is fine and delicate looking.</p>
	<p> We also find something called simplification; strokes connect letters to each other in a way that is efficient so that the writer takes shortcuts, deleting extraneous strokes, while also maintaining legibility e.g. The writer crosses the first letter of the word "think" and attaches the cross stroke to the following letter, h. Simplification indicates a writer who is both creative and possesses above-average intelligence as well as somebody who has good physical coordination.</p>
	<p> Note how some letters are connected to each other while others are printed/disconnected. That "printscript" indicates the individual with writing skill. We also notice a sharpness in this writing. Look at the sharp angles in the letters m and n. Angularity indicates strong analytical thinking and the writer who can aggressively push projects through. Good organizational skills are indicated by the way she spaces the sample; clear spacing, well-organized, text is written on a straight line. And note that the handwriting is not particularly embellished. Rather humble or modest looking. A root quality of humility, at her core.</p>
	<i>Carol Burnett is an American actress, comedian and UCLA alumna. Mouse over the image to see what Poizner has to say.</i>
</div> <!-- end carol burnett -->
</div> <!-- end writing-samples-div -->
<hr />



<div class="row-fluid">
	<div class="center span12" id="footer">Page created by Connie Chiou and Jeffrey Wang. Handwritten title illustrations by Maddie Isaacs.</div>
</div>

</div> <!-- end div#prime-graphology -->

</div> <!-- end row-fluid -->

<?php get_footer(); ?>
