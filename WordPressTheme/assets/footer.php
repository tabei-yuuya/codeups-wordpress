<footer id="footer" class="footer footer-layout">
    <div class="footer__inner inner">
      <div class="footer__head">
        <div class="footer__img">
          <img src="<?php echo get_theme_file_uri(); ?>/images/CodeUps.svg" alt="CodeUps">
        </div>
        <div class="footer__icon">
          <div class="footer__facebook">
            <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/images/footer1.png" alt="フェイスブックのアイコン"></a>
          </div>
          <div class="footer__insta">
            <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/images/footer2.png" alt="インスタグラムのアイコン"></a>
          </div>
        </div>
      </div>

      <div class="footer__menu">
        <div class="footer__container">
          <div class="footer__items-1">
            <ul class="footer__item">
              <li class="footer__term">
                <div class="footer__img2">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                </div>
                <a href="<?php echo get_post_type_archive_link('campaign'); ?>
                " class="footer__link">キャンペーン</a>
              </li>
              <li class="footer__description"><a href="<?php echo esc_url( home_url( '/campaign/#tab__menu-2' ) ); ?>" class="footer__link">ライセンス取得</a></li>
              <li class="footer__description"><a href="<?php echo esc_url( home_url( '/campaign/#tab__menu-3' ) ); ?>" class="footer__link">貸切体験ダイビング</a></li>
              <li class="footer__description"><a href="<?php echo esc_url( home_url( '/campaign/#tab__menu-4' ) ); ?>" class="footer__link">ナイトダイビング</a></li>
            </ul>
          <ul class="footer__item">
            <li class="footer__term">
              <div class="footer__img2">
                <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
              </div>
              <a href="<?php echo get_permalink( get_page_by_path('about-us') ); ?>
                " class="footer__link">私たちについて</a>
            </li>
          </ul>

          </div>
          <div class="footer__items-2">

          <ul class="footer__item">
            <li class="footer__term">
              <div class="footer__img2">
                <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
              </div>
              <a href="<?php echo get_permalink( get_page_by_path('information') ); ?>
              " class="footer__link">ダイビング情報</a>
            </li>
            <li class="footer__description"><a href="<?php echo esc_url( home_url( '/information/#tab__menu-1' ) ); ?>" class="footer__link">ライセンス講習</a></li>
            <li class="footer__description"><a href="<?php echo esc_url( home_url( '/information/#tab__menu-2' ) ); ?>" class="footer__link">体験ダイビング</a></li>
            <li class="footer__description"><a href="<?php echo esc_url( home_url( '/information/#tab__menu-3' ) ); ?>" class="footer__link">ファンダイビング</a></li>
          </ul>
          <ul class="footer__item">
            <li class="footer__term">
              <div class="footer__img2">
                <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
              </div>
              <a href="<?php echo get_permalink( get_page_by_path('blog') ); ?>
              " class="footer__link">ブログ</a>
            </li>
          </ul>
          </div>
          <div class="footer__items-3">
              <ul class="footer__item">
                <li class="footer__term">
                  <div class="footer__img2">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                  </div>
                <a href="<?php echo get_post_type_archive_link('voice'); ?>
                  " class="footer__link">お客様の声</a>
                </li>
              </ul>

              <ul class="footer__item">
                <li class="footer__term">
                  <div class="footer__img2">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                  </div>
                  <a href="<?php echo get_permalink( get_page_by_path('price') ); ?>
                  " class="footer__link">料金一覧</a>
                </li>
                <li class="footer__description"><a href="<?php echo esc_url( home_url( '/price/#price1' ) ); ?>" class="footer__link">ライセンス講習</a></li>
                <li class="footer__description"><a href="<?php echo esc_url( home_url( '/price/#price2' ) ); ?>" class="footer__link">体験ダイビング</a></li>
                <li class="footer__description"><a href="<?php echo esc_url( home_url( '/price/#price3' ) ); ?>" class="footer__link">ファンダイビング</a></li>
              </ul>
          </div>
          <div class="footer__items-4">
            <ul class="footer__item">
              <li class="footer__term">
                <div class="footer__img2">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                </div>
                <a href="<?php echo get_permalink( get_page_by_path('faq') ); ?>
                " class="footer__link">よくある質問</a>
              </li>
            </ul>

            <ul class="footer__item">
              <li class="footer__term">
                  <div class="footer__img2">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                  </div>
                <a href="<?php echo get_permalink( get_page_by_path('privacyporicy') ); ?>" class="footer__link">プライバシー<br class="u-mobile">ポリシー</a>
              </li>
            </ul>

            <ul class="footer__item">
              <li class="footer__term">
                  <div class="footer__img2">
                    <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                  </div>
                  <a href="<?php echo get_permalink( get_page_by_path('terms-of-service') ); ?>" class="footer__link">利用規約</a>
              </li>
            </ul>

            <ul class="footer__item">
              <li class="footer__term">
                <div class="footer__img2">
                  <img src="<?php echo get_theme_file_uri(); ?>/images/hitode.svg" alt="ヒトデの画像">
                </div>
                <a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>" class="footer__link">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <p class="footer__copyright">Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</p>
  </footer>
  <!-- footer -->
   <script>
  document.addEventListener( 'wpcf7mailsent', function( event ) {
    location.href = '<?php echo esc_url( site_url( '/contact/thanks/' ) ); ?>';
  }, false );
</script>
<script>
  document.addEventListener('wpcf7invalid', function(event) {
    // 入力チェックエラー時のリダイレクト先
     location.href = '<?php echo esc_url( site_url( '/contact/error/' ) ); ?>';
  }, false);
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php wp_footer() ?>
</body>

</html>