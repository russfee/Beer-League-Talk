<?php get_header(); ?>
<?php
get_template_part ('layout/banner-sub-page/banner-sub-page');
?>
<div class="sub-page-content-container">
	<div class="sub-page-content-topper"></div>
		
		<!-- MAIN BODY CONTENT -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

			<article>
			<div class="row constrain">
				<h2 style="margin-top: 40px;"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<div class="news-date"><p><?php the_field('date'); ?></p></div><!--news-date-->
				
		
		
		<div class="main-post-container">
		
	
	<!--==========FLEXIBLE CONTENT START*============-->
	<div class="post-content"> 

		<?php
		get_template_part ('layout/modules/module', 'loop');
		?>
	</div> <!--post-content-->

	<!--==========FLEXIBLE CONTENT END*============-->
			<!--==========SIDEBAR START*============-->
	<div class="post-sidebar">

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
	</div> <!--post-sidebar-->

			<!--==========SIDEBAR END*============-->
				
			</div> <!--row-->
			</article>

			<div class="row constrain">
			<div id="post-meta">
				<p><?php the_time('F j, Y'); ?></p>
				<p>Categories: <?php the_category(', ') ?></p>
			</div><!-- post-meta -->
			<div class="newer-older" style="padding-bottom: 40px;">
				<p class="older"><?php previous_post_link('%link', '&laquo; Previous post') ?>
				<p class="newer"><?php next_post_link('%link', 'Next Post &raquo;') ?></p>
			</div><!-- newer-older -->
			<div class="clear"></div><!-- clear -->

			</div> <!--row-->

			<?php /* If a user fills out their bio info, it's included here */ ?>
			

		</div><!-- post -->


	


	<?php endwhile; /* end loop */ ?>
	
			</div> <!--main-post-container-->

	

</div> <!--sub-page-content-container-->
<?php get_footer(); ?>
