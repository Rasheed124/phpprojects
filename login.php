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
                <h2>Login</h2>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container" style="max-width: 700px; margin: 0 auto;" data-aos="fade-up" data-aos-delay="100">
            <div class="">
                <form action="./auth/login-auth.php" method="post" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                        </div>
                        <div class="col-md-12 text-center mt-3">
                            <p>No account? <a href="./signup.php" class="text-primary">Signup here</a></p>
                        </div>
                        <div class="col-md-12 text-center">
                            <!-- Trigger for Modal -->
                            <button type="button" class="btn btn-outline-secondary mt-3" data-bs-toggle="modal" data-bs-target="#extraLoginModal">
                                Login via Track code
                            </button>
                        </div>
                    </div>
                </form>
            </div><!-- End Contact Form -->
        </div>
    </section><!-- /Contact Section -->

</main>

<!-- ================== MODAL FOR TRACK CODE LOGIN ================== -->
<div class="modal fade" id="extraLoginModal" tabindex="-1" aria-labelledby="extraLoginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="extraLoginModalLabel">Login with Track Code</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./auth/track-code-auth.php" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control text-center" name="trackCode" placeholder="Enter Track Code" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control text-center" name="password" placeholder="Enter Password" required>
                    </div>
                    <button type="submit" name="trackLogin" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
// Footer 
require_once 'footer.php';
?>