<!-- ベーシック認証 -->
<?php
		// if(!is_home()):
		// 	$userArray = array(
		// 		"admin"/* ユーザー名 */ => "kumo"/* pass */
		// 	);
		// 	basic_auth($userArray);
		// endif;
	?>
<!-- /ベーシック認証 -->

<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="format-detection" content="telephone=no">
		<meta name="keywords" content="小規模事業者支援協会, 一般社団法人, 小規模事業者">

		<!-- ディスクリプション -->
			<?php
				if(is_home()) {
					$description = get_bloginfo('description');
				} else if(is_tax('news')) {//お知らせ
					$description = '一般社団法人小規模事業者支援協会のお知らせ一覧ページです。更新情報をはじめとした各種情報を掲載しています。';
				} else if(is_single()) {
					$postsummary = strip_tags($post->post_content);
					$textsearch = array('\n','<br>','<br />');
					$postsummary = str_replace($textsearch, '', $postsummary);
					$postsummary = mb_substr($postsummary, 0, 50). '…';
					$description = $postsummary . ' | 一般社団法人小規模事業者支援協会';
				} else if(is_category()) {////コラム
					$description = '一般社団法人小規模事業者支援協会のコラム一覧ページです。士業の知識を公開します。';
				} else if(is_page('activity')) {//活動内容
					$description = '一般社団法人小規模事業者支援協会の活動内容をまとめたページです。';
				} else if(is_page('outline')) {//協会概要
					$description = '一般社団法人小規模事業者支援協会の協会概要をまとめたページです。';
				} else if(is_page('membership')) {//会員登録
				$description = '一般社団法人小規模事業者支援協会の会員登録ページです。お問い合わせの方はフォームよりご連絡ください。';
			} else if(is_page('contact')) {//お問い合わせ
					$description = '一般社団法人小規模事業者支援協会のお問い合わせページです。お問い合わせの方はフォームよりご連絡ください。';
				}
			?>
			<meta name="description" content="<?php echo $description; ?>">
		<!-- /ディスクリプション -->
		<!-- タイトル -->
			<?php if( is_home()): ?>
				<title><?php bloginfo('name'); ?></title>
			<?php else: ?>
				<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
			<?php endif; ?>
		<!-- /タイトル -->
		<!-- ogp -->
			<?php
				if(is_home()) {
					$ogtype = 'website';
				} else {
					$ogtype = 'article';
				}
			?>
			<meta property="og:type" content="<?php echo $ogtype; ?>">
			<meta property="og:url" content="<?php echo("http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>">
			<meta property="og:description" content="<?php echo $description; ?>">
			<meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/common/ogimage.png">
			<meta property="og:title" content="<?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?>">
			<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
		<!-- /ogp -->
		<!-- css -->
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/aos.css">
		<!-- /css -->
		<!-- 外部読み込み -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

		<!-- /外部読み込み -->

		<?php wp_head(); ?>



	</head>
	<!-- body関係 -->
		<?php
			if(is_page()) {
				$page = get_post( get_the_ID() );
				$slug = $page->post_name;
			} elseif(is_home()) {//トップ
				$slug = 'index';

			} elseif(is_singular('news') || is_post_type_archive('news')) {//お知らせ
				$slug = 'news';

			} elseif(is_category() || is_single()) {//コラム
				$slug = 'column';
			}
		?>
	<!-- /body関係 -->
	<body class="<?php echo $slug; ?>">
		<div class="l-wrapper">
			<header id="header" class="l-header l-header--fixed">
				<div class="l-header__inner">
					<div class="c-header__wrap">

					<!-- サイトロゴ -->
					<h1 class="c-header__logo">
						<a href="/">
						<img src="<?php bloginfo('template_url'); ?>/images/logo/shoukibo-shien-logo.png" alt="一般社団法人 小規模事業者支援協会">
						</a>
					</h1>
					<!-- ヘッダーナビ ブロック -->
					<nav class="c-header__navbox">
						<ul class="c-header__navbox__left">
							<li class="c-header__navbox__left__menu">
							<a href="/">TOP</a>
							</li>
							<li class="c-header__navbox__left__menu">
							<a href="/activity/">活動内容</a>
							</li>
							<li class="c-header__navbox__left__menu">
							<a href="/outline/">協会概要</a>
							</li>
							<li class="c-header__navbox__left__menu">
							<a href="/news/">お知らせ</a>
							</li>
							<li class="c-header__navbox__left__menu">
							<a href="/column/">コラム</a>
							</li>
						</ul>
						<div class="c-header__navbox__right">
						<div class="c-header__navbox__right__menu member-box">
							<a href="/membership/">会員登録</a>
						</div>
						<div class="c-header__navbox__right__menu contact-box">
							<a href="/contact/">お問い合わせ</a>
						</div>
						</div>
					</nav>



					<!--ハンバーガーメニュー -->
					<div id="js-menuToggle" class="gnav-btn">
						<div class="gnav-btn__container">
						<span></span>
						<span></span>
						<span></span>
						<!-- <p>MENU</p> -->
						</div>
					</div>
					<!-- ハンバーガーメニュー / モバイルメニュー -->
					<div id="js-menu" class="mobile-menu">
						<!-- <h2 class="mobile-menu__ttl">menu</h2> -->
						<ul class="mobile-menu__main">
							<li class="mobile-menu__item">
								<a class="mobile-menu__link" href="/">
									<span class="ja-title">TOP</span>
								</a>
							</li>
							<li class="mobile-menu__item">
								<a class="mobile-menu__link" href="/activity/">
									<span class="ja-title">活動内容</span>
								</a>
							</li>
							<li class="mobile-menu__item">
								<a class="mobile-menu__link" href="/outline/">
									<span class="ja-title">協会概要</span>
								</a>
							</li>
							<li class="mobile-menu__item">
							<a class="mobile-menu__link" href="/news/">
								<span class="ja-title">お知らせ</span>
							</a>
							</li>
							<li class="mobile-menu__item">
							<a class="mobile-menu__link" href="/column/">
								<span class="ja-title">コラム</span>
							</a>
							</li>
							<li class="mobile-menu__item">
							<a class="mobile-menu__link" href="/membership/">
								<span class="ja-title">会員登録</span>
							</a>
							</li>
							<li class="mobile-menu__item">
							<a class="mobile-menu__link" href="/contact/">
								<span class="ja-title">お問い合わせ</span>
							</a>
							</li>
						</ul>
					</div>
					</div>
				</div>
			</header>

