<?php
session_start();
include('includesClient/header.php');
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Hub</title>
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


    <section class="gradient-background scroll-hidden">
    <div class="container mt-5">
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
