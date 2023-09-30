<?php
include('../security/authentication.php'); // Include your authentication code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $questionId = $_POST["questionId"]; // Get the question ID from the AJAX request
    
    // Perform necessary validation and security checks here

    // Assuming you have a database connection already established ($con)
    $query = "DELETE FROM questions WHERE question_id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $questionId); // Bind the question ID as an integer
    $result = $stmt->execute();

    if ($result) {
        // The question was successfully deleted
        echo 'success';
    } else {
        // Error occurred while deleting the question
        echo 'error';
    }

    // Close the database connection
    $con->close();
} else {
    // Handle cases where the request method is not POST
    echo 'Invalid request.';
}
?>
