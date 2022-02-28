
<?php

get_header();
?>

<!-- ここからコンテンツ -->
<!-- メインビジュアル -->
<?php get_template_part('module/mainvisual'); ?>

<div class="l-container">
<div class="l-container__inner">
	<!-- お知らせセクション -->
	<section class="news-block section-block">
		<h2 class="news-block_title section-block_title">NEWS</h2>

		<ul class="news-lists">
					<?php
						$args = array(
							'post_type' => 'news',
							'paged' => $paged,
							'posts_per_page' => '4'
						);
					?>
					<?php query_posts( $args ); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php get_template_part('module/news'); ?>
					<?php endwhile; ?>
					<?php endif; ?>
				</ul>
				<?php get_template_part('module/pagination'); ?>
				<?php wp_reset_postdata(); ?>
		<div class="section-block__btn">
		<a href="/news/">詳しく見る</a>
		</div>
	</section>
	<!-- カードセクション > ごあいさつブロック -->
	<div class="section-block">
		<section class="intro-block section-block__card">
			<h2 class="intro-block_title section-block_title">INTRODUCTION</h2>
			<div class="intro-block_flex">
				<!-- 左 -->
				<div class="intro-block_flex__left">
				<p class="intro-block_flex__left__text">一般社団法人小規模事業者支援協会は主に小規模事業者の発展に役立つ情報を提供するプラットホームとなることを目指し、小規模事業者の社会地位や生活水準の向上を目的としています。小規模事業者が活動していく上での課題や専門的のある問題をクリアし、 本業に専念できるようサポート致します。</p>
				<p style="text-align: center;">一般社団法人 小規模事業者支援協会<br>発起人 江本一朗</p>
				</div>
				<!-- 右 -->
				<div class="intro-block_flex__right">
				<div class="intro-block_flex__right__img">
					<img src="<?php bloginfo('template_url'); ?>/images/pic/goaisatu.jpeg" alt="ご挨拶">
				</div>
				</div>
			</div>
		</section>
	</div>
	<!-- カードセクション > 悩みブロック -->
	<div class="section-block">
		<section class="worries-block section-block__card">
			<h2 class="worries-block_title">こんなお悩みはありませんか？</h2>
			<div class="worries-block_flex">
				<!-- 左 -->
				<div class="worries-block_flex__left">
				<div class="worries-block_flex__left__img">
					<img src="<?php bloginfo('template_url'); ?>/images/pic/top-nayami.jpg" alt="悩む女性">
				</div>
				</div>
				<!-- 右 -->
				<div class="worries-block_flex__right">
				<p class="worries-block_flex__right__title">
				フリーランスになって会社員との違いがどこかわからず不安<br>
				確定申告や税務処理が不安<br>
				社会保険から国保になって手続きがわからない、また何が違うのかわからない<br>
				保険や税金のコストが高い<br>
				
			</p>
				<!-- <p class="worries-block_flex__right__text">小規模事業者支援協会は、サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p> -->
				</div>
			</div>
		</section>
	</div>
	<!-- カードセクション > 活動内容ブロック XX -->
	<!-- <div class="section-block">
		<section class="activity-block section-block__card swiper-container">
			<h2 class="activity-block_title section-block_title">ACTIVITY</h2>
			<ul class="activity-block_lists swiper-wrapper">
				<li class="activity-block_list swiper-slide">
					<div class="activity-item__thumb">
						<img src="<?php bloginfo('template_url'); ?>/images/activity/activity-01-re.png" alt="経費削減">
					</div>
					<div class="activity-item__bottombox">
					<h3 class="activity-item__title">1.経費削減</h3>
					<p class="activity-item__text">当協会では、経営上の固定費の削減をサポートします。<br>&nbsp;<br>&nbsp;</p>
					</div>
				</li>
				<li class="activity-block_list swiper-slide">
					<div class="activity-item__thumb">
						<img src="<?php bloginfo('template_url'); ?>/images/activity/activity-02-re.png" alt="財務問題の解決">
					</div>
					<div class="activity-item__bottombox">
						<h3 class="activity-item__title">2.財務問題の解決</h3>
						<p class="activity-item__text">資金調達やキャッシュフローなどのサポート内容によっては別途費用がかかる場合があります。<br>　</p>
					</div>
				</li>
				<li class="activity-block_list swiper-slide">
					<div class="activity-item__thumb">
						<img src="<?php bloginfo('template_url'); ?>/images/activity/activity-03-re.png" alt="税務知識や税金削減">
					</div>
					<div class="activity-item__bottombox">
						<h3 class="activity-item__title">3.税務知識や税金削減</h3>
						<p class="activity-item__text">親正しい税務知識を身に着けることによって、適切な申請や経費の計上漏れを防ぐことが出来ます。<br>&nbsp;</p>
					</div>
				</li>
				<li class="activity-block_list swiper-slide">
					<div class="activity-item__thumb">
						<img src="<?php bloginfo('template_url'); ?>/images/activity/activity-04-re.png" alt="法人化サポート">
					</div>
					<div class="activity-item__bottombox">
					<h3 class="activity-item__title">4.法人化サポート</h3>
					<p class="activity-item__text">親事業の拡大で法人化する場合の適切なアドバイスや法人化の設立サポートをします。<br>&nbsp;<br>&nbsp;</p>
					</div>
				</li>
				<li class="activity-block_list swiper-slide">
					<div class="activity-item__thumb">
						<img src="<?php bloginfo('template_url'); ?>/images/activity/activity-05-re.png" alt="特別料金での紹介">
					</div>
					<div class="activity-item__bottombox">
					<h3 class="activity-item__title">5.特別料金での紹介</h3>
					<p class="activity-item__text">弊社と提携している士業は通常の料金とは別に割安でご紹介ができます。<br>&nbsp;<br>&nbsp;</p>
					</div>
				</li>
				<li class="activity-block_list swiper-slide">
					<div class="activity-item__thumb">
						<img src="<?php bloginfo('template_url'); ?>/images/activity/activity-06-re.png" alt="ブログ機能">
					</div>
					<div class="activity-item__bottombox">
					<h3 class="activity-item__title">6.ブログ機能</h3>
					<p class="activity-item__text">個人事業主の方々へ有益な情報発信を見ることができます<br>&nbsp;<br>&nbsp;</p>
					</div>
				</li>
			</ul>
			<div class="swiper-pagination"></div>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

			<div class="section-block__btn">
			<a href="/activity/">詳しく見る</a>
			</div>
		</section>
	</div> -->
	<!-- お問い合わせセクション -->
	<div class="contact-block section-block">
		<div class="contact-block_flex">
			<!-- 左 -->
			<div class="contact-block_flex__left">
			<div class="contact-block_flex__left__img">
				<img src="<?php bloginfo('template_url'); ?>/images/pic/top-contact.jpeg" alt="お問い合わせ">
			</div>
			</div>
			<!-- 右 -->
			<div class="contact-block_flex__right">
			<p class="contact-block_flex__right__title">
				ご不明な点は<br>
				お気軽にお問い合わせください
			</p>
			<p class="contact-block_flex__right__text">小規模事業者支援協会は、サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
			<div class="section-block_flex">
				<div class="section-block_flex__btn">
				<a href="#">会員登録</a>
				</div>
				<div class="section-block_flex__btn contact-box">
				<a href="#">お問い合わせ</a>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- 活動内容セクション -->
<div class="l-container_sec">
<div class="l-container_sec__inner">
<section class="partner-block section-block">
	<h2 class="partner-block_title section-block_title">PARTNER</h2>
	<ul class="partner-lists">
	  <!-- 小規模事業者に有益な情報の発信 -->
	  <li class="partner-list">
		<a class="partner-list__link" href="#">
		  <div class="partner-block_flex">
			<!-- 左 -->
			<div class="partner-block_flex__left">
			  <div class="partner-block_flex__left__img">
			  <img src="<?php bloginfo('template_url'); ?>/images/activity/activity-06-re.png" alt="ブログ機能">
			  </div>
			  <!-- <img src="" alt=""> -->
			</div>
			<!-- 右 -->
			<div class="partner-block_flex__right">
			  <h3 class="partner-block_flex__right__title">小規模事業者に有益な情報の発信</h3>
			  <p class="partner-block_flex__right__text">会社員時代との違いや事業主としての注意点
個人事業主から定期的に要望を頂き、回答を公開している</p>
			</div>
		</div>
		</a>
	  </li>
	  <!-- コストの削減 -->
	  <li class="partner-list">
		<a class="partner-list__link" href="#">
		  <div class="partner-block_flex">
			<!-- 左 -->
			<div class="partner-block_flex__left">
			  <div class="partner-block_flex__left__img">
			  <img src="<?php bloginfo('template_url'); ?>/images/activity/activity-01-re.png" alt="経費削減">
			  </div>
			</div>
			<!-- 右 -->
			<div class="partner-block_flex__right">
			  <h3 class="partner-block_flex__right__title">コストの削減</h3>
			  <p class="partner-block_flex__right__text">日々の活動の中の販管費の削減 税務上の経費漏れが無いように情報共有</p>
			</div>
		</div>
		</a>
	  </li>
	  <!-- 財務問題の解決 -->
	  <li class="partner-list">
		<a class="partner-list__link" href="#">
		  <div class="partner-block_flex">
			<!-- 左 -->
			<div class="partner-block_flex__left">
			  <div class="partner-block_flex__left__img">
			  <img src="<?php bloginfo('template_url'); ?>/images/activity/activity-02-re.png" alt="財務問題の解決">
			  </div>
			</div>
			<!-- 右 -->
			<div class="partner-block_flex__right">
			  <h3 class="partner-block_flex__right__title">財務問題の解決</h3>
			  <p class="partner-block_flex__right__text">個人事業主は年金が少ない…将来の為にiDeCoやNISAをやりたいが内容わからない…将来の年金額を資産して欲しい…協会と提携のファイナンシャルプランナーや社労士が解決します。</p>
			</div>
		</div>
		</a>
	  </li>
	  <!-- 士業専門家による情報共有 -->
	  <li class="partner-list">
		<a class="partner-list__link" href="#">
		  <div class="partner-block_flex">
			<!-- 左 -->
			<div class="partner-block_flex__left">
			  <div class="partner-block_flex__left__img">
			  <img src="<?php bloginfo('template_url'); ?>/images/activity/activity-03-re.png" alt="税務知識や税金削減">
			  </div>
			</div>
			<!-- 右 -->
			<div class="partner-block_flex__right">
			  <h3 class="partner-block_flex__right__title">士業専門家による情報共有</h3>
			  <p class="partner-block_flex__right__text">協会は税理士、弁護士、司法書士、社労士などの専門士業と業務提携し、定期的に会員様にセミナー形式で情報提供をしております。</p>
			</div>
		</div>
		</a>
	  </li>
	  <!-- 法人化サポート -->
	  <li class="partner-list">
		<a class="partner-list__link" href="#">
		  <div class="partner-block_flex">
			<!-- 左 -->
			<div class="partner-block_flex__left">
			  <div class="partner-block_flex__left__img">
			  <img src="<?php bloginfo('template_url'); ?>/images/activity/activity-04-re.png" alt="法人化サポート">
			  </div>
			</div>
			<!-- 右 -->
			<div class="partner-block_flex__right">
			  <h3 class="partner-block_flex__right__title">法人化サポート</h3>
			  <p class="partner-block_flex__right__text">一定の売上を上げた事業主様は法人化のサポートもしております。</p>
			</div>
		</div>
		</a>
	  </li>
	  <!-- 提携先や案件の紹介 -->
	  <li class="partner-list">
		<a class="partner-list__link" href="#">
		  <div class="partner-block_flex">
			<!-- 左 -->
			<div class="partner-block_flex__left">
			  <div class="partner-block_flex__left__img">
			  <img src="<?php bloginfo('template_url'); ?>/images/activity/activity-05-re.png" alt="特別料金での紹介">
			  </div>
			</div>
			<!-- 右 -->
			<div class="partner-block_flex__right">
			  <h3 class="partner-block_flex__right__title">提携先や案件の紹介</h3>
			  <p class="partner-block_flex__right__text">会員様は士業との顧問契約やスポットのご依頼を特別価格で受けて頂くことが出来ます。</p>
			</div>
		</div>
		</a>
	  </li>
	</ul>
</section>
</div>
</div>

<!-- コラムセクション -->
<div class="l-container_thr">
<div class="l-container_thr__inner">
<section class="column-block section-block">
	<h2 class="column-block_title section-block_title">COLUMN</h2>
	<ul class="column-lists">
		<?php
			$args = array(
				'post_type' => 'post',
				'paged' => $paged,
				'posts_per_page' => '3'
			);
		?>
		<?php query_posts( $args ); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part('module/column'); ?>
		<?php endwhile; ?>
		<?php endif; ?>
	<?php wp_reset_postdata(); ?>
	</ul>
	<div class="section-block__btn">
	  <a href="/column/">詳しく見る</a>
	</div>
</section>
</div>
</div>
<!-- ここまでコンテンツ -->


<?php get_footer(); ?>
