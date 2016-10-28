	</div>
	<?php wp_footer(); 
	$theme_data = wp_get_theme("Argo"); 
	$author_name = $theme_data->get('Author');
	$author_uri = $theme_data->get('AuthorURI');
	?>
	<footer id="footer">
		<div class="container">
		&copy; <?php echo date('Y'); ?>
		 <a href="http://themeforest.net"><?php bloginfo('sitename'); ?></a>. <?php _e('All rights reserved', 'argo'); ?>.<?php _e(' Designed by ', 'argo'); ?> <a href="<?php echo $author_uri ?> "><?php echo $author_name ?></a>.<?php _e(' Developed by','argo'); ?> <a href="<?php echo $author_uri ?>"><?php echo $author_name ?></a>
		</div>
		 <a href="#" id="btn_up"><?php _e(' Up ', 'argo');?></a>
	</footer>
</body>