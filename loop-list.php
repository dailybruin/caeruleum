<?php get_header(); ?>

  <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/vectordiv.js'></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/scrollToFixed.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/list-script.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/list-script2.js"></script>

    <div class="row blog-list">
      <ul class="contain">
        <li id="sidebar2">
        <div class="small-3 columns panel blog-list-sidebar">
          <div class="panel-body">
            <div class="db-post-headline"><h1><?php the_headline(); ?></h1></div>
            <?php the_byline(); ?>
          </div>

          <div class="panel-body outerscroll" id="scroll-up"><a href="#"><i class="fa fa-chevron-up" aria-hidden="true"></i></span></a></div>

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

          <div class="panel-body outerscroll" id="scroll-down"><a href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i></a></div>
        </div>
        </li>

<!-- CARDS -->

      <li class="cardStuff">
        <div class="small-7 columns content">
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
                          <a class="last" href='#'><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                          <strong>CARD <?php echo $i?></strong> of <strong><?php echo $size?></strong>
                          <a class="next" href='#'><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </p>
                      </div>
                      <div class="card-content db-post-content">
                        <div class="db-post-headline">
                          <h1><?php the_sub_field('item_title'); ?></h1>
                        </div>
                        <?php the_sub_field('item_body'); ?>
                      </div>
                      <div class="card-lower">
                        <p>
                          <a class="last" href='#'><i class="fa fa-chevron-left" aria-hidden="true"></i>  last</a>
                          <a class="next" href="#">next  <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </p>
                      </div>



                  <?php $i++ ?>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </li>
    </li>
      </ul>
      </div>
<?php get_footer(); ?>
