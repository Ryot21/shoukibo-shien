
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
					<!-- 投稿されているカテゴリー表示 -->
					<?php get_template_part('module/category'); ?>

					<ul class="column-lists">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<?php get_template_part('module/column'); ?>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<?php get_template_part('module/pagination'); ?>
					<?php wp_reset_postdata(); ?>

				</div>
			</div>
	</div>

</div>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

