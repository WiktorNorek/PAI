<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
	
	<form action="tablice-formularz.php" method="POST">
	Tekst<input type="text" name="tekst" />
	dodaj <input type="submit" />
	usuń <input type="submit" name="usun2" />
	</form>
	<br>

	<form action="tablice-formularz.php" method="POST">
	Liczby<input type="number" name="liczby" />
	dodaj <input type="submit" />
	usuń <input type="submit" name="usun1" />
	</form>
		
		
        <?php
		$tablical = array(3, 6, 8, 10);
		
		echo "<br>", "<br>";
		if(isset($_POST['liczby'])){
			array_push($tablical, $_POST['liczby']);
			print_r($tablical);
			echo "<br>", "<br>";}
		
		if(isset($_POST["usun1"])) {
			$fruit = array_pop($tablical);
			print_r($tablical);}
		
		
		$tablicat = array("ala ", "ma ", "kota ", "a ", "kot ", "ma ", "ale ");
		if(isset($_POST['tekst'])){
			array_push($tablicat, $_POST['tekst']);
			print_r($tablicat);
			echo "<br>", "<br>";}
			
				if(isset($_POST["usun2"])) {
			$fruits = array_pop($tablicat);
			print_r($tablicat);}
		?>
    </body>
</html>
