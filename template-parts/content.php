<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_dev_theme
 */

?>
<!--エントリー-->
<article id="post-<?php the_ID(); ?>" <?php post_class("cm0 mg-t50"); ?>>
<h2 class="h2">template-parts/content.php</h2>
<!--ヘッダー-->
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			//投稿(post)およびカスタム投稿タイプのシングルページに表示する内容
			//http://do-wp.com/suitable-conditional-tags-is_single-vs-is_singular/
			the_title( '<h1 class="entry-title h1">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title h4"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		//index.phpはいろいろなページに使用するページなので、個別投稿ページだけ表示させるには条件分岐を行う
		//https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/get_post_type
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				wp_dev_theme_posted_on();//投稿時間
				wp_dev_theme_posted_by();//auther
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	 <!--サムネイル画像ー-->
	<div class="thumbnail">
		<h6 class="h6">※thumbnailあれば表示</h6>
		<figure>
		<?php 
		//<a class="post-thumbnail"><img></a>
		wp_dev_theme_post_thumbnail(); ?>
		</figure>
	</div>
	
	<!--コンテンツ-->
	<div class="entry-content cm0">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp_dev_theme' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp_dev_theme' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<!--フッター-->
	<footer class="entry-footer">
		<?php wp_dev_theme_entry_footer(); ?>

		<!-- <span class="cat-links">Posted in <a href="//10.0.0.7:5000/blog/category/%e3%83%9e%e3%83%bc%e3%82%af%e3%82%a2%e3%83%83%e3%83%97/" rel="category tag">マークアップ</a></span><span class="tags-links">Tagged <a href="//10.0.0.7:5000/blog/tag/css/" rel="tag">css</a>, <a href="//10.0.0.7:5000/blog/tag/html/" rel="tag">html</a>, <a href="//10.0.0.7:5000/blog/tag/content/" rel="tag">コンテンツ</a>, <a href="//10.0.0.7:5000/blog/tag/markup/" rel="tag">マークアップ</a>, <a href="//10.0.0.7:5000/blog/tag/formatting/" rel="tag">書式化</a></span><span class="edit-link"><a class="post-edit-link" href="//10.0.0.7:5000/wp-admin/post.php?post=1178&#038;action=edit">Edit <span class="screen-reader-text">マークアップ: HTML タグとフォーマット</span></a></span>	 -->


	</footer><!-- .entry-footer -->


</article><!-- #post-<?php the_ID(); ?> -->
