<?php

register_sidebar(array(
  'name' => 'Main Sidebar',
  'description' => 'Widgets in this area will be shown on the every page except single post page.',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));

register_sidebar(array(
  'name' => 'Single Post Sidebar',
  'description' => 'Widgets in this area will be shown on the right-hand side.',
  'before_title' => '<h3>',
  'after_title' => '</h3>'
));