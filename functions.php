<?php
add_theme_support( 'post-thumbnails' );

function widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Title paragraph', 'pegasus' ),
			'id'            => 'title-paragraph-1',
			'description'   => __( 'Add widgets here to appear in your title paragraph.', 'pegasus' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'widgets_init' );


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
