<?php

$CONNEXION = mysqli_connect('localhost','root','','Hopital') or die (mysqli_error());

$d = $_POST['query'];

$req = "SELECT * FROM site_web WHERE NOM LIKE '$d%'";

$res = mysqli_query($CONNEXION,$req);

?>
<html>
<head>
<link rel="shortcut icon" href="https://image.ibb.co/frmXD8/icons8_maintenance_de_l_imprimante_48.png">
	<title>Tableau</title>
<style>
table {
border: medium solid #6495ed;
border-collapse: collapse;
width: 50%;
}
th {
font-family: monospace;
border: thin solid #6495ed;
width: 50%;
padding: 5px;
background-color: #D0E3FA;
background-image: url(sky.jpg);
}
td {
font-family: sans-serif;
border: thin solid #6495ed;
width: 50%;
padding: 5px;
text-align: center;
background-color: #ffffff;
}
caption {
font-family: sans-serif;
}
.champ {
    height:100%;
    width:100%;
}
</style>
</head>
<body>

<center>
               <br>
               <br><form method="POST" action="Recherche.php">
                   <input type= "text" name= "query" />
                   <input type= "submit" value= "Rechercher">
				   </form>
               </form>
<h3><a href="Interdiction.php">Page d'interdiction :</a></h3>
<img src="./Image/WWW.gif" ><br><br>

<table id="myTable">
	<tr>
		<th><input type="submit" value=" Nom " onclick="nom()" class="champ"></th>
		<th><input type="submit" value=" Prenom " onclick="pre()" class="champ"></th>
		<th><input type="submit" value=" Requête " onclick="req()" class="champ"></th>
		<th>Suppression</th>
	</tr>
	<?php while ($_POST=mysqli_fetch_assoc($res)) {?>
	<tr>
		<td><center><?php echo ($_POST['NOM']) ?></center></td>
		<td><center><?php echo ($_POST['PRE'])?></center></td>
		<td><center><?php echo ($_POST['REQ'])?></center></td>
		<td><center><a href="Suppression.php?Id=<?php echo $_POST['Id']; ?>">Suppprimer</a></center></td>
	</tr>
	<?php } ?>
</table>
<br>
<br>
<h3><a href="http://132.147.0.100/portail/front"><img src="./Image/bouton_retour_accueil.gif"></a></h3>
<img src="image/Sans titre 1.gif">
</center>
</body>
</html>