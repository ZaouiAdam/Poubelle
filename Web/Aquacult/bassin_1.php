<?php

$CONNEXION = mysqli_connect('localhost','root','','connexion_aquaculture') or die (mysqli_error());

$req = "SELECT * FROM bassin WHERE code_bassin LIKE 1";

$res = mysqli_query($CONNEXION,$req);

?>
<html>
<head>
	<title>Bassin 1</title>
  	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Aquacult</a>
		    </div>
		    <ul class="nav navbar-nav">
				<li class="dropdown active">
					<a class="nav-link" href="bassin_1.php">Bassin 1</a>
				</li>
				<li class="dropdown">
					<a class="nav-link" href="bassin_2.php">Bassin 2</a>
				</li>
				<li class="dropdown">
					<a class="nav-link" href="bassin_3.php">Bassin 3</a>
				</li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="connexion.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
		    </ul>
  		</div>
	</nav>
	<br><br><br>
	<?php while ($_POST=mysqli_fetch_assoc($res)) {?>
	<?php $ph=$_POST["Ph"];?>
	<div class="progress">
		<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $ph ?>%">
			<?php echo $ph ?> ph
		</div>
	</div>
	<?php $temperature=$_POST["Température"];?>
	<br><br>
	<div class="progress">
		<div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $temperature ?>%">
			<?php echo $temperature ?> °C
		</div>
	</div>
	<?php } ?>
</body>
</html>