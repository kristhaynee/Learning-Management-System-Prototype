<?php
include('../security/authentication.php');

// Assuming you have a database connection established

if (isset($_GET['assessment_id'])) {
    $assessment_id = $_GET['assessment_id'];
    
    // Perform a database query to fetch user data based on $user_id
    $query = "SELECT a.assessment_id, a.assessmentCode, a.assessment_name, a.comment, a.subjectID, s.subject_name, u.fname, u.lname, u.suffix, a.status FROM assessment a
                LEFT JOIN subject s ON a.subjectID = s.subject_id
                LEFT JOIN users u ON a.teacherID = u.user_id";
    $result = mysqli_query($con, $query);
    
    if ($result) {
        $assessmentData = mysqli_fetch_assoc($result);
        echo json_encode($assessmentData);
    } else {
        // Handle query error
        echo json_encode(['error' => 'Query failed']);
    }
} else {
    // Handle missing assessment_id parameter
    echo json_encode(['error' => 'User ID not provided']);
}
?>
