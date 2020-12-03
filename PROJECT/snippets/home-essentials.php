<?php
session_start();
if(!isset($_SESSION['name']))
{
header("Location: ../login.php");
exit(); 
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<title>Supermarket-Home essentials</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/styles.css">
	<script src="../js/script.js" async></script>
</head>
<body>
	<header>
		<div><img class="image-responsive1" src="../images/Icon1.png" alt="Icon"></div>
		<div><a href="../index.html"><h1>SUPERMART</h1></a></div>
		<div class="dropdown">
			<button onclick="AccountDetails()" class="dropbtn"><img src="../images/Account.png"></button>
			<div id="Account" class ="dropdown-content">
                <span style="padding: 10px;padding-right: 0px; font-size: 1.1em;"><a href="../index.html">Log out!</a></span>
                <!-- <span style="padding: 10px;padding-right: 0px; font-size: 1.1em;"><a href="../snippets/Login.html"> Sign in!</a></span> -->
            </div>
		</div>
		<div class="dropdown">
			<button class="dropbtn "><a href="#Cart1"><img src="../images/Cart.png"></a></button>
			<div id = "Cart" class="dropdown-content">

			</div>
		</div> 		
	</header>
	<h2>Home Essentials</h2>
	<p>welcome to home essential. here you get the list of things you may need to buy. happy shopping!!</p>
	<div id="home-essentials" class="container-fluid">
		<div id="tiles" class="container">	
			<div class="row">
				<div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
					<figure class="figure cart-items">
						<img class="image-responsive item-image" src="../images/TableCloth.jpg" width="150" height="150" alt="Table cloth">
						<figcaption class="figcaption">Table cloth</figcaption>
						<span class="item-price">Rs 30</span>
					</figure>
					<button class="AddCart">Add to Cart</button>	
				</div>
				<div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
					<figure class="figure cart-items">
						<img class="image-responsive item-image" src="../images/Bottles.jpg" width="150" height="150" alt="Bottles">
						<figcaption class="figcaption">Bottles</figcaption>
						<span class="item-price">Rs 20</span>
					</figure>
					<button class="AddCart">Add to Cart</button>
				</div>
				<div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
					<figure class="figure cart-items">
						<img class="image-responsive item-image" src="../images/StereoSet.jpg" width="150" height="150" alt="Stereo set">
						<figcaption class="figcaption">Stereo set</figcaption>
						<span class="item-price">Rs 50000</span>
					</figure>
					<button class="AddCart">Add to Cart</button>
				</div>	
				<div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
					<figure class="figure cart-items">
						<img class="image-responsive item-image" src="../images/WallUnit.jpg" width="150" height="150" alt="Wall Unit">
						<figcaption class="figcaption">Wall-Unit</figcaption>
						<span class="item-price">Rs 40000</span>
					</figure>
					<button class="AddCart">Add to Cart</button>			
				</div>
				<div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
					<figure class="figure cart-items">
						<img class="image-responsive item-image" src="../images/Bulb.jpg" width="150" height="150" alt="Bulbs">
						<figcaption class="figcaption">Bulbs</figcaption>
						<span class="item-price">Rs 40</span>
					</figure>
					<button class="AddCart">Add to Cart</button>
				</div>	
				<div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
					<figure class="figure cart-items">
						<img class="image-responsive item-image" src="../images/Switch.jpg" width="150" height="150" alt="Switches and switch Boards">
						<figcaption class="figcaption">Switches and Switch Boards</figcaption>
						<span class="item-price">Rs 20</span>
					</figure>
					<button class="AddCart">Add to Cart</button>
				</div>
				<div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
					<figure class="figure cart-items">	
						<img class="image-responsive item-image" src="../images/Bed.jpg" width="150" height="150" alt="Bed">
						<figcaption class="figcaption">Bed</figcaption>
						<span class="item-price">Rs 40000</span>
					</figure>
					<button class="AddCart">Add to Cart</button>
				</div>
				<div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
					<figure class="figure cart-items">
						<img class="image-responsive item-image" src="../images/Mats.jpg" width="150" height="150" alt="Mats">
						<figcaption class="figcaption">Mats</figcaption>
						<span class="item-price">Rs 50</span>
					</figure>
					<button class="AddCart">Add to Cart</button>
				</div>
				<div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
					<figure class="figure cart-items">	
						<img class="image-responsive item-image" src="../images/Plants.jpg" width="150" height="150" alt="Plants">
						<figcaption class="figcaption">Plants</figcaption>
						<span class="item-price">Rs 100</span>
					</figure>
					<button class="AddCart">Add to Cart</button>
				</div>
				<div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
					<figure class="figure cart-items">
						<img class="image-responsive item-image" src="../images/Tins.jpg" width="150" height="150" alt="Tins">
						<figcaption class="figcaption">Tins</figcaption>
						<span class="item-price">Rs 20</span>
					</figure>
					<button class="AddCart">Add to Cart</button>
				</div>
				<div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
					<figure class="figure cart-items">	
						<img class="image-responsive item-image" src="../images/Soap.jpg" width="150" height="150" alt="Soap">
						<figcaption class="figcaption">Soap</figcaption>
						<span class="item-price">Rs 40</span>
					</figure>
					<button class="AddCart">Add to Cart</button>
				</div>
			
			</div>
		</div>
	</div>
	<h2>Cart of your Home-Essentials</h2>
   	<div id="Cart1" class="Cart-items container">    
    </div>
    <div id="Stats" class="container">
        <div class ="cart-total">
            <strong class="cart-total-title"> Total:</strong>
            <span class="cart-total-price">Rs 0 </span>
        </div>
        <a href="Payment.html"><button onclick="purchaseClicked()" class="purchaseBtn">PURCHASE</button></a>
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



<!--

		<ol>
			<li><img src="https://tse4.mm.bing.net/th?id=OIP.fRanJEEGa0j_PBwVp6cptQHaHa&pid=Api&P=0&w=300&h=300" width="150" height="150"> Table cloth</li><br>
			<li><img src="https://tse3.mm.bing.net/th?id=OIP.EaKBFzCKxLuWWQtcnKqBoAHaE8&pid=Api&P=0&w=229&h=153" width="150" height="150">Bottles</li><br>
			<li><img src="https://tse3.mm.bing.net/th?id=OIP.trDS_hF4nGq18C9Aek28WwHaFu&pid=Api&P=0&w=208&h=162" width="150" height="150">Stereo set</li><br>
			<li><img src="https://tse3.mm.bing.net/th?id=OIP.bIKdcsfS5FpdfhaixLLzsAHaFg&pid=Api&P=0&w=216&h=161" width="150" height="150">wall unit</li><br>
			<li><img src="https://tse2.mm.bing.net/th?id=OIP.1FWqRVDbw4XtCgGfipvtMAHaFj&pid=Api&P=0&w=202&h=152" width="150" height="150">Bulbs</li><br>
			<li><img src="https://4.imimg.com/data4/QI/DF/MY-12622694/gm-modulor-switches-500x500.jpg" width="150" height="150">Switches and Switch Boards</li><br>
			<li><img src="https://tse1.mm.bing.net/th?id=OIP.tVAAf8JATcxjhbe90yXVowHaEK&pid=Api&P=0&w=314&h=177" width="150" height="150">Bed</li><br>
			<li><img src="https://tse1.mm.bing.net/th?id=OIP.lmUHc5uLdx_uF6uMRfonjgHaFR&pid=Api&P=0&w=220&h=157" width="150" height="150">Mats</li><br>
			<li><img src="https://tse3.mm.bing.net/th?id=OIP.trDS_hF4nGq18C9Aek28WwHaFu&pid=Api&P=0&w=208&h=162" width="150" height="150">Plants</li><br>
			<li><img src="https://tse4.mm.bing.net/th?id=OIP.ir8dx3AFKsAmLlIijE9i_gHaJ4&pid=Api&P=0&w=300&h=300" width="150" height="150">Tins</li><br>
			<li><img src="https://tse1.mm.bing.net/th?id=OIP.6mPxWYLniExw3m8yxUrmXwHaHa&pid=Api&P=0&w=300&h=300" width="150" height="150">Rugs</li><br>
			<li><img src="https://sep.yimg.com/ay/vickerey/pre-de-provence-large-french-bath-soap-250g-147.jpg" width="150" height="150">Soaps</li><br>
			<li><img src="https://www.harborfreight.com/media/catalog/product/i/m/image_15242.jpg" width="150" height="150">Battery/Cell (AA)</li><br>
			<li><img src="https://tse1.mm.bing.net/th?id=OIP.pTKfau8Kj2wZZ4eaqhk3mwD6D6&pid=Api&P=0&w=300&h=300" width="150" height="150">battery/cell (AAA)</li><br>
			<li><img src="http://i.ebayimg.com/images/i/222402555544-0-1/s-l1000.jpg" width="150" height="150">Duplicate Remotes</li><br>
		</ol>
	-->