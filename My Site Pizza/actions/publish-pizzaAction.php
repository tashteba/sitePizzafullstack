<?php 

require('actions/dataBase.php');

//Making sure if admin clicked on button.
if(isset($_POST['validate'])){

    //Making sure if all fields are completely validated.
    if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content'])  AND !empty($_POST['shared'])){
        //Data of Pizza 
        $pizza_title = htmlspecialchars($_POST['title']);
        $pizza_description = nl2br(htmlspecialchars($_POST['description']));
        $pizza_content = nl2br(htmlspecialchars($_POST['content']));
        $pizza_share = nl2br(htmlspecialchars($_POST['shared']));
        $pizza_image = file_get_contents($_FILES['picture']['tmp_name']);
        $pizza_date = date('d/m/Y');
  //Enter the indormation of pizza in array
        $insertPizzaOnWebsite = $bdd->prepare('INSERT INTO pizzamenu(Title, Description, Prise, share, bin, Date_publication )VALUES(?, ?, ?, ?, ?, ?)');
        $insertPizzaOnWebsite->execute(
            array(
                $pizza_title, 
                $pizza_description, 
                $pizza_content,
                $pizza_share,
                $pizza_image, 
                $pizza_date
            )
        );
        
        $successMsg = "Your Pizzza is now available !";
        
    }else{
        $errorMsg = "Please Complete all Fields...";
    }

}