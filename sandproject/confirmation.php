<!DOCTYPE html>
<html>
<head>
	<title>Confirmation d'inscription - Sand Project</title>
	<?php include("includes/head.php"); ?>
</head>
<body>
	<header>
		<div id="confirme-wrapper">
			<div class="container">
				<?php
				include 'phpinc/includes/db.php';

				$requete ="SELECT * FROM email_prebuilders WHERE uniqid='".$_GET['id']."'";
				$check_confirm = $oDB->query($requete);
				$rCheck_confirm = $check_confirm->fetch();
				
				if($rCheck_confirm['email_confirme']!=1){
					if ($check_confirm->rowCount()!=0) {
					?>
					<div class="row">
						<h1 class="col s12 title">Merci de votre inscription !</h1>
					</div>
					<div class="row mt80">
						<form method="post" action="phpinc/action.php" class="col offset-s1 s10">
							<div class="row">

								<div class="input-field col m6 s12">
									<input id="nom" type="text" name="nom" />
									<label for="nom">Nom</label>
								</div>
								<div class="input-field col m6 s12">
									<input id="prenom" type="text" name="prenom" />
									<label for="prenom">Prénom</label>
								</div>
								<div class="input-field col offset-m4 m4 s12">
									<button class="btn waves-effect waves-light btn-large" type="submit">Rejoindre le slack</button>
								</div>
							</div>
							<input type="hidden" name="action" value="updateBuilder"/>
							<input type="hidden" name="email" value="<?php echo $rCheck_confirm['email']; ?>" readonly/>
							<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" readonly/>
						</form>
					</div>
					<?php
					} else{
						header("Location:index.php");
					}
				}else{ ?>
				<div class="row">
					<h1 class="col s12 title">Vous avez déjà confirmé votre adresse email !</h1>
					<h4 class="col s12 title">Encore merci :) !</h4>
				</div>
				<?php } ?>
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