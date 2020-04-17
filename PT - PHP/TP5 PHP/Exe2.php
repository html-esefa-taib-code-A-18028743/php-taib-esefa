//Exercice1 :------------------------------------------------------------------
<html>
  <head>
      <title>Exe1</title>
	  <style>
	    
	  </style>
  </head>
  <body>
	
	<form method="post" >
	   <div>
	      <h1 style="color:navy;margin:auto;text-aling:center">Write File Form</h1>
		  <label for="nom" >Nom </label><input type="text" id="nom" name="nom" ><br>
		  <label for="prenom" >Prenom </label><input type="text" id="prenom" name="prenom"><br>
		  <label for="age" >Age </label>
		        <select for="age">
				    <option id="age" name="age" >19</option>
					<option id="age" name="age" >20</option>
					<option id="age" name="age" >30</option>
					<option id="age" name="age" >45</option>
				</select><br>
		  <label for="chk1" >Sexe </label>
		       <input type="radio" id="chk1" name="chk1" value="Mademoiselle"/>Masculin
		       <input type="radio" name="chk1" value="Madame" /> Feminin<br>
		  <label for="email" >Email </label><input type="text" id="email" name="email"><br>
		  <label for="tel" >Tel </label><input type="text" id="tel" name="tel"><br>
		  <label for="edresse" >Edresse </label><textarea id="edresse" name="edresse" ></textarea><br>
		  <button>Envoyer</button><button>Annuler</button>
	   </div>
	</form>
	<?php 
	    echo '<hr>';
		if($_SERVER['REQUEST_METHOD']=="POST"){
        ECHO $_SERVER['REQUEST_METHOD'];
		ECHO $_POST['nom']."<br>";
		ECHO $_POST['prenom']."<br>";
		ECHO $_POST['age']."<br>";
		ECHO $_POST['chk1']."<br>";
		ECHO $_POST['email']."<br>";
		ECHO $_POST['tel']."<br>";
		ECHO $_POST['edresse']."<hr>";
		}
	?>
  </body>
</html>
