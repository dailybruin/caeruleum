<?php/*
Template Name: USAC Elections 2013
*/ ?>

<?php get_header(); ?>

<!-- Le styles -->
    <style type="text/css">

    
        .ad{
          margin-bottom: 10px;
        }

        .button-group{
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
          margin-left: auto;
          margin-bottom: 10px;
          margin-right: auto;
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
          height: 300px;
        }

        .indep{
          background-color: #A2DEA6;
          height: 300px;
        }

        .letsact
        {
          background-color: #F7F499;
          overflow: hidden;
          height: 300px;
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

        .usac-2013 {
          max-width: 940px;
          margin-left: auto;
          margin-right: auto;
        }

        .panels {
          list-style-type: none;
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

<div class='usac-2013'>
<div class='container'>
    <dl class="sub-nav">
      <dt>USAC Elections 2013</dt>
        <dd class="active"><a href="/">Home</a></dd>
          <dd><a href="/usac-elections-2013/candidates">Candidates</a></dd>
          <dd><a href="/usac-elections-2013/campaign-violations">Campaign Violations</a></dd>
          <dd><a href="http://my.ucla.edu/">Vote Here</a></dd>
    </dl>
</br>
<div class="row">

  <div class="large-12 columns">
    <a title='USAC Elections' href='#'><img src='//dailybruin.com/images/features/usac2013/bannercic.jpg' border='0'/></a> 
    <br /><br />

    <div class="panel">
      <p style="text-align:center">
      <b>The Undergraduate Students Association Council is the governing body for the undergraduate student population. Each spring, students   vote on MyUCLA for the 13 elected positions on the council and any proposed ballot referendums or initiatives. Students can vote on MyUCLA starting May 6 at noon until May 9 at 6 p.m.</b></p>
    </div>

    <br/><br/>
  </div>
    <!--

    <h2 style="text-align:center;">USAC Election Results:</h2>

    <br/>

    -->
    <div class="large-9 columns">
    <!-- Presidents-->

    <ul class="panels">
      <li class="large-12 columns">
        <div class="panel letsact">

          <div class="row">
            <div class="large-3 columns">
              <img class="presphoto" src="//dailybruin.com/images/features/usac2013/John Joanino.jpg" alt="">
            </div>
            <div class="large-9 columns">
              <div class="box">
                <h1>President</h1><br/><br/>
                <h2 style="font-family:sans-serif;">John Joanino</h2>
                <h3>LET'S ACT!</h3>
                <h3 style="text-transform: lowercase;"class="greyer">51.8% of the vote</h3>
              </div>
            </div>
          </div>

        </div>
      </li>
    </ul>

    <!-- IVPS-->


    <ul class="panels">

      <li class="large-3 columns">
        <div class="panel bunited">
          <img class="candphoto" src="//dailybruin.com/images/features/usac2013/Avi Oved.jpg" alt="">
          <div class="textcentered">
            <h4>Internal Vice President</h4></br>
            <h5>Avi Oved</h5></br>
            <h5>Bruins United</h5></br>
            <h4 class="greyer">52.6%</h4>

          </div>
        </div>
      </li>

      <!-- EVPS-->

      <li class="large-3 columns">
        <div class="panel letsact">
          <img class="candphoto" src="//dailybruin.com/images/features/usac2013/Maryssa Hall.jpg" alt="">
          <div class="textcentered">
            <h4>External Vice President</h4></br>
            <h5>Maryssa Hall</h5></br>
            <h5>LET'S ACT!</h5></br>
            <h4 class="greyer">55%</h4>
          </div>
        </div>
      </li>

      <!-- Academic Affairs Commissioner -->

      <li class="large-3 columns">
        <div class="panel bunited">
          <img class="candphoto" src="//dailybruin.com/images/features/usac2013/Darren Ramalho.jpg" alt="">
          <div class="textcentered">
            <h4>Academic Affairs Commissioner</h4></br>
            <h5>Darren Ramalho</h5></br>
            <h5>Bruins United</h5></br>
            <h4 class="greyer">53.1%</h4>
          </div>
        </div>
      </li>

      <!--Campus Events Commisioner-->

      <li class="large-3 columns">
        <div class="panel indep">
          <img class="candphoto" src="//dailybruin.com/images/features/usac2013/Jessica Kim.jpg" alt="">
          <div class="textcentered">
            <h4>Campus Events Commissioner</h4>
            <h5>Jessica Kim</h5>
            <h5>Independent</h5>
            <h5 class="greyer">Uncontested</h5>
          </div>
        </div>
      </li>

    </ul>

    <ul class="panels">

      <!--Cultural Affairs Commissioner-->

      <li class="large-3 columns">
        <div class="panel letsact">
          <img class="candphoto" src="//dailybruin.com/images/features/usac2013/Jessica Trumble.jpg" alt="">
          <div class="textcentered">
            <h4>Cultural Affairs Commissioner</h4></br>
            <h5>Jessica Trumble</h5></br>
            <h5>LET'S ACT!</h5></br>
            <h5 class="greyer">Uncontested</h5>
          </div>
        </div>
      </li>

      <!--General Representatives-->

       <li class="large-3 columns">
        <div class="panel bunited">
          <img class="candphoto" src="//dailybruin.com/images/features/usac2013/Sam Haws.jpg" alt="">
          <div class="textcentered">
            <h4>General Representative 1</h4></br>
            <h5>Sam Haws</h5></br>
            <h5>Bruins United</h5></br>
            <h4>&nbsp;</h4>
          </div>
      </li>


      <li class="large-3 columns">
        <div class="panel bunited">
          <img class="candphoto" src="//dailybruin.com/images/features/usac2013/Sunny Singh.jpg" alt="">
          <div class="textcentered">
            <h4>General Representative 2</h4></br>
            <h5>Sunny Singh</h5></br>
            <h5>Bruins United</h5></br>
            <h4>&nbsp;</h4>
          </div>
        </div>
      </li>
     
      <li class="large-3 columns">
        <div class="panel letsact">
          <img class="candphoto" src="//dailybruin.com/images/features/usac2013/Lizzy Naameh.jpg" alt="">
          <div class="textcentered">
            <h4>General Representative 3</h4></br>
            <h5>Lizzy Naameh</h5></br>
            <h5>LET'S ACT!</h5>
            <h4>&nbsp;</h4>
          </div>
      </li>

    </ul>

    <ul class="panels">

      <!-- Community Service Commisioner -->

      <li class="large-3 columns">
        <div class="panel indep">
          <img class="candphoto" src="//dailybruin.com/images/features/usac2013/Omar Arce.jpg" alt="">
          <div class="textcentered">
            <h4>Community Service Commissioner</h4></br>
            <h5>Omar Arce</h5>
            <h5>Independent</h5>
            <h5 class="greyer">Uncontested</h5>
          </div>
        </div>
      </li>

      <!-- Facilities Commissioner -->

      <li class="large-3 columns">
        <div class="panel bunited">
          <img class="candphoto" src="//dailybruin.com/images/features/usac2013/Armen Hadjimanoukian.jpg" alt="">
          <div class="textcentered">
            <h4>Facilities Commissioner</h4></br>
            <h5>Armen Hadjimanoukian</h5></br>
            <h5>Bruins United</h5></br>
            <h4 class="greyer">50.9%</h4>
          </div>
        </div>
      </li>

      <!-- Financial Commisioner -->

      <li class="large-3 columns">
        <div class="panel bunited">
          <img class="candphoto" src="//dailybruin.com/images/features/usac2013/Lauren Rogers.jpg" alt="">
          <div class="textcentered">
            <h4>Financial Supports Commissioner</h4></br>
            <h5>Lauren Rogers</h5></br>
            <h5>Bruins United</h5></br>
            <h4 class="greyer">54.1%</h4>
          </div>
        </div>
      </li>

      <!-- Student Wellness Commissioner -->

      <li class="large-3 columns">
        <div class="panel indep">
          <img class="candphoto" src="//dailybruin.com/images/features/usac2013/Savannah Dianne Badalich.jpg" alt="">
          <div class="textcentered">
            <h4>Student Wellness Commissioner</h4></br>
            <h5>Savannah Badalich</h5></br>
            <h5>Independent</h5></br>
            <h5 class="greyer">Uncontested</h5>
          </div>
        </div>
      </li>

    </ul>

    <ul class="panels">

      <li class="large-6 columns">
        <div class="panel pass">
          <div class="textcentered">
            <h1 class="white">PASSED - 60%</h1>
            <h3>Bruin Bash Referendum</h3></span>
          </div>
        </div>
      </li>

      <li class="large-6 columns">
        <div class="panel fail">
          <div class="textcentered">
            <h1 class="white">FAILED - 47.9%</h1>
            <h3>Bruin Diversity Initiative</h3>
          </div>
        </div>
      </li>

    </ul>


    

    <div class="row">

      <div class="initbuttons">

      <div class="large-4 columns">
      <br/>
        <div class = "button-group">
          <a href="/usac-elections-2013/candidates">
            <button class="button" style="color:#009999">
              <div class="caption">
                  <h4 style="text-align:center">Learn about the candidates</h4></br>
                  <h5>23 students are running for 13 seats</h5>
              </div>
            </button>
          </a>
        </div>
      </div>

      <div class="large-4 columns">
      <br/>
        <div class = "button-group">
          <a href="#myModal" role="button" data-toggle="modal">
            <button class="button" style="color:#009999">
              <div class="caption">
                  <h4 style="text-align:center">What is USAC ?</h4></br>
                  <h5>Basics of your student government  </h5>
              </div>
            </button>
          </a>
        </div>
      </div>

      <div class="large-4 columns">
      <br/>
        <div class = "button-group">
          <a href="http://dailybruin.com/2013/05/06/editorial-board-2013-2014-usac-candidate-endorsements/
" role="button" data-toggle="modal">
            <button class="button" style="color:#009999">
              <div class="caption">
                  <h4 style="text-align:center">Daily Bruin Endorsements</h4></br>
                  <h5>Check out the selections</h5>
              </div>
            </button>
          </a>
        </div>
      </div>

    </div>
        
    </div>

    <div class="row">

      <div class="laterbuttons">

      <div class="row">
      <div class="large-12 columns">
      <br/>
        <div class = "button-group">
          <a href="/usac-elections-2013/candidates">
            <button class="button" style="color:#009999">
              <div class="caption">
                  <h4 style="text-align:center">Learn about the candidates</h4></br>
                  <h5>23 students are running for 13 seats</h5>
              </div>
            </button>
          </a>
        </div>
      </div>
      </div>

      <div class="row">
      <div class="large-12 columns">
      <br/>
        <div class = "button-group">
          <a href="#myModal" role="button" data-toggle="modal">
            <button class="button" style="color:#009999">
              <div class="caption">
                  <h4 style="text-align:center">What is USAC ?</h4></br>
                  <h5> Basics of your student government </h5>
              </div>
            </button>
          </a>
        </div>
      </div>
      </div>

      <div class="row">
      <div class="large-12 columns">
      <br/>
        <div class = "button-group">
          <a href="http://dailybruin.com/2013/05/06/editorial-board-2013-2014-usac-candidate-endorsements/
" role="button" data-toggle="modal">
            <button class="button" style="color:#009999">
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

    

    <div class="row">
      <div class="large-6 columns">
        <div class="panel">
          <div class="caption">
             <h3>Recent Articles<h3>
           </div>

            <div class="articles">

            <h4>News</h4> 

            <ul>
              <?php
              $category_id = get_cat_ID('News');
              global $post;
              $myposts = get_posts( array('tag_slug__and'  => 'USAC elections', 'posts_per_page' => '-1', 'category' => $category_id));
              foreach( $myposts as $post ) :  setup_postdata($post); ?>
              <li class="lid"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endforeach; ?>
            </ul>

            <h4>Opinion</h4> 

            <ul>
              <?php
              $category_id = get_cat_ID('Opinion');
              global $post;
              $myposts = get_posts( array('tag_slug__and'  => 'USAC elections', 'posts_per_page' => '-1', 'category' => $category_id));
              foreach( $myposts as $post ) :  setup_postdata($post); ?>
              <li class="lid"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endforeach; ?>
            </ul>

            <h4>Multimedia</h4> 

            <ul>
              <?php
              $category_id = get_cat_ID('Multimedia');
              global $post;
              $myposts = get_posts( array('tag_slug__and'  => 'USAC elections', 'posts_per_page' => '-1', 'category' => $category_id));
              foreach( $myposts as $post ) :  setup_postdata($post); ?>
              <li class="lid"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endforeach; ?>
            </ul>

          </div>
        </div>
      </div>

      <div class="large-6 columns">

        <script src="//storify.com/dailybruin/usac-elections-2013.js"></script><noscript>[<a href="//storify.com/dailybruin/usac-elections-2013" target="_blank">View the story "USAC Elections 2013" on Storify</a>]</noscript>

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
    The Undergraduate Students Association Council is the governing body for the more than 27,000 undergraduate students at UCLA. It consists of 13 elected officers and seven ex-officio officers, including administrative and alumni representatives, that sit on the council, but do not get a vote. 
    <br /><br />

    <b>What is the USAC Election Board?</b><br />
    The Election Board is appointed by USAC and is responsible for administering and overseeing the spring elections. The board puts on various election events, such as student group endorsement hearings and candidate debates. The Election Board also sanctions candidates for campaign violations. 
    <br /><br />

    <b>What is a slate?</b><br />
    Slates are groups of students who pool their resources together and run for USAC office under similar platforms.The slates running candidates in this year’s elections are <i>Bruin Alliance</i>, <i>Bruins United</i> and <i>LET’S ACT</i>! 
    <br /><br />

    <b>What is on the ballot?</b><br />
    There are 23 candidates running for 13 elected offices. Students will also be able to vote on an initiative and a referendum. An initiative is put on the ballot by students when they gather signatures of at least 10 percent of the undergraduate population. A referendum is put on the ballot by a two-thirds vote by USAC. The Bruin Diversity Initiative proposes a $9.93 increase to student fees every quarter to provide funding for various student groups including the Campus Retention Committee, the Student Initiated Access Committee, the American Indian Student Association, the Vietnamese Student Union, the Community Programs Office and the Pacific Islands’ Student Association. The Bruin Bash Referendum proposes a $1.33 increase to quarterly student fees to create a fund to support putting on Bruin Bash, the beginning of the year welcome back concert.

    <br /><br />

    <b>How can I vote?</b><br />
    USAC elections will be May 6-9 and students can vote by logging into MyUCLA. 
    <br /><br />

    <b>When are results announced?</b><br />
    The USAC Election Board chair will announce the election results on Thursday, May 9 at 11 p.m. on the steps of Kerckhoff. 
    <br />
    </p>
    </div>
</div>

</div><!--/span9-->

<div class="large-3 columns">
  <div class='ad'>
    <?php get_template_part('ad','side'); ?>
  </div>
  <div class="panel textcentered">
    <p><h4 style="color:#009999">Important Dates:</br></h4>May 1 - Group endorsement hearing<br />May 2 - Meet the candidates event<br />May 4 - Candidates debates<br />May 6 - Voting begins at noon<br />May 9 - Voting ends at 6 p.m.<br /><b> Election results announced at 11 p.m.</b></p>
  </div>
  <br />
  <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/search?q=%23USACelections" data-widget-id="328749991814369281">Tweets about "#USACelections"</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div><!--/span 3-->

</div><!--/row-->

</div><!--/container-->

</div>

<?php get_footer(); ?>
