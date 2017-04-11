<?php get_header(); ?>

<?php
  // IMPORTANT: set these for your particular wordpress installation
  // This includes db-story-a, db-story-b, db-story-c1, db-story-c2,
  // db-story-c3, db-story-c4, db-story-m1, db-story-m2, db-story-d1,
  // db-story-d2, db-story-d3, db-story-ns, db-story-op, db-story-ae,
  // db-story-sp
  $frontPageTags = array('4847','4859','4850','4849','4851','4853','4855','4862','4863','4861','4854','4860','4856','4858','4857','4865');

  $news_cat = get_category_by_slug('news')->term_id;
  $ae_cat = get_category_by_slug('arts-entertainment')->term_id;
  $sports_cat = get_category_by_slug('sports')->term_id;
  $opinion_cat = get_category_by_slug('opinion')->term_id;
?>
  <div class="row db-story" data-equalizer>
        <div class="large-6 medium-8 large-push-2 medium-push-4 columns db-story-center" data-equalizer-watch>
    <?php
      $args = array( 'numberposts' => 1, 'tag' => 'db-story-c1' );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
          <div class="db-story-c1">
            <div class="db-image text-center">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-category-full'); ?></a>
              <p class="db-image-caption text-left">
                <?php the_post_thumbnail_caption() ?>
              </p>
            </div>
            <span class="db-section-date">
              <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4>
              <h4>|</h4>
              <h5><?php the_time('F j, g:i a');?> </h5>
            </span>
            <h2>
              <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
            </h2>
            <?php the_byline_front(); ?>
            <p>
              <?php echo get_the_excerpt();  ?>
            </p>
          </div>
          <hr style="border-top: medium double lightgrey;">
        <?php endforeach; ?>
          <hr class="show-for-small-only">
          <?php
      $args = array( 'numberposts' => 1, 'tag' => 'db-story-c2' );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
          <div class="row db-story-c2">
            <div class="db-image medium-5 columns small-12">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
            </div>
            <div class="medium-7 columns small-12">
              <span class="db-section-date">
                <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4>
                <h4>|</h4>
                <h5><?php the_time('F j, g:i a');?> </h5>
              </span>
              <h2>
                <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
              </h2>
              <?php the_byline_front(); ?>
              <p>
                <?php echo get_the_excerpt();  ?>
              </p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

            <hr class="show-for-small-only">
        <div class="large-2 medium-4 large-pull-6 medium-pull-8 columns db-story-side" data-equalizer-watch>
            <?php
      $args = array( 'numberposts' => 1, 'tag' => 'db-story-a' );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
              <div class="db-story-a">
                <span class="db-section-date">
                <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4>
                <h4>|</h4>
                <h5><?php the_time('F j, g:i a');?> </h5>
                </span>
                <h2>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h2>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-front', array('class'=>'thumbnail-a')); ?></a>
                <?php the_byline_front(); ?>
                <p>
                  <?php echo get_the_excerpt();  ?>
                </p>
              </div>
              <hr>
            <?php endforeach; ?>
            <?php
      $args = array( 'numberposts' => 1, 'tag' => 'db-story-b' );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
              <div class="db-story-b">
                <span class="db-section-date">
                <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4>
                <h4>|</h4>
                <h5><?php the_time('F j, g:i a');?> </h5>
                </span>
                <h2>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h2>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-front', array('class'=>'thumbnail-a')); ?></a>
                <?php the_byline_front(); ?>
                <p>
                  <?php echo get_the_excerpt();  ?>
                </p>
              </div>
              <hr>
            <?php endforeach; ?>
             <?php
      $args = array( 'numberposts' => 1, 'tag' => 'db-story-d1' );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
              <div class="db-story-d">
                <span class="db-section-date">
                <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4>
                <h4>|</h4>
                <h5><?php the_time('F j, g:i a');?> </h5>
                </span>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
              </div>
              <hr>
            <?php endforeach; ?>
            <?php
      $args = array( 'numberposts' => 1, 'tag' => 'db-story-d2' );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
              <div class="db-story-e">
                <span class="db-section-date">
                <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4>
                <h4>|</h4>
                <h5><?php the_time('F j, g:i a');?> </h5>
                </span>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
              </div>
            <hr>
            <?php endforeach; ?>
            </div>
            <div class="large-4 columns db-story-breaking" data-equalizer-watch>
              <!-- Begin MailChimp Signup Form -->
              <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
              <style type="text/css">
                #mc_embed_signup{background:#fff; clear:left; font:12px 'Roboto Slab', serif; border-bottom: thin lightgrey solid; margin-top: 0px;}
                #mc_embed_signup form {padding: 3px;}
                #mc_embed_signup_scroll {margin-top: 0px;}
                #mc_embed_signup_scroll h2 {margin-top: 0.625rem;}
              /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                 We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
              </style>
              <div id="mc_embed_signup">
              <form action="//dailybruin.us15.list-manage.com/subscribe/post?u=15fa3629ea46e975a3174fe51&amp;id=ee621e262a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
              <h2>Subscribe to our daily newsletter</h2>
              <div class="mc-field-group">
              </label>
              <input type="email" value="" name="EMAIL" class="required email" placeholder="Enter your e-mail" id="mce-EMAIL">
              </div>
              <div id="mce-responses">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
              </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px; margin-top: 0px;" aria-hidden="true"><input type="text" name="b_15fa3629ea46e975a3174fe51_ee621e262a" tabindex="-1" value=""></div>
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
              </div>
              </form>
              </div>
              <!--End mc_embed_signup-->
              <div>
              <?php $quadid = get_cat_ID( 'The Quad' ); ?>
                <div>
                  <a href="http://dailybruin.com/category/quad/">
                    <img src="http://dailybruin.com/images/2015/12/Quad-explainerbelow-01.png">
                  </a>
                </div>
              </div>
              <div class="row db-divide"></div>
             <div class="row">
              <?php // Breaking posts
        $args = array( 'category' => $quadid );
        $i=0;
        $lastposts = get_posts( $args );
        foreach( $lastposts as $post ) :  setup_postdata($post);
        if(++$i > 3) break;?>
        <div class="db-story-breaking-1 large-12 medium-6 columns">
                  <span class="db-section-date">
                    <h4><a href="<?php the_category_link(get_the_category()); ?>"><?php the_category_text(get_the_category()); ?></a></h4>
                  <h4>|</h4>
                  <h5><?php the_time('F j, g:i a');?> </h5>
                  </span>
                  <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h3>
                  <?php if ($i == 1): ?>
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-front', array('class'=>'thumbnail-a')); ?></a>
                  <?php the_byline_front(); ?>
                  <p>
                  <?php echo get_the_excerpt();  ?>
                  </p>
                  <?php endif ?>
                </div>
        <?php endforeach; ?>
              </div>
              <div class="row db-divide hide-for-medium hide-for-small"></div>

              <!--  this used to be a MOJO refer
              <div class="row db-image text-center hide-for-medium hide-for-small">
                <a href="http://mojo.dailybruin.com"><img src="/img/mojo-webfiller.jpg"/></a>
              </div> -->

              <div class="db-ad">
                <?php get_template_part('ads/ad','side'); ?>
              </div>
            </div>
    </div>
    <div class="row db-divide"></div>
      <div class="row">
         <div class="db-story-m large-9 medium-12 columns hide-for-small">
         <span>
          <div class="left">
                <h1><i class="fa fa-youtube-play fa-fw fa-lg"></i>&nbsp;Multimedia</h1>
            </div>
            <div class="right" style="line-height:3rem">
              <h4 style="margin-left:15px"><a href="/category/video">&nbsp;Video</a></h4>
              <h4 style="margin-left:15px"><a href="/category/radio">&nbsp;Radio</a></h4>
              <h4 style="margin-left:15px"><a href="/category/spectrum">&nbsp;Photo</a></h4>
            </div>
        </span>
            <hr>
          <ul id="multSlider">
          <?php
      $args = array( 'numberposts' => 4, 'tag' => 'db-story-m1' );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
      <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(250,50) );
      $url = $thumb['0']; ?>
        <li class="center" data-thumb="<?php echo $url; ?>">
          <!-- 705px x 390px for mult -->
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-mult-full'); ?></a>
          <div class="front-mult">
            <h2><a href="<?php the_permalink(); ?>">
            <?php the_headline(); ?></a></h2>
        </div>
        </li>
       <?php endforeach; ?>
      </ul>
      <hr>
    </div>

    <div class="db-story-m large-9 medium-12 columns show-for-small">
         <span>
          <div class="left" style="margin-bottom:10px">
                <h1><i class="fa fa-youtube-play fa-fw fa-lg"></i>&nbsp;Multimedia</h1>
            </div>
            <div class="right hide-for-small" style="line-height:3rem">
              <h4 style="margin-left:15px"><a href="/category/video">&nbsp;Video</a></h4>
              <h4 style="margin-left:15px"><a href="/category/radio">&nbsp;Radio</a></h4>
              <h4 style="margin-left:15px"><a href="/category/spectrum">&nbsp;Photo</a></h4>
            </div>
         </span>
          <?php
      $args = array( 'numberposts' => 2, 'tag' => 'db-story-m1' );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
              <div class="db-story-ns row">
                <div class="text-center" style="margin-top:20px;">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
                </br>
              </div>
              <h3 class="text-center">
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                 </h3>
                <!-- <div class="small-6 columns"> -->
              </div>
              <hr>
            <?php endforeach; ?>
    </div>

        <div class="db-story">
            <div class="large-3 show-for-large-up columns db-classifieds" id="db-classifieds">
              <div class="db-classifieds-header">
                  <h1>Featured Classifieds</h1>
              </div>
                <ul>
              <?php
              if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('test-sidebar') ) :
              endif; ?>
           </ul>
      </div>
    </div>
  </div>
    <div class="row db-divide"></div>

  <div class="row db-story" data-equalizer>
            <div class="large-3 medium-6 columns db-sum" data-equalizer-watch>
              <div>
                <h1><a href="/category/news">&nbsp;News</a></h1>
              </div>
      <?php
      $args = array( 'numberposts' => 1, 'tag' => 'db-story-ns' );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
              <div class="db-story-ns row">
                <?php if(has_post_thumbnail()): ?>
                <div class="db-image text-center">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
                </div>
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
                <?php else: ?>
                <div class="no-img">
                  <h3>
                      <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h3>
                </div>
                <?php endif; ?>
                <p>
                    <?php echo wp_trim_words( get_the_content(), 25, '... ' );  ?><a href="<?php the_permalink(); ?>">Read more &raquo;</a>
                </p>
              </div>
            <?php endforeach; ?>
            <hr>
            <?php
      $args = array( 'numberposts' => 3, 'cat' => $news_cat, 'tag__not_in' => $frontPageTags );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
              <div>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
              </div>
              <hr>
            <?php endforeach; ?>
            </div>

            <div class="large-3 medium-6 columns db-sum" data-equalizer-watch>
              <div>
                <h1><a href="/category/opinion">&nbsp;Opinion</a></h1>
              </div>
              <div class="db-story-op row">
             <?php
      $args = array( 'numberposts' => 1, 'tag' => 'db-story-op' );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
                <?php if(has_post_thumbnail()): ?>
                <div class="db-image text-center">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
                </div>
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
                <?php else: ?>
                <div class="no-img">
                  <h3>
                      <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h3>
                </div>
                <?php endif; ?>
                  <p>
                    <?php echo wp_trim_words( get_the_content(), 25, '... ' );  ?><a href="<?php the_permalink(); ?>">Read more &raquo;</a>
                  </p>
                <!-- </div> -->
                <!-- <div class="small-6 columns db-image"> -->

                <!-- </div> -->
              </div>
            <?php endforeach; ?>
            <hr>
            <?php
      $args = array( 'numberposts' => 3, 'cat' => $opinion_cat, 'tag__not_in' => $frontPageTags );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
              <div>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
              </div>
              <hr>
            <?php endforeach; ?>
            </div>

            <div class="large-3 medium-6 columns db-sum" data-equalizer-watch>
              <div>
                <h1><a href="/category/arts-entertainment">&nbsp;A&amp;E</a></h1>
              </div>
              <div class="db-story-ae row">
            <?php
      $args = array( 'numberposts' => 1, 'tag' => 'db-story-ae' );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
        <div class="db-image text-center">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
              </div>
                <!-- <div class="small-6 columns"> -->
                  <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h3>
                  <p>
                    <?php echo wp_trim_words( get_the_content(), 25, '... ' );  ?><a href="<?php the_permalink(); ?>">Read more &raquo;</a>
                  </p>
                <!-- </div> -->
                <!-- <div class="small-6 columns db-image"> -->

                <!-- </div> -->
              </div>
            <?php endforeach; ?>
            <hr>
            <?php
      $args = array( 'numberposts' => 3, 'cat' => $ae_cat, 'tag__not_in' => $frontPageTags );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
              <div>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
              </div>
              <hr>
            <?php endforeach; ?>
            </div>

            <div class="large-3 medium-6 columns db-sum" data-equalizer-watch>
              <div>
                <h1><a href="/category/sports">&nbsp;Sports</a></h1>
              </div>
            <?php
      $args = array( 'numberposts' => 1, 'tag' => 'db-story-sp' );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
              <div class="db-story-sp row">
        <div class="db-image text-center">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('db-rotator'); ?></a>
              </div>
                <!-- <div class="small-6 columns"> -->
                  <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                  </h3>
                  <p>
                    <?php echo wp_trim_words( get_the_content(), 25, '... ' );  ?><a href="<?php the_permalink(); ?>">Read more &raquo;</a>
                  </p>
                <!-- </div> -->
                <!-- <div class="small-6 columns db-image"> -->

                <!-- </div> -->
              </div>
            <?php endforeach; ?>
            <hr>
            <?php
      $args = array( 'numberposts' => 3, 'cat' => $sports_cat, 'tag__not_in' => $frontPageTags );
      $lastposts = get_posts( $args );
      foreach( $lastposts as $post ) :  setup_postdata($post); ?>
              <div>
                <h3>
                  <a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a>
                </h3>
                <hr>
              </div>
            <?php endforeach; ?>
          </div>
      </div>

    <div class="row db-story" data-equalizer>
    <div class="db-divide"></div>
            <div class="db-story-fe large-8 large-push-4 hide-for-small columns" data-equalizer-watch>
              <div class="row text-center">
                <a href="//graphics.dailybruin.com/prime"><img src="/img/prime-webbanner.jpg"/></a>
              </div>
        <div class="row" id="featuredProject">
          <div style="padding: 5px 20px;">
             <h1>give a man a fish</h1>
             <a href="//stack.dailybruin.com" class="right"><h4>More features</h4></a>
             <span style="display:block;width:100%;clear:both;"></span>
             <img src="http://dailybruin.com/images/2015/10/bob-cover-300x199.jpg" />
                        <p>Radio reporter Jonaki Mehta, photographer Sonja Bartlett and an external translator, Ravindranath Chandran, spent nine days in Vadamanappakkam covering the progress and effectiveness of Project RISHI’s initiatives and exploring the complexities of this rural village and its residents. This project was made possible by the <a href="http://www.rememberingbridget.com/" target="_blank">Bridget O’Brien Scholarship Foundation</a>, which has funded UCLA’s student journalists for eight years to cover stories of a global reach and local impact.</p>
             <a href="http://india.dailybruin.com/" class="featuredlink">View the stories, videos, and graphics &nbsp;&raquo;</a>
             <span style="display:block;width:100%;clear:both"></span>
          </div>
        </div><!-- end div#featuredProject -->
        <div class="row">
            <div class="large-12 columns advertisment featured-ads">
                <h4>Sponsored Links:</h4>
                <ul style="list-style-type:none">
                    <?php wp_list_bookmarks(array(
                        'title_li'                      =>      __(''),
                        'title_before'          =>      '',
                        'title_after'           =>      '',
                        'category_before'       =>      '',
                        'category_after'        =>      '',
                        'categorize'            =>      0,
                        'before'                        =>      '<li>'
                    )); ?>
                </ul>
            </div>
            <div class="large-8 columns hide-for-medium hide-for-small">
                <?php  ?>
            </div>
            </div>
          </div>
          </br>
            <div class="db-poll large-4 large-pull-8 columns db-poll hide-for-medium" data-equalizer-watch>
                    <h1>Opinion Poll</h1>
                  <hr>
                    <?php the_widget('WP_Widget_Polls'); ?>
            </div>
        </div>
        <?php wp_reset_query(); ?>
  </div><!-- end div.container -->

<?php get_footer(); ?>
