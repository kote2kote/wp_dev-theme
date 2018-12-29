<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_dev_theme
 */

//ポストIDからスラッグを取り出してbodyタグのIDに入れる
 $page = get_post( get_the_ID() );
 $slug = $page->post_name;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

  <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body id="Blog" <?php body_class($slug." Blog"); ?>>

<!--debag code-->
<div id="debag" class="debag" :class="{show : show}">
<div v-html="innerHTML"></div>
<div class="grid">
  <div class="col">
    <ul>
      <li>the_content(): => <?php the_content();?></li>
      <li>the_excerpt(); => <?php the_title();?></li>
      <li>the_permalink(); => <?php the_permalink();?></li>
      <li>the_category(', '); => <?php the_category(', ');?></li>
      <li>the_ID(); => <?php the_ID();?></li>
      <li>edit_post_link(); => <?php edit_post_link();?></li>
      <li>next_post_link(' %link '); => <?php next_post_link(' %link ');?></li>
      <li>previous_post_link('%link'); => <?php previous_post_link('%link');?></li>
      <li>get_links_list(); => <?php get_links_list();?></li>
      <li>wp_list_pages(); => <?php wp_list_pages();?></li>
    </ul>
  </div>
  <div class="col">
    <ul>
    <li>wp_get_archives(); => <?php wp_get_archives();?></li>
    <li>wp_list_cats(); => <?php wp_list_cats();?></li>

    </ul>
  </div>
  <div class="col">
    <ul>
      <li>get_calendar(); => <?php get_calendar();?></li>
      <li>wp_register(); => <?php wp_register();?></li>
      <li>wp_loginout(); => <?php wp_loginout();?></li>
    </ul>
  </div>
  <div class="col">
    <ul>
      <li>site_url(); => <?php site_url();?></li>
      <li>wp_title(); => <?php wp_title();?></li>
      <li>bloginfo('name'); => <?php bloginfo('name');?></li>
      <li>bloginfo('description'); => <?php bloginfo('description');?></li>
      <li>get_stylesheet_directory_uri(); => <?php get_stylesheet_directory_uri();?></li>
      <li>bloginfo('template_url'); => <?php bloginfo('template_url');?></li>
      <li>bloginfo('atom_url'); => <?php bloginfo('atom_url');?></li>
      <li>bloginfo('rss2_url'); => <?php bloginfo('rss2_url');?></li>
    </ul>
  </div>
</div>
</div>
<!--//debag code-->

<!--ここから-->
<header class="Header cm0">
<h2 class="h2">header.php</h2>
  <div class="section-content cm0">
    <h3 class="h3">wp_nav_menu(設定:function)</h3>

  <?php
     //管理画面でメニューを作成しfunction.phpに設定を記述。サイド管理画面で位置を決め、ここに記述
     //ドキュメント
     //https://wpdocs.osdn.jp/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%82%BF%E3%82%B0/wp_nav_menu
      wp_nav_menu( array(

        'theme_location'	=> 'sample_menu',//function.phpで設定したやつ
        'container'			=> 'nav',
        'container_class'	=> 'nav_sample lists',
        'menu_class'		=> 'item'

      ) );
    ?>
  </div>

</header>
<section class="MainSection cm0">
 <div class="grid section-content">
 
  <!-- <header class="header cm0">
    <div class="Container">

      <nav class="navigation flex">

        <div class="logo flex">
          <div class="logo__stream">
            <a href="<?php //echo home_url(); ?>" class="logobox display_ib"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/logo-white.png" alt="Stream" class="logo_img"></a>
            <a href="javascript:void(0);" class="hummenu display_ib display_n"><span class="fas fa-bars"></span></a>
          </div>
          <div class="back_to_ui_kit">
            <a href="<?php //echo home_url(); ?>">Back to UI Kit</a>
          </div>
        </div> -->

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

      <!-- </nav> -->
