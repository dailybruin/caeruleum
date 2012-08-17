<?php get_header(); ?>BLOOP
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
      <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
        <div class="page-header">
          <h1><?php _e('Latest Posts', 'roots');?></h1>
        </div>
        <?php get_template_part('loop', 'index'); ?>
      </div><!-- /#main -->
      <aside id="sidebar" class="<?php echo SIDEBAR_CLASSES; ?>" role="complementary">
        <?php get_sidebar(); ?>
      </aside><!-- /#sidebar -->
    </div><!-- /#content -->
<?php get_footer(); ?>