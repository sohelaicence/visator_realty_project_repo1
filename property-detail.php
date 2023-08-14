<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php include 'include_stylesheet.php' ?>;

  <title>Property Details</title>

  <!-- CSS File Link -->
  <link rel="stylesheet" href="./css/property-detail.css">

</head>
<body>
  
  <!-- Header Section Started Here -->
    <div id="nav-placeholder"></div>
    <script>
      $.get("header.php", function(data) {
        $("#nav-placeholder").replaceWith(data);
      });
    </script>
  <!-- Header Section Ended Here -->


  <!-- Property Detailed Section 1 Started Here -->
      <div class="property-detail-section1">
          <div class="container">
              
          </div>
      </div>
  <!-- Property Detailed Section 1 Ended Here -->


  <!-- Property Detailed Section 2 Started Here -->
      <div class="property-detail-section2">
          <div class="container">
              <div class="row property-detail-section2-row">
                  <div class="col-lg-12">
                    <div class="property-detail-section2-hero1">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="property-detail-section2-hero1-content1">
                              <h3 class="property-detail-sec2-hero1-h3">
                                Northwest Center
                              </h3>
                              <p class="property-detail-sec2-hero1-para1">
                                <i class="fa-solid fa-location-dot"></i>&nbsp;
                                3, 4, 5 BHK Apartment,Independent House/Villa, Chakrata Road, Dehradun
                              </p>
                              <div class="property-detail-sec1-hero1-div">  
                                <p class="property-detail-sec2-hero1-para2">
                                  <i class="fa-solid fa-reply"></i>&nbsp;
                                  For Lease
                                </p>
                                <p class="property-detail-sec2-hero1-para3">
                                  <i class="fa-regular fa-building"></i>&nbsp;
                                  For Apartment
                                </p>
                              </div>
                              <p class="property-detail-sec2-hero1-para4">
                                <i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;
                                Rent upon request
                              </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                          <div class="property-detail-section2-hero1-content2">
                            <div class="bookmark-heart1">
                              <!-- <i class="fa-regular fa-heart fa-heart1"></i> Bookmark -->
                              <i class="fa-regular fa-bookmark fa-heart1"></i> Bookmark
                            </div>
                            <button class="contat-btn-for-property-detail">
                              Contact Us
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="property-detail-section2-hero2">
                        <img src="./assets/property2-card-img55.webp" alt="" class="property-detail-section2-img">
                    </div>
                  </div>
              </div>
          </div>
      </div>
  <!-- Property Detailed Section 1 Ended Here -->


  <!-- Form Preload Modal Section Started Here -->
    <div class="popup-modal-content hidden">
      <i class="fa-solid fa-xmark fa-xmark1"></i>

      <div class="container">
          <div class="row">
              <div class="col-md-6 col-12">
                <div class="modal-left">
                  <h1 class="modal-left-heading">
                    Interested to know more
                  </h1>
                  <p class="modal-left-para">
                    Schedule a meeting for more details
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="modal-right">
                  <form action="">
                    <div class="input-form-div">
                      <input type="text" name="" id="" class="form-input col-12" placeholder="Name">
                    </div>
                    <div class="input-form-div">
                      <input type="text" name="" id="" class="form-input col-12" placeholder="Email">
                    </div>
                    <div class="input-form-div">
                      <input type="text" name="" id="" class="form-input" placeholder="Phone No">
                    </div>                    
                    <div class="input-form-div">
                      <textarea name="" id="" class="form-textarea col-12" placeholder="Message"></textarea>
                    </div>
                    <div class="button-form-div">
                      <a href="#" class="modal-submit-btn">Schedule a meeting</a>
                    </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
    </div>

    <div class="modal-container hidden">
    </div>
  <!-- Form Preload Modal Section Ended Here -->



  <!-- Bootmark Section Icon Started Here -->

  <!-- Bootmark Section Icon Ended Here -->




  <!-- Property Detailed Section 3 Started Here -->
      <div class="property-detail-section3">
          <div class="container">
              <h1 class=".property-detail-main-h1">
                Building Information
              </h1>
              <p class="property-detail-section3-para">
                Commercial Complex - II is a Commercial Building, located in Sector-49-50, RoseWood City, Golf Course Extn Road, Gurgaon. It's approximately 4.5 KM from Sector 55-56 Rapid Metro station, ensures good connectivity by Road to all the major Micro Markets of Gurgaon. 
                <span class="property-detail-show-less-text">
                  Five Star hotel, hospitals and malls are within a radius of 2 KM to 5 KM. The A grade structure is graced by in-house parking.
                </span> 
              </p>
              <span class="property-detail-show-more-btn">
                Show More
              </span>

              <div class="row property-detail-section3-row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          Building name
                        </h5>
                        <p class="building-information-para">
                          Commercial Complex - II
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          Micromarket
                        </h5>
                        <p class="building-information-para">
                          Golf Course Extn Road
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          Locality
                        </h5>
                        <p class="building-information-para">
                          Golf Course Extn Road
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          City
                        </h5>
                        <p class="building-information-para">
                          Gurgaon
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          Address
                        </h5>
                        <p class="building-information-para">
                          Rosewood City, Sector 49 - 50
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          Year built
                        </h5>
                        <p class="building-information-para">
                          2015
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          Ownership structure
                        </h5>
                        <p class="building-information-para">
                          Single
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          Storey
                        </h5>
                        <p class="building-information-para">
                          5
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          Typical floor area
                        </h5>
                        <p class="building-information-para">
                          13400 sqft
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          Total area
                        </h5>
                        <p class="building-information-para">
                          67001 sqft
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          Parking ratio
                        </h5>
                        <p class="building-information-para">
                          1:1000
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          Power backup
                        </h5>
                        <p class="building-information-para">
                          Yes
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          Air conditioning
                        </h5>
                        <p class="building-information-para">
                          Central
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <div class="building-information-div">
                        <h5 class="building-information-h5">
                          Floor description
                        </h5>
                        <p class="building-information-para">
                          2B+G+4
                        </p>
                      </div>
                    </div>                 
              </div>
          </div>
      </div>
  <!-- Property Detailed Section 3 Ended Here -->


  <!-- Property Detailed Section 4 Started Here -->
      <div class="property-detail-section4">
          <div class="container">
              <div class="property-detail-section4-content">
                  <h1 class="property-detail-section4-h1">
                    Floor Plan
                  </h1>
                  <div class="property-detail-section4-img-div">
                      <img src="./assets/floor-plan-img1" alt="" class="floor-plan-img1">
                  </div>

                  <div class="img-modal img-hidden">
                    <i class="fa-solid fa-xmark fa-xmark2"></i>
                      <div class="container">
                          <div class="row">
                            <div class="col-lg-12 col-12">
                              <div class="img-modal-content">
                                  <img src="./assets/floor-plan-img1" alt="" class="img-modal-content-img">
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="img-modal-container img-hidden"></div>
              </div>
          </div>
      </div>
  <!-- Property Detailed Section 4 Ended Here -->


  <!-- Property Detailed Section 5 Started Here -->
      <div class="property-detail-section5">
          <div class="container">
            <div class="property-detail-section5-map">
              <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="360" id="gmap_canvas" src="https://maps.google.com/maps?q=india&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:100%;}</style><a href="https://embedgooglemap.2yu.co">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:100%;}</style></div></div>
            </div>
          </div>
      </div>
  <!-- Property Detailed Section 5 Ended Here -->
  

  <!-- Proerty Detailed Section 6 Started Here -->
      <div class="property-detail-section6">
          <div class="container">
              <h1 class="property-detail-section6-h1">
                More properties like this
              </h1>
              <div class="row">
                <div class="swiper mySwiper" id="mySwiper1">
                  <div class="swiper-wrapper latest-service-container-wrapper">
                      <div class="col-lg-4 col-md-6 col-12 swiper-slide">
                          <div class="property2-section1-main-card">
                            <div class="property2-section1-card-img-div">
                              <img src="./assets/property2-card-img22.webp" alt="" class="property2-card-img">
                              <div class="bookmark-heart">
                                <i class="fa-regular fa-bookmark fa-heart1"></i>
                              </div>
                            </div>
                            <a href="./property-detail.php" class="property-detail-section6-anchor">
                              <div class="property2-section1-card-content">
                                <h4 class="property2-section1-card-content-h4">
                                  Northwest Center
                                </h4>
                                <p class="property2-section1-card-content-para2">
                                  3, 4, 5 BHK Apartment,Independent House/Villa, Chakrata Road, Dehradun
                                </p>
                                <div class="property2-section1-div-flex">
                                  <p class="property2-section1-card-content-para3">
                                    10,500 sqft
                                  </p>
                                  <p class="property2-section1-card-content-para4">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>&nbsp; 2 Cr - 4.2 Cr
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 swiper-slide">
                        <div class="property2-section1-main-card">
                            <div class="property2-section1-card-img-div">
                              <img src="./assets/property2-card-img33.webp" alt="" class="property2-card-img">
                              <div class="bookmark-heart">
                                <i class="fa-regular fa-bookmark fa-heart1"></i>
                              </div>
                            </div>
                            <div class="property2-section1-card-content">
                              <h4 class="property2-section1-card-content-h4">
                                Pearl Tower
                              </h4>
                              <p class="property2-section1-card-content-para2">
                                2, 3 BHK Apartment,Independent House/Villa, Mumbai
                              </p>
                              <div class="property2-section1-div-flex">
                                <p class="property2-section1-card-content-para3">
                                  1470 sqft
                                </p>
                                <p class="property2-section1-card-content-para4">
                                  <i class="fa-solid fa-indian-rupee-sign"></i>&nbsp; 60 Lakh - 1 Cr
                                </p>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 swiper-slide">
                        <div class="property2-section1-main-card">
                            <div class="property2-section1-card-img-div">
                              <img src="./assets/property2-card-img44.webp" alt="" class="property2-card-img">
                              <div class="bookmark-heart">
                                <i class="fa-regular fa-bookmark fa-heart1"></i>
                              </div>
                            </div>
                            <div class="property2-section1-card-content">
                              <h4 class="property2-section1-card-content-h4">
                                One North
                              </h4>
                              <p class="property2-section1-card-content-para2">
                                4 BHK Apartment, Kokapet, Hyderabad
                              </p>
                              <div class="property2-section1-div-flex">
                                <p class="property2-section1-card-content-para3">
                                  3230 sqft
                                </p>
                                <p class="property2-section1-card-content-para4">
                                  <i class="fa-solid fa-indian-rupee-sign"></i>&nbsp; 4 Cr
                                </p>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 swiper-slide">
                        <div class="property2-section1-main-card">
                            <div class="property2-section1-card-img-div">
                              <img src="./assets/property2-card-img55.webp" alt="" class="property2-card-img">
                              <div class="bookmark-heart">
                                <i class="fa-regular fa-bookmark fa-heart1"></i>
                              </div>
                            </div>
                            <div class="property2-section1-card-content">
                              <h4 class="property2-section1-card-content-h4">
                                53/56 Tower
                              </h4>
                              <p class="property2-section1-card-content-para2">
                                2, 3, 4 BHK Apartment, Amenora Mall, Pune
                              </p>
                              <div class="property2-section1-div-flex">
                                <p class="property2-section1-card-content-para3">
                                  3230 sqft
                                </p>
                                <p class="property2-section1-card-content-para4">
                                  <i class="fa-solid fa-indian-rupee-sign"></i>&nbsp; 4 Cr
                                </p>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 swiper-slide">
                        <div class="property2-section1-main-card">
                            <div class="property2-section1-card-img-div">
                              <img src="./assets/property2-card-img6.webp" alt="" class="property2-card-img">
                              <div class="bookmark-heart">
                                <i class="fa-regular fa-bookmark fa-heart1"></i>
                              </div>
                            </div>
                            <div class="property2-section1-card-content">
                              <h4 class="property2-section1-card-content-h4">
                                United Apartment
                              </h4>
                              <p class="property2-section1-card-content-para2">
                                1,2 BHK Apartment, Panvel, Navi Mumbai
                              </p>
                              <div class="property2-section1-div-flex">
                                <p class="property2-section1-card-content-para3">
                                  1500 sqft
                                </p>
                                <p class="property2-section1-card-content-para4">
                                  <i class="fa-solid fa-indian-rupee-sign"></i>&nbsp; 1 Cr - 3.4 Cr
                                </p>
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 swiper-slide">
                        <div class="property2-section1-main-card">
                            <div class="property2-section1-card-img-div">
                              <img src="./assets/property2-card-img7.webp" alt="" class="property2-card-img">
                              <div class="bookmark-heart">
                                <i class="fa-regular fa-bookmark fa-heart1"></i>
                              </div>
                            </div>
                            <div class="property2-section1-card-content">
                              <h4 class="property2-section1-card-content-h4">
                                Gateway Plaza
                              </h4>
                              <p class="property2-section1-card-content-para2">
                                2, 3 BHK Apartment,Independent House/Villa, Pune
                              </p>
                              <div class="property2-section1-div-flex">
                                <p class="property2-section1-card-content-para3">
                                  2000 sqft
                                </p>
                                <p class="property2-section1-card-content-para4">
                                  <i class="fa-solid fa-indian-rupee-sign"></i>&nbsp; 90 Lakh - 1.4 Cr
                                </p>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="swiper-pagination" id="swiper-pagination1"></div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
              </div>
          </div>
      </div>
  <!-- Proerty Detailed Section 6 Ended Here -->


  <!-- Footer Section Started Here -->
    <footer>
      <div>
        <div class="footer-border d-flex justify-content-between footer-logo">
          <div>
            <img class="logo-img" src="./assets/index/logo.webp" alt="" />
          </div>
          <div class="d-flex align-items-center gap-3">
            <a href="./contact-us.php" class="color-w contact-us">Contact Us </a>

            <div><img src="./assets/yellow-arrow.png" alt="" /></div>
          </div>
        </div>
      </div>

      <div
        class="d-flex justify-content-center flex-row flex-wrap color-w fsize-18 mt-5"
      >
        <div class="sub-footer-component">
          <div >
            <a class="footer-sub-content" href="">Find & lease space</a>
          </div>
          <div >
            <a class="footer-sub-content" href="">Manage property & portfolio</a>
          </div>
          <div >
            <a class="footer-sub-content" href="">Design & deliver projects</a>
          </div>
          <div >
            <a class="footer-sub-content" href="">Invest in real estate</a>
          </div>
        </div>
        <div class="sub-footer-component">
          <div></div>
          <a  class="footer-sub-content" href="">Transform with technology</a>

          <div>
            <a  class="footer-sub-content" href="">Industries</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="">Trends & Insights</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="./services.php">Services</a>
          </div>
        </div>
        <div class="sub-footer-component">
          <div>
            <a  class="footer-sub-content" href="./about-us.php">About Visator realty</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="">Careers</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="">Newsroom</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="">Our ESG & sustainability</a>
          </div>
        </div>
        <div class="sub-footer-component">
          <div>
            <a  class="footer-sub-content" href="">Leadership program | Visator realty</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="">Investor relations</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="./contact-us.php">Contact Us</a>
          </div>
          <div>
            <a  class="footer-sub-content" href="">Subscribe to our newsletter</a>
          </div>
        </div>
      </div>

      <div class="color-w footer-sec-3">
        <div class="social-media">
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-linkedin"></i>
          <i class="fa-brands fa-twitter"></i>
          
        </div>
      </div>
    </footer>
  <!-- Footer Section Ended Here -->





  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper("#mySwiper1", {
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: "#swiper-pagination1",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
            0: {
              swiper: 300,
              slidesPerView: 1,
            },
            520: {
              swiper: 420,
              slidesPerView: 2,
            },
            950: {
              slidesPerView: 3,
            },
          },
    });
  </script>


  <script src="./js/property-detail.js"></script>

</body>
</html>