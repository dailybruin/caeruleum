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
