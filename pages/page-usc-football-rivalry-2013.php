<?php/*
Template Name: USC Football Rivalry 2013
*/ ?>
<?php get_header(); ?>
<script src="../js/jquery.nested.js"></script>
<link href="../css/nested.css" rel="stylesheet" type="text/css" />
<div id="big-box">
    <div class="box size21">1</div>
    <div class="box size22">2</div>
    <div class="box size34">3</div>
</div>
<script>
$("#big-box").nested({
    minWidth: 300,
    gutter: 10
});
</script>
<?php get_footer(); ?>
