<?php

$i;

$URL = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

do{
	$D = substr($URL, $i, 1);
	$i++;
}while( $D != "=" );

$D = substr($URL, $i, 100);

echo "$D";

$CONNEXION = mysqli_connect('localhost','root','','Hopital') or die (mysqli_error());

$req = "DELETE FROM site_web WHERE Id = $D" ;

$res = mysqli_query($CONNEXION,$req);

header('Location: http://localhost/Site%20interdit/Tableau.php');
exit();

?>
