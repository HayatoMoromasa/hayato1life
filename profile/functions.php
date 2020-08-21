
<?php
/**
* テーマのセットアップ
**/
function my_setup()
{
add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
add_theme_support('title-tag'); // タイトルタグ自動生成
add_theme_support(
'html5',
array( //HTML5でマークアップ
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}

add_action('after_setup_theme', 'my_setup');



/**
* CSSとJavaScriptの読み込み
*
*/
function my_script_init()
{

wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Kameron:400,700|Noto+Sans+JP&display=swap');
wp_enqueue_style('reset', get_template_directory_uri() . '/styles/vendors/bootstrap-reboot.css');
wp_enqueue_style('swiper', get_template_directory_uri() . '/styles/vendors/swiper.min.css');
wp_enqueue_style('css', get_template_directory_uri() . '/styles/style.css');
wp_enqueue_style( 'style_highlight', get_template_directory_uri() . '/styles/vendors/codepen-embed.css', array(), null, 'all');
wp_enqueue_script( 'js_highlight', get_template_directory_uri() . '/scripts/vendors/highlight.pack.js', array());
wp_enqueue_script('modal', get_template_directory_uri() . '/scripts/libs/modal.js');
wp_enqueue_script('totop', get_template_directory_uri() . '/scripts/libs/to-top.js');
wp_enqueue_script('pace', get_template_directory_uri() . '/scripts/vendors/pace.js');
wp_enqueue_script('swipermin', get_template_directory_uri() . '/scripts/vendors/swiper.min.js');
wp_enqueue_script('tweenmax', get_template_directory_uri() . '/scripts/vendors/TweenMax.min.js');
wp_enqueue_script('polyfill', get_template_directory_uri() . '/scripts/vendors/scroll-polyfill.js');
wp_enqueue_script('scroll', get_template_directory_uri() . '/scripts/libs/scroll.js');
wp_enqueue_script('text', get_template_directory_uri() . '/scripts/libs/text-animation.js');
wp_enqueue_script('hero', get_template_directory_uri() . '/scripts/libs/hero-slider.js');
wp_enqueue_script('mobile', get_template_directory_uri() . '/scripts/libs/mobile-menu.js');
wp_enqueue_script('my', get_template_directory_uri() . '/scripts/main.js');
}
add_action('wp_enqueue_scripts', 'my_script_init');





/**
* 記事抜粋
*
*/
function new_excerpt_more($more) {
    return ' [more...]';
}
add_filter('excerpt_more', 'new_excerpt_more');





/**
* メニューの登録
*
*/
function my_menu_init()
{
register_nav_menus(
array(
'global' => 'サイドバー',
)
);
}
add_action('init', 'my_menu_init');


/**
* アーカイブタイトル書き換え
*
* @param string $title 書き換え前のタイトル.
* @return string $title 書き換え後のタイトル.
*/
function my_archive_title( $title ) {

    if ( is_category() ) { // カテゴリーアーカイブの場合
    $title = single_cat_title( '', false );
    } elseif ( is_tag() ) { // タグアーカイブの場合
    $title = single_tag_title( '', false );
    } elseif ( is_post_type_archive() ) { // 投稿タイプのアーカイブの場合
    $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) { // タームアーカイブの場合
    $title = single_term_title( '', false );
    } elseif ( is_author() ) { // 作者アーカイブの場合
    $title = get_the_author();
    } elseif ( is_date() ) { // 日付アーカイブの場合
    $title = '';
    if ( get_query_var( 'year' ) ) {
    $title .= get_query_var( 'year' ) . '年';
    }
    if ( get_query_var( 'monthnum' ) ) {
    $title .= get_query_var( 'monthnum' ) . '月';
    }
    if ( get_query_var( 'day' ) ) {
    $title .= get_query_var( 'day' ) . '日';
    }
    }
    return $title;
    };
    add_filter( 'get_the_archive_title', 'my_archive_title' );




///ajax
function ajax_my_load_more_scripts() {

    global $wp_query; 
    
    // In most cases it is already included on the page and this line can be removed
    wp_enqueue_script('jquery');
    
    // register our main script but do not enqueue it yet
    wp_register_script( 'my_loadmore', get_template_directory_uri() . '/scripts/libs/myloadmore.js', array('jquery') );
    
    // now the most interesting part
    // we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
    // you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
    wp_localize_script( 'my_loadmore', 'ajax_loadmore_params', array(
        'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
        'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
        'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
        'max_page' => $wp_query->max_num_pages
    ) );
    
        wp_enqueue_script( 'my_loadmore' );
}
    
add_action( 'wp_enqueue_scripts', 'ajax_my_load_more_scripts' );






function ajax_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
 
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
			get_template_part( 'template-parts/content-loaded');

	die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
add_action('wp_ajax_loadmore', 'ajax_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'ajax_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}