<?php
include('db.php');
if(isset($_POST['submit'])){     
    $uname = $_POST['uname'];
    $mob = $_POST['mob'];  
    $food = $_POST['food'];
    $extra_food = $_POST['extra_food'];
    $quantity = $_POST['quantity'];
    $address= $_POST['address'];
    $money = $_POST['money'];
    $sql_query = "INSERT INTO `user_details`( `user_name`, `mobile_number`, `food_name`, `additional_food`, `quantity`, `address`, `money`) VALUES ('$uname', '$mob' , '$food' ,'$extra_food' , '$quantity' , '$address' , '$money')";
    $execute_query = mysqli_query($conn,$sql_query);
    if($execute_query){

        echo "<script> alert('your order is placed succesfully and will get delivered by our delivery partner at your desired time. please pay on delivery.');</script>";
    }
    else{
        echo "<script> alert('please try again');</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food delivery website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>

    <!-- header section starts -->

    <header>

        <a href="#" class="logo"><i class="fas fa-utensils"></i>Hunger strike</a>

        <nav class="navbar">
            <a class="active" href="#home">home</a>
           
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#order">order</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
           
        </div>

    </header>

    <!-- header section ends-->

    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="search here..." name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="swiper-container home-slider">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>spicy noodles</h3>
                        <p>Try our stir fried noodles made with all of your favorite fresh vegetables, is perfect for a quick a weeknight meal!</p>
                        <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/p.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>tandoori chicken</h3>
                        <p>Will give you the soft, juicy, flavorful and delicious grilled chicken with bursting flavours of spices and a unique smoky aroma</p>
                        <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/p2.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>our special dish</span>
                        <h3>hot pizza</h3>
                        <p>hot oven baked pizza from THE HUNGER STRIKE, available 24 hours per day, 7 days a week. Ready to go whenever you are, order by the slice or whole pizza.</p>
                        <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    </div>
                    <div class="image">
                        <img src="images/p3.png" alt="">
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <!-- home section ends -->


    <!-- about section starts  -->

    <section class="about" id="about">

        <h3 class="sub-heading"> about us </h3>
        <h1 class="heading">WHY CHOOSE US? </h1>

        <div class="row">

            <div class="image">
                <img src="images/interior.jpeg" alt="" style="border-radius: 20%">
            </div>

            <div class="content">
                <h3>Best Food In Bhilai City</h3>
                <p> Welcome to HUNGER STRIKE where extravagant living greets you with open doors. Your perfect escape away from the world, reserved especially for you.</p>
                <p> We provide Four Star Hotel facilities where sophistication meets luxury.It offers the facilities and service in a caring environ TRP Cafe (Coffee Shop), The Table (Fine Dining Restaurant), Car Porch etc</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>cash on delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>open from 9AM to 11PM</span>
                    </div>
                </div>
                <!-- <a href="#" class="btn">learn more</a> -->
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <h1 class="sub-heading"> our menu </h1>
        <br>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/pizza.jpeg" alt="">
                    
                </div>
                <div class="content">
                   
                    <h3>PIZZA</h3>
                    <p>Enjoy Authentic Italian Quality Pizza Topped With Meat Cheese And Vegetables </p>
                    <br>
                    <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    <span class="price">Rs250</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/burger2.jpeg" alt="">
                    
                </div>
                <div class="content">
                    
                    <h3>BURGER</h3>
                    <p> A Lentil Mushroom And Sun Dried Tomato Pattie Packed Between A Whole Wheat Bun.</p>
                    <br>
                    <a href="http://localhost/food_ak/form.html"  target="_blank" class="btn">order now</a>
                    <span class="price">RS120</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/chicken.jpeg" alt="">
                    
                </div>
                <div class="content">
                    
                    <h3>TANDOORI CHICKEN</h3>
                    <p>Will give you the soft, juicy, flavorful and delicious grilled chicken with bursting flavours of spices and a unique smoky aroma</p>
                    <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    <span class="price">Rs290</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/fish.jpeg" alt="">
                    
                </div>
                <div class="content">
                    
                    <h3> TANGY FISH FRY</h3>
                    <p>This Bengali recipe is prepared using fish, a melange of spices, ginger-garlic paste, red chilli powder which can be an absolute delight for your taste buds.</p>
                    <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    <span class="price">Rs310</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/manchurian.jpeg" alt="">
                    
                </div>
                <div class="content">
                    
                    <h3>MANCHURIAN</h3>
                    <p>tasty Indo Chinese dish of fried veggie balls in a spicy, sweet and tangy sauce.</p>
                    <br>
                    <br>
                    <br>
                    <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    <span class="price">Rs200</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/jini-dosa.jpg" alt="">
                    
                </div>
                <div class="content">
                    
                    <h3>JINNI DOSA</h3>
                    <p>It's a stuffing of mix veggies like cabbage, carrots, capsicum, chilli sauce, tomato ketchup and a few Indian spice blends.</p>
                    <br>
                    <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    <span class="price">Rs360</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/paneer tika.jpeg" alt="">
                    
                </div>
                <div class="content">
                    
                    <h3>PANEER TIKKA</h3>
                    <p>delicious tandoori snack where paneer are marinated in a spiced yogurt-based marinade, arranged on skewers and grilled in the oven.</p>
                    <a href="http://localhost/food_ak/form.html" class="btn"   target="_blank">order now</a>
                    <span class="price">Rs299</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/biryani.jpeg" alt="">
                    
                </div>
                <div class="content">
                    <div class="stars">
                       
                    </div>
                    <h3>BIRYANI </h3>
                    <p>Aromatic, delicious and spicy one pot chicken biryani made with basmati rice, spices, chickens</p>
                    <br>
                    <a href="http://localhost/food_ak/form.html" class="btn"   target="_blank">order now</a>
                    <span class="price">Rs340</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/noodels.jpeg" alt="">
                   
                </div>
                <div class="content">
                    
                    <h3>NOODELS </h3>
                    <p>Try our stir fried noodles made with all of your favorite fresh vegetables, is perfect for a quick a weeknight meal!</p>
                    <br>
                    <a href="http://localhost/food_ak/form.html" class="btn"   target="_blank">order now</a>
                    <span class="price">Rs250</span>
                </div>
            </div>

        </div>




        <!--SWEETS AND MOCKTAIL MENU SECTION-->
        <br>
        <br>
        <h1 class="heading">DESSERTS AND MOCKTAILS</h1>
        <h2>A food is never complete without indulging in desserts, finish strong with delicious brownie bites,mocktails and molten chocolates</h2>
        <br>
        <br>
        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/cosmojito.jpeg" alt="">
                    
                </div>
                <div class="content">
                   
                    <h3>COSMOJITO</h3>
                    <p>Adding crushed ice, lots of mint, and sparkling water to the classic ingredients takes the Cosmo out of the city and onto the beach.</p>
                    <a href="http://localhost/food_ak/form.html" class="btn"   target="_blank">order now</a>
                    <span class="price">Rs290</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/cold brew black.jpeg" alt="">
                    
                </div>
                <div class="content">
                    
                    <h3>COLD BREW BLACK</h3>
                    <p>Cold Brewed Coffee a.k.a Cold Brew is the coffee concentrate that you get after the brewing is complete.</p>
                    <br>
                    <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    <span class="price">Rs320</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/kiwi thyme.jpeg" alt="">
                   
                </div>
                <div class="content">
                    
                    <h3>KIWI THYME</h3>
                    <p>These cucumber-kiwi margaritas made with pineapple rum are garnished with kiwi wheels and sprigs of fresh thyme.</p>
                    <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    <span class="price">Rs290</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/java chip.jpeg" alt="">
                   
                </div>
                <div class="content">
                    
                    <h3>JAVA CHIP</h3>
                    <p>Coffee, chocolate syrup, and choco chips are blended with ice and homemade Frappuccino base syrup to create this delicious Java Chip</p>
                    <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    <span class="price">Rs310</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/mojito.jpeg" alt="">
                    
                </div>
                <div class="content">
                    
                    <h3>MOJITO</h3>
                    <p>unaged white rum, which yields a light, crisp flavor. Using Cuban rum will score you points for authenticity</p>
                    <br>
                    <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    <span class="price">Rs200</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/tiramisu_dessert.jpeg" alt="">
                   
                </div>

                <div class="content">
                    
                    <h3>TIRAMISU</h3>
                    <p>Tiramisu is a classic no-bake Italian dessert made with lady fingers, coffee, and cream.</p>
                    <br>
                    <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    <span class="price">Rs360</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/white choco cheese cake.jpeg" alt="">
                   
                </div>
                <div class="content">
                    
                    <h3>chocolate cheesecake</h3>
                    <p>Creamy dessert for a dinner party. Pairing this white chocolate cheesecake with fresh fruit offsets the richness</p>
                    <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    <span class="price">Rs299</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/hazelnut tart sweet.jpeg" alt="">
                    
                </div>
                <div class="content">
                   
                    <h3>hazelnut tart</h3>
                    <p>With a crunchy hazelnut crust and a smooth, creamy bittersweet-chocolate ganache filling, tart that requires surprisingly little effort.</p>
                    <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    <span class="price">Rs340</span>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/choco lava.jpeg" alt="">
                </div>
                <div class="content">
                    
                    <h3>CHOCO LAVA</h3>
                    <p>This lava cake pairs moist chocolate cake with an ooey-gooey molten center.(molten lava inside chocolate cake)</p>
                    <a href="http://localhost/food_ak/form.html" class="btn"  target="_blank">order now</a>
                    <span class="price">Rs250</span>
                </div>
            </div>

        </div>
    </section>

    <!-- menu section ends -->


    <!-- order section starts  -->

    
    <!-- order section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>locations</h3>
                <a href="#">ground floor, surya treasure island, surya vihar, durg</a>
                <a href="#">bhilai_durg(CG)</a>

            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">menu</a>
                <a href="#">order</a>
            </div>

            <div class="box"> 
                <h3>contact info</h3>
                <a href="#">784534590</a>
                <a href="#">758623456</a>
                <a href="#">sristi.arg03@gmail.co</a>
                <a href="#">supriya@gmail.com</a>
                <a href="#">ayushi@gmail.com</a>
                <a href="#">bhilai, chhattisgarh - 49001</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#">twitter</a>
                <a href="https://www.instagram.com/invites/contact/?i=1ctre01tsq7qh&utm_content=nevrn5c">instagram</a>

            </div>

        </div>
    </section>

    <!-- footer section ends -->

    <!-- loader part  -->
    <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>