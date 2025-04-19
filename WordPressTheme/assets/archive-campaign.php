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
          <li><a href="#" class="tab__item active">all</a></li>
          <li><a href="#" class="tab__item">ライセンス取得</a></li>
          <li><a href="#" class="tab__item">ファンダイビング</a></li>
          <li><a href="#" class="tab__item">体験ダイビング</a></li>
        </ol>
        <div class="campaign-content__area">
          <ul class="campaign-content__items campaign-cards campaign-cards--grid">
          <?php if (have_posts()): while (have_posts()): the_post() ;?>
           <li class="campaign-cards__item campaign-cards__item--campaign">
            <div href="#" class="campaign-cards__card card">
              <div class="card__img card__img--campaign__img">
                <img src="./assets/images/campaign1.jpg" alt="たくさんの魚が泳いでいる画像">
              </div>
              <div class="card__contents card__contents--campaign-page">
                <div class="card__head">
                  <div class="card__label">ライセンス取得</div>
                  <h2 class="card__title card__title--campaign__title">ライセンス取得</h2>
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
            <li class="campaign-cards__item campaign-cards__item--campaign">
              <div href="#" class="campaign-cards__card card">
                <div class="card__img card__img--campaign__img">
                  <img src="./assets/images/campaign2.jpg" alt="海と複数のボートの画像">
              </div>
              <div class="card__contents card__contents--campaign-page">
                <div class="card__head">
                  <div class="card__label">体験ダイビング</div>
                  <h2 class="card__title card__title--campaign__title">貸切体験ダイビング</h2>
                </div>
                <div class="card__border border border--campaign"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg"><?php the_field('campaign_3'); ?></div>
                    <div class="card__price card__price--sm"><?php the_field('campaign_4'); ?></div>
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
            <li class="campaign-cards__item campaign-cards__item--campaign">
              <div href="#" class="campaign-cards__card card">
                <div class="card__img card__img--campaign__img">
                <img src="./assets/images/campaign3.jpg" alt="小さいクラゲ達が暗い水の中を泳いでいる画像">
              </div>
              <div class="card__contents card__contents--campaign-page">
                <div class="card__head">
                  <div class="card__label">体験ダイビング</div>
                  <h2 class="card__title card__title--campaign__title">ナイトダイビング</h2>
                </div>
                <div class="campaign__border border border--campaign"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg"><?php the_field('campaign_5'); ?></div>
                    <div class="card__price card__price--sm"><?php the_field('campaign_6'); ?></div>
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
            <li class="campaign-cards__item campaign-cards__item--campaign">
              <div href="#" class="campaign-cards__card card">
                <div class="card__img card__img--campaign__img">
                <img src="./assets/images/campaign4.jpg" alt="4人のダイバーが海面に顔を出している画像">
              </div>
              <div class="card__contents card__contents--campaign-page">
                <div class="card__head">
                  <div class="card__label">ファンダイビング</div>
                  <h2 class="card__title card__title--campaign__title">貸切ファンダイビング</h2>
                </div>
                <div class="campaign__border border border--campaign"></div>
                <div class="card__body">
                  <p class="card__info">全部コミコミ(お一人様)</p>
                  <div class="card__price-box">
                    <div class="card__price card__price--lg"><?php the_field('campaign_7'); ?></div>
                    <div class="card__price card__price--sm"><?php the_field('campaign_9'); ?></div>
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
      <?php endwhile; endif ?>
          </ul>
            <div class="campaign-content__pagination pagination">
              <span href="#" class="pagination__prev"></span>
              <ul class="pagination__items">
                <li class="pagination__item">
                  <span class="pagination__link pagination__link--first">1</span>
                </li>
                <li class="pagination__item">
                  <span class="pagination__link">2</span>
                </li>
                <li class="pagination__item">
                  <span class="pagination__link">3</span>
                </li>
                <li class="pagination__item">
                  <span class="pagination__link">4</span>
                </li>
                <li class="pagination__item u-desktop">
                  <span class="pagination__link">5</span>
                </li>
                <li class="pagination__item u-desktop">
                  <span class="pagination__link">6</span>
                </li>
              </ul>
              <span class="pagination__next"></span>
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