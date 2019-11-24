// Mobile Menu Clicking Behavior
let burger = document.getElementsByClassName('navbar-burger')[0];
let menu = document.getElementsByClassName('navbar-menu')[0];
burger.addEventListener('click', function(e){
    burger.classList.toggle('is-active');
    menu.classList.toggle('is-active');
});