<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes, shrink-to-fit=no" />
    <title>Blog Lists</title>

    <!-- <link rel="stylesheet" media="all" href="https://cdn0.vox-cdn.com/stylesheets/vox.v65a8a7248c298ad4.css" /> -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/list-style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/vectordiv.js"></script>
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/list-script.js"></script>

  </head>
  <body>

      <div id="bg">
        <img src="http://media.gettyimages.com/videos/pink-white-and-light-gray-clouds-pass-through-a-baby-blue-sky-video-id72683500?s=640x640" alt="">
      </div>


    <div class="container-fluid">
    <div class="row">


      <div class="col-md-3 panel panel-default sidebar1">
        <div class="panel-body">
          <h2><center>Share</center></h2>
        </div>


        <div class="panel-body outerscroll" id="scroll-up"><a href="#"><center><span class="glyphicon glyphicon-chevron-up"></span></center></a></div>

        <div class="panel-body">
          <ul id="scrollDiv" class="list scroll-list">
              <li class="l-item active" id="card1">Monday</li>
              <li class="l-item" id="card2">Tuesday</li>
              <li class="l-item" id="card3">Wednesday</li>
              <li class="l-item" id="card4">Thursday</li>
              <li class="l-item" id="card5">Friday, I'm in Love</li>
              <li class="l-item" id="card6">Saturday</li>
              <li class="l-item" id="card7">Sunday</li>
          </ul>
        </div>
        <div class="panel-body outerscroll" id="scroll-down"><a href="#"><center><span class="glyphicon glyphicon-chevron-down"></span></center></a></div>


        <!-- MY UP/DOWN -->
        <!-- <script>
         $('#scroll-up').click(function() {
            event.preventDefault();


            $('#scrollDiv').animate({
              marginTop: "-=10px"
            }, "fast");
         });

         $('#scroll-down').click(function() {
            event.preventDefault();
            $('#scrollDiv').animate({
              marginBottom: "+=10px"
            }, "fast");
         });
        </script> -->


      </div>


<!-- CARDS -->

      <div class="row content"> <!-- TANZEELA ADDED content -->
        <div class="col-md-7">
          <div class="cards">
            <ul class="card-list">
              <li class="card showing">
                <div class="card-upper">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span></a>
                    <strong>CARD 1</strong> of <strong>7</strong>
                    <a class="next" href='#'><span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
                <div class="card-content">
                  <h1>Throwback Thursday: Tackling the eternal problem of overcrowding on campus</h1>
                  <p>Students. More students. And even more students.</p>
                  <p>That’s been the tale of enrollment at UCLA.</p>
                  <p>The familiar groans of not being able to enroll in a class because the discussion sections fill up; the well-acquainted troubles of not finding a space to sit in class, let alone take notes; the nostalgic memories of not being able to order textbooks in time for class – we’ve all had these moments. In fact, some of us are feeling the heat right now, with the recent surge of admitted freshmen due to the University of California’s pledge to enroll 10,000 more California residents between 2016 and 2019.</p>
                  <p>But the issue of classroom over-enrollment isn’t unique to the 21st-century UCLA. After all, UCLA was a big place before it, well, became a big place.</p>
                  <p>A Daily Bruin news story published on Oct. 4, 1967, talks about how due to over-enrollment in lower division classes, the Student Book Department was facing a massive shortage of certain textbooks. According to then-Student Book Department manager, Wallace Ruggeri, heightened lower division class sizes and faculty tardiness in submitting book lists were the reasons for the textbook dilemma.</p>
                  <p>A Daily Bruin news story published on Oct. 4, 1967, talks about how due to over-enrollment in lower division classes, the Student Book Department was facing a massive shortage of certain textbooks. According to then-Student Book Department manager, Wallace Ruggeri, heightened lower division class sizes and faculty tardiness in submitting book lists were the reasons for the textbook dilemma.</p>
                  <p>A Daily Bruin news story published on Oct. 4, 1967, talks about how due to over-enrollment in lower division classes, the Student Book Department was facing a massive shortage of certain textbooks. According to then-Student Book Department manager, Wallace Ruggeri, heightened lower division class sizes and faculty tardiness in submitting book lists were the reasons for the textbook dilemma.</p>
                  <p>A Daily Bruin news story published on Oct. 4, 1967, talks about how due to over-enrollment in lower division classes, the Student Book Department was facing a massive shortage of certain textbooks. According to then-Student Book Department manager, Wallace Ruggeri, heightened lower division class sizes and faculty tardiness in submitting book lists were the reasons for the textbook dilemma.</p>
                </div>
                <div class="card-lower">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span>  last</a>
                    <a class="next" href='#'>next  <span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
              </li>
              <li class="card not-showing">
                <div class="card-upper">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span></a>
                    <strong>CARD 2</strong> of <strong>7</strong>
                    <a class="next"href='#'><span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
                <div class="card-content">
                  <h1>Throwback Thursday: Tackling the eternal problem of overcrowding on campus</h1>
                  <p>Students. More students. And even more students.</p>
                  <p>That’s been the tale of enrollment at UCLA.</p>
                  <p>The familiar groans of not being able to enroll in a class because the discussion sections fill up; the well-acquainted troubles of not finding a space to sit in class, let alone take notes; the nostalgic memories of not being able to order textbooks in time for class – we’ve all had these moments. In fact, some of us are feeling the heat right now, with the recent surge of admitted freshmen due to the University of California’s pledge to enroll 10,000 more California residents between 2016 and 2019.</p>
                  <p>But the issue of classroom over-enrollment isn’t unique to the 21st-century UCLA. After all, UCLA was a big place before it, well, became a big place.</p>
                  <p>A Daily Bruin news story published on Oct. 4, 1967, talks about how due to over-enrollment in lower division classes, the Student Book Department was facing a massive shortage of certain textbooks. According to then-Student Book Department manager, Wallace Ruggeri, heightened lower division class sizes and faculty tardiness in submitting book lists were the reasons for the textbook dilemma.</p>
                </div>
                <div class="card-lower">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span>  last</a>
                    <a class="next" href='#'>next  <span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
              </li>
              <li class="card not-showing">
                <div class="card-upper">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span></a>
                    <strong>CARD 3</strong> of <strong>7</strong>
                    <a class="next" href='#'><span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
                <div class="card-content">
                  <h1>Throwback Thursday: Tackling the eternal problem of overcrowding on campus</h1>
                  <p>Students. More students. And even more students.</p>
                  <p>That’s been the tale of enrollment at UCLA.</p>
                  <p>The familiar groans of not being able to enroll in a class because the discussion sections fill up; the well-acquainted troubles of not finding a space to sit in class, let alone take notes; the nostalgic memories of not being able to order textbooks in time for class – we’ve all had these moments. In fact, some of us are feeling the heat right now, with the recent surge of admitted freshmen due to the University of California’s pledge to enroll 10,000 more California residents between 2016 and 2019.</p>
                  <p>But the issue of classroom over-enrollment isn’t unique to the 21st-century UCLA. After all, UCLA was a big place before it, well, became a big place.</p>
                  <p>A Daily Bruin news story published on Oct. 4, 1967, talks about how due to over-enrollment in lower division classes, the Student Book Department was facing a massive shortage of certain textbooks. According to then-Student Book Department manager, Wallace Ruggeri, heightened lower division class sizes and faculty tardiness in submitting book lists were the reasons for the textbook dilemma.</p>
                </div>
                <div class="card-lower">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span>  last</a>
                    <a class="next" href='#'>next  <span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
              </li>
              <li class="card not-showing">
                <div class="card-upper">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span></a>
                    <strong>CARD 4</strong> of <strong>7</strong>
                    <a class="next" href='#'><span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
                <div class="card-content">
                  <h1>Throwback Thursday: Tackling the eternal problem of overcrowding on campus</h1>
                  <p>Students. More students. And even more students.</p>
                  <p>That’s been the tale of enrollment at UCLA.</p>
                  <p>The familiar groans of not being able to enroll in a class because the discussion sections fill up; the well-acquainted troubles of not finding a space to sit in class, let alone take notes; the nostalgic memories of not being able to order textbooks in time for class – we’ve all had these moments. In fact, some of us are feeling the heat right now, with the recent surge of admitted freshmen due to the University of California’s pledge to enroll 10,000 more California residents between 2016 and 2019.</p>
                  <p>But the issue of classroom over-enrollment isn’t unique to the 21st-century UCLA. After all, UCLA was a big place before it, well, became a big place.</p>
                  <p>A Daily Bruin news story published on Oct. 4, 1967, talks about how due to over-enrollment in lower division classes, the Student Book Department was facing a massive shortage of certain textbooks. According to then-Student Book Department manager, Wallace Ruggeri, heightened lower division class sizes and faculty tardiness in submitting book lists were the reasons for the textbook dilemma.</p>
                </div>
                <div class="card-lower">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span>  last</a>
                    <a class="next" href='#'>next  <span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
              </li>
              <li class="card not-showing">
                <div class="card-upper">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span></a>
                    <strong>CARD 5</strong> of <strong>7</strong>
                    <a class="next" href='#'><span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
                <div class="card-content">
                  <h1>Throwback Thursday: Tackling the eternal problem of overcrowding on campus</h1>
                  <p>Students. More students. And even more students.</p>
                  <p>That’s been the tale of enrollment at UCLA.</p>
                  <p>The familiar groans of not being able to enroll in a class because the discussion sections fill up; the well-acquainted troubles of not finding a space to sit in class, let alone take notes; the nostalgic memories of not being able to order textbooks in time for class – we’ve all had these moments. In fact, some of us are feeling the heat right now, with the recent surge of admitted freshmen due to the University of California’s pledge to enroll 10,000 more California residents between 2016 and 2019.</p>
                  <p>But the issue of classroom over-enrollment isn’t unique to the 21st-century UCLA. After all, UCLA was a big place before it, well, became a big place.</p>
                  <p>A Daily Bruin news story published on Oct. 4, 1967, talks about how due to over-enrollment in lower division classes, the Student Book Department was facing a massive shortage of certain textbooks. According to then-Student Book Department manager, Wallace Ruggeri, heightened lower division class sizes and faculty tardiness in submitting book lists were the reasons for the textbook dilemma.</p>
                </div>
                <div class="card-lower">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span>  last</a>
                    <a class="next" href='#'>next  <span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
              </li>
              <li class="card not-showing">
                <div class="card-upper">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span></a>
                    <strong>CARD 6</strong> of <strong>7</strong>
                    <a class="next" href='#'><span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
                <div class="card-content">
                  <h1>Throwback Thursday: Tackling the eternal problem of overcrowding on campus</h1>
                  <p>Students. More students. And even more students.</p>
                  <p>That’s been the tale of enrollment at UCLA.</p>
                  <p>The familiar groans of not being able to enroll in a class because the discussion sections fill up; the well-acquainted troubles of not finding a space to sit in class, let alone take notes; the nostalgic memories of not being able to order textbooks in time for class – we’ve all had these moments. In fact, some of us are feeling the heat right now, with the recent surge of admitted freshmen due to the University of California’s pledge to enroll 10,000 more California residents between 2016 and 2019.</p>
                  <p>But the issue of classroom over-enrollment isn’t unique to the 21st-century UCLA. After all, UCLA was a big place before it, well, became a big place.</p>
                  <p>A Daily Bruin news story published on Oct. 4, 1967, talks about how due to over-enrollment in lower division classes, the Student Book Department was facing a massive shortage of certain textbooks. According to then-Student Book Department manager, Wallace Ruggeri, heightened lower division class sizes and faculty tardiness in submitting book lists were the reasons for the textbook dilemma.</p>
                </div>
                <div class="card-lower">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span>  last</a>
                    <a class="next" href='#'>next  <span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
              </li>
              <li class="card not-showing">
                <div class="card-upper">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span></a>
                    <strong>CARD 7</strong> of <strong>7</strong>
                    <a class="next" href='#'><span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
                <div class="card-content">
                  <h1>Throwback Thursday: Tackling the eternal problem of overcrowding on campus</h1>
                  <p>Students. More students. And even more students.</p>
                  <p>That’s been the tale of enrollment at UCLA.</p>
                  <p>The familiar groans of not being able to enroll in a class because the discussion sections fill up; the well-acquainted troubles of not finding a space to sit in class, let alone take notes; the nostalgic memories of not being able to order textbooks in time for class – we’ve all had these moments. In fact, some of us are feeling the heat right now, with the recent surge of admitted freshmen due to the University of California’s pledge to enroll 10,000 more California residents between 2016 and 2019.</p>
                  <p>But the issue of classroom over-enrollment isn’t unique to the 21st-century UCLA. After all, UCLA was a big place before it, well, became a big place.</p>
                  <p>A Daily Bruin news story published on Oct. 4, 1967, talks about how due to over-enrollment in lower division classes, the Student Book Department was facing a massive shortage of certain textbooks. According to then-Student Book Department manager, Wallace Ruggeri, heightened lower division class sizes and faculty tardiness in submitting book lists were the reasons for the textbook dilemma.</p>
                </div>
                <div class="card-lower">
                  <p>
                    <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span>  last</a>
                    <a class="next" href='#'>next  <span class="glyphicon glyphicon-menu-right"></span></a>
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
    </div>
  </body>
</html>
