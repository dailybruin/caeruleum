$(document).ready(function() {
    $("#sidebar2").scrollToFixed({ limit: function() {
            var limit = $("li.card.showing > div.card-lower").offset().top - $('#sidebar2').outerHeight(true);
            return limit;
        } });
});
