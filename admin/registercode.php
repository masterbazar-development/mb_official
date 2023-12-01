<?php 
session_start();
include('config/dbcon.php');

if(isset($_POST['register_btn']))
{
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']) ;
    $email = mysqli_real_escape_string($con, $_POST['email']) ;
    $password = mysqli_real_escape_string($con, $_POST['password']) ;
    $confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']) ;
    
    if($password == $confirm_password)
    {
        // Check Email
        $checkmail = "SELECT email FROM users WHERE email='$email'";
        $checkmail_run = mysqli_query($con, $checkmail);

        if(mysqli_num_rows($checkmail_run) > 0)
        {
                // Already Email Exists
                $_SESSION['message'] = "Already Email Exists";
                header("Location: register.php");
                exit(0);
        }
        else{
            $user_query ="INSERT INTO users (fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
            $user_query_run = mysqli_query($con, $user_query);

            if($user_query_run){
                $_SESSION['message'] = "Registerd Succesfully";
                header("Location: login.php");
                exit(0);
            }
            else{
                $_SESSION['message'] = "Something Went Wrong";
                header("Location: register.php");
                exit(0);
            }
        }
   
    }
    else{
        $_SESSION['message'] = "Password and Confirm Password does not Match";
        header("Location: register.php");
        exit(0);
        }
// else
// {
//     $_SESSION();
//     header("Location: register");
//     exit(0);
// }
}

?>