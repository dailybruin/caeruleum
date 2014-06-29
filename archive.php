<?php get_header(); ?>
<div class="row" id="archive-content">
	<div class="span8" id="post-listing">
        <div class="page-header">
          <h1>
            <?php
              $sectionPage = false;
              $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
              $categoryTitle = single_cat_title('',false);
              if ($term) {
                echo $term->name;
              } elseif (is_post_type_archive()) { 
                echo get_queried_object()->labels->name;
              } elseif (is_day()) {
                printf(__('Daily Archives: %s', 'roots'), get_the_date());
              } elseif (is_month()) {
                printf(__('Monthly Archives: %s', 'roots'), get_the_date('F Y'));
              } elseif (is_year()) {
                printf(__('Yearly Archives: %s', 'roots'), get_the_date('Y'));
              } elseif (is_author()) {
                printf(__('Author Archives: %s', 'roots'), get_the_author());
              } else {
                $sectionPage = true;
                switch ($categoryTitle)
                {
                	case "Bruin Sights":
                		the_blog_banner('bruinsights');
                		break;
                	case "Spotlight":
                		the_blog_banner('spotlight');
                		break;
                	case "Timestamp":
                		the_blog_banner('timestamp');
                		break;
                  case "Idle Thoughts":
                    the_blog_banner('two-cents-idle-thoughts');
                    break;
                  case "Political Commentary":
                    the_blog_banner('two-cents-political-commentary');
                    break;
                  case "Social Commentary":
                    the_blog_banner('two-cents-social-commentary');
                    break;
                	default:
                		echo $categoryTitle;
                }
                foreach(get_the_category() as $cat)
                {
                  if ($cat->slug == "sports-two-cents")
                  {
                    the_blog_banner('two-cents-sports');
                  }
                }

              }
            ?>
          </h1>
          <?php
          if($sectionPage):
                $categoryID = get_query_var('cat');
  	    		$cat_args = array(
					'child_of' => $categoryID,
					'orderby' => 'name',
					'hide_empty' => 1,
					'title_li' => ''
				);
				$categories = get_categories($cat_args);
				if(!empty($categories)): ?>
					<ul class="categories">
					<?php wp_list_categories($cat_args); ?>
					</ul>
				<?php endif;
			endif; ?>
          <span style="display:block;width:100%;clear:both"></span>
          <?php if(is_author()): ?>
			<p><?php the_author_meta('description'); ?></p>
			<?php if(!get_the_author_meta('graduated')) : ?>					
				<?php if(get_the_author_meta('twitter_handle')) : ?>
				<a href="https://twitter.com/<?php echo substr(get_the_author_meta('twitter_handle'),1); ?>" class="twitter-follow-button" data-show-count="false">Follow <?php the_author_meta('twitter_handle'); ?></a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<?php endif; ?>
				<a class="author-email-inside" href="mailto:<?php the_author_meta('user_email'); ?>"><i class="ticon-email"></i>Email</a>
			<?php endif; ?>
          
          
          
          
          
          <?php endif; ?>
        </div><!-- end div.page-header -->
        <?php get_template_part('loop', 'category'); ?>
      </div><!-- end div#post-listing -->
      
      
      
<?php get_template_part('sidebar'); ?>      
      
    </div><!-- end div#archive-content -->
<?php get_footer(); ?>