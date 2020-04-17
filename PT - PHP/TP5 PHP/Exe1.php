//Exercice1 :---------------------------------------------------------------------
<?php
     $dty = date('d/m/Y');
	 $dts = date('h:i:s');
	 print("Nous sommes le :" . $dty . "<br>il est " . $dts . "<br>Merci");
?>
<br>
//Exercice2 :---------------------------------------------------------------------
<?php
     function PHP($tab){
		 for($a=0;$a<=count($tab);$a++){
			 if($tab[$a]<0){
				 $x++;
			 }else{
				 $y++;
			 }
		 }
		 if($x=$y){
			 $k = 0;
		 }else{
			 if($x<$y){
				 $k =  1;
			 }else{
				 $k = -1;
			 }
		 }
		 return $k;
	 }
?>

