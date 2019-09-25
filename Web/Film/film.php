<?php

$CONNEXION = mysqli_connect('localhost','root','','acteurs') or die (mysqli_error());

$rep = "SELECT * FROM film";

$res = mysqli_query($CONNEXION, $rep);


if(isset($REQUEST['ajoutartiste'])){
$bdd = new PDO('mysl:host=localhost;dbname=cinema;charset=utf8', 'root','');

$codeacteur = $_POST['codeacteur'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$birth = $_POST['birth'];
$site = $_POST['site'];

$requete = "INSERT INTO 'acteur' (`codeacteur`,`nom`,`prenom`,`birth`,`site`)
VALUES (NULL, '$nom','$prenom','$birth','$site')";

if($bdd->query($requete))
    echo "Ajout réussi";
else
    echo"Echec de l'ajout";

}

?>