<?php get_header(); ?>

<main>
  <section class="p-lower-mv">
    <picture class="p-lower-mv__picture">
      <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv-shop_sp.webp" media="(max-width: 767px)" type="image/webp" />
      <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv-shop_pc.webp" media="(min-width: 768px)" type="image/webp" />
      <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/common/img-mv-shop_sp.jpeg" media="(max-width: 767px)" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-mv-shop_pc.jpeg" class="p-lower-mv__img" media="(min-width: 768px)" decoding="async" alt="店舗一覧メインビジュアル">
    </picture>
    <h1 class="p-lower-mv__heading">
      <p class="p-lower-mv__head">SHOP</p>
      <p class="p-lower-mv__lead">店舗一覧</p>
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
  <div class="l-lower-shop">
    <div class="l-inner">
      <?php
        $args = array(
          'post_type' => 'shop-list', 
          'posts_per_page' => -1,
          'orderby' => 'date',
          'order' => 'DESC',
        );
        $shop_posts = get_posts( $args );
        if ( $shop_posts) :

        foreach ( $shop_posts as $post ) :
        setup_postdata( $post );
      ?>
      <section class="p-shop">
        <div class="p-shop__inner">
          <h2 class="p-shop__title">
            <?php the_title(); ?>
          </h2>
          <div class="p-map">
            <?php the_content(); ?>
          </div>
          <address class="p-info">
            <dl class="p-info__dl">
              <?php if ( get_field('address')) :  ?>
              <div class="p-info__row">
                <dt class="p-info__dt">
                  住所
                </dt>
                <dd class="p-info__dd">
                  <?php echo nl2br( get_field( 'address' ) );?>
                </dd>
              </div>
              <?php endif; ?>
              <?php if ( get_field('tel')) :  ?>
              <div class="p-info__row">
                <dt class="p-info__dt">
                  TEL
                </dt>
                <dd class="p-info__dd">
                  <a href="tel:<?php the_field( 'tel' );?>">
                    <?php the_field( 'tel' );?>
                  </a>
                </dd>
              </div>
              <?php endif; ?>
              <?php if ( get_field('mail')) :  ?>
              <div class="p-info__row">
                <dt class="p-info__dt">
                  Mail
                </dt>
                <dd class="p-info__dd">
                  <a href="mailto:<?php the_field( 'mail' );?>">
                    <?php the_field( 'mail' );?>
                  </a>
                </dd>
              </div>
              <?php endif; ?>
            </dl>
            <dl class="p-info__dl">
              <?php if ( get_field('time')) :  ?>
              <div class="p-info__row">
                <dt class="p-info__dt">
                  営業時間
                </dt>
                <dd class="p-info__dd">
                  <?php echo nl2br( get_field( 'time' ) );?>
                </dd>
              </div>
              <?php endif; ?>
              <?php if ( get_field('holiday')) :  ?>
              <div class="p-info__row">
                <dt class="p-info__dt">
                  定休日
                </dt>
                <dd class="p-info__dd">
                  <?php the_field( 'holiday' );?>
                </dd>
              </div>
              <?php endif; ?>
              <?php if ( get_field('seat')) :  ?>
              <div class="p-info__row">
                <dt class="p-info__dt">
                  座席
                </dt>
                <dd class="p-info__dd">
                  <?php echo nl2br( get_field( 'seat' ) );?>
                </dd>
              </div>
              <?php endif; ?>
            </dl>
          </address>
        </div>
      </section>
      <?php
        endforeach;
        endif;
        wp_reset_postdata();
      ?>
    </div>
  </div>
  <?php get_template_part('includes/access'); ?>
</main>

<?php get_footer(); ?>