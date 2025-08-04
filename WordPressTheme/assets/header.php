
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex"/>
  <!-- meta情報 -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <!-- ファビコン -->
  <!-- <link rel="”icon”" href="" /> -->
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gotu&amp;family=Lato:wght@400;700&amp;family=Noto+Sans+JP:wght@400;500;700&amp;family=Noto+Serif+JP:wght@400;700&amp;display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/style.css" />
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
  />
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="<?php echo get_theme_file_uri(); ?>/js/jquery.inview.min.js"></script>
  <script defer src="<?php echo get_theme_file_uri(); ?>/js/script.js"></script>
  <?php wp_head() ?>
  <meta name="google-site-verification" content="Ks0z-roWKmYpjvJ-RDn3epXLxRoxngoVOBznW5UgQYI" />
</head>
<body <?php body_class(); ?>>
  <header id="header" class="header">
    <div class="header__inner">
      <div class="header__title">
        <a href="<?php echo home_url(); ?>" class="header__link-title">
          <img src="<?php echo get_theme_file_uri(); ?>/images/CodeUps.svg" alt="CodeUps">
        </a>
    </div>

      <nav class="header__nav u-desktop">
        <ul class="header__lists">
          <li class="header__list">
            <a href="<?php echo get_post_type_archive_link('campaign'); ?>"class="header__link">
              <p class="header__text">Campaign</p>
              <p class="header__text  header__text--sub">キャンペーン</p>
            </a>
          </li>
          <li class="header__list">
            <a href="<?php echo get_permalink( get_page_by_path('about-us') ); ?>" class="header__link">
              <p class="header__text">About us</p>
              <p class="header__text header__text--sub">私たちについて</p>
            </a>
          </li>
          <li class="header__list">
            <a href="<?php echo get_permalink( get_page_by_path('information') ); ?>" class="header__link">
              <p class="header__text">Information</p>
              <p class="header__text header__text--sub">ダイビング情報</p>
            </a>
          </li>
          <li class="header__list">
            <a href="<?php echo get_permalink( get_page_by_path('blog') ); ?>" class="header__link">
              <p class="header__text">Blog</p>
              <p class="header__text header__text--sub">ブログ</p>
            </a>
          </li>
          <li class="header__list">
            <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="header__link">
              <p class="header__text">Voice</p>
              <p class="header__text header__text--sub">お客様の声</p>
            </a>
          </li>
          <li class="header__list">
            <a href="<?php echo get_permalink( get_page_by_path('price') ); ?>" class="header__link">
              <p class="header__text">Price</p>
              <p class="header__text header__text--sub">料金一覧</p>
            </a>
          </li>
          <li class="header__list">
            <a href="<?php echo get_permalink( get_page_by_path('faq') ); ?>" class="header__link">
              <p class="header__text">FAQ</p>
              <p class="header__text header__text--sub">よくある質問</p>
            </a>
          </li>
          <li class="header__list">
            <a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>" class="header__link">
              <p class="header__text">Contact</p>
              <p class="header__text header__text--sub">お問い合わせ</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

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
                <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="drawer-menu__link">キャンペーン</a>
                </li>
                <li class="drawer-menu__description">
                  <a href="<?php echo esc_url( home_url( '/campaign/#tab__menu-2' ) ); ?>" class="drawer-menu__link">ライセンス取得</a>
                </li>
                <li class="drawer-menu__description">
                  <a href="<?php echo esc_url( home_url( '/campaign/#tab__menu-3' ) ); ?>" class="drawer-menu__link">貸切体験ダイビング</a>
                </li>
                <li class="drawer-menu__description">
                  <a href="<?php echo esc_url( home_url( '/campaign/#tab__menu-4' ) ); ?>" class="drawer-menu__link">ナイトダイビング</a>
                </li>
              </ul>
            <ul class="drawer-menu__item">
              <li class="drawer-menu__term">
                <div class="drawer-menu__img2">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                </div>
                <a href="<?php echo get_permalink( get_page_by_path('about-us') ); ?>" class="drawer-menu__link">私たちについて</a>
              </li>
            </ul>
            </div>
            <div class="drawer-menu__items-2">
            <ul class="drawer-menu__item">
              <li class="drawer-menu__term">
                <div class="drawer-menu__img2">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                </div>
                <a href="<?php echo get_permalink( get_page_by_path('information') ); ?>" class="drawer-menu__link">ダイビング情報</a>
              </li>
              <li class="drawer-menu__description">
                <a href="<?php echo esc_url( home_url( '/information/#tab__menu-1' ) ); ?>" class="drawer-menu__link">ライセンス講習</a>
              </li>
              <li class="drawer-menu__description">
                <a href="<?php echo esc_url( home_url( '/information/#tab__menu-2' ) ); ?>" class="drawer-menu__link">体験ダイビング</a>
              </li>
              <li class="drawer-menu__description">
                <a href="<?php echo esc_url( home_url( '/information/#tab__menu-3' ) ); ?>" class="drawer-menu__link">ファンダイビング</a>
              </li>
            </ul>
            <ul class="drawer-menu__item">
              <li class="drawer-menu__term">
                <div class="drawer-menu__img2">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                </div>
                <a href="<?php echo get_permalink( get_page_by_path('blog') ); ?>" class="footer__link">ブログ</a>
              </li>
            </ul>
            </div>
            <div class="drawer-menu__items-3">
                <ul class="drawer-menu__item">
                  <li class="drawer-menu__term">
                    <div class="drawer-menu__img2">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                    </div>
                  <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="drawer-menu__link">お客様の声</a>
                  </li>
                </ul>
                <ul class="drawer-menu__item">
                  <li class="drawer-menu__term">
                    <div class="drawer-menu__img2">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                    </div>
                    <a href="<?php echo get_permalink( get_page_by_path('price') ); ?>" class="drawer-menu__link">料金一覧</a>
                  </li>
                  <li class="drawer-menu__description">
                    <a href="<?php echo esc_url( home_url( '/price/#price1' ) ); ?>" class="drawer-menu__link">ライセンス講習</a>
                  </li>
                  <li class="drawer-menu__description">
                    <a href="<?php echo esc_url( home_url( '/price/#price2' ) ); ?>" class="drawer-menu__link">体験ダイビング</a>
                  </li>
                  <li class="drawer-menu__description">
                    <a href="<?php echo esc_url( home_url( '/price/#price3' ) ); ?>" class="drawer-menu__link">ファンダイビング</a>
                  </li>
                </ul>
            </div>
            <div class="drawer-menu__items-4">
              <ul class="drawer-menu__item">
                <li class="drawer-menu__term">
                  <div class="drawer-menu__img2">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                  </div>
                  <a href="<?php echo get_permalink( get_page_by_path('faq') ); ?>" class="drawer-menu__link">よくある質問</a>
                </li>
              </ul>
              <ul class="drawer-menu__item">
                <li class="drawer-menu__term">
                    <div class="drawer-menu__img2">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                    </div>
                  <a href="<?php echo get_permalink( get_page_by_path('privacyporicy') ); ?>" class="drawer-menu__link">プライバシー<br class="u-mobile">ポリシー</a>
                </li>
              </ul>
              <ul class="drawer-menu__item">
                <li class="drawer-menu__term">
                    <div class="footer__img2">
                      <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                    </div>
                    <a href="<?php echo get_permalink( get_page_by_path('terms-of-service') ); ?>" class="drawer-menu__link">利用規約</a>
                </li>
              </ul>
              <ul class="drawer-menu__item">
                <li class="drawer-menu__term">
                  <div class="drawer-menu__img2">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                  </div>
                  <a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>" class="drawer-menu__link">お問い合わせ</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>