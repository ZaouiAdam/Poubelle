<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>INSCRIPTION</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<form class="box" method="POST" action="Validation.php">
		<h1>Inscription</h1>
		<input type="text" name="NOM" placeholder="Nom">
		<input type="text" name="PRE" placeholder="Prénom">
		<input type="text" name="ID" placeholder="Identifiant">
		<input type="password" name="MDP" placeholder="Mot de passe">
		<select name="FON" class="text">
			<option value="Admin">Admin</option>
			<option value="Utilisateur">Utilisateur</option>
			<option value="Public">Public</option>
		</select>
		<input type="submit" value=" S'inscrire " class="text">
	</form>
	</body>
</html>
