// var removeCartItemButtons = document.getElementsByClassName('btn btn-danger')
// console.log(removeCartItemButtons)
// for (var i = 0; i < removeCartItemButtons.length; i++) {
//     var button = removeCartItemButtons[i]
//     button.addEventListener('click', function(event) {
//         var buttonCilcked = Event.target
//         buttonCilcked.parentElement.parentElement.remove()
//         updateCartTotal()
//     })
// }

// function updateCartTotal() {
// var mainCartContainer = document.getElementsByClassName('main-cart')[0]
// var cartRows = mainCartContainer.getElementsByClassName('card-row')
// for (var i = 0; i < cartRows.length; i++){  
//     var cartRow = cartRows[i]
//     var priceElement = cartRow.getElementsByClassName('itemval')[0]
//     var quantityElement = cartRow.getElementsByClassName('class="cart-quantity-input')[0]
//     console.log(priceElement, quantityElement)
//     }
// }
// const decreaseNumber = () => {
//     var itemval = document.getElementById('textbox');
    
//     if(itemval.value < 0){
//     itemval.value = 0;
//     alert('Negative quantity not allowed');
//     }else{
//         itemval.vale = parseInt(itemval.value) - 1;
//         itemval.style.background = '#fff';
//         itemval.style.color = '#000';
//     }
//  }
//  const increaseNumber = () => {
//     var itemval = document.getElementById('textbox');
    
//     if(itemval.value > 5){
//     itemval.value = 5;
//     itemval.style.background = 'red';
//     itemval.style.color = '#ffff';
//     }else{
//         itemval.vale = parseInt(itemval.value) + 1;
//     }
//  }

var select = document.querySelector('select');
var button = document.getElementsByTagName('button');
for(but of button)
{
    but.addEventListener('click', (e)=>{
        var add = Number(noti.getAttribute('data-count') = 0);
        noti.setAttribute('data-count', add + 1);
        noti.classList.add('zero');
    })
}