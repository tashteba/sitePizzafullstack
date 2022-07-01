<?php

session_start();

require('dataBase.php');

// Making sure if id is existe and not empty.
if(isset($_GET['id']) && !empty($_GET['id'])){
    
    // Getting the id of Pizza.
    $idOfPizza = $_GET['id'];

    // Making sure if pizza is existe.
    $checkIfPizzaExists = $bdd->prepare('SELECT id FROM pizzamenu WHERE id = ?');
    $checkIfPizzaExists->execute(array($idOfPizza));

    if($checkIfPizzaExists->rowCount() > 0){

        // Getting the inforamation of the pizza
        $PizzaInfos = $checkIfPizzaExists->fetch();
        if(isset($_SESSION['password'])){
            // Delete the Pizza wich have the same id
            $deleteThisPizza = $bdd->prepare('DELETE FROM pizzamenu WHERE id = ?');
            $deleteThisPizza->execute(array($idOfPizza));

            // Sending request for menu of pizza
            header('Location: ../myMenu.php');

        } else {
            echo "You don't have the right for delete this Pizza !";
        }

    } else {
        echo "There is no pizza for delete it";
    }
}    