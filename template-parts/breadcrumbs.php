<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
$separator  = '';
$id         = 'breadcrumbs';
$class      = 'breadcrumbs';
$home_title = 'Homepage';

// Get the query & post information
global $post,$wp_query;
$category = get_the_category();

// Build the breadcrums
echo '<ul id="' . $id . '" class="' . $class . '">';

// if ( has_post_thumbnail( $post->ID ) ){

if ( has_post_thumbnail() ) {
	$img_url = get_the_post_thumbnail_url();
} else {
	$img_url = '';
}

// Standard page
if ( $post->post_parent ) {

	// If child page, get parents
	$anc = get_post_ancestors( $post->ID );

	// Get parents in the right order
	$anc = array_reverse( $anc );

	// Parent page loop
	$parents = '';
	foreach ( $anc as $ancestor ) {

		// If a featured image is set for ancestor, insert into layout
		if ( has_post_thumbnail($ancestor) ) {
			$img_ancestor_url = get_the_post_thumbnail_url($ancestor);
		} else {
			$img_ancestor_url = '';
		}
		$parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '" alt=""' . get_the_title($ancestor) . '><img class="breadcrumbs-image" src=' . $img_ancestor_url . '><span class="hide-for-small-only">' . get_the_title($ancestor) . '</span></a></li>';

		// Add separator
		if ( $separatorclass ) {
			$parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
		}
	}

	// Display parent pages
	echo $parents;

	// Add current page
	echo '<li class="current item-' . $post->ID . '"><img class="breadcrumbs-image" src=' . $img_url . '><span>' . get_the_title() . '</span></li>';

} else {

	// Just display current page if not parents
	echo '<li class="current item-' . $post->ID . '"><img class="breadcrumbs-image" src=' . $img_url . '><span>' . get_the_title() . '</span></li>';

}

echo '</ul>';
