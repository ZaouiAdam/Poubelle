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

	 
$CONNEXION = mysqli_connect('localhost','root','','Hopital') or die (mysqli_error());

if (empty($_POST['DNS'])){
	?><img src="./Image/refuser.jpg" ><br><br><?php
	echo "<br><br><h2><FONT color = red> Le DNS n'a pas été remplis<FONT></h2><br><br>";
}
else if (empty($_POST['EQUIP'])){
	?><img src="./Image/refuser.jpg" ><br><br><?php
	echo "<br><br><h2><FONT color = red> Le numero d'equipement n'a pas été remplis<FONT></h2><br><br>";
}
else if (empty($_POST['BIOS'])){
	?><img src="./Image/refuser.jpg" ><br><br><?php
	echo "<br><br><h2><FONT color = red> Le bios n'a pas été remplis<FONT></h2><br><br>";
}
else if (empty($_POST['BAT'])){
	?><img src="./Image/refuser.jpg" ><br><br><?php
	echo "<br><br><h2><FONT color = red> Le batiment n'a pas été remplis<FONT></h2><br><br>";
}
else if (empty($_POST['SER'])){3
	?><img src="./Image/refuser.jpg" ><br><br><?php
	echo "<br><br><h2><FONT color = red> Le service n'a pas été remplis<FONT></h2><br><br>";
}
else if (empty($_POST['DES'])){
	?><img src="./Image/refuser.jpg" ><br><br><?php
	echo "<br><br><h2><FONT color = red> La designation n'a pas été remplis<FONT></h2><br><br>";
}
else if (empty($_POST['IP'])){
	?><img src="./Image/refuser.jpg" ><br><br><?php
	echo "<br><br><h2><FONT color = red> L'IP n'a pas été remplis<FONT></h2><br><br>";
}
else{
	?><img src="./Image/valide.png" >

<h2 style="color:green">Cette enregistrement a bien été pris en compte.</h2>

<?php



$dns=$_POST['DNS'];
$equip=$_POST['EQUIP'];
$bios=$_POST['BIOS'];
$bat=$_POST['BAT'];
$ser=$_POST['SER'];
$des=$_POST['DES'];
$ip=$_POST['IP'];

$req = "INSERT INTO imprimantes (DNS,Equipement,BIOS,Batiment,Service,Designation,IP) values ('$dns','$equip','$bios','$bat','$ser','$des','$ip')";

$res = mysqli_query($CONNEXION,$req);


}
?>
<a href="Ajout.php"><h2>Ajouter une imprimantes : </h2></a>
<br><br>
<?php

$i=0;

$URL = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

do{	
	$D = substr($URL, ++$i, 1);
	$i++;
}while( $D != "?" );

$D = substr($URL, $i, 100);

$CONNEXION = mysqli_connect('localhost','root','','Hopital') or die (mysqli_error());

$req = "DELETE FROM imprimantes WHERE Id = $D" ;

$res = mysqli_query($CONNEXION,$req);

?>
<a href="Tableau.php"><h2>Afficher les imprimantes : </h2</a>
<br><br>
<h3><a href="http://132.147.0.100/portail/front"><img src="./Image/bouton_retour_accueil.gif"></a></h3>
</center>
</html>