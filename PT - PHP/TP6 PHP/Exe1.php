<?php

$connexion = array();
$connexion['hostname'] = 'localhost';         // voir hébergeur ou "localhost" en local
$connexion['database'] = 'adherent';     // nom de la BdD
$connexion['username'] = 'root';         // identifiant "root" en local
$connexion['password'] = '';             // mot de passe (vide en local)

mysql_connect($host, $user, $password) or die("erreur de connexion au serveur");

mysql_select_db($bdd) or die("erreur de connexion a la base de donnees");


// --------------------------------------------------------------
// connexion à la base de données

 function verif_membres($login, $mdp)   //ici on déclare une fonction qui verifie que le qui recherche dans la bdd le mot de passe et email correspondant
{
        $req = "SELECT login,mdp FROM admin where login='$login' and mdp='$mdp'";
        $c = mysql_query($req);
        //print(mysql_error() . $req);


}


 if(isset($_POST['connexion']))
 {
        $login = trim($_POST['login']);
        $mdp=md5($_POST['mdp']);      
        $donnees = verif_membres($login, $mdp);
        while($personne = mysql_fetch_array($donnees))
        {
                print $personne['mdp'] . $personne['login'];  
                print_r($personne);   
                echo 'ok';
                        if($mdp == $personne['mdp'] && $email==$personne['login'])
                        {
                        $donnees_du_membre = charge_membres($email);          
                                while($info = mysql_fetch_array($donnees_du_membre))                          
                                        {                                     
                                                $_SESSION['membres']['prenom'] = $info['prenom'];     
           
                                        }
                      
                        header("Location:idmin.php?msg=ok");
                      
                        }     
                        else         
                        {
                        header("Location:index.php?msg=nopass");
                        echo 'no';
                        }
        }
}



?>
