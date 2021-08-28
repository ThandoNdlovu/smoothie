<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoothies | Menu</title>

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

    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <!-- unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">

</head>
<body>

    <section id="menu">
        <!-- navbar -->
        <?php
            include_once('includes/navbar.php');
        ?>

        <div class="container">
            <div class="row">
                <div class="menu-container">
                    <div class="cart-btn" data-aos="fade-right">
                        <i class="uil uil-shopping-cart"></i>
                    </div>

                   <div class="menu-title" data-aos="fade-down">
                       <p>Our <span>Finest</span> Smoothies</p>
                   </div>

                    <div class="menu-list">
                        <!-- box 1 -->
                        <div class="box" data-aos="fade-right">
                            <img src="images/apple_Flavoured-smoothie.jpg" alt="">
                            <h3>Apple Smoothie</h3>
                            <p>With sliced apple fruit topping</p>
                            <div class="ratings">
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                            </div>
                            <p>R 100.00</p>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <!-- box 2 -->
                        <div class="box" data-aos="fade-right">
                            <img src="images/peach-smoothie.jpg" alt="">
                            <h3>Peach Smoothie</h3>
                            <p>With sliced orange fruit topping</p>
                            <div class="ratings">
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star-half-alt"></i>
                                <i class="uil uil-star"></i>
                            </div>
                            <p>R 50.00</p>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <!-- box 3 -->
                        <div class="box" data-aos="fade-up">
                            <img src="images/blackberry-smoothie.jpg" alt="">
                            <h3>Blackberry Smoothie</h3>
                            <p>With blackberry fruit toppings & grounded almond nuts</p>
                            <div class="ratings">
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star-half-alt"></i>
                            </div>
                            <p>R 90.00</p>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <!-- box 4 -->
                        <div class="box" data-aos="fade-down">
                            <img src="images/chocolate-peanut-butter-smoothie.jpg" alt="">
                            <h3>Chocolate Smoothie</h3>
                            <p>With peanut butter and banana fruit toppings</p>
                            <div class="ratings">
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star-half-alt"></i>
                                <i class="uil uil-star"></i>
                            </div>
                            <p>R 100.00</p>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <!-- box 5 -->
                        <div class="box" data-aos="fade-down">
                            <img src="images/pumpkin-smoothie.jpg" alt="">
                            <h3>Pumpkin Smoothie</h3>
                            <p>With cinnamon sticks</p>
                            <div class="ratings">
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star-half-alt"></i>
                                <i class="uil uil-star"></i>
                                <i class="uil uil-star"></i>
                            </div>
                            <p>R 40.00</p>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <!-- box 6 -->
                        <div class="box" data-aos="fade-up">
                            <img src="images/mixed-fruits-smoothie.jpg" alt="">
                            <h3>Tropical Smoothie</h3>
                            <p>100% Orange juice with strawberry, whipped scream & kiwi fruit toppings</p>
                            <div class="ratings">
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                            </div>
                            <p>R 150.00</p>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <!-- box 7 -->
                        <div class="box" data-aos="fade-right">
                            <img src="images/beetroot-smoothie.jpg" alt="">
                            <h3>Beetroot Smoothie</h3>
                            <p>With sliced banana & strawberry fruit toppings</p>
                            <div class="ratings">
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star-half-alt"></i>
                                <i class="uil uil-star"></i>
                            </div>
                            <p>R 40.00</p>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <!-- box 8 -->
                        <div class="box" data-aos="fade-right">
                            <img src="images/lemon-smoothie.jpg" alt="">
                            <h3>Lemon Smoothie</h3>
                            <p>With tumeric </p>
                            <div class="ratings">
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                            </div>
                            <p>R 40.00</p>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <!-- box 9 -->
                        <div class="box" data-aos="fade-right">
                            <img src="images/peanut-butter-smoothie.jpg" alt="">
                            <h3>Peanut Butter Smoothie</h3>
                            <p>With chocolate crumbs toppings</p>
                            <div class="ratings">
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uil uil-star"></i>
                            </div>
                            <p>R 30.00</p>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <!-- box 10 -->
                        <div class="box" data-aos="fade-up">
                            <img src="images/banana-smoothie.jpg" alt="">
                            <h3>Banana Smoothie</h3>
                            <p>With sliced banana topping</p>
                            <div class="ratings">
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uil uil-star"></i>
                                <i class="uil uil-star"></i>
                            </div>
                            <p>R 65.00</p>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <!-- box 11 -->
                        <div class="box" data-aos="fade-down">
                            <img src="images/strawberry-pomegranate-smoothie.jpg" alt="">
                            <h3>Strawberry Smoothie</h3>
                            <p>With strawberry fruit topping</p>
                            <div class="ratings">
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uil uil-star"></i>
                                <i class="uil uil-star"></i>
                            </div>
                            <p>R 70.00</p>
                            <a href="#" class="add-to-cart">Add to Cart</a>
                        </div>

                        <!-- box 12 -->
                        <div class="box" data-aos="fade-right">
                            <img src="images/coconut-smoothie.jpg" alt="">
                            <h3>Coconut Smoothie</h3>
                            <p>With pineapple fruit toppings</p>
                            <div class="ratings">
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                                <i class="uis uis-star"></i>
                            </div>
                            <p>R 80.00</p>
                            <a href="#" class="add-to-cart">Add to Cart</a>
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


    <!--************************************************************SCRIPTS JS*********************************************************************-->
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