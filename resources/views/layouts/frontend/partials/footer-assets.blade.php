
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <script>
        $(function () {
            // Owl Carousel
            var owl = $(".owl-carousel-medical");
            owl.owlCarousel({

                margin: 10,
                loop: true,
                nav: true,
                responsiveClass: true,
                responsive: {
                    600: {
                        items: 5,
                        nav: false
                    },
                    1000: {
                        items: 7.5,
                        nav: true,
                        loop: false
                    }
                }
            });
        });
    </script>
    <script>
        $(function () {
            // Owl Carousel
            var owl = $(".owl-carousel");
            owl.owlCarousel({

                loop: true,
                nav: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 2,
                        nav: false,
                        margin: 10
                    },
                    600: {
                        items: 2,
                        nav: false,
                        margin: 20,
                    },
                    1000: {
                        items: 2,
                        nav: true,
                        loop: false,
                        margin: 30,
                    }
                }
            });
        });
    </script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2.5,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 40,
          },
          1441: {
            slidesPerView: 7,
            spaceBetween: 40,
          },
          1920: {
            slidesPerView: 7,
            spaceBetween: 40,
          },
        },
      });
    </script>
        <script>
      // define all UI variable
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.site-navbar ul');
const navLinks = document.querySelectorAll('.site-navbar a');

// load all event listners
allEventListners();

// functions of all event listners
function allEventListners() {
  // toggler icon click event
  navToggler.addEventListener('click', togglerClick);
  // nav links click event
  navLinks.forEach( elem => elem.addEventListener('click', navLinkClick));
}

// togglerClick function
function togglerClick() {
  navToggler.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
}

// navLinkClick function
function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
  }
}
    </script>
    <script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
@stack('js')   