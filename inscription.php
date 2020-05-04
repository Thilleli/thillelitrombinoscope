<?php

	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$email = $_POST["email"];
	$filière=$_POST["filiere"];
	$groupe=$_POST["groupe"];
	$login = $_POST["login"];
	$password = $_POST["password"];
	$file=$_POST["pic"];
	
	

	$doesUserExist = FALSE;
	$fichier = "users/users.csv";
	$lines = file($fichier);

	for($i=0;$i<sizeof($lines);$i++){	
		$line = $lines[$i];
		echo $line.'\n';
		$tab= explode(",",$line);
		if ($tab[2] == $email and $tab[5] == $login){
			$doesUserExist = TRUE;
			break; //Sortir de la boucle
		}
	}

	if( $doesUserExist == TRUE )
	{
		header('Location: inscription.php?erreur=erreurInscription');  
		exit();  
	}

	
	else
	{
		$fichier= fopen($fichier,"a") or die("Unable to open file!");
		fwrite($fichier, "\n");
		$hash=md5($password);
		fwrite($fichier, $nom .",".$prenom .",".$email .",". $filière .",". $groupe .",". $login."," .$hash);
		fclose($fichier);
		header('Location: index.php'); 
		exit();
	
	}

?>






	
	











