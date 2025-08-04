<div class="blog-content__side-menu blog-side-menu">
            <div class="blog-side-menu__inner">
              <div class="blog-side-menu__popular blog-popular">
                <h2 class="blog-popular__title">人気記事</h2>
                <?php
                  $args = array(
                    'post_type' => 'post',
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'posts_per_page' => 3,
                    'order'=>'DESC',
                  );
                  $the_view_query = new WP_Query( $args );
                  if ($the_view_query->have_posts()):
                    while($the_view_query->have_posts()): $the_view_query->the_post();
                ?>
                <figure class="blog-popular__card">
                  <a href="<?php echo get_permalink( get_page_by_path('single.php') ); ?>" class="blog-popular__link">
                    <div class="blog-popular__img">
                    <?php if(get_the_post_thumbnail()): ?>
                      <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri();?>/assets/images/noimage.webp" alt="noimage">
                    <?php endif; ?>

                    </div>
                    <div class="blog-popular__content">
                    <time  class="blog-card__date" datetime="<?php the_time('cf'); ?>"><?php the_time('Y.m/d'); ?></time>
                      <p class="blog-popular__text"><?php the_title(); ?></p>
                    </div>
                  </a>
                </figure>
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
              </div>
              <div class="blog-side-menu__review blog-review">
                <h2 class="blog-review__title">口コミ</h2>
                <?php
                  $args = array(
                    'post_type' => 'voice', // カスタム投稿タイプ名
                    'posts_per_page' => 1,     // 表示件数
                    'orderby' => 'date',       // 並び順
                    'order' => 'DESC'
                  );

                  $custom_query = new WP_Query($args);

                  if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                  ?>
                <div class="blog-review__card">
                <figure class="blog-review__img">
                <?php if(get_the_post_thumbnail()): ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri();?>/assets/images/noimage.webp" alt="noimage">
                <?php endif; ?>

                </figure>
                <p class="blog-review__label">
                <?php the_field('age'); ?>
                </p>
                <h3 class="blog-review__text">
                <?php the_title(); ?>
                </h3>
                  <div class="blog-review__btn">
                    <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="btn">View more<span class="btn__arrow"></span></a>
                    </div>
              </div>
                  <?php
                    endwhile;
                    wp_reset_postdata(); // メインループに戻す
                  else :
                    echo '<p>投稿が見つかりませんでした。</p>';
                  endif;
                  ?>

              </div>
              <div class="blog-side-menu__campaign blog-campaign">
                <h2 class="blog-campaign__title">キャンペーン</h2>
                <?php
                  $args = array(
                    'post_type' => 'campaign', // カスタム投稿タイプ名
                    'posts_per_page' => 2,     // 表示件数
                    'orderby' => 'date',       // 並び順
                    'order' => 'DESC'
                  );

                  $custom_query = new WP_Query($args);

                  if ($custom_query->have_posts()) :
                    while ($custom_query->have_posts()) : $custom_query->the_post();
                  ?>
                    <div class="blog-campaign__card card">
                      <div class="card__img card__img--blog-campaign">
                      <?php if(get_the_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                      <?php else : ?>
                        <img src="<?php echo get_theme_file_uri();?>/assets/images/noimage.webp" alt="noimage">
                      <?php endif; ?>
                      </div>
                    <div class="card__contents card__contents--blog-campaign">
                      <div class="card__head card__head--blog-campaign">
                        <p class="card__title"><?php the_title(); ?></p>
                      </div>
                      <div class="campaign__border border border--campaign"></div>
                      <div class="card__body">
                        <p class="card__info card__info--blog-campaign">全部コミコミ(お一人様)</p>
                        <div class="card__price-box card__price-box--blog-campaign">
                          <div class="card__price card__price--lg card__price--blog-campaign"><?php the_field('campaign_1'); ?></div>
                          <div class="card__price card__price--sm card__price--blog-campaign"><?php the_field('campaign_2'); ?></div>
                        </div>
                      </div>
                    </div>
                    </div>
                  <?php
                    endwhile;
                    wp_reset_postdata(); // メインループに戻す
                  else :
                    echo '<p>投稿が見つかりませんでした。</p>';
                  endif;
                  ?>
                <div class="blog-campaign__btn">
                  <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="btn">View more<span class="btn__arrow"></span></a>
                  </div>
              </div>
              <div class="blog-side-menu__archive blog-archive">
                <h2 class="blog-archive__title">アーカイブ</h2>
                <div class="blog-archive__accordion  blog-accordion js-accordion">
                  <div class="blog-accordion__container">
                  <?php
global $wpdb;

// 年月を取得（最新順、最大6件くらい取得）
$results = $wpdb->get_results("
  SELECT DISTINCT YEAR(post_date) AS year, MONTH(post_date) AS month
  FROM $wpdb->posts
  WHERE post_type = 'post' AND post_status = 'publish'
  ORDER BY post_date DESC
  LIMIT 6
");

$grouped = [];
foreach ($results as $item) {
  $grouped[$item->year][] = $item->month;
}

// 最大2年分、各年最大3ヶ月に制限
$grouped = array_slice($grouped, 0, 2, true);
?>

<?php foreach ($grouped as $year => $months): ?>
  <div class="blog-accordion__item js-accordion__item">
    <h3 class="blog-accordion__title js-accordion__title"><?php echo esc_html($year); ?></h3>
    <div class="blog-accordion__content js-accordion__content">
      <?php foreach (array_slice($months, 0, 3) as $month): ?>
        <a href="<?php echo esc_url(get_month_link($year, $month)); ?>" class="blog-accordion__text">
          <?php echo esc_html($month . '月'); ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
<?php endforeach; ?>

                  </div>
                </div>
              </div>
            </div>
          </div>