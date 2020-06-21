$(function(){
        $("#searchsubmit").click(function(){
        $(".error").hide();
        var hasError = false;
        var searchReg = /^[a-zA-Z0-9-]+$/;
        var searchVal = $("input#s").val();
        if(searchVal == '') {
            $("input#s").after('<span class="error">Please enter a search term.</span>');
            hasError = true;
        } else if(!searchReg.test(searchVal)) {
            $("input#s").after('<span class="error">Enter valid text.</span>');
            hasError = true;
        }
        if(hasError == true) {return false;}
    });
});

$(window).on('load', function(){
    $('.grid').isotope({
      itemSelector: '.grid-item',
    });

    // filter items on button click
    $('.filter-button-group').on( 'click', 'li', function() {
      var filterValue = $(this).attr('data-filter');
      $('.grid').isotope({ filter: filterValue });
      $('.filter-button-group li').removeClass('active');
      $(this).addClass('active');
    });
});
    
$(document).ready(function() { 

    wow = new WOW(
        {
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       0,          // default
          mobile:       true,       // default
          live:         true        // default
        }
    )
    wow.init();

    $('.site-main .about-area .owl-carousel').slick( { 
        infinite: true, 
        slidesToShow: $(window).width() > 768 ? 2 : 1, 
        slidesToScroll: 1, 
        dots: true,
        arrows: false
    })

    $('.portfolio-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        responsive: [{
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.experience-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay:true,
        autoplaySpeed:1500,
        arrows:false,
        // prevArrow:'<button type="button" class="slick-prev"></button>',
        // nextArrow:'<button type="button" class="slick-next"></button>',
        responsive: [{
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.education-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay:true,
        autoplaySpeed:1500,
        arrows:false,
        // prevArrow:'<button type="button" class="slick-prev"></button>',
        // nextArrow:'<button type="button" class="slick-next"></button>',
        responsive: [{
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    //sticky navigation menu
    let nav_offset_top = $('.header_area').height() + 10;

    function navbarFixed() {
        if ($('.header_area').length) {
            $(window).scroll(function() {
                let scroll = $(window).scrollTop();
                if (scroll >= nav_offset_top) {
                    $('.header_area .main-menu').addClass('navbar_fixed');
                } else {
                    $('.header_area .main-menu').removeClass('navbar_fixed');
                }
            })
        }
    }

    navbarFixed();
});

//$("#navbarNav .primary-menu li:first-child a").addClass('active');
$("#navbarNav .navbar-nav li").addClass('nav-item');
$("#navbarNav .navbar-nav li a").addClass('nav-link');

/* Smooth Scrolling targeting section starts here */
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("#navbarNav .navbar-nav li a").on('click', function(event) {

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
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
/* Smooth Scrolling targeting section ends here */