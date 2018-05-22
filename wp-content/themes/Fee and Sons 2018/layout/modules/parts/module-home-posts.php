<!--HEADER-->
<div class="row constrain" style="padding: 40px 0;">
	<div class="stylized-header-container" style=" text-align: left;">	
		<h4 style="font-size: 18px; color: #333;"></h4>
		<h2 style="font-size: 30px; color: #333;">LATEST PODCASTS</h2>
		<div style="background-color:#d9ee12;text-align: left;" class="stylized-title-underline"></div>
	</div> <!--stylized-header-container-->
</div><!--HEADER END-->
<!--POSTS SECTION-->

<div class="row">
	<div class="home-posts-container">
		<div class="home-posts-posts">
			<!--==========PODCASTS LIST START*============-->
			<?php
			
			$args = array(
				'post_type' => 'podcasts',
				'posts_per_page' => 2 ); //haven't hooked this up to ACF yet.
				
				$loop = new WP_Query ( $args );
			?>
			
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="news-story-container">
					<div class="story-content-container">	
						<div class="story-image" style="background-image: url(<?php the_field('story_image'); ?>)">
						</div> <!--story-image-->
						<div class="story-content">	
							<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
							<div class="news-date"><p><?php the_field('date'); ?></p></div> <!--news-date-->
							<p><?php the_field('story_excerpt'); ?> </p>
							<a style="text-decoration: none;" href="<?php the_permalink() ?>" ><div class="btn-secondary" style="width: 40%; margin-top: 10px;">Listen</div><!--btn-secondary--></a>
						</div> <!--story-content-->
					</div> <!--story-content-container-->	
				</div> <!--news-story-container-->
			<?php endwhile; ?>
			
			
			<!--==========PODCAST LIST END*============-->
			<!--HEADER-->
<div class="row constrain" style="padding: 40px 0;">
	<div class="stylized-header-container" style=" text-align: left;">	
		<h4 style="font-size: 18px; color: #333;"></h4>
		<h2 style="font-size: 30px; color: #333;">LATEST BLOGS</h2>
		<div style="background-color:#d9ee12;text-align: left;" class="stylized-title-underline"></div>
	</div> <!--stylized-header-container-->
</div><!--HEADER END-->
			<!--==========PODCASTS LIST START*============-->
			<?php
			
			$args = array(
				'post_type' => 'blog',
				'posts_per_page' => 2 ); //haven't hooked this up to ACF yet.
				
				$loop = new WP_Query ( $args );
			?>
			
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="news-story-container">
					<div class="story-content-container">	
						<div class="story-image" style="background-image: url(<?php the_field('story_image'); ?>)">
						</div> <!--story-image-->
						<div class="story-content">	
							<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
							<div class="news-date"><p><?php the_field('date'); ?></p></div> <!--news-date-->
							<p><?php the_field('story_excerpt'); ?> 
							<a style="text-decoration: none;" href="<?php the_permalink() ?>" ><div class="btn-secondary" style="width: 40%; margin-top: 10px;">Read</div><!--btn-secondary--></a>
						</div> <!--story-content-->
					</div> <!--story-content-container-->	
				</div> <!--news-story-container-->
			<?php endwhile; ?>
			
			
			<!--==========PODCAST LIST END*============-->

		</div> <!--home-posts-posts-->
			<!--==========SIDEBAR START*============-->
		<div class="home-posts-sidebar">
			<div class="sidebar-item">	
				<h3>Twitter!</h3>
				<?php echo do_shortcode("[custom-twitter-feeds num=1]"); ?>
			</div> <!--sidebar-item-->
			<div class="sidebar-item">	
				<h3>Facebook</h3>
				<?php echo do_shortcode("[custom-twitter-feeds num=1]"); ?>
			</div> <!--sidebar-item-->
		</div> <!--home-posts-sidebar-->
			<!--==========SIDEBAR END*============-->

	</div> <!--home-posts-container-->
</div> <!--row-->

<!--POSTS SECTION END-->
