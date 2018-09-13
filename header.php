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

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

  <!-- Web Fonts -->
  <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,600,700" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="header">
    <div class="container">
      <nav class="navigation flex">

        <div class="logo flex">
          <div class="logo__stream">
            <a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/logo-white.png" alt="Stream" class="logo_img"></a>
          </div>
          <div class="back_to_ui_kit">
            <a href="#">Back to UI Kit</a>
          </div>
        </div>

        <div class="menu">
          <ul class="menu__ul flex">
            <li><a href="#">Home</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contacts</a></li>
            <li><a href="#">Call Me</a></li>
          </ul>
        </div>

      </nav>
