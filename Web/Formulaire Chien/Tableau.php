<?php

$CONNEXION = mysqli_connect('localhost','root','','jeux') or die (mysqli_error());

$req = "SELECT * FROM carte";

$res = mysqli_query($CONNEXION,$req);

?>
<html>
<head>
<meta charset="UTF-8">
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
<h3><a href="Ajout.php">Ajouter un membre da le famille</a></h3>
<img src="./Image/iconeimp.png" ><br><br>

<table id="myTable">

	<tr>
		<th><input type="submit" value=" Nom " onclick="dns()" class="champ"></th>
		<th><input type="submit" value=" Prenom " onclick="equip()" class="champ"></th>
		<th><input type="submit" value=" Status familliale " onclick="bios()" class="champ"></th>
		<th><input type="submit" value=" Date de naissance " onclick="bat()" class="champ"></th>
		<th>Suppression</th>
		<th>Modifier</th>
	</tr>
	<?php while ($_POST=mysqli_fetch_assoc($res)) {?>
	<tr>
		<td><center><?php echo ($_POST['Nom']) ?></center></td>
		<td><center><?php echo ($_POST['Prenom'])?></center></td>
		<td><center><?php echo ($_POST['Age'])?></center></td>
		<td><center><?php echo ($_POST['Pseudo'])?></center></td>
		<td><center><?php echo ($_POST['Mot-De-Passe'])?></center></td>
		<td><center><a href="Suppression.php?Id=<?php echo $_POST['Id']; ?>">Suppprimer</a></center></td>
		<form method="POST" action="Modification.php?DNS=<?php echo $_POST['NOM']; ?>?EQ=<?php echo $_POST['DES']; ?>?BIOS=<?php echo $_POST['TAI']; ?>?BAT=<?php echo $_POST['RFI']; ?>?SER=<?php echo $_POST['NOT']; ?>?DES=<?php echo $_POST['RAC']; ?>?IP=<?php echo $_POST['DRA']; ?>?Id=<?php echo $_POST['Id']; ?>">
		<td><center><input type="submit" value="Modifier" ></center></td>
		</form>
	</tr>
	
	<?php } ?>

</table>
</center>
<script>
function dns() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[0];
      y = rows[i + 1].getElementsByTagName("TD")[0];
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
function equip() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[1];
      y = rows[i + 1].getElementsByTagName("TD")[1];
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
function bios() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[2];
      y = rows[i + 1].getElementsByTagName("TD")[2];
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
function bat() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[3];
      y = rows[i + 1].getElementsByTagName("TD")[3];
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
function ser() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[4];
      y = rows[i + 1].getElementsByTagName("TD")[4];
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
function des() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[5];
      y = rows[i + 1].getElementsByTagName("TD")[5];
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
function ip() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  while (switching) {
    switching = false;
    rows = table.getElementsByTagName("TR");
    for (i = 1; i < (rows.length - 1); i++) {
      shouldSwitch = false;
      x = rows[i].getElementsByTagName("TD")[6];
      y = rows[i + 1].getElementsByTagName("TD")[6];
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>
</body>
</html>