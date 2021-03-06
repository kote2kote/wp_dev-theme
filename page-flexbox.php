<?php
/*
	Template Name: Flexbox
*/
//get_template_part('content','hero');
get_header("ui-kit"); ?>
<section class="Hero">
  <div class="Container">

    <div class="maintitle">
      <h1 class="maintitle__h1">Flexbox</h1>
      <p class="maintitle__p">Flexboxのテスト</p>
    </div>

  </div>
</section>

</div>

</header>

<section class="flexbox">
  <div class="section-content">

    <div class="section-title-box">
      <h2 class="title">Flexbox</h2>
      <p class="text">Flexboxのテスト</p>
    </div>

<div class="grid">
		<div class="md-100 cm300" style="width:300px;"></div>
		<div class="col cm300"></div>
	</div>

  <div class="grid">
  	<div class="col-1 cm0">1</div>
  	<div class="col-1 cm0">1</div>
  	<div class="col-1 cm0">1</div>
  	<div class="col-1 cm0">1</div>
  	<div class="col-1 cm0">1</div>
  	<div class="col-1 cm0">1</div>
  	<div class="col-1 cm0">1</div>
  	<div class="col-1 cm0">1</div>
  	<div class="col-1 cm0">1</div>
  	<div class="col-1 cm0">1</div>
  	<div class="col-1 cm0">1</div>
  	<div class="col-1 cm0">1</div>
  </div>

  <div class="grid">
  	<div class="col-1 cm0">1</div>
  	<div class="col-2 cm0">2</div>
  	<div class="col-3 cm0">3</div>
  	<div class="col-4 cm0">4</div>
  	<div class="col-2 cm0">2</div>
  </div>

  <div class="grid">
  	<div class="col-6 cm0">66</div>
  	<div class="col-6 cm0">66666</div>
  </div>

  <div class="grid">
  	<div class="col-5 cm0">
  		<p>Sotto un cespo di rose scarlatte dai al rospo the caldo col latte.</p>
  		<p>Sotto un cespo di rose paonazze tocca al rospo lavare le tazze.</p>
  	</div>
  	<div class="col-3 cm0">3</div>
  	<div class="col-4 cm0">4</div>
  </div>

  <div class="grid">
  	<div class="col-6">
  		<div class="grid nested">
  			<div class="col-7 cm0">7</div>
  			<div class="col-2 cm0">2</div>
  			<div class="col-3 cm0">3</div>
  		</div>
  	</div>
  	<div class="col-6">
  		<div class="grid nested wide-fit">
  			<div class="col-7 cm0">7</div>
  			<div class="col-2 cm0">2</div>
  			<div class="col-3 cm0">3</div>
  		</div>
  	</div>
  </div>

  <div class="grid center">
  	<div class="col-6">
  		<div class="grid nested wide-fit">
  			<div class="col-7 cm0">7</div>
  			<div class="col-2 cm0">2</div>
  			<div class="col-3 cm0">3</div>
  		</div>
  	</div>
  </div>

  <div class="grid center">
  	<div class="col-3 cm0">3</div>
  	<div class="col-3 cm0">3</div>
  </div>

  <div class="grid test">
  	<div class="col-7 cm0">7777</div>
  	<div class="col-2 cm0">2</div>
  	<div class="col-3 cm0">3</div>
  </div>

  <div class="grid test">
    <div class="cm0 md-100" style="width:200px;">
      <ul class="grid">
        <li class="col-md-test cm0">mdでflex: 1 1 100px;</li>
        <li class="col-md cm0">col-md</li>
        <li class="col-md cm0">col-md</li>
        <li class="col-md cm0">col-md</li>
      </ul>
    </div>
    <div class="col cm0">

      <ul class="grid mg-b10">
        <li class="col cm100">col</li>
        <li class="col cm100">col</li>
        <li class="col cm100">col</li>
      </ul>

      <div class="grid pd50">
        <div class="cm100 mg-r20 md-100 cm500" style="width:60%;">
          幅60%
        </div>
        <div class="col cm500">
          flex: 1 1;
        </div>
      </div>
    </div>
  </div>

  <div class="grid">
  	<div class="col-md-8 cm0">8</div>
  	<div class="col-md-1 cm0">1</div>
  	<div class="col-md-3 cm0">3</div>
  </div>

  <div class="grid">
  	<div class="col-9 cm0">9</div>
  	<div class="col-1 cm0">1</div>
  	<div class="col-2 cm0">2</div>
  </div>

  <div class="grid">
  	<div class="col-10 cm0">10</div>
  	<div class="col-1 cm0">1</div>
  	<div class="col-1 cm0">1</div>
  </div>

  <div class="grid">
  	<div class="col-11 cm0">11</div>
  	<div class="col-1 cm0">1</div>
  </div>

  <div class="grid">
  	<div class="col-12 cm0">12</div>
  </div>

  <div class=center">
  	<div class="col-6 cm0">6</div>
  </div>

  <div class=center">
  	<div class="col-3 cm0">3</div>
  	<div class="col-3 cm0">3</div>
  </div>

  <div class="grid">
  	<div class="fixed-width">
  		<p>Fixed width column</p>
  	</div>
  	<div class="col">
  		<div class="grid nested">
  			<div class="col-7 cm0">7</div>
  			<div class="col-2 cm0">2</div>
  			<div class="col-3 cm0">3</div>
  		</div>
  	</div>
  </div>

  <div class="grid">
  	<div class="fixed-width">
  		<p>Fixed width column</p>
  	</div>
  	<div class="col">
  		<div class="grid nested">
  			<div class="col-7 cm0">7</div>
  			<div class="col-2 cm0">2</div>
  			<div class="col-3 cm0">3</div>
  		</div>
  	</div>
  </div>
</div>
</section>


<?php get_footer("ui-kit"); ?>
