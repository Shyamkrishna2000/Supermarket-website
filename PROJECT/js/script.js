if (document.readyState == "loading"){
	document.addEventListener("DOMContentLoaded",ready)
} else{
	ready()
}
function ready(){
	var removeCartButtons = document.getElementsByClassName('remove-btn')
	for (var i = 0; i < removeCartButtons.length; i++) {
		var button = removeCartButtons[i]
		button.addEventListener('click',removeCartItem)
		}
	var addToCartButton = document.getElementsByClassName('AddCart')
	for (var i =0; addToCartButton.length; i++) {
		var button = addToCartButton[i]
		button.addEventListener('click',addToCartClicked)
	}
	var quantityInputs = document.getElementsByClassName('cart-item-quantity')
	for (var i = 0; i < quantityInputs.length; i++) {
		var input = quantityInputs[i]
		input.addEventListener('change',quantityChanged)
	}
	
	//document.getElementById('btn').addEventListener('click',purchaseClicked)//
}
function purchaseClicked(){
	alert("Thank You for your purchase")
	var cartItems= document.getElementsByClassName('Cart-items')[0]
	while(cartItems.hasChildNodes()){
		cartItems.removeChild(cartItems.firstChild)
	}
	updateCartTotal()

}
function removeCartItem(event) {
	var buttonClicked = event.target
	buttonClicked.parentElement.parentElement.remove()
	updateCartTotal()
}
function addToCartClicked(event){
	var button = event.target
	var shopItem = button.parentElement
	var title = shopItem.getElementsByClassName('figcaption')[0].innerText
	var price = shopItem.getElementsByClassName('item-price')[0].innerText
	var imageSrc = shopItem.getElementsByClassName('item-image')[0].src
	addItemToCart(title,price,imageSrc)
	updateCartTotal()
}
function addItemToCart(title,price,imageSrc){
	var cartRow = document.createElement('div')
	cartRow.classList.add('cart-row')
	var cartItems = document.getElementsByClassName('Cart-items')[0]
	var cartItemsNames= cartItems.getElementsByClassName('cart-item-title')
	for (var i = 0; i < cartItemsNames.length; i++) {
		if (cartItemsNames[i].innerText == title){
				alert("This item is already in your cart")
				return
		}
	}
	var cartRowContents = `<div class="cart-item cart-column">
								<img class="cart-item-image" src=" ${imageSrc}" style ="width:100px; height:100px;">
									<span class="cart-item-title"> ${title}</span>
							</div>			
							<span class ="cart-item-price cart-column"> ${price}</span>
							
							<div class="cart-quantity cart-column">	
									<input class = "cart-item-quantity" type="number" value="1">
									<button class="remove-btn" type = "button ">REMOVE</button>
							</div></div><br>
							`
	cartRow.innerHTML = cartRowContents
	cartItems.append(cartRow)
	cartRow.getElementsByClassName('remove-btn')[0].addEventListener('click',removeCartItem)
	cartRow.getElementsByClassName('cart-item-quantity')[0].addEventListener('change',quantityChanged)

}

function myFunction() {
  document.getElementById("Cart").classList.toggle("show");

}
function AccountDetails() {
	document.getElementById("Account").classList.toggle("show");
}

function updateCartTotal(){
	var cartItemContainer = document.getElementsByClassName('Cart-items')[0]
	var cartRows = cartItemContainer.getElementsByClassName('cart-row')
	var total=0
	for (var i = 0; i < cartRows.length; i++) {
		var cartRow = cartRows[i]
		var priceElement = cartRow.getElementsByClassName('cart-item-price')[0]
		var quantityElement = cartRow.getElementsByClassName('cart-item-quantity')[0]
		var price = parseFloat(priceElement.innerText.replace('Rs',''))
		var quantity = quantityElement.value
		total = total + (price*quantity)
	}
	total= Math.round(total*100)/100 
	document.getElementsByClassName('cart-total-price')[0].innerText = 'Rs '+total
}
function quantityChanged(event){
	var input=event.target
	if (isNaN(input.value)||input.value<=0){
		input.value=1
	}
	updateCartTotal()
}
function quantityChanged(event){
	var input= event.target
	if(isNaN(input.value)||input.value<=0){
		input.value= 1
	}
	updateCartTotal()
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content")[0];
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}