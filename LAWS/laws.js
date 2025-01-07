// for search-icon displayed
let searchForm = document.querySelector('.search-form');
document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
}

// for cart-icon displayed
let shoppingCart = document.querySelector('.shopping-cart');
document.querySelector('#cart-btn').onclick = () => {
    shoppingCart.classList.toggle('active');
}



