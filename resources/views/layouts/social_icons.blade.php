<head>
	<link href="{{ asset('css/content.css') }}" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
  	<script src="https://kit.fontawesome.com/012ce59742.js" crossorigin="anonymous"></script>

</head>

<div class="icons">
	<a href="#up" class="up_down"><i class="fas fa-arrow-circle-up"></i> Į viršų</a>
	<a href="#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
	<a href="#" class="youtube"><i class="fab fa-youtube"></i> Youtube</a>
	<a href="#" class="instagram"><i class="fab fa-instagram"></i> Instagram</a>
	<a href="#" class="linkedin"><i class="fab fa-linkedin"></i> LinkedIN</a>
	<a href="#down" class="up_down"><i class="fas fa-arrow-circle-down"></i> Į apačią</a>

</div> 

<script>
        // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

</script>
	

