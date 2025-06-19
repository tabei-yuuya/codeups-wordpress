<?php get_header(); ?>

<!-- main visual -->
<div class="mv-underlayer">
  <div class="mv-underlayer__inner">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/images/contact-pc-mv.jpg" media="(min-width: 768px)" >
      <img src="<?php echo get_theme_file_uri(); ?>/images/contact-sp-mv.jpg" alt="エメラルドグリーンの海と
      白い砂浜の画像">
    </picture>
    </div>
    <div class="mv-underlayer__title">
      <h1 class=" mv-underlayer__main">Contact</h1>
    </div>
  </div>
<!-- main visual -->

<!-- page-top -->
<div class="page-top">
</div>
<!-- page-top -->

<!-- main -->
  <main>
    <!-- contact-page -->
   <?php if (function_exists('bcn_display')) { ?>
      <div class="breadcrumb breadcrumb-layout">
        <div class="breadcrumb__inner inner">
        <?php bcn_display(); ?>
        </div>
      </div>
    <?php } ?>
    <div class="contact-content contact-content-layout content-fish">
      <div class="contact-content__inner inner">
        	<?php echo do_shortcode('[contact-form-7 id="ec7633a" title="お問い合わせ"]'); ?>
      </div>
    </div>



<!-- <script>
  document.addEventListener('wpcf7mailsent', function(event) {
    window.location.href = '<?php echo esc_url( get_permalink( get_page_by_path('thanks') ) ); ?>';
  }, false);
</script> -->


    
    <!-- contact-page -->

  </main>

  <!-- main -->
<?php get_footer(); ?>