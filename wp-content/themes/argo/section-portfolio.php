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
		<!--<ul class="isotope clearfix">
			<li class="item brick1 living kitchen">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf1.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>Coachcarter </h4>
						<p>Living</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 kitchen living">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf2.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>Great Sofa </h4>
						<p>Kitchen</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 bed">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf3.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>Monster bed</h4>
						<p>Bed</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 living bath bed">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf4.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>Coachcarter </h4>
						<p>Living</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 kitchen living">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf5.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>Illustration</h4>
						<p>Kitchen</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 bath living">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf6.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>King Kong</h4>
						<p>Bath</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 bed bath">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf7.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>King Kong</h4>
						<p>Bed</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 bath living kitchen">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf8.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>King Kong</h4>
						<p>Bed</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 living bath">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf9.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>King Kong</h4>
						<p>Bed</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 kitchen">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf10.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>CARNABY</h4>
						<p>Kitchen</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 bath">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf11.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>VIKING</h4>
						<p>Bath</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 living">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf12.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>BAVARIA</h4>
						<p>Living</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 bed">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf13.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>HARRIS</h4>
						<p>Bed</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 living bed">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf14.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>Cloud</h4>
						<p>Living</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 bed living">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf15.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>Mission</h4>
						<p>Bed</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 bath living">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf16.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>Pedro</h4>
						<p>Bath</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 living bath">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf17.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>Agrippa</h4>
						<p>Living</p>
				    </div>
				</a>
			</li>
			<li class="item brick1 kitchen">
				<a href="#modalbox" data-toggle="modal">
					<img src="wp-content/themes/argo/assets/img/pf18.png" alt="Portfolio1">
					<div class="hover">
						<img src="wp-content/themes/argo/assets/img/ico_search.png" alt="">
						<h4>Catch</h4>
						<p>Kitchen</p>
				    </div>
				</a>
			</li>
		</ul>-->
	</div>
</div>
<?php endif; ?>