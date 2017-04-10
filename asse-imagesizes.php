<?php

// @codingStandardsIgnoreFile

/**
 * Add new image sizes to WordPress.
 *
 * @wp_hook init
 */
function addImageSizes()
{
    add_image_size('teaser--a-fullx2', 2000);
    add_image_size('teaser--a-full', 1000);
    add_image_size('teaser--a-panox2', 2000, 660, true);
    add_image_size('teaser--a-pano', 1000, 330, true);
    add_image_size('teaser--a-full-mobilex2', 1400);
    add_image_size('teaser--a-full-mobile', 700);
    add_image_size('teaser--b-longx2', 1320, 640, true);
    add_image_size('teaser--b-long', 660, 320, true);
    add_image_size('teaser--bx2', 640, 640, true);
    add_image_size('teaser--b', 320, 320, true);
    add_image_size('teaser--cx2', 480, 480, true);
    add_image_size('teaser--c', 240, 240, true);
    add_image_size('teaser--a-660x2', 1320, 1320, true);
    add_image_size('teaser--a-660', 660, 660, true);
    add_image_size('teaser--a-660-mobilex2', 1400, 448, true);
    add_image_size('teaser--a-660-mobile', 700, 224, true);
    add_image_size('teaser--c-mobile', 120, 120, true);
    add_image_size('article-featured', 1040, 690, true);
    add_image_size('article-featuredx2', 2080, 1380, true);
    add_image_size('article-featured-mobile', 700, 464, true);
    add_image_size('article-featured-mobilex2', 1400, 929, true);
    add_image_size('article-brand-logo', 0, 120, true);

}

add_action('init', 'addImageSizes');
add_theme_support('post-thumbnails');
