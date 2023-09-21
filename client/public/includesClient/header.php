<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
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

        .profile-image{
            width: 2rem;
            margin-left: 0.5rem;
            margin-bottom: -0.3rem;
        }

        .active-nav{
          border-bottom: 3px solid #FF9636;
        }
  </style>

  <body>
  
    <header class="scroll-hidden">
      <div class="header">
        <nav class="navbar navbar-expand-sm pt-4">
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

        <script>
        const navLinksEls = document.querySelectorAll('.nav-link')
        const windowPathname = window.location.pathname
        const header = document.querySelector('.header')

        navLinksEls.forEach(navlink=>{
          if(navlink.href.includes(windowPathname)){
             navlink.classList.add('active-nav')
             
             if(navlink.href.includes('Homepage.php')){
               header.classList.add('homepage-header')
             }
             
             
             if(navlink.href.includes('AboutUs.php')){
               header.classList.add('aboutUs-header')
              }
              
              if(navlink.href.includes('ContactUs.php')){
                header.classList.add('contactUs-header')
              }
              
              if(navlink.href.includes('FAQs.php')){
                header.classList.add('faqs-header')
              }
              
              if(navlink.href.includes('Login.php')){
                header.classList.remove('homepage-header')
                header.classList.remove('aboutUs-header')
                header.classList.remove('contactUs-header')
                header.classList.remove('faqs-header')
                document.body.classList.add('gradient-background')
                // console.log("hi");
              }

              if(navlink.href.includes('Signup.php')){
                header.classList.remove('homepage-header')
                header.classList.remove('aboutUs-header')
                header.classList.remove('contactUs-header')
                header.classList.remove('faqs-header')
                
                document.body.classList.add('gradient-background')
              }

              
            }
        })

        </script>