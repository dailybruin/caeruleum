// Cookie Utilities
function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cookie) {
  var name = cookie + "=";
  var ca = document.cookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function subscribeToNewsletter() {
  setCookie("subscribed2newsletter", "true", 365);
  closeNewsletterPopup();
}

function closeNewsletterPopup() {
  let smokescreen = document.getElementById("smokescreen");
  let popup = document.getElementById("newsletterPopup");
  smokescreen.style.display = "none";
  popup.style.display = "none";
}

function displayNewsletterPopup() {
  let smokescreen = document.getElementById("smokescreen");
  let popup = document.getElementById("newsletterPopup");
  smokescreen.style.display = "block";
  popup.style.display = "block";
}

jQuery(document).ready(function() {
  // Determine Popup-ability
  if (getCookie("subscribed2newsletter") == "") {
    let visits = getCookie("newsletterVisits");
    if (visits == "") {
      setCookie("newsletterVisits", "0", "365");
    } else {
      visits = parseInt(visits) + 1;
      if (visits >= 5) {
        displayNewsletterPopup();
        setCookie("newsletterVisits", "0", "365");
      } else {
        setCookie("newsletterVisits", visits.toString(), "365");
      }
    }
  }
});
