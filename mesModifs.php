<?php
session_start();
function readLines(){
	$fichier = "users/users.csv";
	$lines = file($fichier);
	$newContenu="";
	$newtab= $_POST["name"].",".$_POST["fname"].",".$_POST["mail"].",".$_POST["fil"].",".$_POST["grp"].",".$_SESSION["etu"].",".md5($_POST["pwrd"])."\n";
	
	for($i=0;$i<sizeof($lines);$i++){		
	
		$line= explode(",",$line[$i]);
		$hash=md5($password);		
		if($line[5]!= $_SESSION["etu"])
		{
			$str_line=implode(",",$line);
			$newContenu = $newContenu.$str_line;	
		}
		else
		{
			
			$newContenu= $newContenu.$newtab; 
		}
	}

	
	$file = fopen("users/users.csv", "w"); 
	if ($file== TRUE) {
		
		fwrite($file, $newContenu);
		fclose($file);
		$_SESSION["nom"]= $_POST["name"];
		$_SESSION['prenom']=$_POST["fname"];
		$_SESSION['mail']=$_POST["mail"];
		$_SESSION['filiere']=$_POST["fil"];
		$_SESSION['groupe']=$_POST["grp"];

	}
	
}
if (readLines())
{
	header("Location: compte.php");
	exit();
}



?>
