<?php/*
Template Name: USAC Elections Candidate 2013
*/ ?>

<?php get_header(); ?>

<style type='text/css'>

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

img {
  width:95px;
  height:146px;
  margin-top: 30px;
  margin-bottom: 30px;

  /*border-style:solid;
  border-width:medium;
  border-color: #C2C2C2;*/
}

.spacer {
  margin-left: 40px;

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


  <div class="navbar navbar-inverse">
    <div class="navbar-inner">
      <div class="container-fluid">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="#">USAC Elections 2013</a>
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li><a href="/usac-elections">Home</a></li>
            <li class="active"><a href="#">Candidates</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

    <div id='content' class='row-fluid navigation'>

      <div class='span9'>
        
          <h1> USAC Elections 2013: Candidates </h1>

          <p>This year, 23 candidates are running for the 13 elected USAC positions. Nine positions are contested. Three slates, groups of students who pool their resources together and run on similar platforms, are running candidates in the spring elections. Two new slates emerged for this year's elections: Bruin Alliance and LET'S ACT!. Bruin Alliance is running two candidates and LET'S ACT! is running 10. Bruins United is running eight candidates. </p>

          

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

  <img src="/images/features/usac2013/Taylor Bazley.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/John Joanino.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Carly Yoshida.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Lana Habib El-Farra.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Avi Oved.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Maryssa Hall.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Nicole Fossier.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Sunny Singh.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Sam Haws.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Avinoam Baral.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Charmaine Campbell.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Lizzy Naameh.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Devin Murphy.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Darren Ramalho.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Uyen Hoang.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Jessica Kim.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Omar Arce.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Jessica Trumble.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Armen Hadjimanoukian.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Anthony Montalvo.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Lauren Rogers.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Brenda Gutierrez.jpg" width="1" height="1"/>; //Picture name
  <img src="/images/features/usac2013/Savannah Dianne Badalich.jpg" width="1" height="1"/>; //Picture name

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
      case SLATE.BALLY:
        return "Bruin Alliance";
      case SLATE.LETSACT:
        return "LET'S ACT!";
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
        return "Financial Support Commissioner";
      case OFFICE.STUDENTWELLNESS:
        return "Student Wellness Commissioner";

      default:
        return "Default";
    }
  }

  var c = []; //Candidates array

  var o0 = {};
    o0.fname = "Taylor"; //First name
    o0.lname = "Bazley"; //Last name
    o0.slate = SLATE.BALLY; //Party affiliation
    o0.office = OFFICE.PRESIDENT; //Office
    o0.picture = "/images/features/usac2013/Taylor Bazley.jpg"; //Picture name
    o0.bio = "Lots of info."; //Candidate bio
    o0.major = "Political Science"; //Candidate Major
    o0.year = "Third"; //Year
  c.push(o0);

  var o1 = {};
    o1.fname = "Joan"; //First name
    o1.lname = "Joanino"; //Last name
    o1.slate = SLATE.LETSACT; //Party affiliation
    o1.office = OFFICE.PRESIDENT; //Office
    o1.picture = "/images/features/usac2013/John Joanino.jpg"; //Picture name
    o1.bio = "Lots of info."; //Candidate bio
    o1.major = "Sociology"; //Candidate Major
    o1.year = "Third"; //Year
  c.push(o1);

  var o2 = {};
    o2.fname = "Carly"; //First name
    o2.lname = "Yoshida"; //Last name
    o2.slate = SLATE.BUNITED; //Party affiliation
    o2.office = OFFICE.PRESIDENT; //Office
    o2.picture = "/images/features/usac2013/Carly Yoshida.jpg"; //Picture name
    o2.bio = "Lots of info."; //Candidate bio
    o2.major = "English"; //Candidate Major
    o2.year = "Third"; //Year
  c.push(o2);

  var o3 = {};
    o3.fname = "Lana"; //First name
    o3.lname = "Habib El-Farra"; //Last name
    o3.slate = SLATE.LETSACT; //Party affiliation
    o3.office = OFFICE.INTERNALVP; //Office
    o3.picture = "/images/features/usac2013/Lana Habib El-Farra.jpg"; //Picture name
    o3.bio = "Lots of info."; //Candidate bio
    o3.major = "Political Science"; //Candidate Major
    o3.year = "Third"; //Year
  c.push(o3);

  var o4 = {};
    o4.fname = "Avi"; //First name
    o4.lname = "Oved"; //Last name
    o4.slate = SLATE.BUNITED; //Party affiliation
    o4.office = OFFICE.INTERNALVP; //Office
    o4.picture = "/images/features/usac2013/Avi Oved.jpg"; //Picture name
    o4.bio = "Lots of info."; //Candidate bio
    o4.major = "Economics"; //Candidate Major
    o4.year = "Second"; //Year
  c.push(o4);

  var o5 = {};
    o5.fname = "Maryssa"; //First name
    o5.lname = "Hall"; //Last name
    o5.slate = SLATE.LETSACT; //Party affiliation
    o5.office = OFFICE.EXTERNALVP; //Office
    o5.picture = "/images/features/usac2013/Maryssa Hall.jpg"; //Picture name
    o5.bio = "Lots of info."; //Candidate bio
    o5.major = "Political Science and"; //Candidate Major
    o5.major2 = "Afro-American Studies"
    o5.year = "Third"; //Year
  c.push(o5);

  var o6 = {};
    o6.fname = "Nicole"; //First name
    o6.lname = "Fossier"; //Last name
    o6.slate = SLATE.BALLY; //Party affiliation
    o6.office = OFFICE.EXTERNALVP; //Office
    o6.picture = "/images/features/usac2013/Nicole Fossier.jpg"; //Picture name
    o6.bio = "Lots of info."; //Candidate bio
    o6.major = "Political Science and"; //Candidate Major
    o6.major2 = "Psychology";
    o6.year = "Third"; //Year
  c.push(o6);

  var o7 = {};
    o7.fname = "Sunny"; //First name
    o7.lname = "Singh"; //Last name
    o7.slate = SLATE.BUNITED; //Party affiliation
    o7.office = OFFICE.GENERALREP; //Office
    o7.picture = "/images/features/usac2013/Sunny Singh.jpg"; //Picture name
    o7.bio = "Lots of info."; //Candidate bio
    o7.major = "History and"; //Candidate Major
    o7.major2 = "Economics";
    o7.year = "Second"; //Year
  c.push(o7);

  var o8 = {};
    o8.fname = "Sam"; //First name
    o8.lname = "Haws"; //Last name
    o8.slate = SLATE.BUNITED; //Party affiliation
    o8.office = OFFICE.GENERALREP; //Office
    o8.picture = "/images/features/usac2013/Sam Haws.jpg"; //Picture name
    o8.bio = "Lots of info."; //Candidate bio
    o8.major = "Political Science and"; //Candidate Major
    o8.major2 = "Economics";
    o8.year = "Second"; //Year
  c.push(o8);

  var o9 = {};
    o9.fname = "Avinoam"; //First name
    o9.lname = "Baral"; //Last name
    o9.slate = SLATE.BUNITED; //Party affiliation
    o9.office = OFFICE.GENERALREP; //Office
    o9.picture = "/images/features/usac2013/Avinoam Baral.jpg"; //Picture name
    o9.bio = "Lots of info."; //Candidate bio
    o9.major = "Human Biology and"; //Candidate Major
    o9.major2 = "Society";
    o9.year = "Second"; //Year
  c.push(o9);

  var o10 = {};
    o10.fname = "Charmaine"; //First name
    o10.lname = "Campbell"; //Last name
    o10.slate = SLATE.LETSACT; //Party affiliation
    o10.office = OFFICE.GENERALREP; //Office
    o10.picture = "/images/features/usac2013/Charmaine Campbell.jpg"; //Picture name
    o10.bio = "Lots of info."; //Candidate bio
    o10.major = "Sociology"; //Candidate Major
    o10.year = "Third"; //Year
  c.push(o10);

  var o11 = {};
    o11.fname = "Lizzy"; //First name
    o11.lname = "Naameh"; //Last name
    o11.slate = SLATE.LETSACT; //Party affiliation
    o11.office = OFFICE.GENERALREP; //Office
    o11.picture = "/images/features/usac2013/Lizzy Naameh.jpg"; //Picture name
    o11.bio = "Lots of info."; //Candidate bio
    o11.major = "International Development Studies"; //Candidate Major
    o11.year = "Third"; //Year
  c.push(o11);

  var o12 = {};
    o12.fname = "Devin"; //First name
    o12.lname = "Murphy"; //Last name
    o12.slate = SLATE.LETSACT; //Party affiliation
    o12.office = OFFICE.GENERALREP; //Office
    o12.picture = "/images/features/usac2013/Devin Murphy.jpg"; //Picture name
    o12.bio = "Lots of info."; //Candidate bio
    o12.major = "Political Science"; //Candidate Major
    o12.year = "Second"; //Year
  c.push(o12);

  var o13 = {};
    o13.fname = "Darren"; //First name
    o13.lname = "Ramalho"; //Last name
    o13.slate = SLATE.BUNITED; //Party affiliation
    o13.office = OFFICE.ACAAFFAIRS; //Office
    o13.picture = "/images/features/usac2013/Darren Ramalho.jpg"; //Picture name
    o13.bio = "Lots of info."; //Candidate bio
    o13.major = "Political Science and"; //Candidate Major
    o13.major2 = "English";
    o13.year = "Third"; //Year
  c.push(o13);

  var o14 = {};
    o14.fname = "Uyen"; //First name
    o14.lname = "Hoang"; //Last name
    o14.slate = SLATE.LETSACT; //Party affiliation
    o14.office = OFFICE.ACAAFFAIRS; //Office
    o14.picture = "/images/features/usac2013/Uyen Hoang.jpg"; //Picture name
    o14.bio = "Lots of info."; //Candidate bio
    o14.major = "International Development Studies"; //Candidate Major
    o14.year = "Third"; //Year
  c.push(o14);

  var o15 = {};
    o15.fname = "Jessica"; //First name
    o15.lname = "Kim"; //Last name
    o15.slate = SLATE.INDEPENDENT; //Party affiliation
    o15.office = OFFICE.CAMPUSEVENTS; //Office
    o15.picture = "/images/features/usac2013/Jessica Kim.jpg"; //Picture name
    o15.bio = "Lots of info."; //Candidate bio
    o15.major = "Anthropology"; //Candidate Major
    o15.year = "Third"; //Year
  c.push(o15);

  var o16 = {};
    o16.fname = "Omar"; //First name
    o16.lname = "Arce"; //Last name
    o16.slate = SLATE.INDEPENDENT; //Party affiliation
    o16.office = OFFICE.COMMSERV; //Office
    o16.picture = "/images/features/usac2013/Omar Arce.jpg"; //Picture name
    o16.bio = "Lots of info."; //Candidate bio
    o16.major = "International Development Studies"; //Candidate Major
    o16.year = "Third"; //Year
  c.push(o16);

  var o17 = {};
    o17.fname = "Jessica"; //First name
    o17.lname = "Trumble"; //Last name
    o17.slate = SLATE.LETSACT; //Party affiliation
    o17.office = OFFICE.CULTURAL; //Office
    o17.picture = "/images/features/usac2013/Jessica Trumble.jpg"; //Picture name
    o17.bio = "Lots of info."; //Candidate bio
    o17.major = "English"; //Candidate Major
    o17.year = "Third"; //Year
  c.push(o17);

  var o18 = {};
    o18.fname = "Armen"; //First name
    o18.lname = "Hadjimanoukian"; //Last name
    o18.slate = SLATE.BUNITED; //Party affiliation
    o18.office = OFFICE.FACILITIES; //Office
    o18.picture = "/images/features/usac2013/Armen Hadjimanoukian.jpg"; //Picture name
    o18.bio = "Lots of info."; //Candidate bio
    o18.major = "Economics and"; //Candidate Major
    o18.major2= "International Development Studies";
    o18.year = "Second"; //Year
  c.push(o18);

  var o19 = {};
    o19.fname = "Anthony"; //First name
    o19.lname = "Montalvo"; //Last name
    o19.slate = SLATE.LETSACT; //Party affiliation
    o19.office = OFFICE.FACILITIES; //Office
    o19.picture = "/images/features/usac2013/Anthony Montalvo.jpg"; //Picture name
    o19.bio = "Lots of info."; //Candidate bio
    o19.major = "English"; //Candidate Major
    o19.year = "Third"; //Year
  c.push(o19);

  var o20 = {};
    o20.fname = "Lauren"; //First name
    o20.lname = "Rogers"; //Last name
    o20.slate = SLATE.BUNITED; //Party affiliation
    o20.office = OFFICE.FINANCIALSUPPORT; //Office
    o20.picture = "/images/features/usac2013/Lauren Rogers.jpg"; //Picture name
    o20.bio = "Lots of info."; //Candidate bio
    o20.major = "Psychology and"; //Candidate Major
    o20.major2 = "Communication Studies";
    o20.year = "Second"; //Year
  c.push(o20);

  var o21 = {};
    o21.fname = "Brenda"; //First name
    o21.lname = "Gutierrez"; //Last name
    o21.slate = SLATE.LETSACT; //Party affiliation
    o21.office = OFFICE.FINANCIALSUPPORT; //Office
    o21.picture = "/images/features/usac2013/Brenda Gutierrez.jpg"; //Picture name
    o21.bio = "Lots of info."; //Candidate bio
    o21.major = "Sociology and"; //Candidate Major
    o21.major2 = "English";
    o21.year = "Second"; //Year
  c.push(o21);

  var o22 = {};
    o22.fname = "Savannah"; //First name
    o22.lname = "Dianne Badalich"; //Last name
    o22.slate = SLATE.INDEPENDENT; //Party affiliation
    o22.office = OFFICE.STUDENTWELLNESS; //Office
    o22.picture = "/images/features/usac2013/Savannah Dianne Badalich.jpg"; //Picture name
    o22.bio = "Lots of info."; //Candidate bio
    o22.major = "Global Studies"; //Candidate Major
    o22.year = "Second"; //Year
  c.push(o22);      





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
      
    if (o.winner)
      string += "<div class='row candidate' style='background-color: #65A0CF;'>";
    else if (o.slate == SLATE.BUNITED)
      string += "<div class='row candidate' style='background-color: #C2E1F2;'>";
    else if (o.slate == SLATE.LETSACT)
      string += "<div class='row candidate' style='background-color: #F7F499;'>";
    else if (o.slate == SLATE.BALLY)
      string += "<div class='row candidate' style='background-color: #93BCC4;'>";
    else if (o.slate == SLATE.INDEPENDENT)
      string += "<div class='row candidate' style='background-color: #7AFF75;'>";
    else  
      string += "<div class='row candidate'>";

      string +=   "<div class='offset1 left'>";

      string +=     "<img src='" + o.picture + "' style='border-color:#0011FF;'/>";
      string +=   "</div>";

      string +=   "<div class='right'>";

    if (o.winner)
      string +=     "<h3 style='font-style:italic;'>" + o.fname + " " + o.lname + "</h3>";
    else
      string +=     "<h3 style='font-style:italic; margin-bottom:30px;'>" + o.fname + " " + o.lname + "</h3>";

    if (o.winner)
      string +=     "<h3 style='font-style:bold;'><u>ELECTED!</u></h3>";

    if (outersort == SORTYPE.OFFICE)
      string +=     "<h4 class='spacer'><u>Slate:</u> " + getString(o.slate) + "</h4>";
    else
      string +=     "<h4 class='spacer'><u>Office:</u> " + getString(o.office) + "</h4>";

    string +=     "<h4 class='spacer'><u>Major:</u> " + o.major + "</h4>";
    if (o.major2 != undefined)
      string +=     "<h4 class='spacer'>" + o.major2 + "</h4>";
      string +=     "<h4 class='spacer'><u>Year:</u> " + o.year + "</h4>";

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
