<?php/*
Template Name: USAC Elections Campaign Violations 2014
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
              <li><a href="/usac-elections-2014/endorsements">Endorsements</a></li>
              <li class="active"><a href="/usac-elections-2014/campaign-violations">Campaign Violations</a></li>
              <li><a href="http://my.ucla.edu/">Vote Here</a></li>

            </ul>
        </div>
      </div>
    </div>

<div class="row-fluid">

  <div class="span9">
    <a title='USAC Elections' href='http://dailybruin.com/usac-elections-2014/'><img src='http://dailybruin.com/images/2014/05/usac-elections14-banner2.png' border='0'/></a> 
    <br /><br />

 
 <h2 class="endorsements">Complaint #:C11-2014</h2><hr></hr>

  <ul class="thumbnails">


      <li class="span12">
        <div class="endorsement letsact">
          
          <div class="textcentered">

            
            <h4 class="candinfoend">Submitted by: Jas Kirt <br/>
              5/8/2014 2:38pm</h4></div>
    
    <h4 class="endorsementname">Regarding:</h4>        
    <p>Alleged on-campus campaigning before it was allowed by the Election Calendar on Thursday, May 1st. It is claimed that members of "Bruins United" campaigned on-campus by having student take pictures with whiteboards that read "I am ______ and we are Bruins United." Students were allegedly asked to fill in the blank to describe themselves. Campaign participants and candidates took part by taking photos with the same white- boards. The complainant asserts that this early on-campus campaigning is in violation of Election Code which defines campaigning as "any public acton initiated by (a) campaign participant(s) for any of the following purposes...promotion or criticism of any official or unofficial group of two or more individual who are running for USAC office, even if the individual candidates are not mentioned by name (Election Code VI, B, 1, a, i, d). The complainant argues that "Bruins United" comprises an unofficial group of candidates including Sunny Singh, Aurelia Friedman, Avinoam Baral, Fabienne Roth, Kevin Patterson, Nihal Satyadev, Heather Rosen, Allyson Bach and Carlos Quintanilla.</p>


    <h4 class="endorsementname">Finding:</h4>  
    <p>The Election Board finds the complaint to be valid. Multiple witnesses attest to seeing candidates and affiliated campaign participants on Bruinwalk with the whiteboards in question. Evidence submitted also connects the candidates listed above with the unofficial group Bruins United including an article in Daily Bruin in which all candidates listed above state their affiliation with the group, the website belonging to Bruins United that lists all the above candidates, and candidate statements written by candidates for the Election Board website in which all candidates state their affiliation with Bruins United. We find the fact that campaign representatives held up whiteboards with the phrase "We're Bruins United" on Bruinwalk to fit the definition of campaign as it was a public action whose promotion was clearly meant for candidates.</p>


    <h4 class="endorsementname">Sanction:</h4>  
    <p>The Election Board mandates that the following candidates shall be banned from on-campus campaigning from the hours of 4pm to 5pm on Thursday, May 8th and 9am to 10am on Friday, May 9th: Sunny Singh, Aurelia Friedman, Avinoam Baral, Fabienne Roth, Kevin Patterson, Nihal Satyadev, Heather Rosen, Allyson Bach and Carlos Quintanilla.</p>


          </div>
      </li>


  </ul>
 <h2 class="endorsements">Complaint #:C10-2014</h2><hr></hr>

  <ul class="thumbnails">


      <li class="span12">
        <div class="endorsement letsact">
          
          <div class="textcentered">

            
            <h4 class="candinfoend">Submitted by: Tyler Cherry  <br/>
              5/8/2014 10:46am</h4></div>
    
    <h4 class="endorsementname">Regarding:</h4>        
<p>An unsolicited email campaigning in favor Teri Nguyen, Angel Garfio, Jazz Kiang, Miriam 
Rodriguez, Harwind Lasher, Gabriel Gutierrez and Der Xiong.</p>


    <h4 class="endorsementname">Finding:</h4>  

<p>The Election Board finds this complaint to be valid. Election Code states that "any email that 
contains campaign literature or is an endorsement slip may only be sent to: (i) a subscription 
listserv that the sender is a member of (ii) individuals whom the sender personally knows." 
Based on our investigation, Election Board finds that the email in question satisfies neither of 
these requirements.</p>

    <h4 class="endorsementname">Sanction:</h4>  

<p>The Election Board mandates that the following candidates shall refrain from active online 
campaigning from the hours of 7 pm to 10 pm on Thursday, May 8th: Teri Nguyen, Angel 
Garfio, Jazz Kiang, Miriam Rodriguez, Harwind Lasher, Gabriel Gutierrez and Der Xiong.</p>

          </div>
      </li>


  </ul>
 <h2 class="endorsements">Complaint #:C09-2014</h2><hr></hr>

  <ul class="thumbnails">


      <li class="span12">
        <div class="endorsement letsact">
          
          <div class="textcentered">

            
            <h4 class="candinfoend">Submitted by: Esha Jalota <br/>
              5/7/2014 7:36pm</h4></div>
    
    <h4 class="endorsementname">Regarding:</h4>        
<p>The distribution of flyers outside of leafletting hours at University-owned apartments supporting 
the following candidates: Devin Murphy, Negeen Sadeghi-Movahed, Conrad Contreras, Janay 
Williams, Alex Mercier, Winnie Galbadores, Irmary Garcia, Erineo Garcia, Francesca Rebosura 
and Manjot Singh.</p>


    <h4 class="endorsementname">Finding:</h4>  

<p>The Election Board finds this complaint to be valid. Election Code holds "campaign literature 
and endorsement slips may only be distributed to the general campus audience during campus 
leafleting hours at locations provided for in the University Rules and Regulations for literature 
distribution" (Election Code VI ,B,1,b,v, d, iii). Evidence submitted to Election Board shows 
these flyers were distributed outside of leafletting hours.</p>

    <h4 class="endorsementname">Sanction:</h4>  

<p>The Election Board mandates that the following candidates shall refrain from on-campus 
campaigning from the hours of 11am to 2pm on Thursday, May 8th: Devin Murphy, Negeen 
Sadeghi-Movahed, Conrad Contreras, Janay Williams, Alex Mercier, Winnie Galbadores, Irmary 
Garcia, Erineo Garcia, Francesca Rebosura and Manjot Singh.</p>

          </div>
      </li>


  </ul>
 <h2 class="endorsements">Complaint #:C08-2014</h2><hr></hr>

  <ul class="thumbnails">


      <li class="span12">
        <div class="endorsement letsact">
          
          <div class="textcentered">

            
            <h4 class="candinfoend">Submitted by: Anthony Montalvo<br/>
              5/7/2014 7:21pm</h4></div>
    
    <h4 class="endorsementname">Regarding:</h4>        
<p>The distribution of flyers inside Powell Library supporting the following candidates: Sunny 
Singh, Avinoam Baral, Aurelia Friedman, Allyson Bach, Carlos Quintanilla, Fabienne Roth, 
Kevin Patterson, Nihal Satyadev and Heather Rosen.</p>


    <h4 class="endorsementname">Finding:</h4>  

<p>The Election Board finds this complaint to be valid. Election Code holds "campaign material 
may not be distributed in the following areas....within structural or physical confines of 
buildings" (Election Code VI ,B,1,b,v, k, i). Evidence submitted to the Election Board shows the 
stack of flyers placed near other Library materials meant for distribution. The Election Board 
can only conclude that these flyers were placed there for intended distribution.</p>

    <h4 class="endorsementname">Sanction:</h4>  

<p>The Election Board mandates that the following candidates shall refrain from on-campus 
campaigning from the hours of 11am to 2pm on Thursday, May 8th: Sunny Singh, Avinoam 
Baral, Aurelia Friedman, Allyson Bach, Carlos Quintanilla, Fabienne Roth, Kevin Patterson, 
Nihal Satyadev and Heather Rosen.</p>

          </div>
      </li>


  </ul>
 <h2 class="endorsements">Complaint #:C07-2014</h2><hr></hr>

  <ul class="thumbnails">


      <li class="span12">
        <div class="endorsement letsact">
          
          <div class="textcentered">

            
            <h4 class="candinfoend">Submitted by: Anthony Montalvo<br/>
              5/5/2014 10:44pm</h4></div>
    
    <h4 class="endorsementname">Regarding:</h4>        
<p>Alleged distribution of campaign material within the Court of Sciences Student Center. The 
distribution campaign material within the "structural or physical confines of buildings" is 
prohibited by Election Code (Election Code VI, B, 1, b, v, k, i). The campaign material consisted 
of flyers with the names of candidates Sunny Singh, Aurelia Friedman, Allyson Bach, Avinoam 
Baral, Nihal Satyadev, Carlos Quintanilla, Heather Rosen, Kevin Patterson and Fabienne Roth.</p>


    <h4 class="endorsementname">Finding:</h4>  

<p>The Election Board does not find this complaint to be valid. Photos and witness statements do 
not confirm that the distribution of flyers occurred.</p>

    <h4 class="endorsementname">Sanction:</h4>  

<p>The Election Board shall take no further action regarding complaint C07-2014.</p>

          </div>
      </li>


  </ul>
 <h2 class="endorsements">Complaint #:C06-2014</h2><hr></hr>

  <ul class="thumbnails">


      <li class="span12">
        <div class="endorsement letsact">
          
          <div class="textcentered">

            
            <h4 class="candinfoend">Submitted by: Andre Jones<br/>
              5/5/2014 9:16pm</h4></div>
    
    <h4 class="endorsementname">Regarding:</h4>        
<p>A "Bruins United" A-board, with the names of the organizations Green the Greeks and 
Moneythink noticeably written below, found in the Court of Sciences on April 30th 2014 before 
on-campus campaigning was allowed by Election Calendar. Candidates Sunny Singh, Aurelia 
Friedman, Allyson Bach, Avinoam Baral, Nihal Satyadev, Carlos Quintanilla, Heather Rosen, 
Kevin Patterson and Fabienne Roth are listed as candidates affiliated with "Bruins United."</p>


    <h4 class="endorsementname">Finding:</h4>  

<p>The Election Board does not find this complaint to be valid. Although Election Code maintains 
"each candidate and Designated Campaign Representative is also responsible for the actions of 
all persons and organizations sponsoring, endorsing, or promoting his/her campaign provided 
they are operating as an agent of the campaign," further investigation revealed no contact 
between the candidates listed in the complaint and representatives from the Green the Greeks 
and Moneythink, showing the organizations were not "operating as an agent of the campaign." 
Furthermore, both the candidates' and the organizations' representatives stated that the signboard 
in question was from previous years and were unaware that it was displayed. The candidates and 
organizations also quickly cooperated to take the board down.</p>

    <h4 class="endorsementname">Sanction:</h4>  

<p>The Election Board shall take no further action regarding complaint C06-2014.</p>

          </div>
      </li>


  </ul>
 <h2 class="endorsements">Complaint #:C05-2014</h2><hr></hr>

  <ul class="thumbnails">


      <li class="span12">
        <div class="endorsement letsact">
          
          <div class="textcentered">

            
            <h4 class="candinfoend">Submitted by: Anthony Montalvo<br/>
              5/5/2014 7:55pm</h4></div>
    
    <h4 class="endorsementname">Regarding:</h4>        
<p>An alleged violation of Election Code which prohibits attaching campaign material to any 
permanent or fixed structures on-campus (Election Code VI, B, b, v, e). It is claimed that 
representatives of the candidates Miriam Rodriguez, Harwind Lasher, Teri Nguyen, Gabriel 
Gutierrez, Der Xiong and Jazz Kiang attached balloons, which the complainant asserts are 
campaign material, to permanent structures on campus.</p>

    <h4 class="endorsementname">Finding:</h4>  

<p>The Election Board does not find this complaint to be valid. While Election Code maintains that 
"campaign material of any sort shall not be attached to vegetation, any campus building, wall, 
permanent or temporary fixture," the Election Board does not find the balloons to qualify as 
campaign material. The balloons were a generic blue and had no text written on them; thereby, at 
this time, Election Board does not consider this campaign material as defined by Election Code 
(Election Code VI, B, 1, a, ii, a-f). However, the Election Board recognizes that this may be 
violation of University Rules and Regulations. If similar incidents occur again in the future by 
any campaign participants, Election Board will refer the complaint to the appropriate university 
entity.</p>

    <h4 class="endorsementname">Sanction:</h4>  

<p>The Election Board shall take no further action regarding complaint C05-2014.</p>

          </div>
      </li>


  </ul>
 <h2 class="endorsements">Complaint #:C04-2014</h2><hr></hr>

  <ul class="thumbnails">


      <li class="span12">
        <div class="endorsement letsact">
          
          <div class="textcentered">

            
            <h4 class="candinfoend">Submitted by: Zoe Sheppard<br/>
                5/5/2014 7:55pm</h4></div>
    
    <h4 class="endorsementname">Regarding:</h4>        
<p>An alleged violation of a sanction mandated in Complaint C03-2014 that prevented candidates 
Devin Murphy, Negeen Sadeghi-Movahed, Conrad Contreras, Janay Williams, Alex Mercier, 
Winnie Galbadores, Irmary Garcia, Erineo Garcia, Francesca Rebosura and Manjot Singh from 
campaigning from online from 9am to 12pm on Thursday, May 1st.</p>

    <h4 class="endorsementname">Finding:</h4>  

<p>The Election Board does not find this complaint to be valid. The Election Board interpreted the 
ban on online campaigning to mean active campaigning including new posts on social media, 
new emails, etc. As such, the evidence submitted does not show any active campaigning during 
the time of the mandated sanction</p>

    <h4 class="endorsementname">Sanction:</h4>  

<p>The Election Board shall take no further action regarding complaint C04-2014.</p>

          </div>
      </li>


  </ul>
 <h2 class="endorsements">Complaint #:C03-2014</h2><hr></hr>

  <ul class="thumbnails">


      <li class="span12">
        <div class="endorsement letsact">
          
          <div class="textcentered">

            
            <h4 class="candinfoend">Submitted by: Zoe Sheppard<br/>
              4/30/2014 2:30pm</h4></div>
    
    <h4 class="endorsementname">Regarding:</h4>        
<p>An unsolicited email campaigning in favor Devin Murphy, Negeen Sadeghi-Movahed, Conrad
Contreras, Janay Williams, Alex Mercier, Winnie Galbadores, Irmary Garcia, Erineo Garcia,
Francesca Rebosura and Manjot Singh. </p>

    <h4 class="endorsementname">Finding:</h4>  

<p>The Election Board finds this complaint to be valid. Election Code states that “any email that
contains campaign literature or is an endorsement slip may only be sent to: (i) a subscription
listserv that the sender is a member of or (ii) individuals whom the sender personally knows.”
Based on our investigation, Election Board finds that the email in question satisfies neither of
these requirements. </p>

    <h4 class="endorsementname">Sanction:</h4>  

<p>The Election Board mandates that the following candidates shall refrain from all forms of online
campaigning from the hours of 9am to 12pm on Thursday, May 1st: Devin Murphy, Negeen
Sadeghi-Movahed, Conrad Contreras, Janay Williams, Alex Mercier, Winnie Galbadores, Irmary
Garcia, Erineo Garcia, Francesca Rebosura and Manjot Singh.</p>

          </div>
      </li>


  </ul>

  <h2 class="endorsements">Complaint #:C02-2014</h2><hr></hr>

  <ul class="thumbnails">


      <li class="span12">
        <div class="endorsement letsact">
          
          <div class="textcentered">

            
            <h4 class="candinfoend">Submitted by: Tyler Cherry<br/>
             4/27/2014 11:34pm</h4></div>
    
    <h4 class="endorsementname">Regarding:</h4>        
<p>A Bruins United sandwich board/A-board found in the Court of Sciences on 4/23/2014 before
on-campus campaigning is allowed by the Election Calendar. </p>

    <h4 class="endorsementname">Finding:</h4>  

<p>The Election Board does not find this claim to be valid based on insufficient evidence. While
Election Code defines campaigning as “promotion or criticism of any official or unofficial group
of two or more individuals who are running for USAC office, even if the individual candidates
are not mentioned by name” the evidence submitted did not connect the group Bruins United to
any candidate(s).  </p>

    <h4 class="endorsementname">Sanction:</h4>  

<p>The Election Board shall take no further action regarding C02-2014.
</p>

          </div>
      </li>
  </ul>

 <h2 class="endorsements">Complaint #:C01-2014</h2><hr></hr>

  <ul class="thumbnails">


      <li class="span12">
        <div class="endorsement letsact">
          
          <div class="textcentered">

            
            <h4 class="candinfoend">Submitted by: Tyler Cherry<br/>
             4/25/2014 12:34pm</h4></div>
    
    <h4 class="endorsementname">Regarding:</h4>        
<p>The Facebook event titled “Bruins United 10th Anniversary Rager” with hosts listed as
candidates affiliated with Bruin United: Sunny Singh, Aurelia Friedman, Allyson Bach,
Avinoam Baral, Nihal Satyadev, Carlos Quintanilla, Heather Rosen, Kevin Patterson and
Fabienne Roth before online campaigning begins.  </p>

    <h4 class="endorsementname">Finding:</h4>  

<p>The Election Board does not find this complaint to be valid. The Facebook event could not be
found by members of Election Board during an investigation which shows that the event was not
public as necessary to fit under the Election Code’s definition of campaigning. Furthermore, the
Facebook event did not include language that promotes or criticizes the group which Election
Code identifies as campaigning.  </p>

    <h4 class="endorsementname">Sanction:</h4>  

<p>The Election Board shall impose no sanctions regarding complaint #C01-2014.

</p>

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
