<?php


require('actions/dataBase.php');

//Making sure if the right admin is l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfPizza = $_GET['id'];

    //Making sure if pizza is already exists.
    $checkIfPizzaExists = $bdd->prepare('SELECT * FROM pizzamenu WHERE id = ?');
    $checkIfPizzaExists->execute(array($idOfPizza));

    if($checkIfPizzaExists->rowCount() > 0){

        //Getting the information of pizza
        $pizzaInfos = $checkIfPizzaExists->fetch();
        
            
            $pizza_title = $pizzaInfos['Title'];
            $pizza_description = $pizzaInfos['Description'];
            $pizza_bin = $pizzaInfos["bin"];
            $pizza_price = $pizzaInfos['Prise'];
            
        // str_replace for change every occurrences in my string "here I will change every <br> by spaces"
            $pizza_description = str_replace('<br />', '', $pizza_description);
            $pizza_price = str_replace('<br />', '', $pizza_price);

        }else{
            $errorMsg = "You are not the good admin for this pizza";
        }

    }else{
        $errorMsg = "There Pizza but we dont found it.";
    }

