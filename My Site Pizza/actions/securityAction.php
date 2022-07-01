<?php 
session_start();

if(!isset($_SESSION['password'])){
    header('Location: loginAdmin.php');
}