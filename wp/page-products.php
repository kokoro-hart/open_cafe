<?php get_header(); ?>

<main>
  <section class="p-lower-mv">
    <picture class="p-lower-mv__picture">
      <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv-products.webp" type="image/webp" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-mv-products.jpeg" class="p-lower-mv__img" decoding="async" width="1280" height="320" alt="GIFTメインビジュアル">
    </picture>
    <h1 class="p-lower-mv__heading">
      <p class="p-lower-mv__head">GIFT</p>
      <p class="p-lower-mv__lead">ギフト・贈り物</p>
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
          <a class="c-breadcrumb__link" itemprop="item" href="/products/"><span itemprop="name">ギフト・贈り物</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ul>
    </div>
  </div>
  <div class="l-lower-products">
    <div class="l-inner">
      <article class="p-products">
        <div class="p-products__row">
          <?php
            $args = array(
              'post_type' => 'products-list', 
              'posts_per_page' => 1,
              'orderby' => 'date',
              'order' => 'DESC',
            );
            $products_posts = get_posts( $args );
            if ( $products_posts) :

            foreach ( $products_posts as $post ) :
            setup_postdata( $post );
          ?>
          <div class="p-products__main p-card-products p-card-products--large">
            <div class="p-card-products__img-wrapper">
              <?php
                if(has_post_thumbnail()) {
                  the_post_thumbnail('full', array(
                    'class' => 'p-card-products__img'
                  ));
                } else {
                  echo 
                  '<svg class="c-svg p-card-menu__img" width="528" height="528">
                    <use xlink:href="'. esc_url(get_template_directory_uri()) .'/img/svg/sprite.min.svg#logo" />
                  </svg>';
                }
              ?>
            </div>
            <div class="p-card-products__body">
              <h3 class="p-card-products__title"><?php the_title(); ?></h3>
              <?php if ( get_field('price')) :  ?>
                <p class="p-card-products__price">
                  <?php the_field( 'price' );?> yen
                </p>
              <?php endif; ?>
              <div class="p-card-products__link-wrapper">
                <a href="" class="p-card-products__button">ショップで確認する</a>
              </div>
            </div>
          </div>
          <?php
            endforeach;
            endif;
            wp_reset_postdata();
          ?>

          <ul class="p-products__list">
            <?php
              $args = array(
                'post_type' => 'products-list', 
                'posts_per_page' => 4,
                'offset' => 1,
                'orderby' => 'date',
                'order' => 'DESC',
              );
              $products_posts = get_posts( $args );
              if ( $products_posts) :

              foreach ( $products_posts as $post ) :
              setup_postdata( $post );
            ?>
            <li class="p-products__item p-card-products">
              <div class="p-card-products__img-wrapper">
                <?php
                  if(has_post_thumbnail()) {
                    the_post_thumbnail('full', array(
                      'class' => 'p-card-products__img'
                    ));
                  } else {
                    echo 
                    '<svg class="c-svg p-card-menu__img" width="245" height="245">
                      <use xlink:href="'. esc_url(get_template_directory_uri()) .'/img/svg/sprite.min.svg#logo" />
                    </svg>';
                  }
                ?>
              </div>
              <div class="p-card-products__body">
                <h3 class="p-card-products__title"><?php the_title(); ?></h3>
                <?php if ( get_field('price')) :  ?>
                <p class="p-card-products__price">
                  <?php the_field( 'price' );?> yen
                </p>
                <?php endif; ?>
                <div class="p-card-products__link-wrapper">
                  <a href="" class="p-card-products__button">ショップで確認する</a>
                </div>
              </div>
            </li>
            <?php
              endforeach;
              endif;
              wp_reset_postdata();
            ?>
          </ul>
        </div>
        <div class="p-products__row">
          <ul class="p-products__list p-products__list--column-wide">
            <?php
              $args = array(
                'post_type' => 'products-list', 
                'posts_per_page' => 8,
                'offset' => 5,
                'orderby' => 'date',
                'order' => 'DESC',
              );
              $products_posts = get_posts( $args );
              if ( $products_posts) :

              foreach ( $products_posts as $post ) :
              setup_postdata( $post );
            ?>
            <li class="p-products__item p-card-products">
              <div class="p-card-products__img-wrapper">
                <?php
                  if(has_post_thumbnail()) {
                    the_post_thumbnail('full', array(
                      'class' => 'p-card-products__img lazyload'
                    ));
                  } else {
                    echo 
                    '<svg class="c-svg p-card-menu__img" width="245" height="245">
                      <use xlink:href="'. esc_url(get_template_directory_uri()) .'/img/svg/sprite.min.svg#logo" />
                    </svg>';
                  }
                ?>
              </div>
              <div class="p-card-products__body">
                <h3 class="p-card-products__title"><?php the_title(); ?></h3>
                <?php if ( get_field('price')) :  ?>
                <p class="p-card-products__price">
                  <?php the_field( 'price' );?> yen
                </p>
                <?php endif; ?>
                <div class="p-card-products__link-wrapper">
                  <a href="" class="p-card-products__button">ショップで確認する</a>
                </div>
              </div>
            </li>
            <?php
              endforeach;
              endif;
              wp_reset_postdata();
            ?>
          </ul>
        </div>
      </article>
      <div class="p-products-info l-lower-products__info">
        <div class="p-products-info__body">
          <h3 class="p-products-info__head">
            ラッピングは無料でお付けいたします。お気軽にご相談ください。
          </h3>
          <p class="p-products-info__lead">
            テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。
          </p>
        </div>
        <picture class="p-products-info__picture">
          <source class="p-products-info__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-wrapping.webp" type="image/webp" />
          <img data-src="<?php echo get_template_directory_uri(); ?>/img/common/img-wrapping.jpeg" class="p-products-info__img lazyload" width="460" height="300" alt="ラッピングイメージ">
        </picture>
      </div>
    </div>
  </div>
  <?php get_template_part('includes/access'); ?>
</main>

<?php get_footer(); ?>