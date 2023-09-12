<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Assessments</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
  </head>

<!-- Header -->
  <body>
    <header>
      <div class="testAssessment-header">
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
          <div class="col-lg-8">
            <h1 class="display-5 fw-bold lh-1 mb-3 text-white header-title">
              Unlocking Excellence
            </h1>
            <p class="lead text-white header-text">
              Discover a comprehensive collection of standardized tests and assessments 
              meticulously curated for educational excellence. Explore a diverse 
              range of assessments designed to support the mission of the Programme for 
              International Student Assessment (PISA) and empower global education initiatives.
            </p>
          </div>
        </div>
      </div>
    </header>
<!-- End Header -->

<!-- Page Contents -->

    <!-- Searchbar -->
    <section class="mt-4">
    <div class="container w-75">
        <br/>
        <div class="row justify-content-center">
            <form class="card card-sm">
                <div class="card-body row no-gutters align-items-center">
                    <!-- Category Filter Dropdown -->
                    <div class="col-auto">
                        <select class="form-control form-control-lg filter-dropdown-design">
                            <option value="all">Filter by Subject</option>
                            <option value="category1">Math</option>
                            <option value="category2">Science</option>
                            <!-- Add more categories as needed -->
                        </select>
                    </div>
                    <!-- Search Text Input -->
                    <div class="col">
                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search Assessments or keywords">
                    </div>
                    <!-- Search Button -->
                    <div class="col-auto">
                        <button class="btn btn-lg srch-btn-color" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 col-md-10 col-lg-8 mt-4">
    </div>
</section>


    <!-- Searchbar -->

    <!-- assessment list -->
    <section class="mb-5">
    <div class="d-flex justify-content-center">
        <div class="card w-75 p-4 custom-border">
            <div class="d-flex">
                <div class="col-md-8">
                    <h5 class="card-title assessment-title-custom">Assessment Title Lorem ipsum dolor sit amet</h5>
                    <p class="card-text"><span>Posted by </span><strong>Teacher's Name</strong></p>
                    <p class="assessment-tags">#assessments #tags #here</p>
                </div>
                <div class="col-md-3 align-items-center justify-content-center">
                    <a type="button" class="btn-takeAssessment text-middle" href="#">
                        <span>Take Assessment</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card w-75 p-4 custom-border">
            <div class="d-flex">
                <div class="col-md-8">
                    <h5 class="card-title assessment-title-custom">Assessment Title Lorem ipsum dolor sit amet</h5>
                    <p class="card-text"><span>Posted by </span><strong>Teacher's Name</strong></p>
                    <p class="assessment-tags">#assessments #tags #here</p>
                </div>
                <div class="col-md-3 align-items-center justify-content-center">
                    <a type="button" class="btn-takeAssessment text-middle" href="#">
                        <span>Take Assessment</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- assessment list -->

<!-- EndPage Contents -->

 <!-- Footer -->
<section class="gradient-background">
      <footer class="container py-5 text-white">
        <div class="row">
          <div class="col-sm-6 col-md-6 mb-3">
            <form>
              <img class="logo-footer" src="../images/Logo.png" alt="PISA">
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
      <img class="mx-2 my-2" src="../images/facebook.svg" alt="facebook">
      <img class="mx-2 my-2" src="../images/twitter.svg" alt="twitter">
      <img class="mx-2 my-2" src="../images/instagram.svg" alt="instagram">
      <img class="mx-2 my-2" src="../images/youtube.svg" alt="youtube">
      <img class="mx-2 my-2" src="../images/linkedin.svg" alt="linkedin">
      <img class="mx-2 my-2" src="../images/share-fill.svg" alt="share">
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