<?php/*
Template Name: USAC Elections 2015
*/ ?>

<link rel="stylesheet" href="../css/usac-elections-2015.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="../js/usac-2015/main.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:800,700,900,400,200' rel='stylesheet' type='text/css'>

<script type="text/template" class="template">
	<% _.each(input, function(candidate){ %>
		<div class="row candidate <%- candidate.Slate %>">
      <div class="small-4 columns">
        <img src="http://dailybruin.com/images/2015/04/web.news_.usacCandidates2015.HeatherRosen.AYu_.jpg"/>
      </div>
      <div class="small-8 columns">
			  <h2><%- candidate.Name %></h2>
        <hr>
			<ul>
				<li><%- candidate.YearMajor %></li>
				<li><%- candidate.Slate %></li>
				<li><%- candidate.Platforms %></li>
			</ul>
      </div>
		</div>
	<% }); %>
</script>

<!-- THE PAGE STARTS HERE -->
<?php get_header(); ?>

<div class="container"><div class="row">
	<nav class="top-bar" data-topbar role="navigation">
	  <section class="top-bar-section">
	    <!-- Right Nav Section -->
	    <ul class="right">
		    <li class="active"><a href="#">Profiles</a></li>
		    <li><a href="#">Violations</a></li>
			<li><a href="#">News</a></li>
	    </ul>
	  </section>
	</nav>
    <div class="small-3 columns hide-for-small-only" style="position: fixed">
        <form id="filter">
            <label>Filter By Slate</label>
            <div>
                <input id="Bruins United" type="checkbox" checked="yes"><label for="Bruins United">Bruins United</label>
            </div>
            <div>
                <input id="Let's Act" type="checkbox" checked="yes"><label for="Let's Act">Let's Act</label><br>
            </div>
            <div>
                <input id="The After Party" type="checkbox" checked="yes"><label for="The After Party">The After Party</label>
            </div>
            <div>
                <input id="Independent" type="checkbox" checked="yes"><label for="Independent">Independent</label>
            </div>
        </form>
        <dl class="side-nav">
            <dd><a href="#President">President</a></dd>
            <dd><a href="#IVP">Internal Vice President</a></dd>
            <dd><a href="#EVP">External Vice President</a></dd>
            <dd><a href="#Gen-Rep">General Representative</a></dd>
            <dd><a href="#AAC">Academic Affairs Commissioner</a></dd>
            <dd><a href="#CEC">Campus Event Commissioner</a></dd>
            <dd><a href="#CSC">Community Service Commissioner</a></dd>
            <dd><a href="#CAC">Cultural Affairs Commissioner</a></dd>
            <dd><a href="#FAC">Facilities Commissioner</a></dd>
            <dd><a href="#FSC">Financial Support Commissioner</a></dd>
            <dd><a href="#SWC">Student Wellness Commissioner</a></dd>
            <dd><a href="#TSR">Transfer Student Representative</a></dd>
        </dl>
    </div>
    <div class="small-12 medium-9 columns candidates">
    <h3>President</h3>
        <div class="candidates-content" id="President"></div>

		<h3>Internal Vice President</h3>
        <div class="candidates-content" id="IVP"></div>
		<h3>External Vice President</h3>
        <div class="candidates-content" id="EVP"></div>
		<h3>General Representative</h3>
        <div class="candidates-content" id="Gen-Rep"></div>
		<h3>Academic Affairs Commissioner</h3>
        <div class="candidates-content" id="AAC"></div>
		<h3>Campus Event Commissioner</h3>
        <div class="candidates-content" id="CEC"></div>
		<h3>Community Service Commissioner</h3>
        <div class="candidates-content" id="CSC"></div>
		<h3>Cultural Affairs Commissioner</h3>  
        <div class="candidates-content" id="CAC"></div>
		<h3>Facilities Commissioner</h3>
        <div class="candidates-content" id="FAC"></div>
		<h3>Financial Support Commissioner</h3>
        <div class="candidates-content" id="FSC"></div>
		<h3>Student Wellness Commissioner</h3>
        <div class="candidates-content" id="SWC"></div>
		<h3>Transfer Student Representative</h3>
        <div class="candidates-content" id="TSR"></div>    
    </div>  <!-- column-9 ends -->
</div></div>
<?php get_footer(); ?>
