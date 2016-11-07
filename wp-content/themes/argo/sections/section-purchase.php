<?php if(!get_theme_mod('purchase_display')) : ?>
<div id="purchase" class="divider section">
	<div class="bg-holder" style="background: url(<?php echo get_theme_mod('purchase_background'); ?>) no-repeat fixed center center transparent; background-size:cover">
		<div class="container">
			<div class="hero">
				<h1><?php echo get_theme_mod('purchase_title') ?></h1>
				<p>
					<button class="btn btn-large  " type="button"><div class="nav-hover"></div><?php echo get_theme_mod('purchase_button_one') ?></button>
					<button class="btn btn-large btn-primary" type="button"><div class="nav-hover"></div><?php echo get_theme_mod('purchase_button_two') ?></button>
				</p>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>