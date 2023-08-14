<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php include 'include_stylesheet.php' ?>;

  <title>Property</title>

  <!-- CSS File Link -->
  <link rel="stylesheet" href="./css/property.css">

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


  <!-- Property Hero Section 1 Started Here -->
      <div class="property-section1">
          <div class="container-fluid">
              <div class="property-section1-content">
                  <h1 class="property-hero-h1" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    Properties
                  </h1>
              </div>
          </div>
      </div>
  <!-- Property Hero Section 1 Ended Here -->

  <!-- Property Section 2 Started Here -->
      <div class="property-section2">
          <div class="container">
              <div class="property-section2-content">
                  <p class="property-section2-para">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid sunt provident impedit aspernatur, totam velit quae sapiente, ea, assumenda eveniet animi inventore accusantium atque? Asperiores culpa id magni quaerat exercitationem provident aut voluptas obcaecati? Odio ratione veritatis asperiores deserunt. 
                  </p>
              </div>
          </div>
      </div>
  <!-- Property Section 2 Ended Here -->

  <!-- Property Section 3 Started Here -->
      <div class="property-section3">
          <div class="container">
              <div class="row property-section3-row">
                  <div class="property-section3-content">
                      <h1 class="property-section3-h1">
                        Browse Properties for Lease
                      </h1>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="property-section3-lease-card">
                        <h4 class="property-lease-card-h3">
                          Properties for Lease
                        </h4>
                        <p class="property-lease-card-para">
                          Explore properties for lease across all major property types, including office, retail, data centers, and healthcare.
                        </p>
                        <a class="fsize-18 icon-color-blue" href="./property-2.php" target="_blank">Search Properties for Lease</a>                        
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                    <div class="property-section3-lease-card">
                        <h4 class="property-lease-card-h3">
                          Retail Properties for Lease
                        </h4>
                        <p class="property-lease-card-para">
                          Locate retail properties for lease like Big Box, Restaurants, Strip/In-line Centers, Urban Street Retail and everything in between.
                        </p>
                        <a class="fsize-18 icon-color-blue" href="./property-2.php" target="_blank">Search Retail Properties for Lease </a>                            
                    </div>
                  </div>
              </div>
          </div>
      </div>
  <!-- Property Section 3 Ended Here -->


  <!-- Property Section 5 Started Here -->
      <div class="property-section5">
          <div class="container">
              <div class="property-section5-img-div">
                <h1 class="property-section5-h1" data-aos="fade-right" data-aos-duration="750" data-aos-easing="ease-in-sine" data-aos-once="true">
                  Lease & Sales Properties For Everyone
                </h1>
              </div>
          </div>
      </div>
  <!-- Property Section 5 Ended Here -->


  <!-- Property Section 4 Started Here -->
      <div class="property-section4">
        <div class="container">
            <div class="row property-section4-row">
                <div class="property-section4-content">
                    <h1 class="property-section4-h1">
                      Browse Properties for Sale
                    </h1>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="property-section4-sale-card">
                      <h4 class="property-sale-card-h3">
                        Properties for Sale
                      </h4>
                      <p class="property-sale-card-para">
                        Explore properties for sale across all major property types, including office, retail, data centers, and healthcare.
                      </p>
                      <a class="fsize-18 icon-color-blue" href="#">Search Properties for Sale</a>                        
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="property-section4-sale-card">
                      <h4 class="property-sale-card-h3">
                        Retail Properties for Sale
                      </h4>
                      <p class="property-lease-card-para">
                        Locate retail properties for sale like Big Box, Restaurants, Strip/In-line Centers, Urban Street Retail and everything in between.
                      </p>
                      <a class="fsize-18 icon-color-blue" href="#">Search Retail Properties for Sale  </a>                            
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                  <div class="property-section4-sale-card">
                      <h4 class="property-sale-card-h3">
                        Retail Properties for Lease
                      </h4>
                      <p class="property-sale-card-para">
                        Browse our U.S. investment property listings by property type, location and criteria across all major property types.
                      </p>
                      <a class="fsize-18 icon-color-blue" href="#">Search Investment Properties for Sale </a>                            
                  </div>
                </div>
            </div>
        </div>
      </div>
  <!-- Property Section 4 Ended Here -->



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
  
  
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- JS File Link -->
  <script src="./js/property.js"></script>

</body>
</html>