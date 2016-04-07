<?php 
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=formation', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch(Exception  $e)
		{
			die ('Erreur : ' . $e);
		}
		$reponse = "select formation_libelle, nb_places, etat_inscription from formation f, inscrire i, utilisateur u where rang = 0 AND etat_inscription = 3 AND f.id_formation = i.id_formation AND u.id_salarie = i.id_salarie AND username = ?";
		$instruction = $bdd->prepare($reponse);
		$instruction->execute(array($_SESSION['login']));
		$nombresplaces = "Le nombre de place pour cette formation est de : ";
		$nameformation = "Le nom de la formation est : ";
		
		echo '<select name="list_formation_dispo">';
		while($row = $instruction->fetch(PDO::FETCH_ASSOC))
		{
			
			$libelle = $row["formation_libelle"];
			$nbplaces = $row["nb_places"];
			$state = $row["etat_inscription"];
			
			echo '</p>'.$nameformation ;
			echo $libelle .'<br>'; 
			echo $nombresplaces ;
			echo $nbplaces.'<br>';
			
			echo '<option>'. $libelle .'</option>' ;
				$_SESSION['libelle'] = $libelle;
		}
	
		echo '</select>' ;
?>