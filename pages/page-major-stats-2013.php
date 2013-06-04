<?php /**
Template Name: Major_Stats_2013
**/?>

<?php get_header(); ?>
<div class="row" id="single-post">
	<div class="span12">
		<style>
			/* http://meyerweb.com/eric/tools/css/reset/ 
			   v2.0 | 20110126
			   License: none (public domain)
			*/

			html, body, div, span, applet, object, iframe,
			h1, h2, h3, h4, h5, h6, p, blockquote, pre,
			a, abbr, acronym, address, big, cite, code,
			del, dfn, em, img, ins, kbd, q, s, samp,
			small, strike, strong, sub, sup, tt, var,
			b, u, i, center,
			dl, dt, dd, ol, ul, li,
			fieldset, form, label, legend,
			table, caption, tbody, tfoot, thead, tr, th, td,
			article, aside, canvas, details, embed, 
			figure, figcaption, footer, header, hgroup, 
			menu, nav, output, ruby, section, summary,
			time, mark, audio, video {
				margin: 0;
				padding: 0;
				border: 0;
				font-size: 100%;
				font: inherit;
				vertical-align: baseline;
			}
			/* HTML5 display-role reset for older browsers */
			article, aside, details, figcaption, figure, 
			footer, header, hgroup, menu, nav, section {
				display: block;
			}
			body {
				line-height: 1;
			}
			ol, ul {
				list-style: none;
			}
			blockquote, q {
				quotes: none;
			}
			blockquote:before, blockquote:after,
			q:before, q:after {
				content: '';
				content: none;
			}
			table {
				border-collapse: collapse;
				border-spacing: 0;
			}

			html, body {
				font-family: Helvetica, Arial, sans-serif;
			}

			#wrapper {
				width: 960px;
				margin: 0 auto 0 auto;
			}

			#numbers {
				height: 215px;
				width: 960px;
				padding-left: 50px;
				background-color: #6ecfdb;
				background-image: linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -o-linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -moz-linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -webkit-linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -ms-linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -webkit-gradient(
					linear,
					left bottom,
					right bottom,
					color-stop(0, #d6f2f5),
					color-stop(0.75, #6ecfdb)
				);
			}

			#numbers td {
				width: 215px;
				text-align: center;
				vertical-align: middle;
				font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
				font-size: 50px;
				font-weight: bold;
			}

			#numbers td p {
				font-size: 20px;
			}


			#leftTransition {
				width: 0;
				height: 0;
				border-top: 0px;
				border-left: 50px solid transparent;
				border-top: 50px solid #6ecfdb;
				float: left;
			}

			#rightTransition {
				width: 0;
				height: 0;
				border-top: 0px;
				border-right: 50px solid transparent;
				border-top: 50px solid #29afbf;
				float: right;
			}

			#transition {
				width: 860px;
				height: 50px;
				margin-left: 50px;
				background-color: #29afbf;
				background-image: linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -o-linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -moz-linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -webkit-linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -ms-linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -webkit-gradient(
					linear,
					left bottom,
					right bottom,
					color-stop(0, #6ecfdb),
					color-stop(0.75, #29afbf)
				);
			}

			#axis {
				width: 860px;
				height: 50px;
				margin-left: 50px;
				background-color: #6ecfdb;
				background-image: linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -o-linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -moz-linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -webkit-linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -ms-linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -webkit-gradient(
					linear,
					left bottom,
					right bottom,
					color-stop(0, #d6f2f5),
					color-stop(0.75, #6ecfdb)
				);
			}

			#axis li {
				float: left;
				width: 214px;
				text-align: center;
				line-height: 50px;
				font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
				font-size: 20px;
				font-weight: bold;
			}

			#axis li:last-child {
				border-right: none;
				width: 215px;
			}

			#axisBottom {
				width: 860px;
				margin-left: 50px;
				height: 1px;
				background-color: #29afbf;
				background-image: linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -o-linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -moz-linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -webkit-linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -ms-linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -webkit-gradient(
					linear,
					left bottom,
					right bottom,
					color-stop(0, #6ecfdb),
					color-stop(0.75, #29afbf)
				);
				box-shadow: 5px 5px 5px #888;
			}

			#leftContainer {
				width: 0;
				height: 0;
				border-top: 0px;
				border-left: 50px solid transparent;
				border-bottom: 300px solid #d6f2f5;
				float: left;
			}

			#rightContainer {
				width: 0;
				height: 0;
				border-top: 0px;
				border-right: 50px solid transparent;
				border-bottom: 300px solid #6ecfdb;
				float: right;
			}

			#graphContainer {
				height: 300px;
				width: 860px;
				position: relative;
				margin-left: 50px;
				background-color: #6ecfdb;
				background-image: linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -o-linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -moz-linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -webkit-linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -ms-linear-gradient(left , #d6f2f5 0%, #6ecfdb 75%);
				background-image: -webkit-gradient(
					linear,
					left bottom,
					right bottom,
					color-stop(0, #d6f2f5),
					color-stop(0.75, #6ecfdb)
				);
			}

			#bottomContainer {
				width: 960px;
				height: 10px;
				background-color: #29afbf;
				background-image: linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -o-linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -moz-linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -webkit-linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -ms-linear-gradient(left , #6ecfdb 0%, #29afbf 75%);
				background-image: -webkit-gradient(
					linear,
					left bottom,
					right bottom,
					color-stop(0, #6ecfdb),
					color-stop(0.75, #29afbf)
				);
			}

			#graphContainer img{
				position: absolute;
				height: 50px;
			}

			img#loader {
				position: absolute;
				width: 32px;
				height: 32px;
				left: 50%;
				top: 50%;
				margin-left: -16px;
				margin-top: -16px;
			}

			.graphColumn {
				float: left;
				width: 300px;
			}
		</style>
		<style>
			table{
				width:100%;
				font-size: 12px;
			}
			thead{
				border-collapse-bottom: 2px;
			}
			td,th{
				text-align: center;
				padding: 10px;
				width:50px;
			}
			table.sortable thead {
			    background-color:#eee;
			    color:#666666;
			    font-weight: bold;
			    cursor: default;
			}
			/*table tbody tr:nth-child(2n) td {
			  background: red;
			}
			table tbody tr:nth-child(2n+1) td {
			  background: blue;
			}*/
		</style>
		<script id="sort_table">
			/*
			  SortTable
			  version 2
			  7th April 2007
			  Stuart Langridge, http://www.kryogenix.org/code/browser/sorttable/

			  Thanks to many, many people for contributions and suggestions.
			  Licenced as X11: http://www.kryogenix.org/code/browser/licence.html
			  This basically means: do what you want with it.
			*/


			var stIsIE = /*@cc_on!@*/false;

			sorttable = {
			  init: function() {
			    // quit if this function has already been called
			    if (arguments.callee.done) return;
			    // flag this function so we don't do the same thing twice
			    arguments.callee.done = true;
			    // kill the timer
			    if (_timer) clearInterval(_timer);

			    if (!document.createElement || !document.getElementsByTagName) return;

			    sorttable.DATE_RE = /^(\d\d?)[\/\.-](\d\d?)[\/\.-]((\d\d)?\d\d)$/;

			    forEach(document.getElementsByTagName('table'), function(table) {
			      if (table.className.search(/\bsortable\b/) != -1) {
			        sorttable.makeSortable(table);
			      }
			    });

			  },

			  makeSortable: function(table) {
			    if (table.getElementsByTagName('thead').length == 0) {
			      // table doesn't have a tHead. Since it should have, create one and
			      // put the first table row in it.
			      the = document.createElement('thead');
			      the.appendChild(table.rows[0]);
			      table.insertBefore(the,table.firstChild);
			    }
			    // Safari doesn't support table.tHead, sigh
			    if (table.tHead == null) table.tHead = table.getElementsByTagName('thead')[0];

			    if (table.tHead.rows.length != 1) return; // can't cope with two header rows

			    // Sorttable v1 put rows with a class of "sortbottom" at the bottom (as
			    // "total" rows, for example). This is B&R, since what you're supposed
			    // to do is put them in a tfoot. So, if there are sortbottom rows,
			    // for backwards compatibility, move them to tfoot (creating it if needed).
			    sortbottomrows = [];
			    for (var i=0; i<table.rows.length; i++) {
			      if (table.rows[i].className.search(/\bsortbottom\b/) != -1) {
			        sortbottomrows[sortbottomrows.length] = table.rows[i];
			      }
			    }
			    if (sortbottomrows) {
			      if (table.tFoot == null) {
			        // table doesn't have a tfoot. Create one.
			        tfo = document.createElement('tfoot');
			        table.appendChild(tfo);
			      }
			      for (var i=0; i<sortbottomrows.length; i++) {
			        tfo.appendChild(sortbottomrows[i]);
			      }
			      delete sortbottomrows;
			    }

			    // work through each column and calculate its type
			    headrow = table.tHead.rows[0].cells;
			    for (var i=0; i<headrow.length; i++) {
			      // manually override the type with a sorttable_type attribute
			      if (!headrow[i].className.match(/\bsorttable_nosort\b/)) { // skip this col
			        mtch = headrow[i].className.match(/\bsorttable_([a-z0-9]+)\b/);
			        if (mtch) { override = mtch[1]; }
				      if (mtch && typeof sorttable["sort_"+override] == 'function') {
				        headrow[i].sorttable_sortfunction = sorttable["sort_"+override];
				      } else {
				        headrow[i].sorttable_sortfunction = sorttable.guessType(table,i);
				      }
				      // make it clickable to sort
				      headrow[i].sorttable_columnindex = i;
				      headrow[i].sorttable_tbody = table.tBodies[0];
				      dean_addEvent(headrow[i],"click", sorttable.innerSortFunction = function(e) {

			          if (this.className.search(/\bsorttable_sorted\b/) != -1) {
			            // if we're already sorted by this column, just
			            // reverse the table, which is quicker
			            sorttable.reverse(this.sorttable_tbody);
			            this.className = this.className.replace('sorttable_sorted',
			                                                    'sorttable_sorted_reverse');
			            this.removeChild(document.getElementById('sorttable_sortfwdind'));
			            sortrevind = document.createElement('span');
			            sortrevind.id = "sorttable_sortrevind";
			            sortrevind.innerHTML = stIsIE ? '&nbsp<font face="webdings">5</font>' : '&nbsp;&#x25B4;';
			            this.appendChild(sortrevind);
			            return;
			          }
			          if (this.className.search(/\bsorttable_sorted_reverse\b/) != -1) {
			            // if we're already sorted by this column in reverse, just
			            // re-reverse the table, which is quicker
			            sorttable.reverse(this.sorttable_tbody);
			            this.className = this.className.replace('sorttable_sorted_reverse',
			                                                    'sorttable_sorted');
			            this.removeChild(document.getElementById('sorttable_sortrevind'));
			            sortfwdind = document.createElement('span');
			            sortfwdind.id = "sorttable_sortfwdind";
			            sortfwdind.innerHTML = stIsIE ? '&nbsp<font face="webdings">6</font>' : '&nbsp;&#x25BE;';
			            this.appendChild(sortfwdind);
			            return;
			          }

			          // remove sorttable_sorted classes
			          theadrow = this.parentNode;
			          forEach(theadrow.childNodes, function(cell) {
			            if (cell.nodeType == 1) { // an element
			              cell.className = cell.className.replace('sorttable_sorted_reverse','');
			              cell.className = cell.className.replace('sorttable_sorted','');
			            }
			          });
			          sortfwdind = document.getElementById('sorttable_sortfwdind');
			          if (sortfwdind) { sortfwdind.parentNode.removeChild(sortfwdind); }
			          sortrevind = document.getElementById('sorttable_sortrevind');
			          if (sortrevind) { sortrevind.parentNode.removeChild(sortrevind); }

			          this.className += ' sorttable_sorted';
			          sortfwdind = document.createElement('span');
			          sortfwdind.id = "sorttable_sortfwdind";
			          sortfwdind.innerHTML = stIsIE ? '&nbsp<font face="webdings">6</font>' : '&nbsp;&#x25BE;';
			          this.appendChild(sortfwdind);

				        // build an array to sort. This is a Schwartzian transform thing,
				        // i.e., we "decorate" each row with the actual sort key,
				        // sort based on the sort keys, and then put the rows back in order
				        // which is a lot faster because you only do getInnerText once per row
				        row_array = [];
				        col = this.sorttable_columnindex;
				        rows = this.sorttable_tbody.rows;
				        for (var j=0; j<rows.length; j++) {
				          row_array[row_array.length] = [sorttable.getInnerText(rows[j].cells[col]), rows[j]];
				        }
				        /* If you want a stable sort, uncomment the following line */
				        //sorttable.shaker_sort(row_array, this.sorttable_sortfunction);
				        /* and comment out this one */
				        row_array.sort(this.sorttable_sortfunction);
			          row_array.reverse();

				        tb = this.sorttable_tbody;
				        for (var j=0; j<row_array.length; j++) {
				          tb.appendChild(row_array[j][1]);
				        }

				        delete row_array;
				      });
				    }
			    }
			  },

			  guessType: function(table, column) {
			    // guess the type of a column based on its first non-blank row
			    sortfn = sorttable.sort_alpha;
			    for (var i=0; i<table.tBodies[0].rows.length; i++) {
			      text = sorttable.getInnerText(table.tBodies[0].rows[i].cells[column]);
			      if (text != '') {
			        if (text.match(/^-?[£$¤]?[\d,.]+%?$/)) {
			          return sorttable.sort_numeric;
			        }
			        // check for a date: dd/mm/yyyy or dd/mm/yy
			        // can have / or . or - as separator
			        // can be mm/dd as well
			        possdate = text.match(sorttable.DATE_RE)
			        if (possdate) {
			          // looks like a date
			          first = parseInt(possdate[1]);
			          second = parseInt(possdate[2]);
			          if (first > 12) {
			            // definitely dd/mm
			            return sorttable.sort_ddmm;
			          } else if (second > 12) {
			            return sorttable.sort_mmdd;
			          } else {
			            // looks like a date, but we can't tell which, so assume
			            // that it's dd/mm (English imperialism!) and keep looking
			            sortfn = sorttable.sort_ddmm;
			          }
			        }
			      }
			    }
			    return sortfn;
			  },

			  getInnerText: function(node) {
			    // gets the text we want to use for sorting for a cell.
			    // strips leading and trailing whitespace.
			    // this is *not* a generic getInnerText function; it's special to sorttable.
			    // for example, you can override the cell text with a customkey attribute.
			    // it also gets .value for <input> fields.

			    if (!node) return "";

			    hasInputs = (typeof node.getElementsByTagName == 'function') &&
			                 node.getElementsByTagName('input').length;

			    if (node.getAttribute("sorttable_customkey") != null) {
			      return node.getAttribute("sorttable_customkey");
			    }
			    else if (typeof node.textContent != 'undefined' && !hasInputs) {
			      return node.textContent.replace(/^\s+|\s+$/g, '');
			    }
			    else if (typeof node.innerText != 'undefined' && !hasInputs) {
			      return node.innerText.replace(/^\s+|\s+$/g, '');
			    }
			    else if (typeof node.text != 'undefined' && !hasInputs) {
			      return node.text.replace(/^\s+|\s+$/g, '');
			    }
			    else {
			      switch (node.nodeType) {
			        case 3:
			          if (node.nodeName.toLowerCase() == 'input') {
			            return node.value.replace(/^\s+|\s+$/g, '');
			          }
			        case 4:
			          return node.nodeValue.replace(/^\s+|\s+$/g, '');
			          break;
			        case 1:
			        case 11:
			          var innerText = '';
			          for (var i = 0; i < node.childNodes.length; i++) {
			            innerText += sorttable.getInnerText(node.childNodes[i]);
			          }
			          return innerText.replace(/^\s+|\s+$/g, '');
			          break;
			        default:
			          return '';
			      }
			    }
			  },

			  reverse: function(tbody) {
			    // reverse the rows in a tbody
			    newrows = [];
			    for (var i=0; i<tbody.rows.length; i++) {
			      newrows[newrows.length] = tbody.rows[i];
			    }
			    for (var i=newrows.length-1; i>=0; i--) {
			       tbody.appendChild(newrows[i]);
			    }
			    delete newrows;
			  },

			  /* sort functions
			     each sort function takes two parameters, a and b
			     you are comparing a[0] and b[0] */
			  sort_numeric: function(a,b) {
			    aa = parseFloat(a[0].replace(/[^0-9.-]/g,''));
			    if (isNaN(aa)) aa = 0;
			    bb = parseFloat(b[0].replace(/[^0-9.-]/g,''));
			    if (isNaN(bb)) bb = 0;
			    return aa-bb;
			  },
			  sort_alpha: function(a,b) {
			    if (a[0]==b[0]) return 0;
			    if (a[0]<b[0]) return -1;
			    return 1;
			  },
			  sort_ddmm: function(a,b) {
			    mtch = a[0].match(sorttable.DATE_RE);
			    y = mtch[3]; m = mtch[2]; d = mtch[1];
			    if (m.length == 1) m = '0'+m;
			    if (d.length == 1) d = '0'+d;
			    dt1 = y+m+d;
			    mtch = b[0].match(sorttable.DATE_RE);
			    y = mtch[3]; m = mtch[2]; d = mtch[1];
			    if (m.length == 1) m = '0'+m;
			    if (d.length == 1) d = '0'+d;
			    dt2 = y+m+d;
			    if (dt1==dt2) return 0;
			    if (dt1<dt2) return -1;
			    return 1;
			  },
			  sort_mmdd: function(a,b) {
			    mtch = a[0].match(sorttable.DATE_RE);
			    y = mtch[3]; d = mtch[2]; m = mtch[1];
			    if (m.length == 1) m = '0'+m;
			    if (d.length == 1) d = '0'+d;
			    dt1 = y+m+d;
			    mtch = b[0].match(sorttable.DATE_RE);
			    y = mtch[3]; d = mtch[2]; m = mtch[1];
			    if (m.length == 1) m = '0'+m;
			    if (d.length == 1) d = '0'+d;
			    dt2 = y+m+d;
			    if (dt1==dt2) return 0;
			    if (dt1<dt2) return -1;
			    return 1;
			  },

			  shaker_sort: function(list, comp_func) {
			    // A stable sort function to allow multi-level sorting of data
			    // see: http://en.wikipedia.org/wiki/Cocktail_sort
			    // thanks to Joseph Nahmias
			    var b = 0;
			    var t = list.length - 1;
			    var swap = true;

			    while(swap) {
			        swap = false;
			        for(var i = b; i < t; ++i) {
			            if ( comp_func(list[i], list[i+1]) > 0 ) {
			                var q = list[i]; list[i] = list[i+1]; list[i+1] = q;
			                swap = true;
			            }
			        } // for
			        t--;

			        if (!swap) break;

			        for(var i = t; i > b; --i) {
			            if ( comp_func(list[i], list[i-1]) < 0 ) {
			                var q = list[i]; list[i] = list[i-1]; list[i-1] = q;
			                swap = true;
			            }
			        } // for
			        b++;

			    } // while(swap)
			  }
			}

			/* ******************************************************************
			   Supporting functions: bundled here to avoid depending on a library
			   ****************************************************************** */

			// Dean Edwards/Matthias Miller/John Resig

			/* for Mozilla/Opera9 */
			if (document.addEventListener) {
			    document.addEventListener("DOMContentLoaded", sorttable.init, false);
			}

			/* for Internet Explorer */
			/*@cc_on @*/
			/*@if (@_win32)
			    document.write("<script id=__ie_onload defer src=javascript:void(0)><\/script>");
			    var script = document.getElementById("__ie_onload");
			    script.onreadystatechange = function() {
			        if (this.readyState == "complete") {
			            sorttable.init(); // call the onload handler
			        }
			    };
			/*@end @*/

			/* for Safari */
			if (/WebKit/i.test(navigator.userAgent)) { // sniff
			    var _timer = setInterval(function() {
			        if (/loaded|complete/.test(document.readyState)) {
			            sorttable.init(); // call the onload handler
			        }
			    }, 10);
			}

			/* for other browsers */
			window.onload = sorttable.init;

			// written by Dean Edwards, 2005
			// with input from Tino Zijdel, Matthias Miller, Diego Perini

			// http://dean.edwards.name/weblog/2005/10/add-event/

			function dean_addEvent(element, type, handler) {
				if (element.addEventListener) {
					element.addEventListener(type, handler, false);
				} else {
					// assign each event handler a unique ID
					if (!handler.$$guid) handler.$$guid = dean_addEvent.guid++;
					// create a hash table of event types for the element
					if (!element.events) element.events = {};
					// create a hash table of event handlers for each element/event pair
					var handlers = element.events[type];
					if (!handlers) {
						handlers = element.events[type] = {};
						// store the existing event handler (if there is one)
						if (element["on" + type]) {
							handlers[0] = element["on" + type];
						}
					}
					// store the event handler in the hash table
					handlers[handler.$$guid] = handler;
					// assign a global event handler to do all the work
					element["on" + type] = handleEvent;
				}
			};
			// a counter used to create unique IDs
			dean_addEvent.guid = 1;

			function removeEvent(element, type, handler) {
				if (element.removeEventListener) {
					element.removeEventListener(type, handler, false);
				} else {
					// delete the event handler from the hash table
					if (element.events && element.events[type]) {
						delete element.events[type][handler.$$guid];
					}
				}
			};

			function handleEvent(event) {
				var returnValue = true;
				// grab the event object (IE uses a global event object)
				event = event || fixEvent(((this.ownerDocument || this.document || this).parentWindow || window).event);
				// get a reference to the hash table of event handlers
				var handlers = this.events[event.type];
				// execute each event handler
				for (var i in handlers) {
					this.$$handleEvent = handlers[i];
					if (this.$$handleEvent(event) === false) {
						returnValue = false;
					}
				}
				return returnValue;
			};

			function fixEvent(event) {
				// add W3C standard event methods
				event.preventDefault = fixEvent.preventDefault;
				event.stopPropagation = fixEvent.stopPropagation;
				return event;
			};
			fixEvent.preventDefault = function() {
				this.returnValue = false;
			};
			fixEvent.stopPropagation = function() {
			  this.cancelBubble = true;
			}

			// Dean's forEach: http://dean.edwards.name/base/forEach.js
			/*
				forEach, version 1.0
				Copyright 2006, Dean Edwards
				License: http://www.opensource.org/licenses/mit-license.php
			*/

			// array-like enumeration
			if (!Array.forEach) { // mozilla already supports this
				Array.forEach = function(array, block, context) {
					for (var i = 0; i < array.length; i++) {
						block.call(context, array[i], i, array);
					}
				};
			}

			// generic enumeration
			Function.prototype.forEach = function(object, block, context) {
				for (var key in object) {
					if (typeof this.prototype[key] == "undefined") {
						block.call(context, object[key], key, object);
					}
				}
			};

			// character enumeration
			String.forEach = function(string, block, context) {
				Array.forEach(string.split(""), function(chr, index) {
					block.call(context, chr, index, string);
				});
			};

			// globally resolve forEach enumeration
			var forEach = function(object, block, context) {
				if (object) {
					var resolve = Object; // default
					if (object instanceof Function) {
						// functions have a "length" property
						resolve = Function;
					} else if (object.forEach instanceof Function) {
						// the object implements a custom forEach method so use that
						object.forEach(block, context);
						return;
					} else if (typeof object == "string") {
						// the object is a string
						resolve = String;
					} else if (typeof object.length == "number") {
						// the object is array-like
						resolve = Array;
					}
					resolve.forEach(object, block, context);
				}
			};
		</script>

		<div id="wrapper">
			<table id="numbers">
				<tr>
					<td id="bracket1"></td>
					<td id="bracket2"></td>
					<td id="bracket3"></td>
					<td id="bracket4"></td>
				</tr>
			</table>
			<div id="leftTransition"></div><div id="rightTransition"></div>
			<div id="transition"></div>
			<div id="axis">
				<ul>
					<li>$0 - $40,000</li>
					<li>$40,000 - $60,000</li>
					<li>$60,000 - $80,000</li>
					<li>$80,000 +</li>
				</ul>
			</div>
			<div id="axisBottom"></div>
			<div id="leftContainer"></div><div id="rightContainer"></div>
			<div id="graphContainer">
				<img id="loader" src="/img/major-stats-assets/ajax-loader.gif"/>
			</div>
			<div id="bottomContainer"></div>
			<br/>
			<a href="#" id="move1">Expected</a>
			<a href="#" id="move2">Recent Grads</a>
			<a href="#" id="move3">10 years later</a>
			<br/><br/>
			<a href="#" id="loadugrad">Undergrad Data</a>
			<a href="#" id="loadgrad">Grad Data</a>
			<br/>
			<br/>
			<label for="selective">View selected majors</label>
			<input type="checkbox" id="selective"></input>
			<br/>
			<br/>
			<div id="myMenu">
				<form>
					<select id="mySelect">
					</select>
					<button type="button" id="menuButton">Add</button>
				</form>
			</div>
			<br/>
			<table id="myTable" class="sortable">
				<thead id="myHeadings">
					<th id="major">Major</th>
					<th id="expectedIncome1">% With expectation of income: $0-40k</th>
					<th id="expectedIncome2">% With expectation of income: $40-60k</th>
					<th id="expectedIncome3">% expectation of income: $60-80k</th>
					<th id="expectedIncome4">% expectation of income: $80k+</th>
					<th id="actual1Year">Average income 1 year out</th>
					<th id="actual10Year">Average income 10 years out</th>
					<th id="concernedOrHighlyConcerned">% Concerned or highly concerned about getting a job</th>
					<th id="expect">% Expecting a job after graduation</th>
					<th id="unemployment">% Employed full time</th>
					<th id="remove" class="sorttable_nosort">Remove</th>
				</thead>
				<tbody id="myTableBody">
					<tr style="display:none;"></tr>
				</tbody>
			</table>
			<br/>
			<br/>
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script type="text/javascript" id="globals">
			window.imagewidth = 30;
			window.imageheight = 50;

			$(document).ready(function(){
				window.application = new view('/img/major-stats-2013-data/undergrad.json',function(){
					this.createGrid(1,this.render);
				});
				getData();
				document.getElementById('selective').checked = false;
				document.getElementById('selective').disabled = true;
			});

			$("#loadugrad").click(function(e){
				window.application.clear(function(){
					window.application = new view('/img/major-stats-2013-data/undergrad.json',function(){
						this.createGrid(1,this.render);
					});
				});
				e.preventDefault();
			});

			$("#loadgrad").click(function(e){
				window.application.clear(function(){
					window.application = new view('/img/major-stats-2013-data/grad.json',function(){
						this.createGrid(1,this.render);
					});
				});
				e.preventDefault();
			});

			$("#move1").click(function(e){
				window.application.move(1);
				e.preventDefault();
			});

			$("#move2").click(function(e){
				window.application.move(2);
				e.preventDefault();
			})

			$("#move3").click(function(e){
				window.application.move(3);
				e.preventDefault();
			})
		</script>
		<script type="text/javascript" id="collection">
			function collection(data,callback) {
				this.people = new Array();
				var temp = this;
				//using jQuery to grab JSON
				$.getJSON(data, function(data) {
					for (x in data)
					{
						for (var i=0; i<data[x].bracket1; i++)
						{
							var pos = [];
							pos[0]=1;
							pos[1]=parseInt(data[x]["1year"]);
							pos[2]=parseInt(data[x]["10years"]);
							temp.people.push({"dom_id":"","position":pos,"major":data[x].Major});
						}
						for (var i=0; i<data[x].bracket4; i++)
						{
							var pos = [];
							pos[0]=4;
							pos[1]=parseInt(data[x]["1year"]);
							pos[2]=parseInt(data[x]["10years"]);
							temp.people.push({"dom_id":"","position":pos,"major":data[x].Major});
						}
						for (var i=0; i<data[x].bracket2; i++)
						{
							var pos = [];
							pos[0]=2;
							pos[1]=parseInt(data[x]["1year"]);
							pos[2]=parseInt(data[x]["10years"]);
							temp.people.push({"dom_id":"","position":pos,"major":data[x].Major});
						}
						for (var i=0; i<data[x].bracket3; i++)
						{
							var pos = [];
							pos[0]=3;
							pos[1]=parseInt(data[x]["1year"]);
							pos[2]=parseInt(data[x]["10years"]);
							temp.people.push({"dom_id":"","position":pos,"major":data[x].Major});
						}
					}
					temp.ratio = temp.returnRatio(1);
					if (callback)
						callback();
				});
			}

			collection.prototype.returnRatio = function(stage) {
				var ratio = [0,0,0,0];
				for (var i=0; i<this.people.length; i++)
				{
					switch (this.people[i].position[stage-1])
					{
						case 1:
						ratio[0]++;
						break;
						case 2:
						ratio[1]++;
						break;
						case 3:
						ratio[2]++;
						break;
						case 4:
						ratio[3]++;
						break;
					}
				}
				return ratio;
			}
		</script>
		<script type="text/javascript" id="view">
			function view(data,callback) {
				var obj = this;
				this.collection = new collection(data,function(){
					if (callback)
						callback.call(obj);
				});
				this.numbers = [document.getElementById("bracket1"),document.getElementById("bracket2"),document.getElementById("bracket3"),document.getElementById("bracket4")];
				this.dom = document.getElementById("graphContainer");
				this.domheight = this.dom.clientHeight-40;
				this.domwidth = this.dom.clientWidth;
			    this.grid = []; 
			}

			view.prototype.createGrid = function(stage,callback) {
				//Clears existing grid
				this.grid = [];
				//Creates a grid to log people
				var columnCount = Math.floor(this.domwidth/4/imagewidth)+1;
				var rowCount = Math.floor(this.domheight/imageheight)+1;
				this.grid = new Array(4);
				this.gridCount = [columnCount,rowCount,columnCount,rowCount,columnCount,rowCount,columnCount,rowCount]; //[0,1,2,3,4,5][a_col,a_row,b_col,b_row,c_col,c_row]
				for (var j=0; j<4; j++)
				{
					if (this.collection.returnRatio(stage)[j]>columnCount*rowCount)
					{
						var temp = Math.floor(this.collection.returnRatio(stage)[j]/rowCount)+1;
						this.grid[j] = new Array(temp);
						this.gridCount[j+j] = temp;
					}
					else 
						this.grid[j] = new Array(columnCount);
					for (var i=0; i<this.grid[j].length; i++)
					{
						this.grid[j][i] = new Array(rowCount);
					}
				}	
				console.log(this.dom);
				if (callback)
					callback.call(this,stage);
			}

			view.prototype.render = function(stage) {
				for (var i=0; i<this.numbers.length;i++)
				{
					this.numbers[i].innerHTML = this.collection.returnRatio(stage)[i] + "<p>students</p>";
				}
				this.dom.innerHTML = "";
				for (var i=0; i<this.collection.people.length; i++)
				{
					var number = Math.floor(Math.random()*7)+1;
					//console.log(number);
					var gridLoc = this.collection.people[i].position[0]-1;
					var randX = Math.floor(Math.random()*this.gridCount[gridLoc]);
					var randY = Math.floor(Math.random()*this.gridCount[2*gridLoc+1]);
					do
					{
						if (!this.grid[gridLoc][randX][randY])
						{
							this.grid[gridLoc][randX][randY] = true;
							break;
						}
						else
						{
							randX = Math.floor(Math.random()*this.grid[gridLoc].length);
							randY = Math.floor(Math.random()*this.grid[gridLoc][randX].length);
						}
					}
					while (this.grid[gridLoc][randX][randY])
					var xLoc = Math.floor(((randX)/this.gridCount[2*gridLoc]+gridLoc)*this.domwidth/4);
					var yLoc = Math.floor(randY/this.gridCount[2*gridLoc+1]*(this.domheight-imageheight-20));
					if (randX >= this.grid[gridLoc].length-1)
						var tempLeft = xLoc-Math.floor(Math.random()*10);
					else if (randX == 0)
						var tempLeft = xLoc+Math.floor(Math.random()*40);
					else
						var tempLeft = xLoc+Math.floor(Math.random()*15);
					this.collection.people[i].dom_id = 'person'+i;
					//FIX: classes should not be space delimited
					var string = '<img class="people" major="'+this.collection.people[i].major+'" id="person'+i+'" src="/img/major-stats-assets/silhouettes/males/'+number+'.png" grid="'+gridLoc+'" style="top:'+(yLoc+Math.floor(Math.random()*20)+20)+'px; left:'+tempLeft+'px;"/>'
					this.dom.innerHTML += string;
				}
			}

			view.prototype.clear = function(callback) {
				document.getElementById('graphContainer').innerHTML = '<img id="loader" src="/img/major-stats-assets/ajax-loader.gif"/>';
				document.getElementById('numbers').innerHTML = '<td id="bracket1"></td><td id="bracket2"></td><td id="bracket3"></td><td id="bracket4"></td>';
				for (var prop in this)
				{
					delete this[prop];
				}
				callback();
			}


			view.prototype.move = function(stage) {
				var temp = this;
				var number = stage+1;
				for (var i=0; i<this.numbers.length;i++)
				{
					this.numbers[i].innerHTML = this.collection.returnRatio(stage)[i] + "<p>students</p>";
				}
				this.createGrid(stage,function(){
					for (var i=0; i<temp.collection.people.length; i++)
					{
						var number = Math.floor(Math.random()*7)+1;
						var gridLoc = temp.collection.people[i].position[stage-1]-1;
						var randX = Math.floor(Math.random()*temp.gridCount[2*gridLoc]);
						var randY = Math.floor(Math.random()*temp.gridCount[2*gridLoc+1]);
						do
						{
							if (!temp.grid[gridLoc][randX][randY])
							{
								temp.grid[gridLoc][randX][randY] = true;
								break;
							}
							else
							{
								randX = Math.floor(Math.random()*temp.grid[gridLoc].length);
								randY = Math.floor(Math.random()*temp.grid[gridLoc][randX].length);
							}
						}
						while (temp.grid[gridLoc][randX][randY])
						var xLoc = Math.floor(((randX)/temp.gridCount[2*gridLoc]+gridLoc)*temp.domwidth/4);
						var yLoc = Math.floor(randY/temp.gridCount[2*gridLoc+1]*(temp.domheight-imageheight-20));
						if (randX >= temp.grid[gridLoc].length-1)
							var tempLeft = xLoc-Math.floor(Math.random()*10);
						else if (randX == 0)
							var tempLeft = xLoc+Math.floor(Math.random()*40);
						else
							var tempLeft = xLoc+Math.floor(Math.random()*15);
						//Animating with jQuery
						$('#person'+i).animate({	
							top: yLoc+Math.floor(Math.random()*20)+20,
							left: tempLeft
						},1300);
					}
				});
			}
		</script>
		<script type="text/javascript" id="tablestats">
			var Stats = [];
			var Visible = [];
			var myTable = document.getElementById("myTable");
			var myCell;
			var majorList = [];
			var myMenu;
			var myOption;
			var menuDiv;
			var myRowNum;
			var mySelection;

			function getData(){
				$.getJSON("/img/major-stats-2013-data/StatsSurveyTentative.JSON", function(data){
					for(x in data){
						Stats.push(data[x]);
					}
					console.log(Stats);
					getMajors(Stats);
					makeMenu(majorList);
				});
			}
			function getMajors(someData){
				for(x in someData){
					majorList.push(someData[x].Major);
				}
			}
			function makeMenu(){
				menuDiv = document.getElementById("myMenu");
				myMenu = document.getElementById("mySelect");
				myButton = document.getElementById("menuButton");
				for(x in majorList){ //loops majorList and puts majors into the menu selector
					myOption = document.createElement("option");
					myOption.text = majorList[x];
					myMenu.add(myOption,null);
				}
			}
			function addToTable(){
				var selected = document.getElementById("mySelect").selectedIndex;
				var temp = Stats[selected].Major.replace(/[^A-Za-z]+/g,'_');
				var major = document.getElementById(temp);
				if(!major)
				{
					var myRow = myTable.insertRow(-1);
					myRow.setAttribute("id",temp);
					for(x in Stats[selected]){
						myCell = myRow.insertCell(-1);
						myCell.innerHTML=Stats[selected][x];
					}
					myCell = myRow.insertCell(-1);
					var appendedtemp = "'"+temp+"'";
					myCell.innerHTML="<button class=\"remove\" id=\""+temp+"\" type=\"button\" onclick=\"removeFromTable(this.parentNode.parentNode.rowIndex,'"+temp+"')\">X</button>";
					Visible.push(temp);
					sorttable.makeSortable(myTable);
					$('.people').each(function(){
						if(Visible.indexOf($(this).attr("major"))!=-1)
							$(this).show();
					});
				}
			}

			function removeFromTable(x,id){
				for (var i=0;i<Visible.length;i++)
				{
					if (Visible[i] == id)
					{
						Visible.splice(i,1);
						break;
					}
				}
				myTable.deleteRow(x);
				if (Visible.length==0)
				{
					$('.people').each(function(){
						$(this).show();
					});
					return;
				}
				if (document.getElementById("selective").checked)
				{
					$('.people').each(function(){
						if(Visible.indexOf($(this).attr("major"))==-1)
							$(this).hide();
					})
				}
			}

			document.getElementById("selective").onclick=function(){
				if (!this.checked)
					{
						$('.people').each(function(){
								$(this).show();
						});
					}
				else
					{
						$('.people').each(function(){
							if(Visible.indexOf($(this).attr("major"))==-1)
								$(this).hide();
						});
					}
			}

			document.getElementById("menuButton").onclick=function(){
				addToTable(); 
				sorttable.makeSortable(myTable);
				document.getElementById("selective").disabled=false;
			};
		</script>

	</div>
	<div class="span8" id="post">

        <?php get_template_part('loop', 'page'); ?>
	</div><!-- end div#post -->
	
	<?php get_sidebar(); ?>
	
</div><!-- end div#single-post -->      

<?php get_footer(); ?>
