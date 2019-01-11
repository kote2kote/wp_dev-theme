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

<div class="cm1000"></div>
<div class="cm1000"></div>
<div class="cm1000"></div>
<div class="cm1000"></div>

<section>
Hohoemi
</section>

<?php get_footer("hohoemi"); ?>
