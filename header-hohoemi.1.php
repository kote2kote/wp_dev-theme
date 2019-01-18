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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body id="<?php echo $slug; ?>" <?php body_class($slug." Hohoemi"); ?>>


<header id="hohoemi-Header" v-scroll="handleScroll"  class="Header" :class="{'js-scroll' : js_scroll}">
	<div class="inner grid">
		<div class="sub-inner__l col">
			<figure><img src="https://via.placeholder.com/55x56/EE2E21/ffffff?text=logo" alt="" class="mini-logo d-ib" :class="{'js-scroll' : js_scroll}"></figure>
		</div>

		<div class="sub-inner__c align-center">
			<!-- <figure class="align-center cm0"><img src="https://via.placeholder.com/1920x680/E61A0E/ffffff?text=logo" alt="" class="logo d-ib"></figure> -->
			<a href="#" class="d-ib">
				<picture class="align-center" :class="{'js-scroll' : js_scroll}">
					<source media="(max-width:768px)" srcset="https://www.nichireifoods.co.jp/media/wp-content/themes/nichireifoods_media/assets/images/common/logo_sp.svg">
					<source media="(min-width:768px)" srcset="https://www.nichireifoods.co.jp/media/wp-content/themes/nichireifoods_media/assets/images/common/logo_pc.svg">
					<img src="https://www.nichireifoods.co.jp/media/wp-content/themes/nichireifoods_media/assets/images/common/logo_pc.svg" alt="冷凍で食を豊かに ほほえみごはん">
				</picture>
			</a>
		</div>

		<div class="sub-inner__r col">
			<div class="inner grid flex-align-fs flex-justify-fe">
		    <a href="#"><i class="fab fa-facebook-f"></i></a>
				<span class="space"></span>
				<a href="#" class="button">ほほえみごはんの想い</a>
				<a href="#"><i class="fas fa-search"></i></a>
			</div>
		
		</div>

	</div>

	<nav class="global-nav">
				<ul class="global-nav__lists grid flex-justify-center align-center">
				<li class="global-nav__list">
						<a href="#" class="d-b" :class="{'js-scroll' : js_scroll}"><i class="far fa-grin-tongue-squint d-b" :class="{'js-scroll' : js_scroll}"></i><span class="d-b" :class="{'js-scroll' : js_scroll}">食材の肉食！<span></a>
					</li>
					<li class="global-nav__list">
						<a href="#" class="d-b" :class="{'js-scroll' : js_scroll}"><i class="far fa-grin-tongue-squint d-b" :class="{'js-scroll' : js_scroll}"></i><span class="d-b" :class="{'js-scroll' : js_scroll}">食材の肉食！<span></a>
					</li>
					<li class="global-nav__list">
						<a href="#" class="d-b" :class="{'js-scroll' : js_scroll}"><i class="far fa-grin-tongue-squint d-b" :class="{'js-scroll' : js_scroll}"></i><span class="d-b" :class="{'js-scroll' : js_scroll}">食材の肉食！<span></a>
					</li>
					<li class="global-nav__list">
						<a href="#" class="d-b" :class="{'js-scroll' : js_scroll}"><i class="far fa-grin-tongue-squint d-b" :class="{'js-scroll' : js_scroll}"></i><span class="d-b" :class="{'js-scroll' : js_scroll}">食材の肉食！<span></a>
					</li>
					<li class="global-nav__list">
						<a href="#" class="d-b" :class="{'js-scroll' : js_scroll}"><i class="far fa-grin-tongue-squint d-b" :class="{'js-scroll' : js_scroll}"></i><span class="d-b" :class="{'js-scroll' : js_scroll}">食材の肉食！<span></a>
					</li>
					<li class="global-nav__list">
						<a href="#" class="d-b" :class="{'js-scroll' : js_scroll}"><i class="far fa-grin-tongue-squint d-b" :class="{'js-scroll' : js_scroll}"></i><span class="d-b" :class="{'js-scroll' : js_scroll}">食材の肉食！<span></a>
					</li>
				</ul>
			</nav>
</header>