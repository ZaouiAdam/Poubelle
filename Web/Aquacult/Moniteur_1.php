<?php

$bas =($_POST['BAS']);

$bas2 = ($_POST['BAS']) + 1;


$CONNEXION = mysqli_connect('localhost','root','root','pisciculture') or die (mysqli_error());

$req1 = "SELECT `valeur` FROM `mesure` WHERE id = $bas2";

$res1 = mysqli_query($CONNEXION,$req1);

$req2 = "SELECT `valeur` FROM `mesure` WHERE id = $bas";

$res2 = mysqli_query($CONNEXION,$req2);

$req3 = "SELECT `n_bassin` FROM `bassin` WHERE n_bassin = $bas ";

$res3 = mysqli_query($CONNEXION,$req3);

$req4 = "SELECT `espece` FROM `bassin` WHERE n_bassin = $bas";

$res4 = mysqli_query($CONNEXION,$req4);

$req5 = "SELECT `age` FROM `bassin` WHERE n_bassin = $bas";

$res5 = mysqli_query($CONNEXION,$req5);

?>
<html>
<meta charset="utf-8">
<head>
	<title>Menu</title>
	<link href="test.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
	  google.charts.load('current', {'packages':['gauge']});
	  google.charts.setOnLoadCallback(drawChart);
	  function drawChart() {
	    var data = google.visualization.arrayToDataTable([
	      ['Label', 'Value'],
				<?php while ($_POST=mysqli_fetch_assoc($res1)) {?>
				['Température',
				<?php echo ($_POST['valeur']) ?>
			],
				<?php } ?>
				<?php while ($_POST=mysqli_fetch_assoc($res2)) {?>
				['Humidité',
				<?php echo ($_POST['valeur']) ?>
				]
				<?php } ?>
	    ]);
	    var options = {
	      height: 500,
				greenFrom: 0, greenTo: 50,
	      yellowFrom:50, yellowTo: 80,
				redFrom: 80, redTo: 100,
	      minorTicks: 5
	    };
	    var chart = new google.visualization.Gauge(document.getElementById('chart_div'));
	    chart.draw(data, options);
	  }
	</script>
<style>
	body{
		background : grey;
	}
</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		  <div class="navbar-header">
			<a class="navbar-brand" href="#">Aquacult</a>
		  </div>
		  <ul class="nav navbar-nav">
			  <li class="dropdown active">
					<?php while ($_POST=mysqli_fetch_assoc($res3)) {?>
					<a class="nav-link" href="#">Bassin N° : <?php echo ($_POST['n_bassin']) ?></a>
					<?php } ?>
			  </li>
		  </ul>
			<ul class="nav navbar-nav">
			  <li class="dropdown active">
					<?php while ($_POST=mysqli_fetch_assoc($res4)) {?>
					<a class="nav-link" href="#">Espèce    : <?php echo ($_POST['espece']) ?></a>
					<?php } ?>
			  </li>
		  </ul>
			<ul class="nav navbar-nav">
			  <li class="dropdown active">
					<?php while ($_POST=mysqli_fetch_assoc($res5)) {?>
					<a class="nav-link" href="#">Age       : <?php echo ($_POST['age']) ?></a>
					<?php } ?>
			  </li>
		  </ul>
		</div>
	</nav>
	<center>
		<div style="margin-top: 50px" class="menu">
		<div id="chart_div"></div>
		</div>
		<?php// header("refresh:10");?>
	</center>
</body>
</html>
