<?php

/**********************
初期設定
*********************/
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


/**********************
OGP設定
*********************/
function my_meta_ogp()
{
  if (is_front_page() || is_home() || is_singular() || is_archive()) {

    /*初期設定*/

    // 画像 （アイキャッチ画像が無い時に使用する代替画像URL）
    $ogp_image = ''.esc_url(get_template_directory_uri()).'/img/common/img-mv01_pc.jpeg';
    // Twitterのアカウント名 (@xxx)
    $twitter_site = '@dummy_open_cafe';
    // Twitterカードの種類（summary_large_image または summary を指定）
    $twitter_card = 'summary_large_image';
    // Facebook APP ID
    $facebook_app_id = '';

    /*初期設定 ここまで*/

    global $post;
    $ogp_title = '';
    $ogp_description = '';
    $ogp_url = '';
    $html = '';

    if (is_front_page()) {
      // トップページ
      $ogp_title = get_bloginfo('name');
      $ogp_description = get_bloginfo('description');
      $ogp_url = home_url();
    } elseif (is_tax() || is_category())  {
      // カテゴリページ
      $ogp_title = single_cat_title( '', false ) . ' | ' . get_bloginfo('name');
      $ogp_description = get_bloginfo('description');
      $ogp_url =get_pagenum_link(get_query_var('paged'));
    } elseif (is_page()) {
      // 固定ページ
      $ogp_title = get_the_title() . ' | ' . get_bloginfo('name');
      $ogp_description = get_bloginfo('description');
      $ogp_url = get_pagenum_link(get_query_var('paged'));
      wp_reset_postdata();
    } elseif (is_archive('news'))  {
      // メニューページ
      $ogp_title = 'メニュー | ' . get_bloginfo('name');
      $ogp_description = get_bloginfo('description');
      $ogp_url =get_pagenum_link(get_query_var('paged'));
    } elseif (is_home()) {
      // お知らせページ
      $ogp_title = 'お知らせ | ' . get_bloginfo('name');
      $ogp_description = get_bloginfo('description');
      $ogp_url =get_pagenum_link(get_query_var('paged'));
    } elseif (is_singular()) {
      // 記事＆固定ページ
      setup_postdata($post);
      $ogp_title = $post->post_title . ' | ' . get_bloginfo('name');
      $ogp_description = mb_substr(get_the_excerpt(), 0, 100);
      $ogp_url = get_permalink();
      wp_reset_postdata();
    }

    // og:type
    $ogp_type = (is_front_page()) ? 'website' : 'article';

    // og:image
    if (is_singular() && has_post_thumbnail()) {
      $ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
      $ogp_image = $ps_thumb[0];
    }

    // 出力するOGPタグをまとめる
    $html = "\n";
    $html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '">' . "\n";
    $html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '">' . "\n";
    $html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
    $html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '">' . "\n";
    $html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '">' . "\n";
    $html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    $html .= '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
    $html .= '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
    $html .= '<meta property="og:locale" content="ja_JP">' . "\n";

    if ($facebook_app_id != "") {
      $html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
    }

    echo $html;
  }
}

/**********************
フィルターフック
*********************/
//タイトルの区切り
function change_title_separator( $sep ){
  $sep = ' | ';
  return $sep;
}
add_filter( 'document_title_separator', 'change_title_separator' );

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


/**********************
カスタム投稿設定
*********************/
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
