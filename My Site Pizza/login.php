<?php require("actions/connexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<?php include 'includes/head.php'; ?>
<?php include 'includes/navbar.php';?>
<body style = 'color:#d5ab65;'>
    
    <br><br>
    <form class="container" method="POST"  style = "background: url(assets/photos/pizzaConn.jpg);background-size: cover; font-size:1.5rem; margin-top: 12rem;background-position: right;height:50vh; ">
    <br>

        <?php if(isset($errorMsg)){ echo '<p style = color:red;>'.$errorMsg.'</p>'; } ?>
        <div class='mb-3' style='text-align:center; font-size:2rem; '>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
         <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
            <label for='exampleInputEmail1' class='form-label' style='margin-bottom: 25px;'>Pseudo</label>
            <input type='text' class='form-control' name='pseudo' style="font-size:1.5rem;">
            
        </div>
        
        <div class='mb-3' style='text-align:center; font-size:2rem; margin-bottom: 5px;'>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/></svg> 
        <label for='exampleInputPassword1' class='form-label' style='margin-bottom: 25px;'>Password</label>
            <input type="password" class="form-control" name="password" style="font-size:1.5rem;">
        </div>
        
        <button type="submit" class="btn" name="validate" style= 'margin-top: 40px;'>Connect</button>
        
        
        
    </form>

</body>

</html>