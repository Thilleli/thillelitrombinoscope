<?php
session_start();
	//recuperation des paramètres login et mot de passe
	
	$login = $_POST["login"];
	$password = $_POST["password"];

	$doesUserExist = FALSE;
	$fichier = "users/users.csv";
	$lines = file($fichier);
	
	for($i=0;$i<sizeof($lines);$i++){		
		$line = $lines[$i];
		$tab= explode(",",$line);
		$hash=md5($password);		
		if($tab[5]== $login and  $tab[6] == $hash)
		{
			$doesUserExist = TRUE;
			break; //Sortir de la boucle
		}
	}
	for($i=0;$i<sizeof($lines);$i++){		
		$line = $lines[$i];
		$tab= explode(",",$line);
		if( $doesUserExist = TRUE )
		{      
			if ($tab[5]==$login AND $tab[6]==md5($password)){
				header('Location: compte.php?erreur=connexionErreur');
				$_SESSION["nom"]= $tab[0];
				$_SESSION["prenom"]= $tab[1];
				$_SESSION["mail"]= $tab[2];
				$_SESSION["filiere"]= $tab[3];
				$_SESSION["groupe"]= $tab[4];
				$_SESSION["etu"]= $tab[5];
				
				exit();
			}
		}
		else{
			header('Location: index.php?erreur=connexionErreur');  
			exit();  
		}
	}

?>
