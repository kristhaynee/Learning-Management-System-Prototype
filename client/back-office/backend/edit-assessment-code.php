<?php
include('../security/authentication.php');

// Initialize a response array
$response = array();

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate assessment inputs
    $assessment_id = filter_input(INPUT_POST, 'assessment_id', FILTER_VALIDATE_INT);
    $assessmentName = filter_input(INPUT_POST, 'assessmentName', FILTER_SANITIZE_STRING);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_VALIDATE_INT);
    $comment = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING);
    $status = filter_input(INPUT_POST, 'status', FILTER_VALIDATE_INT);

    // Check if all required fields are set and valid
    if ($assessment_id !== false && $assessmentName !== null && $subject !== false && $comment !== null && $status !== false) {
        // Prepare the SQL statement
        $query = "UPDATE assessment SET assessment_name=?, subjectID=?, comment=?, status=? WHERE assessment_id=?";
        $stmt = mysqli_prepare($con, $query);

        if ($stmt) {
            // Bind the parameters to the prepared statement
            mysqli_stmt_bind_param($stmt, "sisis", $assessmentName, $subject, $comment, $status, $assessment_id);

            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                $_SESSION['message'] = "Assessment was updated successfully";
                header("Location: ../assessment-question.php?assessment_id=$assessment_id"); // Include assessment_id in the URL
                exit();
            } else {
                $_SESSION['message'] = "Something Went Wrong!";
                header("Location: ../assessment-question.php?assessment_id=$assessment_id"); // Include assessment_id in the URL
                exit();
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            $_SESSION['message'] = "Statement Preparation Failed";
            $response['success'] = false;
            $response['error'] = mysqli_error($con);
        }
    } else {
        $_SESSION['message'] = "Invalid or Missing Data";
        $response['success'] = false;
    }
} else {
    $_SESSION['message'] = "Invalid Request Method";
    $response['success'] = false;
}

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
