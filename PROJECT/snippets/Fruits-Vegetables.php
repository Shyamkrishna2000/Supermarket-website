<?php
session_start();
if(!isset($_SESSION['name']))
{
header("Location: ../login.php");
exit(); 
}

?>
<!DOCTYPE html>
<html lang="en">
<!--<html lang="en" oncontextmenu="return false">-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supermarket-Fruits and Vegetables</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js" async></script>

</head>
<!--<body oncontextmenu="return false" onkeydown="return false;" onmousedown="return false;">-->
<body>

    <header>
		<div><img class="image-responsive" src="../images/Icon1.png" alt="Icon"></div>
		<div><a href="../index.html"><h1>SUPERMART</h1></a></div>
		<div class="dropdown">
			<button onclick="AccountDetails()" class="dropbtn"><img src="../images/Account.png"></button>
			<div id="Account" class ="dropdown-content">
                <!--<span style="padding: 10px;padding-right: 0px; font-size: 1.1em;">Log out!</span>-->
                <span style="padding: 10px;padding-right: 0px; font-size: 1.1em;"><a href="../index.html"> Logout</a></span>
            </div>
		</div>
		<div class="dropdown">
			<button class="dropbtn "><a href="#Cart1"><img src="../images/Cart.png"></a></button>
			<div id="Cart" class="dropdown-content">
			
            </div>
		</div> 		
	</header>
    <h2>Fruits & Vegetables</h2>
    <p>All prices are for 1 Kg or 1Lt or 1 pack respectively</p>
    <div id="Fruits-Vegetables" class="container-fluid">
        <div id="tiles" class="container">  
            <div class="row">
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/Apple.jpg" width="150"
                        height="150" alt="Apple">
                        <figcaption class="figcaption">Apple</figcaption>
                        <span class="item-price">Rs 200</span>  
                    </figure>
                    <button class="AddCart">Add to Cart</button>   
                </div>
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/Pear.jpg" width="150" height="150" alt="Pear">
                        <figcaption class="figcaption">Pear</figcaption>
                        <span class="item-price">Rs 180</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/Orange.jpg" width="150"
                        height="150" alt="Orange">
                        <figcaption class="figcaption">Orange</figcaption>
                        <span class="item-price">Rs 150</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>  
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/Watermelon.jpg" width="150" height="150" alt="Watermelon">
                        <figcaption class="figcaption">Watermelon</figcaption>
                        <span class="item-price">Rs 30 pe</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>           
                </div>
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/Potato.jpg" width="150" height="150" alt="Potatoes">
                        <figcaption class="figcaption">Potatoes</figcaption>
                        <span class="item-price">Rs 40</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>  
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/Tomato.jpg" width="150" height="150" alt="Tomatoes">
                        <figcaption class="figcaption">Tomatoes</figcaption>
                        <span class="item-price">Rs 50</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items"> 
                        <img class="image-responsive item-image" src="../images/Brinjal.jpg" width="150" height="150" alt="Brinjal">
                        <figcaption class="figcaption">Brinjal</figcaption>
                        <span class="item-price">Rs 50</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/Spinach.jpg" width="150" height="150" alt="Spinach">
                        <figcaption class="figcaption">Spinach</figcaption>
                        <span class="item-price">Rs 50</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items"> 
                        <img class="image-responsive item-image" src="../images/Coriander.jpg" width="150" height="150" alt="Coriander">
                        <figcaption class="figcaption">Coriander</figcaption>
                        <span class="item-price">Rs 20</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>           
            </div>
        </div>
    </div>
    <h2>Cart of your Fruits and Vegetables</h2>
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

<!--   <table cellspacing="90px" cellpadding="50px" >
    <tr > 
        <td><p style="font-size:40px;"> RICE</p><img src="rice.jpeg" width="250px" height="250px"><p style="font-size:200%;">Price:Rs 30 Per kg</p></td>
        <td><p style="font-size:40px;"> WHEAT</p><img src="wheat.jpeg" width="250px" height="250px"><p style="font-size:200%">Price:Rs 50 Per kg</p></td>
        <td><p style="font-size:40px;"> OIL</p><img src="oil.jpeg" width="250px" height="250px"><p style="font-size:200%">Price:Rs 40 Per lt</p></td>
    </tr>
    <tr> 
        <td><p style="font-size:40px;">BISCUIT</p><img src="biscuit.jpeg" width="250px" height="250px"><p style="font-size:200%;">Price:Rs 10 Per kg</p></td>
        <td><p style="font-size:40px;">SUGAR</p><img src="sugar.jpeg" width="250px" height="250px"><p style="font-size:200%;">Price:Rs 20 Per kg</p></td>
        <td><p style="font-size:40px;">TEA</p><img src="tea.jpeg" width="250px" height="250px"><p style="font-size:200%;">Price:Rs 15 Per kg</p></td>
    </tr>
    <tr> 
        <td><p style="font-size:40px;">PASTA</p><img src="pasta.jpeg" width="250px" height="250px"><p style="font-size:200%">Price:Rs 12 Per kg</p></td>
        <td><p style="font-size:40px;">CHEESE</p><img src="cheese.jpeg" width="250px" height="250px"><p style="font-size:200%;">Price:Rs 20 Per kg</p></td>
        <td><p style="font-size:40px;">BUTTER</p><img src="butter.jpeg" width="250px" height="250px"><p style="font-size:200%;">Price:Rs 25 Per kg</p></td>
    </tr>
</table>  
-->
