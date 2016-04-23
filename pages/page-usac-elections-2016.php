<?php/*
Template Name: USAC Elections 2016
*/ ?>

<?php get_header(); ?>

<link rel="stylesheet" href="../css/usac-elections-2016.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-hashchange/v1.3/jquery.ba-hashchange.min.js"></script>
<script src="../js/usac-2016/main.js"></script>
<script src="../js/usac-2016/animatescroll.min.js"></script>
<script src="../js/usac-2016/lazyYT.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.2/flickity.pkgd.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:800|Asap' rel='stylesheet' type='text/css'>

<script type="text/template" class="candidates_main_template">
    <% _.each(input, function(candidate){ %>
        <div class="row element candidate <%- candidate.slate %>">
            <div class="small-3 columns">
            <img src="<%- candidate.mug %>"/>
            </div>
            <div class="small-9 columns">
                        <img class="slate-logo" src="/img/usac-2016.<%- candidate.slate %>.logo.png"/>
                        <h2 class="candidate-name" style="vertical-align:middle;"><%- candidate.name %></h2>
                <hr>
                <!-- <p><%- candidate.yearmajor %></p> -->
                <div class="row">
                    <div class="large-5 columns platforms">
                        <h2>Platforms</h2>
                        <ul>
                            <% _.each(candidate.platforms.split("\n"), function(p) { %>
                            <li><%- p %></li>  
                            <% }); %>
                        </ul>
                    </div>
              
                    <div class="large-7 columns">
                        <div class="lazyYT" data-youtube-id="<%- candidate.lazyvideo %>" data-ratio="16:9">Loading Video...</div>
                    </div>
          
                </div>
            </div>
        </div>
    <% }); %>
</script>

<script type="text/template" id="violations_main_template">
    <% _.each(rows, function(violation) { %>
        <div class = "element violation <%- violation.slates %>" id="<%- violation.id %>">
            <h1>Complaint #<%- violation.id %></h1>
            <hr>
            <p>Submitted By: <%- violation.submitter %></p>
            <p><%- violation.date %></p>
            <h2>Regarding:</h2>
            <p><%- violation.regarding %></p>
            <h2>Finding:</h2>
            <p><%- violation.finding %></p>
            <h2>Sanction:</h2>
            <p><%- violation.sanction %></p>
        </div>
    <% }); %>
</script>

<script type="text/template" id="violations_sidebar_template">
    <% _.each(rows, function(violation) { %>
        <dd class="element <%- violation.slates %>"><a href="#<%- violation.id %>" onclick="$('#<%- violation.id %>').animatescroll({padding: 80})">Complaint #<%- violation.id %></a></dd>
    <% }); %>
</script>

<script type="text/template" id="endorsements_main_template">
    <% _.each(rows, function(candidate) { %>
        <% if (candidate.endorsed == "1") { %>
            <div class = "endorsement <%- candidate.position %> <%- candidate.name %>">
            <div class="row endorsed">
                <h2 class="yesno">Endorsed:</h2>
                <div class="small-3 columns">
                   <img src="<%- candidate.mug %>"/>
                </div>
                <div class="small-9 columns">
                    <img class="slate-logo" src="/img/usac-2016.<%- candidate.slate %>.logo.png"/>
                    <h2 class="endorsed-name" style="vertical-align:middle;"><%- candidate.name %></h2>
                    <hr>
                    <p class="note"><%- candidate.note  %></p>
                    <% _.each(candidate.text.split("\n"), function(para) { %>
                        <p><%- para %></p>  
                    <% }); %>
                </div>
            </div> 
            </div>
        
        <% } else { %>
                    
            <div class = "notendorsement <%- candidate.position %> <%- candidate.name %>">
            <div class="row notendorsed">
            <h2 class="yesno">Not Endorsed:</h2>

            <div class="row notendorsed <%- candidate.name  %>">
                <div class="small-2 columns">
                   <img src="<%- candidate.mug %>"/>
                </div>
                <div class="small-10 columns">
                    <img class="slate-logo" src="/img/usac-2016.<%- candidate.slate %>.logo.png"/>
                    <h2 class="notendorsed-name"><%- candidate.name %></h2>
                    <hr>
                    <p class="note"><%- candidate.note  %></p>
                    <% _.each(candidate.text.split("\n"), function(para) { %>
                        <p><%- para %></p>  
                    <% }); %>
                </div>
            </div>
            </div>
            </div>
        <% } %>
    <% }); %>
</script>

<script type="text/template" id="results_candidates_template">
    <% candidate = rows; %>
        <img id="results-mug" src="<%- candidate.mug %>"/>
        <div class="row result-nameslate">
            <% if(candidate.position != "REF") {%>
                <img class="results slate-logo" src="/img/usac-2016.<%- candidate.slate %>.logo.png"/>
            <% } %>
            <h2 class="results-name"><%- candidate.name %></h2>
            <% if(candidate.position != "Gen-Rep") {%>
                <p class="results-percent"><%- candidate.percent %>% of the vote</p>
            <% } %>
        </div>
</script>

<script type="text/template" id="results_gallery_template">
    <% _.each(rows, function(image) { %>
        <img src="<%- image.link %>" alt="<%- image.caption %>"/>
    <% }); %>
</script>

<!-- THE PAGE STARTS HERE -->

<a class="fi-arrow-up" href="#" id="scrollup"><img class="show-for-small-only" src="../img/usac-2016.uparrow.png"/></a>
<div class="container">
    <div class="row banner">
      <img src="http://dailybruin.com/images/2016/04/usac_election_illo_final.jpg"/>
    </div>
    <div class="row">
    <nav class="top-bar" data-topbar role="navigation">
      <section class="top-bar-section">
        <!-- TOP Nav Section -->
        <ul class="right">
            <li class="active"><a href="#profiles">Profiles</a></li>
            <li><a href="#violations">Violations</a></li>
            <li><a href="#endorsements">Endorsements</a></li>
            <li><a href="#results">Results</a></li>
            <li><a href="#news">News</a></li>
        </ul>
      </section>
    </nav>
    <!-- Profiles/Violations/Endorsements -->
    <div class="row" id="PVE">
        <div class="small-3 columns hide-for-small-only" id="scrollbar" style="position: relative top: 30px">
            <form id="filter">
                <h3>Filter By Slate</h3>
                <div>
                    <input id="BU" type="checkbox" checked="yes" data-labelauty="Bruins United"/>
                </div>
                <div>
                    <input id="LA" type="checkbox" checked="yes" data-labelauty="LET'S ACT"/>
                </div>
                <div>
                    <input id="TAP" type="checkbox" checked="yes" data-labelauty="The After Party"/>
                </div>
                <div>
                    <input id="IND" type="checkbox" checked="yes" data-labelauty="Independent"/>
                </div>
            </form>
            <div class="usac-section profiles-container">
                <dl class="side-nav" id="profiles-sidebar">
                    <dd><a href="#profiles-President" onclick="$('#profiles-President').animatescroll({padding: 80})">President</a></dd>
                    <dd><a href="#profiles-IVP" onclick="$('#profiles-IVP').animatescroll({padding: 80})">Internal Vice President</a></dd>
                    <dd><a href="#profiles-EVP" onclick="$('#profiles-EVP').animatescroll({padding: 80})">External Vice President</a></dd>
                    <dd><a href="#profiles-Gen-Rep" onclick="$('#profiles-Gen-Rep').animatescroll({padding: 80})">General Representative</a></dd>
                    <dd><a href="#profiles-AAC" onclick="$('#profiles-AAC').animatescroll({padding: 80})">Academic Affairs Commissioner</a></dd>
                    <dd><a href="#profiles-CEC" onclick="$('#profiles-CEC').animatescroll({padding: 80})">Campus Events Commissioner</a></dd>
                    <dd><a href="#profiles-CSC" onclick="$('#profiles-CSC').animatescroll({padding: 80})">Community Service Commissioner</a></dd>
                    <dd><a href="#profiles-CAC" onclick="$('#profiles-CAC').animatescroll({padding: 80})">Cultural Affairs Commissioner</a></dd>
                    <dd><a href="#profiles-FAC" onclick="$('#profiles-FAC').animatescroll({padding: 80})">Facilities Commissioner</a></dd>
                    <dd><a href="#profiles-FSC" onclick="$('#profiles-FSC').animatescroll({padding: 80})">Financial Support Commissioner</a></dd>
                    <dd><a href="#profiles-SWC" onclick="$('#profiles-SWC').animatescroll({padding: 80})">Student Wellness Commissioner</a></dd>
                    <dd><a href="#profiles-TSR" onclick="$('#profiles-TSR').animatescroll({padding: 80})">Transfer Student Representative</a></dd>
                </dl>
            </div>

            <div class="usac-section violations-container">
                <dl class="side-nav" id="violations-sidebar">
                </dl>
            </div>

            <div class="usac-section endorsements-container">
                <dl class="side-nav" id="endorsements-sidebar">
                    <dd><a href="#endorsements-President" onclick="$('#endorsements-President').animatescroll({padding: 80})">President</a></dd>
                    <dd><a href="#endorsements-IVP" onclick="$('#endorsements-IVP').animatescroll({padding: 80})">Internal Vice President</a></dd>
                    <dd><a href="#endorsements-EVP" onclick="$('#endorsements-EVP').animatescroll({padding: 80})">External Vice President</a></dd>
                    <dd><a href="#endorsements-Gen-Rep" onclick="$('#endorsements-Gen-Rep').animatescroll({padding: 80})">General Representative</a></dd>
                    <dd><a href="#endorsements-AAC" onclick="$('#endorsements-AAC').animatescroll({padding: 80})">Academic Affairs Commissioner</a></dd>
                    <dd><a href="#endorsements-CEC" onclick="$('#endorsements-CEC').animatescroll({padding: 80})">Campus Events Commissioner</a></dd>
                    <dd><a href="#endorsements-CSC" onclick="$('#endorsements-CSC').animatescroll({padding: 80})">Community Service Commissioner</a></dd>
                    <dd><a href="#endorsements-CAC" onclick="$('#endorsements-CAC').animatescroll({padding: 80})">Cultural Affairs Commissioner</a></dd>
                    <dd><a href="#endorsements-FAC" onclick="$('#endorsements-FAC').animatescroll({padding: 80})">Facilities Commissioner</a></dd>
                    <dd><a href="#endorsements-FSC" onclick="$('#endorsements-FSC').animatescroll({padding: 80})">Financial Support Commissioner</a></dd>
                    <dd><a href="#endorsements-SWC" onclick="$('#endorsements-SWC').animatescroll({padding: 80})">Student Wellness Commissioner</a></dd>
                    <dd><a href="#endorsements-TSR" onclick="$('#endorsements-TSR').animatescroll({padding: 80})">Transfer Student Representative</a></dd>
                </dl>
            </div>
        </div>
        <!-- Main content column, resizes to full on mobile -->
        <div class="small-12 medium-9 columns">
            <!-- CANDIDATE PROFILES PAGE IS HERE  -->
            <div class="usac-section profiles-container profiles">
                <div class="profiles-content" id="profiles-President">
                    <h3 style="margin-top: 0em">President</h3>
                </div>
                <div class="profiles-content" id="profiles-IVP">
                    <h3>Internal Vice President</h3>
                </div>
                <div class="profiles-content" id="profiles-EVP">
                    <h3>External Vice President</h3>
                </div>
                <div class="profiles-content" id="profiles-Gen-Rep">
                    <h3>General Representative</h3>
                </div>
                <div class="profiles-content" id="profiles-AAC">
                    <h3>Academic Affairs Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-CEC">
                    <h3>Campus Events Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-CSC">
                    <h3>Community Service Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-CAC">
                    <h3>Cultural Affairs Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-FAC">
                    <h3>Facilities Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-FSC">
                    <h3>Financial Support Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-SWC">
                    <h3>Student Wellness Commissioner</h3>
                </div>
                <div class="profiles-content" id="profiles-TSR">
                    <h3>Transfer Student Representative</h3>
                </div>
            </div>
            <!-- ENDORSEMENTS PAGE IS HERE  -->
            <div class="usac-section endorsements-container endorsements">
                <div class="endorsements-content" id="endorsements-President">
                    <h3 style="margin-top: 0em">President</h3>
                </div>
                <div class="endorsements-content" id="endorsements-IVP">
                    <h3>Internal Vice President</h3>
                </div>
                <div class="endorsements-content" id="endorsements-EVP">
                    <h3>External Vice President</h3>
                </div>
                <div class="endorsements-content" id="endorsements-Gen-Rep">
                    <h3>General Representative</h3>
                </div>
                <div class="endorsements-content" id="endorsements-AAC">
                    <h3>Academic Affairs Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-CEC">
                    <h3>Campus Events Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-CSC">
                    <h3>Community Service Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-CAC">
                    <h3>Cultural Affairs Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-FAC">
                    <h3>Facilities Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-FSC">
                    <h3>Financial Support Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-SWC">
                    <h3>Student Wellness Commissioner</h3>
                </div>
                <div class="endorsements-content" id="endorsements-TSR">
                    <h3>Transfer Student Representative</h3>
                </div>
            </div> 
            <!-- VIOLATIONS PAGE IS HERE  -->
            <div class="usac-section violations-container" id="violations-content">
            </div>
    <!-- MAIN CONTENT  DIV END  -->
        </div>
    <!-- PROFILES/VIOLATIONS/ENDORSEMENTS -->
    </div>
    <!-- RESULTS PAGE IS HERE  -->
    <div class="usac-section results-container">
        <div class="row results-video-container">
            <div class="medium-6 columns">
            <div class="flex-video widescreen">
                <iframe  src="https://www.youtube.com/embed/G88kSCCxZU8" frameborder="0" allowfullscreen></iframe>
            </div>
            </div>
            <div class="medium-6 columns">
            <div class="flex-video widescreen">
                <iframe  src="https://www.youtube.com/embed/qqDqmPoeJpg" frameborder="0" allowfullscreen></iframe>
            </div>
            </div>
        </div>
        <div class="results-head row">
            <h1 id="news-title">2016-17 USAC COUNCILMEMBERS</h1>
        </div>
        <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-5">
            <li id="results-President">
                <h2 class="results-position">President</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-IVP">
                <h2 class="results-position">Internal Vice President</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-EVP">
                <h2 class="results-position">External Vice President</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-AAC">
                <h2 class="results-position">Academic Affairs Commissioner</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-CEC">
                <h2 class="results-position">Campus Events Commissioner</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-Gen-Rep1">
                <h2 class="results-position">General Representative 1</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-Gen-Rep2">
                <h2 class="results-position">General Representative 2</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-Gen-Rep3">
                <h2 class="results-position">General Representative 3</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-CSC">
                <h2 class="results-position">Community Service Commissioner</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-CAC">
                <h2 class="results-position">Cultural Affairs Commissioner</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-FAC">
                <h2 class="results-position">Facilities Commissioner</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-FSC">
                <h2 class="results-position">Financial Support Commissioner</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-SWC">
                <h2 class="results-position">Student Wellness Commissioner</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-TSR">
                <h2 class="results-position">Transfer Student Representative</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-REF">
                <h2 class="results-position">REFERENDUM</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
        </ul>
       
    </div>
    <div class="usac-section news-container">
         <div class="row">
            <div class="results-gallery gallery">
            </div>
            <p class="caption" id="results-gallery-caption">&nbsp;</p>
        </div> 

        <h1 id="news-title">USAC Election Coverage</h1>
        <div id="stories">
            <?php
            global $post;
            $myposts = get_posts( array('tag_slug__and'  => 'usac-election-2016', 'posts_per_page' => '-1'));
            foreach( $myposts as $post ) :  
                setup_postdata($post); ?>
      <div class="row db-list">
          <?php if(has_post_thumbnail()): ?>
            <div class="small-12 columns hide-for-large hide-for-medium show-for-small text-center">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
            </div>
            <div class="medium-8 small-12 columns" style="padding-left:0">
          <?php endif; ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <span class="db-section-date">
                      <h4><?php the_category(', ');?></h4> 
                      <h4>|</h4> 
                      <h5><?php the_time('F j, g:i a');?> </h5>
                      </span>
                <h2><a href="<?php the_permalink(); ?>"><?php the_headline(); ?></a></h2>
          
          <div class="entry-content">
            <?php the_audio(); ?>
                <p><?php echo get_the_excerpt();  ?> <a href="<?php the_permalink(); ?>">Read more... </a></p>
        </div>
        <?php if(has_post_thumbnail()): ?>
        </div>
          <div class="medium-4 columns hide-for-small">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'db-category-thumb', array('class'=>'category-thumb') ); ?></a>
          </div>
        <?php endif; ?>
        </article>
      </div>
        <?php endforeach; ?>
        </div>
    </div>
</div></div>

<?php get_footer(); ?>
