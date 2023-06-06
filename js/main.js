let cartItems = [];
const cartElement = document.getElementById('cart');
const cartToggleElement = document.querySelector('.cart-toggle');
const navCartCountElement = document.getElementById('nav-cart-count');

function addToCart(productName, price) {
  const sizeSelectElement = document.getElementById('size');
  const selectedSize = sizeSelectElement.value; // Get the selected size

  const cartItem = {
    name: productName,
    price: price,
    size: selectedSize // Save the selected size in the cart item
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
    itemElement.innerHTML = `<span>${item.name} - Size: ${item.size} - $${item.price}</span><button onclick="removeFromCart('${item.name}')">Remove</button>`;
    cartItemsElement.appendChild(itemElement);

    totalPrice += item.price;
  });

  const cartTotalElement = document.getElementById('cart-total');
  cartTotalElement.textContent = `Total: $${totalPrice.toFixed(2)}`;

  navCartCountElement.textContent = cartItems.length;
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
    orderSummary += `${item.name} - Size: ${item.size} - $${item.price.toFixed(2)}<br>`;
    totalPrice += item.price;
  });

  localStorage.setItem('orderSummary', orderSummary);
  localStorage.setItem('orderTotal', totalPrice.toFixed(2));
}