<<<<<<< Updated upstream
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
=======
let cartItems = [];
let cartCount = 0;
const cartElement = document.getElementById('cart');
const cartToggleElement = document.querySelector('.cart-toggle');
const navCartCountElement = document.getElementById('nav-cart-count');

// Load cart from localStorage when the page loads
window.addEventListener('load', function() {
  const savedCartItems = localStorage.getItem('cartItems');
  if (savedCartItems) {
    cartItems = JSON.parse(savedCartItems);
    updateCart();
  }

  const savedCartCount = localStorage.getItem('cartCount');
  if (savedCartCount) {
    cartCount = parseInt(savedCartCount);
    updateCartCount();
  }
});


function addToCart(productName, price) {
  const cartItem = {
    name: productName,
    price: price
  };

  cartItems.push(cartItem);
  updateCart();
  toggleCart();
  cartCount++;
  updateCartCount();

  // Save cart to localStorage
  localStorage.setItem('cartItems', JSON.stringify(cartItems));
  localStorage.setItem('cartCount', cartCount.toString());
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

  // Save cart to localStorage
  localStorage.setItem('cartItems', JSON.stringify(cartItems));
}

function removeFromCart(productName) {
  cartItems = cartItems.filter(function(item) {
    return item.name !== productName;
  });

  updateCart();
  cartCount--;
  updateCartCount();

  // Save cart to localStorage
  localStorage.setItem('cartItems', JSON.stringify(cartItems));
  localStorage.setItem('cartCount', cartCount.toString());
}

function toggleCart() {
  cartElement.classList.toggle('open');
}

function updateCartCount() {
  navCartCountElement.textContent = cartCount.toString();
}

function resetCart() {
  cartItems = [];
  cartCount = 0;
  updateCart();
  updateCartCount();
  localStorage.removeItem('cartItems');
  localStorage.removeItem('cartCount');
}
>>>>>>> Stashed changes
