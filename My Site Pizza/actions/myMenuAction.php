<?php 

require ('actions/dataBase.php');
// Retrieve all my Pizza in my database
$getAllMyMenu = $bdd->query('SELECT id, Title, bin, Prise, share, Description, Date_publication FROM pizzamenu ORDER BY id DESC');
// $getAllMyMenu->execute(array($_SESSION['password']));

