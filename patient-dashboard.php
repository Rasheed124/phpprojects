<?php

session_start();
include_once('connect.php');



// Check if user is not signed in
if (!isset($_SESSION['id']) || $_SESSION['id'] <= 0) {
    header("Location: login.php");
}

// Check if the user has made an appointment
if (!isset($_SESSION['appointment-code'])) {
    header("Location: index.php");
}



// If signed in but no appointment made, redirect to appointment form
// header("Location: index.php");
// $_user_appointment = $_SESSION['appointment'];
$user_id = $_SESSION['id'];
$patient_code = $_SESSION['appointment-code'];

// // get registered users
$check_user_session = mysqli_query($connect_db, "SELECT * FROM `registration` WHERE id = '$user_id'");
$check_patient_session = mysqli_query($connect_db, "SELECT * FROM `appointments` WHERE code = '$patient_code'");

// // fetch info
$fetch_user_info = mysqli_fetch_array($check_user_session);
$fetch_patient_info = mysqli_fetch_array($check_patient_session);


// Header 
include_once 'header.php';


?>


<!-- =========================  BODY -->

<main class="main">

    <!-- Hero Section -->


    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        Your request is beign processed
                    </div>
                </div>
            </div>
        </div>

    </div><!-- End Page Title -->




    <!-- Appointment Section -->
    <section id="appointment" class="appointment section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Appointment</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-info text-white">Patient Information</div>
                        <div class="card-body">
                            <?php
                            $user = $fetch_user_info;

                            if ($user) {
                                $fullname = $user['full_name'];
                                $phoneNumber = $user['phone_number'];
                                $email = $user['email'];
                                $address = $user['address'];
                                $dateOfBirth = $user['date_of_birth'];
                            ?>
                                <p><strong>Name:</strong> <?php echo htmlspecialchars($fullname); ?></p>
                                <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                                <p><strong>Phone:</strong> <?php echo htmlspecialchars($phoneNumber); ?></p>
                                <p><strong>Address:</strong> <?php echo htmlspecialchars($address); ?></p>
                                <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($dateOfBirth); ?></p>
                            <?php } else { ?>
                                <p>No user data found.</p>
                            <?php } ?>
                        </div>


                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-success text-white">Appointment Details</div>
                        <div class="card-body">
                            <?php
                            // Fetch appointment details (assuming you already executed the query)
                            $appointment = $fetch_patient_info;

                            if ($appointment) {
                                $code = $appointment['code'];
                                $dateTime = $appointment['date_time'];
                                $department = $appointment['department'];
                                $doctor = $appointment['doctor'];
                                $duration = $appointment['duration'];
                                $complain = $appointment['complain'];
                                $message = $appointment['message'];
                            ?>
                                <p><strong>Appointment Code:</strong> <?php echo htmlspecialchars($code); ?></p>
                                <p><strong>Date & Time:</strong> <?php echo htmlspecialchars($dateTime); ?></p>
                                <p><strong>Department:</strong> <?php echo htmlspecialchars($department); ?></p>
                                <p><strong>Doctor:</strong> <?php echo htmlspecialchars($doctor); ?></p>
                                <p><strong>Duration:</strong> <?php echo htmlspecialchars($duration); ?> Minutes</p>
                                <p><strong>Complaint:</strong> <?php echo htmlspecialchars($complain); ?></p>
                                <p><strong>Additional Message:</strong> <?php echo htmlspecialchars($message); ?></p>
                            <?php } else { ?>
                                <p>No appointment details found.</p>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
           
        </div>

    </section><!-- /Appointment Section -->


</main>





<?php

// Footer 
require_once 'footer.php';
?>