//debut de js code anime caroussel
    // Wrap every letter in a span
var textWrapper = document.querySelector('.ml1 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml1 .letter',
    scale: [0.3,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 600,
    delay: (el, i) => 70 * (i+1)
  }).add({
    targets: '.ml1 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700,
    offset: '-=875',
    delay: (el, i, l) => 80 * (l - i)
  }).add({
    targets: '.ml1',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000,
  });
  //fin de js code de anime caroussel

  //debut js code de owl carrousel
    $(document).ready(function(){

      if($('.brands_slider').length)
      {
        var brandsSlider = $('.brands_slider');

          brandsSlider.owlCarousel(
          {
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            nav:false,
            dots:false,
            autoWidth:true,
            items:8,
            margin:42
          });

        if($('.brands_prev').length)
          {
            var prev = $('.brands_prev');
            prev.on('click', function()
          {
            brandsSlider.trigger('prev.owl.carousel');
          });
      }

      if($('.brands_next').length)
      {
      var next = $('.brands_next');
      next.on('click', function()
      {
      brandsSlider.trigger('next.owl.carousel');
      });
      }
      }
    });
  //fin js code de owl carrousel
  //debut de js code de caroussel
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    //fin js code de carroussel

    //debut js code du compte à rebours du match à l'affiche
    // Set the date we're counting down to
    var countDownDate = new Date("Aug 05, 2021 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var Jours = Math.floor(distance / (1000 * 60 * 60 * 24));
      var heures = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var secondes = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById("deadline").innerHTML = Jours + " j " + heures + " h " + minutes + " m " + secondes + " s ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("deadline").innerHTML = "Terminé";
      }
    }, 1000);
    //fin de js code du compte à rebours du match à l'affiche