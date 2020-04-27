<?php
     $dty = date('d/m/Y');
	 $dts = date('h:i:s');
	 print("Nous sommes le :" . $dty . "<br>il est " . $dts . "<br>Merci");
?>
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
<?php
     function conversaion(array $e){
	       for($a=0;$a<=count($tabl);$a++){
		     $tabl[$a]=$tabl[$a]*(1/10);
	       }
		 }
     $tabl=array(0=>100 , 1=>14 , 2=>10 ,3=>45, 4=>8 );
	 conversaion($tabl);
	 for($a=0;$a<=count($tabl);$a++){
		 echo($a .' '. $tabl[$a] . "$ <br>");
	 }		 
?>