<?PHP
session_start();
?>
<!Doctype HTML>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="css/spot/assets/ico/favicon.png">

    <link href="css/spot/assets/css/bootstrap.css" rel="stylesheet">
    <link href="css/spot/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/spot/assets/css/main.css" rel="stylesheet">
<title>Mot de passe oublié</title>

</head>
<body>

<?php include("menu/menu.php"); ?>

<div class="row">
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title"><font color="#1F45FC">Mot de passe oublié</font></h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="mdpoublie.php" method="post">
Veuillez entrer votre email, un mail vous sera envoyé avec votre nouveau mot de passe.
<br>
								<br>
								<div class="top-margin">
									<label>Email :</label>
									<input type="text" class="form-control" name="email">
								</div>

								<hr>

									<div class="col-lg-4 text-right">
									 
            <p>
			
            <div align="left"><input class="btn btn-action" type="submit" value="Modifier Mot de passe"></input></div>
            </p>
        </form>
							<hr>
								</div>
						
					</div>
				</div>
			</article>
			

</div>
</body>