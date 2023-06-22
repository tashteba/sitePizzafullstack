<?php
 require ('actions/getPizzaAction.php');
 require ('actions/editPizzaAction.php');
 require ('actions/securityAction.php');

 
?>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/publishPizza.css">

<head>
   <? include 'includes/head.php';?>
</head>

<body>
    <? include 'includes/navbar.php';?>

    
    
<h1 class = "titlePublish"> This place only for Admins</h1>

<br><br>
    <div class="container">
        <?php if(isset($errorMsg)){ echo '<p class="erorMsg">'.$errorMsg.'</p>'; } ?>
        
        <?php 
            if(isset($pizza_price)){ 
                ?>
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label titrePublishPizza">Title of Pizza</label>
                        <input type="text" class="form-control" name="title" value="<?= $pizza_title; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label titrePublishPizza">Description of Pizza</label>
                        <textarea class="form-control" name="description"><?= $pizza_description; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label titrePublishPizza">Price of Pizza</label>
                        <textarea type="text" class="form-control" name="content"><?= $pizza_price; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label titrePublishPizza">Chose a Image</label>
                        <?= '<img src="data:image/png|image/jpeg|image/gif|image/jpg;base64,' . base64_encode( $pizza_bin ) . '" />'; ?>
                        <input type="file" class="form-image titrePublishPizza " name="picture" style="width:100%; hight: auto;">

                    </div>


                    <button type="submit" class="btn" name="validate">Confirm </button>                    
                    <button class="btn"><a href='Mymenu.php' style= 'text-decoration: none; color:red;' >Cancel</a></button>

                </form>
             </div>
                <?php
            }
        ?>
        

   
        
        
    
</body>
</html>