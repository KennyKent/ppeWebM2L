<?PHP
session_start();

if(!isset($_SESSION['login']))
{
	header('Location: login.php?sess=nok');
}

?>
<!Doctype HTML>
<html>
<head>
<title>Liste des formations</title>
<meta charset="utf-8"/>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Liste des formations</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
  </head>
<body>
    <!-- Fixed navbar -->
<?php include("menu/menuConnexion.php"); ?>

	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h1>Liste des formations</h1>
				<h2>Technicien</h2>
				<h2> Bonjour Mr.
				<?PHP echo $_SESSION['login']; ?>
				</h2>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- headerwrap -->
	<div class="row">
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title"><font color="#1F45FC">Liste des formations</font></h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<?php 

	include("ListeFormation.php");

?>
							<hr>
								</div>
						</div>
					</div>
				</div>
			</article>


</body>

</HTML>

