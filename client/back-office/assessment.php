<?php
include('includes/header.php');
include('includes/topnav.php');
include('includes/script.php');
?>


<section class="content">

    <div class="container mt-1 mb-1">
        <div class="row ">

            <div class="ml-5 col-8">
                <p class="page-name fw-bold">Manage Assessment</p>
                <p class=" fs-5"><span class="border-bottom  border-warning">Avail</span>able Assessment</p>
            </div>

            <div class="col-4 mt-5">
                <div class="row ">
                    <div class="col ">

                        <button class=" px-5 text-light  btn btn-info">
                            Add Subject
                        </button>
                    </div>
                    <div class="col">

                        <button class=" px-5 text-light  btn btn-warning">
                            Add New Test
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TABLE STUDENT -->
    <div class="container mt-3 table-responsive tab-pane fade show active" role="tabpanel" aria-labelledby="nav-student-tab" id="nav-student">
        <div class="card">
            <div class="card-body m-5 pt-4 px-3">
                <table id="example1" class="table pt-3 px-5" style="width:100%">
                    <thead>
                        <tr>
                            <th>Assesssment No.</th>
                            <th>Title</th>
                            <th>Subject</th>
                            <th>No. of Questions</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>test0100</td>
                            <td>Exploring Chemical Reactions</td>
                            <td>Science</td>
                            <td>35</td>
                            <td class="text-success">published</td>
                            <td><button class="btn"><img src="../assets/images/pencil.svg" alt="edit"></button>
                             <button class="btn"><img src="../assets/images/archive.svg" alt="edit"></button></td>
                        </tr>
                        <tr>
                            <td>test0101</td>
                            <td>Mathematical Problem-Solving Challenge</td>
                            <td>Math</td>
                            <td>50</td>
                            <td class="text-success">published</td>
                            <td><button class="btn"><img src="../assets/images/pencil.svg" alt="edit"></button>
                             <button class="btn"><img src="../assets/images/archive.svg" alt="edit"></button></td>
                        </tr>
                        <tr>
                            <td>test0102</td>
                            <td>Earth Science Exploration</td>
                            <td>Science</td>
                            <td>40</td>
                            <td class="text-danger">closed</td>
                            <td><button class="btn"><img src="../assets/images/pencil.svg" alt="edit"></button>
                             <button class="btn"><img src="../assets/images/archive.svg" alt="edit"></button></td>
                        </tr>
                        <tr>
                            <td>test0103</td>
                            <td>Earth Science Exploration</td>
                            <td>Science</td>
                            <td>40</td>
                            <td class="text-danger">closed</td>
                            <td><button class="btn"><img src="../assets/images/pencil.svg" alt="edit"></button>
                             <button class="btn"><img src="../assets/images/archive.svg" alt="edit"></button></td>
                        </tr>
                        <tr>
                            <td>test0103</td>
                            <td>Math Puzzles and Challenges</td>
                            <td>Math</td>
                            <td>15</td>
                            <td class="text-success">published</td>
                            <td><button class="btn"><img src="../assets/images/pencil.svg" alt="edit"></button>
                             <button class="btn"><img src="../assets/images/archive.svg" alt="edit"></button></td>
                        </tr>
                        <tr>
                            <td>test0104</td>
                            <td>Ecology and Environmental Science</td>
                            <td>Science</td>
                            <td>25</td>
                            <td class="text-danger">closed</td>
                            <td><button class="btn"><img src="../assets/images/pencil.svg" alt="edit"></button>
                             <button class="btn"><img src="../assets/images/archive.svg" alt="edit"></button></td>
                        </tr>
                        <tr>
                            <td>test0105</td>
                            <td>Math Puzzles and Challenges</td>
                            <td>Math</td>
                            <td>30</td>
                            <td class="text-success">published</td>
                            <td><button class="btn"><img  src="../assets/images/pencil.svg" alt="edit"></button>
                             <button class="btn"><img src="../assets/images/archive.svg" alt="edit"></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- TABLE TEACHER -->


    <!-- TABLE -->
</section>

</body>
</html>