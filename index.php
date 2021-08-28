<?php
include('dbcon.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoothies | Login</title>

    <!-- icon -->
    <link rel="icon" href="images/smoothyLogo.png">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Poppins:wght@100&display=swap" rel="stylesheet">

    <!-- unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
        <!-- <div class="splash-screen">
            <img src="images/yum_logo.png" alt="logo-splash-screen" class="yumLogo">
        </div> -->

    <section id="LoginForm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="BackgroundImg"></div>

                 </div>

                   <div class="col-md-12 col-sm-6">
                     <div class="signup-container">
                        <form action="main.php" id="form1" method="POST">

                                <?php
                                include('login.php');
                                ?>

                            <div class="option-row">

                                <div class="log" id="log">
                                <p><a href="#">Login</a></p> 
                                </div>

                                    <div class="reg" id="signup">
                                        <p><a href="#">Register</a></p>
                                    </div>

                                </div>
                             <h2>Welcome Back!</h2>
                             <input type="text" name="log-username" id="log-username" placeholder="Username" required>
                             <input type="password" name="log-password" id="log-password" placeholder="Password" required>

                             <div class="btn-submit">
                                 <button type="submit" name="login-btn">Login</button>
                             </div>

                             <span><input type="checkbox" id="forgotPassword"> Forgot Password?</span>
                             
                             <p class="or">Or</p>

                             <div class="social-links">
                                 <img src="images/icons8-facebook-48.png">
                                 <img src="images/icons8-twitter-48.png">
                                 <img src="images/icons8-google-48.png">
                                 <img src="images/icons8-instagram-logo-48.png">
                             </div>
                        </form>

                        <!-- register form -->
                        <form action="index.php" id="form2" method="POST">

                                <?php
                                include('form.php');
                                ?>

                            <div class="option-row">

                                <div class="log" id="signin">
                                <p><a href="#">Login</a></p> 
                                </div>

                                    <div class="reg" id="signup">
                                        <p><a href="#">Register</a></p>
                                    </div>

                                </div>
                             <h2>New Here? Sign up!</h2>
                             <input type="text" name="reg-name" id="reg-name" placeholder="Fullname" required>
                             <input type="text" name="reg-username" id="reg-username" placeholder="Username" required>
                             <input type="password" name="reg-password" id="reg-password" placeholder="Password" required>
                             <input type="password" name="reg-Confirmpassword" id="reg-Confirmpassword" placeholder="Confirm Password" required>

                             <div class="btn-submit">
                                 <button type="submit" name="submit-btn">Register</button>
                             </div>
                             
                             <p class="or">Or</p>

                             <div class="social-links">
                                 <img src="images/icons8-facebook-48.png">
                                 <img src="images/icons8-twitter-48.png">
                                 <img src="images/icons8-google-48.png">
                                 <img src="images/icons8-instagram-logo-48.png">
                             </div>
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- custom js -->
    <script src="js/app.js"></script>

</body>
</html>