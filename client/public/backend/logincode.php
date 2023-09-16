<?php
session_start();
include('../../config/dbcon.php');

if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM users WHERE BINARY email='$email' AND BINARY password='$password' LIMIT 1";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run)>0)
    {
        foreach($login_query_run as $data)
    {
            $user_id = $data['user_id'];
            $email = $data['email'];
            $role_as = $data['role_as'];
            $fname = $data['fname'];
            $username = $data['username'];
    }

        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$role_as"; // 0 = Admin, 1 = Teacher, 2 = Student
        
        $_SESSION['auth_user'] = [
            'user_id' => $user_id,
            'email' => $email,
            'fname' => $fname,
        ];

        if($_SESSION['auth_role'] == '0') // Head Admin
        {
            $_SESSION['message'] = "Welcome to Admin dashboard"." ".$fname;
            header("Location: ../../back-office/dashboard.php?user_id=" . $_SESSION['auth_user']['user_id']);
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid username or password";
        header("Location: ../Login.php");
        exit(0);
    }
}


?>