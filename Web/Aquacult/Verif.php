<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
  $CONNEXION = mysqli_connect('localhost','root','','connexion_aquaculture') or die (mysqli_error());
    
    $username=$_POST['username'];
    $password=$_POST['password'];

    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM ident where nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
        $exec_requete = mysqli_query($CONNEXION,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header("Location: accueil.php?"$_SESSION['username']"");
        }
        else
        {
           header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: connexion.php');
}
mysqli_close($db); // fermer la connexion
?>