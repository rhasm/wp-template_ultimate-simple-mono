<?php

/* コンテンツ幅 */
if ( ! isset( $content_width ) ) $content_width = 925;

add_theme_support('post_thumbnails');

/* more-linkのハッシュ消し */
function remove_more_jump_link($link) {
  $offset = strpos($link, '#more-');
  if ($offset) {
    $end = strpos($link, '"',$offset);
  }
  if ($end) {
    $link = substr_replace($link, '', $offset, $end-$offset);
  }
  return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

/* サイドバー */
if ( function_exists('register_sidebar') )
    register_sidebar(array(
	'name'=>'sidebar1',
        'before_widget' => '<li id="%1$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
	'name'=>'sidebar2',
        'before_widget' => '<li id="%1$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
	'name'=>'sidebar3',
        'before_widget' => '<li id="%1$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
	'name'=>'sidebar4',
        'before_widget' => '<li id="%1$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

function mysetup() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mysetup' );