<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package origin
 */

 //ポストIDからスラッグを取り出してbodyタグのIDに入れる
 $page = get_post( get_the_ID() );
 $slug = $page->post_name;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body id="<?php echo $slug; ?>" <?php body_class($slug." Origin"); ?>>

<header class="header">

  <div class="top_nav cm0">
    <div class="section-content row">
      <div class="top_nav__l col cm0 flex">
        <img src="https://placehold.jp/112x13.png" alt="">
        <p>「健康をのせて」 もっと、ずっと。</p>
      </div>
      <div class="top_nav__r col cm0">
        <ul class="menu flex">
          <li class="menu_corp"><a href="#">コーポレートサイト</a></li>
          <li class="menu_contacts"><a href="#">お問い合わせ</a></li>
          <li class="menu_language"><a href="#" class="english">English</a> | <a href="#" class="china">中文</a> </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="middle_menu cm0">
    <div class="section-content row flex">
      <div class="middle_menu__l col cm0"><img src="https://placehold.jp/206x86.png" alt=""></div>
      <div class="middle_menu__m col cm0">
        <ul class="menu_list flex">
          <li class="menu_list__item">
            <img src="https://placehold.jp/68x68.png" alt="">
            <span>メニュー</span>
          </li>
          <li class="menu_list__item">
            <img src="https://placehold.jp/68x68.png" alt="">
            <span>メニュー</span>
          </li>
          <li class="menu_list__item">
            <img src="https://placehold.jp/68x68.png" alt="">
            <span>メニュー</span>
          </li>
          <li class="menu_list__item">
            <img src="https://placehold.jp/68x68.png" alt="">
            <span>メニュー</span>
          </li>
        </ul>
      </div>
      <div class="middle_menu__r col cm0 flex">
        <form action="" class="search">
          <input type="text" placeholder="メニュー検索" class="search_textbox">
        </form>
      </div>
    </div>
  </div>

  <div class="bottom_menu cm0 flex">
    <ul class="menu_list flex">
      <li>メニュー</li>
      <li>メニュー</li>
      <li>メニュー</li>
      <li>メニュー</li>
      <li>メニュー</li>
    </ul>
  </div>
</header>

<?php
          // wp_nav_menu( array(

          //   'theme_location'	=> 'common_header',//function.phpで設定したやつ
          //   'container'			=> 'div',
          //   'container_class'	=> 'header_menu',
          //   'menu_class'		=> 'menu__ul flex'

          // ) );
?>
        <!--
        出力される内容

        <div class="header_menu">
          <ul id="menu-head_navi" class="menu__ul flex">
            <li id="menu-item-2135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2112 current_page_item menu-item-2135"><a href="http://10.0.0.7:5000/">Index</a></li>
            <li id="menu-item-2134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2134"><a href="http://10.0.0.7:5000/home/">Home</a></li>
            <li id="menu-item-2133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2133"><a href="http://10.0.0.7:5000/services/">Services</a></li>
            <li id="menu-item-2136" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-has-children menu-item-2136"><a href="/">About<span class="fas fa-angle-down toggle_icon"></span></a>
              <ul class="sub-menu">
                <li id="menu-item-2131" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2131"><a href="http://10.0.0.7:5000/about-us/">About us</a></li>
                <li id="menu-item-2130" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2130"><a href="http://10.0.0.7:5000/about-me/">About me</a></li>
              </ul>
            </li>
            <li id="menu-item-2128" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2128"><a href="http://10.0.0.7:5000/test/">Test</a></li>
            <li id="menu-item-2129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2129"><a href="http://10.0.0.7:5000/check-css/">Check CSS</a></li>
            <li id="menu-item-2132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2132"><a href="http://10.0.0.7:5000/contacts/">Contacts</a></li>
            <li id="menu-item-2139" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2139"><a href="http://10.0.0.7:5000/blogs/">Blog</a></li>
          </ul>
        </div> -->