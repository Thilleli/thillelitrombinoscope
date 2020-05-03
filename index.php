<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>	Trombinoscopes </title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="css/style.css" rel="stylesheet">
	</head> 
<body> 
	<header>
		<h1>Environnement numérique du travail</h1>
		<h2>CERGY PARIS UNIVERSITÉ</h2>
		<img class = "logo" src="/images/cy.png" />
		
	</header>
	
	<table align="center">
		<tbody id = "etu">
		<tr>
			<td>
				<section>
					<div>
						<img src="images/login.png" width="125" height="125" />
					</div>
				</section>
			</td>
						
			<td width="70%">
				<fieldset class ="login">
					<legend><h2>Identifiant réseau</h2> </legend> 
					<div>
					
					<form  method="post" action="connexion.php">
						<div class = "erreur-connexion">
							<?php
								$matchFound = (isset($_GET["erreur"]) && trim($_GET["erreur"]) == 'connexionErreur');
								if($matchFound){
									echo '<p>Login ou mot de passe incorrect!</p>';
								}
							
							?>
						</div>
						<p>Numéro d'étudiant:  <br/> <input required  minlength="5" type="text" name="login"/> </p>
						<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="password"/> </p>
							
						<input type="submit" name="valider" value="valider"/>
								   
					</form>
					
					</div>
				</fieldset>
				<br>
				<br>
				<a href="formulInscri.php"><span class="pw-oublie">Inscrivez-vous ici</span></a>
			</td>
		</tr>
		</tbody>
		
	</table>
</body>
<footer>
	<p>Site créé par Thilleli BELHOCINE, Avril 2020</p>
</footer>
</html>