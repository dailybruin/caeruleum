/**** VectorDiv (C)Scripterlative.com

Description
~~~~~~~~~~~
 Provides user-controls for incremental scrolling of div content.

 Info: http://scripterlative.com?vectordiv

Installation
~~~~~~~~~~~~
 Save this text/file as 'vectordiv.js', and place it in a folder associated with your web pages.

 Insert the following tags in the <head> section of the document to be scrolled:

 <script type='text/javascript' src='vectordiv.js'></script>

 (If vectordiv.js resides in a different folder, include the relative path).js', and place it in a
  folder associated with your web pages.

 Notes: This script does not generate, position or style user controls, that being an HTML/CSS
 discipline and the sole responsibility of the developer.
 WE CANNOT PROVIDE SUPPORT FOR LAYOUT ISSUES.

 Examples of recommended controls are <a> <area> <input type='button'> <img> <span>.

 For accessibility reasons, control elements not normally keyboard-selectable like <img> and <span>, must
 be enclosed within an <a> tag with an href parameter set, e.g.:

  <a href='#'><span id='upButton'> Scroll up </span></a>

 When clicked, links that are used as this script's controls will not navigate.

Configuration
~~~~~~~~~~~~~

 Apply a unique ID attribute to the scrollable div to be controlled.

 Apply a unique ID attribute to each controlling element.

 Each control is configured individually, simply by calling the vectorDiv function with the
 required parameters. Usage examples are shown below.

 Meaning of Parameters
 ---------------------

 First Parameter:  The ID (in quotes) of the control element.

 Second Parameter: The ID (in quotes) of the scrollable div.

 Third Parameter:  The direction(s) to scroll in quotes.

   Allowed values: UP DOWN LEFT RIGHT. The last three can be abbreviated DN LT RT repectively.
   For diagonal scrolling, specify a horizontal and a vertical direction within the same quotes.

 Fourth Parameter (Optional): The amount to scroll each time the control is clicked. This can be specified as:

    An integer representing pixels.

    A quoted percentage between 1 and 100, e.g. "40%". The latter specifies 40
    of the div's full scrollable distance.
    When % is used, the "V" modifier can be used to specify percentage of visible content height/width, i.e.  "40%V".

    If 'page' is specified, the content scrolls to the next 'page' boundary, where the content is treated as a series of pages, each of height or width as applicable, matching the containing div.

 If the fourth parameter is omitted, the script will scroll the maximum possible distance in the specified direction(s).

 Usage Examples
 --------------

 All examples configure a button with ID 'scrollBtn' to scroll a div with ID 'scrollDiv'.

 Action: Scroll down to end of div's content:

  <script type='text/javascript'> // Must be placed BELOW all involved elements //

   vectorDiv( 'scrollBtn', 'scrollDiv', "down" );

   // Configure any further controls here

  </script>

 Action: Scroll up 100 pixels:

  <script type='text/javascript'> // Must be placed BELOW all involved elements //

   vectorDiv( 'scrollBtn',  'scrollDiv', "up", "100" );

   // Configure any further controls here

  </script>


 Action: Scroll down and to the right 20% of respective scroll distance:

  <script type='text/javascript'> // Must be placed BELOW all involved elements //

   vectorDiv( 'scrollBtn',  'scrollDiv', "dn rt", "20%" );

   // Configure any further controls here

  </script>


 Action: Scroll down 25% of visible content height:

  <script type='text/javascript'> // Must be placed BELOW all involved elements //

    vectorDiv( 'scrollBtn',  'scrollDiv', "down", "25%V" );

    // Configure any further controls here

  </script>

 Action: Scroll down to the next content page boundary:

  <script type='text/javascript'> // Must be placed BELOW all involved elements //

    vectorDiv( 'scrollBtn',  'scrollDiv', "down", "PAGE" );

    // Configure any further controls here

  </script>



 ** DO NOT EDIT BELOW THIS LINE **/

 function vectorDiv( ctrlId, divId, vects, disp )
 {
   new VectorDivObj( ctrlId, divId, vects, disp );
 }

/*** Script and instructions available at scripterlative.com?vectordiv ***/

var VectorDivObj = function( ctrlId, divId, vects, disp )  /*12/APR/14*/
  {
    this.ctrl = null;
    this.elem = null;
    this.xVect = 0;
    this.yVect = 0;
    this.displacement = 0;
    this.percent = 0;
    this.endPoint = null;
    this.useViewPercent = false;
    this.pageJump = false;
    this.useXPage = false;
    this.useYPage = false;

    this.init = function()
    {
      var inst = this, node;

      if( ( this.ctrl = this.$( ctrlId ) ) && ( this.elem = this.$( divId )) && this.getVectors() && this.getDisp() )
      {
        node = this.ctrl;

        while( node && node.nodeName !== 'A' )
          node = node.parentNode;

        if( node )
          this.ctrl = node;

        if( this.pageJump )
        {
          this.useXPage = !!this.xVect;
          this.useYPage = !!this.yVect;
        }

        this.ih( this.ctrl, 'click', function( evt ){ inst.go.apply( inst, arguments ); } );
      }
    }

    this.getYTravel = function(){ return this.elem.scrollHeight + ( this.elem.scrollWidth > this.elem.offsetWidth ? 17 : 0 ) - this.elem.offsetHeight ; }

    this.getXTravel = function(){ return this.elem.scrollWidth + ( this.elem.scrollWidth > this.elem.offsetWidth ? 17 : 0 ) - this.elem.offsetWidth; }

    this.go = function( evt )  /** VISIBLE SOURCE DOES NOT MEAN OPEN SOURCE **/
    {
      var inst = this,
          div = this.elem,
          xTravel = this.getXTravel(),
          yTravel = this.getYTravel(),
          xPercent = this.useViewPercent
                     ? ( this.percent * ( this.elem.offsetWidth / xTravel ) )
                     : this.percent,
          yPercent = this.useViewPercent
                     ? ( this.percent * ( this.elem.offsetHeight / yTravel ) )
                     : this.percent;

      clearInterval( this.elem.divScrollTimer );


      if( this.useXPage )
      {
        this.xTarget = this.xVect < 0
                       ? Math.max( 0, Math.floor( (div.scrollLeft - 1) / div.offsetWidth ) * div.offsetWidth )
                       : Math.min( ( Math.floor( div.scrollLeft / div.offsetWidth ) + 1 ) * div.offsetWidth, xTravel );
      }
      else
        this.xTarget = ( this.xVect > 0
                        ? this.displacement
                          ? Math.min( div.scrollLeft + this.displacement, xTravel )
                          : Math.min( div.scrollLeft + xTravel * xPercent, xTravel)
                        : this.xVect < 0
                          ? this.displacement
                            ? Math.max( 0, div.scrollLeft - this.displacement )
                            : Math.max( 0, div.scrollLeft - Math.floor( xTravel * xPercent ) )
                          : div.scrollLeft ) << 0 ;

      if( this.useYPage )
      {
        this.yTarget = this.yVect < 0
                       ? Math.max( 0, Math.floor( (div.scrollTop - 1) / div.offsetHeight ) * div.offsetHeight )
                       : Math.min( ( Math.floor( div.scrollTop / div.offsetHeight ) + 1 ) * div.offsetHeight, yTravel );

      }
      else
        this.yTarget = ( this.yVect > 0
                         ? this.displacement
                           ? Math.min( div.scrollTop + this.displacement, yTravel )
                           : Math.min( div.scrollTop + yTravel * yPercent, yTravel)
                         : this.yVect < 0
                           ? this.displacement
                             ? Math.max( 0, div.scrollTop - this.displacement )
                             : Math.max( 0, div.scrollTop - Math.floor( yTravel * yPercent ) )
                           : div.scrollTop ) << 0 ;




      this.elem.divScrollTimer = setInterval( function(){ inst.scroll.call( inst ); }, 40 );

      evt.preventDefault ? evt.preventDefault() : evt.returnValue = false;
    }

    this.scroll = function( /*284329323031322053637269707465726C61746976652E636F6D*/ )
    {
      var div = this.elem,
          xAvailTravel = div.scrollWidth - div.scrollLeft - div.offsetWidth,
          yAvailTravel = div.scrollHeight - div.scrollTop - div.offsetHeight,
          xDone = false,
          yDone = false;

      if( this.yTarget !== div.scrollTop )
        div.scrollTop += this.yVect * Math.max( 1, Math.abs( div.scrollTop - this.yTarget ) / 2 );
      else
        yDone = true;

      if( this.xTarget !== div.scrollLeft )
        div.scrollLeft += this.xVect * Math.max( 1, Math.abs( div.scrollLeft - this.xTarget ) / 2 );
      else
        xDone = true;

      if( xDone && yDone )
        clearInterval( div.divScrollTimer );
    }

    this.getVectors = function()
    {
      var vectVals = [ 'up', 'left', 'lt', 'down', 'dn', 'right', 'rt' ],
          tempStr = new String( vects ),
          result = true;

      this.yVect = /\bup\b/i.test( vects ) ? -1 :  /\b(down|dn)\b/i.test( vects ) ? 1 : 0;

      this.xVect = /\b(left|lt)\b/i.test( vects ) ? -1 :  /\b(right|rt)\b/i.test( vects ) ? 1 : 0;

      for( var i = 0, m; ( m = vectVals[ i ] ) ; i++ )
        tempStr = tempStr.replace( new RegExp( "\\b" + m + "\\b", "ig" ), "" );

      if( ( m = tempStr.match( /\S+/ ) ) )
      {
        alert( 'Don\'t understand "' + m + '" as applied to vectors of control "' + ctrlId + '"' );
        result = false;
      }

      return result;
    }

    this.getDisp = function()
    {
      var result = true,

          re = /(\d+)\s*(%?)\s*(V?)/i,

          m = ( typeof disp !== 'undefined' ? disp.toString().match( re ) : [ "100%", "100", '%' ] );

      if( m )
      {
        if( m[ 2 ] == '%' )
        {
          this.percent = Number( m[ 1 ] ) / 100;

          this.useViewPercent = !!m[ 3 ];

          if( this.percent > 1 || this.percent < 0.01 )
          {
            alert( 'Percentage value out of range\n\nMust be 1-100' );
            result = false;
          }
        }
        else
            this.displacement = Number( m[ 1 ] );
      }
      else
        if( /^\s*page\s*$/i.test( disp ) )
          this.pageJump = true;
        else
          this.percent = 1;

      if( disp && ( m = disp.toString().replace( /[0-9%V]|page/ig, "").match( /\S+/ ) ) )
      {
        alert( 'Don\'t understand "' + m + '" in displacement parameter for control ' + ctrlId );
        result = false;
      }

      return result;
    }

    this.ih = function( obj, evt, func )
    {
      obj.attachEvent ? obj.attachEvent( 'on'+evt, func ):obj.addEventListener( evt, func, false );
      return func;
    }

    this.$ = function( id )
    {
      var elem = document.getElementById( id );

      if( !elem || elem.id !== id )
      {
        elem = null;
        alert( 'Element with ID "' + id + '" not found.\n\nScript must be configured at a point BELOW all involved elements.' );
      }

      return elem;
    }

    this.init();
  }

/** End of listing **/
