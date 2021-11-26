<?php

// 初期設定
//--------------------------------------------------------------------------------------

function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( 
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

function change_title_separator( $sep ){
  $sep = ' | ';
  return $sep;
}
add_filter( 'document_title_separator', 'change_title_separator' );

//css jsの読み込み
function my_script_init()
{
  //swiper
  if( is_front_page() || is_page('staff')) {
    wp_enqueue_style('swiper-css', '//unpkg.com/swiper/swiper-bundle.min.css', 'all');
    wp_enqueue_script('swiper-js','//unpkg.com/swiper/swiper-bundle.min.js', true);
  }

  //my
  wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_enqueue_script('my', get_template_directory_uri() . '/js/bundle.js', array(), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'my_script_init');

//フォーム設置ページのみContactForm7のcss、jsを読み込み
add_action( 'wp', function() {
  if ( is_page( 'contact' )) return;
  add_filter( 'wpcf7_load_js', '__return_false' );
  add_filter( 'wpcf7_load_css', '__return_false' );
});

