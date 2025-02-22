<?php


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
$phoneNumber = $address_location = $fname = $email = $password = $confirm_password  = $dateOfBirth= "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['signup'])) {

        // Validate First Name
        if (empty($_POST["fullName"])) {
            $fnameErr = "First Name is required";
        } else {
            $fname = test_input($_POST["fullName"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
                $fnameErr = "Only letters and white space allowed";
            }
        }

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
        if (empty($_POST["confirmPassword"])) {
            $confirm_passwordErr = "password is required";
        } else {
            $confirm_password = test_input($_POST["confirmPassword"]);
            // if (!$password) {
            //     $passwordErr = "Invalid email format";
            // }
        }

        // Validate Phone Number
        if (empty($_POST["phoneNumber"])) {
            $phoneNumberErr = "Phone Number is required";
        } else {
            $phoneNumber = test_input($_POST["phoneNumber"]); // Fixed
            if (!preg_match("/^[0-9]{10,15}$/", $phoneNumber)) {
                $phoneNumberErr = "Invalid phone number format (10-15 digits only)";
            }
        }

 
        // Validate Address
        if (empty($_POST["address_location"])) {
            $address_locationErr = "address_location is required";
        } else {
            $address_location = test_input($_POST["address_location"]);
            // if (!$password) {
            //     $passwordErr = "Invalid email format";
            // }
        }
        // Validate Date of Birth
        if (empty($_POST["dateOfBirth"])) {
            $dateOfBirthErr = "dateOfBirth is required";
        } else {
            $dateOfBirth = test_input($_POST["dateOfBirth"]);
            // if (!$password) {
            //     $passwordErr = "Invalid email format";
            // }
        }

        $hash_password = md5($password);

        if ($password == $confirm_password) {


            $register_user = mysqli_query($connect_db, "INSERT INTO `registration`(`id`, `phone_number`, `address`, `full_name`, `email`, `password`, `date_of_birth`) VALUES (NULL,'$phoneNumber','$address_location','$fname','$email','$hash_password','$dateOfBirth')");



            if ($register_user === true) {
                echo ("<script> alert('Registration Successful 👍') </script>");
                header('refresh: 0, url=../login.php');
            } else {
                echo ("<script> alert('Registration Failed 😢') </script>");
                header('refresh: 0, url=../signup.php');
            }
        } else {
            echo ("<script> alert('Password does not match') </script>");
            header('refresh: 0, url=signup.php');
        }
    }



    // INSERT INTO `registration`(`id`, `first_name`, `last_name`, `email_address`, `phone_no`, `password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
}
