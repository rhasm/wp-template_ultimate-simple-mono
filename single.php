<?php get_header(); ?>
	<div id="content">
	    <div id="adsense_top"><?php include (TEMPLATEPATH . '/_adsense_top.php'); ?></div>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="post">
			<h2 class="postTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="postMeta"><?php /* the_time('Y.n.d') */ ?> category: <?php the_category(', '); ?></div>
			<div class="postContent"><?php the_post_thumbnail(); ?><br /><br /><?php the_content('続きを読む'); ?></div>
			<div class="postTag"><?php the_tags('tag: ', ', ', ''); ?></div>
		</div>
		<?php endwhile; ?>
	<?php else : ?>
		<div class="post">
			<h2 class="postTitle">Not Found</h2>
			<div class="postContent">記事が見つかりません。</div>
		</div>
	<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
