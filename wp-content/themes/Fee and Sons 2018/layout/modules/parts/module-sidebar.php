<?php // Sidebar Element ?>
		
		<div class="home-posts-sidebar">
			
			<?php if(get_field('sidebar_repeater_global')): ?>
				
				
					<?php while(has_sub_field('sidebar_repeater_global')): ?>
				
			<div class="sidebar-item">	
				<h3>hi!</h3>
				<p>hello</p>
			</div> <!--sidebar-item-->
				
					<?php endwhile; ?>
				<?php endif; ?>
				
		</div> <!--home-posts-sidebar-->


