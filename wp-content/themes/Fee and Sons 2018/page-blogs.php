<?php
/*
Template Name: Blogs Page
*/
?>
<?php get_header(); ?>
<?php
get_template_part ('layout/banner-sub-page/banner-sub-page');
?>
<div class="post-page-master-container"> <!--this is to edit seperately from home-->
	<div class="sub-page-content-container">
		<div class="sub-page-content-topper"></div>
	<!--==========PODCASTS MASTER LIST START*============-->
			<?php
			get_template_part ('layout/modules/parts/module-posts-blogs-with-sidebar');
			?>
	<!--==========PODCAST MASTER LIST END*============-->
	
	</div> <!--sub-page-content-container-->
</div> <!--post-page-master-container-->
	<!--==========FLEXIBLE CONTENT START*============-->
		<?php
		get_template_part ('layout/modules/module', 'loop');
		?>
	<!--==========FLEXIBLE CONTENT END*============-->
<?php get_footer(); ?>
