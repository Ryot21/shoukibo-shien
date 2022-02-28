
<?php

// グローバルナビ　カスタムナビ機能-----------------------------------------
add_theme_support('menus');

// WPのバージョン情報表示を停止  -----------------------------------------------------------------
remove_action('wp_head', 'wp_generator');

// カスタム投稿タイプ-------------------------------------------------------------------
// お知らせ  -----------------------------------------------------------------------
register_post_type(
	'news', //投稿タイプ名
	array(
		'label'=> 'お知らせ', //ラベル名
		'labels' => array(
		'menu_name' => 'お知らせ' //管理画面のメニュー名
		),
		'description'=> 'ディスクリプション',
		'public' => true, //公開状態
		'show_ui' => true,
		'query_var' => true, // スラッグでURLをリクエストできる
		'hierarchical' => false, //固定ページのように親ページを指定するならtrue
		'rewrite' => array('slug' => 'news'), //スラッグ名
		'has_archive' => true, //パーマリンクがデフォルト以外、アーカイブページを表示する場合はtrue
		'supports' => array(
				'title',
				'editor',
				'custom-fields',
				'thumbnail',
				'page-attributes',
				'excerpt'
		)
	)
);
// ここまでカスタム投稿タイプ-------------------------------------------------------------------


?>