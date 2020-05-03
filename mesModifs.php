<?php
session_start();
   if (isset($_POST['mail'])) {
        $myFichier= fopen("users.csv","r");
        $newContenu="";
        $newtab= $_POST["name"].",".$_POST["fname"].",".$_POST["mail"].",".$_POST["fil"].",".$_POST["grp"].",".$_POST["num"].",".md5($_POST["pwrd"])."\n";
        while (($line = fgets($myFichier))!== FALSE) {
            $line=explode(",", $line);
            if ($_POST["mail"]==$line[2]) {

                $newContenu = $newContenu . $newtab;

            }
            else
            {
                $newContenu = $newContenu . $line;
            }
        }
        fclose($myFichier);
        $modif_fichier=fopen("users.csv", "w");
        fputs($modif_fichier,$newContenu);
        fclose($modif_fichier);
        header('Location: compte.php');
		
    } 

    
	
        
		 
?>
