<?php
    include_once 'header.php';
?>
    <div class="form">
        <h1>Project1</h1>
    <form action= "includes/login.inc.php" method="post">
         
        <input type="text" id="fname" name="uid" placeholder="Email / Username">
        <input type="password" id="lname" name="pwd" placeholder="Password">
        <button name="submit" type="submit">Loging</button>
    </form>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo '<div class="error"> Fill in the all fields! </div>';
        }else if($_GET["error"]=="wrongloging"){
            echo '<div class="error"> Invalid Details! </div>';
        } else if($_GET["error"]=="stmtfaild"){
            echo '<div class="error"> Somthing went wrong! </div>';
        }else if($_GET["error"]=="none"){
            echo '<div class="error"> Account created! </div>';
        } 
    }
    ?>
    <p>New here? <a href="signup.php"> Register.</a></p>
    </div>
    
<?php
    include_once 'footer.php';
?>