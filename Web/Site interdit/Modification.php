<html>
<head>

<title>Enregistrement d'Imprimante</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<center>
<img src="./Image/iconeimp.png" ><br><br>
<h2>Enregistrement d'Imprimantes</h2>
<FONT face="Berlin Sans FB">
<form method="POST" action="Enregistrement.php">
<table width="30%" border="2">
<tr>
<?php 

$j=0;
$DNS=0;


$URL = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

do{	
	$i = substr($URL, $j, 1);
	$j++;
}while( $i != "=" );
$t1=$j;
$t2=0;
while( $t1 != "?" ){	
	$t1 = substr($URL, $t2, 1);
	$t2++;
}

$DNS = substr($URL, $j, $t2);

echo "$DNS";


?>
<td align="center" colspan ="2"><br>Nom DNS</td>
	<td align="center" colspan ="2"><input type="Text" name="DNS" value="<?php echo "$DNS";?>"></td>
</tr>
<tr>
<td align="center" colspan ="2"><br>Equipement</td>
	<td align="center" colspan ="2"><input type="Text" name="EQUIP"></td>
</tr>
<tr>
<td align="center" colspan ="2"><br>Nom BIOS</td>
	<td align="center" colspan ="2"><input type="Text" name="BIOS"></td>
</tr>
<tr>
<td align="center" colspan ="2"><br>Batiment</td>
	<td align="center" colspan ="2"><select name="BAT" onchange="updated(this)" value="">
	<option value="Autre">Autre</option>
	<option value="CAK_ETAGE">CAK_ETAGE</option>
    <option value="CAK_RDC">CAK_RDC</option>
    <option value="CAK_RDJ">CAK_RDJ</option>
	<option value="Chimio">Chimio</option>
	<option value="Direction">Direction</option>
	<option value="Gyneco">Gyneco</option>
	<option value="Hemo">Hemo</option>
	<option value="HPNP_ETAGE">HPNP_ETAGE</option>
	<option value="HPNP_RDC">HPNP_RDC</option>
	<option value="HPNP_RDJ">HPNP_RDJ</option>
</select>
</td>
</tr>
<tr>
<td align="center" colspan ="2"><br>Service</td>
	<td align="center" colspan ="2"><select name="SER" onchange="updated(this)">
	<option value="Autre">Autre</option>
	<option value="Accueil Ambulatoire">Accueil Ambulatoire</option>
    <option value="Ambulance sercretariat">Ambulance sercretariat</option>
    <option value="Comptabilité">Comptabilité</option>
	<option value="Facturation">Facturation</option>
	<option value="Salle de reveil">Salle de reveil</option>
	<option value="Accueil CAK">Accueil CAK</option>
	<option value="Bureau 0">Bureau 0</option>
	<option value="Bureau A">Bureau A</option>
	<option value="Bureau B">Bureau B</option>
	<option value="Bureau C">Bureau C</option>
	<option value="Bureau D">Bureau D</option>
	<option value="Bureau E">Bureau E</option>
	<option value="Bureau F">Bureau F</option>
	<option value="Bureau G">Bureau G</option>
	<option value="Bureau H">Bureau H</option>
	<option value="Bureau I">Bureau I</option>
	<option value="Bureau sureveillance">Bureau sureveillance</option>
	<option value="AUTODIALYSE">AUTODIALYSE</option>
	<option value="Bureau Vacant">Bureau Vacant</option>
	<option value="PMSI">PMSI</option>
	<option value="Chimio">Chimio</option>
	<option value="Chimio pharmacien">Chimio pharmacien</option>
	<option value="Assistante de direction">Assistante de direction</option>
	<option value="Bureau juriste">Bureau juriste</option>
	<option value="Directeur d'administration">Directeur d'administration</option>
	<option value="Gynécologue">Gynécologue</option>
	<option value="Mme Maitre">Mme Maitre</option>
	<option value="Bureau IDE">Bureau IDE</option>
	<option value="Admission Etage">Admission Etage</option>
	<option value="Salle de naissance">Salle de naissance</option>
	<option value="Secretariat service Bleu">Secretariat service Bleu</option>
	<option value="Secretariat maternité">Secretariat maternité</option>
	<option value="Biomedical">Biomedical</option>
	<option value="Pharmacie">Pharmacie</option>
	<option value="Ressource humaine">Ressource humaine</option>
	<option value="Secretariat soins de suite">Secretariat soins de suite</option>
	<option value="Accueil HPNP">Accueil HPNP</option>
	<option value="Accueil urgence">Accueil urgence</option>
	<option value="Admission RDC">Admission RDC</option>
	<option value="Assitant qualité">Assitant qualité</option>
	<option value="Assitant social">Assitant social</option>
	<option value="Salle de reveil">Salle de reveil</option>
	<option value="Secretariat service Vert">Secretariat service Vert</option>
	<option value="Secretariat Bloc">Secretariat Bloc</option>
	<option value="Securité">Securité</option>
	<option value="Surveillance Bloc">Surveillance Bloc</option>
	<option value="Surveillante General">Surveillante General</option>
	<option value="Urgance facturation">Urgance facturation</option>
	<option value="Urgance medecin">Urgance medecin</option>
	<option value="Urgance salle">Urgance salle</option>
	<option value="USC">USC</option>
</select></td>
</tr>
<tr>
<td align="center" colspan ="2"><br>Designation</td>
	<td align="center" colspan ="2"><input type="Text" name="DES"></td>
</tr>
<tr>
<td align="center" colspan ="2"><br>Adresse IP</td>
	<td align="center" colspan ="2"><input type="Text" name="IP"></td>
</tr>
<tr>
<td align="center" colspan ="3"><br><input type="submit" value=" Enregistrer "><br><br></td>
</tr>
</table>
</font>	
<br>
<h3><a href="Afficher_Imp.php"> Afficher toutes les imprimantes</a></h3>


</form><br><br>
</center>
</body>
<a href ="http://132.147.0.100/portail/front"></a> 
</html> 
