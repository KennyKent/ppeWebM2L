<?PHP
session_start();

unset($_SESSION['login']);

if(isset($_GET["sess"]))
{
	$erreur = "Vous devez vous identifier pour accéder à la page !";
}
		try
			{
				$bdd = new PDO("mysql:host=localhost;dbname=formation",
				"root","");
			}
			catch(Exception $e)
			{
				die("Erreur de connexion");
			}
if(!empty($_POST))
{
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$donnees = $bdd->query('SELECT user_password, username, rang FROM utilisateur');
 while ($ligne = $donnees->fetch())
 {
	if ($ligne['rang'] == 1 AND $_POST['password'] == $ligne['user_password'] AND $_POST['username'] == $ligne['username'] ) 
    {
		$_SESSION['login'] = $_POST['username'];
		header('Location: Admin.php');
	}
	else if ($ligne['rang'] == 0 AND $_POST['password'] == $ligne['user_password'] AND $_POST['username'] == $ligne['username'] ) 
    {
		$_SESSION['login'] = $_POST['username'];
		header('Location: Technicien.php');
	}
	else
    {
		$erreur = 'Identifiant ou mot de passe incorrect';
    }
 }
}
?>