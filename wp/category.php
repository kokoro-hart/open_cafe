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
  <div class="l-inner">
    <div class="l-archive">
      <article class="p-archive-main l-archive__main">
        <div class="p-archive-main__items">
          <?php
            if(have_posts()) :
            while(have_posts()) : the_post();
            $category = get_the_category();
          ?>
          <a href="<?php the_permalink(); ?>" class="p-archive-main__item p-card-news p-card-news--archive">
            <div class="p-card-news__img-wrapper">
              <?php
                if(has_post_thumbnail()) {
                  the_post_thumbnail('full', array(
                    'class' => 'p-card-news__img lazyload'
                  ));
                } else {
                  echo 
                  '<svg class="c-svg p-card-news__img" width="340" height="213">
                    <use xlink:href="'. esc_url(get_template_directory_uri()) .'/img/svg/sprite.min.svg#logo" />
                  </svg>';
                }
              ?>
            </div>
            <?php if($category[0]) : ?>
            <p class="p-card-news__cat"><?php echo $category[0]->cat_name; ?></p>
            <?php endif; ?>
            <div class="p-card-news__body">
              <h3 class="p-card-news__title"><?php the_title(); ?></h3>
              <time datetime="<?php the_time('c'); ?>" class="p-card-news__date"><?php the_time('Y.n.j'); ?></ti>
            </div>
          </a>        
          <?php
            endwhile;
            endif;
          ?>  
        </div>
        <?php my_pagination(); ?>
      </article>
      <?php get_sidebar(); ?>
    </div>
  </div>
  <?php get_template_part('includes/access') ?>
</main>
<?php get_footer(); ?>