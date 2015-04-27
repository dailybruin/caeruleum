<?php/*
Template Name: USAC Elections 2015
*/ ?>

<?php get_header(); ?>

<link rel="stylesheet" href="../css/usac-elections-2015.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="../js/usac-2015/main.js"></script>
<script src="../js/usac-2015/layzr.min.js"></script>
<script src="../js/usac-2015/animatescroll.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>

<script type="text/template" class="candidates_main_template">
    <% _.each(input, function(candidate){ %>
        <div class="row element candidate <%- candidate.slate %>">
            <div class="small-3 columns">
            <img src="http://placehold.it/200x300&text=Mug" data-layzr="<%- candidate.mug %>"/>
            </div>
            <div class="small-9 columns">
                        <img class="slate-logo" src="/img/usac-2015.<%- candidate.slate %>.logo.svg"/>
                        <h2 class="candidate-name" style="vertical-align:middle;"><%- candidate.name %></h2>
                <hr>
                <!-- <p><%- candidate.yearmajor %></p> -->
                <div class="row">
                    <div class="large-5 columns platforms">
                        <h2>Platforms</h2>
                        <ul>
                            <% _.each(candidate.platforms.split("\n"), function(p) { %>
                            <li><%- p %></li>  
                            <% }); %>
                        </ul>
                    </div>
              
                    <div class="large-7 columns">
                        <div class="video-container">
                            <iframe src="<%- candidate.video %>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
          
                </div>
            </div>
        </div>
    <% }); %>
</script>

<script type="text/template" id="violations_main_template">
    <% _.each(rows, function(violation) { %>
        <div class = "element violation <%- violation.slates %>" id="<%- violation.id %>">
            <h1>Complaint #<%- violation.id %></h1>
            <hr>
            <p>Submitted By: <%- violation.submitter %></p>
            <p><%- violation.date %></p>
            <h2>Regarding:</h2>
            <p><%- violation.regarding %></p>
            <h2>Finding:</h2>
            <p><%- violation.finding %></p>
            <h2>Sanction:</h2>
            <p><%- violation.sanction %></p>
        </div>
    <% }); %>
</script>

<script type="text/template" id="violations_sidebar_template">
    <% _.each(rows, function(violation) { %>
        <dd class="element <%- violation.slates %>"><a href="#<%- violation.id %>" onclick="$('#<%- violation.id %>').animatescroll({padding: 80})">Complaint #<%- violation.id %></a></dd>
    <% }); %>
</script>

<script type="text/template" id="endorsements_main_template">
    <% _.each(rows, function(candidate) { %>
        <% if (candidate.endorsed == "1") { %>
            <div class = "element endorsement <%- candidate.position %> <%- candidate.name %>">
            <div class="row endorsed">
                <h2 class="yesno">Endorsed:</h2>
                <div class="small-3 columns">
                   <img src="<%- candidate.mug %>"/>
                </div>
                <div class="small-9 columns">
                    <img class="slate-logo" src="/img/usac-2015.<%- candidate.slate %>.logo.svg"/>
                    <h2 class="endorsed-name" style="vertical-align:middle;"><%- candidate.name %></h2>
                    <hr>
                    <% _.each(candidate.text.split("\n"), function(para) { %>
                        <p><%- para %></p>  
                    <% }); %>
                </div>
            </div> 
            </div>
        
        <% } else { %>
                    
            <div class = "element notendorsement <%- candidate.position %> <%- candidate.name %>">
            <div class="row notendorsed">
            <h2 class="yesno">Not Endorsed:</h2>

            <div class="row notendorsed <%- candidate.name  %>">
                <div class="small-2 columns">
                   <img src="<%- candidate.mug %>"/>
                </div>
                <div class="small-10 columns">
                    <img class="slate-logo" src="/img/usac-2015.<%- candidate.slate %>.logo.svg"/>
                    <h2 class="notendorsed-name"><%- candidate.name %></h2>
                    <hr>
                    <% _.each(candidate.text.split("\n"), function(para) { %>
                        <p><%- para %></p>  
                    <% }); %>
                </div>
            </div>
            </div>
            </div>
        <% } %>
    <% }); %>
</script>

<!-- THE PAGE STARTS HERE -->

<a class="fi-arrow-up show-for-small-only" id="scrollup" href="#">TOP</a>
<div class="container">
    <div class="row banner">
      <img src="http://dailybruin.com/images/2015/04/Elections-Banner.jpg"/>
    </div>
    <div class="row">
    <nav class="top-bar" data-topbar role="navigation">
      <section class="top-bar-section">
        <!-- TOP Nav Section -->
        <ul class="right">
            <li class="active"><a href="#" onclick="switchSection(this)">Profiles</a></li>
            <!-- <li><a href="#" onclick="switchSection(this)">Violations</a></li> -->
            <!-- <li><a href="#" onclick="switchSection(this)">News</a></li> -->
            <li><a href="#" onclick="switchSection(this)">Endorsements</a></li>
        </ul>
      </section>
    </nav>
    <div class="row">
        <div class="small-3 columns hide-for-small-only" id="scrollbar" style="position: relative top: 30px">
            <form id="filter">
                <h3>Filter By Slate</h3>
                <div>
                    <input id="BU" type="checkbox" checked="yes" data-labelauty="Bruins United"/>
                </div>
                <div>
                    <input id="LA" type="checkbox" checked="yes" data-labelauty="LET'S ACT"/>
                </div>
                <div>
                    <input id="TAP" type="checkbox" checked="yes" data-labelauty="The After Party"/>
                </div>
                <div>
                    <input id="IND" type="checkbox" checked="yes" data-labelauty="Independent"/>
                </div>
            </form>
            <div class="usac-section profiles-container">
                <dl class="side-nav" id="profiles-sidebar">
                    <dd><a href="#profiles-President" onclick="$('#profiles-President').animatescroll({padding: 80})">President</a></dd>
                    <dd><a href="#profiles-IVP" onclick="$('#profiles-IVP').animatescroll({padding: 80})">Internal Vice President</a></dd>
                    <dd><a href="#profiles-EVP" onclick="$('#profiles-EVP').animatescroll({padding: 80})">External Vice President</a></dd>
                    <dd><a href="#profiles-Gen-Rep" onclick="$('#profiles-Gen-Rep').animatescroll({padding: 80})">General Representative</a></dd>
                    <dd><a href="#profiles-AAC" onclick="$('#profiles-AAC').animatescroll({padding: 80})">Academic Affairs Commissioner</a></dd>
                    <dd><a href="#profiles-CEC" onclick="$('#profiles-CEC').animatescroll({padding: 80})">Campus Event Commissioner</a></dd>
                    <dd><a href="#profiles-CSC" onclick="$('#profiles-CSC').animatescroll({padding: 80})">Community Service Commissioner</a></dd>
                    <dd><a href="#profiles-CAC" onclick="$('#profiles-CAC').animatescroll({padding: 80})">Cultural Affairs Commissioner</a></dd>
                    <dd><a href="#profiles-FAC" onclick="$('#profiles-FAC').animatescroll({padding: 80})">Facilities Commissioner</a></dd>
                    <dd><a href="#profiles-FSC" onclick="$('#profiles-FSC').animatescroll({padding: 80})">Financial Support Commissioner</a></dd>
                    <dd><a href="#profiles-SWC" onclick="$('#profiles-SWC').animatescroll({padding: 80})">Student Wellness Commissioner</a></dd>
                    <dd><a href="#profiles-TSR" onclick="$('#profiles-TSR').animatescroll({padding: 80})">Transfer Student Representative</a></dd>
                </dl>
            </div>

            <div class="usac-section violations-container">
                <dl class="side-nav" id="violations-sidebar">
                </dl>
            </div>

            <div class="usac-section endorsements-container">
                <dl class="side-nav" id="endorsements-sidebar">
                    <dd><a href="#endorsements-President" onclick="$('#endorsements-President').animatescroll({padding: 80})">President</a></dd>
                    <dd><a href="#endorsements-IVP" onclick="$('#endorsements-IVP').animatescroll({padding: 80})">Internal Vice President</a></dd>
                    <dd><a href="#endorsements-EVP" onclick="$('#endorsements-EVP').animatescroll({padding: 80})">External Vice President</a></dd>
                    <dd><a href="#endorsements-Gen-Rep" onclick="$('#endorsements-Gen-Rep').animatescroll({padding: 80})">General Representative</a></dd>
                    <dd><a href="#endorsements-AAC" onclick="$('#endorsements-AAC').animatescroll({padding: 80})">Academic Affairs Commissioner</a></dd>
                    <dd><a href="#endorsements-CEC" onclick="$('#endorsements-CEC').animatescroll({padding: 80})">Campus Event Commissioner</a></dd>
                    <dd><a href="#endorsements-CSC" onclick="$('#endorsements-CSC').animatescroll({padding: 80})">Community Service Commissioner</a></dd>
                    <dd><a href="#endorsements-CAC" onclick="$('#endorsements-CAC').animatescroll({padding: 80})">Cultural Affairs Commissioner</a></dd>
                    <dd><a href="#endorsements-FAC" onclick="$('#endorsements-FAC').animatescroll({padding: 80})">Facilities Commissioner</a></dd>
                    <dd><a href="#endorsements-FSC" onclick="$('#endorsements-FSC').animatescroll({padding: 80})">Financial Support Commissioner</a></dd>
                    <dd><a href="#endorsements-SWC" onclick="$('#endorsements-SWC').animatescroll({padding: 80})">Student Wellness Commissioner</a></dd>
                    <dd><a href="#endorsements-TSR" onclick="$('#endorsements-TSR').animatescroll({padding: 80})">Transfer Student Representative</a></dd>
                </dl>
            </div>
        </div>
        <!-- Main content column, resizes to full on mobile -->
        <div class="small-12 medium-9 columns">
            <!-- CANDIDATE PROFILES PAGE IS HERE  -->
            <div class="usac-section profiles-container profiles">
                <div class="profiles-content" id="profiles-President">
                    <h3 style="margin-top: 0em">President</h3>
                </div>
                <div class="profiles-content" id="profiles-IVP">
                    <h3>Internal Vice President</h3>
                </div>
                <div class="profiles-content" id="profiles-EVP">
                    <h3>External Vice President</h3>
                </div>
                <div class="profiles-content" id="profiles-Gen-Rep">
                    <h3>General Representative</h3>
                </div>
                <div class="profiles-content" id="profiles-AAC">
                    <h3>Academic Affairs Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-CEC">
                    <h3>Campus Event Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-CSC">
                    <h3>Community Service Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-CAC">
                    <h3>Cultural Affairs Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-FAC">
                    <h3>Facilities Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-FSC">
                    <h3>Financial Support Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-SWC">
                    <h3>Student Wellness Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-TSR">
                    <h3>Transfer Student Representative</h3>
                </div>
            </div>
            <!-- NEWS PAGE IS HERE  -->
            <div class="usac-section news-container" id="news-content">
            </div>
            <!-- ENDORSEMENTS PAGE IS HERE  -->
            <div class="usac-section endorsements-container endorsements">
                <div class="endorsements-content" id="endorsements-President">
                    <h3 style="margin-top: 0em">President</h3>
                </div>
                <div class="endorsements-content" id="endorsements-IVP">
                    <h3>Internal Vice President</h3>
                </div>
                <div class="endorsements-content" id="endorsements-EVP">
                    <h3>External Vice President</h3>
                </div>
                <div class="endorsements-content" id="endorsements-Gen-Rep">
                    <h3>General Representative</h3>
                </div>
                <div class="endorsements-content" id="endorsements-AAC">
                    <h3>Academic Affairs Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-CEC">
                    <h3>Campus Event Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-CSC">
                    <h3>Community Service Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-CAC">
                    <h3>Cultural Affairs Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-FAC">
                    <h3>Facilities Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-FSC">
                    <h3>Financial Support Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-SWC">
                    <h3>Student Wellness Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-TSR">
                    <h3>Transfer Student Representative</h3>
                </div>
            </div> 
            <!-- VIOLATIONS PAGE IS HERE  -->
            <div class="usac-section violations-container" id="violations-content">
            </div>
    <!-- MAIN CONTENT  DIV END  -->
        </div>
    </div>
</div></div>

<?php get_footer(); ?>
