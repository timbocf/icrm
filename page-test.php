<?php get_header(); ?>

<?php // <body> ?>

	<div class="home-slideshow-wrap test">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="home-slideshow">
						<div class="video-slide">
							<a href="//player.vimeo.com/video/92839404" class="lightbox video">
								<img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/transparent-slide-test.png" alt="#todo">
								<img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/video-monitor.png" alt="#todo" class="slide-video">
							</a>
						</div>
						<div>
							<img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/transparent-slide-test.png" alt="#todo">
						</div>
						<div>
							<img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/transparent-slide-test.png" alt="#todo">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="home-features">
					<ul>
						<li>
							<img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/desktop-applications.png" alt="Desktop Applications">
							<p>Desktop Applications</p>
						</li>
						<li>
							<img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/technology-suite.png" alt="Technology Suite">
							<p>Technology Suite</p>
						</li>
						<li>
							<img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/innovation.png" alt="Innovation">
							<p>Innovation</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="home-glance">invisibleCRM at a glance.</h2>
			</div>
		</div>
	</div>

	<div class="home-molecule">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/molecule.png" alt="Invisible CRM">
					<h4 class="visible-phone">ISV</h4>
					<p class="isv">API and system optimization to make sure that all important functions, objects and automation can be successfully ported to the desktop.</p>
					<h4 class="visible-phone">Customers</h4>
					<p class="customers">With the simplicity of usage our customers lower learning curve with customizations to adapt to specific modifications per organization.</p>
					<h4 class="visible-phone">Technology</h4>
					<p class="technology">Objects sync in functionality and automation offering filtering for easier data management to increase performance, scalability, and reliability.</p>
				</div>
			</div>
		</div>
	</div>
		
	<div class="container home-testimonial-wrap">
		<div class="row home-testimonial">
			<div>
				<div class="col-sm-3">
					<img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/csi-leasing.jpg" alt="CSI Leasing" class="testimonial-picture">
				</div>
				<div class="col-sm-9">
					<p class="testimonial">&quot;Our field sales teams use SalesDesktop all the time! It's almost their &quot;go to&quot; as it saves them from logging into salesforce.com.&quot; &quot;SalesDesktop allows our sales people organize their work in a way salesforce.com doesn't offer. The application is so simple, the training guide is very simple; it just makes it so much easier than having two applications or switching between two applications.&quot;</p>
					<span class="testimonial-author">Sara Holden</span>
					<span class="testimonial-author-title">Salesforce Administrator at CSI Leasing</span>
				</div>
			</div>
			<div>
				<div class="col-sm-3">
					<img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/csi-leasing.jpg" alt="CSI Leasing" class="testimonial-picture">
				</div>
				<div class="col-sm-9">
					<p class="testimonial">&quot;Our field sales teams use SalesDesktop all the time! It's almost their &quot;go to&quot; as it saves them from logging into salesforce.com.&quot; &quot;SalesDesktop allows our sales people organize their work in a way salesforce.com doesn't offer. The application is so simple, the training guide is very simple; it just makes it so much easier than having two applications or switching between two applications.&quot;</p>
					<span class="testimonial-author">Sara Holden</span>
					<span class="testimonial-author-title">Salesforce Administrator at CSI Leasing</span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row featured-content-wrap">
			<div class="col-sm-4">
				<h3>News &amp; Events</h3>
				<?php 
				$articles = array();
				$args = array(
					'category_name' => 'news',
					'posts_per_page' => 4,
				);
				$query = new WP_Query($args);

				if ($query->have_posts())
				{
					while ($query->have_posts())
					{
						$query->the_post();

						$articles[] = array(
							'label' => the_date('F j, Y', '<span class="featured-content-label">', '</span>', false),
							'title' => get_the_title(),
							'url' => get_the_permalink(),
						);
					}
				}
				?>
				<ul class="featured-content">
					<?php foreach ($articles as $article): ?>
						<li>
							<?php echo $article['label']; ?>
							<a class="featured-content-link" href="<?php echo $article['url']; ?>">
								<?php echo $article['title']; ?>
							</a>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="col-sm-4">
				<h3>Demos &amp; Whitepapers</h3>
				<?php 
				$articles = array();
				$args = array(
					'post_type' => array('case-study', 'white-paper', 'presentation'),
					'posts_per_page' => 4,
				);
				$query = new WP_Query($args);

				if ($query->have_posts())
				{
					while ($query->have_posts())
					{
						$query->the_post();

						$articles[] = array(
							'post_type' => get_post_type_object(get_post_type()),
							'title' => get_the_title(),
							'url' => get_the_permalink(),
						);
					}
				}
				?>
				<ul class="featured-content">
					<?php foreach ($articles as $article): ?>
						<li>
							<span class="featured-content-label">
								<?php echo $article['post_type']->labels->name; ?>
							</span>
							<a href="<?php echo $article['url']; ?>" class="featured-content-link">
								<?php echo $article['title']; ?>
							</a>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
			<div class="col-sm-4">
				<h3>Articles &amp; Events</h3>
				<?php 
				$articles = array();
				$args = array(
					'category__in' => array(get_cat_ID('articles'), get_cat_ID('events')),
					'posts_per_page' => 4,
				);
				$query = new WP_Query($args);

				if ($query->have_posts())
				{
					while ($query->have_posts())
					{
						$query->the_post();

						$articles[] = array(
							'label' => the_date('F j, Y', '<span class="featured-content-label">', '</span>', false),
							'title' => get_the_title(),
							'url' => get_the_permalink(),
						);
					}
				}
				?>
				<ul class="featured-content">
					<?php foreach ($articles as $article): ?>
						<li>
							<?php echo $article['label']; ?>
							<a class="featured-content-link" href="<?php echo $article['url']; ?>">
								<?php echo $article['title']; ?>
							</a>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<h3>Our Partners</h3>
				<ul class="home-partners">
					<li><img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/oracle.jpg" alt="todo"></li>
					<li><img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/microsoft.jpg" alt="todo"></li>
					<li><img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/ibm.jpg" alt="todo"></li>
					<li><img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/salesforce.jpg" alt="todo"></li>
					<li><img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/deltek.jpg" alt="todo"></li>
					<li><img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/documentum.jpg" alt="todo"></li>
					<li><img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/sugarcrm.jpg" alt="todo"></li>
					<li><img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/workbooks.jpg" alt="todo"></li>
					<li><img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/netsuite.jpg" alt="todo"></li>
					<li><img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/bpmonline.jpg" alt="todo"></li>
					<li><img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/amdocs.jpg" alt="todo"></li>
					<li><img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/webex.jpg" alt="todo"></li>
				</ul>
			</div>
		</div>
	</div>

<?php // </body> ?>

<?php get_footer(); ?>