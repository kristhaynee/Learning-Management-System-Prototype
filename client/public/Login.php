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
    <script src="https://kit.fontawesome.com/bbd71fca16.js" crossorigin="anonymous"></script>
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/css/scroll.css">
    <script defer src="../assets/js/scroll.js"></script>
  </head>

  <style>
    div.input-group-addon{
      padding: 0.5rem !important;
      display: flex !important;
      align-items: center !important;
      border-top: 1px solid #DEE2E6;    /* Add border to the top */
      border-right: 1px solid #DEE2E6;  /* Add border to the right */
      border-bottom: 1px solid #DEE2E6; /* Add border to the bottom */
      border-radius: 0 5px 5px 0;
    }

    .fa{
      color: #24B1D6;
      text-decoration: none;
    }

    .eye-link {
      text-decoration: none; /* Remove underline */
    }

    /* Dropdown */
    .dropdown-toggle::after {
        display: flex !important;
        margin-left: 0 !important;
        vertical-align: 0 !important;
        content: "";
        border-top: none !important;
        border-right: none !important;
        border-bottom: none !important;
        border-left: none !important;
      }
  </style>

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
            <a class="nav-link active text-white px-3" aria-current="page" href="Homepage.php">Home</a>
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

            <?php
            // Check if the user is authenticated using the 'auth' session variable
            if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
            echo '
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white px-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Profile
                </a>
                <ul class="dropdown-menu dropdown-menu-right fixed-width" >
                    <li><a class="dropdown-item" href="Profile.php">My Profile</a></li>
                    <li><a class="dropdown-item" href="Logout.php">Logout</a></li>
                </ul>
                </li>
            ';
            } else {
            echo '<li class="nav-item"><a class="nav-link text-white px-3" href="Login.php">Login/Sign Up</a></li>';
            }
            ?>
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


              <div class="col-sm-12">
                <div class="input-group" id="show_hide_password">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="passwordInput" placeholder="Password" name="password" required>
                        <label for="passwordInput">Password <span style="color:red;">*</span></label>
                    </div>
                    <div class="input-group-addon">
                        <a href="#" id="togglePassword" class="eye-link">
                            <i class="fa fa-eye-slash" id="eyeSlashIcon" aria-hidden="true"></i>
                            <i class="fa fa-eye" id="eyeIcon" aria-hidden="true" style="display: none;"></i>
                        </a>
                    </div>
                </div>
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


    <script>
    document.getElementById('togglePassword').addEventListener('click', function(e) {
        e.preventDefault();
        const passwordInput = document.getElementById('passwordInput');
        const eyeIcon = document.getElementById('eyeIcon');
        const eyeSlashIcon = document.getElementById('eyeSlashIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.style.display = 'inline';
            eyeSlashIcon.style.display = 'none';
        } else {
            passwordInput.type = 'password';
            eyeIcon.style.display = 'none';
            eyeSlashIcon.style.display = 'inline';
        }
    });
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
