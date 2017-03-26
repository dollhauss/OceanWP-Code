if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Widget Test',
    'before_widget' => '<div class = "widgettest">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);
