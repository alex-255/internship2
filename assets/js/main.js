window.addEventListener("load", () => {

    const header = document.getElementById("header");
    const hamburger = header.querySelector(".hamburger");
    const overlay = header.querySelector(".overlay");
    
    // closing/opening menu on mobile devices
    hamburger.onclick  = function(){
      header.classList.toggle("menu-opened");  
    };
    overlay.onclick  = function(){
      header.classList.toggle("menu-opened");  
  };

  const content = document.querySelectorAll(".our-team--content");
  content.forEach(element => element.addEventListener( "mouseover", (event) => {
    event.target.closest(".our-team--content").classList.toggle("content-shown");
  } ));
  content.forEach(element => element.addEventListener( "mouseout", (event) => {
    event.target.closest(".our-team--content").classList.toggle("content-shown");
  } ));
});

( function( $ ) {
    
    $(document).ready(function(){
        $('.slider--slider').slick({
            infinite: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            adaptiveHeight: true,
            responsive: [
                {
                  breakpoint: 900,
                  settings: {
                    dots: false,
                  }
                }
            ]
        });

        $('#inner-slider').slick({
          infinite: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows: true,
          responsive: [
              {
                breakpoint: 900,
                settings: {
                  dots: false,
                }
              }
          ]
        });

        $('#our-projects-carousel').slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                  breakpoint: 900,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true
                  }
                }
            ]
        });

        Fancybox.bind("[data-fancybox]", {

        });

      });

} )( jQuery );
