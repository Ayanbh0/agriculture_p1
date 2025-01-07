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

// for login-icon displayed
let loginForm = document.querySelector('.login-form');
document.querySelector('#login-btn').onclick = () => {
    loginForm.classList.toggle('active');
}



// image upload part
const profilePic = document.getElementById('profile-pic');
const inputFile = document.getElementById('imageUpload');

inputFile.onchange = function(){
    profilePic.src = URL.createObjectURL(inputFile.files[0]);
}

