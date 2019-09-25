<html>
<head>
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
body {
color:black;
background-color:white;
background-image:url(images/iconeimp.png);
}
</style>
<title>Enregistrement d'Imprimante</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<center>
<br>
<img src="./Image/iconeimp.png" ><br><br>
<h2><label style="arial; color:#6495ed;"> Modification d'Imprimantes : </label></h2>
<br>
<FONT face="Berlin Sans FB">
<?php

$i=0;

$URL = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

do{	
	$D = substr($URL, $i, 2);
	$i--;
}while( $D != "d=" );

$i = $i + 3;

$D = substr($URL, $i, 100);


?>
<form method="POST" action="Validation_Modif.php?<?php echo $D; ?>">
<table>


<?php 
{/*******************************************/
$j=0;
$VR=0;


$URL = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

do{	
	$DNS = substr($URL, $j, 1);
	$j++;
}while( $DNS != "=" );

$DNS = substr($URL, $j, 1);
$v=$j;

do{	
	$VR = substr($URL, $j, 1);
	$j++;
}while( $VR != "?" );

$vr = $j;
$j = $j - 2;
$j = ++$j - $v;

$DNS = substr($URL, $v, $j);

}
{/*******************************************/
$j = $vr;
do{	
	$EQ = substr($URL, $vr, 1);
	$vr++;
}while( $EQ != "=" );

$EQ = substr($URL, $j, 1);

$v=$j;

do{	
	$VR = substr($URL, $j, 1);
	$j++;
}while( $VR != "?" );


$vr = $j;
$j = $j - 2;
$v = $v + 3;
$j = ++$j - $v;

$EQ = substr($URL, $v, $j);
}
{/*******************************************/
$j = $vr;

do{	
	$BI = substr($URL, $vr, 1);
	
	$vr++;
}while( $BI != "=" );

$BI = substr($URL, $j, 1);

$v=$j;

do{	
	$VR = substr($URL, $j, 1);
	$j++;
}while( $VR != "?" );

$vr = $j;
$j = $j - 2;
$v = $v + 5;
$j = ++$j - $v;

$BI = substr($URL, $v, $j);
}
{/*******************************************/
$j = $vr;
do{	
	$BAT = substr($URL, $vr, 1);
	
	$vr++;
}while( $BAT != "=" );

$BAT = substr($URL, $j, 1);

$v=$j;

do{	
	$VR = substr($URL, $j, 1);
	$j++;
}while( $VR != "?" );


$vr = $j;
$j = $j - 2;
$v = $v + 4;
$j = ++$j - $v;

$BAT = substr($URL, $v, $j);
}
{/*******************************************/
$j = $vr;
do{	
	$SER = substr($URL, $vr, 1);
	
	$vr++;
}while( $SER != "=" );

$SER = substr($URL, $j, 1);

$v=$j;

do{	
	$VR = substr($URL, $j, 1);
	$j++;
}while( $VR != "?" );


$vr = $j;
$j = $j - 2;
$v = $v + 4;
$j = ++$j - $v;

$SER = substr($URL, $v, $j);}
{/*******************************************/
$j = $vr;
do{	
	$DES = substr($URL, $vr, 1);
	
	$vr++;
}while( $DES != "=" );

$DES = substr($URL, $j, 1);

$v=$j;

do{	
	$VR = substr($URL, $j, 1);
	$j++;
}while( $VR != "?" );


$vr = $j;
$j = $j - 2;
$v = $v + 4;
$j = ++$j - $v;

$DES = substr($URL, $v, $j);}
{/*******************************************/
$j = $vr;
do{	
	$IP = substr($URL, $vr, 1);
	$vr++;
}while( $IP != "=" );

$IP = substr($URL, $j, 1);

$v=$j;

do{	
	$VR = substr($URL, $j, 1);
	$j++;
}while( $VR != "?" );


$vr = $j;
$j = $j - 2;
$v = $v + 3;
$j = ++$j - $v;

$IP = substr($URL, $v, $j);}
?>

<tr>
<td align="center" colspan ="2" style="arial; color:#005B59;">Nom DNS</td>
	<td align="center" colspan ="2"><input type="Text" name="DNS" value="<?php echo "$DNS";?>" class="text"></td>
</tr>
<tr>
<td align="center" colspan ="2" style="arial; color:#005B59;">Equipement</td>
	<td align="center" colspan ="2"><input type="Text" name="EQUIP" value="<?php echo "$EQ";?>" class="text"></td>
</tr>
<tr>
<td align="center" colspan ="2" style="arial; color:#005B59;">Nom BIOS</td>
	<td align="center" colspan ="2"><input type="Text" name="BIOS" value="<?php echo "$BI";?>" class="text"></td>
</tr>
<tr>
<td align="center" colspan ="2" style="arial; color:#005B59;">Batiment</td>
	<td align="center" colspan ="2"><select name="BAT" onchange="updated(this)" value="<?php echo "$BAT";?>" class="text">
	<option value="<?php echo "$BAT";?>"><?php echo "$BAT";?></option>
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
<td align="center" colspan ="2" style="arial; color:#005B59;">Service</td>
	<td align="center" colspan ="2"><select name="SER" onchange="updated(this)" class="text">
	<option value="<?php echo "$SER";?>"><?php echo "$SER";?></option>
	<option value="Autre">Autre</option>
	<option value="Accueil_Ambulatoire">Accueil_Ambulatoire</option>
    <option value="Ambulance_sercretariat">Ambulance_sercretariat</option>
    <option value="Comptabilité">Comptabilité</option>
	<option value="Facturation">Facturation</option>
	<option value="Salle_de_reveil">Salle_de_reveil</option>
	<option value="Accueil_CAK">Accueil_CAK</option>
	<option value="Bureau_0">Bureau_0</option>
	<option value="Bureau_A">Bureau_A</option>
	<option value="Bureau_B">Bureau_B</option>
	<option value="Bureau_C">Bureau_C</option>
	<option value="Bureau_D">Bureau_D</option>
	<option value="Bureau_E">Bureau_E</option>
	<option value="Bureau_F">Bureau_F</option>
	<option value="Bureau_G">Bureau_G</option>
	<option value="Bureau_H">Bureau_H</option>
	<option value="Bureau_I">Bureau_I</option>
	<option value="Bureau_sureveillance">Bureau_sureveillance</option>
	<option value="AUTODIALYSE">AUTODIALYSE</option>
	<option value="Bureau_Vacant">Bureau_Vacant</option>
	<option value="PMSI">PMSI</option>
	<option value="Chimio">Chimio</option>
	<option value="Chimio_pharmacien">Chimio_pharmacien</option>
	<option value="Assistante_de_direction">Assistante_de_direction</option>
	<option value="Bureau_juriste">Bureau_juriste</option>
	<option value="Directeur_d'administration">Directeur_d'administration</option>
	<option value="Gynécologue">Gynécologue</option>
	<option value="Mme_Maitre">Mme_Maitre</option>
	<option value="Bureau_IDE">Bureau_IDE</option>
	<option value="Admission_Etage">Admission_Etage</option>
	<option value="Salle_de_naissance">Salle_de_naissance</option>
	<option value="Secretariat_service Bleu">Secretariat_service_Bleu</option>
	<option value="Secretariat_maternité">Secretariat_maternité</option>
	<option value="Biomedical">Biomedical</option>
	<option value="Pharmacie">Pharmacie</option>
	<option value="Ressource_humaine">Ressource_humaine</option>
	<option value="Secretariat_soins_de_suite">Secretariat_soins_de_suite</option>
	<option value="Accueil_HPNP">Accueil_HPNP</option>
	<option value="Accueil_urgence">Accueil_urgence</option>
	<option value="Admission_RDC">Admission_RDC</option>
	<option value="Assitant_qualité">Assitant_qualité</option>
	<option value="Assitant_social">Assitant_social</option>
	<option value="Salle_de_reveil">Salle_de_reveil</option>
	<option value="Secretariat_service Vert">Secretariat_service_Vert</option>
	<option value="Secretariat_Bloc">Secretariat_Bloc</option>
	<option value="Securité">Securité</option>
	<option value="Surveillance_Bloc">Surveillance_Bloc</option>
	<option value="Surveillante_General">Surveillante_General</option>
	<option value="Urgance_facturation">Urgance_facturation</option>
	<option value="Urgance_medecin">Urgance_medecin</option>
	<option value="Urgance_salle">Urgance_salle</option>
	<option value="USC">USC</option>
</select></td>
</tr>
<tr>
<td align="center" colspan ="2" style="arial; color:#005B59;">Designation</td>
	<td align="center" colspan ="2"><input type="Text" name="DES" value="<?php echo "$DES";?>" class="text"></td>
</tr>
<tr>
<td align="center" colspan ="2" style="arial; color:#005B59;">Adresse IP</td>
	<td align="center" colspan ="2"><input type="Text" name="IP" value="<?php echo "$IP";?>" class="text"></td>
</tr>
<table>
<tr>
<td align="center" colspan ="3"><br><input type="submit" value=" Enregistrer " class="text"><br><br></td>
</tr>
</table>
</table>
</font>	
<br>
<h3><a href="Tableau.php"> Afficher toutes les imprimantes</a></h3>
<br>
<h3><a href="http://132.147.0.100/portail/front"><img src="./Image/bouton_retour_accueil.gif"></a></h3>
</form><br><br>
</center>
</body> 
</html> 