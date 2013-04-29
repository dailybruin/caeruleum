<?php/*
Template Name: USAC Elections Campaign Violations 2013
*/ ?>

<?php get_header(); ?>

<!-- Le styles -->
    <link href="bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      #violations
      {
        margin-top: 30px;
      }
    </style>
    <link href="bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <div class="navbar navbar">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">USAC Elections 2013</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="/usac-elections-2013/">Home</a></li>
              <li><a href="/usac-elections-2013/candidates">Candidates</a></li>
              <li class="active"><a href="#">Campaign Violations</a></li>
        <li><a href="http://my.ucla.edu/">Vote Here!</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="row-fluid">

      <div class="span9">

        <a title='USAC Elections' href='/usac-elections-2013/'><img id='banner' src='/images/features/usac2013/bannercic.jpg'/></a>

        <h2 id="violations" style="text-align:center">There are currently no campaign violations.</h2>

      </div>

      <div class="span3">

        <?php get_template_part('ad','side'); ?>

      </div>

    </div> <!-- /container -->


<?php get_footer(); ?>
