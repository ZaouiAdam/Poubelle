<html>

<head><title>Validation</title>

<link rel="shortcut icon" href="https://image.ibb.co/frmXD8/icons8_maintenance_de_l_imprimante_48.png">

<link rel="stylesheet" href="style.css" media="screen" type="text/css" />

</head>

<body>

<center>

<br><br>

<FONT face="Arial">

</font>

</body>

<?php

$CONNEXION = mysqli_connect('localhost','root','root','pisciculture') or die (mysqli_error());

if (empty($_POST['NOM'])){

?><img src="refus.jpg" class="taille"><br><br><?php

echo "<br><br><h2><FONT color = #F22727> Le champ nom n'a pas été rempli.<FONT></h2><br><br>";

}

else if (empty($_POST['PRE'])){

?><img src="refus.jpg" class="taille"><br><br><?php

echo "<br><br><h2><FONT color = #F22727> Le champ prénom n'a pas été rempli.<FONT></h2><br><br>";

}

else if (empty($_POST['ID'])){

?><img src="refus.jpg" class="taille"><br><br><?php

echo "<br><br><h2><FONT color = #F22727> Le champ identifiant n'a pas été rempli.<FONT></h2><br><br>";

}

else if (empty($_POST['MDP'])){

?><img src="refus.jpg" class="taille"><br><br><?php

echo "<br><br><h2><FONT color = #F22727> Le champ mot de passe n'a pas été rempli.<FONT></h2><br><br>";

}

else if (empty($_POST['FON'])){

?><img src="refus.jpg" class="taille"><br><br><?php

echo "<br><br><h2><FONT color = #F22727> Le champ fonction n'a pas été rempli.<FONT></h2><br><br>";

}

else{

?><img src="valider.png" ><?php

?>

<h2 style="color:green">Votre inscription a bien été prise en compte.</h2>

<?php

$nom=$_POST['NOM'];

$pre=$_POST['PRE'];

$id=$_POST['ID'];

$mdp=$_POST['MDP'];

$fon=$_POST['FON'];

$req = "INSERT INTO authentification (nom,prenom,identifiant,mot_de_passe,fonction) values ('$nom','$pre','$id','$mdp','$fon')";

$res = mysqli_query($CONNEXION,$req);

}

?>



<a href="Connexion.php">Se connecter</a>

</center>

</html>