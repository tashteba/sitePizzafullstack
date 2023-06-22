<?php require("actions/connexion.php"); ?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<link rel="stylesheet" href="assets/loginStyle.css">
<?php include 'includes/head.php'; ?>
<?php include 'includes/navbar.php';?>
<body class='bodyLogin'>
    
    <br><br>
    <form class="container formContainer" method="POST">
    <br>

        <?php if(isset($errorMsg)){ echo '<p class = "errorMsg">'.$errorMsg.'</p>'; } ?>
        <div class='mb-3 firstSide'>
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-fill sizeSvg" viewBox="0 0 16 16">
         <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
            <label for='pseudo' class='form-label labelLogin'>Pseudo</label>
            <input type='text' class='form-control inputLogin' name='pseudo'>
            
        </div>
        
        <div class='mb-3 secondSide'>
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-lock-fill sizeSvg" viewBox="0 0 16 16">
        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/></svg> 
        <label for='password' class='form-label labelLogin'>Password</label>
            <input type="password" class="form-control inputLogin" name="password">
        </div>
        
        <button type="submit" class="btn buttonLogin" name="validate">Connect</button>


        
        
        
    </form>

</body>

</html>