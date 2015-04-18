<?php/*
Template Name: USAC Elections 2015
*/ ?>

<link rel="stylesheet" href="../css/usac-elections-2015.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="../js/usac-2015/main.js"></script>

<script type="text/template" class="template">
	<% _.each(candidates, function(candidate){ %>
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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>USAC Elections 2015</title>
<style>
.db-next {
    display: none !important;
    }
</style>
</head>
<body>
    <div class="container"><div class="row">
        <div class="medium-3 columns" style="position: fixed">
            <dl class="side-nav">
                <dd><a href="#president">President</a></dd>
                <dd><a href="#ivp">Internal Vice President</a></dd>
                <dd><a href="#evp">External Vice President</a></dd>
                <dd><a href="#genrep">General Representative</a></dd>
                <dd><a href="#aac">Academic Affairs Commissioner</a></dd>
                <dd><a href="#cec">Campus Event Commissioner</a></dd>
                <dd><a href="#csc">Community Service Commissioner</a></dd>
                <dd><a href="#cac">Cultural Affairs Commissioner</a></dd>
                <dd><a href="#fac">Facilities Commissioner</a></dd>
                <dd><a href="#fsc">Financial Support Commissioner</a></dd>
                <dd><a href="#swc">Student Wellness Commissioner</a></dd>
                <dd><a href="#tsr">Transfer Student Representative</a></dd>
            </dl>
        </div>
        <div class="medium-9 columns content">

            <a name="president"></a>
            <h3>President</h3>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
    
            <a name="ivp"></a>
            <h3>Internal Vice President</h3>
            <br>
            <br>
            <br>
            <br>
            <br>
    
            <a name="evp"></a>
            <h3>External Vice President</h3>
            <br>
            <br>
            <br>
            <br>
            <br>
    
            <a name="genrep"></a>
            <h3>General Representative</h3>
            <br>
            <br>
            <br>
            <br>
            <br>
    
            <a name="aac"></a>
            <h3>Academic Affairs Commissioner</h3>
            <br>
            <br>
            <br>
            <br>
            <br>
    
            <a name="cec"></a>
            <h3>Campus Event Commissioner</h3>
            <br>
            <br>
            <br>
            <br>
            <br>
    
            <a name="csc"></a>
            <h3>Community Service Commissioner</h3>
            <br>
            <br>
            <br>
            <br>
            <br>
    
            <a name="cac"></a>
            <h3>Cultural Affairs Commissioner</h3>
            <br>
            <br>
            <br>
            <br>
            <br>
    
            <a name="fac"></a>
            <h3>Facilities Commissioner</h3>
            <br>
            <br>
            <br>
            <br>
            <br>
    
            <a name="fsc"></a>
            <h3>Financial Support Commissioner</h3>
            <br>
            <br>
            <br>
            <br>
            <br>
    
            <a name="swc"></a>
            <h3>Student Wellness Commissioner</h3>
            <br>
            <br>
            <br>
            <br>
            <br>
    
            <a name="tsr"></a>
            <h3>Transfer Student Representative</h3>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
</div></div>
</body>
</html>
<?php get_footer(); ?>
