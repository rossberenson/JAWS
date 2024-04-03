<?php
/**
 * Limit the excerpt length.
 *
 * @param array $args Parameters include length and more.
 *
 * @return string The excerpt.
 */
function jaws_get_trimmed_excerpt( $args = [] ) {

	// Set defaults.
	$defaults = [
		'length' => 20,
		'more'   => '...',
		'post'   => '',
	];

	// Parse args.
	$args = wp_parse_args( $args, $defaults );

	// Trim the excerpt.
	return wp_trim_words( get_the_excerpt( $args['post'] ), absint( $args['length'] ), esc_html( $args['more'] ) );
}
