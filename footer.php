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
<script>
  function go2redesign() {
    let current = window.location.href;
    current = current.replace("dailybruin.com","new.dailybruin.com");
    window.location.replace(current);
  }
</script>
<div id="go2redesign" onclick="go2redesign()"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 17.27l5.17 3.12c.38.23.85-.11.75-.54l-1.37-5.88 4.56-3.95c.33-.29.16-.84-.29-.88l-6.01-.51-2.35-5.54c-.17-.41-.75-.41-.92 0L9.19 8.63l-6.01.51c-.44.04-.62.59-.28.88l4.56 3.95-1.37 5.88c-.1.43.37.77.75.54L12 17.27z"/></svg></div>
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
  <script src="https://cdn.jsdelivr.net/foundation/5.5.3/js/foundation.min.js"></script>
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
<?php get_template_part('ad','programmatic'); ?>
</body>
	<span style="clear:both;display:block;"></span>

</html>
