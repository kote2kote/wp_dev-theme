<?php
/*
	Template Name: About Me Page
*/
//get_template_part('content','hero');
get_header(); ?>

<section class="hero">
  <div class="container">

    <div class="maintitle">
      <h1 class="maintitle__h1">Jane Moris</h1>
      <p class="maintitle__p">UI/UX Designer, Stream</p>
      <ul class="maintitle__icon flex">
        <li><a href="#"><span class="fab fa-facebook"></span></a></li>
        <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
        <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
      </ul>
    </div>

  </div>
</section>

</div>

</header>

<section class="person_image">
  <div class="section-content">
    <div class="image">
      <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/200x200/img1.jpg" alt="">
    </div>
  </div>
</section>

<section class="me_data">
  <div class="section-content flex">
    <div class="me_data__l flex-1">
      <h5 class="title">About Me</h5>
      <p class="p1">I am an ambitious workaholic, but apart from that, pretty simple person. Whether it's branding, print, UI + UX I've got you covered.</p>
      <p class="p2">I strive to figure out the right solutions for your look to stand out amongst the rest.</p>
      <small class="db">Jane Moris, UI/UX Designer</small>
    </div>
    <div class="me_data__r flex-1">
      <h5 class="title">My skills</h5>
      <div class="skill">
        <div class="skill_name">
          Web Design - 93%
        </div>
        <div class="graph">
          <div class="background">
            <div class="graph_main g01"></div>
          </div>
        </div>
      </div>

      <div class="skill">
        <div class="skill_name">
          Web Design - 93%
        </div>
        <div class="graph">
          <div class="background">
            <div class="graph_main g02"></div>
          </div>
        </div>
      </div>

      <div class="skill">
        <div class="skill_name">
          Web Design - 93%
        </div>
        <div class="graph">
          <div class="background">
            <div class="graph_main g03"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="branding_works">
  <div class="branding_works__title">
    <h2>Branding Works</h2>
    <p>We design and develope experiances that make people's lives easy and simple.</p>
  </div>

  <div class="branding_works__gallery">

    <ul class="branding_works__gallery-category flex">
      <li class="branding_works__gallery-menu"><a href="#">All</a></li>
      <li class="branding_works__gallery-menu"><a href="#">Illustration</a></li>
      <li class="branding_works__gallery-menu"><a href="#">Design</a></li>
      <li class="branding_works__gallery-menu"><a href="#">Graphic</a></li>
      <li class="branding_works__gallery-menu"><a href="#">Logo</a></li>
    </ul>

    <div class="branding_works__gallery-box flex">
      <figure class="branding_works__gallery-item">
        <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/portfolio/img4.jpg" alt="">
      </figure>
      <figure class="branding_works__gallery-item">
        <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/portfolio/img4.jpg" alt="">
      </figure>
      <figure class="branding_works__gallery-item">
        <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/portfolio/img4.jpg" alt="">
      </figure>
      <figure class="branding_works__gallery-item">
        <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/portfolio/img4.jpg" alt="">
      </figure>
      <figure class="branding_works__gallery-item">
        <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/portfolio/img4.jpg" alt="">
      </figure>
      <figure class="branding_works__gallery-item">
        <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/portfolio/img4.jpg" alt="">
      </figure>
    </div>
  </div>

  <div class="branding_works__partners-logo">
    <ul class="partners-logo flex">
      <li class="logo"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/partners/img1.png" alt="logo" class=""></li>
      <li class="logo"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/partners/img1.png" alt="logo" class=""></li>
      <li class="logo"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/partners/img1.png" alt="logo" class=""></li>
      <li class="logo"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/partners/img1.png" alt="logo" class=""></li>
    </ul>
  </div>

  <p class="branding_works__bottom-text"><a href="#">Got project? Request a free quote!</a></p>
</section>

<?php get_footer(); ?>
