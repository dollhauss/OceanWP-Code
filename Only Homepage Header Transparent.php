function my_homepage_header_style( $style ) {

if ( is_front_page() ) {
$style = 'transparent';
}

// Return
return $style;

}
add_filter( 'ocean_header_style', 'my_homepage_header_style' );
