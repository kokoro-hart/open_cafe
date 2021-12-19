
const drawerButton = document.getElementById('js-drawer-button'); //ドロワーボタン
const drawerBg = document.getElementById('js-drawer-bg'); //ドロワー背景
const drawerMenu = document.getElementById('js-drawer-menu'); //ドロワーメニュー

//ドロワーを閉じる関数
function closeDrawerMenu() {
  drawerButton.setAttribute('aria-expanded', 'false');
  drawerButton.classList.remove('is-active');
  drawerBg.classList.remove('is-active');
  drawerMenu.setAttribute('area-hidden', 'true');
  drawerMenu.classList.remove('is-active');
}
//開閉イベント
drawerButton.addEventListener('click', function () {
  document.body.classList.toggle('is-drawerActive');
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
//背景クリック時にもドロワーを閉じる
drawerBg.addEventListener('click', function () {
  document.body.classList.toggle('is-drawerActive');
  closeDrawerMenu();
});

const mvMenu = document.getElementById('js-mv-menu'); //メインビジュアルメニュー
//mvMenuがビューポート内にあるときはドロワーボタンは非表示
const drawerObserver = new IntersectionObserver((entries) => {
  for (const e of entries) {
    if (e.isIntersecting) {
      drawerButton.style.opacity = 0;
      drawerButton.style.visibility = 'hidden';
    } else {
      drawerButton.style.opacity = 1;
      drawerButton.style.visibility = 'visible';
    }
  }
});
if (mvMenu !== null) {
  drawerObserver.observe(mvMenu);// 監視対象
}