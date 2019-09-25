<?php

$CONNEXION = mysqli_connect('localhost','root','','Hopital') or die (mysqli_error());

$d = $_POST['query'];

$req = "SELECT * FROM imprimantes WHERE DNS LIKE '$d%'";

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
<h3><a href="Ajout.php">Ajouter une imprimante</a></h3>
<img src="./Image/iconeimp.png" ><br><br>

<table id="myTable">
	<tr>
		<th><input type="submit" value=" DNS " onclick="dns()" class="champ"></th>
		<th><input type="submit" value=" Equipement " onclick="equip()" class="champ"></th>
		<th><input type="submit" value=" BIOS " onclick="bios()" class="champ"></th>
		<th><input type="submit" value=" Batiment " onclick="bat()" class="champ"></th>
		<th><input type="submit" value=" Service " onclick="ser()" class="champ"></th>
		<th><input type="submit" value=" Designation " onclick="des()" class="champ"></th>
		<th><input type="submit" value=" IP " onclick="ip()" class="champ"></th>
		<th>Suppression</th>
		<th>Modifier</th>
	</tr>
	<?php while ($_POST=mysqli_fetch_assoc($res)) {?>
	<tr>
		<td><center><?php echo ($_POST['DNS']) ?></center></td>
		<td><center><?php echo ($_POST['Equipement'])?></center></td>
		<td><center><?php echo ($_POST['BIOS'])?></center></td>
		<td><center><?php echo ($_POST['Batiment'])?></center></td>
		<td><center><?php echo ($_POST['Service'])?></center></td>
		<td><center><?php echo ($_POST['Designation'])?></center></td>
		<td><center><?php echo ($_POST['IP'])?></center></td>
		<td><center><a href="Suppression.php?Id=<?php echo $_POST['Id']; ?>">Suppprimer</a></center></td>
		<form method="POST" action="Modification.php?DNS=<?php echo $_POST['DNS']; ?>?EQ=<?php echo $_POST['Equipement']; ?>?BIOS=<?php echo $_POST['BIOS']; ?>?BAT=<?php echo $_POST['Batiment']; ?>?SER=<?php echo $_POST['Service']; ?>?DES=<?php echo $_POST['Designation']; ?>?IP=<?php echo $_POST['IP']; ?>?Id=<?php echo $_POST['Id']; ?>">
		<td><center><input type="submit" value="Modifier" ></center></td>
		</form>
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