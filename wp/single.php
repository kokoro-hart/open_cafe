<?php get_header(); ?>

<main>
  <section class="p-lower-mv">
    <picture class="p-lower-mv__picture">
      <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv-news_sp.webp" media="(max-width: 767px)" type="image/webp" />
      <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv-news_pc.webp" media="(min-width: 768px)" type="image/webp" />
      <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/img-mv-news_sp.jpeg" media="(max-width: 767px)" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-mv-news_pc.jpeg" class="p-lower-mv__img" media="(min-width: 768px)" decoding="async" alt="お知らせメインビジュアル">
    </picture>
    <h1 class="p-lower-mv__heading">
      <p class="p-lower-mv__head">NEWS</p>
      <p class="p-lower-mv__lead">お知らせ</p>
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
  <article class="l-single">
    <section class="p-single">
      <div class="p-single__thumbnail">
        <?php
          if(has_post_thumbnail()) {
            the_post_thumbnail('full');
          } else {
            echo 
            '<svg class="c-svg" width="688" height="430">
              <use xlink:href="'. esc_url(get_template_directory_uri()) .'/img/svg/sprite.min.svg#logo" />
            </svg>';
          }
        ?>
      </div>
      <h1 class="p-single__title">
        <?php the_title(); ?>
      </h1>
      <div class="p-single__info">
        <time datetime="<?php the_time('c'); ?>" class="p-single__date"><?php the_time('Y.n.j'); ?></time>
        <?php 
          $category = get_the_category(); 
          if($category[0]) : 
        ?>
        <p class="p-single__cat">
          <?php echo $category[0]->cat_name; ?>
        </p>
        <?php endif; ?>
      </div>
      <div class="p-single__body">
        <?php the_content(); ?>
      </div>

      <div class="p-single__pager p-single-pager">
        <?php
          $prev_post = get_previous_post(); // 前の投稿を取得
          $next_post = get_next_post(); // 次の投稿を取得
        ?>
        <?php if ($next_post) : ?>
          <div class="p-single-pager__prev">
            <?php next_post_link('%link', '前の記事へ'); ?>
          </div>
        <?php endif; ?>        
        <a class="p-single-pager__button" href="<?php echo esc_url(home_url('/news')); ?>">記事一覧</a>
        <?php if ($prev_post) : ?>
          <div class="p-single-pager__next">
            <?php previous_post_link('%link', '次の記事へ'); ?>
          </div>
        <?php endif; ?>
      </div>
    </section>

    <section class="l-related p-related">
      <h2 class="p-related__title">関連記事</h2>
      <div class="p-related__list">
        <?php 
        if(has_category()) {
          $post_cats = get_the_category();
          $cat_ids = array();
          foreach($post_cats as $cat) {
            $cat_ids[] = $cat->term_id;
          }
        } 

        $related_posts = get_posts(array( 
          'post_type' => 'post',//投稿タイプを表示
          'posts_per_page' => '6',
          'post__not_in' => array($post->ID),//表示中の投稿を除外($post = 投稿情報)
          'category__in' => $cat_ids,//この投稿と同じカテゴリーの中から
          'orderby' => 'rand',//ランダムで表示
        ));
        if($related_posts) : 
        foreach($related_posts as $post) : setup_postdata($post);
        ?>
        <a href="" class="p-related__item p-card-news">
          <div class="p-card-news__img-wrapper">
            <?php
              if(has_post_thumbnail()) {
                the_post_thumbnail('full', array(
                  'class' => 'p-card-news__img lazyload'
                ));
              } else {
                echo 
                '<svg class="c-svg p-card-news__img" width="200" height="125">
                  <use xlink:href="'. esc_url(get_template_directory_uri()) .'/img/svg/sprite.min.svg#logo" />
                </svg>';
              }
            ?>
          </div>
          <?php if($post_cats[0]) : ?>
          <p class="p-card-news__cat">
            <?php echo $post_cats[0]->cat_name; ?>
          </p>
          <?php endif; ?>
          <div class="p-card-news__body">
            <h3 class="p-card-news__title"><?php the_title(); ?></h3>
            <time datetime="<?php the_time('c'); ?>" class="p-card-news__date"><?php the_time('Y.n.j'); ?></time>
          </div>
        </a>
        <?php
          endforeach; wp_reset_postdata();
          endif;
        ?>
      </div>
    </section>
  </article>
  
  <?php get_template_part('includes/access'); ?>
</main>

<?php get_footer(); ?>