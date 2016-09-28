// create js cookies

function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else var expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}
function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}
function eraseCookie(name) {
  createCookie(name,"",-1);
}

// modal
function myPopup() {
  //Get the A tag
  var id = $('#modal');
  //Get the window height and width
  var winH = $(window).height();
  var winW = $(window).width();
  //Set the popup window to center
  id.css('top', winH/2-id.height()/2);
  id.css('left', winW/2-id.width()/2);
  //transition effect
  id.fadeIn(500);
}
//if close button is clicked
$('.modalwindow .close').click(function (e) {
  //Cancel the link behavior
  e.preventDefault();
  $('.modalwindow').fadeOut(500);
});
