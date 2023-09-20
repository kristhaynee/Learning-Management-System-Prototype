<?php
session_start();
include('../../config/dbcon.php');

if(isset($_POST['student_signup']))
{
    $firstname = mysqli_real_escape_string($con, $_POST['fname']);
    $lower_fname = strtolower($firstname);
    $final_firstname = ucwords($lower_fname);
    $fname = $final_firstname;
        
    $lastname = mysqli_real_escape_string($con, $_POST['lname']);
    $lower_lname = strtolower($lastname);
    $final_lastname = ucwords($lower_lname);
    $lname = $final_lastname;

    $suffix = mysqli_real_escape_string($con, $_POST['suffix']);

    $email = mysqli_real_escape_string($con, $_POST['email']);

    $username = mysqli_real_escape_string($con, $_POST['username']);

    $role_as = 2; //Automatically sets role as student

    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirmpassword']);

    if($password == $confirm_password)
    {
        //Check username
        $checkusername = "SELECT username FROM users WHERE username='$username'";
        $checkusername_run = mysqli_query($con, $checkusername);

        // Check email
        $checkemail = "SELECT email FROM users WHERE email='$email'";
        $checkemail_run = mysqli_query($con, $checkemail);

        if(mysqli_num_rows($checkusername_run) > 0)
        {
            //Username already exists
            $_SESSION['message'] = "Sorry, Username already exists";
            header("Location: ../Signup.php");
            exit(0);
        }
        elseif (mysqli_num_rows($checkemail_run) > 0) {
            // Email already exists
            $_SESSION['message'] = "Sorry, this Email is already being used";
            header("Location: ../Signup.php");
            exit(0);
        }
        else
        {
        $user_query = "INSERT INTO users (email, fname, lname, suffix, username, role_as, password) VALUES ('$email', '$fname', '$lname', '$suffix', '$username', '$role_as', '$password')";
        $user_query_run = mysqli_query($con, $user_query);

            if($user_query_run)
            {
                $last_id = mysqli_insert_id($con);
                if ($last_id){
                    $code = rand(1,99999);
                    $userCode = "S".$code."_".$last_id;
                    $query = "UPDATE users SET userCode = '".$userCode."' WHERE user_id = '".$last_id."'";
                    $res = mysqli_query($con, $query);

                    if ($res)
                    {
                        $_SESSION['message'] = "Registered Successfully!";
                        header("Location: ../Login.php");
                        exit();
                    }
                    else
                    {
                        $_SESSION['message'] = "Something Went Wrong!";
                        header("Location: ../Login.php");
                            exit(0);
                    }
                }
            }
        }
    }
    else
    {
        $_SESSION['message'] = "Password does not match";
        header("Location: ../Signup.php");
        exit(0);
    }

}

?>