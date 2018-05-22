<!--HEADER-->
<div class="row constrain" style="padding: 40px 0;">
	<div class="stylized-header-container" style=" text-align: center;">	
		<h4 style="font-size: 18px; color: #333;"></h4>
		<h2 style="font-size: 30px; color: #333;">Blogs</h2>
		<div style="background-color:#d9ee12;margin: 0 auto;" class="stylized-title-underline"></div>
	</div> <!--stylized-header-container-->
</div><!--HEADER END-->
<!--POSTS SECTION-->

<div class="row constrain">
	<div class="home-posts-container">
		<div class="home-posts-posts">
			<!--==========PODCASTS LIST START*============-->
			<?php
			
			$args = array(
				'post_type' => 'blog',
				'posts_per_page' => -1 ); //haven't hooked this up to ACF yet.
				
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
							<div class="btn-primary" style="width: 35%; margin-top: 20px;"><a href="<?php the_permalink() ?>">Read More</a></div> <!--btn-primary-->
						</div> <!--story-content-->
					</div> <!--story-content-container-->	
				</div> <!--news-story-container-->
			<?php endwhile; wp_reset_query();?>
			
			
			<!--==========PODCAST LIST END*============-->
			
			
	</div> <!--home-posts-posts-->
			<!--==========SIDEBAR START*============-->
<!--==========HOME POSTS SECTION START*============-->
		<div class="home-posts-sidebar">
			
			<?php if(get_field('sidebar_repeater_global')): ?>
				
				
					<?php while(has_sub_field('sidebar_repeater_global')): ?>
				
			<div class="sidebar-item">	
				<h3><?php the_sub_field('sidebar_title'); ?></h3>
				<p><?php the_sub_field('sidebar_html'); ?></p>
			</div> <!--sidebar-item-->
				
					<?php endwhile; ?>
				<?php endif; ?>
				
		</div> <!--home-posts-sidebar-->
<!--==========HOME POSTS SECTION END*============-->
			<!--==========SIDEBAR END*============-->
</div> <!--home-posts-container-->

<!--POSTS SECTION END-->
</div> <!--row-->