<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>DSC, Dhaka, Bangladesh</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+880 966 77777</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>deshghuri@hotmail.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="../index.php" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>DeshGhuri</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="../index.php" class="nav-item nav-link <?php echo $current_page == 'index.php' ? 'active' : ''; ?>" >Home</a>
                    <a href="../about.php" class="nav-item nav-link <?php echo $current_page == 'about.php' ? 'active' : ''; ?>">About</a>
                    <a href="../service.php" class="nav-item nav-link <?php echo $current_page == 'service.php' ? 'active' : ''; ?>">Services</a>
                    <a href="../package.php" class="nav-item nav-link <?php echo $current_page == 'package.php' ? 'active' : ''; ?>">Packages</a>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle <?php echo in_array($current_page, ['destination.php', 'booking.php', 'team.php', 'testimonial.php']) ? 'active' : ''; ?>" data-bs-toggle="dropdown" style="text-decoration: none;">Pages</a>

                        <div class="dropdown-menu m-0">
                            <a href="../destination.php" class="dropdown-item <?php echo $current_page == 'destination.php' ? 'active' : ''; ?>">Destination</a>
                            <a href="../booking.php" class="dropdown-item <?php echo $current_page == 'booking.php' ? 'active' : ''; ?>">Booking</a>
                            <a href="../team.php" class="dropdown-item <?php echo $current_page == 'team.php' ? 'active' : ''; ?>">Travel Guides</a>
                            <a href="../testimonial.php" class="dropdown-item <?php echo $current_page == 'testimonial.php' ? 'active' : ''; ?>">Testimonial</a>
                            <!-- <a href="404.html" class="dropdown-item active">404 Page</a> -->
                        </div>
                    </div>
                    <a href="../contact.php" class="nav-item nav-link <?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">Contact</a>
                </div>
                <a href="../registration.php" class="btn btn-primary rounded-pill py-2 px-4 <?php echo $current_page == 'registration.php' ? 'active' : ''; ?>">Register</a>
            </div>
        </nav>

        
    <!-- Navbar & Hero End -->