<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Get Started</title>
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
        .imgContainer {
            width: 100%;
            height: auto;
            position: relative;
            margin-left: none !important;
            margin-right: none !important;
        }

        .imgContainer img {
            width: 80%;
            height: auto;
            position: absolute;
            opacity: 0;
            transition: opacity 1s ease-in-out;
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

        .profile-image{
            width: 2rem;
            margin-left: 0.5rem;
            margin-bottom: -0.3rem;
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
                $firstName = $_SESSION['auth_user']['fname'];
                $profile_img = isset($_SESSION['auth_user']['profile_img']) ? $_SESSION['auth_user']['profile_img'] : '../assets/images/profile_pic/default-profile-icon.jpg';

                echo '
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white px-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span>' . $firstName . '</span>';

                if (!empty($profile_img)) {
                    echo '<img src="' . $profile_img . '" alt="Profile" class="rounded-circle profile-image">';
                } else {
                    echo '<img src="../assets/images/profile_pic/default-profile-icon.jpg" alt="Default Profile" class="rounded-circle profile-image">';
                }

                echo '</div></a>
                        <ul class="dropdown-menu dropdown-menu-right fixed-width">
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
            <!-- LEFT SIDE -->
            <div class="col-lg-5 text-center text-lg-start">
                <h3 class="LoginSignup display-4 fw-bold lh-1 text-white mb-3">
                    Hello <?= $_SESSION['auth_user']['fname']; ?>!
                </h3>
                <p class="col-lg-10 fs-4 text-white">
                    Ready to test your abilities?
                </p>

                <div class="imgContainer mt-5">
                    <img src="../assets/images/PS1.png" alt="Photo 1">
                    <img src="../assets/images/PS2.png" alt="Photo 2">
                    <img src="../assets/images/PS3.png" alt="Photo 3">
                </div>
                
            </div>

            <!-- RIGHT SIDE -->
            <div class="col-md-10 mx-auto col-lg-5">
            </div>

        </div>
      </div>
    </section>


    <script>
    const imgContainer = document.querySelector(".imgContainer");
        const images = imgContainer.querySelectorAll("img");
        let currentImageIndex = 0;

        function changeImage() {
            images[currentImageIndex].style.opacity = 0;
            currentImageIndex = (currentImageIndex + 1) % images.length;
            images[currentImageIndex].style.opacity = 1;
        }

        // Show only the first image initially
        images[0].style.opacity = 1;

        // Change image every 1.5 seconds
        setInterval(changeImage, 1500);
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
