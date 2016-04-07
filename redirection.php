<?PHP	
	$bdd = new PDO('mysql:host=localhost;dbname=formation', 'root', '');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$donnees = $bdd->query('SELECT user_password, username, rang FROM utilisateur');
 while ($ligne = $donnees->fetch())
 {
	if ($ligne['rang'] == 1 AND $_POST['password'] == $ligne['user_password'] AND $_POST['username'] == $ligne['username'] ) 
    {
		header('Location: Admin.php');
	}
	else if ($ligne['rang'] == 0 AND $_POST['password'] == $ligne['user_password'] AND $_POST['username'] == $ligne['username'] ) 
    {
		header('Location: Technicien.php');
	}
	else
    {
		header('Location: login.php');
    }
 }

			?>
