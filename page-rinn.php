<?php
/*
	Template Name: Rinn main
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

<body id="<?php echo $slug; ?>" <?php body_class($slug." Rinn"); ?>>
<div id="debag" class="debag" :class="{show : show}" v-html="innerHTML"></div>

<header class="Header">
	<div class="inner grid">

		<div class="col grid flex-align-c">
			<span class="name-logo d-ib">Rinn</span>
		</div>

		<div class="col grid flex-align-c">
			<ul class="header-menu grid flex-justify-c">
				<li class="item d-ib"><a href="#">Meow</a></li>
				<li class="item d-ib"><a href="#">Products</a></li>
				<li class="item d-ib"><a href="#">Journal</a></li>
			</ul>
		</div>

		<div class="col grid flex-align-c">
	  	<ul class="header-sub_menu grid flex-justify-fe">
				<li class="item d-ib"><a href="#">Company</a></li>
				<li class="item d-ib hr"></li>
				<li class="item d-ib"><a href="#">Contact</a></li>
			</ul>
		</div>

	</div>
</header>

<section class="Hero in">
	<div class="bg"
	data-start="top: 50px;"
　    data--500-top="top: -30px;"></div>
	<div class="inner">
  	<aside class="inner-side">
			<h2 class="r-h2">Cat First.</h2>
			<h1 class="r-h1">Rinn</h1>
		</aside>
		<figure class="r-figure">
				<a href="#">
			  	<img src="https://picsum.photos/960/640/?random" alt="">
				</a>
			</figure>
			<article class="h-article">
				<h3>猫へのやさしいまなざし</h3>
				<time>December 10th 2018</time>
				<ul class="category">
					<li class="item"><a href="#">Design</a></li>
					<li class="item"><a href="#">Lifestyle</a></li>
				</ul>
			</article>
	</div>
</section>

<section class="Meow in">
	<div class="inner align-center">
		<h2 class="r-title d-ib"
		data-100-bottom="transform:translate(0%,-500%);"
		data-600-top="transform:translate(0%, 50%);">Meow</h2>
		<div class="section-content grid">
			<div class="l col">
				<div class="inner grid flex-align-c flex-justify-c">
					<div class="sub-inner">
					<h3 class="h3 pd-b30">猫の健康を通じて、
人々の暮らしを豊かに</h3>
<p>猫と暮らすライフスタイルが身近になり、現代を生きる私たちにとって、猫はかけがえのない大切な家族です。私たちは「キャット・ファースト」をスローガンに掲げ、猫の健康をサポートし、猫と人が一緒に心地よく過ごせる豊かな暮らしをデザインします。</p>
					</div>
				
				</div>
			</div>

			<div class="c">
				<div class="inner">
				<figure>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg" alt="">
				</figure>
				</div>
			</div>
			<div class="r col">
				<div class="inner align-center grid flex-align-c flex-justify-c">
				<a href="#" class="button about-us">About us</a>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="cm1000 in grid">
<div class="col cm100"></div>
  <div class="testtest cm200"></div>
  <div class="col cm100"></div>
</div>
<div class="cm1000 in">

</div>
<div class="test in"
data-bottom-top="background-position: 50% 100%; opacity:0;"
data-top-bottom="background-position: 50% 20%; opacity:1;">
</div>
<div class="cm1000 in">

</div>

<footer>footer</footer>
<?php wp_footer(); ?>
<script type="text/javascript">
var s = skrollr.init({
		 forceHeight: false //trueにするとdataで指定した最高値までスクロールが自動的に表示される
});
</script>
</body>
</html>
