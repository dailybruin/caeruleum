<?php
/*
Template Name:  Confirmation
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
    <h2 class="title">
        Thanks for subscribing!
    </h2>
    <p class="inner">
        Check your email now to confirm your subscription.
    </p>
</div><!-- end div.widget_wysija_cont -->
</div><!-- end div#post -->

    <?php get_sidebar(); ?>

</div><!-- end div#single-post -->      

    <?php get_footer(); ?>
