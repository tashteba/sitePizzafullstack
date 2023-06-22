 <?php
session_start();

require("actions/signupAction.php");

if(isset($_POST['validate'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "admin";
        
        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $password_saisi = htmlspecialchars($_POST['password']);

        if(($pseudo_saisi == $pseudo_par_defaut || $pseudo_saisi == $user_pseudo) && ($password_saisi == $mdp_par_defaut || $password_saisi == $user_password)){

            $_SESSION['password'] = true;
            header('Location: myMenu.php');
            exit();
        } else {
            $errorMsg = 'Your name or your password is not valid';
        }
    } else {
        $errorMsg = 'Please complete all the fields';
    }
}



// session_start();
// require('actions/database.php');


// if(isset($_POST['validate'])){
//     if(!empty($_POST['pseudo']) && !empty($_POST['password'])){
//         $pseudo_par_defaut = "admin";
//         $mdp_par_defaut = "admin";
        
//         $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
//         $password_saisi = htmlspecialchars($_POST['password']);

//         $checkIfUserExists = $bdd->prepare('SELECT * FROM admins WHERE pseudo = ?');
//         $checkIfUserExists->excute(array('$pseudo_saisi'));

//         if ($checkIfUserExists->rowCount() > 0) {

//             $userInfos = $checkIfUserExists->fetch();

//             if (password_verify($pseudo_saisi, $userInfos["password"])){

//             $_SESSION['password'] = true;
//             header('Location: myMenu.php');
//             exit();

//         } else {
//             $errorMsg = 'Your name or your password is not valid';
//         }

//     }else {
//         $errorMsg = 'Please you are not allowed to login';
//     } 
// }else {
//         $errorMsg = 'Please complete all the fields';
//     }
// } 