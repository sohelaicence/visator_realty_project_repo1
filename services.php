<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services Main</title>

    <?php include 'include_stylesheet.php' ?>;
    
    <link rel="stylesheet" href="./css/services.css" />

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


    <div class="services-section1">
      <div class="container-fluid service-section-container-fluid">
        <div class="row service-section-row">
          <div class="col-md-12">
            <div class="services-hero-img-section-1 color-w no-img-repeat">
              <div class="fsize-24 section1-content nanum-font-family">
                Unlock the value in every dimension of your real estate. Using deep
                insights and global expertise, we create real estate strategies that
                drive superior business outcomes.
              </div>
              <div class="fixed-icon">
                <a href="#" class="fixed-modal-anchor">
                  <img src="./assets/contact-mail (1).png" alt="" class="modal-icon-img">
                </a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- section 1 ends -->



    <!-- section 2 starts -->

    <div class="services-section2">
      <div class="services-section2-content">
        <h3 class="service-section2-h3 nanum-font-family">
          Empowering Your Real Estate Success: Our Comprehensive Consulting Services
        </h3>
        <p class="service-section2-para">
          Visator Realty your trusted partner in real estate success. Our comprehensive consulting services are tailored to meet your unique needs and objectives. Whether you're a seasoned investor or a first-time buyer, we provide expert guidance to navigate the dynamic real estate market. Our team of experienced consultants offers valuable insights, market analysis, and strategic planning to maximize your investments and achieve optimal outcomes. From property acquisitions and portfolio management to market research and risk assessment, we are committed to empowering you with the knowledge and resources needed to make informed decisions. Discover the difference our personalized consulting services can make in your real estate journey.
        </p>
      </div>
    </div>

    <!-- section 2 ends -->

    <!-- section 3 Starts -->
    <div class="services-section3">
      <div class="card-deck container-sm row">
        <div
          class="card services-cards-section3 col-md-4 col-xs-12 col-lg-4 col-xl-4 col-xxl-4"
        >
          <div class="card-body">
            <div class="fsize-32 mb-2 service-sapna-card-heading card-heading-nanum-font-family">Real Estate Consulting</div>
            <div class="">
              <div class="fsize-17 pb-3 fweight-300">
                Build resilience, attract and retain talent and enhance
                collaboration, inspiration and connectivity in your workforce.
              </div>

              <div class="fsize-16 fw-bolder icon-color-blue">
                <a href="./consulting-service.html" class="services-card-anchor" target="_blank">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="card services-cards-section3 col-md-4 col-xs-12 col-lg-4 col-xl-4 col-xxl-4"
        >
          <div class="card-body">
            <div class="fsize-32 mb-2 service-sapna-card-heading card-heading-nanum-font-family">Maintaining Portfolio Of investors</div>
            <div class="">
              <div class="fsize-17 pb-3 fweight-300">
                Build resilience, attract and retain talent and enhance
                collaboration, inspiration and connectivity in your workforce.
              </div>
              <div class="fsize-16 fw-bolder icon-color-blue">
                <a href="./portfolio-service.html" class="services-card-anchor" target="_blank">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="card services-cards-section3 col-md-4 col-xs-12 col-lg-4 col-xl-4 col-xxl-4"
        >
          <div class="card-body">
            <div class="fsize-32 mb-2 service-sapna-card-heading card-heading-nanum-font-family">NRI Service</div>
            <div class="">
              <div class="fsize-17 pb-3 fweight-300">
                Build resilience, attract and retain talent and enhance
                collaboration, inspiration and connectivity in your workforce.
              </div>
              <div class="fsize-16 fw-bolder icon-color-blue">
                <a href="./nri-service.html" class="services-card-anchor" target="_blank">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="card services-cards-section3 col-md-4 col-xs-12 col-lg-4 col-xl-4 col-xxl-4"
        >
          <div class="card-body">
            <div class="fsize-32 mb-2 service-sapna-card-heading card-heading-nanum-font-family">Loan Facilities</div>
            <div class="">
              <div class="fsize-17 pb-3 fweight-300">
                Build resilience, attract and retain talent and enhance
                collaboration, inspiration and connectivity in your workforce.
              </div>
              <div class="fsize-16 fw-bolder icon-color-blue">
                <a href="./loan-service.html" class="services-card-anchor" target="_blank">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="card services-cards-section3 col-md-4 col-xs-12 col-lg-4 col-xl-4 col-xxl-4"
        >
          <div class="card-body">
            <div class="fsize-32 mb-2 service-sapna-card-heading card-heading-nanum-font-family">Allied Service</div>
            <div class="">
              <div class="fsize-17 pb-3 fweight-300">
                Build resilience, attract and retain talent and enhance
                collaboration, inspiration and connectivity in your workforce.
              </div>
              <div class="fsize-16 fw-bolder icon-color-blue">
                <a href="./allied-service.html" class="services-card-anchor" target="_blank">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="card services-cards-section3 col-md-4 col-xs-12 col-lg-4 col-xl-4 col-xxl-4"
        >
          <div class="card-body">
            <div class="fsize-32 mb-2 service-sapna-card-heading card-heading-nanum-font-family">Invest in Real Assets</div>
            <div class="">
              <div class="fsize-17 pb-3 fweight-300">
                Build resilience, attract and retain talent and enhance
                collaboration, inspiration and connectivity in your workforce.
              </div>
              <div class="fsize-16 fw-bolder icon-color-blue">
                <a href="./investment-service.html" class="services-card-anchor" target="_blank">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="card services-cards-section3 col-md-4 col-xs-12 col-lg-4 col-xl-4 col-xxl-4"
        >
          <div class="card-body">
            <div class="fsize-32 mb-2 service-sapna-card-heading card-heading-nanum-font-family">Invest, Finance & Value</div>
            <div class="">
              <div class="fsize-17 pb-3 fweight-300">
                Get specialized advice and find investment opportunities to fuel
                your future.
              </div>

              <div class="fsize-16 fw-bolder icon-color-blue">
                <a href="#" class="services-card-anchor anchor-modal-popup">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="card services-cards-section3 col-md-4 col-xs-12 col-lg-4 col-xl-4 col-xxl-4"
        >
          <div class="card-body">
            <div class="fsize-32 mb-2 service-sapna-card-heading card-heading-nanum-font-family">Plan, Lease & Occupy</div>
            <div class="">
              <div class="fsize-17 pb-3 fweight-300">
                Drive value and growth with consulting and transaction services
                that align with your strategic goals.
              </div>
              <div class="fsize-16 fw-bolder icon-color-blue">
                <a href="#" class="services-card-anchor anchor-modal-popup">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="card services-cards-section3 col-md-4 col-xs-12 col-lg-4 col-xl-4 col-xxl-4"
        >
          <div class="card-body">
            <div class="fsize-32 mb-2 service-sapna-card-heading card-heading-nanum-font-family">Design & Build</div>
            <div class="">
              <div class="fsize-17 pb-3 fweight-300">
                Create transformational spaces that support your business,
                clients, communities and the environment.
              </div>
              <div class="fsize-16 fw-bolder icon-color-blue">
                <a href="#" class="services-card-anchor anchor-modal-popup">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="card services-cards-section3 col-md-4 col-xs-12 col-lg-4 col-xl-4 col-xxl-4"
        >
          <div class="card-body">
            <div class="fsize-32 mb-2 service-sapna-card-heading card-heading-nanum-font-family">Manage Properties & Portfolios</div>
            <div class="">
              <div class="fsize-17 pb-3 fweight-300">
                Maximize the value of your portfolio with end-to-end solutions
                that bring together talent, technology and data.
              </div>
              <div class="fsize-16 fw-bolder icon-color-blue">
                <a href="#" class="services-card-anchor anchor-modal-popup">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="card services-cards-section3 col-md-4 col-xs-12 col-lg-4 col-xl-4 col-xxl-4"
        >
          <div class="card-body">
            <div class="fsize-32 mb-2 service-sapna-card-heading card-heading-nanum-font-family">Transform Business Outcomes</div>
            <div class="">
              <div class="fsize-17 pb-3 fweight-300">
                Build resilience, attract and retain talent and enhance
                collaboration, inspiration and connectivity in your workforce.
              </div>
              <div class="fsize-16 fw-bolder icon-color-blue">
                <a href="" class="services-card-anchor anchor-modal-popup">Know More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card services-cards-section3 col-md-4 col-xs-12 col-lg-4 col-xl-4 col-xxl-4">
          <div class="card-body">
            <div class="fsize-32 mb-2 service-sapna-card-heading card-heading-nanum-font-family">Customer Support Service</div>
            <div class="">
              <div class="fsize-17 pb-3 fweight-300">
                CBRE Investment Management helps you deliver strategic real
                assets investment solutions.
              </div>
              <div class="fsize-16 fw-bolder icon-color-blue">
                <a href="" class="services-card-anchor anchor-modal-popup">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- section 3 ends -->



    <!-- FAQ's Section Started Here -->

    <section class="faq-section my-5">
      <div class="container">
        <div class="faq-container-div">
          <h2 class="faq-container-div-heading-h2 nanum-font-family">
            Frequently Asked Questions
          </h2>
          <div class="row">
            <div class="accordion">
              <div class="accordion-item">
                <div class="accordion-item-header">
                  <p class="accordion-item-header-para card-heading-nanum-font-family">
                    Why should I choose Visator Realty?
                  </p>
                </div>
                <div class="accordion-item-body">
                  <div class="accordion-item-body-content ">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-item-header">
                  <p class="accordion-item-header-para card-heading-nanum-font-family">
                    Do you offer home loan services?
                  </p>
                </div>
                <div class="accordion-item-body">
                  <div class="accordion-item-body-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-item-header">
                  <p class="accordion-item-header-para card-heading-nanum-font-family">
                    What are Capital Gains on property purchase?
                  </p>
                </div>
                <div class="accordion-item-body">
                  <div class="accordion-item-body-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-item-header">
                  <p class="accordion-item-header-para card-heading-nanum-font-family">
                    What is carpet area?
                  </p>
                </div>
                <div class="accordion-item-body">
                  <div class="accordion-item-body-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <div class="accordion-item-header">
                  <p class="accordion-item-header-para card-heading-nanum-font-family">
                    What is the selling/buying process like?
                  </p>
                </div>
                <div class="accordion-item-body">
                  <div class="accordion-item-body-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- FAQ's Section Ended Here -->



  <!-- Form Preload Modal Section Started Here -->
    <div class="popup-modal-content hidden">
      <i class="fa-solid fa-xmark"></i>

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

  
  <!-- Footer Section Ende Here -->

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <script src="/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>

    <script src="./js/service.js"></script>
    <script src="script.js"></script>
  </body>
</html>
