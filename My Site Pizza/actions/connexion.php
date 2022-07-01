<?php
session_start();

if(isset($_POST['validate'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){
        $psuedo_par_defaut = "admin";
        $mdp_par_defaut = "admin";
        
        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $password_saisi = htmlspecialchars($POST['password']);

        if($pseudo_saisi == $psuedo_par_defaut AND $password_saisi == $password_par_defaut){
            $_SESSION['password'] = true;
            header('Location:myMenu.php');

        }else{
            $errorMsg = 'Your name or your password is not valid';
        }

    } else{
        $errorMsg =  'Please complete all the fields';
    }

}