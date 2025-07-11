<?php get_header(); ?>

    <div class="hamburger u-mobile js-hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="drawer-menu js-drawer">
      <div class="drawer-menu__inner inner">
        <div class="drawer-menu__menu">
          <div class="drawer-menu__container">
            <div class="drawer-menu__items-1">
              <ul class="drawer-menu__item">
                <li class="drawer-menu__term">
                  <div class="drawer-menu__img2">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                  </div>
                <a href="campaign.html" class="drawer-menu__link">キャンペーン</a>
                </li>
                <li class="drawer-menu__description"><a href="./campaign.html#tab__menu-2" class="drawer-menu__link">ライセンス取得</a></li>
                <li class="drawer-menu__description"><a href="./campaign.html#tab__menu-3" class="drawer-menu__link">貸切体験ダイビング</a></li>
                <li class="drawer-menu__description"><a href="./campaign.html#tab__menu-4" class="drawer-menu__link">ナイトダイビング</a></li>
              </ul>
            <ul class="drawer-menu__item">
              <li class="drawer-menu__term">
                <div class="drawer-menu__img2">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                </div>
                <a href="about.html" class="drawer-menu__link">私たちについて</a>
              </li>
            </ul>
            </div>
            <div class="drawer-menu__items-2">
            <ul class="drawer-menu__item">
              <li class="drawer-menu__term">
                <div class="drawer-menu__img2">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                </div>
                <a href="<?php echo get_permalink( get_page_by_path('information') ); ?>information.html" class="drawer-menu__link">ダイビング情報</a>
              </li>
              <li class="drawer-menu__description"><a href="./infomation.html#tab__menu-1" class="drawer-menu__link">ライセンス講習</a></li>
              <li class="drawer-menu__description"><a href="./infomation.html#tab__menu-3" class="drawer-menu__link">体験ダイビング</a></li>
              <li class="drawer-menu__description"><a href="./infomation.html#tab__menu-2" class="drawer-menu__link">ファンダイビング</a></li>
            </ul>
            <ul class="drawer-menu__item">
              <li class="drawer-menu__term">
                <div class="drawer-menu__img2">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                </div>
                <a href="./blog.html" class="footer__link">ブログ</a>
              </li>
            </ul>
            </div>
            <div class="drawer-menu__items-3">
                <ul class="drawer-menu__item">
                  <li class="drawer-menu__term">
                    <div class="drawer-menu__img2">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                    </div>
                  <a href="./voice.html" class="drawer-menu__link">お客様の声</a>
                  </li>
                </ul>
                <ul class="drawer-menu__item">
                  <li class="drawer-menu__term">
                    <div class="drawer-menu__img2">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                    </div>
                    <a href="./price.html" class="drawer-menu__link">料金一覧</a>
                  </li>
                  <li class="drawer-menu__description"><a href="./price.html#plice1" class="drawer-menu__link">ライセンス講習</a></li>
                  <li class="drawer-menu__description"><a href="./price.html#plice2" class="drawer-menu__link">体験ダイビング</a></li>
                  <li class="drawer-menu__description"><a href="./price.html#plice3" class="drawer-menu__link">ファンダイビング</a></li>
                </ul>
            </div>
            <div class="drawer-menu__items-4">
              <ul class="drawer-menu__item">
                <li class="drawer-menu__term">
                  <div class="drawer-menu__img2">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                  </div>
                  <a href="./faq.html" class="drawer-menu__link">よくある質問</a>
                </li>
              </ul>
              <ul class="drawer-menu__item">
                <li class="drawer-menu__term">
                    <div class="drawer-menu__img2">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                    </div>
                  <a href="policy.html" class="drawer-menu__link">プライバシー<br class="u-mobile">ポリシー</a>
                </li>
              </ul>
              <ul class="drawer-menu__item">
                <li class="drawer-menu__term">
                    <div class="footer__img2">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                    </div>
                    <a href="terms.html" class="drawer-menu__link">利用規約</a>
                </li>
              </ul>
              <ul class="drawer-menu__item">
                <li class="drawer-menu__term">
                  <div class="drawer-menu__img2">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                  </div>
                  <a href="./contact.html" class="drawer-menu__link">お問い合わせ</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- header -->

<!-- main visual -->
<div class="mv">
  <div class="mv__inner">
    <div class="mv__slider js-mv-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <picture>
            <?php
              $image = get_field('sp_1');
              if ($image) : ?>
                <source srcset="<?php echo esc_url($image['url']); ?>" media="(max-width: 768px)" >
              <?php endif; ?>
            <?php
              $image = get_field('pc_1');
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
              <?php endif; ?>
          </picture>
        </div>
        <div class="swiper-slide">
        <picture>
          <?php
            $image = get_field('sp_2');
            if ($image) : ?>
              <source srcset="<?php echo esc_url($image['url']); ?>" media="(max-width: 768px)" >
            <?php endif; ?>
            <?php
              $image = get_field('pc_2');
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
              <?php endif; ?>
          </picture>
        </div>
       <div class="swiper-slide">
       <picture>
          <?php
            $image = get_field('sp_3');
            if ($image) : ?>
              <source srcset="<?php echo esc_url($image['url']); ?>" media="(max-width: 768px)" >
            <?php endif; ?>
            <?php
              $image = get_field('pc_3');
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
              <?php endif; ?>
          </picture>
        </div>
        <div class="swiper-slide">
        <picture>
          <?php
            $image = get_field('sp_4');
            if ($image) : ?>
              <source srcset="<?php echo esc_url($image['url']); ?>" media="(max-width: 768px)" >
            <?php endif; ?>
            <?php
              $image = get_field('pc_4');
              if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
              <?php endif; ?>
          </picture>
        </div>
      </div>
    </div>
    <div class="mv__title">
      <p class=" mv__main">DIVING</p>
      <p class="mv__sub">into the ocean</p>
    </div>
  </div>
</div>
<!-- main visual -->

<!-- page-top -->
<div class="page-top">
</div>
<!-- page-top -->

<!-- main -->
  <main>
    <!-- campaign -->
    <section id="campaign" class="campaign campaign-layout">
      <div class="campaign__inner inner">
      <div class="campaing__title section-title">
        <h2 class="section-title__main">
          <span>C</span>ampaign
        </h2>
        <p class="section-title__sub">
          キャンペーン
        </p>
      </div>
      <div class="campaign__items">
        <div class="swiper2 campaign__swiper">
          <div class="swiper__button">
            <div class="campaign__next u-desktop"></div>
            <div class="campaign__prev u-desktop"></div>
          </div>
          <!-- swiper-wrapper -->
          <div class="swiper-wrapper campaign__cards campaign-cards">
            <!-- swiper-slider -->
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-cards__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/images/campaign1.jpg" alt="たくさんの魚が泳いでいる画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">ライセンス講習</div>
                  <p class="card__title">ライセンス取得</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;56,000</div>
                    <div class="card__price card__price--sm">&yen;46,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-cards__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/images/campaign2.jpg" alt="海と複数のボートの画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">体験ダイビング</div>
                  <p class="card__title">貸切体験ダイビング</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;24,000</div>
                    <div class="card__price card__price--sm">&yen;18,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-cards__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/images/campaign3.jpg" alt="小さいクラゲ達が暗い水の中を泳いでいる画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">体験ダイビング</div>
                  <p class="card__title">ナイトダイビング</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;10,000</div>
                    <div class="card__price card__price--sm">&yen;8,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-cards__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/images/campaign4.jpg" alt="4人のダイバーが海面に顔を出している画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">ファンダイビング</div>
                  <p class="card__title">貸切ファンダイビング</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;20,000</div>
                    <div class="card__price card__price--sm">&yen;16,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-card__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/images/campaign1.jpg" alt="たくさんの魚が泳いでいる画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">ライセンス講習</div>
                  <p class="card__title">ライセンス取得</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;56,000</div>
                    <div class="card__price card__price--sm">&yen;46,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-card__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/images/campaign2.jpg" alt="海と複数のボートの画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">体験ダイビング</div>
                  <p class="card__title">貸切体験ダイビング</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;24,000</div>
                    <div class="card__price card__price--sm">¥&yen;18,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-card__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/images/campaign3.jpg" alt="小さいクラゲ達が暗い水の中を泳いでいる画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">体験ダイビング</div>
                  <p class="card__title">ナイトダイビング</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;10,000</div>
                    <div class="card__price card__price--sm">&yen;8,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="swiper-slide campaign-cards__item">
              <a href="#" class="campaign-card__card card">
                <div class="card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/images/campaign4.jpg" alt="4人のダイバーが海面に顔を出している画像">
              </div>
              <div class="card__contents">
                <div class="card__head">
                  <div class="card__label">ファンダイビング</div>
                  <p class="card__title">貸切ファンダイビング</p>
                </div>
                <div class="card__border border"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg">&yen;20,000</div>
                    <div class="card__price card__price--sm">&yen;16,000</div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            <!-- /swiper-slider -->
          <!-- /swiper-wrapper -->
        </div>
      </div>
      <div class="campaign__btn">
      <a href="campaign.html" class="btn">View more<span class="btn__arrow"></span></a>
      </div>
     </div>
     </div>
    </section>
    <!-- campaign -->

    <!-- about -->
    <section id="about" class="about about-layout">
      <div class="about__inner inner">
        <div class="about__title section-title">
          <h2 class="section-title__main">
            <span>A</span>bout us
          </h2>
          <p class="section-title__sub">
            私たちについて
          </p>
        </div>

      <div class="about__contents">
      </div>
        <div class="about__content">
          <div class="about__img1 about__img1--sm">
            <img src="<?php echo get_theme_file_uri(); ?>/images/ocean1.jpg" alt="オレンジ色と白色の屋根の上に、シーサーの置物が置いてある画像">
          </div>
          <div class="about__img1 about__img1--lg">
            <img src="<?php echo get_theme_file_uri(); ?>/images/ocean2.jpg" alt="海の中を2匹の黄色い魚が泳いでいる画像">
          </div>
        </div>
          <div class="about__box">
            <p class="about__text about__text--lg">Dive into<br>the Ocean</p>
            <div class="about__box2">
              <p class="about__text about__text--sm">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                <div class="about__btn">
                  <a href="about.html" class="btn">View more<span class="btn__arrow"></span></a>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- about -->

    <!-- information -->
    <section id="information" class="information information-layout">
      <div class="information__inner inner">
        <div class="information__title section-title">
          <h2 class="section-title__main">
          <span>I</span>nformation
        </h2>
        <p class="section-title__sub">
          ダイビング情報
        </p>
      </div>
      <div class="information__wrapper">
        <div class="information__img js-colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/images/info.jpg" alt="珊瑚礁の近くを泳ぐ黄色と青色の魚たち">
        </div>

        <div class="information__box">
          <div class="information__text information__text--lg">
            ライセンス講習
          </div>
          <div class="border"></div>
          <div class="information__text information__text--sm">
            当店はダイビングライセンス（Cカード）世界<br class="u-mobile">最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </div>

          <div class="information__btn">
          <a href="infomation.html" class="btn">View more<span class="btn__arrow"></span></a>
         </div>
        </div>
      </div>
    </div>
    </section>
    <!-- information -->

    <!-- blog -->
    <section id="blog" class="blog blog-layout">
      <div class="blog__inner inner">
        <div class="blog__title section-title section-title--blog">
          <h2 class="section-title__main section-title__main--blog">
            <span>B</span>log
          </h2>
          <p class="section-title__sub section-title__sub--blog">
            ブログ
          </p>
        </div>

        <div class="blog__cards blog-cards">
          <div class="blog-cards__card blog-card">
            <a class="blog-card__link" href="#">
              <div class="blog-card__item ">
                <div class="blog-card__header">
                  <div class="blog-card__figure">
                    <div class="blog-card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/blog2.jpg" alt="オレンジ色の珊瑚">
                    </div>
                  </div>
                </div>
                <div class="blog-card__body">
                  <time class="blog-card__date" datetime="">2023.11/17</time>
                  <p class="blog-card__title">ライセンス取得</p>
                  <div class="blog-border border border--blog"></div>
                  <p class="blog-card__copy">ここにテキストが入ります。ここにテキ<br>ストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    <br>ここにテキストが入ります。ここにテキ<br>ストが入ります。ここにテキスト</p>
                </div>
              </div>
            </a>
          </div>
          <div class="blog-cards__card blog-card">
            <a class="blog-card__link" href="#">
              <div class="blog-card__item ">
                <div class="blog-card__header">
                  <div class="blog-card__figure">
                    <div class="blog-card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/blog3.jpg" alt="ウミガメの画像">
                    </div>
                  </div>
                </div>
                <div class="blog-card__body">
                  <time class="blog-card__date" datetime="">2023.11/17</time>
                  <p class="blog-card__title">ウミガメと泳ぐ</p>
                  <div class="blog-border border border--blog"></div>
                  <p class="blog-card__copy">ここにテキストが入ります。ここにテキ<br>ストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    <br>ここにテキストが入ります。ここにテキ<br>ストが入ります。ここにテキスト</p>
                </div>
              </div>
            </a>
          </div>
          <div class="blog-cards__card blog-card">
            <a class="blog-card__link" href="#">
              <div class="blog-card__item ">
                <div class="blog-card__header">
                  <div class="blog-card__figure">
                    <div class="blog-card__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/blog4.jpg" alt="珊瑚礁の中にいるカクレクマノミ">
                    </div>
                  </div>
                </div>
                <div class="blog-card__body">
                  <time class="blog-card__date" datetime="">2023.11/17</time>
                  <p class="blog-card__title">カクレクマノミ</p>
                  <div class="blog-border border border--blog"></div>
                  <p class="blog-card__copy">ここにテキストが入ります。ここにテキ<br>ストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    <br>ここにテキストが入ります。ここにテキ<br>ストが入ります。ここにテキスト</p>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="blog__btn">
          <a href="blog.html" class="btn">View more<span class="btn__arrow"></span></a>
        </div>

      </div>
      </section>
    <!-- blog -->

    <!-- voice -->
    <section id="voice" class="voice voice-layout">
      <div class=" voice__inner inner">
        <div class="voice__title section-title">
          <h2 class="section-title__main">
            <span>V</span>oice
          </h2>
          <p class="section-title__sub">
            お客様の声
          </p>
        </div>

        <div class="voice__cards voice-cards">
          <div class="voice-cards__card voice-card">
              <a class="voice-card__link" href="#">
                <div class="voice-card__item">
                  <div class="voice-card__header">
                      <div class="voice-card__inner">
                        <div class="voice-card__content">
                         <p class="voice-card__age">20代(女性)</p>
                          <p class="voice-card__lead">ライセンス講習</p>
                        </div>
                        <p class="voice-card__title">ここにタイトルが入ります。ここにタイトル</p>
                      </div>
                      <div class="voice-card__figure">
                        <div class="voice-card__img js-colorbox">
                          <img src="<?php echo get_theme_file_uri(); ?>/images/voice1.jpg" alt="帽子を被った笑顔の女性">
                        </div>
                      </div>
                </div>

                  <p class="voice-card__copy">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                      <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                      <br>ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                </div>
              </a>
          </div>
          <div class="voice-cards__card voice-card">
              <a class="voice-card__link" href="#">
                <div class="voice-card__item">
                  <div class="voice-card__header">
                      <div class="voice-card__inner">
                        <div class="voice-card__content">
                         <p class="voice-card__age">30代(男性)</p>
                          <p class="voice-card__lead">ファンダイビング</p>
                        </div>
                        <p class="voice-card__title">ここにタイトルが入ります。ここにタイトル</p>
                      </div>
                      <div class="voice-card__figure">
                        <div class="voice-card__img js-colorbox">
                          <img src="<?php echo get_theme_file_uri(); ?>/images/voice2.jpg" alt="グットポーズをしている男性の画像">
                        </div>
                      </div>
                </div>

                  <p class="voice-card__copy">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                      <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                      <br>ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                </div>
              </a>
          </div>
        </div>

        <div class="voice__btn">
          <a href="voice.html" class="btn">View more<span class="btn__arrow"></span></a>
        </div>
      </div>
    </section>
    <!-- voice -->
    <!-- price -->
    <section id="price" class="price price-layout">
      <div class="price__inner inner">
        <div class="price__title section-title">
          <h2 class="section-title__main">
            <span>P</span>rice
          </h2>
          <p class="section-title__sub">
            料金一覧
          </p>
        </div>
        <div class="price__container">
          <div class="price__img1 u-mobile">
            <img src="<?php echo get_theme_file_uri(); ?>/images/price2.jpg" alt="海を泳いでいる亀の画像">
          </div>
            <div class="price__content">
              <div class="price__lists">
              <?php
                $price_page_id = 22;
                $courses = SCF::get('license_group', $price_page_id);

                if (!empty($courses)) :
                ?>
                <dl class="price__list">
                <?php foreach ($courses as $index => $course) : ?>
                  <?php if ($index === 0): ?>
                  <dt class="price__list-title">ライセンス講習</dt>
                  <?php endif; ?>
                  <dt class="price__term"><?php echo $course['license_name']; ?></dt>
                  <dd class="price__description"><?php echo $course['license_price']; ?></dd>
                  <?php endforeach; ?>
                </dl>
                <?php endif; ?>
                <?php
                $price_page_id = 22;
                $courses = SCF::get('experience_group', $price_page_id);

                if (!empty($courses)) :
                ?>
                <dl class="price__list">
                <?php foreach ($courses as $index => $course) : ?>
                  <?php if ($index === 0): ?>
                  <dt class="price__list-title">体験ダイビング</dt>
                  <?php endif; ?>
                  <dt class="price__term"><?php echo $course['experience_name']; ?></dt>
                  <dd class="price__description"><?php echo $course['experience_price']; ?></dd>
                  <?php endforeach; ?>
                </dl>
                <?php endif; ?>
                <?php
                $price_page_id = 22;
                $courses = SCF::get('fundiving_group', $price_page_id);

                if (!empty($courses)) :
                ?>
                <dl class="price__list">
                <?php foreach ($courses as $index => $course) : ?>
                  <?php if ($index === 0): ?>
                  <dt class="price__list-title">体験ダイビング</dt>
                  <?php endif; ?>
                  <dt class="price__term"><?php echo $course['fundiving_name']; ?></dt>
                  <dd class="price__description"><?php echo $course['fundiving_price']; ?></dd>
                  <?php endforeach; ?>
                </dl>
                <?php endif; ?>
                <?php
                $price_page_id = 22;
                $courses = SCF::get('special_group', $price_page_id);

                if (!empty($courses)) :
                ?>
                <dl class="price__list">
                <?php foreach ($courses as $index => $course) : ?>
                  <?php if ($index === 0): ?>
                  <dt class="price__list-title">スペシャルダイビング</dt>
                  <?php endif; ?>
                  <dt class="price__term"><?php echo $course['special_name']; ?></dt>
                  <dd class="price__description"><?php echo $course['special_price']; ?></dd>
                  <?php endforeach; ?>
                </dl>
                <?php endif; ?>
              </div>

              <div class="price__img2 js-colorbox u-desktop">
              <img src="<?php echo get_theme_file_uri(); ?>/images/price1.jpg" alt="珊瑚礁の周りを泳ぐ子魚たち">
              </div>

         </div>
        </div>

        <div class="price__btn">
          <a href="price.html" class="btn">View more<span class="btn__arrow"></span></a>
        </div>

      </div>
    </section>
    <!-- price -->

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
                <a href="sitemap.html" class="btn">Contact us<span class="btn__arrow"></span></a>
              </div>
          </div>

        </div>

      </div>
    </section>
    <!-- contact -->

  </main>

  <!-- main -->

  <!-- footer -->
  <?php get_footer(); ?>