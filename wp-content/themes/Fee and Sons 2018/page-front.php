<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>
<!--==========BANNER START*============-->
		<?php
		get_template_part ('layout/modules/parts/module-hero-home');
		?>
<!--==========BANNER END*============-->
<!--==========HOME POSTS SECTION START*============-->
		<?php
		get_template_part ('layout/modules/parts/module-home-posts');
		?>
<!--==========HOME POSTS SECTION END*============-->
<!--==========HOW TO LISTEN START*============-->
		<?php
		get_template_part ('layout/modules/parts/module-ways-to-listen');
		?>
<!--==========HOW TO LISTEN END*============-->
<!--==========FEATURED SHOWS START*============-->
		<?php
		get_template_part ('layout/modules/parts/module-featured-shows');
		?>
<!--==========FEATURED SHOWS END*============-->
<!--==========INSTAGRAM START*============-->
		<?php
		get_template_part ('layout/modules/parts/module-instagram');
		?>
<!--==========INSTAGRAM END*============-->
		<?php
		get_template_part ('layout/footer/footer_layodut');
		?>

<?php get_footer(); ?>
