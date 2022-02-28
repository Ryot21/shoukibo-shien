
<!-- menu 固定ページ -->
<?php
/*
Template Name: MEMBERSHIP template
*/
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
				<div class="contact-block section-block">

						<?php the_content(); ?>

				</div>
			</div>
	</div>

</div>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

