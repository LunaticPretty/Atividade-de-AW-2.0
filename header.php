<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title();?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<?php wp_head(); ?>
		<div class="container geral">
			<div class="row">
				<div class="col-md-3 logo">
					<br>
					<a href="<?php echo site_url();?>">
						<img src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" class="logo">
					</a>

				</div>
				<div class="col-md-9 titulo">
					<br>
					<h1 class="th"> STARNEWS! </h1>
					<hr class="linha">
					<br>
					<p class="sh">O seu site de noticias interestelares</p>		
				</div>
				<br>
			</div>
			<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
	  			<div class="container">
	    		<!-- Brand and toggle get grouped for better mobile display -->
	    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
	        		<span class="navbar-toggler-icon"></span>
	    		</button>
	    		<a class="navbar-brand" href="#">Navbar</a>
	        		<?php
	        			wp_nav_menu( array(
				            'theme_location'    => 'primary',
				            'depth'             => 2,
				            'container'         => 'div',
				            'container_class'   => 'collapse navbar-collapse',
				            'container_id'      => 'bs-example-navbar-collapse-1',
				            'menu_class'        => 'nav navbar-nav',
				            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				            'walker'            => new WP_Bootstrap_Navwalker(),
	        			) );
	        		?>
	    		</div>
			</nav>
		</div>
		
		<style type="text/css" id="custom-background-css">
			body.custom-background {
  			background-image: url("<?php echo get_template_directory_uri()?>/assets/images/fundo.jpeg");
			}
		</style>
		<style type="text/css" id="custom-background-css">
			body.custom-background {
  			background-image: url("<?php echo get_template_directory_uri()?>/assets/images/fundo.jpeg");
			}
		</style>
	</head>
	<body class="body">