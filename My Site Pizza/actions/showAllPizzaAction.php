<?php

require ("actions/dataBase.php");

// Getting the menu of pizza by default.
$getAllPizza= $bdd->query('SELECT id, Title, Description, Prise, share, bin, Date_publication From pizzamenu ORDER BY id DESC');

// Making sure if the user is write something in search.
if(isset($_GET["search"]) && !empty($_GET['search'])){
    
    $pizzaSearch = $_GET['search'];

    // Getting all menu of pizza which user is looking for.
    $getAllPizza =$bdd->query('SELECT id, Title, Description, Prise, share, bin, Date_publication From pizzamenu WHERE Title LIKE "%'.$pizzaSearch.'%" ORDER BY id DESC');

    
}