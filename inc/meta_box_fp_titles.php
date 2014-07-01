<p>
	<label for="fp_main_title">Alternative Main Title</label>
	<input type="text" class="widefat" name="fp_main_title" id="fp_main_title" value="<?php echo get_post_meta($post->ID, 'fp_main_title', true); ?>">
</p>

<p>
	<label for="fp_sub_title">Subtitle</label>
	<input type="text" class="widefat" name="fp_sub_title" id="fp_sub_title" value="<?php echo get_post_meta($post->ID, 'fp_sub_title', true); ?>">
</p>