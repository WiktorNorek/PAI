<?php
session_start();
?>
<!DOCTYPE html>
    <head>
        <title>sesja4</title>
        <meta charset="utf-8">
    </head>
    <body>
		
        <?php
		echo "Witaj " . $_SESSION["login"] . ".<br>";
		echo "Twoje zaszyfrowane hasło to: " . $_SESSION["haslo"] . ".";
		?>
    </body>
</html>
