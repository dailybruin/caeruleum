<?php/*
Template Name: USAC Elections 2015
*/ ?>

<link rel="stylesheet" href="../css/usac-elections-2015.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<!-- <script src="../js/usac-2015/jquery.sticky-kit.min.js"></script> -->
<script src="../js/usac-2015/main.js"></script>

<script type="text/template" class="template">
	<% _.each(input, function(candidate){ %>
		<div class="candidate">
			<h2><%- candidate.Name %></h2>
			<ul>
				<li><%- candidate.YearMajor %></li>
				<li><%- candidate.Slate %></li>
				<li><%- candidate.Platforms %></li>
			</ul>
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
    <div class="small-3 columns" style="position: fixed">
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
    <div class="small-9 columns content">
        <h2 class="position-title">President</h3>
        <div class="candidates-content" id="President"></div>
		<h2 class="position-title">Internal Vice President</h3>
        <div class="candidates-content" id="IVP"></div>
		<h2 class="position-title">External Vice President</h3>
        <div class="candidates-content" id="EVP"></div>
		<h2 class="position-title">General Representative</h3>
        <div class="candidates-content" id="Gen-Rep"></div>
		<h2 class="position-title">Academic Affairs Commissioner</h3>
        <div class="candidates-content" id="AAC"></div>
		<h2 class="position-title">Campus Event Commissioner</h3>
        <div class="candidates-content" id="CEC"></div>
		<h2 class="position-title">Community Service Commissioner</h3>
        <div class="candidates-content" id="CSC"></div>
		<h2 class="position-title">Cultural Affairs Commissioner</h3>  
        <div class="candidates-content" id="CAC"></div>
		<h2 class="position-title">Facilities Commissioner</h3>
        <div class="candidates-content" id="FAC"></div>
		<h2 class="position-title">Financial Support Commissioner</h3>
        <div class="candidates-content" id="FSC"></div>
		<h2 class="position-title">Student Wellness Commissioner</h3>
        <div class="candidates-content" id="SWC"></div>
		<h2 class="position-title">Transfer Student Representative</h3>
        <div class="candidates-content" id="TSR"></div>    
    </div>  <!-- column-9 ends -->
</div></div>
<?php get_footer(); ?>
