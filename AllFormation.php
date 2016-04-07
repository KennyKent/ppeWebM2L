<?php 
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=formation', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}
		catch(Exception  $e)
		{
			die ('Erreur : ' . $e);
		}
		$reponse = "select formation_libelle, nb_places, etat_inscription from formation f, inscrire i, utilisateur u where rang = 0 AND f.id_formation = i.id_formation AND u.id_salarie = i.id_salarie AND  AND username = ?";
		$instruction = $bdd->prepare($reponse);
		$instruction->execute(array($_SESSION['login']));
		$nombresplaces = "Le nombre de place pour cette formation est de : ";
		$nameformation = "Le nom de la formation est : ";
		
		while($row = $instruction->fetch(PDO::FETCH_ASSOC))
		{
			
			$libelle = $row["formation_libelle"];
			$nbplaces = $row["nb_places"];
			$state = $row["etat_inscription"];
			
			echo '</p>'.$nameformation ;
			echo $libelle .'<br>'; 
			echo $nombresplaces ;
			echo $nbplaces.'<br>';
			
switch ($state) 
{ 
    case 0: // dans le cas où la formation est en cours de validation
        echo "La formation est cours de validation".'</p>';
    break;
    
    case 1: // dans le cas où la formation est validée
        echo "La formation est validée".'</p>';
    break;
    
	case 2: // dans le cas où la formation est validée
        echo "La formation a été effectuée".'</p>';
    break;
	
    default:
        echo "La formation est disponible, vous pouvez vous y inscrire".'</p>';
}
		}



		
// $listeformation = array (
    // 'prenom' => 'François',
    // 'nom' => 'Dupont',
    // 'adresse' => '3 Rue du Paradis',
    // 'ville' => 'Marseille');

// foreach($listeformation as $cle => $element)
// {
    // echo '[' . $cle . '] vaut ' . $element . '<br />';
// }
?>


