<?php
     $nbre=6;
	 $x=0;
	 for($n=0;$n<=$nbre;$n++){
		 $x=$x+$n;
	 }
	 echo("FOR :la somme de 1 à ". $nbre ." est : " . $x);
?>
<hr>
<?php 
     $nbre=6;
	 $x=0;
	 $n=0;
	 while($n <= $nbre ){
		   $x=$x+$n;
		 $n++;
	 }
	 echo("WHILE :la somme de 1 à " . $nbre . " est : " . $x);  
?>
<hr>
<?php
     $x=8;
	 $y=0;
	 $a=0;
     for($n=0;$n<=10;$n++){ 
		     $y=$a*$x;
		 echo($a . "*" . $x . "=" .$y);
		 echo "<br>";
		 $a++;
	 }
?>