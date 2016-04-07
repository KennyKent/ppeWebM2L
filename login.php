<?PHP
include("connexion.php");
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
<title>Connexion</title>
<meta charset="utf-8"/>
</head>
<body>

<?php include("menu/menu.php"); ?>

<div class="row">
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title"><font color="#1F45FC">Connexion</font></h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Se connecter à un compte</h3>
							<p class="text-center text-muted">Veuillez entrer votre mot de passe ainsi que votre identifiant pour vous connectez:</p>
							<hr>
							
							
							<form action="login.php" method="post">
								<div class="top-margin">
									<label>Nom d'utilisateur :</label>
									<input type="text" class="form-control" name="username">
								</div>
								<div class="top-margin">
									<label>Mot de passe :</label>
									<input type="password" class="form-control" name="password">
								</div>
								<hr>
								<div class="row">
									<div class="col-lg-4 text-right">
									 
            <p>
				<?PHP
					if(isset($erreur))
					{
						echo $erreur;
					}
				?>
            <div align="left"><input class="btn btn-action" type="submit" value="Se Connecter"></input></div>
            </p>
        </form>
		
		<a href="forgetpassword.php">Mot de passe oublié ?</a>
									</div>
								</div>
						</div>
					</div>
				</div>
			</article>
		</div>


  </body>
</html>

