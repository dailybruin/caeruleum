<?php
/*
Template Name:  Subscribe
*/
get_header(); ?>
<style type="text/css">

input.input_field {
    width:100%;
}
p.inner {
    font-size: 17.5px;
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
    /*
    border-bottom: 1px solid #7a7a7a;
    margin: 0;
    padding: 0 0 15px 0;
    */
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
    <div id="msg-form-html510dbe4125ad3" class="wysija-msg ajax"></div>
    <h2 class="title">Stay up to date on the latest news with the Daily Bruin's free email membership.</h2>
    <form id="form-html510dbe4125ad3 fix_margin" method="post" action="#wysija" class="row form-valid-sub">
    <!--
widget_wysija 
    -->
    <div class="span4">
        <p>To subscribe to our dandy newsletter simply add your email below. A confirmation email will be sent to you!</p>
        <p class="wysija-p-firstname"><input type="text" id="form-html510dbe4125ad3-firstname" placeholder="First name" value="<?php echo $_GET['email']; ?>" title="First name" class="input_field defaultlabels wysija-firstname validate[required]" name="wysija[user][firstname]" /></p>
        <p class="wysija-p-email"><input type="text" id="form-html510dbe4125ad3-wysija-to" placeholder="Email" title="Email" class="input_field defaultlabels wysija-email validate[required,custom[email]]" name="wysija[user][email]" /></p>
        <span class="wysija-p-firstname abs-req"><input type="text" id="form-html510dbe4125ad3-abs-firstname" value="" class="defaultlabels validated[abs][req]" name="wysija[user][abs][firstname]" /></span><span class="wysija-p-lastname abs-req"><input type="text" id="form-html510dbe4125ad3-abs-lastname" value="" class="defaultlabels validated[abs][req]" name="wysija[user][abs][lastname]" /></span><span class="wysija-p-email abs-req"><input type="text" id="form-html510dbe4125ad3-abs-email" value="" class="defaultlabels validated[abs][email]" name="wysija[user][abs][email]" /></span>
        


        <input type="submit" class="btn btn-large" style="width:100%;" name="submit" value="Subscribe!" /><input type="hidden" name="formid" value="form-html510dbe4125ad3" />
        <input type="hidden" name="action" value="save" />
        <input type="hidden" name="message_success" value="Check your inbox now to confirm your subscription." />
        <input type="hidden" name="controller" value="subscribers" /><input type="hidden" value="1" name="wysija-page" />
    </div>
        <div class="span4 wysija_lists">
            <p class="inner">
            To customize your interests and preferences, please select from the options below.
            </p>
            <p class="list_check wysija_list_check">
                <label class="options" for="form-html510dbe4125ad3_list_id_3"><input id="form-html510dbe4125ad3_list_id_3" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="3" checked="checked" /> Opinion </label>
            </p>
            <p class="list_check wysija_list_check">
                <label class="options" for="form-html510dbe4125ad3_list_id_1"><input id="form-html510dbe4125ad3_list_id_1" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="1" checked="checked" /> News </label>
            </p>
         <p class="list_check wysija_list_check">
                <label class="options" for="form-html510dbe4125ad3_list_id_3"><input id="form-html510dbe4125ad3_list_id_3" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="3" checked="checked" /> Opinion </label>
            </p>
            <p class="list_check wysija_list_check">
                <label class="options" for="form-html510dbe4125ad3_list_id_1"><input id="form-html510dbe4125ad3_list_id_1" class="validate[minCheckbox[1]] checkbox checklists" type="checkbox" name="wysija[user_list][list_id][]" value="1" checked="checked" /> News </label>
            </p>
        </div>
    </form>
</div>





        <?php get_template_part('loop', 'page'); ?>
	</div><!-- end div#post -->
	
	<?php get_sidebar(); ?>
	
</div><!-- end div#single-post -->      


<?php get_footer(); ?>
