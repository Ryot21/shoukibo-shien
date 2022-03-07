
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
					<p class="intro-block_flex__left__text">一般社団法人小規模事業者支援協会は主に小規模事業者の発展に役立つ情報を提供するプラットホームとなることを目指し、小規模事業者の社会地位や生活水準の向上を目的としています。小規模事業者が活動していく上での税務や財務などの煩雑で専門的な 問題をクリアし、
						本業に専念できるようサポートしています。</p>
					<p style="text-align: center;">一般社団法人 小規模事業者支援協会<br>発起人 江本一朗</p>
					</div>
					<!-- 右 -->
					<div class="intro-block_flex__right">
					<div class="intro-block_flex__right__img">
						<img src="<?php bloginfo('template_url'); ?>/images/pic/no-img_640*480.png" alt="サンプル画像">
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
						初めてのフリーランスで不安…<br>
						仕事に集中したい…</p>
					<p class="worries-block_flex__right__text">小規模事業者支援協会は、サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
					</div>
				</div>
			</section>
		</div>
		<!-- カードセクション > 活動内容ブロック -->
		<div class="section-block">
			<section class="activity-block section-block__card swiper-container">
				<h2 class="activity-block_title section-block_title">ACTIVITY</h2>
				<ul class="activity-block_lists swiper-wrapper">
					<!-- 1 -->
					<li class="activity-block_list swiper-slide">
					<!-- <a class="activity-block_list__link" href="/activity/#activity-1"> -->
						<!-- 画像 -->
						<div class="activity-item__thumb">
							<img src="<?php bloginfo('template_url'); ?>/images/activity/activity-01-re.png" alt="経費削減">
						</div>
						<!-- テキスト -->
						<div class="activity-item__bottombox">
						<h3 class="activity-item__title">1.経費削減</h3>
						<p class="activity-item__text">当協会では、経営上の固定費の削減をサポートします。<br>&nbsp;<br>&nbsp;</p>
						</div>
					<!-- </a> -->
					</li>
					<!-- 2 -->
					<li class="activity-block_list swiper-slide">
					<!-- <a class="activity-block_list__link" href="/activity/#activity-2"> -->
						<!-- 画像 -->
						<div class="activity-item__thumb">
							<img src="<?php bloginfo('template_url'); ?>/images/activity/activity-02-re.png" alt="財務問題の解決">
						</div>
						<!-- テキスト -->
						<div class="activity-item__bottombox">
							<h3 class="activity-item__title">2.財務問題の解決</h3>
							<p class="activity-item__text">資金調達やキャッシュフローなどのサポート内容によっては別途費用がかかる場合があります。<br>　</p>
						</div>
					<!-- </a> -->
					</li>
					<!-- 3 -->
					<li class="activity-block_list swiper-slide">
					<!-- <a class="activity-block_list__link" href="/activity/#activity-3"> -->
						<!-- 画像 -->
						<div class="activity-item__thumb">
							<img src="<?php bloginfo('template_url'); ?>/images/activity/activity-03-re.png" alt="税務知識や税金削減">
						</div>
						<!-- テキスト -->
						<div class="activity-item__bottombox">
							<h3 class="activity-item__title">3.税務知識や税金削減</h3>
							<p class="activity-item__text">親正しい税務知識を身に着けることによって、適切な申請や経費の計上漏れを防ぐことが出来ます。<br>&nbsp;</p>
						</div>
					<!-- </a> -->
					</li>
					<!-- 4 -->
					<li class="activity-block_list swiper-slide">
					<!-- <a class="activity-block_list__link" href="/activity/#activity-4"> -->
						<!-- 画像 -->
						<div class="activity-item__thumb">
							<img src="<?php bloginfo('template_url'); ?>/images/activity/activity-04-re.png" alt="法人化サポート">
						</div>
						<!-- テキスト -->
						<div class="activity-item__bottombox">
						<h3 class="activity-item__title">4.法人化サポート</h3>
						<p class="activity-item__text">親事業の拡大で法人化する場合の適切なアドバイスや法人化の設立サポートをします。<br>&nbsp;<br>&nbsp;</p>
						</div>
					<!-- </a> -->
					</li>
					<!-- 5 -->
					<li class="activity-block_list swiper-slide">
					<!-- <a class="activity-block_list__link" href="/activity/#activity-5"> -->
						<!-- 画像 -->
						<div class="activity-item__thumb">
							<img src="<?php bloginfo('template_url'); ?>/images/activity/activity-05-re.png" alt="特別料金での紹介">
						</div>
						<!-- テキスト -->
						<div class="activity-item__bottombox">
						<h3 class="activity-item__title">5.特別料金での紹介</h3>
						<p class="activity-item__text">弊社と提携している士業は通常の料金とは別に割安でご紹介ができます。<br>&nbsp;<br>&nbsp;</p>
						</div>
					<!-- </a> -->
					</li>
					<!-- 6 -->
					<li class="activity-block_list swiper-slide">
					<!-- <a class="activity-block_list__link" href="/activity/#activity-6"> -->
						<!-- 画像 -->
						<div class="activity-item__thumb">
							<img src="<?php bloginfo('template_url'); ?>/images/activity/activity-06-re.png" alt="ブログ機能">
						</div>
						<!-- テキスト -->
						<div class="activity-item__bottombox">
						<h3 class="activity-item__title">6.ブログ機能</h3>
						<p class="activity-item__text">個人事業主の方々へ有益な情報発信を見ることができます<br>&nbsp;<br>&nbsp;</p>
						</div>
					<!-- </a> -->
					</li>
				</ul>
				<!-- ページネーション（※省略可） -->
				<div class="swiper-pagination"></div>
				<!-- ナビゲーションボタン（※省略可） -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>

				<div class="section-block__btn">
				<a href="/activity/">詳しく見る</a>
				</div>
			</section>
		</div>
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

<!-- パートナーセクション -->
<div class="l-container_sec">
  <div class="l-container_sec__inner">
    <section class="partner-block section-block">
        <h2 class="partner-block_title section-block_title">PARTNER</h2>
        <ul class="partner-lists">
          <!-- Aサンプル税理士事務所 -->
          <li class="partner-list">
            <a class="partner-list__link" href="#">
              <div class="partner-block_flex">
                <!-- 左 -->
                <div class="partner-block_flex__left">
                  <div class="partner-block_flex__left__img">
                    <img src="<?php bloginfo('template_url'); ?>/images/pic/no-img_300*300.png" alt="">
                  </div>
                  <!-- <img src="" alt=""> -->
                </div>
                <!-- 右 -->
                <div class="partner-block_flex__right">
                  <h3 class="partner-block_flex__right__title">Aサンプル税理士事務所</h3>
                  <p class="partner-block_flex__right__text">Aサンプル税理士事務所は、サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
                </div>
            </div>
            </a>
          </li>
          <!-- Bサンプル税理士事務所 -->
          <li class="partner-list">
            <a class="partner-list__link" href="#">
              <div class="partner-block_flex">
                <!-- 左 -->
                <div class="partner-block_flex__left">
                  <div class="partner-block_flex__left__img">
                    <img src="<?php bloginfo('template_url'); ?>/images/pic/no-img_300*300.png" alt="">
                  </div>
                </div>
                <!-- 右 -->
                <div class="partner-block_flex__right">
                  <h3 class="partner-block_flex__right__title">Bサンプル税理士事務所</h3>
                  <p class="partner-block_flex__right__text">Bサンプル税理士事務所は、サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
                </div>
            </div>
            </a>
          </li>
          <!-- Cサンプル税理士事務所 -->
          <li class="partner-list">
            <a class="partner-list__link" href="#">
              <div class="partner-block_flex">
                <!-- 左 -->
                <div class="partner-block_flex__left">
                  <div class="partner-block_flex__left__img">
                    <img src="<?php bloginfo('template_url'); ?>/images/pic/no-img_300*300.png" alt="">
                  </div>
                </div>
                <!-- 右 -->
                <div class="partner-block_flex__right">
                  <h3 class="partner-block_flex__right__title">Cサンプル税理士事務所</h3>
                  <p class="partner-block_flex__right__text">Cサンプル税理士事務所は、サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
                </div>
            </div>
            </a>
          </li>
          <!-- Dサンプル税理士事務所 -->
          <li class="partner-list">
            <a class="partner-list__link" href="#">
              <div class="partner-block_flex">
                <!-- 左 -->
                <div class="partner-block_flex__left">
                  <div class="partner-block_flex__left__img">
                    <img src="<?php bloginfo('template_url'); ?>/images/pic/no-img_300*300.png" alt="">
                  </div>
                </div>
                <!-- 右 -->
                <div class="partner-block_flex__right">
                  <h3 class="partner-block_flex__right__title">Dサンプル税理士事務所</h3>
                  <p class="partner-block_flex__right__text">Dサンプル税理士事務所は、サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
                </div>
            </div>
            </a>
          </li>
          <!-- Eサンプル税理士事務所 -->
          <li class="partner-list">
            <a class="partner-list__link" href="#">
              <div class="partner-block_flex">
                <!-- 左 -->
                <div class="partner-block_flex__left">
                  <div class="partner-block_flex__left__img">
                    <img src="<?php bloginfo('template_url'); ?>/images/pic/no-img_300*300.png" alt="">
                  </div>
                </div>
                <!-- 右 -->
                <div class="partner-block_flex__right">
                  <h3 class="partner-block_flex__right__title">Eサンプル税理士事務所</h3>
                  <p class="partner-block_flex__right__text">Eサンプル税理士事務所は、サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
                </div>
            </div>
            </a>
          </li>
          <!-- Fサンプル税理士事務所 -->
          <li class="partner-list">
            <a class="partner-list__link" href="#">
              <div class="partner-block_flex">
                <!-- 左 -->
                <div class="partner-block_flex__left">
                  <div class="partner-block_flex__left__img">
                    <img src="<?php bloginfo('template_url'); ?>/images/pic/no-img_300*300.png" alt="">
                  </div>
                </div>
                <!-- 右 -->
                <div class="partner-block_flex__right">
                  <h3 class="partner-block_flex__right__title">Fサンプル税理士事務所</h3>
                  <p class="partner-block_flex__right__text">Fサンプル税理士事務所は、サンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキストサンプルテキスト</p>
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
		</ul>
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