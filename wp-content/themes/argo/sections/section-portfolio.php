<?php 
	$portfolio_display = get_theme_mod('portfolio_display');
	if(! $portfolio_display) :
 ?>
<div id="portfolio" class="section">
	<div class="container">
		<div class="hero">
			<h1><?php echo get_theme_mod('portfolio_title'); ?></h1>
			<p><?php echo get_theme_mod('portfolio_subtitle'); ?></p>
		</div>
		<ul class ="filter clearfix">
			<li><a href="#" class="active" data-filter="*">All</a></li>
			<?php ShowCategories(0); ?>
		</ul>
		<!-- Modal -->
		<div id="modalbox" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<div class="modal-body">
				 <div id="myCarousel" class="carousel slide">
	                <div class="carousel-inner">
	                 <?php GetPostArgo(1) ?>
	                </div>
	                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	              </div>
	              <h3>Argo project title living room</h3>
	              <p>
	              	Maecenas lectus tellus, faucibus id auctor vitae, egestas nec turpis. Proin accumsan interdum lacus nec convallis. Sed vestibulum placerat auctor. 
	              </p>
			</div>
			<div class="modal-footer">
			</div>
		</div>
		<ul class = "isotope clearfix">
			<?php GetPostArgo(0);?>
		</ul>
	</div>
</div>
<?php endif; ?>