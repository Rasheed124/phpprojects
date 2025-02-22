<?php


session_start();
include_once('../connect.php');



function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Define error messages and input variables
// $fnameErr = $lnameErr = $emailErr = $password1Err = $password2Err = $termsErr = $phoneNumberErr = "";
$phoneNumber = $address_location = $fname = $email = $password = $confirm_password  = $dateOfBirth = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['login'])) {


        // Validate Email
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }


        // Validate Password
        if (empty($_POST["password"])) {
            $passwordErr = "password is required";
        } else {
            $password = test_input($_POST["password"]);
            // if (!$password) {
            //     $passwordErr = "Invalid email format";
            // }
        }

        $hash_password = md5($password);


 
        // get registered users
        $get_reg_users = mysqli_query($connect_db, "SELECT * FROM `registration` WHERE email = '$email' and password='$hash_password'");

        // fetch users
        $fetched_user = mysqli_fetch_array($get_reg_users);

        if ($fetched_user > 0) {

            $_SESSION['id'] = $fetched_user['id'];
            $_SESSION['email'] = $fetched_user['email'];

            header('refresh: 0, url=../index.php');
        }else{
            echo ("<script> alert('Not a valide user') </script>");
            header('refresh: 0, url=../login.php');

        }
    }



}
