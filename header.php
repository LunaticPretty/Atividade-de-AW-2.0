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
					<p class="sh">O seu site noticias interestelares</p>		
				</div>
				<br>
			</div>
		</div>
	</head>
	<body class="body">