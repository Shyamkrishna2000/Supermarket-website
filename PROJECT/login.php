<?php

require('database.php');

?>

<!DOCTYPE html>
<html lang="en">

  <title>Login Form</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
-->
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">

<!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

-->




<?php

if (isset($_POST['username'])){

  $username = $_POST['username'];

  $password = md5($_POST['pwd']);

  $stmt = $conn->prepare("SELECT username, password FROM register_users where username='$username' and password = '$password'");

    /* execute statement */
    $stmt->execute();

    /* bind result variables */
    $stmt->bind_result($user, $pass);

    /* fetch values */
    while ($stmt->fetch())
    {

    }

if($user == $username)
      {
        session_start();
           $_SESSION['name'] = $user;
            // Redirect user to index1.php
           header("Location: index1.php");
      }
      else
      {
          $msg = "Your username or password is wrong";
      }


$stmt->close();

    }

?>

<body>
<!--
<div style="margin-top:5%" class="container">
-->
 <header>
        <div><img class="image-responsive" src="images/Icon1.png" alt="Icon"></div>
        <div><a href="index.html"><h1>SUPERMART</h1></a></div>
        <!-- <div class="dropdown">
            <button class="dropbtn"><img src="images/Account.png"></button>
            <div class ="dropdown-content">
                <span>Log out!</span>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn "><img src="images/Cart.png"></button>
            <div class="dropdown-content">
            </div>
        </div> -->     
    </header>


    <div class="col-sm-4">
    </div>

 <!-- <div class="row">

    <div class="col-sm-4" style="background:#eeeeee;">
  -->
    <?php echo $msg; ?>


      <h2>Login form</h2>
  <form action="" method="POST">
    <!--<div class="form-group"> --><div class="container main-login">
      <div class="container Form">
      <div class="Username">
      <label>Username:</label>

        <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
        </div><!-- end of <div class="Username"> -->

    

    <div class="password">
      <label>Password:</label>

        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">

    </div><!-- end of <div class="password"> -->

     <!-- <div class="form-group"> -->
      <div>

        <button  type="submit" class="login-btn">
          <!-- style="margin-left: 40%;" class="btn btn-default -->Login</button>
                    <!-- <label><input id="rememberme" name="rememberme" value="remember" type="checkbox" /> &nbsp;Remember me</label>  --> 

      </div>
  </div><!-- end of <div class="container Form"> -->

  <div class="container" style="background-color:#f1f1f1"> 
                <button type="button" class="cancelbtn"><a href="index.html">Cancel</a></button> 
                <!-- <span class="psw">Forgot <a href="#">password?</a></span> --> 
  </div>
</div>
  </form>
  <p>Click here to <a href='register.php'>Register</a></p>
<script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajax-utils.js"></script>
    <script src="js/script.js"></script>
   
    <footer>
        <p>1453 Biddie Lane<br>Richmond<br>Virginia<br>23224</p><hr>
        <p><a href="tel:18418714781">Tel:18418714781</a></p>
        
    </footer> 

</body>
</html>
