connexion.php<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Authentification</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<form class="box" method="POST" action="verification.php">
		  <h1>connexion</h1>
		  <input type="text" name="username" placeholder="Identifiant">
		  <input type="text" name="password" placeholder="Mot de passe">
		  <input type="submit" value=" Se Connecter " class="text">
		</form>
	</body>
</html>