<?php
include('includes/header.php');
include('includes/topnav.php');
include('includes/script.php');
?>

<section class="content">

    <div class="container mt-1 mb-1">
        <div class="ml-5">
            <p class="page-name">Manage Users</p>
        </div>
    </div>
    <nav class="nav container">
        <div class="nav custom-tabs" id="nav-tab" role="tablist">
            <a class="nav-item custom-tabs nav-link active" id="nav-student-tab" data-toggle="tab" href="#nav-student" role="tab" aria-controls="nav-student" aria-selected="true">Student</a>
            <a class="nav-item custom-tabs nav-link" id="nav-teacher-tab" data-toggle="tab" href="#nav-teacher" role="tab" aria-controls="nav-teacher" aria-selected="false">Teacher</a>
        </div>
    </nav>

    <!-- TABLE STUDENT -->
    <div class="container mt-3 table-responsive tab-pane fade show active" role="tabpanel" aria-labelledby="nav-student-tab" id="nav-student">
        <div class="card">
            <div class="card-body">
            <table id="example1" class="table pt-3 px-5" style="width:100%">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>stud123</td>
                        <td>Tiger Nixon</td>
                        <td>john_fernando@gmail.com</td>
                        <td>j_anthony</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>stud124</td>
                        <td>Krizzia Marie Cruz</td>
                        <td>k_marie@gmail.com</td>
                        <td>k_marie</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>stud125</td>
                        <td>Alfredo Marquez</td>
                        <td>alfredo_marq@gmail.com</td>
                        <td>alfmarq</td>
                        <td>inactive</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>stud126</td>
                        <td>Andrea Cordoje</td>
                        <td>andy_C@gmail.com</td>
                        <td>andyy</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>stud127</td>
                        <td>Martin Loui Cruz</td>
                        <td>martinL_cruz@gmail.com</td>
                        <td>martinL</td>
                        <td>inactive</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>stud128</td>
                        <td>Missy Angela Carlos</td>
                        <td>missyAC@gmail.com</td>
                        <td>missyAC</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>stud129</td>
                        <td>Herrod Chandler</td>
                        <td>herrod_c@gmail.com</td>
                        <td>herrodC</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>stud130</td>
                        <td>Rhona Davidson</td>
                        <td>rhona_davidson@gmail.com</td>
                        <td>rhona</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>stud131</td>
                        <td>Colleen Hurst</td>
                        <td>ColleenHurst@gmail.com</td>
                        <td>Colleen</td>
                        <td>inactive</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>stud132</td>
                        <td>Hermione Butler</td>
                        <td>Butler_Hermione@gmail.com</td>
                        <td>Hermioneee</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>stud133</td>
                        <td>Lael Greer</td>
                        <td>LaelGreer@gmail.com</td>
                        <td>LaelG</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>

    <!-- TABLE TEACHER -->
    <div class="container mt-3 table-responsive tab-pane fade" role="tabpanel" aria-labelledby="nav-teacher-tab" id="nav-teacher">
        <div class="card">
            <div class="card-body">
            <table id="example2" class="table pt-3 px-5" style="width:100%">
                <thead>
                    <tr>
                        <th>Teacher ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>teach001</td>
                        <td>Tiger Nixon</td>
                        <td>john_fernando@gmail.com</td>
                        <td>j_anthony</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>teach002</td>
                        <td>Krizzia Marie Cruz</td>
                        <td>k_marie@gmail.com</td>
                        <td>k_marie</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>teach003</td>
                        <td>Alfredo Marquez</td>
                        <td>alfredo_marq@gmail.com</td>
                        <td>alfmarq</td>
                        <td>inactive</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>teach004</td>
                        <td>Andrea Cordoje</td>
                        <td>andy_C@gmail.com</td>
                        <td>andyy</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>teach005</td>
                        <td>Martin Loui Cruz</td>
                        <td>martinL_cruz@gmail.com</td>
                        <td>martinL</td>
                        <td>inactive</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>teach006</td>
                        <td>Missy Angela Carlos</td>
                        <td>missyAC@gmail.com</td>
                        <td>missyAC</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>teach007</td>
                        <td>Herrod Chandler</td>
                        <td>herrod_c@gmail.com</td>
                        <td>herrodC</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>teach008</td>
                        <td>Rhona Davidson</td>
                        <td>rhona_davidson@gmail.com</td>
                        <td>rhona</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>teach009</td>
                        <td>Colleen Hurst</td>
                        <td>ColleenHurst@gmail.com</td>
                        <td>Colleen</td>
                        <td>inactive</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>teach010</td>
                        <td>Hermione Butler</td>
                        <td>Butler_Hermione@gmail.com</td>
                        <td>Hermioneee</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>teach011</td>
                        <td>Lael Greer</td>
                        <td>LaelGreer@gmail.com</td>
                        <td>LaelG</td>
                        <td>active</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>


    <!-- TABLE -->
</section>

</body>
</html>