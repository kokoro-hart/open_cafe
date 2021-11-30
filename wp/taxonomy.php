<?php get_header(); ?>
<main>
  <section class="p-lower-mv">
    <picture class="p-lower-mv__picture">
      <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv-menu.webp" type="image/webp" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-mv-menu.jpeg" class="p-lower-mv__img" decoding="async" width="1280" height="320" alt="メニューメインビジュアル">
    </picture>
    <h1 class="p-lower-mv__heading">
      <p class="p-lower-mv__head">MENU</p>
      <p class="p-lower-mv__lead">メニュー</p>
    </h1>
  </section>
  <div class="c-breadcrumb u-mt5">
    <div class="l-inner">
      <?php
        if ( function_exists( 'bcn_display' ) ) {
          bcn_display();
        }
      ?>
    </div>
  </div>
  <div class="l-lower-menu">
    <div class="l-inner">
      <div class="p-menu-tab l-lower-menu__tab">
        <ul class="p-menu-tab__list">
          <?php
            $genre = get_queried_object();// タームオブジェクトを取得
            $genre_name = $genre -> name;// ターム名
            $terms = get_terms('genre');
            foreach ( $terms as $term ) :
            if (in_array($term->slug, array('soft', 'coffee','tea', 'lunch' ))) {// ターム:限定ランチと子タームは除外
              continue;
            }
          ?>
          <li class="p-menu-tab__item 
            <?php
              if( $genre_name == esc_html( $term->name )) { //ターム名が一致すれば
                echo "is-current"; // カレントを付与
              } 
            ?>
          ">
            <a href="<?php echo esc_url(get_term_link($term->slug, 'genre')); ?>" class="p-menu-tab__link">
              <?php echo esc_html($term->name);?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <ul class="p-menu-list l-lower-menu__list">
        <?php
          $term_object = get_queried_object(); // タームオブジェクトを取得
          $term_slug   = $term_object->slug; // タームスラッグ
          $term_posts = get_posts(array(
            'post_type' => 'menu', // 投稿タイプ
            'posts_per_page' => -1, // 表示件数
            'orderby' => 'date', // 表示順の基準
            'order' => 'DESC', // 昇順・降順
            'tax_query' => array(
              array(
                'taxonomy' => 'genre', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => $term_slug, //表示したいタームをスラッグで指定
                'operator' => 'IN'
              ),
            )
          ));
          global $post;
          if($term_posts): 
          foreach($term_posts as $post): setup_postdata($post); 
        ?>     
        <li class="p-menu-list__item p-card-menu p-card-menu--archive">
          <div class="p-card-menu__img-wrapper">
            <?php
              if(has_post_thumbnail()) {
                the_post_thumbnail('full', array(
                  'class' => 'p-card-menu__img lazyload'
                ));
              } else {
                echo 
                '<svg class="c-svg p-card-menu__img" width="245" height="245">
                  <use xlink:href="'. esc_url(get_template_directory_uri()) .'/img/svg/sprite.min.svg#logo" />
                </svg>';
              }
            ?>
          </div>
          <p class="p-card-menu__title"><?php the_title(); ?></p>
          <?php if ( get_field('price')) :  ?>
            <p class="p-card-menu__price">
              <?php the_field( 'price' );?> yen
            </p>
          <?php endif; ?>
        </li>
        <?php 
          endforeach; wp_reset_postdata(); 
          endif; 
        ?>
      </ul>
    </div>
  </div>

  <?php get_template_part('includes/access') ?>
</main>
<?php get_footer(); ?>