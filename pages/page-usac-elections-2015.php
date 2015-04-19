<?php/*
Template Name: USAC Elections 2015
*/ ?>

<link rel="stylesheet" href="../css/usac-elections-2015.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="../js/usac-2015/main.js"></script>

<script type="text/template" class="template">
	<% _.each(input, function(candidate){ %>
		<div class="candidate">
			<h2><%- candidate.Name %></h2>
			<ul>
				<li><%- candidate.Position %></li>
				<li><%- candidate.YearMajor %></li>
				<li><%- candidate.Slate %></li>
				<li><%- candidate.Platforms %></li>
			</ul>
		</div>
	<% }); %>
</script>
<?php get_header(); ?>

<div class="container"><div class="row">
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
    </div>
</div></div>
<?php get_footer(); ?>
