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
                                    <a class="nav-item nav-link" id="nav-teacher-tab" data-toggle="tab" href="#nav-teacher" role="tab" aria-controls="nav-teacher" aria-selected="false">Teacher</a>
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
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>stud123</td>
                                        <td>John Anthony Fernando</td>
                                        <td>john_fernando@example.com</td>
                                        <td>j_anthony</td>
                                        <td class="status-active">active</td>
                                    </tr>
                                    <tr>
                                        <td>stud124</td>
                                        <td>Krizzia Marie Cruz</td>
                                        <td>k_marie@example.com</td>
                                        <td>k_marie</td>
                                        <td class="status-active">active</td>
                                    </tr>
                                    <tr>
                                        <td>stud125</td>
                                        <td>Alfredo Marquez</td>
                                        <td>alfredo_m@example.com</td>
                                        <td>alfmarq</td>
                                        <td class="status-inactive">inactive</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Teacher table -->
                        <div class="table-responsive tab-pane fade" id="nav-teacher" role="tabpanel" aria-labelledby="nav-student-tab">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Teacher ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Teacher data rows -->
                                    <tr>
                                        <td>teach001</td>
                                        <td>Allain Dela Fuente</td>
                                        <td>allain_D@example.com</td>
                                        <td>allain_D</td>
                                        <td class="status-active">active</td>
                                    </tr>
                                    <tr>
                                        <td>teach002</td>
                                        <td>Anna May Reyes</td>
                                        <td>anna_mae@example.com</td>
                                        <td>anna_m</td>
                                        <td class="status-active">active</td>
                                    </tr>
                                    <tr>
                                        <td>teach003</td>
                                        <td>Raymark Santos</td>
                                        <td>santos_ray@example.com</td>
                                        <td>ray_Santos</td>
                                        <td class="status-active">active</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                    
                    

        </div> <!-- end of left side -->

        <!-- Profile Card (Right Side) -->
        <div class="col-md-3">
            <div class="card profile-card-3 ">
                <!-- Profile Card Content -->
                <div class="background-block">
                    <img src="https://images.pexels.com/photos/459225/pexels-photo-459225.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="profile-sample1" class="background"/>
                </div>
                <div class="profile-thumb-block">
                    <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="profile-image" class="profile"/>
                </div>
                <div class="card-content">
                    <h2>Justin Mccoy<small>Admin</small></h2>
                    <div class="icon-block">
                        <button class="edit-button">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Cards overview -->

</body>
</html>