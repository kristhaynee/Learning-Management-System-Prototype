<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/scroll.css">
    <script defer src="../assets/js/scroll.js"></script>
  </head>

  <body>
    <div id="preloader"></div>

    <header class="trans-delay-3 scroll-hidden">
      <div class="homepage-header">
        <nav class="navbar navbar-expand-sm">
          <div class="container">
            <a class="navbar-brand" href="Homepage.php"><img class="logo-header" src="../images/Logo.png" alt=""></a>

            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-1 mb-lg-0">
                <li class="nav-item">
                  <a
                    class="nav-link active text-white px-3"
                    aria-current="page"
                    href="Homepage.php"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white px-3" href="AboutUs.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white px-3" href="ContactUs.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white px-3" href="FAQs.php">FAQs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white px-3" href="Login.php">My Account</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="container flex-lg-row-reverse align-items-center g-5">
        <div class="col-10 col-sm-8 col-lg-6"></div>
        <div class="col-lg-12 banner-slogan">
            <h1 class="display-5 fw-bold lh-1 mb-3 text-white homepage-header-title">
                Unlocking Potential with PISA
            </h1>
            <p class="lead text-white text-center">
                Empowering 15-year-olds with global insights for a brighter future through the prism of education excellence.
            </p>
        </div>
        <div class="button-container-div ">
            <button type="button" class="btn-assessment">
                <span>VIEW ASSESSMENT</span>
            </button>
        </div>
    </div>
    </div>
    </header>

    <section class="pt-5 pb-5 first-sec-home trans-delay-3 scroll-slide-hidden">
        <div class="display-5 fw-bold lh-1 mb-3 pt-4">
            <h1 class="text-center home-about">
                What is PISA?
            </h1>
            <p class="lead text-center fw-regular pt-4 lh-sm custom-max-width">
                PISA is the OECD's Programme for International Student Assessment. PISA measures 15-year-olds’ ability to use their reading, mathematics and science knowledge and skills to meet real-life challenges.
            </p>
        </div>
        <div class="button-container-div ">
            <button type="button" class="btn-assessment">
                <span>Learn More</span>
            </button>
        </div>
    </section>

    <section class="container my-5 ">
    <div class="row g-lg-3 py-4 trans-delay-3 scroll-hidden"> <!-- Reduced the gutter between columns using g-lg-3 -->
        <div class="col-sm-3 text-center">
            <h3 class="display-4 fw-bold lh-1 mt-3 mb-3 home-sect-two"> 
                PISA Test Assessment
            </h3>
        </div>
        
        <div class="col-md-7 d-flex align-items-center">
        <div class="vr"></div>
            <p class="lead fw-regular text-middle fw-medium"> 
                Explore and access comprehensive information about PISA (Programme for International Student Assessment) test assessments in this section.
            </p>
        </div>
        <div class="col-2 d-flex align-items-center">
            <a type="button" class="btn-assessment text-middle" href="testAssessment.php">
                <span>View All</span>
            </a>
        </div>
    </div>

    <section class="wrapper">
    <div class="container-fostrap">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="card trans-delay-1 scroll-slide-hidden">
                            <a class="img-card" href="#">
                            <img src="../assets/images/assessment 1.jpg" />
                          </a>
                            <div class="card-content px-4">
                                <h4 class="card-title">
                                    <a href="#"> Lorem ipsum dolor varius vel pharetra
                                  </a>
                                </h4>
                                <p class="text-truncate">
                                    Arcu bibendum at varius vel pharetra vel turpis nunc
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="#" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card trans-delay-2 scroll-slide-hidden">
                            <a class="img-card" href="#">
                            <img src="../assets/images/assessment 2.jpg" />
                          </a>
                          <div class="card-content px-4">
                                <h4 class="card-title">
                                    <a href="#"> Diam vulputate ut pharetra sit
                                  </a>
                                </h4>
                                <p class="text-truncate">
                                    Turpis massa sed elementum tempus.
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="#" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="card trans-delay-3 scroll-slide-hidden">
                            <a class="img-card" href="#">
                            <img src="../assets/images/assessment 3.jpg" />
                          </a>
                          <div class="card-content px-4">
                                <h4 class="card-title">
                                    <a href="#">Odio euismod lacinia at quis
                                  </a>
                                </h4>
                                <p class="text-truncate">
                                    Commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Amet est placerat in egestas erat imperdiet
                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="#" class="btn btn-link btn-block">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>

<!-- Footer -->
<section class="gradient-background">
      <footer class="container py-5 text-white">
        <div class="row">
          <div class="col-sm-6 col-md-6 mb-3">
            <form>
              <img class="logo-footer" src="../assets/images/Logo.png" alt="PISA">
              <p class="py-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
              </p>
            </form>
          </div>

          <div class="col-sm-3 col-md-3 mb-3">
            <h5>Quick links</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Contact</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
            </ul>
          </div>
          
          <div class="col-sm-3 col-md-2 mb-3">
            <h5>Contact info</h5>
            <ul class="nav flex-column">
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-white">Address</a>
            <p>123 Fifth Avenue, New York, NY 10160</p>
            </li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Phone</a>
            <p>929-242-6868</p></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Email</a>
            <p>contact@info.com</p></li>
          </ul>
        </div>

   
      </div>
      
  <div class="row">
    <div class="col">
      <img class="mx-2 my-2" src="../assets/images/facebook.svg" alt="facebook">
      <img class="mx-2 my-2" src="../assets/images/twitter.svg" alt="twitter">
      <img class="mx-2 my-2" src="../assets/images/instagram.svg" alt="instagram">
      <img class="mx-2 my-2" src="../assets/images/youtube.svg" alt="youtube">
      <img class="mx-2 my-2" src="../assets/images/linkedin.svg" alt="linkedin">
      <img class="mx-2 my-2" src="../assets/images/share-fill.svg" alt="share">
    </div>
    <div class="col text-end">
      Copyright &copy; 2023 PISA
    </div>
  </div>
    </footer>
  </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
      ></script>
  </body>
  </html>
  


