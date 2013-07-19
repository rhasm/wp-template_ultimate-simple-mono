<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<title><?php
    global $page, $paged;
    if ( is_year() )
        echo get_the_time('Y') . "年" . " | ";
    elseif ( is_month() )
        echo get_the_time('Y') ."年" . get_the_time('F') . " | ";
    elseif ( is_day() )
        echo get_the_date() . " | ";
    else
        wp_title( '|', true, 'right' );
    bloginfo( 'name' );
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( '%sページ', '' ), max( $paged, $page ) );
    ?></title>
	<link rel="icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
	<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="all" />
	<?php wp_head(); ?>
</head>
<body><div id="wrapper">
<div id="header_top">
	<div class="menu_area">
		<?php function get_the_pa_ges()
			  {
				global $wpdb;
				if ( ! $these_pages = wp_cache_get('these_pages', 'pages') ) {
					$these_pages = $wpdb->get_results('select ID, post_title from '. $wpdb->posts .' where post_status = "publish" and post_type = "page" order by ID');
				}
				return $these_pages;
			  }

			  function list_all_pages()
			  {
				$all_pages = get_the_pa_ges ();
				foreach ($all_pages as $thats_all) {
					$the_page_id = $thats_all->ID;

					if (is_page($the_page_id)) {
						$addclass = ' class="current_page"';
					}
					else
					{
						$addclass = '';
					}
					$output .= '<li' . $addclass . '><a href="'.get_permalink($thats_all->ID).'" title="'.$thats_all->post_title.'"><span>'.$thats_all->post_title.'</span></a></li>';
				}
				return $output;
			  }	?>
		<ul>
			<?php
			if (is_home()) {
				$addclass = ' class="current_page"';
			}
			else
			{
				$addclass = '';
			}
			echo "<li" . $addclass . "><a href='" . get_option('home') . "' title='Home'><span>Home</span></a></li>";
			echo list_all_pages();	?>
		</ul>
	</div>
</div>
<div id="header_title">
	<table>
	<tr>
	<td align="left"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/top-logo.png" /></a></td>
	<td align="right" style="padding-bottom:3px;width:83px;" valign="bottom"><!--// ここにアイコン等を表示する //--></td>
	<td align="left" width="160px" valign="bottom"><a href="#" target="_blank"><img id="twitterlink" src="<?php bloginfo('template_url'); ?>/images/twitter-icon.png" /></a><a href="feed:<?php bloginfo('rss2_url'); ?>"><img id="rssfeeder" src="<?php bloginfo('template_url'); ?>/images/rss-icon.png" /></a></td></tr>
	</table>
</div>
<div id="main">
