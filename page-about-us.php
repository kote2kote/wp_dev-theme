<?php
/*
	Template Name: About Us Page
*/
//get_template_part('content','hero');
get_header(); ?>

<section class="hero">
  <div class="container">

    <div class="maintitle">
      <h1 class="maintitle__h1">About Us</h1>
      <p class="maintitle__p">STREAM - UI KIT</p>
    </div>

  </div>
</section>

</div>

</header>

<section class="about_text">
  <div class="section-content">
    <p class="p1">Stream is a <strong>creative</strong> technology company providing key digital services.</p>
    <p class="p2">Focused on helping our clients to build a <strong>successful</strong> business on web and mobile.</p>
  </div>
</section>

<section class="three-features">
  <div class="section-content flex">
    <div class="features__item">
      <div class="features__item-icon">
        <span class="fab fa-grav"></span>
      </div>
      <div class="features__item-title">
        Creative ideas
      </div>
      <div class="features__item-para">
        CurabiturAchieve virtually any look and layout from within the one template.
      </div>
    </div>
    <div class="features__item">
      <div class="features__item-icon">
        <span class="fab fa-grav"></span>
      </div>
      <div class="features__item-title">
        Creative ideas
      </div>
      <div class="features__item-para">
        CurabiturAchieve virtually any look and layout from within the one template.
      </div>
    </div>
    <div class="features__item">
      <div class="features__item-icon">
        <span class="fab fa-grav"></span>
      </div>
      <div class="features__item-title">
        Creative ideas
      </div>
      <div class="features__item-para">
        CurabiturAchieve virtually any look and layout from within the one template.
      </div>
    </div>
  </div>
</section>

<section class="good">

  <div class="section-content">
    <div class="good__title-box">
      <h2 class="title">What we are good at?</h2>
      <p class="text">Your business needs a little push. We strive to figure out ways to help your audience grow.</p>
    </div>

    <div class="good__graph-box flex">
      <div class="graph-box flex">
        <div class="graph">

          <div class="graph-background flex flex-aitem-bottom">
            <div class="graph-main g01"></div>
          </div>
          <small>90%</small>
          <span>UI/UX</span>

        </div>
        <div class="graph">

          <div class="graph-background flex flex-aitem-bottom">
            <div class="graph-main g02"></div>
          </div>
          <small>90%</small>
          <span>UI/UX</span>

        </div>
        <div class="graph">

          <div class="graph-background flex flex-aitem-bottom">
            <div class="graph-main g03"></div>
          </div>
          <small>90%</small>
          <span>UI/UX</span>

        </div>
        <div class="graph">

          <div class="graph-background flex flex-aitem-bottom">
            <div class="graph-main g04">s</div>
          </div>
          <small>90%</small>
          <span>UI/UX</span>

        </div>
      </div>
      <div class="text">
        <p class="p01">As creatives, it's important that we strive to do work outside of obligation. This lets us stay ahead of the curve for our clients and internal projects.</p>
        <p class="p02">At the end of the day, it's important to not let being busy distract us from having fun. Smiling, laughing, and hanging helps us work together to achieve this. It’s important to stay detail oriented with every project we tackle.</p>
      </div>
    </div>
  </div>

</section>

<section class="creative">
  <div class="section-content">
    <div class="section-title-box">
      <h2 class="title">Our Creative Folks</h2>
      <p class="text">Our top professionals are ready to help with your business.</p>
    </div>
    <div class="section-content flex">
      <div class="flex-1">
        <figure class="photos">
          <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/400x550/img1.jpg" alt="" class="image">
          <div class="person">
            <h5 class="name">Jane Rowe</h5>
            <small class="work">Social Marketer</small>
          </div>
        </figure>
      </div>
      <div class="flex-1">
        <figure class="photos">
          <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/400x550/img1.jpg" alt="" class="image">
          <div class="person">
            <h5 class="name">Jane Rowe</h5>
            <small class="work">Social Marketer</small>
          </div>
        </figure>
      </div>
      <div class="flex-1">
        <figure class="photos">
          <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/400x550/img1.jpg" alt="" class="image">
          <div class="person">
            <h5 class="name">Jane Rowe</h5>
            <small class="work">Social Marketer</small>
          </div>
        </figure>
      </div>
      <div class="flex-1">
        <figure class="photos">
          <img src="<?php bloginfo('stylesheet_directory');?>/assets/images/400x550/img1.jpg" alt="" class="image">
          <div class="person">
            <h5 class="name">Jane Rowe</h5>
            <small class="work">Social Marketer</small>
          </div>
        </figure>
      </div>
    </div>
  </div>
</section>

<section class="companies">
  <div class="section-content">
    <div class="section-title-box">
      <h2 class="title">Trusted by Great Companies</h2>
    </div>

    <div class="section-content">
      <ul class="companies__logos flex">
        <li class="logo"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/partners/img1.png" alt="logo" class="logo"></li>
        <li class="logo"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/partners/img1.png" alt="logo" class=""></li>
        <li class="logo"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/partners/img1.png" alt="logo" class=""></li>
        <li class="logo"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/partners/img1.png" alt="logo" class=""></li>
        <li class="logo"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/partners/img1.png" alt="logo" class=""></li>
        <li class="logo"><img src="<?php bloginfo('stylesheet_directory');?>/assets/images/partners/img1.png" alt="logo" class=""></li>
      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>
