
<?php

	get_header();
?>

<!-- ここからコンテンツ -->
<!-- メインビジュアル -->
<?php get_template_part('module/mainvisual'); ?>
<div class="l-container">
	<!-- パンくず -->
	<?php get_template_part('module/breadcrumbs'); ?>



	<div class="l-container__inner">
			<div class="l-container__wrapper">
				<!-- コラムセクション -->
				<div class="column-block section-block">

					<?php if(have_posts()): while(have_posts()): the_post(); ?>
						<!-- コラムタイトル -->
						<div class="page-column-header">
							<h2 class="page-column-header__title"><?php the_title(); ?></h2>
						</div>
						<p class="page-column-header__date">投稿日：<?php the_time('Y.m.d'); ?></p>
						<!-- コンテンツ部分 -->
						<div class="page-column__content">
							<?php the_content(); ?>
						</div>

					<?php endwhile; ?>
					<?php get_template_part( 'pagination'); ?>
					<?php endif; ?>

				</div>
			</div>
	</div>

</div>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

