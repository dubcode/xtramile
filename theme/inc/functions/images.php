<?php	
add_theme_support( 'post-thumbnails' );
add_image_size( 'default', 768, 9999 ); // No Crop Mode
add_image_size( 'single', 1440, 500, true ); // Hard Crop Mode
add_image_size( 'bigger', 600, 9999 ); // No Crop Mode
add_image_size( 'square', 385, 385, true );
add_image_size( 'looper', 540, 285, true );
add_image_size( 'tall', 280, 440, true );
add_image_size( 'taller', 440, 620, true );
add_image_size( 'thumb', 390, 260, true );
add_image_size( 'mid', 600, 400, true );
add_image_size( 'big', 600, 540, true );
add_image_size( 'big-hex', 600, 537, true );
add_image_size( 'hex', 300, 268, true );
add_image_size( 'hero', 1440, 768, true );