<?php
    session_start();
    require('actions/showAllPizzaAction.php');

?>

<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php';  ?>

<body>

<?php include 'includes/navbar.php'; ?>

    <h1 style = "margin-top: 18px; text-align: center;"> Here, There is Menu of today</h1>
    
       
        <br>
        <section class="menu" id="menu">
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
       
        <?php include "includes/footer.php"; ?>

        <script type="text/javascript" src="assets/myJavaScript.js"></script>

</body>
</html>