<!--FOOTER-->

<div class="row">
	<div class="footer-upper-container" style="background-color: <?php the_field('footer_background_colour', 'options'); ?>; background: url(http://beerleaguedev.local/wp-content/uploads/2018/05/footer-bg.png); overflow: hidden;
background-size: cover;
background-position: center;
background-repeat: no-repeat;">
			<h2 style="color: #fff;">Never miss a thing - follow us!</h2>
		<div class="footer-logo" style="padding: 40px 0;"> <img src="<?php the_field('footer_logo', 'options'); ?>"></div> <!--footer-logo-->
		<div class="contact-section-container">
			<?php if(get_field('contact_repeater', 'option')): ?>
				
				
					<?php while(has_sub_field('contact_repeater', 'option')): ?>
						<div class="contact-group-container">
							<div class="contact-group-icon">
								<a href="<?php the_sub_field('contact_link'); ?>"><img src="<?php the_sub_field('contact_icon'); ?>"></a>
							</div> <!--contact-group-icon-->	
							<div class="contact-group-text">
								<a href="<?php the_sub_field('contact_link'); ?>"><?php the_sub_field('contact_text'); ?></a>
							</div> <!--contact-group-text-->	
						</div> <!--contact-group-container-->
				
					<?php endwhile; ?>
				<?php endif; ?>
			
			
		
		</div> <!--contact-section-container-->
	</div> <!--footer-upper-container-->
</div> <!--row-->
<div class="row">
			<div class="footer-lower-container" style="background-color: <?php the_field('bottom_bar_background_colour', 'options'); ?>; color: #fff;">
			<div class="copyright">
				<p style="color: <?php the_field('bottom_bar_text_colour', 'options'); ?>">&copy; <?php echo date("Y") ?> Maxwell Developments</p>
			</div><!-- copyright -->
			<div class="designed-by">
				<p style="color: <?php the_field('bottom_bar_text_colour', 'options'); ?>">Website designed by <a title="Fee and Sons Creative" style="color: <?php the_field('bottom_bar_text_colour', 'options'); ?>" href="http://feeandsonscreative.com" target="_blank" rel="nofollow">Fee and Sons Creative</a></p>
			</div><!-- designed-by-->
		</div> <!--footer-container-->
	</div><!-- row -->
</div><!-- container -->
