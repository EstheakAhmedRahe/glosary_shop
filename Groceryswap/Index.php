<?php

@include 'config.php';

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Grocery Swap</title>
</head>
<style>
       .home{
        display: flex;
        align-items: center;
        justify-content: center;
        background:url(img/ben4444.jpg);
        background-position: center;
        background-size: cover;
        padding-top: 17rem;
        padding-bottom: 10rem;
    }
</style>
<body>
<!-- header section starts -->

<header class="header">
    <a href="#" class="logo"><i class="fas fa-shopping-basket"></i>GrocerySwap</a>
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">products</a>
        <a href="#categories">categories</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>
    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>
    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="img/cart-img-1.png" alt="">
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="img/cart-img-2.png" alt="">
            <div class="content">
                <h3>onion</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="img/cart-img-3.png" alt="">
            <div class="content">
                <h3>chicken</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : $19.69/- </div>
        <a href="#" class="btn">checkout</a>
    </div>



<section class="form-container">

<form action="" method="POST"  class="login-form">
   <h3>login now</h3>
   <input type="email" name="email" class="box" placeholder="enter your email" required>
   <input type="password" name="pass" class="box" placeholder="enter your password" required>
   <a href="home.php"><input type="submit" value="login now"  class="btn" name="submit"></a> 
   <p>don't have an account? <a href="register.php">create now</a></p>
</form>

</section>

   
</header>



<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">
    <div class="content">
        <h3>fresh and <span>organic</span> products for your</h3>
        <p>Looking for a grocery store where you can get all kinds of grocery products? <br> If you want fresh groceries – ours is the address.</p>
        <a href="#" class="btn">shop now</a>
    

    </div>


</section>

<!-- home section ends -->
    

<!-- features section starts -->

<section class="features" id="features">
    <h1 class="heading"> our <span>features</span></h1>
   <div class=" box-container">
    <div class="box">
        <img src="img/feature-img-1.png" alt="">
        <h3>fresh and organic</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, porro.</p>
        <a href="#" class="btn">read more</a>
    </div>
    <div class="box">
        <img src="img/feature-img-2.png" alt="">
        <h3>fast delivery</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, porro.</p>
        <a href="#" class="btn">read more</a>
    </div>
    <div class="box">
        <img src="img/feature-img-3.png" alt="">
        <h3>fresh and organic</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, porro.</p>
        <a href="#" class="btn">easy payments</a>
    </div>
   </div>
</section>

<!-- features section ends -->
<!-- products section starts -->

<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="img/product-1.png" alt="">
                <h3>fresh orange</h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="img/product-2.png" alt="">
                <h3>fresh onion</h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>
            
            <div class="swiper-slide box">
                <img src="img/product-3.png" alt="">
                <h3>fresh meat</h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>
            
            <div class="swiper-slide box">
                <img src="img/product-4.png" alt="">
                <h3>fresh cabbage</h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="img/product-5.png" alt="">
                <h3>fresh potato</h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="img/product-6.png" alt="">
                <h3>fresh avocado</h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="img/product-7.png" alt="">
                <h3>fresh carrot</h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="img/product-8.png" alt="">
                <h3>green lemon</h3>
                <div class="price"> $4.99/- - 10.99/- </div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>

    </div>


</section>

<!-- products section ends -->
<!-- categories section starts -->
<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="img/cat-1.png" alt="">
            <h3>vegitables</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="img/cat-2.png" alt="">
            <h3>fresh fruits</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="img/cat-3.png" alt="">
            <h3>dairy products</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="img/cat-4.png" alt="">
            <h3>fresh meat</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section>

<!-- categories section ends -->
<!-- review section starts -->
<section class="review" id="review">
    <h1 class="heading"> customer's <span>review</span></h1>
    <div class="swiper review-slider">
        <div class="swiper-wrapper">
        <div class="swiper-slide box">
            <img src="images/tas.jpeg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab veritatis voluptates ex eius nobis? Tenetur deleniti neque temporibus nulla vel.</p>
            <h3>Mahi</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="swiper-slide box">
            <img src="img/muaz.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab veritatis voluptates ex eius nobis? Tenetur deleniti neque temporibus nulla vel.</p>
            <h3>Mehedi Karim</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="swiper-slide box">
            <img src="img/ifty.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab veritatis voluptates ex eius nobis? Tenetur deleniti neque temporibus nulla vel.</p>
            <h3>Ifty</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="swiper-slide box">
            <img src="img/riv3.jpg" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab veritatis voluptates ex eius nobis? Tenetur deleniti neque temporibus nulla vel.</p>
            <h3>Afrid</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    </div>
</section>
<!-- review section ends -->

<!-- blogs section starts -->
<section class="blogs" id="blogs">
    <h1 class="heading"> our <span>blogs</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="img/blog-1.jpg" alt="">
            <div class="content">
                <div class="icons">
                <a href=""><i class="fas fa-user"></i> By User </a>
                <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic fruits and veggies</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati, provident.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
        <div class="box">
            <img src="img/blog-2.jpg" alt="">
            <div class="content">
                <div class="icons">
                <a href=""><i class="fas fa-user"></i> By User </a>
                <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic fruits and veggies</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati, provident.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
        <div class="box">
            <img src="img/blog-3.jpg" alt="">
            <div class="content">
                <div class="icons">
                <a href=""><i class="fas fa-user"></i> By User</a>
                <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
                </div>
                <h3>fresh and organic fruits and veggies</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati, provident.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
    </div>
</section>
<!-- blogs section ends -->
<!-- footer section starts -->
<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> GrocerySwap <i class="fas fa-shopping-basket"></i> </h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, saepe.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +8801642522694 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +8801318669620 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> rukaiya@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> sylhet, Bangladesh- 3100 </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="img/payment.png" class="payment-img" alt="">
        </div>

    </div>
    <div class="credit"> created by <span> Rukaiya Akther Sharmin </span> | all rights reserved </div>


    </section>


<!-- !-- footer section ends --> -->
    
































    <script type="Text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="Text/javascript" src="js/main.js"></script>
    
</body>
</html>