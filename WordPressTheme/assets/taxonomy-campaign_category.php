<?php get_header(); ?>

<!-- main visual -->
<div class="mv-underlayer">
  <div class="mv-underlayer__inner">
    <picture>
      <source srcset="./assets/images/campaign-pc-mv.jpg" media="(min-width: 768px)" >
      <img src="./assets/images/campaign-sp-mv.jpg" alt="2匹の魚が泳いでいる様子">
    </picture>
    </div>
    <div class="mv-underlayer__title">
      <h1 class=" mv-underlayer__main">Campaign</h1>
    </div>
  </div>
<!-- main visual -->

<!-- page-top -->
<div class="page-top">
</div>
<!-- page-top -->

<!-- main -->
  <main>
    <!-- campaign-page -->
    <div class="breadcrumb breadcrumb-layout">
      <div class="breadcrumb__inner inner">
        <a href="index.html" class="breadcrumb__link">top</a>
        <span class="breadcrumb__arrow"></span>
        <a href="#" class="breadcrumb__link">キャンペーン</a>
      </div>
    </div>

    <section class="campaign-content campaign-content-layout content-fish">
      <div class="campaign-content__inner inner">
      <ol class="campaign-content__tab tab">
          <li><a href="<?php echo get_post_type_archive_link('campaign') ?>" class="tab__item <?php if (!is_tax('campaign_category')) echo 'active'; ?>">all</a></li>
          <!-- キャンペーンの項目を取得 -->
          <?php $campaign_terms = get_terms('campaign_category', array('hide_empty' => false)); ?>
          <!-- 繰り返し処理 -->
          <?php foreach ($campaign_terms as $campaign_term) : ?>
            <!-- 繰り返す項目 -->
          <li>
            <a href="<?php echo get_term_link($campaign_term, 'campaign_category') ?>" class="tab__item <?php if (is_tax('campaign_category', $campaign_term->term_id)) echo 'active' ?>">
            <?php echo $campaign_term->name; ?>
          </a>
          </li>
          <?php endforeach; ?>
        </ol>
        <div class="campaign-content__area">
        <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;

          // スマホ判定（WP組み込み関数）
          $per_page = wp_is_mobile() ? 4 : 6; // スマホは4件、それ以外は10件

          $args = array(
              'post_type' => 'campaign', // 投稿タイプを適宜変更
              'posts_per_page' => 4,
              'paged' => $paged
          );

          $the_query = new WP_Query($args);
          ?>
          <ul class="campaign-content__items campaign-cards campaign-cards--grid">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- ループ処理開始 -->
            <!-- 表示する中身（ここから） -->
            <li class="campaign-cards__item campaign-cards__item--campaign">
            <div href="#" class="campaign-cards__card card">
              <div class="card__img card__img--campaign__img">
              <?php the_post_thumbnail( 'full'); ?>
              </div>
              <div class="card__contents card__contents--campaign-page">
              <div class="card__head">
                <?php
								  $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
								  if (!empty($taxonomy_terms)) {
								  $limit = 5;f
								  $count = 0;
								  foreach ($taxonomy_terms as $taxonomy_term) {
								  if ($count < $limit) {
								   echo '<span class="card__label">' . esc_html($taxonomy_term->name) . '</span>';
								    $count++;
								     } else {
								    break;
								      }
								    }
								  }
								?>
                <h2 class="card__title card__title--campaign__title"><?php the_title(); ?></h2>
                </div>
                <div class="card__border border border--campaign"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg"><?php the_field('campaign_1'); ?></div>
                    <div class="card__price card__price--sm"><?php the_field('campaign_2'); ?></div>
                  </div>
                  <div class="card__box u-desktop">
                    <p class="card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                    <div class="card__contact">
                      <time class="card__time">2023/6/1-9/30</time>
                      <p class="card__contact-text">ご予約・お問い合わせはコチラ</p>
                    </div>
                    <div class="card__btn">
                      <a href="#" class="btn">Contact us<span class="btn__arrow"></span></a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </li>
            <?php endwhile;
				endif; ?>
              <!-- ループ処理終了 -->
          </ul>
          <div class="campaign-content__pagination pagination">
          <?php
          $big = 999999999; // unique number
          echo paginate_links(array(
              'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
              'format' => '?paged=%#%',
              'current' => max(1, $paged),
              'total' => $the_query->max_num_pages,
              'mid_size'  => 3, // ← ここを小さくすると「...」が出やすくなる
              'end_size'  => 1,
              'prev_text' => '',
              'next_text' => '',
          ));
          ?>
            </div>
        </div>
      </div>
    </section>
    <!-- campaign-page -->

    <!-- contact -->
    <section id="contact" class="contact contact-layout contact-fish">
      <div class="contact__inner inner">

        <div class="contact__container">
          <div class="contact__content">
            <div class="contact__img2">
              <img src="./assets/images/contact.svg" alt="CodeUps">
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