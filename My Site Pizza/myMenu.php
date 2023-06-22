<?php 
    session_start();
    if(!$_SESSION['password']){
        header('Location: login.php');
    }
    require('actions/myMenuAction.php'); 
   
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="assets/myMenu.css">


<?php include 'includes/head.php'; ?>
<body>
    
    <?php include 'includes/navbar.php'; ?>
    <h1 class ="titreMenu"> Here is Menu of today</h1>
    <a href="signup.php" target="_blank"><button  type="submit" class="btn buttonLogin middle" name="validateAll ">Add new admin</button></a>

    <section class="menu" id="menu">
    <div class="menu-content">
        <?php  
            while($pizza = $getAllMyMenu->fetch())
            {
                ?>
    
        <div class="in-box">
            <i class= "far fa-heart"></i>
            <?= '<img src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $pizza['bin'] ) . '" />'; ?>
            <div class="in-content">
                <div class="star">
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <i class ="fas fa-star"></i>
                    <h2> <?= $pizza['Title'];?></h2>
                    <div><p class = "paragraphMenu"><?= $pizza['Description'];?></p></div>
                    <div class="price"><?= $pizza['Prise'];?> €</div>
                    <div> Shared <br>by <br> <?= $pizza["share"];?><br> In <br><?= $pizza["Date_publication"];?></div>

                    </div>
                    </div>
                    <?php
                    if(isset($_SESSION['password'])){
                        ?>
                        <div class="inSide">
                        <button class = 'btn'><a href="editPizza.php?id=<?= $pizza['id']; ?>">edit my pizza</a></button>
                        <button class = 'btn'><a href="actions/deletePizzaAction.php?id=<?= $pizza['id']; ?>" >delete my pizza</a></button>
                        </div>
                        <?php
                    }
                    ?>
                    
                    
                
           
        </div>
       
    
               
                <?php
            }

        ?>
        </div>

</section>

<script type="text/javascript" src="assets/myJavaScript.js"></script>

</body>
</html>