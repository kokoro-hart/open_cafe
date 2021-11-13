
const drawerButton = document.getElementById('js-drawer-button');
const drawerBg = document.getElementById('js-drawer-bg');
const body = document.body;
const drawerMenu = document.getElementById('js-global-nav');

function closeDrawerMenu() {
  drawerButton.setAttribute('aria-expanded', 'false');
  drawerButton.classList.remove('is-active');
  drawerBg.classList.remove('is-active');
  drawerMenu.setAttribute('area-hidden', 'true');
  drawerMenu.classList.remove('is-active');
}

drawerButton.addEventListener('click', function () {
  body.classList.toggle('is-drawerActive');
  if (drawerButton.getAttribute('aria-expanded') == 'false') {
    this.setAttribute('aria-expanded', 'true');
    this.classList.add('is-active');
    drawerBg.classList.add('is-active');
    drawerMenu.setAttribute('area-hidden', 'false');
    drawerMenu.classList.add('is-active');
  } else {
    closeDrawerMenu();
  };
});

drawerBg.addEventListener('click', function () {
  body.classList.toggle('is-drawerActive');
  closeDrawerMenu();
});
