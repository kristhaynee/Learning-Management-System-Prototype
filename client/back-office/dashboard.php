<?php
include('security/authentication.php');

include('includes/header.php');
include('includes/topnav.php');
include('includes/script.php');
?>

<!-- Welcome Message -->
<section class="content"> 
    <div class="container mt-1 mb-5">
    <?php include('elements/message.php')?>
        <div class="ml-5">
            <p class="welcome-msg">Hi! Welcome back <?= $_SESSION['auth_user']['fname']; ?></p>
        </div>
    </div>
<!-- Welcome Message -->

<!-- Cards overview -->
<div class="container pt-4">
    <div class="row">
        <!-- Overview Cards (Left Side) -->
        <div class="col-md-9">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Overview Card 1 -->
                    <div class="card l-bg-cherry" style="color: white;">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Total No. of Students</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        103
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Overview Card 2 -->
                    <div class="card l-bg-blue-dark" style="color: white;">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-solid fa-person-chalkboard"></i></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Total No. of Teachers</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                       50
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <!-- Overview Card 3 -->
                    <div class="card l-bg-green-dark" style="color: white;">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"><i class="fas fa-solid fa-file-pen"></i></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Assessments</h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        250
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div> <!-- end of row -->

                <!-- Table for overview of Users -->
                <div class="container mt-2 mb-5">
                    <div class="card dashboard-table-card p-5">

                    
                    <div class="row">
                        <div class="col">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-student-tab" data-toggle="tab" href="#nav-student" role="tab" aria-controls="nav-student" aria-selected="true">Student</a>
                                    <?php if($_SESSION['auth_role'] == '0') : ?> <!--ONLY ADMIN CAN VIEW-->
                                    <a class="nav-item nav-link" id="nav-teacher-tab" data-toggle="tab" href="#nav-teacher" role="tab" aria-controls="nav-teacher" aria-selected="false">Teacher</a>
                                    <?php endif; ?>
                                </div>
                            </nav>
                        </div>
                        <div class="col-auto">
                            <div class="view-all">
                                <a href="users.php" class="view-all-button">See all</a>
                            </div>
                        </div>
                    </div>

                    
                    <div class="card-body custom-card-body tab-content" id="nav-tabContent">
                    <!-- Student Table -->
                        <div class="table-responsive fade show active" role="tabpanel" aria-labelledby="nav-student-tab" id="nav-student">
                            <?php
                                $query = "SELECT * FROM users WHERE role_as='2' ORDER BY created_at DESC LIMIT 3";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                            ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($query_run as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row['userCode']; ?></td>
                                        <td><?= $row['fname'] . " " . $row['lname'] . " " . $row['suffix']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['username']; ?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                            } else {
                            ?>
                                <div class="text-center">
                                    No Record Found
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <?php if($_SESSION['auth_role'] == '0') : ?> <!--ONLY ADMIN CAN VIEW-->
                        <!-- Teacher table -->
                        <div class="table-responsive tab-pane fade" id="nav-teacher" role="tabpanel" aria-labelledby="nav-student-tab">
                            <?php
                            $query = "SELECT * FROM users WHERE role_as='1' ORDER BY created_at DESC LIMIT 3";
                            $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                            ?>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Teacher ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($query_run as $row) {
                                    ?>
                                    <!-- Teacher data rows -->
                                    <tr>
                                        <td><?= $row['userCode']; ?></td>
                                        <td><?= $row['fname'] . " " . $row['lname'] . " " . $row['suffix']; ?></td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['username']; ?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                            } else {
                            ?>
                                <div class="text-center">
                                        No Record Found
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
                    
                    

        </div> <!-- end of left side -->

        <!-- Profile Card (Right Side) -->
        <div class="col-md-3">
        <?php
        if(isset($_SESSION['auth_user']['user_id'])) {
            $user_id = $_SESSION['auth_user']['user_id'];
            $users = "SELECT * FROM users WHERE user_id='$user_id'";
            $user_run = mysqli_query($con, $users);

            if(mysqli_num_rows($user_run) > 0) {
                $user = mysqli_fetch_assoc($user_run);
                $profile_image = $user['profile_img']; // Assuming 'profile_image' is the column name for the user's profile image in the database
                $default_image_url = '../assets/images/profile_pic/default-profile-icon.jpg'; // Replace with the URL of your default image
                ?>
                <div class="card profile-card-3 ">
                    <!-- Profile Card Content -->
                    <div class="background-block">
                        <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background"/>
                    </div>
                    <div class="profile-thumb-block">
                        <img src="<?php echo $profile_image ? $profile_image : $default_image_url; ?>" alt="profile-image" class="profile"/>
                    </div>
                    <div class="card-content">
                        <h2><?php echo $user['fname'] . ' ' . $user['lname'] . ' ' .$user['suffix']; ?>
                            <small>
                                <?php 
                                    if($user['role_as'] == 0){echo "Admin";} 
                                    if($user['role_as'] == 1){echo "Teacher";}
                                    if($user['role_as'] == 2){echo "Student";}
                                ?>
                            </small>
                        </h2>
                        <div class="icon-block">
                            <button class="edit-button">View Profile</button>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>




    </div>
</div>
</section>
<!-- Cards overview -->

</body>
</html>