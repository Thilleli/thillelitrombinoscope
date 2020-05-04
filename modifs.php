<?php
session_start(); 
	
?>

<!DOCTYPE html>

<html lang="fr">
	<head>
		<title>Modifier mon profil</title>
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
	<nav>
		<ul>
			<li><a href="../index.php">Accueil</a></li>
			<li><a href="../compte.php">Mon profil</a></li>
			<li><a href="../deco.php">Déconnexion</a></li>
		</ul>
	</nav>



<table align="center">
		<tbody id = "etu">
		<tr>	
			<td width="80%" >
				<fieldset class ="login">
					<legend><h2>Modifier mes informations</h2> </legend> 
					<div>
					
					<form  method="post" action="mesModifs.php">
						<p>Nom:  <br/> <input required  minlength="3" type="text" name="name" value="<?php echo $_SESSION["nom"];?>"/> </p>
						<p>Prénom:  <br/> <input required  minlength="3" type="text" name="fname" value="<?php echo $_SESSION["prenom"]; ?>"/> </p>
						<p>Email:  <br/> <input required  type="email" name="mail" value="<?php echo $_SESSION["mail"]; ?>"/> </p>
						<p>Filière: <br/> </p>
                            <select name="fil">
							<?php 
								$filiere = $_SESSION["filiere"];
								if( 'L1-MIPI' == $filiere){
									echo "<option name ='filiere' value='L1-MIPI' selected >L1-MIPI</option>";
									echo "<option name ='filiere' value='L2-MI'>L2-MI</option>";
									echo "<option name ='filiere' value='L3-I'>L3-I</option>";
									echo "<option name ='filiere' value='LP-RS'>LP-RS</option>";
									echo "<option name ='filiere' value='LPI-WS'>LPI-WS</option>";
									
								}
								if( 'L2-MI' == $filiere){
									echo "<option name ='filiere' value='L2-MI' selected >L2-MI</option>";
									echo "<option name ='filiere' value='L1-MIPI' >L1-MIPI</option>";
									echo "<option name ='filiere' value='L3-I'>L3-I</option>";
									echo "<option name ='filiere' value='LP-RS'>LP-RS</option>";
									echo "<option name ='filiere' value='LPI-WS'>LPI-WS</option>";
									
								}
								if( 'L3-I' == $filiere){
									echo "<option name ='filiere' value='L3-I' selected>L3-I</option>";
									echo "<option name ='filiere' value='L1-MIPI' >L1-MIPI</option>";
									echo "<option name ='filiere' value='L2-MI'>L2-MI</option>";
									echo "<option name ='filiere' value='LP-RS'>LP-RS</option>";
									echo "<option name ='filiere' value='LPI-WS'>LPI-WS</option>";
									
								}
								if( 'LP-RS' == $filiere){
									echo "<option name ='filiere' value='LP-RS' selected>LP-RS</option>";
									echo "<option name ='filiere' value='L1-MIPI' >L1-MIPI</option>";
									echo "<option name ='filiere' value='L2-MI'>L2-MI</option>";
									echo "<option name ='filiere' value='L3-I'>L3-I</option>";									
									echo "<option name ='filiere' value='LPI-WS'>LPI-WS</option>";
									
								}
								if( 'LPI-WS' == $filiere){
									echo "<option name ='filiere' value='LPI-WS' selected>LPI-WS</option>";
									echo "<option name ='filiere' value='L1-MIPI' >L1-MIPI</option>";
									echo "<option name ='filiere' value='L2-MI'>L2-MI</option>";
									echo "<option name ='filiere' value='L3-I'>L3-I</option>";	
									echo "<option name ='filiere' value='LP-RS'>LP-RS</option>";									
									
								}
							?>
                            </select>
                        <p>Groupe: <br/></p>
                            <select name="grp">
														<?php 
								$groupe = $_SESSION["groupe"];
								if( 'A1' == $groupe){
									echo "<option name ='groupe' value='A1' selected>A1</option>";
									echo "<option name ='groupe' value='B2'>B2</option>";
									echo "<option name ='groupe' value='LPI-1'>LPI-1</option>";
									echo "<option name ='groupe' value='LPI-2'>LPI-2</option>";
									echo "<option name ='groupe' value='LPI-3'>LPI-3</option>";
									
								}
								if( 'B2' == $groupe){
									echo "<option name ='groupe' value='B2' selected>B2</option>";
									echo "<option name ='groupe' value='A1'>A1</option>";
									echo "<option name ='groupe' value='LPI-1'>LPI-1</option>";
									echo "<option name ='groupe' value='LPI-2'>LPI-2</option>";
									echo "<option name ='groupe' value='LPI-3'>LPI-3</option>";
									
								}
								if( 'LPI-1' == $groupe){
									echo "<option name ='groupe' value='LPI-1' selected>LPI-1</option>";
									echo "<option name ='groupe' value='A1'>A1</option>";
									echo "<option name ='groupe' value='B2'>B2</option>";
									echo "<option name ='groupe' value='LPI-2'>LPI-2</option>";
									echo "<option name ='groupe' value='LPI-3'>LPI-3</option>";
									
								}
								if( 'LPI-2' == $groupe){
									echo "<option name ='groupe' value='LPI-2' selected>LPI-2</option>";
									echo "<option name ='groupe' value='A1'>A1</option>";
									echo "<option name ='groupe' value='B2'>B2</option>";
									echo "<option name ='groupe' value='LPI-1'>LPI-1</option>";
									echo "<option name ='groupe' value='LPI-3'>LPI-3</option>";
									
								}
								if( 'LPI-3' == $groupe){
									echo "<option name ='groupe' value='LPI-3' selected>LPI-3</option>";
									echo "<option name ='groupe' value='A1'>A1</option>";
									echo "<option name ='groupe' value='B2'>B2</option>";
									echo "<option name ='groupe' value='LPI-1'>LPI-1</option>";	
									echo "<option name ='groupe' value='LPI-2'>LPI-2</option>";									
									
								}
							?>
                            </select>
			
						<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="pwrd" value="<?php echo $_SESSION["password"]; ?>"/> </p>
						
						<p> Importer une nouvelle photo: <br/><input class='champ' id='file' name='file' type='file'/></p>
							
							
						<input type="submit" name="valider" value="valider"/>		   
					</form>
					</div>
				</fieldset>
			</td>
		</tr>
		</tbody>
	</table>









</body>
</html>