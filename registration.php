<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'includes/head.php'; ?>  

    <!-- Form Stylesheet -->
     <link rel="stylesheet" href="css/form.css">

    <!-- JQuery Validation -->
     <script src="js/registration.js" defer></script>

</head>

<body>
<?php include 'includes/navbar.php'; ?>
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Registration</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Registration</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!-- Navbar & Hero End -->


    <!-- Registration Start -->
    <div id="form-container">
        <form action="/registration" method="post">
            <div id="form-control">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div id="form-control">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div id="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div id="form-control">
                <label for="confirm-passwrod">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <button type="submit" id="submit-button">Register</button>

            <p>Already have an account? <a href="/login.php" id="login-link">Log in</a></p>
        </form>
    </div>

    <!-- Registration End -->
        

    <!-- Footer Start -->
    <?php include 'includes/footer.php'; ?>  
    <!-- Footer End -->


    <!-- Back to Top -->
    <?php include 'includes/others.php'; ?>  
</body>

</html>