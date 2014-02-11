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
        margin: 10px 50px;
    }

    .cc-left-quote {
        color: #D85860;
        text-align: left;
        font-size: 24px;
    }

    .cc-right-quote {
        color: #D85860;
        text-align: right;
        font-size: 24px;
    }

    .quoter {
        color: #D85860;
        text-align: right;
        margin-right: 20px;
        font-size: 18px;
        font-family: Verdana, Arial;
        font-style: italic;
    }

    .cc-img {
        margin: 25px;
        text-align: center;/*
        -webkit-box-shadow: #000 0 2px 10px;
        -moz-box-shadow: #000 0 2px 10px;
        box-shadow: #000 0 2px 10px;*/
    }

    img {
        border-radius: 25px;
        -webkit-box-shadow: #000 0 2px 10px;
        -moz-box-shadow: #000 0 2px 10px;
        box-shadow: #000 0 2px 10px;
    }

    #cc-container {
        margin: 0px 200px;
    }

    #cc-banner {
        width: 100%;
    }

</style>

 <div id="cc-banner" class="">
    <img src="http://dailybruin.com/images/2014/02/coaches.jpg" alt=""></img>
</div>

<div id="cc-container">
    <div class="cc-quote-block">
        <p class="cc-left-quote">"</p>
        <p id="quote1" class="cc-quote">
        She’s got a nickname… (and) her nickname is ‘Sal’ ... <a>Show More</a>
        </p>
        <p class="quoter"> - Cori Close</p>
        <p class="cc-right-quote">"</p>
    </div>
        
    <div class="cc-quote-block">
        <p class="cc-left-quote">"</p>
        <p id="quote2" class="cc-quote">
        One thing we always would kid around with Cori, ... <a>Show More</a>
        </p>
        <p class="quoter"> - Amanda Cromwell</p>
        <p class="cc-right-quote">"</p>
    </div>

    <div class="cc-quote-block">
        <p class="cc-left-quote">"</p>
        <p id="quote3" class="cc-quote">
        I think they’re two of the most competitive ... <a>Show More</a>
        </p>
        <p class="quoter"> - Debbie Haliday</p>
        <p class="cc-right-quote">"</p>
    </div>

    <div class="cc-quote-block">
        <p class="cc-left-quote">"</p>
        <p id="quote4" class="cc-quote">
        When I was helping (Cori) when she was in ... <a>Show More</a>
        </p>
        <p class="quoter"> – Amanda Cromwell</p>
        <p class="cc-right-quote">"</p>
    </div>

    <div class="cc-img">
        <img src="http://dailybruin.com/images/2014/02/web.sp_.2.11.coaches.picC_.jpg" alt=""></img>
    </div>

    <div class="cc-img">
        <img src="http://dailybruin.com/images/2014/02/web.sp_.2.11.coaches.picE_.jpg" alt=""></img>
    </div>

    <div class="cc-img">
        <img src="http://dailybruin.com/images/2014/02/web.sp_.2.11.coaches.picB_.jpg" alt=""></img>
    </div>

    <div class="cc-img">
        <img src="http://dailybruin.com/images/2014/02/Note-in-bible.jpeg" alt=""></img>
    </div>

    <div class="cc-img">
        <img src="http://dailybruin.com/images/2014/02/Note-with-writing.jpeg" alt=""></img>
    </div>

    <div class="cc-img">
        <img src="http://dailybruin.com/images/2014/02/web.sp_.2.11.coaches.picA_.jpg" alt=""></img>
    </div>

    <div class="cc-img">
        <img src="http://dailybruin.com/images/2014/02/web.sp_.2.11.coaches.picD_.jpg" alt=""></img>
    </div>

    <div class="cc-img">
        <img src="http://dailybruin.com/images/2014/02/web.sp_.2.11.coaches.picF_.jpg" alt=""></img>
    </div>

    <a href="http://dailybruin.com/?p=172345">Explore more at Spectrum!</a>
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
    $("#quote3").one('click', function() {
        $(this).animate({opacity:0})
        .queue(function() {
            $(this).text("I think they’re two of the most competitive people I know so everything turns into a competition. Fishing becomes a competition even, and so it’s fun to…watch them kind of go at each other and compete. At the camp everyone would play basketball and then everyone would go play soccer…and those two (would be) right in the mix of that, kind of ringleaders for that and (they) would love to give each other a hard time if the other one won soccer or basketball.").dequeue();
        })
        .animate({opacity:1})
        .attr("id", "expanded");
    });
    $("#quote4").one('click', function() {
        $(this).animate({opacity:0})
        .queue(function() {
            $(this).text("When I was helping (Cori) when she was in Tallahassee tryin to find a place to live, she was a crazy person driving around. We’d be on the left side of the road, and she would see this sign for an open house on the right, and she would cross three lanes of traffic and fly in to see this one open house. I felt like we were just driving around like a bat out of hell. It was fun, we look back on that and laugh.").dequeue();
        })
        .animate({opacity:1})
        .attr("id", "expanded");
    });
</script>

<?php get_footer(); ?>
