$(document).ready(function () {
  var cards = document.getElementsByClassName("card");
  var currentCard = 0;

  var next = $(".next");
  for(var i = 0; i < next.length; i++){
    next[i].addEventListener('click', nextSlide);
  }
  function nextSlide(e) {
    cards[currentCard].className = "card not-showing";
    menu_item[currentCard].className = "l-item";
    currentCard = (currentCard+1)%cards.length;
    cards[currentCard].className = "card showing";
    menu_item[currentCard].className = "l-item active"
  }

  var last = $(".last");
  for(var i = 0; i < last.length; i++){
    last[i].addEventListener('click', lastSlide);
  }
  function lastSlide(e) {
    cards[currentCard].className = "card not-showing";
    menu_item[currentCard].className = "l-item";
    currentCard = currentCard-1;
    if(currentCard < 0) {
    	currentCard = cards.length-1;
    }
    cards[currentCard].className = "card showing";
    menu_item[currentCard].className = "l-item active"
  }

  var menu_item = $('.l-item');
  for(var i = 0; i < menu_item.length; i++) {
    menu_item[i].addEventListener('click', function() {
      cards[currentCard].className = "card not-showing";
      menu_item[currentCard].className = "l-item"
      var parsedCard = /card(\d+)/.exec(this.id);
      currentCard = parseInt(parsedCard[1]) - 1;
      cards[currentCard].className = "card showing";
      this.className = "l-item active";
    });
  }

  if($('#bg img').css('display') != 'none') {
    $('.sidebar1').toggleClass('special');
  }

  vectorDiv( 'scroll-up', 'scrollDiv', "up", 15);
  vectorDiv( 'scroll-down', 'scrollDiv', "down", 15);

  var windw = this;

$.fn.followTo = function ( elem ) {
    var $this = this,
        $window = $(windw),
        $bumper = $(elem),
        bumperPos = $bumper.offset().top,
        thisHeight = $this.outerHeight(),
        setPosition = function(){
          var currentHeight = (($('.sidebar1').offset().top) + $('.sidebar1').height());
           console.log(currentHeight),
           bumperPos = $bumper.offset().top;
            if (currentHeight > bumperPos) {
              $this.css({
                  "position": "absolute",
                  "top": $('.card-lower').offset().top - $('.card-lower').height() - $('.sidebar1').outerHeight()
              });
            } else {
              $this.css({
                "position": "fixed !important",
              })
            }
        };
    $window.resize(function()
    {
        bumperPos = pos.offset().top;
        thisHeight = $this.outerHeight();
        setPosition();
    });
    $window.scroll(setPosition);
    setPosition();
};

//$(windw).scroll(function() {
  $('.sidebar1').followTo('.card-lower');
//});
});
