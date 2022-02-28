
<?php
/*
Template Name: NEWS template
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
				<div class="column-block section-block">


					<ul class="news-lists">
						<?php
							$args = array(
								'post_type' => 'news',
								'paged' => $paged,
								'posts_per_page' => '8'
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

				</div>
			</div>
	</div>

</div>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

