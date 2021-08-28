<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoothies | Home</title>

     <!-- icon -->
     <link rel="icon" href="images/smoothyLogo.png">

     <!-- AOS css animate on scroll -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>

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
    <!-- ----------------------------------------------main--------------------------------------------- -->
<section id="main">
   <!-- navbar -->
   <?php
    include_once('includes/navbar.php');
   ?>
       <!-- hero content -->
       <div class="hero container" id="hero">
           <div class="row">
            <div class="col-md-12 con">
                <div class="hero-content" data-aos="fade-right">
                    <h1>Sip till your heart's content!</h1>
                    <p>Life Should Taste As Good As Smoothies</p>

                         <a href="menu.php" class="btn">Menu</a>
                </div>

                <div class="scene" data-aos="fade-down">
                    <img src="images/smoothies-img.png" alt="">
                </div>
            </div>
           </div>
       </div>
</section>

    <!------------------------------------------ menu--------------------------------------------------- -->
<section id="menu-sect">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="menu-category">
                        <h1>Our Top Notch  <span>Smoothies <img src="images/smoothyLogo.png" class="smoothie-img"></span></h1>
                        
                        <div class="menu-category-container">
                            <div class="menu-info" data-aos="fade-right">
                                <div class="menu-content">
                                    <h3><span>01.</span> Fresh Fruits</h3>
                                    <p>We use our finest and most fresh fruits from our top suppliers.</p>
                                </div>
                                <div class="menu-content">
                                    <h3><span>02.</span> Exotic Taste</h3>
                                    <p> We serve the most tastiest smoothies ever known to mankind.</p>
                                </div>
                                <div class="menu-content">
                                    <h3><span>03.</span> Toppings</h3>
                                    <p>We dont skimp when it comes to toppings.</p>
                                </div>
                                <div class="menu-content">
                                    <h3><span>04.</span> Smoothie glass bottles</h3>
                                    <p>Finest and cutest smoothie glass bottles</p>
                                </div>
                            </div>
                            
                            <div class="smoothie-image" data-aos="fade-up">
                                <img src="images/menu-category-pic.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

    <!-- ----------------------------------------------- Contact us-------------------------------------- -->
    <?php
    include_once('includes/footer.php');
    ?>

    <!-------------------------------------------------------------------------------------------------------------------------------->

     <!-- AOS js animate on scroll-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

        <!-- AOS animation initiated -->
        <script>
            AOS.init({
                delay:400,
                duration:1000
            });
        </script>

     <!-- bootstrap js -->
     <script src="js/bootstrap.bundle.min.js"></script>

     <!-- custom js -->
     <script src="js/main_managment.js"></script> 

</body>
</html>