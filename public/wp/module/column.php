<li class="p-card">
	<a href="<?php the_permalink(); ?>" class="p-card_link">
		<div class="p-card__thumbnail">
			<?php if(has_post_thumbnail()): ?>
				<?php the_post_thumbnail('catthumb'); ?>
			<?php else: ?>
				<img src="<?php bloginfo('template_url'); ?>/images/pic/no-img_640*480.png" alt="画像がありません。">
			<?php endif; ?>
		</div>
		<div class="p-card_data">
			<p class="p-card_data__day"><?php the_time('Y.m.d'); ?></p>
			<p class="p-card_data__text"><?php the_title(); ?></p>
		</div>
	</a>
</li>