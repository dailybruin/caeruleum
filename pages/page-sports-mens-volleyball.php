<?php/*
Template Name: Sports Mens Volleyball
*/ ?>
<?php get_header(); ?>
<!--<link rel="stylesheet" type="text/css" href="/css/sports-gymnastics.css">-->
<link href="//fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
<style type="text/css">

  /* -------------------------------------------------------

    Description: Gymnastics Feature for Daily Bruin
    Version: 1.0
    Author: Aein Hope and Christina Yang
    Author URI: http://aeiny.com

  ------------------------------------------------------- */
  body {
    font-family: 'Droid Sans',sans-serif;
  }

  article p {
    font-family: 'Droid Sans',sans-serif;
  }

  article h1 {
    font-family: 'Raleway',Helvetica,Arial,sans-serif;
    font-size: 80px;
    line-height: 90px;
    text-shadow: 0 2px 2px rgba(0,0,0,0.2);
    text-align:center;
  }
  article h2 {
    font-family: 'Raleway',Helvetica,Arial,sans-serif;
    font-size: 60px;
    line-height: 70px;
    text-shadow: 0 2px 2px rgba(0,0,0,0.2);
  }

  article .pq-wrap-2 {
      width: 200px;
      margin: 5px 10px 10px 10px auto;
      padding: 5px 20px 20px 50px;
      position: relative;
      float:right;
      display:inline-block;
      height: 215px;
  }

  article .pq-wrap-2 p{
      margin: 0;
      padding: 0;
  }
   
  article .pq-wrap-2 blockquote {
      margin: 0;
      padding: 0;
      position: relative;
      border-left: none !important;
  }
   
  article .pq-wrap-2 cite {
      font-style: normal;
  }

  article .pq-style-2 blockquote{
      padding-top: 57px;
  }
  article .pq-style-2 blockquote:after {
      font-family: 'icons';
      background: rgba(0,0,0,0.9);
      width: 50px;
      height: 50px;
      border-radius: 50%;
      content: '\275e';
      position: absolute;
      font-size: 40px;
      line-height: 60px;
      text-align: center;
      top: 0px;
      left: 50%;
      margin-left: -65px;
      color: rgba(255,255,255,0.5);
      text-shadow: 0 1px 1px rgba(255,255,255,0.1);
  }
  article .pq-style-2 blockquote:before{
      content: '';
      width: 200px;
      height: 220px;
      border-radius: 50%;
      border-left: 5px solid rgba(0,0,0,0.1);
      position: absolute;
      top: 0px;
      left: -35px;
      z-index: -1;
  }
  article .pq-style-2 blockquote p {
      font-family: 'Droid Serif', Helvetica, Arial, sans-serif;
      font-size: 16px;
      font-style: italic;
      background: rgba(255,255,255,0.5);
      display: inline;
      color: rgba(0,0,0,0.7);
      text-shadow: 0 1px 1px rgba(255,255,255,0.5);
      line-height: 23px;
  }
  article .pq-style-2 .pq-attribution {
      text-align: right;
  }
   
  article .pq-style-2 .pq-author{
      text-transform: uppercase;
      font-size: 15px;
      padding-top: 10px;
      font-weight: bold;
      color: gray;
      text-shadow: 0 1px 1px rgba(255,255,255,0.1);
  }
   
  article .pq-style-2 cite a{
      color: #d7aa94;
      font-style: italic;
  }
   
  article .pq-style-2 cite a:hover{
      color: #d48158;
  }

  article .pq-wrap-1 {
      width: 250px;
      margin: 20px 10px;
      padding: 5px 20px 20px 50px;
      position: relative;
      float:right;
      display:inline-block;
      height: 350px;
  }

  article .pq-wrap-1 p{
      margin: 0;
      padding: 0;
  }
   
  article .pq-wrap-1 blockquote {
      margin: 0;
      padding: 0;
      position: relative;
      border-left: none !important;
  }
   
  article .pq-wrap-1 cite {
      font-style: normal;
  }

  article .pq-style-1 blockquote{
      padding-top: 57px;
  }
  article .pq-style-1 blockquote:after {
      font-family: 'icons';
      background: rgba(0,0,0,0.9);
      width: 50px;
      height: 50px;
      border-radius: 50%;
      content: '\275e';
      position: absolute;
      font-size: 40px;
      line-height: 60px;
      text-align: center;
      top: 0px;
      left: 50%;
      margin-left: -65px;
      color: rgba(255,255,255,0.5);
      text-shadow: 0 1px 1px rgba(255,255,255,0.1);
  }
  article .pq-style-1 blockquote:before{
      content: '';
      width: 250px;
      height: 300px;
      border-radius: 50%;
      border-left: 5px solid rgba(0,0,0,0.1);
      position: absolute;
      top: 0px;
      left: -35px;
      z-index: -1;
  }
  article .pq-style-1 blockquote p {
      font-family: 'Droid Serif', Helvetica, Arial, sans-serif;
      font-size: 15px;
      font-style: italic;
      background: rgba(255,255,255,0.5);
      display: inline;
      color: rgba(0,0,0,0.7);
      text-shadow: 0 1px 1px rgba(255,255,255,0.5);
      line-height: 25px;
  }
  article .pq-style-1 .pq-attribution {
      text-align: right;
  }
   
  article .pq-style-1 .pq-author{
      text-transform: uppercase;
      font-size: 15px;
      padding-top: 10px;
      font-weight: bold;
      color: gray;
      text-shadow: 0 1px 1px rgba(255,255,255,0.1);
  }
   
  article .pq-style-1 cite a{
      color: #d7aa94;
      font-style: italic;
  }
   
  article .pq-style-1 cite a:hover{
      color: #d48158;
  }

  article .photocred {
    float: right;
    color: #c0c0c0;
    font-style: italic;
  }
  article .photocred-inline {
    color: #707070;
    font-size: 13px;
    margin:0px;
    padding:0px;
  }
  article .thumbnail.with-caption-left {
    display: inline-block;
    background: rgba(200,200,200,0.1);
    float: left;
    text-align: center;
    margin: 5px 15px 5px 0px;
    border:none;
    font-style: italic;
  }

  article .thumbnail.with-caption-left p {
    margin: 0;
    padding:0;
  }
  article.thumbnail.with-caption-left small:before {
    content: '\2014 \00A0';
  }
  article.thumbnail.with-caption-left small {
    width: 100%;
    display: inline-block;
    color: #999;
  }
  article .thumbnail.with-caption-right {
    display: inline-block;
    background: rgba(200,200,200,0.1);
    float: right;
    text-align: center;
    margin: 5px 0px 5px 15px;
    border:none;
    font-style: italic;
  }

  article .thumbnail.with-caption-right p {
    margin: 0;
    padding:0;
  }
  article .thumbnail.with-caption-right small:before {
    content: '\2014 \00A0';
  }
  article .thumbnail.with-caption-right small {
    width: 100%;
    display: inline-block;
    color: #999;
  }
  article #page-credit {
    margin: 3em 0 2em 0;
    text-align: center;
    color: gray;
    border-top: 1px solid #bebebe;
    padding-top: 0.5em;
    font-size: 0.9em;
  }
  article #page-credit a {
    color: #000;
    text-decoration: none;
  }
  .img-vert {
    width: auto; 
    max-height: 400px;}

  .img-hori {
  max-width:auto;
  height:250px;}

  .gym-sm {
      float: right;
      margin: 1.5em 0;
  }

  @media screen and (max-width: 1200px) {
  .img-vert{
    width: auto; 
    max-height: 300px;}
  .img-hori {
  max-width:auto;
  height:200px;}
  }
</style>

<!--css -->

<article>
  <h1>Men's Volleyball:<br> The Competitive Demands</h1>
    <p style="text-align:center;">With the Winter Olympics in full swing, the Daily Bruin takes a look at the experiences of four former Summer Olympians and current members of the UCLA gymnastics team.</p>
  <div class="pagination pagination-centered">
  <ul>
    <li class="active"><a>Samantha Peszek</a></li>
    <li><a href="http://dailybruin.com/features/gymnastics-the-competitive-demands-jennifer-pinches/">Jennifer Pinches</a></li>
    <li><a href="http://dailybruin.com/features/jordyn-wieber-brings-strength-to-ucla-gymnastics-team/">Jordyn Wieber</a></li>
    <li><a href="http://dailybruin.com/features/gymnastics-the-competitive-demands-danusia-francis/">Danusia Francis</a></li>
  </ul>
</div>

	<img src="http://dailybruin.com/images/2014/02/web.peszek.picA_.jpg" class="aligncenter">
	<span class="photocred">Katie Meyers / Daily Bruin senior staff</span><br><p style="text-align:center;">Samantha Peszek has competed at the highest levels of her sport and is currently a top ranked collegiate gymnast. The redshirt junior has battled numerous injuries throughout her career, from suffering a season-ending Achilles tear a year ago to tearing every ligament in her foot in warm-ups at the 2008 Beijing Olympics. Through it all, Peszek has relied on her mental focus to overcome the pressures of her sport.<p>

<h2>Samantha Peszek</h2>
	<p><strong>BY ZACHARY LEMOS</strong></p><div class="pq-wrap-2 pq-style-2"><div class="pq-thumb"></div>
    <blockquote style-"pq-style-2">
        <p>“The cortisone shot kicked in by this time and you’re just thinking about landing on your feet.”</p>
    </blockquote><div class="pq-attribution">
            <p class="pq-author"> – Samantha Peszek</p>
            <cite></cite>
          </div>

</div><p>As her feet pressed into the mat below her, Samantha Peszek took just a small stutter step backward. </p>

<p>For a short moment, she raised her arms, signaling the end of her routine on uneven bars and somberly forced her eyes toward the Olympic judges. </p>

<div class="thumbnail with-caption-left"><img src="http://dailybruin.com/images/2014/02/web.peszek.picB_-1024x649.jpg" class="img-hori">
Peszek delivered a perfect ten on the uneven bars in<br> UCLA's February 8th meet in only her fifth routine of the year.<br>
<span class="photocred-inline">Katie Meyers / Daily Bruin</span></div>

<p>Then her eyes flicked down, her shoulders slumped and she quickly stepped away from the pad under her feet.</p>

<p>It was only after one or two limp-free steps away from the apparatus that Peszek remembered what her coaches had told her after she injured her foot in warm-ups minutes ago: You're not allowed to cry. You're not allowed to talk about it. You’re not allowed to be upset.</p>


<p>So the then-16-year-old hid her look of pain, put a smile on her face and walked away from her first – and what turned out to be only – event in the 2008 Beijing Olympics.</p>

<p>Even though the now-redshirt-junior was originally slated to represent the United States in all four gymnastics events, she showed off her ability to compete through less-than-ideal circumstances and hit the one routine Team USA needed her to hit – a skill she frequently displays as a gymnast at UCLA.</p>

<p>“I asked if I could do the other events and the (coach) was like ‘No, we really just need you to hit (an uneven) bar routine,’” she said. "‘That’s your one job.’”</p>

<p>While the women’s gymnastics team, headlined by household names Nastia Liukin and Shawn Johnson, went on to win a silver medal, Peszek later discovered she tore every ligament in her foot and was unable to compete after the preliminary round.</p>

<div class="thumbnail with-caption-left"><img src="http://dailybruin.com/images/2014/02/web.peszek.picC_-682x1024.jpg" class="img-vert">
Peszek represented the US in the <br>2008 Beijing Olympics.<br>
<span class="photocred-inline">Katie Meyers / Daily Bruin</span></div>

<p>And if the mental turmoil of being held from competition in Beijing wasn’t enough, Peszek was told to hide her despair for the sake of the other girls on the team.</p>

<div class="pq-wrap-2 pq-style-2"><div class="pq-thumb"></div>
    <blockquote style-"pq-style-2">
        <p>“It was the most nerve-wracking thing ever, way more nerve-wracking than the actual Olympics.”</p>
    </blockquote><div class="pq-attribution">
            <p class="pq-author"> – Samantha Peszek</p>
            <cite></cite>
          </div>
</div>

<p>“I just had to switch gears really quick and do everything in my power to help (the team) compete well,” she said. “If I would've been distraught and a mess about it, that wouldn’t have really been helping.”</p>

<p>This wasn’t the first time Peszek masked her emotions for the sake of her Olympic ambitions. At the Olympic trials a month earlier, the pressure mounted to a level even higher than what Peszek said she later felt in Beijing.</p>

<p>After struggling on a few earlier routines, Peszek was told that the last one of the day would be do-or-die – hit it and she would make the team, miss it and she was done.</p>

<p>Despite the heavy pressure, Peszek pulled off the routine to ultimately make Team USA.</p>


<p>That Peszek was able to first block heavy pressure to reach the Olympics  and then shut out the disappointment of being sidelined in Beijing speaks to her tremendous mental strength, said Tara Scanlan, a UCLA sports psychology professor.</p>

<p>Scanlan pointed out that this mental focus is especially important – and especially difficult – in a sport like gymnastics. While a shooting guard in basketball or pitcher in baseball can take a moment to recuperate after a missed shot or an off-target pitch, a gymnast gets no break during a routine – once it has started, then it must finish.</p>

<p>“When you’re on the beam … if you splatter, there’s no regroup time – and you have to do it with a smile. You have to bounce right back up, let that mistake go, smile, focus and keep going," Scanlan said.</p>

<p>And mental recovery becomes that much more important in a perfection-oriented sport like gymnastics, where wobblylandings or spread toes often translate into large point deductions.</p>

<div class="thumbnail with-caption-left"><img src="http://dailybruin.com/images/2014/02/a2f93911-c786-4561-8188-74b8f5f4691e-682x1024.jpg" class="img-vert">
World famous gymnastics coach Bela Karolyi <br>holds a young Samantha Peszek.<br><span class="photocred-inline">
(Courtesy of Samantha Peszek)</span></div>

<p>Years of performing under immense pressure mean that most Olympic athletes tend to have more confidence than their less-tested equivalents, said UCLA coach Valorie Kondos Field.</p><div class="pq-wrap-2 pq-style-2">


<div class="pq-thumb"></div>
    <blockquote style-"pq-style-2">
        <p>“I think it’s 99 percent (mental). We’ve all been doing these skills for so long that when it’s time to compete, it’s purely just mental.”</p>
    </blockquote><div class="pq-attribution">
            <p class="pq-author"> – Sydney Sawa</p>
            <cite>UCLA Senior Gymnast</cite>
          </div>
</div>

<p>Peszek's ability to remain unfazed despite less-than-ideal conditions was on display in UCLA gymnastics’ most recent home meet on Feb. 8. She scored a career-first perfect 10 on uneven bars – coincidentally her least favorite event and the only one in which she was able to compete in Beijing – in only her fifth routine this year. 
</p>

<p>And although she missed two of the season's first four meets and sat out the entire 2013 season with an Achilles tear, Peszek ranks first nationally on beam and third on uneven bars.</p>

<p>But just as she has shown before, things that might rattle any athlete – like a serious injury or competing sparingly – generally do not affect Peszek's routines.</p>

<p>After all, from a short-lived Olympic appearance to her UCLA gymnastics career, she's come through time and time again.</p>


<div class="sm gym-sm">
    <a href="https://twitter.com/share" class="twitter-share-button" data-via="dailybruin" data-related="dailybruin">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <div class="fb-like" data-send="true" data-width="325" data-show-faces="true" data-action="recommend" data-font="lucida grande"></div>
</div>

<ul class="pager">
  <li class="previous disabled">
    <a href="">&larr; Previous</a>
  </li>
  <li class="next">
    <a href="http://dailybruin.com/features/gymnastics-the-competitive-demands-jennifer-pinches/">Next &rarr;</a>
  </li>
</ul>
</p>
<div id="page-credit">Page created by <a href="http://aeiny.com">Aein Hope</a> and <a href="mailto:cyang@media.ucla.edu">Christina Yang</a></div>

</article> 

<?php get_footer(); ?>
