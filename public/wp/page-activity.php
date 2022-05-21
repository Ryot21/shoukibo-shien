
<?php
/*
Template Name: ACTIVITY template
*/
	get_header();
?>


<?php get_template_part('module/mainvisual'); ?>
<div class="l-container">
  <!-- パンくず -->
  <?php get_template_part('module/breadcrumbs'); ?>

  <div class="l-container__inner">
    <div class="l-container__wrapper">
        <!-- ①有益な情報発信と仕業専門家による情報共有 -->
        <section id="activity-1" class="p-activity-block section-block">
          <h2 class="p-activity-block_title">有益な情報発信</h2>
          <div class="p-activity-block-wrap">
            <div class="p-activity-block_img activity-1">
              <img src="<?php bloginfo('template_url'); ?>/images/activity/jouhou-kyouyu-kaizen-min.png" class="PC" alt="会員様に向けた有益な情報発信">
              <img src="<?php bloginfo('template_url'); ?>/images/activity/activity-2-sp@2x-min.png" class="SP" alt="会員様に向けた有益な情報発信">

            </div>
          </div>
        </section>
        <!-- 財務相談 -->
        <section id="activity-2" class="p-activity-block section-block">
          <h2 class="p-activity-block_title">財務相談</h2>
          <div class="p-activity-block-wrap">
            <div class="p-activity-block_img activity-2">
              <img src="<?php bloginfo('template_url'); ?>/images/activity/cosutomondai-kaizen-min.png" class="PC" alt="コストや財務問題の解決">
              <img src="<?php bloginfo('template_url'); ?>/images/activity/activity-1-sp@2x-min.png" class="SP" alt="コストや財務問題の解決">

            </div>
          </div>

        </section>
        <!-- 提携先の紹介と法人化サポート -->
        <section id="activity-3" class="p-activity-block section-block">
          <h2 class="p-activity-block_title">提携先の紹介と<br class="SP">法人化サポート</h2>
          <div class="p-activity-block-wrap">
            <div class="p-activity-block_img activity-3">
              <img src="<?php bloginfo('template_url'); ?>/images/activity/support-kaizen-min.png" class="PC" alt="提携先の紹介と法人化サポート">
              <img src="<?php bloginfo('template_url'); ?>/images/activity/activity-3-sp@2x-min.png" class="SP" alt="提携先の紹介">
            </div>
            <div class="p-activity-block_img activity-3 SP">
              <img src="<?php bloginfo('template_url'); ?>/images/activity/activity-4-sp@2x-min.png" class="SP" alt="法人化サポート">
            </div>
          </div>

        </section>
    </div>
  </div>
</div>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

