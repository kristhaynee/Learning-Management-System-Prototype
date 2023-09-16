<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/css/scroll.css">
    <script defer src="../assets/js/scroll.js"></script>
  </head>

  <body class="gradient-background">
    <nav class="navbar navbar-expand-sm marginTB">
      <div class="container">
      <a class="navbar-brand" href="Homepage.php"><img class="logo-header" src="../assets/images/Logo.png" alt=""></a>

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

    <section class="gradient-background scroll-hidden">
      <div class="container">
        <div class="row align-items-center g-lg-1 py-3">
          <div class="col-lg-6 text-center text-lg-start">
            <h1 class="LoginSignup display-4 fw-bold lh-1 text-white mb-3">
              Unlock Knowledge, Empower Change
            </h1>
            <p class="col-lg-10 fs-4 text-white">
              Log in to Navigate PISA's World of Education Excellence.
            </p>
           <div class="imgContainer">
            <img src="../images/login-img.png" class="login-img" alt="">
           </div>
          </div>

          <div class="col-md-10 mx-auto col-lg-5">
            
            <form action="backend/logincode.php" method="post" class="shadow-lg p-4 p-md-4 border rounded-4 bg-body-tertiary">
              <h1 class="text-center text-secondary-color paddingTB">Login</h1>
              <?php include('message.php')?>
              <div class="form-floating mb-3">
                <input
                  type="email"
                  class="form-control"
                  id="floatingInput"
                  placeholder="name@example.com"
                  required
                  name="email"
                />
                <label for="floatingInput">Enter your email address</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="password"
                  class="form-control"
                  id="floatingPassword"
                  placeholder="Password"
                  required
                  name="password"
                />
                <label for="floatingPassword">Password</label>
              </div>
              <button class="d-grid gap-2 col-6 mx-auto btn text-white font-weight marginTB btn-secondary-color p-3 mt-5 mb-4"
              type="submit" name="login_btn" value="login">
              Log in
              </button>
            <div class="text-center">
              <p>Don't you have an account? <a class="sign-up_link" href="Signup.php">Sign up</a></p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>



    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
