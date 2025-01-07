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





// for review put 
const allStar = document.querySelectorAll(".ratting .str");
const rattingVal = document.querySelector(".ratting input");

allStar.forEach((item,idx) => {
    item.addEventListener('click', function(){

        let click = 0;

        rattingVal.value = idx + 1;
        console.log(rattingVal.value);

        allStar.forEach(i => {
            i.classList.replace('fa-star' , 'fa-star-o');
            i.classList.remove('active');
        })
        for(let i = 0; i < allStar.length; i++){
            if(i <= idx){
                allStar[i].classList.replace('fa-star-o' , 'fa-star');
                allStar[i].classList.add('active');
            }

            else{
                allStar[i].computedStyleMap.setProperty('--i' , click);
                click++
            }
        }
    })
})