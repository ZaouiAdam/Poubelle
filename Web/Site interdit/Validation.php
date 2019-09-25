<html>
<head>
<link rel="shortcut icon" href="https://image.ibb.co/iTcHfo/icons8_entr_e_interdite_48.png">
<title>Validation</title>
</head>
<body>
<center>
<br><br>
<FONT face="Calibri">
</font>
</body>
<?php 
	 
$CONNEXION = mysqli_connect('localhost','root','','Hopital') or die (mysqli_error());

if (empty($_POST['NOM'])){
	?><img src="./Image/Refuser.gif" ><br><br><?php
	echo "<h2><FONT color = red> Vous n'avez pas déclaré votre nom.<FONT></h2><br>";
}
else if (empty($_POST['PRE'])){
	?><img src="./Image/Refuser.gif" ><br><br><?php
	echo "<h2><FONT color = red> Vous n'avez pas déclaré votre prenom.<FONT></h2><br>";
}
else if (empty($_POST['REQ'])){
	?><img src="./Image/Refuser.gif" ><br><br><?php
	echo "<h2><FONT color = red> Aucune requête n'a pas été remplis.<FONT></h2><br>";
}
else{
	?><img src="./Image/autorise.png" ><?php
	
?>

<h2 style="color:green">Cette requête a bien été prise en compte.</h2>
<br>
<?php

$nom=$_POST['NOM'];
$pre=$_POST['PRE'];
$rek=$_POST['REQ'];

$req = "INSERT INTO site_web (NOM,PRE,REQ) values ('$nom','$pre','$rek')";

$res = mysqli_query($CONNEXION,$req);
}

?>
<h3><a href="http://132.147.0.100/portail/front"><img src="./Image/bouton_retour_accueil.gif"></a></h3>
</center>
</html>