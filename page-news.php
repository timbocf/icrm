<?php get_header(); ?>
<?php // <body> ?>

<div class="container">
	<div class="col-md-8 col-md-offset-2">
        <div class="row">
            <div class="contact-info col-md-5">
                <h1>Contact</h1>
                <?php 
                    $articles = array();
                    $args = array(
                        'category_name' => 'media-relations-contact-info',
                        'posts_per_page' => 1,
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        while ($query->have_posts()) { 
                            $query->the_post(); 
                        }
                    }
                ?>
                <div>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-md-7"></div>
        </div>
        
        <div class="row">
            <div class="featured-content-wrap col-md-5">
                <div>
                    <h1>Press</h1>
                    <?php 
                        $articles = array();
                        $args = array(
                            'category_name' => 'articles',
                            'posts_per_page' => 10,
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $articles[] = array(
                                    'label' => the_date('F j, Y', '<span class="featured-content-label">', '</span>', false),
                                    'title' => get_the_title(),
                                    'url' => get_the_permalink(),
									'excerpt' => get_the_excerpt()
                                );
                            }
                        }
                    ?>
                    <ul class="featured-content">
                        <?php foreach ($articles as $article): ?>
                        <li> 
							<?php echo $article['label']; ?> 
                            <a class="featured-content-link" href="<?php echo $article['url']; ?>"> <?php echo $article['title']; ?> </a> 
                        	<p><?php echo $article['excerpt']; ?></p>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
            
            <div class="featured-content-wrap col-md-5 col-md-offset-2">
                <div>
                    <h1>News</h1>
                    <?php 
                        $articles = array();
                        $args = array(
                            'category_name' => 'news',
                            'posts_per_page' => 10,
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                $articles[] = array(
                                    'label' => the_date('F j, Y', '<span class="featured-content-label">', '</span>', false),
                                    'title' => get_the_title(),
                                    'url' => get_the_permalink(),
									'excerpt' => get_the_excerpt()
                                );
                            }
                        }
                    ?>
                    <ul class="featured-content">
                        <?php foreach ($articles as $article): ?>
                        <li> 
							<?php echo $article['label']; ?> 
                            <a class="featured-content-link" href="<?php echo $article['url']; ?>"> <?php echo $article['title']; ?> </a> 
                            <p><?php echo $article['excerpt']; ?></p>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
	</div>
</div>



<div class="news-roi-wrap text-center arrow-white">

	<div class="container">
    
    	<div class="row">
        
        	<div class="col-md-6 col-md-offset-3 services-section">
        
                <p>We are the leading provider of productivity tools integrating Enterprise Applications (e.g. CRM, ERP, ECM) with Personal User Environments (e.g. Windows, Outlook, Lotus, Mobile, etc.) driving increased user-adoption of enterprise software.</p>
                
                <p>Increasing your ROI is as easy as a call.  Call us today!</p>
                
                <img src="http://dev.invisiblecrm.3gsaz.com/wp-content/uploads/2014/05/phone.png" alt="Phone" class="phone-image">
                
                <p><a href="tel:18666849276" class="phone-link services-phone">+1 (866) 684 9276</a></p>
            
            </div>
        
        </div>
    
    </div>

</div>



<?php // </body>  ?>
<?php get_footer(); ?>
