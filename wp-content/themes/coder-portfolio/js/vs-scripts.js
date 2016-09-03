$(document).ready(function() {
  // Add scrollspy to <body>
  $('body').scrollspy({
    target: ".navbar",
    offset: 50
  });

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function() {

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

//blinking cursor insert in header
function blinker() {
  $('.blink').fadeOut(500);
  $('.blink').fadeIn(500);
}

setInterval(blinker, 1000); //Runs every second

// validate email form

function validateForm() {
    var nameErr, emailErr, messageErr;
    var name = document.forms['contactform']['name'].value;
        if ( name == null || name == ' '){
            return 'Please enter your name.';
        }
    var email = document.forms['contactform']['email'].value;
        if ( email == null || email == ' ') {
            return 'Please enter a valid email address.';
        }
    var message = document.forms['contactform']['email'].value;
        if ( message == null || message == ' ') {
            return 'Please leave a message.';
        }

}
