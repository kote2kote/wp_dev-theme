<?php
/*
	Template Name: Onigiri
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

<body id="<?php echo $slug; ?>" <?php body_class($slug." Onigiri"); ?>>
<div id="debag" class="debag" :class="{show : show}" v-html="innerHTML"></div>

<header class="Header">
<div class="header-info-info col cm100">test</div>
<div class="header-info-link col cm100">test</div>

	<div class="hero cm300">
		<div class="hero-main flex">
			<figure class="hero-img col">
				<img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=image" alt="">
			</figure>
			<figure class="hero-img col">
				<img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=image" alt="">
			</figure>
			<figure class="hero-img col">
				<img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=image" alt="">
			</figure>
		</div>


			


		<h1 class="main-logo align-center">
			<figure class="img-logo d-ib">
				<img src="https://via.placeholder.com/1080x1080/cc00cc/ffffff?text=logo" alt="">
			</figure>
    </h1>
		

		<nav class="grobal-nav">
			<div class="inner section-content">

				<ul class="menu-lists flex">
					<li class="item cm100 col">
						<a href="#" class="d-b align-center">
							<figure class="menu-icon"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=menu" alt=""></figure>
							<span>おしながき</span>
						</a>
					</li>
					<li class="item cm100 col">
						<a href="#" class="d-b align-center">
							<figure class="menu-icon"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=menu" alt=""></figure>
							<span>おしながき</span>
						</a>
					</li>
					<li class="item cm100 col">
						<a href="#" class="d-b align-center">
							<figure class="menu-icon"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=menu" alt=""></figure>
							<span>おしながき</span>
						</a>
					</li>
					<li class="item cm100 col">
						<a href="#" class="d-b align-center">
							<figure class="menu-icon"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=menu" alt=""></figure>
							<span>おしながき</span>
						</a>
					</li>
					<li class="item cm100 col">
						<a href="#" class="d-b align-center">
							<figure class="menu-icon"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=menu" alt=""></figure>
							<span>おしながき</span>
						</a>
					</li>
				</ul>

			</div>
		</nav>
	</div>
</header>

<section class="Oshinagaki">
  <div class="oni section-content cm0">
		<div class="inner flex flex-wrap">

			<div class="oni-item col-4">
					<div class="inner align-center">
						<figure class="oni-big"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=oni" alt=""></figure>
						<figure class="oni-small"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
						<p class="oni-name">たらこ</p>
					</div>
			</div>
			<div class="oni-item col-4 pd-t20">
					<div class="inner align-center">
						<figure class="oni-big"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=oni" alt=""></figure>
						<figure class="oni-small"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
						<p class="oni-name">たらこ</p>
					</div>
			</div>
			<div class="oni-item col-4">
					<div class="inner align-center">
						<figure class="oni-big"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=oni" alt=""></figure>
						<figure class="oni-small"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
						<p class="oni-name">たらこ</p>
					</div>
			</div>
			<div class="oni-item col-4">
					<div class="inner align-center">
						<figure class="oni-big"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=oni" alt=""></figure>
						<figure class="oni-small"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
						<p class="oni-name">たらこ</p>
					</div>
			</div>
			<div class="oni-item col-4 pd-t20">
					<div class="inner align-center">
						<figure class="oni-big"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=oni" alt=""></figure>
						<figure class="oni-small"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
						<p class="oni-name">たらこ</p>
					</div>
			</div>
			<div class="oni-item col-4">
					<div class="inner align-center">
						<figure class="oni-big"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=oni" alt=""></figure>
						<figure class="oni-small"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
						<p class="oni-name cm0">たらこ</p>
					</div>
			</div>

		</div>
		
		<a href="#" class="ctoa-oshi button d-t m-auto-w cm0">おしながき<br>を見る</a>

	</div>

</section>

<section class="Genki">
  <div class="inner cm500">
		Genki
	</div>
</section>

<section class="Kodawari">
  <div class="inner cm500">
		Kodawari
	</div>
</section>

<footer class="Footer">
  <div class="inner cm500">
		Footer
	</div>
</footer>


<?php wp_footer(); ?>
<script type="text/javascript">
var s = skrollr.init({
		 forceHeight: false //trueにするとdataで指定した最高値までスクロールが自動的に表示される
});
</script>
</body>
</html>
