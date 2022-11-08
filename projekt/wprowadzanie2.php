<?php
$hostname = 'localhost'; // Nazwa hosta
$database = 'testowanie'; // Nazwa bazy danych
$username = 'root'; // Nazwa użtytkownika
$password = ''; // Hasło
$conn = mysqli_connect($hostname, $username, $password, $database);
?>

<!DOCTYPE html>
    <head>
        <title>projekt2</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
			
			$query = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby 
			INNER JOIN lowisko ON lowisko.ryby_id = ryby.id 
			WHERE lowisko.rodzaj = 3;";
			$result = mysqli_query($conn, $query);

			while($row = mysqli_fetch_row($result)){
			echo $row[0]. ' '. $row[1]. ' '. $row[2]."<br>";}
			echo "<br><br>";
			$john = "SELECT id, nazwa, wystepowanie FROM `ryby` WHERE styl_zycia = 1;";
			$abc = mysqli_query($conn, $john);

			while($row = mysqli_fetch_row($abc)){
			echo $row[0]. ' '. $row[1]. ' '. $row[2]."<br>";}
		?>
    </body>
</html>
