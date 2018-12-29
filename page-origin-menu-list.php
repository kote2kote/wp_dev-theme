<?php
/*
	Template Name: Menu List
*/
//get_template_part('content','hero');

get_header("origin"); ?>

<section class="hero flex">
<h2 class="heading">メニュー</h2>
</section>

<section class="breadcrumb">
  <div class="section-content">
    <ul class="breadcrumb__menu_list flex">
      <li class="item"><a href="">link</a></li>
      <li class="item"><a href="">link</a></li>
      <li class="item"><a href="">link</a></li>
    </ul>
  </div>
</section>

<section class="food_menu">

  <div class="tab flex">
    <span class="east cm0">関東メニュー</span>
    <span class="west cm0">関西メニュー</span>
  </div>

  <div class="food cm0">
    <div class="section-content">
      <div class="search_menu cm0">
        <h3 class="title cm0">メニュー検索</h3>
        <div class="search_menu__content">
          <ul class="menu_list flex">
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="search_menu allergen cm0">
        <h3 class="title cm0">アレルゲン検索</h3>
        <div class="search_menu__content">
          <ul class="menu_list flex">
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
            <li class="item">
              <img src="https://placehold.jp/76x67.png" alt="">
              <span>aa</span>
            </li>
          </ul>
        </div>
      </div>

      <p class="align-center">※アレルゲン検索機能は『Internet Explorer 8』には対応しておりません。</p>
      <div class="search_btn btn align-center"><button>検索</button></div>
      <div class="search_select align-center">52件が該当しました
        <span class="search_select_box">
        <select name="example">
          <option value="サンプル1">サンプル1</option>
          <option value="サンプル2">サンプル2</option>
          <option value="サンプル3">サンプル3</option>
        </select>
        </span>
      </div>
      <p class="warning">各メニューには栄養成分の数値を「エネルギー / タンパク質 / 脂質 / 炭水化物 / ナトリウム / 食塩相当量」の順で記載をしております。</p>

    </div>
  </div>

</section>

<section class="main_menu">
  <div class="section-content cm0">

  
<?php
  $arg = array(
             'posts_per_page' => 4, // 表示する件数
             'orderby' => 'date', // 日付でソート
             'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
             'category_name' => 'menu_east' // 表示したいカテゴリーのスラッグを指定
         );
  $posts = get_posts( $arg );
  if( $posts ): 
?>
  <h4 class="title">投稿で表示してみる</h4>
  <ul class="main_menu__list grid">

<?php 
foreach ( $posts as $post ) :
  setup_postdata( $post );
?>
    <li class="item col-3 col-4-lg col-6-md col-12-sm">
      <div class="item_content cm0">
        <a href="<?php the_permalink(); ?>" class="link">
          <div class="figure">
            <figure><?php the_post_thumbnail(); ?></figure>
            <span class="label cm0">new</span>
          </div>
          <div class="line"></div>
          <div class="detail">
            <h4 class="menu_name"><?php the_title(); ?></h4>
            <p>
              <span class="kakaku"><?php echo get_post_meta($post->ID , 'kakaku_hontai' ,true); ?></span>
              <span class="zeikomi"><?php echo get_post_meta($post->ID , 'kakaku_zeikomi' ,true); ?></span>
              <span class="energy"><?php echo get_post_meta($post->ID , 'energy' ,true);echo $energy; ?></span>
            </p>
          </div>
        </a>
      </div>
    </li>
<?php endforeach; ?>
    </ul>
<?php
  endif;
  wp_reset_postdata();
?>

<?php
$args = array(
  'post_type' => 'menu', /* カスタム投稿名が「gourmet」の場合 */
  'posts_per_page' => 4, /* 表示する数 */
); ?>
 
<?php $my_query = new WP_Query( $args ); ?>
<h4 class="title">カスタム投稿タイプで表示してみる</h4>
<ul class="main_menu__list grid">

<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    <li class="item col-3 col-4-lg col-6-md col-12-sm">
      <div class="item_content cm0">
        <a href="<?php the_permalink(); ?>" class="link">
          <div class="figure">
            <figure><?php the_post_thumbnail(); ?></figure>
            <span class="label cm0">new</span>
          </div>
          <div class="line"></div>
          <div class="detail">
            <h4 class="menu_name"><?php the_title(); ?></h4>
            <p>
            <span class="kakaku"><?php echo get_post_meta($post->ID , 'kakaku_hontai' ,true); ?></span>
              <span class="zeikomi"><?php echo get_post_meta($post->ID , 'kakaku_zeikomi' ,true); ?></span>
              <span class="energy"><?php echo get_post_meta($post->ID , 'energy' ,true);echo $energy; ?></span>
            </p>
          </div>
        </a>
      </div>
    </li>
<?php endwhile; ?>
</ul>
<?php wp_reset_postdata(); ?>

    <ul class="main_menu__list grid">

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

      <li class="item col-3 col-4-lg col-6-md col-12-sm">
        <div class="item_content cm0">
          <a href="#" class="link">
            <div class="figure">
              <figure><img src="https://placehold.jp/900x600.png" alt=""></figure>
              <span class="label cm0">new</span>
            </div>
            <div class="line"></div>
            <div class="detail">
              <h4 class="menu_name">粒マスタードハンバーグ弁当</h4>
              <p>
                <span class="kakaku">本体価格 : 741円/1個</span>
                <span class="zeikomi">(税込 : 800円/1個)</span>
                <span class="energy">1210kcal / 45.1g / 56.1g / 124.9g / 1919mg / 4.9g</span>
              </p>
            </div>
          </a>
        </div>
      </li>

    </ul>
  </div>
</section>
<?php get_footer("origin"); ?>
