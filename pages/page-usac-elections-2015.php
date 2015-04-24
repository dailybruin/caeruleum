<?php/*
Template Name: USAC Elections 2015
*/ ?>

<?php get_header(); ?>

<link rel="stylesheet" href="../css/usac-elections-2015.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="../js/usac-2015/main.js"></script>
<script src="../js/usac-2015/animatescroll.min.js"></script>
<script src="../js/usac-2015/jquery-labelauty.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>

<script type="text/template" class="template">
	<% _.each(input, function(candidate){ %>
		<div class="row element candidate <%- candidate.Slate %>">
            <div class="small-4 columns">
            <img src="<%- candidate.Mug %>"/>
            </div>
            <div class="small-8 columns">
                        <img class="slate-logo" src="/img/usac-2015.<%- candidate.Slate %>.logo.svg"/>
                        <h2 class="candidate-name" style="vertical-align:middle;"><%- candidate.Name %></h2>
                <hr>
                <p><%- candidate.YearMajor %></p>
                <div class="row">
                    <div class="large-5 columns platforms">
                        <h2>Platform Goals</h2>
                        <ul>
                            <% _.each(candidate.Platforms, function(p) { %>
                            <li><%- p %></li>  
                            <% }); %>			
                        </ul>
                    </div>
              
                    <div class="large-7 columns">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/ZZ5LpwO-An4" frameborder="0" allowfullscreen></iframe>
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
            <h2>Complaint #:<%- violation.id %></h2>
            <hr>
            <p>Submitted By: <%- violation.submitter %></p>
            <p><%- violation.date %></p>
            <h3>Regarding:</h3>
            <p><%- violation.regarding %></p>
            <h3>Finding:</h3>
            <p><%- violation.finding %></p>
            <h3>Sanction:</h3>
            <p><%- violation.sanction %></p>
        </div>
    <% }); %>
</script>

<script type="text/template" id="violations_sidebar_template">
    <% _.each(rows, function(violation) { %>
        <dd class="element <%- violation.slates %>"><a href="#<%- violation.id %>" onclick="$('#<%- violation.id %>').animatescroll({padding: 80})">Complaint #:<%- violation.id %></a></dd>
    <% }); %>
</script>

<!-- THE PAGE STARTS HERE -->

<div class="container"><div class="row">
	<nav class="top-bar" data-topbar role="navigation">
	  <section class="top-bar-section">
	    <!-- Right Nav Section -->
	    <ul class="right">
		    <li class="active"><a href="#" onclick="switchSection(this)">Profiles</a></li>
		    <li><a href="#" onclick="switchSection(this)">Violations</a></li>
			<li><a href="#" onclick="switchSection(this)">News</a></li>
			<li><a href="#" onclick="switchSection(this)">Endorsement</a></li>
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
                    <dd><a href="#President" onclick="$('#President').animatescroll({padding: 80})">President</a></dd>
                    <dd><a href="#IVP" onclick="$('#IVP').animatescroll({padding: 80})">Internal Vice President</a></dd>
                    <dd><a href="#EVP" onclick="$('#EVP').animatescroll({padding: 80})">External Vice President</a></dd>
                    <dd><a href="#Gen-Rep" onclick="$('#Gen-Rep').animatescroll({padding: 80})">General Representative</a></dd>
                    <dd><a href="#AAC" onclick="$('#AAC').animatescroll({padding: 80})">Academic Affairs Commissioner</a></dd>
                    <dd><a href="#CEC" onclick="$('#CEC').animatescroll({padding: 80})">Campus Event Commissioner</a></dd>
                    <dd><a href="#CSC" onclick="$('#CSC').animatescroll({padding: 80})">Community Service Commissioner</a></dd>
                    <dd><a href="#CAC" onclick="$('#CAC').animatescroll({padding: 80})">Cultural Affairs Commissioner</a></dd>
                    <dd><a href="#FAC" onclick="$('#FAC').animatescroll({padding: 80})">Facilities Commissioner</a></dd>
                    <dd><a href="#FSC" onclick="$('#FSC').animatescroll({padding: 80})">Financial Support Commissioner</a></dd>
                    <dd><a href="#SWC" onclick="$('#SWC').animatescroll({padding: 80})">Student Wellness Commissioner</a></dd>
                    <dd><a href="#TSR" onclick="$('#TSR').animatescroll({padding: 80})">Transfer Student Representative</a></dd>
                </dl>
            </div>

            <div class="usac-section violations-container">
                <dl class="side-nav" id="violations-sidebar">
                </dl>
            </div>
        </div>
        
        <!-- Main content column, resizes to full on mobile -->
        <div class="small-12 medium-9 columns">
            <div class="usac-section profiles-container candidates">
                <div class="candidates-content" id="President">
                    <h3 style="margin-top: 0em">President</h3>
                </div>
                <div class="candidates-content" id="IVP">
                    <h3>Internal Vice President</h3>
                </div>
                <div class="candidates-content" id="EVP">
                    <h3>External Vice President</h3>
                </div>
                <div class="candidates-content" id="Gen-Rep">
                    <h3>General Representative</h3>
                </div>
                <div class="candidates-content" id="AAC">
                    <h3>Academic Affairs Commissioner</h3>
                </div>
                <div class="candidates-content" id="CEC">
                    <h3>Campus Event Commissioner</h3>
                </div>
                <div class="candidates-content" id="CSC">
                    <h3>Community Service Commissioner</h3>
                </div>
                <div class="candidates-content" id="CAC">
                    <h3>Cultural Affairs Commissioner</h3>
                </div>
                <div class="candidates-content" id="FAC">
                    <h3>Facilities Commissioner</h3>
                </div>
                <div class="candidates-content" id="FSC">
                    <h3>Financial Support Commissioner</h3>
                </div>
                <div class="candidates-content" id="SWC">
                    <h3>Student Wellness Commissioner</h3>
                </div>
                <div class="candidates-content" id="TSR">
                    <h3>Transfer Student Representative</h3>
                </div>
            </div>
            <div class="usac-section news-container" id="news-content">
                In case you don't know, I'm the news-container.
            </div>
            <div class="usac-section endorsement-container" id="endorsement-content">
                In case you don't know, I'm the endorsement-container.
            </div>
            <div class="usac-section violations-container" id="violations-content">
                In case you don't know, I'm the violation-container.
            </div>
 
        </div>  
        <!-- Main content column ends -->
    </div>
   
</div>
</div>

<?php get_footer(); ?>
