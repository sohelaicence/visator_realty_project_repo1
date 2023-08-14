<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <?php include 'include_stylesheet.php' ?>;

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

    


    <!-- carousel starts -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
        <button
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide-to="3"
          aria-label="Slide 4"
        ></button>
      </div>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row header-fixed">
            <div>
              <div class="hero-header1">Expanding Expanding</div>
            </div>
            <div>
              <div class="hero-description1">
                Facere aperiam possimus culpa labore iste quisquam quod dolorum
                iure porro minus. In molestiae accusamus a quasi vel neque animi
                dicta odit magni voluptatibus. Earum a nam cum ad officiis odit
                doloribus aliquam totam laborum
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item hero-item-2">
          <div class="row header-fixed">
            <div>
              <div class="hero-header2">Expanding Expanding</div>
            </div>
            <div>
              <div class="hero-description2">
                Facere aperiam possimus culpa labore iste quisquam quod dolorum
                iure porro minus. In molestiae accusamus a quasi vel neque animi
                dicta odit magni voluptatibus. Earum a nam cum ad officiis odit
                doloribus aliquam totam laborum
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item hero-item-3">
          <div class="row header-fixed">
            <div>
              <div class="hero-header3">Expanding Expanding</div>
            </div>
            <div>
              <div class="hero-description3">
                Facere aperiam possimus culpa labore iste quisquam quod dolorum
                iure porro minus. In molestiae accusamus a quasi vel neque animi
                dicta odit magni voluptatibus. Earum a nam cum ad officiis odit
                doloribus aliquam totam laborum
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item hero-item-4">
          <div class="row header-fixed">
            <div>
              <div class="hero-header4">Expanding Expanding</div>
            </div>
            <div>
              <div class="hero-description4">
                Facere aperiam possimus culpa labore iste quisquam quod dolorum
                iure porro minus. In molestiae accusamus a quasi vel neque animi
                dicta odit magni voluptatibus. Earum a nam cum ad officiis odit
                doloribus aliquam totam laborum
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- carousel ends -->

    <!-- section-1 starts -->
    <div class="home-real">

      <div class="home-real-para">
        We are the global leader in commercial real estate services and investments. With services, insights and data that span every dimension of the industry, we create solutions for clients of every size, in every sector and across every geography.
      </div>

      <div class="fsize-28 pt-5">

        <a href="about-us.html" class="btn-go-to-about-page">Learn More</a>
        
        
        </div>
      </div>
    </div>

    <!-- section-1 ends -->

    <!-- section-2 starts -->

    <div class="container-needs py-5">
      <div class="">
        <div class="fsize-36 px-xl-5 px-xxl-5 px-4 fweight-400 mx-3">
          <span class="your-need-heading nanum-font-family"> Your Needs </span>
          <div class="fsize-17 py-3">Your all-in-one solution for all your real estate needs - from buying, selling, renting to property management and consulting, we've got you covered.
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
            <div class="home-find_lease mx-2 p-5  mb-4">
              <div class="fsize-18 pb-4 your-needs-sub-heading nanum-font-family">Find & lease space</div>
              <div class="fsize-17 pb-3">
                Move into your first workspace, find a new one with room to
                grow, or develop a complete location strategy
              </div>
              
              <a class="fsize-18 icon-color-blue" href="#"
                >Know More
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
            <div class="home-find_lease mx-2 p-5 mb-4">
              <div class="fsize-18 pb-4 your-needs-sub-heading nanum-font-family">Find & lease space</div>
              <div class="fsize-17 pb-3">
                Move into your first workspace, find a new one with room to
                grow, or develop a complete location strategy
              </div>
              <a class="fsize-18 icon-color-blue" href="#"
                >Know More
                
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
            <div class="home-find_lease mx-2 p-5 mb-4">
              <div class="fsize-18 pb-4 your-needs-sub-heading nanum-font-family">Find & lease space</div>
              <div class="fsize-17 pb-3">
                Move into your first workspace, find a new one with room to
                grow, or develop a complete location strategy
              </div>
              <a class="fsize-18 icon-color-blue" href="#"
                >Know More
                
              </a>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
            <div class="home-find_lease mx-2 p-5 mb-4">
              <div class="fsize-18 pb-4 your-needs-sub-heading nanum-font-family">Find & lease space</div>
              <div class="fsize-17 pb-3">
                Move into your first workspace, find a new one with room to
                grow, or develop a complete location strategy
              </div>
              <a class="fsize-18 icon-color-blue" href="#"
                >Know More
                
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
            <div class="home-find_lease mx-2 p-5 mb-4">
              <div class="fsize-18 pb-4 your-needs-sub-heading nanum-font-family">Find & lease space</div>
              <div class="fsize-17 pb-3">
                Move into your first workspace, find a new one with room to
                grow, or develop a complete location strategy
              </div>
              <a class="fsize-18 icon-color-blue" href="#"
                >Know More
                
              </a>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
            <div class="home-find_lease mx-2 p-5 mb-4">
              <div class="fsize-18 pb-4 your-needs-sub-heading card-heading-nanum-font-family">Find & lease space</div>
              <div class="fsize-17 pb-3">
                Move into your first workspace, find a new one with room to
                grow, or develop a complete location strategy
              </div>
              <a class="fsize-18 icon-color-blue" href="#"
                >Know More
                
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- section-2 ends -->

    <!-- section-3 starts -->

    <div class="research-container mb-5">
      <div class="fsize-36 my-5 text-center">
        <span class="research-heading nanum-font-family"> Research </span>
      </div>


      <div class="research-container-wrapper">
        <i id="left" class="fa-solid fa-angle-left icon-arrows"></i>
        <ul class="research-container-carousel">
  
          <li class="research-container-card">
          
            <div class="image-card-container">
              <div class="image-div">
                <img src="./assets/index/industrial.webp" alt="Avatar" class="image" />
                <h1 class="trending-card-h1 nanum-font-family">Industrial</h1>
              </div>
              <div class="overlay">
                <div class="text">
                  <ul class="card-ul">
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor">Electronics & semiconductor manufacturing</a>
                        </div>
                      </div>
                    </li>
    
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor">
                            Future of logistics: Warehousing market India</a
                          >
                        </div>
                      </div>
                    </li>
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor"> Automation Technologies in L&I real estate</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
  
          </li>
          <li class="research-container-card">
            
            <div class="image-card-container">
              <div class="image-div">
                <img src="./assets/index/office.webp" alt="Avatar" class="image" />
                <h1 class="trending-card-h1 nanum-font-family">Office</h1>
              </div>
              <div class="overlay">
                <div class="text">
                  <ul class="card-ul">
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor"> Office Market Update: Q1 2023</a>
                        </div>
                      </div>
                    </li>
    
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor"> GCC Guide 2023</a>
                        </div>
                      </div>
                    </li>
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor"> A startups guide to office space</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
  
          </li>
          <li class="research-container-card">
            
            <div class="image-card-container">
              <div class="image-div">
                <img src="./assets/index/latest.webp" alt="Avatar" class="image" />
                <h1 class="trending-card-h1 nanum-font-family">Latest</h1>
              </div>
              <div class="overlay">
                <div class="text">
                  <ul class="card-ul">
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor">
                            Pulse real estate monthly monitor: May 2023</a
                          >
                        </div>
                      </div>
                    </li>
    
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor">
                            How companies are partnering with suppliers to deliver
                            social impact</a
                          >
                        </div>
                      </div>
                    </li>
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor">Electronics & semiconductor manufacturing</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
  
          </li>
          <li class="research-container-card">
            
            <div class="image-card-container">
              <div class="image-div">
                <img src="./assets/index/guide.webp" alt="Avatar" class="image" />
                <h1 class="trending-card-h1 nanum-font-family">Guide</h1>
              </div>
              <div class="overlay">
                <div class="text">
                  <ul class="card-ul">
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor">Powering growth in a hybrid era</a>
                        </div>
                      </div>
                    </li>
    
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor"> Construction Cost Guide, India: 2023</a>
                        </div>
                      </div>
                    </li>
    
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor">GCC Guide 2023</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
  
          </li>
          <li class="research-container-card">
            
            <div class="image-card-container">
              <div class="image-div">
                <img src="./assets/index/sustainability.webp" alt="Avatar" class="image" />
                <h1 class="sustainability-heading trending-card-h1 trending-card-h1 nanum-font-family">Sustainability</h1>
              </div>
              <div class="overlay">
                <div class="text">
                  <ul class="card-ul">
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor">Green Leasing 2.0</a>
                        </div>
                      </div>
                    </li>
    
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor"> Responsible Real Estate: Social Value</a>
                        </div>
                      </div>
                    </li>
    
                    <li class="card-li">
                      <div class="d-flex res-gap align-items-start content">
                        <div>
                          <i class="fa-solid fa-arrow-right-long"></i>
                        </div>
                        <div>
                          <a href="" class="trends-card-anchor"
                            >Value of sustainability Evidence for green premium in
                            Asia</a
                          >
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
  
          </li>
        </ul>
        <i id="right" class="fa-solid fa-angle-right icon-arrows"></i>
      </div>
    </div>

    <!-- section-3 ends -->

    <!-- section-4 starts -->
    <div class="section-4 justify-content-between">
      <div class="home-planning-content px-5">
        <div class="fsize-36 pl-3 pb-5 nanum-font-family">Planning your next workspace?</div>
        <div>
          <ul class="fsize-22 pb-5">
            <li class="planning-li card-heading-nanum-font-family"> <span class="circle-for-planning-li"><i class="fa-solid fa-check"></i></span> We shape new office strategies</li>
            <li class="planning-li card-heading-nanum-font-family"> <span class="circle-for-planning-li"><i class="fa-solid fa-check"></i></span> Select the right locations</li>
            <li class="planning-li card-heading-nanum-font-family"> <span class="circle-for-planning-li"><i class="fa-solid fa-check"></i></span> Space options to better support you business goals.
            </li>
          </ul>
        </div>
      </div>
      <div class="home-planning-img mb-5 no-img-repeat"></div>
    </div>
    <!-- section-4 ends -->

    <!-- section-5 starts -->
    <div class="home-section-5 py-5">
      <div class="fsize-36 text-center">
        <span class="success-story-heading nanum-font-family"> Success stories </span>
      </div>

      <div class="pt-5 d-flex justify-content-around flex-wrap">
        <div class="home-monthly-stories">
          <div class="home-stories-content">
            <div class="fsize-22 pb-5 stories-header card-heading-nanum-font-family">
              Pulse Real Estate Monthly Monitor: May 2023
            </div>
            <div class="fsize-17">
              Cuts carbon emissions by 50%, delivering on its 10-year energy
              reduction goal more than 3 years ahead of schedule
            </div>
          </div>
        </div>

        <div class="home-bank-stories">
          <div class="home-bank-stories-content">
            <div class="fsize-22 pb-5 stories-header card-heading-nanum-font-family">
              Global bank surpasses ambitious energy savings goals
            </div>
            <div class="fsize-17">
              Cuts carbon emissions by 50%, delivering on its 10-year energy
              reduction goal more than 3 years ahead of schedule
            </div>
          </div>
        </div>
        <div class="home-savings-stories">
          <div class="home-savings-stories-content">
            <div class="fsize-22 pb-5 stories-header card-heading-nanum-font-family">
              Centralized tracking of TI allowances results in significant cost
              savings
            </div>
            <div class="fsize-17">
              Cuts carbon emissions by 50%, delivering on its 10-year energy
              reduction goal more than 3 years ahead of schedule
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- section-5 ends -->

    <!-- section-6 starts -->




    <div class="home-trends-section">
      <div class="container">
        <div class="fsize-36 my-5 text-center">
          <span class="trends-heading nanum-font-family"> Trends & Insights </span>
        </div>
  
        <div class="trends-card-wrapper swiper mySwiper">
  
          <div class="trends-cards-container swiper-wrapper">
  
              <div class="trends-card-container swiper-slide">
                <div class="trends-image-div">
                  <img src="./assets/index/Rectangle 636.webp" alt="Avatar" class="image1" />
                  <h1 class="trends-card-h1 nanum-font-family">
                    Workplace
                  </h1>
                </div>
                <div class="overlay1">
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">Office partnerships tackling hybrid work, net zero goals</a>
                    </div>
                  </div>
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">How companies are partnering with suppliers to deliver
                        social impact</a>
                    </div>
                  </div>
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">How the data center industry is bridging the skills
                        gap</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="trends-card-container swiper-slide">
                <div class="trends-image-div">
                  <img src="./assets/index/Rectangle 638.webp" alt="Avatar" class="image1" />
                  <h1 class="trends-card-h1 nanum-font-family">
                    Cities
                  </h1>
                </div>
                <div class="overlay1">
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">Office partnerships tackling hybrid work, net zero goals</a>
                    </div>
                  </div>
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">How companies are partnering with suppliers to deliver
                        social impact</a>
                    </div>
                  </div>
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">How the data center industry is bridging the skills
                        gap</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="trends-card-container swiper-slide">
                <div class="trends-image-div">
                  <img src="./assets/index/Rectangle 637.webp" alt="Avatar" class="image1" />
                  <h1 class="trends-card-h1 nanum-font-family">
                    Investor
                  </h1>
                </div>
                <div class="overlay1">
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">Office partnerships tackling hybrid work, net zero goals</a>
                    </div>
                  </div>
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">How companies are partnering with suppliers to deliver
                        social impact</a>
                    </div>
                  </div>
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">How the data center industry is bridging the skills
                        gap</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="trends-card-container swiper-slide">
                <div class="trends-image-div">
                  <img src="./assets/index/Rectangle 639.webp" alt="Avatar" class="image1" />
                  <h1 class="trends-card-h1 nanum-font-family">
                    Latest
                  </h1>
                </div>
                <div class="overlay1">
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">Office partnerships tackling hybrid work, net zero goals</a>
                    </div>
                  </div>
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">How companies are partnering with suppliers to deliver
                        social impact</a>
                    </div>
                  </div>
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">How the data center industry is bridging the skills
                        gap</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="trends-card-container swiper-slide">
                <div class="trends-image-div">
                  <img src="./assets/index/Rectangle 636.webp" alt="Avatar" class="image1" />
                  <h1 class="trends-card-h1 nanum-font-family">
                    Workplace
                  </h1>
                </div>
                <div class="overlay1">
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">Office partnerships tackling hybrid work, net zero goals</a>
                    </div>
                  </div>
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">How companies are partnering with suppliers to deliver
                        social impact</a>
                    </div>
                  </div>
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">How the data center industry is bridging the skills
                        gap</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="trends-card-container swiper-slide">
                <div class="trends-image-div">
                  <img src="./assets/index/Rectangle 638.webp" alt="Avatar" class="image1" />
                  <h1 class="trends-card-h1 nanum-font-family">
                    Cities
                  </h1>
                </div>
                <div class="overlay1">
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">Office partnerships tackling hybrid work, net zero goals</a>
                    </div>
                  </div>
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">How companies are partnering with suppliers to deliver
                        social impact</a>
                    </div>
                  </div>
                  <div class="trends-card-overlay-content">
                    <div>
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </div>
                    <div>
                      <a href="#" class="trends-card-anchor">How the data center industry is bridging the skills
                        gap</a>
                    </div>
                  </div>
                </div>
              </div>
  
          </div>
  
          <div class="swiper-pagination swiper-pagination-bullet-for-cateogries"></div>
          
        </div>
      </div>
      
      
    </div>


          
            
    <!-- section-6 ends -->
    <footer>
      <div>
        <div class="footer-border d-flex justify-content-between footer-logo">
          <div>
            <img class="logo-img" src="./assets/index/logo.webp" alt="" />
          </div>
          <div class="d-flex align-items-center gap-3">
            <a href="./contact-us.html" class="color-w contact-us">Contact Us </a>

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
            <a  class="footer-sub-content" href="./services.html">Services</a>
          </div>
        </div>
        <div class="sub-footer-component">
          <div>
            <a  class="footer-sub-content" href="./about-us.html">About Visator realty</a>
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
            <a  class="footer-sub-content" href="./contact-us.html">Contact Us</a>
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




    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          spaceBetween: 30,
          autoplay: true,
          loop: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
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


    <script src="/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    
    <script src="./js/index-script.js"></script>
    <script src="./script.js"></script>
  </body>
</html>
