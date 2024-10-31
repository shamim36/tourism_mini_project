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
                        <h1 class="display-3 text-white animated slideInDown">Login</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Login</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Navbar & Hero End -->


    <!-- Login Start -->
    <div id="form-container">
        <form action="/login" method="post">
            <div id="form-control">
                <label for="username-email">Username or Email</label>
                <input type="text" id="username-email" name="username-email" required>
            </div>
            <div id="form-control">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <!-- Log in button -->
            <button type="submit" id="submit-button">Log in</button>
    
            <!-- Register link -->
            <p>Don't have an account? <a href="registration.php" id="register-link">Register</a></p>
        </form>
    </div>

    <!-- Login End -->
        

    <!-- Footer Start -->
    <?php include 'includes/footer.php'; ?>  
    <!-- Footer End -->


    <!-- Back to Top -->
    <?php include 'includes/others.php'; ?>  
</body>

</html>