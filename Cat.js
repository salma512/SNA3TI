//Cart
let cartIcon =document.querySelector('#cart-icon');
let cart =document.querySelector('.cart');
let closeCart =document.querySelector('#close-cart');

cartIcon.onclick=()=>{
    cart.classList.add("active");
};
//close cart
closeCart.onclick=()=>{
    cart.classList.remove("active");
};

//cart working JS
if(document.readyState=="loading")
{
document.addEventListener("DOMContentLoaded", ready);
}else{
ready();
}

//Making function
function ready(){
    //reamve items from cart
    var reomveCartButtons = document.getElementsByClassName('cart-remove')
    console.log(reomveCartButtons)
    for(var i=0; i< reomveCartButtons.length; i++)
    {
        var button=reomveCartButtons[i]
        button.addEventListener('click',removeCartItem)
    }
    //Quantity changes
    var quantityInputs=document.getElementsByClassName("cart-quantity");
    for(var i=0; i< quantityInputs.length; i++)
    {
var input =quantityInputs[i];
input.addEventListener("change",quantityChanged);
    }
    //Add to cart
    var addCart=document.getElementsByClassName("add-cart");
    for(var i=0; i< addCart.length; i++)
    {
var button = addCart[i];
button.addEventListener("click",addCartClicked);
    }
    //Buy Button Work
    document
    .getElementsByClassName("btn-buy")[0]
    .addEventListener("click",buyButtonClicked);
}
//Buy Button
function buyButtonClicked()
{
alert('Votre commande est passée ,nous vous expédierons vos produits en 3 jours')
var cartContent = document.getElementsByClassName('cart-content')[0]
while(cartContent.hasChildNodes()){
    cartContent.removeChild(cartContent.firstChild);
}
}
//reamve items from cart
function removeCartItem(event){
    var buttonclicked=event.target
    buttonclicked.parentElement.remove();
    Updatetotal();
}
//quantity changes 
function quantityChanged(event)
{
 var input=event.target;
 if(isNaN(input.value)|| input.value <= 0)
 {
input.value=1;
 }
 Updatetotal();
}
//Add to cart
function addCartClicked(event)
{
var button = event.target;
var shopProducts=button.parentElement;
var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
var price = shopProducts.getElementsByClassName("price")[0].innerText;
var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
addProductToCart(title,price,productImg);
Updatetotal();
}
function addProductToCart(title,price,productImg)
{
var cartShopBox = document.createElement("div");
cartShopBox.classList.add("cart-box");
var cartIrems = document.getElementsByClassName('cart-content')[0];
var cartIremsNames=cartIrems.getElementsByClassName("cart-product-title");
for(var i=0; i<cartIremsNames.length; i++)
{
   if(cartIremsNames[i].innerText==title)
    {
        alert("Vous avez déjà ajouté cet article au panier");
        return;
    }

}


var cartBoxContent=`
<img src="${productImg}" alt="#" class="cart-img">
<div class="detail-box">
<div class="cart-product-title">${title}</div>
<div class="cart-price">${price}</div>
<input type="number" value="1" class="cart-quantity">
</div>
<!--remove-->
<i class='bx bxs-trash-alt cart-remove'></i>
`
cartShopBox.innerHTML= cartBoxContent;
cartIrems.append(cartShopBox);
cartShopBox
.getElementsByClassName("cart-remove")[0]
.addEventListener("click",removeCartItem);
cartShopBox
.getElementsByClassName("cart-quantity")[0]
.addEventListener("change",quantityChanged);
}
//Update Total
function Updatetotal(){
    var cartContent=document.getElementsByClassName('cart-content')[0];
    var cartBoxes = cartContent.getElementsByClassName('cart-box');
    var total =0;
    for(var i=0; i<cartBoxes.length; i++)
    {
var cartbox=cartBoxes[i]
var priceElement = cartbox.getElementsByClassName("cart-price")[0];
var quantityElement=cartbox.getElementsByClassName("cart-quantity")[0];
var price=parseFloat(priceElement.innerText.replace("DH",""))
var quantity=quantityElement.value;
total=total+price*quantity;
}
//if price contain some cents value
total=Math.round(total*100)/100;

document.getElementsByClassName('total-price')[0].innerText = 'DH' +total;
    
}