<?php/*
Template Name: Graphology
*/ ?>
<?php get_header(); ?>

<script type="text/javascript">
$(function(){

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
		if( currPage == 4 ) {
			$("#next").addClass('disabled');
			$("#next a").css('pointer-events', 'none');
		}
	}
       else {
		currPage = parseInt(id);
		$("#" + id).addClass('disabled');
		$("#" + id + " a").css('pointer-events', 'none');
		$("#story-page-" + id).fadeIn(200);

		if( parseInt( id ) == 4 ) {
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
  $(".jw-stem").hover(
  	function(){
       	$(".jw-stem").css('opacity','1');
       },function(){
		$(".jw-stem").css('opacity','0');
  });

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
});
</script>

<style type="text/css">
/* basic styling */
#prime-graphology #container {
    box-shadow: 0 0 15px #ccc; /* all latest browser */
   -moz-box-shadow: 0 0 15px #ccc; /* Firefox older version*/
   -webkit-box-shadow: 0 0 10px #ccc;
}
#prime-graphology .border {
	border: 1px solid #CDCDCD;
}
#prime-graphology .normal {
	font-weight: normal;
}
#prime-graphology .medium {
	font-size: medium;
}
#prime-graphology .font {
	font-family: Georgia, serif;
}
#prime-graphology .bold {
       font-weight: bold;
}
#prime-graphology hr {
	border: 1px dashed #ccc;
}
#prime-graphology .padded-div {
	padding: 20px 20px 0px 20px;
}
#prime-graphology div.center {
	text-align: center; 
}
/* highlighting and popovers */
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
       height:440px;
       width:435px;
}
#prime-graphology #jw-container .bg-image {      
	background-image:url('/images/features/prime-graphology/jw-writing-sample.jpg');
	background-size: 435px 430px;
       height:430px;
       width:435px;
}
#prime-graphology #jw-container div.hl-region {
       height:45px;
       width:45px;
       border-radius: 45px;
}
#prime-graphology #jw-container div.hl-region-large {
	height:75px;
	width:70px;
	border-radius: 20px;
}
#prime-graphology #jw-d-stem {
	top:205px;
	left:270px;
	background-position: -270px -205px;
}
#prime-graphology #jw-t-stem {
	top:130px;
	left:137px;
	background-position: -137px -130px;
}
#prime-graphology #jw-h-stem {
	top:115px;
	left:265px;
	background-position: -265px -115px;
}
#prime-graphology #jw-o-seal {
	top:230px;
	left:230px;
	background-position: -230px -230px;
}
#prime-graphology #jw-capital {
	top:30px;
	left:162px;
	background-position: -162px -30px;
}
#prime-graphology #jm-container {
       height:440px;
       width: 700px;
	margin: 0px 15px 15px 15px;
}
#prime-graphology #jm-container .bg-image {
       background-image:url('/images/features/prime-graphology/jm-writing-sample-small.jpg');
       background-size: 700px 420px;
       height: 420px;
       width: 700px;
}
#prime-graphology #jm-container div.hl-region {
       height:45px;
       width:45px;
       border-radius: 45px;
}
#prime-graphology #jm-container div.hl-region-name {
       height:67px;
       width:200px;
       border-radius: 67px;
}
#prime-graphology #jm-s-curs {
	top:65px;
	left:550px;
	background-position: -550px -65px;
}
#prime-graphology #jm-name {
	top:5px;
	left:220px;
	background-position: -220px -5px;
}
#prime-graphology #jm-t-stem {
	top:185px;
	left:430px;
	background-position: -430px -185px;
}
#prime-graphology #jm-retrace {
	top:143px;
	left:347px;
	background-position: -347px -143px;
}
#prime-graphology #jm-tribe{
	top:143px;
	left:188px;
	background-position: -188px -143px;
}
#prime-graphology #jm-of {
	top:72px;
	left:484px;
	background-position: -484px -72px;
}
#prime-graphology #ad-container {
       height:610px;
       width:610px;
}
#prime-graphology .writing-sample-container {
       position: relative;
}
#prime-graphology #ad-container .bg-image {
       background-image: url('/images/features/prime-graphology/ad-writing-sample.jpg');
       background-size: 610px 610px;
	height:610px;
       width:610px;
}
#prime-graphology #ad-container div.hl-region {
	height:25px;
	width:100px;
	border-radius: 25px;
}
#prime-graphology #ad-container div.hl-region-short {
	width:50px;
}
#prime-graphology #ad-adventure {
	top:165px;
      	left:237px;
       background-position: -237px -165px;
}
#prime-graphology #ad-your {
	top:500px;
	left:313px;
	background-position: -313px -500px;
}
#prime-graphology #ad-ac-space {
	top:145px;
	left:102px;
	background-position: -102px -145px;
}
#prime-graphology #ad-overhead {
	top:430px;
	left:207px;
	background-position: -207px -430px;
}
#prime-graphology #ad-neck {
	top:262px;
	left:128px;
	background-position: -128px -262px;
}
#prime-graphology #ad-fort {
	top:217px;
	left:72px;
	background-position: -72px -217px;
}
#prime-graphology #cb-container {
       height: 280px;
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
#prime-graphology #cb-container div.hl-region-oval {
       height:50px;
       width:25px;
       border-radius: 50px;
}
#prime-graphology #cb-of {
	top:28px;
	left:363px;
	background-position: -363px -28px;
}
#prime-graphology #cb-think {
	top:11px;
	left:260px;
	background-position: -260px -11px;
}
#prime-graphology #cb-handwriting {
	top:73px;
	left:96px;
	background-position: -96px -73px;
}
#prime-graphology #cb-m-sharp {
	top:18px;
	left:412px;
 	background-position: -412px -18px;
}
#prime-graphology #cb-n-sharp {
	top:20px;
	left:300px;
	background-position: -300px -20px;
    }
#prime-graphology #cb-name{
	top:145px;
	left:110px;
	background-position: -110px -145px;
}

/* writing samples preview */
#prime-graphology #writing-sample-intro {
	margin: 30px 20px 0px 20px;
}
#prime-graphology #writing-sample-intro span {
   float:right;
}
#prime-graphology .preview-div {
	height: 225px;
    	width: 245px;
	display: block;
       float:left;
    	margin: 5px 5px 0px 5px;
    	background-position: center;
    	opacity: 0.85;
}
#prime-graphology .preview-div:hover {
       opacity: 1;

}
#prime-graphology #jw-preview {
       background-image: url('/images/features/prime-graphology/jw-writing-sample.jpg');
	border: 15px #FABEBF solid;
	margin-left: 15px;
}
#prime-graphology #jm-preview {
       background-image: url('/images/features/prime-graphology/jm-writing-sample.jpg');
	    	border: 15px #f1cd96 solid;
}
#prime-graphology #ad-preview {
	background-image: url('/images/features/prime-graphology/ad-writing-sample.jpg');
	border: 15px #bec9fa solid;
}
#prime-graphology #cb-preview {
       background-image: url('/images/features/prime-graphology/cb-writing-sample.jpg');
       background-size: 400px 400px;
       background-position: 200px 10px;
	border: 15px #b7f0cb solid;
}
#prime-graphology #writing-samples-container {
       padding: 10px;
}
#prime-graphology .sample-previews {
      font-size: 22px;
      display: inline-block;    
}
#prime-graphology #arrow-container {
	margin-top: -5px;
}
#prime-graphology #arrow-container div {
	opacity: 0.9;
	width:0px;
	height: 0px;
	border-left: 20px solid transparent;
	border-right: 20px solid transparent;
}
#prime-graphology #jw-preview-arrow {
	border-top: 20px solid #FABEBF;
       margin-left: 130px;
}
#prime-graphology #jm-preview-arrow {
	border-top: 20px solid #f1cd96;
       margin-left: 420px;
}
#prime-graphology #ad-preview-arrow {
	border-top: 20px solid #bec9fa;
       margin-left: 710px;
}
#prime-graphology #cb-preview-arrow {
	border-top: 20px solid #b7f0cb;
       margin-left: 995px;
}

/* writing samples */
#prime-graphology .two-col-div {
	padding: 20px;
}
#prime-graphology .left-div {
	float: left;
}
#prime-graphology .right-div {
   	float:right;
}
#prime-graphology #left-div-jw {
	width: 650px;
}
#prime-graphology #left-div-ad {
	width: 480px;
	height: 660px;
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

/* feature story */
#prime-graphology #header-div {
	text-align: center;
}
#prime-graphology figcaption {
	margin-left: 100px;
}
#prime-graphology #feature-story .story-page img {
	float: left; 
	width: 300px; 
	height: 300px; 
	margin: 0px 20px 20px 20px;
} 
#prime-graphology .pagination.center {
	margin-left: 30%;
}

/* annette */
#prime-graphology #annette {
 	padding: 20px 20px 20px 20px;
}
#prime-graphology #annette-img {
	margin: 0px 20px 0px 20px; 
	float: right; 
	width: 500px; 
	height: 300px;
}
#prime-graphology #annette-title {
	width: 400px;
	margin-top:-15px;
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
#prime-graphology #g-101 div.nav-wrapper {
    float: left;
}
#prime-graphology div.nav-wrapper .g-101-item {
    border: 3px solid #E6E6E6;
    border-radius: 5px;
    margin: 3px;
    padding: 5px 10px;
    width: 155px;  
    float: left;    
}
#prime-graphology #g-101-title {
       color: #78E29D;
	font-size: 5em;	
}
#prime-graphology #g-101-intro {
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: medium;
}
#prime-graphology .prev, #prime-graphology .next {
	float: left;
	padding: 0px;
	margin: 100px 5px 5px 5px;
	width: 50px;
	cursor: pointer;
	font-size: 5em;
	color: #78E29D;
}
#prime-graphology .prev:hover, #prime-graphology .next:hover {
	font-weight: bold;
}
#prime-graphology .g-101-item div {
	font-family: "Georgia",serif;
	font-size: 1.4em;
	border-bottom: 3px dashed #f1cd96;
	display:inline-block;
	margin:10px 10px 15px 10px;
	padding: 0px;
}
#prime-graphology #g-101-us {
	width: 275px;
	height: 210px;
}
#prime-graphology #g-101-lsl {
	width: 190px;
	height: 210px;
}
#prime-graphology #g-101-c {
	width: 265px;
	height: 210px;
}
#prime-graphology #g-101-ss {
	width: 190px;
	height: 210px;
}
#prime-graphology #g-101-ls {
	width: 190px;
	height: 210px;
}
#prime-graphology div#footer {
	text-align: center;
	margin: 10px;
}
</style>
<div class="row-fluid">
<div class="span12 border" id="container">

<!-- feature story -->
<div class="padded-div" id="feature-story">
	<div class="row-fluid">
	<div class="span7">
		<div id="header-div">
			<img width="430px" src="/img/images/features/prime-graphology/title.jpg"/>
			<div style="margin-top: -30px; margin-bottom: 15px;">
			<img width="80px" src="/img/images/features/prime-graphology/by.jpg" />
			<img width="420px" src="/img/images/features/prime-graphology/author.jpg" />
		</div>
	</div>

	</div>
	<div class="span5"><?php get_template_part('ad','side'); ?>
		<div style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #FAFAFA; padding: 20px; margin: 15px; border-radius: 5px; border: 1px solid #ccc;" id="feature-story-side">
		<img src="/img/images/features/prime-graphology/prime.png" width="200px;" style="float: left;  margin-right: 10px;"/>This is a feature story from Prime magazine. Pick up a copy of Prime's Spring 2013 issue or visit <a href="http://www.dailybruin.com/category/prime">Prime online</a> for more.(?)</div>
	</div>
	</div>
	<a name="story"></a>
	<div class="story-page" id="story-page-1">
		<p>Someone once told me Abraham Lincoln massaged his hands before signing the Emancipation Proclamation so historians in the future could not claim his signature manifested hesitancy. Whether it's true or not, I never forgot that anecdote.</p>
		<p>And when I walked through the National Archives on my eighth grade field trip and saw John Hancock's signature, still bold despite the passing of time, I didn't forget that either. The giant "John Hancock" along with the 55 other signatures of the Founding Fathers, were the closest I could get to meeting the men who bravely defied the British crown to establish our nation and who, up until that point, had only been as real as characters in a novel to me- well known, sure, but out of reach.</p>
			<p>Then I curiously glanced at my sloppy signature, which changes every time I sign it, and it didn't seem to tell me much about myself. And though I'll never sign onto anything as important as the Declaration of Independence, I wonder what people will think about me when they see my signature on a document. Years from now, will a kid scrutinize the shape and of the "a" and "l" in Alessandra? Or will she draw some conclusion from the prominent "dask" and near absence of "alakis" in Daskalakis? </p> 
		<p>Overanalyzing everything is a tendency of mine, and I can't help but think about these things. An example: not a med student in scrubs goes by without me internally cringing at my grade in electricity and magnetism. I can't help but apply this same over-analysis to my signature, so I decided to talk to a graphologist.</p>
		<p>Graphology, for those who don't know, is the study of handwriting and what it says about a person. Some employers hire graphologists to analyze potential future employees and screen them for a position. Other graphologists testify in court for handwriting verification. </p> 
		<figure><img src="/img/images/features/prime-graphology/story-img.jpg" />
		<figcaption><i>illustration by Bijun Liang / Daily Bruin</i></figcaption>
		</figure>
		<p> "Every envelope I get gives me an impression," said Lena Rivkin, a graphologist based in Los Angeles. </p>
		<p>Rivkin, who practices graphology professionally in addition to being an artist, said signatures are interesting because they are like a public persona or a cover of a book. </p>
		<p> "(Graphology) is a very honest form of communication," Rivkin said. "Handwriting is body language on paper."</p>
		<p>Recently I was introduced to a graphologist, Annette Poizner, a graphologist who uses her work in conjunction with therapy to help clients open up and learn about themselves and how they can move forward from conflicts or concerns in their lives. For instance, if somebody wants to quit his or her job and see what they should consider pursuing next, they might talk to Poizner.</p>
		<p>She reached out to me for a story idea, and I told her I was interested in writing a first-hand account. </p>
		<p>Her philosophy is one of projective psychology, which is the discipline that believes a person's innermost thoughts manifest themselves in everything they do, even his or her writing.</p>
		<p>But is it true? I plunged myself into the deep of Poizner's process to find out.</p>	
	</div> <!-- end page one -->

	<div class="story-page" id="story-page-2">
		<i>Page 2 of 4</i><br /><br />
		<p>To start she had me sign and print my name and date of birth. She then asked me to describe my 10 earliest memories and describe the most vivid moments and feelings of each one. </p>
		<p>Thinking of them wasn't very hard, but I didn't like to imagine what tripping on the sprinkler-head in pre-school would say about my coordination in life, and what consistently losing to the sumo wrestler in Street Fighter II in a fit of rage the night my sister was born would say about my priorities as a child (to be fair, I didn't really understand that my parents went to the hospital so my mom could give birth to my sister). </p>
		<p>Another part of the process was to write a quick bedtime story on white, unlined paper. Unsure of what to do, I borrowed from my favorite stories, threw in a little bit of autobiography and ended up with a story about a little girl in a periwinkle dress who hops over the fence and follows the creek by the elementary school until she ends up meeting some of her favorite fictional characters. </p>
		<p>That seemed like a lot, and a part of me couldn't help but feel like I was giving her all the answers, but I was willing to go along with the ride. When the time came for the interview, she wove together her interpretation of my personality. </p>
		<p>Poizner said she firmly believes that graphology cannot stand alone. For her, it is a complement to psychology because, in her interpretation, the two are so closely linked. Together the two studies form a complete understanding of a person. </p>
		<p>After talking to me about my life, Poizner took a look at my handwriting and started to tell me what she saw. </p>
		<p>We first took a look the way I formed my words and letters. She described what I consider my sloppy scrawl as organized and "print-script": slanted and deliberately formed. My words are evenly spaced, and if one was to imagine the paper was lined, my writing is fairly straight. All together this told Poizner that I feel and approach my writing as a personal strength. </p>
		<p>My writing is also categorized as a standard "gifted child" type. I did not want to be wooed by flattery. But then, without talking about my memories she told me I was torn between two things. That's where I started to listen a little closer. As the comparative literature and biology pre-med who can't seem to let go of the newspaper, it was the first time I really agreed during the process.  </p>
		<p>She elaborated that the way I connected my words was somewhat unconventional, but showed my desire and affinity to communicate with people in order to work around obstacles. That too, seemed pretty accurate. </p>
		<p>Later we discussed my memories and the way in which my writing did not fully extend across the white page. She assessed that this, in conjunction with my memories, might mean I am at times unsure of myself and eager to "return home," or to the left side of the page. </p>
		<p>Poizner, who uses her background in traditional Chinese medicine and Jewish influences in her work, said she thought I had too much yin and should embrace more yang through expression of anger. She added that I should embrace my "go-getter" attitude and believe more in my ability to accomplish my goals and be less maternal. </p>
		<p>Here I disagreed. I have always felt I get too angry, too easily. But then again, those who know me also know how much I hate yelling. So was she on to something? I mentioned some of this and we talked about how perhaps I feared becoming angry and should allow myself to release my frustration more often in more productive ways. She suggested kickboxing, which I will no doubt have too little time to pursue. But still, interesting. </p>
		<p>As far as her statement about me being too maternal, that also has multiple interpretations. I find myself at a point in my life where I have many things I want to accomplish, and I consider myself a proactive, independent person. However, if my family called me right now and told me they needed me to come home, I know that I would. </p>
	</div> <!-- end page two -->

	<div class="story-page" id="story-page-3">
	<i>Page 3 of 4</i><br /><br />
		<p>All in all my experience with graphology was interesting and enjoyable. I learned more about myself, and I appreciated how we used my handwriting as a jumping point to start a dialogue. I think some things were a little bit of a stretch, but certain points were surprisingly accurate. Ultimately, I walked away with respect for Poizner and her ability to take handwriting and confidently work with someone she doesn't even know to help them better understand themselves. I can see, though, how some people might be skeptical. After all, Poizner and I had a discussion about my handwriting, and isn't the handwriting supposed to speak for itself? To Poizner, this is a misconception. </p>
		<p>Jennifer Mnookin is skeptical about the effectiveness of graphology. Mnookin is vice dean and professor of law at the UCLA School of Law, and has written extensively on handwriting analysis and verification in the courtroom. </p>
		<p>Nonetheless, graphology is apparently quite popular in France, despite skepticism in the United States, showing an interesting cultural difference, Mnookin added. </p>
		<p>Mnookin said handwriting verification has been used routinely in the United States since the middle to late nineteenth century. But she added that she had never come across a case where handwriting experts testified on behalf of character based on handwriting analysis. </p>
		<p>In her experience, those graphologists and document examiners identify themselves differently. Document examiners, she said, pay close attention to the similarity in such details as letter formation, instead of assessing potential character traits based on writing styles. </p>
		<p>Some graphologists use their skills in court to recognize differences in handwriting as well. </p>
		<p>Mnookin added that in recent years handwriting verification has become controversial in courtrooms because of the uncertainty of valid empirical evidence. </p>
		<p>After talking to graphologists like Poizner and Rivkin, I understand that graphologists, too, understand the limitations of their trade. </p>
		<p> "I know what I can see and what I cannot see," Rivkin said. "People have layers; (they) are more complicated." </p>
		<p>Like learning a language, graphology is not easy, she said. </p>
		<p> "Let's say I was wrong about something. It's usually my fault," she said. "I just didn't put the puzzle together correctly." </p>
		<p>For this reason she said she exerts caution, mindful that she is dealing with real people and their feelings. She said she always tries to learn as much as she can about a person. </p>
		</div> <!-- end page three -->
	
	<div class="story-page" id="story-page-4">
	<i>Page 4 of 4</i><br />
	<br />
		<p>So what's my verdict? If I had a friend who was struggling with something and had a bad experience with therapists, I would tell them to give graphology a try. It's different, and if approached correctly it seems as though it could be helpful in identifying traits or starting discussions instead of aggressively fighting problems with questioning. </p>
		<p>I think graphology can be helpful. Poizner correctly identified my work ethic, my occasional hesitancy to trust and what I would want from a career from my handwriting. These are things we did not explicitly talk about in our session. Although I would feel uncomfortable making decisions, like employment, based on handwriting, I found myself surprised by Poizner's accuracy. </p>
		<p>So graphology, to me, and to people like Poizner, is a supplement to other information. </p>
		<p>As of yet we do not have time machines, so I'll never really get to know the historical figures I've read about or imagined I'd like to meet. But I'd like to think that we leave something more than ink behind when we commit to something or sign our name. </p>
		<p>As a journalist, I guess part of me likes the idea that our writing might tell our own story as much as it tells the story we are trying to share. And if it might be that we leave a piece of ourselves behind in the slope of our letters, I'll buy it. </p>
		<p> "Signatures are interesting, too, because they are a public persona, like the cover of a book. I find it fun to look at signatures to see how they differ from the writing," she said. "Every envelope I get gives me an impression." </p>
		<p> Rivkin has a collection of signatures she finds particularly interesting in a book. </p>
		<p> "(Graphology) is a very honest form of communication," Rivkin said. "Handwriting is body language on paper." </p>
		<p> And she said she acknowledges that there are boundaries with graphology. "I know what I can see and what I cannot see," she said. "People have layers; (they) are more complicated." </p>
		<p> Like learning a language, graphology is not easy, she said. </p>
		<p> "Let's say I was wrong about something. It's usually my fault," she said. "I just didn't put the puzzle together correctly." </p>
		<p> For this reason she said she exerts caution, mindful that she is dealing with real people and their feelings. She said she always tries to learn as much as she can about a person. </p>
		<i>Email Daskalakis at <a href="mailto:adaskalakis@media.ucla.edu">adaskalakis@media.ucla.edu.</a></i>
	</div> <!-- end page four -->

	<div class="pagination center">
  		<ul>
  	  	<li id="prev" class="disabled"><a style="pointer-events: none;" href="#feature-story" ><<</a></li>
  	 	<li id="1" class="disabled"><a style="pointer-events: none;" href="#feature-story" >1</a></li>
   		<li id="2"><a href="#story" >2</a></li>
   	 	<li id="3"><a href="#story">3</a></li>
  	 	<li id="4"><a href="#story" >4</a></li>
 	  	<li id="next"><a href="#story" >>></a></li>
 	 	</ul>
	</div>
	<div style="clear:both;" /></div>
</div>
<!-- end feature story -->

<hr />


<div id="writing-sample-intro">
     <h4 class="medium normal">Select a handwriting sample to
		read graphologist Annette Poizner's analysis on what it reveals about the author.(?)<span><a href="#"><i class="icon-file"></i> Print PDF with complete analysis(?)</span></a></h4>
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

<br id="space" />
<br class="writing-samples"/>

<!-- john wooden -->
<div class="writing-samples writing-jw two-col-div">
	<div class="left-div" id="left-div-jw">
		<h2><img id="jw-title" src="/img/images/features/prime-graphology/John_wooden.png""/> <span class="normal" >| traditional values</span></h2>
		<p>This writer uses something called "copybook script." In elementary school, children are taught a classic copybook style script. Many kids will ultimately deviate from that copybook script and create an idiosyncratic type of handwriting. Some writers, though, are traditionalists. They stay true and loyal to the copybook script they learned in school, making very few adjustments. </p>
		<p>This writing style reveals the individual who is conservative, disciplined, community-minded; somebody who heralds the importance of classic values. The copybook writer takes very seriously the societal message that has come to him about what is good and right. He re-creates the "good and right" handwriting he learned in elementary school. He will similarly align with wholesome values that come from earlier generations. He possesses the quality of loyalty to causes and people. His priority is to be responsible.</p>
		<p>Copybook writers often become teachers and we see many teachers with this style of writing. It's as if this individual happily internalized the traditional teachings of their society and having done so successfully, wanted nothing other than to be a mouthpiece for the same traditional values.</p>
		<i>John Wooden is a former UCLA basketball coach. Mouse over the image to learn more character traits revealed by his handwriting.(?)</i>
	</div> <!-- end left div -->

       <div id="jw-container" class=" right-div writing-sample-container">
            <div class="bg-image main-bg-image border"></div>
            <div class="hl-region bg-image jw-stem border" id="jw-d-stem" rel="popover" data-content="asdfd" data-title="Adsfsd">
		</div>
            <div class="hl-region hl-region-large bg-image border" id="jw-capital" rel="popover" data-placement="top" data-content="content" data-original-title="Capital letters"></div>
            <div class="hl-region bg-image jw-stem border" id="jw-t-stem"></div>
            <div class="hl-region bg-image jw-stem border" id="jw-h-stem"></div>
            <div class="hl-region bg-image border" id="jw-o-seal" rel="popover" data-content="Note that this writer often does not seal the letter o. When these little middle zone letters are left open at the top graphologists often interpret somebody who likes to communicate. So if he was a very private man, he was also engaged with others and enjoyed sharing ideas." data-original-title="Unsealed letter o"></div>	
	     <button class="hl-btn btn"><i class="icon-eye-open"></i> Hover to view all highlights(?)</button>
</div> <!-- end right div -->

	<div style="clear:both;" /></div>
</div> <!-- end john wooden div -->

<!-- jim morrison -->
<div class="writing-samples writing-jm two-col-div">
	<h2><img src="/img/images/features/prime-graphology/Jim_morrison.png" id="jm-title" /><span class="normal">| immaturity</span></h2>
	<div id="jm-container" class="right-div writing-sample-container">
            <div class="main-bg-image bg-image border"></div>
            <div class="hl-region bg-image border" id="jm-s-curs" rel="popover" data-content="a sign of somebody who lets himself off the hook so he doesn't have to finish what he starts" data-original-title="Unsealed cursive s"></div>
            <div class="hl-region hl-region-name bg-image border" id="jm-name" rel="popover" data-content="His impulse, when he presents, is to maintain privacy about his personal self and pull it together when it comes to presentation in the public domain. Yet, the greater handwriting sample shows that on a day-to-day level he was experiencing moodiness, confusion, rigidity, and an overall lack of discipline." data-original-title="Sophisticated signature"></div>
            <div class="hl-region bg-image border" id="jm-t-stem" rel="popover" data-content="Notice the way he slashes sharp strokes to cross his t's. Quite sharp. Little daggers. He would have a well of anger that would be expressed through irritation, resentment but also anger that could find expression in self-loathing." data-original-title="Crossed 'T's"></div>
            <div class="hl-region bg-image border" id="jm-retrace" rel="popover" data-content="The writer who retraces these two strokes so that they cover each other perfectly shows a need for privacy" data-original-title="Retraced 't' stems"></div>
            <div class="hl-region bg-image border" id="jm-tribe" rel="popover" data-placement="left" data-content="The last three letters of that word are so nicely joined to each other showing a trait that we call 'simplification.'" data-original-title="Tribe"></div>
            <div class="hl-region bg-image border" id="jm-of" rel="popover" data-placement="top" data-content="Sometimes you can see little symbols in people's handwriting or signatures. Look at the phrase 'events of those'. See the little musical note embedded in that word of?" data-original-title="Of"></div>
	     <button class="hl-btn btn"><i class="icon-eye-open"></i> Hover to view all highlights(?)</button>
        </div>
	
	<p >In this handwriting, the overall impression is that it was written by a child. Childish-looking handwriting, unless it is specifically the result of a physical problem like visual, cognitive or muscular difficulties, would suggest immaturity. This writing looks like it was written by a child given irregularities like spacing that varies tremendously, poorly formed letters or an overall messiness that implies inner chaos. We anticipate a writer who is impulsive, needy and moody.</p>
	<p>Note the difference between the writing style of the sample and the writing style of the signature. The signature looks rather sophisticated. It doesn't look like it was written by a child. In other words, when it comes to expressing his image (represented by his signature) he was able to radiate an image that didn't necessarily imply the level of neediness he was experiencing.</p>
	<p>Notice that in his signature he truncates his first name, his private name representing his private/personal self, by just writing the first initial of his first name. In doing so, the focus is on his last name, his professional self/identity. So his preference would be to maintain some degree of privacy, trying to be discreet about the degree to which he suffered from moodiness, confusion, rigidity and an overall lack of discipline.</p>
	<i>Jim Morrison is an American singer and poet. Mouse over the image to blahblah(?)</i>
</div> <!-- end jim morrison -->

<!-- alessandra -->
<div class="writing-samples writing-ad two-col-div">
	<div class ="left-div" id="left-div-ad"><h2><img src="/img/images/features/prime-graphology/alessandra.png" id="ad-title"><span class="normal">| author</span></h2>
		<p>Regarding the first line of text of the story: this writer pens her script with a relatively straight baseline even though she
		is writing on a piece of paper with out lines. A straight baseline implies somebody with discipline and a good work ethic.
		Somebody with good follow-through.</p>
		<p><strong>adventure, line 8: </strong>notice that some letters are connected and others are disconnected or printed. Writers who do this are using the writing style called printscript and demonstrate good logical thinking (because people who connect one letter to the next show a logical tendency to follow from one idea to the next) and good intuition (represented by those spaces in between letters... Having a good intuitive hunch about when to connect letters to each other and when to let them be disconnected and allow a different inspiration to enter the process).</p>
		<p><strong>Organization of the page: </strong>lines are spaced pretty evenly and there is a bit of margin on the left and right and lower margin... Well organized... Neat. Good organizational skills.
		<p>We discussed that there are three zones to the handwriting, upper, middle and lower. All of these are represented in her writing so that overall she is a balanced person with skills in the zone of thinking, social relating and doing. Still, there is a nice developed middle zone which shows a primary interest in that which is human, an interest in connecting with others. The middle zone makes a person a people-oriented person. The kind of person who opens up the newspaper and reads the life section first.</p>
		<i>Allessandra is a third-year student at UCLA(?). Mouse over image to learn more blahbalhba.(?)</i>

	</div> <!-- end left div -->

       <div id="ad-container" class="right-div writing-sample-container">
            <div class="main-bg-image bg-image border"></div>
                <div class="hl-region bg-image" id="ad-adventure" rel="popover" data-content="Notice that some letters are connected and others are disconnected or printed. Writers who do this are using the writing style called printscript and demonstrate good logical thinking (because people who connect one letter to the next show a logical tendency to follow from one idea to the next) and good intuition (represented by those spaces in between letters)" data-original-title="Printscript"></div>
                <div class="hl-region hl-region-short bg-image" id="ad-your" rel="popover" data-content="Notice how this writer brings the lower zone stroke of her 'y' to an abrupt stop instead of trailing off into a loop and bringing it back to the baseline. She often does these abrupt strokes to finish off a 'y'. It's more comfortable to loop around and allow that stroke to gradually shift directions." data-original-title="Abrupt strokes"></div>
                <div class="hl-region hl-region-short bg-image" id="ad-ac-space" data-placement="top" rel="popover" data-content="Normally, there should be one character width between words. This writer has a wider space between her words - almost 2 character widths. Probably 1.5 character width, on average. This is somebody who has a difficult time bridging the gap between self and other, representing trust issues." data-original-title="Spacing"></div>
                <div class="hl-region bg-image" id="ad-overhead" rel="popover" data-content="This writer mostly uses a slant that we call the upright slant. The right slant writer is more engaged emotionally with others whereas the upright slant writer is more objective, poised, 'head over heart' type. Not gushy. Not huggy. A little more formal, a little more distant. " data-original-title="Slants"></div>
                <div class="hl-region hl-region-short bg-image" id="ad-neck" rel="popover" data-placement="left" data-content="Notice the angles in the first letter of each of these words. Angles represents analytical thinking skills." data-original-title="Angles"></div>
                <div class="hl-region hl-region-short bg-image" id="ad-fort" rel="popover" data-placement="left" data-content="Simplification is a trait whereby the writer maintains legibility while connecting and forming letters in the minimum amount of strokes which is optimally efficient. And this writer constantly does this kind of thing. It's a sign of above average intelligence." data-original-title="Simplification"></div>

	     <div class="hl-region"></div>
		<button class="hl-btn btn"><i class="icon-eye-open"></i> Hover to view all highlights(?)</button>
       </div> <!-- end right div -->
	<div style="clear:both;" /></div>
</div> <!-- end alessandra div -->

<!-- carol burnett -->
<div class="writing-samples writing-cb two-col-div">       
	<div id="cb-container" class="right-div writing-sample-container">
       	<div class="main-bg-image bg-image border"></div>
               <div class="hl-region bg-image border" id="cb-of" rel="popover" data-placement="top" data-content="Note the way the writer attaches the letter o to the letter f in the word 'of.'" data-original-title="Simplified handwriting"></div>
               <div class="hl-region bg-image border" id="cb-think" rel="popover" data-placement="top" data-content="The writer crosses the first letter of the word 'think' and attaches the cross stroke to the following letter, h." data-original-title="Simplified handwriting"></div>
               <div class="hl-region bg-image border" id="cb-handwriting" rel="popover" data-placement="left" data-content="The writing is also print script which means she sometimes connects letters and sometimes leaves them disconnected. Print script is a sign of somebody with literary ability, somebody who loves to write and who is a good writer." data-original-title="Printscript"></div>
               <div class="hl-region bg-image border" id="cb-m-sharp" rel="popover" data-placement="top" data-content="Sharpness is a function of analytical thinking and also enough access to aggressive energy to push projects through." data-original-title="Sharp angles in 'm' and 'n'"></div>
               <div class="hl-region bg-image border" id="cb-n-sharp" data-placement="top"></div>
               <div class="hl-region bg-image border" id="cb-name" rel="popover" data-placement="left" data-content="Note the way she encapsulates her professional name and encloses it in the first letter. That draws extra attention to that name, the part of her identity that speaks to her professional life. So there's an intensity around that name that comes through because of that special treatment of that name. As if she is showcasing that name. That's her specialness." data-original-title="Encapsulation"></div>
      	         <button class="hl-btn btn"><i class="icon-eye-open"></i> Hover to view all highlights(?)</button>
	</div>
       <h2><img src="/img/images/features/prime-graphology/Carol_Burnett.png" id="cb-title" /><span class="normal">| multi-talented</span></h2>
	<p>Great sensitivity is indicated by the light pressure of her written line (as compared to a darker imprint penned by somebody who really digs into the page with the pen) and also indicated by a written line that is fine and delicate looking.</p>
	<p> We also find something called simplification; strokes connect letters to each other in a way that is efficient so that the writer takes shortcuts, deleting extraneous strokes, while also maintaining legibility e.g. The writer crosses the first letter of the word "think" and attaches the cross stroke to the following letter, h. Simplification indicates a writer who is both creative and possesses above-average intelligence as well as somebody who has good physical coordination.</p>
	<p> Note how some letters are connected to each other while others are printed/disconnected. That "printscript" indicates the individual with writing skill. We also notice a sharpness in this writing. Look at the sharp angles in the letters m and n. Angularity indicates strong analytical thinking and the writer who can aggressively push projects through. Good organizational skills are indicated by the way she spaces the sample; clear spacing, well-organized, text is written on a straight line. And note that the handwriting is not particularly embellished. Rather humble or modest looking. A root quality of humility, at her core.</p>
	<i>Carol Burnett is an American actress. Mouse over image to learn asfdlfk blabhalbh.(?)</i>
</div> <!-- end carol burnett --> 
<hr style="margin-top: 20px;"/>
<div class="row-fluid">

<!-- begin annette div -->
<div id="annette" class="span12">
<div class="center" id="annette-header"><h1><img src="/img/images/features/prime-graphology/Annette_poizner.png" id="annette-title" /><span class="normal font">| <span style="color: #748AF5; font-size: 150%;">graphologist</span></span></h1>
</div>
<img class="border" id="annette-img" src="/img/images/features/prime-graphology/annette.jpg" />

<p>Annette Poizner is located in Toronto, Canada. She has been in private practice for the last 20 years. Initially she studied graphology privately with a clinical graphologist in Israel. In fact her experience with a therapist who studied handwriting in Israel is what sparked her interest. At a time when she was feeling a little stuck personally and professionally, the therapists accuracy blew her away and inspired her to pursue graphology.</p>
<p>She has a Specialized Honors degree in psychology at York University in Toronto. She has a Masters of Social Work degree from Columbia University in New York. At the University of Toronto she completed a Doctorate of Education specializing in Counseling Psychology and completed a doctoral dissertation which explored the use of graphology within psychotherapy. She also has background in psychological assessment. </p>

<i>Learn more about Poizner at her <a href="http://www.annettepoizner.com">website.(?)</a></i>
</div> <!-- end annette div -->

</div>

<hr style="margin-bottom: 20px;" />

<div class="center row-fluid">

	<h2 class="normal" id="g-101-title">Graphology 101</h2><br />
	<p id="g-101-intro">What does your handwriting say about you?<br />
						Here are graphological interpretation principles that readers can use to think about their own handwriting: </p>


<div class="center row-fluid">

<div class="span12" id="g-101">
    
	<div class="prev"><</div>
	
	<div class="nav-wrapper clearfix">
  		<div class="g-101-row" id="row-one">
  		<div class="g-101-item" id="g-101-us"><div>Upright slant</div><p>Some writers write a script that has an upright 
        		(vertical) slant. This writer is objective, formal, and poised. The upright slant writer 
        		is reserved.he or she looks at a situation from a detached perspective, then decides what 
        		degree of emotional involvement will be appropriate.</p></div>
    		<div class="g-101-item" id="g-101-lsl"><div>Left slant</div><p>Writing that leans to the left reveals a writer even 
       		more strongly reserved than one whose writing shows an upright slant. This person is usually 
        		introverted, reserved and highly private.</p></div>
		 <div class="g-101-item" id="g-101-c"><div>Crashing</div><p>For some writers, the lower zone of one line 
        		intermingles with the upper zone of the line below.the bottom loop of a cursive .f. would hit 
        		the top of a cursive .h. in the line below it. This is called crashing, and is indicative of 
        		an individual who daydreams, often watching an internal TV.</p></div>
  		<div class="g-101-item" id="g-101-ss"><div>Small spaces</div><p>Words that are spaced too close together, separated by 
        		spaces of less than one character width, may reveal an individual who is needy. This is the 
        		writing of a person who craves extra close contact with others.</p></div>
		</div> <!-- end row one -->
	</div> <!-- end nav-wrapper -->
	
	<div class="next">></div>

</div> <!-- end span12 graph-101 -->

</div> <!-- end row-fluid div -->

</div> <!-- end span12 -->

<hr style="margin-top: 20px; margin-bottom: 15px;" /><div id="footer">Page created by Connie Chiou and Jeffrey Wang. Handwritten title illustrations by Maddie Isaacs.</div>

</div> <!-- end row-fluid -->

<?php get_footer(); ?>

