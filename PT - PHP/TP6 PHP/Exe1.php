function connexion(){
    $base = mysql_connect ('localhost', 'root', '');  
    mysql_select_db ('DB_MGF', $base) ;
}
