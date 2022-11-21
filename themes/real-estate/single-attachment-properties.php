<?php
$args = array(
    'post_type' => 'attachment',
    'post_status' => 'publish',
    'posts_per_page' => 3 ,
    'tax_query' => array(
		array(
			'taxonomy' => 'properties',
			'field'    => 'slug',
			'terms'    => ['types','purposes']
		),
	),

);