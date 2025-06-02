<?php get_header(); ?>

<!-- main visual -->
<div class="mv-underlayer">
  <div class="mv-underlayer__inner">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>//images/voice-pc-mv.jpg" media="(min-width: 768px)" >
      <img src="<?php echo get_theme_file_uri(); ?>//images/voice-sp-mv.jpg" alt="5人のダイバーがエメラルドグリーンの海を泳いでいる様子">
    </picture>
    </div>
    <div class="mv-underlayer__title">
      <h1 class=" mv-underlayer__main">Voice</h1>
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
    <?php if (function_exists('bcn_display')) { ?>
      <div class="breadcrumb breadcrumb-layout">
        <div class="breadcrumb__inner inner">
        <?php bcn_display(); ?>
        </div>
      </div>
    <?php } ?>

    <div class="voice-content voice-content-layout content-fish">
      <div class="campaign-content__inner inner">
        <ol class="voice-content__tab tab">
          <li><a href="<?php echo get_post_type_archive_link('voice') ?>" class="tab__item active">all</a></li>
           <!-- ボイスカテゴリーの項目を取得 -->
          <?php $voice_terms = get_terms('voice_category', array('hide_empty' => false)) ?>
          <!-- 繰り返し処理 -->
          <?php foreach ($voice_terms as $voice_term) : ?>
          <li>
            <a href="<?php echo get_term_link($voice_term, 'voice_category') ?>" class="tab__item">
               <!-- ターム名 -->
          <?php echo $voice_term->name; ?>
          </a>
        </li>
        <?php endforeach; ?>
        </ol>
        <div class="voice-content__area">
        <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;

          // スマホ判定（WP組み込み関数）
          $per_page = wp_is_mobile() ? 4 : 6; // スマホは4件、それ以外は10件

          $args = array(
              'post_type' => 'voice', // 投稿タイプを適宜変更
              'posts_per_page' => 6,
              'paged' => $paged
          );

          $the_query = new WP_Query($args);
          ?>

        <?php if ($the_query->have_posts()) :?>
        <div class="voice-content__tab-content">
          <ul class="voice-content__cards voice-cards">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <li class="voice-cards__card voice-card">
              <a class="voice-card__link" href="#">
                <div class="voice-card__item">
                  <div class="voice-card__header">
                      <div class="voice-card__inner">
                        <div class="voice-card__content">
                         <p class="voice-card__age"><?php the_field('age'); ?></p>
                          <p class="voice-card__lead">
                          <?php
                            $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                            if (!empty($taxonomy_terms)) {
                            $limit = 5;
                            $count = 0;
                            foreach ($taxonomy_terms as $taxonomy_term) {
                            if ($count < $limit) {
                            echo '<span>' . esc_html($taxonomy_term->name) . '</span>';
                              $count++;
                              } else {
                              break;
                                }
                              }
                            }
                          ?>
                          </p>
                        </div>
                        <p class="voice-card__title"><?php the_title(); ?></p>
                      </div>
                      <div class="voice-card__figure">
                        <div class="voice-card__img js-colorbox">
                        <?php if(get_the_post_thumbnail()): ?>
                          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="帽子を被った笑顔の女性">
                        <?php else : ?>
                          <img src="<?php echo get_theme_file_uri();?>/assets/images/noimage.jpg" alt="noimage">
                        <?php endif; ?>
                        </div>
                      </div>
                </div>

                  <p class="voice-card__copy">
                  <?php the_content(); ?>
                    </p>
                </div>
              </a>
            </li>
            <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        </ul>
          <?php else : ?>
          <p>記事が投稿されていません</p>
        <?php endif; ?>
        <div class="voice-content__pagination pagination">
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
      </div>
    </div>
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