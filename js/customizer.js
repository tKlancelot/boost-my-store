// custom bouton add to cart

let btnAddToCart = document.querySelector('.elementor-widget-woocommerce-menu-cart.elementor-button--checkout');


window.addEventListener("DOMContentLoaded", (event) => {
	btnAddToCart.classList.add("btn-bms");
});