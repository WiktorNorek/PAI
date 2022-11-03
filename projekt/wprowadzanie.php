<?php
$hostname = 'localhost'; // Nazwa hosta
$database = 'projekt'; // Nazwa bazy danych
$username = 'root'; // Nazwa użtytkownika
$password = ''; // Hasło
$conn = new mysqli($hostname, $username, $password, $database);
?>

<!DOCTYPE html>
    <head>
        <title>projekt1</title>
        <meta charset="utf-8">
    </head>
    <body>
	<form action="wprowadzanie.php" method="POST">
	Login<input type="text" name="tekst" />
	Hasło <input type="password" name="haslo"/>
	<input type="submit" name="sumb" />
	</form>
	<br>
        <?php
		if(isset($_POST['tekst']) && isset($_POST['haslo'])){
			$log = $_POST['tekst'];
			$has = $_POST['haslo'];
			$sql = "INSERT INTO `users` (`login`, `haslo`)
			VALUES ('$log', '$has')";
			
			if($result = $conn -> query($sql)) echo "Dodano nowy rekord";
else echo "Nie udało się dodać nowego rekordu";
			}
		?>
    </body>
</html>
