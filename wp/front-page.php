<?php get_header(); ?>

<main class="p-home l-home">
  <div class="p-mv">
    <div class="p-mv-menu u-hidden-xl-down">
      <h1 class="p-mv-menu__logo">
        <a href="/" class="p-mv-menu__logo-link">
          <svg class="c-svg p-mv-menu__logo-icon" width="163" height="85">
            Open Cafe - dish & coffee -
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#logo" />
          </svg>
        </a>
      </h1>
      <nav class="p-mv-menu__nav p-mv-nav">
        <ul class="p-mv-nav__list">
          <li class="p-mv-nav__item">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-mv-nav__link">
              <span class="p-mv-nav__text-en">TOP</span>
              <span class="p-mv-nav__text-ja">トップ</span>
            </a>
          </li>
          <li class="p-mv-nav__item">
            <a href="<?php echo esc_url(home_url('/concept')); ?>" class="p-mv-nav__link">
              <span class="p-mv-nav__text-en">CONCEPT</span>
              <span class="p-mv-nav__text-ja">コンセプト</span>
            </a>
          </li>
          <li class="p-mv-nav__item">
            <a href="<?php echo esc_url(home_url('/menu')); ?>" class="p-mv-nav__link">
              <span class="p-mv-nav__text-en">MENU</span>
              <span class="p-mv-nav__text-ja">メニュー</span>
            </a>
          </li>
          <li class="p-mv-nav__item">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="p-mv-nav__link">
              <span class="p-mv-nav__text-en">NEWS</span>
              <span class="p-mv-nav__text-ja">ニュース</span>
            </a>
          </li>
          <li class="p-mv-nav__item">
            <a href="<?php echo esc_url(home_url('/shop')); ?>" class="p-mv-nav__link">
              <span class="p-mv-nav__text-en">SHOP</span>
              <span class="p-mv-nav__text-ja">店舗情報</span>
            </a>
          </li>
          <li class="p-mv-nav__item">
            <a href="<?php echo esc_url(home_url('/products')); ?>" class="p-mv-nav__link">
              <span class="p-mv-nav__text-en">GIFT</span>
              <span class="p-mv-nav__text-ja">ギフト・贈り物</span>
            </a>
          </li>
          <li class="p-mv-nav__item">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-mv-nav__link">
              <span class="p-mv-nav__text-en">CONTACT</span>
              <span class="p-mv-nav__text-ja">お問い合わせ</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="p-mv-menu__sns p-sns">
        <ul class="p-sns__list">
          <li class="p-sns__item">
            <a href="" class="p-sns__link" target="_blank" rel="noopener noreferrer">
              <svg class="c-svg p-sns__icon" width="24" height="24">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-twitter" />
              </svg>
            </a>
          </li>
          <li class="p-sns__item">
            <a href="" class="p-sns__link" target="_blank" rel="noopener noreferrer">
              <svg class="c-svg p-sns__icon" width="24" height="24">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-instagram" />
              </svg>
            </a>
          </li>
          <li class="p-sns__item">
            <a href="" class="p-sns__link" target="_blank" rel="noopener noreferrer">
              <svg class="c-svg p-sns__icon" width="24" height="24">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg/sprite.min.svg#icon-youtube" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div id="js-slider" class="p-mv-slider">
      <div class="swiper swiper-mv">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture class="p-mv-slider__picture">
              <source class="p-mv-slider__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv01_sp.webp" media="(max-width: 767px)" type="image/webp" />
              <source class="p-mv-slider__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv01_pc.webp" media="(min-width: 768px)" type="image/webp" />
              <source class="p-mv-slider__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/img-mv01_sp.jpeg" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-mv01_pc.jpeg" class="p-mv-slider__img" media="(min-width: 768px)" decoding="async" alt="メインビジュアル">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture class="p-mv-slider__picture">
              <source class="p-mv-slider__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv02_sp.webp" media="(max-width: 767px)" type="image/webp" />
              <source class="p-mv-slider__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv02_pc.webp" media="(min-width: 768px)" type="image/webp" />
              <source class="p-mv-slider__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/img-mv02_sp.jpeg" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-mv02_pc.jpeg" class="p-mv-slider__img" media="(min-width: 768px)" decoding="async" alt="メインビジュアル">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture class="p-mv-slider__picture">
              <source class="p-mv-slider__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv03_sp.webp" media="(max-width: 767px)" type="image/webp" />
              <source class="p-mv-slider__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv03_pc.webp" media="(min-width: 768px)" type="image/webp" />
              <source class="p-mv-slider__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/img-mv03_sp.jpeg" media="(max-width: 767px)" />
              <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-mv03_pc.jpeg" class="p-mv-slider__img" media="(min-width: 768px)" decoding="async" alt="メインビジュアル">
            </picture>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <p class="p-mv-slider__catch">
        パスタとコーヒーが<br class="u-hidden-md-up">とってもおいしい、<br>ほっと落ち着くのんびり空間。
      </p>
    </div>

    <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC',
      );
      $new_posts = get_posts($args);
      foreach($new_posts as $post) : setup_postdata($post);
      $category = get_the_category();
    ?>
    <div class="p-pickup-news">
      <a href="<?php the_permalink(); ?>" class="p-card-sidebar">
        <div class="p-card-sidebar__img-wrapper">
          <?php
            if(has_post_thumbnail()) {
              the_post_thumbnail('small', array(
                'class' => 'p-card-sidebar__img'
              ));
            } else {
              echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/common/img-mv01_pc.jpeg" alt="記事の画像" class="p-card-sidebar__img">';
            }
          ?>
        </div>
        <?php if($category[0]) : ?>
        <p class="p-card-sidebar__cat"><?php echo $category[0]->cat_name; ?></p>
        <?php endif; ?>
        <div class="p-card-sidebar__body">
          <time datetime="<?php the_time('c') ?>" class="p-card-sidebar__date p-pickup-news__date"><?php the_time('Y.n.j'); ?></time>
          <h3 class="p-card-sidebar__title">
            <?php the_title(); ?>
          </h3>
        </div>
      </a>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>

  <section class="p-home-concept l-home__concept">
    <div class="p-home-concept__inner">
      <picture class="p-home-concept__picture">
        <source class="p-home-concept__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-concept.webp" type="image/webp" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-concept.jpeg" class="p-home-concept__img" width="600" height="764" decoding="async" alt="コンセプトイメージ">
      </picture>
      <div class="p-home-concept__contents">
        <h2 class="c-section-title c-section-title--align-left">
          <span class="c-section-title__en">CONCEPT</span>
          <span class="c-section-title__ja">当店のこだわり</span>
        </h2>
        <div class="p-home-concept__body">
          <h3 class="p-home-concept__title">
            最高のコーヒーと、<br>時の流れを味わうことができる<br>手作りカフェ
          </h3>
          <p class="p-home-concept__text">
            ダミー_国内外から賞賛を
            <br>
            受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
            <br>
            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
            <br>
            <br>
            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          </p>
          <div class="p-home-concept__link-wrapper">
            <a href="<?php echo esc_url(home_url('/concept')); ?>" class="c-button-primary">詳しくはこちら</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-lunch l-home__lunch">
    <div class="p-lunch__inner">
      <h2 class="c-section-title">
        <span class="c-section-title__en">SPECIAL LUNCH SET</span>
        <span class="c-section-title__ja">今月のスペシャルランチセット</span>
      </h2>
      <div class="p-lunch__contents p-lunch-main">
        <picture class="p-lunch-main__heading">
          <source class="p-lunch-main__ribbon" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-ribbon_sp.webp" media="(max-width: 767px)" type="image/webp" />
          <source class="p-lunch-main__ribbon" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-ribbon_pc.webp" media="(min-width: 768px)" type="image/webp" />
          <source class="p-lunch-main__ribbon" srcset="<?php echo get_template_directory_uri(); ?>/img/common/img-ribbon_sp.png" media="(max-width: 767px)" />
          <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-ribbon_pc.png" class="p-lunch-main__ribbon lazyload" width="300" height="160" media="(min-width: 768px)" alt="お好きなパスタをお選びください">
        </picture>
        <p class="p-lunch-main__balloon">
          <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-balloon.png" alt="パスタ、サラダ、ドリンクのお得なセット" class="p-lunch-main__ballon-img lazyload">
        </p>
        <ul class="p-lunch-main__list">
          <li class="p-lunch-main__item p-card-lunch">
            <div class="p-card-lunch__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-pasta01.jpeg" alt="パスタの画像" width="260" height="260" class="p-card-lunch__img lazyload">
            </div>
            <div class="p-card-lunch__body">
              <p class="p-card-lunch__label">A</p>
              <h3 class="p-card-lunch__title">テキストテキストの○○風パスタテキストテキストの○○風パスタ</h3>
            </div>
          </li>
          <li class="p-lunch-main__item p-card-lunch">
            <div class="p-card-lunch__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-pasta02.jpeg" alt="パスタの画像" width="260" height="260" class="p-card-lunch__img lazyload">
            </div>
            <div class="p-card-lunch__body">
              <p class="p-card-lunch__label">B</p>
              <h3 class="p-card-lunch__title">テキストテキストの○○風パスタテキストテキストの○○風パスタ</h3>
            </div>
          </li>
          <li class="p-lunch-main__item p-card-lunch">
            <div class="p-card-lunch__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-pasta03.jpeg" alt="パスタの画像" width="260" height="260" class="p-card-lunch__img lazyload">
            </div>
            <div class="p-card-lunch__body">
              <p class="p-card-lunch__label">C</p>
              <h3 class="p-card-lunch__title">テキストテキストの○○風パスタテキストテキストの○○風パスタ</h3>
            </div>
          </li>
          <li class="p-lunch-main__item p-card-lunch">
            <div class="p-card-lunch__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-pasta04.jpeg" alt="パスタの画像" width="260" height="260" class="p-card-lunch__img lazyload">
            </div>
            <div class="p-card-lunch__body">
              <p class="p-card-lunch__label">D</p>
              <h3 class="p-card-lunch__title">テキストテキストの○○風パスタテキストテキストの○○風パスタ</h3>
            </div>
          </li>
        </ul>
        <div class="p-lunch-main__bottom p-lunch-info">
          <picture class="p-lunch-info__picture">
            <source class="p-lunch-info__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-lunch-set_sp.webp" media="(max-width: 767px)" type="image/webp" />
            <source class="p-lunch-info__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-lunch-set_pc.webp" media="(min-width: 768px)" type="image/webp" />
            <source class="p-lunch-info__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/img-lunch-set_sp.png" media="(max-width: 767px)" />
            <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-lunch-set_pc.png" class="p-lunch-info__img lazyload" media="(min-width: 768px)" width="700" height="191" alt="パスタ+サラダ+ドリンク">
          </picture>
          <div class="p-lunch-info__body">
            <p class="p-lunch-info__title">スペシャルランチセット<br>【選べる3品】</p>
            <p class="p-lunch-info__price">1,280 yen</p>
            <p class="p-lunch-info__time">(11:00 AM〜14:00 PMまで)</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-grand-menu l-home__grand-menu">
    <h2 class="c-section-title">
      <span class="c-section-title__en">GRAND MENU</span>
      <span class="c-section-title__ja">グランドメニュー</span>
    </h2>
    <div class="p-grand-menu__contents l-inner">
      <section class="p-grand-menu__row">
        <h3 class="p-grand-menu__heading">パスタ</h3>
        <ul class="p-grand-menu__list">
          <li class="p-grand-menu__item p-card-menu">
            <div class="p-card-menu__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-pasta01.jpeg" alt="メニューの画像" width="342" height="342" class="p-card-menu__img lazyload">
            </div>
            <p class="p-card-menu__title">テキストテキストテキストの○○○○風パスタテキストテキストテキストの○○○○風パスタ</p>
            <p class="p-card-menu__price">780 yen</p>
          </li>
          <li class="p-grand-menu__item p-card-menu">
            <div class="p-card-menu__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-pasta02.jpeg" alt="メニューの画像" width="342" height="342" class="p-card-menu__img lazyload">
            </div>
            <p class="p-card-menu__title">テキストテキストテキストの○○○○風パスタ</p>
            <p class="p-card-menu__price">780 yen</p>
          </li>
          <li class="p-grand-menu__item p-card-menu">
            <div class="p-card-menu__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-pasta03.jpeg" alt="メニューの画像" width="342" height="342" class="p-card-menu__img lazyload">
            </div>
            <p class="p-card-menu__title">テキストテキストテキストの○○○○風パスタ</p>
            <p class="p-card-menu__price">780 yen</p>
          </li>
        </ul>
      </section>
      <section class="p-grand-menu__row">
        <h3 class="p-grand-menu__heading">サラダ</h3>
        <ul class="p-grand-menu__list">
          <li class="p-grand-menu__item p-card-menu">
            <div class="p-card-menu__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-salad01.jpeg" alt="メニューの画像" width="342" height="342" class="p-card-menu__img lazyload">
            </div>
            <p class="p-card-menu__title">○○○○風サラダ</p>
            <p class="p-card-menu__price">780 yen</p>
          </li>
          <li class="p-grand-menu__item p-card-menu">
            <div class="p-card-menu__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-salad02.jpeg" alt="メニューの画像" width="342" height="342" class="p-card-menu__img lazyload">
            </div>
            <p class="p-card-menu__title">○○○○風サラダ</p>
            <p class="p-card-menu__price">780 yen</p>
          </li>
        </ul>
      </section>
      <section class="p-grand-menu__row">
        <h3 class="p-grand-menu__heading">パン & スイーツ</h3>
        <ul class="p-grand-menu__list">
          <li class="p-grand-menu__item p-card-menu">
            <div class="p-card-menu__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-sweets01.jpeg" alt="メニューの画像" width="342" height="342" class="p-card-menu__img lazyload">
            </div>
            <p class="p-card-menu__title">○○○○サンド</p>
            <p class="p-card-menu__price">780 yen</p>
          </li>
          <li class="p-grand-menu__item p-card-menu">
            <div class="p-card-menu__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-sweets02.jpeg" alt="メニューの画像" width="342" height="342" class="p-card-menu__img lazyload">
            </div>
            <p class="p-card-menu__title">○○○○サンド</p>
            <p class="p-card-menu__price">780 yen</p>
          </li>
          <li class="p-grand-menu__item p-card-menu">
            <div class="p-card-menu__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-sweets03.jpeg" alt="メニューの画像" width="342" height="342" class="p-card-menu__img lazyload">
            </div>
            <p class="p-card-menu__title">○○○○サンド</p>
            <p class="p-card-menu__price">780 yen</p>
          </li>
          <li class="p-grand-menu__item p-card-menu">
            <div class="p-card-menu__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-sweets04.jpeg" alt="メニューの画像" width="342" height="342" class="p-card-menu__img lazyload">
            </div>
            <p class="p-card-menu__title">○○○○サンド</p>
            <p class="p-card-menu__price">780 yen</p>
          </li>
          <li class="p-grand-menu__item p-card-menu">
            <div class="p-card-menu__img-wrapper">
              <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-sweets04.jpeg" alt="メニューの画像" width="342" height="342" class="p-card-menu__img lazyload">
            </div>
            <p class="p-card-menu__title">○○○○サンド</p>
            <p class="p-card-menu__price">780 yen</p>
          </li>
        </ul>
      </section>
      <section class="p-grand-menu__row">
        <h3 class="p-grand-menu__heading">ドリンク</h3>
        <div class="p-grand-menu__drinks p-drinks">
          <picture class="p-drinks__img-wrapper u-hidden-xl-down">
            <source class="p-home-concept__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-drink01.webp" type="image/webp" />
            <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-drink01.jpeg" alt="コーヒーの画像" width="654" height="654" class="p-drinks__img lazyload">
          </picture>
          <div class="p-drinks__body">
            <ul class="p-drinks__list">
              <li class="p-drinks__item">
                <p class="p-drinks__cat">コーヒー</p>
                <ul class="p-drinks__sub-list">
                  <li class="p-drinks__sub-item">
                    <p class="p-drinks__name">ブレンド</p>
                    <p class="p-drinks__price">500 yen</p>
                  </li>
                  <li class="p-drinks__sub-item">
                    <p class="p-drinks__name">カフェラテ</p>
                    <p class="p-drinks__price">500 yen</p>
                  </li>
                  <li class="p-drinks__sub-item">
                    <p class="p-drinks__name">豆乳ラテ</p>
                    <p class="p-drinks__price">500 yen</p>
                  </li>
                  <li class="p-drinks__sub-item">
                    <p class="p-drinks__name">カフェモカ</p>
                    <p class="p-drinks__price">500 yen</p>
                  </li>
                  <li class="p-drinks__sub-item">
                    <p class="p-drinks__name">キャラメルラテキャラメルラテキャラメルラテキャラメルラテ</p>
                    <p class="p-drinks__price">500 yen</p>
                  </li>
                </ul>
              </li>
              <li class="p-drinks__item">
                <p class="p-drinks__cat">紅茶</p>
                <ul class="p-drinks__sub-list">
                  <li class="p-drinks__sub-item">
                    <p class="p-drinks__name">ストレート</p>
                    <p class="p-drinks__price">500 yen</p>
                  </li>
                  <li class="p-drinks__sub-item">
                    <p class="p-drinks__name">ミルク</p>
                    <p class="p-drinks__price">500 yen</p>
                  </li>
                  <li class="p-drinks__sub-item">
                    <p class="p-drinks__name">アップル</p>
                    <p class="p-drinks__price">500 yen</p>
                  </li>
                </ul>
              </li>
              <li class="p-drinks__item">
                <p class="p-drinks__cat">ソフトドリンク</p>
                <ul class="p-drinks__sub-list">
                  <li class="p-drinks__sub-item">
                    <p class="p-drinks__name">バナナ</p>
                    <p class="p-drinks__price">500 yen</p>
                  </li>
                  <li class="p-drinks__sub-item">
                    <p class="p-drinks__name">オレンジ</p>
                    <p class="p-drinks__price">500 yen</p>
                  </li>
                  <li class="p-drinks__sub-item">
                    <p class="p-drinks__name">アップル</p>
                    <p class="p-drinks__price">500 yen</p>
                  </li>
                  <li class="p-drinks__sub-item">
                    <p class="p-drinks__name">マンゴー</p>
                    <p class="p-drinks__price">500 yen</p>
                  </li>
                  <li class="p-drinks__sub-item">
                    <p class="p-drinks__name">ミックス</p>
                    <p class="p-drinks__price">500 yen</p>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
    <div class="p-grand-menu__link-wrapper">
      <a href="<?php echo esc_url(home_url('/menu')); ?>" class="c-button-primary">その他のメニュー</a>
    </div>
  </section>

  <section class="p-gallery l-home__gallery">
    <h2 class="c-section-title">
      <span class="c-section-title__en">GALLERY</span>
      <span class="c-section-title__ja">ギャラリー</span>
    </h2>
    <div class="p-gallery__contents l-inner">
      <article class="p-gallery__photos">
        <div class="p-gallery__photo">
          <div class="p-gallery__img-wrapper">
            <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-gallery01.jpeg" alt="インスタグラムの写真" width="257" height="257" class="p-gallery__img lazyload">
          </div>
        </div>
        <div class="p-gallery__photo">
          <div class="p-gallery__img-wrapper">
            <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-gallery02.jpeg" alt="インスタグラムの写真" width="257" height="257" class="p-gallery__img lazyload">
          </div>
        </div>
        <div class="p-gallery__photo">
          <div class="p-gallery__img-wrapper">
            <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-gallery03.jpeg" alt="インスタグラムの写真" width="257" height="257" class="p-gallery__img lazyload">
          </div>
        </div>
        <div class="p-gallery__photo">
          <div class="p-gallery__img-wrapper">
            <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-gallery04.jpeg" alt="インスタグラムの写真" width="257" height="257" class="p-gallery__img lazyload">
          </div>
        </div>
        <div class="p-gallery__photo">
          <div class="p-gallery__img-wrapper">
            <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-gallery01.jpeg" alt="インスタグラムの写真" width="257" height="257" class="p-gallery__img lazyload">
          </div>
        </div>
        <div class="p-gallery__photo">
          <div class="p-gallery__img-wrapper">
            <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-gallery02.jpeg" alt="インスタグラムの写真" width="257" height="257" class="p-gallery__img lazyload">
          </div>
        </div>
      </article>
    </div>
    <div class="p-gallery__link-wrapper">
      <a href="" class="c-button-primary">インスタグラムを見る</a>
    </div>
  </section>

  <section class="p-news l-home__news">
    <h2 class="c-section-title">
      <span class="c-section-title__en">NEWS</span>
      <span class="c-section-title__ja">お知らせ</span>
    </h2>
    <div class="p-news__contents l-inner">
      <article class="p-news__main">
        <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
          );
          $new_posts = get_posts($args);
          foreach($new_posts as $post) : setup_postdata($post);
          $category = get_the_category();
        ?>
        <a href="<?php the_permalink(); ?>" class="p-card-news p-card-news--large">
          <div class="p-card-news__img-wrapper">
            <?php
              if(has_post_thumbnail()) {
                the_post_thumbnail('medium', array(
                  'class' => 'p-card-news__img lazyload'
                ));
              } else {
                echo '<img data-src="' . esc_url(get_template_directory_uri()) . '/img/common/img-mv01_pc.jpeg" alt="記事の画像" class="p-card-news__img lazyload">';
              }
            ?>
          </div>
          <?php if($category[0]) : ?>
          <p class="p-card-news__cat"><?php echo $category[0]->cat_name; ?></p>
          <?php endif; ?>
          <div class="p-card-news__body">
            <h3 class="p-card-news__title"><?php the_title(); ?></h3>
            <p class="p-card-news__excerpt"><?php the_excerpt(); ?></p>
            <time datetime="<?php the_time('c'); ?>" class="p-card-news__date"><?php the_time('Y.n.j'); ?></time>
          </div>
        </a>
        <?php endforeach; wp_reset_postdata(); ?>
      </article>

      <article class="p-news__other">
        <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'offset' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
          );
          $new_posts = get_posts($args);
          foreach($new_posts as $post) : setup_postdata($post);
          $category = get_the_category();
        ?>
        <a href="<?php the_permalink(); ?>" class="p-news__item p-card-news">
          <div class="p-card-news__img-wrapper">
            <?php
              if(has_post_thumbnail()) {
                the_post_thumbnail('small', array(
                  'class' => 'p-card-news__img lazyload'
                ));
              } else {
                echo '<img data-src="' . esc_url(get_template_directory_uri()) . '/img/common/img-mv01_pc.jpeg" alt="記事の画像" class="p-card-news__img lazyload">';
              }
            ?>
          </div>
          <?php if($category[0]) : ?>
          <p class="p-card-news__cat"><?php echo $category[0]->cat_name; ?></p>
          <?php endif; ?>
          <div class="p-card-news__body">
            <h3 class="p-card-news__title"><?php the_title(); ?></h3>
            <time datetime="<?php the_time('c'); ?>" class="p-card-news__date"><?php the_time('Y.n.j'); ?></time>
          </div>
        </a>
        <?php endforeach; wp_reset_postdata(); ?>
      </article>
    </div>
    <div class="p-news__link-wrapper">
      <a href="<?php echo esc_url(home_url('/news')); ?>" class="c-button-primary">過去のお知らせ</a>
    </div>
  </section>
  
  <section class="l-access">
    <div class="p-access">
      <h2 class="c-section-title">
        <span class="c-section-title__en">ACCESS</span>
        <span class="c-section-title__ja">アクセス</span>
      </h2>
      <div class="p-access__inner">
        <div class="p-map">
          <iframe data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0372058864655!2d139.5780239156885!3d35.70070203018986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ee39b555205f%3A0xabb26a0a2fbda595!2z44CSMTgwLTAwMDMg5p2x5Lqs6YO95q2m6JS16YeO5biC5ZCJ56Wl5a-65Y2X55S677yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1637065433936!5m2!1sja!2sjp" width="688" height="387" style="border:0;" allowfullscreen="" class="lazyload">
          </iframe>
        </div>
        <address class="p-info">
          <dl class="p-info__dl">
            <div class="p-info__row">
              <dt class="p-info__dt">
                住所
              </dt>
              <dd class="p-info__dd">
                〒000-0000<br>東京都武蔵野市吉祥寺南町一丁目
              </dd>
            </div>
            <div class="p-info__row">
              <dt class="p-info__dt">
                TEL
              </dt>
              <dd class="p-info__dd">
                <a href="tel:0123-456-789">0123-456-789</a>
              </dd>
            </div>
            <div class="p-info__row">
              <dt class="p-info__dt">
                Mail
              </dt>
              <dd class="p-info__dd">
                <a href="mailto:example@mail.com">example@mail.com</a>
              </dd>
            </div>
          </dl>
          <dl class="p-info__dl">
            <div class="p-info__row">
              <dt class="p-info__dt">
                営業時間
              </dt>
              <dd class="p-info__dd">
                7:00〜21:00<br>※ラストオーダー 20:30
              </dd>
            </div>
            <div class="p-info__row">
              <dt class="p-info__dt">
                定休日
              </dt>
              <dd class="p-info__dd">
                水曜日
              </dd>
            </div>
            <div class="p-info__row">
              <dt class="p-info__dt">
                座席
              </dt>
              <dd class="p-info__dd">
                テーブル20席 ／ カウンター席6席
              </dd>
            </div>
          </dl>
        </address>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>