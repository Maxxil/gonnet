<!DOCTYPE html>
<html>
<head>
	<title>Sand Project</title>
	<?php include("includes/head.php"); ?>
</head>
<body>
	<header>
		<div id="title-wrapper">
			<div class="container">
				<div class="row">
					<h1 class="col s12 title">La Première initiative d'intelligence artificielle Open Source pour le bâtiment</h1>
					<h4 class="col s12 text-center subtitle">D'autres ont déjà bâti l'Histoire, ensemble construisons la prochaine...</h4>
				</div>
				<div class="row mt80">
				<?php

				if(isset($_SESSION['inscription'])===false){
				?>

					<form method="post" action="phpinc/action.php" class="col offset-s1 s10">
						<div class="row">
							<div class="input-field col m8 s12">
								<input id="email" type="email" class="validate" name="email" required />
								<label for="email" data-error="wrong" data-success="right">Email</label>
							</div>
							<div class="input-field col m4 s12">
								<button class="btn waves-effect waves-light btn-large" type="submit" name="action">Devenez un builder
								    <i class="right fa fa-rocket fa-2x"></i>
								</button>
							</div>
						</div>
						<input type="hidden" name="action" value="addBuilder"/>
					</form>

				<?php 
				}elseif ($_SESSION['inscription']=="success"){ 
				?>
					<div class="col offset-m2 m8 s12">
						<div class="card horizontal">
							<div class="card-image">
								<img src="img/slack.png" alt="slack logo" width="50%">
							</div>
							<div class="card-stacked">
								<div class="card-content">
									<p class="hide-on-small-only">Votre inscription est prise en compte !</p>
									<p>Confirmez votre adresse e-mail pour nous rejoindre sur slack ;-) !</p>
								</div>
								<div class="card-action hide-on-small-only">
									<a href="http://gmail.com" class="btn waves-effect waves-light">Gmail</a>
									<a href="http://outlook.com" class="btn waves-effect waves-light">Outlook</a>
								</div>
							</div>
						</div>
					</div>

				<?php 
				}elseif ($_SESSION['inscription']=="error"){ 
				?>
					<form method="post" action="phpinc/action.php" class="col offset-s1 s10">
						<div class="row">
							<div class="input-field col m8 s12">
								<input id="email" type="email" class="validate invalid" name="email" value="Cette adresse email est déjà inscrite !" required />
								<label for="email" data-error="wrong" data-success="right">Email</label>
							</div>
							<div class="input-field col m4 s12">
								<button class="btn waves-effect waves-light btn-large" type="submit">Devenez un builder
								    <i class="right fa fa-rocket fa-2x"></i>
								</button>
							</div>
						</div>
						<input type="hidden" name="action" value="addBuilder"/>
					</form>

				<?php }
				unset($_SESSION['inscription']); ?>

				</div>
			</div>
		</div>
	</header>
	<div class="voile">
	</div>

	<video muted loop autoplay poster="img/1.jpg" id="bg-video">
		<source	src="video/sandproject.mp4"	type="video/mp4">
		Votre navigateur ne permet pas de lire les vidéos HTML5.
	</video>

	<footer>
		<script type="text/javascript" src="js/fonction.js"></script>
	</footer>
</body>
</html>