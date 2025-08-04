<?php get_header(); ?>

<!-- main visual -->
<div class="mv-underlayer">
  <div class="mv-underlayer__inner">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/images/contact-pc-mv.webp" media="(min-width: 768px)" >
      <img src="<?php echo get_theme_file_uri(); ?>/images/contact-sp-mv.webp" alt="エメラルドグリーンの海と
      白い砂浜の画像">
    </picture>
    </div>
    <div class="mv-underlayer__title">
      <h1 class=" mv-underlayer__main">Contact</h1>
    </div>
  </div>
<!-- main visual -->

<!-- page-top -->
<div class="page-top">
</div>
<!-- page-top -->

<!-- main -->
  <main>
    <!-- thanks-page -->
   <?php if (function_exists('bcn_display')) { ?>
      <div class="breadcrumb breadcrumb-layout">
        <div class="breadcrumb__inner inner">
        <?php bcn_display(); ?>
        </div>
      </div>
    <?php } ?>
    <div class="thanks-content thanks-content-layout content-fish">
      <div class="thanks-content__inner inner">
        <div class="thanks-content__wrapper">
          <p class="thanks-content__text">
            お問い合わせ内容を送信完了しました。
          </p>
          <p class="thanks-content__text">
            このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
            お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
            また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。
          </p>
        </div>
      </div>
    </div>
    <!-- thanks-page -->

  </main>

  <!-- main -->

<?php get_footer(); ?>