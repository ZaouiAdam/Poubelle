<html>
<head><title>Validation</title>
<link rel="shortcut icon" href="https://image.ibb.co/frmXD8/icons8_maintenance_de_l_imprimante_48.png">
</head>
<body>
<center>
<br><br>
<FONT face="Arial">
</font>
</body>
<?php 
	 
$CONNEXION = mysqli_connect('localhost','root','','jeux') or die (mysqli_error());

if (empty($_POST['NOM'])){
	?><img src="./Image/refuser.jpg" ><br><br><?php
	echo "<br><br><h2><FONT color = red> Le Nom n'a pas été remplis.<FONT></h2><br><br>";
}
else if (empty($_POST['PRE'])){
	?><img src="./Image/refuser.jpg" ><br><br><?php
	echo "<br><br><h2><FONT color = red> Le Prenom n'a pas été remplis.<FONT></h2><br><br>";
}
else if (empty($_POST['AGE'])){
	?><img src="./Image/refuser.jpg" ><br><br><?php
	echo "<br><br><h2><FONT color = red> L'Age n'a pas été remplis.<FONT></h2><br><br>";
}
else if (empty($_POST['PSE'])){
	?><img src="./Image/refuser.jpg" ><br><br><?php
	echo "<br><br><h2><FONT color = red> Le Pseudo n'a pas été remplis.<FONT></h2><br><br>";
}
else if (empty($_POST['PAS'])){3
	?><img src="./Image/refuser.jpg" ><br><br><?php
	echo "<br><br><h2><FONT color = red> Le Mot de passe n'a pas été remplis.<FONT></h2><br><br>";
}
else if (($_POST['PAS2']) != ($_POST['PAS'])){
	?><img src="./Image/refuser.jpg" ><br><br><?php
	echo "<br><br><h2><FONT color = red> Le Mot de passe est different du premier.<FONT></h2><br><br>";
}
else{
	?><img src="./Image/valide.png" ><?php
	
?>

<h2 style="color:green">Cette inscription a bien été pris en compte.</h2>

<?php

$nom=$_POST['NOM'];
$des=$_POST['PRE'];
$tai=$_POST['AGE'];
$rfi=$_POST['PSE'];
$not=$_POST['PAS'];

$req = "INSERT INTO carte (Nom,Prenom,Age,Pseudo,Mot-De-Passe) values ('$nom','$des','$tai','$rfi','$not')";

$res = mysqli_query($CONNEXION,$req);
}

?>
<a href="Ajout.php"><h2>S'inscrire : </h2></a>
<br><br>
<a href="Tableau.php"><h2>Afficher les inscrits : </h2></a>
</center>
</html>