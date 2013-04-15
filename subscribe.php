<?php
/*
Template Name:  Subscribe
*/
get_header(); ?>
<style type="text/css">

input.input_field {
    margin: 0 0 10px 0;    
    width:100%;
}
p.inner {
    font-size: 17.5px;
    font-family: "Arial", serif;
}
strong.important {
	font-size: 15px;
	font-family: "Arial", serif;
}
#unimportant {
	font-size: 13px;
	font-family: "Arial", serif;
}
div.unimportant p, p.unimportant, label.unimportant {
	font-size: 13px;
	font-family: "Arial", serif;
}
p.list_check {
    width: 50%;
    float: left;
}
div.column_one {
    border-right: 1px solid #7a7a7a;
    float: left;
    padding: 30px 30px 0 0;
    margin-right: 0;
    margin-left: 0;
}
div.column_two {
    float: left;
    padding: 30px 0 0 30px;
    margin-right: 0;
}
h2.title {
    margin: 20px 0 20px 0;
    border-bottom: 1px solid #7a7a7a;
    padding: 0 0 20px 0;
}
label.options {
    font-size: 16px;
}
div.column_two_one {
    float: left;
    padding: 0 0 0 30px;
    margin-right: 0;
    margin-left: 0;
}
div.column_two_two {
    float: left;
    padding: 0 0 0 10px;
    margin-right: 0;
}
input.subbox {
    width: 335px;
    height: 30px;
    font-size: 18px;
}
p.big {
    font-family: Oswald;
    font-size: 31px;
    font-weight: 300;
    line-height: 1.4em;
    border-bottom: 1px solid #7a7a7a;
}
#fix_margin {
    margin:0 0 -19px;
}

</style>
<div class="row" id="single-post">
<div class="span8" id="post">

<link rel="stylesheet" href="/wp-content/plugins/wysija-newsletters/css/validationEngine.jquery.css?ver=2.2.3" />

<script type="text/javascript" src="/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-en.js?ver=2.2.3"></script>
<script type="text/javascript" src="/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.2.3"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"http:\/\/localhost:8080\/wp-admin\/admin-ajax.php","loadingTrans":"Loading..."};
    /* ]]> */
</script>
<script type="text/javascript" src="/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.2.3"></script>
<div class="widget_wysija_cont">
    <div id="msg-form-html5160b35adfee7" class="wysija-msg ajax"></div>
    <h2 class="title">Stay up to date on the latest news with the Daily Bruin's free email membership.</h2>
    <form id="form-html5160b35adfee7 fix_margin" method="post" action="#wysija" class="row form-valid-sub">
    <!--
widget_wysija 
    -->
    <div class="span4">
        <p class="inner">To subscribe to our dandy newsletter simply add your email below. A confirmation email will be sent to you!</p>
        <p class="wysija-p-email"><input type="text" id="form-html5160b35adfee7-wysija-to" value="<?php echo $_GET['email']; ?>" placeholder="Email" title="Email" class="input_field defaultlabels wysija-email validate[required,custom[email]]" name="wysija[user][email]" /></p>
        <span class="wysija-p-email abs-req"><input type="text" id="form-html5160b35adfee7-abs-email" value="" class="defaultlabels validated[abs][email]" name="wysija[user][abs][email]" /></span>

        <input type="submit" class="btn btn-large" style="width:100%;" name="submit" value="Subscribe!" /><input type="hidden" name="formid" value="form-html5160b35adfee7" />
        <input type="hidden" name="action" value="save" />
        <input type="hidden" name="message_success" value="Check your inbox now to confirm your subscription." />
        <input type="hidden" name="controller" value="subscribers" /><input type="hidden" value="1" name="wysija-page" />
    </div>
        <div class="span4 wysija_lists">
            <p class="inner">
            To customize your interests and preferences, please select from the options below.
            </p>
		<div class="row">
		<div class="span2">
      <p class="wysija_list_check">
        <label for="form-html5160b35adfee7_list_id_4">
          <input id="form-html5160b35adfee7_list_id_4" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="4" checked="checked"/>
			<strong class="important">Breaking News</strong>
        </label>
      </p>
      <p class="wysija_list_check">
        <label for="form-html5160b35adfee7_list_id_5">
          <input id="form-html5160b35adfee7_list_id_5" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="5" checked="checked"/>
          <strong class="important">Sports</strong>
        </label>
      </p>
      <p class="wysija_list_check">
        <label for="form-html5160b35adfee7_list_id_6">
          <input id="form-html5160b35adfee7_list_id_6" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="6" checked="checked"/>
          <strong class="important">Everything</strong>
        </label>
      </p>
      <p class="wysija_list_check">
        <label for="form-html5160b35adfee7_list_id_10">
          <input id="form-html5160b35adfee7_list_id_10" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="10" checked="checked"/>
          News 
        </label>
      </p>
      <p class="wysija_list_check">
        <label for="form-html5160b35adfee7_list_id_11">
          <input id="form-html5160b35adfee7_list_id_11" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="11" checked="checked"/>
          A&E 
        </label>
      </p>
	  </div>
	  <div class="span2">
      <p class="wysija_list_check">
        <label for="form-html5160b35adfee7_list_id_7">
          <input id="form-html5160b35adfee7_list_id_7" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="7" checked="checked"/>
          <strong class="important">Top Stories (Daily)</strong>
        </label>
      </p>
      <p class="wysija_list_check">
        <label for="form-html5160b35adfee7_list_id_8">
          <input id="form-html5160b35adfee7_list_id_8" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="8" checked="checked"/>
          <strong class="important">Football</strong>
        </label>
      </p>
      <p class="wysija_list_check">
        <label for="form-html5160b35adfee7_list_id_9">
          <input id="form-html5160b35adfee7_list_id_9" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="9" checked="checked"/>
          <strong class="important">Basketball</strong>
        </label>
      </p>
      <p class="wysija_list_check">
        <label for="form-html5160b35adfee7_list_id_12">
          <input id="form-html5160b35adfee7_list_id_12" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="12" checked="checked"/>
          Opinion 
        </label>
		</p>
	  </div>
		</div>
        </div>
    </form>
</div>





        <?php get_template_part('loop', 'page'); ?>
	</div><!-- end div#post -->
	
	<?php get_sidebar(); ?>
	
</div><!-- end div#single-post -->      


<?php get_footer(); ?>
