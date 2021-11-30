<?php get_header(); ?>

<main>
  <section class="p-lower-mv">
    <picture class="p-lower-mv__picture">
      <source class="p-lower-mv__img" srcset="<?php echo get_template_directory_uri(); ?>/img/webp/img-mv-contact.webp" type="image/webp" />
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/img-mv-contact.jpeg" class="p-lower-mv__img" decoding="async" width="1280" height="320" alt="お問い合わせメインビジュアル">
    </picture>
    <h1 class="p-lower-mv__heading">
      <p class="p-lower-mv__head">CONTACT</p>
      <p class="p-lower-mv__lead">お問い合わせ</p>
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
  <section class="p-contact l-contact">
    <h2 class="p-contact__title">
      送信が完了しました
    </h2>
    <div class="p-contact__body">
      <p class="p-contact__intro">お問い合わせありがとうございました。<br>3営業日以内に返信いたしますので、しばらくお待ちいただけますと幸いです。</p>
    </div>
  </section>
  
  <?php get_template_part('includes/access'); ?>
</main>

<?php get_footer(); ?>