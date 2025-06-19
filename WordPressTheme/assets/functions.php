<?php
function my_enqueue_scripts() {
    // Google Fonts（preconnect & fontファミリー）
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo '<link href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">';

    // CSS
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), null );
    wp_enqueue_style( 'my-style', get_theme_file_uri( '/assets/css/style.css' ), array(), filemtime( get_theme_file_path( '/assets/css/style.css' ) ) );

    // JS
    wp_enqueue_script( 'jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true );
    wp_enqueue_script( 'jquery-inview', get_theme_file_uri( '/assets/js/jquery.inview.min.js' ), array('jquery'), null, true );
    wp_enqueue_script( 'my-script', get_theme_file_uri( '/assets/js/script.js' ), array('jquery'), filemtime( get_theme_file_path( '/assets/js/script.js' ) ), true );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

/* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
  }
  function Change_objectlabel() {
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
  }
  add_action( 'init', 'Change_objectlabel' );
  add_action( 'admin_menu', 'Change_menulabel' );

  add_theme_support('post-thumbnails');

// 記事のPVを取得
function getPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count=='') {
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count.' Views';
}

// 記事のPVをカウントする
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if ($count=='') {
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  } else {
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// コンタクトフォーム
add_action('wpcf7_init', 'add_unique_campaign_select');

function add_unique_campaign_select() {
  wpcf7_add_form_tag('unique_campaign_select', 'render_unique_campaign_select');
}

function render_unique_campaign_select($tag) {
  $tag = new WPCF7_FormTag($tag);

  $terms = get_terms([
    'taxonomy' => 'campaign_category', // タクソノミー名
    'hide_empty' => true,
  ]);

  $html = '<select name="' . $tag->name . '">';
  $html .= '<option value="">選択してください</option>';

  foreach ($terms as $term) {
    $posts = get_posts([
      'post_type' => 'campaign',
      'posts_per_page' => 1,
      'tax_query' => [
        [
          'taxonomy' => 'campaign_category',
          'field' => 'term_id',
          'terms' => $term->term_id,
        ]
      ]
    ]);

    if (!empty($posts)) {
      $title = esc_html($posts[0]->post_title);
      $html .= "<option value=\"{$title}\">{$title}</option>";
    }
  }

  $html .= '</select>';

  return $html;
}




/**
 * CF7 自動成型機能を無効にする
 */
function wpcf7_autop_return_false()
{
	return false;
}
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');


add_action('phpmailer_init', function($phpmailer) {
  $phpmailer->isSMTP();
  $phpmailer->Host = '127.0.0.1';
  $phpmailer->Port = 1025;
  $phpmailer->SMTPAuth = false;
});


