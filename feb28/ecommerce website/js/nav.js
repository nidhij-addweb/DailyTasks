const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `

<div class="nav">
<h1 class="brand-logo">ecom web</h1>
<div class="nav-items">
    <div class="search">
        <input type="text" name="" class="search-box"id="" placeholder="search brand,product">
        <button class="search-btn">search</button>
    </div>
    <a href="#"><img src="images/u.jpg" alt=""></a>
    <a href="#"><img src="images/shopping-cart.png" alt=""></a>
</div>

</div>
<ul class="links-container">
<li class="link-item"><a href="#" class="link">home</a></li>
<li class="link-item"><a href="#" class="link">women</a></li>
<li class="link-item"><a href="#" class="link">men</a></li>
<li class="link-item"><a href="#" class="link">kids</a></li>
<li class="link-item"><a href="#" class="link">accessories</a></li>
</ul>
`;
}

createNav();