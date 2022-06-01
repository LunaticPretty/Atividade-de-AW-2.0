<?php get_header();?>
<?php 
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			?>
			<div class="container geral dois ">
				<br>
				<br>
				<div class="row">
					<u class="ti"><?php the_title(); ?></u>
				</div>
				<br>
				<hr class="linha">
				<br>
				<br>
				<br>
				<br>
				<?php the_content(); ?>
				<br>
				<br>
				<br>
				<hr class="linha">
				<br>
				<br>
				<br>
			</div>	
			<?php
		}
	}
 ?>