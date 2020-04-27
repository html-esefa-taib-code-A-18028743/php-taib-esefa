function connexion(){
    $link=mysql_connect("localhost", "login","") or die(mysql_error());
    mysql_select_db("DB_MGF",$link) or die(mysql_error());
    $log=$_POST[’nom’];$password=$_POST[’pass’];
    $resultat=mysql_query("SELECT * FROM utilisateurs WHERE login=’$log’");
    if (mysql_affected_rows($link)==0)
    echo "mauvais login<br />";
    else{
    $ligne=mysql_fetch_assoc($resultat);
    if ($_POST[’pass’]==$ligne[’password’]){
    $_SESSION[’login’]=$_POST["nom"];
    header("location : ".$_SERVER[’PHP_SELF’]);
    echo "Bonjour, monsieur ".$_POST["nom"];
}
}
}

