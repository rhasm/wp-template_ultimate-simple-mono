<?php get_header(); ?>
	<!--// メイン部分 //-->
	<div id="content">

	<!--// ページめくり用 //-->
	<?php include (TEMPLATEPATH . '/_page_navi.php'); ?>

	<!--// ページタイトル //-->
	<?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pageTitle">カテゴリ「<?php single_cat_title(); ?>」の記事</h2>
	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pageTitle">タグ「<?php single_tag_title(); ?>」の記事</h2>
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pageTitle"><?php the_time('Y年n月d日'); ?>の記事</h2>
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pageTitle"><?php the_time('Y年n月'); ?>の記事</h2>
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pageTitle"><?php the_time('Y'); ?>年の記事</h2>
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pageTitle">執筆者の記事一覧</h2>
	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pageTitle">ブログの記事一覧</h2>
	<?php } ?>

	<!--// トップ部分広告 //-->
    <div id="adsense_top"><?php include (TEMPLATEPATH . '/_adsense_top.php'); ?></div>

<!--// 記事本体 //-->
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="post">
			<h2 class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="postMeta"><? /* php the_time('Y.n.d') */ ?>category: <?php the_category(', '); ?></div>
			<div class="postContent">
				<?php the_post_thumbnail(); ?><br /><br /><?php the_content('続きを読む'); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php else : ?>
		<div class="post">
			<h2 class="postTitle">記事を作成しましょう</h2>
			<div class="postMeta">base designed by <a href="http://blog.rhasm.net/">rhasm</a></div>
			<div class="postContent">最初の記事を作成するとこの表記は消えます。</div>
		</div>
<?php endif; ?>

	<!--// ページめくり用 //-->
	<?php include (TEMPLATEPATH . '/_page_navi.php'); ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
