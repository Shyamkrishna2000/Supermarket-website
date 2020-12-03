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
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Supermarket-Stationery</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js" async></script>
</head>
<body>
	<header>
		<div><img class="image-responsive" src="../images/Icon1.png" alt="Icon"></div>
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
            <div id="Cart" class="dropdown-content">
            
            </div>
        </div> 		
	</header>	
	<div id="Stationery" class="container-fluid">
	<h2>Stationery</h2>
	<p>welcome to stationary page. here you get the list of things you may need to buy. happy shopping!!</p>
        <div id="tiles" class="container">  
            <div class="row">
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/NoteBook.jpg" width="150"
                        height="150" alt="Notebooks">
                        <figcaption class="figcaption">Notebooks</figcaption>
                        <span class="item-price">Rs 60</span>  
                    </figure>
                    <button class="AddCart">Add to Cart</button>   
                </div>
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/Pen.jpg" width="150" height="150" alt="Pens">
                        <figcaption class="figcaption">Pens</figcaption>
                        <span class="item-price">Rs 10</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/Stapler.jpg" width="150"
                        height="150" alt="Stapler">
                        <figcaption class="figcaption">Stapler</figcaption>
                        <span class="item-price">Rs 20</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>  
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/RubberBands.jpg" width="150" height="150" alt="Rubber Bands">
                        <figcaption class="figcaption">Rubber Bands</figcaption>
                        <span class="item-price">Rs 10</span>
                    </figure> 
                    <button class="AddCart">Add to Cart</button>          
                </div>
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/A4Sheets.jpg" width="150" height="150" alt="A4 sheets">
                        <figcaption class="figcaption">A4 sheets</figcaption>
                        <span class="item-price">Rs 50</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>  
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/DrawingSheets.jpg" width="150" height="150" alt="Drawing sheets">
                        <figcaption class="figcaption">Drawing sheets</figcaption>
                        <span class="item-price">Rs 20</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items"> 
                        <img class="image-responsive item-image" src="../images/Balloons.jpg" width="150" height="150" alt="Balloons">
                        <figcaption class="figcaption">Balloons</figcaption>
                        <span class="item-price">Rs 100</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items">
                        <img class="image-responsive item-image" src="../images/ClothBag.jpg" width="150" height="150" alt="Cloth Bags">
                        <figcaption class="figcaption">Cloth Bags</figcaption>
                        <span class="item-price">Rs 10</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items"> 
                        <img class="image-responsive item-image" src="../images/Pencil.jpg" width="150" height="150" alt="Pencils">
                        <figcaption class="figcaption">Pencils</figcaption>
                        <span class="item-price">Rs 10</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>
                <div class="container col-sm-4 col-md-3 col-xs-6 col-xxs-12" style="margin-bottom: 10px">
                    <figure class="figure cart-items"> 
                        <img class="image-responsive item-image" src="../images/Crayon.jpg" width="150" height="150" alt="Crayons">
                        <figcaption class="figcaption">Crayons</figcaption>
                        <span class="item-price">Rs 20</span>
                    </figure>
                    <button class="AddCart">Add to Cart</button>
                </div>           
            </div>
        </div>
    </div>
    <h2>Cart of your Stationery</h2>
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





<!-- <ol>
		<li><img src="http://www.fortunepaperproducts.com/wp-content/uploads/2016/05/Long-Notebooks-1-300x240.jpg"  width="150" height="150">Books</li><br>

		<li><img src="https://tse2.mm.bing.net/th?id=OIP.vv9S5iyxSfALKGl7NBddxQHaHa&pid=Api&P=0&w=300&h=300"  width="150" height="150">Pens</li><br>


		<li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/2017_Zszywacz_biurowy.jpg/1200px-2017_Zszywacz_biurowy.jpg"  width="150" height="150">Staplers</li><br>

		<li><img src="https://tse4.mm.bing.net/th?id=OIP.9PWV01daw6dNoaEwmNv8ewHaE7&pid=Api&P=0&w=235&h=157"  width="150" height="150">Rubber bands</li><br>


		<li><img src="https://5.imimg.com/data5/JY/DM/MY-28079276/a4-size-paper-250x250.jpeg"  width="150" height="150">A4 pages</li><br>


		<li><img src="https://www.prizmagraphics.co.uk/image/80233277_printed-drawing-sheets.jpg"  width="150" height="150">Engineering Drawing sheets</li><br>

		<li><img src="https://img-aws.ehowcdn.com/default/ds-photo/getty/article/178/64/88018947.jpg"  width="150" height="150">Baloons</li><br>

		<li><img src="https://tse2.mm.bing.net/th?id=OIP.OPFWNnD0MJl_G_O3RazK8AHaHa&pid=Api&P=0&w=300&h=300"  width="150" height="150">cloth bags</li><br>

		<li><img src="http://i.ebayimg.com/images/i/191903409245-0-1/s-l1000.jpg"  width="150" height="150">Laptop bags</li><br>

		<li><img src="http://images4.fanpop.com/image/photos/22100000/Colored-pencils-pencils-22186520-2560-1702.jpg"  width="150" height="150">Color pencils</li><br>

		<li><img src="https://tse3.mm.bing.net/th?id=OIP.CvM7jw4XukyFC5x-xTeJVgHaJs&pid=Api&P=0&w=300&h=300"  width="150" height="150">Crayons</li><br>
	</ol>-->