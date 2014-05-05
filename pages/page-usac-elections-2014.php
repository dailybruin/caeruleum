<?php/*
Template Name: USAC Elections 2014
*/ ?>

<?php get_header(); ?>

<link href="http://fonts.googleapis.com/css?family=Open+Sans|Dosis:400,800" rel="stylesheet" type="text/css" />
<!-- Le styles -->
    <link href="bootstrap.css" rel="stylesheet">
    <style type="text/css">
        
        h2.elections {
          color: #00a5e5;
          font-family: 'Dosis', sans-serif;
          font-weight: 400;
          line-height: 30px;
          font-size: 40px;
          margin: 0 0 5px 0;
        }

        h4.elections {
          font-family: 'Open Sans', sans-serif;
          font-size: 25px;
          line-height: 23px;
          margin: 5px 0 10px 0;
        }

        .ad{
          margin-bottom: 10px;
        }

        .btn-group{
          text-align: center;
          display: block; 
        }

        .lid {
          font-size: 18px;
          margin-left: 7px;

        }

        .articles {
          margin-left: 30px;
        }

        .candphoto
        {
          margin-top: 10px;
          margin-left: 10px;
          margin-bottom: 10px;
          margin-right: 10px;
          width: 120px;
        }

        .presphoto
        {
          margin-top: 20px;
          margin-left: 20px;
          margin-bottom: 20px;
          margin-right: 20px;
          width: 175px;
          text-align: left;
        }

        .box{
          margin-top: 10%;
          margin-bottom: 10%;
          margin-left: 20px;
        }

        .textcentered{
          text-align: center;
        }

        .bally{
          background-color: #93BCC4;
        }

        .bunited{
          background-color: #C2E1F2;
        }

        .indep{
          background-color: #A2DEA6;
        }

        .letsact
        {
          background-color: #F7F499;
        }

        .pass
        {
          background-color: green;
        }

        .fail
        {
          background-color: red;
        }

        .white
        {
          color: white;
        }

        .offwhite
        {
          color: #858585;
        }

        .topnote
        {
          font-size: 44px
        }

        .greyer{
          color: #0327AF;
        }

        .laterbuttons {
            display:none;
            visibility: hidden;
          }

        @media (max-width: 1200px) {
          .initbuttons {
            display:none;
            visibility: hidden;
          }

          .laterbuttons {
            display: inline;
            visibility: visible;
            width: 100%;
          }
}


   </style>


<script> $('#navbar').scrollspy()</script>
<script>$('#myModal').modal('toggle')</script>

<div class='container'>

    <div class="navbar">
      <div class="navbar-inner" style="color:#3185c0">
        <div class="container-fluid">
          <a class="brand" href="#">USAC Election 2014</a>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="/usac-elections-2014/candidates">Candidates</a></li>
              <li><a href="/usac-elections-2014/endorsements">Endorsements</a></li>
              <li><a href="/usac-elections-2014/campaign-violations">Campaign Violations</a></li>
              <li><a href="http://my.ucla.edu/">Vote Here</a></li>

            </ul>
        </div>
      </div>
    </div>

<div class="row-fluid">

  <div class="span9">
    <a title='USAC Elections' href='#'><img src='http://dailybruin.com/images/2014/05/usac-elections14-banner2.png' border='0'/></a> 
    <br /><br />

    <div class="thumbnail">
      <p style="text-align:center">
      <b>Thirty candidates are running for the 13 elected USAC positions in this year's highly contested elections. The majority of candidates are running with the Bruins United, LET'S ACT! or FIRED UP! slates, and one candidate is running with the slate Â¡Bruin Satyrists! Slates are groups of students who combine their resources and run on similar platforms, similar to political parties.</b></p>
    </div>

    <br/><br/>




    

    

    <div class="row-fluid">

      <div class="initbuttons">

      <div class="span4">
      <br/>
        <div class = "btn-group">
          <a href="/usac-elections-2014/candidates">
            <button class="btn" style="color:#3185c0">
              <div class="caption">
                  <h4 style="text-align:center">Learn about the candidates</h4>
                  <h5>30 students are running for 13 seats</h5>
              </div>
            </button>
          </a>
        </div>
      </div>

      <div class="span4">
      <br/>
        <div class = "btn-group">
          <a href="#myModal" role="button" data-toggle="modal">
            <button class="btn" style="color:#3185c0">
              <div class="caption">
                  <h4 style="text-align:center">What is USAC?</h4>
                  <h5>Basics of your student government  </h5>
              </div>
            </button>
          </a>
        </div>
      </div>

      <div class="span4">
      <br/>
        <div class = "btn-group">
          <a href="http://dailybruin.com/usac-elections-2014/endorsements" role="button" data-toggle="modal">
            <button class="btn" style="color:#3185c0">
              <div class="caption">
                  <h4 style="text-align:center">Daily Bruin Endorsements</h4>
                  <h5>Check out the selections</h5>
              </div>
            </button>
          </a>
        </div>
      </div>

    </div>
        
    </div>

    <div class="row-fluid">

      <div class="laterbuttons">

      <div class="row-fluid">
      <div class="span12">
      <br/>
        <div class = "btn-group">
          <a href="/usac-elections-2014/candidates">
            <button class="btn" style="color:#3185c0">
              <div class="caption">
                  <h4 style="text-align:center">Learn about the candidates</h4>
                  <h5>23 students are running for 13 seats</h5>
              </div>
            </button>
          </a>
        </div>
      </div>
      </div>

      <div class="row-fluid">
      <div class="span12">
      <br/>
        <div class = "btn-group">
          <a href="#myModal" role="button" data-toggle="modal">
            <button class="btn" style="color:#3185c0">
              <div class="caption">
                  <h4 style="text-align:center">What is USAC ?</h4>
                  <h5>Basics of your student government  </h5>
              </div>
            </button>
          </a>
        </div>
      </div>
      </div>

      <div class="row-fluid">
      <div class="span12">
      <br/>
        <div class = "btn-group">
          <a href="http://dailybruin.com/usac-elections-2014/endorsements/" role="button" data-toggle="modal">
            <button class="btn" style="color:#3185c0">
              <div class="caption">
                  <h4 style="text-align:center">Daily Bruin Endorsements</h4>
                  <h5>Check out the selections</h5>
              </div>
            </button>
          </a>
        </div>
      </div>
      </div>

    </div>
        
    </div>

    <br />

    

    <div class="row-fluid">
      <div class="span12">
        <div class="thumbnail">
          <div class="caption">
             <h2 class="elections">Recent Articles<h2>
           </div>

            <div class="articles">

            <h4 class="elections">News</h4> 

            <ul>
              <?php
              $category_id = get_cat_ID('News');
              global $post;
              $myposts = get_posts( array('tag_slug__and'  => 'USAC election 14', 'posts_per_page' => '-1', 'category' => $category_id));
              foreach( $myposts as $post ) :  setup_postdata($post); ?>
              <li class="lid"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endforeach; ?>
            </ul>

            <h4 class="elections">Opinion</h4> 

            <ul>
              <?php
              $category_id = get_cat_ID('Opinion');
              global $post;
              $myposts = get_posts( array('tag_slug__and'  => 'USAC election 14', 'posts_per_page' => '-1', 'category' => $category_id));
              foreach( $myposts as $post ) :  setup_postdata($post); ?>
              <li class="lid"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endforeach; ?>
            </ul>

            <!-- <h4>Multimedia</h4> 

            <ul>
              <?php
              $category_id = get_cat_ID('Multimedia');
              global $post;
              $myposts = get_posts( array('tag_slug__and'  => 'USAC election 14', 'posts_per_page' => '-1', 'category' => $category_id));
              foreach( $myposts as $post ) :  setup_postdata($post); ?>
              <li class="lid"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endforeach; ?>
            </ul> -->

          </div>
        </div>
      </div>



      </div>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">FAQ</h3>
    </div>
    <div class="modal-body">
    <p>
    <b>What is USAC?</b><br />
     The Undergraduate Students Association Council is the governing body for the over 28,000 undergraduate students at UCLA. Every spring, students vote for candidates to fill the 13 elected officer positions and on any ballot initiatives, referendums or amendments brought up that year.
    <br /><br />

    <b>What is the USAC Election Board?</b><br />
    The Election Board is appointed by USAC and is responsible for administering and overseeing the spring elections. The board puts on various election events, such as student group endorsement hearings and candidate debates. The Election Board also sanctions candidates for campaign violations. 
    <br /><br />

    <b>What is a slate?</b><br />
    Slates are groups of students who pool their resources together and run for USAC office under similar platforms.The slates running candidates in this year’s elections are <i>Bruin Alliance</i>, <i>Bruins United</i> and <i>LET’S ACT</i>! 
    <br /><br />

    <b>What is on the ballot?</b><br />
   This elections season, there are 30 candidates, a fee referendum and a USAC constitutional amendment on the ballot.

    <br /><br />

    <b>How can I vote?</b><br />
    USAC elections will be May 6-9 and students can vote by logging into MyUCLA. 
    <br /><br />

    <b>When are results announced?</b><br />
    The USAC Election Board chair will announce the election results on Friday, May 9 at 4 p.m. at Meyerhoff Park. 
    <br />
    </p>
    </div>
</div>

</div><!--/span9-->

<div class="span3">
  <div class='ad'>
    <?php get_template_part('ad','side'); ?>
  </div>
  <div class="thumbnail textcentered">
    <p><h4 style="color:#3185c0">Important Dates:</h4>
      April 29 -  Endorsement hearing<br />
      May 3 - Candidates debates<br />
      May 4 - Campus campaigning begins<br />
      May 6 - Voting begins at 9 a.m.<br />
      May 9 - Voting ends at 12 p.m.<br />
      <b>Election results announced at 4 p.m. at Meyerhoff Park.</b></p>
  </div>
  <br />
  <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=%23USACelections" data-widget-id="328749991814369281">Tweets about "#USACelections"</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div><!--/span3-->

</div><!--/row-->

</div><!--/container-->


<?php get_footer(); ?>
