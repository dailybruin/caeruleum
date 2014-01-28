<?php/*
Template Name: A&E Flavors of Westwood
*/ ?>

<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
<script src="maplace.min.js"></script>
<link href="http://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css">

<style>
    article#fow h1 {
      text-align: center;
      font: 400 100px/1.3 'Lobster Two', Helvetica, sans-serif;
      color: #2685bb;
      text-shadow: 4px 4px 0px rgba(0, 0, 0, 0.1);
    }
    article#fow h3 {
      font: 100 30px/1.3 'Lobster Two', Helvetica, sans-serif;
      color: #2685bb;
      text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.1);
    }
    article#fow p {
      font-family: 'Cabin', Helvetica, Arial, sans-serif;
      font-size: 15px;
      line-height: 25px;
    }
    article#fow .gmap {
      height: 400px;
      padding: 3px;
      border: 5px solid #dddddd;
      font-size: 90%;
    }
    article#fow .tabs .ullist li.active a {
      font-weight: bold;
      color: #2584bb !important;
      background-color: white !important;
    }
    article#fow .ullist li.active a, article#fow .ullist li a:hover {
      color: #2584bb !important;
      background-color: #eeeeee !important;
    }
    article#fow .ullist li.active a {
      font-weight: bold;
    }
    article#fow .tabs .ullist li a {
      padding: 0px 23.8px !important;
    }
    article#fow .ullist {
      width: 100%;
    }
    article#fow .tab-content {
      margin: 0 0 20px;
    }
    article#fow .menu .ullist li {
      width: 49%;
      float: left;
      margin-right: 1%;
      margin-bottom: .2em;
    }
    article#fow .menu .ullist li.active a,
    article#fow .menu .ullist li a:hover {
      color: #2685BB !important;
      background-color: #eee !important;
    }
    article#fow .tabs .ullist li a {
      padding: 0px 23.8px !important;
    }
    article#fow .tabs .ullist li a:hover {
      color: #2685BB !important;
      background-color: transparent !important;
    }
    article#fow .tabs .ullist li.active a {
      font-weight: bold;
      color: #2685BB !important;
      background-color: #fff !important;
    }
    article#fow .span4 {
      padding: 0px;
      margin: 0px;
    }
    article#fow .span8 {
      font-family: 'Cabin', Helvetica, Arial, sans-serif;
      font-size: 15px;
      line-height: 25px;
    }
    article#fow .ullist li.active a {
      font-weight: bold;
    }
    article#fow .ullist li.active a,
    article#fow .ullist li a:hover {
      color: #2685BB !important;
      background-color: #eee !important;
    }
    article#fow .icons-ul {
      list-style-type: none;
    }
    article#fow .icon-ul li {
      line-height: 14px;
    }
    article#fow .photocred {
      float: right;
      color: #c0c0c0;
      font-style: italic;
    }
    article#fow #controls-tabs {
      width: 180px;
      float: left;
    }
    article#fow .photocred-inline {
      color: #707070;
      font-size: 13px;
    }
    article#fow .thumbnail.with-caption {
      display: inline-block;
      background: #f5f5f5;
      float: right;
      text-align: center;
      margin-left: 5px;
    }
    article#fow .thumbnail.with-caption p {
      margin: 0;
      padding-top: 0.5em;
    }
    article#fow .thumbnail.with-caption small:before {
      content: '\2014 \00A0';
    }
    article#fow .thumbnail.with-caption small {
      width: 100%;
      text-align: right;
      display: inline-block;
      color: #999;
    }
    article#fow .gmnoprint {
      display: none !important;
    }
    article#fow footer {
      margin: 2em 0;
      text-align: center;
      color: gray;
      border-top: 1px solid #2685BB;
      padding-top: 0.5em;
    }
    article#fow footer a {
      color: #2685BB;
      text-decoration: none;
    }
</style>

<?php get_header(); ?>
<?php get_footer(); ?>
