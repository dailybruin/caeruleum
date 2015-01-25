<footer>
<div class="row db-divide"></div>
<div class="off-canvas-wrap db-off-canvas-wrap" data-offcanvas>
<div class="row db-footer text-center">
	<?php wp_nav_menu(array('theme_location'=>'about_footer')); ?>
	<p>Content copyright &copy; <?php echo date('Y'); ?> the Daily Bruin</p>
	</div>
</div><!-- end div.container -->
</div>
    
    <!-- END DB FOOTER -->
  </footer>
  <!-- closing off-canvas-wrap db-off-canvas-wrap db-wrapper db-content inner wrap-->
		</div>
	</div>
</div>
  <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>
	<span style="clear:both;display:block;"></span>

	  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/js/foundation.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script> 
</body>
	<span style="clear:both;display:block;"></span>

</html>
