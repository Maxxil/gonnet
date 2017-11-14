<?php 
session_start();
include 'includes/db.php';


switch ($_POST['action']) {

	case 'addBuilder':

	$check_email = $oDB->query("SELECT email FROM email_prebuilders WHERE email='".$_POST['email']."'");

	if ($check_email->rowCount()==0) {
		
		$uniqid=uniqid();

		$insert = "INSERT INTO email_prebuilders VALUES ('".$_POST['email']."','".$uniqid."','".date('Y-m-d H:i:s')."','0',NULL,'','')";
		$oDB->query($insert);
		echo $insert;
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= 'FROM: sandproject@anthony-gonnet.com';
		$to = $_POST['email']; 
		$subject = "Confirmation d'inscription - Sand Project";
		$message_content = '
		<table>
			<tr>
				<th><b>Merci de l\'intérêt porté à Sand Project !</b></th>
			</tr>
			<tr>
				<td>
					Pour finaliser votre inscription veuillez cliquer sur le lien ci-dessous : <br />
					<a href="http://www.sandproject.anthony-gonnet.com/confirmation.php?id='.$uniqid.'">Confirmer mon adresse email</a><br>
					Si ce lien ne fonctionne pas, rendez vous sur :<br>
					http://www.sandproject.anthony-gonnet.com/confirmation.php?id='.$uniqid.'
				</td>
			</tr>
		</table>
		';

		mail($to, $subject, $message_content, $headers);
		$_SESSION['inscription']="success";

	}else{
		$_SESSION['inscription']="error";
	}

	header('location:../index.php');

	break;
		
	case 'updateBuilder':
		
		$requete ="SELECT * FROM email_prebuilders WHERE email='".$_POST['email']."' AND uniqid='".$_POST['id']."'";
		$requete = $oDB->query($requete);
		while ($rEmail = $requete->fetch()){
			if($rEmail['email_confirm']==0){
				$requete_update = "
				UPDATE email_prebuilders
				SET email_confirme = 1, date_confirme = '".date('Y-m-d H:i:s')."' , nom ='".htmlentities($_POST['nom'])."' , prenom = '".htmlentities($_POST['prenom'])."'
				WHERE uniqid='".$_POST['id']."'
				AND email='".$_POST['email']."'";

				$requete_update = $oDB->query($requete_update);

				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
				$headers .= 'FROM: sandproject@anthony-gonnet.com';
				$to = $_POST['email']; 
				$subject = "Salck - Sand Project";
				$message_content = '
				<table>
					<tr>
						<th><b>Votre demande pour rejoindre notre slack à bien été prise en compte !</b></th>
					</tr>
					<tr>
						<td>
							Merci encore de votre intérêt pour Sand Project !					
						</td>
					</tr>
				</table>
				';

				mail($to, $subject, $message_content, $headers);

				$_SESSION['confirmation']="success";
			}else{
				$_SESSION['confirmation']="error";
			}
		}
	
		header('location:../confirmation.php');

	break;
}