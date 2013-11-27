<?php/*
Template Name: Online Features
*/ ?>
<?php get_header(); ?>


<!DOCTYPE html>
<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

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

a.darken:hover span
{color:#fff;
    -webkit-transition: all 0.5s linear;
       -moz-transition: all 0.5s linear;
        -ms-transition: all 0.5s linear;
         -o-transition: all 0.5s linear;
            transition: all 0.5s linear;
            visibility: visible;

}

</style>
</head>
<body>

<div class="jumbotron">
<div class="container">
    <div class="page-header">
        <h1>Features</h1>
    </div>




<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          <h2>2012</h2>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
        

<a class="thumbnail darken" href="http://chileanwinter.dailybruin.com/" style="margin: 10px;">
    <img src="/wp-content/uploads/2013/11/chilean_winter.jpg" style="width: 300px; padding: 5px; background-color: #fff;"/><span><b>CHILEAN WINTER</b><br/>This is a description of this project.This is a description of this project.This is a description of this project.This is a description of this project.<br/><br/><i style="font-size: 8pt;">Created By: Calvin Chan and Jimmy Yang</i></span>
  



      </div>
    </div>
  </div>
</div>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          <h2>2011</h2>
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        

<a class="thumbnail darken" href="http://chileanwinter.dailybruin.com/" style="margin: 10px;">
    <img src="/wp-content/uploads/2013/11/chilean_winter.jpg" style="width: 300px; padding: 5px; background-color: #fff;"/><span><b>CHILEAN WINTER</b><br/>This is a description of this project.This is a description of this project.This is a description of this project.This is a description of this project.<br/><br/><i style="font-size: 8pt;">Created By: Calvin Chan and Jimmy Yang</i></span>
  



      </div>
    </div>
  </div>
</div>


<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          <h2>2010</h2>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        

<a class="thumbnail darken" href="http://chileanwinter.dailybruin.com/" style="margin: 10px;">
    <img src="/wp-content/uploads/2013/11/chilean_winter.jpg" style="width: 300px; padding: 5px; background-color: #fff;"/><span><b>CHILEAN WINTER</b><br/>This is a description of this project.This is a description of this project.This is a description of this project.This is a description of this project.<br/><br/><i style="font-size: 8pt;">Created By: Calvin Chan and Jimmy Yang</i></span>
  



      </div>
    </div>
  </div>
</div>


</body>

</html>

<?php get_footer(); ?>
