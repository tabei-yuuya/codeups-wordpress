<?php get_header(); ?>

<!-- main -->
  <main class="">
    <!-- terms-page -->
    <div class="breadcrumb breadcrumb--color-revers breadcrumb-layout breadcrumb-layout--revers">
      <div class="breadcrumb__inner inner">
        <a href="index.html" class="breadcrumb__link breadcrumb__link--revers">top</a>
        <span class="breadcrumb__arrow breadcrumb__arrow--revers"></span>
        <a href="#" class="breadcrumb__link breadcrumb__link--revers">利用規約</a>
      </div>
    </div>

    <section class="notfound notfound-layout">
      <div class="notfound__inner inner">
        <div class="notfound__wrapper">
          <h2 class="notfound__title">404</h2>
          <p class="notfound__text">申し訳ありません<br>お探しのページが見つかりません。</p>
          <div class="notfound__btn">
            <a href="<?php echo get_permalink( get_page_by_path('front-page') ); ?>" class="btn btn--revers">View more<span class="btn__arrow btn__arrow--revers"></span></a>
            </div>
        </div>
      </div>
    </section>
    <!-- terms-page -->
  </main>
</div>
  <!-- main -->

<?php get_footer(); ?>