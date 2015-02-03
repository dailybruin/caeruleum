// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs

$(document).foundation('reveal', {
    opened: function(event) {
        $(event.target).find("input").first().focus();
    }
});
