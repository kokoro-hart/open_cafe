<?php get_header(); ?>

<main>
  <section class="p-lower-mv">
    <picture class="p-lower-mv__picture">
      <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv-concept.webp" type="image/webp" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-mv-concept.jpeg" class="p-lower-mv__img" decoding="async" width="1280" height="320" alt="コンセプトメインビジュアル">
    </picture>
    <h1 class="p-lower-mv__heading">
      <p class="p-lower-mv__head">CONCEPT</p>
      <p class="p-lower-mv__lead">当店のこだわり</p>
    </h1>
  </section>
  <div class="c-breadcrumb u-mt5">
    <div class="l-inner">
      <ul class="c-breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a class="c-breadcrumb__link" itemprop="item" href="/"><span itemprop="name">HOME</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a class="c-breadcrumb__link" itemprop="item" href="/concept/"><span itemprop="name">当店のこだわり</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ul>
    </div>
  </div>
  <div class="l-lower-concept">
    <section class="p-concept l-lower-concept__detail">
      <div class="p-concept__inner">
        <picture class="p-concept__picture">
          <source class="p-concept__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-concept02.webp" type="image/webp" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-concept02.png" class="p-concept__img" width="640" height="730" decoding="async" alt="コンセプトイメージ">
        </picture>
        <div class="p-concept__contents">
          <h2 class="p-concept__title">
            美味しいコーヒーと食事で、<br>最高のひとときを。
          </h2>
          <p class="p-concept__text">
            ダミー_国内外から賞賛を
            <br>
            受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
            <br>
            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
            <br>
            <br>
            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          </p>
        </div>
      </div>
    </section>
    <section class="p-concept p-concept--reverse l-lower-concept__detail">
      <div class="p-concept__inner">
        <picture class="p-concept__picture">
          <source class="p-concept__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-concept03.webp" type="image/webp" />
          <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-concept03.png" class="p-concept__img lazyload" width="640" height="537" alt="コンセプトイメージ">
        </picture>
        <div class="p-concept__contents">
          <h2 class="p-concept__title">
            本場イタリアで培った<br>自慢のパスタ
          </h2>
          <p class="p-concept__text">
            ダミー_国内外から賞賛を
            <br>
            受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
            <br>
            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
            <br>
            <br>
            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          </p>
        </div>
      </div>
    </section>
    <section class="p-concept l-lower-concept__detail">
      <div class="p-concept__inner">
        <picture class="p-concept__picture">
          <source class="p-concept__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-concept04.webp" type="image/webp" />
          <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-concept04.jpeg" class="p-concept__img lazyload" width="640" height="400" decoding="async" alt="コンセプトイメージ">
        </picture>
        <div class="p-concept__contents">
          <h2 class="p-concept__title">
            ほどよい甘さの<br>自家製こだわりクロワッサン
          </h2>
          <p class="p-concept__text">
            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>
            ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
          </p>
        </div>
      </div>
    </section>
  </div>
  
  <?php get_template_part('includes/access') ?>
</main>

<?php get_footer(); ?>