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
						<p>Nom:  <br/> <input required  minlength="3" type="text" name="name"/> </p>
						<p>Prénom:  <br/> <input required  minlength="3" type="text" name="fname"/> </p>
						<p>Email:  <br/> <input required  type="email" name="mail"/> </p>
						<p>Filière: <br/> </p>
                            <select name="fil">
                                <option name ='filiere' value='L1-MIPI'>L1-MIPI</option>
                                <option name ='filiere' value='L2-MI'>L2-MI</option>
                                <option name ='filiere' value='L3-I'>L3-I</option>
                                <option name ='filiere' value='LP-RS'>LP-RS</option>
                                <option name ='filiere' value='LPI-WS'>LPI-WS</option>
                            </select>
                        <p>Groupe: <br/></p>
                            <select name="grp">
                                <option name ='groupe' value='A1'>A1</option>
                                <option name ='groupe' value='B2'>B2</option>
                                <option name ='groupe' value='LPI-1'>LPI-1</option>
                                <option name ='groupe' value='LPI-2'>LPI-2</option>
                                <option name ='groupe' value='LPI-3'>LPI-3</option>
                            </select>
						
						<p>Numéro d'étudiant:  <br/> <input required  minlength="8" type="text" name="num"/> </p>
						<p>Mot de passe: <br/> <input required  minlength="8" type="password" name="pwrd"/> </p>
						
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