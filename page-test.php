<?php
/*
	Template Name: Test Page
*/
//get_template_part('content','hero');
get_header(); ?>

<section class="sec01">
  <div class="section-content">
    <h2>/, /posts</h2>
    <div class="cm0 pd5 mg-b50">
      layout/default.vue

      <div class="cm0 pd5 mg5">
        TheHeader

        <div class="cm0 pd5 mg5">
          TheSideNavToggle
        </div>
      </div>

      <div class="cm0 pd5 mg5">
        TheSidenav
      </div>

      <div class="cm0 pd5 mg5">
        nuxt:PostList

        <div class="cm0 pd5 mg5">
          PostPreview
        </div>
      </div>

    </div>

    <h2>/posts/id</h2>
    <div class="cm0 pd5 mg-b50">
      layout/default.vue

      <div class="cm0 pd5 mg5">
        TheHeader

        <div class="cm0 pd5 mg5">
          TheSideNavToggle
        </div>
      </div>

      <div class="cm0 pd5 mg5">
        TheSidenav
      </div>

      <div class="cm0 pd5 mg5">
        nuxt:this
      </div>

    </div>

    <h2>/admin</h2>
    <div class="cm0 pd5 mg-b50">
      layout/admin.vue

      <div class="cm0 pd5 mg5">
        AppButton
      </div>

      <div class="cm0 pd5 mg5">
        nuxt:PostList

        <div class="cm0 pd5 mg5">
          PostPreview
        </div>
      </div>

    </div>

    <h2>/admin/new-post, /admin/postid</h2>
    <div class="cm0 pd5 mg-b50">
      layout/admin.vue

      <div class="cm0 pd5 mg5">
        nuxt:AdminPostForm

        <div class="cm0 pd5 mg5">
          AppControlInput
        </div>

        <div class="cm0 pd5 mg5">
          AppButton
        </div>
      </div>

    </div>

    <h2>/admin/auth</h2>
    <div class="cm0 pd5 mg-b50">
      layout/admin.vue

      <div class="cm0 pd5 mg5">
        nuxt
        <div class="cm0 pd5 mg5">
          AppControlInput
        </div>

        <div class="cm0 pd5 mg5">
          AppButton
        </div>
      </div>
    </div>

</section>

<?php get_footer(); ?>
