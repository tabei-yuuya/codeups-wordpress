<?php get_header(); ?>

<!-- main visual -->
<div class="mv-underlayer">
  <div class="mv-underlayer__inner">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>//images/price-pc-mv.jpg" media="(min-width: 768px)" >
      <img src="./assets/images/price-sp-mv.jpg" alt="海面からダイバーの頭が見えている画像">
    </picture>
    </div>
    <div class="mv-underlayer__title">
      <h1 class=" mv-underlayer__main">Price</h1>
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

    <div class="price-content price-content-layout content-fish">
      <div class="price-content__inner inner">
        <div class="price-content__wrapper">
          <table id="plice1" class="price-content__list price-list">
          <?php
            $courses = SCF::get('license_group');

            foreach ($courses as $index => $course) :
            ?>
              <tr class="price-list__row">
                <?php if ($index === 0): ?>
                  <th class="price-list__head" rowspan="<?php echo count($courses); ?>">
                    <span>ライセンス講習</span>
                  </th>
                <?php endif; ?>
                <td class="price-list__course"><?php echo $course['license_name']; ?></td>
                <td class="price-list__value"><?php echo $course['license_price']; ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
          <table id="plice2" class="price-content__list price-list">
          <?php
            $courses = SCF::get('experience_group');

            foreach ($courses as $index => $course) :
            ?>
              <tr class="price-list__row">
                <?php if ($index === 0): ?>
                  <th class="price-list__head" rowspan="<?php echo count($courses); ?>">
                    <span>体験ダイビング</span>
                  </th>
                <?php endif; ?>
                <td class="price-list__course"><?php echo $course['experience_name']; ?></td>
                <td class="price-list__value"><?php echo $course['experience_price']; ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
          <table id="plice3" class="price-content__list price-list">
          <?php
            $courses = SCF::get('fundiving_group');

            foreach ($courses as $index => $course) :
            ?>
              <tr class="price-list__row">
                <?php if ($index === 0): ?>
                  <th class="price-list__head" rowspan="<?php echo count($courses); ?>">
                    <span>ファンダイビング</span>
                  </th>
                <?php endif; ?>
                <td class="price-list__course"><?php echo $course['fundiving_name']; ?></td>
                <td class="price-list__value"><?php echo $course['fundiving_price']; ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
          <table id="plice4" class="price-content__list price-list">
          <?php
            $courses = SCF::get('special_group');

            foreach ($courses as $index => $course) :
            ?>
              <tr class="price-list__row">
                <?php if ($index === 0): ?>
                  <th class="price-list__head" rowspan="<?php echo count($courses); ?>">
                    <span>スペシャルダイビング</span>
                  </th>
                <?php endif; ?>
                <td class="price-list__course"><?php echo $course['special_name']; ?></td>
                <td class="price-list__value"><?php echo $course['special_price']; ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
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