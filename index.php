<?php get_header(); ?>

<?php // <body> ?>

<?php foreach ($fp_posts as $post): ?>
	<div class="container content-wrap">
		<div class="row">
			<div class="col-xs-12">
				<?php echo $post['content'] ?>
			</div>
		</div>
	</div>
<?php endforeach ?>

<?php // </body> ?>

<?php get_footer(); ?>