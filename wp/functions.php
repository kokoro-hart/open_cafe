<?php

// セットアップ
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

//タイトルの区切り
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
add_action( 'wp', function() 
{
  if ( is_page( 'contact' )) return;
  add_filter( 'wpcf7_load_js', '__return_false' );
  add_filter( 'wpcf7_load_css', '__return_false' );
});

//lazyload対象の投稿画像はsrcをdata-srcに置き換える
function my_post_image_html( $html, $post_id, $post_image_id ) {

  //遅延読み込み対象の画像のみ
  if(strpos($html, 'lazyload') === false) {
      return $html;
  }

  //srcをdata-srcに置換する
  $html = str_replace('src="', 'data-src="', $html);
  return $html;
}
add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

//javascriptの遅延defer属性を追加
function scriptLoader($script, $handle, $src) {
	if (is_admin()) {
		return $script;
	}
	$script = sprintf('<script src="%s" type="text/javascript" defer=""></script>' . "\n", $src);
	return $script;
}
add_filter('script_loader_tag', 'scriptLoader', 10, 5);

add_action('init', function() 
{
  //メニュー
  register_post_type('menu', [
    'label' => 'メニュー',
    'public' => true,
    'menu_position' => 5,
    'supports' => ['thumbnail','title','editor','custom-fields'],
    'has_archive' => true,
    'show_in_rest' =>true,
    'exclude_from_search' => true,
  ]);

  register_taxonomy('genre', 'menu',[
    'label' => 'ジャンル',
    'hierarchical' => true,
    'show_in_rest' => true,
  ]);

  //店舗一覧
  register_post_type('shop-list', [
    'label' => '店舗一覧',
    'public' => true,
    'menu_position' => 5,
    'supports' => ['thumbnail','title','editor','custom-fields'],
    'has_archive' => true,
    'show_in_rest' =>true,
    'exclude_from_search' => true,
  ]);

  //ギフト・贈り物
  register_post_type('products-list', [
    'label' => 'ギフト・贈り物',
    'public' => true,
    'menu_position' => 5,
    'supports' => ['thumbnail','title','editor','custom-fields'],
    'has_archive' => true,
    'show_in_rest' =>true,
    'exclude_from_search' => true,
  ]);
});

//お知らせ記事一覧のページネーション
function my_pagination()
{
  if(paginate_links()) {
    echo 
    '<div class="p-archive-main__pagination c-pagination">' .
    paginate_links(array(
      'end_size' => 1,
      'mid_size' => 1,
      'prev_next' => true,
      'prev_text' => false,
      'next_text' => false,
    ))
    .'</div>';
  }
}
