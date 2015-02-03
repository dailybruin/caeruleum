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
       .usac-2013 {
          max-width: 940px;
          margin-left: auto;
          margin-right: auto;
        }
        #banner {
          margin-bottom: 10px;
        }
    </style>
    <link href="bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
<div class='usac-2013'>
    <dl class="sub-nav">
      <dt>USAC Elections 2013</dt>
        <dd class="active"><a href="/">Home</a></dd>
          <dd><a href="/usac-elections-2013/candidates">Candidates</a></dd>
          <dd><a href="/usac-elections-2013/campaign-violations">Campaign Violations</a></dd>
          <dd><a href="http://my.ucla.edu/">Vote Here</a></dd>
    </dl>
  </br>

    <div class="row-fluid">

      <div class="span9">

        <a title='USAC Elections' href='/usac-elections-2013/'><img id='banner' src='//dailybruin.com/images/features/usac2013/bannercic.jpg'/></a>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php
        the_content();
        ?>

        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

      </div>

      <div class="span3">

        <?php get_template_part('ad','side'); ?>

      </div>

    </div> <!-- /container -->
</div>

<?php get_footer(); ?>
