<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
  $CONNEXION = mysqli_connect('localhost','root','root','pisciculture') or die (mysqli_error());
    
    $username=$_POST['username'];
    $password=$_POST['password'];



    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM authentification where identifiant = '".$username."' and mot_de_passe = '".$password."' ";
        $exec_requete = mysqli_query($CONNEXION,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);

        
        $password= hash($password);
        echo "$password";

        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           /*header("Location: https://www.google.com");*/
        }
        else
        {
           /*header('Location: Connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect*/
        }
    }
    else
    {
       //header('Location: Connexion.php?erreur=2'); // utilisateur ou mot de passe vide//
    }
}
else
{
   //header('Location: Connexion.php');//
}
mysqli_close($db); // fermer la connexion
?>