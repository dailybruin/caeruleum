<?php/*
Template Name: USAC Elections Candidate Endorsements 2014
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
          <a class="brand" href="http://dailybruin.com/usac-elections-2014/">USAC Election 2014</a>
            <ul class="nav">
              <li><a href="http://dailybruin.com/usac-elections-2014/">Home</a></li>
              <li><a href="/usac-elections-2014/candidates">Candidates</a></li>
              <li class="active"><a href="/usac-elections-2014/endorsements">Endorsements</a></li>
              <li><a href="/usac-elections-2014/campaign-violations">Campaign Violations</a></li>
              <li><a href="http://my.ucla.edu/">Vote Here</a></li>

            </ul>
        </div>
      </div>
    </div>

<div class="row-fluid">

  <div class="span9">
    <a title='USAC Elections' href='http://dailybruin.com/usac-elections-2014/'><img src='http://dailybruin.com/images/2014/05/usac-elections14-banner2.png' border='0'/></a> 
    <br /><br />

    <div class="endorsement">
      <p>The Daily Bruin Editorial Board endorsed candidates for all 13 offices in this week’s undergraduate student government elections.</p>

<p>The editorial board represents the stance of the Daily Bruin and is composed of four standing members – the editor-in-chief, managing editor, news editor and opinion editor – in addition to six staff representatives.</p>

<p>The endorsement process took place the week before voting. Endorsements were primarily based on a 30-minute interview that two to three members of the editorial board conducted with each candidate. During these interviews, candidates were able to discuss their platforms, knowledge of the Undergraduate Students Association Council and prior experience.</p>

<p>The board selected endorsements for each office after discussing each candidate and taking a vote. All endorsed candidates received a majority vote from the board.</p>

<p>We encourage students to use our endorsements as a starting point for their own research into this year’s candidates – and to vote in the elections.</p><br/>
    </div>
 <h2 class="endorsements">Referendums</h2><hr></hr>

       <ul class="thumbnails">

      <li class="span6">
        <div class="endorsement bunited">
          <div class="textcentered">
            <h4 class="endorsements">Transfer Student Representative Referendum</h4></div>
            <p>This board does not endorse the transfer student representative referendum because it attempts to create the only demographic-specific office without adequately laying out a foundation for it.</p>

<p>To be sure, students in favor of the referendum raise a good point: Transfer students make up roughly a third of UCLA’s undergraduate population and face a special set of needs and concerns that should be adequately addressed by their student government. UCLA should properly support transfer integration into the campus community with effective and helpful resources.</p>

<p>But the creation of a transfer student representative on the Undergraduate Students Association Council would be up against huge logistical roadblocks.</p>

<p>By creating a constituent-specific position, the transfer referendum seeks to change the nature of USAC as an institution. A shift toward this kind of governmental structure would be closer to that of a senate, where individual senators run on specialized platforms for certain groups.</p>

<p>For example, international students, like transfer students, also have a sizable presence at UCLA and have unique challenges that could be greatly mitigated through having senators elected on platforms that address their needs.</p>

<p>Yet the senate system does not exist in UCLA’s student government. The language of the referendum does not provide much-needed details or a clear structure for the proposed office of the transfer representative, but instead generally describes the position’s role as “a facilitator of resources, providing advocacy and support for (transfer students’) unique needs.”</p>

<p>Although the referendum stipulates the position’s bylaws will be determined at a later time, the lack of details surrounding the position’s specific responsibilities is alarming and in contrast to the established frameworks of existing USAC offices.</p>

<p>The position will likely resemble that of the general representatives, who are responsible for serving the collective interests of the student body and emphasize different student needs through their platforms, but with an important distinction: The transfer student representative would focus exclusively on transfer student issues.</p>

<p>Apart from debating the merits of a senate versus a council, a more effective means of representation would be the election of undergraduate transfers onto USAC, which is a difficult proposition because of time and UCLA-specific experience constraints. Unfortunately, the nature of all other USAC offices – whose duties ultimately link back to representing all undergraduate students – makes the essence of the transfer position incongruent with the current system.</p>
        </div>
      </li>

      <!-- EVPS-->

      <li class="span6">
        <div class="endorsement bunited">
          <div class="textcentered">
            <h4 class="endorsements">Arts Restoring Community Referendum</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>

            <p>We endorse the “Arts Restoring Community” referendum in the belief that it will lead to more vibrant arts programming in the coming year. However, we address this serious caveat to the next Undergraduate Students Association Council: Without vigilant oversight and proper accountability measures, there is potential for the fee levied by the referendum to be mismanaged.</p>

<p>The spirit of the referendum is a good one: to create and institutionalize the first and only USAC fund specifically earmarked for arts programming. While the Cultural Affairs Commission currently disburses small allotments through the Cultural Programming Mini Fund, that fund is an informal function of the office, earmarked nowhere in the USAC bylaws or any other document.</p>

<p>Besides, the mini fund is insufficient to fund the level of arts and cultural programming that the UCLA student body is capable of successfully putting on. The size of the fund is $15,000, but students applied for more than $50,000 in funding this past year, according to Cultural Affairs Commissioner Jessica Trumble.</p>

<p>That being said, the referendum itself fails to create the institutional mechanisms to properly manage and disburse the revenue it would raise. Although the language calls for a committee within CAC to distribute the funds, it fails to specify who would sit on that committee or even how many members it would have.</p>

<p>The legislation leaves these details for the next Cultural Affairs commissioner to sort out. But we believe that the entire council must be involved in setting up the machinery around a fund that will amount to over $100,000 per academic year.</p>

<p>That responsibility includes ensuring the fund is open and accessible to all student groups, that it doesn’t inflate the year-to-year USAC surplus amount and that it is allocated responsibly and transparently. This task is the province of the entire council.
The student body could reject the referendum until its creators present a version that is more precise with details, but such a bill might not gain the same momentum it has recently garnered next year. Instead, they should pass the referendum and remain vigilant in insisting that next year’s council properly institutionalize it.</p>
        </div>
      </li>
  </ul>

  <h2 class="endorsements">President</h2><hr></hr>
  <ul class="thumbnails">

      <li class="span6">
        <div class="endorsement letsact">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/murphy.jpg" alt="">
          	<h4 class="endorsementname">Devin Murphy</h4>
          	<h4 class="candinfoend">LET'S ACT!</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
            
<p>We endorse Devin Murphy for Undergraduate Students Association Council president because of his passion, platforms and focus on institutional change.</p>

<p>In the wake of this year’s very contentious council, which recurrently made misguided decisions that hurt transparency and lacked basic knowledge of “Robert’s Rules of Order” as well as the council’s own bylaws, we believe Murphy is the right person to rebuild trust between the student body and USAC.</p>

<p>He stood out from his opponents in both his leadership ability and the likelihood that he will make a worthwhile impact for the UCLA and wider University of California community.</p>

<p>From his experience working in USAC and student organizations and chairing the United States Student Association congress last summer, Murphy has the experience and know-how to fulfill the responsibilities of president.</p>

<p>Both Murphy and one of his opponents, Sunny Singh, aim to start a mental health campaign by working alongside current and future Student Wellness Commissioner Savannah Badalich, in the same vein as the successful 7000 in Solidarity campaign.</p>

<p>However, Murphy stood out with his plan to leverage the power the office of the president has with officials, both locally and statewide, which will be an optimal complement to the programming and advocacy that Badalich plans to execute in her own office next school year.</p>

<p>Murphy’s other platforms balance both short-term and long-term goals, with both widespread and targeted impact. They include adding a cafe in Powell Library, keeping USAC and UCLA officials accountable and establishing additional admissions criteria at UCLA to advocate for what he called a “UC diversity pipeline.”</p>

<p>As Joanino’s chief of staff, Murphy had a close look at the way Joanino ran council this year. If he can learn from USAC President John Joanino’s missteps, we believe Murphy can be a uniting force and an effective leader – something USAC very much needs.</p>
          </div>
      </li>

 <li class="span6">
        <div class="endorsement bunited">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/singh.jpg" alt="">
          	<h4 class="endorsementname">Sunny Singh</h4>
          	<h4 class="candinfoend">Bruins United</h4>

            </div>
          

<p>While Sunny Singh has an advantage as the sole returning councilmember running for president, his platforms and vision for the office leave much to be desired. Overall, Singh seems to be running with only short-term goals for an office that should aim for long-term impact. Like Murphy, Singh plans to work with the Student Wellness commissioner on a mental health campaign. However, Singh’s focus on a more programmatic approach did not seem as effective as Murphy’s plan to leverage the clout of the office to work with the UCLA administration, local officials and state officials. Additionally, student groups’ accusations of Singh’s violating conflict of interest bylaws create a real possibility of many students feeling alienated if he is elected.</p>
          </div>
      </li>

       <li class="span6">
        <div class="endorsement firedup">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/Rodriguez.jpg" alt="">
          	<h4 class="endorsementname">Miriam Rodriguez</h4>
          	<h4 class="candinfoend">FIRED UP!</h4>

            </div>
          

<p>Miriam Rodriguez was the only candidate for any office who failed to attend her endorsement interview. Rodriguez’s platforms demonstrate a fundamental misunderstanding of the office she is running to hold. Her goals hinge on not using any student fees for USAC initiatives and cutting back on stipends. These are both irresponsible and detrimental ideas. Without student fees, important in-house projects and work experience opportunities for students would disappear. And although a self-approved pay increase is never acceptable, higher stipends allow students from a greater range of financial backgrounds to hold leadership positions in USAC. It’s one thing to want to bring change to USAC, it’s another to seek to dismantle the institution. If Rodriguez is sincere in her plans to not spend a single dollar on USAC office initiatives, students would do well to respond by not providing a single vote to her campaign.</p>
          </div>
      </li>
      </ul>

  <h2 class="endorsements">Internal Vice President</h2><hr></hr>
  <ul class="thumbnails">
          <li class="span6">
        <div class="endorsement letsact">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/Sadeghi-Movahed.jpg" alt="">
          	<h4 class="endorsementname">Negeen Sadeghi-Movahed</h4>
          	<h4 class="candinfoend">LET'S ACT!</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
          

<p>As a transfer student who is a part of several student groups herself, Negeen Sadeghi-Movahed offers a fresh perspective on the office of internal vice president, which has been held by in-house candidates for several years now.</p>

<p>Despite her lack of experience with the Undergraduate Students Association Council, Sadeghi-Movahed demonstrated a strong knowledge of student group concerns and laid out plans for how to address them in the positiom.</p>

<p>Her platform to create a “Meet the Orgs” mixer takes active steps toward bringing USAC in closer contact with student groups, fulfilling one of the IVP’s most important bylaw-mandated responsibilities.</p>

<p>Her efforts to reach out to student organizations could improve the office’s – and council’s – relationship with the student body, which has suffered over the past year due to controversial decision-making by the council over a stipend increase, surplus allocation and the handling of a divestment resolution.</p>

<p>Another bright spot is her platform to create a course for transfer success, a one-unit class that would help to better prepare transfer students and ease their transition to UCLA. This step goes well beyond what the the IVP currently does in terms of transfer outreach and programming. As a transfer student herself, Sadeghi-Movahed is aware of what this community needs and how the office of internal vice president can best provide it.</p>

<p>But her lack of experience in USAC may also be a problem; running an office like internal vice president, which has a large internal structure and many bylaw responsibilities, is no easy feat for someone who has little experience in that office or knowledge of how to manage the bureaucracy. Even so, this board believes that her experiences with other governing bodies qualify her for the position and that she can add a valuable perspective to the office and the council table.</p>
          </div>
      </li>        

<li class="span6">
        <div class="endorsement bunited">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/baral.jpg" alt="">
          	<h4 class="endorsementname">Avinoam Baral</h4>
          	<h4 class="candinfoend">Bruins United</h4>

            </div>

<p>Avinoam Baral is an experienced candidate who would likely run a tight ship if he were IVP next year. He displayed a strong base knowledge of the office and USAC as a governing body. However, some of his platforms, such as creating a “UCLA model lease” for Westwood apartment complexes and improving lighting by getting landlords to install lights on their buildings, seem unfeasible. Other platforms such as Baral’s plans to create a common application for USAC funding could go a long way in improving USAC’s accessibility to groups. Overall, Baral’s mix of platforms does not promise a new direction for the office.</p>
          </div>
      </li>

<li class="span6">
        <div class="endorsement firedup">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/lasher.jpg" alt="">
          	<h4 class="endorsementname">Harwind Lasher</h4>
          	<h4 class="candinfoend">FIRED UP!</h4>

            </div>
          

<p>Harwind Lasher has no experience in USAC, which does not make him unqualified for the position in itself. But during the course of his interview with members of the board, he demonstrated a total lack of knowledge about the internal vice president’s office and basic student government functions. Although he started out stating firmly that not one cent of surplus should go to councilmember initiatives, after a simple line of questioning, Lasher went back on his position, revealing a fundamental misunderstanding of how surplus has historically been used. Some of his platforms seem feasible and useful, but he had little idea of how to bring them to fruition.</p>
          </div>
      </li>
</ul>


  <h2 class="endorsements">External Vice President</h2><hr></hr>
  <ul class="thumbnails">

 <li class="span6">
        <div class="endorsement letsact">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/contreras.jpg" alt="">
          	<h4 class="endorsementname">Conrad Contreras</h4>
          	<h4 class="candinfoend">LET'S ACT!</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
          

<p>Conrad Contreras comes to the race for the External Vice President’s office with both the experience and vision to succeed where his predecessor did not.</p>

<p>Contreras’ platforms are both feasible and meaningful, and he has set out concrete steps to work toward accomplishing these goals. He intends to register 5,000 new voters before the midterm elections next year, using freshman orientation as a mechanism to encourage incoming first-year students to register.</p>

<p>Contreras demonstrated a clear understanding of the relationship between the University of California and the state. He cited Proposition 13 reform as a long-term goal to fund the UC and advocated for a continued tuition freeze and base increases as short-term aims. Although Proposition 13 is not a certain source of revenue for the University in the future, it is refreshing that Contreras has immediate strategies to impact funding.</p>

<p>His involvement with the Invest in Graduation, Not Incarceration, Transform Education campaign of the University of California Student Association, his extensive experience with the Undergraduate Students Association Council and his three years within the office, set Contreras apart from his opponents as the most qualified candidate. He has the most comprehensive and clear vision for the office as a statewide and nationwide advocacy tool for UCLA students, and he has the background to follow through and be an effective representative of the student body.</p>

<p>Furthermore, Contreras brought up important issues of transparency and accountability within UCSA, and his commitment to improving these aspects of the often-distant organization is impressive.</p>

<p>Although Contreras came away as the best candidate for external vice president, he would be wise to consider bringing both of his opponents into his office should he win, because their ideas complement his goals very well and add fresh perspectives to what has become an insular office under current External Vice President Maryssa Hall. </p>
          </div>
      </li>        

<li class="span6">
        <div class="endorsement bunited">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/Friedman.jpg" alt="">
          	<h4 class="endorsementname">Aurelia Friedman</h4>
          	<h4 class="candinfoend">Bruins United</h4>

            </div>
          

<p>Although this board does not endorse Aurelia Friedman for external vice president, we applaud her focus on local ties to Los Angeles legislators and community leaders and her conception of an inclusive office.</p>

<p>Friedman’s platforms and vision for the office don’t focus enough on state and national advocacy, but her approach is worth noting. Her opponents would do well to incorporate not only Friedman’s platform to create local district office internships, but also Friedman herself into their office.</p>

<p>She has a very strong grasp of UCLA’s relationship with Los Angeles and how USAC can work with resources in the city to advocate on behalf of students. </p>
          </div>
      </li>

<li class="span6">
        <div class="endorsement firedup">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/garfio.jpg" alt="">
          	<h4 class="endorsementname">Angel Garfio</h4>
          	<h4 class="candinfoend">FIRED UP!</h4>

            </div>
          

<p>Angel Garfio showed the most sincerity and passion of the three external vice president candidates. He deserves to work within the office and seems especially well equipped to advocate at the local level with Los Angeles communities that the office rarely reaches out to.</p>

<p>Despite the refreshing tenor of Garfio’s campaign, he was by far the least qualified candidate for external vice president. He simply does not have enough knowledge of the technical details of running the office to execute a successful term next year.</p>

<p>However, this board hopes the office will take notice of Garfio’s perspectives and take advantage of the talent he has to offer by bringing him into the staff so that he can gain the experience he currently lacks.</p>
          </div>
      </li>
  </ul>

   <h2 class="endorsements">Academic Affairs Commissioner</h2><hr></hr>
  <ul class="thumbnails">

 <li class="span6">
        <div class="endorsement letsact">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/williams.jpg" alt="">
          	<h4 class="endorsementname">Janay Williams</h4>
          	<h4 class="candinfoend">LET'S ACT!</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
          

<p>Janay Williams’ professional aptitude, in-house experience and ambitious platforms earned her the board’s endorsement as the next Academic Affairs commissioner.</p>

<p>The main test for next year’s office will be the passage and implementation of a diversity-related general education requirement. Williams’ plan to recruit students from every major to lobby their professors, as well as her plans to integrate the task force more thoroughly into her office, put her above the other candidates who offered similar proposals.</p>

<p>However, that’s where the similarities end.</p>

<p>Williams’ plans to improve appointment transparency and effectiveness through multiple quarterly meetings holds promise, as well as her plan to help South Campus students by creating an informational guide on how to secure research opportunities and jobs.</p>

<p>It’s Williams’ final platform that sets her apart. Her proposal to create funded research opportunities at UCLA libraries is the kind of ambitious, yet feasible, thinking this board is pleased to recognize.</p>

<p>There is one plan that Williams should adopt from her running mates. Allyson Bach’s platform of renovating the MyUCLA Degree Progress Report, so that students can see what classes they need and what quarters they are available, is a fantastic idea that deserves to be utilized.</p>

<p>Williams presents herself as a strong-willed and effective leader who knows which battles to fight. When asked about keeping unity on a potentially divided council, her answers revealed a degree of professionalism not often seen in this year’s council.</p>

<p>Thanks to these qualities, as well as feasible and progressive platforms, Williams has distinguished herself as the best in a very competitive field for next year’s Academic Affairs commissioner position.</p>
          </div>
      </li>        

<li class="span6">
        <div class="endorsement bunited">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/bach.jpg" alt="">
          	<h4 class="endorsementname">Allyson Bach</h4>
          	<h4 class="candinfoend">Bruins United</h4>

            </div>
          

<p>There’s no debating that Allyson Bach would be an extremely effective Academic Affairs commissioner. She’s bright, with good ideas and in-house experience. However, while the board was excited by her idea of reformatting MyUCLA, we found the rest of her platforms didn’t stack up as well against those of Williams. That being said, there’s a definite place for her in the office, and she would be an asset to any USAC councilmember who hires her.</p>
          </div>
      </li>

<li class="span6">
        <div class="endorsement firedup">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/Kiang.jpg" alt="">
          	<h4 class="endorsementname">Jazz Kiang</h4>
          	<h4 class="candinfoend">FIRED UP!</h4>

            </div>
          

<p>Jazz Kiang’s heart is in the right place, as his ideas for the Academic Affairs Commission show, but the logistics aren’t. He had the least thorough plan for passing the diversity requirement, and his desire to create additional ethnically centered resource centers was pitched with similar vagueness. His ideas for reforming the Expected Cumulative Progress program, especially in regard to unit count and dismissal, deserve to be acknowledged. Jazz Kiang would make a great staffer inside the Academic Affairs Commission should he choose to pursue such a route.</p>
          </div>
      </li>
</ul>

<h2 class="endorsements">Campus Events Commissioner</h2><hr></hr>
  <ul class="thumbnails">

 <li class="span12">
        <div class="endorsement indep">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/gregweb.jpg" alt="">
          	<h4 class="endorsementname">Greg Kalfayan</h4>
          	<h4 class="candinfoend">Independent</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
          

<p>This board endorses Greg Kalfayan for Campus Events commissioner because his experience and vision can help him improve the already successful commission.</p>

<p>Kalfayan’s platforms aim to continue CEC’s tradition of producing high-quality student events, while also aiming to fix many of the commission’s current weaknesses. Kalfayan emphasized the need to improve professionalism in the commission and tied that into his platform of prioritizing student safety and convenience at events.</p>

<p>His experience with holding events in and out of CEC will serve him well in accomplishing these goals. His knowledge of the commission will push the currently high standards for event quality and safety even higher.</p>

<p>Another of Kalfayan’s platforms is to reach out to transfer students and cater more events to that portion of the UCLA community. We agree that the CEC could do more to reach a too-often-ignored segment of the student body.</p>

<p>This platform, however, is very similar to the current commissioner’s incomplete platform of gearing more events toward international students. This board encourages Kalfayan to learn from the missteps that led to that platform stagnating and avoid similar pitfalls.</p>

<p>Kalfayan will also have to be a sitting member of council next year, and we encourage him to study USAC procedure and bylaws to better grasp his role on the council early in his term.
Kalfayan’s strength within the commission will be a solid base for his work next year but, without additional efforts, he may struggle to push the commission beyond its current state.</p>
          </div>
      </li>       
      </ul>     

       <h2 class="endorsements">Community Service Commissioner</h2><hr></hr>
  <ul class="thumbnails">

 <li class="span12">
        <div class="endorsement indep">
          
          <div class="textcentered">
            <img class="candphoto" src="http://dailybruin.com/images/2014/05/wong.jpeg" alt="">
            <h4 class="endorsementname">Cynthia Wong</h4>
            <h4 class="candinfoend">Independent</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
          

<p>This board endorses Cynthia Wong for Community Service commissioner but warns that her current platforms lack specifics and scope.</p>

<p>Wong’s experience on the commission will help her strengthen service projects and make her a strong resource for the commission. Her emphasis on improving service opportunities for the student community as a whole will direct the majority of her work next year.</p>

<p>Her major goals are to turn CSC into a resource for all service groups, inside or outside the commission, and improve project sustainability. This platform is sound, but the specifics to make it happen are lacking.</p>

<p>The board encourages Wong to look at the work of the Student Wellness Commission and its Student Health Network and model her strategy after this similar success.</p>

<p>Wong also aims to increase student engagement through expanding service opportunities. Once again, this goal sounds worthwhile but currently lacks any tangible steps to make it happen.</p>

<p>Wong’s inexperience on council is also concerning. The board encourages her to learn her way around council as soon as possible so that she can avoid a rough transitionary period when she becomes a councilmember. Wong also needs to solidify her goals as a councilmember to properly serve the student body.
Experience within the commission makes Wong a qualified candidate, but she needs to fill in the gaps in her vision to build and sustain momentum in office.</p>
          </div>
      </li>        
  </ul>
 

   <h2 class="endorsements">Cultural Affairs Commissioner</h2><hr></hr>
  <ul class="thumbnails">

 <li class="span12">
        <div class="endorsement letsact">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/I.Garcia.jpg" alt="">
          	<h4 class="endorsementname">Irmary Garcia</h4>
          	<h4 class="candinfoend">Let's Act</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
          

<p>Although at times specifics of her platforms were underwhelming, we endorse Irmary Garcia for Cultural Affairs commissioner. Based on her programming experience with the JazzReggae Festival, this board feels Garcia is fit to make these improvements.</p>

<p>Garcia’s platforms include running a more comprehensive cultural events calendar on the CAC’s website to promote student-run cultural events, but this is a rather one-faceted approach to garnering widespread student interest for cultural programming.</p>

<p>Her idea to implement workshops about programming events effectively for students groups in the Cultural Arts Collective, a loose association of culture-oriented student groups, is a good one. We think this method is more proactive and well-structured than relying on office hours to help students with programming.</p>

<p>Garcia also said she wants to open up the workshops to groups outside the collective. We hope she will reach out widely to relevant student groups that could benefit from these workshops and other resources the Cultural Affairs Commission may be able to provide.</p>

<p>Garcia fell most short on her idea to institutionalize a cultural crisis response team. While Garcia said she had not finalized details about the role of this team, her current vision for the task force, which is meant to be a resource to students who feel they have experienced challenges as a result of their cultural identities, is disappointing, especially in light of how complex issues of culture can be.</p>

<p>The cultural crisis response team would strive to be a safe space for students who are experiencing cultural crises and provide students with information about relevant on-campus resources, such as details on how to file a report with UCPD about hate incidents or crimes. While disseminating these resources is important, the plan in its current form fails to make effective change for students.</p>

<p>We hope Garcia will formulate more effective strategies to implement her platforms, drawing on her experience in the commission.</p>
          </div>
      </li>        
  </ul>

   <h2 class="endorsements">Facilities Commissioner</h2><hr></hr>
  <ul class="thumbnails">

 <li class="span6">
        <div class="endorsement letsact">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/mercier.jpg" alt="">
          	<h4 class="endorsementname">Alex Mercier</h4>
          	<h4 class="candinfoend">LET'S ACT!</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
          

<p>We endorse Alex Mercier as facilities commissioner because of his solid vision for the office, along with his energetic and feasible platforms.</p>

<p>Specifically, we find his plan to install an urban garden atop one of the school’s buildings effective in promoting greater access to sustainable resources on campus. In addition, his practical ideas for the future of the garden – namely, growing fruits and vegetables that can be sold at discounted rates – show that Mercier plans to use his single year in office to lay the groundwork for long-term change on campus.</p>

<p>His idea to create a UCPD oversight board, wherein student leaders and police administrators can meet to discuss the relationship between the police force and UCLA, demonstrates Mercier’s cognizance of real campus issues.</p>

<p>The idea to create a non-denominational prayer space has been a constant in USAC elections, but Mercier’s decision to try to place it in the Student Activities Center could prove fruitful.</p>

<p>His final platform, to create an easily accessible student space reservation form, is generic across every candidate. However, Mercier’s place on the John Wooden Center Board of Governors does provide him with extra insight when drafting the system’s infrastructure.</p>

<p>Speaking of platforms, Mercier would be wise to adopt his opponent Teri Nguyen’s idea for a payment plan for space use. Renting space on campus can be expensive; Royce Hall costs upward of $20,000 for a night, Nguyen said. Hers is an easy solution to a big problem.</p>

<p>Mercier’s measured demeanor lends him an air of professionalism that has been lacking around the council table this year. His personal qualities, along with his feasible platforms, indicate he could be a productive member of next year’s council.</p>
          </div>
      </li>        

<li class="span6">
        <div class="endorsement bunited">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/quintanilla.jpg" alt="">
          	<h4 class="endorsementname">Carlos Quintanilla</h4>
          	<h4 class="candinfoend">Bruins United</h4>

            </div>
          

<p>Carlos Quintanilla provided a solid, if generic, platform for his candidacy. He was poised, well spoken and seemed to have a grasp on how to complete his ideas. However, the ideas themselves were lacking. There seemed to be a focus on low impact, one-off programming that would do little to promote any long-term changes on campus. Ultimately, there was nothing wrong with Quintanilla’s candidacy, or his interview, but an underwhelming platform didn’t make him stand out. </p>
          </div>
      </li>

<li class="span6">
        <div class="endorsement firedup">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/Nguyen.jpg" alt="">
          	<h4 class="endorsementname">Teri Nguyen</h4>
          	<h4 class="candinfoend">FIRED UP!</h4>

            </div>
          
<p>It would be difficult to question Teri Nguyen’s passion or care for other students. However, in evaluating the efficacy and relevance of her platforms, it becomes apparent that Nguyen doesn’t have a clear grasp of what it means to run a student government commission. While her idea for a facilities repayment plan is solid, her other platforms fall flat. She admitted ignorance on how she would accomplish her platforms, claiming she was only a mouthpiece for these issues. If she intends to run in the future, Nguyen should focus on a deeper understanding of the issues she intends to tackle.</p>
          </div>
      </li>
</ul>


   <h2 class="endorsements">Financial Supports Commissioner</h2><hr></hr>
  <ul class="thumbnails">

 <li class="span6">
        <div class="endorsement letsact">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/Galbadores.jpg" alt="">
          	<h4 class="endorsementname">Winnie Galbadores</h4>
          	<h4 class="candinfoend">LET'S ACT!</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
          

<p>We endorse Winnie Galbadores for Financial Supports commissioner because, of all the candidates, she is the most likely to tangibly move the office forward in the direction we believe it must progress.</p>

<p>A central concern of the Financial Supports commissioner that Galbadores identified during her interview is to advocate on behalf of students’ financial concerns. To us, this means representing undergraduate students to university administration and other bodies on campus, such as the Campus Retention Committee, and putting a particular focus on those most likely to be in financial need.</p>

<p>While Galbadores does not have a position in the office she is running for, that may be a positive in this race: She is more likely than her in-house opponent to change the priorities of the commission toward advocating for students with the greatest financial need and identifying concrete avenues to address their concerns.</p>

<p>If she completes her platforms, adopts some of her opponents’ platforms and lives up to the spirit of her campaign, we believe she can effectively accomplish that goal in a year’s time.</p>

<p>Galbadores’ platforms are modest but doable. Her intention to increase the visibility of the Scholarship Resource Center will likely help finance the education of students that need it most. In addition, we applaud her plans to work with the Financial Aid Office, implementing measures that will help students manage the money that they borrow or are granted.</p>

<p>But more enticing than her specific will-do’s is the tone of the campaign she has run, promising to expand the scope of an office that has, in recent years, focused on programming and shied away from advocacy.</p>

<p>Under the right stewardship, we believe that, in addition to putting on popular and beneficial programming, the Financial Supports Commission can act as a powerful conduit between students and administrators.</p>
          </div>
      </li>        

<li class="span6">
        <div class="endorsement bunited">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/rosen.jpg" alt="">
          	<h4 class="endorsementname">Heather Rosen</h4>
          	<h4 class="candinfoend">Bruins United</h4>

            </div>
          

<p> Heather Rosen’s experience in the Financial Supports Commission and her knowledge of the office’s current pursuits make her a qualified candidate for the commissioner spot. However, we fear that if elected to the office, she would do little more than carry on the programming the office currently puts on, with a few adjustments.</p>

<p>This year’s Financial Supports Commission put on popular events and courses, and Rosen is right to seek to continue that momentum. But, as far as we are concerned, such programming is the baseline job of the commissioner, and the office should be capable of accomplishing much more.</p>
          </div>
      </li>

<li class="span6">
        <div class="endorsement firedup">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/gutierrez.jpg" alt="">
          	<h4 class="endorsementname">Gabriel Gutierrez</h4>
          	<h4 class="candinfoend">FIRED UP!</h4>

            </div>
          
<p>We were impressed by Gabriel Gutierrez’s sincerity and real desire to help students in financial need, but we are not confident in his ability to enact the changes he seeks.</p>

<p>For example, his promise to institute rent control in Westwood is unrealistic for a student government officer. By contrast, his platform to create a scholarship that would pay students’ filing fees for the Deferred Action for Childhood Arrivals program, which allows undocumented individuals to defer deportation in order to pursue an education, is an excellent one. The winning candidate should adopt this platform and, if appropriate, appoint Gutierrez to oversee it. </p>
          </div>
      </li>
</ul>

   <h2 class="endorsements">Student Wellness Commissioner</h2><hr></hr>
  <ul class="thumbnails">

 <li class="span12">
        <div class="endorsement indep">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/Badalich.jpg" alt="">
          	<h4 class="endorsementname">Savannah Badalich</h4>
          	<h4 class="candinfoend">Independent</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
          

<p>This board endorses Savannah Badalich for Student Wellness commissioner.</p>

<p>Badalich served as the Student Wellness commissioner this year and spearheaded 7000 in Solidarity, a campaign to combat sexual violence through education that brought much-needed scrutiny to and constructive dialogue around the issue of sexual assaults at UCLA.</p>

<p>Badalich’s efforts to address sexual violence as a campus issue wisely identified a largely neglected area that could vastly enhance the health and wellness of the student body. Badalich included combating sexual and gender-based violence in her platform for this upcoming election by committing to continue focusing on the 7000 in Solidarity campaign next year.</p>

<p>Badalich said she wants to institutionalize these efforts into the Student Wellness Commission through adopting the Clothesline Project, a student group that promotes gender-based violence education and prevention, with a change in Undergraduate Students Association Council bylaws. We commend her proposal, which would require the Student Wellness Commission to continually address sexual violence in the years following Badalich’s tenure. However, we caution Badalich against devoting too much time to this goal and neglecting her other platforms, as she did this year.</p>

<p>Badalich also aims to educate students on mental health, specifically on the topics of depression, addiction and the stigma surrounding mental illness, and promote positive body image with a focus on eating disorder education.</p>

<p>In addition, Badalich said she wants to start an awareness and education campaign on depression, addiction and stigma, modeled in the spirit of 7000 in Solidarity. Her experience in leading 7000 in Solidarity has given Badalich exceptional qualifications to do more positive work for the wellness of our campus community.</p>

<p>Badalich correctly diagnosed UCLA Counseling and Psychological Services as overutilized and underfunded and said she wanted to start a peer-to-peer counseling program based on a UC Davis equivalent called The House. She also plans to lobby professors to include mental health resource information on class syllabi, which would likely increase students’ understanding of available, on-campus services.</p>

<p>All of these goals are honorable and reflect an excellent understanding of what her office can do. For these reasons, Badalich is a qualified candidate to take up the position of Student Wellness commissioner for a second term.</p>
          </div>
      </li>        
  </ul>


 <h2 class="endorsements">General Representatives</h2><hr></hr>
  <ul class="thumbnails">

      <li class="span6">
        <div class="endorsement letsact">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/garcia.jpg" alt="">
          	<h4 class="endorsementname">Erineo Garcia</h4>
          	<h4 class="candinfoend">LET'S ACT!</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
            
<p>This board endorses Erineo Garcia for general representative for his tangible goals to advocate for underrepresented campus communities through his platforms and at the council table.</p>

<p>His most worthwhile platform is the creation of a “Queer Conference” to help foster a safe space for members of the lesbian, gay, bisexual and transgender communities and discuss relevant issues not always addressed during the annual Ally Week. He proved to have a clear vision of how to connect the conference to high schools around Los Angeles and bring in outside organizations to engage in discussions, such as the AIDS Project Los Angeles.</p>

<p>As an active member of MEChA de UCLA, Garcia gained experience in organizing large-scale events and programing within budgetary boundaries. He also worked within the External Vice President’s office to organize the Student of Color Conference, a large-scale event that brought minority students from across the UC to UCLA.</p>

<p>He identified the need to overhaul the current student group website, which is outdated and hard to navigate. Improvements to the site could greatly benefit numerous student groups who have difficulty recruiting and ensure that all student organizations are represented equally.</p>

<p>Integrating postgraduate resources onto a MyUCLA tab is another needed change that would benefit a vast number of students.</p>

<p>He also plans to create a “text-n-go” ordering system in the UCLA coffeeshops to reduce the amount of time students wait in line. Although it would require more effort from Associated Students UCLA than student government officers, the new system would be a welcomed addition for many students who frequent campuscoffee shops.</p>

<p>Ultimately, Garcia will be an important voice on council for many student groups that do not feel they are being fully represented.</p>

<p>Though his willingness to use a secret ballot calls into question his dedication to student government transparency, this board believes that his vision for the office is a needed addition to USAC.</p>
          </div>
      </li>

      <li class="span6">
        <div class="endorsement bunited">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/patterson.jpg" alt="">
          	<h4 class="endorsementname">Kevin Patterson</h4>
          	<h4 class="candinfoend">Bruins United</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
            
<p>Though several of general representative candidate Kevin Patterson’s platforms include goals that will require the support of other offices and institutions, he earns this board’s endorsement based on a clear understanding of how to use campus space for the betterment of student groups.</p>

<p>Patterson’s idea of “Pauley Concessions Night” specifically would give student groups an opportunity to earn money via working concession stands during sporting events.</p>

<p>This would be beneficial during essentially any UCLA sporting event in Pauley Pavilion. Men’s basketball games would yield a higher volume of sales, while women’s basketball, gymnastics and men’s and women’s volleyball games could provide more concessions variety where options have typically been limited.</p>

<p>After serving as director of Bruin Confidential for the General Representative 2 office, Patterson also said he wanted UCLA students to continue sharing stories with one another via the quarterly “Bruin Story Swap.” The idea, which would give students the chance to communicate with each other at iconic places around Los Angeles, is financially feasible but offers little more than a close resemblance to a field trip at the moment. If elected, Patterson should continue to flesh out this idea to breathe more of a purpose into these events.</p>

<p>Patterson’s platform to introduce UCLrAve, a dance and electronic music-based winter quarter concert, also runs the risk of falling short without a significant jump on sponsorship and co-programming efforts with the Campus Events Commission. Patterson estimated the event at $10,000 to $20,000, making it cheaper than other annual USAC-run music events.</p>

<p>But without proper funding, planning and advertising, UCLrAve could suffer in a winter quarter that already includes the Cultural Affairs Commission’s Hip Hop Explosion concert.</p>

<p>Despite his platform uncertainties, we endorse Patterson for his demonstrated understanding of how a general representative’s office is run, which will serve him well on the USAC council.</p>
          </div>
      </li>
  </ul>
  <ul class="thumbnails">
        <li class="span6">
        <div class="endorsement letsact">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/Singh.jpg" alt="">
          	<h4 class="endorsementname">Manjot Singh</h4>
          	<h4 class="candinfoend">LET'S ACT!</h4>

            <button class="btn disabled endorsed"><img class="check-big" src="http://dailybruin.com/images/2014/05/check.png"></img> Endorsed</button><br/></div>
            
<p>This board endorses Manjot Singh for general representative for his attention to platforms that could generate broad-based interest among undergraduate students.</p>

<p>The board was particularly impressed with Singh’s attention to communication and promise to engage the student body actively throughout the year.</p>

<p>One of the chief challenges Singh is likely to face with his platforms is attendance. While platforms like a quarterly wellness festival and student-faculty symposiums are well intentioned, similar projects in the past have generated less-than-stellar turnout.</p>

<p>Of Singh’s platforms, his plans to create a permanent student-centered cultural space on the Hill, which he fondly dubbed “The Hub,” was the most original. We believe this plan carries great potential to provide an accessible and well-used venue for students interested in student art, peer-to-peer learning and cross-community dialogue.</p>

<p>It will be vital for Singh to begin working on this platform during the summer in order to identify and find solutions for potential roadblocks to it, such as securing a space and finding adequate funding for programming.</p>

<p>Singh’s platform of creating symposiums to debate campus issues is also one that holds potential for important debates on contentious issues. Singh described his vision for this platform as a “dialogue with an action plan.”</p>

<p>It’s a noble goal, and we hope that Singh’s work on hosting these events is not derailed by the kind of damaging rhetoric thrown around during controversies like the USAC vote on divestment in February. Singh should plan the format of the symposium carefully and develop strategies to keep the dialogue respectful and productive.</p>
          </div>
      </li>    

<li class="span6">
        <div class="endorsement firedup">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/Xiongweb.jpg" alt="">
          	<h4 class="endorsementname">Der Xiong</h4>
          	<h4 class="candinfoend">FIRED UP!</h4>

            </div>
          

<p>Der Xiong is running for general representative for the right reason: to try to effect change in a student-run organization that she feels sometimes muffles the voices of students.</p>

<p>That mindset, however, cannot be achieved with platforms that are lofty, largely unattainable and well beyond the financial scope of just one general representative office or even an entire university.</p>

<p>One of Xiong’s platforms is to institute dental coverage within the UCSHIP program, a sweeping change that will likely be lost in bureaucratic red tape. On a more local level, her platform of free daycare for UCLA parents again appears financially and logistically unfeasible.</p>

<p>ven when her platforms are narrower in scope, Xiong’s procedural path has still not been laid out very clearly in front of her.</p>

<p>Xiong’s “Drink, Don’t Drive” idea is one that intends to reform the AlcoholEdu system to give students a clearer picture of the consequences of drinking. The need for change is there, but the plan to act on it is largely absent.</p>

<p>Her platforms show a desire to shape the UCLA community to make it more accepting of transgender, transfer and international students, and while her plans to implement this would likely fall short, more experience within USAC’s offices would give Xiong more of an institutional understanding with which to shape her goals for the future.</p>
          </div>
      </li>
  </ul>

  <ul class="thumbnails">
 <li class="span6">
        <div class="endorsement bunited">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/roth.jpg" alt="">
          	<h4 class="endorsementname">Fabienne Roth</h4>
          	<h4 class="candinfoend">Bruins United</h4>

            </div>
          

<p>Fabienne Roth had a good understanding of her role on council and a pragmatic vision for how to act on substantial issues at the council table. However, her platforms could use more elucidation and specifics. Her coffeeshop rewards program platform, while perhaps attractive to some students, would likely have little impact on students’ relationship with ASUCLA. Roth’s plans to assist international students are good in theory, but she presented only a handful of tangible ideas for how to actually create change. Her one concrete suggestion, called the “411 on the 310,” would seek to establish food options on the Hill for students who stay in their dorms over breaks rather than traveling internationally to visit family. While Roth would be a good general representative, it would serve her well to explore projects with broader scope and cross-community impact.</p>
          </div>
      </li>

                <li class="span6">
        <div class="endorsement bsaty">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/Medhekar.jpg" alt="">
          	<h4 class="endorsementname">Sachin Medhekar</h4>
          	<h4 class="candinfoend">¡Bruin Satyrists!</h4>

            </div>
          

<p>Sachin Medhekar’s bid for general representative lends an uncommon levity to this year’s USAC elections. Medhekar’s willingness to acknowledge USAC’s shortcomings through his satirical platforms, for example increasing the student government’s transparency by installing new windows in Kerckhoff’s upper floors, draws out important commentary on USAC that can often be lost in the echo chamber of slate politics. Should Medhekar win sufficient votes to take office (he says he will only accept the office of General Representative 1 for reasons of “self-respect”) we hope he will take on the position with sincerity and sit down at the drawing table to conceive real, tangible plans to put in place during the year.</p>
          </div>
      </li>

        </ul>
  
  <ul class="thumbnails">

       <li class="span6">
        <div class="endorsement letsact">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/Rebosura.jpg" alt="">
          	<h4 class="endorsementname">Francesca Rebosura</h4>
          	<h4 class="candinfoend">LET'S ACT</h4>

            </div>
          

<p>Francesca Rebosura did not show a clear vision for how to execute her platforms. Her idea to turn Undie Run into a clothing drive was a very worthwhile idea, although her other goals were not as tangible. A plan for “Bruin Talks,” where community members would come together to share ideas, was not thought out and seemed like a meaningless event. When discussing her plans for a “Womyn’s Empowerment Conference,” she only listed a few student groups she planned to partner with and had vague ideas about what it would accomplish. She also said the conference would be geared more toward educating high school students than undergraduates. Although admirable, the goal of a USAC general representative should be benefiting the current student body.</p>
          </div>
      </li> 


                <li class="span6">
        <div class="endorsement bunited">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/satyedev.jpg" alt="">
          	<h4 class="endorsementname">Nihal Satyadev</h4>
          	<h4 class="candinfoend">Bruins United</h4>

            </div>
          

<p>Nihal Satyadev has a wealth of USAC experience to draw on, but several of his platforms are too ambitious and unclear to effectively put that knowledge to use.</p>

<p>As the point person for state and university affairs in the External Vice President’s office this year, Satyadev had hands-on experience in planning November’s Student of Color Conference. Still, his “BRUINspired” speech and networking conference will likely experience marketing and attendance problems not seen by the Student of Color Conference.</p>

<p>His Bruin Research Expo fills a need to bring eager, research-minded students in contact with labs, but likewise needs more shape and direction.</p>

<p>We do, however, applaud his idea for a “Lab Coat Loaner Library,” which would significantly reduce student expenditures on outrageously priced lab coats. Whether or not Satyadev is elected, this is a platform that should be implemented for the benefit of students.</p>
          </div>
      </li>
  </ul>

</div>
<div class="span3">
  <div class='ad'>
    <?php get_template_part('ad','side'); ?>
  </div>
  <div class="thumbnail textcentered">
    <p><h4 style="color:#3185c0">Important Dates:</h4>
      April 29 -  Endorsement hearing<br />
      May 3 - Candidates debates<br />
      May 4 - Campus campaigning begins<br />
      May 6 - Voting begins at 9 a.m.<br />
      May 9 - Voting ends at 12 p.m.<br />
      <b>Election results announced at 4 p.m. at Meyerhoff Park.</b></p>
  </div>
  <br />
  <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=%23USACelections" data-widget-id="328749991814369281">Tweets about "#USACelections"</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div><!--/span3-->

</div><!--/row-->

</div><!--/container-->


<?php get_footer(); ?>
