<?php
session_start();
function readLines(){
	$fichier = "users/users.csv";
	$lines = file($fichier);
	$newContenu="";
	
	for($i=0;$i<sizeof($lines);$i++){		
		$line = $lines[$i];
		$tab= explode(",",$line);
		$hash=md5($password);		
		if($tab[5]!= $_SESSION["etu"])
		{
			$newContenu = $newContenu.$line;
			
			
		}
	}
	return $newContenu;
}

if (isset($_POST['mail'])) {
	$myFichier= fopen("users/users.csv","r");
	$newtab= $_POST["name"].",".$_POST["fname"].",".$_POST["mail"].",".$_POST["fil"].",".$_POST["grp"].",".$_SESSION["etu"].",".md5($_POST["pwrd"])."\n";
	
	
	$file = fopen("users/users.csv", "w"); 
	if ($file) {
		
		fwrite($file, $newtab."\n");
		fwrite($file, readLines());
		fclose($file);
		$_SESSION["nom"]= $_POST["name"];
		$_SESSION['prenom']=$_POST["fname"];
		$_SESSION['mail']=$_POST["mail"];
		$_SESSION['filiere']=$_POST["fil"];
		$_SESSION['groupe']=$_POST["grp"];
		
							
							
							
	}
	header("Location: compte.php");
}

?>
