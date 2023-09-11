<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/styles.css" />
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
  </head>

  <body>
    <header>
      <div class="contactUs-header">
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
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3 text-white header-title">
              Get in Touch
            </h1>
            <p class="lead text-white header-text">
              This page contains the necessary information and forms to reach out to us, allowing you to connect with our team for inquiries
            </p>
          
          </div>
        </div>
      </div>
    </header>


  <section class="container my-5">
    <div class=" row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3 contactUs"> <span class="bottom-border">Contact </span> Us</h1>
        <p class="col-lg-10 fs-4 mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, dignissimos iusto. Aperiam expedita architecto ad perspiciatis iste nobis quasi enim.</p>
        <div class="my-3">
          <img src="../images/geo-alt-fill.svg"><span> 123 Fifth Avenue, New York, NY 10160</span>
        </div>
        <div class="my-3">
          <img src="../images/envelope-fill.svg"><span> contact@info.com</span>
        </div>
        <div class="my-3">
          <img src="../images/telephone-fill.svg"><span> 929-242-6868</span>
        </div>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
          <h3 class="my-2">Have Questions?</h3>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Email Address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Subject</label>
          </div>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Your message</label>
          </div>
          <button class="rounded-pill w-50 btn btn-lg btn-secondary-color text-white mt-5" type="submit">Send Message</button>
        </form>
      </div>
    </div>
  </section>

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