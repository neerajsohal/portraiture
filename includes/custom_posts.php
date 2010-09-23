<?php

/* register post types */
$video_post_args = array(
    'label' => 'Video Post',
    'show_ui' => true,
    'public' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'menu_position' => 4

);

register_post_type('canvas_video_post', $video_post_args);