<?php session_start();
    require('actions/showAllPizzaAction.php');

?>
<!DOCTYPE html>

<html lang="en">
<?php include 'includes/head.php';  ?>
<body>
    <?php include 'includes/navbar.php'; ?>

<!---------------------------------- Home section  --------------------------------------->
<section class="home" id="home" >
    <div class="home-content">
        <div class="inner-content">
            <h3> Welcome to my site Pizza&nbsp;<i class='fas fa-pizza-slice'></i>&nbsp;Zone </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                 sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                 <a href="indexOfToday2.php"><button class="btn">Menu For Today</button></a>
        </div>
        <div class="inner-content-img">
            <img src="assets/photos/pzza.jpg" alt="img">
        </div>
    </div>

</section>


<!---------------------------------- Carousell  --------------------------------------->
<section class ='sliderSection'>
<div class="containerSlider">
          <div class="contenuContainer">
            <div id="slider">
                <img src="assets/photos/pizzaGood.jpg" alt="first slide" id="slide">
                <div id="precedent" onclick="ChangeSlide(-1)">&lt;</div>
                <div id="suivant" onclick="ChangeSlide(1)">&gt;</div>
            </div>
            <div class="containerText">
                <p class = 'containerTextP'> It's experience wonderful that you will never forgate 😉😉 </p>
                <!-- <button class="savoirPlus" type="submit">En savoir plus</button> -->            
            </div>       
          </div>
        </div>
</section>




<!------------------------------------ About Section ------------------------------------->
<section class="about" id='about'>
    <h4>About</h4>
    <div class="about-sec">
        <div class="img">
            <img src="assets/photos/pizzaGood.jpg" alt="img">
        </div>
        <div class="about-content">
            <h3>Pizza Zone</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                 sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                 <div class="about-inner">
                     <h5><i class="fa-solid fa-circle-right"></i> Good Quality 😊</h5>
                     <h5><i class="fa-solid fa-circle-right"></i> Fresh vegetables 😉</h5>
                     <h5><i class="fa-solid fa-circle-right"></i> Avilable 24 H * 7 D ✌️ </h5>
                     <h5><i class="fa-solid fa-circle-right"></i> Best Price 👍</h5>
                     <h5><i class="fa-solid fa-circle-right"></i> Best Quality 👌</h5>
                 </div>
                 <div id="path">
                    <div id="brick">
                       <a href="readMore.php"><button class="btn">Read More</button></a>
                    </div>
                 </div>
                
        </div>
    </div>
</section>

    <!--------------------------------  Services  ---------------------------------------->

<section class="service" id="service">
    <h4>Services</h4>
    <div class="service-content">
        <div class="inner-box">
           <img src="assets/photos/delivery.jpg" alt="img"> 
           <h2>Free Delivery</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

        </div>    
       <div class="inner-box">
           <img src="assets/photos/onlinePayment.png" alt="img"> 
           <h2>Online Payment</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>

        <div class="inner-box">
           <img src="assets/photos/fresh.jpg" alt="img"> 
           <h2>Fresh Food</h2>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
           
        </div>
    </div>
</section>

<!---------------------------------------  Menu ---------------------------------------->
<section class="menu" id="menu">
    <h4>Our Menu</h4>
    <div class="menu-content">
        <div class="in-box">
            <i class= "far fa-heart"></i>
            <img src="assets/photos/pizzaSushi.jpg" alt="img">
            <div class="in-content">
                <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <h2>Margherita Sushi pizza</h2>
                    <div class="price">16 €</div>
                    <button class="btn">Add to Cart <i class = 'fas fa-plus-circle'></i></button>
                </div>
            </div>
        </div>
        <div class="in-box">
            <i class= "far fa-heart"></i>
            <img src="assets/photos/VegetablesPizza.jpg" alt="img">
            <div class="in-content">
                <div class="star">
                    <i class = "fas fa-star"></i>
                    <i class = "fas fa-star"></i>
                    <i class = "fas fa-star"></i>
                    <i class = "fas fa-star"></i>
                    <i class = "fas fa-star"></i>
                    <h2>Vegetables Pizza</h2>
                    <div class="price">12 €</div>
                    <button class="btn">Add to Cart <i class = 'fas fa-plus-circle'></i></button>
                </div>
            </div>
        </div>
        <div class="in-box">
            <i class= "far fa-heart"></i>
            <img src="assets/photos/margherita.jpg" alt="img">
            <div class="in-content">
                <div class="star">
                    <i class = "fas fa-star"></i>
                    <i class = "fas fa-star"></i>
                    <i class = "fas fa-star"></i>
                    <i class = "fas fa-star"></i>
                    <i class = "fas fa-star"></i>
                    <h2>Margherita  pizza</h2>
                    <div class="price">10 €</div>
                    <button class="btn">Add to Cart <i class = 'fas fa-plus-circle'></i></button>
                </div>
            </div>
        </div>
    </div>

</section>

<!---------------------------------------  Menu Of today  -------------------------------->
<section class="menu" id="menu">
    <h4>Our Menu Of Today</h4>

        <div class="menu-content">

                                
        <?php 
            while($pizza = $getAllPizza->fetch()){
                ?>
                            
                                    
                                    <div class="in-box">
                                        <?= '<img src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $pizza['bin'] ) . '" />'; ?>
                                    <div class="in-content">
                                    <div class="star">
                                        <i class ="fas fa-star"></i>
                                        <i class ="fas fa-star"></i>
                                        <i class ="fas fa-star"></i>
                                        <i class ="fas fa-star"></i>
                                        <i class ="fas fa-star"></i>
                                        <h2> <?= $pizza['Title'];?></h2>
                                        <div><p class="paraGraphPizza"><?= $pizza['Description'];?></p></div>
                                        <div class="price"><?= $pizza['Prise'];?> €</div>
                                        </div>
                                        </div>

                                    <br>
            </div>
            
                <?php
            }
        ?>
        </div>
        </section>
<!----------------------------Blog Section----------------------->

<section class="blog" id="blog">
    <h4>Latest Blog</h4>
    <div class="inner-blog">
        <div class="blog-content">
            <div class="in-blog">
                <div class="im">
                    <img src="assets/photos/pizzaGood.jpg" alt="img">
                    <div class="in-blog-icon">
                        <a href="#"><i class = "fas fa-calendar"></i>26th August 2022</a>
                        <a href="#"><i class = "fas fa-user"></i>Admin</a>
                    </div>
                </div>
                <div class="in-blog-content">
                <h2>Pizza is Good</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
        </div>
        <div class="blog-content">
            <div class="in-blog">
                <div class="im">
                    <img src="assets/photos/pizzaSushi.jpg" alt="img">
                    <div class="in-blog-icon">
                        <a href="#"><i class = "fas fa-calendar"></i>26th August 2022</a>
                        <a href="#"><i class = "fas fa-user"></i>Admin</a>
                    </div>
                </div>
                <div class="in-blog-content">
                <h2>Amazing Pizza,Best Quailty</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
        </div>
        <div class="blog-content">
            <div class="in-blog">
                <div class="im">
                    <img src="assets/photos/Yummy.jpg" alt="img">
                    <div class="in-blog-icon">
                        <a href="#"><i class = "fas fa-calendar"></i>26th August 2022</a>
                        <a href="#"><i class = "fas fa-user"></i>Admin</a>
                    </div>
                </div>
                <div class="in-blog-content">
                <h2>Yummmmy Pizza</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include "includes/footer.php";   ?>

<script src="assets/slider.js"></script>
<script type="text/javascript" src="assets/myJavaScript.js"></script>


</body>
</html> 