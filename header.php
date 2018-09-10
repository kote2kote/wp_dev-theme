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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="header">
    <div class="container">
      <nav class="navigation flex">

        <div class="logo flex ck">
          <div class="logo__stream">
            Streame
          </div>
          <div class="back_to_ui_kit">
            Back to UI Kitttttttttttttttt
          </div>
        </div>

        <div class="menu ck">
          <ul class="menu__ul flex">
            <li>Home</li>
            <li>Service</li>
            <li>About</li>
            <li>Contacts</li>
            <li>Call Me</li>
          </ul>
        </div>

      </nav>

      <section class="hero">
        <div class="container">

          <div class="maintitle">
            <p class="maintitle__p">Clean and Fully Responsive Template</p>
            <h1 class="maintitle__h1">We are Creative</h1>
            <button>Learn More</button>
          </div>

        </div>
      </section>

    </div>

  </header>

  <section class="business_logos">
    <div class="container">
      <ul class="business_logo flex cm50">
        <li class="cm200">test</li>
        <li class="cm200">test</li>
        <li class="cm200">test</li>
        <li class="cm200">test</li>
        <li class="cm200">test</li>
        <li class="cm200">test</li>
      </ul>
    </div>
  </section>

  <section class="whywe cm0">
    <div class="container">

      <div class="whywe__box">
        <h2>test</h2>
        <p>test</p>
      </div>

      <div class="whywe__features flex">
        <div class="whywe__features01 cm100">
          test
        </div>
        <div class="whywe__features02 cm100">
          test
        </div>
        <div class="whywe__features03 cm100">
          test
        </div>
      </div>
    </div>
  </section>

  <section class="counts">
    <div class="container cm0">
      <div class="counts__elements flex">
        <div class="counts__elements01 cm100">
          test
        </div>
        <div class="counts__elements02 cm100">
          test
        </div>
        <div class="counts__elements03 cm100">
          test
        </div>
        <div class="counts__elements04 cm100">
          test
        </div>
      </div>
    </div>
  </section>

  <section class="our_product">
    <div class="container cm0">
      <div class="content flex">
        <div class="our_product__description cm300">
          <h2>test</h2>
          <p>test</p>
          <p>test</p>
          <a href="#">test</a>
          <a href="#">test</a>
        </div>
        <div class="our_product__image cm300">
          <img src="wp-content/themes/wp_dev-theme/assets/images/900x700/img1.png" class="img">
        </div>
      </div>
    </div>
  </section>

  <section class="our_pricing">
    <div class="container cm0">
      <div class="content">

        <div class="our_pricing__title">
          <h2>test</h2>
          <p>test</p>
        </div>

        <div class="our_pricing__content flex">
          <div class="our_pricing__content_l flex">
            <div class="item cm200">
              test1
            </div>
            <div class="item cm200">
              test2
            </div>
            <div class="item cm200">
              test3
            </div>
            <div class="item cm200">
              test4
            </div>

          </div>
          <div class="our_pricing__content_r cm200">
            test
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="review">
    <div class="container cm0">
      <div class="content">

        <div class="review__title cm100">
          <h2>test</h2>
          <p>test</p>
        </div>

        <div class="review__voice flex">
          <div class="voice cm200">
            test
          </div>
          <div class="voice cm200">
            test
          </div>
        </div>

      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container cm0">
      <div class="content flex">
        <div class="copyright cm50">
          test
        </div>
        <div class="social cm50">
          test
        </div>
      </div>
    </div>
  </footer>
