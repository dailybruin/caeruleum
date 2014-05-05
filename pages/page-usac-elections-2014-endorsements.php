<?php/*
Template Name: USAC Elections Candidate Endorsements 2014
*/ ?>

<?php get_header(); ?>

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

        .bally{
          background-color: #93BCC4;
        }

        .bunited{
          background-color: #C2E1F2;
        }

        .indep{
          background-color: #A2DEA6;
        }

        .letsact
        {
          background-color: #F7F499;
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
          <a class="brand" href="#">USAC Elections 2014</a>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="/usac-elections-2014/candidates">Candidates</a></li>
              <li><a href="/usac-elections-2014/endorsements">Endorsements</a></li>
              <li><a href="/usac-elections-2014/campaign-violations">Campaign Violations</a></li>
              <li><a href="http://my.ucla.edu/">Vote Here</a></li>

            </ul>
        </div>
      </div>
    </div>

<div class="row-fluid">

  <div class="span9">
    <a title='USAC Elections' href='#'><img src='http://dailybruin.com/images/2014/04/usac-elections14-banner.jpg' border='0'/></a> 
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
        <div class="endorsement bunited">
          
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
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/Singh.jpg" alt="">
          	<h4 class="endorsementname">Sunny Singh</h4>
          	<h4 class="candinfoend">Bruins United</h4>

            </div>
          

<p>While Sunny Singh has an advantage as the sole returning councilmember running for president, his platforms and vision for the office leave much to be desired. Overall, Singh seems to be running with only short-term goals for an office that should aim for long-term impact. Like Murphy, Singh plans to work with the Student Wellness commissioner on a mental health campaign. However, Singh’s focus on a more programmatic approach did not seem as effective as Murphy’s plan to leverage the clout of the office to work with the UCLA administration, local officials and state officials. Additionally, student groups’ accusations of Singh’s violating conflict of interest bylaws create a real possibility of many students feeling alienated if he is elected.</p>
          </div>
      </li>

       <li class="span6">
        <div class="endorsement bunited">
          
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
        <div class="endorsement bunited">
          
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
        <div class="endorsement bunited">
          
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
        <div class="endorsement bunited">
          
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
        <div class="endorsement bunited">
          
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
        <div class="endorsement bunited">
          
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
        <div class="endorsement bunited">
          
          <div class="textcentered">
          	<img class="candphoto" src="http://dailybruin.com/images/2014/05/Kiang.jpg" alt="">
          	<h4 class="endorsementname">Jazz Kiang</h4>
          	<h4 class="candinfoend">FIRED UP!</h4>

            </div>
          

<p>Jazz Kiang’s heart is in the right place, as his ideas for the Academic Affairs Commission show, but the logistics aren’t. He had the least thorough plan for passing the diversity requirement, and his desire to create additional ethnically centered resource centers was pitched with similar vagueness. His ideas for reforming the Expected Cumulative Progress program, especially in regard to unit count and dismissal, deserve to be acknowledged. Jazz Kiang would make a great staffer inside the Academic Affairs Commission should he choose to pursue such a route.</p>
          </div>
      </li>





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
