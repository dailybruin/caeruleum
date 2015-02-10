<?php get_header(); ?>
<div class="row db-story">
    <div class="large-8 columns db-story-post">
        <div class="page-header">
          <h2>
            <?php
              $sectionPage = false;
              $mainSection = false;
              $multSection = false;
              $sectionTag = "";
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
                // Separate case for sports as its name is the same as several other categories
                $cat = get_category(get_query_var('cat'));
                if ($cat->slug == 'sports-two-cents')
                {
                  the_blog_banner('two-cents-sports');
                }
              }
            ?>
          </h1>
          <?php
          if($sectionPage):
                $categoryID = get_query_var('cat');
  	    		$cat_args = array(
					'parent' => $categoryID,
					'orderby' => 'name',
					'hide_empty' => 1,
					'title_li' => ''
				);
				$categories = get_categories($cat_args);
				if(!empty($categories)): ?>
        <?php if(count($categories)>8): ?>
        <div class="db-sub-list-col hide-for-small">
        <?php else: ?>
        <div class="db-sub-list">
        <?php endif; ?>
					<ul>
          <?php wp_list_categories($cat_args); ?>
          </ul>
        </div>
				<?php endif;
			endif; ?>
          
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

          <hr>
        </div><!-- end div.page-header -->
        <?php get_template_part('loop', 'category'); ?>
      </div><!-- end div#post-listing -->

<?php if($categoryTitle == "Two Cents"): 
$two_cents_contributors = get_two_cents_contributors(); 
?>
<div class="large-4 columns">
<?php foreach ($two_cents_contributors as $contributor): ?>
<div class="small-3 columns">
  <img src=<?php $contributor->img ?> />
</div>
<?php endforeach ?>

<div class="hide-for-medium hide-for-small">
<?php get_template_part('ad','side'); ?>    
</div>    
<ul id="sidebar-list">
  <?php dynamic_sidebar('sidebar-primary'); ?>
</ul><!-- end div#sidebar-list -->
</div>
<?php else: ?>
<?php get_template_part('sidebar'); ?>  
<?php endif; ?>

    </div><!-- end div#archive-content -->
<?php get_footer(); ?>