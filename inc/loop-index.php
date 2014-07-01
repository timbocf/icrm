<?php 

global $fp_posts;

if (have_posts())
{
	$fp_posts = array();

	while (have_posts())
	{
		the_post();

		$fp_posts[] = array(
			'id' => get_the_ID(),
			'title' => get_the_title(),
			'content' => get_the_content(),
			'meta' => get_post_custom(get_the_ID()),
		);
	}
}