const createnav=()=>
{
let nav =document.querySelector('.navbar');
nav.innerHTML= `
 <div class="nav">
<img src="logo/MEALEM__2_-removebg-preview.png"class="logo" alt="logo">
<div class="nav-items">
    <div class="search">
        <input type="text"class="search-box" placeholder="rechercher">
        <button class="search-btn">rechercher</button>
        <a href=""><i class="fas fa-user"></i></a>
        <a href=""><i class="fas fa-cart-arrow-down"></i></i></a>
    </div>
</div>
</div>
<ul class="list-links">
<li class="link-item"><a href="#"class="link">accueil</a></li>
<li class="link-item"><a href="#"class="link">Déco</a></li>
<li class="link-item"><a href="#"class="link">Femme</a></li>
<li class="link-item"><a href="#"class="link">Homme</a></li>
<li class="link-item"><a href="#"class="link">Soin</a></li>
</ul>`;
}
createnav();