<?php/*
Template Name: USAC Elections Candidate 2014
*/ ?>

<?php get_header(); ?>
<meta property="og:image" content="http://dailybruin.com/images/2014/05/usac-election-2014-fbSharePhoto.png" />
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
          <a class="brand" href="http://dailybruin.com/usac-elections-2014/">USAC Election 2014</a>
            <ul class="nav">
              <li><a href="http://dailybruin.com/usac-elections-2014/">Home</a></li>
              <li class="active"><a href="/usac-elections-2014/candidates">Candidates</a></li>
              <li><a href="/usac-elections-2014/endorsements">Endorsements</a></li>
              <li><a href="/usac-elections-2014/campaign-violations">Campaign Violations</a></li>
              <li><a href="http://my.ucla.edu/">Vote Here</a></li>
            </ul>
        </div>
      </div>
    </div>

    <div id='content' class='row-fluid navigation'>

      <div class='span9'>

        <a title='USAC Elections' href='/usac-elections-2014/'><img id='banner' src='http://dailybruin.com/images/2014/05/usac-elections14-banner2.png'/></a>


        <div class="thumbnail">
          <p style="text-align:center"><b>
Thirty candidates are running for the 13 elected USAC positions in this year's highly contested elections. The majority of candidates are running with the Bruins United, LET'S ACT! or FIRED UP! slates, and one candidate is running with the slate ¡Bruin Satyrists! Slates are groups of students who combine their resources and run on similar platforms, similar to political parties.</b></p>
        </div>
        

        <div>
          <h4>Sort by: </h4>
        </div>

        <div class="btn-group">
          <button id="Office" class="btn-large btn-success" onclick='setDisplay(SORTYPE.OFFICE);'>Office</button>
          <button id="Slate" class="btn-large" onclick='setDisplay(SORTYPE.SLATE);'>Slate</button>
        </div>

        <div>
          <h4 style='font-style:italic' class='grey'> (Click category below to expand) </h4>
        </div> 

       
      </div>

      <div class="span3">
        <?php get_template_part('ad','side'); ?>
      </div>

    </div>

    <div id='content' class='row-fluid'>

      <div class='span12' id='display'>

      <!-- Candidate Display Generated Through Script -->

      </div>


    </div>

  </div>

	
<div id='preload'>

  <img src="http://dailybruin.com/images/2014/05/baral.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/Badalich.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/rosen.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/mercier.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/garfio.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/wong.jpeg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/Singh.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/roth.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/williams.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/satyedev.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/Sadeghi-Movahed.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/murphy.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/gregweb.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/Nguyen.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/gutierrez.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/garcia.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/Medhekar.jpg" width="1" height="1"/>; //Picture name
  <img src="hhttp://dailybruin.com/images/2014/05/Galbadores.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/lasher.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/Friedman.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/Kiang.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/quintanilla.jpg" width="1" height="1"/>; //Picture name
  <img src="http://dailybruin.com/images/2014/05/Rebosura.jpg" width="1" height="1"/>; //Picture name
<img src="http://dailybruin.com/images/2014/05/Rodriguez.jpg" width="1" height="1"/>; //Picture name
<img src="http://dailybruin.com/images/2014/05/contreras.jpg" width="1" height="1"/>; //Picture name
<img src="http://dailybruin.com/images/2014/05/I.Garcia.jpg" width="1" height="1"/>; //Picture name
<img src="http://dailybruin.com/images/2014/05/patterson.jpg" width="1" height="1"/>; //Picture name
<img src="http://dailybruin.com/images/2014/05/Xiongweb.jpg" width="1" height="1"/>; //Picture name
<img src="http://dailybruin.com/images/2014/05/http://dailybruin.com/images/2014/05/singh.jpg" width="1" height="1"/>; //Picture name

</div>

</div><!-- end div#usac page candidates -->  

<script type="text/javascript">


  
  var SORTYPE = {
    OFFICE : 1,
    SLATE : 2,
    RANDOM : 3,
    NAME : 18
  }

  var outersort = SORTYPE.OFFICE;

  var innersort = SORTYPE.RANDOM;

  

  var SLATE = {
    BUNITED : 4,
    BALLY : 5,
    LETSACT : 6,
    BSATYRIST : 20,
    FIREDUP : 21,
    INDEPENDENT : 19
  }

  var OFFICE = {
    PRESIDENT : 7,
    INTERNALVP : 8,
    EXTERNALVP : 9,
    GENERALREP : 10,
    ACAAFFAIRS : 11,
    CAMPUSEVENTS : 12,
    COMMSERV : 13,
    CULTURAL : 14,
    FACILITIES : 15,
    FINANCIALSUPPORT : 16,
    STUDENTWELLNESS : 17
  }

  function getString(x)
  {
    switch(x)
    {
      case SORTYPE.OFFICE:
        return "Office";
      case SORTYPE.SLATE:
        return "Slate";
      case SORTYPE.RANDOM:
        return "Random";
      case SORTYPE.NAME:
        return "Name";
      case SLATE.BUNITED:
        return "Bruins United";
      case SLATE.BSATYRIST:
        return "Bruin Satyrists";
      case SLATE.BALLY:
        return "Bruin Alliance";
      case SLATE.LETSACT:
        return "LET'S ACT!";
      case SLATE.FIREDUP:
        return "FIRED UP!";
      case SLATE.INDEPENDENT:
        return "Independent";
      case OFFICE.PRESIDENT:
        return "President";
      case OFFICE.INTERNALVP:
        return "Internal Vice President";
      case OFFICE.EXTERNALVP:
        return "External Vice President";
      case OFFICE.GENERALREP:
        return "General Representatives";
      case OFFICE.ACAAFFAIRS:
        return "Academic Affairs Commissioner";
      case OFFICE.CAMPUSEVENTS:
        return "Campus Events Commissioner";
      case OFFICE.COMMSERV:
        return "Community Service Commissioner";
      case OFFICE.CULTURAL:
        return "Cultural Affairs Commissioner";
      case OFFICE.FACILITIES:
        return "Facilities Commissioner";
      case OFFICE.FINANCIALSUPPORT:
        return "Financial Supports Commissioner";
      case OFFICE.STUDENTWELLNESS:
        return "Student Wellness Commissioner";

      default:
        return "Default";
    }
  }

  var c = []; //Candidates array

  var o0 = {};
    o0.fname = "Devin"; //First name
    o0.lname = "Murphy"; //Last name
    o0.slate = SLATE.LETSACT; //Party affiliation
    o0.office = OFFICE.PRESIDENT; //Office
    o0.picture = "http://dailybruin.com/images/2014/05/murphy.jpg"; //Picture name
    o0.bio = "Lots of info."; //Candidate bio
    o0.major = "Political Science and African American Studies"; //Candidate Major
    o0.year = "Third"; //Year

    o0.plat = [];
    o0.plat.push("Implement UC Diversity Pipeline Plan");
    o0.plat.push("Revitalize Student Mental Health Services");
    o0.plat.push("Ensure USAC/UCLA/UC Admin. Accountability and Transparency");
    o0.plat.push("Establish Cafe Powell");

  c.push(o0);

  var o1 = {};
    o1.fname = "Miriam"; //First name
    o1.lname = "Rodriguez"; //Last name
    o1.slate = SLATE.FIREDUP; //Party affiliation
    o1.office = OFFICE.PRESIDENT; //Office
    o1.picture = "http://dailybruin.com/images/2014/05/Rodriguez.jpg"; //Picture name
    o1.bio = "Lots of info."; //Candidate bio
    o1.major = "Spanish and Chicano/a Studies"; //Candidate Major
    o1.year = "Fourth"; //Year
    //o1.winner = true;

    o1.plat = [];
    o1.plat.push("Students first, not USAC!");
    o1.plat.push("Student fees will support student groups");
    o1.plat.push("Not $1 of fees and surplus $ to USAC initiatives");
    o1.plat.push("Cut back USAC stipends");
    o1.plat.push("Unify UCLA: Strengthen campus climate");
    o1.plat.push("Electoral Reform");

  c.push(o1);

  var o2 = {};
    o2.fname = "Sunny"; //First name
    o2.lname = "Singh"; //Last name
    o2.slate = SLATE.BUNITED; //Party affiliation
    o2.office = OFFICE.PRESIDENT; //Office
    o2.picture = "http://dailybruin.com/images/2014/05/singh.jpg"; //Picture name
    o2.bio = "Lots of info."; //Candidate bio
    o2.major = "Economics and History"; //Candidate Major
    o2.year = "Third"; //Year

    o2.plat = [];
    o2.plat.push("Make USAC Responsible and Relevant to You");
    o2.plat.push("Maximize Post-Grad Success");
    o2.plat.push("Celebrate the Bruin Experience with Student Art and Senior Week");
    o2.plat.push("Introduce a Campaign to Address Mental Health of UCLA Students");

  c.push(o2);

  var o3 = {};
    o3.fname = "Avinoam"; //First name
    o3.lname = "Baral"; //Last name
    o3.slate = SLATE.BUNITED; //Party affiliation
    o3.office = OFFICE.INTERNALVP; //Office
    o3.picture = "http://dailybruin.com/images/2014/05/baral.jpg"; //Picture name
    o3.bio = "Lots of info."; //Candidate bio
    o3.major = "Human Biology and Society"; //Candidate Major
    o3.year = "Third"; //Year

    o3.plat = [];
    o3.plat.push("Increase accessibility / sustainability of student group funding");
    o3.plat.push("Expand safety resources in Westwood");
    o3.plat.push("Establish Transfer Council & expand resources");
    o3.plat.push("Create Student Vendor Fair & Food Options for Finals");

  c.push(o3);

  var o4 = {};
    o4.fname = "Harwind"; //First name
    o4.lname = "Singh Lasher"; //Last name
    o4.slate = SLATE.FIREDUP; //Party affiliation
    o4.office = OFFICE.INTERNALVP; //Office
    o4.picture = "http://dailybruin.com/images/2014/05/lasher.jpg"; //Picture name
    o4.bio = "Lots of info."; //Candidate bio
    o4.major = "Sociology"; //Candidate Major
    o4.year = "Third"; //Year
    //o4.winner = true;

    o4.plat = [];
    o4.plat.push("24 hr Wooden");
    o4.plat.push("Cut Programming Bureaucracy! ");
    o4.plat.push("Increase dietary options on campus - Halal, Kosher, Vegan, etc. ");
    o4.plat.push("Create nondenominational meditation space");

  c.push(o4);

  var o5 = {};
    o5.fname = "Negeen"; //First name
    o5.lname = "Sadeghi-Movahed"; //Last name
    o5.slate = SLATE.LETSACT; //Party affiliation
    o5.office = OFFICE.INTERNALVP; //Office
    o5.picture = "http://dailybruin.com/images/2014/05/Sadeghi-Movahed.jpg"; //Picture name
    o5.bio = "Lots of info."; //Candidate bio
    o5.major = "Political Science"; //Candidate Major
    o5.year = "Third"; //Year
    //o5.winner = true;

    o5.plat = [];
    o5.plat.push("Implement “Take Back USAC” Initiative to make resolutions more accessible/transparent");
    o5.plat.push("Establish a Seminar for Transfer Success");
    o5.plat.push("Develop a Common Funding Application");
    o5.plat.push("Host Quarterly “Meet the Orgs Mixers”");

  c.push(o5);

  var o6 = {};
    o6.fname = "Conrad"; //First name
    o6.lname = "Contreras"; //Last name
    o6.slate = SLATE.LETSACT; //Party affiliation
    o6.office = OFFICE.EXTERNALVP; //Office
    o6.picture = "http://dailybruin.com/images/2014/05/contreras.jpg"; //Picture name
    o6.bio = "Lots of info."; //Candidate bio
    o6.major = "Human Biology and Society and Communication Studies"; //Candidate Major
    o6.year = "Third"; //Year

    o6.plat = [];
    o6.plat.push("Strengthen Bruin engagement in 2014 election");
    o6.plat.push("Prioritize funding of UC and financial aid");
    o6.plat.push("Advocate for policies that increase diversity and access");
    o6.plat.push("Bridge UCLA to local community organizing efforts");

  c.push(o6);

  var o7 = {};
    o7.fname = "Aurelia"; //First name
    o7.lname = "Friedman"; //Last name
    o7.slate = SLATE.BUNITED; //Party affiliation
    o7.office = OFFICE.EXTERNALVP; //Office
    o7.picture = "http://dailybruin.com/images/2014/05/Friedman.jpg"; //Picture name
    o7.bio = "Lots of info."; //Candidate bio
    o7.major = "Political Science"; //Candidate Major
    o7.year = "Second"; //Year
    //o7.winner = true;

    o7.plat = [];
    o7.plat.push("Voter Registration and Education on the Hill");
    o7.plat.push("Create Local Internships and Coalitions");
    o7.plat.push("Advocate for Reforming the CA Master Plan for Higher Education");

  c.push(o7);

  var o8 = {};
    o8.fname = "Angel"; //First name
    o8.lname = "Garfio"; //Last name
    o8.slate = SLATE.FIREDUP; //Party affiliation
    o8.office = OFFICE.EXTERNALVP; //Office
    o8.picture = "http://dailybruin.com/images/2014/05/garfio.jpg"; //Picture name
    o8.bio = "Lots of info."; //Candidate bio
    o8.major = "History"; //Candidate Major
    o8.year = "Second"; //Year
    //o8.winner = true;

    o8.plat = [];
    o8.plat.push("Redefine External Affairs!");
    o8.plat.push("Expansion of Loan Forgiveness Program");
    o8.plat.push("Strengthen Community ties to Los Angeles");
    o8.plat.push("Bring Back Affirmative Action");

  c.push(o8);

  var o9 = {};
    o9.fname = "Allyson"; //First name
    o9.lname = "Bach"; //Last name
    o9.slate = SLATE.BUNITED; //Party affiliation
    o9.office = OFFICE.ACAAFFAIRS; //Office
    o9.picture = "http://dailybruin.com/images/2014/05/bach.jpg"; //Picture name
    o9.bio = "Lots of info."; //Candidate bio
    o9.major = "Political Science"; //Candidate Major
    o9.year = "Third"; //Year

    o9.plat = [];
    o9.plat.push("Create a Lobby Corps to advocate for the Diversity Requirement");
    o9.plat.push("Enhance pre-professional preparation");
    o9.plat.push("Streamline class planning to aid Bruins and improve enrollment");

  c.push(o9);

  var o10 = {};
    o10.fname = "Jazz"; //First name
    o10.lname = "Kiang"; //Last name
    o10.slate = SLATE.FIREDUP; //Party affiliation
    o10.office = OFFICE.ACAAFFAIRS; //Office
    o10.picture = "http://dailybruin.com/images/2014/05/Kiang.jpg"; //Picture name
    o10.bio = "Lots of info."; //Candidate bio
    o10.major = "Asian American Studies"; //Candidate Major
    o10.year = "Second"; //Year

    o10.plat = [];
    o10.plat.push("Pass Diversity Requirement!");
    o10.plat.push("Create Ethnic Resource Centers");
    o10.plat.push("Admissions Reform – Alternative Admissions Program");
    o10.plat.push("Eliminate Expected Cumulative Progress (ECP)");

  c.push(o10);

  var o11 = {};
    o11.fname = "Janay"; //First name
    o11.lname = "Williams"; //Last name
    o11.slate = SLATE.LETSACT; //Party affiliation
    o11.office = OFFICE.ACAAFFAIRS; //Office
    o11.picture = "http://dailybruin.com/images/2014/05/williams.jpg"; //Picture name
    o11.bio = "Lots of info."; //Candidate bio
    o11.major = "Microbiology, Immunology and Molecular Genetics"; //Candidate Major
    o11.year = "Third"; //Year
    //o11.winner = true;

    o11.plat = [];
    o11.plat.push("Create a diversity requirement task force");
    o11.plat.push("Increase transparency and accountability of AAC appointments");
    o11.plat.push("Form paid research fellowships with UCLA libraries");
    o11.plat.push("Develop a holistic South Campus Success guide");

  c.push(o11);

  var o12 = {};
    o12.fname = "Alex “Max”"; //First name
    o12.lname = "Mercier"; //Last name
    o12.slate = SLATE.LETSACT; //Party affiliation
    o12.office = OFFICE.FACILITIES; //Office
    o12.picture = "http://dailybruin.com/images/2014/05/mercier.jpg"; //Picture name
    o12.bio = "Lots of info."; //Candidate bio
    o12.major = "Political Science"; //Candidate Major
    o12.year = "Third"; //Year

    o12.plat = [];
    o12.plat.push("Create more urban garden space");
    o12.plat.push("Advocate for increased number of gender inclusive restrooms");
    o12.plat.push("Streamline the process for reserving recreation/meeting space");
    o12.plat.push("Improve relations between UCLA community and UCPD");

  c.push(o12);

  var o13 = {};
    o13.fname = "Teri"; //First name
    o13.lname = "Nguyen"; //Last name
    o13.slate = SLATE.FIREDUP; //Party affiliation
    o13.office = OFFICE.FACILITIES; //Office
    o13.picture = "http://dailybruin.com/images/2014/05/Nguyen.jpg"; //Picture name
    o13.bio = "Lots of info."; //Candidate bio
    o13.major = "Microbiology, Immunology and Molecular Genetics"; //Candidate Major
    o13.year = "Third"; //Year
    //o13.winner = true;

    o13.plat = [];
    o13.plat.push("Create payment plan options for programmatic facilities!");
    o13.plat.push("Improve South Campus Wifi");
    o13.plat.push("Cut bureaucracy from booking spaces");
    o13.plat.push("Increase accessibility for students with disabilities");

  c.push(o13);

  var o14 = {};
    o14.fname = "Carlos"; //First name
    o14.lname = "Quintanilla"; //Last name
    o14.slate = SLATE.BUNITED; //Party affiliation
    o14.office = OFFICE.FACILITIES; //Office
    o14.picture = "http://dailybruin.com/images/2014/05/quintanilla.jpg"; //Picture name
    o14.bio = "Lots of info."; //Candidate bio
    o14.major = "History"; //Candidate Major
    o14.year = "Third"; //Year

    o14.plat = [];
    o14.plat.push("Centralize student sustainability efforts");
    o14.plat.push("Advocate for programs and services that promote safe spaces");
    o14.plat.push("The Thirst is Real Campaign: educating students about water conservation");

  c.push(o14);

  var o15 = {};
    o15.fname = "Winnie"; //First name
    o15.lname = "Galbadores"; //Last name
    o15.slate = SLATE.LETSACT; //Party affiliation
    o15.office = OFFICE.FINANCIALSUPPORT; //Office
    o15.picture = "http://dailybruin.com/images/2014/05/Galbadores.jpg"; //Picture name
    o15.bio = "Lots of info."; //Candidate bio
    o15.major = "Sociology"; //Candidate Major
    o15.year = "Third"; //Year
    //o15.winner = true;

    o15.plat = [];
    o15.plat.push("Increase the efficiency of Financial Aid Office by advocating for peer financial aid counselors");
    o15.plat.push("Financial Aid Debit Card");
    o15.plat.push("Advocate for more affordable parking");
    o15.plat.push("Expand Scholarship Resource Center");

  c.push(o15);

  var o16 = {};
    o16.fname = "Gabriel"; //First name
    o16.lname = "Gutierrez"; //Last name
    o16.slate = SLATE.FIREDUP; //Party affiliation
    o16.office = OFFICE.FINANCIALSUPPORT; //Office
    o16.picture = "http://dailybruin.com/images/2014/05/gutierrez.jpg"; //Picture name
    o16.bio = "Lots of info."; //Candidate bio
    o16.major = "Sociology"; //Candidate Major
    o16.year = "Second"; //Year
    //o16.winner = true;

    o16.plat = [];
    o16.plat.push("DACA Scholarships for all!");
    o16.plat.push("Stop increase to course material and instructional enhancement fees");
    o16.plat.push("Charge instructional enhancement fees at the beginning of the quarter");
    o16.plat.push("Rent control in Westwood");

  c.push(o16);

  var o17 = {};
    o17.fname = "Heather"; //First name
    o17.lname = "Rosen"; //Last name
    o17.slate = SLATE.BUNITED; //Party affiliation
    o17.office = OFFICE.FINANCIALSUPPORT; //Office
    o17.picture = "http://dailybruin.com/images/2014/05/rosen.jpg"; //Picture name
    o17.bio = "Lots of info."; //Candidate bio
    o17.major = "Political Science"; //Candidate Major
    o17.year = "Second"; //Year
    //o17.winner = true;

    o17.plat = [];
    o17.plat.push("Parking-Transportation Scholarship and Resources");
    o17.plat.push("Bruins on a Budget: Cut Day-to-Day Costs");
    o17.plat.push("Gettin’ Paid, Gettin’ Aid: Increase Accessibility to Aid and Scholarships");

  c.push(o17);

  var o18 = {};
    o18.fname = "Savannah"; //First name
    o18.lname = "Badalich"; //Last name
    o18.slate = SLATE.INDEPENDENT; //Party affiliation
    o18.office = OFFICE.STUDENTWELLNESS; //Office
    o18.picture = "http://dailybruin.com/images/2014/05/Badalich.jpg"; //Picture name
    o18.bio = "Lots of info."; //Candidate bio
    o18.major = "Gender Studies"; //Candidate Major
    o18.year = "Third"; //Year
    //o18.winner = true;

    o18.plat = [];
    o18.plat.push("Combat sexual and gender-based violence through education on consent and gender");
    o18.plat.push("Educate students on depression, addiction, suicide and stigma");
    o18.plat.push("Promote positive body image by educating on eating disorders");

  c.push(o18);

  var o19 = {};
    o19.fname = "Greg"; //First name
    o19.lname = "Kalfayan"; //Last name
    o19.slate = SLATE.INDEPENDENT; //Party affiliation
    o19.office = OFFICE.CAMPUSEVENTS; //Office
    o19.picture = "http://dailybruin.com/images/2014/05/gregweb.jpg"; //Picture name
    o19.bio = "Lots of info."; //Candidate bio
    o19.major = "Political Science"; //Candidate Major
    o19.year = "Third"; //Year

    o19.plat = [];
    o19.plat.push("Reach out to transfer students");
    o19.plat.push("Prioritize student safety and convenience at events");
    o19.plat.push("Continue the tremendous CEC concerts, films, and speakers programs");

  c.push(o19);

  var o20 = {};
    o20.fname = "Cynthia"; //First name
    o20.lname = "Wong"; //Last name
    o20.slate = SLATE.INDEPENDENT; //Party affiliation
    o20.office = OFFICE.COMMSERV; //Office
    o20.picture = "http://dailybruin.com/images/2014/05/wong.jpeg"; //Picture name
    o20.bio = "Lots of info."; //Candidate bio
    o20.major = "Physiological Sciences"; //Candidate Major
    o20.year = "Third"; //Year
    //o20.winner = true;

    o20.plat = [];
    o20.plat.push("Improve project sustainability both internally and in the community");
    o20.plat.push("Greater student engagement through expansion of service opportunities");
    o20.plat.push("Connect service to personal and professional development ");

  c.push(o20);

  var o21 = {};
    o21.fname = "Irmary"; //First name
    o21.lname = "Garcia"; //Last name
    o21.slate = SLATE.LETSACT; //Party affiliation
    o21.office = OFFICE.CULTURAL; //Office
    o21.picture = "http://dailybruin.com/images/2014/05/I.Garcia.jpg"; //Picture name
    o21.bio = "Lots of info."; //Candidate bio
    o21.major = "Political Science"; //Candidate Major
    o21.year = "Third"; //Year

    o21.plat = [];
    o21.plat.push("Implement workshops in Cultural Arts Collective");
    o21.plat.push("BruinsVote concert with EVP office");
    o21.plat.push("Create cultural events calendar to promote cultural programs");
    o21.plat.push("Institutionalize response to hate instances on campus");

  c.push(o21);

  var o22 = {};
    o22.fname = "Erineo"; //First name
    o22.lname = "Garcia"; //Last name
    o22.slate = SLATE.LETSACT; //Party affiliation
    o22.office = OFFICE.GENERALREP; //Office
    o22.picture = "http://dailybruin.com/images/2014/05/garcia.jpg"; //Picture name
    o22.bio = "Lots of info."; //Candidate bio
    o22.major = "International Development Studies and Political Science"; //Candidate Major
    o22.year = "Third"; //Year
    //o22.winner = true;

    o22.plat = [];
    o22.plat.push("Develop Text-n-Go system to reduce wait times at campus coffee shops");
    o22.plat.push("Host Queer Conference to empower the queer and ally community");
    o22.plat.push("Centralize postgraduate resources");
    o22.plat.push("Revitalize UCLA student group website");

  c.push(o22);      

  var o23 = {};
    o23.fname = "Sachin"; //First name
    o23.lname = "Priapism Medhekar"; //Last name
    o23.slate = SLATE.BSATYRIST; //Party affiliation
    o23.office = OFFICE.GENERALREP; //Office
    o23.picture = "http://dailybruin.com/images/2014/05/Medhekar.jpg"; //Picture name
    o23.bio = "Lots of info."; //Candidate bio
    o23.major = "Computer Science"; //Candidate Major
    o23.year = "Third"; //Year

    o23.plat = [];
    o23.plat.push("Increasing pay for Gen Rep from its current amount of just $672/month");
    o23.plat.push("Installing more computers in the dining halls");
    o23.plat.push("Bringing tobacco back");
    o23.plat.push("Decreasing traffic on the 405");

  c.push(o23);  

  var o24 = {};
  o24.fname = "Kevin"; //First name
  o24.lname = "Patterson"; //Last name
  o24.slate = SLATE.BUNITED; //Party affiliation
  o24.office = OFFICE.GENERALREP; //Office
  o24.picture = "http://dailybruin.com/images/2014/05/patterson.jpg"; //Picture name
  o24.bio = "Lots of info."; //Candidate bio
  o24.major = ""; //Candidate Major
  o24.year = ""; //Year

  o24.plat = [];
  o24.plat.push("Increasing Student Group Funding through Pauley Concession Nights");
  o24.plat.push("Bruin Story Swap: Events for Cross-Community Interactions");
  o24.plat.push("Boosting Campus Morale During Winter Quarter with UCLrAve");

  c.push(o24);  

    var o25 = {};
  o25.fname = "Francesca"; //First name
  o25.lname = "Rebosura "; //Last name
  o25.slate = SLATE.LETSACT; //Party affiliation
  o25.office = OFFICE.GENERALREP; //Office
  o25.picture = "http://dailybruin.com/images/2014/05/Rebosura.jpg"; //Picture name
  o25.bio = "Lots of info."; //Candidate bio
  o25.major = "Communications Studies"; //Candidate Major
  o25.year = "Third"; //Year

  o25.plat = [];
  o25.plat.push("Event Planning Online Resource Hub");
  o25.plat.push("“Bruin Talks,” inspired by TED Talks, but for Bruins, by Bruins");
  o25.plat.push("Womyn’s Empowerment Conference for UCLA students and LA Youth");
  o25.plat.push("“Undie Run for LA!” Clothing Drive");

  c.push(o25);  

    var o26 = {};
  o26.fname = "Fabienne"; //First name
  o26.lname = "Roth"; //Last name
  o26.slate = SLATE.BUNITED; //Party affiliation
  o26.office = OFFICE.GENERALREP; //Office
  o26.picture = "http://dailybruin.com/images/2014/05/roth.jpg"; //Picture name
  o26.bio = "Lots of info."; //Candidate bio
  o26.major = "English and Political Science"; //Candidate Major
  o26.year = "Second"; //Year

  o26.plat = [];
  o26.plat.push("Brewin’ card: Coffee Shops rewards program");
  o26.plat.push("Advocate for International Student needs");
  o26.plat.push("411 on the 310: Helping students feel more at home at UCLA  ");

  c.push(o26);  

    var o27 = {};
  o27.fname = "Nihal"; //First name
  o27.lname = "Satyadev"; //Last name
  o27.slate = SLATE.BUNITED; //Party affiliation
  o27.office = OFFICE.GENERALREP; //Office
  o27.picture = "http://dailybruin.com/images/2014/05/satyedev.jpg"; //Picture name
  o27.bio = "Lots of info."; //Candidate bio
  o27.major = "Bioengineering"; //Candidate Major
  o27.year = "Second"; //Year

  o27.plat = [];
  o27.plat.push("Lab Coat Loaner Library - Quarterly Lab Coat Rental");
  o27.plat.push("Bruin Research Expo - Highlighting Undergraduate Research Opportunities");
  o27.plat.push("BRUINspired Conference - Bruins Inspiring Bruins");

  c.push(o27);  

      var o28 = {};
  o28.fname = "Manjot"; //First name
  o28.lname = "Singh"; //Last name
  o28.slate = SLATE.LETSACT; //Party affiliation
  o28.office = OFFICE.GENERALREP; //Office
  o28.picture = "http://dailybruin.com/images/2014/05/Singh.jpg"; //Picture name
  o28.bio = "Lots of info."; //Candidate bio
  o28.major = "Global Studies"; //Candidate Major
  o28.year = "Third"; //Year

  o28.plat = [];
  o28.plat.push("Wellness Festival: Yoga, Meditation, Local Artists");
  o28.plat.push("Symposium to discuss relevant student issues");
  o28.plat.push("Create a cultural space on the Hill");
  o28.plat.push("Host workshops to equip Bruins with practical skills for the workforce");

  c.push(o28);  

      var o29 = {};
  o29.fname = "Der"; //First name
  o29.lname = "Xiong"; //Last name
  o29.slate = SLATE.FIREDUP; //Party affiliation
  o29.office = OFFICE.GENERALREP; //Office
  o29.picture = "http://dailybruin.com/images/2014/05/Xiongweb.jpg"; //Picture name
  o29.bio = "Lots of info."; //Candidate bio
  o29.major = "Asian American Studies"; //Candidate Major
  o29.year = "Second"; //Year

  o29.plat = [];
  o29.plat.push("UCLA-wide preferred gender pronoun system");
  o29.plat.push("Ease international/transfer student transition to UCLA ");
  o29.plat.push("Dental Plan inclusion in UCSHIP");
  o29.plat.push("Free daycare for student parents");
  o29.plat.push("“Drink, Don’t Drive” campaign");

  c.push(o29);  


  function getRandomInt(min, max) 
  {
      return Math.floor(Math.random() * (max - min + 1)) + min;
  }

  function spliceFunc(x)
  {
    switch(x)
    {
      case SORTYPE.OFFICE:
        return function a(b) {return b.office;}
        break;
      case SORTYPE.SLATE:
        return function a(b) {return b.slate;}
        break;
      default:
        return function a(b) {return b.office;}
        break;
    }
  }

  function sortFunc(x)
  {
    var alpha = function a(b,c) {if (b < c) return -1; else if (b > c) return 1; else return 0;};

    switch(x)
    {
      case SORTYPE.RANDOM:
        return function a(b,c) {var x = getRandomInt(0,1); if (x==0) return -1; else return 1; }
        break;
      case SORTYPE.NAME:
        return function a(b,c) {if (a.lname < b.lname) return -1; else if (a.lname > b.lname) return -1; else return alpha(a.fname, b.fname);}
        break;
      default:
        return function a(b,c) {return getRandomInt(-1,1);}
        break;
    }
  }

function randArray(myArray)
{
  var i = myArray.length, j, tempi, tempj;
  if ( i === 0 ) return false;
  while ( --i ) 
  {
    j = Math.floor( Math.random() * ( i + 1 ) );
    tempi = myArray[i];
    tempj = myArray[j];
    myArray[i] = tempj;
    myArray[j] = tempi;
  }
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
    if (o.slate == SLATE.BUNITED)
      string += "<div class='row candidate' style='border-color: #C2E1F2; border-width:7px;'>";
    else if (o.slate == SLATE.LETSACT)
      string += "<div class='row candidate' style='border-color: #F7F499;border-width:7px;'>";
    else if (o.slate == SLATE.BSATYRIST)
      string += "<div class='row candidate' style='border-color: #93BCC4;border-width:7px;'>";
    else if (o.slate == SLATE.INDEPENDENT)
      string += "<div class='row candidate' style='border-color: #A2DEA6; border-width:7px;'>";
    else if (o.slate == SLATE.FIREDUP)
      string += "<div class='row candidate' style='border-color: #dea6a2; border-width:7px;'>";
    else  
      string += "<div class='row candidate'>";

      string +=   "<div class='offset1 span2'>";

      string +=     "<p align='center'><img class='candimg' src='" + o.picture + "' style='border-color:#0011FF;'/><h3 class='elections' style='text-align:center;'>" + o.fname + " " + o.lname;
      string +=   "</p></h3></div>";

      string +=   "<div class='span3' style='margin-top:32px;'>";

    

    if (outersort == SORTYPE.OFFICE)
      string +=     "<h4 class='spacer'>Slate:</h4><h4 class='candinfo'> " + getString(o.slate) + "</h4>";
    else
      string +=     "<h4 class='spacer'>Office:</h4><h4 class='candinfo'>  " + getString(o.office) + "</h4>";

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

      //string +=     "<div class='accordion' id='" + id + "'>";
      //string +=     "<div class='accordion-group'>";
      //string +=     "<div class='accordion-heading'>";
      //string +=       "<a class='accordion-toggle' data-toggle='collapse' data-parent='#" + id + "' href='#"+ href + "'>";
      //string +=       "More Candidate Information";
      //string +=       "</a>";
      //string +=     "</div>";
      //string +=     "<div id='" + href + "' class='accordion-body collapse out'>";
      //string +=     "<div class='accordion-inner'>";
      //string +=       o.bio; 
      //string +=     "</div></div></div></div></div></div>";
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

    var sorter = sortFunc(innersort);

    var counter = 0;
    var collector = "";
    var inCollector = "";
    var headerclose = "</div></div></div></div>";

    if (outersort == SORTYPE.OFFICE)
    {
      for(var j=0; j < outer.length; j++)
      {
        randArray(outer[j][1]);
      }
    }

    //outer.sort( function a(b,c) { if (getString(b[0]) < getString(c[0])) return -1; else if (getString(b[0]) > getString(c[0])) return 1; return 0;} );
    if (outersort == SORTYPE.SLATE)
    {
      randArray(outer);
    }

    for(var j=0; j < outer.length; j++)
    {
      var header = headerHTML(outer[j][0], counter);
      collector += header;
      counter++;

      //$('#display').append(header);

      inCollector= "";
      for (var k = 0; k < outer[j][1].length; k++)
      {
        var candidate = candidateHTML(outer[j][1][k], counter);

        if (outer[j][1][k].winner)
          inCollector = candidate + inCollector;
        else
          inCollector += candidate;
        counter++;

        //$('#display').append(candidate);
      }
      collector += inCollector;
      collector += headerclose;

      //$('#display').append(headerclose);
    }

    $('#display').append(collector);
  }

  function setDisplay(x)
  {
    
    if (x != outersort)
    {

      if (outersort == SORTYPE.SLATE)
      {
        $('#Slate').removeClass('btn-success');
        $('#Office').addClass('btn-success');

      }
      else
      {
        $('#Slate').addClass('btn-success');
        $('#Office').removeClass('btn-success');

      }
    }
    

    outersort = x;

    $('#display').empty();

    display();

  }


  $(document).ready(function(){
    display();
  });

</script>


<?php get_footer(); ?>
