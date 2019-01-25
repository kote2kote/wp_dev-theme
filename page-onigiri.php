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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body id="<?php echo $slug; ?>" <?php body_class($slug." Onigiri"); ?>>
<div id="debag" class="debag" :class="{show : show}" v-html="innerHTML"></div>

<header class="Header">
<div class="header-info-info col cm50">ニュース枠</div>
<div class="header-info-link col cm50">メニュー枠</div>
	<div class="hero cm0">

		<div id="vue-app-window_centering" class="hero-main">
			<div class="inner flex flex-justify-c">
				<figure class="hero-img cm0">
					<img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=image" alt="">
				</figure>
				<figure class="hero-img cm0">
					<img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=image" alt="">
				</figure>
				<figure class="hero-img cm0">
					<img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=image" alt="">
				</figure>
			</div>
		</div>

		<h1 class="main-logo align-center cm0">
			<figure class="img-logo d-ib">
				<img src="https://via.placeholder.com/1080x1080/cc00cc/ffffff?text=logo" alt="">
			</figure>
		</h1>
		
		<div class="info-area">
			<div class="inner section-content cm0">
			ニュース枠
			</div>
		</div>
		
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

<section class="Oshinagaki cm0">
  <div class="oni section-content cm0">
		<div class="inner flex flex-wrap">

			<div class="oni-item col-4 col-6-lg">
					<div class="inner align-center">
						<figure class="oni-big"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=oni" alt=""></figure>
						<figure class="oni-small"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
						<p class="oni-name">たらこ</p>
					</div>
			</div>
			<div class="oni-item col-4 pd-t20 col-6-lg">
					<div class="inner align-center">
						<figure class="oni-big"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=oni" alt=""></figure>
						<figure class="oni-small"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
						<p class="oni-name">たらこ</p>
					</div>
			</div>
			<div class="oni-item col-4 col-6-lg">
					<div class="inner align-center">
						<figure class="oni-big"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=oni" alt=""></figure>
						<figure class="oni-small"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
						<p class="oni-name">たらこ</p>
					</div>
			</div>
			<div class="oni-item col-4 col-6-lg">
					<div class="inner align-center">
						<figure class="oni-big"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=oni" alt=""></figure>
						<figure class="oni-small"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
						<p class="oni-name">たらこ</p>
					</div>
			</div>
			<div class="oni-item col-4 pd-t20 col-6-lg">
					<div class="inner align-center">
						<figure class="oni-big"><img src="https://via.placeholder.com/1080x1080/27709b/ffffff?text=oni" alt=""></figure>
						<figure class="oni-small"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
						<p class="oni-name">たらこ</p>
					</div>
			</div>
			<div class="oni-item col-4 col-6-lg">
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
  <div class="inner cm0">
		<h2 class="genki-heading cm0">私達は皆さまを<br><span class="span-oni d-ib">ちょっと</span><span>元気にします</span></h2>
		<ul class="genki-onipics-lists">
			<li class="item cm0">
  			<figure class="item-image"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
			</li>
			<li class="item cm0">
  			<figure class="item-image"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
			</li>
			<li class="item cm0">
  			<figure class="item-image"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
			</li>
			<li class="item cm0">
  			<figure class="item-image"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></figure>
			</li>
		</ul>
		<a href="#" class="ctoa-oshi button d-t m-auto-w cm0">想いを<br>読む</a>
</div>
		
</section>

<section class="Kodawari">
  <div class="inner cm500">

		<div class="kodawari section-content flex flex-wrap">
			<div class="kodawari-text col-md-6 cm100">
				<h3 class="heading cm0"><span class="dec1">こだわり</span><span class="dec2">1</span><br>一つ一つが手作り</h3>
				<p class="text cm0">機械も型も使いません。<br>ひとつひとつ手づくりで、人から人へ、心をむすぶ、<br>心をにぎる、おにぎり専門店です。</p>
			</div>
			<div class="kodawari-image col-md-6 flex cm100">
				<div class="col inner pd-r5">
					<figure class="item-image">
						<img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt="">
					</figure>
				</div>
				<div class="col inner pd-l5">
					<figure class="item-image">
						<img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt="">
					</figure>
				</div>
			</div>
		</div>

		<div class="kodawari section-content flex flex-wrap">
			<div class="kodawari-text col-md-6 cm100 flex-order">
				<h3 class="heading cm0"><span class="dec1">こだわり</span><span class="dec2">1</span><br>一つ一つが手作り</h3>
				<p class="text cm0">機械も型も使いません。<br>ひとつひとつ手づくりで、人から人へ、心をむすぶ、<br>心をにぎる、おにぎり専門店です。</p>
			</div>
			<div class="kodawari-image col-md-6 flex cm100">
				<div class="col inner pd-r5">
					<figure class="item-image">
						<img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt="">
					</figure>
				</div>
				<div class="col inner pd-l5">
					<figure class="item-image">
						<img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt="">
					</figure>
				</div>
			</div>
		</div>
		<a href="#" class="ctoa-oshi button d-t m-auto-w cm0">こだわりを<br>もっと読む</a>

	</div>
</section>

<footer class="Footer">
  <div class="inner cm0">
		<div class="footer-content flex flex-wrap">
			
			<div class="store-menu md-100">
				<div class="inner">
					<ul class="store-menu-lists cm0">
						<li class="item">
							<a href="#" class="d-b">さんすて岡山店</a>
							<time class="d-b">7:00〜21:00</time>
						</li>
						<li class="item">
							<a href="#" class="d-b">さんすて岡山店</a>
							<time class="d-b">7:00〜21:00</time>
						</li>
						<li class="item">
							<a href="#" class="d-b">さんすて岡山店</a>
							<time class="d-b">7:00〜21:00</time>
						</li>
						<li class="item">
							<a href="#" class="d-b">さんすて岡山店</a>
							<time class="d-b">7:00〜21:00</time>
						</li>
					</ul>
				</div>
			</div>

			<div class="site-menu md-100 cm0">
				<div class="inner">
					<h4 class="site-menu-heading pd-b10">ホーム</h4>
					<ul class="site-menu-lists">
						<li class="item"><a href="">おしながき</a></li>
						<li class="item"><a href="">おしながき</a></li>
						<li class="item"><a href="">おしながき</a></li>
						<li class="item"><a href="">おしながき</a></li>
						<li class="item"><a href="">おしながき</a></li>
					</ul>
				</div>
			</div>

			<div class="site-character md-100">
				<div class="inner">

					<div class="yamada-footerlogo align-center">
						<figure class="footerlogo">
							<img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt="">
						</figure>
						<span class="copyright-text d-b">©Yamadamura, All rights reserved.</span>
					</div>

					<div class="social-icons align-center">
			  		<a href="#" class="instagram d-ib"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></a>
	  				<a href="#" class="twitter d-ib"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></a>
					</div>
					
					<a href="#" class="onii d-b"><img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</footer>


<a href="#" class="pagetop-link align-center d-ib">
	<figure class="pagetop-link-image">
		<img src="https://via.placeholder.com/1080x1080/009933/ffffff?text=mini-oni" alt="">
	</figure>
　<span class="pagetop-link-text cm0 d-t">ページトップヘ</span>
</a>

<?php wp_footer(); ?>
<script type="text/javascript">
var s = skrollr.init({
		 forceHeight: false //trueにするとdataで指定した最高値までスクロールが自動的に表示される
});
</script>
</body>
</html>
