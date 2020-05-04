<?php
session_start(); 
	
	$fichier = "users/users.csv";
	$lines = file($fichier);
	
?>
<!DOCTYPE html>

<html lang="fr">
	<head>
		<title>Profil</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link href="css/style.css" rel="stylesheet">
	</head> 
<body> 
	<header>
		<img class = "logo" src="/images/cy.png" />
		<h1>CERGY PARIS UNIVERSITÉ</h1>	
		
	</header>
	<nav>
		<ul>
			<li><a href="../index.php">Accueil</a></li>
			<li><a href="../modifs.php">Editer mon profil</a></li>
			<li><a href="../deco.php">Déconnexion</a></li>
		</ul>
	</nav>
	<div align="center">
		<h2>Bienvenue dans l'éspace étudiant</h2>
		<p> Vous êtes connecté en tant que <?php echo $_SESSION["nom"]. " " .$_SESSION["prenom"];?></p>
		<br/><br />
		Nom: <?php echo $_SESSION["nom"];?>
		<br/>
		Prénom:<?php echo $_SESSION["prenom"];?>
		<br/>
		Mail: <?php echo $_SESSION["mail"];?>
		<br/>
		Filière:<?php echo $_SESSION["filiere"];?>
		<br/>
		Groupe:<?php echo $_SESSION["groupe"];?>
		<br/>
		Numéro d'étudiant: <?php echo $_SESSION["etu"];?>
		
	</div>
	
	
</body>
<footer>
	<p>Site créé par Thilleli BELHOCINE, Avril 2020</p>
</footer>
</html>