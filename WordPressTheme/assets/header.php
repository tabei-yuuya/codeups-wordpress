<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex"/>
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
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
</head>
<body>
  <header id="header" class="header">
    <div class="header__inner">
      <div class="header__title">
        <a href="<?php echo home_url(); ?>" class="header__link-title">
          <img src="<?php echo get_theme_file_uri(); ?>/images/CodeUpscodeups.svg" alt="CodeUps">
        </a>
    </div>

      <nav class="header__nav u-desktop">
        <ul class="header__lists">
          <li class="header__list">
            <a href="<?php echo get_post_type_archive_link('archive'); ?>"class="header__link">
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
            <a href="<?php echo get_post_type_archive_link('home'); ?>" class="header__link">
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