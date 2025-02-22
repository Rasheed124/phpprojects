<?php
// Header 
include_once 'header.php';
?>

<!-- =========================  BODY -->

<main class="main">

    <!-- Hero Section -->
    <section id="hero" style="min-height: 30vh;" class="hero section light-background">
        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">
        <div class="container position-relative">
            <div class="d-flex align-items-center justify-content-center welcome" data-aos="fade-down" data-aos-delay="100">
                <h2>Signup</h2>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container" style="max-width: 700px; margin: 0 auto;" data-aos="fade-up" data-aos-delay="100">
            <div class="">
                <form action="./auth/signup-auth.php" method="post" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="fullName" placeholder="Full Name" required>
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
                        </div>
                        <div class="col-md-12">
                            <input type="tel" class="form-control" name="phoneNumber" placeholder="Phone Number" required>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="address_location" placeholder="Address" required>
                        </div>
                        <div class="col-md-12">
                            <label for="date_of_birth" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="date_of_birth" name="dateOfBirth" required>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="signup" class="btn btn-primary w-100">Signup</button>
                        </div>
                        <div class="col-md-12 text-center mt-3">
                            <p>Already have an account? <a href="./login.php" class="text-primary">Login here</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /Contact Section -->

</main>

<?php
// Footer 
require_once 'footer.php';
?>
