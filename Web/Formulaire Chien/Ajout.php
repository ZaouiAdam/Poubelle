<html>
<head>
<link rel="shortcut icon" href="https://image.ibb.co/frmXD8/icons8_maintenance_de_l_imprimante_48.png">
<title>Enregistrement de rendez-vous </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
table {
border: medium solid #6495ed;
border-collapse: collapse;
width: 30%;
}
th {
font-family: monospace;
border: thin solid blue;
width: 40%;
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
    height:30%;
    width:50%;
}
.text {
	border: thin solid #008986;
    height:35px;
    width:280px;
}
</style>
</head>
<body>

<center>
<br>
<h2><label style="arial; color:#6495ed;"> Inscription du chien : </label></h2>
<br>
<FONT face="Berlin Sans FB">
<form method="POST" action="Validation.php">
<table>

<tr>
<td align="center" colspan ="2" style="arial; color:#005B59;">Nom</td>
	<td align="center" colspan ="2"><input type="Text" name="NOM" class="text" ></td>
</tr>
<tr>
<td align="center" colspan ="2" style="arial; color:#005B59;">Description du chien</td>
	<td align="center" colspan ="2"><input type="Text" name="DES" class="text"></td>
</tr>
<tr>
<td align="center" colspan ="2" style="arial; color:#005B59;">Taille du chien</td>
	<td align="center" colspan ="2"><select name="TAI" onchange="updated(this)" class="text">
	<option value="Petit">Petit</option>
	<option value="Moyen">Moyen</option>
    <option value="Grand">Grand</option>
</select>
</td>
</tr>
<tr>
<td align="center" colspan ="2" style="arial; color:#005B59;">Puce RFID</td>
	<td align="center" colspan ="2"><input type="Text" name="RFI" class="text"></td>
</tr>
<tr>
<td align="center" colspan ="2" style="arial; color:#005B59;">Note Puce RFID</td>
	<td align="center" colspan ="2"><input type="Text" name="NOT" class="text"></td>
</tr>
<tr>
<td align="center" colspan ="2" style="arial; color:#005B59;">Race</td>
	<td align="center" colspan ="2"><input type="Text" name="RAC" class="text"></td>
</tr>
<tr>
<td align="center" colspan ="2" style="arial; color:#005B59;">Description race</td>
	<td align="center" colspan ="2"><input type="Text" name="DRA" class="text"></td>
</tr>
<table>
<tr>
<td align="center" colspan ="3"><br><input type="submit" value=" Enregistrer " class="text"><br><br></td>
</tr>
</table>
</table>
</font>
<br>
<h3><a href="Tableau.php"> Afficher tout les rendez-vous</a></h3>
<br>
</form>
</center>
</body>
</html> 