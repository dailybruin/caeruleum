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
    <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/vectordiv.js'></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/list-script.js"></script>

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
            <?php if(get_field('list_items')): ?>
              <?php $i = 1 ?>
	            <?php while(has_sub_field('list_items')): ?>
                <?php if ($i === 1): ?>
                  <li class="l-item active" id="card1">
                <?php else: ?>
                  <li class="l-item" id="card<?php echo $i?>">
                <?php endif ?>
                    <?php the_sub_field('item_sidebar_title'); ?>
                  </li>
                <?php $i++ ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>

        <div class="panel-body outerscroll" id="scroll-down"><a href="#"><center><span class="glyphicon glyphicon-chevron-down"></span></center></a></div>
        </div>


<!-- CARDS -->

      <div class="row content">
        <div class="col-md-7">
          <div class="cards">
            <ul class="card-list">
              <?php if(get_field('list_items')): ?>
                <?php
                $size = $i-1;
                $i = 1
                ?>
  	            <?php while(has_sub_field('list_items')): ?>
                  <?php if ($i === 1): ?>
                    <li class="card showing">
                  <?php else: ?>
                    <li class="card not-showing">
                  <?php endif ?>
                      <div class="card-upper">
                        <p>
                          <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span></a>
                          <strong>CARD <?php echo $i?></strong> of <strong><?php echo $size?></strong>
                          <a class="next" href='#'><span class="glyphicon glyphicon-menu-right"></span></a>
                        </p>
                      </div>
                      <div class="card-content">
                        <h1><?php the_sub_field('item_title'); ?></h1>
                        <?php the_sub_field('item_body'); ?>
                      </div>
                      <div class="card-lower">
                        <p>
                          <a class="last" href='#'><span class="glyphicon glyphicon-menu-left"></span>  last</a>
                          <a class="next" href='#'>next  <span class="glyphicon glyphicon-menu-right"></span></a>
                        </p>
                      </div>
                    </li>


                  <?php $i++ ?>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>
