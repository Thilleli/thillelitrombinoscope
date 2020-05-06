<!DOCTYPE html>

<html lang="fr">
	<head>
		<title>Inscription</title>
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
						<img src="images/inscription.png" width="125" height="125" />
					</div>
				</section>
			</td>
						
			<td width="80%" >
				<fieldset class ="login">
					<legend><h2>Inscription</h2> </legend> 
					<div>
					
					<form  method="post" action="inscription.php" enctype="mutipart/form-data">
						<p>Nom:  <br/> <input required  minlength="3" type="text" name="nom"/> </p>
						<p>Prénom:  <br/> <input required  minlength="3" type="text" name="prenom"/> </p>
						<p>Email:  <br/> <input required  type="email" name="email"/> </p>
						<p>Filiere: <br/> </p>
                            <select name="filiere">
                                <option name ='filiere' value='L1-MIPI'>L1-MIPI</option>
                                <option name ='filiere' value='L2-MI'>L2-MI</option>
                                <option name ='filiere' value='L3-I'>L3-I</option>
                                <option name ='filiere' value='LP-RS'>LP-RS</option>
                                <option name ='filiere' value='LPI-WS'>LPI-WS</option>
                            </select>
                        <p>Groupe: <br/></p>
                            <select name="groupe">
                                <option name ='groupe' value='L1-MIPI-A1</'>L1-MIPI-A1</option>
								<option name ='groupe' value='L1-MIPI-A2'>L1-MIPI-A2</option>
                                <option name ='groupe' value='B2'>B2</option>
                                <option name ='groupe' value='LPI-1'>LPI-1</option>
                                <option name ='groupe' value='LPI-2'>LPI-2</option>
                                <option name ='groupe' value='LPI-3'>LPI-3</option>
                            </select>
						
						<p>Numéro d'étudiant:  <br/> <input required  minlength="8" type="text" name="login"/> </p>
						<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="password"/> </p>
		
						<label>Charger une photo: </label><br />
						<input type="file" name="pic"/><br /><br />
	
						<input type="reset" value="rafraîchir" class="button" />	
						<input type="submit" name="valider" value="valider"/>
						<div class = "erreur-connexion">
							<?php
								$matchFound = (isset($_GET["erreur"]) && trim($_GET["erreur"]) == 'erreurInscription');
								if($matchFound){
									echo '<p>Login existe, veuillez vous connectez.</p>';
								}
							
							?>
						</div>		   
					</form>
					<br>
					<a href="index.php"><span class="pw-oublie">Vous possedez un compte?</span></a>
					</div>
				</fieldset>
			</td>
		</tr>
		</tbody>
	</table>
</body>
<footer>
	<p>Site créé par Thilleli BELHOCINE, Avril 2020</p>
</footer>
</html>