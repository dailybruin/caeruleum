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

<div class="container"><div class="row">
	<div class="medium-3 columns">Sidebar here</div>
	<div class="medium-9 columns content"></div>
</div></div>

<?php get_footer(); ?>
