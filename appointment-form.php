<?php
session_start();



include 'connect.php';




// Initialize error variables
$complain = $date_time = $duration = $doctor = $department = $message = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['appointment'])) {

    // Validate Date & Time
    if (empty($_POST["date_time"])) {
        die("Date & Time is required.");
    } else {
        $date_time = test_input($_POST["date_time"]);
    }

    // Validate Department
    if (empty($_POST["department"])) {
        die("Department is required.");
    } else {
        $department = test_input($_POST["department"]);
    }

    // Validate Doctor
    if (empty($_POST["doctor"])) {
        die("Doctor selection is required.");
    } else {
        $doctor = test_input($_POST["doctor"]);
    }

    // Validate Duration
    if (empty($_POST["duration"]) || !is_numeric($_POST["duration"])) {
        die("Valid Duration is required.");
    } else {
        $duration = test_input($_POST["duration"]);
    }

    // Validate Complaints
    if (empty($_POST["complain"])) {
        die("Complaint is required.");
    } else {
        $complain = test_input($_POST["complain"]);
    }


    $message = !empty($_POST["message"]) ? test_input($_POST["message"]) : NULL;

    // **Generate Unique Appointment Code**
    $get_result_code = mysqli_query($connect_db, "SELECT code FROM appointments ORDER BY id DESC LIMIT 1");
    $fetched_user_by_code = mysqli_fetch_array($get_result_code);

    if ($fetched_user_by_code) {
        $lastCode = (int) $fetched_user_by_code['code']; // Convert '001' to 1
        $newCode = str_pad($lastCode + 1, 3, '0', STR_PAD_LEFT); // Convert 2 to '002'
    } else {
        $newCode = '001'; // First entry
    }



    if (isset($_SESSION['appointment-code'])) {
        $active_patient_code = $_SESSION['appointment-code'];

        // // get registered patient
        $check_patient_code = mysqli_query($connect_db, "SELECT * FROM `appointments` WHERE code = '$active_patient_code'");

        $the_patient_code = mysqli_fetch_array($check_patient_code);

        $patient_newCode = str_pad((int) $the_patient_code['code'] + 1, 3, '0', STR_PAD_LEFT);

        // var_dump($newCode); // Output: '002' if previous code was '001'

        // var_dump($patient_newCode);
        // var_dump($newCode);
    }

    if ($newCode === $patient_newCode) {
        echo "<script>alert('You've created an appointment. You can view your Appointment!');</script>";
        header('refresh: 0, url=patient-dashboard.php');
    } else {

        // Insert appointment data into database
        $insert_appointment = mysqli_query($connect_db, "INSERT INTO `appointments` (`id`, `code`, `complain`, `date_time`, `duration`, `doctor`, `department`, `message`) 
    VALUES (NULL, '$newCode', '$complain', '$date_time', '$duration', '$doctor', '$department', '$message')");

        if ($insert_appointment == true) {

            // get registered patient
            $get_reg_patient_code = mysqli_query($connect_db, "SELECT * FROM `appointments` WHERE code = '$newCode'");

            // fetch users
            $fetched_patient_code = mysqli_fetch_array($get_reg_patient_code);

            $_SESSION['appointment-code'] = $fetched_patient_code['code'];


            echo "<script>alert('Appointment booked successfully! Your Appointment Code: $newCode');</script>";
            header('refresh: 0, url=patient-dashboard.php');
        } else {
            echo "<script>alert('Error: Could not book appointment. Try again!');</script>";
            header('refresh: 0, url=index.php');
        }
    }
}
