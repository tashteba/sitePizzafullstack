<?php 
require ("actions/dataBase.php");
// Validate if we clicked on the  button
if(isset($_POST['validateAll'])) {
    // check if user completed validation
    if(!empty($_POST['pseudo']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['password'])){

        // Data of user
        $user_pseudo = htmlspecialchars($_POST["pseudo"]);
        $user_lastname = htmlspecialchars($_POST["lastname"]);
        $user_firstname = htmlspecialchars($_POST["firstname"]);
        $user_passsword = password_hash($_POST["password"], PASSWORD_DEFAULT);

        // verify user if exists, SELECT c'est pour récupérer 
        $checkIfUserAlreadyExist = $bdd->prepare('SELECT pseudo FROM admins WHERE pseudo = ?');
        $checkIfUserAlreadyExist->execute(array($user_pseudo));

        if ($checkIfUserAlreadyExist->rowCount() == 0) {

                // Enter user in database
                $insertUserOnWebSite = $bdd->prepare ('INSERT INTO admins(pseudo, lastname, firstname, password) values (? , ?, ?, ?)');
                $insertUserOnWebSite->execute(array($user_pseudo, $user_lastname, $user_firstname, $user_passsword));

                // Recover the data of user
                $getInfosOfThisUser = $bdd->prepare('SELECT id, pseudo, lastname, firstname FROM admins WHERE lastname = ? AND firstname = ? AND pseudo = ?');
                $getInfosOfThisUser -> execute(array($user_lastname, $user_firstname, $user_pseudo));

                $userInfo = $getInfosOfThisUser->fetch();

                $_SESSION['password'] = true;
                // Redirect to page where user is logged in
                $successMsg = $userInfo["firstname"].' '.$userInfo["lastname"].' Added succesfully !';
                

        } else {
            $errorMsg = "You already have acount in the site";
        }
    }else {
    $errorMsg = "Please enter all shown fields for countinue";

}
}

