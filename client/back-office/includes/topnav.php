<body>
<style>
    .nav-icon:hover, .nav-link:hover{
        color:#FF9635;
    }


</style>
    <header>
    <div class="custom-top border-bottom border-2">
        <div class="row">
            <!-- Left Column (Empty) -->
            <div class="col-lg-4">
                <!-- This column is intentionally left empty -->
            </div>
            
            <!-- Center Column for Logo -->
            <div class="col-lg-4 text-center logo-section">
                <div class="pt-3 pb-3">
                    <nav class="navbar navbar-expand-sm">
                        <div class="container">
                            <a class="navbar-brand" href="Homepage.php"><img class="logo-pisa" src="../assets/images/Logo_COLORED.png" alt=""></a>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- Right Column for Dropdown -->
            <div class="col-lg-4 dropdown-section">
                    <div class="dropdown">
                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <!-- TOP NAV USER ICON PICTURE -->
                            <?php
                            if (isset($_SESSION['auth_user']['user_id'])) {
                                $user_id = $_SESSION['auth_user']['user_id'];
                                $users = "SELECT * FROM users WHERE user_id='$user_id'";
                                $user_run = mysqli_query($con, $users);

                                if (mysqli_num_rows($user_run) > 0) {
                                    while ($user = mysqli_fetch_assoc($user_run)) {
                                        $image = $user['profile_img'];
                                        if (empty($image))
                                            $image = "../../assets/images/profile_pic/default-profile-icon.jpg";
                                        echo '<img src="../uploads/user/' . $image . '" alt="Profile" class="rounded-circle custom-design-pfp">';
                                    }
                                }
                            }
                            ?>
                            <!-- TOP NAV USER ICON PICTURE -->
                            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION['auth_user']['fname']; ?></span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6><?= $_SESSION['auth_user']['fname']; ?></h6>
                                <span>
                                    <?php if (isset($_SESSION['auth_user'])) :
                                        if ($_SESSION['auth_role'] == '0') {
                                            echo "Admin";
                                        } else if ($_SESSION['auth_role'] == '1') {
                                            echo "Teacher";
                                        } else {
                                            echo "Student";
                                        }
                                    ?>
                                    <?php endif; ?>
                                </span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="user-profile.php?id=<?= $_SESSION['auth_user']['user_id']; ?>">
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <form action="../allcode.php" method="POST">
                                    <button type="submit" name="logout_btn" class="dropdown-item d-flex align-items-center" href="#">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Sign Out</span>
                                    </button>
                                </form>
                            </li>
                        </ul><!-- End Profile Dropdown Items -->
                    </div><!-- End Profile Dropdown -->
            </div>
        </div><!-- End Row -->
    </div><!-- End Container -->


    <!-- Navigation Bar -->
    <div class="d-flex justify-content-center pt-3 pb-3 top-nav navbar-section" id="navbar-section">
        <nav class="navbar navbar-expand-sm">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-1 mb-lg-0">

                <li class="nav-item mx-5">
                    <div class="col text-center">
                        <div class="d-flex flex-column align-items-center nav-icon">
                        <i class="fa-solid fa-table-columns"></i>
                        <a class="nav-link active px-3" aria-current="page" href="dashboard.php">Dashboard</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item mx-5">
                    <div class="col text-center">
                        <div class="d-flex flex-column align-items-center nav-icon">
                        <i class="fa-solid fa-user"></i>
                        <a class="nav-link px-3" href="users.php">Users</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item mx-5">
                    <div class="col text-center">
                        <div class="d-flex flex-column align-items-center nav-icon">
                        <i class="fa-regular fa-lightbulb"></i>
                        <a class="nav-link px-3" href="assessment.php">Assessments</a>
                        </div>
                    </div>
                </li>

                <!-- <li class="nav-item mx-5">
                    <div class="col text-center">
                        <div class="d-flex flex-column align-items-center nav-icon">
                        <i class="fa-solid fa-book-open"></i>
                        <a class="nav-link px-3" href="AboutUs.php">Subject</a>
                        </div>
                    </div>
                </li> -->

                <li class="nav-item mx-5">
                    <div class="col text-center">
                        <div class="d-flex flex-column align-items-center nav-icon">
                        <i class="fa-solid fa-file-invoice"></i>
                        <a class="nav-link px-3" href="report.php">Reports</a>
                        </div>
                    </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </div>
    <script>
    const navLinksEls = document.querySelectorAll('.nav-link')
    const windowPathname = window.location.pathname

    const navIconEls = document.querySelectorAll('.nav-icon')
   
    navLinksEls.forEach(navlink=>{
        if(navlink.href.includes(windowPathname))
        navlink.style.color="#FF9635"
    })

    navIconEls.forEach(navIcon => {
       if(navIcon.lastChild.previousElementSibling.href.includes(windowPathname)){
        navIcon.style.color="#FF9635"
        navIcon.style.borderBottom = "3px solid #FF9635"
       }
    });
    
    </script>
    </header>