<?php/*
Template Name: USAC Special Election 2014
*/ ?>

<?php get_header(); ?>
<meta property="og:image" content="http://dailybruin.com/images/2014/10/og-usac-special-election.png" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans|Dosis:400,800" rel="stylesheet" type="text/css" />

<style type='text/css'>

h3.elections {
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

div #preload { display: none; }

</style>

<div id="usac page candidates">

<div class='container'>


    <div class="navbar">
      <div class="navbar-inner" style="color:#3185c0">
        <div class="container-fluid">
          <a class="brand" href="http://dailybruin.com/usac-special-election-2014/">USAC Special Election 2014</a>
            <ul class="nav">
              <li class="active"><a href="/usac-special-election-2014/">Ballot Measures & Candidates</a></li>
              <li><a href="http://dailybruin.com/usac-special-election-2014/endorsements">Endorsements</a></li>
            </ul>
        </div>
      </div>
    </div>

    <div id='content' class='row-fluid navigation'>

      <div class='span8' style="margin-right: 10px">

        <a title='USAC Elections' href='http://dailybruin.com/usac-special-election-2014'><img id='banner' src='http://dailybruin.com/images/2014/10/usac-special-election-banner.png'/></a>

        <div class="thumbnail">
        <h4>Introduction</h4>
        <p>The Undergraduate Students Association Council is the representative body for more than 28,000 UCLA undergraduate students. This week, USAC will hold a special election to fill two of 14 councilmember seats. Special elections, as well as elections without any formal slate participation, are a rare event in UCLA history.</p>

        <p>USAC manages about $4 million in student fees each year, appoints students to campus committees and aims to advocate for students at the university, local and national levels.</p>

        <h4>How can I vote in the special election?</h4>
        <p>Students can vote by logging in to MyUCLA from Tuesday at 12 p.m. to Thursday at 12 p.m.</p>

        <h4>When are results announced?</h4>
        <p>The USAC Election Board will announce the election results tentatively at 7 p.m. Friday at Meyerhoff Park.  </p>

        <h4>What is the USAC Election Board?</h4>
        <p>The Election Board is appointed by USAC and is tasked with running USAC elections. The board, which is meant to be an unbiased body, holds events to promote the election and educate students about the candidates and measures on the election ballot. Election Board members also sanction candidates if they violate campaigning rules. </p>
        
  		  </div>
		    <br>
        <div class="thumbnail">
        <h2>Ballot Measures</h2>
        <hr>
        <h3>The Bruin Diversity Referendum of 2014</h3>
        <p>The referendum would raise student fees by $9.93 per quarter to help fund certain diversity, retention and outreach programs on campus. If it passes with a majority vote, the referendum would take effect in spring.</p>
        <h3>The Green Initiative Fund Extension</h3>
        <p>The Green Initiative Fund, which uses funds from quarterly student fees to support environmental sustainability projects on campus, is currently set to expire in the spring of 2018. Each student currently pays about $4 per quarter for the fund, but the referendum would extend the fee indefinitely.</p>
        <h3>Temporary vacancy constitutional amendment</h3>
        <p>The constitutional amendment would clarify how vacancies on USAC are filled, extend the timeline for council to hold special elections and prevent special elections from taking place during school breaks. Constitutional amendments require the approval of two-thirds of voting students.</p>
        <b>
        </div>


		    <div class="span12" id='display'>
          <div>
            <h4 style='font-style:italic' class='grey'> (Candidates: click category below to expand) </h4>
          </div> 

		    </div>
       
      </div>

       <?php get_sidebar(); ?>


    </div>
     
    <div id='content' class='row-fluid'>

      <div class='span8' id='display'>

      <!-- Candidate Display Generated Through Script -->

      </div>

    </div>

  </div>

</div><!-- end div#usac page candidates -->  

<script type="text/javascript">


  
  var SORTYPE = {
    OFFICE : 1,
  }

  var outersort = SORTYPE.OFFICE;

  var OFFICE = {
    TRANSFER_REP : 1,
    GENERAL_REP : 2,
  }

  function getString(x)
  {
    switch(x)
    {
      case OFFICE.TRANSFER_REP:
        return "TRANSFER REPRESENTATIVE";
		break;
      case OFFICE.GENERAL_REP:
        return "GENERAL REPRESENTATIVE 2";
		break;
      case BALLOT.MEASURE:
        return "BALLOT MEASURE";
      default:
        return "DEFAULT";
    }
  }

  var c = []; //Candidates array

  var o0 = {};
    o0.fname = "Youmun"; //First name
    o0.lname = "Alhou"; //Last name
    o0.office = OFFICE.GENERAL_REP; //Office
    o0.picture = "http://dailybruin.com/images/2014/10/web.YoumunAlhlou1-200x300.jpg"; //Picture name
    o0.bio = "Lots of info."; //Candidate bio
    o0.major = "International Development Studies"; //Candidate Major
    o0.year = "Fourth"; //Year

    o0.plat = [];
    o0.plat.push("Increase collaboration between student groups through The Perspectives Showcase");
    o0.plat.push("Advocate for more resources regarding outside opportunities by creating resources to guide students through the study abroad process and revamp BruinView");

  c.push(o0);

  var o1 = {};
    o1.fname = "Sofia Moreno"; //First name
    o1.lname = "Haq"; //Last name
    o1.office = OFFICE.GENERAL_REP; //Office
    o1.picture = "http://dailybruin.com/images/2014/10/web.SofiaMoreno1-200x300.jpg"; //Picture name
    o1.bio = "Lots of info."; //Candidate bio
    o1.major = "Gender Studies Student"; //Candidate Major
    o1.year = "Fifth"; //Year
    //o1.winner = true;

    o1.plat = [];
    o1.plat.push("After Hours: Extend van service hours");
    o1.plat.push("Take it to The Hill: Provide resources on The Hill that all students can utilize");
    o1.plat.push("International Love: Create quarterly multicultural festivals");
    o1.plat.push("Welcome to L.A.: provide a monthly guide to life in L.A,");

  c.push(o1);

  var o2 = {};
    o2.fname = "Allan"; //First name
    o2.lname = "Kew"; //Last name
    o2.office = OFFICE.TRANSFER_REP; //Office
    o2.picture = "http://dailybruin.com/images/2014/10/web.AllanKew-200x300.jpg"; //Picture name
    o2.bio = "Lots of info."; //Candidate bio
    o2.major = "Political Science"; //Candidate Major
    o2.year = "Third"; //Year

    o2.plat = [];
    o2.plat.push("Reinvest in transfer resources");
    o2.plat.push("Create an organized transfer community");
    o2.plat.push("Establish a venue for transfers to have their voices heard");
    o2.plat.push("Revitalize the connection between transfer student organizations and USAC");

  c.push(o2);

  var o3 = {};
    o3.fname = "Michelle"; //First name
    o3.lname = "Balatbat"; //Last name
    o3.office = OFFICE.TRANSFER_REP; //Office
    o3.picture = "http://dailybruin.com/images/2014/10/web.MichelleBalatbat-200x300.jpg"; //Picture name
    o3.bio = "Lots of info."; //Candidate bio
    o3.major = "Political Science"; //Candidate Major
    o3.year = "Fourth"; //Year

    o3.plat = [];
    o3.plat.push("Transfer Success Guide: Compilation of resources");
    o3.plat.push("Transfers Go To Work: Put on transfer-specific workshops");
    o3.plat.push("Transfer-Themed Housing: Consolidate transfer dorms into transfer-themed floors ");

  c.push(o3);

  var o4 = {};
    o4.fname = "Negeen"; //First name
    o4.lname = "Sadeghi-Movahed"; //Last name
    o4.office = OFFICE.TRANSFER_REP; //Office
    o4.picture = "http://dailybruin.com/images/2014/10/web.NegeenSadeghi-Movahed1-199x300.jpg"; //Picture name
    o4.bio = "Lots of info."; //Candidate bio
    o4.major = "Political Science"; //Candidate Major
    o4.year = "Fourth"; //Year
    //o4.winner = true;

    o4.plat = [];
    o4.plat.push("Invest in Transfer Success: Create an academic advising guide and advocate for a transfer center");
    o4.plat.push("Late Night Bruin Bus: Extend hours of two stops");
    o4.plat.push("Toast to Transfers: Host quarterly mixers and a transfer graduation");

  c.push(o4);

  function spliceFunc(x)
  {
     return function a(b) {return b.office;}
  }

  function headerHTML(x,c)
  {

    var id = "accordion" + c;

    var href = "collapse" + c;

    var header = "<h3 class='headers'>" + getString(x) + "</h3>";

    var string = "";

    string += "<div class='accordion' id='" + id + "'>";
    string +=   "<div class='accordion-group'>";
    string +=   "<div class='accordion-heading'>";
    string +=     "<a class='accordion-toggle' data-toggle='collapse' data-parent='#" + id + "' href='#" + href + "'>";
    string +=     header;
    string +=     "</a>";
    string +=   "</div>";
    string +=   "<div id='" + href + "' class='accordion-body collapse out'>";
    string +=   "<div class='accordion-inner'>";

    return string;
  }

  function candidateHTML(o,c)
  {

    var id = "accordion" + c;

    var href = "collapse" + c;

    var string = "";
      
    //if (o.winner)
      //string += "<div class='row candidate' style='background-color: #65A0CF;'>"; 
      string += "<div class='row candidate'>";

      string +=   "<div class='offset1 span2'>";

      string +=     "<p align='center'><img class='candimg' src='" + o.picture + "' style='border-color:#0011FF;'/><h3 class='elections' style='text-align:center;'>" + o.fname + " " + o.lname;
      string +=   "</p></h3></div>";

      string +=   "<div class='span3' style='margin-top:32px;'>";

    string +=     "<h4 class='spacer'>Major:</h4><h4 class='candinfo'>  " + o.major + "</h4>";
    if (o.major2 != undefined)
      string +=     "<h4 class='spacer'>" + o.major2 + "</h4>";
      string +=     "<h4 class='spacer'>Year:</h4><h4 class='candinfo'>  " + o.year + "</h4>";

      string += "</div>";

      string +=  "<div class='span6'>";

      if (o.winner)
        string +=     "<h3 style='font-style:bold; color: #0327AF;'><u>ELECTED</u></h3>";

      string += "<h4 class='platforms'>Platforms</h4>"

      string += "<ul>"

      if (o.plat != undefined)
      {
        for (var i = 0; i < o.plat.length; i++)
        {
          string += "<li class='platforms'>"

          string += o.plat[i];

          string += "</li>"

        }
      }     
      string += "</ul>"
      string +=     "</div></div>";

    return string;
  }

  function display()
  {
    var outer = [];

    var splicer = spliceFunc(outersort);

    for (var i=0; i < c.length; i++)
    {
      var type = splicer(c[i]);

      for(var j=0; j <= outer.length; j++)
      {
        if (j == outer.length)
        {
          var arrayTuple = [type, []];
          arrayTuple[1].push(c[i]);
          outer.push(arrayTuple);
          break;
        }

        if (type == outer[j][0])
        {
          outer[j][1].push(c[i]);
          break;
        }
      }
    }
	
    var counter = 0;
    var collector = "";
    var inCollector = "";
    var headerclose = "</div></div></div></div>";

    for(var j=0; j < outer.length; j++)
    {
      var header = headerHTML(outer[j][0], counter);
      collector += header;
      counter++;

      inCollector= "";
      for (var k = 0; k < outer[j][1].length; k++)
      {
        var candidate = candidateHTML(outer[j][1][k], counter);

        if (outer[j][1][k].winner)
          inCollector = candidate + inCollector;
        else
          inCollector += candidate;
        counter++;

      }
      collector += inCollector;
      collector += headerclose;

    }

    $('#display').append(collector);
  }

  $(document).ready(function(){
    display();
  });
</script>

<?php get_footer(); ?>
<!-- Page by Daniel Yao -->