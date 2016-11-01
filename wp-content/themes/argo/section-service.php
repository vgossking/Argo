<!-- section service -->
<?php 
	$service_display = get_theme_mod('service_display');
	if(!$service_display) :
 ?>
	<div id="<?php echo get_theme_mod('section_service_id'); ?>" class="section">
		<div class="container">
			<div class="hero">
				<h1>
				<?php echo get_theme_mod('service_title'); ?></h1>
				<p><?php echo get_theme_mod('service_subtitle'); ?></p>
			</div>
				<?php 
					$service_one_id = get_theme_mod('service_one');
					$service_two_id = get_theme_mod('service_two');
					$service_three_id = get_theme_mod('service_three');
					$page_one_detail = get_page($service_one_id );
					$page_two_detail = get_page($service_two_id );
					$page_three_detail = get_page($service_three_id );
				 ?>
			<div class="brow sev_list">
				<div class="brick2">
					<i class="<?php echo get_theme_mod('icon_service_one'); ?>"></i>
					<h2><a href="<?php echo $page_one_detail->guid ?>"><?php echo $page_one_detail->post_title; ?></a></h2>
					<p><?php echo $page_one_detail->post_excerpt; ?></p>
				</div>
				<div class="brick2">
					<i class="<?php echo get_theme_mod('icon_service_two'); ?>"></i>
					<h2><a href="<?php echo $page_two_detail->guid ?>"><?php echo $page_two_detail->post_title; ?></a></h2>
		
					<p><?php echo $page_two_detail->post_excerpt; ?></p>
				</div>
				<div class="brick2">
					<i class="<?php echo get_theme_mod('icon_service_three'); ?>"></i>
					<h2><a href="<?php echo $page_three_detail->guid ?>"><?php echo $page_three_detail->post_title; ?></a></h2>
					<p><?php echo $page_three_detail->post_excerpt; ?></p>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
<!--end section service -->
