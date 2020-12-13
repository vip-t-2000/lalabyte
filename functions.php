<?php

/* ======================================================================
 基本設定
====================================================================== */

// アイキャッチ
add_theme_support('post-thumbnails');

// // p / br 削除
// remove_filter('the_content', 'wpautop');
// remove_filter('the_excerpt', 'wpautop');

// ログインイメージ
function login_logo_image() {
  echo '<style type="text/css">
    #login h1 a {
      background: url(' . get_bloginfo('template_directory') . '/login_logo.png) no-repeat center center !important;
      width: 100%;
      height: 100px;
    }
    body {
      background: #add !important;
    }
  </style>';
}
add_action('login_head', 'login_logo_image');

// テンプレートフォルダまでのパスを取得
function tempath(){
  echo esc_url( get_template_directory_uri() );
}
// return false;

//デフォルトの投稿を削除
function my_remove_menus() {
  remove_menu_page('edit.php');
}
add_action('admin_menu', 'my_remove_menus');

// // 投稿のアーカイブページ設定
// add_filter('register_post_type_args', function($args, $post_type) {
//   if ('post' == $post_type) {
//     global $wp_rewrite;
//     $archive_slug = 'news';
//     $args['label'] = 'NEWS';
//     $args['has_archive'] = $archive_slug;
//     $archive_slug = $wp_rewrite->root.$archive_slug;
//     $feeds = '(' . trim( implode('|', $wp_rewrite->feeds) ) . ')';
//     add_rewrite_rule("{$archive_slug}/?$", "index.php?post_type={$post_type}", 'top');
//     add_rewrite_rule("{$archive_slug}/feed/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
//     add_rewrite_rule("{$archive_slug}/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
//     add_rewrite_rule("{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type={$post_type}".'&paged=$matches[1]', 'top');
//   }
//   return $args;
// }, 10, 2);

// To Delete tags
remove_action( 'wp_head', 'feed_links', 2 ); //サイト全体のフィード
remove_action( 'wp_head', 'feed_links_extra', 3 ); //その他のフィード
remove_action( 'wp_head', 'rsd_link' ); //Really Simple Discoveryリンク
remove_action( 'wp_head', 'wlwmanifest_link' ); //Windows Live Writerリンク
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); //前後の記事リンク
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); //ショートリンク
// remove_action( 'wp_head', 'rel_canonical' ); //canonical属性
remove_action( 'wp_head', 'wp_generator' ); //WPバージョン

// 固定ページ一覧にスラッグを表示
function add_page_columns_name($columns) {
$columns['slug'] = "スラッグ";
return $columns;
}
function add_page_column($column_name, $post_id) {
if( $column_name == 'slug' ) {
$post = get_post($post_id);
$slug = $post->post_name;
echo attribute_escape($slug);
}
}
add_filter( 'manage_pages_columns', 'add_page_columns_name');
add_action( 'manage_pages_custom_column', 'add_page_column', 10, 2);

/* ======================================================================
 カスタム投稿
====================================================================== */

// news
add_action('init', 'service');
function service(){
  $args = array(
    'label' => 'サービス',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'has_archive' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail','revisions'),
    'rewrite' => array(
      'slug' => 'service',
      'with_front' => false
    ),
    'menu_icon' => 'dashicons-format-aside',
  );
  register_post_type('service',$args);
}

// column
add_action('init', 'column');
function column(){
  $args = array(
    'label' => 'コラム',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'has_archive' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail','revisions'),
    'rewrite' => array(
      'slug' => 'column',
      'with_front' => false
    ),
    'menu_icon' => 'dashicons-format-aside',
  );
  register_post_type('column',$args);
  //分類を追加
  $args = array(
    'label' => 'カテゴリー',
    'public' => true,
    'show_ui' => true,
    'hierarchical' => true,
    'query_var'=> true,
    'rewrite' => array(
      'slug' => 'column/category',
      'with_front' => false
    )
  );
  register_taxonomy('column_cat','column',$args);
}

/* ======================================================================
 plugin関連
====================================================================== */

// No Author-Archive
add_filter( 'author_rewrite_rules', '__return_empty_array' );
function disable_author_archive() {
  if( $_GET['author'] || preg_match('#/author/.+#', $_SERVER['REQUEST_URI']) ){
    wp_redirect( home_url( '/404.php' ) );
  exit;
  }
}
add_action('init', 'disable_author_archive');
