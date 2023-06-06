let cartItems = [];
const cartElement = document.getElementById('cart');
const cartToggleElement = document.querySelector('.cart-toggle');

function addToCart(productName, price) {
  const cartItem = {
    name: productName,
    price: price
  };

  cartItems.push(cartItem);
  updateCart();
  toggleCart();
}

function updateCart() {
  const cartItemsElement = document.getElementById('cart-items');
  cartItemsElement.innerHTML = '';
  
  let totalPrice = 0;

  cartItems.forEach(function(item) {
    const itemElement = document.createElement('div');
    itemElement.className = 'cart-item';
    itemElement.innerHTML = `<span>${item.name} - $${item.price}</span><button onclick="removeFromCart('${item.name}')">Remove</button>`;
    cartItemsElement.appendChild(itemElement);

    totalPrice += item.price;
  });

  const cartTotalElement = document.getElementById('cart-total');
  cartTotalElement.textContent = `Total: $${totalPrice.toFixed(2)}`;
}

function removeFromCart(productName) {
  cartItems = cartItems.filter(function(item) {
    return item.name !== productName;
  });

  updateCart();
}

function toggleCart() {
  cartElement.classList.toggle('open');
}

function storeOrderSummary() {
let orderSummary = '';
let totalPrice = 0;

cartItems.forEach(function(item) {
  orderSummary += `${item.name} - $${item.price.toFixed(2)}<br>`;
  totalPrice += item.price;
});

localStorage.setItem('orderSummary', orderSummary);
localStorage.setItem('orderTotal', totalPrice.toFixed(2));

}