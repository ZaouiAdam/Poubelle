<?php

$a = array(
 "image/1.png" => "1",
 "image/2.png" => '2',
 "image/3.png" => '3',
 "image/4.png" => '4',
 "image/5.png" => '5',
 "image/6.png" => '6',
 "image/7.png" => '7',
 "image/8.png" => '8',
 "image/9.png" => '9',
 "image/10.png" => '10',
 "image/11.png" => '11',
 "image/12.png" => '12',
 "image/13.png" => '13',
 );

$joueur1 = array_rand($a,2);
$joueur2 = array_rand($a,2);

$i;


/****************************************************/

if($a[$joueur1[0]]>$a[$joueur2[0]]){
	$j1++;
	echo "<center>Gagnant : Joueur 1<center>";
	echo "<br><br><br><br><br>";
	echo "Joueur 1 : ","<br>";
	echo "Joueur 2 : ";
}
if($a[$joueur1[0]]<$a[$joueur2[0]]){
	echo "<center>Gagnant : Joueur 2<center>";
	echo "<br><br><br><br><br>";
	echo "Joueur 1 : ","<br>";
	echo "Joueur 2 : ";
}

if($a[$joueur1[0]]==$a[$joueur2[0]]){
	echo "<center>Gagnant : Egaliter<center>";
	echo "<br><br><br><br><br>";
	echo "Joueur 1 : ",$j1,"<br>";
	echo "Joueur 2 : ",$j2;
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Carte</title>
    <style>
        #bouton{
			font-size: 40px;
            width: 180px;
            margin-top: 300px;
            font-family: Arial;
        }
    </style>
</head>
<body>
    <form action="Page.php?j1=<?php echo $j1; ?>&j2=<?php echo $j2; ?>" method="post">
    <?php
        for($i=0;$i<1;$i++){
            echo"<p style=\"float: left;\"><img src=\"$joueur1[$i]\" width=\"200\" height=\"300\"></p>";
            echo"<p style=\"float: right;\"><img src=\"$joueur2[$i]\" width=\"200\" height=\"300\"></p>";
	
        }
        ?>
        <center>
		<script src="jquery.js"></script>
		<script>
			$(function () {
				$
			});
		</script>
            <input type="submit" name="test" id="bouton" value="Parier" />
            <br />
        </center>
    </form>


</body>
</html>