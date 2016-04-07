<?php 
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=formation', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch(Exception  $e)
		{
			die ('Erreur : ' . $e);
		}
		$reponse = "select formation_libelle, nb_places, username, etat_inscription from formation f, inscrire i, utilisateur u where f.id_formation = i.id_formation AND u.id_salarie = i.id_salarie AND rang = 0 AND etat_inscription < 3";
		$instruction = $bdd->query($reponse);
		
		$nombresplaces = "Le nombre de place pour cette formation est de : ";
		$estInscrit = " est inscrit à : ";
		
		while($row = $instruction->fetch(PDO::FETCH_ASSOC))
		{
			
			$libelle = $row["formation_libelle"];
			$nbplaces = $row["nb_places"];
			$username = $row["username"];
			
			echo '<p>';
			echo $username;
			echo $estInscrit;
			echo $libelle .'<br>'; 
			echo $nombresplaces ;
			echo $nbplaces.'</p>';
		}

?>


