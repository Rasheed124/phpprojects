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
// $fnameErr = 
$trackCode = $password =  "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['trackLogin'])) {


        // Validate Track code
        if (empty($_POST["trackCode"])) {
            $trackCodeErr = "trackCode is required";
        } else {
            $trackCode = test_input($_POST["trackCode"]);
            // if (!$password) {
            //     $passwordErr = "Invalid email format";
            // }
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
        $get_reg_users = mysqli_query($connect_db, "SELECT * FROM `registration` WHERE password='$hash_password'");

        // fetch users
        $fetched_user_via_password = mysqli_fetch_array($get_reg_users);

        // get registered users with code
        $get_reg_users_via_code = mysqli_query($connect_db, "SELECT * FROM `appointments` WHERE code = '$trackCode'");

        // fetch users
        $fetched_user_via_code = mysqli_fetch_array($get_reg_users_via_code);

        if ($fetched_user_via_code > 0 && $fetched_user_via_password > 0) {

            $_SESSION['id'] = $fetched_user_via_password['id'];
            $_SESSION['email'] = $fetched_user_via_password['email'];


            header('refresh: 0, url=../index.php');
        } else {
            echo ("<script> alert('Not a valide user') </script>");
            header('refresh: 0, url=../login.php');
        }
    }
}
