<?php
/*
	Template Name: Hohoemi main
*/
//get_template_part('content','hero');
get_header("hohoemi"); ?>
<div class="space"></div>
<section class="Hero">
	<div class="inner">

		<!--カルーセル-->
		<div id="pic" class="carousel align-center cm0" v-slide="slide">
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
			<div class="slide_marker">
				<span v-for="pic in pics" :key="pic.id" :class="{'now' : slideActive === pic.id}">●</span>
			</div>
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
