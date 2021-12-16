<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/common/apple-touch-icon.png">
  <link rel="icon" href="<? echo get_template_directory_uri(); ?>/img/common/favicon.ico" id="favicon">
  <title>Open Cafe - dish &amp; coffee -</title>
  <meta name="description" content="トップページの説明">
  <meta property="og:title" content="Open Cafe - dish &amp; coffee -">
  <meta property="og:description" content="トップページの説明">
  <meta property="og:url" content="サイトのドメイン/">
  <meta property="og:type" content="website ">
  <meta property="og:local" content="ja_JP">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/common/img-mv01_pc.jpeg">
  <meta property="og:site_name" content="サイトのドメイン ">

  <?php wp_head(); ?>
</head>
<body>
  <div id="wrapper">
    <header class="l-header p-header">
      <div class="p-header__inner">
        <p class="p-header__logo u-hidden-xl-up">
          <a href="/" class="p-header__logo-link">
            <svg class="c-svg p-header__logo-icon" width="120" height="64">
              Open Cafe - dish & coffee -
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#logo02" />
            </svg>
          </a>
        </p>
      </div>
      <button id="js-drawer-button" class="p-header__button c-button-drawer" aria-controls="js-glabal-nav" aria-expanded="false" area-label="メニューを開閉する">
        <span class="c-button-drawer__line"></span>
      </button>
      <div id="js-drawer-bg" class="p-header__drawer-bg"></div>
      <div class="p-header-menu" id="js-global-nav" area-hidden="true" area-label="ページ内のメニュー">
        <p class="p-header__logo">
          <a href="/" class="p-header__logo-link">
            <svg class="c-svg p-header__logo-icon" width="120" height="64">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#logo02" />
            </svg>
          </a>
        </p>
        <nav class="p-header-menu__nav p-global-nav">
          <ul class="p-global-nav__list">
            <li class="p-global-nav__item">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="p-global-nav__link">
                <span class="p-global-nav__text-en">TOP</span>
                <span class="p-global-nav__text-ja">トップ</span>
              </a>
            </li>
            <li class="p-global-nav__item">
              <a href="<?php echo esc_url(home_url('/concept')); ?>" class="p-global-nav__link">
                <span class="p-global-nav__text-en">CONCEPT</span>
                <span class="p-global-nav__text-ja">コンセプト</span>
              </a>
            </li>
            <li class="p-global-nav__item">
              <a href="<?php echo esc_url(home_url('/menu')); ?>" class="p-global-nav__link">
                <span class="p-global-nav__text-en">MENU</span>
                <span class="p-global-nav__text-ja">メニュー</span>
              </a>
            </li>
            <li class="p-global-nav__item">
              <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-global-nav__link">
                <span class="p-global-nav__text-en">NEWS</span>
                <span class="p-global-nav__text-ja">ニュース</span>
              </a>
            </li>
            <li class="p-global-nav__item">
              <a href="<?php echo esc_url(home_url('/shop')); ?>" class="p-global-nav__link">
                <span class="p-global-nav__text-en">SHOP</span>
                <span class="p-global-nav__text-ja">店舗情報</span>
              </a>
            </li>
            <li class="p-global-nav__item">
              <a href="<?php echo esc_url(home_url('/products')); ?>" class="p-global-nav__link">
                <span class="p-global-nav__text-en">GIFT</span>
                <span class="p-global-nav__text-ja">ギフト・贈り物</span>
              </a>
            </li>
            <li class="p-global-nav__item">
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-global-nav__link">
                <span class="p-global-nav__text-en">CONTACT</span>
                <span class="p-global-nav__text-ja">お問い合わせ</span>
              </a>
            </li>
          </ul>
        </nav>
        <div class="p-header-menu__sns p-sns">
          <ul class="p-sns__list">
            <li class="p-sns__item p-sns__item--big">
              <a href="" class="p-sns__link" target="_blank" rel="noopener noreferrer">
                <svg class="c-svg p-sns__icon" width="24" height="24">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-twitter02" />
                </svg>
              </a>
            </li>
            <li class="p-sns__item p-sns__item--big">
              <a href="" class="p-sns__link" target="_blank" rel="noopener noreferrer">
                <svg class="c-svg p-sns__icon" width="24" height="24">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-instagram02" />
                </svg>
              </a>
            </li>
            <li class="p-sns__item p-sns__item--big">
              <a href="" class="p-sns__link" target="_blank" rel="noopener noreferrer">
                <svg class="c-svg p-sns__icon" width="24" height="24">
                  <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-youtube02" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>