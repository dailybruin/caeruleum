<?php
/*
Template Name: Admissions 
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
        <?php roots_loop_before(); ?>
        <?php get_template_part('loop', 'page'); ?>
        <?php roots_loop_after(); ?>
        <h1>Admissions</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non felis venenatis, molestie augue vitae, lacinia tellus. Aliquam molestie non ipsum scelerisque tempor. Aliquam orci neque, iaculis vel convallis non, consequat nec ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque et mauris sit amet sem fringilla vulputate eu in ante. Duis accumsan nulla nec facilisis pharetra. Etiam cursus, justo et dictum interdum, dui neque bibendum velit, in mattis lorem nisi ac nibh.

        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris at purus placerat, tincidunt velit in, pellentesque nulla. Etiam ante ligula, euismod nec velit eu, hendrerit suscipit nisl. Cras vel risus auctor, congue erat sit amet, pretium nisi. Morbi eget adipiscing ante. Etiam porttitor varius sapien id convallis. Mauris nec vehicula sem. Nam cursus nec nibh rutrum consequat. Aenean mollis elementum egestas. Quisque id justo at lectus tristique consectetur sed eget leo. Nulla tristique justo ut luctus ultricies. Vivamus accumsan, diam non sodales semper, velit turpis volutpat purus, in feugiat metus sem vitae erat. Mauris vestibulum non nibh ut gravida. In ipsum sapien, vulputate sed nisl vitae, sagittis posuere arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <raw id="admissions">
        <link rel="stylesheet" href="/css/radar.css"/>
        <link rel="stylesheet" href="/css/jquery-ui.css"/>
        <link rel="stylesheet" href="/css/jquery.ui.slider.css"/>
        <script src="/js/vendor/d3.v3.min.js"></script>
        <body>
        <div id="viz">
        </div>
        <script src="/js/vendor/radar1.js"></script>
        <script type="text/javascript" src="/js/vendor/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/js/vendor/jquery.ui.slider.min.js"></script>

        <div id='key'>
        <div id='cwrap'>
        <div class='color'><span id='apply'></span><br><br>Applied</div>
        <div class='color'><span id='admit'></span><br><br>Admitted</div>
        <div class='color'><span id='sir'></span><br><br>SIR</div>
        </div></div>
        <div id='control'>
        <div id="year"><span>Current year:</span> 2012</div>
        <div id='choices'>
        <div class="admissions-checkbox"><input type="checkbox" name="applied" checked> Applied</div>
        <div class="admissions-checkbox"><input type="checkbox" name="admitted" checked> Admitted</div>
        <div class="admissions-checkbox"><input type="checkbox" name="sir" checked> SIR</div><br>
        </div></div>

        <select id="chooser">
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
        </select>
        <div id="slider"></div>
        <div class='but1' id='refresh'>
            <img src='/img/play.png' />
            <span>Click to play!</span>
        </div>
        <div id='button'>
        </div>
        </body>
        </raw>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    <?php roots_sidebar_before(); ?>
      <aside id="sidebar" class="<?php echo SIDEBAR_CLASSES; ?>" role="complementary">
      <?php roots_sidebar_inside_before(); ?>
        <?php get_sidebar(); ?>
      <?php roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>
