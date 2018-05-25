var nav = {
  home: document.getElementById('navHome'),
  menu: document.getElementById('navCategory'),
  contact: document.getElementById('navContact'),
}

var menu = {
  modal: document.querySelector('.menu-openMenu'),
  close: document.querySelector('.menu-openMenu-closeLink'),
}

var ui = {
  header: document.querySelector('.header'),
  footer: document.querySelector('.footer'),
}

nav.menu.addEventListener('click', function() {
  openMenu();
});

menu.close.addEventListener('click', function() {
  closeMenu();
});

function openMenu() {
  menu.modal.classList.add('translate');
}

function closeMenu() {
  menu.modal.classList.remove('translate');
}
