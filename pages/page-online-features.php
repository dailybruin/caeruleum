<?php/*
Template Name: Online Features
*/ ?>
<?php get_header(); ?>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>

<style>
a.darken {
    display: inline-block;
    background: black;
    padding: 0;
    position:relative
}

a.darken img {
    display: block;
    
    -webkit-transition: all 0.5s linear;
       -moz-transition: all 0.5s linear;
        -ms-transition: all 0.5s linear;
         -o-transition: all 0.5s linear;
            transition: all 0.5s linear;
}

a.darken:hover img {
    opacity: 0.4;           
}
a.darken span{
	position:absolute;
	top:5px;
	color:#000;
	left:10px;
	visibility: hidden;
	font-family: Verdana;
	font-size: 10pt;
}

a.darken:hover span{color:#fff;
    -webkit-transition: all 0.5s linear;
       -moz-transition: all 0.5s linear;
        -ms-transition: all 0.5s linear;
         -o-transition: all 0.5s linear;
            transition: all 0.5s linear;
            visibility: visible;

}
</style>

<h3>Features</h3>

<div>
	<div style="display: inline-block; padding: 20px; vertical-align: bottom;">
		<h4>Chilean Winter</h4>
		<a class="thumbnail darken" href="#">
    			<img src="/wp-content/uploads/2013/11/chilean_winter.jpg" style="width: 300px; padding: 5px; background-color: #fff;"/>
			<span>
				This is a description of this project.This is a description of this project.This is a description of this project.This is a description of this project.<br/><br/>
				<i style="font-size: 8pt;">Created By: Calvin Chan and Jimmy Yang</i>
			</span>
		</a>
	</div>

	<div style="display: inline-block; padding: 20px; vertical-align: bottom;">
		<h4>Dance Marathon 2013</h4>
		<a class="thumbnail darken" href="#">
    			<img src="/wp-content/uploads/2013/11/dance_marathon.jpg" style="width: 300px; padding: 5px; background-color: #fff;"/><span>This is a description of this project.This is a description of this project.This is a description of this project.This is a description of this project.<br/><br/><i style="font-size: 8pt;">Created By: Byron Lutz</i></span>
		</a>
	</div>
</div>

<div>
	<div style="display: inline-block; padding: 20px; vertical-align: bottom;">
		<h4 style="width: 300px;">Gender Behavior Therapy and Gay Conversion: UCLA's Past, California's Future</h4>
		<a class="thumbnail darken" href="#">
    			<img src="/wp-content/uploads/2013/12/gender_behavior.png" style="width: 300px; padding: 5px; background-color: #fff;"/>
			<span>
				This is a description of this project.This is a description of this project.This is a description of this project.This is a description of this project.<br/><br/>
				<i style="font-size: 8pt;">Created By: Calvin Chan and Jimmy Yang</i>
			</span>
		</a>
	</div>
	<div style="display: inline-block; padding: 20px; vertical-align: bottom;">
		<h4>Chilean Winter</h4>
		<a class="thumbnail darken" href="#">
    			<img src="/wp-content/uploads/2013/11/chilean_winter.jpg" style="width: 300px; padding: 5px; background-color: #fff;"/>
			<span>
				This is a description of this project.This is a description of this project.This is a description of this project.This is a description of this project.<br/><br/>
				<i style="font-size: 8pt;">Created By: Calvin Chan and Jimmy Yang</i>
			</span>
		</a>
	</div>
</div>


<?php get_footer(); ?>
