<?php 

require ('actions/dataBase.php');

$getAllMyMenu = $bdd->query('SELECT id, Title, bin, Prise, share, Description, Date_publication FROM pizzamenu ORDER BY id DESC');


