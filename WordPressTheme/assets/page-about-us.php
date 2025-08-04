<?php get_header(); ?>
<!-- main visual -->
<div class="mv-underlayer">
  <div class="mv-underlayer__inner">
    <picture class="mv-underlayer__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/images/about-pc-mv.webp" media="(min-width: 768px)" >
      <img src="<?php echo get_theme_file_uri(); ?>/images/about-sp-mv.webp" alt="シーサーの銅像の画像">
    </picture>
    </div>
    <div class="mv-underlayer__title">
      <h1 class=" mv-underlayer__main">About us</h1>
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
    <div class="breadcrumb breadcrumb-layout">
      <div class="breadcrumb__inner inner">
        <a href="index.html" class="breadcrumb__link">top</a>
        <span class="breadcrumb__arrow"></span>
        <a href="#" class="breadcrumb__link">私たちについて</a>
      </div>
    </div>

    <section class="about-content about-content-layout content-fish">
        <div class="about__inner inner">
          <div class="about-content__wrapper about">
          <div class="about__content">
            <div class="about__img1 about__img1--sm u-desktop">
              <img src="<?php echo get_theme_file_uri(); ?>/images/ocean1.webp" alt="オレンジ色と白色の屋根の上に、シーサーの置物が置いてある画像">
            </div>
            <div class="about__img1 about__img1--lg about__img1--about-page">
              <img src="<?php echo get_theme_file_uri(); ?>/images/ocean2.webp" alt="海の中を2匹の黄色い魚が泳いでいる画像">
            </div>
          </div>
            <div class="about__box about__box--about-page">
              <h2 class="about__text about__text--about-page">Dive into<br>the Ocean</h2>
              <div class="about__box2 about__box2--about-page">
                <p class="about__text about__text--sm">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                </div>
              </div>
              </div>
            </div>
    </section>
    <!-- /about-content -->
    <!-- about-gallery -->
    <section class="about-gallery about-gallery-layout">
      <div class="about-gallery__inner inner">
      <div class="about-gallery__title section-title">
        <h2 class="section-title__main">
        <p>Gallery</p>
        </h2>
        <p class="section-title__sub">
          フォト
        </p>
      </div>
      <ul class="about-gallery__list">
        <?php
          $imgGroup = SCF::get('galleryGroup');
          foreach ($imgGroup as $index => $fields) :
            $imgurl = wp_get_attachment_image_src($fields['gallery_1'], 'large');
        ?>
          <li class="about-gallery__list-item js-modal-open" data-target="<?php echo $index + 1; ?>">
            <?php if (empty($fields['gallery_1'])) : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.webp" alt="画像がありません">
            <?php else : ?>
              <img src="<?php echo esc_url($imgurl[0]); ?>" alt="ギャラリー画像<?php echo $index + 1; ?>">
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>

      <?php
          $imgGroup = SCF::get('modalGroup');
          foreach ($imgGroup as $index => $fields) :
            $imgurl = wp_get_attachment_image_src($fields['modal'], 'large');?>
            <?php if (empty($fields['modal'])) : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.webp" alt="画像がありません">
            <?php else : ?>
              <div id="<?php echo $index + 1; ?>" class="about-gallery-modal modal js-modal">
              <div class="modal__inner
              <?php if ((($index + 1) % 6) === 0) echo 'modal__inner--hight'; ?>
              <?php if (($index % 6) === 0)
              echo 'modal__inner--hight'; ?>
               ">
                <img src="<?php echo esc_url($imgurl[0]); ?>" alt="ギャラリー画像">
                </div>
              </div>
             <?php endif; ?>
        <?php endforeach; ?>

    </div>
    </section>
    <!-- /about-gallery -->
    <!-- about-page -->

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
                <a href="#" class="btn">Contact us<span class="btn__arrow"></span></a>
              </div>
          </div>

        </div>

      </div>
    </section>
    <!-- contact -->

  </main>

  <!-- main -->
  <?php get_footer(); ?>