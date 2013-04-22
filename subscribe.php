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
#important {
  font-size: 18.5px;
  font-family: "Arial", serif;
}

#accordion {
  font-size: 20px;
  font-family: "Arial", serif;
}

#unimportant {
  font-size: 17px;
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
  <div id="msg-form-html51749a146e680" class="wysija-msg ajax">
  </div>
    <h2 class="title">Stay up to date on the latest news with the Daily Bruin's free email membership.</h2>
  <form id="form-html51749a146e680" method="post" action="#wysija" class="widget_wysija form-valid-sub">
    <!--
widget_wysija 
    -->
        <p class="inner">
          To subscribe to our dandy newsletter simply add your email below. A confirmation email will be sent to you!
        </p>
        <p class="inner">
          To customize your interests and preferences, please select from the options below.
        </p>
    <div class="row">
    <div class="span3 offset1">
      <p class="wysija_list_check">
        <label id="important" for="form-html51749e245b688_list_id_9"><input id="form-html51749e245b688_list_id_9" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="9" checked="checked"/> Basketball </label>
      </p>
      <p class="wysija_list_check">
        <label id="important" for="form-html51749e245b688_list_id_8"><input id="form-html51749e245b688_list_id_8" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="8" checked="checked"/> Football </label>
      </p>
      <p class="wysija_list_check">
        <label id="important" for="form-html51749e245b688_list_id_7"><input id="form-html51749e245b688_list_id_7" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="7" checked="checked"/> Top Stories (Daily) </label>
      </p>
    </div>
    <div class="span3 offset1">
      <p class="wysija_list_check">
        <label id="important" for="form-html51749e245b688_list_id_6"><input id="form-html51749e245b688_list_id_6" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="6" checked="checked"/> Everything </label>
      </p>
      <p class="wysija_list_check">
        <label id="important" for="form-html51749e245b688_list_id_5"><input id="form-html51749e245b688_list_id_5" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="5" checked="checked"/> Sports </label>
      </p>
      <p class="wysija_list_check">
        <label id="important" for="form-html51749e245b688_list_id_4"><input id="form-html51749e245b688_list_id_4" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="4" checked="checked"/> Breaking News </label>
      </p>
    </div>
    </div>
    <div class="row">
    <div class="span8">
        <p class="wysija-p-email"><input type="text" id="form-html51749a146e680-wysija-to" value="<?php echo $_GET['email']; ?>" placeholder="Email" title="Email" class="input_field defaultlabels wysija-email validate[required,custom[email]]" name="wysija[user][email]" /></p>
        <span class="wysija-p-email abs-req"><input type="text" id="form-html5160b35adfee7-abs-email" value="" class="defaultlabels validated[abs][email]" name="wysija[user][abs][email]" /></span>

        <input type="submit" class="btn btn-large" style="width:100%;" name="submit" value="Subscribe!" /><input type="hidden" name="formid" value="form-html5160b35adfee7" />
        <input type="hidden" name="action" value="save" />
        <input type="hidden" name="message_success" value="Check your inbox now to confirm your subscription." />
        <input type="hidden" name="controller" value="subscribers" /><input type="hidden" value="1" name="wysija-page" />
        <div class="wysija_lists">
<div class="accordion" id="accordion">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        Click here to see some other newsletters that you can subscribe to!
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse">
      <div class="accordion-inner">
      <div class="row">
      <div class="span4">
        <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_33"><input id="form-html51749e245b688_list_id_33" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="33" checked="checked"/> Women's Water Polo </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_32"><input id="form-html51749e245b688_list_id_32" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="32" checked="checked"/> Women's Volleyball </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_31"><input id="form-html51749e245b688_list_id_31" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="31" checked="checked"/> Women's Track and Field </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_30"><input id="form-html51749e245b688_list_id_30" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="30" checked="checked"/> Women's Tennis </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_29"><input id="form-html51749e245b688_list_id_29" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="29" checked="checked"/> Women's Soccer </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_28"><input id="form-html51749e245b688_list_id_28" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="28" checked="checked"/> Women's Golf </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_27"><input id="form-html51749e245b688_list_id_27" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="27" checked="checked"/> Women's Basketball </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_26"><input id="form-html51749e245b688_list_id_26" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="26" checked="checked"/> Swim and Dive </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_25"><input id="form-html51749e245b688_list_id_25" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="25" checked="checked"/> Softball </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_24"><input id="form-html51749e245b688_list_id_24" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="24" checked="checked"/> Rowing </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_23"><input id="form-html51749e245b688_list_id_23" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="23" checked="checked"/> Men's Water Polo </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_22"><input id="form-html51749e245b688_list_id_22" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="22" checked="checked"/> Men's Volleyball </label>
      </p>
    </div>
    <div class="span4">
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_21"><input id="form-html51749e245b688_list_id_21" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="21" checked="checked"/> Men's Track and Field </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_20"><input id="form-html51749e245b688_list_id_20" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="20" checked="checked"/> Men's Tennis </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_19"><input id="form-html51749e245b688_list_id_19" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="19" checked="checked"/> Men's Soccer </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_18"><input id="form-html51749e245b688_list_id_18" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="18" checked="checked"/> Men's Golf </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_17"><input id="form-html51749e245b688_list_id_17" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="17" checked="checked"/> Men's Basketball </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_16"><input id="form-html51749e245b688_list_id_16" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="16" checked="checked"/> Gymnastics </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_15"><input id="form-html51749e245b688_list_id_15" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="15" checked="checked"/> Cross Country </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_14"><input id="form-html51749e245b688_list_id_14" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="14" checked="checked"/> Club and Intramural Sports </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_13"><input id="form-html51749e245b688_list_id_13" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="13" checked="checked"/> Baseball </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_12"><input id="form-html51749e245b688_list_id_12" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="12" checked="checked"/> Opinion </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_11"><input id="form-html51749e245b688_list_id_11" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="11" checked="checked"/> A&E </label>
      </p>
      <p class="wysija_list_check">
        <label id="unimportant" for="form-html51749e245b688_list_id_10"><input id="form-html51749e245b688_list_id_10" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="10" checked="checked"/> News </label>
      </p>
    </div>
   </div>
    </div>
    </div>
  </div>
  </div>
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
