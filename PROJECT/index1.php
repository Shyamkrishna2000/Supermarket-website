<?php
require("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Supermarket-Home Page</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/script.js" async></script>
</head>
<body>
	<header>
        <div><img class="image-responsive" src="images/Icon1.png" alt="Icon"></div>
        <div><a href="index.html"><h1>SUPERMART</h1></a></div>
        <div class="dropdown">
            <button onclick="AccountDetails()" class="dropbtn"><img src="images/Account.png"></button>
            <div id="Account" class ="dropdown-content">
								<span style="padding: 10px; padding-right: 0px; font-size: 0.8em; color:black;">Welcome <?php echo $_SESSION['name']; ?></span>
						<!--<span style="padding: 10px; padding-right: 0px; font-size: 1.1em; color:black;"><a href="login.php"> Sign in!</a></span> <br> -->
                <span style="padding: 10px; padding-right: 0px; font-size: 1.1em; color:black;"><a href="logout.php">Log out!</a></span>
            </div>
        </div>

    </header>
	</header>
	<div id="main-content" class="container">
		<p>Welcome to Supermart! Happy Shopping!</p>
		<div class="jumbotron"></div>
		<p>What are you looking for :) <br><br>Choose a Category:-</p>
		<div id= "tiles" class="container">
			<div class="row">
				<div id="block" class=" container col-lg-3 col-sm-6 col-md-4 col-xs-6 col-xxs-12">
					<figure class="figure">
						<img class="image-responsive" src="images/Groceries.jpg" alt="Groceries">
						<figcaption class="figcaption"><a href="snippets/Grocery.php">Groceries</a></figcaption><br>
					</figure>
				</div>
				<div id="block" class="container col-lg-3 col-sm-6 col-md-4 col-xs-6 col-xxs-12">
					<figure class="figure">
						<img class="image-responsive" src="images/Fruits&Vegetable.jpg" alt="Fruits&Vegetables">
						<figcaption class="figcaption"><a href="snippets/Fruits-Vegetables.php"> Fruits & Vegetables</a></figcaption><br>
					</figure>
				</div>
				<div id="block" class="container col-lg-3 col-sm-6 col-md-4 col-xs-6 col-xxs-12">
					<figure class="figure">
						<img class="image-responsive" src="images/HomeEssentials.jpg" alt="Home Essentials">
						<figcaption class="figcaption"><a href="snippets/home-essentials.php">Home Essentials</a></figcaption><br>
					</figure>
				</div>
				<div id="block" class="container col-lg-3 col-sm-6 col-md-4 col-xs-6 col-xxs-12">
					<figure class="figure">
						<img class="image-responsive" src="images/Stationery.jpg" alt="Stationery">
						<figcaption class="figcaption"><a href="snippets/stationery.php"> Stationery</a></figcaption><br>
					</figure>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<p>1453 Biddie Lane<br>Richmond<br>Virginia<br>23224</p><hr>
		<p><a href="tel:18418714781">Tel:18418714781</a></p>

	</footer>
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/ajax-utils.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
