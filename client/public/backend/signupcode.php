<?php
include('../security/authentication.php');

// UPDATE ASISTANT ADMIN INFORMATION
if (isset($_POST['update_user_info'])) {
    $user_id = $_POST['user_id'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $status = $_POST['status'] == true ? '0' : '1';

    // Check if the username already exists for a different user
    $checkUsernameQuery = "SELECT * FROM users WHERE username='$username' AND id!='$user_id'";
    $checkUsernameResult = mysqli_query($con, $checkUsernameQuery);

    // Check if the email already exists for a different user
    $checkEmailQuery = "SELECT * FROM users WHERE email='$email' AND id!='$user_id'";
    $checkEmailResult = mysqli_query($con, $checkEmailQuery);

    if (mysqli_num_rows($checkUsernameResult) > 0) {
        // Username already exists for another user
        $_SESSION['message'] = "Username already exists for another user";
        header('Location: assistant-admin-edit.php?id=' . $user_id);
        exit(0);
    } elseif (mysqli_num_rows($checkEmailResult) > 0) {
        // Email already exists for another user
        $_SESSION['message'] = "Email already exists for another user";
        header('Location: assistant-admin-edit.php?id=' . $user_id);
        exit(0);
    } else {
        $query = "UPDATE users SET fname='$firstname', lname='$lastname', username='$username', email='$email', password='$password', status='$status'
                    WHERE role_as=1 AND ID='$user_id' ";

        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $sql = "INSERT INTO auditlog (id, username, action) VALUES (NULL, '" . $_SESSION['auth_user']['user_name'] . "', 'Updated an Admin Information')";
            $sql_run = mysqli_query($con, $sql);

            if ($sql_run) {
                $_SESSION['message'] = "Updated Successfully";
                header('Location: assistant-admin-edit.php?id=' . $user_id);
                exit(0);
            } else {
                $_SESSION['message'] = "Something Went Wrong!";
                header('Location: assistant-admin-edit.php?id=' . $user_id);
                exit(0);
            }
        } else {
            $_SESSION['message'] = "Something Went Wrong!";
            header('Location: assistant-admin-edit.php?id=' . $user_id);
            exit(0);
        }
    }
} else {
    $_SESSION['message'] = "Password does not match";
    header('Location: assistant-admin-edit.php?id=' . $user_id);
    exit(0);
}
?>
