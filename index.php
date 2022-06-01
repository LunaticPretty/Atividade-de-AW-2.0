	<?php get_header();?>
		<div class="container geral dois ">
			<br>
			<div class="row center">
				<div class="col-md-2">
				</div>
				<div class="col-md-3">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/foto1.png" class="foto">
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-3">
					<img src="<?php echo get_template_directory_uri()?>/assets/images/foto2.jpeg" class="foto">
				</div>
			</div>
			<hr class="linha">
			<br>
			<div class="row">
				<u class="ti">Noticias do momento</u>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="row">
				<?php 
					$cont = 0;
						if (have_posts()) {
							while (have_posts()) {
								the_post();
								$cont++;
								if ($cont <= 3) {
									?>
										<div class="col-md-4">
											<h3><?php the_title(); ?></h3>
											<div class="img-responsive img-thumbnail">
												<?php the_post_thumbnail(); ?>
											</div>
											<p><?php the_excerpt(); ?></p>
											<a class="btn btn-primary" href="<?php the_permalink(); ?>">Leia Mais</a>
										</div>
									<?php
								}
							}
						}
				 ?>
			</div>	
			<br>
			<br>
			<br>
			<br> 
		</div>
	<?php get_footer();?> 