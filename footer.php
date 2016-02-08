</br>
<div class="row db-divide"></div>
<div class="off-canvas-wrap db-off-canvas-wrap" data-offcanvas>
  <div class="row db-footer">
    <div class="left">
    	<?php wp_nav_menu(array('theme_location'=>'about_footer')); ?>
    </div>
    <div class="right">
    	Content copyright &copy; <?php echo date('Y'); ?> the Daily Bruin
    </div>
	</div>
</div><!-- end div.container -->
</div>
 <a class="exit-off-canvas"></a>   
    <!-- END DB FOOTER -->

  <!-- closing off-canvas-wrap db-off-canvas-wrap db-wrapper db-content inner wrap-->
		</div>
<!-- 	</div>
</div> -->
  <?php roots_footer_after(); ?>

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>
	<span style="clear:both;display:block;"></span>
  <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.0/js/foundation.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script> 
  <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.lightSlider.js"></script>


<script>
  (function() {
    var cx = '002413520122245547453:nxniuwc5kuk';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
</body>
	<span style="clear:both;display:block;"></span>

</html>
