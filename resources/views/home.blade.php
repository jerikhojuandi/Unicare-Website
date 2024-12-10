@extends('layouts.navbar')

@section('content')

<style>

</style>

<div class="hero-section container-fluid content-container vh-100 d-flex">
    <!-- Left Text Section -->
    <div class="col-md-5 d-flex justify-content-end align-items-center text-right">
        <div class="lc-block text-right px-4">
            <h1 class="hero-heading" style="font-size: 3rem;">Be The <span class="fw-bolder" style="font-weight: bolder; font-size: 2.75rem;">Best <br> Version</span> Of You!</h1>
            <p class="lead" style="font-size: 1.5rem;">Find the best treatments for your skin and body. <br> Make an appointment and consult with our doctors!</p>
            <a href="http://wa.me/6285173155211 " target="_blank">
                <button class="button-17" role="button" style="font-size: 1.25rem;">Book Now!</button>
            </a>
        </div>
    </div>
    <!-- Right Image Section -->
    {{-- <div class="col-md-7 d-flex justify-content-end align-items-center position-relative">
        <img class="hero-image"
             src="assets/Hero-asset.png"
             alt="Hero Image"
             style="max-width: 120%; height: auto; position: absolute; right: 0;">
    </div> --}}
</div>


<section class="home-doctors">
    <div class="container">
        <div class="justify-content-center section-title">
            <div class="pt-4 d-flex justify-content-center">
                <h1><span class="uac-text text-center pb-3">U</span><span class="second-text">AC</span> <span class="gallery-text">Doctors</span></h1>
            </div>
            <div class="home-doctors-bottom justify-content-evenly row d-flex">
                {{-- <div class="row d-flex"> --}}
                    <div class="col-md-4 doctor-card">
                        <div class="image-container">
                            <img src="{{asset('assets/dr toni_.png')}}" alt="Doctor Image">
                            <div class="name-overlay">
                                <p class="text-center">dr. Toni Periyanto, MARS, AAAM.</p>
                            </div>
                        </div>
                        <h5 class="text-center text-expertise " style="font-size: 0.85rem;">Expertise in Face Contouring, Anesthesia Block, Skin Enchancement, and Hair Treatment</h5>
                    </div>
                    <div class="col-md-4  doctor-card">
                        <div class="image-container">
                            <img src="{{asset('assets/Dr.connie (1).png')}}" alt="Doctor Image">
                            <div class="name-overlay">
                                <p class="text-center">dr. Connie Hodianto Tjahjono</p>
                            </div>
                        </div>
                        <h5 class="text-center text-expertise " style="font-size: 0.85rem;">Expertise in Anti-Aging, Severe Acne Treatment, and Threadlift</h5>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</section>



<section class="home-testimonial">
    <div class="container">
        <div class=" justify-content-center testimonial-pos">
            <div class="pt-4 d-flex justify-content-center">
                <h1>What They Say</h1>
            </div>
            <div class="d-flex justify-content-center">
                <h3>Read treatments reviews at Unicare Aesthetic Clinic from fellow patients</h3>
            </div>
        </div>
        <div class="home-testimonial-bottom">
            <div class="container testimonial-inner">
                <div class="card-container row d-flex justify-content-center">
                    <div class="col-md-4 pt-2">
                        <div class="card style-3">
                            <div class="tour-item">
                                <div class="tour-desc ">
                                    <span class="fas fa-quote-left"></span>
                                    <div class="tour-text color-grey-3 text-center">
                                        aku seneng di sini karena dokternya
                                        komunikatif. gak cuma dokternya sih,
                                        susternya juga. jadi aku bisa ngobrol dan
                                        bener-bener ngerti aku tuh lagi diapain,
                                        dikasih obat apa, dikasih treatment apa,
                                        buat apa, isinya apa dll gitu
                                            .</div>
                                    <span class="fas fa-quote-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pt-2">
                        <div class="card style-3">
                            <div class="tour-item">
                                <div class="tour-desc ">
                                    <span class="fas fa-quote-left"></span>
                                    <div class="tour-text color-grey-3 text-center">
                                        Treatment di unicare pelayanannya
                                        memuaskan apalagi hasil nya tidak di
                                        ragukan lagi. Pertama dtg ke sini kulit
                                        saya kusam kering, setelah 2 bulan
                                        perawat di sini wajah saya berangsur
                                        cerah tidak kusam. Badan saya cerah
                                        lembap. Pokoknya bagus. Apalagi klu
                                        udh ada promo facial day mantap                                          </div>
                                    <span class="fas fa-quote-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 style-3 pt-2">
                        <div class="tour-item">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">At this School, our mission is to balance a rigorous comprehensive college preparatory curriculum with healthy social and emotional development.</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Balbir Kaur</div>
                                <div class="link-position d-flex justify-content-center">Student</div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-4 pt-2">
                        <div class="card style-3">
                            <div class="tour-item">
                                <div class="tour-desc">
                                    <span class="fas fa-quote-left"></span>
                                    <div class="tour-text color-grey-3 text-center">
                                        I have been to many Aesthetic Clinic but
                                        Unicare is one of my Favorite and the
                                        Best One too. Their treatment price is
                                        reasonable, the staff is really humble and
                                        nice. I also like the doctors as they really
                                        offer us suitable treatment and very
                                        through and i really love i
                                    </div>
                                    <span class="fas fa-quote-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-gallery">
    <div class="container">
        <div class="gallery-title d-flex justify-content-center">
            <h1><span class="uac-text text-center">U</span><span class="second-text">AC</span> <span class="gallery-text">Gallery</span></h1>
        </div>
        <div class="row d-flex gallery">
            <div class="col-md-4 gallery-left">
                <div class="row">
                    <div class="col-12 mb-3">
                        <img src="{{asset('assets/home-gallery-1.png')}}" alt="Gallery1" class="img-fluid">
                    </div>
                    <div class="col-12">
                        <img src="{{asset('assets/home-gallery-2.jpg')}}" alt="Gallery2" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-md-8 gallery-right">
                <img src="{{asset('assets/home-gallery-big.jpeg')}}" alt="Gallery3" class="img-fluid h-100">
            </div>
        </div>
    </div>

</section>

<section class="gallery-bottom">
    <div class="container">
        <div class="gallery-bottom-content">
            <div class="row d-flex">
                <div class="col-md-3 justify-content-center">
                    <img src="{{asset('assets/home-beforeafter-1.jpg')}}" alt="">
                    <h5 class="text-center">Dermastem Hair</h5>
                </div>
                <div class="col-md-3 justify-content-center">
                    <img src="{{asset('assets/home-beforeafter-2.jpg')}}" alt="">
                    <h5 class="text-center">Acne Treatment</h5>
                </div>
                <div class="col-md-3 justify-content-center">
                    <img src="{{asset('assets/home-beforeafter-3.jpg')}}" alt="">
                    <h5 class="text-center">Vitamin C Skin Booster</h5>
                </div>
                <div class="col-md-3 justify-content-center">
                    <img src="{{asset('assets/home-beforeafter-4.jpg')}}" alt="">
                    <h5 class="text-center">Collagen Stimulator</h5>
                </div>

            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function () {
      var multipleCardCarousel = document.querySelector("#carouselExampleControls");

      if (window.matchMedia("(min-width: 768px)").matches) {
        // Disable automatic sliding
        var carousel = new bootstrap.Carousel(multipleCardCarousel, {
          interval: false,
        });

        var $carouselInner = $("#carouselExampleControls .carousel-inner");
        var cardWidth = $carouselInner.find(".carousel-item").outerWidth(true); // Includes margins
        var scrollPosition = 0;

        // Next button functionality
        $("#carouselExampleControls .carousel-control-next").on("click", function () {
          var carouselWidth = $carouselInner[0].scrollWidth; // Total width of carousel
          if (scrollPosition < carouselWidth - $carouselInner.outerWidth()) {
            scrollPosition += cardWidth;
            $carouselInner.animate({ scrollLeft: scrollPosition }, 600);
          }
        });

        // Previous button functionality
        $("#carouselExampleControls .carousel-control-prev").on("click", function () {
          if (scrollPosition > 0) {
            scrollPosition -= cardWidth;
            $carouselInner.animate({ scrollLeft: scrollPosition }, 600);
          }
        });
      } else {
        // Enable native slide behavior for small screens
        $(multipleCardCarousel).addClass("slide");
      }
    });
  </script>

@endsection
