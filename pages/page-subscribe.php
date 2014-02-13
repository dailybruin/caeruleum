<?php
/*
Template Name:  Subscribe
*/
get_header(); ?>
<style type="text/css">
    .email-newsletter input.input_field {
        margin: 0 0 10px 0;    
        font-size: 1.2rem;
        padding: 10px;
        color: #333;
        margin-bottom:0;
        width: 100%;
        width: calc(100% - 20px);
        width: -webkit-calc(100% - 20px);
        width: -moz-calc(100% - 20px);
    }
    .email-newsletter .wysija-p-email {
        margin-bottom: 7px;
    }
    .email-newsletter p.inner {
        font-size: 17.5px;
    }
    .email-newsletter #important {
      font-size: 18.5px;
    }

    .email-newsletter #accordion{ 
      font-size: 20px;
    }

    .email-newsletter #unimportant {
      font-size: 17px;
    }

    .email-newsletter #dropdown {
      border: 0px;
    }

    .email-newsletter p.list_check {
        width: 50%;
        float: left;
    }
    .email-newsletter div.column_one {
        border-right: 1px solid #7a7a7a;
        float: left;
        padding: 30px 30px 0 0;
        margin-right: 0;
        margin-left: 0;
    }
    .email-newsletter div.column_two {
        float: left;
        padding: 30px 0 0 30px;
        margin-right: 0;
    }
    .email-newsletter h2.title {
        margin: 20px 0 20px 0;
        border-bottom: 1px solid #7a7a7a;
        padding: 0 0 20px 0;
        font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .email-newsletter label.options {
        font-size: 16px;
    }
    .email-newsletter div.column_two_one {
        float: left;
        padding: 0 0 0 30px;
        margin-right: 0;
        margin-left: 0;
    }
    .email-newsletter div.column_two_two {
        float: left;
        padding: 0 0 0 10px;
        margin-right: 0;
    }
    .email-newsletter input.subbox {
        width: 335px;
        height: 30px;
        font-size: 18px;
    }
    .email-newsletter p.big {
        font-family: Oswald;
        font-size: 31px;
        font-weight: 300;
        line-height: 1.4em;
        border-bottom: 1px solid #7a7a7a;
    }
    .email-newsletter #fix_margin {
        margin:0 0 -19px;
    }
    .email-newsletter #more-newsletters {
        margin-top: 25px;
    }
    .email-newsletter .more-newsletters-head > span.label {
        float: left;
        margin-top: 11px;
        margin-left: 10px;
    }
    .email-newsletter .more-newsletters-head > h4 {
        float:left;
    }
    .email-newsletter .label {
        font-family:"Helvetica Neue","Helvetica","Arial",sans-serif;
    }
    .email-newsletter #form-html5177483378631_list_id_32 {
        font-weight: bold;
    }
</style>
<div class="row email-newsletter" id="single-post">
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
    <h2 class="title">Email newsletter</h2>
  <form id="form-html51749a146e680" method="post" action="../confirm" class="widget_wysija form-valid-sub">
    <!--
widget_wysija 
    -->
        <p class="inner">
          Get the Daily Bruin delivered straight to your inbox with our free email subscription service. Customize your newsletters by selecting from the options below.
        </p>
    <div class="row">
        <div class="span3 offset1">
            <p class="wysija_list_check">
                  <label id="important" for="form-html5177483378631_list_id_10" class="checkbox">
                  <input id="form-html5177483378631_list_id_10" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="10"/> Basketball <span class="label label-info">Twice a week</span></label> 
            </p>
            <p class="wysija_list_check">
              <label id="important" for="form-html5177483378631_list_id_8" class="checkbox">
              <input id="form-html5177483378631_list_id_8" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="8"/>Football <span class="label label-info">Twice a week</span></label>
            </p>
            <p class="wysija_list_check">
              <label id="important" for="form-html5177483378631_list_id_9" class="checkbox">
              <input id="form-html5177483378631_list_id_9" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="9"/>Top stories <span class="label label-warning">Daily</span></label>
            </p>
        </div>
        <div class="span3 offset1">
            <p class="wysija_list_check">
            <label id="important" for="form-html5177483378631_list_id_32" class="checkbox">
            <input id="form-html5177483378631_list_id_32" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="32" checked="checked"/>Top stories <span class="label label-success">Weekly</span></label>
            </p>
            <p class="wysija_list_check">
              <label id="important" for="form-html5177483378631_list_id_7" class="checkbox">
                  <input id="form-html5177483378631_list_id_7" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="7"/> Sports <span class="label label-warning">Daily</span></label>
            </p>
            <p class="wysija_list_check">
              <label id="important" for="form-html5177483378631_list_id_6" class="checkbox">
                  <input id="form-html5177483378631_list_id_6" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="6"/> Breaking news</label>
            </p>
        </div>
    </div><!-- end div.row -->
    <div class="row">
    <div class="span8">
        <p class="wysija-p-email"><input type="text" id="form-html51749a146e680-wysija-to" value="<?php echo $_GET['email']; ?>" placeholder="Email address" title="Email" class="input_field defaultlabels wysija-email validate[required,custom[email]]" name="wysija[user][email]" /></p>
        <span class="wysija-p-email abs-req"><input type="text" id="form-html5160b35adfee7-abs-email" value="" class="defaultlabels validated[abs][email]" name="wysija[user][abs][email]" /></span>

        <input type="submit" class="btn btn-large btn-inverse" style="width:100%;" name="submit" value="Subscribe" /><input type="hidden" name="formid" value="form-html5160b35adfee7" />
        <input type="hidden" name="action" value="save" />
        <input type="hidden" name="message_success" value="Check your inbox now to confirm your subscription." />
        <input type="hidden" name="controller" value="subscribers" /><input type="hidden" value="1" name="wysija-page" />
    <div id="more-newsletters" class="row">
        <div class="span8">
            <h3>More newsletters</h3>
        </div><!-- end div.span8 -->
        <div class="span4 more-newsletters-head">
            <h4>Sports</h4><span class="label label-info">Twice a week</span>

            <p class="wysija_list_check" style="clear:both">
                <label id="unimportant" for="form-html5177483378631_list_id_3" class="checkbox">
                    <input id="form-html5177483378631_list_id_3" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="3"/> Baseball</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_4" class="checkbox">
                    <input id="form-html5177483378631_list_id_4" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="4"/> Club and intramural sports</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_13" class="checkbox">
                    <input id="form-html5177483378631_list_id_13" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="13"/> Cross country</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_14" class="checkbox">
                    <input id="form-html5177483378631_list_id_14" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="14"/> Gymnastics</label>
            </p>

            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_15" class="checkbox">
                    <input id="form-html5177483378631_list_id_15" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="15"/> Men's basketball</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_16" class="checkbox">
                    <input id="form-html5177483378631_list_id_16" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="16"/> Men's golf</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_17" class="checkbox">
                    <input id="form-html5177483378631_list_id_17" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="17"/> Men's soccer</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_18" class="checkbox">
                    <input id="form-html5177483378631_list_id_18" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="18"/> Men's tennis</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_19" class="checkbox">
                    <input id="form-html5177483378631_list_id_19" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="19"/> Men's track and field</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_20" class="checkbox">
                    <input id="form-html5177483378631_list_id_20" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="20"/> Men's volleyball</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_21" class="checkbox">
                    <input id="form-html5177483378631_list_id_21" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="21"/> Men's water polo</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_22" class="checkbox">
                    <input id="form-html5177483378631_list_id_22" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="22"/> Rowing</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_23" class="checkbox">
                    <input id="form-html5177483378631_list_id_23" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="23"/> Softball</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_24" class="checkbox">
                    <input id="form-html5177483378631_list_id_24" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="24"/> Swim and dive</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_25" class="checkbox">
                    <input id="form-html5177483378631_list_id_25" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="25"/> Women's basketball</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_26" class="checkbox">
                    <input id="form-html5177483378631_list_id_26" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="26"/> Women's golf</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_27" class="checkbox">
                    <input id="form-html5177483378631_list_id_27" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="27"/> Women's soccer</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_28" class="checkbox">
                    <input id="form-html5177483378631_list_id_28" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="28"/> Women's tennis</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_29" class="checkbox">
                    <input id="form-html5177483378631_list_id_29" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="29"/> Women's track and field</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_30" class="checkbox">
                    <input id="form-html5177483378631_list_id_30" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="30"/> Women's volleyball</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_31" class="checkbox">
                    <input id="form-html5177483378631_list_id_31" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="31"/> Women's water polo</label>
            </p>
        </div><!-- end div.span4 -->
        <div class="span4 more-newsletters-head">
            <h4>Other newsletters</h4><span class="label label-warning">Daily</span>

            <p class="wysija_list_check" style="clear:both">
                <label id="unimportant" for="form-html5177483378631_list_id_12" class="checkbox">
                    <input id="form-html5177483378631_list_id_12" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="12"/> A&amp;E</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_11" class="checkbox">
                    <input id="form-html5177483378631_list_id_11" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="11"/> News</label>
            </p>
            <p class="wysija_list_check">
                <label id="unimportant" for="form-html5177483378631_list_id_5" class="checkbox">
                    <input id="form-html5177483378631_list_id_5" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="5"/> Opinion</label>
            </p>
        </div><!-- end div.span4 -->
        </div><!-- end div.more-newsletters -->
    </form>
</div><!-- end div.wysija-msg.ajax -->
</div><!-- end div.widget_wysija_cont -->
</div>
  </div><!-- end div#post -->
  
  <?php get_sidebar(); ?>
  
</div><!-- end div#single-post -->      


<?php get_footer(); ?>
