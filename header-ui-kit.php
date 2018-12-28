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

  <!-- Web Fonts -->
  <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,600,700" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/vendors/slick-carousel/slick.css">

	<?php wp_head(); ?>

  <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body id="<?php echo $slug; ?>" <?php body_class(); ?>>
<div id="debag" class="debag" :class="{show : show}" v-html="innerHTML"></div>
  <header class="header">
    <div class="Container">

      <nav class="navigation-site flex">

        <div class="logo flex">
          <div class="logo__stream">
            <a href="<?php echo home_url(); ?>" class="logobox display_ib"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/logo-white.png" alt="Stream" class="logo_img"></a>
            <a href="javascript:void(0);" class="hummenu display_ib display_n"><span class="fas fa-bars"></span></a>
          </div>
          <div class="back_to_ui_kit">
            <a href="<?php echo home_url(); ?>">Back to UI Kit</a>
          </div>
        </div>

        <?php
          wp_nav_menu( array(

            'theme_location'	=> 'common_header',//function.phpで設定したやつ
            'container'			=> 'div',
            'container_class'	=> 'header_menu',
            'menu_class'		=> 'menu__ul flex'

          ) );
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

      </nav>
