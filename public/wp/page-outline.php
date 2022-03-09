
<?php
/*
Template Name: OUTLINE template
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
        <div class="outline-block section-block">


          <div class="c-table c-table__default">
            <dl class="c-table__row">
              <dt>協会名</dt>
              <dd>一般社団法人 小規模事業者支援協会</dd>
            </dl>
            <dl class="c-table__row">
              <dt>設立</dt>
              <dd>2021年8月</dd>
            </dl>
            <dl class="c-table__row">
              <dt>所在地</dt>
              <dd>〒101-0021 <br class="">東京都千代田区外神田2丁目2-17喜助お茶の水ビル94</dd>
            </dl>
            <dl class="c-table__row">
              <dt>電話番号</dt>
              <dd>03-6262-9457</dd>
            </dl>
            <dl class="c-table__row">
              <dt>発起人</dt>
              <dd>江本 一郎</dd>
            </dl>
            <dl class="c-table__row">
              <dt>活動内容</dt>
              <dd>テキストテキストテキストテキスト</dd>
            </dl>
            <dl class="c-table__row">
              <dt>活動内容</dt>
              <dd>小規模事業者支援、情報発信</dd>
            </dl>
          </div>
        </div>
    </div>
  </div>
</div>

<!-- ここまでコンテンツ -->

<?php get_footer(); ?>

