<?php

session_start();
include_once('connect.php');

if ($_SESSION['id'] <= 0) {
    header('location: login.php');
}



$user_id = $_SESSION['id'];

// get registered users
$check_user_session = mysqli_query($connect_db, "SELECT * FROM `registration` WHERE id = '$user_id'");

// fetch info
$fetch_info = mysqli_fetch_array($check_user_session);




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
                        <h1>Welcome Mr <?php echo $fetch_info['full_name'] ?></h1>
                        <p class="mb-0">Kindly Book your Apppointment, our doctors are always ready to attend and satisfy your pleaseure</p>
                        <p class="mt-3"> <b>Note:</b> Your <b>tracking code</b> will be generated immediately after your appointment </p>
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

        <?php


        // Check if user already has an appointment-code in session
        if (isset($_SESSION['appointment-code'])) {

        ?>



            <div class="row d-flex justify-content-center text-center">


                <h5>Sorry you already had an appointment booked</h5>

                <a href="./patient-dashboard.php">Go to your dashboard</a>

            </div>


        <?php
        } else {

        ?>


            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <form action="appointment-form.php" method="post" data-aos="fade-up" data-aos-delay="200">


                    <div class="row gy-4">

                        <div class="row">
                            <div class="col-md-4 form-group mt-3">
                                <label for="date_time" class="form-label">Pick your date and time</label>
                                <input type="datetime-local" name="date_time" class="form-control" id="date_time" required>
                            </div>
                            <div class="col-md-4 form-group mt-3">
                                <label for="date_time" class="form-label">Pick your Department</label>
                                <select name="department" id="department" class="form-select" required>
                                    <option value="">Select Department</option>
                                    <option value="Health Care">Health Care</option>
                                    <option value="Dentistry">Dentistry</option>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Pediatrics">Pediatrics</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group mt-3">
                                <label for="date_time" class="form-label">Your Preferred Doctor</label>
                                <select name="doctor" id="doctor" class="form-select" required>
                                    <option value="">Select Doctor</option>
                                    <option value="Dr. Adeoni">Dr. Adeoni</option>
                                    <option value="Dr. Ibrahim">Dr. Ibrahim</option>
                                    <option value="Dr. Habeeb">Dr. Habeeb</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 form-group mt-3">
                                <input type="number" class="form-control" name="duration" id="duration" placeholder="Duration (Minutes)" required>
                            </div>
                            <div class="col-md-8 form-group mt-3">
                                <textarea class="form-control" name="complain" rows="3" placeholder="Your Complaints" required></textarea>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Additional Message"></textarea>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="appointment">Make an Appointment</button>
                        </div>
                    </div>


                </form>


            </div>



        <?php
        }

        ?>


    </section><!-- /Appointment Section -->


</main>





<?php

// Footer 
require_once 'footer.php';
?>