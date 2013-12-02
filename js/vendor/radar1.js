d3.json('/js/admissions-data/data.json', function (data) {

    //console.log(data);

    var series,
    hours,
    minVal,
    maxVal,
    w = 800,
    h = 500,
    vizPadding = {
        top: 10,
        right: 0,
        bottom: 15,
        left: 0
    },
    radius,
    radiusLength;
    ruleColor = "#CCC",
    isdots = false;

    var loadViz = function (year) {
        loadData(year);
        buildBase();
        setScales();
        addAxes();
        draw();
        refresh(year);
    };



    var loadData = function (year) {


        series = [
            [],
            [],
            []
        ];


        hours = ["Asian", "Chicano/Latino", "White", "African American", "Unknown", "American Indian", "Pacific Islander"];

        var max = 20000;

        for (i = 0; i < 10; i += 1) {
            if (data.nodes[i].year == year) {
                if ($("input[type='checkbox'][name='sir']").is(':checked')) {	
	                for (var key in data.nodes[i].sir) {
    	                var obj = data.nodes[i].sir[key];
        	            for (var prop in obj) {
            	            series[2].push(obj[prop]);
                	        //console.log (prop + " = " + obj[prop]); 
                    	}
	                }
	                max = 3000;
    			}
                if ($("input[type='checkbox'][name='admitted']").is(':checked')) {
	                for (var key in data.nodes[i].admit) {
    	                var obj = data.nodes[i].admit[key];
        	            for (var prop in obj) {
            	            series[1].push(obj[prop]);
                	        //console.log (prop + " = " + obj[prop]); 
                    	}
                	}
                	max = 5000;
                }
            	if ($("input[type='checkbox'][name='applied']").is(':checked')) {
                	for (var key in data.nodes[i].apps) {
                    	var obj = data.nodes[i].apps[key];
	                    for (var prop in obj) {
    	                    series[0].push(obj[prop]);
        	                //console.log (prop + " = " + obj[prop]); 
            	        }
                	}
                	max = 20000;
                }
            }
        }
        mergedArr = series[0].concat(series[1], series[2]);
        minVal = d3.min(mergedArr);
        maxVal = d3.max(mergedArr);
        //give 25% of range as buffer to top
        console.log(max);
        maxVal = max;
        minVal = 0;

        //to complete the radial lines
        for (i = 0; i < series.length; i += 1) {
            series[i].push(series[i][0]);

        }
    };

    var buildBase = function () {
        var viz = d3.select("#viz")
            .append('svg:svg')
            .attr('width', w)
            .attr('height', h)
            .attr('class', 'vizSvg')

        viz.append("svg:rect")
            .attr('id', 'axis-separator')
            .attr('x', 0)
            .attr('y', 0)
            .attr('height', 0)
            .attr('width', 0)
            .attr('height', 0);

        vizBody = viz.append("svg:g")
            .attr('id', 'body');
    };

    setScales = function () {
        var heightCircleConstraint,
        widthCircleConstraint,
        circleConstraint,
        centerXPos,
        centerYPos;

        //need a circle so find constraining dimension
        heightCircleConstraint = h - vizPadding.top - vizPadding.bottom;
        widthCircleConstraint = w - vizPadding.left - vizPadding.right;
        circleConstraint = d3.min([
        heightCircleConstraint, widthCircleConstraint]);

        radius = d3.scale.linear().domain([minVal, maxVal])
            .range([0, (circleConstraint / 2)]);
        radiusLength = radius(maxVal);

        //attach everything to the group that is centered around middle
        centerXPos = widthCircleConstraint / 2 + vizPadding.left;
        centerYPos = heightCircleConstraint / 2 + vizPadding.top;

        vizBody.attr("transform",
            "translate(" + centerXPos + ", " + centerYPos + ")");
    };

    addAxes = function () {
        var radialTicks = radius.ticks(5),
            i,
            circleAxes,
            lineAxes;

        vizBody.selectAll('.circle-ticks').remove();
        vizBody.selectAll('.line-ticks').remove();

        circleAxes = vizBody.selectAll('.circle-ticks')
            .data(radialTicks)
            .enter().append('svg:g')
            .attr("class", "circle-ticks");

        circleAxes.append("svg:circle")
            .attr("r", function (d, i) {
            return radius(d);
        })
            .attr("class", "circle")
            .style("stroke", ruleColor)
            .style("fill", "none");

        /*circleAxes.append("svg:text")
            .attr("text-anchor", "middle")
            .attr("dy", function (d) {
            return -1 * radius(d);
        })
            .attr("style", "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;")
            .text(String);*/

        lineAxes = vizBody.selectAll('.line-ticks')
            .data(hours)
            .enter().append('svg:g')
            .attr("transform", function (d, i) {
            return "rotate(" + ((i / 7 * 360) - 90) +
                ")translate(" + radius(maxVal) + ")";
        })
            .attr("class", "line-ticks");

        lineAxes.append('svg:line')
            .attr("x2", -1 * radius(maxVal))
            .style("stroke", ruleColor)
            .style("fill", "none");

        lineAxes.append('svg:text')
            .text(String)
            .attr("text-anchor", "middle")
            .attr("transform", function (d, i) {
            return (i / hours.length * 360) < 180 ? null : "rotate(180)";
        })
            .attr("style", "font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;");
    };

    var draw = function () {
        var groups,
        lines,
        linesToUpdate;

        highlightedDotSize = 4;

        groups = vizBody.selectAll('.series')
            .data(series);
        groups.enter().append("svg:g")
            .attr('class', 'series')
            .style('fill', function (d, i) {
            if (i === 0) {
                return "green";
            } else {
                return "blue";
            }
        })
            .style('stroke', function (d, i) {
            switch (i) {
                case 0:
                    return "#ffd8d4";
                    break;
                case 1:
                    return "#f9a69c";
                    break;
                case 2:
                    return "#f36656";
                    break;
                default:
                    return "grey";
                    break;
            }
        });
        groups.exit().remove();

        lines = groups.append('svg:path')
            .attr("class", "line")
            .attr("d", d3.svg.line.radial()
            .radius(function (d) {
            return 0;
        })
            .angle(function (d, i) {
            if (i === 7) {
                i = 0;
            } //close the line
            return (i / 7) * 2 * Math.PI;
        }))
            .style("stroke-width", 3)
            .style("fill", function (d, i) {
            switch (i) {
                case 0:
                    return "#ffd8d4";
                    break;
                case 1:
                    return "#f9a69c";
                    break;
                case 2:
                    return "#f36656";
                    break;
                default:
                    return "grey";
                    break;
            }
        });


        groups.selectAll(".curr-point")
            .data(function (d) {
            return [d[0]];
        })
            .enter().append("svg:circle")
            .attr("class", "curr-point")
            .attr("r", 0);

        groups.selectAll(".clicked-point")
            .data(function (d) {
            return [d[0]];
        })
            .enter().append("svg:circle")
            .attr('r', 0)
            .attr("class", "clicked-point");

        lines.attr("d", d3.svg.line.radial()
            .radius(function (d) {
            return radius(d);
        })
            .angle(function (d, i) {
            if (i === 7) {
                i = 0;
            } //close the line
            return (i / 7) * 2 * Math.PI;
        }));

        
        dots = groups.selectAll("circle");
        if (!isdots) {
        var theta = 2 * Math.PI / 7;
        for (var j = 0; j < 3; j++) {
            dots.data(series[j]).enter().append("svg:circle")
            .attr("class", function(d) {
                return "dot" + j;
            })
            .attr("fill", "rgba(0,0,0,0.5)")
            .attr("style", "position: relative; z-index: 50; stroke: 5px;")
            .attr("r", 5)
            .append("svg:title").text(function(d) { return d; });
            groups.exit().remove();
        }
        isdots = true;
        }
    };

    function refresh(year) {
        loadData(year);
		setScales();


        var viz = d3.select("#viz");

        var groups,
        lines,
        linesToUpdate;

        highlightedDotSize = 4;

        lines = viz.selectAll('.line')
            .data(series);

        lines.transition()
            .attr("d", d3.svg.line.radial()
            .radius(function (d) {
            return radius(d);
            })
            .angle(function (d, i) {
            if (i === 7) {
                i = 0;
            } //close the line
            return (i / 7) * 2 * Math.PI;
            })
          );

        var theta = 2 * Math.PI / 7;
        dots0 = viz.selectAll('.dot0').data(series[0]);
        dots0.transition()
            .attr("cx", function(d, i) { return (radius(d) * Math.cos((i * theta) - Math.PI/2)); })
            .attr("cy", function(d, i) { return (radius(d) * Math.sin((i * theta) - Math.PI/2)); });

        dots1 = viz.selectAll('.dot1').data(series[1]);
        dots1.transition()
            .attr("cx", function(d, i) { return (radius(d) * Math.cos((i * theta) - Math.PI/2)); })
            .attr("cy", function(d, i) { return (radius(d) * Math.sin((i * theta) - Math.PI/2)); });

        dots2 = viz.selectAll('.dot2').data(series[2]);
        dots2.transition()
            .attr("cx", function(d, i) { return (radius(d) * Math.cos((i * theta) - Math.PI/2)); })
            .attr("cy", function(d, i) { return (radius(d) * Math.sin((i * theta) - Math.PI/2)); });

		$('.dot0').css('display', 'block');
		$('.dot1').css('display', 'block');
		$('.dot2').css('display', 'block');

		if (!$("input[type='checkbox'][name='applied']").is(':checked')) {
			$('.dot0').css('display', 'none');
		}
		if (!$("input[type='checkbox'][name='admitted']").is(':checked')) {
			$('.dot1').css('display', 'none');
		}
		if (!$("input[type='checkbox'][name='sir']").is(':checked')) {
			$('.dot2').css('display', 'none');
		}

    };

var margin = {top: 20, right: 20, bottom: 30, left: 0},
    width = 790 - margin.left - margin.right,
    height = 150 - margin.top - margin.bottom;

var x = d3.scale.linear()
    .range([0, width]);

var y = d3.scale.linear()
    .range([height, 0]);

var formatx = d3.format();

var formaty = d3.format(",");

var area = d3.svg.area()
    .x(function(d) { return x(d.year); })
    .y0(height)
    .y1(function(d) { return y(d.total); });

var svg = d3.select("#button").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

  var hoola = [{"year": 2003, "total": 36384}, {"year": 2004, "total": 35387}, {"year": 2005, "total": 34943}, {"year": 2006, "total": 39032}, {"year": 2007, "total": 41484}, {"year": 2008, "total": 44360}, {"year": 2009, "total": 46040}, {"year": 2010, "total": 47059}, {"year": 2011, "total": 48578}, {"year": 2012, "total": 52231}];
  

  x.domain(d3.extent(hoola, function(d) { return d.year; }));
  y.domain([0, d3.max(hoola, function(d) { return d.total; })]);

  svg.append("path")
      .datum(hoola)
      .attr("class", "area")
      .attr("style", "fill: rgba(0,0,0,0.3)")
      .attr("d", area);


//});

$('#refresh').click(function() {
    var i = 2003;
    var tmr = setInterval(function() {
        if (i < 2013) {
            refresh(i);
            $('#chooser').val(i);
            $('#year').html('<span>Current year: </span>' + i);
            $('#slider').slider({value:i});
            i++;
        } else {
            clearInterval(tmr);
        }
    }, 300);
}); 

$("input[type='checkbox']").change(function() {
	refresh($('#chooser').val());	
});

$('#chooser').change(function() {
    var ss = $(this).val();
    refresh(ss);
});

        $( "#slider" ).slider({
            value:2012,
            min: 2003,
            max: 2012,
            step: 1,
            slide: function( event, ui ) {
                $( "#chooser" ).val( ui.value );
                $('#year').html('<span>Current year: </span>' + ui.value);
                refresh(ui.value);
            }
        });
        $( "#chooser" ).val($( "#slider" ).slider( "value" ) );
console.log('done');

//});
   loadViz(2012);


});
