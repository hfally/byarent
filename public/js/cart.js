/*
|----------------------------------------------
| Cart Model
|----------------------------------------------
| Retrieve and store items inside the cart bag
*/

/**
 * Initialize Cart Class
 *
 * @type {{all, find, put, remove}}
 */
const Cart = {};

/**
 * Update counter for items in the cart
 */
Cart.updateCount = function () {
    let count = cart.length > 0 ? cart.length : '';

    $('.cart-count').text(count);
};

Cart.updateBackend = function () {
    $.post(route.updateCart, {cart: cart}, function (response) {
        console.log(response);
    });
};

/**
 * Get all items in the cart
 *
 * @returns {Array}
 */
Cart.all = function () {
    return cart;
};

/**
 * Get specified index
 *
 * @param index
 * @returns {*}
 */
Cart.find = function (index) {
    return cart[index];
};

/**
 * Save item inside cart
 *
 * @param item
 * @returns {boolean}
 */
Cart.put = function (item) {
    if (!item || cart.indexOf(item) !== -1) {
        return false;
    }

    // Push to cart array
    cart.push(item);

    // Update cart count
    Cart.updateCount();

    // Update cart in backend
    Cart.updateBackend();

    return cart;
};

/**
 * Remove item from cart
 *
 * @param item
 * @returns {boolean}
 */
Cart.remove = function (item) {
    let index = cart.indexOf(item);

    if (index === -1) {
        return false;
    }

    // Remove from cart array
    cart.splice(index, 1);

    // Update cart count
    Cart.updateCount();

    // Update cart in backend
    Cart.updateBackend();

    return cart;
};

/**
 * Check the exitence of an item in the cart
 *
 * @param item
 * @returns {boolean}
 */
Cart.exists = function (item) {
    return cart.indexOf(item) !== -1;
};