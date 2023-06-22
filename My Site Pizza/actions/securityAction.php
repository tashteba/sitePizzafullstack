<?php 
session_start();
// Verify that is admin user
if(!isset($_SESSION['password'])){
    header('Location: login.php');
}