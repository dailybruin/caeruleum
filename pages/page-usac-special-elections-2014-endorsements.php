<?php/*
Template Name: USAC Special Election Endorsements 2014
*/ ?>

<?php get_header(); ?>
<meta property="og:image" content="http://dailybruin.com/images/2014/05/usac-election-2014-fbSharePhoto.png" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans|Dosis:400,800" rel="stylesheet" type="text/css" />
<!-- Le styles -->
    <link href="bootstrap.css" rel="stylesheet">
    <style type="text/css">
        .check-big {
	    width: 30px;
	    height: auto;
    	}
    	p {
		font-family: 'Open Sans',sans-serif !important;
		font-size: 15px;
    	}
    	.endorsed {
    		margin-bottom:10px;
    		background-color:#00a5e5 !important;
    		color:white !important;
    		text-shadow:none !important;
    	}
        h2.elections {
          color: #00a5e5;
          font-family: 'Dosis', sans-serif;
          font-weight: 400;
          line-height: 30px;
          font-size: 40px;
          margin: 0 0 5px 0;
        }
         h2.endorsements {
          color: #00a5e5;
          font-family: 'Dosis', sans-serif;
          font-weight: 400;
          line-height: 30px;
          font-size: 40px;
        }

        h4.elections {
          font-family: 'Open Sans', sans-serif;
          font-size: 25px;
          line-height: 23px;
          margin: 5px 0 10px 0;
        }
        hr.elections {
        	width:100% !important;
        }

        .ad{
          margin-bottom: 10px;
        }

        .btn-group{
          text-align: center;
          display: block; 
        }

        .lid {
          font-size: 18px;
          margin-left: 7px;

        }

        .articles {
          margin-left: 30px;
        }

        .candphoto
        {
        margin-top:10px;
          width: 200px;

        }

        .presphoto
        {
          margin-top: 20px;
          margin-left: 20px;
          margin-bottom: 20px;
          margin-right: 20px;
          width: 175px;
          text-align: left;
        }

        .box{
          margin-top: 10%;
          margin-bottom: 10%;
          margin-left: 20px;
        }

        .textcentered{
          text-align: center;
        }

        .bunited{
          border:5px solid #C2E1F2;
        }

        .indep{
          border:5px solid #A2DEA6; 
        }

        .letsact
        {
          border:5px solid #F7F499;
        }
        .firedup {
          border:5px solid #dea6a2; 
        }
        .bsaty {
          border:5px solid #93BCC4;
        }
        .pass
        {
          background-color: green;
        }

        .fail
        {
          background-color: red;
        }

        .white
        {
          color: white;
        }

        .offwhite
        {
          color: #858585;
        }

        .topnote
        {
          font-size: 44px
        }

        .greyer{
          color: #0327AF;
        }

        .laterbuttons {
            display:none;
            visibility: hidden;
          }

        @media (max-width: 1200px) {
          .initbuttons {
            display:none;
            visibility: hidden;
          }

          .laterbuttons {
            display: inline;
            visibility: visible;
            width: 100%;
          }
}

        div #preload { display: none; }h3.elections {
          color: #00a5e5;
          font-family: 'Dosis', sans-serif;
          font-weight: 400;
          line-height: 30px;
          font-size: 30px;
          margin: 0 0 5px 0;
        }     
        h4.candinfo {
          color:black;
          font-family: 'Open Sans', sans-serif;
          margin-left: 40px;
        }
        h4.candinfoend {
        	font-size:17px;
          color:black;
          font-family: 'Open Sans', sans-serif;
        }
        .spacer {
          margin-left: 40px;
          color: #00a5e5;
          font-family: 'Dosis', sans-serif;
          font-size:25px;
          font-weight: normal;
        }
        h4.platforms {
          color: #00a5e5;
          font-family: 'Dosis', sans-serif;
          font-size:25px;
          font-weight: normal;
          margin-top:32px;
        }
        h4.endorsements {
          color: #00a5e5;
          font-family: 'Dosis', sans-serif;
          font-size:25px;
          font-weight: normal;
          line-height: 35px;
          padding-top:15px;
        }
        h4.endorsementname {
          color: #00a5e5;
          font-family: 'Dosis', sans-serif;
          font-size:25px;
          font-weight: normal;
          margin-top:10px;
        }
        li.platforms {
          line-height:2em;
          font-family: 'Open Sans', sans-serif;
          font-size:15px;
        }
        .navigation {
          margin-top: 30px;
          margin-bottom: 10px;
        }

        .left {
            float: left;
        }

        .right {
            float: left;
            margin-left: 30px;
        }

        .fright {
            float: right;
            margin-right: 30px;
            margin-top: 20px;
        }

        .grey{
          color:grey;
        }

        .fleft {
            float: left;
        }

        .candidate
        {
          margin-top: 2px;
          margin-bottom: 5px;
          border-style:solid;
          border-width:medium;
          border-color: #C2C2C2;
        }

        .accordion
        {
          margin-bottom: 3px;
        }

        #banner{
          margin-bottom: 12px;
        }

        .candimg {
          margin-top: 20px;
              max-width:90% !important;
            height:auto;
            display:block;

          /*border-style:solid;
          border-width:medium;
          border-color: #C2C2C2;*/
        }

        .headers{
          color: #0098D4;
        }

        .ad{
          float: right;
        }
        .endorsement{
        	margin:0;
        	padding: 0 15px 15px 15px;
        	text-align: justify;
        }


   </style>


<script> $('#navbar').scrollspy()</script>
<script>$('#myModal').modal('toggle')</script>

<div class='container'>

    <div class="navbar">
      <div class="navbar-inner" style="color:#3185c0">
        <div class="container-fluid">
          <a class="brand" href="http://dailybruin.com/usac-special-election-2014/">USAC Special Election 2014</a>
            <ul class="nav">
              <li><a href="http://dailybruin.com/usac-special-election-2014/">Candidates</a></li>
              <li class="active"><a href="http://dailybruin.com/usac-special-elections-2014/endorsements">Endorsements</a></li>
            </ul>
        </div>
      </div>
    </div>

<div class="row-fluid">

  <div class="span8">
    <a title='USAC Elections' href='http://dailybruin.com/usac-elections-2014/'><img src='http://dailybruin.com/images/2014/10/usac-special-election-banner.png' border='0'/></a> 
    <br /><br />

    <div class="endorsement">
      <p>The Daily Bruin Editorial Board endorsed candidates for both offices in this week’s undergraduate student government elections.</p>

      <p>The editorial board represents the stance of the Daily Bruin and is composed of four standing members – the editor-in-chief, managing editor, news editor and opinion editor – in addition to six staff representatives.</p>

      <p>The endorsement process took place the week before voting. Endorsements were primarily based on a 30-minute interview that two to three members of the editorial board conducted with each candidate. During these interviews, candidates were able to discuss their platforms, knowledge of the Undergraduate Students Association Council and prior experience.</p>

      <p>The board selected endorsements for each office after discussing each candidate and taking a vote. All endorsed candidates received a majority vote from the board.</p>

      <p>We encourage students to use our endorsements as a starting point for their own research into this year’s candidates – and to vote in the elections.</p><br/>
    </div>
 <h2 class="endorsements">Ballot Measures</h2><hr></hr>

      <ul class="thumbnails">

      <li class="span6">
        <div class="endorsement firedup">
          <div class="textcentered">
            <h4 class="endorsements">Bruin Diversity Referendum of 2014</h4></div>
            <p>Although the Bruin Diversity Referendum commendably aims to provide resources for some student organizations and institutional bodies that support campus diversity, its efforts are ultimately misdirected and fail to solve the real funding problem facing its beneficiaries.</p>

            <p>For that reason, this board does not endorse the Bruin Diversity Referendum for the special election ballot.</p>

            <p>The main funding problem that the referendum&rsquo;s authors point to is the disparity between the amount of money student groups and other bodies, like the LGBT Center, request from funding sources and the amount of money allocated to them. Almost every group is allocated less money than they request from the major funds available, including the Undergraduate Students Association Contingency Programming Fund and Student Organizations Operational Fund, among others. </p>

            <p>But this is not an accurate method for assessing need. Student groups and other beneficiaries of the referendum should be held accountable for the way they&rsquo;re spending funds to ensure that what they&rsquo;re requesting is truly what they need.</p>

            <p>Many major funds supported by student fees consistently run a surplus at the end of the year. That means that, even while student groups are supposedly getting less and less money each year as funding pools shrink and allocations go down, they are not spending all of their allocations. In the last academic year, about one-third of the student groups that received an allocation from SOOF did not spend any of their money.</p>

            <p>This does not mean, of course, that some student groups aren&rsquo;t still taking a hit from the decreased allocations. But it does mean that the money is not being allocated efficiently.</p>

            <p>The answer to the problems that student groups face is not to throw more money into a pot where it will get distributed according to the same allocation model with the same inefficient results. It&rsquo;s to hold student groups and other beneficiaries accountable for what they request and what they spend, and to base allocations on past expenditures.</p>

            <p>This referendum fails to address the problem of student group accountability &ndash; it asks for nearly $30 per student per year in student fees to a system that does not accurately assess need.</p>

            <p>Moreover, this is not even the referendum that its authors really wanted. The referendum had to be brought forward quickly to make it onto the special election ballot, and the authors had to borrow language from a similar initiative that failed in 2013, the Bruin Diversity Initiative. This last-minute throwing together of the referendum language lends less credibility to the referendum and begs the question of why its authors didn&rsquo;t wait for the spring to propose a better referendum.</p>

            <p>Ultimately, the referendum is a messy and inefficient solution to a complex problem, and students should save the fee increase for a referendum that acknowledges the real funding issues that face student groups and other bodies on campus. </p>
        </div>

      </li>

      <!-- EVPS-->

      <li class="span6">
        <div class="endorsement firedup">
          <div class="textcentered">
            <h4 class="endorsements">The Green Initiative Fund Extension</h4></div>

            <p>Although the Green Initiative Fund referendum would extend an important fund past its 2018 expiration date, we do not support the current referendum on the ballot because its language fails to address the fund&rsquo;s massive surplus.</p>

            <p>TGIF was passed in 2008 as a $4-per-quarter increase in student fees that goes toward student-initiated sustainability projects on campus like the bike-powered Ecochella music festival and the solar panels that sit atop Ackerman Union</p>

            <p>The expense to students has increased since the fund&rsquo;s original approval, with incremental raises written into the original referendum. The referendum on the upcoming special election ballot would indefinitely extend the fund and tie the student fee charge to inflation.</p>

            <p>While the attempt to carry over a fund that has supported a number of important sustainability causes is commendable, the new referendum fails to solve the main issue of the current fund &ndash; namely the thousands of dollars of surplus that exist year-to-year.</p>

            <p>For the 2013-2014 school year, the fund had more than $100,000 in surplus out of the fund&rsquo;s total $200,000. Instead of rolling into the next year&rsquo;s fund to pay for more green projects, this money gets funneled into the undergraduate student government surplus fund.</p>

            <p>Part of this is a marketing problem, as student groups are often not aware of the fund and the wide range of projects it could help pay for. But regardless, a fund paid into by the students should actually finance the things that it was meant to.</p>

            <p>Changing the language of the referendum to make sure 80 percent of the fund is in use, before tying fee raises into inflation would help to guarantee that students aren&rsquo;t voting to pay for unnecessary additional charges.</p>

            <p>With another four years before the expiration of the original referendum, supporters of TGIF owe it to fee-paying students to take the time necessary to craft a measure that will help meet UCLA&rsquo;s sustainability goals long-term.</p>        
          </div>
      </li>

      <li class="span6">
        <div class="endorsement indep">
          <div class="textcentered">
            <h4 class="endorsements">Temporary Vacancy Constitutional Amendment</h4>
            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>

            <p>This board endorses the Vacancy Amendment &ndash; a clear and simple solution to a glaring flaw in the Undergraduate Students Association Council constitution. However, we do have reservations about whether future councils will actually obey the document.</p>

            <p>The current USAC constitution does not provide guidelines on how to fill a completely new office, as the council had to do with the new transfer representative position. The council also had to fill a vacancy in the general representative 2 office with unclear and unfeasible constitutional guidelines after Nihal Satyadev resigned in the beginning of the summer. </p>

            <p>The current wording of the constitution requires that vacant positions like the general representative 2 vacancy be filled in 15 days, an incredibly unrealistic deadline.</p>

            <p>The proposed amendment will give council 28 days to fill the position and clarifies that a special election cannot be held during winter or summer breaks. Both changes are obvious and needed to ensure that as many students as possible will be informed about a special election. </p>

            <p>This board does have reservations about the effectiveness of such an amendment without any repercussions for failing to follow its set guidelines. The council removed a clause that would have halted all of its powers if it failed to meet the four-week deadline. </p>

            <p>Ramifications for failing to follow the constitution would have kept the council accountable to their constitution and forced them to treat the amendment as more than a suggested guideline. If the amendment passes, we urge this council and councils to come to treat their guiding documents with the seriousness and respect they deserve.</p>          
        </div>
      </li>

  </ul>

  <h2 class="endorsements">General Representative 2</h2><hr></hr>
  <ul class="thumbnails">
    <li class="span6">
        <div class="endorsement indep">
          
          <div class="textcentered">
            <img class="candphoto" src="http://dailybruin.com/images/2014/10/web.YoumunAlhlou1-200x300.jpg" alt="">
            <h4 class="endorsementname">Youmun Alhlou</h4>
            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
          

            <p>Youmun Alhlou has worked in five different Undergraduate Students Association Council offices, establishing relationships with councilmembers and office management that would serve her well during a shortened term in office.</p>

            <p>Her platforms, however, are quite narrow in scope. Alhlou chose platforms that would likely be accomplished during a shortened term in office, but her challenge would be finding ways to institutionalize these programs in the coming years.</p>

            <p>Her first proposed platform is to introduce the Perspective Showcase &ndash; a program that started at UC Berkeley and encourages cultural groups to team up and put on a collaborative performance &ndash; to Ackerman Grand Ballroom later in the school year.</p>

            <p>While the board does not doubt Alhlou&rsquo;s ability to run the event as planned winter or spring quarter, preserving it in coming years and making it appeal to a wider range of students will be a significant challenge.</p>

            <p>Alhlou also said she plans to create a study abroad guide for UCLA students that includes lists of approved classes, scholarship guides and student advice blogs.</p>

            <p>Additionally, she wants to survey students to improve the UCLA Career Center&rsquo;s BruinView job search site.</p>

            <p>To this end, Alhlou has laid some groundwork, setting up meetings with the Career Center&rsquo;s Brian Guerrero and Financial Supports Commissioner Heather Rosen. Both ideas have the potential to serve portions of the student population, particularly upper-level students looking to enter the job or internship market, but could fizzle out after her tenure without significant planning and marketing.</p>

            <p>We also take issue with Alhlou&rsquo;s absence from the special election endorsement hearing on Oct. 9. While we agree these hearings have often devolved to little more than canned questions from slate supporters, Alhlou is still running for a popularly elected position and should have attended to demonstrate accountability to the student body.</p>
          </div>
      </li>

      <li class="span6">
        <div class="endorsement firedup">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/10/web.SofiaMoreno1-200x300.jpg" alt="">
          	<h4 class="endorsementname">Sofia Moreno Haq</h4></div>

            <p>Sofia Moreno Haq would bring a solid amount of student government experience to the council table, despite having no prior experience in USAC, having served as a student senator at her community college prior to transferring to UCLA. </p>

            <p>However, her platforms as a whole were underwhelming, and she failed to sufficiently explain how she would execute them, such as bringing back peer learning to the Hill after its funding was cut three years ago. She also failed to explain how she would ensure that her platforms, such as a multicultural fair, would go beyond simple programming and include groups or students that traditionally do not participate in USAC activities. </p>

            <p>One of her platforms, a monthly guide to L.A., would be redundant as a number of media outlets already publish similar material. As a whole, Haq has the enthusiasm and leadership needed for the position, but her platforms don&rsquo;t make the cut.</p>      
      </li>

      </ul>

  <h2 class="endorsements">Transfer Representative</h2><hr></hr>
  <ul class="thumbnails">
          <li class="span6">
        <div class="endorsement indep">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/10/web.NegeenSadeghi-Movahed1-199x300.jpg" alt="">
          	<h4 class="endorsementname">Negeen Sadeghi-Movahed</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
          

            <p>While all candidates discussed creating better unity among transfer students, Negeen Sadeghi-Movahed appeared most in touch with the diverse transfer student community and its needs. She also stood out in her institutional knowledge of transfer student issues. </p>

            <p>For these reasons, we endorse Sadeghi-Movahed for transfer student representative.</p>

            <p>Sadeghi-Movahed said she would develop an academic advising guide for counselors. This guide, along with coordinated training sessions, would aid counselors to improve their response to transfer student needs.</p>

            <p>We agree with Sadeghi-Movahed&rsquo;s idea to place the obligation on counselors to provide effective guidance on how to plan classes and transfer units from the transfer students' previous college. Her plan would help improve institutional resources rather than relying on students to address their academic needs on their own.</p>

            <p>Sadeghi-Movahed&rsquo;s plan to create a transfer center was the most feasible. She said she intends to advocate to administrators who often need student initiation to get such projects started, focusing on securing space in the following school year as a first step to establishing a transfer center.</p>

            <p>The board also liked Sadeghi-Movahed&rsquo;s platform to extend the BruinBus hours. Her plan to leverage her position as transfer student representative to advocate for improved transportation services is strategic and deliberate: Sadeghi-Movahed said although the BruinBus services the entire campus community, it benefits transfer students specifically because a higher percentage of them commute.</p>

            <p>We hope that if elected, Sadeghi-Movahed will work with the internal vice president and the facilities commissioner, who both sit on the transportation services council along with the transfer student representative. Collaborated advocacy efforts between three offices should amplify the student voice for administrators who make the final call.</p>

            <p>The first student to fill the position of transfer student representative will have the responsibility of shaping the new office and establishing its priorities. We believe Sadeghi-Movahed is most fit to answer that call.</p>          
          </div>
      </li>        

<li class="span6">
        <div class="endorsement firedup">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/10/web.MichelleBalatbat-200x300.jpg" alt="">
          	<h4 class="endorsementname">Michelle Balatbat</h4>

            </div>

            <p>Although she has the qualifications to hold the position of transfer representative, this board does not endorse Michelle Balatbat. Her vision for the position is shortsighted and her platforms lack long-term goals.</p>

            <p>Although we do not support her for the position, we do applaud her platform to consolidate transfers who cannot be housed in Gardenia onto themed floors in other residence halls to foster a sense of community. We highly suggest that the elected transfer representative or any other councilmember who wants to serve the transfer community take on this project. </p>

            <p>Her other platforms consist of one-time events with a transfer focus, like a transfer alumni mixer, but those goals would fail to serve the transfer community in a lasting way after this year&rsquo;s term. Balatbat&rsquo;s platforms seem to focus on traditional transfer students and overlook opportunities to serve nontraditional transfers who commute, have children or come from other nontraditional backgrounds.</p>
          </div>
      </li>

<li class="span6">
        <div class="endorsement firedup">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/10/web.AllanKew-200x300.jpg" alt="">
          	<h4 class="endorsementname">Allan Kew</h4>

            </div>
          

            <p>This board does not endorse transfer representative candidate Allan Kew because he lacks crucial experience with USAC politics and working within student government.</p>

            <p>While Kew puts forward some interesting platforms such as establishing a town hall for transfer students to voice their concerns and creating a transfer student mentorship program, he does not have the institutional knowledge to accomplish these goals.</p>

            <p>Kew, who is a new student and has only been involved in USAC for the two weeks he has been running for this office, argues his main qualification is that he is &ldquo;green.&rdquo; </p>

            <p>Being absent of partisan biases is an important qualification for a transfer representative, as they must strive to represent the transfer community regardless of ideology or background.</p>

            <p>But his inexperience is also what makes him most unqualified. USAC council members must contend with a highly bureaucratic system which requires an intricate and intimate knowledge of its procedures and methods. Putting on a town hall or establishing a mentorship program requires the coordination of numerous moving parts, something Kew is ill-equipped to handle.</p>
          </div>
      </li>
</ul>



</div>
<?php get_sidebar(); ?>
</div><!--/row-->

</div><!--/container-->


<?php get_footer(); ?>
