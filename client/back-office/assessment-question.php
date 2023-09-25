<?php
include('./././security/authentication.php');

include('includes/header.php');
include('includes/topnav.php');
include('includes/script.php');
include('elements/popup/add-question-form.php');
include('elements/popup/edit-assessment-popup.php');
?>

<head>
    <title>Assessment - Add Questions</title>

    <link rel="stylesheet" href="../assets/css/assessment-question-style.css" />
</head>



<section class="content">
    <div class="container mt-1 mb-1">

        <?php include('elements/message.php')?>
            <div class="ml-5">
                <p class="page-name">Manage Assessment Questions</p>
            </div>
        </div>

        <div class="container mt-1 mb-5">
            <div class="card" style="margin-bottom: 14rem;padding: 4rem 5rem;">
            <?php
            $query = "SELECT a.assessment_id, a.assessmentCode, a.assessment_name, s.subject_name, u.fname, u.lname, u.suffix, a.status FROM assessment a
                        LEFT JOIN subject s ON a.subjectID = s.subject_id
                        LEFT JOIN users u ON a.teacherID = u.user_id";
            $query_run = mysqli_query($con, $query);

            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $row) {
            ?>
                <div class="row">
                    <div class="col-md-4">
                        <h4><?=$row['assessment_name'];?></h4>
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button class="btn text-light add-teach-btn mx-2" id="edit-assessment-show-popup" data-assessmentid="<?= $row['assessment_id'] ?>">Edit Assessment</button>
                            <button class="btn btn-primary" data-assessmentid="<?= $row['assessment_id'] ?>" id="show-add-question-popup">Add Question</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="row mt-5">
                            <div class="col-md-4" style="color:gray;">
                                <p>Test Code</p>
                                <p>Author</p>
                                <p>Subject</p>
                                <p>Status</p>
                            </div>
                            <div class="col-md-8" style="font-weight:600;">
                                <p><?=$row['assessmentCode'];?></p>
                                <p><?= $row['fname'] . " " . $row['lname'] . " " . $row['suffix']; ?></p>
                                <p><?=$row['subject_name'];?></p>
                                <p>
                                <?php
                                if ($row['status'] == 0) {
                                    echo '<span style="color:GREEN;text-align:center;">Published</span>';
                                }
                                if ($row['status'] == 1) {
                                    echo '<span style="color:BLUE;text-align:center;">Hidden</span>';
                                }
                                ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                } 
                ?>
                    <div class="col-md-8">

                        <main>
                            <ol class="gradient-list">
                                <?php
                                $assessmentId = $_GET['assessment_id']; // Assuming it's included in the URL

                                $query = "SELECT q.question_id, q.questionText, q.image_attachment, q.video_attachment
                                        FROM questions q
                                        WHERE q.assessmentID = $assessmentId"; // Adjust the table and column names as needed
                                
                                $query_run = mysqli_query($con, $query);
                                
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                        // Display the questions here
                                        ?>
                                <li><?=$row['questionText'];?></li>
                                <?php
                                }
                                } else {
                                    // Handle the case where no questions are found for this assessment
                                    echo "No questions found for this assessment.";
                                }                            
                                ?>
                            </ol>
                        </main>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

</body>
</html>