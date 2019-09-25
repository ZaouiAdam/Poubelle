<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="connexion.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Identifiant</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                <br>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <input type="submit" id='submit' value='Se connecter' >
                <?php
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1)
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                        if($err==2)
                            echo "<p style='color:red'>Utilisateur ou mot de passe est vide</p>";
                    }
                ?>
            </form>
        </div>
    </body>
</html>