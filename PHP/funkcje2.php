<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
	</head>
	
	<body>
		<form action="./funkcje2.php" method="POST">
			<input type="text" value="Imie" name="Imie"><br><br>
			<input type="text" value="Nazwisko" name="Nazwisko"><br><br>
			M <input type="radio" name="plec" value="m"><br>
			K <input type="radio" name="plec" value="k"><br><br>			
			<input type="submit" value="Wyślij"><br><br>
		</form>
		
		<?php
		
		if(isset($_POST['Imie'])){
				$Imi = $_POST['Imie'];}
		
		if(isset($_POST['Nazwisko'])){
				$Naz = $_POST['Nazwisko'];}
		
		
		if(isset($_POST['plec'])){
                if($_POST['plec'] == 'm') echo "Witam Pana ",$Imi," ",$Naz, "<br>";
		elseif($_POST['plec'] == 'k') echo "Witam Panią ",$Imi," ",$Naz, "<br>";}
		?>
	</body>
