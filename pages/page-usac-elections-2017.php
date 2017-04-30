<?php/*
Template Name: USAC Elections 2017
*/ ?>

<?php get_header(); ?>

<link rel="stylesheet" href="../css/usac-elections-2017.css" type="text/css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-hashchange/v1.3/jquery.ba-hashchange.min.js"></script>
<script>
    var candidates, keys, endcandidates;
    var positions = ["President", "IVP", "EVP", "Gen-Rep", "AAC", "CEC", "CSC", "CAC", "FAC", "FSC", "SWC", "TSR"];
    var currentContainer;
    document.addEventListener("DOMContentLoaded", function(event) {

        /*!
        * LABELAUTY jQuery Plugi
        *
        * @file: jquery-labelauty.js
        * @author: Francisco Neves (@fntneves)
        * @site: www.francisconeves.com
        * @license: MIT License
        */
        (function(f){function k(b){var a=0;b=b.clone().attr("style","position: absolute !important; top: -1000 !important; ").appendTo("body");a=b.width(!0);b.remove();return a}function g(b,a){b&&window.console&&window.console.log&&window.console.log("jQuery-LABELAUTY: "+a)}function l(b,a,c){var e;null==a?e=a="":(e=a[0],a=null==a[1]?e:a[1]);return 1==c?'<label for="'+b+'"><span class="labelauty-unchecked-image"></span><span class="labelauty-unchecked">'+e+'</span><span class="labelauty-checked-image"></span><span class="labelauty-checked">'+
        a+"</span></label>":'<label for="'+b+'"><span class="labelauty-unchecked-image"></span><span class="labelauty-checked-image"></span></label>'}f.fn.labelauty=function(b){var a=f.extend({development:!1,"class":"labelauty",label:!0,separator:"|",checked_label:"Checked",unchecked_label:"Unchecked",force_random_id:!1,minimum_width:!1,same_width:!0},b);return this.each(function(){var c=f(this),e=!0,d,b;if(!1===c.is(":checkbox")&&!1===c.is(":radio"))return this;c.addClass(a["class"]);d=c.attr("data-labelauty");
        e=a.label;!0===e&&(null==d||0===d.length?(b=[],b[0]=a.unchecked_label,b[1]=a.checked_label):(b=d.split(a.separator),2<b.length?(e=!1,g(a.development,"There's more than two labels. LABELAUTY will not use labels.")):1===b.length&&g(a.development,"There's just one label. LABELAUTY will use this one for both cases.")));c.css({display:"none"});c.removeAttr("data-labelauty");d=c.attr("id");if(a.force_random_id||null==d||""===d.trim()){var h=1+Math.floor(1024E3*Math.random());for(d="labelauty-"+h;0!==f(d).length;)h++,
        d="labelauty-"+h,g(a.development,"Holy crap, between 1024 thousand numbers, one raised a conflict. Trying again.");c.attr("id",d)}c.after(l(d,b,e));!1!==a.minimum_width&&c.next("label[for="+d+"]").css({"min-width":a.minimum_width});0!=a.same_width&&1==a.label&&(c=c.next("label[for="+d+"]"),e=k(c.find("span.labelauty-unchecked")),b=k(c.find("span.labelauty-checked")),e>b?c.find("span.labelauty-checked").width(e):c.find("span.labelauty-unchecked").width(b))})}})(jQuery);

        $(".db-next.hide-for-small").remove();
        // Show only the profiles
        $(".usac-section").hide();
        $(".profiles-container").show();
        currentContainer = "profiles";

        $(window).hashchange(function(){
            var hash = location.hash;
            // is substring
            if (hash.indexOf("#endorsements") > -1)
                switchSection("endorsements");
            else if (hash.indexOf("#profiles") > -1)
                switchSection("profiles");
            else if (hash.indexOf("#results") > -1)
                switchSection("results");
            else if (hash.indexOf("#violations") > -1)
                switchSection("violations");
            else if (hash.indexOf("#news") > -1)
                switchSection("news");
            else if (hash.indexOf("#polls") > -1)
                switchSection("polls");
            else if (hash.indexOf("#referenda") > -1)
                switchSection("referenda");
            else
                switchSection("profiles");
        });

        setSidebar();
        /* comment test */
        var url = "https://spreadsheets.google.com/feeds/list/1kpFjLUNbufAYkYMbyzuOpTTMpD5jECX7ld-fxl8kJzA/od6/public/values?alt=json";
        $.getJSON(url, function(data) {
            data = clean_google_sheet_json(data);
            $(":checkbox").labelauty();
            candidates = data;
            keys = _.keys(candidates[0]);
            var template = _.template($("script.candidates_main_template").html());
            for (var i = 0; i < positions.length; i ++) {
                c = _.where(candidates, {position: positions[i]});
                $("#profiles-"+positions[i]).append(template({input: c}));
            }
            $('.lazyYT').lazyYT();
        });

        var resultsData = "https://spreadsheets.google.com/feeds/list/1i27cJk1pzUSXs4ivyKA_FJ6tqA22Ouucsb0cRhdSqo0/od6/public/values?alt=json";
        $.getJSON(resultsData, function(candidates) {
            candidates = clean_google_sheet_json(candidates);
            var resultsTemplate = _.template($("#results_candidates_template").html());
            var c = _.where(candidates, {elected: "1"});
            for (var i = 0; i < c.length; i++) {
                $("#results-"+c[i].position+c[i].genrepnumber+" .results-content").html(resultsTemplate({rows: c[i]}));
            }
        });

    var violationsdata = "https://spreadsheets.google.com/feeds/list/1FE4OVSMFLqphLCOjOffcaE-UZk7nlED4R9Z_IkwAbuY/od6/public/values?alt=json";
        $.getJSON(violationsdata, function(json) {
            var data = clean_google_sheet_json(json);
            compile_and_insert_html('#violations_main_template', '#violations-content', data.reverse());
            compile_and_insert_html('#violations_sidebar_template', '#violations-sidebar', data);
        });

        // LOAD DATA FOR ENDORSEMENTS PAGE

        var endorsementsdata = "https://spreadsheets.google.com/feeds/list/1rStpA8RBa5oLmz9JBWzPOwvt_pFU7XPe8ziIYXdmZK0/od6/public/values?alt=json";
        $.getJSON(endorsementsdata, function(data) {
            var endorsetable = clean_google_sheet_json(data);
            var template = _.template($("#endorsements_main_template").html());
            for (var i = 0; i < positions.length; i ++) {
                var cand  = _.where(endorsetable, {position: positions[i]});
                $("#endorsements-"+positions[i]).append(template({rows: cand}));
            }
        });

        $("input:checkbox").on("click", function() {
            $(".element").hide();
            $("input:checked").each(function() {
                $("." + $(this).attr("id")).show();
            });
        });

        $(window).scroll(scrollFunction);
        $("#scrollup").click(function(event){
            $("html, body").animate({scrollTop: 0}, 600);
            return false;
        });

        $(window).hashchange();

        // LOAD DATA FOR RESULTS GALLERY

        var gallerydata = "https://spreadsheets.google.com/feeds/list/1-WiB1T4YWQ7BmXpb2Gh8dZBRO9KlcPnaJoSaDhODR38/od6/public/values?alt=json";
        $.getJSON(gallerydata, function(galleryjson) {
            var data = clean_google_sheet_json(galleryjson);
            var template = _.template($("#results_gallery_template").html());
            $(".results-gallery").html(template({rows: data}));

            var $gallery = $('.gallery').flickity({
            cellSelector: 'img',
            imagesLoaded: true,
            percentPosition: false,
            autoPlay: 2500,
            wrapAround: true
            });
        var $caption = $('.caption');
        // Flickity instance
        var flkty = $gallery.data('flickity');

        $gallery.on('cellSelect', function() {
            // set image caption using img's alt
            $caption.text(flkty.selectedElement.alt)
        });
    });


    });

    function scrollFunction() {
        setSidebar();
        if ($(this).scrollTop() < 200) {
            $('#scrollup').hide();
        } else {
            $('#scrollup').show();
        }

        var currentScroll = $(this).scrollTop() + 100, currentSection;

        var content;
        if (currentContainer == "profiles")
            content = ".profiles-content";
        else if (currentContainer == "violations")
            content = ".element.violation";
        else if (currentContainer == "endorsements")
            content = ".endorsements-content";
        else
            return;  // No scroll highlight for news&result
        $(content).each(function(){
            if ($(this).offset().top - 1 < currentScroll)
                currentSection = $(this);
        });
        if (!currentSection)
            return;

        $(".side-nav .active").removeClass('active');
        $("[href=#" + currentSection.attr('id') + "]").addClass('active');
    }

    function setSidebar() {
        $el = $("#scrollbar");
        if ($(this).scrollTop() > 600 && $el.css('position') != "fixed") {
            $el.css({"position": "fixed", "top": "80px"});
        }
        if ($(this).scrollTop() < 600 && $el.css('position') == "fixed") {
            $el.css({"position": "relative", "top": "0px"});
        }
    }

    function switchSection(section) {
        // section must be either profiles, violations, results, or endorsements
        $("." + currentContainer + "-container").hide();
        currentContainer = section;
        $("." + currentContainer + "-container").show();

        if (currentContainer === "endorsements" || currentContainer === "polls" || currentContainer === "referenda") {
            $("#filter").hide();
        } else {
            $("#filter").show();
        }

        if(currentContainer === "results" || currentContainer === "news") {
            $("#PVE").hide();
        } else {
            $("#PVE").show();
        }
        $(".top-bar-section>.right>li.active").removeClass('active');
        $(".top-bar-section a[href='#" + currentContainer + "']").parent().addClass('active');
    }

    // Takes in template id, compiles the template to html using data json object
    // and then inserts it into given div id
    function compile_and_insert_html(template_id, div_id, data) {
        var template = _.template($(template_id).html());
        var template_html = template({
            'rows': data
        });
        $(div_id).html(template_html);
    }


    // takes in JSON object from google sheets and turns into a json formatted
    // this way based on the original google Doc
    // [
    //  {
    //      'column1': info1,
    //      'column2': info2,
    //  }
    // ]
    function clean_google_sheet_json(data){
        var formatted_json = [];
        var elem = {};
        var real_keyname = '';
        $.each(data.feed.entry, function(i, entry) {
            elem = {};
            $.each(entry, function(key, value){
                // fields that were in the spreadsheet start with gsx$
                if (key.indexOf("gsx$") == 0)
                {
                    // get everything after gsx$
                    real_keyname = key.substring(4);
                    elem[real_keyname] = value['$t'];
                }
            });
            formatted_json.push(elem);
        });
        return formatted_json;
    }
</script>
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
                        <% if(candidate.slate == "BU") {%>
                            <img class="slate-logo" src="/img/usac-2015.BU.logo.svg"/>
                        <% } else if (candidate.slate == "DAAP") { %>
                            <img class="slate-logo" src="http://dailybruin.com/images/2017/04/daap.nobackground.png"/>
                        <% } else if (candidate.slate == "IND") { %>
                            <img class="slate-logo" src="/img/usac-2015.IND.logo.svg"/>
                        <% } else { %>
                            <img class="slate-logo" src="/img/usac-2016.<%- candidate.slate %>.logo.png"/>
                        <% } %>
                        <h2 class="candidate-name" style="vertical-align:middle;"><%- candidate.name %></h2>
                <hr>
                <!-- <p><%- candidate.yearmajor %></p> -->
                <div class="row">
                    <div class="large-12 columns platforms">
                        <h2>Platforms</h2>
                        <ul>
                            <% _.each(candidate.platforms.split("\n"), function(p) { %>
                            <li><%- p %></li>
                            <% }); %>
                        </ul>
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
                       <% if(candidate.slate == "BU") {%>
                            <img class="slate-logo" src="/img/usac-2015.BU.logo.svg"/>
                        <% } else if (candidate.slate == "DAAP") { %>
                            <img class="slate-logo" src="http://dailybruin.com/images/2017/04/daap.nobackground.png"/>
                        <% } else if (candidate.slate == "IND") { %>
                            <img class="slate-logo" src="/img/usac-2015.IND.logo.svg"/>
                        <% } else { %>
                            <img class="slate-logo" src="/img/usac-2016.<%- candidate.slate %>.logo.png"/>
                        <% } %>                    <h2 class="endorsed-name" style="vertical-align:middle;"><%- candidate.name %></h2>
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
                       <% if(candidate.slate == "BU") {%>
                            <img class="slate-logo" src="/img/usac-2015.BU.logo.svg"/>
                        <% } else if (candidate.slate == "DAAP") { %>
                            <img class="slate-logo" src="http://dailybruin.com/images/2017/04/daap.nobackground.png"/>
                        <% } else if (candidate.slate == "IND") { %>
                            <img class="slate-logo" src="/img/usac-2015.IND.logo.svg"/>
                        <% } else { %>
                            <img class="slate-logo" src="/img/usac-2016.<%- candidate.slate %>.logo.png"/>
                        <% } %>
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
            <% if(candidate.position !== "GIF" && candidate.position !== "DB" && candidate.position !== "SJR" && candidate.position !== "WELL") {%>
                       <% if(candidate.slate == "BU") {%>
                            <img class="slate-logo" src="/img/usac-2015.BU.logo.svg"/>
                        <% } else if (candidate.slate == "DAAP") { %>
                            <img class="slate-logo" src="http://dailybruin.com/images/2017/04/daap.nobackground.png"/>
                        <% } else if (candidate.slate == "IND") { %>
                            <img class="slate-logo" src="/img/usac-2015.IND.logo.svg"/>
                        <% } else { %>
                            <img class="slate-logo" src="/img/usac-2016.<%- candidate.slate %>.logo.png"/>
                        <% } %>            <% } %>
            <h2 class="results-name"><%- candidate.name %></h2>
            <% if (candidate.position !== "Gen-Rep") {%>
             <p class="results-percent"><%- candidate.percent %>% of the vote</p>
            <% } %>
          <!--  <% if(candidate.position != "Gen-Rep") {%>-->

           <!-- <% } %>-->
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
      <img src="http://dailybruin.com/images/2017/04/USACHEADER.png"/>
    </div>
    <div class="row">
    <nav class="top-bar" data-topbar role="navigation">
      <section class="top-bar-section">
        <!-- TOP Nav Section -->
        <ul class="right">
            <li class="active"><a href="#profiles">Profiles</a></li>
            <!-- <li><a href="#referenda">Referenda</a></li> -->
            <li><a href="#violations">Violations</a></li>
            <li><a href="#endorsements">Endorsements</a></li>
            <!-- <li><a href="#polls">Polls</a></li> -->
            <!-- <li><a href="#results">Results</a></li> --> <!-- uncomment when results come out -->
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
                    <input id="DAAP" type="checkbox" checked="yes" data-labelauty="Defend Affirmative Action Party"/>
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
              <p>Each year, the Daily Bruin Editorial Board interviews every candidate running in the undergraduate student government election, and endorses one candidate for each position based on platform quality, candidate qualifications and vision for the respective office. Here are the board&#39;s endorsements for this year’s USAC candidates.</p>
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
    <!-- POLLS PAGE IS HERE taken out for 2017 -->
    <!--
    <div class="usac-section polls-container" id="polls-content">
        <iframe src="https://docs.google.com/a/media.ucla.edu/forms/d/17_iGMfm_Jz7pDHbBhWAxcSc3NcVDYI25Py9g4SCV9Zc/viewform?embedded=true" width="100%" height="700" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
    </div>
    -->
    <!-- REFERENDA PAGE IS HERE taken out for 2017 -->
    <!--
    <div class="usac-section referenda-container" id="referenda-container">
        <div class="article-content">
            <h1 id="referenda-top-title">Students to vote on four referenda during election week</h1>
            <p class="byline">BY RUPAN BHARANIDARAN, JODUTT BASWARI AND NICHOLAS YU</p>
            <p>Students can vote to increase their quarterly fees to support different referenda in the upcoming undergraduate student government election. The four referenda on the ballot this year aim to fund social justice programs, sustainability efforts, student wellness initiatives and UCLA Student Media. All fees will be adjusted for inflation.</p>
            <p>For a referendum to pass, at least 20 percent of the student body must vote in the USAC election and the majority out of those who vote must vote in favor of the referendum. Voting begins on MyUCLA on Monday, and the polls will close Friday. The USAC Election Board will announce results that night at 9 p.m.</p>

            <h1 class="referendum-title">The Green Initiative Fund Referendum</h1>
            <p>The Green Initiative Fund Referendum, a referendum passed in 2008 but set to expire in 2018, funds projects promoting environmental sustainability on campus, such as the JazzReggae Festival and Ecochella. The revised language of the referendum on the ballot will remove the expiration date and allow the referendum to exist indefinitely. The referendum, if passed, would maintain the current cost of $4.80 per quarter.</p>
            <a href="http://www.socialjusticebruins.com/">
                <h1 class="referendum-title">Social Justice Referendum of 2016</h1>
            </a>
            <p>The Social Justice Referendum of 2016 aims to increase funding for a variety of retention and outreach programs, including Community Programs Office-affiliated groups, the Academic Advancement Program and the Academic Affairs Commission, among others. It also aims to keep the John Wooden Center open 24 hours per day. The referendum, if passed, would cost $24.99 per quarter for each undergraduate student.</p>
            <a href="http://www.bruinwellness.com/">
                <h1 class="referendum-title">#UCLAWellness Referendum</h1>
            </a>
            <p>The #UCLAwellness Referendum aims to fund three undergraduate student government offices, UCLA Counseling and Psychological Services, or CAPS, and the USAC Contingency Programming Fund, a fund to which student groups and student government offices can apply to. The referendum, if passed, would cost each undergraduate student $6 per quarter in 2017, $12 per quarter in 2018 and $18 per quarter beginning fall 2019.</p>

            <a href="http://campaign.dailybruin.com/">
                <h1 class="referendum-title">The Daily Bruin and Bruinwalk.com Referendum</h1>
            </a>
            <p id="ref-last-p">The Daily Bruin and Bruinwalk.com Referendum aims to fund the Daily Bruin, Bruinwalk, a professor and course rating website specific to UCLA, and other UCLA Student Media organizations. The referendum, if passed, would cost $3 per quarter.</p>
            <hr/>
            <p>Email Bharanidaran at rbharanidaran@dailybruin.com. Email Baswari at jbaswari@dailybruin.com. Email Yu at nyu1@media.ucla.edu.</p>
        </div>
    </div>
    -->
    <!-- RESULTS PAGE IS HERE  -->
    <div class="usac-section results-container">
        <!-- VIDEO IS HERE -->
        <!--<div class="row results-video-container">
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
        </div>-->

        <div class="results-head row">
            <h1 id="news-title">2017-18 USAC COUNCILMEMBERS</h1>
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
            <!--
            <li id="results-GIF">
                <h2 class="results-position">The Green Initiative Fund Referendum</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-SJR">
                <h2 class="results-position">Social Justice Referendum of 2016</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-WELL">
                <h2 class="results-position">#UCLAwellness Referendum</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            <li id="results-DB">
                <h2 class="results-position">The Daily Bruin and Bruinwalk.com Referendum</h2>
                <div class="results-content">
                    <img src="http://placehold.it/200x300"/>
                    <p class="results-name">Pending</p>
                    <p class="results-percent">--%</p>
                </div>
            </li>
            -->
        </ul>

    </div>

    <div class="usac-section news-container">
        <h1 id="news-title">USAC Election Coverage</h1>
        <div id="stories">
            <?php
            global $post;
            $myposts = get_posts( array('tag_slug__and'  => 'usac-election-2017', 'posts_per_page' => '-1'));
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
    </div>
</div>

<?php get_footer(); ?>
