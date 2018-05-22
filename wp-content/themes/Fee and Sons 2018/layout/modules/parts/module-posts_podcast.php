<?php // MODULE - PODCASTS POSTS - NO SIDEBAR ?>
<div class="row constrain">
	<div class="module-no-sidebar"> <!--this is to not interfere with other instances of the post-->
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
								<div class="btn-secondary" style="margin-top: 20px;"><a href="<?php the_permalink() ?>">Read More</a></div> <!--btn-primary-->
							</div> <!--story-content-->
						</div> <!--story-content-container-->	
					</div> <!--news-story-container-->
				<?php endwhile; wp_reset_query();?>
				
				
				<!--==========PODCAST LIST END*============-->
				
				
			</div> <!--home-posts-posts-->
		</div> <!--home-posts-container-->
	</div> <!--module-no-sidebar-->
</div> <!--row-->