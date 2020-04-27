<?php
    $prix_table=150;
	$prix_armoire=50;
	$nombre=10;
	$x=$prix_armoire*$nombre;
	// 2 :
	echo("le prix plus élevé : ");
	if($prix_armoire < $prix_table){
		echo($prix_table);
	}else{
		echo($prix_armoire);
	}
?>