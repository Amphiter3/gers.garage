<!DOCTYPE html>
<?php

include "config.php";

define("MY_INC_CODE", 888);
define("APPLICATION_PATH", "app");
define("VIEW_PATH", APPLICATION_PATH . "/view");
 
?>

<html lang="en">
    
<head>

    <title>Ger's Garage &dash; Login</title>

<?php include (VIEW_PATH . "/head.php"); ?>

    
</head>
<!-- HEADER -->
        
<?php 
    echo "<header>";
    include (VIEW_PATH . "/public/banner.php");
    echo "</header>";
    
    include (APPLICATION_PATH . "/inc/db.inc.php");
?>
        
<!-- MAIN CONTENT -->
<main class="margin-top-6 horizontal-center">    
<div class="container"> 
<br>
<div class="card card-container mx-auto">
    

    
    <form class="form-signin" action="login_next.php" method="POST" style="border: 0px;">
        <div align="center"><h2>Login to Ger's Garage</h2><br>
        <input type="text" id="username" name="username" class="form-control" placeholder="Enter your e-mail" required autofocus><br>
        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required><br>
        <br>
        <div align="center"><button class="btn btn-info save" type="submit" value="enter" id="enter" name="enter">SIGN IN</button></div>

    </form>
    <div>Not a member already ?! 
    <div align="center"><button class="btn btn-info save"><a href="newuser.php" class="signup">SIGN UP</a></button></div>
    </div>
    
</div>
</div> 
</main>


<!-- all content above this line -->    
<?php include (VIEW_PATH . "/foot.php"); ?>
        
</body>

</html>

    