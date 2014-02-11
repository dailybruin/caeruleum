<?php/*
Template Name: Coaches and Companions
*/ ?>
<?php get_header(); ?>
<style type="text/css">
    .cc-quote {
        margin: 0px 50px;
        font-size: 16px;
        font-family: Verdana, Arial;
    }

    .cc-quote-block {
        margin: 0px 200px;
    }

    .cc-left-quote {
        color: #D85860;
        text-align: left;
        font-size: 36px;
    }

    .cc-right-quote {
        color: #D85860;
        text-align: right;
        font-size: 36px;
    }

    .quoter {
        color: #D85860;
        text-align: right;
        margin-right: 20px;
        font-size: 24px;
        font-family: Verdana, Arial;
    }

    .cc-img {
        margin: 25px;
        text-align: center;
        border: 1px solid black;
    }

    #cc-container {
        margin: 25px;
    }



</style>


<!-- <div class="cc-banner"><img class="cc-img1" src="http://i.imgur.com/hzW44BW.jpg" alt=""></div>
 -->
<div id="cc-container">
    <div class="cc-img">
        <img src="http://i.imgur.com/dpTa4WJ.jpg" alt="">
    </div>


    <div class="cc-quote-block">
        <p class="cc-left-quote">"</p>
        <p id="quote1" class="cc-quote">
        She’s got a nickname… (and) her nickname is ‘Sal’ ... <a>Show More!</a>
        </p>
        <p class="quoter"> - Cori Close</p>
        <p class="cc-right-quote">"</p>
    </div>

    <div class="cc-quote-block">
        <p class="cc-left-quote">"</p>
        <p id="quote2" class="cc-quote">
        One thing we always would kid around with Cori, ... <a>Show More!</a>
        </p>
        <p class="quoter"> - Amanda Cromwell</p>
        <p class="cc-right-quote">"</p>
    </div>

<!--     <div class="cc-quote-block">
        <p class="cc-quote">
        “One thing we always would kid around with Cori, you know that book ‘The Purpose Driven Life’? … I always thought Cori is so determined and dedicated and she’s just all on point all the time, and so I’ll just joke around that she’s getting from point A to point B. So I would joke around and say she has the purpose driven walk. Like she’s just walking and she has a purpose and you can say that about everything in her life. And so that’s what she probably brings out of me, a little bit about having more of a purpose and knowing ‘These are my goals’ and ‘How do I get there?’…She brings out of me wanting to be a better coach and wanting to get the most out of this program as I can.” - Amanda Cromwell
        </p>
    </div>

    <div class="cc-quote-block">
        <p class="cc-quote">
        “I think they’re two of the most competitive people I know so everything turns into a competition. Fishing becomes a competition even, and so it’s fun to…watch them kind of go at each other and compete. At the camp everyone would play basketball and then everyone would go play soccer…and those two (would be) right in the mix of that, kind of ringleaders for that and (they) would love to give each other a hard time if the other one won soccer or basketball.” -Debbie Haliday, mutual friend of Cori Close and Amanda Cromwell
        </p>
    </div>

    <div class="cc-quote-block">
        <p class="cc-quote">
        “When I was helping (Cori) when she was in Tallahassee trying to find a place to live, she was a crazy person driving around. We’d be on the left side of the road, and she would see this sign for an open house on the right, and she would cross three lanes of traffic and fly in to see this one open house. I felt like we were just driving around like a bat out of hell. It was fun, we look back on that and laugh.” – Amanda Cromwell
        </p>
    </div> -->
</div>
<script type="text/javascript">
    $("#quote1").one('click', function() {
        $(this).animate({opacity:0})
        .queue(function() {
            $(this).text("She’s got a nickname… (and) her nickname is ‘Sal’. And every time I’m like ‘Hey, Sal!’ down the hall, she’ll turn around and people will be like ‘Who are you calling Sal?” Well when she was with the national team, they were down in Brazil, and it was this Salamander, and it become ‘Salamanda’ and it got shortened to ‘Sal’….So most of the people with USA Soccer call her Sal. But people around here think I’m crazy when I do that.").dequeue();
        })
        .animate({opacity:1})
        .attr("id", "expanded");
    });
    $("#quote2").one('click', function() {
        $(this).animate({opacity:0})
        .queue(function() {
            $(this).text("One thing we always would kid around with Cori, you know that book ‘The Purpose Driven Life’? … I always thought Cori is so determined and dedicated and she’s just all on point all the time, and so I’ll just joke around that she’s getting from point A to point B. So I would joke around and say she has the purpose driven walk. Like she’s just walking and she has a purpose and you can say that about everything in her life. And so that’s what she probably brings out of me, a little bit about having more of a purpose and knowing ‘These are my goals’ and ‘How do I get there?’…She brings out of me wanting to be a better coach and wanting to get the most out of this program as I can.").dequeue();
        })
        .animate({opacity:1})
        .attr("id", "expanded");
    });

</script>

<?php get_footer(); ?>
