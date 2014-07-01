<!doctype html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, user-scalable=no">

	<title><?php wp_title(); ?></title>
    
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>



	<?php get_template_part('inc/loop', 'index'); global $fp_posts; ?>



	<div class="auth-wrap">

		<div class="container">

			<div class="row">

				<div class="col-xs-12">

					<div class="auth">

						<ul class="nav nav-auth">

							<li><a href="#">Sign In</a></li>

							<li><a href="#">Register</a></li>

							<li><a href="#">Shopping Cart</a></li>

						</ul>

					</div>

				</div>

			</div>

		</div>

	</div>



	<div class="container header-wrap">

		<div class="row">

			<div class="col-sm-12 col-md-3 clearfix">

				<h1 class="header-logo" style="background-image:url(<?php echo wp_get_attachment_url(fp_info('logo')); ?>);">

					<a href="<?php echo home_url(); ?>">

						<?php echo bloginfo('name'); ?>

					</a>

				</h1>

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-main-wrap">

					<span class="sr-only">Toggle Navigation</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

				</button>

			</div>

			<div class="col-sm-12 col-md-9 nav-main-wrap collapse">



				<?php get_template_part('inc/nav', 'primary'); ?>



				<ul class="nav nav-social">

					<li>

						<a href="#">

							<img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/04/icrm-linked-in.png" alt="Linked In">

						</a>

					</li>

					<li>

						<a href="#">

							<img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/04/icrm-twitter.png" alt="Twitter">

						</a>

					</li>

				</ul>

			</div>



			<div class="col-xs-12">



				<h1 class="page-title"><?php echo $fp_posts[0]['meta']['fp_main_title'][0] ? $fp_posts[0]['meta']['fp_main_title'][0] : $fp_posts[0]['title']; ?></h1>



				<?php if ($fp_posts[0]['meta']['fp_sub_title'][0]): ?>

					<h2 class="page-subtitle"><?php echo $fp_posts[0]['meta']['fp_sub_title'][0]; ?></h2>

				<?php endif ?>

				

			</div>	



		</div>

	</div>



<?php // </body> ?>