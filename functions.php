<?php 

add_theme_support('post-thumbnails');

add_filter('the_excerpt', 'first_paragraph');

add_filter('excerpt_length', 'custom_excerpt_length', 999);

add_filter('excerpt_more', 'new_excerpt_more');

function first_paragraph($content) {
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="article-thumbnail-content higia-font-helveticaneue-normal">', $content, 1);
}

function custom_excerpt_length($length) {
    return 20;
}

function new_excerpt_more( $more ) {
    return '...';
}