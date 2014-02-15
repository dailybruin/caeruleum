<?php/*
Template Name: A&E Flavors of Westwood
*/ ?>

<?php get_header(); ?>

<script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
<script src="/js/vendor/maplace.min.js"></script>
<link href="http://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css">

<style>
    article#fow {
        max-width: 1150px;
        margin: 0 auto;
    }
    article#fow #background {
        position: absolute;
        z-index: -1;
        margin-top: -280px;
        opacity: 0.3;
    }
    article#fow h1 {
      text-align: center;
      font: 400 100px/1.3 'Lobster Two', Helvetica, sans-serif;
      color: #2685bb;
      text-shadow: 2px 4px 0px rgba(255, 255, 255, 0.7);
      text-transform: none;
    }
    article#fow h3 {
      font: 100 30px/1.3 'Lobster Two', Helvetica, sans-serif;
      color: #2685bb;
      text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.1);
      text-transform: none;
    }
    article#fow p {
      font-family: 'Cabin', Helvetica, Arial, sans-serif;
      font-size: 15px;
      line-height: 25px;
    }
    article#fow .lead {
        font-size: 1.2em;
        max-width: 600px;
        text-align: center;
        margin: 20px auto;
        text-shadow: 1px 1px 6px white;
    }
    article#fow .gmap {
      height: 400px;
      padding: 3px;
      border: 5px solid #dddddd;
      font-size: 90%;
    }
    article#fow .tabs .ullist li.active a {
      font-weight: bold;
      color: #2584bb !important;
      background-color: white !important;
    }
    article#fow .ullist li.active a, article#fow .ullist li a:hover {
      color: #2584bb !important;
      background-color: #eeeeee !important;
    }
    article#fow .ullist li.active a {
      font-weight: bold;
    }
    article#fow .tabs .ullist li a {
      padding: 0px 23.8px !important;
    }
    article#fow .ullist {
      width: 100%;
    }
    article#fow .tab-content {
      margin: 0 0 20px;
    }
    article#fow .menu .ullist li {
      width: 49%;
      float: left;
      margin-right: 1%;
      margin-bottom: .2em;
    }
    article#fow .menu .ullist li.active a,
    article#fow .menu .ullist li a:hover {
      color: #2685BB !important;
      background-color: #eee !important;
    }
    article#fow .tabs .ullist li a {
      padding: 0px 23.8px !important;
    }
    article#fow .tabs .ullist li a:hover {
      color: #2685BB !important;
      background-color: transparent !important;
    }
    article#fow .tabs .ullist li.active a {
      font-weight: bold;
      color: #2685BB !important;
      background-color: #fff !important;
    }
    article#fow .span4 {
      padding: 0px;
      margin: 0px;
    }
    article#fow .span8 {
      font-family: 'Cabin', Helvetica, Arial, sans-serif;
      font-size: 15px;
      line-height: 25px;
    }
    article#fow .ullist li.active a {
      font-weight: bold;
    }
    article#fow .ullist li.active a,
    article#fow .ullist li a:hover {
      color: #2685BB !important;
      background-color: #eee !important;
    }
    article#fow .icons-ul {
      list-style-type: none;
    }
    article#fow .icon-ul li {
      line-height: 14px;
    }
    article#fow .photocred {
      float: right;
      color: #c0c0c0;
      font-style: italic;
    }
    article#fow #controls-tabs {
      width: 180px;
      float: left;
    }
    article#fow .photocred-inline {
      color: #707070;
      font-size: 13px;
    }
    article#fow .thumbnail.with-caption {
      display: inline-block;
      background: #f5f5f5;
      float: right;
      text-align: center;
      margin-left: 5px;
    }
    article#fow .thumbnail.with-caption p {
      margin: 0;
      padding-top: 0.5em;
    }
    article#fow .thumbnail.with-caption small:before {
      content: '\2014 \00A0';
    }
    article#fow .thumbnail.with-caption small {
      width: 100%;
      text-align: right;
      display: inline-block;
      color: #999;
    }
    article#fow .gmnoprint {
      display: none !important;
    }
    article#fow #page-credit {
      margin: 3em 0 2em 0;
      text-align: center;
      color: gray;
      border-top: 1px solid #2685BB;
      padding-top: 0.5em;
      font-size: 0.9em;
    }
    article#fow #page-credit a {
      color: #2685BB;
      text-decoration: none;
    }
    @media (max-width: 640px) {
        article#fow #controls-tabs {
            width: 100%;
            float: none;
        }
    }
</style>


<article id="fow">

<img id="background" src="http://dailybruin.com/images/2014/01/bg7_2.png"/>

<h1>Flavors of Westwood</h1>
<p class="lead">Throughout this past year, A&amp;E reporters have been venturing into the world of Westwood dining to dig up the stories behind the creation and the flavor of each eatery. Explore the flavors of Westwood through our interactive map.</p>

<div id="controls-tabs"></div>
<div id="gmap-tabs" class="gmap" style="position: relative; overflow: hidden;"></div>
<div id="info"></div>


<script type="text/javascript">
var LocsB = [
        {
                        lat: 34.055895,
                        lon: -118.44189,
                        title: 'Saffron & Rose Ice Cream',
                        html: [
                                        '<h3>Saffron & Rose Ice Cream</h3>',
                                        '<p>Persian ice cream made with whole milk</p>'
                        ].join(''),
                        fulldesc: [
                '<h3>Saffron & Rose Ice Cream</h3>',
                '<div class="row"><div class="span8"><img src="http://dailybruin.com/images/2013/09/bc3bf898-d801-4c71-80ab-5681037c1dac.jpg" class="img-responsive" alt="Saffron & Rose Ice Cream"> <span class="photocred">Erin Ng / Daily Bruin Senior Staff</span><br><br><strong>BY CHANDINI SONI</strong><br><br>Fred Papen&#39;s grandfather moved from Iran to Los Angeles in the 1970s, bringing not only his wife and two children, but also a penchant for making Persian ice cream.<br><br>After reaching Los Angeles, Papen&#39;s grandfather opened an ice cream shop similar to the one he ran in Iran. He named his shop after his two most popular flavors, saffron and rose.<br><br>Thirty years later, Papen and his uncle run the store and serve more than 50 different flavors of ice cream including lavender, pumpkin, pistachio and cantaloupe.<br><br>Papen said he recalls his grandfather letting him run the register for customers and eat all the ice cream and candy that he could when he was younger.<br><br>"He made me feel like I owned (the shop) for the 10 minutes I was there, even though I was only 8 years old," Papen said.<br><br><div class="thumbnail with-caption"><img src="http://dailybruin.com/images/2013/09/b4fa2619-41ff-4429-8704-143b536f7b92-225x300.jpg" width="225"><span class="photocred-inline">Courtesy of Naz Papen</span></div>When Papen grew older, he started taking a more active role in the family business. He started by delivering tubs of ice cream to retail outlets in Southern California and now plays a managerial role in the operation.<br><br>Papen said, through the years, he has also helped invent some of their most popular flavors, such as pumpkin pie, nutella and peanut butter.<br><br>Papen said that what sets Persian ice cream apart from American ice cream is that they use whole milk rather than powdered milk.<br><br>"If you take a spoon and pull it from a cup, it would stretch like melted cheese stretches," Papen said. "That&#39;s what sets us apart from other ice cream shops. ... We want to provide the community a different type of ice cream that you can&#39;t find anywhere."</div><div class="span4">  <ul class="icons-ul"><li><i class="icon-map-marker"></i> 1387 Westwood Blvd, Los Angeles</li>         <li><i class="icon-bell"></i> (310) 477-5533</li>         <li><i class="icon-calendar"></i> Mon-Sun 9 a.m. to 10:30 p.m.</li>  <li><i class="icon-briefcase"></i> Delivery: No</li>        <li><i class="icon-tag"></i> $</li>         <li><i class="icon-info-sign"></i> No alcohol. Street parking.</li> <li><i class="icon-globe"></i> <a href="http://www.golobolbol.org/" target="_blank">www.golobolbol.org</a></li></ul> </div></div>'
                        ].join(''),
                        icon: 'http://maps.google.com/mapfiles/markerA.png',
                        zoom: 17
        },
                {
                        lat: 34.063797,
                        lon: -118.445719,
                        title: 'Honeymade',
                        html: [
                                        '<h3>Honeymade</h3>',
                                        '<p>Sweet & savory</p>'
                        ].join(''),
                        fulldesc: [
                '<h3>Honeymade</h3>',
                '<div class="row"><div class="span8"><img src="http://dailybruin.com/images/2013/09/546f5b22-42ac-4b6f-8cb2-a41d93fa54a7.jpg" class="img-responsive" alt="Honeymade"><span class="photocred">Erin Ng / Daily Bruin Senior Staff</span><br><br><strong>BY CHANDINI SONI</strong><br><br> Perched on a stool in front of a window across from Ronald Reagan UCLA Medical Center, Jeff Selwyn looks up to watch the traffic go by.<br><br>Selwyn is the owner of Honeymade Sweet and Savory, a restaurant that opened last month in Westwood Village.<br><br>"I like to create and I think you can do a lot of that with food," Selwyn said with a soft South African accent.<br><br>When he was younger, Selwyn served in the South African Army.<br><br><div class="thumbnail with-caption"><img src="http://dailybruin.com/images/2013/09/4e607184-6f2d-4e55-a91a-e46ff4dd0655.jpg" width="225"><span class="photocred-inline">Chandini Soni / Daily Bruin Senior Staff</span></div>"After the army, I had to decide what I was going to do," Selwyn said. "I decided to go into the food business."A chef in the officer&#39;s mess taught him how to cook.<br><br>After leaving the army, Selwyn studied hotel management at the University of Witwatersrand in South Africa, where his emphasis was on desserts and pastries.<br><br>Selwyn said some of his most intriguing dishes at Honeymade were inspired by this training, such as his signature sweet and savory waffle sandwiches, the Kimchi Tuna Waffle and the Tangerine Chicken Waffle.<br><br>"I wanted to put another twist to (desserts) and create something else that no one else is doing," Selwyn said.<br><br>Selwyn said he plans on opening another Honeymade in Las Vegas.</div><div class="span4">  <ul class="icons-ul"><li><i class="icon-map-marker"></i> 10912 Le Conte Ave, Los Angeles</li>         <li><i class="icon-bell"></i> (310) 208-7111</li>         <li><i class="icon-calendar"></i> Mon-Fri 11 a.m. to 9 p.m.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sat 11:30 a.m. to 8:30 p.m.</li>  <li><i class="icon-briefcase"></i> Delivery: Yes</li>        <li><i class="icon-tag"></i> $$</li>         <li><i class="icon-info-sign"></i> No alcohol. Street parking.</li> <li><i class="icon-globe"></i> <a href="http://www.honeymadela.com/" target="_blank">www.honeymadela.com</a></li></ul></div></div>'
                        ].join(''),
                        icon: 'http://maps.google.com/mapfiles/markerB.png',
                        zoom: 17,

        },

        {
                        lat: 34.061228,
                        lon: -118.444659,
                        title: 'Angelino&#39;s Cafe',
                        html: [
                                        '<h3>Angelino&#39;s Cafe</h3>',
                                        '<p>Authentic flavors for 11 years</p>'
                        ].join(''),
                        fulldesc: [
                '<h3>Angelino&#39;s Cafe</h3>',
                '<div class="row"><div class="span8"><img src="http://dailybruin.com/images/2013/09/d55da436-a2ab-41e1-8b10-ab5a860197df.jpg" class="img-responsive" alt="Angelino&#39;s Cafe"><span class="photocred">Erin Ng / Daily Bruin Senior Staff</span><br><br><strong>BY CHANDINI SONI</strong><br><br>"Archie Zanali still remembers his first customer, Mike. Even after 11 years, he remembers that Mike&#39;s favorite dish is the penne marinara and that Mike&#39;s wife enjoys ravioli. <br><br>When Mike and his wife come to visit Los Angeles from Fresno, Calif., they always stop by Angelino&#39;s Cafe for a meal.<br><br>Mike is not the only UCLA alumnus who stops by Angelino&#39;s Cafe when he is in town, said Zanali, the owner of the restaurant. <br><br>When old customers return to Angelino&#39;s Cafe for a meal, Zanali said they always come and meet him.<br><br>"They say &#39;Hi Archie, how are you? Do you remember me?&#39;" Zanali said with a smile. "Of course I remember them. I remember all of them. I (even) know which food to make (for them)."<br><br><div class="thumbnail with-caption"><img src="http://dailybruin.com/images/2013/09/eb169476-271e-4123-ab44-1d4fb3c9d1d6-200x300.jpg" width="225"><span class="photocred-inline">Erin Ng / Daily Bruin Senior Staff</span></div>Zanali said his family extends past his wife and two children - he treats all of the students who stop by for a meal as his children too and enjoys talking to them about their classes, their lives and, most importantly, food.<br><br>Zanali doesn&#39;t just talk to, but also personally cooks for his patrons, which he says is a key point. If someone else makes it, he said, the food will taste different.<br><br>Zanali has plans to keep this authentic flavor past his time at the restaurant. He said his son will use the same sauce to cook the pasta even after he retires.<br><br>"When my son takes over the business, he will use the same sauce," Zanali said. "It is important. If I give the sauce to someone else to make, the customer will come over and say this sauce I eat is not like (it was) before, it&#39;s different."</div><div class="span4">  <ul class="icons-ul"><li><i class="icon-map-marker"></i> 10874 Kinross Ave, Los Angeles</li>         <li><i class="icon-bell"></i> (310) 443-1918</li>         <li><i class="icon-calendar"></i> Mon-Fri 11 a.m. to 9 p.m.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sat 11:30 a.m. to 8:30 p.m.</li> <li><i class="icon-briefcase"></i> Delivery: No</li>          <li><i class="icon-tag"></i> $</li>         <li><i class="icon-info-sign"></i> No alcohol. Street parking.</li> <li><i class="icon-globe"></i> <a href="http://www.angelinoscafe.com/" target="_blank">www.angelinoscafe.com</a></li></ul></div></div>'
                        ].join(''),
                        icon: 'http://maps.google.com/mapfiles/markerC.png',
                        zoom: 17,

        },
        {
                        lat: 34.062644,
                        lon: -118.447998,
                        title: 'Fat Sal&#39;s',
                        html: [
                                        '<h3>Fat Sal&#39;s</h3>',
                                        '<p>"Fat sandwiches" brought from New York</p>'
                        ].join(''),
                        fulldesc: [
                                        '<h3>Fat Sal&#39;s</h3>',
                                        '<div class="row"><div class="span8"><img src="http://dailybruin.com/images/2013/09/e69adc4c-fa91-48c3-aad0-130c5d375712.jpg" class="img-responsive" alt="Fat Sal&#39;s"><span class="photocred">Erin Ng / Daily Bruin Senior Staff</span><br><br><strong>BY CHANDINI SONI</strong><br><br>Salvatore Capek used to build restaurants. Three years ago, he started building sandwiches.<br><br>Capek and his business partners, originally from New York, opened Fat Sal&#39;s Deli in an attempt to bring "fat sandwiches" to the West Coast, Capek said. "Fat sandwiches" combine a myriad of ingredients, such as meat, cheese, onion rings, mozzarella sticks, eggs and condiments, all in one sandwich.<br><br>"We try to combine everything that&#39;s tasty and stuff it into one ridiculous, delicious sandwich," Capek said.<br><br>Capek said he grew up eating sandwiches like this all his life, but he would make them himself.<br><br>Capek added onion rings to his beef sandwiches to create what is akin to the Fat Sal currently on the menu, and chicken parmesan to cold cut sandwiches to create the Fat Anthony, another popular sandwich on the menu.<br><br>Most of the customers at Fat Sal&#39;s are students, faculty and staff from UCLA and the Ronald Reagan UCLA Medical Center, Capek said.<br><br><div class="thumbnail with-caption"><img src="http://dailybruin.com/images/2013/09/180462b4-5059-4f36-b408-f83cdb7888a0-300x200.jpg" width="300"><span class="photocred-inline">Kelsey Kong / Daily Bruin</span></div>"If you&#39;re a doctor or nurse or X-ray technician (working the night shift), your lunch is at midnight," Capek said. "People come in at around midnight and eat lunch."<br><br>Fat Sal&#39;s Deli has opened two other branches, in San Diego and Hollywood, this year.<br><br>Capek said students from UCLA who have graduated come and eat at Fat Sal&#39;s when they come back to visit or go to one of the other locations.<br><br>"I was working at the San Diego store this past Memorial Day weekend. One (UCLA alum) came and asked, &#39;Do you guys make the fat cordon blue down here?&#39;" Capek said. "He was so excited that we did because it wasn&#39;t on the menu here."<br><br>Other customers have left their own mark on the menu. One of the sandwiches, the Fat Jaime, has been named by the only person to have eaten the "Big Fat Fatty" sandwich, a 27 inch sub that weighs 10 pounds.<br><br>But Capek said the best part is seeing people enjoy your food.<br><br>"We have a passion for the food there. We are foodies &#45; we love food, we love watching people enjoy our food."</div><div class="span4">  <ul class="icons-ul"><li><i class="icon-map-marker"></i> 972 Gayley Ave, Los Angeles</li>         <li><i class="icon-bell"></i> (310) 208-5070</li>         <li><i class="icon-calendar"></i> Mon-Sun 11 a.m. to midnight</li>  <li><i class="icon-briefcase"></i> Delivery: Yes</li>        <li><i class="icon-tag"></i> $</li>         <li><i class="icon-info-sign"></i> No alcohol. Street parking.</li> <li><i class="icon-globe"></i> <a href="http://www.fatsalsdeli.com" target="_blank">www.fatsalsdeli.com</a></li></ul></div></div>'
                        ].join(''),
                        icon: 'http://maps.google.com/mapfiles/markerD.png',
                        zoom: 17,

        },
        {
                        lat: 34.06041,
                        lon: -118.444272,
                        title: '800 Degrees',
                        html: [
                                        '<h3>800 Degrees</h3>',
                                        '<p>Customizable fresh pizza</p>'
                        ].join(''),
                        fulldesc: [
                                        '<h3>800 Degrees</h3>',
                                        '<div class="row"><div class="span8"><img src="http://dailybruin.com/images/2013/10/65502558-15c0-4a49-9fb1-d3c68dc3be65.jpg" class="img-responsive" alt="800 Degrees"></br><span class="photocred">Daily Bruin file photo</span></br></br><strong>BY SHREYA AIYAR</strong></br></br>A line stretches out of the door of a dim, chandelier-lit restaurant, where an assembly line of chefs expertly tosses pizza dough and tops the pies with colorful vegetables, chunky tomato sauce and assorted meats according to each customer&#39;s preference. </br></br> Overseeing it all is Anthony Carron, the chef, creator and co-owner of 800 Degrees Neapolitan Pizzeria located in Westwood Village. Carron said the restaurant is the culmination of a passion for food that dates back to his college days at Macalester College in Minnesota.  &#34;While I was (in college), I started cooking to help pay my bills,&#34; Carron said. &#34;I fell in love with it.&#34; </br></br> Before long, Carron had dropped out of school to pursue a career in the culinary arts, but said he learned the ins and outs of cooking through experience.</br></br> &#34;I couldn&#39;t afford to go to culinary school, but I bought the textbook for the Culinary Institute of America and just cooked everything in it for my college roommates,&#34; Carron said. &#34;I taught myself by working in restaurants and working my way up.&#34;</br></br> <div class="thumbnail with-caption"><img src="http://dailybruin.com/images/2013/10/e8651b2a-680f-4fdd-92ca-6767dd1b3ad6-300x197.jpg" width="300"><span class="photocred-inline">Daily Bruin file photo</span></div> Carron was then employed as a chef under celebrity restaurateur Michael Mina in San Francisco. It was during this time that Carron said he discovered a love for Neapolitan pizza, a thin, crispy pie topped with various fresh ingredients, and imagined a restaurant revolving solely around the idea.</br></br> &#34;I was researching Neapolitan pizza and discovered that it cooked in one minute,&#34; Carron said. &#34;That&#39;s when I had this lightning bolt moment, like, &#39;Wow, if I can cook a pizza in one minute, what&#39;s to stop me from setting it up like an assembly line?&#39;&#34;</br></br> Carron said he tried to bring the fine dining experience from Mina&#39;s restaurant to 800 Degrees&#39; faster, casual atmosphere by sourcing fresh ingredients, such as broccolini and artichokes from local farmers.</br></br> The main goal of the cuisine, Carron said, was to make a pizza that was freshly prepared and satisfying, yet healthy and light.</br></br> &#34;It&#39;s the kind of pizza that doesn&#39;t weigh you down afterwards; it&#39;s light and you can eat a whole one, go back to work and not want to take a nap,&#34; Carron said. &#34;I just hope (the customers) feel happy and healthy after they eat a pizza here.&#34;</div><div class="span4">  <ul class="icons-ul"><li><i class="icon-map-marker"></i> 10889 Lindbrook Dr, Los Angeles</li>         <li><i class="icon-bell"></i> (310) 443-1911</li>         <li><i class="icon-calendar"></i> Mon-Sun 11 a.m. to 2 a.m.</li> <li><i class="icon-briefcase"></i> Delivery: No</li> <li><i class="icon-tag"></i> $$</li>         <li><i class="icon-info-sign"></i> Beer & wine only. Street parking.</li> <li><i class="icon-globe"></i> <a href="http://www.800degreespizza.com/" target="_blank">www.800degreespizza.com</a></li></ul></div></div>'
                        ].join(''),
                        icon: 'http://maps.google.com/mapfiles/markerE.png',
                        zoom: 17
        },
        {
                        lat: 34.062561,
                        lon: -118.446976,
                        title: 'Stan&#39;s Donuts',
                        html: [
                                        '<h3>Stan&#39;s Donuts</h3>',
                                        '<p>Three generations of signature doughnuts</p>'
                        ].join(''),
                        fulldesc: [
                                        '<h3>Stan&#39;s Donuts</h3>',
                                        '<div class="row"><div class="span8"><img src="http://dailybruin.com/images/2013/10/a465d14e-3328-40ed-aa7c-a5a99f6dc1ea.jpg" class="img-responsive" alt="Stan&#"><span class="photocred">Neil Bedi / Daily Bruin senior staff</span></br></br><strong>BY KELSEY ROCHA</strong></br></br>Nearly 50 years ago, on a Christmas night, a doughnut shop was born.</br></br><div class="thumbnail with-caption"><img src="http://dailybruin.com/images/2013/10/a9c6c1d7-c52e-4036-8993-a5cd73426247-230x300.jpg" width="225"><span class="photocred-inline">Kelsey Rocha / Daily Bruin</span></div>It was 1963, and Stan Berman was hosting a party in honor of his 11th anniversary with his wife. While most guests departed at reasonable hours, one by the name of Bob Jaffe refused to leave.</br></br>Jaffe had just bought a corner shop bakery in the heart of Westwood Village, and was set on showing it to his friend. Berman eventually gave in and went down to see the shop in the middle of the night.</br></br>Berman, who himself was already in the bakery business, said he knew Jaffe was bringing him down to the shop to convince him to go into business together. Berman said he remained skeptical up until they stepped into the shop.</br></br>&#34;It was the middle of the night and (Jaffe) brought me into this tiny little shop right here. Then I knew I&#39;d be making doughuts for a long time,&#34; Berman said.</br></br>On the spot, the two became business partners and opened their establishment as the Corner Shoppe Bakery the very next morning.</br></br> Throughout the years, there have been three generations of Bermans working behind the cozy bakery counter selling the large variety of signature doughnuts Stan&#39;s has to offer. Yet, neither Berman&#39;s children, nor his grandchildren wanted to stay in the bakery business long-term, so Berman himself continues to come into work every day.</br></br><div class="thumbnail with-caption"><img src="http://dailybruin.com/images/2013/10/5d7b5ea6-a5be-4364-aa21-8475d2f416ac-300x236.jpg" width="300"><span class="photocred-inline">Neil Bedi / Daily Bruin senior staff</span></div>With about half a century under his belt, Berman has said he&#39;s gotten to know a number of the UCLA chancellors, professors and students. For a long time, he said he had a good partnership going with the school and was selling about 150 dozen donuts per day to campus.</br></br>Among these hundreds of doughnuts sold, the Huelle stands out as Stan&#39;s Donuts&#39; No. 1 seller. The pastry is popular for its creamy peanut butter center and decadent chocolate glaze. Berman, however, said his favorite to this day continues to be the classic buttermilk raisin bar.</br></br>As the university has evolved to become a more independent entity from Westwood village, Berman has said the partnership he once had with UCLA has since dwindled, but he continues to have a loyal customer base with certain organizations and students.</br></br>Now, on the brink of the shop&#39;s golden anniversary, Berman said he&#39;s watched the university grow and change, but two things are constants in Westwood: his donuts and the character of the students.</div><div class="span4">  <ul class="icons-ul"><li><i class="icon-map-marker"></i> 10948 Weyburn Ave, Los Angeles</li>         <li><i class="icon-bell"></i> (310) 208-8660</li>         <li><i class="icon-calendar"></i> Mon-Sun 6 a.m. - midnight</li>  <li><i class="icon-briefcase"></i> Delivery: Yes</li>        <li><i class="icon-tag"></i> $</li>         <li><i class="icon-info-sign"></i> Street parking.  Cash Only.</li> <li><i class="icon-globe"></i> <a href="http://www.stansdoughnuts.com/" target="_blank">www.stansdoughnuts.com</a></li></ul></div></div>'
                        ].join(''),
                        icon: 'http://maps.google.com/mapfiles/markerF.png',
                        zoom: 17
        },
        {
                        lat: 34.063326,
                        lon: -118.446654,
                        title: 'Fab Hot Dogs',
                        html: [
                                        '<h3>Fab Hot Dogs</h3>',
                                        '<p>19 types of hot dogs, with an "I Ate It All" challenge</p>'
                        ].join(''),
                        fulldesc: [
                                        '<h3>Fab Hot Dogs</h3>',
                                        '<div class="row"><div class="span8"><img src="http://dailybruin.com/images/2013/10/a4d664d6-bcde-4479-94c5-647cae767589.jpg" class="img-responsive" alt="Stan&#"><span class="photocred">Neil Bedi / Daily Bruin</span></br></br><strong>BY KELSEY ROCHA</strong></br></br>On opening day, the line stretched around the corner of Broxton and Le Conte for 50 feet. Students and Westwood natives alike had come to check out the new hot dog place. Despite an hourlong fryer break down, the crowds remained and returned for a second day as well.</br></br>For owner Gary Budish, the opening of the restaurant was a dream he realized post-retirement. Budish, who considers himself a businessman, said the restaurant business wasn&#39;t something he ever really envisioned himself pursuing, but that when he retired he found himself unsatisfied without any work to do.</br></br>Only two months into his retirement, Budish discovered the original Fab Hot Dogs through the Food Network show &#34;Diners, Drive-in&#39;s and Dives.&#34; Blown away by the food, it took him only a year to become friends with the owner Joe Fabrocini, secure the rights to Fab Hot Dogs and get right to work in Westwood.</br></br><div class="thumbnail with-caption"><img src="http://dailybruin.com/images/2013/10/a90e0ffc-63a8-4aef-9946-6946ec5dfb77-300x218.jpg" width="300"><span class="photocred-inline">Kelsey Rocha / Daily Bruin</span></div>Budish and his lifelong friends Loren Harmell and Andy Fox co-own the business with Fabrocini acting as a consultant. Because none of the three have any restaurant experience, their roles revolve more around controlling the quality of the food and in building the Fab Hot Dog experience for customers. It isn&#39;t uncommon to see them hustling about the restaurant.</br></br>Fox said while they opted to replicate a lot of Fab&#39;s original concept, they sought to modernize it and create an atmosphere that would appeal more to college students. With patio seating, rustic brick walls and brightly colored decor, the restaurant captures a fresh diner-fusion look.</br></br>Harmell said another youthful component is the restaurant&#39;s &#34;I Ate It All&#34; challenge. Customers who successfully eat their way through every item on the menu earn themselves a spot on the wall of fame. That means challengers are looking at trying 19 types of hot dogs, 14 different burgers and a multitude of crispy, fried sides among other Fab Hot Dog delicacies.</br></br><div class="thumbnail with-caption"><img src="http://dailybruin.com/images/2013/10/701ab19c-7e19-44f8-9da2-f77f187f76f8-300x182.jpg" width="300"><span class="photocred-inline">Neil Bedi / Daily Bruin</span></div>The proximity to UCLA is something the owners are all excited about. Budish said they have planned late hours Thursday through Saturday hoping to be the go-to hang out for post-game celebrations.</br></br>Budish, who has a particular affinity for UCLA sports, said he is a close personal friend to a number of directors in the athletic department, and said having their flagship store in Westwood is an especially rewarding experience.</br></br>&#34;I&#39;m a big sports donor through the Wooden Athletic Fund. I never miss a basketball game; I never miss a football game,&#34; Budish said. &#34;I support the school whole-heartedly and it&#39;s a dream to have a location that is this close to the school.&#34;</div><div class="span4">  <ul class="icons-ul"><li><i class="icon-map-marker"></i> 920 Broxton Ave, Los Angeles</li>         <li><i class="icon-bell"></i> (310) 794-0333</li>         <li><i class="icon-calendar"></i> Mon-Wed 11 a.m. - 10 p.m.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thu 11 a.m. - midnight</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fri 11 am - 1 am</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sat noon - 1 am</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sun noon - 8 pm</li> <li><i class="icon-briefcase"></i> Delivery: Yes</li>          <li><i class="icon-tag"></i> $</li>         <li><i class="icon-info-sign"></i> No alcohol. Street parking.</li><li><i class="icon-globe"></i> <a href="http://www.fabhotdogs.com/" target="_blank">www.fabhotdogs.com</a></li></ul></div></div>'
                        ].join(''),
                        icon: 'http://maps.google.com/mapfiles/markerG.png',
                        zoom: 17
        },
        {
                        lat: 34.06105,
                        lon: -118.444431,
                        title: 'Napa Valley Grille',
                        html: [
                                        '<h3>Napa Valley Grille</h3>',
                                        '<p>Locally sourced, farm-to-table, seasonal cuisine</p>'
                        ].join(''),
                        fulldesc: [
                                        '<h3>Napa Valley Grille</h3>',
                                        '<div class="row"><div class="span8"><img src="http://dailybruin.com/images/2014/01/e0dea7bd-7ed2-4d3e-a2f1-415c528fe989.jpg" class="img-responsive"><span class="photocred">Austin Yu/Daily Bruin</span></br></br><strong>BY KELSEY ROCHA AND MARYRORE KULICK</strong></br></br> As Taylor Boudreaux and Chad Cancelosi clink their glasses together for a midday toast, a waiter passing by laughs, hailing them as &#34;The Kings of Westwood.&#34;<br/><br/>Both Executive Chef Boudreaux and General Manager Cancelosi said they believe Napa Valley Grille is one of Westwood&#39;s more high-end dining venues, as it commonly plays host to star-studded film premiere parties and business dinners.<br/><br/>Despite the restaurant&#39;s formal reputation, Napa Valley Grille attracts all kinds of people for endless purposes, from college students hitting up happy hour to groups coming together in remembrance of a recently passed relative.<br/><br/>&#34;The restaurant is used for so many purposes. It&#39;s used to celebrate and to mourn. It&#39;s really neat to see how it touches people,&#34; Cancelosi said. &#34;It&#39;s really a place to commune.&#34;<br/><br/>Napa Valley Grille, an asset of the Tavistock Group, opened in Westwood in 2000. Boudreax said as a social chef he was immediately drawn to the company for its emphasis on creating an intimate dining experience.<br/><br/>&#34;We firmly believe we&#39;re giving a personal experience, and what&#39;s more personal than food,&#34; Boudreaux said. &#34;There&#39;s a ton of blind faith in the guys behind the (kitchen) counter - that they&#39;re going to do right by you before they put it down in front of you. It&#39;s a leap of faith.&#34;<br/><br/>Boudreaux said their high-class New American menu seeks to serve the needs of guests with locally sourced, farm-to-table, seasonal cuisine. Quality proteins such as roasted chicken, grilled fillet mignon and pan seared duck are among the dinner selections, while the lunch menu boasts a variety of burgers, sandwiches and salads.<br/><br/>For Cancelosi, he said capturing a Napa moment with the atmosphere and flavors of the food is what sets the restaurant apart in the Los Angeles area.<br/><br/>Both Boudreaux and Cancelosi make a daily habit of circulating through the dining room and getting to know the guests. They both agree that they spend more time in the restaurant than at home and have expanded their definitions of family to include the staff of the restaurant as well as its guests.<br/><br/>&#34;(Napa Valley Grille) is an extension of your home family. In fact, I celebrated Christmas in the restaurant and brought my kids down,&#34; Cancelosi said. &#34;I opened the restaurant up to the staff and anyone else who wanted to come down for a glass of wine from 3-5. We&#39;re really all in this together.&#34;</div><div class="span4">  <ul class="icons-ul"><li><i class="icon-map-marker"></i> 1100 Glendon Ave. #100, Los Angeles</li>         <li><i class="icon-bell"></i> (310) 824-3322</li>         <li><i class="icon-calendar"></i> Mon-Thu 11:30 am - 3 pm, 5:30 pm -<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9:30 pm</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fri 11:30 am - 3 pm, 5 pm - 11:00 pm</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sat 11 am - 3 pm, 5 pm - 11 pm</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sun 11 am - 3 pm, 5 pm - 9 pm</br></li>  <li><i class="icon-briefcase"></i> Delivery: No</li>        <li><i class="icon-tag"></i> $$</li>         <li><i class="icon-info-sign"></i> Valet parking. </li><li><i class="icon-globe"></i> <a href="http://napavalleygrille.com" target="_blank">www.napavalleygrille.com</a></li></ul></div></div>'
                        ].join(''),
                        icon: 'http://maps.google.com/mapfiles/markerH.png',
                        zoom: 18
        },
        {
            lat: 34.060197,
            lon: -118.444165,
            title: 'Espresso Profeta',
            html: [
                            '<h3>Espresso Profeta</h3>',
                            '<p>Quaint little cafe specializing in latte art</p>'
            ].join(''),
            fulldesc: [
                  '<h3>Espresso Profeta</h3>',
                  '<div class="row"><div class="span8"><img src="http://dailybruin.com/images/2014/01/301e0f11-80e8-43b9-aaa0-6aa27d1fe0a5.jpg" class="img-responsive"><span class="photocred">Lauren Nipper / Daily Bruin</span></br></br><strong>BY KELSEY ROCHA AND MARYRORE KULICK</strong></br></br> For Choncey Langford, the best part about working at Espresso Profeta is seeing his customers lick the coffee clean from their cups.<br><br>A quaint little cafe on Glendon Avenue in Westwood Village, Espresso Profeta began serving Italian espresso blends to fervent cup-licking customers over a decade ago. Langford helped his wife, Sam, open the shop after they made the transition from Seattle to Southern California.<br><br>&#34;The beans we use, (which are from) Espresso Vivace, we drank &#46;&#46;&#46; everyday,&#34; said Langford. &#34;When we moved to (Los Angeles) there was nothing but Coffee Beans and Starbucks&#39;, so we thought this would probably do pretty well.&#34;<br><br>It was first known as West Burton Coffee and Tea, after a village in England, but later the name was changed to Espresso Profeta, a reference to David Schomer. Also, who roasts the Espresso Vivace beans and has been regarded as the &#34;prophet of coffee.&#34; Other than the fact that the new name just sounded good in Italian, it also caused business to double, Langford said.<br><br>&#34;Putting the Espresso sticker on the window made people who would just walk by finally decide to come in,&#34; he said, comparing the phenomena to the conclusion of a restaurant makeover TV show.<br><br>Today, drinks such as the White Velvet, Flat White, Nico and Chai Tea are among the most popular menu items, served alongside with many pastry options, including a distinctive green-colored lemon and blueberry scone.<br><br>The baristas at Espresso Profeta specialize in embellishing their drinks with latte art, a method of combining milk with espresso to create a decorative design on foam and a skill that Langford said takes at least six months of training to master.<br><br>The espresso and the food, as well as the artistic garden setting and red brick walls of the cafe, attract a wide variety of customers, from students to professionals to everyday families, some of whom have spent years coming to the cafe.<br><br>&#34;It&#39;s neat watching families grow. &#46;&#46;&#46; We&#39;ve (also) helped a lot of people through their four years of school,&#34; Langford said, witness to studious college students becoming lawyers and silent infants becoming chatty 4-year-olds.<br><br>And with this in mind, every day from 7 a.m. to 7 p.m., the owners and employees of Espresso Profeta work diligently to provide customers with the cup-licking taste that keeps them coming back.</div><div class="span4">  <ul class="icons-ul"><li><i class="icon-map-marker"></i> 1129 Glendon Ave, Los Angeles</li>         <li><i class="icon-bell"></i> (310) 208-3375</li>         <li><i class="icon-calendar"></i> Mon-Sun 7 a.m. - 7 p.m.</li>  <li><i class="icon-briefcase"></i> Delivery: No</li>        <li><i class="icon-tag"></i> $$</li>         <li><i class="icon-info-sign"></i> Street parking. </li><li><i class="icon-globe"></i> <a href="http://www.espressoprofetala.com" target="_blank">http://www.espressoprofetala.com</a></li></ul></div></div>'
                        ].join(''),
                        icon: 'http://maps.google.com/mapfiles/markerI.png',
                        zoom: 17
        },
        {
                        lat: 34.057157,
                        lon: -118.4427949,
                        title: 'fundamental LA',
                        html: [
                                        '<h3>fundamental LA</h3>',
                                        '<p>Farmer-chef relationships produce wholesome, seasonal cuisine</p>'
                        ].join(''),
                        fulldesc: [
                '<h3>fundamental LA</h3>',
                '<div class="row"><div class="span8"><img src="http://dailybruin.com/images/2013/12/cdfba60b-364c-4b9b-ab20-25090be3f4e7.jpg" class="img-responsive" alt="Fundamental LA"><span class="photocred">Charlie Chang / Daily Bruin</span><br><br><strong>BY AIMEE DIZON AND JUNE RUSTIGAN</strong><br><br>Whiffs of roasted cauliflower, fresh basil and pumpkin spice fill the dimly lit room as a warm buzz of conversation flows around the cozy yet modern nook on Westwood Boulevard.<br><br>At the back of the restaurant, longtime friends Woogene Lee and Jeff Faust later sit with their legs kicked back during a bustling Friday night. With a shared laugh, the co-founders of fundamental LA begin to share the story behind their restaurant&#39;s success.<br><br>"The idea behind fundamental was to take our love for hospitality and good food, technique and seasonality, and be our own destination among the many chain stores in Westwood," Lee said.<br><br>Southern California natives Lee and Faust first met in the second grade. After working in business management for three years, the UC Berkeley graduates decided it was time for a change. A few post-work drinks at The Surly Goat bar later, the concept of fundamental LA was born.<br><br>Initially reluctant about the cramped storefront on the corner of Westwood Boulevard and Wellworth Avenue, Lee and Faust said they saw a certain potential in the restaurant. Together, the team redesigned the tight space to fit fundamental&#39;s intimate, contemporary aesthetic.<br><br>When bar stools were out of their price range, Lee and Faust improvised. What started out as a series of sketches is now a fully upholstered series of bar stools made of plywood. A closer look reveals a vibrant red found on the underside of the seats; a secret touch that mimics the bottom of a Louis Vuitton shoe.<br><br>"It was a labor of love. It was frustrating and extremely time-consuming, but we saved money, and now there&#39;s a cooler story to tell," Faust said.<br><br>Fundamental LA opened its doors on June 13, 2011, and sits a few blocks away from the chain restaurants in Westwood Village.<br><br>"There are a lot of cheap, fast eats but not a lot of made-from-scratch cooking in sort of an upscale environment, which is what we are," Lee said.<br><br>To this day, Lee and Faust said they feel that the need for wholesome food is still extremely apparent in Westwood. A plethora of fresh herbs and seasonal vegetables appear on the menu, but they saidit&#39;s the farmer-chef relationships that make each meal at fundamental stand out.<br><br>"We go to the Santa Monica Farmers Market and forge these incredible conversations with some of the best food producers in the country. It&#39;s an opportunity to connect with the people who are growing the food, and it&#39;s a privilege to get to use their food," Faust said.<br><br>"There&#39;s a friendly food vendor there named Barbara who always remembers my name! And I have a (hard) name to remember," Lee said with a laugh.<br><br>It is this connection to the origins of their produce that fundamental LA thrives upon and hopes to show in their dishes. The restaurant also gives customers the chance to provide their own fresh ingredients.<br><br>"Neighbors even bring in huge bags of limes, fresh figs and avocados from their gardens, and have it cooked in the restaurant," Faust said.<br><br>Fundamental&#39;s sandwiches are what started it all, and the duo said choices like the albacore tuna sandwich remain a huge hit with customers.<br><br>"We use sashimi grade, fresh albacore that comes in daily. There&#39;s no mayo in the sandwich - we just toss it with olive oil and capers vend, avocado, sundried tomato, olives - and it&#39;s fresh and delicious," Lee said.<br><br>For dinner, Lee and Faust suggest the simple purity of the carrot risotto. The brussels sprouts drizzled with tom yum glaze are a popular dish that they saidadds an Asian influence to the menu.<br><br>The duo also recommends fundamental&#39;s freshly made vanilla cream soda, which they both said students especially will love.<br><br>"It&#39;s a house-made vanilla ice cream mixed with soda water and heavy cream, stirred up as a legitimate light, fluffy milkshake. Also the churros. You can&#39;t go wrong with the churros," Faust said.<br><br>As the business partners rapidly share items from their menu in bursts of passion, the topic shifts to what&#39;s in store for the future of fundamental LA.<br><br>"We&#39;re actually opening another fundamental, so that&#39;s top of the line for us right now. It&#39;s basically like what we do at lunch, but it won&#39;t be in Westwood, it will be further east," Lee said.<br><br>With abundant energy and an armful of seasonal produce, the duo anticipate a new chapter for fundamental LA will begin no later than mid-2014.</div><div class="span4">  <ul class="icons-ul"><li><i class="icon-map-marker"></i> 1303 Westwood Blvd, Los Angeles</li>         <li><i class="icon-bell"></i> (310) 444-7581</li>         <li><i class="icon-calendar"></i> Tue-Fri 11 a.m. to 3 p.m.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tue-Thu 5:30 p.m. to 10:30 p.m.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fri-Sat 5:30 p.m. to 11 p.m.</li>  <li><i class="icon-briefcase"></i> Delivery: No</li>        <li><i class="icon-tag"></i> $$</li>         <li><i class="icon-info-sign"></i> Street parking.</li> <li><i class="icon-globe"></i> <a href="http://www.fundamental-la.com/" target="_blank">www.fundamental-la.com</a></li></ul></div></div>'
                        ].join(''),
                        icon: 'http://maps.google.com/mapfiles/markerJ.png',
                        zoom: 17,

        },
            {
                        lat: 34.063539,
                        lon: -118.447148,
                        title: 'Mon Amour Cafe',
                        html: [
                                        '<h3>Mon Amour Cafe</h3>',
                                        '<p>Late-night sweet and savory crepes</p>'
                        ].join(''),
                        fulldesc: [
                '<h3>Mon Amour Cafe</h3>',
                '<div class="row"><div class="span8"><img src="http://dailybruin.com/images/2013/12/65d76d06-40d3-463b-8e07-56b375a1b50f.jpg" class="img-responsive" alt="Mon Amour Cafe"><span class="photocred">Austin Yu / Daily Bruin</span><br><br><strong>BY NATALIE CHUDNOVSKY</strong><br><br>Mickey Fathi always wanted his own restaurant, so when a location opened up in Westwood, he bought it without a second thought or a concrete plan. One week later, he decided that he was going to make crepes.<br><br>Fathi is the 28-year-old owner of Westwood&#39;s Mon Amour Cafe, which opened in February. Mon Amour Cafe offers everything from the classic strawberry Nutella crepe to more original options such as the Reese&#39;s Peanut Butter Cup crepe or the filet mignon with blue cheese, sautéed mushrooms and caramelized onion crepe.<br><br>Fathi worked in the restaurant industry for more than 10 years, first as a busboy, then a waiter and finally a manager.<br><br>"I never thought to open up a creperie before, but I knew I wanted to do something sweet," Fathi said. "And I had some friends who were recently in Paris and they talked a lot about crepes."<br><br>To get inspired for his cafe, Fathi walked all around Westwood to explore the different types of food offered.<br><br>"I realized students didn&#39;t have many options as far as quick, sweet things," Fathi said. "I felt like a creperie would be a good addition to the village."<br><br>Once he settled on crepes, Fathi brought in a specialist to show him how to make the French sweet. Fathi experimented with different recipes and created the menu himself.<br><br>His personal favorite is the s&#39;mores crepe - a concoction of marshmallow cream, Nutella, cinnamon graham crackers, French vanilla ice cream, whipped cream and powdered sugar.<br><br>"It&#39;s like camping without any of the setup," Fathi said.<br><br>Mon Amour Cafe now offers macaroons, which are baked at night and rotate through 35 different flavors. Fathi&#39;s current favorite is the seasonal pumpkin spice macaroon.<br><br>Fathi said Mon Amour Cafe keeps late hours to accommodate Bruins. The cafe&#39;s earliest closing time is midnight, but it often stays open later.<br><br>"We never turn down customers," Fathi said. "On Thursday you might get a rush at 11:50 (p.m.), so I&#39;ll be here till 1:30 a.m. on those days."<br><br>Although students are its main fare, Mon Amour Cafe is sometimes visited by celebrities as well.<br><br>"We had (Metta World Peace) from the Lakers," Farthi said. "He practiced making crepes for all his friends one night here. We ended up making them for him."<br><br>Fathi said seeing positive customer reactions is the most satisfying part of his job.<br><br>"It&#39;s so rewarding to see students come in, happy that we&#39;re here," Fathi said. "&#39;Mon amour&#39; means &#39;my love&#39; in French. I wanted people to feel the love when they came in."</div><div class="span4">  <ul class="icons-ul"><li><i class="icon-map-marker"></i> 927 Broxton Ave, Los Angeles</li>         <li><i class="icon-bell"></i> (310) 824-7980</li>         <li><i class="icon-calendar"></i> Mon-Thu 10:30 a.m. to 12 a.m.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fri 10:30 a.m. to 3 a.m.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sat 11:30 a.m. to 3 a.m.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sun 12 p.m. to 12 a.m.</li>  <li><i class="icon-briefcase"></i> Delivery: No</li>        <li><i class="icon-tag"></i> $</li>         <li><i class="icon-info-sign"></i> Street parking.</li> <li><i class="icon-globe"></i> <a href="https://www.facebook.com/MonAmourCafeWestwood" target="_blank">www.fb.com/MonAmourCafeWestwood</a></li></ul></div></div>'
                        ].join(''),
                        icon: 'http://maps.google.com/mapfiles/markerK.png',
                        zoom: 17,

        },
          {
                lat: 34.063539,
                lon: -118.447148,
                title: 'Barney&#39;s Beanery',
                html: [
                                '<h3>Barney&#39;s Beanery</h3>',
                                '<p>Offers beer-loving singles & couples karaoke and trivia nights</p>'
                ].join(''),
                fulldesc: [
        '<h3>Barney&#39;s Beanery</h3>',
        '<div class="row"><div class="span8"><img src="http://dailybruin.com/images/2014/02/d7418773-d3b8-4057-8e9f-0b4c16321592.jpg" class="img-responsive" alt="Barney&#39;s Beanery"><span class="photocred">Agnijita Kumar / Daily Bruin</span><br><br>Barney&#39;s Beanery, located on Broxton next to the Landmark Theater, offers a variety of food and drink options.<br><br><strong>BY KELSEY ROCHA</strong><br><br>When general manager Briana Larra&ntilde;aga comes into work, she likes to stand at the bar where she can watch people meet and, sometimes, even fall in love.<br><br>Barney&#39;s Beanery, which sits on Broxton next to the Landmark Theater, joined the Westwood scene four years ago. As part of a small chain serving traditional American cuisine, the restaurant takes on dual roles as an eclectic lunchtime destination by day and a lively bar scene by night.<br><br>While the bar commonly plays host to beer-loving couples on first dates, it&#39;s also a great place for singles to meet. Larra&ntilde;aga said even one of Barney&#39;s own servers, a current UCLA student about to graduate, met her long-time boyfriend playing shuffleboard in the upper deck of the restaurant.<br><br>"It&#39;s a great place to meet someone, especially if you&#39;re a beer person and you&#39;re looking to meet another beer person, or someone into sports or even someone just interested in cool little restaurants."<br><br>Since the restaurant offers karaoke on Tuesdays and Thursdays as well as trivia on Wednesdays, Larra&ntilde;aga said the bar gets an animated crowd every night. In addition to its weekly events, the restaurant tends to throw events for various holidays. This Friday, in honor of Valentine&#39;s Day, Barney&#39;s quarterly stoplight party should be in full swing.<br><br>Larra&ntilde;aga said the point is for people to come wearing red, green or yellow to indicate their relationship status. Green communicates being single, yellow means it&#39;s complicated and red tells others that you are off the market. The event will also feature themed shots and free giveaways.<br><br>Larra&ntilde;aga said David Houston, owner of Barney&#39;s Beanery, chose to open the Westwood branch in part because of personal connections with doctors at the medical center and with people involved with UCLA athletics. She also said the restaurant is always open to supporting UCLA.<br><br>"We had UCLA sports radio hosted here throughout football season, and we&#39;ve had a lot of UCLA soccer alumni parties," Larra&ntilde;aga said. "(Houston) is really involved with (UCLA) sports."<br><br>In addition to hosting UCLA events, Barney&#39;s has a secret Bruin menu featuring items costing roughly five dollars. Beyond the Bruin menu, Barney&#39;s offers a broad spectrum of appetizers, burgers, Mexican favorites and American classics. Larra&ntilde;aga said the chili recipe dates back to the restaurant&#39;s inception in 1920.<br><br>Inside the restaurant, endless Christmas lights give a dreamy feeling, especially against the busy backdrop of license plates, album covers, magazine clippings and bottle caps which cover nearly every surface.<br><br>Barney&#39;s, which offers both cozy booths and breezy outdoor tables, attracts a mixed demographic, Larra&ntilde;aga said.<br><br>"A lot of people, when they think of Barney&#39;s they just think of &#39;bar&#39; and just young people, but we also get a lot of business people from Wilshire," Larra&ntilde;aga said. "Our place is always packed, but it&#39;s always a fun mixed group."</div><div class="span4">  <ul class="icons-ul"><li><i class="icon-map-marker"></i> 927 Broxton Ave, Los Angeles</li>         <li><i class="icon-bell"></i> (310) 824-7980</li>         <li><i class="icon-calendar"></i> Mon-Thu 10:30 a.m. to 12 a.m.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fri 10:30 a.m. to 3 a.m.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sat 11:30 a.m. to 3 a.m.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sun 12 p.m. to 12 a.m.</li>  <li><i class="icon-briefcase"></i> Delivery: No</li>        <li><i class="icon-tag"></i> $</li>         <li><i class="icon-info-sign"></i> Street parking.</li> <li><i class="icon-globe"></i> <a href="https://www.facebook.com/MonAmourCafeWestwood" target="_blank">www.fb.com/MonAmourCafeWestwood</a></li></ul></div></div>'
                ].join(''),
                icon: 'http://maps.google.com/mapfiles/markerK.png',
                zoom: 17,

        },

];

$(document).ready(function(){
    $(function() {
            new Maplace({
            locations: LocsB,
            map_div: '#gmap-tabs',
            controls_div: '#controls-tabs',
            controls_type: 'list',
            controls_on_map: false,
            show_infowindow: false,
            afterShow: function(index, location, marker) {
                    $('#info').html(location.fulldesc);
            },
                    map_options: {
                    set_center: [34.059646, -118.443498],
                    zoom: 15
                    },
                    controls_on_map: false
            }).Load();
    });
});
</script>

<div id="page-credit">Page created by <a href="http://aeiny.com">Aein Hope</a> and <a href="mailto:afarhangi@media.ucla.edu">Arman Farhangi</a></div>

</article>

<?php get_footer(); ?>
