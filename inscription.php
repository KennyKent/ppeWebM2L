<?PHP
session_start();

if(!isset($_SESSION['login']))
{
	header('Location: login.php?sess=nok');
}

// if(!isset($_SESSION['libelle']))
// {
	// header('Location: inscription.php?sess=nok');
// }

// if(isset($_GET["sess"]))
// {
	// $erreur =  'Vous venez de vous inscrire à la formation ';
// }
?>
<!Doctype HTML>
<html>
<head>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="css/spot/assets/ico/favicon.png">

    <link href="css/spot/assets/css/bootstrap.css" rel="stylesheet">
    <link href="css/spot/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/spot/assets/css/main.css" rel="stylesheet">
<title>Inscription</title>
<meta charset="utf-8"/>
</head>

<body>
<?php include("menu/menuConnexion.php"); ?>
<div class="container">
		<div class="row">
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title"><font color="#1F45FC">Inscription à une formation disponible</font></h1>
				</header>

				<div align="center"><h3 class="widget-title"><font color="red">Liste des formations disponibles: </font></h3></div>
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<hr>

							<form method="post" action="inscription.php">

								<div class="top-margin">
								<?PHP
									include("ListeFormationDispo.php");
								?>
								</div>
										<br>
								<div class="row">
									<div class="col-lg-8">
									<div class="col-lg-4 text-right">
										<div><input type="submit" value="Valider l'inscription">
									</div>

								</div>
							</form>
							
						</div>
					</div>

				</div>
				
			</article>
		</div>
	</div>
										<?PHP
					if(isset($erreur))
					{
						echo $erreur;
						echo $_SESSION['libelle'];
					}
				?>
</br>
</p>
</div>

</body>
</html>
