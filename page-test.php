<?php
/*
	Template Name: Test Page
*/
// Custom Fields
$test_text = get_post_meta(2186, 'test_field', true);
get_header(); ?>

<section class="Test content-area cm0 col">
  <h2 class="h2">page-test.php</h2>
  <div class="inner cm0">
    <h3 class="h3">page-test.php</h3>
    <?php the_title(); ?>
    <h3 class="h3">Custom Fields</h3>
    $test_text = get_post_meta(2186, 'test_field', true)
     => <?php echo $test_text; ?>
  </div>
</section>

<?php
get_sidebar();
get_footer();