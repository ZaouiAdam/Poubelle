
<?php

$CONNEXION = mysqli_connect('localhost','root','','Hopital') or die (mysqli_error());

$req = "SELECT * FROM site_web";

$res = mysqli_query($CONNEXION,$req);

?>
<html>
<head>
<link rel="shortcut icon" href="https://image.ibb.co/iTcHfo/icons8_entr_e_interdite_48.png">
	<title>Tableau des requêtes</title>
</head>
<body>
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
<br><br>
<h3><a href="http://132.147.0.100/portail/front"><img src="./Image/bouton_retour_accueil.gif"></a></h3>
<img src="image/Sans titre 1.gif">
</center>
<script>
function nom() {
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
function pre() {
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
function req() {
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
</script>
</body>
</html>
