<?php
/*
	Template Name: Hohoemi main
*/
//get_template_part('content','hero');
get_header("hohoemi"); ?>
<div class="space"></div>
<section class="Hero bg_brown">
	<div class="inner">

		<!--カルーセル-->
		<div id="pic" class="carousel align-center" v-slide="slide" v-slide_stop="slideStop">
			<div class="carousel__inner">

				<div class="pic" v-for="pic in pics" :key="pic.id">
						<a :href="pic.link" class="">
							<figure>
							<img :src="pic.img" :alt="pic.alt">
							</figure>
							<div>
								<p>{{ pic.caption }}</p>
							</div>
						</a>
					</div>
			</div>

			<div class="slide_direction_btn grid">
				<div class="col grid flex-justify-sb">
				<a class="left_btn d-ib"><i class="fas fa-angle-left"></i></a>
				<a class="right_btn d-ib"><i class="fas fa-angle-right"></i></a>
				</div>
			</div>

			<div class="slide_marker">
				<a href="#" class="marker_btn d-ib" v-for="pic in pics" :data-key="pic.id" :key="pic.id" :class="{'now' : slideActive === pic.id}">●</a>
			</div>
		</div>
	</div>
</section>

<section class="Meal-prep bg_brown">
	<div class="inner">
		<div class="section-title-h2 right-layout grid">
			<span class="cmn-icon d-ib"><i class="far fa-grin-tongue-squint"></i></span>
			<h2 class="cmn-title d-ib">冷凍で作り置きにチャレンジ！</h2>
		</div>

		<div class="article-content grid flex-wrap flex-justify-sb right-layout">
			<article class="article-item-feature">
			
				<figure>
					<img src="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg" class="attachment-post-320x194 size-post-320x194 wp-post-image" alt="" srcset="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg 320w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-300x183.jpg 300w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-260x159.jpg 260w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01.jpg 640w" sizes="(max-width: 320px) 100vw, 320px">
				</figure>
				<ul class="article-tag grid">
					<li class="item d-ib"><a href="#">野菜の冷凍</a></li>
					<li class="item d-ib"><a href="#">長ネギ</a></li>
					<li class="item d-ib"><a href="#">ドムネギ</a></li>
				</ul>

				<a href="#" class="mask-link">
					<h3 class="headline">
						<span>野菜の冷凍長ねぎ【長ねぎの保存】冷蔵で3週間もつ！ 野菜ソムリエのテクニック</span>
					</h3>
				</a>
			</article>
			<!--IE11対策
			flexコンテナ内にposition:absolute要素があるとjustyfy-content: space-betweenが崩れる
		　　-->
			<div class="sub_content grid flex-wrap">
				<article class="article-item">
				<figure>
				<img src="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg" class="attachment-post-320x194 size-post-320x194 wp-post-image" alt="" srcset="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg 320w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-300x183.jpg 300w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-260x159.jpg 260w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01.jpg 640w" sizes="(max-width: 320px) 100vw, 320px">
			</figure>

			<ul class="article-tag is_simple grid">
					<li class="item d-ib"><a href="#">野菜の冷凍</a></li>
					<li class="item d-ib"><a href="#">長ネギ</a></li>
					<li class="item d-ib"><a href="#">ドムネギ</a></li>
				</ul>

				<a href="#" class="mask-link is_small">
					<h3 class="headline">
						<span>野菜の冷凍長ねぎ【長ねぎの保存】冷蔵で3週間もつ！ 野菜ソムリエのテクニック</span>
					</h3>
				</a>
				</article>
				<article class="article-item">
				<figure>
				<img src="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg" class="attachment-post-320x194 size-post-320x194 wp-post-image" alt="" srcset="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg 320w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-300x183.jpg 300w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-260x159.jpg 260w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01.jpg 640w" sizes="(max-width: 320px) 100vw, 320px">
			</figure>

			<ul class="article-tag is_simple grid">
					<li class="item d-ib"><a href="#">野菜の冷凍</a></li>
					<li class="item d-ib"><a href="#">長ネギ</a></li>
					<li class="item d-ib"><a href="#">ドムネギ</a></li>
				</ul>

				<a href="#" class="mask-link is_small">
					<h3 class="headline">
						<span>野菜の冷凍長ねぎ【長ねぎの保存】冷蔵で3週間もつ！ 野菜ソムリエのテクニック</span>
					</h3>
				</a>
				</article>
				<article class="article-item">
				<figure>
				<img src="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg" class="attachment-post-320x194 size-post-320x194 wp-post-image" alt="" srcset="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg 320w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-300x183.jpg 300w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-260x159.jpg 260w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01.jpg 640w" sizes="(max-width: 320px) 100vw, 320px">
			</figure>

			<ul class="article-tag is_simple grid">
					<li class="item d-ib"><a href="#">野菜の冷凍</a></li>
					<li class="item d-ib"><a href="#">長ネギ</a></li>
					<li class="item d-ib"><a href="#">ドムネギ</a></li>
				</ul>

				<a href="#" class="mask-link is_small">
					<h3 class="headline">
						<span>野菜の冷凍長ねぎ【長ねぎの保存】冷蔵で3週間もつ！ 野菜ソムリエのテクニック</span>
					</h3>
				</a>
				</article>
				<article class="article-item">
				<figure>
				<img src="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg" class="attachment-post-320x194 size-post-320x194 wp-post-image" alt="" srcset="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg 320w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-300x183.jpg 300w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-260x159.jpg 260w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01.jpg 640w" sizes="(max-width: 320px) 100vw, 320px">
			</figure>

			<ul class="article-tag is_simple grid">
					<li class="item d-ib"><a href="#">野菜の冷凍</a></li>
					<li class="item d-ib"><a href="#">長ネギ</a></li>
					<li class="item d-ib"><a href="#">ドムネギ</a></li>
				</ul>

				<a href="#" class="mask-link is_small">
					<h3 class="headline">
						<span>野菜の冷凍長ねぎ【長ねぎの保存】冷蔵で3週間もつ！ 野菜ソムリエのテクニック</span>
					</h3>
				</a>
				</article>
			</div>
		</div>

		<div class="to-article-list align-center">
				<a href="#" class="button h-btn bg_brown">記事一覧へ</a>
		</div>

	</div>
</section>

<section class="Meal-prep">
	<div class="inner">
		<div class="section-title-h2 grid">
			<span class="cmn-icon d-ib"><i class="far fa-grin-tongue-squint"></i></span>
			<h2 class="cmn-title d-ib">冷凍で作り置きにチャレンジ！</h2>
		</div>

		<div class="article-content grid flex-wrap flex-justify-sb">
			<article class="article-item-feature">
			
				<figure>
					<img src="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg" class="attachment-post-320x194 size-post-320x194 wp-post-image" alt="" srcset="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg 320w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-300x183.jpg 300w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-260x159.jpg 260w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01.jpg 640w" sizes="(max-width: 320px) 100vw, 320px">
				</figure>
				<ul class="article-tag grid">
					<li class="item d-ib"><a href="#">野菜の冷凍</a></li>
					<li class="item d-ib"><a href="#">長ネギ</a></li>
					<li class="item d-ib"><a href="#">ドムネギ</a></li>
				</ul>

				<a href="#" class="mask-link">
					<h3 class="headline">
						<span>野菜の冷凍長ねぎ【長ねぎの保存】冷蔵で3週間もつ！ 野菜ソムリエのテクニック</span>
					</h3>
				</a>
			</article>
			<!--IE11対策
			flexコンテナ内にposition:absolute要素があるとjustyfy-content: space-betweenが崩れる
		　　-->
			<div class="sub_content grid flex-wrap">
				<article class="article-item">
				<figure>
				<img src="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg" class="attachment-post-320x194 size-post-320x194 wp-post-image" alt="" srcset="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg 320w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-300x183.jpg 300w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-260x159.jpg 260w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01.jpg 640w" sizes="(max-width: 320px) 100vw, 320px">
			</figure>

			<ul class="article-tag is_simple grid">
					<li class="item d-ib"><a href="#">野菜の冷凍</a></li>
					<li class="item d-ib"><a href="#">長ネギ</a></li>
					<li class="item d-ib"><a href="#">ドムネギ</a></li>
				</ul>

				<a href="#" class="mask-link is_small">
					<h3 class="headline">
						<span>野菜の冷凍長ねぎ【長ねぎの保存】冷蔵で3週間もつ！ 野菜ソムリエのテクニック</span>
					</h3>
				</a>
				</article>
				<article class="article-item">
				<figure>
				<img src="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg" class="attachment-post-320x194 size-post-320x194 wp-post-image" alt="" srcset="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg 320w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-300x183.jpg 300w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-260x159.jpg 260w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01.jpg 640w" sizes="(max-width: 320px) 100vw, 320px">
			</figure>

			<ul class="article-tag is_simple grid">
					<li class="item d-ib"><a href="#">野菜の冷凍</a></li>
					<li class="item d-ib"><a href="#">長ネギ</a></li>
					<li class="item d-ib"><a href="#">ドムネギ</a></li>
				</ul>

				<a href="#" class="mask-link is_small">
					<h3 class="headline">
						<span>野菜の冷凍長ねぎ【長ねぎの保存】冷蔵で3週間もつ！ 野菜ソムリエのテクニック</span>
					</h3>
				</a>
				</article>
				<article class="article-item">
				<figure>
				<img src="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg" class="attachment-post-320x194 size-post-320x194 wp-post-image" alt="" srcset="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg 320w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-300x183.jpg 300w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-260x159.jpg 260w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01.jpg 640w" sizes="(max-width: 320px) 100vw, 320px">
			</figure>

			<ul class="article-tag is_simple grid">
					<li class="item d-ib"><a href="#">野菜の冷凍</a></li>
					<li class="item d-ib"><a href="#">長ネギ</a></li>
					<li class="item d-ib"><a href="#">ドムネギ</a></li>
				</ul>

				<a href="#" class="mask-link is_small">
					<h3 class="headline">
						<span>野菜の冷凍長ねぎ【長ねぎの保存】冷蔵で3週間もつ！ 野菜ソムリエのテクニック</span>
					</h3>
				</a>
				</article>
				<article class="article-item">
				<figure>
				<img src="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg" class="attachment-post-320x194 size-post-320x194 wp-post-image" alt="" srcset="https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-320x194.jpg 320w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-300x183.jpg 300w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01-260x159.jpg 260w, https://www.nichireifoods.co.jp/media/wp-content/uploads/2018/11/1811_10_japanese-leek_01.jpg 640w" sizes="(max-width: 320px) 100vw, 320px">
			</figure>

			<ul class="article-tag is_simple grid">
					<li class="item d-ib"><a href="#">野菜の冷凍</a></li>
					<li class="item d-ib"><a href="#">長ネギ</a></li>
					<li class="item d-ib"><a href="#">ドムネギ</a></li>
				</ul>

				<a href="#" class="mask-link is_small">
					<h3 class="headline">
						<span>野菜の冷凍長ねぎ【長ねぎの保存】冷蔵で3週間もつ！ 野菜ソムリエのテクニック</span>
					</h3>
				</a>
				</article>
			</div>
		</div>

		<div class="to-article-list align-center">
				<a href="#" class="button h-btn bg_white">記事一覧へ</a>
		</div>

	</div>
</section>





<div class="cm1000"></div>
<div class="cm1000"></div>
<div class="cm1000"></div>
<div class="cm1000"></div>

<section>
Hohoemi
</section>

<?php get_footer("hohoemi"); ?>
