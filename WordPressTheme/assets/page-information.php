<?php get_header(); ?>

<!-- main visual -->
<div class="mv-underlayer">
  <div class="mv-underlayer__inner">
    <picture class="mv-underlayer__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/images/info-mv.webp" media="(min-width: 768px)" >
      <img src="<?php echo get_theme_file_uri(); ?>/images/info-mv.webp" alt="森の見える川の上にボートが浮かんでいる画像">
    </picture>
    </div>
    <div class="mv-underlayer__title">
      <h1 class=" mv-underlayer__main">Information</h1>
    </div>
  </div>
<!-- main visual -->

<!-- page-top -->
<div class="page-top">
</div>
<!-- page-top -->

<!-- main -->
  <main>
    <!-- about-content -->
     <?php if (function_exists('bcn_display')) { ?>
      <div class="breadcrumb breadcrumb-layout">
        <div class="breadcrumb__inner inner">
        <?php bcn_display(); ?>
        </div>
      </div>
    <?php } ?>

    <section class="info-content info-content-layout content-fish">
      <div class="info-content__inner inner">
        <div class="info-content__tab info-content-tab">
          <div class="info-content-tab__item js-tab-item active noscroll">
            サービス<br class="u-mobile">プラン
          </div>
          <div  class="info-content-tab__item js-tab-item noscroll">
            体験<br class="u-mobile">プラン
          </div>
          <div  class="info-content-tab__item js-tab-item noscroll">
            宿泊<br class="u-mobile">スタイル
          </div>
        </div>
        <div class="info-content__area js-tab-direct">
        <div id="tab__menu-1" class="info-content__tab-content js-content-area active">
          <div class="info-content__card info-card">
            <div class="info-card__contents">
              <h2 class="info-card__title">サービスプラン</h2>
              <div class="info-card__border border"></div>
              <p class="info-card__text">手ぶらで楽しめるキャンプを提供する当サイトでは、道具一式が揃う『レンタルフルセットプラン』と、食材・機材込みで手軽にBBQが楽しめる『BBQセットプラン』ご用意。初心者からファミリーまで、気軽に自然を満喫できます。</p>
            </div>
            <figure class="info-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/images/info-service.webp" alt="キャンプ場の焚き火の近くで椅子に座りコーヒーを飲んでいる女性の画像">
            </figure>
          </div>
        </div>
        <div id="tab__menu-2" class="info-content__tab-content js-content-area">
          <div class="info-content__card info-card">
            <div class="info-card__contents">
              <h2 class="info-card__title">体験プラン</h2>
              <div class="info-card__border border"></div>
              <p class="info-card__text">自然の魅力を丸ごと味わえる『体験プラン』。テントサウナやキャンプファイヤー、釣り体験、キャンプ飯作りなど、五感で楽しむアクティビティが満載。仲間や家族と、ここでしかできない特別な時間を過ごせます。</p>
            </div>
            <figure class="info-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/images/info-campfire.webp" alt="珊瑚礁の周りを魚の群れが泳いでいる画像">
            </figure>
          </div>
        </div>
        <div id="tab__menu-3" class="info-content__tab-content js-content-area">
          <div class="info-content__card info-card">
            <div class="info-card__contents">
              <h2 class="info-card__title">宿泊スタイル</h2>
              <div class="info-card__border border"></div>
              <p class="info-card__text">泊まって楽しむ『宿泊プラン』では、手軽に贅沢なアウトドアを満喫できるグランピング、家族みんなで楽しめるファミリーキャンプ、静かな時間を過ごすソロキャンプをご用意。スタイルに合わせて、あなたらしいキャンプ体験を。</p>
            </div>
            <figure class="info-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/images/info-stay.webp" alt="テントの中から外の森の中を見ている画像">
            </figure>
          </div>
        </div>
      </div>
      </div>
    </section>


    <!-- contact -->
    <section id="contact" class="contact contact-layout contact-fish">
      <div class="contact__inner inner">

        <div class="contact__container">
          <div class="contact__content">
            <div class="contact__img2">
              <img src="<?php echo get_theme_file_uri(); ?>/images/contact.svg" alt="CodeUps">
            </div>
            <div class="contact__box">
              <p class="contact__text">
                沖縄県那覇市1-1<br>
                TEL:0120-000-0000<br>
                営業時間:8:30-19:00<br>
                定休日:毎週火曜日<br>
              </p>
              <div class="contact__item">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.992041301909!2d127.68828337613978!3d26.229448139118073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bd0b4a42ff1%3A0x36812e0e598f7d6b!2z44CSOTAwLTAwMDUg5rKW57iE55yM6YKj6KaH5biC5aSp5LmF77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1701751290283!5m2!1sja!2sjp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="contact__content">
              <p class="contact__title">
                <span>C</span>ontact
              </p>
              <h2 class="contact__title contact__title--sub">
                お問い合わせ
              </h2>
              <p class="contact__title contact__title--sub">
                ご予約・お問い合わせはコチラ
              </p>

              <div class="contact__btn">
                <a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>" class="btn">Contact us<span class="btn__arrow"></span></a>
              </div>
          </div>

        </div>

      </div>
    </section>
    <!-- contact -->

  </main>

  <!-- main -->

<?php get_footer(); ?>